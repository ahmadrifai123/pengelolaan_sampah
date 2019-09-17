<?php

namespace App\Http\Controllers;

use App\tpa;
use Illuminate\Http\Request;

class TpaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $tpa=Tpa::orderBy('id','desc')->get();
        return view('tpa.index',compact('tpa'));
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
     * @param  \App\tpa  $tpa
     * @return \Illuminate\Http\Response
     */
    public function show(tpa $tpa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\tpa  $tpa
     * @return \Illuminate\Http\Response
     */
    public function edit(tpa $tpa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\tpa  $tpa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, tpa $tpa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\tpa  $tpa
     * @return \Illuminate\Http\Response
     */
    public function destroy(tpa $tpa)
    {
        //
    }
}
