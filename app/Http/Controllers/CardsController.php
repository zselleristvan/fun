<?php

namespace App\Http\Controllers;

use App\Card;
use App\Http\Requests;

class CardsController extends Controller
{
    //

    /**
     * CardsController constructor.
     */
    public function __construct()
    {
    }

    public function index()
    {
//       $cards= DB::table('cards')->get();
        $cards = Card::all();
        return view('pages.cards', compact('cards'));
    }

    public function show(Card $card)
    {
//        $card=Card::find($id);
        return view('pages.showcards', compact('card'));
    }
}
