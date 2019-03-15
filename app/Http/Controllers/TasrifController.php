<?php

namespace App\Http\Controllers;

use App\Tasrif;
use Illuminate\Http\Request;

class TasrifController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('tasrif.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Tasrif  $tasrif
     * @return \Illuminate\Http\Response
     */
    public function show(Tasrif $tasrif)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Tasrif  $tasrif
     * @return \Illuminate\Http\Response
     */
    public function edit(Tasrif $tasrif)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Tasrif  $tasrif
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tasrif $tasrif)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Tasrif  $tasrif
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tasrif $tasrif)
    {
        //
    }
}
