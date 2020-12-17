<?php
    namespace App\Http\Controllers;

    use App\Models\AttackRipost;
    use App\Models\AttackCard;
    use App\Models\RipostCard;
    use App\Models\Category;
    use Illuminate\Http\Request;


    class AttackRipostController extends Controller
    {
        public function index(Request $request)
        {
            //First database requests
            $attack = AttackCard::all()->random();
            $associations = AttackRipost::all();
            $maxvalue = '50';

            //Verification of the home page's inputs. If they are incorrect, default values.
            if($request->filled('rounds') && $request->rounds <= 15 && $request->rounds >= 5) {
                $rounds = $request->rounds;
            } else {
                $rounds = 10;
            }
            if($request->filled('cards') && $request->cards <= 8 && $request->rounds >= 5) {
                $cards = $request->cards;
            } else {
                $cards = 5;
            }

            //Database request, the best answer is taken, then 2 valid answers, then as many wrong answers as needed to match the desired set number of cards.
            $associations = AttackRipost::where('attack_id', $attack['id'])->where('value', '<>', 50)->pluck('ripost_id')->toArray();
            $association = AttackRipost::where('attack_id', $attack['id'])->where('value', 50)->pluck('ripost_id')->toArray();
            $valid_ripost = RipostCard::whereIn('id', $association);
            $valid_riposts = RipostCard::whereIn('id', $associations)->inRandomOrder()->limit(2);
            $ripost = RipostCard::whereNotIn('id', $associations)->whereNotIn('id', $association)->inRandomOrder()->limit($cards - 3)->union($valid_riposts)->union($valid_ripost)->get()->shuffle();
            $count = AttackRipost::where('attack_id', $attack['id'])->count();
            $category = Category::where('id', $attack['category_id'])->get();
            
            //redirects to the game with the requested parameters.
            $attack_ripost = [$attack, $ripost];
            $associations = AttackRipost::where('attack_id', $attack['id'])->get();
            return view('game', ["attack_ripost"=>$attack_ripost, "associations"=>$associations, "count"=>$count, "category"=>$category, "rounds"=>$rounds]);
        }
    }