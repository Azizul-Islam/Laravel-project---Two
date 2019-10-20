@extends('layouts.app')
@section('content')
  <div class="container">
    <div class="row">
      <div class="col-6 offset-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
            <li class="breadcrumb-item"><a href="{{url('/home')}}">Employee List</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{$single_employee->empolyee_name}}</li>
          </ol>
        </nav>
        <div class="card">
          <div class="card-header bg-success">
            Empolyee Profile Edit
          </div>

          <div class="card-body">
            @if(session('editstatus'))
              <div class="alert alert-success">
                {{session('editstatus')}}
              </div>
            @endif
            @if($errors->all())
              <div class="alert alert-danger">
              @foreach($errors->all() as $error)
                  <li>{{$error}}</li>
              @endforeach
              </div>
              @endif
            <form action="{{url('edit/empolyee/info')}}" method="post" enctype="multipart/form-data">
              @csrf
              <div class="form-group">
                <input type="hidden" name="employee_id" value="{{$single_employee->id}}">
                <label for="exampleInputEmail1">Your Name</label>
                <input type="text" class="form-control" placeholder="Enter Your Full Name" name="empolyee_name" value="{{$single_employee->empolyee_name}}">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Empolyee Id</label>
                <input type="text" class="form-control"  placeholder="Enter your id" name="empolyee_id" value="{{$single_employee->empolyee_id}}">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Designation</label>
                <input type="text" class="form-control"  placeholder="Enter Your Dasignation" name="empolyee_designation" value="{{$single_employee->empolyee_designation}}">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Contact Number</label>
                <input type="text" class="form-control"  placeholder="Enter Your Number" name="empolyee_number" value="{{$single_employee->empolyee_number}}">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control"placeholder="Enter email" name="empolyee_email" value="{{$single_employee->empolyee_email}}">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Uploads your photo</label>
                <input type="file" class="form-control" name="employee_photo">
                <img src="{{asset('uploads/employee_images')}}/{{$single_employee->employee_photo}}" alt="not found" width="150">
              </div>
              <button type="submit" class="btn btn-primary">Edit Info</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
