<?php

namespace App\Http\Controllers\Admin;

use App\Models\Team;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teams = Team::all();

        return view('landing.admin.team.sections.index', compact('teams'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('landing.admin.team.sections.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //return $request->all();
        $this->validate($request, [
            'name'     => 'required|max:255',
            'position' => 'required|max:150',
            'image'    => 'required|max:100',
            'text'     => 'required'
        ]);

        $team = new Team();

        $team->name     = $request->name;
        $team->position = $request->position;
        $team->image    = $request->image;
        $team->text     = $request->text;

        $team->save();

        return redirect(route('team.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id){}

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $team = Team::where('id', $id)->first();

        return view('landing.admin.team.sections.edit', compact('team'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //return $request->all();
        $this->validate($request, [
            'name'     => 'required|max:255',
            'position' => 'required|max:150',
            'image'    => 'required|max:100',
            'text'     => 'required'
        ]);

        $team = Team::find($id);

        $team->name     = $request->name;
        $team->position = $request->position;
        $team->image    = $request->image;
        $team->text     = $request->text;

        $team->save();

        return redirect(route('team.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // load the gallery
        $currentImg = Team::findOrFail($id);

        // delete the image from public folder
        unlink(public_path($currentImg->image));

        // delete Client from DB
        Team::where('id', $id)->delete();
        return back();
    }
}
