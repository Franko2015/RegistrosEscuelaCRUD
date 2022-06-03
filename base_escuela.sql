DROP DATABASE Escuela;
create schema Escuela;
	use Escuela;
	
	create table tblProfesor(
		idProfesor int auto_increment primary key,
		nombresProfesor varchar(45),
		apellidosProfesor varchar(45),
		contraseñaProfesor varchar(20),
		tipo varchar(10)
		);

	create table tblAlumno(
        idAlumno int auto_increment primary key,
        nombresAlumno varchar(45),
        apellidosAlumno varchar(45),
        contraseñaAlumno varchar(20),
        tipo varchar(10),
        idProfesor int ,
        foreign key (idProfesor) references tblProfesor(idProfesor));



	INSERT INTO `tblProfesor` (nombresProfesor, apellidosProfesor, contraseñaProfesor, tipo) VALUES ('Alvaro', 'Ortega', '123', 'Profesor');
	INSERT INTO `tblProfesor` (nombresProfesor, apellidosProfesor, contraseñaProfesor, tipo) VALUES ('Estelvina', 'Nuñez', '123', 'Profesor');
	INSERT INTO `tblProfesor` (nombresProfesor, apellidosProfesor, contraseñaProfesor, tipo) VALUES ('Rosa', 'Rodriguez', '123', 'Profesor');
	INSERT INTO `tblProfesor` (nombresProfesor, apellidosProfesor, contraseñaProfesor, tipo) VALUES ('Leo', 'Iturriaga', '123', 'Profesor');
	INSERT INTO `tblProfesor` (nombresProfesor, apellidosProfesor, contraseñaProfesor, tipo) VALUES ('Tatiana', 'Lorca', '123', 'Profesor');

	INSERT INTO `tblAlumno` (nombresAlumno, apellidosAlumno, contraseñaAlumno, idProfesor, tipo) VALUES ('Franco', 'Millanes', '123',2, 'Alumno');
	INSERT INTO `tblAlumno` (nombresAlumno, apellidosAlumno, contraseñaAlumno, idProfesor, tipo) VALUES ('Antonio', 'Velasquez', '123',1, 'Alumno');
	INSERT INTO `tblAlumno` (nombresAlumno, apellidosAlumno, contraseñaAlumno, idProfesor, tipo) VALUES ('Alejandra', 'Montoya', '123',3, 'Alumno');
	INSERT INTO `tblAlumno` (nombresAlumno, apellidosAlumno, contraseñaAlumno, idProfesor, tipo) VALUES ('Elias', 'Toro', '123',2, 'Alumno');
	INSERT INTO `tblAlumno` (nombresAlumno, apellidosAlumno, contraseñaAlumno, idProfesor, tipo) VALUES ('Ignasia', 'Hidalgo', '123',1, 'Alumno');
	INSERT INTO `tblAlumno` (nombresAlumno, apellidosAlumno, contraseñaAlumno, idProfesor, tipo) VALUES ('Pablo', 'Delgado', '123',4, 'Alumno');
	INSERT INTO `tblAlumno` (nombresAlumno, apellidosAlumno, contraseñaAlumno, idProfesor, tipo) VALUES ('Patricia', 'Cataluña', '123',5, 'Alumno');
	INSERT INTO `tblAlumno` (nombresAlumno, apellidosAlumno, contraseñaAlumno, idProfesor, tipo) VALUES ('Esteban', 'Quito', '123',3, 'Alumno');