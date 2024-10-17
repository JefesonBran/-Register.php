create database if not exists aula30_09;
use aula30_09;
create table if not exists usuario(
 id_user int auto_increment,
 nome_user varchar(100) not null,
 login_user varchar(100) not null,
 senha_user varchar(100) not null,
 cpf_user char(11) unique not null,
 data_nasc_user date,
 end_user varchar(100) not null,
 bairro_user varchar(50) not null,
 cidade_user varchar(50) not null,
 primary key(id_user)
);