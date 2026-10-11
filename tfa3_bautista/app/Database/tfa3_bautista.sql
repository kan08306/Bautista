-- TFA3 Bautista database export
-- Select or create a database named tfa3_bautista before importing this file.

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+08:00";

DROP TABLE IF EXISTS `customers`;
CREATE TABLE `customers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `full_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `customers` (`id`, `full_name`, `email`, `phone`, `created_at`) VALUES
(1, 'Ken Bautista', 'ken.bautista@email.com', '09171234567', '2026-10-11 10:02:48'),
(2, 'Ken Anthonie', 'ken.anthonie@email.com', '09181234567', '2026-10-11 10:02:48'),
(3, 'Ken Aquino', 'ken.aquino@email.com', '09191234567', '2026-10-11 10:02:48'),
(4, 'Anthonie Bautista', 'anthonie.bautista@email.com', '09201234567', '2026-10-11 10:02:48'),
(5, 'Anthonie Aquino', 'anthonie.aquino@email.com', '09211234567', '2026-10-11 10:02:48');

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `avatar` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `users` (`id`, `username`, `full_name`, `created_at`, `avatar`) VALUES
(1, 'kbautista', 'Ken Bautista', '2026-10-11 10:04:32', NULL),
(2, 'kanthonie', 'Ken Anthonie', '2026-10-11 10:04:32', NULL),
(3, 'kaquino', 'Ken Aquino', '2026-10-11 10:04:32', NULL),
(4, 'abautista', 'Anthonie Bautista', '2026-10-11 10:04:32', NULL),
(5, 'aaquino', 'Anthonie Aquino', '2026-10-11 10:04:32', NULL);

COMMIT;
