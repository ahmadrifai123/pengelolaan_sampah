<?php

namespace App\Http\Controllers;

use App\Tpp;
use Illuminate\Http\Request;

class TppController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $tpp =Tpp::orderBy('id','desc')->get();
        return view('tpp.index',compact('tpp'));
        //
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
     * @param  \App\Tpp  $tpp
     * @return \Illuminate\Http\Response
     */
    public function show(Tpp $tpp)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Tpp  $tpp
     * @return \Illuminate\Http\Response
     */
    public function edit(Tpp $tpp)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Tpp  $tpp
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tpp $tpp)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Tpp  $tpp
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tpp $tpp)
    {
        //
    }
}
