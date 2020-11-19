<?php
    namespace App\Http\Controllers;

    use App\Models\AttackRipost;
    use App\Models\AttackCard;
    use App\Models\RipostCard;


    class AttackRipostController extends Controller
    {
        public function index()
        {
            $attack = AttackCard::all()->random();
            $ripost = RipostCard::all();
            $attack_ripost = [$attack, $ripost];
            return view('game', ["attack_ripost"=>$attack_ripost]);
        }
    }