<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Success;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class StudentsController extends Controller
{
    public function index()
    {
        $students = Student::all();
        return $students;
    }

    public function create()
    {
        $success_list = Success::all();
        return view('students.create', ['success_list' => $success_list]);
    }

    public function store(Request $request):RedirectResponse
    {
        $student = Student::create([
            'student_name' => $request->input('student_name'),
            'cours' => $request->input('cours'),
            'speciality' => $request->input('speciality'),
            'success_id' => $request->input('success_id'),
        ]);
        return \redirect(route('students.index'));
    }

    public function show(string $id)
    {

    }

    public  function  edit(string $id)
    {

    }

    public function update(Request $request, string $id)
    {

    }

    public function destroy(string $id)
    {

    }
}
