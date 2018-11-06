#!/bin/bash

BD_USUARIO="user_login"
BD_PASS="1234"
BD_NOMBRE="proyecto_login"
BD_SCRIPT_1="resources/CreacionBaseDeDatos.sql"
BD_SCRIPT_2="resources/DataBaseTest.sql"

mysql -u $BD_USUARIO -p$BD_PASS $BD_NOMBRE < $BD_SCRIPT_1
mysql -u $BD_USUARIO -p$BD_PASS $BD_NOMBRE < $BD_SCRIPT_2
