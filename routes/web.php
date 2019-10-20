<?php



Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/add/information', 'EmpolyeeController@addinformation');
Route::post('/add/empolyee/info', 'EmpolyeeController@addempolyeeinfo');
Route::get('/empolyee/details/{empolyee_id}', 'EmpolyeeController@empolyeedetails');
Route::get('/delete/employee/{employee_id}', 'EmpolyeeController@deleteemployee');
Route::get('/edit/employee/{employee_id}', 'EmpolyeeController@editemployee');
Route::post('/edit/empolyee/info', 'EmpolyeeController@editempolyeeinfo');
