CREATE SCHEMA dataset;

CREATE TABLE dataset.tb_usuario(
    nome 			VARCHAR(45) NOT NULL,
    sobrenome 		VARCHAR(45) NOT NULL,
    user_id 		INTEGER,
    cpf 			INTEGER ,
    senha 			VARCHAR(15),
    email 			VARCHAR(45),
    sexo 			BOOLEAN,
    nascionalidade 	VARCHAR(15),
    cidade 			VARCHAR(45),
    estado 			CHAR(2),
    modulo_atual 	INTEGER,
    num_video_atual INTEGER,
	dt_nascimento 	DATETIME,
    dt_cadastro 	DATETIME
);


CREATE TABLE dataset.tb_video(
    user_id         INTEGER,
    path_file            VARCHAR(60),
    data_postagem   DATETIME,
    id_video        DATETIME
);

CREATE TABLE dataset.tb_modulos(
    disponivel INTEGER
);
