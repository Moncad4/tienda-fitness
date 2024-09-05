-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3310
-- Tiempo de generación: 05-09-2024 a las 08:43:49
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tiendafitness`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `product`
--

CREATE TABLE `product` (
  `product_id` int(50) NOT NULL,
  `tittle` varchar(100) NOT NULL,
  `description` varchar(500) NOT NULL,
  `price` int(15) NOT NULL,
  `image` longblob NOT NULL,
  `discount` int(3) NOT NULL,
  `priceDiscount` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `product`
--

INSERT INTO `product` (`product_id`, `tittle`, `description`, `price`, `image`, `discount`, `priceDiscount`) VALUES
(1, 'Mother Bucker', 'Es un pre-entrenamiento potente de Bucked Up, diseñado para atletas experimentados que buscan aumentar su energía, enfoque y rendimiento. Contiene 400 mg de cafeína y otros ingredientes avanzados para maximizar el bombeo muscular y la resistencia​.', 350000, 0x696d6167655f363663366363373335383037392e6a706567, 50000, 300000),
(2, 'Creatine Turbo', 'Es un suplemento que aumenta la fuerza y el rendimiento físico. Contiene creatina monohidrato, que ayuda a mejorar la producción de energía en los músculos. Se usa comúnmente para ganar masa muscular y acelerar la recuperación.', 450000, 0x696d6167655f363663366364313834653536622e6a7067, 25000, 425000),
(3, 'Psychotic', 'Es un suplemento pre-entrenamiento que ofrece energía intensa, enfoque y resistencia. Suele contener ingredientes como cafeína, beta-alanina y otros estimulantes para mejorar el rendimiento durante los entrenamientos.', 250000, 0x696d6167655f363663366364373632366163332e6a7067, 10000, 240000),
(4, 'ISO Whey Zero ', 'Es un suplemento de proteína en polvo, hecho principalmente de aislado de proteína de suero. Es bajo en grasas y carbohidratos, ideal para la recuperación muscular y el desarrollo de masa magra. Se disuelve fácilmente y es adecuado para dietas bajas en lactosa.', 220000, 0x696d6167655f363663366365336536656564392e6a706567, 10000, 210000),
(5, 'ISO 100 Hydrolyzed', 'Es un suplemento de proteína de suero hidrolizada. Ofrece una rápida absorción, baja en grasas y carbohidratos, ideal para la recuperación y el desarrollo muscular. Es especialmente útil para quienes buscan una proteína de alta calidad y fácil digestión.', 380000, 0x696d6167655f363663366366656134323233352e6a706567, 70000, 310000),
(6, '3 Whey Protein', 'Es un suplemento de proteína en polvo que combina tres tipos de proteína de suero: concentrado, aislado e hidrolizado. Proporciona una liberación gradual de aminoácidos, ideal para soporte muscular continuo y recuperación.', 700000, 0x696d6167655f363663366430363162363430312e6a7067, 240000, 460000),
(7, 'Muscletech', 'es una marca reconocida de suplementos deportivos que se especializa en productos para mejorar el rendimiento, la fuerza y la recuperación muscular. Ofrecen una amplia gama de productos, incluyendo proteínas en polvo, creatina, preentrenos y quemadores de grasa, diseñados para atletas y personas activas que buscan optimizar sus resultados en el gimnasio.', 700000, 0x696d6167655f363663393762313531376564642e6a706567, 100000, 600000),
(8, 'Hydro Way', 'Es un suplemento de proteínas de suero de leche hidrolizada, diseñado para una rápida absorción y recuperación muscular. Ideal para deportistas, contiene aminoácidos esenciales que favorecen el crecimiento y la reparación de tejidos después del ejercicio.', 900000, 0x696d6167655f363664393163656162316337392e6a7067, 400000, 500000),
(9, 'Muscle Infusion', 'Es una mezcla de proteínas de liberación rápida y lenta, ideal para mantener un suministro continuo de aminoácidos. Diseñada para promover el crecimiento muscular, es útil tanto para el desarrollo como para la recuperación post-entrenamiento.', 2000000, 0x696d6167655f363664393164333939666231652e6a7067, 900000, 1100000),
(1517, 'dsafasdf', '4234234234', 23423423, 0x696d6167655f363664393531303436356535622e706e67, 4234324, 424323423),
(1518, '23534', '324234234', 433, 0x696d6167655f363664393531313865356666372e6a7067, 242232, 11111);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(100) NOT NULL,
  `NickName` varchar(100) NOT NULL,
  `LastName` varchar(100) NOT NULL,
  `Email` varchar(80) NOT NULL,
  `Passwords` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `NickName`, `LastName`, `Email`, `Passwords`) VALUES
(4, 'Juan David', 'Moncada Guzman', 'juandavidmoncada7@gmail.com', 'esclavos'),
(5, 'Dora Elena', 'Ramírez Estrada', 'dora@gmail.com', 'compas'),
(6, 'Diego', 'Barras', 'diegobarrasprogramador@gmail.com', '12345');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1519;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
