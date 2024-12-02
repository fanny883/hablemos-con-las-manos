function validar(form) {
    var nombre, apellidos, correo, usuario, clave, telefono, expresion;
    nombre = document.getElementById('nombre').value;
    apellidos = document.getElementById('apellidos').value;
    correo = document.getElementById('correo').value;
    usuario = document.getElementById('usuario').value;
    clave = document.getElementById('clave').value;
    telefono = document.getElementById('telefono').value;

    expresion = /\w+@\w+\.+[a-z]/;
    
    if (nombre === "" || apellidos === "" || correo === "" || usuario === "" || clave === "" || telefono === "") {
        alert("Todos los campos son obligatorios");
        return false;
    } else if (nombre.length > 30) {
        alert("El nombre es muy largo");
        return false;
    } else if (apellidos.length > 50) {
        alert("Los apellidos no deben contener más de 50 letras");
        return false;
    } else if (!expresion.test(correo)) {
        alert("El correo no es válido");
        return false;
    } else if (usuario.length > 10 || clave.length > 10) {
        alert("El usuario y la contraseña deben contener máximo 10 caracteres");
        return false;
    } else if (telefono.length > 10) {
        alert("El teléfono no debe de contener más de 10 caracteres");
        return false;
    } else if (isNaN(telefono)) {
        alert("El teléfono solo debe contener números");
        return false;
    }
}