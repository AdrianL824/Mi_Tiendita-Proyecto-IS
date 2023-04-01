
create database example;
use example;

create table users (
	id int auto_increment ,
	nombre varchar(120) not null,
	apellido varchar(130) not null,
	username varchar(80) not null,
	password varchar(20) not null,
	email varchar(20) not null,
	primary key(id)
)auto_increment = 2300;

insert into users (nombre,apellido,username,password,email) values 
	('jorge','ledezma','jledezma','123456','jled@gmail.com');


--- creacion de usuarios y asignacion de permisos
show DATABASES;
use mysql
show full tables;
select * from user;
show grants for 'mysql.sys'@'localhost';

create user developer IDENTIFIED by 'Hol4'; --- una forma de crear usuarios
DROP user developer;

create user 'dev'@'localhost' identified by 'Hol4'; --- otra forma de crear usuarios
show grants for 'dev'@'localhost';

grant select on ttienda.users to 'dev'@'localhost'; --- asignacion de permiso para que pueda usar la transaccion SELECT
