CREATE TABLE `admin` (
 `id_admin` int NOT NULL AUTO_INCREMENT,
 `name` varchar(255) NOT NULL,
 `email` varchar(255) NOT NULL,
 `psw` varchar(255) NOT NULL,
 `phone` varchar(255) NOT NULL,
 PRIMARY KEY (`iid_admin`),
 UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;


CREATE TABLE `products` (
 `id_product` int NOT NULL AUTO_INCREMENT,
 `p_name` varchar(255) NOT NULL,
 `p_quantity` int NOT NULL,
 `p_price` int NOT NULL,
 `p_image` varchar(255) NOT NULL,
 PRIMARY KEY (`id_product`),
 UNIQUE KEY `p_name` (`p_name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci