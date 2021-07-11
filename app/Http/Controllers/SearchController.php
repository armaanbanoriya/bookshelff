<?php

namespace App\Http\Controllers;

use App\Category;
use  App\Product;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search_btn_results($id)
    {
        // $productswitcat= Product::where(['category_id'=>$productswitcat->category_id]);
        // $catwithpro=Category::with('orderproducts')->get();
        $products = Product::all();
        return view('front.searchbar',compact('products'));
    }



    public function searchautocomplete(Request $request)
   {
        $query = $request->get('term','');
        $products = Product::where('product_name','LIKE','%'.$query.'%')->get();

        $data = [];
        foreach($products as $items)
                {
                    $data[] = [
                        'value'=> $items->product_name,
                        'id'=> $items->id
                    ];
                }
        if(count($data))
                {
                    return $data;
                }else
                {
                    return ['value'=>'No search Results Found','id'=>''];
                }
   }


   public function results(Request $request)
   {
    $searchingdata = $request->input('search_product');
    $products = Product::where('product_name','LIKE','%'.$searchingdata.'%')->first();

    if ($products)
    {
        if(isset($_POST['searchbtn']))
        {
            return redirect('search_btn_results/'.$products->id.'/');
        }else{
            return redirect ('productdetail/'.$products->id.'/');
        }
        // return redirect ("{{url('productdetail/'.$products->id)}}");


    }else{
        return redirect('/')->with('status','Product not available');
    }
   }

}
