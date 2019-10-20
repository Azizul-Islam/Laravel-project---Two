<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Empolyee;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        $all_empolyees = Empolyee::paginate(4);
        return view('home', compact('all_empolyees'));
    }
}
