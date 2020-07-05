<?php

namespace App\Http\Controllers;

class PageController extends Controller
{
    public function home()
    {
        return view('pages.home');
    }

    public function browse()
    {
        return view('pages.browse');
    }

    public function browseFilter()
    {
        return view('pages.browse-filter');
    }

    public function detail()
    {
        return view('pages.detail');
    }

    public function adEdit()
    {
        return view('pages.ad-edit');
    }

    public function chat()
    {
        return view('pages.chat');
    }

    public function signup()
    {
        return view('pages.signup');
    }
}
