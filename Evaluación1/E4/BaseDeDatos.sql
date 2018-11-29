DROP TABLE IF EXISTS productos;
DROP TABLE IF EXISTS supermercados;

CREATE TABLE supermercados (
    id MEDIUMINT NOT NULL AUTO_INCREMENT,
    nombre VARCHAR(30) NOT NULL,
    color  CHAR(7) NOT NULL,
    PRIMARY KEY (id)
);


CREATE TABLE productos (
    id MEDIUMINT NOT NULL AUTO_INCREMENT,
    id_super MEDIUMINT NOT NULL,
    nombre VARCHAR(30) NOT NULL,
    descripcion VARCHAR(300) NOT NULL,
    precio decimal(5,2) NOT NULL,
    PRIMARY KEY (id),
    FOREIGN KEY (id_super) REFERENCES  supermercados (id)
);


INSERT INTO supermercados (id, nombre, color) VALUES
  (1,'Dia', '#FE0101'),
  (2,'Mercadona', '#33FE01'),
  (3,'ElCorteInglés', '#25B701');

INSERT INTO productos (nombre, descripcion, precio, id_super) VALUES
  ('champú', 'Champú pelo', '3.9', 1),
  ('champú', 'Champú pelo', '3.7', 2),
  ('tomates', 'Tomate pera', '2.8', 1),
  ('tomates', 'Tomates de huerta', '2.9', 2),
  ('tomates', 'Tomate pata negra', '3.5', 3),
  ('queso', 'Queso manchego', '3.4', 3);
