<?php

namespace App\Http\Controllers;

use App\Http\Requests\MagazineRequest;
use App\Magazine;
use Illuminate\Http\Request;
//use phpDocumentor\Reflection\DocBlock\Tags\Var_;

class MagazineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $magazines = Magazine::all();
        // Повернення видалених записів з БД
//        $magazines = Magazine::withTrashed()->get();
//        $magazines = Magazine::withTrashed()->where('price', '<', '100')->get();
//        $magazines = Magazine::withTrashed()->where('price', '<', '100')->orederBy('title', 'desc')->get();
        return view('magazine.index', ['magazines' => $magazines]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('magazine.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Magazine $magazine, MagazineRequest $request)
    {
        $magazine->create($request->all());
        return redirect()->route('magazine.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Magazine $magazine
     * @return \Illuminate\Http\Response
     */
    public function show(Magazine $magazine)
    {
        return view('magazine.show', compact('magazine'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Magazine $magazine
     * @return \Illuminate\Http\Response
     */
    public function edit(Magazine $magazine)
    {
        return view('magazine.edit', compact('magazine'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Magazine $magazine
     * @return \Illuminate\Http\Response
     */
    public function update(MagazineRequest $request, Magazine $magazine)
    {
        $magazine->update($request->all());
        return redirect()->route('magazine.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Magazine $magazine
     * @return \Illuminate\Http\Response
     */
    public function destroy(Magazine $magazine)
    {
        $magazine->delete();
        return redirect()->route('magazine.index');
    }
}
