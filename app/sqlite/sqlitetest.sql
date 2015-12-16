
CREATE TABLE `brands` (
  `id` INTEGER PRIMARY KEY ASC,
  `name` TEXT,
  `created` TEXT,
  `modified` TEXT
);



INSERT INTO `brands` (`id`, `name`, `created`, `modified`) VALUES
(1, 'Microsoft', '2015-11-09 18:00:57', '2015-11-09 18:00:57'),
(2, 'Google', '2015-11-09 18:00:57', '2015-11-09 18:00:57'),
(3, 'Yahoo', '2015-11-09 18:00:57', '2015-11-09 18:00:57'),
(4, 'Coca-Cola', '2015-11-09 18:00:57', '2015-11-09 18:00:57'),
(5, 'Hershey', '2015-11-09 18:00:57', '2015-11-09 18:00:57'),
(6, 'M&M', '2015-11-09 18:00:57', '2015-11-09 18:00:57'),
(7, 'Samsung', '2015-11-09 18:00:57', '2015-11-09 18:00:57'),
(8, 'Sony', '2015-11-09 18:00:57', '2015-11-09 18:00:57'),
(9, 'Canon', '2015-11-09 18:00:57', '2015-11-09 18:00:57');



CREATE TABLE `categories` (
  `id` INTEGER PRIMARY KEY ASC,
  `name` TEXT
);



INSERT INTO `categories` (`id`, `name`) VALUES
(1, 'games'),
(2, 'food'),
(3, 'electronics');



CREATE TABLE `harbors` (
  `id` INTEGER PRIMARY KEY ASC,
  `name` TEXT,
  `location` TEXT,
  `user_id` INTEGER,
  `filename` TEXT
);


INSERT INTO `harbors` (`id`, `name`, `location`, `user_id`, `filename`) VALUES
(1, 'Test', 'Montreal', 6, NULL),
(2, 'Harbor #2', 'laval', 6, NULL),
(3, 'test3', 'Quebec', 6, NULL),
(4, 'test3', 'Quebec', 7, 'uploads/fondDecran.jpg'),
(5, 'resg', 'serg', NULL, 'uploads/image1.jpg'),
(6, 'awD', 'AD', NULL, 'uploads/STEVE!!!.png');


CREATE TABLE `messages` (
  `id` INTEGER PRIMARY KEY ASC,
  `shipment_id` INTEGER,
  `title` TEXT,
  `content` text,
  `name` TEXT,
  `user_id` INTEGER
);


INSERT INTO `messages` (`id`, `shipment_id`, `title`, `content`, `name`, `user_id`) VALUES
(2, 3, 'test', 'je fais des test', 'Simon', 6),
(3, 2, 'awefwaef', 'test encore', 'simon', 6),
(4, 3, 'Truc', 'o;iawjefo;ij', 'awef', 7);



CREATE TABLE `products` (
  `id` INTEGER PRIMARY KEY ASC,
  `name` TEXT,
  `user_id` INTEGER
);



INSERT INTO `products` (`id`, `name`, `user_id`) VALUES
(1, 'Produit numéro 1', 6),
(2, 'produit numéro 2', 7);


CREATE TABLE `shipments` (
  `id` INTEGER PRIMARY KEY ASC,
  `harbor_id` INTEGER,
  `start_date` INTEGER,
  `name` TEXT,
  `start_location` TEXT,
  `user_id` INTEGER,
  `subcategory_id` INTEGER
);



INSERT INTO `shipments` (`id`, `harbor_id`, `start_date`, `name`, `start_location`, `user_id`, `subcategory_id`) VALUES
(2, 2, '2015-09-09', 'test #2', 'Montreal', 6, 1),
(3, 1, '2015-09-24', 'C', 'QWD', 6, 4),
(4, 1, '2015-09-25', '#4', 'rimouski', 6, 5),
(5, 2, '2015-09-07', 'allo', 'ma maison', 7, 9),
(6, 1, '2015-11-08', 'awefawef', 'awef', 6, 5),
(8, 1, '2015-11-11', 'zsdv', 'zsdv', 7, 1);



CREATE TABLE `shipments_products` (
  `id` INTEGER PRIMARY KEY ASC,
  `shipment_id` INTEGER,
  `product_id` INTEGER
);



INSERT INTO `shipments_products` (`id`, `shipment_id`, `product_id`) VALUES
(1, 0, 0),
(2, 2, 1),
(4, 3, 1),
(5, 3, 2),
(6, 4, 1),
(7, 4, 2),
(8, 5, 2),
(9, 5, 1),
(10, 6, 1),
(11, 7, 1),
(12, 8, 2);


CREATE TABLE `subcategories` (
  `id` INTEGER PRIMARY KEY ASC,
  `category_id` INTEGER,
  `name` TEXT
);


INSERT INTO `subcategories` (`id`, `category_id`, `name`) VALUES
(1, 1, 'xbox360'),
(2, 1, 'ps3'),
(3, 1, 'pc'),
(4, 2, 'canned'),
(5, 2, 'fresh'),
(6, 2, 'candy'),
(7, 3, 'camera'),
(8, 3, 'audio'),
(9, 3, 'tv');



CREATE TABLE `users` (
  `id` INTEGER PRIMARY KEY ASC,
  `username` TEXT,
  `password` TEXT,
  `role` TEXT,
  `email` TEXT,
  `created` INTEGER,
  `modified` INTEGER,
  `active` INTEGER
);


INSERT INTO `users` (`id`, `username`, `password`, `role`, `email`, `created`, `modified`, `active`) VALUES
(6, 'admin', '$2a$10$17IkLhP1lfJshKPLpyt8x.cSPPL5CsVeUP//iKkgIAjUar/0UGA.a', 'admin', 'simfra2@hotmail.com', '2015-09-25', '2015-10-06', 0),
(7, 'visiteur', '$2a$10$PlOZjvaHtLZQDIL8UVQ80ele3vATwfhrDClFd9DHc1PQ5sY4.z7Ii', 'super-user', 'simfra2@hotmail.com', '2015-09-25', '2015-09-25', 0),
(9, 'xaras', '$2a$10$T5w9ARHRaShKZW8MkA2OIeTNCids/EZEDYeADhi7.05ofq/F5Mg/m', 'super-user', 'simfra2@hotmail.com', '2015-10-03', '2015-10-03', 0),
(14, 'xaras', '$2a$10$E8gXDQoElgNwDpz2Xma33uQ1eNdqfMGFnSUMtACZHTT4dAs39mTYS', 'super-user', 'simfra2@hotmail.com', '2015-10-03', '2015-10-03', 0),
(17, 'xarass', '$2a$10$nxKtl0XoWna3mhirrsH6QuRefIzwtqiYfkg/9iu.OtmUdbTi78nT6', 'super-user', 'simfra2@hotmail.com', '2015-10-03', '2015-10-03', 0),
(18, 'awef', '$2a$10$y3UTWhHqMEzsIWfrPlZy6OWiwUIoI/CyegzCCD73gJTaR3H6HcSsy', 'super-user', 'simfra2@hotmail.com', '2015-11-11', '2015-11-11', 1);

