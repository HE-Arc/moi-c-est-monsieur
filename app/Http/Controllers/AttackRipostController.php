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
            $cards = $request->cards;
            $rounds = $request->rounds;

            $associations = AttackRipost::where('attack_id', $attack['id'])->get();

            //TODO: regarder le nombre de valid ripost à récupérer, s'arranger que ce ne soit pas toujours les mêmes
            $valid_ripost = RipostCard::where('id', $associations[0]['ripost_id']);
            $ripost = RipostCard::where('id', '<>' , $associations[0]['ripost_id'])->inRandomOrder()->limit($cards - 1)->union($valid_ripost)->get()->shuffle();
            
            $count = AttackRipost::where('attack_id', $attack['id'])->count();
            $category = Category::where('id', $attack['category_id'])->get();
            

            $attack_ripost = [$attack, $ripost];
            return view('game', ["attack_ripost"=>$attack_ripost, "associations"=>$associations, "count"=>$count, "category"=>$category, "rounds"=>$rounds]);
        }
    }