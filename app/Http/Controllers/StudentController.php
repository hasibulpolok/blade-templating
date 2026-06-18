<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students = Student::all();
        return view('backend.students.index', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.students.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    $request->validate([
        'name' => 'required|min:4|max:50',
        'gender' => 'required',
        'email' => 'required|email|unique:students,email',
        'phone' => "min:11"
    ]);

    $student = new Student();

    $student->name = $request->name;
    $student->gender = $request->gender;
    $student->email = $request->email;
    $student->phone = $request->phone;
    $student->district = $request->district;
    // $student->subject = json_encode($request->subject);
    $subjects = $request->subject;
    $subjects = implode(",", $subjects);

    $student->subject = $subjects;
    $student->save();

    return redirect('/students')->with('success','successfully student created');
}

    /**
     * Display the specified resource.
     */
 public function show(string $id)
{
    $student = Student::find($id);

    return view('backend.students.edit', compact('student'));
}

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
{
    $request->validate([
        'name' => 'required|min:4|max:50',
        'gender' => 'required',
        'email' => 'required|email|unique:students,email,' . $id,
        'phone' => 'min:11'
    ]);

    $student = Student::find($id);

    $student->name = $request->name;
    $student->gender = $request->gender;
    $student->email = $request->email;
    $student->phone = $request->phone;
    $student->district = $request->district;
   

    $subjects = $request->subject ?? [];
    $student->subject = implode(',', $subjects);

    $student->save();

    return redirect('/students')
        ->with('success', 'Successfully student updated');
}
    /**
     * Remove the specified resource from storage.
     */
   public function destroy(string $id)
{
    $student = Student::find($id);

    $student->delete();

    return redirect()->route('student.index')
                     ->with('success', 'Deleted Successfully');
}
}

