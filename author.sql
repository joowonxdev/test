CREATE TABLE `Author` (
  `author_id` int(11) UNSIGNED AUTO_INCREMENT,
  `name` varchar(255),
  `role` varchar(255),
  `avatar` varchar(100),
  `location` varchar(255),
  `created_at` datetime NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`author_id`)
  );