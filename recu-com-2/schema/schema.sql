create database examen_recu_com2;
use examen_recu_com2;

drop table Vehicle;
create table Vehicle(

	marca varchar(20),
    modelo varchar(20),
    patente varchar(10),
    anio int,
    motor varchar(5),
    color varchar(20)
);

select * from Vehicle;