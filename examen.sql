-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 05-11-2016 a las 20:42:46
-- Versión del servidor: 5.7.14
-- Versión de PHP: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `examen`
--
CREATE DATABASE IF NOT EXISTS `examen` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `examen`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumno`
--

CREATE TABLE `alumno` (
  `Matricula` int(9) NOT NULL,
  `Nombre` varchar(100) CHARACTER SET utf8 NOT NULL,
  `Password` varchar(10) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `alumno`
--

INSERT INTO `alumno` (`Matricula`, `Nombre`, `Password`) VALUES
(201022797, 'Luis Fernando Martínez Ramos', '123456'),
(201228490, 'deliss gt', '123');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `historial`
--

CREATE TABLE `historial` (
  `IdHistorial` int(11) NOT NULL,
  `Fecha` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `Correctas` int(11) NOT NULL,
  `Incorrectas` int(11) NOT NULL,
  `Promedio` double NOT NULL,
  `IdAlumno` int(11) NOT NULL,
  `Cronometro` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `historial`
--

INSERT INTO `historial` (`IdHistorial`, `Fecha`, `Correctas`, `Incorrectas`, `Promedio`, `IdAlumno`, `Cronometro`) VALUES
(13, '2016-11-05', 3, 5, 3.75, 201022797, '00:00:22:94'),
(14, '2016-11-05', 2, 4, 3.3333333333333, 201022797, '00:00:15:35'),
(15, '2016-11-05', 3, 4, 4.2857142857143, 201022797, '00:00:17:69'),
(16, '2016-11-05', 3, 4, 4.2857142857143, 201022797, '00:00:18:72'),
(21, '2016-11-05', 0, 6, 0, 201022797, '00:00:14:92');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `imagenes`
--

CREATE TABLE `imagenes` (
  `idImagen` int(11) NOT NULL,
  `Ubicacion` varchar(150) NOT NULL,
  `IdPregunta` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `imagenes`
--

INSERT INTO `imagenes` (`idImagen`, `Ubicacion`, `IdPregunta`) VALUES
(13, 'imagenes/Fenix-Omen.jpg', 9),
(14, 'imagenes/preg2.png', 16),
(15, 'imagenes/Captura.PNG', 17),
(16, 'imagenes/preg4.png', 18),
(17, 'imagenes/carretera.png', 23);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `preguntas`
--

CREATE TABLE `preguntas` (
  `IdPreg` int(100) NOT NULL,
  `Area` varchar(100) NOT NULL,
  `DefOper` varchar(500) NOT NULL,
  `BaseReac` varchar(500) NOT NULL,
  `IdProfesor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `preguntas`
--

INSERT INTO `preguntas` (`IdPreg`, `Area`, `DefOper`, `BaseReac`, `IdProfesor`) VALUES
(9, 'F1A1T3E2', 'Dado un problema de software de aplicación en las areas de sistemas de información, bases de datos, ingeniería de software o desarrollo Web, el sustentante selecciona la metodología para su diseño.', 'Dado un desarrollo de un sistema Web para la administracion escolar de una universidad que contempla la inscripción de estudiantes a materias y la carga de materias a profesores, seleccione la metodologiía para su diseño.', 201213870),
(12, 'F3A2T3E3', 'Dado un algoritmo (Dijkstra, Ford, Runge, Kutta, mí­nimos cuadrados, quicksort, minimax, simplex entre otros), el sustentante selecciona su complejidad', 'Dado el siguiente algoritmo de ordenamiento rápida o quicksort que utilizan la técnica de diseño Divide y Vencerás para ordenar n-elementos en orden ascendente o descendente, seleccione su complejidad considerando el caso promedio', 201213870),
(13, 'F3A2T2E3', 'Ante un código en C o Java con error y una salida deseada, el sustentante identifica el error', 'Dado el siguiente código en JAVA  donde se requiere imprimir a pantalla el valor inicial de un objeto, actualizar dicho valor y volverlo a mostrar, identifique el error que tiene:', 201213870),
(14, 'F3A2T2E2', 'Dado un pseudocódigo o código (C o JAVA) y una entrada, el sustentante selecciona la salida correcta', 'Dado el siguiente código en C y suponiendo una entrada de 4 números enteros: 2,1,0,0, seleccione la salida que proporciona dicho código.', 201307044),
(15, 'F1A1T3E2', 'Dado un problema de software de aplicación en las áreas de sistemas de información, bases de datos, ingeniería de software o desarrollo Web, el sustentante selecciona la metodología para su diseño.', 'Dado un desarrollo de un sistema Web para la administración escolar de una universidad que contempla la inscripción de estudiantes a materias y la carga de materias a profesores, seleccione la metodología para su diseño.', 201307044),
(16, 'F3A2T3E3', 'Dado un algoritmo (Dijkstra, Ford, Runge, Kutta, mÃ­nimos cuadrados, quicksort, minimax, simplex entre otros), el sustentante selecciona su complejidad', 'Dado el siguiente algoritmo de ordenamiento rápida o quicksort que utilizan la técnica de diseño Divide y Venceras para ordenar n-elementos en orden ascendente o descendente, seleccione su complejidad considerando el caso promedio', 201307044),
(17, 'F3A2T2E3', 'Ante un código en C o Java con error y una salida deseada, el sustentante identifica el error', 'Dado el siguiente código en JAVA  donde se requiere imprimir a pantalla el valor inicial de un objeto, actualizar dicho valor y volverlo a mostrar, identifique el error que tiene:', 201307044),
(18, 'F3A2T2E2', 'Dado un pseudocódigo o código (C o JAVA) y una entrada, el sustentante selecciona la salida correcta', 'Dado el siguiente código en C y suponiendo una entrada de 4 números enteros: 2,1,0,0, seleccione la salida que proporciona dicho código.', 201307044),
(19, 'F1A1T5E2', 'Dado un problema de desarrollo de software de aplicación en las áreas de sistemas de información, bases de datos, ingeniería de software o desarrollo Web, el sustentante calcula el costo de implementación de una solución.', 'Se requiere desarrollar un sistema software de aplicación de Diseño Asistido por Computadora (CAD) de componentes mecánicos. La descomposición de éste sistema software por funciones y sus respectivas lÃ­neas de código estimadas (LDC) son las siguientes:\n\nFUNCIÓN	LDC Estimadas\nIUFC: interfaz de Usuario y Facilidades de Control	2300\nAG2D: Análisis Geométrico de 2D	5300\nAG3D: Análisis Geométrico de 3D	6800\nGBD: Gestión de Base de Datos	3350\nFPGC: Facilidades de Presentación Grá', 201307044),
(20, 'F2A1T3E3', 'A partir de un modelo para software de base tales como el modelo OSI, TCP/IP, compiladores, Sistemas Operativos, el sustentante ordena los elementos del modelo.', 'El conjunto de protocolos de Internet se compone de aquellos relacionados con la asociación TCP/IP los cuales se distribuyen dentro de las diferentes capas de servicios de la red (del modelo OSI/ISO). Ordene las siguientes capas de servicios del modelo OSI para formar la pila correspondiente:\nCapa de Transporte\nCapa de Aplicación\nCapa Física\nCapa de Enlace de Datos\nCapa de Sesión\nCapa de Red\nCapa de Presentación \n\n', 201307044),
(21, 'F1A1T5E2', 'Dado un problema de desarrollo de software de aplicación en las áreas de sistemas de información, bases de datos, ingeniería de software o desarrollo Web, el sustentante calcula el costo de implementación de una solución.', 'Se requiere desarrollar un sistema software de aplicación de Diseño Asistido por Computadora (CAD) de componentes mecánicos. La descomposición de éste sistema software por funciones y sus respectivas líneas de código estimadas (LDC) son las siguientes:\n\nFUNCIÓN	                                                                  LDC Estimadas	PF Estimados\nIUFC: interfaz de Usuario y Facilidades de Control	      2300           	26 PF\nAG2D: Análisis Geométrico de 2D	                    ', 201307044),
(22, 'F1A2T2E3', 'Dado uno de los enfoques de diseÃ±o de pruebas de software aplicado a sistemas de información, sistemas de bases de datos, inteligencia artificial, desarrollo Web o ingeniería de software, el sustentante selecciona el enfoque o el tipo de descripción de la prueba.', 'Dado el enfoque de diseño de pruebas funcionales que busca evaluar cada una de las acciones de un sistema navegador de internet en cuanto a ejecución, revisión y retroalimentación, seleccione el enfoque o tipo de descripción de una prueba de compatibilidad que debe efectuarse a dicho navegador.\n\n', 201307044),
(23, 'F3A1T2E2', 'A partir de un problema en computación teórica, el sustentante identifica el algoritmo que lo resuelva (Dijkstra, Ford, Runge Kutta, quicksort, minimax, simplex, etc.', 'Dado el siguiente mapa de carreteras que une a las comunidades españolas donde se muestran los nombres de las ciudades y sus respectivas distancias en kilómetros, entre ellas:\n\nIdentifique el algoritmo que resuelve el problema de encontrar los caminos mÃ¡s cortos partiendo de Madrid a todas y cada una de las demás ciudades del mapa.', 201307044),
(24, 'ááá', 'aááá', 'aááááa', 201213870);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `profesor`
--

CREATE TABLE `profesor` (
  `IdProf` int(9) NOT NULL,
  `Nombre` varchar(100) NOT NULL,
  `Pass` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `profesor`
--

INSERT INTO `profesor` (`IdProf`, `Nombre`, `Pass`) VALUES
(201213870, 'Luis Jesus Limtz', '123456'),
(201307044, 'LUIS', '123456789');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `respuestas`
--

CREATE TABLE `respuestas` (
  `IdRespuesta` int(100) NOT NULL,
  `Respuesta` varchar(300) NOT NULL,
  `Argumento` varchar(300) NOT NULL,
  `Tipo` tinyint(1) NOT NULL,
  `IdPregunta` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `respuestas`
--

INSERT INTO `respuestas` (`IdRespuesta`, `Respuesta`, `Argumento`, `Tipo`, `IdPregunta`) VALUES
(1, 'A)HDM', 'Es una metodología de diseño hipermedia y multimedia utilizada para diseñar sistemas de información.', 0, 9),
(2, 'B)PUDS', 'Proceso Unificado de Desarrollo de Software que constituye la metodología estándar para llevar a cabo el análisis, diseño, implementación y documentación de Sistemas de Información Orientado a Objetos usando UML.', 0, 9),
(3, 'C)UWE', 'Metodología iterativa e incremental basada en el UML extendido y en el PUDS que centra sus actividades en el análisis de requerimientos, diseño conceptual, de navegación y de presentación para escenarios de sistemas Web.', 1, 9),
(4, 'D)RUP', 'Metodología estándar basada en UML utilizada para captura, análisis y diseño de requerimientos de sistemas de información orientados a objetos.', 0, 9),
(13, 'A)O(n log n)', 'Gracias al uso de la recursividad inherente de la técnica de divide y vencerás, la eficiencia del algoritmo QuickSort depende de la posición en la que termine el pivote elegido. En el caso promedio el pivote termina en el centro de la lista de los datos a ordenar, dividiéndola en dos sublistas d', 1, 12),
(14, 'B)O(n2)', 'Es el orden de complejidad de algoritmos de ordenación clásicos que son menos rápidos que el QuickSort y que no necesariamente utilizan recursividad tales como burbuja, selección e inserción.', 0, 12),
(15, 'C)O(n log2 n)', 'Es el orden de complejidad del algoritmo de ordenación ShellSort el cual es más eficiente que los algoritmos de complejidad de orden O(n2), pero menos eficiente que QuickSort cuyo orden es O(n log n).', 0, 12),
(16, 'D)O(n)', 'Es el orden de complejidad del algoritmo Bucket Sort cuyo orden de complejidad O(n) se da cuando los elementos a ordenar están uniformemente distribuidos ', 0, 12),
(17, 'A)	Línea 3', 'Una variable de instancia puede ser declarada como final.', 0, 13),
(18, 'A)	Línea 12 ', 'No se puede asignar un valor a una variable de instancia o de clase declarada como final.', 1, 13),
(19, 'A)	Línea 7 ', 'Se puede asignar un valor inicial a una variable declarada como final dentro de un constructor.', 0, 13),
(20, 'A)	Línea 24 ', 'El uso del método actualizaID(...) por parte del objeto p es correcto.', 0, 13),
(21, 'A)	2 3 0 1', 'La entrada debe ser: 2,2,1,1', 0, 14),
(22, 'A)	2 3 1 0', 'Con a=2, b=1, c=0, d=0, la condición del "if" es falsa y se ejecuta el "else" en donde c=c+b=1, b=a+c+d=2+1+0=3. El valor de a y d no se modifican.', 1, 14),
(23, 'A)	2 6 2 2', 'La entrada debe ser: 2,1,2,2', 0, 14),
(24, 'A)	2 9 4 3', 'La entrada debe ser: 2,2,3,3', 0, 14),
(25, 'HDM', 'Es una metodología de diseño hipermedia y multimedia utilizada para diseñar sistemas de información', 0, 15),
(26, ' PUDS', 'Proceso Unificado de Desarrollo de Software que constituye la metodología estándar para llevar a cabo el análisis, diseño, implementación y documentación de Sistemas de Información Orientado a Objetos usando UML', 0, 15),
(27, 'UWE', 'Metodología iterativa e incremental basada en el UML extendido y en el PUDS que centra sus actividades en el análisis de requerimientos, diseño conceptual, de navegación y de presentación para escenarios de sistemas Web', 1, 15),
(28, 'RUP', 'Metodología estándar basada en UML utilizada para captura, análisis y diseño de requerimientos de sistemas de información orientados a objetos ', 0, 15),
(29, 'A)	O(n log n)', 'Gracias al uso de la recursividad inherente de la técnica de divide y vencerás, la eficiencia del algoritmo QuickSort depende de la posición en la que termine el pivote elegido. En el caso promedio el pivote termina en el centro de la lista de los datos a ordenar, dividiéndola en dos sublistas d', 1, 16),
(30, 'B)	O(n^2)', 'Es el orden de complejidad de algoritmos de ordenación clásicos que son menos rápidos que el QuickSort y que no necesariamente utilizan recursividad tales como burbuja, selección e inserción.', 0, 16),
(31, 'C)	O(n log^2 n)', 'Es el orden de complejidad del algoritmo de ordenación ShellSort el cual es más eficiente que los algoritmos de complejidad de orden O(n^2), pero menos eficiente que QuickSort cuyo orden es O(n log n).', 0, 16),
(32, 'D)	O(n)', 'Es el orden de complejidad del algoritmo Bucket Sort cuyo orden de complejidad O(n) se da cuando los elementos a ordenar están uniformemente distribuidos.', 0, 16),
(33, 'A)	Línea 3', 'Una variable de instancia puede ser declarada como final', 0, 17),
(34, 'B)	LÃ­nea 12 ', 'No se puede asignar un valor a una variable de instancia o de clase declarada como final.', 1, 17),
(35, 'C)	Línea 7 ', 'Se puede asignar un valor inicial a una variable declarada como final dentro de un constructor', 0, 17),
(36, 'D)	Lí­nea 24 ', 'El uso del método actualizaID(â€¦) por parte del objeto p es correcto', 0, 17),
(37, 'A)	2 3 0 1', 'La entrada debe ser: 2,2,1,1', 0, 18),
(38, 'B)	2 3 1 0', 'Con a=2, b=1, c=0, d=0, la condiciÃ³n del â€œifâ€ es falsa y se ejecuta el â€œelseâ€ en donde c=c+b=1, b=a+c+d=2+1+0=3. El valor de a y d no se modifican.', 1, 18),
(39, 'C)	2 6 2 2', 'La entrada debe ser: 2,1,2,2', 0, 18),
(40, 'D)	2 9 4 3', 'D)	2 9 4 3	Incorrecta	La entrada debe ser: 2,2,3,3', 0, 18),
(41, 'A)	457560.00 US', 'Es el cÃ¡lculo del costo estimado usando puntos de funciÃ³n ($8000.00/6.5)*372=457560.00', 0, 19),
(42, 'B)	431600.00 US', 'Se calcula el costo por lÃ­nea de cÃ³digo: $8000.00/620= $13.00 US y Ã©ste resultado se multiplica por el nÃºmero total de lÃ­neas de cÃ³digo estimadas: 33200*13= 431600.00 US.', 1, 19),
(43, 'C)	432000.00 US', '(33200 LDC)/(620 LDC/pm)= 54 pm y luego 54*8000.00=432000.00 lo cual es errÃ³neo pues la primera operaciÃ³n calcula el esfuerzo estimado usando lÃ­neas de cÃ³digo.', 0, 19),
(44, 'D)	456000.00', '(372 PF)/(6.5 PF/pm)= 57pm y luego 57*8000.00 lo cual es errÃ³neo pues la primera operaciÃ³n calcula el esfuerzo estimado usando Puntos de FunciÃ³n.', 0, 19),
(45, 'A) AplicaciÃ³n, PresentaciÃ³n, Transporte, SesiÃ³n, Enlace de Datos, Red, FÃ­sico', 'No Corresponde con el modelo OSI/ISO de una Red. La capa de SesiÃ³n va antes que la de transporte y la capa de Red va antes que la de Enlace de Datos', 0, 20),
(46, 'B) FÃ­sico, Enlace de Datos, Red, Transporte, SesiÃ³n, PresentaciÃ³n, AplicaciÃ³n', 'No corresponde con la pila del modelo OSI/ISO de los servicios de red.', 0, 20),
(47, 'C) Transporte, AplicaciÃ³n, FÃ­sica, Enlace de Datos, SesiÃ³n, Red, PresentaciÃ³n', 'No corresponde con la pila del modelo OSI/ISO de los servicios de red. EstÃ¡n escritas al azar.', 0, 20),
(48, 'D) AplicaciÃ³n, PresentaciÃ³n, SesiÃ³n, Transporte, Red, Enlace de Datos, FÃ­sico', 'Corresponde con el modelo OSI/ISO de una Red', 1, 20),
(49, 'A)	431600.00 US', 'Es el cÃ¡lculo del costo estimado usando lÃ­neas de cÃ³digo ($8000.00/620)*33200=431600.00', 0, 21),
(50, 'B)	432000.00 US', '(33200 LDC)/(620 LDC/pm)= 54 pm y luego 54*8000.00=432000.00 lo cual es errÃ³neo pues la primera operaciÃ³n calcula el esfuerzo estimado usando lÃ­neas de cÃ³digo.', 0, 21),
(51, 'C)	456000.00', '(372 PF)/(6.5 PF/pm)= 57pm y luego 57*8000.00 lo cual es errÃ³neo pues la primera operaciÃ³n calcula el esfuerzo estimado usando Puntos de FunciÃ³n.', 0, 21),
(52, 'D)	457560.00 US.', 'Se calcula el costo por lÃ­nea de cÃ³digo: $8000.00/6.5= $1230.76 US y Ã©ste resultado se multiplica por el nÃºmero total de puntos de funciÃ³n estimados: 1230.77*372= 457560.00 US.', 1, 21),
(53, 'A)	Son pruebas funcionales para garantizar el correcto funcionamiento aplicativo de un software en todos los medios. El mismo software puede presentar errores funcionales y estÃ©ticos dependiendo de dÃ³nde se ejecute. ', 'DescripciÃ³n de la Prueba de Compatibilidad', 1, 22),
(54, 'B)	Son pruebas que  validan que un sistema cumple con el funcionamiento esperado. En este tipo de pruebas la ejecuciÃ³n y aprobaciÃ³n final corresponden al usuario o cliente, que es el que valida y verifica que el alcance es el correcto en cuanto a funcionalidad y rendimiento. ', 'DescripciÃ³n de la Prueba de aceptaciÃ³n', 0, 22),
(55, 'C)	Son pruebas funcionales donde el objetivo es verificar el correcto ensamblaje entre los distintos componentes de un software  una vez que han sido probados unitariamente con el fin de comprobar que interactÃºan correctamente a travÃ©s de sus interfaces, cubren la funcionalidad establecida y se aj', 'DescripciÃ³n de la Prueba de IntegraciÃ³n', 0, 22),
(56, 'D)	Son pruebas funcionales cuyo objetivo es comprobar que  cambios realizados en el software no introducen un comportamiento no deseado o errores adicionales en otros mÃ³dulos o partes no modificados.', 'DescripciÃ³n de la Prueba de regresiÃ³n', 0, 22),
(57, 'A)	Floyd-Warshall', 'Es un algoritmo de anÃ¡lisis sobre grafos para encontrar el camino mÃ­nimo en grafos dirigidos ponderados. El algoritmo encuentra el camino entre todos los pares de vÃ©rtices en una Ãºnica ejecuciÃ³n.', 0, 23),
(58, 'B)	Bellman-Ford', 'Es un algoritmo que genera el camino mÃ¡s corto en un Grafo dirigido ponderado utilizado cuando alguna de las aristas del grafo tiene un costo negativo.\r\n\r\n', 0, 23),
(59, 'C)	Dijkstra', 'Es un algoritmo para la determinaciÃ³n del camino mÃ¡s corto dado un vÃ©rtice origen al resto de vÃ©rtices en un grafo con costos no negativos en cada arista.\r\n\r\n', 1, 23),
(60, 'D)	Kruskall', 'Es un algoritmo que encuentra el Ã¡rbol abarcador de costos mÃ­nimos en un grafo conexo y ponderado. Es decir, busca un subconjunto de aristas que, formando un Ã¡rbol, incluyen todos los vÃ©rtices y donde el valor total de todas las aristas del Ã¡rbol es el mÃ­nimo. ', 0, 23),
(61, 'fsdsfsdf', 'sagerg', 1, 24),
(62, 'ergegr', 'ergerg', 0, 24),
(63, 'greger', 'erqgreg', 0, 24),
(64, 'ergerg', 'regerg', 0, 24);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alumno`
--
ALTER TABLE `alumno`
  ADD PRIMARY KEY (`Matricula`);

--
-- Indices de la tabla `historial`
--
ALTER TABLE `historial`
  ADD PRIMARY KEY (`IdHistorial`),
  ADD KEY `IdAlumno` (`IdAlumno`);

--
-- Indices de la tabla `imagenes`
--
ALTER TABLE `imagenes`
  ADD PRIMARY KEY (`idImagen`),
  ADD KEY `IdPregunta` (`IdPregunta`);

--
-- Indices de la tabla `preguntas`
--
ALTER TABLE `preguntas`
  ADD PRIMARY KEY (`IdPreg`);

--
-- Indices de la tabla `profesor`
--
ALTER TABLE `profesor`
  ADD PRIMARY KEY (`IdProf`);

--
-- Indices de la tabla `respuestas`
--
ALTER TABLE `respuestas`
  ADD PRIMARY KEY (`IdRespuesta`),
  ADD KEY `IdPregunta` (`IdPregunta`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `historial`
--
ALTER TABLE `historial`
  MODIFY `IdHistorial` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT de la tabla `imagenes`
--
ALTER TABLE `imagenes`
  MODIFY `idImagen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT de la tabla `preguntas`
--
ALTER TABLE `preguntas`
  MODIFY `IdPreg` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT de la tabla `respuestas`
--
ALTER TABLE `respuestas`
  MODIFY `IdRespuesta` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `historial`
--
ALTER TABLE `historial`
  ADD CONSTRAINT `historial_ibfk_1` FOREIGN KEY (`IdAlumno`) REFERENCES `alumno` (`Matricula`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `imagenes`
--
ALTER TABLE `imagenes`
  ADD CONSTRAINT `imagenes_ibfk_1` FOREIGN KEY (`IdPregunta`) REFERENCES `preguntas` (`IdPreg`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `respuestas`
--
ALTER TABLE `respuestas`
  ADD CONSTRAINT `respuestas_ibfk_1` FOREIGN KEY (`IdPregunta`) REFERENCES `preguntas` (`IdPreg`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
