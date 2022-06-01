INSERT INTO `products`(`typeId`,`SKU`, `Name`, `Price`, `Attribute`) VALUES ('1', 'JVC200123','Acme DISC','1','700');
INSERT INTO `products`(`typeId`,`SKU`, `Name`, `Price`, `Attribute`) VALUES ('2', 'GGWP0007','War and Peace','20','2');
INSERT INTO `products`(`typeId`,`SKU`, `Name`, `Price`, `Attribute`) VALUES ('3', 'TR120555','Chair','40','24x45x15');
INSERT INTO `products`(`typeId`,`SKU`, `Name`, `Price`, `Attribute`) VALUES ('1', 'JVC200123','Acme DISC','1','700');
INSERT INTO `products`(`typeId`,`SKU`, `Name`, `Price`, `Attribute`) VALUES ('2', 'GGWP0007','War and Peace','20','2');
INSERT INTO `products`(`typeId`,`SKU`, `Name`, `Price`, `Attribute`) VALUES ('3', 'TR120555','Chair','40','24x45x15');
INSERT INTO `products`(`typeId`,`SKU`, `Name`, `Price`, `Attribute`) VALUES ('1', 'JVC200123','Acme DISC','1','700');
INSERT INTO `products`(`typeId`,`SKU`, `Name`, `Price`, `Attribute`) VALUES ('2', 'GGWP0007','War and Peace','20','2');
INSERT INTO `products`(`typeId`,`SKU`, `Name`, `Price`, `Attribute`) VALUES ('3', 'TR120555','Chair','40','24x45x15');
INSERT INTO `products`(`typeId`,`SKU`, `Name`, `Price`, `Attribute`) VALUES ('1', 'JVC200123','Acme DISC','1','700');
INSERT INTO `products`(`typeId`,`SKU`, `Name`, `Price`, `Attribute`) VALUES ('2', 'GGWP0007','War and Peace','20','2');
INSERT INTO `products`(`typeId`,`SKU`, `Name`, `Price`, `Attribute`) VALUES ('3', 'TR120555','Chair','40','24x45x15');
CREATE TABLE products (productId int PRIMARY KEY AUTO_INCREMENT,typeId int, SKU varchar(255), Name varchar(255), Price int, Attribute varchar(255), FOREIGN KEY(typeId) REFERENCES product_type(typeId))
-- id 	SKU 	Name 	Price 	Attribute 	