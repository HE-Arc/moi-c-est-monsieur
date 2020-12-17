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
            $attack = AttackCard::all()->random();
            $associations = AttackRipost::all();
            $maxvalue = '50';

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

            $associations = AttackRipost::where('attack_id', $attack['id'])->where('value', '<>', 50)->pluck('ripost_id')->toArray();
            //var_dump($associations);
            $association = AttackRipost::where('attack_id', $attack['id'])->where('value', 50)->pluck('ripost_id')->toArray();
            //var_dump($association);
            $valid_ripost = RipostCard::whereIn('id', $association);
            //print_r($valid_ripost->toArray());
            $valid_riposts = RipostCard::whereIn('id', $associations)->inRandomOrder()->limit(2);
            //print_r($valid_riposts->toArray());
            $ripost = RipostCard::whereNotIn('id', $associations)->whereNotIn('id', $association)->inRandomOrder()->limit($cards - 3)->union($valid_riposts)->union($valid_ripost)->get()->shuffle();
            //print_r($ripost);
            $count = AttackRipost::where('attack_id', $attack['id'])->count();
            $category = Category::where('id', $attack['category_id'])->get();
            

            $attack_ripost = [$attack, $ripost];
            $associations = AttackRipost::where('attack_id', $attack['id'])->get();
            return view('game', ["attack_ripost"=>$attack_ripost, "associations"=>$associations, "count"=>$count, "category"=>$category, "rounds"=>$rounds]);
        }
    }