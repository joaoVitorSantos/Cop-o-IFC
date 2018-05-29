-- Geração de Modelo físico
-- Sql ANSI 2003 - brModelo.



CREATE TABLE usuario (
id_usuario int(4) PRIMARY KEY not null auto_increment,
nome_usuario varchar(25) not null,
senha varchar(20) not null,
email varchar(35) not null,
id_tipo_usuario int(4)
);

CREATE TABLE tipo_usuario (
id_tipo_usuario int(4) PRIMARY KEY not null auto_increment,
tipo varchar(10)
);

CREATE TABLE time (
id_time int(4) PRIMARY KEY not null auto_increment,
logo varchar(30),
nome_time varchar(30) not null,
pontos int(5) not null
);

CREATE TABLE jogador (
id_jogador int(4) PRIMARY KEY not null auto_increment,
numero_camisa int(4) not null,
nome varchar(30) not null,
gols int(3) not null,
id_time int(4) not null,
FOREIGN KEY(id_time) REFERENCES time (id_time)
);

ALTER TABLE usuario ADD FOREIGN KEY(id_tipo_usuario) REFERENCES tipo_usuario (id_tipo_usuario);
