
# This is a fix for InnoDB in MySQL >= 4.1.x
# It "suspends judgement" for fkey relationships until are tables are set.
SET FOREIGN_KEY_CHECKS = 0;

#-----------------------------------------------------------------------------
#-- comentarios
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `comentarios`;


CREATE TABLE `comentarios`
(
	`idComentarios` INTEGER(11)  NOT NULL AUTO_INCREMENT,
	`comentario` VARCHAR(3000)  NOT NULL,
	`created_at` DATE  NOT NULL,
	`updated_at` DATE,
	`idPersona` INTEGER(11)  NOT NULL,
	`idTema` INTEGER(11)  NOT NULL,
	PRIMARY KEY (`idComentarios`),
	KEY `fk_comentarios_persona`(`idPersona`),
	KEY `fk_comentarios_tema`(`idTema`)
)Type=InnoDB;

#-----------------------------------------------------------------------------
#-- contenido_examen
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `contenido_examen`;


CREATE TABLE `contenido_examen`
(
	`idPregunta` INTEGER(11)  NOT NULL AUTO_INCREMENT,
	`pregunta` VARCHAR(100)  NOT NULL,
	`idEvaluacion` INTEGER(11)  NOT NULL,
	PRIMARY KEY (`idPregunta`,`idEvaluacion`),
	KEY `fk_contenido_examen_evaluacion`(`idEvaluacion`)
)Type=InnoDB;

#-----------------------------------------------------------------------------
#-- documento
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `documento`;


CREATE TABLE `documento`
(
	`created_at` DATE  NOT NULL,
	`updated_at` DATE,
	`idDocumento` INTEGER(11)  NOT NULL,
	`nombre` VARCHAR(45)  NOT NULL,
	`idPersona` INTEGER(11)  NOT NULL,
	PRIMARY KEY (`created_at`),
	KEY `fk_documento_persona`(`idPersona`)
)Type=InnoDB;

#-----------------------------------------------------------------------------
#-- evaluacion
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `evaluacion`;


CREATE TABLE `evaluacion`
(
	`idEvaluacion` INTEGER(11)  NOT NULL AUTO_INCREMENT,
	`nombre` VARCHAR(45)  NOT NULL,
	`porcentaje` INTEGER(11)  NOT NULL,
	`tipo` VARCHAR(45)  NOT NULL,
	`fecha_fin` DATE,
	`descripcion` VARCHAR(100),
	`estado` VARCHAR(45),
	`duracion` INTEGER(11),
	PRIMARY KEY (`idEvaluacion`)
)Type=InnoDB;

#-----------------------------------------------------------------------------
#-- lapso
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `lapso`;


CREATE TABLE `lapso`
(
	`idLapso` INTEGER(11)  NOT NULL,
	PRIMARY KEY (`idLapso`)
)Type=InnoDB;

#-----------------------------------------------------------------------------
#-- nota
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `nota`;


CREATE TABLE `nota`
(
	`idNota` INTEGER(11)  NOT NULL AUTO_INCREMENT,
	`created_at` DATE  NOT NULL,
	`updated_at` DATE,
	`nota` INTEGER(11),
	`idPersona` INTEGER(11)  NOT NULL,
	`idEvaluacion` INTEGER(11)  NOT NULL,
	`idLapso` INTEGER(11)  NOT NULL,
	PRIMARY KEY (`idNota`,`idPersona`,`idEvaluacion`),
	KEY `fk_nota_evaluacion`(`idEvaluacion`),
	KEY `fk_nota_persona`(`idPersona`),
	KEY `fk_nota_lapso`(`idLapso`)
)Type=InnoDB;

#-----------------------------------------------------------------------------
#-- persona
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `persona`;


CREATE TABLE `persona`
(
	`idPersona` INTEGER(11)  NOT NULL AUTO_INCREMENT,
	`nombre` VARCHAR(45)  NOT NULL,
	`apellido` VARCHAR(45)  NOT NULL,
	`tipo` VARCHAR(45)  NOT NULL,
	`cuenta` VARCHAR(45)  NOT NULL,
	`clave` VARCHAR(45)  NOT NULL,
	`seccion` VARCHAR(2),
	`estado` VARCHAR(45) default 'Activo' NOT NULL,
	`correo` VARCHAR(80),
	`segundoNombre` VARCHAR(45)  NOT NULL,
	`segundoApellido` VARCHAR(45)  NOT NULL,
	PRIMARY KEY (`idPersona`)
)Type=InnoDB;

#-----------------------------------------------------------------------------
#-- res_dada
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `res_dada`;


CREATE TABLE `res_dada`
(
	`num_pregunta` INTEGER(11)  NOT NULL,
	`respuesta` INTEGER(11)  NOT NULL,
	`idNota` INTEGER(11)  NOT NULL,
	`idPersona` INTEGER(11)  NOT NULL,
	`idEvaluacion` INTEGER(11)  NOT NULL,
	PRIMARY KEY (`num_pregunta`,`idNota`,`idPersona`,`idEvaluacion`),
	KEY `fk_res_dada_nota`(`idNota`, `idPersona`, `idEvaluacion`)
)Type=InnoDB;

#-----------------------------------------------------------------------------
#-- respuesta
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `respuesta`;


CREATE TABLE `respuesta`
(
	`idRespuesta` INTEGER(11)  NOT NULL AUTO_INCREMENT,
	`respuesta` VARCHAR(100)  NOT NULL,
	`tipo` VARCHAR(45)  NOT NULL,
	`idPregunta` INTEGER(11)  NOT NULL,
	PRIMARY KEY (`idRespuesta`,`idPregunta`),
	KEY `fk_respuesta_contenido_examen`(`idPregunta`)
)Type=InnoDB;

#-----------------------------------------------------------------------------
#-- tema
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `tema`;


CREATE TABLE `tema`
(
	`idTema` INTEGER(11)  NOT NULL AUTO_INCREMENT,
	`nombre` VARCHAR(45)  NOT NULL,
	`created_at` DATE  NOT NULL,
	`updated_at` DATE,
	`descripcion` VARCHAR(100),
	`idPersona` INTEGER(11)  NOT NULL,
	PRIMARY KEY (`idTema`),
	KEY `fk_tema_persona`(`idPersona`)
)Type=InnoDB;

# This restores the fkey checks, after having unset them earlier
SET FOREIGN_KEY_CHECKS = 1;
