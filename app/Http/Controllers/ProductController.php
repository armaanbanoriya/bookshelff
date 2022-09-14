<?php

namespace App\Http\Controllers;

use App\Category;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Product;
use Exception;

class ProductController extends Controller
{
    public function create()
    {

        $data = Category::all();
        return view('admin.product.addproduct', compact('data'));
    }

    public function save(StoreProductRequest $a)
    {
        if ($a->file('product_image') != null) {
            $file = $a->file('product_image');
            $filename = 'image' . time() . '.' . $a->product_image->extension();
            $file->move("upload/", $filename);
        }

        $data = new Product;
        $data->category_id = $a->category_id;
        $data->product_name = $a->product_name;
        $data->product_code = $a->product_code;
        $data->product_size = $a->product_size;
        $data->product_description = $a->product_description;
        $data->product_image = $filename ?? null;
        $data->product_price = $a->product_price;
        $data->product_quantity = $a->product_quantity;

        $data->save();

        if ($data) {
            return redirect('product/display')->with('message', 'Save Successfully');
        }
    }

    public function display()
    {
        $data = Product::with('categories')->get();
        return view('admin.product.viewproduct', compact('data'));
    }

    public function show($id)
    {
        $data = Product::find($id);
        return view('admin.product.show', compact('data'));
    }

    public function edit($id)
    {

        $as = Category::all();
        $data = Product::find($id);
        return view('admin.product.edit', compact('data', 'as'));
    }

    public function update(UpdateProductRequest $a)
    {
        try {
            if ($a->hasFile('image')) {

                $file = $a->file('product_image');
                $filename = 'image' . time() . '.' . $a->product_image->extension();
                $file->move("upload/", $filename);

                $data = Product::find($a->id);

                $data->category_id = $a->category_id;
                $data->product_name = $a->product_name;
                $data->product_code = $a->product_code;
                $data->product_size = $a->product_size;
                $data->product_description = $a->product_description;
                $data->product_image = $filename;

                $data->product_price = $a->product_price;
                $data->product_quantity = $a->product_quantity;

                $data->save();
                if ($data) {
                    return redirect('product/display')->with('message', 'Data Updated');
                }

            } else {

                $data = Product::find($a->id);
                $data->category_id = $a->category_id;
                $data->product_name = $a->product_name;
                $data->product_code = $a->product_code;
                $data->product_size = $a->product_size;
                $data->product_description = $a->product_description;
                $data->product_price = $a->product_price;
                $data->product_quantity = $a->product_quantity;
                $data->save();

            }
            return redirect('product/display')->with('message', 'Data Updated');

        } catch (Exception $e) {
            dd($e);
        }

    }

    public function delete($id)
    {
        $data = Product::find($id);

        $delete = $data->delete();
        if ($data) {
            return redirect('product/display')->with('message', 'deleted successfully');
        }
    }

}
