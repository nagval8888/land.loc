<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    /*public function __construct()
    {
        $this->middleware('auth:user'); // for guard of user
    }*/

    public function index()
    {
        return view('landing.admin.index.section');
    }
}
