#!/bin/bash

PET="POST /api/2/eggs-collect HTTP/1.1
Host: 127.0.0.1
Authorization: Bearer c8b264d11bc6de0d6c45b063bf3e943fb9aa5f2e

"

RES=$(printf "$PET" | nc -v 127.0.0.1 9000)

echo $RES
