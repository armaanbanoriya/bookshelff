<?php

namespace App\Http\Controllers;

use App\Banner;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    public function create(Request $a)
    {

        return view('admin.banner.create');
    }

    public function save(Request $a)
    {
        $a->validate([
            'title' => 'required', 'autofocus',
            'headingtitle' => 'nullable',
            'boldheadingtitle' => 'nullable',
            'url' => 'nullable',
            'image' => 'mimes:jpeg,jpg,jfif,gif|max:5000|required',
        ]);

        $file = $a->file('image');
        $filename = 'image' . time() . '.' . $a->image->extension();
        $file->move("upload/", $filename);
        $data = new Banner;
        $data->title = $a->title;
        $data->headingtitle = $a->headingtitle;
        $data->boldheadingtitle = $a->boldheadingtitle;
        $data->image = $filename;
        $data->url = $a->url;

        $data->save();

        if ($data) {
            return redirect('banner/display')->with('message', 'Save Successfully');
        }
    }

    public function display()
    {
        $data = Banner::all();
        return view('admin.banner.display', compact('data'));
    }

    public function view($id)
    {
        $data = Banner::find($id);
        return view('admin.banner.view', compact('data'));
    }

    public function edit($id)
    {
        $data = Banner::find($id);
        return view('admin.banner.edit', compact('data'));
    }

    public function update(Request $a)
    {

        $a->validate([
            'title' => 'required', 'autofocus',
            'headingtitle' => 'nullable',
            'boldheadingtitle' => 'nullable',
            'url' => 'nullable',
            'image' => 'mimes:jpeg,jpg,jfif,gif|max:5000',
        ]);

        if ($a->hasFile('image')) {

            $file = $a->file('image');
            $filename = 'image' . time() . '.' . $a->image->extension();
            $file->move("upload/", $filename);


            $data = Banner::find($a->id);

            $data->title = $a->title;
            $data->headingtitle = $a->headingtitle;
            $data->boldheadingtitle = $a->boldheadingtitle;
            $data->url = $a->url;
            $data->image = $filename;
            $data->save();


            if ($data) {
                return redirect('banner/display')->with('message', 'Data Updated');
            }

        } else {
            $data = Banner::find($a->id);
            $data->title = $a->title;
            $data->headingtitle = $a->headingtitle;
            $data->boldheadingtitle = $a->boldheadingtitle;
            $data->url = $a->url;
            $data->save();
            if ($data) {
                return redirect('banner/display')->with('message', 'Record Deleted');
            }

        }
    }

    public function delete($id)
    {
        $data = Banner::find($id);
        $delete = $data->delete();

        if ($data) {
            return redirect('banner/display')->with('message', 'Record Deleted');
        }

    }
}
