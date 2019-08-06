<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\user;
use App\UsersInfo as info;

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
    public function index()
    {
        $emailLogin = Auth::user()->email;
        $data = info::where('email', $emailLogin)->get();
        return view('home',["userinfo" => $data]);
    }
    public function getUserInformation()
    {
        $data = info::all();
        return json_decode($data);
    }
    public function store(Request $request)
    {
       echo $request;
    }
}
