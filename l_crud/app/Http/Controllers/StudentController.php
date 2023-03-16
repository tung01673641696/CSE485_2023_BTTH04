<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use Illuminate\Support\Facades\Log;

class StudentController extends Controller
{
    public function students() {
        $student = Student::all();
        return view('index', compact('student'));
    }

    public function viewStudent($id) {
        $student = Student::where('id',$id)->first();
        return view('show',compact('student'));
    }

    public function createStudent() {
        return view('create');
    }

    public function saveStudent(Request $request) {
        Log::info("hahaha");
        
        $studentName = $request->student_name;
        
        $studentEmail = $request->student_email;
        $studentGender = $request->student_gender;
        $studentImage = $request->student_image;

        $student = new Student;
        $student->student_name = $studentName;
        $student->student_email = $studentEmail;
        $student->student_gender = $studentGender;
        $student->student_image = $studentImage;
        
        $student->save();

        return redirect('/');
    }

    public function delete($id) {
        
    }
}
