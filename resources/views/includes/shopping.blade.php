 <!-- tab-furniture-->
 <div id="cart" class="btn-group btn-block">
     <button type="button" class="btn btn-inverse btn-block btn-lg dropdown-toggle cart-dropdown-button">
         <span id="cart-total">
             <span>Carrito</span><br>
             {{ auth()->user()->cart->details->count() }} item(s)</span></button>

     <ul class="dropdown-menu pull-right cart-dropdown-menu">
         @foreach (auth()->user()->cart->details as $detail)
         <li>
             <table class="table table-striped">
                 <tbody>
                     <tr>
                         <td class="text-center"><a href="{{ url('/products/'.$detail->product->id) }}">
                                 <img title="{{ $detail->product->name }}" alt="{{ $detail->product->name }}" src="{{ $detail->product->featured_image_url }}" height="30"></a>
                         </td>
                         <td class="text-left"><a href="{{ url('/products/'.$detail->product->id) }}">{{ $detail->product->name }}</a></td>
                         <td class="text-right">{{ $detail->quantity }}</td>
                         <td class="text-right">{{ $detail->product->price }}</td>
                         <td class="text-center">
                             <form method="post" action="{{ url('/cart') }}">
                                 {{ csrf_field() }}
                                 {{ method_field('DELETE') }}
                                 <input type="hidden" name="cart_detail_id" value="{{ $detail->id }}">
                                 <button class="btn btn-danger btn-xs" title="Eliminar" type="submit"><i class="fa fa-times"></i></button>
                             </form>
                         </td>
                     </tr>
                 </tbody>
             </table>
         </li>
         @endforeach
         <div class="button-group">
             <p class="text-right"> <span class="btn-viewcart"><a href="{{url('/perfil#carrito')}}"><strong><i class="fa fa-shopping-cart"></i>&nbsp;&nbsp;Ver Carrito</strong></a>
                 </span> <span class="btn-checkout"><a href="checkout.html"><strong><i class="fa fa-share"></i>Realizar compra</strong></a></span> </p>
         </div>
     </ul>

 </div>