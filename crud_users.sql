
DROP DATABASE IF EXISTS `crud`;

CREATE DATABASE `crud`;

USE `crud`;

CREATE TABLE `users` (
  `id` int(11) PRIMARY KEY AUTO_INCREMENT,
  `name` varchar(50),
  `email` varchar(50) 
) ENGINE=InnoDB DEFAULT CHARSET=utf8;