<?php

namespace App\Http\Controllers\Admin;

use App\Models\Portfolio;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $portfolios = Portfolio::all();

        return view('landing.admin.portfolio.sections.index', compact('portfolios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('landing.admin.portfolio.sections.create');
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
            'name'   => 'required|max:200',
            'filter' => 'required|max:100',
            'image'  => 'required|max:100'
        ]);

        $portfolio = new Portfolio();

        $portfolio->name   = $request->name;
        $portfolio->filter = $request->filter;
        $portfolio->image  = $request->image;

        $portfolio->save();

        return redirect(route('portfolio.index'));
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
        $portfolio = Portfolio::where('id', $id)->first();

        return view('landing.admin.portfolio.sections.edit', compact('portfolio'));
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
            'name'   => 'required|max:200',
            'filter' => 'required|max:100',
            'image'  => 'required|max:100'
        ]);

        $portfolio = Portfolio::find($id);

        $portfolio->name   = $request->name;
        $portfolio->filter = $request->filter;
        $portfolio->image  = $request->image;

        $portfolio->save();

        return redirect(route('portfolio.index'));
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
        $currentImg = Portfolio::findOrFail($id);

        // delete the image from public folder
        unlink(public_path($currentImg->image));

        // delete Client from DB
        Portfolio::where('id', $id)->delete();
        return back();
    }
}
