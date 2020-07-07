<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\Route;

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

    public function chatDetail()
    {
        return view('pages.chat-detail');
    }

    public function signup()
    {
        return view('pages.signup');
    }

    public function profile()
    {
        return view('pages.profile');
    }

    public function settingsWijzigProfiel()
    {
        return view('pages.settings-wijzig-profiel', ['uri' => Route::getCurrentRoute()->uri()]);
    }

    public function settingsWachtwoord()
    {
        return view('pages.settings-wachtwoord', ['uri' => Route::getCurrentRoute()->uri()]);
    }

    public function settingsVoorkeuren()
    {
        return view('pages.settings-voorkeuren', ['uri' => Route::getCurrentRoute()->uri()]);
    }

    public function settingsZoekertjes()
    {
        return view('pages.settings-zoekertjes', ['uri' => Route::getCurrentRoute()->uri()]);
    }

    public function settingsFavorieten()
    {
        return view('pages.settings-favorieten', ['uri' => Route::getCurrentRoute()->uri()]);
    }

    public function settingsBiedingen()
    {
        return view('pages.settings-biedingen', ['uri' => Route::getCurrentRoute()->uri()]);
    }

    public function create()
    {
        return view('pages.create');
    }

    public function createPart1()
    {
        return view('pages.create-part-1');
    }

    public function createPart2()
    {
        return view('pages.create-part-2');
    }

    public function createRims()
    {
        return view('pages.create-rims');
    }

    public function createTires()
    {
        return view('pages.create-tires');
    }

    public function createCar()
    {
        return view('pages.create-car');
    }

    public function createAccessory()
    {
        return view('pages.create-accessory');
    }
}
