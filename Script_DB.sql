CREATE DATABASE bdproductos;

CREATE TABLE producto (
  codigo int(11) NOT NULL AUTO_INCREMENT,
  nombre varchar(120) DEFAULT NULL,
  precio decimal(6,2) DEFAULT NULL,
  PRIMARY KEY (codigo)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

INSERT INTO producto VALUES (1, 'aceite', 1800.78);
INSERT INTO producto VALUES (2, 'pasta', 3570.52);

CREATE TABLE usuarios (
  usuario varchar(10) NOT NULL,
  nombre varchar(100) NOT NULL,
  clave varchar(20) NOT NULL,
  rol varchar(10) NOT NULL CHECK (rol in ('admin', 'no-admin')),
  PRIMARY KEY (usuario)
  )

INSERT INTO usuarios VALUES ('lmarango', 'Luis Manuel', '123', 'admin');
INSERT INTO usuarios VALUES ('damunoz', 'Daniel Alejandro', '321', 'no-admin');
INSERT INTO usuarios VALUES ('gandres', 'Germán Andrés', 'abc', 'no-admin');
