DROP TABLE IF EXISTS usuarios;

CREATE TABLE usuarios (
  id INT AUTO_INCREMENT,
  nombre VARCHAR(30) NOT NULL,
  contrasena VARCHAR(30) NOT NULL,
  PRIMARY KEY (id)
);
