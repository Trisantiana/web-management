<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\ListWebsite;
use App\JenisWebsite;
use App\User;

class WebsiteController extends Controller
{
    public function data() {
    	$listWebsite = DB::table('list_website')->get();
    	$jenisWebsite = JenisWebsite::all();
    	$pelanggan = User::all(); 

    	view('pages.list-website.website-data', compact('listWebsite'));
    }
}
