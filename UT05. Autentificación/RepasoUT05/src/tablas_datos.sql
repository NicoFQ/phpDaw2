DROP TABLE IF EXISTS token;
DROP TABLE IF EXISTS usuario;
DROP TABLE IF EXISTS tmp_usuario;
DROP TABLE IF EXISTS articulo;


CREATE TABLE usuario(
	id INT AUTO_INCREMENT,
	nombre VARCHAR(100) NOT NULL,
	email VARCHAR(100) NOT NULL UNIQUE,
	contrasena VARCHAR(100) NOT NULL,
	direccion VARCHAR(100) NULL,
	recuerdame VARCHAR(100) NULL,
	PRIMARY KEY (id)
);

CREATE TABLE tmp_usuario(
	id INT AUTO_INCREMENT,
	nombre VARCHAR(200) NOT NULL,
	email VARCHAR(200) NOT NULL UNIQUE,
	contrasena VARCHAR(200) NOT NULL,
	direccion VARCHAR(200) NULL,
	token VARCHAR(200) NOT NULL,
	expira TIMESTAMP,
	PRIMARY KEY (id)
);

CREATE TABLE token(
	id_token INT AUTO_INCREMENT,
	id_usuario INT,
	token VARCHAR(100) NOT NULL,
	PRIMARY KEY (id_token),
	CONSTRAINT FK_USUARIO FOREIGN KEY (id_usuario) REFERENCES usuario (id) ON DELETE CASCADE
);

CREATE TABLE articulo(
	id INT AUTO_INCREMENT,
	nombre VARCHAR(200) NOT NULL,
	precio VARCHAR(200) NOT NULL,
	PRIMARY KEY (id)
);
insert 	into articulo(nombre, precio) values ("Mesa", 		12.50);
insert 	into articulo(nombre, precio) values ("Silla",		5.00);
insert 	into articulo(nombre, precio) values ("Lampara",	10.45);
insert 	into articulo(nombre, precio) values ("Tapon", 		1.52);
insert 	into articulo(nombre, precio) values ("Alfombrilla",8.59);
insert 	into articulo(nombre, precio) values ("Chaqueta",	50.97);
insert 	into articulo(nombre, precio) values ("Jersey", 	41.20);

insert 	into usuario(nombre, email, contrasena, direccion) 
		values ("Nico", "nico@hotmail.es", "1234", "calle lejana 24");