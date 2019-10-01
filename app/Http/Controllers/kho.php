<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class kho extends Controller
{
    public function index()
    {
        $kho = \App\kho::latest()->paginate(5);

        return view('kho.index',compact('kho'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kho.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            '' => 'required',
        ]);

        \App\kho::create($request->all());

        return redirect()->route('kho.index')
            ->with('success','kho created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('kho.show',compact('kho'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('kho.edit',compact('kho'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, \App\kho $kho)
    {
        $request->validate([
            'name' => 'required',
            'detail' => 'required',
        ]);

        $kho->update($request->all());

        return redirect()->route('kho.index')
            ->with('success','Product updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(\App\kho $kho)
    {
        $kho->delete();
        return redirect()->route('kho.index')
            ->with('success','Product deleted successfully');
    }
}