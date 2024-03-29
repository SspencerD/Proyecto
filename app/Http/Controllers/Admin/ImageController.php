<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Product;
use App\ProductImage;
use Illuminate\Http\Request;
use File;



class ImageController extends Controller
{
    public function index($id)
    {
        $product = Product::find($id);
        $images = $product->images()->orderBy('featured', 'desc')->get();
        return view('admin.products.images.index')->with(compact('product', 'images'));
    }
    public function store(Request $request, $id)
    {
        //guardar la imag en nuestro proy
        $file = $request->file('photo'); // guarda en un formato file  , extrae la información photo
        $path = public_path() . '/images/products'; // la ruta donde guardamos nuestra imagen
        $fileName = uniqid() . $file->getClientOriginalName(); // el nombre se compone de una id unico concadenado con el nombre subido por el user
        $moved = $file->move($path, $fileName); //se indica a que ruta se guarda con el archivo y el nombre.

        // crear 1 registro en la tabla product_images

        if ($moved) {
            $productImage = new ProductImage();
            $productImage->image = $fileName;
            // $productImage->featured = ;
            $productImage->product_id = $id;
            $productImage->save(); // insert
        }
        return back();
    }
    public function destroy(Request $request, $id)
    {

        //eliminar el archivo
        $productImage = ProductImage::find($request->image_id);
        if (substr($productImage->image, 0, 4) === "http") {
            $deleted = true;
        } else {
            $fullPath = public_path() . '/images/products/' . $productImage->image;
            $deleted = File::delete($fullPath);
        }



        //eliminar el registro en la base de datos
        if ($deleted) {
            $productImage->delete();
        }

        return back();
    }

    public function select($id, $image)

    {
        ProductImage::where('product_id', $id)->update([

            'featured' => false
   ]);





        $productImage = ProductImage::find($image);
        $productImage->featured = true;
        $productImage->save();

        return back();
    }
}
