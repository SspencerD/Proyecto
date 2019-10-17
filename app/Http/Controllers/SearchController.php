<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function show(Request $request)
    {
        $buscar = $request->input('buscar');
        $products = Product::where('name','like', "%$buscar%")->paginate(8);
        if ($products->count() == 1){
            $id = $products->first()->id;
            return redirect("products/$id"); // equivale a que agregara '' y concadenara la variable.
        }
        return view('search.show')->with(compact('products','buscar'));

    }

    public function data()
    {
        $products = Product::pluck('name');

        return $products;

    }
}
