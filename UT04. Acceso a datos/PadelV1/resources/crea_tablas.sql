SET FOREIGN_KEY_CHECKS=0; 	-- QUITA LA COMPROBACION DE CLAVES FORANEAS EN MYSQL, 

DROP TABLE IF EXISTS clases;
CREATE TABLE clases(
	id_tema INT AUTO_INCREMENT PRIMARY KEY,
	nombre VARCHAR(30),
	alumnos_serializados VARCHAR(1000)
	) ENGINE=INNODB;

