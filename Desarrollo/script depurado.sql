Create table if not exists persona(
  idpersona int not null AUTO_INCREMENT,
  nombre varchar(45) not null,
  apellido varchar(45) not null,
  tipo varchar(45) not null,
  cuenta varchar(45) not null,
  clave VARCHAR(45) NOT NULL ,
  seccion VARCHAR(2) NULL ,
  estado VARCHAR(45) NOT NULL DEFAULT 'Activo' ,
  correo VARCHAR(80) NULL ,
  segundonombre VARCHAR(45) NOT NULL ,
  segundoapellido VARCHAR(45) NOT NULL ,
  PRIMARY KEY (idpersona)
);

Create table if not exists documento(
  created_at date not null,
  updated_at date null,
  iddocumento int not null,
  nombre varchar(45) not null,
  idpersona int not null,
  Primary Key(created_at),
  constraint fk_documento_persona foreign key(idpersona)
  references persona(idpersona)
);

Create table if not exists tema(
  idtema int not null AUTO_INCREMENT,
  nombre varchar(45) not null,
  created_at date not null,
  updated_at date null,
  descripcion varchar(100),
  idpersona int not null,
  primary key(idtema),
  constraint fk_tema_persona foreign key (idpersona)
  references persona(idpersona)
);

Create table if not exists comentarios(
  idcomentarios int not null AUTO_INCREMENT,
  comentario varchar(3000) not null,
  created_at date not null,
  updated_at date null,
  idpersona int not null,
  idtema int not null,
  primary key (idcomentarios),
  constraint fk_comentarios_persona foreign key (idpersona)
  references persona(idpersona),
  constraint fk_comentarios_tema foreign key (idtema)
  references tema(idtema)
);

Create table if not exists lapso(
  idlapso int not null,
  primary key (idlapso)
);

Create table if not exists evaluacion(
  idevaluacion int not null AUTO_INCREMENT,
  nombre varchar(45) not null,
  porcentaje int not null,
  tipo varchar(45) not null,
  fecha_fin date null,
  descripcion varchar(100) null,
  estado varchar(45) null,
  duracion int null,
  idlapso int not null,
  primary key (idevaluacion),
  constraint fk_evaluacion_lapso foreign key(idLapso)
  references lapso(idLapso)
);

Create table if not exists nota(
  idnota int not null AUTO_INCREMENT,
  created_at date not null,
  updated_at date null,
  nota int null,
  idpersona int not null,
  idevaluacion int not null,
  primary key(idnota,idpersona,idevaluacion),
  constraint fk_nota_evaluacion foreign key(idevaluacion)
  references evaluacion(idevaluacion),
  constraint fk_nota_persona foreign key(idpersona)
  references persona(idpersona)
);

Create table if not exists res_dada(
  num_pregunta int not null,
  respuesta int not null,
  idnota int not null,
  idpersona int not null,
  idevaluacion int not null,
  primary key(num_pregunta, idnota,idpersona,idevaluacion),
  constraint fk_res_dada_nota foreign key (idnota,idpersona,idevaluacion)
  references nota(idnota,idpersona,idevaluacion)
);

Create table if not exists contenido_examen(
  idpregunta int not null AUTO_INCREMENT,
  pregunta varchar(100) not null,
  idevaluacion int not null,
  primary key(idpregunta,idevaluacion),
  constraint fk_contenido_examen_evaluacion foreign key (idevaluacion)
  references evaluacion(idevaluacion)
);

Create table if not exists respuesta(
  idrespuesta int not null AUTO_INCREMENT,
  respuesta varchar(100) not null,
  tipo varchar(45) not null,
  idpregunta int not null,
  primary key(idrespuesta,idpregunta),
  constraint fk_respuesta_contenido_examen foreign key(idpregunta)
  references contenido_examen(idpregunta)
);

