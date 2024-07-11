[btnLogin_lock, contrasena
] = [
    "btnLogin_lock",
     "contrasena"
].map(document.getElementById, document);


btnLogin_lock.addEventListener('click', function() {
    contrasena.type = (contrasena.type === "password")? "text" : "password"
});