CREATE TABLE `datos_benef` (
  `id_datos_benef` int(11) NOT NULL AUTO_INCREMENT,
  `Nombres` tinytext NOT NULL,
  `Apellidos` tinytext NOT NULL,
  `DNI` int(8) NOT NULL,
  `FechaNac` date NOT NULL,
  `Celular` int(12) NOT NULL,
  `Domicilio` tinytext NOT NULL,
  `Localidad` varchar(45) NOT NULL,
  `NombresResp` tinytext DEFAULT NULL,
  `ApellidosResp` tinytext DEFAULT NULL,
  `CelularResp` int(12) DEFAULT NULL,
  `DNIResp` int(8) DEFAULT NULL,
  PRIMARY KEY (`id_datos_benef`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;



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
  `prof_solicita` varchar(45) NOT NULL,
  `servicio` varchar(45) DEFAULT NULL,
  `hospital` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `celular` int(12) DEFAULT NULL,
  `suspencion` tinyint(4) DEFAULT NULL,
  `Estado` int(11) DEFAULT NULL,
  `fecha_ped` date DEFAULT NULL,
  `fecha_reg` date DEFAULT NULL,
  `usuari_id` int(2) DEFAULT NULL,
  PRIMARY KEY (`id_datos_pedido`,`id_datos_benef`),
  UNIQUE KEY `id_datos_pedido_UNIQUE` (`id_datos_pedido`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



CREATE TABLE `datos_usuarios` (
  `id_usuario` int(3) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `apellido` varchar(45) NOT NULL,
  `profesion` varchar(15) NOT NULL,
  `tipo` int(1) NOT NULL,
  `cod_ser` int(5) NOT NULL,
  `celular` int(10) NOT NULL,
  `email` varchar(255) NOT NULL,
  `usuario` varchar(45) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id_usuario`),
  UNIQUE KEY `id_UNIQUE` (`id_usuario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
