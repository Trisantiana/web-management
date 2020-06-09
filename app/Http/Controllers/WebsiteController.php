<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function data() {
    	view('pages.list-webiste.website-data');
    }
}
