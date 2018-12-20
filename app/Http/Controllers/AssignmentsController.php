<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AssignmentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $assignments = \App\Assignment::all();
        return view('/assignments.index', ['assignments' => $assignments]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('/assignments.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $validAttrs = request()->validate([
            'student_id' => 'required|numeric',
            'description' => 'required|min:2|max:255',
            'complete' => 'required',
            'status_code' => 'required',
            'due_date' => 'required|date|after_or_equal:today',
            'score' => 'required'
        ]);

        \App\Assignment::create($validAttrs);
        return redirect('/students/'.request()->student_id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(\App\Assignment $assignment)
    {

        return view('/assignments.assignment', ['assignment' => $assignment])/*->withAssignment($assignment)*/;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(\App\Assignment $assignment)
    {
        // return view('/assignments.assignment')->withAssignment($assignment);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(\App\Assignment $assignment)
    {

        $checked = request()->has('complete');

        $assignment->update([
            'complete' => $checked ? 1 : 0

        ]);

        // dd(request());
        return redirect('/students/'.$assignment->student_id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
