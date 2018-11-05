insert into Localidad (Descripcion, CodigoPostal, BajaLogica, FechaModificacion, IdUsuarioModificacion) 
values ('Morón', '1708', 0, now(), 1);
insert into Localidad (Descripcion, CodigoPostal, BajaLogica, FechaModificacion, IdUsuarioModificacion) 
values ('Castelar', '1709', 0, now(), 1);
insert into Localidad (Descripcion, CodigoPostal, BajaLogica, FechaModificacion, IdUsuarioModificacion) 
values ('Ituzaingó', '1710', 0, now(), 1);

insert into Barrio (Descripcion, IdLocalidad, BajaLogica, FechaModificacion, IdUsuarioModificacion) 
values ('Morón Norte', 1, 0, now(), 1);
insert into Barrio (Descripcion, IdLocalidad, BajaLogica, FechaModificacion, IdUsuarioModificacion) 
values ('Castelar Norte', 2, 0, now(), 1);
insert into Barrio (Descripcion, IdLocalidad, BajaLogica, FechaModificacion, IdUsuarioModificacion) 
values ('Ituzaingó Sur', 3, 0, now(), 1);

insert into Calle (Descripcion, IdBarrio, BajaLogica, FechaModificacion, IdUsuarioModificacion) 
values ('Coronel Machado', 1, 0, now(), 1);
insert into Calle (Descripcion, IdBarrio, BajaLogica, FechaModificacion, IdUsuarioModificacion) 
values ('Almirante Brown', 1, 0, now(), 1);
insert into Calle (Descripcion, IdBarrio, BajaLogica, FechaModificacion, IdUsuarioModificacion) 
values ('Mendoza', 1, 0, now(), 1);

insert into estadoaprobacionusuario (Descripcion, BajaLogica, FechaModificacion, IdUsuarioModificacion) 
values ('Pendiente', 0, now(), 1);
insert into estadoaprobacionusuario (Descripcion, BajaLogica, FechaModificacion, IdUsuarioModificacion) 
values ('Aprobado', 0, now(), 1);
insert into estadoaprobacionusuario (Descripcion, BajaLogica, FechaModificacion, IdUsuarioModificacion) 
values ('Rechazado', 0, now(), 1);

insert into perfil (Descripcion, BajaLogica, FechaModificacion, IdUsuarioModificacion) 
values ('Administrador', 0, now(), 1);
insert into perfil (Descripcion, BajaLogica, FechaModificacion, IdUsuarioModificacion) 
values ('Comercio', 0, now(), 1);
insert into perfil (Descripcion, BajaLogica, FechaModificacion, IdUsuarioModificacion) 
values ('Delivery', 0, now(), 1);

insert into Usuario (Nombre, Apellido, idcalle, numero, dni, email, username, password, cuil, idperfil, idestadoaprobacionusuario, bajalogica, fechamodificacion, idusuariomodificacion)
values ('Diego', 'González', 1, 1053, '32361717', 'diego.gonzalez301@gmail.com', 'diego107', 'diego123', '20323617172', 1, 2, 0, now(), 1);

