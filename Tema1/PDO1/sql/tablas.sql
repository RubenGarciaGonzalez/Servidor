-- Creamos tres tablas en este ejemplo
drop table if exists matriculas;
drop table if exists modulos;
drop table if exists alumnos;

-- Tablas
create table alumnos(
        idAl int primary key auto_increment,
        nomAl varchar(40) not null,
        apeAl varchar(60) not null,
        mail varchar(40),
        created_at timestamp DEFAULT CURRENT_TIMESTAMP -- Fecha de creado
        -- updated_at timestamp on update CURRENT_TIMESTAMP -- Fecha de modificacion
);

create table modulos(
        idMod int primary key auto_increment,
        nomMod varchar(40) not null,
        horaSem tinyint unsigned
);
create table matricula(
        al int,
        modulo int,
        notaFinal tinyint unsigned,
        constraint pk_mat primary key(al, modulo),
        constraint fk_al foreign key(al) references alumnos(idAl) on delete cascade on update cascade ,
        constraint fk_mat_mod foreign key(modulo) references alumnos(idMod) on delete cascade on update cascade,
);
-- Algunos datos
insert into alumnos(nomAl, apelAl, mail) values ("Juan", "Fernandez Lopez", "juanito@gmail.com"); 
insert into alumnos(nomAl, apelAl, mail) values ("Paco", "de Lucia", "paco@gmail.com"); 
insert into alumnos(nomAl, apelAl, mail) values ("Laura", "Martinez Rodriguez", "laurita@gmail.com"); 
insert into alumnos(nomAl, apelAl, mail) values ("Maria", "Databe", "mariquilla@gmail.com"); 
