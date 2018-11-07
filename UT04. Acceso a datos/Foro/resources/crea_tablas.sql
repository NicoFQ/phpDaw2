DROP TABLE IF EXISTS usuario;
CREATE TABLE usuario(

	id_usuario INT(4) PRIMARY KEY,
	nombre VARCHAR(20) NOT NULL,
	contrasena VARCHAR(20) NOT NULL
	
);



DROP TABLE IF EXISTS tema;
CREATE TABLE tema(
	id_tema INT(4) PRIMARY KEY,
	titulo VARCHAR(20),
	etiqueta VARCHAR(20),
	fecha_publcacion DATE NOT NULL,
	id_usuario INT(4),
	CONSTRAINT fk_tema FOREIGN KEY (id_usuario) 
	REFERENCES usuario(id_usuario)
	ON DELETE cascade
	);


DROP TABLE IF EXISTS respuesta;
CREATE TABLE respuesta(
	id_respuesta INT(4) PRIMARY KEY,
	titulo VARCHAR(20) NOT NULL,
	usuario VARCHAR(20) NOT NULL,
	contenido VARCHAR(20) NOT NULL,
	fecha_publcacion DATE NOT NULL,
	id_tema INT(4), 
	CONSTRAINT fk_respuesta FOREIGN KEY (id_tema) 
	REFERENCES tema(id_tema)
	ON DELETE cascade
	
);


