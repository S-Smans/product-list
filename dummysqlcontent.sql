INSERT INTO `products`(`SKU`, `Name`, `Price`, `Value`, `Type`) VALUES ('JVC200123','Acme DISC','1','700', 'dvd');
INSERT INTO `products`(`SKU`, `Name`, `Price`, `Value`, `Type`) VALUES ('GGWP0007','War and Peace','20','2', 'book');
INSERT INTO `products`(`SKU`, `Name`, `Price`, `Value`, `Type`) VALUES ('TR120555','Chair','40','24x45x15', 'furniture');
INSERT INTO `products`(`SKU`, `Name`, `Price`, `Value`, `Type`) VALUES ('JVC200124','Acme DISC','1','700', 'dvd');
INSERT INTO `products`(`SKU`, `Name`, `Price`, `Value`, `Type`) VALUES ('GGWP0004','War and Peace','20','2', 'book');
INSERT INTO `products`(`SKU`, `Name`, `Price`, `Value`, `Type`) VALUES ('TR120554','Chair','40','24x45x15', 'furniture');
INSERT INTO `products`(`SKU`, `Name`, `Price`, `Value`, `Type`) VALUES ('JVC200125','Acme DISC','1','700', 'dvd');
INSERT INTO `products`(`SKU`, `Name`, `Price`, `Value`, `Type`) VALUES ('GGWP0005','War and Peace','20','2', 'book');
INSERT INTO `products`(`SKU`, `Name`, `Price`, `Value`, `Type`) VALUES ('TR120556','Chair','40','24x45x15', 'furniture');
INSERT INTO `products`(`SKU`, `Name`, `Price`, `Value`, `Type`) VALUES ('JVC200126','Acme DISC','1','700', 'dvd');
INSERT INTO `products`(`SKU`, `Name`, `Price`, `Value`, `Type`) VALUES ('GGWP0006','War and Peace','20','2', 'book');
INSERT INTO `products`(`SKU`, `Name`, `Price`, `Value`, `Type`) VALUES ('TR120557','Chair','40','24x45x15', 'furniture');

-- Create the products table
CREATE TABLE products (productId INT NOT NULL PRIMARY KEY AUTO_INCREMENT, SKU VARCHAR(255) NOT NULL, Name VARCHAR(255) NOT NULL, Price INT NOT NULL, Value VARCHAR(255) NOT NULL, Type VARCHAR(255) NOT NULL, UNIQUE (SKU))