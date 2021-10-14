<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pageController extends Controller
{
    public function pageHome() {
        return view('home');
    }

    public function pageAbout() {
        return view('about');
    }

    public function pageService() {

        
        $productData = [
            'itemOne' => 'Mobile',
            'itemTwo' => 'Laptop',
            'itemThree' => 'Tv',
            'itemFour' => 'Computer'
        ];

        return view('productService')->with('productData', $productData);
    }

    public function pageContact() {
        return view('contact');
    }

    public function pageTeams() {
        return view('teams');
    }
}
