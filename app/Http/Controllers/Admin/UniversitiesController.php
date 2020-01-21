<?php

namespace App\Http\Controllers\Admin;

use App\Models\University;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\UniversitiesRequest;

class UniversitiesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.universities.index',[
            'universities'  =>  University::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.universities.create',[
            'university'    => new University
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UniversitiesRequest $request)
    {
        University::create($request->validated());

        return redirect()->route('dashboard.universities.index')->with('status', 'Fue creado con exito');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(University $university)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(University $university)
    {
        return view('admin.universities.edit',[
            'university'    =>  $university
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UniversitiesRequest $request, University $university)
    {
        $university->update($request->validated());
        return redirect()->route('dashboard.universities.index')->with('status', 'Fue actualizado con exito');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(University $university)
    {
        $university->delete();

        return redirect()->route('dashboard.universities.index')->with('status', 'Fue eliminado con exito');

    }
}
