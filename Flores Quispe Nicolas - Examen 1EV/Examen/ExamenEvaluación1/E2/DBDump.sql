DROP TABLE IF EXISTS bebidas;
DROP TABLE IF EXISTS combinados;

CREATE TABLE bebidas (
    id MEDIUMINT NOT NULL AUTO_INCREMENT,
    nombre VARCHAR(30) NOT NULL,
    alcohol VARCHAR(2) NOT NULL,
    PRIMARY KEY (id)
);


CREATE TABLE combinados (
    id MEDIUMINT NOT NULL AUTO_INCREMENT,
    nombre VARCHAR(30) NOT NULL,
    bebidas_alcoholicas VARCHAR(300) NOT NULL,
    bebidas_no_alcoholicas VARCHAR(300) NOT NULL,
    tipo VARCHAR(20) NOT NULL,
    PRIMARY KEY (id)
);


INSERT INTO bebidas (id, nombre, alcohol) VALUES
  (101,'Ron', 'S'),
  (102,'Whisky', 'S'),
  (103,'Absenta', 'S'),
  (104,'Tequila', 'S'),
  (105,'Vino', 'S'),
  (106,'Vodka', 'S'),
  (107,'Baileys', 'S'),
  (201,'Coca cola', 'N'),
  (202,'Zumo piña', 'N'),
  (203,'Fanta', 'N'),
  (204,'Zumo naranja', 'N'),
  (205,'Granadina', 'N'),
  (206,'Lima', 'N');

INSERT INTO combinados (
  nombre, bebidas_alcoholicas, bebidas_no_alcoholicas, tipo
) VALUES
  ('Kalimotxo', 'a:1:{i:0;i:105;}', 'a:1:{i:0;i:202;}', 'coctel'),
  ('Cerebrito', 'a:2:{i:0;i:106;i:1;i:107;}', 'a:2:{i:0;i:205;i:1;i:206;}', 'chupito'),
  ('Zumo multifruta', '', 'a:2:{i:0;i:202;i:1;i:204;}', 'sinalcohol')
  ;
