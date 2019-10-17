<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function welcome()
    {
        //la funcion compact hace el arreglo por nosotros.
        $categories = Category::has('products')->get();
        $products = Product::paginate(4);

        return view('welcome')->with(compact('products','categories'));
    }

    public function perfil()
    {
        return view('perfil');
    }
}
