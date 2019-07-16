var mensajes = ['Ni números, ni caracteres especiales', 'Ni números, ni caracteres especiales', 'Dirección de correo inválida', 'Password inválida', 'Las contraseñas deben coincidir'];
var objetos = null;

function crearAviso(msj, pos){
    objetos = document.createElement("DIV");
    var t = document.createTextNode(msj);
}