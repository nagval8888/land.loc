<?php

namespace App\Http\Controllers\Front;

use App\Models\About;
use App\Models\Client;
use App\Models\Home;
use App\Models\Menu;
use App\Models\Portfolio;
use App\Models\Service;
use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function execute(Request $request)
    {
        if ($request->isMethod('post')) {
            $messages = [
                'required' => "Поле :attribute обязательно к заполнению",
                'email'    => "Поле :attribute должно соответствовать email адресу"
            ];
            $this->validate($request,[
                'name'  => 'required|max:255',
                'email' => 'required|email',
                'text'  => 'required'
            ], $messages);

            $data = $request->all();
            Mail::send('landing.front.common.email',['data'=>$data], function($message) use ($data) {
                $mail_admin = env('MAIL_ADMIN');
                $message->from($data['email'],$data['name']);
                $message->to($mail_admin,'Mr. Admin')->subject('Question');
            });
            return redirect()->route('index')->with('status', 'Email is successfully send!');
        }

        $home      = Home::find(1);
        $about     = About::find(1);
        $menu      = Menu::all();
        $portfolio = Portfolio::get(['name', 'filter', 'image']);
        $services  = Service::where('id', '<', 20)->get();
        $team      = Team::take(7)->get();
        $clients   = Client::get(['name', 'image']);
        $tags      = DB::table('portfolios')->distinct()->pluck('filter');

        return view('landing.front.sections.index',[
            'home'      => $home,
            'about'     => $about,
            'menu'      => $menu,
            'services'  => $services,
            'portfolio' => $portfolio,
            'team'      => $team,
            'tags'      => $tags,
            'clients'   => $clients
        ]);
    }
}
