

CREATE TABLE `admin` (
  `id_admin` int(250) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `pass` varchar(200) CHARACTER SET utf32 COLLATE utf32_spanish_ci NOT NULL,
  `nombre` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `apellido` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `cedula` int(67) NOT NULL,
  PRIMARY KEY (`id_admin`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;






CREATE TABLE `alumnos` (
  `id_alumno` int(11) NOT NULL AUTO_INCREMENT,
  `nombres` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `apellidos` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci NOT NULL,
  `cedula` int(30) NOT NULL,
  `tlf` int(56) NOT NULL,
  `nacimiento` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `curso` varchar(150) COLLATE utf8_spanish_ci NOT NULL,
  `nombre_rep` varchar(250) COLLATE utf8_spanish_ci NOT NULL,
  `discapacidad` varchar(250) COLLATE utf8_spanish_ci NOT NULL,
  `est_p` int(100) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id_alumno`),
  KEY `curso` (`curso`),
  KEY `curso_2` (`curso`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

INSERT INTO alumnos VALUES("6","asdasdaf","dsfsgfdgfd ghhgf","25666783","0","2022-02-22","2DO GRADO SECCION B","","adasd","1");





CREATE TABLE `curso` (
  `id_curso` int(250) NOT NULL AUTO_INCREMENT,
  `maestro` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `ano` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `num_alumnos` int(200) NOT NULL,
  `seccion` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `grado` varchar(60) CHARACTER SET utf8 NOT NULL,
  `est_v` int(200) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id_curso`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

INSERT INTO curso VALUES("23","Duvall rujano","","0","A","1ER GRADO","1");





CREATE TABLE `maestro` (
  `id_maestro` int(250) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `apellido` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `cedula` int(200) NOT NULL,
  `correo` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `telefono` int(200) NOT NULL,
  `grado` varchar(150) COLLATE utf8_spanish_ci NOT NULL,
  `est_m` int(200) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id_maestro`),
  UNIQUE KEY `cedula` (`cedula`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

INSERT INTO maestro VALUES("2","Duvall","rujano","25666783","tterg dg242 3","32425253","","1");
INSERT INTO maestro VALUES("4","dasdsadadf","rujano","12313123","ajsdasj@gmail.com","32425253","asdsadsf","1");
INSERT INTO maestro VALUES("6","Duvall","rujano","2147483647","ajsda22sj@gmail.com","2147483647","","1");





CREATE TABLE `seguridad_p` (
  `id_seguridad` int(11) NOT NULL AUTO_INCREMENT,
  `pregunta1` varchar(200) CHARACTER SET utf8 NOT NULL,
  `respuesta1` varchar(200) CHARACTER SET utf8 NOT NULL,
  `pregunta2` varchar(200) CHARACTER SET utf8 NOT NULL,
  `respuesta2` varchar(200) CHARACTER SET utf8 NOT NULL,
  `activacion` int(50) NOT NULL DEFAULT '0',
  `ident_p` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id_seguridad`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

INSERT INTO seguridad_p VALUES("1","¿Color favorito?","aaa","¿Comida favorita?","aaaa","1","1292437614");





CREATE TABLE `unidad_c` (
  `id_unidad` int(11) NOT NULL AUTO_INCREMENT,
  `unidad_nom` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `fecha_inicio` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `fecha_entrega` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `descripcion` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `ponderacion` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `materia_p` varchar(150) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id_unidad`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;






CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `nombres` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `apellidos` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `cedula` int(200) NOT NULL,
  `usuario` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `pass` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `correo` varchar(250) CHARACTER SET utf8 NOT NULL,
  `iden_us` varchar(200) CHARACTER SET utf8 NOT NULL,
  `tipo_usu` varchar(50) COLLATE utf8_spanish_ci NOT NULL DEFAULT 'corriente',
  PRIMARY KEY (`id_usuario`),
  UNIQUE KEY `cedula` (`cedula`),
  UNIQUE KEY `correo` (`correo`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

INSERT INTO usuario VALUES("18","Duvall","Rujano","2593274","Duvall.Rujano132@gmail.","123456","","","administrador");
INSERT INTO usuario VALUES("23","Anderson Cespedes","","0","andersontrabajos2@gmail.com","123456789","andersontrabajos2@gmail.com","","corriente");



