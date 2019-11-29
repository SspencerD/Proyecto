<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Claim extends Model
{
    public static $rules = [

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

    public static $messages = [

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
}
