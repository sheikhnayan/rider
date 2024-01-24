<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Page;

class PageController extends Controller
{
    public function index()
    {
        $data = Page::latest()->get();

        return view('admin.page.index',compact('data'));
    }

    public function add()
    {
        return view('admin.page.add');
    }

    public function store(Request $request)
    {
        $image = $request->image->store('public/vehicle');

        $path = str_replace('public','storage',$image );

        $add = new Page;
        $add->title = $request->title;
        $add->slug = str_replace(' ','-',$request->title);
        $add->image = $path;
        $add->content = $request->editor;
        $add->menu = $request->menu;
        $add->footer = $request->footer;
        $add->status = $request->status;
        $add->save();
        return redirect(route('admin.page'));
    }

    public function edit($id)
    {
        $data = Page::find($id);
        return view('admin.page.edit',compact('data'));
    }

    public function update(Request $request,$id)
    {
        if (isset($request->image)) {
            # code...
            $image = $request->image->store('public/vehicle');

            $path = str_replace('public','storage',$image );
        }

        $add = Page::find($id);
        $add->title = $request->title;
        $add->slug = str_replace(' ','-',$request->title);
        if (isset($request->image)) {
            $add->image = $path;
        }
        $add->content = $request->editor;
        $add->menu = $request->menu;
        $add->footer = $request->footer;
        $add->status = $request->status;
        $add->update();

        return redirect(route('admin.page'));
    }

    public function delete($id)
    {
        $delete = Page::where('id',$id)->delete();

        return redirect(route('admin.page'));
    }
}
