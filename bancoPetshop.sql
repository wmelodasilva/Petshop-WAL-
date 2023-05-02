create database petshop;
use petshop;

create table cadastro (
nome varchar (300) not null,
dt_nascimento date not null,
sexo varchar (20),
cpf varchar (15) not null,
email varchar (100) not null,
senha varchar (20) not null,
endereço varchar (300) not null,
cep int (15) not null,
telefone varchar (17) not null,
primary key (cpf));

select *from cadastro;