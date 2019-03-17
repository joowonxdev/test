 CREATE TABLE `Post` (
  `post_id` int(11) UNSIGNED AUTO_INCREMENT ,
  `author_id` int(11) UNSIGNED,
  `title` varchar(255),
  `body` text,
  `tags` varchar(100),
  `image_url` varchar(255),
  `created_at` datetime NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`post_id`)
);