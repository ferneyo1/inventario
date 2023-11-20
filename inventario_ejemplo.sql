CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `descripcion` varchar(999) DEFAULT NULL,
  `role` int(11) DEFAULT NULL,
  `estado` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;


INSERT INTO `roles` (`id`, `nombre`, `descripcion`, `role`, `estado`) VALUES
(1, 'Admin', 'Administrador del sistema', 1, 'activo'),
(2, 'Operador', 'Operador', 2, 'activo');

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `apellidos` varchar(45) DEFAULT NULL,
  `login` varchar(45) DEFAULT NULL,
  `password` varchar(128) DEFAULT NULL,
  `roles_id` varchar(15) DEFAULT NULL,
  `estado` varchar(10) DEFAULT 'activo'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;


INSERT INTO `usuarios` (`id`, `nombre`, `apellidos`, `login`, `password`, `roles_id`, `estado`) VALUES
(1, 'Ferneycc', 'OSMAcc', 'operador', '643b06434070200fc102f3fd35ed83a2c4ef590afd9fccfca2faca332a85d5a5', '2', 'activo'),
(2, 'Ferney', 'Osma', 'admin', '36b664527d14f8b142dbcf29b5ac7ac7705ad9fa57956e3b08f03c834fd0396f', '1', 'activo');



CREATE TABLE `procesador` (
  `id` int(11) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `estado` varchar(45) DEFAULT 'activo'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

INSERT INTO `procesador` (`id`, `nombre`, `estado`) VALUES
(1, 'Intel i3', 'activo'),
(2, 'Intel i5', 'activo');


CREATE TABLE `almacenamiento` (
  `id` int(11) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `estado` varchar(45) DEFAULT 'activo'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

INSERT INTO `almacenamiento` (`id`, `nombre`, `estado`) VALUES
(1, '500hdd', 'activo'),
(2, '1000hdd', 'activo'),
(3, '128ssd', 'activo'),
(4, '256ssd', 'activo');

CREATE TABLE `marcas` (
  `id` int(11) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `estado` varchar(45) DEFAULT 'activo'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

INSERT INTO `marcas` (`id`, `nombre`, `estado`) VALUES
(1, 'Compaq', 'activo'),
(2, 'Acer', 'activo'),
(3, 'Dell', 'activo'),
(4, 'Hp', 'activo'),
(5, 'Lenovo', 'activo'),
(6, 'Genius', 'activo'),
(7, 'Kyocera', 'activo');



CREATE TABLE `memorias` (
  `id` int(11) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `estado` varchar(45) DEFAULT 'activo'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;


INSERT INTO `memorias` (`id`, `nombre`, `estado`) VALUES
(1, '4gb', 'activo'),
(2, '8gb', 'activo'),
(3, '12gb', 'activo'),
(4, '16gb', 'activo');

CREATE TABLE `estadoequipos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `estado` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

INSERT INTO `estadoequipos` (`id`, `nombre`, `estado`) VALUES
(1, 'Dado de baja', 'activo'),
(2, 'En reparaciÃ³n', 'activo'),
(3, 'Buen estado', 'activo'),
(4, 'Mal estado', 'activo');

CREATE TABLE `tipoequipos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `estado` varchar(45) DEFAULT 'estado'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;


INSERT INTO `tipoequipos` (`id`, `nombre`, `estado`) VALUES
(1, 'Servidor', 'activo'),
(2, 'Portatil', 'activo'),
(3, 'Equipo de escritorio', 'activo'),
(4, 'Terminal micros', 'activo');



CREATE TABLE `areas` (
  `id` int(11) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `estado` varchar(45) DEFAULT 'activo'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

INSERT INTO `areas` (`id`, `nombre`, `estado`) VALUES
(1, 'Alojamiento', 'activo'),
(2, 'Financiero', 'activo'),
(3, 'Gerencia', 'activo'),
(4, 'Alimentos y Bebidas', 'activo'),
(5, 'Comercial', 'activo'),
(6, 'Mantenimiento', 'activo'),
(7, 'Sistemas', 'activo');


CREATE TABLE `lugares` (
  `id` int(11) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `piso` int(45) DEFAULT NULL,
  `estado` varchar(45) DEFAULT 'activo'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;


INSERT INTO `lugares` (`id`, `nombre`, `piso`, `estado`) VALUES
(1, 'RecepciÃ³n', 1, 'activo'),
(2, 'Almacen', 0, 'activo'),
(3, 'Mantenimiento', 0, 'activo'),
(4, 'Restaurante Agatha', 1, 'activo'),
(5, 'Cocina', 1, 'activo'),
(6, 'Business Center', 2, 'activo'),
(7, 'Operaciones', 2, 'activo'),
(8, 'Contabilidad', 2, 'activo'),
(9, 'Gerencia', 2, 'activo'),
(10, 'Centro de Computo', 2, 'activo'),
(11, 'Ama de Llaves', 8, 'activo'),
(12, 'Bar Terraza', 14, 'activo'),
(13, 'Cocina terraza', 14, 'activo');



CREATE TABLE `empleados` (
  `id` int(11) NOT NULL,
  `documento` double DEFAULT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `cargo` varchar(45) DEFAULT NULL,
  `ingreso` date DEFAULT NULL,
  `imagen` varchar(45) DEFAULT NULL,
  `estado` varchar(45) DEFAULT 'activo'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

INSERT INTO `empleados` (`id`, `documento`, `nombre`, `cargo`, `ingreso`, `imagen`, `estado`) VALUES
(1, 16499686, 'FERNEY', 'Coordinador de Sistemas', '2014-01-01', 'fotofondoblanco.jpg', 'activo'),
(2, 12345, 'Edwin Cuero', 'Almacenista y costos', '2023-09-01', 'edwin.jpg', 'activo'),
(3, 1111813665, 'Larry Cuero ZuÃ±iga', 'Asistente Contable', '2022-06-02', 'LARRY.jpg', 'activo'),
(4, 1006203110, 'Maryis Yahaira Rodriguez Valencia', 'Tesorera', '2023-11-16', 'usuario.png', 'activo');


CREATE TABLE `estadoactividad` (
  `id` int(11) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `estado` varchar(45) DEFAULT 'activo'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

INSERT INTO `estadoactividad` (`id`, `nombre`, `estado`) VALUES
(1, 'Cerrada', 'activo'),
(2, 'En espera de aprobaciÃ³n', 'activo'),
(3, 'Pendiente', 'activo'),
(4, 'Escalada a otra Ã¡rea', 'activo'),
(5, 'Abierta', 'activo');


CREATE TABLE `tipoactividad` (
  `id` int(11) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `estado` varchar(45) DEFAULT 'activo'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `tipoactividad`
--

INSERT INTO `tipoactividad` (`id`, `nombre`, `estado`) VALUES
(1, 'RevisiÃ³n', 'activo'),
(2, 'Mantenimiento', 'activo'),
(3, 'ReparaciÃ³n', 'activo');


CREATE TABLE `equipos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `marcas_id` int(11) NOT NULL,
  `serial` varchar(45) DEFAULT NULL,
  `numInventario` varchar(45) DEFAULT NULL,
  `tipoequipos_id` int(11) NOT NULL,
  `areas_id` int(11) NOT NULL,
  `lugares_id` int(11) NOT NULL,
  `procesador_id` int(11) NOT NULL,
  `memorias_id` int(11) NOT NULL,
  `almacenamiento_id` int(11) NOT NULL,
  `imagen` varchar(45) DEFAULT NULL,
  `created_at` date DEFAULT current_timestamp(),
  `updated_at` date DEFAULT NULL,
  `estadoequipos_id` int(11) NOT NULL,
  `usuarios_id` int(11) NOT NULL,
  `estado` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `equipos`
--

INSERT INTO `equipos` (`id`, `nombre`, `marcas_id`, `serial`, `numInventario`, `tipoequipos_id`, `areas_id`, `lugares_id`, `procesador_id`, `memorias_id`, `almacenamiento_id`, `imagen`, `created_at`, `updated_at`, `estadoequipos_id`, `usuarios_id`, `estado`) VALUES
(1, 'Copaccostos', 4, '2UA34315G', '192001-00074', 3, 2, 8, 2, 2, 4, '<br/>El archivo compaq.jpg ya existe: ', '2023-11-11', '2023-11-11', 3, 1, 'activo'),
(2, 'Copactesor', 4, 'MXL3331J1C', '192001-00076', 3, 2, 8, 1, 2, 4, '<br/>El archivo compaqpro.jpg ya existe: ', '2023-11-13', '2023-11-13', 3, 1, 'activo'),
(3, 'Copacaucont', 5, '7844L3S5DMYBZ', '192001-00078', 3, 2, 8, 1, 1, 4, 'THINKCENTRE.jpg', '2023-11-14', '2023-11-14', 3, 2, 'activo');



CREATE TABLE `perifericos` (
  `id` int(11) NOT NULL,
  `equipos_id` int(11) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `marcas_id` int(11) NOT NULL,
  `serial` varchar(45) DEFAULT NULL,
  `numInventario` varchar(45) DEFAULT NULL,
  `estado` varchar(45) DEFAULT 'activo'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

ALTER TABLE `perifericos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_periferico_equipos_idx` (`equipos_id`),
  ADD KEY `fk_periferico_marcas_idx` (`marcas_id`);


INSERT INTO `perifericos` (`id`, `equipos_id`, `nombre`, `marcas_id`, `serial`, `numInventario`, `estado`) VALUES
(1, 2, 'Monitor', 3, 'KPXI11A004364', '192001-00077', 'activo'),
(2, 2, 'Teclado', 3, 'BDAEV0QVB4W4BW', '192001-00000', 'activo'),
(3, 2, 'Mouse', 3, 'X1L96146908717', '192001-00000', 'activo'),
(4, 1, 'Monitor', 4, '6CM33125YX', '192001-00075', 'activo'),
(5, 1, 'Teclado', 4, 'BDAEV0Q5Y4V4PG', '192001-00000', 'activo'),
(6, 1, 'Mouse', 5, '44Z8513', '', 'activo'),
(7, 3, 'Monitor', 4, '6CM33125YF', '192001-00079', 'activo'),
(8, 3, 'Teclado', 6, 'UD21J2313646', '192001-00070', 'activo'),
(9, 3, 'Mouse', 6, 'nn', '192001-00000', 'activo');

CREATE TABLE `actividades` (
  `id` int(11) NOT NULL,
  `equipos_id` int(11) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `descripcion` varchar(999) DEFAULT NULL,
  `created_at` date DEFAULT current_timestamp(),
  `updated_at` date DEFAULT NULL,
  `tipoactividad_id` int(11) NOT NULL,
  `estadoactividad_id` int(11) NOT NULL,
  `usuarios_id` int(11) NOT NULL,
  `estado` varchar(45) DEFAULT 'activo'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `actividades`
--

INSERT INTO `actividades` (`id`, `equipos_id`, `nombre`, `descripcion`, `created_at`, `updated_at`, `tipoactividad_id`, `estadoactividad_id`, `usuarios_id`, `estado`) VALUES
(1, 1, 'Mantenimiento', 'Se realiza limpieza de equipo (cpu, monitor, teclado y mouse) este consiste en limpieza interna y externa y eliminaciÃƒÂ³n de archivos temporales. se prueba y queda en buen estado', '2023-11-12', '2023-11-12', 2, 1, 1, 'activo'),
(2, 2, 'Mantenimiento', 'Se realiza limpieza de equipo (cpu, monitor, teclado y mouse) este consiste en limpieza interna y externa y eliminaciÃƒÂ³n de archivos temporales. se prueba y queda en buen estado', '2023-11-12', '2023-11-12', 2, 1, 1, 'activo'),
(3, 3, 'Mantenimiento', 'Se realiza limpieza de equipo (cpu, monitor, teclado y mouse) este consiste en limpieza interna y externa y eliminaciÃƒÂ³n de archivos temporales. se prueba y queda en buen estado', '2023-11-12', '2023-11-12', 2, 1, 2, 'activo');


CREATE TABLE `equipoempleado` (
  `id` int(11) NOT NULL,
  `equipos_id` int(11) NOT NULL,
  `empleados_id` int(11) NOT NULL,
  `created_at` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL,
  `estado` varchar(45) DEFAULT 'activo'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

INSERT INTO `equipoempleado` (`id`, `equipos_id`, `empleados_id`, `created_at`, `updated_at`, `estado`) VALUES
(1, 1, 2, '2023-11-12', '2023-11-12', 'activo'),
(2, 2, 4, '2023-11-13', '2023-11-16', 'activo'),
(3, 3, 3, '2023-11-14', '2023-11-14', 'activo');


ALTER TABLE `equipoempleado`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_equipos_has_usuarios_equipos` (`equipos_id`),
  ADD KEY `fk_equipos_has_usuarios_usuarios1` (`empleados_id`);



ALTER TABLE `actividades`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_actividades_estadoactividad1_idx` (`estadoactividad_id`),
  ADD KEY `fk_actividades_equipos1_idx` (`equipos_id`),
  ADD KEY `fk_actividades_tipoactividad1_idx` (`tipoactividad_id`),
  ADD KEY `fk_actividades_usuarios1_idx` (`usuarios_id`);


ALTER TABLE `procesador`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `almacenamiento`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `areas`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `empleados`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `equipos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_equipos_marcas1_idx` (`marcas_id`),
  ADD KEY `fk_equipos_usuarios1_idx` (`usuarios_id`),
  ADD KEY `fk_equipos_procesador1_idx` (`procesador_id`),
  ADD KEY `fk_equipos_memorias1_idx` (`memorias_id`),
  ADD KEY `fk_equipos_almacenamiento1_idx` (`almacenamiento_id`),
  ADD KEY `fk_equipos_areas1` (`areas_id`),
  ADD KEY `fk_equipos_estadoequipos1` (`estadoequipos_id`),
  ADD KEY `fk_equipos_lugares1` (`lugares_id`),
  ADD KEY `fk_equipos_tipoequipo1` (`tipoequipos_id`);

ALTER TABLE `estadoactividad`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `estadoequipos`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `lugares`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `marcas`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `memorias`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `tipoactividad`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `tipoequipos`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `actividades`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

ALTER TABLE `almacenamiento`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

ALTER TABLE `areas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;


ALTER TABLE `empleados`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

ALTER TABLE `equipoempleado`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

ALTER TABLE `equipos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

ALTER TABLE `estadoactividad`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

ALTER TABLE `estadoequipos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

ALTER TABLE `lugares`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

ALTER TABLE `marcas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

ALTER TABLE `memorias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

ALTER TABLE `perifericos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

ALTER TABLE `procesador`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

ALTER TABLE `tipoactividad`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

ALTER TABLE `tipoequipos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

ALTER TABLE `actividades`
  ADD CONSTRAINT `fk_actividades_equipos1` FOREIGN KEY (`equipos_id`) REFERENCES `equipos` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_actividades_estadoactividad1` FOREIGN KEY (`estadoactividad_id`) REFERENCES `estadoactividad` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_actividades_tipoactividad1` FOREIGN KEY (`tipoactividad_id`) REFERENCES `tipoactividad` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_actividades_usuarios1` FOREIGN KEY (`usuarios_id`) REFERENCES `usuarios` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

ALTER TABLE `equipoempleado`
  ADD CONSTRAINT `fk_equipos_has_usuarios_equipos` FOREIGN KEY (`equipos_id`) REFERENCES `equipos` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_equipos_has_usuarios_usuarios1` FOREIGN KEY (`empleados_id`) REFERENCES `empleados` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

ALTER TABLE `equipos`
  ADD CONSTRAINT `fk_equipos_almacenamiento1` FOREIGN KEY (`almacenamiento_id`) REFERENCES `almacenamiento` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_equipos_areas1` FOREIGN KEY (`areas_id`) REFERENCES `areas` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_equipos_estadoequipos1` FOREIGN KEY (`estadoequipos_id`) REFERENCES `estadoequipos` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_equipos_lugares1` FOREIGN KEY (`lugares_id`) REFERENCES `lugares` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_equipos_marcas1` FOREIGN KEY (`marcas_id`) REFERENCES `marcas` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_equipos_memorias1` FOREIGN KEY (`memorias_id`) REFERENCES `memorias` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_equipos_procesador1` FOREIGN KEY (`procesador_id`) REFERENCES `procesador` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_equipos_tipoequipo1` FOREIGN KEY (`tipoequipos_id`) REFERENCES `tipoequipos` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_equipos_usuarios1` FOREIGN KEY (`usuarios_id`) REFERENCES `usuarios` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;


ALTER TABLE `perifericos`
  ADD CONSTRAINT `fk_periferico_equipos` FOREIGN KEY (`equipos_id`) REFERENCES `equipos` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_periferico_marcas` FOREIGN KEY (`marcas_id`) REFERENCES `marcas` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;