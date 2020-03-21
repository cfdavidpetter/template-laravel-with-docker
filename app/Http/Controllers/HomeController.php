<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $this->middleware('auth');
        return view('home');
    }

    /**
     * Set Locale of Application
     */
    public function setLocaleApplication($locale)
    {
        session(['setLocale' => $locale]);

        return back();
    }
}
