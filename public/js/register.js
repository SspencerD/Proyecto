$(function() {

    $('#select-country').on('change', onSelectCountryChange);

});


function onSelectCountryChange() {

    var country_id = $(this).val();

    if (!country_id) {
        $('#select-region').html('<option value="">Seleccione una Región</option>');

        return;
    }
    //peticion AJAX
    $.get('/api/pais/' + country_id + '/region',
        function(region) {

            var html_select = '<option value="">Seleccione una Región</option>';

            for (var i = 0; i < region.length; ++i)

                html_select += '<option value="' + region[i].id + '">' + region[i].name + '</option>';

            $('#select-region').html(html_select);


        });
}

//peticion AJAX para Ciudad
$(function() {

    $('#select-region').on('change', onSelectRegionChange);



});

function onSelectRegionChange() {

    var region_id = $(this).val();

    if (!region_id) {

        $('#select-city').html('<option value="">Seleccione una ciudad</option>');

        return;
    }


    //petición ajax de ciudad
    $.get('api/region/' + region_id + '/ciudad', function(ciudad) {
        var city_select = '<option value="">Seleccione ciudad</option>';

        for (var i = 0; i < ciudad.length; ++i)
            city_select += '<option value="' + ciudad[i].id + '">' + ciudad[i].name + '</option>';

        $('#select-city').html(city_select);





    });


}

//petición ajax comunas
$(function() {

    $('#select-city').on('change', onSelectCityChange);



});

function onSelectCityChange() {

    var city_id = $(this).val();

    if (!city_id) {

        $('#select-province').html('<option value="">Seleccione una comuna</option>');

        return;
    }


    //petición ajax de ciudad
    $.get('api/ciudad/' + city_id + '/comuna', function(comuna) {
        var province_select = '<option value="">Seleccione comuna</option>';

        for (var i = 0; i < comuna.length; ++i)
            province_select += '<option value="' + comuna[i].id + '">' + comuna[i].name + '</option>';

        $('#select-province').html(province_select);





    });


}

function ocultar() {

    document.getElementById('empresa').style.display = "none";

    var escroll = document.getElementById('password');
    escroll.contentWindow.scrollTo(0, 500);
    escroll.hover(function() {
        $(this).css("color", "yellow");
    });



}

function mostrar() {

    document.getElementById('empresa').style.display = "block";

}

function checkRut(rut) {
    // Despejar Puntos
    var valor = rut.value.replace('.', '');
    // Despejar Guión
    valor = valor.replace('-', '');

    // Aislar Cuerpo y Dígito Verificador
    cuerpo = valor.slice(0, -1);
    dv = valor.slice(-1).toUpperCase();

    // Formatear RUN
    rut.value = cuerpo + '-' + dv

    // Si no cumple con el mínimo ej. (n.nnn.nnn)
    if (cuerpo.length < 7) { rut.setCustomValidity("RUT Incompleto"); return false; }

    // Calcular Dígito Verificador
    suma = 0;
    multiplo = 2;

    // Para cada dígito del Cuerpo
    for (i = 1; i <= cuerpo.length; i++) {

        // Obtener su Producto con el Múltiplo Correspondiente
        index = multiplo * valor.charAt(cuerpo.length - i);

        // Sumar al Contador General
        suma = suma + index;

        // Consolidar Múltiplo dentro del rango [2,7]
        if (multiplo < 7) { multiplo = multiplo + 1; } else { multiplo = 2; }

    }

    // Calcular Dígito Verificador en base al Módulo 11
    dvEsperado = 11 - (suma % 11);

    // Casos Especiales (0 y K)
    dv = (dv == 'K') ? 10 : dv;
    dv = (dv == 0) ? 11 : dv;

    // Validar que el Cuerpo coincide con su Dígito Verificador
    if (dvEsperado != dv) { rut.setCustomValidity("RUT Inválido"); return false; }

    // Si todo sale bien, eliminar errores (decretar que es válido)
    rut.setCustomValidity('');
}