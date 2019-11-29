<?php

namespace App\Http\Controllers\Partner;

use App\Category;
use App\Cause;
use App\Claim;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;
use app\User;

class ClaimController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {

        return view('partner.claims.index');
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
        $rules = [

            'title' =>'required|min:5',
            'description' =>'required|min:100 max:1000',
            'product' =>'sometimes|exists:products,id',
            'category' =>'sometimes|exists:categories,id',
            'cause' =>'sometimes|exists:causes,id',
            'reason' =>'sometimes|exists:reasons,id',
            'cargo' =>'required',
            'lote' =>'required',
            'qty_claim' =>'required|numeric',
            'qty_delivery' =>'required|numeric'

        ];

        $messages = [

            'title.required' => 'Es necesario un titulo para su reclamo',
            'title.min' => 'El titulo debe tener al menos 5 caracteres',
            'description.required' => 'Es necesario una descripción de su reclamo',
            'description.min' => 'La descripción debe tener al menos 100 caracteres...',
            'description.max' => ' Uups, se paso de la cantidad solicitada maximo 1000 caracteres',
            'cargo.required' => 'Es necesario un cargo para su reclamo',
            'lote.required' => 'Es obligatorio poner un lote',
            'qty_claim.required' => 'Es necesario saber la cantidad del producto reclamado',
            'qty_delivery.required' => 'Es necesario saber la cantidad de productos despachado',
            'qty_claim.numeric' => 'Debes poner una cantidad numerica , ejemplo:10000',
            'qty_delivery.numeric' => 'Debes poner una cantidad numerica , ejemplo: 10000',
        ];

        $this->validate($request, $rules ,$messages);

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
}
