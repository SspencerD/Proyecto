<?php

namespace App\Http\Controllers\Partner;

use App\Claim;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ClaimController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    //muesta una lista de reclamos
    public function index()
    {
        return view ('partner.claims.index');
    }
    //crear un reclamo 
    public function create()
    {
        return view ('partner.claims.create');
    }
    //mostrar la vista de cada reclamo
    public function show()
    {
    
        return view ('partner.claims.show');
    }
}
