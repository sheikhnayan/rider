<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vehicle;
use App\Models\Page;

class FrontendController extends Controller
{
    public function index()
    {
        $vehicle = Vehicle::all();

        return view('welcome',compact('vehicle'));
    }

    public function page($slug)
    {
        $data = Page::where('slug',$slug)->first();

        return view('page',compact('data'));
    }
}
