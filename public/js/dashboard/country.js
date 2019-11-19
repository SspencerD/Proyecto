$(document).ready(function() {

    $('#select-country').on('change', onSelectCountryChange);

});


function onSelectCountryChange() {

    var country_id = $(this).val();

    if (!country_id) {
        $('#select-region').html('<option value="">Seleccione una Región</option>');

        return;
    }
    //peticion AJAX
    $.get('/api/paises/' + country_id + '/regiones',
        function(region) {

            var html_select = '<option value="">Seleccione una Región</option>';

            for (var i = 0; i < region.length; ++i)

                html_select += '<option value="' + region[i].id + '">' + region[i].name + '</option>';

            $('#select-region').html(html_select);


        });
}
// por ciudades
$(document).ready(function() {

    $('#select-region').on('change', onSelectRegionChange);

});


function onSelectRegionChange() {

    var region_id = $(this).val();

    if (!region_id) {
        $('#select-city').html('<option value="">Seleccione una Ciudad</option>');

        return;
    }
    //peticion AJAX
    $.get('/api/regiones/' + region_id + '/ciudades',
        function(city) {

            var html_select = '<option value="">Seleccione una Ciudad</option>';

            for (var i = 0; i < city.length; ++i)

                html_select += '<option value="' + city[i].id + '">' + city[i].name + '</option>';

            $('#select-city').html(html_select);


        });
}
//por Comunas
$(document).ready(function() {

    $('#select-city').on('change', onSelectCityChange);

});


function onSelectCityChange() {

    var province_id = $(this).val();

    if (!province_id) {
        $('#select-province').html('<option value="">Seleccione una Comuna</option>');

        return;
    }
    //peticion AJAX
    $.get('/api/ciudades/' + province_id + '/comunas',
        function(province) {

            var html_select = '<option value="">Seleccione una Comuna</option>';

            for (var i = 0; i < province.length; ++i)

                html_select += '<option value="' + province[i].id + '">' + province[i].name + '</option>';

            $('#select-province').html(html_select);


        });
}

//Validador de RUT

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