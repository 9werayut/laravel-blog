<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index() {
        $fullname = "Werayut Kumsuwan";
        $website = "codeonmac.com";

        return view('about', [
            'fullname' => $fullname,
            'website' => $website
        ]);
    }
}
