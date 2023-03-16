@extends('master')

@section('content')

<div class="card">
    <div class="card-header">Edit Student</div>
    <div class="card-body">
        <form method="post" action="{{url('update-student/'.$student->id)}}">
            @csrf
            <div class="row mb-3">
                <label class="col-sm-2 col-label-form">Student Name</label>
                <div class="col-sm-10">
                    <input type="text" name="student_name" value="{{$student->student_name}}" class="form-control" />
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-2 col-label-form">Student Email</label>
                <div class="col-sm-10">
                    <input type="text" name="student_email" value="{{$student->student_email}}" class="form-control" />
                </div>
            </div>
            <div class="row mb-4">
                <label class="col-sm-2 col-label-form">Student Gender</label>
                <div class="col-sm-10">
                    <select name="student_gender" class="form-control">
                        {{-- <option value="{{$student->student_gender}}" selected>{{$student->student_gender}}</option> --}}
                        <option selected="selected">{{$student->student_gender}}</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </select>
                </div>
            </div>
            <div class="row mb-4">
                <label class="col-sm-2 col-label-form">Student Image</label>
                <div class="col-sm-10">
                    <input type="file" name="student_image" />
                </div>
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </form>
    </div>
</div>

@endsection('content')