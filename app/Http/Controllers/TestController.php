<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function welcome()
    {
        //la funcion compact hace el arreglo por nosotros.
        $products = Product::paginate(8);

        return view('welcome')->with(compact('products'));
    }

    public function perfil()
    {
        return view('perfil');
    }
}
