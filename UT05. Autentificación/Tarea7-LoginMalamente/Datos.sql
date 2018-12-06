DROP TABLE IF EXISTS user;
CREATE TABLE user(
	nombreUsuario VARCHAR(120),
	nombre VARCHAR(100),
	contrasena VARCHAR(20)
) ENGINE=INNODB;

insert into user (nombreUsuario, nombre, contrasena)
values ("admin", "Administrador","1234");
insert into user (nombreUsuario, nombre, contrasena)
values ("NicoFQ", "Nicolas","1234");
insert into user (nombreUsuario, nombre, contrasena)
values ("Leo1990", "Leonardo","1234");