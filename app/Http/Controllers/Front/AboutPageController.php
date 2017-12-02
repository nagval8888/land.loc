<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\About;

class AboutPageController extends Controller
{
    public function index()
    {
        $about = About::find(1);

        return view('landing.front.sections.about', compact('about'));
    }
}
