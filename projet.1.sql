CREATE TABLE `admin` (
    `id_admin` int NOT NULL AUTO_INCREMENT,
    `name` varchar(255) NOT NULL,
    `email` varchar(255) NOT NULL,
    `psw` varchar(255) NOT NULL,
    `phone` varchar(255) NOT NULL,
    PRIMARY KEY (`iid_admin`),
    UNIQUE KEY `email` (`email`)
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_0900_ai_ciCREATE;


TABLE `projet.1`.`products` (
    `id_product` INT NOT NULL AUTO_INCREMENT,
    `p_name` VARCHAR(255) NOT NULL,
    `p_quantity` INT NOT NULL,
    `p_price` INT NOT NULL,
    `p_image` VARCHAR(255) NOT NULL,
    PRIMARY KEY (`id_product`),
    UNIQUE (`p_name`)
) ENGINE = InnoDB;