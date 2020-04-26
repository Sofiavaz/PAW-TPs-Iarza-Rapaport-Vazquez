USE db_turnos;

CREATE TABLE turnos (
	id INTEGER PRIMARY KEY AUTO_INCREMENT,
	nombre TEXT NOT NULL,
	email TEXT NOT NULL,
	telefono TEXT NOT NULL,
	edad TEXT,
	talla_calzado INT,
	altura INT,
	fecha_nacimiento DATE NOT NULL,
	color_pelo TEXT,
	fecha_turno DATE NOT NULL,
	horario_turno TIME,
	diagnostico TEXT);
