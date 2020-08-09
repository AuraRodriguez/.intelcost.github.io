CREATE DATABASE intelcost_bienes;
use intelcost_bienes;

create table bienes(
id int auto_increment primary key,
fecha_registro TIMESTAMP DEFAULT CURRENT_TIMESTAMP() ON UPDATE CURRENT_TIMESTAMP(),
direccion varchar(100),
fk_ciudad int,
telefono varchar(15),
codigo_postal varchar(15),
tipo varchar(20),
precio varchar(15)
)
Engine=InnoDB;
create table ciudades(
id int auto_increment primary key,
nombre varchar(60) not null
)Engine=InnoDB;

ALTER TABLE bienes ADD CONSTRAINT ciudad_kf FOREIGN KEY (fk_ciudad) REFERENCES ciudades (id);
insert into ciudades(nombre)values('New York');
insert into ciudades(nombre)values('Orlando');
insert into ciudades(nombre)values('Florida');
insert into ciudades(nombre)values('Houston');
insert into ciudades(nombre)values('Washington');

 insert into bienes(direccion,fk_ciudad,telefono,codigo_postal,tipo,precio)values('5946 Consectetuer St.',1,'54983','510-056-8508','Apartamento','102,435');
 insert into bienes(direccion,fk_ciudad,telefono,codigo_postal,tipo,precio)values('2759 Faucibus St.',3,'7131','262-186-7762','Apartamento','82,704');
 insert into bienes(direccion,fk_ciudad,telefono,codigo_postal,tipo,precio)values('6840 Rhoncus. Ave',5,'54983','782-078-8565','casa','69,304');
 insert into bienes(direccion,fk_ciudad,telefono,codigo_postal,tipo,precio)values('227-6771 Ut Street',4,'54965','510-056-8508','Casa de Campo','92,504');
 insert into bienes(direccion,fk_ciudad,telefono,codigo_postal,tipo,precio)values('P.O. Box 432, 4652 Proin Ave',2,'438072','113-637-2816','casa','67,609');
 