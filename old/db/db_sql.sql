
DROP SCHEMA dataset;

CREATE SCHEMA dataset;

CREATE TABLE dataset.tb_usuario(
    nome 			VARCHAR(45) NOT NULL,
    sobrenome 		VARCHAR(45) NOT NULL,
    user_id 		INTEGER AUTO_INCREMENT ,
    cpf 			INTEGER ,
    senha 			VARCHAR(15) NOT NULL,
    email 			VARCHAR(45),
    sexo 			BOOLEAN NOT NULL, 
    nascionalidade 	VARCHAR(15) NOT NULL,
    cidade 			VARCHAR(45) NOT NULL,
    estado 			CHAR(2) NOT NULL,
    modulo_atual 	INTEGER,
    num_video_atual INTEGER,
	dt_nascimento 	DATETIME NOT NULL,
    dt_cadastro 	DATETIME NOT NULL,
    CONSTRAINT pk_user_id PRIMARY KEY(user_id)
);

CREATE TABLE dataset.tb_modulos(
    user_id   INTEGER,
    modA      BOOLEAN,
    modB      BOOLEAN,
    modC      BOOLEAN,
    modD      BOOLEAN,
    modE      BOOLEAN,
    modF      BOOLEAN,
    modG      BOOLEAN,
    modH      BOOLEAN,
    modI      BOOLEAN,
    modJ      BOOLEAN,
    modK      BOOLEAN,
    modL      BOOLEAN,
    CONSTRAINT fk_mod_userid FOREIGN KEY(user_id) REFERENCES dataset.tb_modulos(user_id)
);


CREATE TABLE dataset.tb_video(
    path_file VARCHAR(60) NOT NULL,
    data_postagem DATETIME NOT NULL,
    id_video INTEGER NOT NULL,
    user_id INTEGER NOT NULL,
    CONSTRAINT fk_tb_video_user_id FOREIGN KEY(user_id)
    REFERENCES dataset.tb_usuario(user_id)
);

describe dataset.tb_video;
describe dataset.tb_usuario;
describe dataset.tb_modulos;

