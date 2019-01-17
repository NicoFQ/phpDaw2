#!/bin/bash

PET="POST /api/2/eggs-count HTTP/1.1
Host: 127.0.0.1
Authorization: Bearer 9fa5ab21efc3f7bc203e8d2684da12c793ca2777

"

RES=$(printf "$PET" | nc -v 127.0.0.1 9000)

echo $RES
