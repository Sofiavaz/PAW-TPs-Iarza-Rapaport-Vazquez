USE myapp;

CREATE TABLE turnos (
	id INT AUTO_INCREMENT PRIMARY KEY,		
	appt_date DATE,
	appt_time TIME,
	id_persona INT,
	CONSTRAINT turnos_fk 
	FOREIGN KEY (id_persona) REFERENCES personas(id)
)