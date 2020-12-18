<?php
    namespace App\Http\Controllers;

    use App\Models\RipostCard;


    class RipostCardController extends Controller
    {
        public function index()
        {
            $ripost_cards = RipostCard::all();
            return view('game', ["riposts"=>$ripost_cards]);
        }
    }