<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Css/Login_1.css">
    <title>Soy un login</title>
</head>
<body class="login_body">
    <div class="login_bg">img</div>
    <div class="login_form">
        <div class="login_form_header">
            Gestion de usuarios
        </div>
        <form action="" method="post" class="login_form_body">
            <div class="form_img_user">
                <img src="../Imgs/rtp_mundo.jpg" alt="">
            </div>
            <div class="form_data_user">
                <div class="login_form_text">
                    <label for="nombre_usuario">Nombre de usuario</label>
                    <input type="text" name="" id="nombre_usuario" placeholder="nombre de usuario">
                </div>
                <div class="login_form_text">
                    <label for="contrasena">Contraseña</label>
                    <div>
                        <input type="password" name="" id="contrasena" placeholder="Contraseña">
                        <div class="login_key" id="constrasena_key">CD</div>
                    </div>
                </div>
                <div class="login_form_button">
                    <div class="login_btn_enviar">
                        Iniciar sesion
                    </div>
                </div>
            </div>
        </form>
        <div class="login_form_footer"></div>
    </div>
</body>
<script src="../Js/login_password.js"></script>