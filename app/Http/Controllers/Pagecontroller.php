<?php
namespace App\Http\Controllers;

class Pagecontroller extends Controller
{

    public function home()
    {
        return view('welcome');
    }

    public function menu()
    {

        return view('menu');

    }

    public function reservations(){
        return view('reservations');
    }

    public function offers(){
        return view('offers');
    }

    public function about(){
        return view('about');
    }

    public function contact(){
        return view('contact');
    }

     public function account(){
        return view('account');
    }

    public function details(){
        return view('details');
    }
      public function bag(){
        return view('bag');
    }
}
