<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\admin\marketer;
use Illuminate\Http\Request;

class dashMarketerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("dashboard.marketer.index");
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("dashboard.marketer.add");
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
     * @param  \App\Models\admin\marketer  $marketer
     * @return \Illuminate\Http\Response
     */
    public function show(marketer $marketer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\admin\marketer  $marketer
     * @return \Illuminate\Http\Response
     */
    public function edit(marketer $marketer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\admin\marketer  $marketer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, marketer $marketer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\admin\marketer  $marketer
     * @return \Illuminate\Http\Response
     */
    public function destroy(marketer $marketer)
    {
        //
    }
}
