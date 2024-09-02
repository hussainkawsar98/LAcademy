<?php

namespace App\Http\Controllers\Website;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class WebsiteController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function home()
    {
        return view('website.index');
    }
    public function about()
    {
        return view('website.about');
    }
    public function course()
    {
        return view('website.course');
    }
    public function contact()
    {
        return view('website.contact');
    }
    public function error()
    {
        return view('website.404');
    }
    public function checkout()
    {
        return view('website.checkout');
    }
    public function preview()
    {
        return view('website.preview');
    }
    public function login()
    {
        return view('website.login');
    }
    public function registration()
    {
        return view('website.registration');
    }
    public function student()
    {
        return view('website.student');
    }
    public function mentor()
    {
        return view('website.mentor');
    }
    public function category()
    {
        return view('website.category');
    }
}
