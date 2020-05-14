$(function(){
    $('#fechaNacimiento').on('change', calcularEdad);
});

function calcularEdad() {
    fecha = $(this).val();
    var hoy = new Date();
    var fechaNacimiento = new Date(fecha);
    var edad = hoy.getFullYear() - fechaNacimiento.getFullYear();
    var m = hoy.getMonth - fechaNacimiento.getMonth();

    if(m < 0 || (m === 0 && hoy.getDate() < fechaNacimiento.getDate())) {
        edad--;
    }
    $('#edad').val(edad);
}