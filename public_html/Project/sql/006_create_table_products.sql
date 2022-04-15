/*001_create_table_products.sql*/
/*Products (id, name, description, category, stock, created, modified, unit_price, visibility [true, false])*/
CREATE TABLE IF NOT EXISTS `Category` (
    `category_name` VARCHAR(60) DEFAULT 'General',
    PRIMARY KEY (`category_name`)
);

CREATE TABLE IF NOT EXISTS `Products` (
    `id` INT NOT NULL AUTO_INCREMENT,
    `name` VARCHAR(100) NOT NULL UNIQUE,
    `description` TEXT(65536),
    `category` VARCHAR(60) DEFAULT 'General',
    `stock` SMALLINT DEFAULT 0,
    `created` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    `modified` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    `unit_price` DECIMAL(10, 2) DEFAULT 0.00,
    `visibility` TINYINT(1) DEFAULT 1,
    PRIMARY KEY (`id`),
    FOREIGN KEY (`category`) REFERENCES Category(`category_name`),
    UNIQUE (`name`)
);

INSERT INTO Category(`category_name`) VALUES('General'); 