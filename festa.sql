drop database if exists db_festas;
create database db_festas;
use db_festas;

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
tel_cli_codigo int not null,
primary key(tel_telefone),
foreign key(tel_cli_codigo) references tb_clientes(cli_codigo)
)engine=InnoDB;

create table tb_vendedores (
  ven_codigo int not null primary key,
  ven_login varchar(30) not null,
  ven_senha varchar(10) not null
)engine=InnoDB;

create table tb_alugueis (
alu_codigo int not null auto_increment,
alu_valor varchar(70) not null,
alu_idade int not null,
alu_entrega date not null,
alu_recebimento date not null,
alu_data_festa date not null,
alu_acessorios varchar(300) not null,
alu_aniversariante varchar(100) not null,
alu_tem_codigo int not null,
alu_ven_codigo int not null,
alu_cli_codigo int not null,
primary key(alu_codigo),
foreign key(alu_ven_codigo) references tb_vendedores(ven_codigo),
foreign key(alu_tem_codigo) references tb_temas(tem_codigo),
foreign key(alu_cli_codigo) references tb_clientes(cli_codigo)
)engine=InnoDB;

create table tb_itens(
 ite_codigo int primary key not null auto_increment,
 ite_item varchar(100) not null
)engine=InnoDB;

create table tb_itensdosalugueis (
ilu_alu_codigo int not null,
ilu_ite_codigo int not null,
foreign key(ilu_alu_codigo) references tb_alugueis(alu_codigo),
foreign key(ilu_ite_codigo) references tb_itens(ite_codigo),
primary key(ilu_ite_codigo, ilu_alu_codigo)
)engine=InnoDB;
/* Inserts abaixo */
insert into tb_itens (ite_item) values
('Mesa G Estrela amarela '),
('Mesa G Branca'),
('Mesa M Ferro dourada'),
('Mesa M Imperial marrom '),
('Mesa P Palito vermelha '),
('Mesa P Palito baixa branca '),
('Jarro G Aramado'),
('Jarro G Rosa bebê'),
('Jarro M Azul Royal'),
('Jarro M Laranja'),
('Jarro P Dourado'),
('Jarro P Vermelho'),
('Bandeja G Madeira'),
('Bandeja G Espelho'),
('Bandeja M Vidro'),
('Bandeja M Platisco'),
('Bandeja P Perola'),
('Bandeja P Louça'),
('Luminaria Nuvem'),
('Luminaria Estrela'),
('Luminaria Borboleta'),
('Painel Tecido'),
('Painel Papel'),
('Muro Vazado'),
('Muro Cheio'),
('Flor Girassol'),
('Flor Bordô'),
('Flor Branca'),
('Tecido Oxford'),
('Tecido Jackuar'),
('Tecido Vual'),
('Tapete Felpudo'),
('Tapete Simples');

insert into tb_bairros (bai_bairro) values
('Centro');

insert into tb_temas (tem_temas) values
('Guizado de pica-pau'),
('Miranha');
select*from tb_alugueis;
select*from tb_itensdosalugueis;