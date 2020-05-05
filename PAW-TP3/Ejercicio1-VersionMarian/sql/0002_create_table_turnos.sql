USE myapp;

CREATE TABLE turnos (
	id INT AUTO_INCREMENT PRIMARY KEY,
	fullname VARCHAR(50),
	email VARCHAR(50),
	tel VARCHAR(10),
	age INT,
	shoe_size INT,
	height INT,
	birthdate DATE,
	hair_color VARCHAR(10),
	appt_date DATE,
	appt_time TIME
)