<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index() {
            $tes=(object)[
                "text1" =>"Blended to Perfection",
                "text2" =>"Coffees &  Teasn",
                "photo1"=> "products-01.jpg",
                "p1"=> "We take pride in our work, and it shows. Every time you order a beverage from us, we
                guarantee that it will be an experience worth having. Whether it's our world famous Venezuelan
                Cappuccino, a refreshing iced herbal tea, or something as simple as a cup of speciality sourced
                black coffee, you will be coming back for more."
            ];
            $tes2 =(object)[
                "test1"=>"Delicious Treats, Good Eats",
                "test2"=>"Bakery & Kitchen",
                "photo2"=> "products-02.jpg",
                "test3" =>"Our seasonal menu features delicious snacks, baked goods, and even full meals
                perfect for breakfast or lunchtime. We source our ingredients from local, oragnic farms whenever
                possible, alongside premium vendors for specialty goods."
            ];
            $tes3 =(object)[
                "text1"=>"From Around the World",
                "text2"=> "Bulk Speciality Blends",
                "photo3"=> "products-03.jpg",
                "p2"=>"Travelling the world for the very best quality coffee is something take pride in.
                When you visit us, you'll alwaica. We sell our blends in smaller to large bulk quantities. Please visit
                us in person for more detailsys find new blends from around the world, mainly from regions in
                Central and South Amer."

            ];
        return view('pages.products', compact('tes','tes2', 'tes3'));
    }
}
