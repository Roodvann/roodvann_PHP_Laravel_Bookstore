<?php

namespace App\Http\Controllers;

use App\Http\Requests\NewspaperRequest;
use App\Newspaper;
use Illuminate\Http\Request;
//use phpDocumentor\Reflection\DocBlock\Tags\Var_;

class NewspaperController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $newspaper = Newspaper::all();
        return view('newspaper.index', ['newspapers' => $newspaper]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('newspaper.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Newspaper $newspaper, NewspaperRequest $request)
    {
        $newspaper->create($request->all());
        return redirect()->route('newspaper.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Newspaper  $newspaper
     * @return \Illuminate\Http\Response
     */
    public function show(Newspaper $newspaper)
    {
        return view('newspaper.show', compact('newspaper'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Newspaper  $newspaper
     * @return \Illuminate\Http\Response
     */
    public function edit(Newspaper $newspaper)
    {
        return view('newspaper.edit', compact('newspaper'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Newspaper  $newspaper
     * @return \Illuminate\Http\Response
     */
    public function update(NewspaperRequest $request, Newspaper $newspaper)
    {
        $newspaper->update($request->all());
        return redirect()->route('newspaper.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Newspaper  $newspaper
     * @return \Illuminate\Http\Response
     */
    public function destroy(Newspaper $newspaper)
    {
        $newspaper->delete();
        return redirect()->route('newspaper.index');
    }
}
