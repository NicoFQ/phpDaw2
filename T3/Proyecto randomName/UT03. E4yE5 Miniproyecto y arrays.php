UT03. E4
Crea una estructura web completa y mete en la carpeta de recursos los archivos
con los datos de paises y nombres. Crea un archivo en src que sea
generador_usuarios.php y que genere N usuarios de la forma
[
  "nombre" => "Jorge",
  "apellido" => "Dueñas Lerín",
  "país" => "Madagascar"
]

Estos N usuarios estarán metidos en un array con un índice numérico.
El número N está definido en el archivo de configuración.
Crea dos páginas visualiza_todos.php y visualiza_todos_menos_alex.php
Una mostrará los N usuarios de la forma
[PAÍS] NOMBRE COMPLETO
[PAÍS] NOMBRE COMPLETO
[PAÍS] NOMBRE COMPLETO
...

La otra mostrará los N usuarios pero si encuentra uno con nombre Alex se
dentendrá y mostrará: "Error. User Alex found!"
[PAÍS] NOMBRE COMPLETO
[PAÍS] NOMBRE COMPLETO
...
"Error. User Alex found!"


UT03. E5
Crea un generador_usuarios_alternativo.php que genere los usuarios y los meta
en el array usando como índice su país
[
  "Madagascar" => [
    "nombre" => "Jorge",
    "apellido" => "Dueñas Lerín",
  ],
  "España" => [
    "nombre" => "Pepe",
    "apellido" => "Botica Gutierrez",
  ],
]
Crea una visualiza_todos_ordenados.php

NOTA: investiga las funciones sobre arrays y sobre cómo ordenar
