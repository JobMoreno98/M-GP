CREATE DATABASE IF NOT EXISTS global_politics;

CREATE TABLE IF NOT EXISTS global_politics.academicos(
    id INTEGER AUTO_INCREMENT,
    correo VARCHAR() NOT NULL ,
    nombre VARCHAR(30),
    apellidos VARCHAR(50),
    titulo VARCHAR(10),
    maestria VARCHAR(50),
    puesto1 VARCHAR(50),
    puesto2 VARCHAR(50),
    sni VARCHAR(20),
    perfil VARCHAR(20),
    biografia VARCHAR(3000),
    activo TINYINT DEFAULT 1,
);
-- alter table goes here:


CREATE TABLE IF NOT EXISTS global_politics.aca_inv(
    id INTEGER AUTO_INCREMENT,
    id_academico INTEGER,
    linea TEXT,
    activo TINYINT DEFAULT 1
);
-- alter table goes here:


CREATE TABLE IF NOT EXISTS global_politics.aca_proys(
    id INTEGER AUTO_INCREMENT,
    id_academico INTEGER,
    proyecto TEXT,
    activo TINYINT DEFAULT 1
);
-- alter table goes here:


CREATE TABLE IF NOT EXISTS global_politics.aca_publ(
    id INTEGER AUTO_INCREMENT,
    id_academico INTEGER,
    publicacion TEXT,
    activo TINYINT DEFAULT 1
);
-- alter table goes here:


CREATE TABLE IF NOT EXISTS global_politics.eventos(
    id INTEGER AUTO_INCREMENT,
    titulo VARCHAR(200),
    subtitulo VARCHAR(200),
    exponentes JSON,
    fecha TIMESTAMP,
    enlace VARCHAR,
);
-- alter table goes here:


CREATE TABLE IF NOT EXISTS global_politics.banner(
    id INTEGER AUTO_INCREMENT,
);
-- alter table goes here:


CREATE TABLE IF NOT EXISTS global_politics.galeria(
    id INTEGER AUTO_INCREMENT,
);
-- alter table goes here:


CREATE TABLE IF NOT EXISTS global_politics.objetivos(
    id INTEGER AUTO_INCREMENT,
);
-- alter table goes here:


CREATE TABLE IF NOT EXISTS global_politics.req_admision(
    id INTEGER AUTO_INCREMENT,
);
-- alter table goes here:


CREATE TABLE IF NOT EXISTS global_politics.req_titulacion(
    id INTEGER AUTO_INCREMENT,
);
-- alter table goes here:


CREATE TABLE IF NOT EXISTS global_politics.est_tutorias(
    id INTEGER AUTO_INCREMENT,
);
-- alter table goes here:

CREATE TABLE IF NOT EXISTS global_politics.usuarios(
    id INTEGER AUTO_INCREMENT,
    correo VARCHAR() UNIQUE NOT NULL,
    pswd VARCHAR() NOT NULL,
    activo TINYINT DEFAULT 1,
    rol ENUM('normal', 'administrador'),
    tmst
);
-- alter table goes here:

