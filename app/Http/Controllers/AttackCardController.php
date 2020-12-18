<?php
    namespace App\Http\Controllers;

    use App\Models\AttackCard;


    class AttackCardController extends Controller
    {
        public function index()
        {
            $attack_cards = AttackCard::all();
            return view('game', ["attacks"=>$attack_cards]);
        }
    }