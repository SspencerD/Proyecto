<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Cause;
use App\Claim;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;

class ClaimController extends Controller
{

    public function index()
    {

        $claims = Claim::paginate(6);

        return view('admin.claims.index')->with(compact('claims'));

    }
        public function create()
    {
        $cause = Cause::OrderBy('name')->get();
        $category = Category::OrderBy('name')->get();
        $products = Product::where('category_id', 1)->get();

        return view ('partner.claims.create')->with(compact('cause','products','category'));
    }

    public function store(Request $request)
    {


        $this->validate($request, Claim::$rules ,Claim::$messages);

        $claim = new Claim();
        $claim->title = $request->input('title');
        $claim->description = $request->input('description');
        $claim->category_id = $request->input('category') ?: null;
        $claim->product_id = $request->input('product') ?: null;
        $claim->cause_id = $request->input('cause') ?: null;
        $claim->reason_id = $request->input('reason') ?: null;
        $claim->partner_id = auth()->user()->id;
        $claim->cargo = $request->input('cargo');
        $claim->lote = $request->input('lote');
        $claim->qty_claim = $request->input('qty_claim');
        $claim->qty_delivery = $request->input('qty_delivery');
        $claim->save();


        return back()->with('notificacion','Se a registrado correctamente su reclamo');


    }

    public function edit($id)
    {
        $claims = Claim::find($id);
        $categories = Category::orderBy('name')->get();
        $products = Product::orderBy('name')->get();
        $causes = Cause::orderBy('name')->get();

        return view('admin.claims.edit')->with(compact('claims','categories','products','causes'));
    }
    // public function create()
    // {} Public function store(); //se documenta por que nose si cliente quiere crear un reclamos como admin...






}
