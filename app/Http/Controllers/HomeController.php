<?php

namespace App\Http\Controllers;

use App\Models\LinkedinResume;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $linkedinResume = new LinkedinResume();
        return view('welcome',['resume' => $linkedinResume]);
    }
}
