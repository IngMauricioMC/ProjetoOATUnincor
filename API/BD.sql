DROP DATABASE IF EXISTS OATUnincor;

create database OATUnincor;
use OATUnincor;

CREATE TABLE curso(
 id int,
 nome varchar(30) NOT NULL
);

CREATE TABLE periodo(
 id int,
 nome varchar(3) NOT NULL
);

create table aluno(
  id int,
  nome varchar(30) NOT NULL,
  sobrenome varchar(30) NOT NULL,
  email varchar(80) NOT NULL,
  fkCurso int NOT NULL,
  fkPeriodo int NOT NULL
);

ALTER TABLE curso ADD CONSTRAINT pk_Curso PRIMARY KEY(id);
ALTER TABLE periodo ADD CONSTRAINT pk_Periodo PRIMARY KEY(id);
ALTER TABLE aluno ADD CONSTRAINT pk_Aluno PRIMARY KEY(id);

ALTER TABLE curso MODIFY id int auto_increment;
ALTER TABLE periodo MODIFY id int auto_increment;
ALTER TABLE aluno MODIFY id int auto_increment;

ALTER TABLE aluno ADD CONSTRAINT fk_Aluno_Curso FOREIGN KEY (fkCurso) references curso(id);
ALTER TABLE aluno ADD CONSTRAINT fk_Aluno_Periodo FOREIGN KEY (fkPeriodo) references periodo(id);

CREATE TABLE convenios(
 id int,
 universidade varchar(40) NOT NULL,
 foto varchar(200) NOT NULL,
 link varchar(200) NOT NULL,
 pais varchar(50) NOT NULL
);

ALTER TABLE convenios ADD CONSTRAINT pk_Convenio PRIMARY KEY(id);
ALTER TABLE convenios MODIFY id int auto_increment;

CREATE TABLE intercambios(
 id int,
 author varchar(50) NOT NULL,
 exper varchar(50) NOT NULL,
 ano varchar(10) NOT NULL,
 pais varchar(30) NOT NULL,
 foto varchar(50) NOT NULL
);

ALTER TABLE intercambios ADD CONSTRAINT pk_Experiencia PRIMARY KEY(id);
ALTER TABLE intercambios MODIFY id int auto_increment;

CREATE TABLE user(
 id int,
 username varchar(30) NOT NULL,
 password varchar(50) NOT NULL
);

ALTER TABLE user ADD CONSTRAINT pk_User PRIMARY KEY(id);
ALTER TABLE user MODIFY id int auto_increment;

INSERT INTO user(username, password) VALUES ("Admin", "Adm1n");

INSERT INTO curso(nome) VALUES ("Administracao");
INSERT INTO curso(nome) VALUES ("Dereito");
INSERT INTO curso(nome) VALUES ("Ciencia de Computacao");
INSERT INTO curso(nome) VALUES ("Psicologia");
INSERT INTO curso(nome) VALUES ("Odontologia");
INSERT INTO curso(nome) VALUES ("Pedagogia");

INSERT INTO periodo(nome) VALUES ("1");
INSERT INTO periodo(nome) VALUES ("2");
INSERT INTO periodo(nome) VALUES ("3");
INSERT INTO periodo(nome) VALUES ("4");
INSERT INTO periodo(nome) VALUES ("5");
INSERT INTO periodo(nome) VALUES ("6");
INSERT INTO periodo(nome) VALUES ("7");
INSERT INTO periodo(nome) VALUES ("8");
INSERT INTO periodo(nome) VALUES ("9");
INSERT INTO periodo(nome) VALUES ("10");

INSERT INTO intercambios(author, exper, ano, pais, foto) VALUES ('Marine',  'Cultura', '2019', 'Argentina', 'marine3.jpg');
INSERT INTO intercambios(author, exper, ano, pais, foto) VALUES ('Aline',  'Experiencia', '2018', 'Colombia', 'aline.png');
INSERT INTO intercambios(author, exper, ano, pais, foto) VALUES ('Beatriz',  'Amizade', '2019', 'Argentina', 'beatriz.jpg');

INSERT INTO convenios(universidade, foto, link, pais) VALUES ("UNIVERSIDAD CONGRESO", "U_Congreso.jpg", "http://www.ucongreso.edu.ar/", "Argentina");
INSERT INTO convenios(universidade, foto, link, pais) VALUES ("UNIVERSIDAD DE BOYACA", "Uniboyaca.jpeg", "https://www.uniboyaca.edu.co/", "Colombia");
INSERT INTO convenios(universidade, foto, link, pais) VALUES ("UNIVERSIDAD MAYOR", "U_Mayor.jpeg", "https://www.umayor.cl/um/", "Chile");
INSERT INTO convenios(universidade, foto, link, pais) VALUES ("UNIVERSIDAD CATOLICA DE SANTA MARIA", "U_Catolica.jpg", "https://www.ucsm.edu.pe/", "Peru");
