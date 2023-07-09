
CREATE TABLE `datos_benef` (
  `id_datos_benef` int(11) NOT NULL AUTO_INCREMENT,
  `Nombres` varchar(20) NOT NULL,
  `Apellidos` varchar(20) NOT NULL,
  `DNI` int(8) NOT NULL,
  `FechaNac` date NOT NULL,
  `Celular` varchar(15) NOT NULL,
  `Domicilio` varchar(70) NOT NULL,
  `Localidad` varchar(50) NOT NULL,
  `id_localidad` int(5) NOT NULL,
  `NombresResp` varchar(25) DEFAULT NULL,
  `ApellidosResp` varchar(25) DEFAULT NULL,
  `CelularResp` varchar(25) DEFAULT NULL,
  `DNIResp` int(8) DEFAULT NULL,
  `fechaCarga` date DEFAULT NULL,
  `id_usuario` int(3) NOT NULL,
  PRIMARY KEY (`id_datos_benef`),
  UNIQUE KEY `id_datos_benef_UNIQUE` (`id_datos_benef`)
) ENGINE=InnoDB AUTO_INCREMENT=360 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;


CREATE TABLE `datos_pedido` (
  `id_datos_pedido` int(11) NOT NULL AUTO_INCREMENT,
  `id_datos_benef` int(11) NOT NULL,
  `diag_med` varchar(80) DEFAULT NULL,
  `diag_nutri` varchar(80) DEFAULT NULL,
  `peso` float DEFAULT NULL,
  `talla` float DEFAULT NULL,
  `variacion` varchar(45) DEFAULT NULL,
  `requ_calorias` int(4) DEFAULT NULL,
  `porc_aporte` int(2) DEFAULT NULL,
  `nutro_ter` varchar(45) DEFAULT NULL,
  `via` varchar(45) DEFAULT NULL,
  `suger_tm` varchar(45) DEFAULT NULL,
  `presenta` varchar(45) DEFAULT NULL,
  `gramos_dia` int(4) DEFAULT NULL,
  `env_pormes` int(2) DEFAULT NULL,
  `estado` varchar(10) DEFAULT NULL,
  `fecha_ped` date DEFAULT NULL,
  `modif_ult` date DEFAULT NULL,
  `usuari_id` int(3) DEFAULT NULL,
  `Observacion` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_datos_pedido`),
  UNIQUE KEY `id_datos_pedido_UNIQUE` (`id_datos_pedido`)
) ENGINE=InnoDB AUTO_INCREMENT=359 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;


CREATE TABLE `datos_institucion` (
  `establecimiento_nombre` varchar(92) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `codi_esta` varchar(10) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  PRIMARY KEY (`codi_esta`,`establecimiento_nombre`),
  UNIQUE KEY `codi_esta_UNIQUE` (`codi_esta`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

CREATE TABLE `datos_localidad` (
  `gid` int(11) NOT NULL,
  `nombre_geo` varchar(70) NOT NULL,
  PRIMARY KEY (`gid`,`nombre_geo`),
  UNIQUE KEY `gid_UNIQUE` (`gid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

CREATE TABLE `datos_usuarios` (
  `id_usuario` int(3) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) NOT NULL,
  `apellido` varchar(45) NOT NULL,
  `profesion` varchar(15) NOT NULL,
  `tipo` int(1) NOT NULL,
  `establecimiento_nombre` varchar(70) NOT NULL,
  `celular` varchar(15) NOT NULL,
  `email` varchar(255) NOT NULL,
  `user` varchar(45) NOT NULL,
  `password` varchar(255) NOT NULL,
  `id_establecimiento` varchar(14) NOT NULL,
  `fechaCarga` datetime DEFAULT NULL,
  PRIMARY KEY (`id_usuario`),
  UNIQUE KEY `id_UNIQUE` (`id_usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=127 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


CREATE TABLE `datos_producto` (
  `id_producto` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `producto` varchar(45) DEFAULT NULL,
  `tipo` varchar(72) DEFAULT NULL,
  `fechaCarga` datetime DEFAULT NULL,
  `activo` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`id_producto`)
) ENGINE=InnoDB AUTO_INCREMENT=118 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

