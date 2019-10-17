<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::paginate(10);
        return view('admin.categories.index')->with(compact('categories')); // devolvera la vista del listado 
    }

    public function create()
    {
        return view('admin.categories.create');   // devolvera el formulario de registro
    }

    public function store(Request $request) //inyección de dependencia de Laravel
    {

        $this->validate($request, Category::$rules, Category::$message);  //hacemos validación de datos

        Category::create($request->all());

        return redirect('/admin/categories');
    }

    public function edit(Category $category)
    {
        return view('admin.categories.edit')->with(compact('category'));   // devolvera el formulario de registro a editar
    }

    public function update(Request $request, Category $category)
    { //inyección de dependencia de Laravel


        $this->validate($request, Category::$rules, Category::$message);  //hacemos validación de datos

        //realiza un Update sobre la tabla Category.
        $category->update($request->all());
       return redirect('/admin/categories');
    }

    public function destroy(Category $category) //inyección de dependencia de Laravel
    {
        $category->delete(); //realiza un Update sobre la tabla category.
        return back();
    }
}
