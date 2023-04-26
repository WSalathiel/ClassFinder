CREATE DATABASE ProjSenac;

USE ProjSenac;

CREATE TABLE class(
id_class INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
class_type VARCHAR(20) NOT NULL,
floor INT (02) NOT NULL,
num_class INT (10) NOT NULL
);
 
CREATE TABLE course(
id_course INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
course_name VARCHAR(100) NOT NULL
);

CREATE TABLE team(
id_team INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
name_team VARCHAR(20) NOT NULL,
id_course INTEGER
);

CREATE TABLE teacher(
id_teacher INT AUTO_INCREMENT PRIMARY KEY,
name_teacher VARCHAR(50) NOT NULL 
);


CREATE TABLE offer(
id_offer INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
num_offer INT (6) UNIQUE
);

CREATE TABLE reserve_class(
id_reserve INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
start_reserve TIME NOT NULL,
end_reserve TIME NOT NULL,
start_date DATE NOT NULL,
end_date DATE NOT NULL,
id_class INTEGER,
id_course INTEGER,
id_team INTEGER, 
id_teacher INTEGER,
id_offer INTEGER
);



ALTER TABLE reserve_class 
ADD CONSTRAINT fk_numoffer FOREIGN KEY (id_offer) REFERENCES offer (id_offer);
 
ALTER TABLE team 
ADD CONSTRAINT fk_idcourse FOREIGN KEY (id_course) REFERENCES course (id_course);

ALTER TABLE reserve_class
ADD CONSTRAINT fk_id_course FOREIGN KEY (id_course) REFERENCES course (id_course);

ALTER TABLE reserve_class
ADD CONSTRAINT fk_id_class FOREIGN KEY (id_class) REFERENCES class (id_class);

ALTER TABLE reserve_class
ADD CONSTRAINT fk_id_teacher FOREIGN KEY (id_teacher) REFERENCES teacher (id_teacher);

INSERT INTO class ( class_type, floor, num_class ) 
VALUES 
('sala', 2, 21),
('sala', 2, 22),
('sala', 2, 24),
('sala', 2, 25),
('sala', 2, 26),
('sala', 3, 31),
('sala', 3, 32),
('sala', 3, 33),
('sala', 3, 34),
('sala', 3, 35),
('sala', 3, 36),
('sala', 4, 41),
('sala', 4, 42),
('sala', 4, 43),
('sala', 4, 44),
('laboratório', 4, 45),
('laboratório', 4, 46),
('laboratório', 4, 47),
('laboratório', 4, 49),
('laboratório', 5, 51),
('laboratório', 5, 52),
('laboratório', 5, 53),
('laboratório', 5, 54);

INSERT INTO course (course_name)
VALUES 
('TÉCNICO EM INFORMÁTICA'),
('TÉCNICO CONFEITARIA' ),
('TÉCNICO EM ENFERMAGEM'),
('VISAGISMO'),
('TÉC ESTILISMO E COORD'),
('TÉC NUTRI E DIETÉTICA'),
('TÉC EM ADMINISTRAÇÃO'),
('TÉC EM LOGÍSTICA'),
('TÉC EM PRODUÇÃO DE MODA'),
('TST'),
('TÉC RECURSOS HUMANOS'),
('COMITÊ DA INCLUSÃO E DIVERSIDADE'),
('REUNIÃO DE ÁREA - APRENDIZAGEM'),
('TÉCNICO EM MODELAGEM DO VESTUÁRIO'),
('APRENDIZAGEM'),
('MODELISTA'),
('TÉCNICO COZINHA'),
('TÉCNICO EM CONTABILIDADE'),
('VISUAL MERCHANDISING'),
('TÉCNICO EM PAISAGISMO');

INSERT INTO teacher (name_teacher) VALUES

('ALEXANDRA FERNANDES PEREIRA'),
('ALESSANDRO LIMA DE SOUSA'),
('ALINE FRANCISCA DOS SANTOS'),
('ANA AUGUSTA LOPES DE MORAES'),
('ANA CRISTINA MARTINS DE SIQUEIRA'),
('ANCELMO DO NASCIMENTO'),
('ANDERSON CARLOS ARAÚJO COSTA'),
('BRUNO MOISES RUFINO BAPTISTA'),
('CAIO FREIRES SOARES'),
('CARINA CAMANO ZAVATTI'),
('CARLOS ALBERTO DE CARVALHO LIMA'),
('DIEGO AUGUSTO CAMARGO'),
('EMILY PAULA DE OLIVEIRA'),
('ERICK HENRIQUE DA CRUZ'),
('EVELYN HELENA SOARES DOS SANTOS'),
('JOÃO PAULO NOGUEIRA PORCARE'),
('JOHNNY RODRIGUES DE SOUZA'),
('KHEROLEN HANNY RODRIGUES GONÇALVES DIAS'),
('LEONARDO DOMINGOS BIAGIO'),
('MAURO ALVES DE MOURA'),
('MARCIEL MAGNO BELONHA'),
('MARCOS D. BONGIANNI'),
('MARIA HELENA RIBEIRO LELLIS DE ANDRADE'),
('MARCELO DAVID BARUDI'),
('MAURICIO HENRIQUE DE SANTANA'),
('MAURICIO IMGRUND PRIETO'),
('ORLANDO DE JESUS SALDANHA'),
('PEDRO HENRIQUE RIBEIRO'),
('SIDNEI BAPTISTA DA SILVA'),
('SILVIA CLEIDE TENÓRIO DA SILVA'),
('SOLANGE MACEDO DE OLIVEIRA'),
('THAIS DE PAULA MARQUES'),
('VANIA APARECIDA PEREIRA'),
('VIVIANE LIMA FERREIRA'),
('WAGNER LOURENÇO DO ROSARIO'),
('WALTER BUDACS JUNIOR');

INSERT INTO team (name_team, id_course) VALUES
('TECPM1', '9'),
('TECEC1', '5' ),
('M09', '3' ),
('M10', '3'),
('M11', '3'),
('TVSGM1', '4'),
('M13', '5'),
('M14','9'),
('T03','3'),
('T04','2'),
('T07','17'),
('T7', '6'),
('T8', '6'),
('T9','6'),
('T10','6'),
('T11','1'),
('T12','1'),
('T13', '1'),
('T14','1'),
('T15', '1'),
('T16', '11'),
('T17', '11'),
('T23', '8'),
('T24', '8'),
('T25', '8'),
('T32', '7'),
('T33', '7'),
('T34', '7'),
('T35', '7'),
('T36', '7'),
('T37', '7'),
('T38', '7'),
('T98', '15'),
('TST21', '10'),
('TST22', '10'),
('TST23', '10'),
('TST24', '10'),
('TST25', '10'),
('TST26', '10'),
('TST27', '10'),
('TMV1', '14'),
('MDLT1', '16'),
('TCTB1', '18'),
('VMCD1', '19'),
('TPSGM1', '20');

INSERT INTO offer (num_offer)
VALUES 
('241820'),
('231574'),
('229132'),
('229136'),
('260071'),
('260239'),
('248627'),
('229043'),
('229138'),
('259992'),
('20816'),
('195787'),
('259965'),
('229032'),
('231759'),
('229141'),
('231764'),
('250863'),
('212828'),
('244377'),
('260231'),
('196495'),
('212812'),
('260112'),
('260177'),
('212770'),
('260172'),
('241791'),
('260099'),
('222174'),
('229131'),
('222627'),
('260014'),
('222699'),
('260019'),
('229909'),
('231577'),
('231767'),
('74082'),
('231762'),
('221891');


INSERT INTO reserve_class(start_reserve, end_reserve, start_date, end_date, id_class, id_course, id_team, id_teacher, id_offer)
VALUES
('080000', '120000', '20230331', '20230331', '16', '1', '18', '12', '1'),
('080000', '120000', '20230331', '20230331', '17', '1', '17', '9', '2'),
('080000', '120000', '20230331', '20230331', '18', '2', '10', '16', '3'),
('080000', '120000', '20230331', '20230331', '20', '3', '4', '30', '4'),
('080000', '120000', '20230331', '20230331', '21', '4', '6', '13', '5'),
('080000', '120000', '20230331', '20230331', '22', '5', '2', '31', '6'),
('080000', '120000', '20230331', '20230331', '23', '6', '13', '23', '7'),
('080000', '120000', '20230331', '20230331', '1', '7', '28', '27', '8'),
('080000', '120000', '20230331', '20230331', '2', '7', '27', '20', '9'),
('080000', '120000', '20230331', '20230331', '6', '8', '24', '17', '10'),
('080000', '120000', '20230331', '20230331', '7', '9', '1', '1', '11'),
('080000', '120000', '20230331', '20230331', '8', '3', '3', '21', '12'),
('080000', '120000', '20230331', '20230331', '10', '7', '31', '35', '13'),
('080000', '120000', '20230331', '20230331', '11', '3', '5', '33', '14'),
('080000', '120000', '20230331', '20230331', '13', '10', '36', '8', '15'),
('080000', '120000', '20230331', '20230331', '14', '11', '21', '36', '16'),
('080000', '120000', '20230331', '20230331', '15', '10', '38', '6', '17'),
('133000', '173000', '20230331', '20230331', '16', '1', '20', '12', '18'),
('133000', '173000', '20230331', '20230331', '17', '1', '16', '3', '19'),
('133000', '173000', '20230331', '20230331', '22', '14', '41', NULL, NULL),
('133000', '173000', '20230331', '20230331', '1', '7', '30', '17', '20'),
('133000', '173000', '20230331', '20230331', '6', '7', '32', '35', '21'),
('133000', '173000', '20230331', '20230331', '8', '3', '8', '21', '22'),
('133000', '173000', '20230331', '20230331', '9', '6', '12', '32', '23'),
('133000', '173000', '20230331', '20230331', '10', '6', '15', '19', '24'),
('133000', '173000', '20230331', '20230331', '13', '10', '40', '24', '25'),
('133000', '173000', '20230331', '20230331', '15', '10', '35', '6', '26'),
('140000', '173000', '20230331', '20230331', '4', '15', '33', NULL, '27'),
('190000', '223000', '20230331', '20230331', '17', '1', '19', '15', '28'),
('190000', '223000', '20230331', '20230331', '18', '11', '22', '34', '29'),
('190000', '223000', '20230331', '20230331', '22', '16', '42', '5', '30'),
('190000', '223000', '20230331', '20230331', '23', '17', '11', '25', '31'),
('190000', '223000', '20230331', '20230331', '1', '7', '26', '14', '32'),
('190000', '223000', '20230331', '20230331', '3', '8', '25', '29', '33'),
('190000', '223000', '20230331', '20230331', '4', '8', '23', '31', '34'),
('190000', '223000', '20230331', '20230331', '5', '18', '43', '11', '35'),
('190000', '223000', '20230331', '20230331', '6', '7', '29', '18', '36'),
('190000', '223000', '20230331', '20230331', '7', '19', '44', NULL, NULL),
('190000', '223000', '20230331', '20230331', '9', '6', '14', '28', '37'),
('190000', '223000', '20230331', '20230331', '10', '10', '39', '2', '38'),
('190000', '223000', '20230331', '20230331', '12', '10', '34', '7', '39'),
('190000', '223000', '20230331', '20230331', '15', '10', '37', '7', '40'),
('190000', '223000', '20230331', '20230331', '19', '20', '45', '4', '41');


SELECT * FROM teacher;
SELECT id_teacher, id_offer FROM reserve_class WHERE id = 12;