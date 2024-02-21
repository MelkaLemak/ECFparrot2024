CREATE TABLE `vehicules` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `prix` decimal(10,2) NOT NULL,
  `kilometrage` int(11) NOT NULL,
  `type_energie` varchar(50) NOT NULL,
  `annee` int(11) NOT NULL,
  `description` text NOT NULL
)
CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `user` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` int(11) NOT NULL
) 
CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `cout` decimal(10,2) NOT NULL,
  `description` text NOT NULL
)

CREATE TABLE `secure` (
  `id` int(11) AUTO_INCREMENT PRIMARY KEY,
  `user` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` int(11) NOT NULL
)
CREATE TABLE `office` (
  `id` int(11) NOT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL,
  `mail` varchar(50) DEFAULT NULL,
  `days1` varchar(25) DEFAULT NULL,
  `days2` varchar(25) DEFAULT NULL,
  `hours1` varchar(25) DEFAULT NULL,
  `hours2` varchar(25) DEFAULT NULL
)

CREATE TABLE `avis` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `firstname` varchar(20) DEFAULT NULL,
  `message` longtext DEFAULT NULL,
  `statut` int(11) DEFAULT NULL
)
