#!/bin/bash
BD_USUARIO="user_login"
BD_PROYECTO="proyecto_login"
BD_NOMBRE="proyecto_login"
BD_PASS="1234"
BD_SCRIPT_1="resources/creacionBaseDeDatos.sql"
BD_SCRIPT_2="resources/databaseTest.sql"

mysql -u $BD_USUARIO -p$BD_PASS $BD_NOMBRE < $BD_SCRIPT_1
mysql -u $BD_USUARIO -p$BD_PASS $BD_NOMBRE < $BD_SCRIPT_2