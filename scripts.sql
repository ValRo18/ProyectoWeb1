CREATE DATABASE practicaweb1;


create table usuarios(
	id serial primary key not null,
	nombre varchar,
	apellidos varchar,
	cedula numeric not null,
	email varchar not null,
	fechaNacimiento date,
	password varchar,
	descripcion varchar,
	puesto varchar,
	direccion varchar,
	telefono varchar,
	sitioWeb varchar,
	github varchar,
	foto varchar,
	CONSTRAINT unq_eml_usr UNIQUE(email)
);

create table experiencia(
	id serial primary key not null,
	id_usuario int,
	compannia varchar,
	cargo varchar,
	periodo varchar,
	descripcion varchar,
	sitioWeb varchar,
	CONSTRAINT fk_usu_exp FOREIGN KEY(id_usuario) REFERENCES usuarios(id)
);

create table educacion(
	id serial primary key not null,
	id_usuario int,
	titulo varchar,
	periodo varchar,
	descripcion varchar,
	sitioWeb varchar,
	CONSTRAINT fk_usu_edu FOREIGN KEY(id_usuario) REFERENCES usuarios(id)
);
create table habilidades(
	id serial primary key not null,
	id_usuario int,
	nombre varchar,
	nivel int,
	CONSTRAINT fk_usu_hab FOREIGN KEY(id_usuario) REFERENCES usuarios(id)
);
create table conocimientos(
	id serial primary key not null,
	id_usuario int,
	descripcion varchar,
	CONSTRAINT fk_usu_con FOREIGN KEY(id_usuario) REFERENCES usuarios(id)
);
create table proyectos(
	id serial primary key not null,
	id_usuario int,
	nombre varchar,
	plataforma varchar,
	descripcion varchar,
	url varchar,
	CONSTRAINT fk_usu_pro FOREIGN KEY(id_usuario) REFERENCES usuarios(id)
);
create table hobbies(
	id serial primary key not null,
	id_usuario int,
	nombre varchar,
	iconClass varchar,
	url varchar,
	CONSTRAINT fk_usu_hob FOREIGN KEY(id_usuario) REFERENCES usuarios(id)
);
create table contribuciones(
	id serial primary key not null,
	id_usuario int,
	nombre varchar,
	descripcion varchar,
	url varchar,
	CONSTRAINT fk_usu_cont FOREIGN KEY(id_usuario) REFERENCES usuarios(id)
);




