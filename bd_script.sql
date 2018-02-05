CREATE TABLE secciones(`id` INT AUTO_INCREMENT PRIMARY KEY, `nombre` VARCHAR(40))ENGINE=INNODB;

CREATE TABLE estudiantes(`id` INT AUTO_INCREMENT PRIMARY KEY, `nombre` VARCHAR(240), `edad` INT(3),
`promedio` DOUBLE, `imagen` VARCHAR(240) DEFAULT 'default.png', `id_seccion` INT, `fecha` DATETIME,
FOREIGN KEY(`id_seccion`) REFERENCES secciones(`id`))ENGINE=INNODB;

INSERT INTO secciones(`id`, `nombre`)
VALUES('1','Seccion 1'),
      (null,'Seccion 2'),
      (null,'Seccion 3');

INSERT INTO estudiantes(`id`,`nombre`,`edad`,`promedio`,`imagen`,`id_seccion`,`fecha`)
VALUES(1,'Tatiana','40',8.8,'default.png',2,'CURRENT_TIME'),
      (null,'Delfin','40',8.8,'default.png',1,'CURRENT_TIME'),
      (null,'Victor','40',8.8,'default.png',3,'CURRENT_TIME');
