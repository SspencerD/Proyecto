<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Se ha recibido un nuevo pedido!</title>
</head>
<body>
    <div class="card-body">
    <p>Nuestro cliente <span>{{$user->name}}</span> ha realizado el siguiente pedido:</p>

    <ul>
        <li>
          <span>  Nombre:</span>{{ $user->name }}
        </li>
        <li>
           <span> Email:</span> {{ $user->email }}
        </li>
        <li>
            <span>Fecha del pedido:</span>  {{ $cart->order_date }}
        </li>
    </ul>
    <hr>
    <table border="1" class="text-center">
        <thead>
            <tr>
                <td>Codigo</td>
                <td>Descripción</td>
                <td>Cantidad</td>
                <td>Precio</td>
                <td>Total</td>
            </tr>
        </thead>
        @foreach($cart->details as $detail)
        <tbody>
            <tr>
            <td></td>
            <td>{{ $detail->product->name }}</td>
            <td>{{$detail->quantity }}</td>
            <td>$ {{$detail->product->price}}</td>
            <td>$ {{ $detail->product->price * $detail->quantity }}</td>          
            </tr>
        </tbody>
        @endforeach
        <tfoot>
            <tr>
                <td>el Subtotal del producto es</td>
            </tr>
                <tr>
                   <td>el Total del producto es</td> 
                </tr> 
                <tr>
                     <td>{{$cart->subtotal}}</td>
                </tr>        
              <tr>
                <td>{{$cart->subtotal * 0.19}}</td>
            </tr>
        </tfoot>
    </table>
    <br>
    <br>
</div>
<a href="{{ url('/admin/orders/'.$cart->id) }}"class="">Haz clic aqui</a>
<br>
<span> Muchas gracias en confiar en nosotros</span>
<br><br>
<footer> Industria corchera S.A , todo los derechos reservados</footer>
</body>
</html>