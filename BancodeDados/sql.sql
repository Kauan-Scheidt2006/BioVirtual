create table usuario(
	id int auto_increment primary key,
    
    nome varchar(180) not null unique,
    apelido varchar (90) not null unique,
    senha varchar(50),
    criado_em varchar(30),
    atualizado_em varchar(30)
);

create table canal(
	id int auto_increment primary key,
    
    titulo varchar(180),
    descricao varchar(250),
    criado_em varchar(30),
    atualizado_em varchar(30)
);

create table mensagem(
	id int auto_increment primary key,
    
    titulo varchar(90),
    descricao varchar(300),
    criado_em varchar(30),
    atualizado_em varchar(30),
    
    usuario_id int,
    foreign key(usuario_id) references usuario(id),
    
    canal_id int,
    foreign key(canal_id) references canal(id)
);