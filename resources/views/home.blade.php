@extends('layouts.work')

@section('contenido')



@if (session('status'))
(session('status'))
<br><br><br><br>
<script>
    toastr["success"]("Haz ingresado correctamente {{name}}", "Bienvenido {{name}}" {
        "progressBar": true,
        "showDuration": "300",
        "hideDuration": "1000",
        "timeOut": "5000",
        "positionClass": "toast-top-center"
    });
</script>
@endif



@endsection