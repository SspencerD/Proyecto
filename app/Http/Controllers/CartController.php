<?php

namespace App\Http\Controllers;

use App\Mail\NewOrder;
use App\User;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Mail;

class CartController extends Controller
{

    public function update()
    {
        $client =auth()->user();
        $cart = $client->cart;
        $cart->status = 'Pending';
        $cart->order_date = Carbon::now();
        $cart->save(); //update

        $admins = User::where('admin', true)->get();
        Mail::to($admins)->send( new NewOrder($client,$cart));

        $notificacion = 'Tu pedido se ha registrado correctamente. Te contactaremos pronto via Mail!';

        return back()->with(compact('notificacion'));


    }
}
