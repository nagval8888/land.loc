<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Home;

class HomePageController extends Controller
{
    public function index()
    {
        $home = Home::find(1);

        return view('landing.front.sections.home', compact('home'));
    }
}
