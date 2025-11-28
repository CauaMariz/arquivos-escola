create database caixaeletronicoo;
use caixaeletronicoo;
create table contas(
    id int primary key auto_increment,
    titular varchar(150),
    agencia int,
    conta int,
    senha varchar(32),
    saldo float
);

create table historico(
    id int primary key auto_increment,
    id_conta int,
    tipo tinyint,
    valor float,
    data_operacao datetime
);

insert into contas set titular = "teste", agencia = "1231", conta = "543", senha = md5("342"), saldo = 3;