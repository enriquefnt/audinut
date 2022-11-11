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
