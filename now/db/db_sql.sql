CREATE SCHEMA dataset;

CREATE TABLE dataset.tb_usuario(
    nome 			VARCHAR(45) NOT NULL,
    sobrenome 		VARCHAR(45) NOT NULL,
    user_id 		INTEGER AUTO_INCREMENT ,
    cpf 			INTEGER UNIQUE,
    senha 			VARCHAR(32) NOT NULL,
    email 			VARCHAR(45) UNIQUE,
    sexo 			BOOLEAN NOT NULL, 
    nascionalidade 	VARCHAR(15) NOT NULL,
    cidade 			VARCHAR(45) NOT NULL,
    estado 			CHAR(2) NOT NULL,
    modulo_atual 	INTEGER,
    num_video_atual INTEGER,
	dt_nascimento 	DATE NOT NULL,
    dt_cadastro 	DATE NOT NULL,

    CONSTRAINT pk_user_id PRIMARY KEY(user_id)
);

CREATE TABLE dataset.tb_modulos(
    user_id   INTEGER,
    mod1      BOOLEAN,
    mod2      BOOLEAN,
    mod3      BOOLEAN,
    mod4      BOOLEAN,
    mod5      BOOLEAN,
    mod6      BOOLEAN,
    mod7      BOOLEAN,
    mod8      BOOLEAN,
    mod9      BOOLEAN,
    mod10      BOOLEAN,
    mod11      BOOLEAN,
    mod12      BOOLEAN,
    
    CONSTRAINT fk_mod_userid FOREIGN KEY(user_id) 
    REFERENCES dataset.tb_usuario(user_id)
);


CREATE TABLE dataset.tb_video(
    path_file VARCHAR(60) NOT NULL,
    data_postagem DATETIME NOT NULL,
    id_video INTEGER NOT NULL,
    user_id INTEGER NOT NULL,

    CONSTRAINT fk_tb_video_user_id FOREIGN KEY(user_id)
    REFERENCES dataset.tb_usuario(user_id)
);
