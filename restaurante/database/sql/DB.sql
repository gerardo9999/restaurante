create database restaurante;
use restaurante;

create table cliente(
id int primary key auto_increment,
nombres varchar(50),
apellidos varchar(50),
login varchar(30),
password varchar(10),
empresa varchar(30),
telefono varchar(30),
direccion varchar(30),
email varchar(30),
estado bit   
);

create table bitacora(
id int primary key auto_increment,
fecha date,
hora time, 
tabla varchar(20),
transaccion varchar(50)
);

create table repartidor(
id int primary key auto_increment,
nombre varchar(50),
apellidos varchar(50),
login varchar(30),
password varchar(10),
cedulaID varchar(20),
telefono varchar(20), 
direccion varchar(10)
);

create table tipo(
id int primary key auto_increment,
nombre varchar(20)
);

create table ubicacion(
id int primary key auto_increment,
latitud int,
longitud int,
referencia varchar(30),
url varchar(40)
);


create table categoria(
id int primary key auto_increment,
nombre varchar(20)
);


create table mesa(
id int primary key auto_increment,
descripcion varchar(30),
capacidad int, 
ubicacion varchar(30),
ocupado bit
);


create table vehiculo(
id int primary key auto_increment,
tipoVehiculo varchar(50),
caracteristicas varchar(50),
placa varchar(10),
idRepartidor int not null,
foreign key(idRepartidor) references repartidor(id)
);

create table usuario(
id int primary key auto_increment,
nombre varchar(50),
apellidos varchar(50),
login varchar(30),
passaword varchar(10),
idBitacora int not null,
idTipo int not null,
foreign key(idBitacora) references bitacora(id),
foreign key(idTipo) references tipo(id)
);

create table ordenatencion(
id int primary key auto_increment,
fecha date,
montoTotal float,
estado bit, 
idUsuario int not null,
idCliente int not null,
idMesa int not null,
foreign key(idUsuario) references usuario(id),
foreign key(idCliente) references cliente(id),
foreign key(idMesa) references mesa(id)
);

create table reserva(
id int primary key auto_increment,
comensales int, 
telefono int,
fecha date,
hora time,
observacion varchar(50),
idCliente int not null,
foreign key(idCliente) references cliente(id)
);

create table pedido(
id int primary key auto_increment,
fecha date,
fechaEntrega date,
horaEntrega time,
glosa varchar(50),
montoTotal float,
repartidor varchar(50),  
estado bit, 
idUsuario int not null,
idCliente int not null,
idRepartidor int not null,
idUbicacion int not null,
foreign key(idUsuario) references usuario(id),
foreign key(idCliente) references cliente(id),
foreign key(idRepartidor) references repartidor(id),
foreign key(idUbicacion) references ubicacion(id)
);

create table producto(
id int primary key auto_increment,
nombre varchar(50),
descripcion varchar(50),
foto varchar(50),
precio float,
idCategoria int not null,
foreign key(idCategoria) references categoria(id)
);

create table detalleorden(

idOrden int not null,
idProducto int not null,

primary key(idOrden,idProducto),
cantidad int,

foreign key(idOrden) references ordenatencion(id),
foreign key(idProducto) references producto(id)
);

create table detallepedido(
idPedido int not null,
idProducto int not null,

primary key(idPedido,idProducto),
cantidad int,

foreign key(idPedido) references pedido(idPedido),
foreign key(idProducto) references producto(idProducto)
);

create table precios(
id int primary key auto_increment,
precio float,
fecha date,
idProducto int not null,
foreign key(idProducto) references producto(id)
);

create table menu(
id int primary key auto_increment,
fecha date
);

create table listamenu(

idProducto int not null,
idMenu int not null,

primary key(idProducto,idMenu),

estado bit, 


foreign key(idProducto) references producto(id),
foreign key(idMenu) references menu(id)
);
