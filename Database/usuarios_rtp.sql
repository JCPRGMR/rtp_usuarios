-- Active: 1718128573843@@127.0.0.1@3306@test_cuentas
DROP DATABASE IF EXISTS test_cuentas;
CREATE DATABASE test_cuentas;

use test_cuentas;

CREATE TABLE usuarios(
    id_usuario int primary key AUTO_INCREMENT,
    nom_usuario varchar(50),
    clave varchar(10),
    estado tinyint(1),
    usuario_registrado datetime,
    usuario_modificado datetime
)