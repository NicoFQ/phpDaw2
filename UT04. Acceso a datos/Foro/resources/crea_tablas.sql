SET FOREIGN_KEY_CHECKS=0; 	-- QUITA LA COMPROBACION DE CLAVES FORANEAS EN MYSQL, 

DROP TABLE IF EXISTS tema;
CREATE TABLE tema(
	id_tema INT AUTO_INCREMENT PRIMARY KEY,
	titulo VARCHAR(120),
	nombre VARCHAR(20),
	clave VARCHAR(20),
	etiqueta VARCHAR(20),
	fecha_publicacion TIMESTAMP DEFAULT CURRENT_TIMESTAMP
	) ENGINE=INNODB;

DROP TABLE IF EXISTS respuesta;
CREATE TABLE respuesta(
	id_respuesta INT AUTO_INCREMENT PRIMARY KEY,
	titulo VARCHAR(120) NOT NULL,
	usuario VARCHAR(20) NOT NULL,
	contenido VARCHAR(500) NOT NULL,
	fecha_publicacion TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
	id_tema INT, 
	FOREIGN KEY (id_tema) 
	REFERENCES tema(id_tema)
	ON DELETE CASCADE
	
) ENGINE=INNODB; -- INFORMACION DE ENGINE=INNODB -> https://www.arsys.es/blog/programacion/myisam-o-innodb-elige-tu-motor-de-almacenamiento-mysql/


