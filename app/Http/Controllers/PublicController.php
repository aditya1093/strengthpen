<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PublicController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Show the welcome page
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('public.index');
    }

    /**
     * Show the how it works page
     *
     * @return \Illuminate\Http\Response
     */
    public function howItWorks() {
        return view('public.how-it-works');
    }
}
