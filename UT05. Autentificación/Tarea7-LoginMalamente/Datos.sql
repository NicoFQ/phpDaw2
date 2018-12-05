DROP TABLE IF EXISTS usuario;
CREATE TABLE user(

	nombreUsuario VARCHAR(120),
	nombre VARCHAR(100),
	contrasena VARCHAR(20),

	) ENGINE=INNODB;

insert into user (nombreUsuario, nombre, contrasena)
values ("admin", "pepe","1234");
insert into user (nombreUsuario, nombre, contrasena)
values ("Ra-Joyyy", "Mariano","PPPP");
insert into user (nombreUsuario, nombre, contrasena)
values ("Sanchez1985", "Pedro","PSOE");