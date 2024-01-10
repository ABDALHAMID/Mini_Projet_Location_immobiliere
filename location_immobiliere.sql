-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 09, 2024 at 09:27 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `location_immobiliere`
--

-- --------------------------------------------------------

--
-- Table structure for table `commentaires`
--

CREATE TABLE `commentaires` (
  `Num` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `Commentaire` text NOT NULL,
  `DateCommentaire` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `commentaires`
--

INSERT INTO `commentaires` (`Num`, `id`, `Commentaire`, `DateCommentaire`) VALUES
(1, 21, 'Super endroit pour des vacances reposantes, j\'adore!', '2023-12-31 13:00:00'),
(2, 22, 'La villa est incroyable, surtout la vue depuis la terrasse.', '2023-12-31 13:15:00'),
(3, 23, 'L\'emplacement est parfait, proche de toutes les commodités.', '2023-12-31 13:30:00'),
(4, 24, 'Une expérience authentique dans cette maison traditionnelle.', '2023-12-31 13:45:00'),
(5, 25, 'Le chalet offre une escapade paisible avec une vue imprenable.', '2023-12-31 14:00:00'),
(6, 26, 'Condo moderne et élégant, je recommande vivement.', '2023-12-31 14:15:00'),
(7, 27, 'Maison spacieuse et confortable, parfaite pour les familles.', '2023-12-31 14:30:00'),
(8, 28, 'Une oasis de luxe dans le désert, expérience unique!', '2023-12-31 14:45:00'),
(9, 29, 'L\'appartement est bien équipé, nous nous sommes sentis chez nous.', '2023-12-31 15:00:00'),
(10, 21, 'Magnifique retraite avec une atmosphère historique, à visiter absolument.', '2023-12-31 15:15:00');

-- --------------------------------------------------------

--
-- Table structure for table `location_order`
--

CREATE TABLE `location_order` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `logement_id` int(11) DEFAULT NULL,
  `date_order` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` enum('pending','approved','rejected') NOT NULL DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `logement`
--

CREATE TABLE `logement` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `adresse` varchar(255) NOT NULL,
  `type_logement` enum('apartment','house','condo','villa','townhouse','other') NOT NULL,
  `nombre_chambres` int(11) DEFAULT NULL,
  `prix` decimal(10,2) NOT NULL,
  `image_path` varchar(255) DEFAULT NULL,
  `description` text NOT NULL,
  `status` enum('available','rented','unavailable') NOT NULL DEFAULT 'available',
  `area` decimal(10,2) NOT NULL,
  `beds` int(11) NOT NULL,
  `baths` int(11) NOT NULL,
  `garage` int(11) NOT NULL,
  `city` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `logement`
--

INSERT INTO `logement` (`id`, `name`, `adresse`, `type_logement`, `nombre_chambres`, `prix`, `image_path`, `description`, `status`, `area`, `beds`, `baths`, `garage`, `city`) VALUES
(21, 'Symphonie de Marrakech', 'Rue des Banques, Médina, 40000 Marrakech, Maroc', 'other', 4, 20000.00, '503320437.jpg', 'Situé à Marrakech, à 300 mètres de la place Jemaa el-Fna et à 400 mètres du centre, le Symphonie de Marrakech Riad & Spa propose un hébergement climatisé avec connexion Wi-Fi gratuite et une piscine extérieure. Les clients séjournant dans ce riad ont accès à un patio. Le palais de la Bahia se trouve à 1,1 km et le jardin Majorelle est à 3 km du riad.\r\n\r\nLa salle de bains privative entièrement équipée est pourvue d’une douche et d’articles de toilette gratuits.\r\n\r\nUn petit-déjeuner continental est servi tous les matins au riad.\r\n\r\nLe Symphonie de Marrakech Riad & Spa se trouve à proximité de la mosquée Koutoubia, du musée Mouassine et du Jardin Secret. L’aéroport le plus proche, celui de Marrakech-Ménara, est situé à 4 km. Profitez d\'un séjour inoubliable dans ce riad luxueux.', 'rented', 23.00, 4, 1, 0, 'Marrakech'),
(22, 'Villa Royale', 'Avenue Hassan II, Casablanca', 'villa', 5, 3500.00, '288303479.jpg', 'Villa luxueuse avec une vue magnifique surplombant la ville. Cette villa spacieuse offre un cadre élégant et des équipements de première classe. Profitez du confort et du luxe dans un emplacement idéal.', 'available', 300.00, 5, 4, 2, 'Casablanca'),
(23, 'Riad Al Maghreb', 'Médina, Marrakech', 'house', 4, 2200.00, '506649049.jpg', 'Riad traditionnel au cœur de Marrakech. Imprégnez-vous de l\'atmosphère historique de la Médina. Ce riad offre une expérience authentique avec des chambres décorées avec goût et un patio charmant.', 'available', 180.25, 4, 3, 0, 'Marrakech'),
(24, 'Appartement Vue sur l\'Océan', 'Boulevard de la Corniche, Agadir', 'apartment', 2, 1600.00, '466916577.jpg', 'Appartement moderne avec une vue imprenable sur l\'océan. Profitez du confort contemporain dans cet appartement bien équipé. Détendez-vous sur le balcon et admirez la vue panoramique sur l\'océan Atlantique.', 'available', 120.00, 2, 2, 1, 'Agadir'),
(25, 'Chalet Atlas Mountains', 'Ouirgane, Atlas Mountains', 'villa', 3, 2800.00, '350520679.jpg', 'Chalet confortable avec des vues panoramiques sur les montagnes de l\'Atlas. Ce chalet spacieux offre une escapade paisible au cœur des montagnes. Profitez de l\'air pur et des paysages spectaculaires.', 'unavailable', 200.00, 3, 2, 0, 'Marrakech'),
(26, 'Condo Perle Bleue', 'Avenue des F.A.R, Rabat', 'condo', 1, 1200.00, '311512087.jpg', 'Condo élégant au cœur de Rabat. Découvrez le charme de la capitale marocaine depuis ce condo bien aménagé. Proche des attractions principales et des commodités.', 'available', 80.75, 1, 1, 0, 'Rabat'),
(27, 'Maison Plage Golden Sands', 'Plage des Nations, Tanger', 'house', 3, 2000.00, '319002225.jpg', 'Maison spacieuse en bord de mer avec accès privé. Cette maison offre une expérience unique en bord de mer avec un accès direct à la plage. Profitez du soleil et des vagues dans un cadre exceptionnel.', 'rented', 180.25, 3, 2, 1, 'Tanger'),
(28, 'Retraite Kasbah', 'Kasbah des Oudayas, Rabat', 'house', 2, 1800.00, '232886000.jpg', 'Maison charmante dans la Kasbah historique. Découvrez l\'histoire de Rabat en séjournant dans cette maison de la Kasbah. Une combinaison parfaite de charme traditionnel et de commodités modernes.', 'available', 150.75, 2, 2, 0, 'Rabat'),
(29, 'Villa Oasis Sahara', 'Merzouga, Sahara', 'villa', 6, 4200.00, '446988196.jpg', 'Villa de luxe avec une oasis privée dans le Sahara. Détendez-vous dans le confort de cette villa exclusive au cœur du désert. Profitez de l\'intimité et de la sérénité entourées de dunes de sable.', 'available', 350.00, 6, 5, 2, 'Merzouga');

-- --------------------------------------------------------

--
-- Table structure for table `logement_amenities`
--

CREATE TABLE `logement_amenities` (
  `id` int(11) NOT NULL,
  `logement_id` int(11) NOT NULL,
  `amenity` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `logement_amenities`
--

INSERT INTO `logement_amenities` (`id`, `logement_id`, `amenity`) VALUES
(12, 21, 'Piscine extérieure'),
(13, 21, 'Connexion Wi-Fi gratuite'),
(14, 21, 'Chambres familiales'),
(15, 21, 'Chambres non-fumeurs'),
(16, 21, 'Réception ouverte 24h/24'),
(17, 21, 'Service d\'étage'),
(18, 21, 'Terrasse'),
(20, 23, '2 piscines'),
(21, 23, 'Connexion Wi-Fi gratuite'),
(22, 23, 'Spa et centre de bien-être'),
(23, 23, 'Navette aéroport'),
(24, 23, 'Restaurant'),
(25, 23, 'Chambres non-fumeurs'),
(26, 23, 'Terrasse'),
(27, 24, 'piscines'),
(28, 24, 'Connexion Wi-Fi gratuite'),
(29, 24, 'Front de mer'),
(30, 24, 'Parking'),
(31, 24, 'Chambres familiales'),
(32, 24, 'Spa et centre de bien-être'),
(33, 24, '2 restaurants'),
(34, 24, 'Centre de remise en forme'),
(35, 25, 'Connexion Wi-Fi gratuite'),
(36, 25, 'Parking gratuit'),
(37, 25, 'Terrasse'),
(38, 26, 'Piscine extérieure'),
(39, 26, 'Connexion Wi-Fi gratuite'),
(40, 26, 'Chambres familiales'),
(41, 26, 'Chambres non-fumeurs'),
(42, 26, 'Réception ouverte 24h/24'),
(43, 26, 'Service d\'étage'),
(44, 26, 'Terrasse'),
(45, 27, 'Parking gratuit'),
(46, 27, 'Connexion Wi-Fi gratuite'),
(47, 27, 'Chambres familiales'),
(48, 27, 'Restaurant'),
(49, 27, 'Chambres non-fumeurs'),
(50, 27, 'Service d\'étage'),
(51, 27, 'Réception ouverte 24h/24'),
(52, 28, 'Front de mer'),
(53, 28, 'Parking gratuit'),
(54, 28, 'Chambres familiales'),
(55, 28, 'Chambres non-fumeurs'),
(56, 28, 'Réception ouverte 24h/24'),
(57, 29, 'Piscine intérieure'),
(58, 29, 'Connexion Wi-Fi gratuite'),
(59, 29, 'Parking gratuit'),
(60, 29, 'Chambres familiales'),
(61, 29, 'Terrasse'),
(62, 29, 'Installations pour barbecue'),
(63, 22, 'Piscine'),
(64, 22, 'Jardin'),
(65, 22, 'Terrasse'),
(66, 22, 'Parking Privé'),
(67, 22, 'Climatisation'),
(68, 22, 'Wi-Fi'),
(69, 22, 'Système de Sécurité');

-- --------------------------------------------------------

--
-- Table structure for table `logement_images`
--

CREATE TABLE `logement_images` (
  `id` int(11) NOT NULL,
  `logement_id` int(11) NOT NULL,
  `image_path` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `logement_images`
--

INSERT INTO `logement_images` (`id`, `logement_id`, `image_path`) VALUES
(13, 21, 'f6UGYAvDgQ.jpg'),
(14, 21, '25eTUeTJIo.jpg'),
(15, 21, 'sxCBuFgjJu.jpg'),
(16, 21, 'lN7MK2FEPs.jpg'),
(17, 21, '09vDl8DTu8.jpg'),
(18, 21, 'zCcxVTws1Q.jpg'),
(19, 21, 'ZxhDlQvSIP.jpg'),
(20, 21, '3GzOp6AUnZ.jpg'),
(30, 22, 'kcmlD6PylX.jpg'),
(31, 22, 'TcQCA0uYQp.jpg'),
(32, 22, 'DPcRJ2t35o.jpg'),
(33, 22, '4rkruzCjwA.jpg'),
(34, 22, 'LGO6j9nL6x.jpg'),
(35, 22, '9t3zksa7gP.jpg'),
(36, 22, 'LE6x5Faet9.jpg'),
(37, 22, 'BXhpcsPACH.jpg'),
(38, 22, 'Q2yNII593a.jpg'),
(39, 22, 'V83i1sWh1i.jpg'),
(40, 22, 'wC9OJZDKEw.jpg'),
(41, 22, 'VNQHyYNXjS.jpg'),
(42, 22, 'QGDKWqAUtu.jpg'),
(43, 22, 'mEfs8tC9pI.jpg'),
(44, 22, 'kOX40q2enw.jpg'),
(45, 22, 'Xa7PU9n7BZ.jpg'),
(46, 22, 'ILEzcGKeN9.jpg'),
(47, 22, 'mBnyttlSB6.jpg'),
(48, 22, 'm4JVrPFxl8.jpg'),
(49, 23, 'B45i921oIw.jpg'),
(50, 23, 'CT4VZcuAxP.jpg'),
(51, 23, 'NL7y0MSR8q.jpg'),
(52, 23, 'sE3YCsY05W.jpg'),
(53, 23, '1DJy7bo38z.jpg'),
(54, 23, 'dmw7pNxtqB.jpg'),
(55, 23, 'qRystmz8m1.jpg'),
(56, 23, 'mTUESlsfWl.jpg'),
(57, 23, 'hTlrwZlWTz.jpg'),
(58, 23, 'qZoFUh4F1u.jpg'),
(59, 23, 'nsYLI84oPO.jpg'),
(60, 23, '46CGIHqBu0.jpg'),
(61, 23, 'kPmhQpgacA.jpg'),
(62, 23, 'Kl7lris8Ix.jpg'),
(63, 23, 'B6dcZYzvWz.jpg'),
(64, 23, 'P1N9PvEhPP.jpg'),
(65, 24, 'DTpPQMtbD5.jpg'),
(66, 24, 'oBwI5a9f21.jpg'),
(67, 24, 's2NBH4WovK.jpg'),
(68, 24, '10PoN9Lgqf.jpg'),
(69, 24, 'QMap7ZuGGO.jpg'),
(70, 24, 'T9b3n02WIR.jpg'),
(71, 24, 'jviV60xcT5.jpg'),
(72, 24, 'QCColXZrHT.jpg'),
(73, 24, '5AbNMnav2T.jpg'),
(74, 24, 'LhvLNWTSYf.jpg'),
(75, 25, '8ywztoGwmr.jpg'),
(76, 25, 'BxJGF7oncy.jpg'),
(77, 25, '6zq816msLu.jpg'),
(78, 25, 'NORqPzLb5B.jpg'),
(79, 25, 'IwkFXEYI9h.jpg'),
(80, 25, '6SZanxrFfV.jpg'),
(81, 25, 'Jed948H9wU.jpg'),
(82, 25, 'YRcrTtQlqw.jpg'),
(83, 25, 'ark1kMVvUy.jpg'),
(84, 25, '9gAAiRSM42.jpg'),
(85, 26, 'gqBscVYWJ9.jpg'),
(86, 26, 'KiGWF71XQ1.jpg'),
(87, 26, 'UF3Mc1Uimi.jpg'),
(88, 26, 'zDXEdYeXgT.jpg'),
(89, 26, 'oqmP6vTaSH.jpg'),
(90, 26, 'UgeyJR9FqS.jpg'),
(91, 26, 'A20DadPc9m.jpg'),
(92, 26, '0iO1KHYsQ3.jpg'),
(93, 26, 'lkslfsMZGr.jpg'),
(94, 26, 'YhuRvPfBRn.jpg'),
(95, 26, '4MV78shIdJ.jpg'),
(96, 27, '6NhkIaIkzO.jpg'),
(97, 27, 'r6r11uWP3S.jpg'),
(98, 27, 'dySGGhjgPE.jpg'),
(99, 27, 'LCxzY25N6b.jpg'),
(100, 27, 'wDkn4mWgZp.jpg'),
(101, 27, 'dyUQVSJI7B.jpg'),
(102, 27, '0u98DOx4dE.jpg'),
(103, 27, '8iEJH6vNT1.jpg'),
(104, 27, 'nv1fwQI3oY.jpg'),
(105, 27, 'pfOLYLTord.jpg'),
(106, 28, 'a13YLaN95G.jpg'),
(107, 28, 'CxP8XuX9sW.jpg'),
(108, 28, 'qh1YMkfFgt.jpg'),
(109, 28, 'Z0tqlz8po9.jpg'),
(110, 28, 'CVy18vThbN.jpg'),
(111, 28, 'lrWAqVSRN2.jpg'),
(112, 28, 'csasGOZXS3.jpg'),
(113, 29, 'wXQsrq0N0W.jpg'),
(114, 29, 'y4QkLaFoyW.jpg'),
(115, 29, 'vr9Rz5FOEI.jpg'),
(116, 29, 'JCoImEWzug.jpg'),
(117, 29, 'Dalf4YxMZa.jpg'),
(118, 29, 'dLVeUdTimV.jpg'),
(119, 29, 'jGzjtCHuPA.jpg'),
(120, 29, 'bG5YJdRAC4.jpg'),
(121, 29, 'bRxd2SbR3G.jpg'),
(122, 29, 'sn10ZDVnYG.jpg'),
(123, 29, 'Dgn5Knz65M.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `id` int(11) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `image_path` varchar(255) DEFAULT NULL,
  `type` enum('client','administrator') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `utilisateur`
--

INSERT INTO `utilisateur` (`id`, `prenom`, `nom`, `email`, `password`, `image_path`, `type`) VALUES
(0, 'abdelhamid', 'boulaajoul', 'abdelhamid@rentit.com', '123', 'default.jpg', 'administrator'),
(1, 'ihssan', 'elmomen', 'ihssan@rentit.com', '123', 'default.jpg', 'administrator'),
(2, 'wafae', 'raoui', 'wafae@rentit.com', '123', 'default.jpg', 'administrator'),
(3, 'Admin', 'User', 'admin@example.com', '123', 'default.jpg', 'administrator'),
(5, 'Mohammed', 'Ahmed', 'mohammed.ahmed1@gmail.com', '123', 'default.jpg', 'client'),
(6, 'Fatima', 'Zahra', 'fatima.zahra2@outlook.com', '123', 'client6.jpg', 'client'),
(7, 'Youssef', 'El', 'youssef.el3@gmail.com', '123', 'client1.jpg', 'client'),
(8, 'Nadia', 'Benchekroun', 'nadia.benchekroun4@outlook.com', '123', 'client7.jpg', 'client'),
(9, 'Omar', 'Benjelloun', 'omar.benjelloun5@outlook.com', '123', 'client2.jpg', 'client'),
(10, 'Amina', 'Fassi', 'amina.fassi6@gmail.com', '123', 'client8.jpg', 'client'),
(11, 'Karim', 'El', 'karim.el7@gmail.com', '123', 'client3.jpg', 'client'),
(12, 'Houda', 'Bouhali', 'houda.bouhali8@outlook.com', '123', 'client9.jpg', 'client'),
(13, 'Adil', 'Bensouda', 'adil.bensouda9@gmail.com', '123', 'client4.jpg', 'client'),
(14, 'Sara', 'Hassani', 'sara.hassani10@outlook.com', '123', 'client10.jpg', 'client'),
(15, 'Ahmed', 'Fassi', 'ahmed.fassi11@gmail.com', '123', 'default.jpg', 'client'),
(16, 'Nawal', 'Chraibi', 'nawal.chraibi12@gmail.com', '123', 'client1.jpg', 'client'),
(17, 'Yassin', 'Lamrini', 'yassin.lamrini13@gmail.com', '123', 'client2.jpg', 'client'),
(18, 'Nour', 'Hilali', 'nour.hilali14@gmail.com', '123', 'client3.jpg', 'client'),
(19, 'Aicha', 'Bouaziz', 'aicha.bouaziz15@gmail.com', '123', 'client4.jpg', 'client'),
(20, 'Mehdi', 'Bensaid', 'mehdi.bensaid16@e-polytechnique.ma', '123', 'default.jpg', 'client'),
(21, 'Fadwa', 'Zouhri', 'fadwa.zouhri17@gmail.com', '123', 'client5.jpg', 'client'),
(22, 'Khalid', 'Joumani', 'khalid.joumani18@e-polytechnique.ma', '123', 'client6.jpg', 'client'),
(23, 'Hajar', 'Mernissi', 'hajar.mernissi19@gmail.com', '123', 'client7.jpg', 'client'),
(24, 'Ilyas', 'Moussaoui', 'ilyas.moussaoui20@e-polytechnique.ma', '123', 'client8.jpg', 'client'),
(25, 'Amina', 'Tazi', 'amina.tazi21@gmail.com', '123', 'client9.jpg', 'client'),
(26, 'Yassir', 'Habibi', 'yassir.habibi22@e-polytechnique.ma', '123', 'client10.jpg', 'client'),
(27, 'Meryem', 'El Alaoui', 'meryem.elalaoui23@gmail.com', '123', 'client6.jpg', 'client'),
(28, 'Abdellah', 'Naji', 'abdellah.naji24@gmail.com', '123', 'client4.jpg', 'client'),
(29, 'Sara', 'El Kharbili', 'sara.elkhbili25@e-polytechnique.ma', '123', 'client13.jpg', 'client'),
(30, 'Omar', 'Benchekroun', 'omar.benchekroun26@gmail.com', '123', 'client14.jpg', 'client'),
(31, 'Khadija', 'Ech-Charfi', 'khadija.echcharfi27@e-polytechnique.ma', '123', 'client15.jpg', 'client'),
(32, 'Adil', 'El Baghdadi', 'adil.elbaghdadi28@gmail.com', '123', 'client16.jpg', 'client'),
(33, 'Fatiha', 'Hannoun', 'fatiha.hannoun29@gmail.com', '123', 'client17.jpg', 'client'),
(34, 'Mounir', 'Chraibi', 'mounir.chraibi30@gmail.com', '123', 'client18.jpg', 'client'),
(35, 'Nadia', 'Bentaleb', 'nadia.bentaleb31@e-polytechnique.ma', '123', 'client19.jpg', 'client'),
(36, 'Reda', 'El Ouali', 'reda.elouali32@gmail.com', '123', 'client20.jpg', 'client'),
(37, 'Nawal', 'Benali', 'nawal.benali33@gmail.com', '123', 'client21.jpg', 'client'),
(38, 'Ahmed', 'El Amrani', 'ahmed.elamrani34@e-polytechnique.ma', '123', 'client22.jpg', 'client'),
(39, 'Safia', 'Tazi', 'safia.tazi35@gmail.com', '123', 'client23.jpg', 'client'),
(40, 'Yassine', 'Rahmani', 'yassine.rahmani36@e-polytechnique.ma', '123', 'client24.jpg', 'client'),
(41, 'Fatima', 'El Fakir', 'fatima.elfakir37@gmail.com', '123', 'client25.jpg', 'client'),
(42, 'Mehdi', 'Berrada', 'mehdi.berrada38@gmail.com', '123', 'client26.jpg', 'client'),
(43, 'Saida', 'Hakimi', 'saida.hakimi39@e-polytechnique.ma', '123', 'client27.jpg', 'client'),
(44, 'Hassan', 'El Moussaoui', 'hassan.elmoussaoui40@gmail.com', '123', 'client28.jpg', 'client'),
(45, 'Loubna', 'Ait Ali', 'loubna.aitali41@gmail.com', '123', 'client29.jpg', 'client'),
(46, 'Karim', 'Ezzaki', 'karim.ezzaki42@e-polytechnique.ma', '123', 'client30.jpg', 'client'),
(47, 'Nadia', 'Ben Slimane', 'nadia.benslimane43@gmail.com', '123', 'client31.jpg', 'client'),
(48, 'Omar', 'El Fassi', 'omar.elfassi44@gmail.com', '123', 'client32.jpg', 'client'),
(49, 'Rajaa', 'Hassani', 'rajaa.hassani45@e-polytechnique.ma', '123', 'client33.jpg', 'client'),
(50, 'Faycal', 'Bouhali', 'faycal.bouhali46@gmail.com', '123', 'client34.jpg', 'client'),
(51, 'Salma', 'Bouaziz', 'salma.bouaziz47@gmail.com', '123', 'client35.jpg', 'client'),
(52, 'Adil', 'El Ouardi', 'adil.elouardi48@e-polytechnique.ma', '123', 'client36.jpg', 'client'),
(53, 'Nawal', 'El Mazroui', 'nawal.elmazroui49@gmail.com', '123', 'client37.jpg', 'client'),
(54, 'Mehdi', 'Amri', 'mehdi.amri50@gmail.com', '123', 'client38.jpg', 'client'),
(55, 'Laila', 'El Alaoui', 'laila.elalaoui51@e-polytechnique.ma', '123', 'client39.jpg', 'client'),
(56, 'Anas', 'Bensaid', 'anas.bensaid52@gmail.com', '123', 'client40.jpg', 'client'),
(57, 'Nadia', 'Ben Slimane', 'nadia.benslimane43@gmail.com', '123', 'client31.jpg', 'client'),
(58, 'Omar', 'El Fassi', 'omar.elfassi44@gmail.com', '123', 'client32.jpg', 'client'),
(59, 'Rajaa', 'Hassani', 'rajaa.hassani45@e-polytechnique.ma', '123', 'client33.jpg', 'client'),
(60, 'Faycal', 'Bouhali', 'faycal.bouhali46@gmail.com', '123', 'client34.jpg', 'client'),
(61, 'Salma', 'Bouaziz', 'salma.bouaziz47@gmail.com', '123', 'client35.jpg', 'client'),
(62, 'Adil', 'El Ouardi', 'adil.elouardi48@e-polytechnique.ma', '123', 'client36.jpg', 'client'),
(63, 'Nawal', 'El Mazroui', 'nawal.elmazroui49@gmail.com', '123', 'client37.jpg', 'client'),
(64, 'Mehdi', 'Amri', 'mehdi.amri50@gmail.com', '123', 'client38.jpg', 'client'),
(65, 'Laila', 'El Alaoui', 'laila.elalaoui51@e-polytechnique.ma', '123', 'client39.jpg', 'client'),
(66, 'Anas', 'Bensaid', 'anas.bensaid52@gmail.com', '123', 'client40.jpg', 'client'),
(67, 'Houda', 'Oujil', 'houda.oujil53@e-polytechnique.ma', '123', 'client41.jpg', 'client'),
(68, 'Karim', 'Tazi', 'karim.tazi54@gmail.com', '123', 'client42.jpg', 'client'),
(69, 'Lina', 'El Khatib', 'lina.elkhatib55@gmail.com', '123', 'client43.jpg', 'client'),
(70, 'Zakaria', 'Ghanmi', 'zakaria.ghanmi56@e-polytechnique.ma', '123', 'client44.jpg', 'client'),
(71, 'Sara', 'Benchekroun', 'sara.benchekroun57@gmail.com', '123', 'client45.jpg', 'client'),
(72, 'Ahmed', 'Belkasmi', 'ahmed.belkasmi58@gmail.com', '123', 'client46.jpg', 'client'),
(73, 'Imane', 'El Abbadi', 'imane.elabbadi59@e-polytechnique.ma', '123', 'client47.jpg', 'client'),
(74, 'Khalid', 'Jebrouni', 'khalid.jebrouni60@gmail.com', '123', 'client48.jpg', 'client'),
(75, 'Ines', 'Zouak', 'ines.zouak61@e-polytechnique.ma', '123', 'client49.jpg', 'client'),
(76, 'Othmane', 'Chabbi', 'othmane.chabbi62@gmail.com', '123', 'client50.jpg', 'client'),
(77, 'Fatiha', 'Hassani', 'fatiha.hassani63@gmail.com', '123', 'client51.jpg', 'client'),
(78, 'Bilal', 'Ezzarhouni', 'bilal.ezzarhouni64@gmail.com', '123', 'client52.jpg', 'client'),
(79, 'Yasmine', 'Saidi', 'yasmine.saidi65@e-polytechnique.ma', '123', 'client53.jpg', 'client'),
(80, 'Mohamed', 'Koussi', 'mohamed.koussi66@gmail.com', '123', 'client54.jpg', 'client'),
(81, 'Rim', 'El Mir', 'rim.elmir67@e-polytechnique.ma', '123', 'client55.jpg', 'client'),
(82, 'Hicham', 'Benslimane', 'hicham.benslimane68@gmail.com', '123', 'client56.jpg', 'client'),
(83, 'Nada', 'Makroui', 'nada.makroui69@gmail.com', '123', 'client57.jpg', 'client'),
(84, 'Wassim', 'Bouhali', 'wassim.bouhali70@gmail.com', '123', 'client58.jpg', 'client'),
(85, 'Leila', 'El Haddad', 'leila.elhaddad71@e-polytechnique.ma', '123', 'client59.jpg', 'client'),
(86, 'Yassir', 'El Amrani', 'yassir.elamrani72@gmail.com', '123', 'client60.jpg', 'client'),
(87, 'Amira', 'Bekkali', 'amira.bekkali73@gmail.com', '123', 'client61.jpg', 'client'),
(88, 'Mouad', 'El Fassi', 'mouad.elfassi74@gmail.com', '123', 'client62.jpg', 'client'),
(89, 'Soukaina', 'El Alaoui', 'soukaina.alaoui75@e-polytechnique.ma', '123', 'client63.jpg', 'client'),
(90, 'Youssef', 'Bensaid', 'youssef.bensaid76@gmail.com', '123', 'client64.jpg', 'client'),
(91, 'Sofia', 'Benchekroun', 'sofia.benchekroun77@gmail.com', '123', 'client65.jpg', 'client'),
(92, 'Abdelhak', 'Belkasmi', 'abdelhak.belkasmi78@gmail.com', '123', 'client66.jpg', 'client'),
(93, 'Sara', 'El Abbadi', 'sara.elabbadi79@e-polytechnique.ma', '123', 'client67.jpg', 'client'),
(94, 'Karim', 'Jebrouni', 'karim.jebrouni80@gmail.com', '123', 'client68.jpg', 'client'),
(95, 'Leila', 'Zouak', 'leila.zouak81@e-polytechnique.ma', '123', 'client69.jpg', 'client'),
(96, 'Ismail', 'Chabbi', 'ismail.chabbi82@gmail.com', '123', 'client70.jpg', 'client'),
(97, 'client', 'user', 'client@example.com', '123', 'default.jpg', 'client'),
(98, 'abdelhamid', 'boulaajoul', 'abdelhamid@gmail.com', '123', 'default.jpg', 'client'),
(99, 'ihssan', 'elmomen', 'ihssan@gmail.com', '123', 'default.jpg', 'client'),
(100, 'wafae', 'raoui', 'wafae@gamil.com', '123', 'default.jpg', 'client');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `commentaires`
--
ALTER TABLE `commentaires`
  ADD PRIMARY KEY (`Num`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `location_order`
--
ALTER TABLE `location_order`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `logement_id` (`logement_id`);

--
-- Indexes for table `logement`
--
ALTER TABLE `logement`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logement_amenities`
--
ALTER TABLE `logement_amenities`
  ADD PRIMARY KEY (`id`),
  ADD KEY `logement_id` (`logement_id`);

--
-- Indexes for table `logement_images`
--
ALTER TABLE `logement_images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `logement_id` (`logement_id`);

--
-- Indexes for table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `commentaires`
--
ALTER TABLE `commentaires`
  MODIFY `Num` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `location_order`
--
ALTER TABLE `location_order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `logement`
--
ALTER TABLE `logement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `logement_amenities`
--
ALTER TABLE `logement_amenities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT for table `logement_images`
--
ALTER TABLE `logement_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=124;

--
-- AUTO_INCREMENT for table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=97;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `commentaires`
--
ALTER TABLE `commentaires`
  ADD CONSTRAINT `commentaires_ibfk_1` FOREIGN KEY (`id`) REFERENCES `utilisateur` (`id`);

--
-- Constraints for table `location_order`
--
ALTER TABLE `location_order`
  ADD CONSTRAINT `location_order_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `utilisateur` (`id`),
  ADD CONSTRAINT `location_order_ibfk_2` FOREIGN KEY (`logement_id`) REFERENCES `logement` (`id`);

--
-- Constraints for table `logement_amenities`
--
ALTER TABLE `logement_amenities`
  ADD CONSTRAINT `logement_amenities_ibfk_1` FOREIGN KEY (`logement_id`) REFERENCES `logement` (`id`);

--
-- Constraints for table `logement_images`
--
ALTER TABLE `logement_images`
  ADD CONSTRAINT `logement_images_ibfk_1` FOREIGN KEY (`logement_id`) REFERENCES `logement` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
