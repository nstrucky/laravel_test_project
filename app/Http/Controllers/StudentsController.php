<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Student;

class StudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = Student::all();
        return view('students.index', ['students' => $students]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('students.create');
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
            'first_name' => 'required|min:2|max:255',
            'last_name' => 'required|min:2|max:255',
            'age' => 'required|numeric'

        ]);


        \App\Student::create($validAttrs);
        return redirect('/students');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student/*$id*/)
    {
        $assignments = $student->assignments;

        return view('students.student',[
            'student' => $student,
            'assignments' => $assignments

        ]);   
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student/*$id*/)
    {
        // $student = \App\student::findOrFail($id);
        return view('students.edit', ['student' => $student]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Student $student)
    {
        // $student = \App\student::find($id);
        // $student->first_name = request('first_name');
        // $student->last_name = request('last_name');
        // $student->age = request('age');

        // $student->save();

        $validAttrs = request()->validate([
            'first_name' => 'required|min:2|max:255',
            'last_name' => 'required|min:2|max:255',
            'age' => 'required|numeric'

        ]);

        $student->update($validAttrs);
        return redirect('/students');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student/*$id*/)
    {
        $student->delete();
        // \App\student::findOrFail($id)->delete();
        return redirect('/students');

    }
}
