<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index(){
        $wel=(object)[
                "img"=>"intro.jpg",
                "sp1"=>"Fresh Coffee",
                "sp2"=>"Worth Drinking",
                "p1"=>"Every cup of our quality artisan coffee starts with locally sourced, hand picked
                ingredients. Once you try it, our coffee will be a blissful addition to your everyday morning
                routine - we guarantee it!",
                "a"=>"Visit Us Today!",
                "sp4"=>"Our Promise",
                "sp5"=>"To You",
                "p"=>"When you walk into our shop to start your day, we are dedicated to providing you
                with friendly service, a welcoming atmosphere, and above all else, excellent products made with
                the highest quality ingredients. If you are not satisfied, please let us know and we will do
                whatever we can to make things right!"
            ];
            $nav =(object)[
                "spa1"=> "A Free Bootstrap 4 Business Theme",
                "spa2"=> "Business Casual",
                "a1"=>"Start Bootstrap",
                "a2"=>"Home",
                "a3"=> "About",
                "a4"=> "Products",
                "a5"=>"Store"
            ];
        return view('Welcome', compact('wel', "nav"));
    }
}
