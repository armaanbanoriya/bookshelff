<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSubimageRequest;
use App\Subimage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SubimageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.Subimages.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSubimageRequest $a)
    {

        if ($a->file('image') != null) {
            $file = $a->file('image');
            $filename = 'image' . time() . '.' . $a->image->extension();
            $file->move("upload/", $filename);
        }

        $data = new Subimage;
        $data->image = $filename ?? null;

        $data->save();

        if ($data) {
            return redirect('subimages/display')->with('message', 'Save Successfully');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Subimage  $subimage
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $data = Subimage::all();
        return view('admin.Subimages.display', compact('data'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Subimage  $subimage
     * @return \Illuminate\Http\Response
     */
    public function edit(Subimage $subimage)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Subimage  $subimage
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Subimage $subimage)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Subimage  $subimage
     * @return \Illuminate\Http\Response
     */
    public function destroy(Subimage $subimage)
    {
        //
    }
}
