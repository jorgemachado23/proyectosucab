
# This is a fix for InnoDB in MySQL >= 4.1.x
# It "suspends judgement" for fkey relationships until are tables are set.
SET FOREIGN_KEY_CHECKS = 0;

#-----------------------------------------------------------------------------
#-- comentarios
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `comentarios`;


CREATE TABLE `comentarios`
(
	`idcomentarios` INTEGER(11)  NOT NULL AUTO_INCREMENT,
	`comentario` VARCHAR(3000)  NOT NULL,
	`created_at` DATE  NOT NULL,
	`updated_at` DATE,
	`idpersona` INTEGER(11)  NOT NULL,
	`idtema` INTEGER(11)  NOT NULL,
	PRIMARY KEY (`idcomentarios`),
	KEY `fk_comentarios_persona`(`idpersona`),
	KEY `fk_comentarios_tema`(`idtema`)
)Type=InnoDB;

#-----------------------------------------------------------------------------
#-- contenido_examen
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `contenido_examen`;


CREATE TABLE `contenido_examen`
(
	`idpregunta` INTEGER(11)  NOT NULL AUTO_INCREMENT,
	`pregunta` VARCHAR(100)  NOT NULL,
	`idevaluacion` INTEGER(11)  NOT NULL,
	PRIMARY KEY (`idpregunta`,`idevaluacion`),
	KEY `fk_contenido_examen_evaluacion`(`idevaluacion`)
)Type=InnoDB;

#-----------------------------------------------------------------------------
#-- documento
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `documento`;


CREATE TABLE `documento`
(
	`created_at` DATE  NOT NULL,
	`updated_at` DATE,
	`iddocumento` INTEGER(11)  NOT NULL,
	`nombre` VARCHAR(45)  NOT NULL,
	`idpersona` INTEGER(11)  NOT NULL,
	PRIMARY KEY (`created_at`),
	KEY `fk_documento_persona`(`idpersona`)
)Type=InnoDB;

#-----------------------------------------------------------------------------
#-- evaluacion
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `evaluacion`;


CREATE TABLE `evaluacion`
(
	`idevaluacion` INTEGER(11)  NOT NULL AUTO_INCREMENT,
	`nombre` VARCHAR(45)  NOT NULL,
	`porcentaje` INTEGER(11)  NOT NULL,
	`tipo` VARCHAR(45)  NOT NULL,
	`fecha_fin` DATE,
	`descripcion` VARCHAR(100),
	`estado` VARCHAR(45),
	`duracion` INTEGER(11),
	PRIMARY KEY (`idevaluacion`)
)Type=InnoDB;

#-----------------------------------------------------------------------------
#-- lapso
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `lapso`;


CREATE TABLE `lapso`
(
	`idlapso` INTEGER(11)  NOT NULL,
	PRIMARY KEY (`idlapso`)
)Type=InnoDB;

#-----------------------------------------------------------------------------
#-- nota
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `nota`;


CREATE TABLE `nota`
(
	`idnota` INTEGER(11)  NOT NULL AUTO_INCREMENT,
	`created_at` DATE  NOT NULL,
	`updated_at` DATE,
	`nota` INTEGER(11),
	`idpersona` INTEGER(11)  NOT NULL,
	`idevaluacion` INTEGER(11)  NOT NULL,
	`idlapso` INTEGER(11)  NOT NULL,
	PRIMARY KEY (`idnota`,`idpersona`,`idevaluacion`),
	KEY `fk_nota_evaluacion`(`idevaluacion`),
	KEY `fk_nota_persona`(`idpersona`),
	KEY `fk_nota_lapso`(`idlapso`)
)Type=InnoDB;

#-----------------------------------------------------------------------------
#-- persona
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `persona`;


CREATE TABLE `persona`
(
	`idpersona` INTEGER(11)  NOT NULL AUTO_INCREMENT,
	`nombre` VARCHAR(45)  NOT NULL,
	`segundonombre` VARCHAR(45)  NOT NULL,
	`apellido` VARCHAR(45)  NOT NULL,
	`segundoapellido` VARCHAR(45)  NOT NULL,
	`tipo` VARCHAR(45)  NOT NULL,
	`cuenta` VARCHAR(45)  NOT NULL,
	`clave` VARCHAR(45)  NOT NULL,
	`seccion` VARCHAR(2),
	`estado` VARCHAR(45) default 'Activo' NOT NULL,
	`correo` VARCHAR(80),
	PRIMARY KEY (`idpersona`)
)Type=InnoDB;

#-----------------------------------------------------------------------------
#-- res_dada
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `res_dada`;


CREATE TABLE `res_dada`
(
	`num_pregunta` INTEGER(11)  NOT NULL,
	`respuesta` INTEGER(11)  NOT NULL,
	`idnota` INTEGER(11)  NOT NULL,
	`idpersona` INTEGER(11)  NOT NULL,
	`idevaluacion` INTEGER(11)  NOT NULL,
	PRIMARY KEY (`num_pregunta`,`idnota`,`idpersona`,`idevaluacion`),
	KEY `fk_res_dada_nota`(`idnota`, `idpersona`, `idevaluacion`)
)Type=InnoDB;

#-----------------------------------------------------------------------------
#-- respuesta
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `respuesta`;


CREATE TABLE `respuesta`
(
	`idrespuesta` INTEGER(11)  NOT NULL AUTO_INCREMENT,
	`respuesta` VARCHAR(100)  NOT NULL,
	`tipo` VARCHAR(45)  NOT NULL,
	`idpregunta` INTEGER(11)  NOT NULL,
	PRIMARY KEY (`idrespuesta`,`idpregunta`),
	KEY `fk_respuesta_contenido_examen`(`idpregunta`)
)Type=InnoDB;

#-----------------------------------------------------------------------------
#-- tema
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `tema`;


CREATE TABLE `tema`
(
	`idtema` INTEGER(11)  NOT NULL AUTO_INCREMENT,
	`nombre` VARCHAR(45)  NOT NULL,
	`created_at` DATE  NOT NULL,
	`updated_at` DATE,
	`descripcion` VARCHAR(100),
	`idpersona` INTEGER(11)  NOT NULL,
	PRIMARY KEY (`idtema`),
	KEY `fk_tema_persona`(`idpersona`)
)Type=InnoDB;

# This restores the fkey checks, after having unset them earlier
SET FOREIGN_KEY_CHECKS = 1;
