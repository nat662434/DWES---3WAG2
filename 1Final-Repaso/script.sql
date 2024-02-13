// los usuarios root no tienen acceso desde una ubicación no Localhost
-- Conectar a MySQL como un usuario con privilegios de administrador
CREATE USER 'azterketa'@'%' IDENTIFIED BY '123';

-- Otorgar todos los privilegios al usuario 'azterketa' desde cualquier ubicación
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
('León', 'Panthera leo', 'Felino', '2', '200', 'Carnívoro'),
('Elefante', 'Loxodonta africana', 'Proboscídeo', '3', '5000', 'Herbívoro'),
('Tigre', 'Panthera tigris', 'Felino', '1.8', '250', 'Carnívoro'),
('Zorro', 'Vulpes vulpes', 'Cánido', '0.5', '5', 'Omnívoro'),
('Jirafa', 'Giraffa camelopardalis', 'Artiodáctilo', '5.5', '900', 'Herbívoro'),
('Oso polar', 'Ursus maritimus', 'Óseo', '2.5', '450', 'Piscívoro'),
('Leopardo', 'Panthera pardus', 'Felino', '1.5', '80', 'Carnívoro'),
('Cebra', 'Equus zebra', 'Perisodáctilo', '1.6', '300', 'Herbívoro'),
('Hipopótamo', 'Hippopotamus amphibius', 'Artiodáctilo', '1.7', '1500', 'Herbívoro'),
('Mono', 'Simia', 'Primate', '0.6', '15', 'Frugívoro'),
('Delfín', 'Delphinidae', 'Cetáceo', '2.5', '200', 'Piscívoro'),
('Águila', 'Aquila', 'Aves', '1', '4', 'Carnívoro'),
('Cocodrilo', 'Crocodylus', 'Reptil', '4', '500', 'Carnívoro'),
('Pingüino', 'Spheniscidae', 'Aves', '0.6', '5', 'Piscívoro'),
('Lince', 'Lynx', 'Felino', '0.7', '15', 'Carnívoro'),
('Rinoceronte', 'Rhinocerotidae', 'Perisodáctilo', '1.8', '2000', 'Herbívoro'),
('Tortuga', 'Testudinidae', 'Reptil', '0.3', '5', 'Herbívoro'),
('Orangután', 'Pongo', 'Primate', '1.5', '80', 'Frugívoro'),
('Serpiente', 'Serpentes', 'Reptil', '3', '10', 'Carnívoro'),
('Jaguar', 'Panthera onca', 'Felino', '1.7', '100', 'Carnívoro'),
('Oso panda', 'Ailuropoda melanoleuca', 'Óseo', '1.2', '120', 'Herbívoro'),
('Gorila', 'Gorilla', 'Primate', '1.7', '180', 'Frugívoro'),
('Canguro', 'Macropodidae', 'Marsupial', '1.5', '60', 'Herbívoro'),
('Murciélago', 'Chiroptera', 'Mamífero', '0.2', '0.03', 'Frugívoro'),
('Lobo', 'Canis lupus', 'Cánido', '1', '30', 'Carnívoro'),
('Puma', 'Puma concolor', 'Felino', '1.2', '70', 'Carnívoro'),
('Camello', 'Camelus', 'Artiodáctilo', '2', '600', 'Herbívoro'),
('Iguana', 'Iguanidae', 'Reptil', '1.5', '8', 'Herbívoro'),
('Águila calva', 'Haliaeetus leucocephalus', 'Aves', '0.9', '6', 'Carnívoro'),
('Cisne', 'Cygnus', 'Aves', '1.5', '12', 'Herbívoro');
