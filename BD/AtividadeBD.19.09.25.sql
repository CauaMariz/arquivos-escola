###Nomes: Caua Mariz e Arthur Gomes
###Sala: 2DS
###Data: 19/09/25

create database atividade_19_09_2025;
use atividade_19_09_2025;

create table cliente (
    id_cliente smallint primary key auto_increment,
    nome_cli varchar(100) not null
);

create table produto (
    id_prod smallint primary key auto_increment,
    nome_prod varchar(25) not null,
    quantidade smallint not null
);

create table nfiscal (
    id_nota smallint primary key auto_increment,
    valor decimal(10,2) not null,
    data_venda date not null,
    id_cliente smallint,
    foreign key (id_cliente) references cliente(id_cliente)
);


create table telefone (
    num_telefone bigint not null,
    id_cliente int,
    foreign key (id_cliente) references cliente(id_cliente)
);

alter table Cliente
add column cpf bigint not null;

alter table Nfiscal
add column cpfn varchar(3) not null check (cpfn='SIM' or cpfn='NAO');

alter table Produto
drop column quantidade;

insert into produto (id_prod, nome_prod) values
(1001, 'Tijolo'),(1002, 'Pedra'),(1003, 'Cimento'),(1004, 'Azulejo'),
(1005, 'Janela'),(1006, 'Porta'),(1007, 'Areia'),(1008, 'Telha'),
(1009, 'Cano'),(1010, 'Fio'),(1011, 'Tinta'),(1012, 'Madeira'),
(1013, 'Martelo'),(1014, 'Pá'),(1015, 'Chave de fenda'),(1016, 'Prego'),
(1017, 'Tomada'),(1018, 'Aditivo'),(1019, 'Cal'),(1020, 'Aço');


insert into cliente (id_cliente, nome_cli, cpf) values
(1,'Maria','32165498714'),
(2,'Carlos','25146879542'),
(3,'Pedro','56482197564'),
(4,'João','12784965745'),
(5,'Gabriel','36425198563'),
(6,'Bianca','25784963154'),
(7,'Camila','23158769542'),
(8,'Jose','13974851364'),
(9,'Andre','23514687458'),
(10,'Paula','62498756412');


insert into nfiscal (id_nota, valor, data_venda, id_cliente, cpfn) values
(1, 200.00, '2021-01-21', 4, 'SIM'),
(2, 150.00, '2021-01-21', 7, 'NAO'),
(3, 1630.00, '2021-01-21', 9, 'NAO'),
(4, 1227.00, '2021-01-22', 8, 'SIM'),
(5, 300.00, '2021-01-22', 2, 'NAO'),
(6, 465.00, '2021-01-23', 10, 'SIM'),
(7, 173.00, '2021-01-23', 1, 'SIM'),
(8, 583.00, '2021-01-23', 10, 'SIM'),
(9, 284.00, '2021-01-23', 3, 'NAO'),
(10, 1847.00, '2021-01-23', 2, 'SIM'),
(11, 1738.00, '2021-01-24', 6, 'NAO'),
(12, 602.00, '2021-01-25', 4, 'NAO'),
(13, 381.00, '2021-01-25', 8, 'NAO'),
(14, 1237.00, '2021-01-25', 5, 'SIM'),
(15, 1749.00, '2021-01-26', 9, 'NAO'),
(16, 836.00, '2021-01-26', 2, 'NAO'),
(17, 200.00, '2021-01-27', 1, 'SIM'),
(18, 100.00, '2021-01-27', 4, 'SIM'),
(19, 150.00, '2021-01-27', 6, 'NAO'),
(20, 2739.00, '2021-01-27', 9, 'SIM'),
(21, 748.00, '2021-01-28', 5, 'NAO'),
(22, 648.00, '2021-01-28', 8, 'SIM'),
(23, 349.00, '2021-01-28', 3, 'SIM'),
(24, 926.00, '2021-01-28', 9, 'SIM'),
(25, 184.00, '2021-01-28', 1, 'SIM');
