<?php

namespace App\Http\Controllers;

use App\Models\Contact;
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
        return view('home.welcome',['resume' => $linkedinResume]);
    }

    public function admin()
    {
        $contacts = Contact::all();
        $linkedinResume = new LinkedinResume();
        return view('admin',[
            'contacts' => $contacts,
            'resume' => $linkedinResume]);
    }
}
