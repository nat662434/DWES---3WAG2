// los usuarios root no tienen acceso desde una ubicaci�n no Localhost
-- Conectar a MySQL como un usuario con privilegios de administrador
CREATE USER 'azterketa'@'%' IDENTIFIED BY '123';

-- Otorgar todos los privilegios al usuario 'azterketa' desde cualquier ubicaci�n
GRANT ALL PRIVILEGES ON *.* TO 'azterketa'@'%';

-- Recargar los privilegios para que surtan efecto
FLUSH PRIVILEGES;


-- Datu basea sortu
CREATE DATABASE B1;

-- Sortutako datu basea erabiliz
USE B1;

-- Taula "a1" sortu, 4 eremuez osatuta
-- Crear la tabla
DROP TABLE animaliak;
CREATE TABLE IF NOT EXISTS animaliak (
    id INT AUTO_INCREMENT PRIMARY KEY,
    izena VARCHAR(255),
    izen_zientifikoa VARCHAR(255),
    espeziea VARCHAR(255),
    tamaina VARCHAR(10),
    pisua VARCHAR(10),
    elikadura VARCHAR(255)
);

-- Insertar 30 registros ficticios
INSERT INTO animaliak (izena, izen_zientifikoa, espeziea, tamaina, pisua, elikadura) VALUES
('Le�n', 'Panthera leo', 'Felino', '2', '200', 'Carn�voro'),
('Elefante', 'Loxodonta africana', 'Probosc�deo', '3', '5000', 'Herb�voro'),
('Tigre', 'Panthera tigris', 'Felino', '1.8', '250', 'Carn�voro'),
('Zorro', 'Vulpes vulpes', 'C�nido', '0.5', '5', 'Omn�voro'),
('Jirafa', 'Giraffa camelopardalis', 'Artiod�ctilo', '5.5', '900', 'Herb�voro'),
('Oso polar', 'Ursus maritimus', '�seo', '2.5', '450', 'Pisc�voro'),
('Leopardo', 'Panthera pardus', 'Felino', '1.5', '80', 'Carn�voro'),
('Cebra', 'Equus zebra', 'Perisod�ctilo', '1.6', '300', 'Herb�voro'),
('Hipop�tamo', 'Hippopotamus amphibius', 'Artiod�ctilo', '1.7', '1500', 'Herb�voro'),
('Mono', 'Simia', 'Primate', '0.6', '15', 'Frug�voro'),
('Delf�n', 'Delphinidae', 'Cet�ceo', '2.5', '200', 'Pisc�voro'),
('�guila', 'Aquila', 'Aves', '1', '4', 'Carn�voro'),
('Cocodrilo', 'Crocodylus', 'Reptil', '4', '500', 'Carn�voro'),
('Ping�ino', 'Spheniscidae', 'Aves', '0.6', '5', 'Pisc�voro'),
('Lince', 'Lynx', 'Felino', '0.7', '15', 'Carn�voro'),
('Rinoceronte', 'Rhinocerotidae', 'Perisod�ctilo', '1.8', '2000', 'Herb�voro'),
('Tortuga', 'Testudinidae', 'Reptil', '0.3', '5', 'Herb�voro'),
('Orangut�n', 'Pongo', 'Primate', '1.5', '80', 'Frug�voro'),
('Serpiente', 'Serpentes', 'Reptil', '3', '10', 'Carn�voro'),
('Jaguar', 'Panthera onca', 'Felino', '1.7', '100', 'Carn�voro'),
('Oso panda', 'Ailuropoda melanoleuca', '�seo', '1.2', '120', 'Herb�voro'),
('Gorila', 'Gorilla', 'Primate', '1.7', '180', 'Frug�voro'),
('Canguro', 'Macropodidae', 'Marsupial', '1.5', '60', 'Herb�voro'),
('Murci�lago', 'Chiroptera', 'Mam�fero', '0.2', '0.03', 'Frug�voro'),
('Lobo', 'Canis lupus', 'C�nido', '1', '30', 'Carn�voro'),
('Puma', 'Puma concolor', 'Felino', '1.2', '70', 'Carn�voro'),
('Camello', 'Camelus', 'Artiod�ctilo', '2', '600', 'Herb�voro'),
('Iguana', 'Iguanidae', 'Reptil', '1.5', '8', 'Herb�voro'),
('�guila calva', 'Haliaeetus leucocephalus', 'Aves', '0.9', '6', 'Carn�voro'),
('Cisne', 'Cygnus', 'Aves', '1.5', '12', 'Herb�voro');
