@extends('layouts.app')
@section('content')
  <div class="container">
    <div class="row">
      <div class="col-6 offset-3">
        <div class="card">
          <div class="card-header bg-success">
            Empolyee Info List
          </div>

          <div class="card-body">
            @if(session('status'))
              <div class="alert alert-success">
                {{session('status')}}
              </div>
            @endif
            @if($errors->all())
              <div class="alert alert-danger">
              @foreach($errors->all() as $error)
                  <li>{{$error}}</li>
              @endforeach
              </div>
              @endif
            <form action="{{url('add/empolyee/info')}}" method="post" enctype="multipart/form-data">
              @csrf
              <div class="form-group">
                <label for="exampleInputEmail1">Your Name</label>
                <input type="text" class="form-control" placeholder="Enter Your Full Name" name="empolyee_name" value="{{old('empolyee_name')}}">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Empolyee Id</label>
                <input type="text" class="form-control"  placeholder="Enter your id" name="empolyee_id" value="{{old('empolyee_id')}}">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Designation</label>
                <input type="text" class="form-control"  placeholder="Enter Your Dasignation" name="empolyee_designation" value="{{old('empolyee_designation')}}">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Contact Number</label>
                <input type="text" class="form-control"  placeholder="Enter Your Number" name="empolyee_number" value="{{old('empolyee_number')}}">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control"placeholder="Enter email" name="empolyee_email" value="{{old('empolyee_email')}}">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Uploads your photo</label>
                <input type="file" class="form-control" name="employee_photo">
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
