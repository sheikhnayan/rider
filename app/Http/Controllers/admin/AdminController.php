<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Setting;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.dashboard');
    }

    public function setting()
    {
        $data = Setting::first();

        return view('admin.setting',compact('data'));
    }

    public function setting_update(Request $request)
    {
        if (isset($request->logo)) {
            # code...
            $image = $request->logo->store('public');

            $path = str_replace('public','storage',$image );
        }

        $add = Setting::first();
        $add->email = $request->email;
        $add->phone = $request->phone;
        $add->address = $request->address;
        if (isset($request->logo)) {
            # code...
            $add->logo = $path;
        }
        $add->update();

        return redirect(route('admin.setting'));
    }
}
