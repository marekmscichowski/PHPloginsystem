CREATE TABLE `users` (
  `id` int(6) unsigned NOT NULL AUTO_INCREMENT,
  `user_first` varchar(256) NOT NULL,
  `user_last` varchar(256) NOT NULL,
  `user_email` varchar(256) DEFAULT NULL,
  `user_uid` varchar(256) DEFAULT NULL,
  `user_type` varchar(15) DEFAULT NULL,
  `user_pwd` varchar(256) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8mb4;