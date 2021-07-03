<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function index() {
        $heure= (object)[
            "sp1"=> "Come On In",
            "sp2"=> "We're Open"

        ];
        $tim = (object)[
            "li1"=>"Sunday",
            "sp3"=>"Closed ",
            "li2"=>"Monday",
            "sp4"=>"7:00 AM to 8:00 PM",
            "li4"=>" Tuesday",
            "sp5"=>"7:00 AM to 8:00 PM",
            "li5"=>"Wednesday",
            "sp6"=>"7:00 AM to 8:00 PM",
            "li6"=>"Thursday",
            "sp7"=>"9:00 AM to 5:00 PM",
            "li7"=>"Friday",
            "li8"=>"Satarday",
            "p1"=> "1116 Orchard Street",
            "p2"=>"Golden Valley, Minnesota",
            "p3"=>"Call Anytime",
            "p4"=> "(317) 585-8468",
            "image"=>"about.jpg",
            "sp8"=> "Strong Coffee, Strong Root",
            "sp9"=> "About Our Cafe",
            "p3"=>"Founded in 1987 by the Hernandez brothers, our establishment has been serving up rich coffee
            sourced from artisan farmers in various regions of South and Central America. We are
            dedicated to travelling the world, finding the best coffee, and bringing back to you here in
            our cafe",
            "p4"=> "We guarantee that you will fall in",
            "p5"=> "lust",
            "p6"=>" with our decadent blends the moment you walk inside until you finish your last sip. Join us
            for your daily routine, an outing with friends, or simply just to enjoy some alone time."

        ];
        return view('pages.store',compact('heure','tim'));
    }
}
