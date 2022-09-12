<?php

namespace App\Http\Controllers;

use App\Category;
use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function addcategory()
    {
        return view('admin.category');
    }

    public function save(StoreCategoryRequest $a)
    {

        $file = $a->file('image');
        if ($file != null) {
            $filename = 'image' . time() . '.' . $a->image->extension();
            $file->move("upload/", $filename);
        }

        $data = new Category;
        $data->name = $a->name;
        $data->description = $a->description;
        $data->image = $filename ?? null;

        $data->save();
        if ($data) {
            return redirect('category/display')->with('message', 'Save Successfully');
        }

    }

    public function display()
    {
        $data = Category::all();
        return view('admin.display', compact('data'));
    }

    public function view($id)
    {
        $data = Category::find($id);
        return view('admin.view', compact('data'));
    }

    public function edit($id)
    {
        $data = Category::find($id);
        return view('admin.edit', compact('data'));
    }

    public function update(UpdateCategoryRequest $a)
    {
        if ($a->hasFile('image')) {
            $file = $a->file('image');

            $filename = 'image' . time() . '.' . $a->image->extension();

            $file->move("upload/", $filename);

            $data = new Category();
            $data = Category::find($a->id);
            $data->name = $a->name;
            $data->description = $a->description;
            $data->image = $filename;

            $data->save();

            if ($data) {
                return redirect('category/display')->with('message', 'Data Updated');
            }

        } else {
            $data = Category::find($a->id);
            $data->name = $a->name;
            $data->description = $a->description;
            $data->save();

        }

        return redirect('category/display')->with('message', 'Data Updated');
    }
    public function delete($id)
    {
        $data = Category::find($id);

        $delete = $data->delete();
        if ($data) {
            return redirect('category/display')->with('message', 'deleted successfully');
        }
    }

}
