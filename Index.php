<html lang="es/ES"></html>
<?php
    if(isset($_GET['page'])){
        include_once 'Views/' . match ($_GET['page']) {
            '1' => 'Login.php',
            '2' => 'Main.php',
        };
    }