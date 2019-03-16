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
        $tasrifs = Tasrif::all();

        return view('tasrif.index', ['tasrifs' => $tasrifs]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tasrif.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $new_tasrif = new Tasrif;
        $new_tasrif->arti   = $request->get('arti'); 
        $new_tasrif->madi   = $request->get('madi'); 
        $new_tasrif->mudhori= $request->get('mudhori');    
        $new_tasrif->masdar = $request->get('masdar');   
        $new_tasrif->sifat  = $request->get('sifat');  
        $new_tasrif->amr    = $request->get('amr');
        $new_tasrif->bab    = $request->get('bab');

        $new_tasrif->save();

        return redirect()->back()->with('status', 'sudah ditambahkan');
    
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
