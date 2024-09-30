create  database defaultBase;
use defaultBase;

CREATE TABLE carros (
    id          int (3) unique,
    modelo      varchar(50) not null,
    montadora   varchar(50) not null,
    cor         varchar(10) not null
);

insert into carros values (1, "Civic", "Honda", "preto");
insert into carros values (2, "CR-V", "Honda", "vermelho");
insert into carros values (3, "Gol", "Volkswagen", "azul");
insert into carros values (4, "Polo", "Volkswagen", "branco");
insert into carros values (5, "Corola", "Toyota", "branco");
insert into carros values (6, "Hilux", "Toyota", "preto");
insert into carros values (7, "Kwid", "Renault", "laranja");
insert into carros values (8, "Duster", "Renault", "verde");
insert into carros values (9, "Toro", "Fiat", "preto");
insert into carros values (10, "Uno", "Fiat", "vermelho");

select * from carros;