<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Vehicle;

class VehicleController extends Controller
{
    public function index()
    {
        $data = Vehicle::latest()->get();

        return view('admin.vehicle.index',compact('data'));
    }

    public function add()
    {
        return view('admin.vehicle.add');
    }

    public function store(Request $request)
    {
        $image = $request->image->store('public/vehicle');

        $path = str_replace('public','storage',$image );

        $icon = $request->icon->store('public/vehicle');

        $icon_path = str_replace('public','storage',$icon );

        $add = new Vehicle;
        $add->model = $request->model;
        $add->hourly_rate = $request->hourly_rate;
        $add->hourly_outside_rate = $request->hourly_outside_rate;
        $add->minimum_rate = $request->minimum_rate;
        $add->daily_rate = $request->daily_rate;
        $add->image = $path;
        $add->icon = $icon_path;
        $add->save();

        return redirect(route('admin.vehicle'));
    }

    public function edit($id)
    {
        $data = Vehicle::find($id);
        return view('admin.vehicle.edit',compact('data'));
    }

    public function update(Request $request,$id)
    {
        if (isset($request->image)) {
            # code...
            $image = $request->image->store('public/vehicle');

            $path = str_replace('public','storage',$image );
        }

        if (isset($request->icon)) {
            # code...
            $icon = $request->icon->store('public/vehicle');

            $icon_path = str_replace('public','storage',$icon );
        }


        $add = Vehicle::find($id);
        $add->model = $request->model;
        $add->hourly_rate = $request->hourly_rate;
        $add->hourly_outside_rate = $request->hourly_outside_rate;
        $add->minimum_rate = $request->minimum_rate;
        $add->daily_rate = $request->daily_rate;
        if (isset($request->image)) {
            $add->image = $path;
        }
        if (isset($request->icon)) {
            $add->icon = $icon_path;
        }
        $add->update();

        return redirect(route('admin.vehicle'));
    }

    public function delete($id)
    {
        $delete = Vehicle::where('id',$id)->delete();

        return redirect(route('admin.vehicle'));
    }
}
