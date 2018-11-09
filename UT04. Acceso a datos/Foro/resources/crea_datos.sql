INSERT INTO usuario (
	id_usuario,
	nombre,
	contrasena
) VALUES (
	"Nico",
	"nico"
);

INSERT INTO tema (
id_tema,
titulo,
etiqueta,
fecha_publcacion,
id_usuario
) VALUES (

	"El primer tema",
	"Principios",
	"2018-10-10",
	
);


INSERT INTO respuesta (
id_respuesta,
titulo,
usuario,
contenido,
fecha_publcacion,
id_tema
) VALUES (

	"La primera respuesta",
	"UsuarioResponde",
	"Joder, esto esta comenzando!!",
	"2018-11-11",
	
);
