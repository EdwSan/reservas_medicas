
CREATE TABLE T_HCP_ESPECIALIDAD (
	Codigo		INTEGER	NOT NULL,
	Nombre		VARCHAR(64)	NOT NULL
);

ALTER TABLE T_HCP_especialidad
	ADD CONSTRAINT spcldd_clave_primaria PRIMARY KEY (codigo);

CREATE TABLE T_HCP_MEDICAMENTO(
	Codigo		VARCHAR(10)	NOT NULL,
	Nombre		VARCHAR(128)	NOT NULL
);


CREATE TABLE T_HCP_PROFESIONAL_SALUD (
	Identificacion		INTEGER	NOT NULL,
	Nombre			VARCHAR(64)	NOT NULL,
	Tarjeta_profesional 	VARCHAR(20),
	Especialidad		INTEGER	NOT NULL,
	TIPO_CONSULTA  		VARCHAR(1)
);

ALTER TABLE T_HCP_profesional_salud
	ADD CONSTRAINT prfsld_clave_primaria PRIMARY KEY (identificacion);

ALTER TABLE T_HCP_profesional_salud
 	ADD CONSTRAINT prfsld_especialidad
 	FOREIGN KEY (especialidad)
 REFERENCES T_HCP_especialidad(codigo);



CREATE TABLE T_HCP_PACIENTE(
	Id				INTEGER NOT NULL,
	estudiante			INTEGER,
	funcionario			INTEGER,
	Tipo				VARCHAR(1) NOT NULL,
	Clave_internet			VARCHAR(8)
);

ALTER TABLE T_HCP_paciente
	ADD CONSTRAINT pcnt_clave_primaria 
PRIMARY KEY (Id);

ALTER TABLE T_HCP_paciente
	ADD CONSTRAINT pcnt_tipo
CHECK (
	tipo IN (
		'E',		/*Estudiante*/
		'F'		/*Funcionario*/
	)
);

ALTER TABLE T_HCP_paciente
	ADD CONSTRAINT pcnt_estudiante_funcionario
CHECK (
	(tipo = 'E' AND estudiante IS NOT NULL AND funcionario IS NULL) OR
	(tipo = 'F' AND estudiante IS NULL AND funcionario IS NOT NULL)
);


CREATE TABLE T_HCP_CALENDARIO_TURNO (
	Fecha 			DATETIME NOT NULL,
	Profesional_salud 	INTEGER NOT NULL,
	Paciente 		INTEGER,
	estado_turno 		VARCHAR(1) DEFAULT  'N'
);

ALTER TABLE T_HCP_calendario_turno 
	ADD CONSTRAINT cldtrn_clave_primaria 
	PRIMARY KEY (fecha, profesional_salud);

ALTER TABLE T_HCP_calendario_turno
	ADD CONSTRAINT cldtrn_profesional_salud
 	FOREIGN KEY (profesional_Salud) 
	REFERENCES T_HCP_profesional_salud (identificacion);

ALTER TABLE T_HCP_calendario_turno
	ADD CONSTRAINT cldtrn_paciente
 	FOREIGN KEY (paciente) 
	REFERENCES T_HCP_paciente (id);

ALTER TABLE T_HCP_calendario_turno
	ADD CONSTRAINT cldtrn_estado_turno
CHECK (
	estado_turno IN (
		'A',		/*Asignado*/
		'S',		/*Sin asignar*/
		'C',		/*Cancelado*/
		'O'		/*Asistio*/
	)
);