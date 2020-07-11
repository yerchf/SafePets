<?php

namespace SAFEPETS\Http\Controllers;

use Illuminate\Http\Request;

use SAFEPETS\User;
use SAFEPETS\Publication;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(Request $request)
    {
        $request->user()->authorizeRoles(['user', 'admin']);
        return view('home');
    }

    

}
