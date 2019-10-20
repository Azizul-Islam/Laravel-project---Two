<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Empolyee;
use Image;

class EmpolyeeController extends Controller
{

  function addinformation(){
    return view('empolyee.parsonalinfo');
  }
    function addempolyeeinfo(Request $request){
      $request->validate([
        'empolyee_name' => 'required',
        'empolyee_id' => 'required|numeric',
        'empolyee_designation' => 'required',
        'empolyee_number' => 'required|numeric',
        'empolyee_email' => 'required',
      ]);
      $last_insert_id = Empolyee::insertGetId([
        'empolyee_name' =>$request->empolyee_name,
        'empolyee_id' =>$request->empolyee_id,
        'empolyee_designation' =>$request->empolyee_designation,
        'empolyee_number' =>$request->empolyee_number,
        'empolyee_email' =>$request->empolyee_email,
      ]);
      if($request->hasFile('employee_photo')){
            $photo_to_upload = $request->employee_photo;
            $file_name = $last_insert_id.".".$photo_to_upload->getClientOriginalExtension();
            Image::make($photo_to_upload)->resize(400,450)->save(base_path('public/uploads/employee_images/'.$file_name));
            Empolyee::find($last_insert_id)->update([
              'employee_photo' => $file_name
            ]);
      }
       return back()->with('status', 'Empolyee added successfully !');
    }
    function empolyeedetails($empolyee_id){
      $empolyee_profile = Empolyee::find($empolyee_id);
      return view('empolyee.view', compact('empolyee_profile'));
    }
    function deleteemployee($empolyee_id){
      Empolyee::where('id', '=', $empolyee_id)->delete();
      return back()->with('deletestatus', 'Employee profile deleted successfully');
    }
    function editemployee($employee_id){
      $single_employee = Empolyee::findOrFail($employee_id);
      return view('empolyee/edit', compact('single_employee'));
    }
    function editempolyeeinfo(Request $request){
      Empolyee::find($request->employee_id)->update([
        'empolyee_name' =>$request->empolyee_name,
        'empolyee_id' =>$request->empolyee_id,
        'empolyee_designation' =>$request->empolyee_designation,
        'empolyee_number' =>$request->empolyee_number,
        'empolyee_email' =>$request->empolyee_email,
      ]);
      return back()->with('editstatus', 'Edit Successfully Done.!');
    }
}
