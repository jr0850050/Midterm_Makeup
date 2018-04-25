<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\guitarsModel;

class guitarsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $guitars = guitars::all();

        return view('guitars.index', compact('guitars'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('guitars.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /* $this->validate($request, [
            'type' => 'required',
            'title' => 'required',
        ]); */

       $guitars = guitars::Create($request->all());

       return redirect('/guitars/', $guitars->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(guitars $guitars)
    {
        return view('guitars.show', compact('guitars'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(guitars $guitars)
    {
        return view('guitars.edit', compact('guitars'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, guitars $guitars)
    {
        $guitars->update($request->all());

        return redirect('/guitars/', $guitars->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $guitars->delete();

        return redirect ('/guitars/');
    }
}