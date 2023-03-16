@extends('master')

@section('content')

@if($message = Session::get('success'))

<div class="alert alert-success">
    {{ $message }}
</div>

@endif

<div class="card">
    <div class="card-header">
        <div class="row">
            <div class="col col-md-6"><b>Student Data</b></div>
            <div class="col col-md-6">
                <a href="{{url('create-student')}}" class="btn btn-success btn-sm float-end">Add</a>
            </div>
        </div>
    </div>
    <div class="card-body">
        <table class="table table-bordered">
            <tr>
                <th>Image</th>
                <th>Name</th>
                <th>Email</th>
                <th>Gender</th>
                <th>Action</th>
            </tr>
            @if(count($student) > 0)

                @foreach($student as $item)

                    <tr>
                        <td><img src="{{ asset('images/' . $item->student_image) }}" width="75" /></td>
                        <td>{{ $item->student_name }}</td>
                        <td>{{ $item->student_email }}</td>
                        <td>{{ $item->student_gender }}</td>
                        <td>                          
                            <a href="{{url('view-student/'.$item->id)}}" class="btn btn-primary btn-sm">View</a>
                            <a href="{{url('edit-student/'.$item->id)}}" class="btn btn-warning btn-sm">Edit</a>
                            <form method="post" action="{{url('delete-student/'.$item->id)}}" style="display: inline">
                                @csrf
                                <button class="btn btn-danger btn-sm">Delete</button>
                            </form>

                        </td>
                    </tr>

                @endforeach

            @else
                <tr>
                    <td colspan="5" class="text-center">No Data Found</td>
                </tr>
            @endif
        </table>
    </div>
</div>

@endsection


