@extends('layouts.app')
@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-8 offset-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
            <li class="breadcrumb-item"><a href="{{url('/home')}}">Employee List</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{$empolyee_profile->empolyee_name}}</li>
          </ol>
        </nav>
        <div class="card">
          <div class="card-header">
            Parsonal Information
          </div>
          <div class="card-body">
            <div class="empolyeeDetails">
              <div class="photo">
                <img src="{{asset('uploads/employee_images')}}/{{$empolyee_profile->employee_photo}}" alt="" width="150">

              </div>


              <div class=" editProfile">
                <h2>Name:&nbsp;{{$empolyee_profile->empolyee_name}}</h2>
                <a href="{{url('edit/employee')}}/{{$empolyee_profile->id}}" class="btn btn-sm btn-outline-info">Edit info</a>
                <!-- <a href="{{url('delete/employee')}}/{{$empolyee_profile->id}}" class="btn btn-sm btn-outline-danger">Delete</a> -->
              </div>

              <p class="text-info"><span>Employee Id:</span>{{$empolyee_profile->empolyee_id}}</p>
              <p><span>Employee Designation:</span>{{$empolyee_profile->empolyee_designation}}</p>
              <p class="text-info"><span>Employee Number:</span>{{$empolyee_profile->empolyee_number}}</p>
              <p><span>Employee Email:</span>{{$empolyee_profile->empolyee_email}}</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection
