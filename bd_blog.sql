CREATE DATABASE bd_blog;

USE bd_blog;

CREATE TABLE usuarios(
	id_usuario INT NOT NULL AUTO_INCREMENT,
	nombre VARCHAR(20) NOT NULL,
	email VARCHAR(100) NOT NULL,
	password VARCHAR(40) NOT NULL,
	fecha_registro DATETIME NOT NULL,
	activo TINYINT NOT NULL,
	PRIMARY KEY(id_usuario)
);