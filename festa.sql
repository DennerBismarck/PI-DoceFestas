drop database if exists db_festa;
create database db_festa;
use db_festa;

create table tb_bairros (
bai_codigo int not null auto_increment,
bai_bairro varchar(45) not null,
primary key(bai_codigo)
)engine=InnoDB;

create table tb_temas (
tem_codigo int not null auto_increment,
tem_temas varchar(45) not null,
primary key(tem_codigo)
)engine=InnoDB;

create table tb_clientes (
cli_codigo int not null auto_increment,
cli_nome varchar(70) not null,
cli_numero int not null,
cli_bai_codigo int not null,
cli_logradouro varchar(150),
primary key(cli_codigo),
foreign key (cli_bai_codigo) references tb_bairros(bai_codigo)
)engine=InnoDB;

create table tb_teldoscli (
tel_telefone varchar(15) not null,
tel_cli_codigo int not null auto_increment,
primary key(tel_telefone),
foreign key(tel_cli_codigo) references tb_clientes(cli_codigo)
)engine=InnoDB;

create table tb_vendedores (
  ven_codigo int not null primary key,
  ven_login varchar(30) not null,
  ven_senha varchar(30) not null
)engine=InnoDB;

create table tb_alugueis (
alu_codigo int not null auto_increment,
alu_valor decimal not null,
alu_idade int not null,
alu_entrega date not null,
alu_recebimento date not null,
alu_data_festa date not null,
alu_especificacao varchar(500) not null,
alu_aniversariante varchar(100) not null,
alu_tem_codigo int not null,
alu_ven_codigo int not null,
alu_cli_codigo int not null,
primary key(alu_codigo),
foreign key(alu_ven_codigo) references tb_vendedores(ven_codigo),
foreign key(alu_tem_codigo) references tb_temas(tem_codigo),
foreign key(alu_cli_codigo) references tb_clientes(cli_codigo)
)engine=InnoDB;

/* Inserts abaixo */
insert into tb_temas (tem_temas) values
('Homem-aranha'),
('Batman'),
('Vingadores'),
('Liga da Justiça'),
('Free Fire'),
('Minecraft'),
('Ari'),
('Rural'),
('Barbie'),
('Monster High'),
('Harry Potter'),
('JoJos Bizarre Adventures'),
('Romerito Campos Caicó'),
('Tik Tok'),
('Genérico'),
('Circo'),
('Doces e Festas');

insert into tb_bairros (bai_bairro) values
('Centro'),
('Imboca '),
('São José'),
('Santa Cecília'),
('Santo Amaro'),
('Sede'),
('Vila do Rio'),
('Zona rural');

insert into tb_vendedores (ven_codigo,ven_login, ven_senha) value
('1','Doce','docesefestas');

select*from tb_alugueis;