<?php

namespace App\Http\Controllers\Master;

use App\Http\Controllers\Controller;
use App\Models\Master\MDusun;
use Illuminate\Http\Request;

class MDusunController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.master.dusun.index', ['type_menu' => 'master']);
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
     * @param  \App\Models\Master\MDusun  $mDusun
     * @return \Illuminate\Http\Response
     */
    public function show(MDusun $mDusun)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Master\MDusun  $mDusun
     * @return \Illuminate\Http\Response
     */
    public function edit(MDusun $mDusun)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Master\MDusun  $mDusun
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MDusun $mDusun)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Master\MDusun  $mDusun
     * @return \Illuminate\Http\Response
     */
    public function destroy(MDusun $mDusun)
    {
        //
    }
}
