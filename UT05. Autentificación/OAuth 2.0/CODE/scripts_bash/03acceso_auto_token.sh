#!/bin/bash

NAME="RecogeHuevos"
SECRET="88fccabc79c9d2bf170ce8bc0dbf5c76"
CODE="ef1541348899b0b7ddeb80d82dfaf1a7cec4f6e1"

DATA="client_id=$NAME&client_secret=$SECRET&grant_type=authorization_code&redirect_uri=http://127.0.0.1:9001/call_back.php&code=$CODE"
LDATA=${#DATA}

PET_TOKEN="POST /token HTTP/1.1\r\n"
PET_TOKEN=$PET_TOKEN"Host: 127.0.0.1\r\n"
PET_TOKEN=$PET_TOKEN"Content-Type: application/x-www-form-urlencoded; charset=utf-8\r\n"
PET_TOKEN=$PET_TOKEN"Content-Length: $LDATA\r\n"
PET_TOKEN=$PET_TOKEN"\r\n"
PET_TOKEN=$PET_TOKEN"$DATA"
PET_TOKEN=$PET_TOKEN"\r\n\r\n"


echo "Realizando la petición"
printf "$PET_TOKEN"


RES=$(printf "$PET_TOKEN" | nc -v 127.0.0.1 9000)

echo "Respuesta:"
echo $RES

TOKEN=$(echo $RES |  sed -r 's/.*\"access_token\":\"(\w+)\".*/\1/')

echo "Buscando token:"
echo $TOKEN
