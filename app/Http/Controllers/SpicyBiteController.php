<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SpicyBiteController extends Controller
{
    public function index()
    {
        return view('front-end.home.home');
    }

    public function about()
    {
        return view('front-end.about.about');
    }

    public function menu()
    {
        return view('front-end.menu.menu');
    }

    public function chefs()
    {
        return view('front-end.chefs.chefs');
    }

    public function contactUs()
    {
        return view('front-end.contact-us.contact-us');
    }

    public function specialDish()
    {
        return view('front-end.special-dish.special-dish');
    }
    public function reservation(){
        return view('front-end.reservation.reservation');
}
}