CREATE DATABASE IF NOT EXISTS Escuela;
USE Escuela;

CREATE TABLE IF NOT EXISTS Estudiantes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(50) NOT NULL,
    edad INT,
    grado VARCHAR(10)
);

INSERT INTO Estudiantes (nombre, edad, grado) VALUES
('Juan', 15, '10º'),
('Maria', 16, '11º'),
('Carlos', 14, '9º');

SELECT * FROM Estudiantes;

SELECT * FROM Estudiantes WHERE edad >= 15;

UPDATE Estudiantes SET edad = 16 WHERE nombre = 'Juan';

DELETE FROM Estudiantes WHERE nombre = 'Carlos';

SELECT * FROM Estudiantes ORDER BY edad ASC;

SELECT COUNT(*) AS total_estudiantes FROM Estudiantes;

SELECT * FROM Estudiantes WHERE grado = '10º' AND edad = 15;