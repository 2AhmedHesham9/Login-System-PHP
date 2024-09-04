-- Database: `loginsystemphp`
CREATE TABLE `users` (
    `id` int(11) PRIMARY KEY NOT NULL AUTO_INCREMENT,
    `name` varchar(50) NOT NULL,
    `email` varchar(40) NOT NULL,
    `password` varchar(20) NOT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_general_ci;