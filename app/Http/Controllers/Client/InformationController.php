<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class InformationController extends Controller
{
    //
    public function aboutUs() {
        return view('client.pages.about_us.about_us');
    }
    public function vnAboutUs() {
        return view('client.vn_pages.about_us.about_us');
    }
}

