@component('mail::message')
# E-mail de bienvenida

Hola {{ $user->name }} , Muchas gracias por unirte a Industria Corchera S.A , sabemos que el tiempo es oro , por lo cual 
esperamos que tu ingreso sea lo mas comodo posible.

Dentro de tu estadia esperamos tener todos los productos y servicios que tu deseas.

Lo primero que debe hacer ahora es confirmar tu correo electronico haciendo clic en el siguiente enlace.

@component('mail::button', ['url' => '$emailConfirmationUrl'])
Confirma tu email!
@endcomponent

De esta forma nos aseguramos que eres humano , y nos podemos poner en contacto contigo.

Y si llegas a olvidar tu contraseña , la podrás recuperar a través de este correo.

Muchas gracias y que estes muy bien!

<br>
{{ config('app.name') }}
@endcomponent
