create database etimpwiicontato;
use etimpwiicontato;

create table contato (
    id int primary key auto_increment,
    rm int,
    nome varchar(100),
    email varchar(150),
    senha varchar(32)
);

insert into contato set nome = "Admin", email = "admin@gmail.com", senha = "123";