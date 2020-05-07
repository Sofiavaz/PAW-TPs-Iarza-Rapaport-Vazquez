USE myapp;

CREATE TABLE personas (
	id INT AUTO_INCREMENT PRIMARY KEY,
	fullname VARCHAR(50),
	email VARCHAR(50),
	tel VARCHAR(10),
	age INT,
	shoe_size INT,
	height INT,
	birthdate DATE,
	id_hair_color INT,
	CONSTRAINT personas_fk 
		FOREIGN KEY (id_hair_color)
		REFERENCES colores_pelo(id)	
)