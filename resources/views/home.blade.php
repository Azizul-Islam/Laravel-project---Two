@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-info">Employee List</div>

                <div class="card-body">
                    @if (session('deletestatus'))
                        <div class="alert alert-danger" role="alert">
                            {{ session('deletestatus') }}
                        </div>
                    @endif

                      <table class="table table-bordered">
                        <thead>
                          <tr>
                            <th>SL. No</th>
                            <th>Employee Photo</th>
                            <th>Employee Name</th>
                            <th>Employee Id</th>
                            <th>Designation</th>
                            <th>Contact No</th>
                            <th>Email Address</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          @forelse($all_empolyees as $all_empolyee)
                          <tr>
                            <td>{{$loop->index +1}}</td>
                            <td>
                            <a href="{{url('empolyee/details')}}/{{$all_empolyee->id}}">  <img src="{{asset('uploads/employee_images')}}/{{$all_empolyee->employee_photo}}" alt="Not found" width="100"></a>
                            </td>
                            <td><a href="{{url('empolyee/details')}}/{{$all_empolyee->id}}">{{$all_empolyee->empolyee_name}}</a></td>
                            <td>{{$all_empolyee->empolyee_id}}</td>
                            <td>{{$all_empolyee->empolyee_designation}}</td>
                            <td>{{$all_empolyee->empolyee_number}}</td>
                            <td>{{$all_empolyee->empolyee_email}}</td>
                            <td>
                            @auth
                            <div class="btn-group">
                              <a href="{{url('delete/employee')}}/{{$all_empolyee->id}}" class="btn btn-sm btn-outline-danger">Delete</a>
                              <a href="{{url('edit/employee')}}/{{$all_empolyee->id}}" class="btn btn-sm btn-outline-info">Edit</a>
                            </div>
                            @endauth
                            </td>
                          </tr>
                          @empty
                          <tr>
                            <td colspan="7" class="text-center text-danger">No Employee here</td>
                          </tr>
                          @endforelse
                        </tbody>
                      </table>
                      {{$all_empolyees->links()}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
