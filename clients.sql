

-- Estructura de tabla para la tabla `clientes`--

-- En la columna id en su creación se debe indicar como prymary y autoincrementar--

CREATE TABLE `clientes` (
  `id` int(11) NOT NULL,
  `nombre` varchar(40) NOT NULL,
  `identificacion` varchar(20) NOT NULL,
  `tipoId` varchar(14) NOT NULL,
  `email` varchar(30) NOT NULL,
  `edad` varchar(20) NOT NULL,
  `telefono` varchar(20) NOT NULL,
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


INSERT INTO `clientes` (`id`, `nombre`, `identificacion`, `tipoId`, `email`, `edad`, `telefono`) VALUES
(1, 'Sergio Martinez', '101013443', 'Cedula de ciudadania', 'sermart@gmail.com', '22', '3128833838'),
(5, 'Sofia Lopez', '101665544', 'Cedula de ciudadania', 'soflop@gmail.com', '58', '322764633');


--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`);

