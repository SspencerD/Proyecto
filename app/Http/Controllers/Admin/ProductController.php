<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Product;
use Illuminate\Http\Request;


class ProductController extends Controller

{
    public function index()
    {
        $products = Product::paginate(10);
        return view('admin.products.index')->with(compact('products')); // devolvera la vista del listado de productos
    }

    public function create()
    {
        return view('admin.products.create');   // devolvera el formulario de registro
    }

    public function store(Request $request) //inyección de dependencia de Laravel
    {
        // registrar el nuevo producto a la bd

        //dd($request->all());
        $message =[

            'name.required' => 'Es necesario agregar un nombre al producto',
            'name.min' => 'El nombre del producto debe contener al menos 3 caracteres...',
            'description.required' =>'Es necesario una pequeña descripción...',
            'description.min'=> 'hey, el maximo de caracteres son 200...',
            'price.required' =>'Es necesario un precio.',
            'price.min'=> ' No se admiten valores negativos.',
            'price_buy.required' =>'Es necesario un precio de compra.',
            'price_buy.min'=> 'No se admiten valores negativos.',
            'price_major.required' =>'Es necesario un precio por mayor',
            'price_major.min'=> 'No se admiten valores negativos',
            'description.min'=> 'Hey , el maximo de caracteres son 1000'
        ];
        $rules = [

            'name' => 'required |min:3 ',
            'description' => 'required |max:200 ',
            'price' => 'required |numeric|min:0 ',
            'price_buy' => 'required |numeric|min:0 ',
            'price_major' => 'required |numeric|min:0 ',
            'long_description' => 'max:1000'
        ];

        $this->validate($request , $rules, $message );  //hacemos validación de datos


        $product = new Product();
        $product->name = $request->input('name');
        $product->description = $request->input('description');
        $product->price = $request->input('price');
        $product->price_buy = $request->input('price_buy');
        $product->price_major = $request->input('price_major');
        $product->long_description = $request->input('long_description');
        $product->save(); //realiza un insert sobre la tabla Product.

        return redirect('/admin/products');

    }

    public function edit($id)
    {
       $product = Product::find($id);
        return view('admin.products.edit')->with(compact('product'));   // devolvera el formulario de registro a editar
    }

    public function update(Request $request, $id) //inyección de dependencia de Laravel
    {


        $message =[

            'name.required' => 'Es necesario agregar un nombre al producto',
            'name.min' => 'El nombre del producto debe contener al menos 3 caracteres...',
            'description.required' =>'Es necesario una pequeña descripción...',
            'description.min'=> 'hey, el maximo de caracteres son 200...',
            'price.required' =>'Es necesario un precio.',
            'price.min'=> ' No se admiten valores negativos.',
            'price_buy.required' =>'Es necesario un precio de compra.',
            'price_buy.min'=> 'No se admiten valores negativos.',
            'price_major.required' =>'Es necesario un precio por mayor',
            'price_major.min'=> 'No se admiten valores negativos',
            'description.min'=> 'Hey , el maximo de caracteres son 1000'
        ];
        $rules = [

            'name' => 'required |min: 3 ',
            'description' => 'required |max:200 ',
            'price' => 'required |numeric |min:0 ',
            'price_buy' => 'required |numeric |min:0 ',
            'price_major' => 'required |numeric |min:0 ',
            'long_description' => 'max:1000'
        ];

        $this->validate($request , $rules, $message );  //hacemos validación de datos
       
        $product = Product::find($id);
        $product->name = $request->input('name');
        $product->description = $request->input('description');
        $product->price = $request->input('price');
        $product->price_buy = $request->input('price_buy');
        $product->price_major = $request->input('price_major');
        $product->long_description = $request->input('long_description');
        $product->save(); //realiza un Update sobre la tabla Product.

        return redirect('/admin/products');

    }

    public function destroy($id) //inyección de dependencia de Laravel
    {
       
        $product = Product::find($id);
        $product->delete(); //realiza un Update sobre la tabla Product.

        return back();

    }
}
 