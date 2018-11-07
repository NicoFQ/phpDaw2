#!/bin/bash
BD_USUARIO="user_login"
BD_PROYECTO="proyecto_login"
BD_NOMBRE="proyecto_login"
BD_PASS="admin1234"
BD_SCRIPT="resources/creacionBaseDeDatos.sql"

mysql -u $BD_USUARIO -p$BD_PASS $BD_NOMBRE < $BD_SCRIPT