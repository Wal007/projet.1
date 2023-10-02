CREATE TABLE `admin` (
 `iid_admin` int NOT NULL AUTO_INCREMENT,
 `name` varchar(255) NOT NULL,
 `email` varchar(255) NOT NULL,
 `psw` varchar(255) NOT NULL,
 `phone` varchar(255) NOT NULL,
 PRIMARY KEY (`iid_admin`),
 UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci