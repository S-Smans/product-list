INSERT INTO `products`(`SKU`, `Name`, `Price`, `Value`, `Type`) VALUES ('JVC200123','Acme DISC','1','700', 'Size');
INSERT INTO `products`(`SKU`, `Name`, `Price`, `Value`, `Type`) VALUES ('GGWP0007','War and Peace','20','2', 'Weight');
INSERT INTO `products`(`SKU`, `Name`, `Price`, `Value`, `Type`) VALUES ('TR120555','Chair','40','24x45x15', 'Dimension');
INSERT INTO `products`(`SKU`, `Name`, `Price`, `Value`, `Type`) VALUES ('JVC200123','Acme DISC','1','700', 'Size');
INSERT INTO `products`(`SKU`, `Name`, `Price`, `Value`, `Type`) VALUES ('GGWP0007','War and Peace','20','2', 'Weight');
INSERT INTO `products`(`SKU`, `Name`, `Price`, `Value`, `Type`) VALUES ('TR120555','Chair','40','24x45x15', 'Dimension');
INSERT INTO `products`(`SKU`, `Name`, `Price`, `Value`, `Type`) VALUES ('JVC200123','Acme DISC','1','700', 'Size');
INSERT INTO `products`(`SKU`, `Name`, `Price`, `Value`, `Type`) VALUES ('GGWP0007','War and Peace','20','2', 'Weight');
INSERT INTO `products`(`SKU`, `Name`, `Price`, `Value`, `Type`) VALUES ('TR120555','Chair','40','24x45x15', 'Dimension');
INSERT INTO `products`(`SKU`, `Name`, `Price`, `Value`, `Type`) VALUES ('JVC200123','Acme DISC','1','700', 'Size');
INSERT INTO `products`(`SKU`, `Name`, `Price`, `Value`, `Type`) VALUES ('GGWP0007','War and Peace','20','2', 'Weight');
INSERT INTO `products`(`SKU`, `Name`, `Price`, `Value`, `Type`) VALUES ('TR120555','Chair','40','24x45x15', 'Dimension');

-- Create the products table
CREATE TABLE products (productId int PRIMARY KEY AUTO_INCREMENT, SKU varchar(255), Name varchar(255), Price int, Value varchar(255), Type varchar(255));
