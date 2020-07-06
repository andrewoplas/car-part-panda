<?php

namespace App\Http\Controllers;

class ModalController extends Controller
{
    public function login()
    {
        return view('modals.login');
    }

    public function signup()
    {
        return view('modals.signup');
    }

    public function share()
    {
        return view('modals.share');
    }

    public function sendMessage()
    {
        return view('modals.send-message');
    }

    public function confirmation()
    {
        return view('modals.confirmation');
    }

    public function pricing()
    {
        return view('modals.pricing');
    }
}
