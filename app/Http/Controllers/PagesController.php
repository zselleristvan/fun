<?php

namespace App\Http\Controllers;

use App\Http\Requests;

class PagesController extends Controller
{
    //
    /**
     * @return mixed
     */
    public function index()
    {
        $people = ['Taylor', 'Martin', 'joe'];
        return view('pages.pages', compact('people'));

    }

    public function about()
    {
        return view('pages.about');
    }
}
