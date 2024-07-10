var contrasenaKey = document.getElementById("contrasena_key");
var contrasena = document.getElementById("contrasena");

contrasenaKey.addEventListener('click', function() {
    contrasena.value = "hola mundo"
    if (contrasena.type === "password") {
        contrasena.type = "text";
    } else {
        contrasena.type = "password";
    }
});
