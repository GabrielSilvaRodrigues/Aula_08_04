CREATE TABLE usuario (
	id_usuario INTEGER PRIMARY KEY autoincrement,
	nm_usuario VARCHAR(100),
	email VARCHAR(150),
	senha VARCHAR(30),
	cpf CHAR(14)
);

DROP TABLE usuario;