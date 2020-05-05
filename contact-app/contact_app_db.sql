-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 05, 2020 at 03:39 PM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `contact_app_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `companies`
--

CREATE TABLE `companies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `website` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `companies`
--

INSERT INTO `companies` (`id`, `user_id`, `name`, `address`, `website`, `email`, `created_at`, `updated_at`) VALUES
(1, 1, 'Ryan-Adams', '452 Collier Coves Apt. 773\nQuitzonside, CA 44292', 'watsica.biz', 'windler.meaghan@hotmail.com', '2020-04-26 10:34:08', '2020-04-26 10:34:08'),
(2, 1, 'Marks, Howe and Huels', '461 Lisette Burg\nEast Skylar, MI 30478-0379', 'mann.info', 'mohammed18@gmail.com', '2020-04-26 10:34:08', '2020-04-26 10:34:08'),
(3, 1, 'Hilpert-Gusikowski', '61518 Skiles Path\nNorth Cole, TN 66417', 'hickle.org', 'qanderson@yundt.org', '2020-04-26 10:34:08', '2020-04-26 10:34:08'),
(4, 2, 'Weber Ltd', '38815 Alessandro Cape\nPort Maggieport, OR 02727-2504', 'buckridge.com', 'keanu.fay@pfeffer.org', '2020-04-26 10:34:09', '2020-04-26 10:34:09'),
(5, 2, 'McLaughlin-Weimann', '2651 Leopoldo Street Suite 268\nLake Felixfurt, UT 21273', 'terry.net', 'konopelski.raul@yahoo.com', '2020-04-26 10:34:09', '2020-04-26 10:34:09'),
(6, 3, 'Shanahan-Homenick', '20507 Ashley Cliff\nEleonoreshire, LA 41968-6679', 'kirlin.com', 'miller.leann@hotmail.com', '2020-04-26 10:34:09', '2020-04-26 10:34:09'),
(7, 3, 'Deckow-Howe', '13505 Senger Point Apt. 547\nEast Markus, NH 78706-2530', 'hettinger.com', 'ifunk@yahoo.com', '2020-04-26 10:34:09', '2020-04-26 10:34:09'),
(8, 3, 'Krajcik and Sons', '9966 Koepp Gardens\nPort Marisolland, KY 65848', 'doyle.com', 'bashirian.tillman@harber.com', '2020-04-26 10:34:09', '2020-04-26 10:34:09'),
(9, 3, 'Thiel, Brown and Ankunding', '400 Arlie Spring\nSouth Justonbury, ME 14353', 'abernathy.biz', 'thompson.hailie@yahoo.com', '2020-04-26 10:34:09', '2020-04-26 10:34:09'),
(10, 3, 'Bailey-Stark', '84562 Balistreri Views\nNew Twila, MD 16675', 'anderson.com', 'sabrina67@gmail.com', '2020-04-26 10:34:09', '2020-04-26 10:34:09'),
(11, 4, 'Balistreri, Murray and Schneider', '151 Quentin Avenue Apt. 939\nLoweborough, OR 32950', 'sawayn.com', 'rutherford.gerda@hagenes.net', '2020-04-26 10:34:09', '2020-04-26 10:34:09'),
(12, 4, 'Weimann-Lemke', '44688 Treutel Plain\nSouth Keenanville, CO 50959-3716', 'jacobi.biz', 'lenora.murray@gleason.com', '2020-04-26 10:34:09', '2020-04-26 10:34:09'),
(13, 4, 'Nolan and Sons', '9316 Naomie Trafficway\nWest Roderick, KS 66823', 'lind.com', 'pagac.bridgette@yahoo.com', '2020-04-26 10:34:09', '2020-04-26 10:34:09'),
(14, 4, 'Gottlieb, Corkery and Gleichner', '154 Kling Forges\nEast Jamal, MS 33786-7997', 'carroll.info', 'yhauck@gmail.com', '2020-04-26 10:34:09', '2020-04-26 10:34:09'),
(15, 4, 'Corwin-Dietrich', '2296 Mohr Islands\nSouth Bayleehaven, AK 56462-5448', 'cole.com', 'rhoda.vonrueden@senger.biz', '2020-04-26 10:34:09', '2020-04-26 10:34:09'),
(16, 5, 'Stanton Ltd', '70428 Helmer Plains\nVonhaven, IA 68189', 'daugherty.com', 'dupton@leffler.com', '2020-04-26 10:34:09', '2020-04-26 10:34:09'),
(17, 5, 'Balistreri, Goodwin and Witting', '690 Manuela Parkways\nPort Arjunfort, IA 26853-9843', 'haag.com', 'feeney.myron@koelpin.info', '2020-04-26 10:34:09', '2020-04-26 10:34:09'),
(18, 5, 'Bins, Monahan and Barrows', '82243 Aubree Views Suite 003\nFerryborough, AL 97165', 'dickinson.com', 'goyette.alfonso@yahoo.com', '2020-04-26 10:34:09', '2020-04-26 10:34:09');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `user_id`, `first_name`, `last_name`, `phone`, `email`, `address`, `company_id`, `created_at`, `updated_at`) VALUES
(1, 1, 'Eliza', 'Leffler', '(731) 641-5895 x111', 'wade81@yahoo.com', '9566 Hildegard Rest Suite 539\nSouth Alberto, NC 10144', 1, '2020-04-26 10:34:08', '2020-04-26 10:34:08'),
(2, 1, 'Christ', 'O\'Keefe', '(836) 859-2896', 'tiara97@hayes.net', '3704 Heidenreich Trafficway\nSouth Jalenville, VT 26664-2895', 1, '2020-04-26 10:34:08', '2020-04-26 10:34:08'),
(3, 1, 'Gillian', 'Price', '+1-612-602-5339', 'kcole@yahoo.com', '284 Karelle Mount Apt. 022\nEast Vicenteview, VT 01099-2071', 1, '2020-04-26 10:34:08', '2020-04-26 10:34:08'),
(4, 1, 'Amara', 'Spencer', '964.561.7182 x35380', 'ludie.ryan@hotmail.com', '58600 Laisha Mills\nThereseshire, NC 28375', 1, '2020-04-26 10:34:08', '2020-04-26 10:34:08'),
(5, 1, 'Aubrey', 'Bartoletti', '+1.359.466.0297', 'cdicki@crist.com', '379 Priscilla Row\nEast Dahlia, SC 78541-1678', 1, '2020-04-26 10:34:08', '2020-04-26 10:34:08'),
(6, 1, 'Leila', 'Dooley', '+1.313.374.7374', 'gusikowski.antonio@hotmail.com', '6128 Kulas Field Apt. 690\nSouth Montanastad, NM 88395-7919', 1, '2020-04-26 10:34:08', '2020-04-26 10:34:08'),
(7, 1, 'Robin', 'Braun', '+1-454-442-1229', 'jhalvorson@fisher.com', '196 Lebsack Courts\nDorthaside, IL 22760-0862', 1, '2020-04-26 10:34:08', '2020-04-26 10:34:08'),
(8, 1, 'Oma', 'Beatty', '+1-813-344-1376', 'ebechtelar@yahoo.com', '842 Powlowski Glens\nEast Rhiannonfurt, VA 13792-7983', 1, '2020-04-26 10:34:08', '2020-04-26 10:34:08'),
(9, 1, 'Hayden', 'Jacobs', '(785) 678-6489 x868', 'ncruickshank@hotmail.com', '209 Spencer Wells\nNew Carolinefurt, AK 11289', 1, '2020-04-26 10:34:08', '2020-04-26 10:34:08'),
(10, 1, 'Frederick', 'Schneider', '691.765.8443 x17149', 'kertzmann.waldo@weissnat.com', '4691 Armstrong Rue Suite 962\nSouth Hattieton, CO 04656-2220', 1, '2020-04-26 10:34:08', '2020-04-26 10:34:08'),
(11, 1, 'Dovie', 'Rodriguez', '(782) 678-4713 x62951', 'hrolfson@deckow.com', '2341 Ernest Falls\nLake Jasonhaven, SD 87766-8552', 2, '2020-04-26 10:34:08', '2020-04-26 10:34:08'),
(12, 1, 'Shaina', 'Wyman', '(682) 732-7383 x13287', 'tnienow@yahoo.com', '9485 Hintz Haven\nPort America, NY 09121-3789', 2, '2020-04-26 10:34:08', '2020-04-26 10:34:08'),
(13, 1, 'Chadrick', 'Osinski', '1-839-799-8415 x141', 'pmitchell@swift.com', '4624 Armstrong View\nNew Cathy, KY 52623-4349', 2, '2020-04-26 10:34:08', '2020-04-26 10:34:08'),
(14, 1, 'Angel', 'Abernathy', '1-945-245-1010 x64235', 'xorn@bechtelar.biz', '603 Champlin Ridges Apt. 264\nNorth Isabellefurt, CA 14663-3755', 2, '2020-04-26 10:34:08', '2020-04-26 10:34:08'),
(15, 1, 'Alvis', 'Kuphal', '590-590-6041 x2724', 'hegmann.lupe@hotmail.com', '7672 Kirlin Shore Apt. 715\nLake Sydni, WY 39671', 2, '2020-04-26 10:34:09', '2020-04-26 10:34:09'),
(16, 1, 'Efrain', 'Rohan', '1-835-988-4652 x202', 'casper.dasia@gmail.com', '8475 Davis Hollow\nPort Gennaro, OH 67846', 2, '2020-04-26 10:34:09', '2020-04-26 10:34:09'),
(17, 1, 'Anabel', 'Gibson', '(970) 594-9240 x393', 'raymond.davis@rogahn.com', '7270 Paige Village\nPort Justenmouth, MI 53235', 3, '2020-04-26 10:34:09', '2020-04-26 10:34:09'),
(18, 1, 'Emelie', 'Kozey', '(905) 355-0203 x9284', 'darlene67@hotmail.com', '31520 Elijah Extension Suite 428\nNorth Izabellahaven, NV 43567-4711', 3, '2020-04-26 10:34:09', '2020-04-26 10:34:09'),
(19, 1, 'Khalil', 'Koch', '893.523.9077', 'karolann.kuhic@flatley.com', '468 Kuphal Flat Apt. 786\nEast Drewbury, IN 37755', 3, '2020-04-26 10:34:09', '2020-04-26 10:34:09'),
(20, 1, 'Sylvan', 'Hane', '(321) 875-4871 x9580', 'bdach@gaylord.com', '994 Rowe Corner Apt. 941\nPort Gregory, MO 72285-0090', 3, '2020-04-26 10:34:09', '2020-04-26 10:34:09'),
(21, 1, 'Alene', 'Lehner', '830-982-3669 x061', 'kory19@koelpin.com', '1930 Carey Crossroad\nSouth Stefaniemouth, IN 45916', 3, '2020-04-26 10:34:09', '2020-04-26 10:34:09'),
(22, 1, 'Beulah', 'Carroll', '(523) 912-9110', 'ischaden@hotmail.com', '748 Daugherty Centers\nDickiburgh, IL 92899', 3, '2020-04-26 10:34:09', '2020-04-26 10:34:09'),
(23, 1, 'Darrin', 'Turner', '1-867-621-0817 x42808', 'jones.rosalinda@yahoo.com', '23398 Florence Hollow Suite 401\nEast Sarah, DC 18611', 3, '2020-04-26 10:34:09', '2020-04-26 10:34:09'),
(24, 1, 'Lenora', 'Friesen', '485.762.0470 x503', 'desiree.schuppe@yahoo.com', '8233 Braun Ranch Suite 419\nKadinmouth, NH 96416', 3, '2020-04-26 10:34:09', '2020-04-26 10:34:09'),
(25, 1, 'Hailie', 'Koss', '531.759.6286 x05157', 'ara43@gmail.com', '7043 Molly Cliff Apt. 293\nNorth Gay, MN 75366', 3, '2020-04-26 10:34:09', '2020-04-26 10:34:09'),
(26, 2, 'Elmira', 'Dicki', '+1-630-465-3455', 'alena.moen@gmail.com', '627 Verona Knolls Suite 443\nJeffreytown, AR 49101-4452', 4, '2020-04-26 10:34:09', '2020-04-26 10:34:09'),
(27, 2, 'Alicia', 'Wolf', '1-937-759-5903', 'wilderman.rodolfo@yahoo.com', '727 Cartwright Circle\nNew Isom, RI 67634', 4, '2020-04-26 10:34:09', '2020-04-26 10:34:09'),
(28, 2, 'Lela', 'Nikolaus', '+1-715-507-0885', 'easter.larson@yahoo.com', '2979 DuBuque Lane\nGloverville, NM 95503-9705', 4, '2020-04-26 10:34:09', '2020-04-26 10:34:09'),
(29, 2, 'Rosemarie', 'Kuhic', '349.515.1793 x430', 'noelia.walter@yahoo.com', '495 Raynor Groves\nMaybellside, TX 43420', 4, '2020-04-26 10:34:09', '2020-04-26 10:34:09'),
(30, 2, 'Quinn', 'Ankunding', '632.213.2859 x007', 'john05@hudson.net', '8709 Brisa Street\nSouth Trycia, NJ 84961', 4, '2020-04-26 10:34:09', '2020-04-26 10:34:09'),
(31, 2, 'Lucie', 'Schimmel', '(289) 622-2571', 'harvey.tyrese@langworth.com', '91439 Leanna Square\nAmberfort, PA 21655', 4, '2020-04-26 10:34:09', '2020-04-26 10:34:09'),
(32, 2, 'Keanu', 'Quigley', '1-446-837-0023', 'zrunolfsdottir@hermann.org', '5823 Schumm Row Apt. 741\nVantown, TX 94706', 4, '2020-04-26 10:34:09', '2020-04-26 10:34:09'),
(33, 2, 'Stefanie', 'Vandervort', '+1-516-530-6773', 'bfranecki@gmail.com', '2979 Barton Squares\nAntonettaview, WA 75631-3258', 5, '2020-04-26 10:34:09', '2020-04-26 10:34:09'),
(34, 2, 'Ernestine', 'Von', '(313) 460-2505 x465', 'weber.georgette@koss.com', '2806 Kessler Well\nBradyville, WI 46962-8346', 5, '2020-04-26 10:34:09', '2020-04-26 10:34:09'),
(35, 2, 'Sadye', 'Shanahan', '+1-246-944-7232', 'qhilpert@gmail.com', '6191 Runolfsdottir Walk\nNew Grahamchester, CA 10240-3948', 5, '2020-04-26 10:34:09', '2020-04-26 10:34:09'),
(36, 2, 'Devante', 'O\'Connell', '+1-630-408-9745', 'walker.constance@gmail.com', '223 Wilhelm Mountain\nNorth Carey, IL 77352', 5, '2020-04-26 10:34:09', '2020-04-26 10:34:09'),
(37, 2, 'Levi', 'Stokes', '264-753-5530', 'hleffler@jaskolski.info', '95947 Mosciski Lodge Suite 051\nSouth Savannaland, NJ 67875', 5, '2020-04-26 10:34:09', '2020-04-26 10:34:09'),
(38, 2, 'Oswaldo', 'Lebsack', '936-952-5868 x4712', 'marlen.stehr@yahoo.com', '346 Walter Park\nJacobsmouth, FL 93654', 5, '2020-04-26 10:34:09', '2020-04-26 10:34:09'),
(39, 2, 'Isac', 'West', '1-320-827-9910 x404', 'agustina.effertz@yahoo.com', '3485 Graham Oval\nLake Malliehaven, TX 12116', 5, '2020-04-26 10:34:09', '2020-04-26 10:34:09'),
(40, 2, 'Matilda', 'Mueller', '+1.413.937.2966', 'ovandervort@macejkovic.com', '145 Lowell Points Apt. 303\nEast Margieborough, CA 98205', 5, '2020-04-26 10:34:09', '2020-04-26 10:34:09'),
(41, 2, 'Leonel', 'Boyer', '582.453.9053 x240', 'ericka.batz@yahoo.com', '739 Jeramy Ridges Apt. 521\nSouth Julia, AL 39537-1130', 5, '2020-04-26 10:34:09', '2020-04-26 10:34:09'),
(42, 3, 'Fay', 'Veum', '616.586.4397 x875', 'borer.rickie@yahoo.com', '370 Shaina Bypass\nDibbertport, AR 32538-7549', 6, '2020-04-26 10:34:09', '2020-04-26 10:34:09'),
(43, 3, 'Mireille', 'Considine', '252-624-8662 x657', 'letha.fay@quigley.info', '6300 Gottlieb Inlet\nNew Kraig, KS 98569', 6, '2020-04-26 10:34:09', '2020-04-26 10:34:09'),
(44, 3, 'Arnoldo', 'Franecki', '997-416-0477 x69673', 'ykoch@gmail.com', '4371 Ryan Stream Apt. 294\nTillmanberg, IL 42748-7284', 6, '2020-04-26 10:34:09', '2020-04-26 10:34:09'),
(45, 3, 'Vernice', 'Krajcik', '+1 (363) 562-3598', 'alva84@bruen.org', '3055 Wiegand Summit\nBrownton, AL 85193', 6, '2020-04-26 10:34:09', '2020-04-26 10:34:09'),
(46, 3, 'Heber', 'Dickens', '861-276-7055', 'blangworth@leannon.com', '80796 Funk Isle Apt. 406\nMaximomouth, ND 50181-6274', 6, '2020-04-26 10:34:09', '2020-04-26 10:34:09'),
(47, 3, 'Julien', 'Feest', '931-795-0358 x304', 'johnson.hailee@kshlerin.com', '70263 Vita Meadow Suite 755\nEast Lazarochester, CT 85945', 6, '2020-04-26 10:34:09', '2020-04-26 10:34:09'),
(48, 3, 'Maxwell', 'Reilly', '1-849-212-3142 x8462', 'magnolia.schneider@yahoo.com', '943 Koepp Center Apt. 496\nDaynaborough, ND 66997-0327', 6, '2020-04-26 10:34:09', '2020-04-26 10:34:09'),
(49, 3, 'Estel', 'Reynolds', '1-502-963-2526 x1945', 'raymond16@gmail.com', '73660 Princess Circles Suite 872\nUllrichport, WI 22866', 6, '2020-04-26 10:34:09', '2020-04-26 10:34:09'),
(50, 3, 'Mervin', 'Hill', '384-852-8025 x262', 'myles26@tromp.org', '5705 Ava Locks Apt. 901\nWest Jabarifurt, IA 41961-0738', 7, '2020-04-26 10:34:09', '2020-04-26 10:34:09'),
(51, 3, 'Narciso', 'Robel', '1-515-793-1519', 'vheller@yahoo.com', '7956 Alice Keys Apt. 401\nNew Ezra, WI 55969-4028', 7, '2020-04-26 10:34:09', '2020-04-26 10:34:09'),
(52, 3, 'Carmen', 'Schmeler', '+1-947-493-4721', 'bettye31@yahoo.com', '662 Beau Plains\nPort Busterborough, MA 55544-5748', 7, '2020-04-26 10:34:09', '2020-04-26 10:34:09'),
(53, 3, 'Tressa', 'Ward', '+1 (476) 356-0887', 'kallie27@lockman.com', '9934 Khalid Well Apt. 037\nNew Loriborough, FL 94382', 7, '2020-04-26 10:34:09', '2020-04-26 10:34:09'),
(54, 3, 'Misael', 'Klocko', '848.750.3920 x9490', 'schaefer.caesar@hotmail.com', '275 Jane Path Apt. 818\nSouth Aylinhaven, SC 63114-1478', 7, '2020-04-26 10:34:09', '2020-04-26 10:34:09'),
(55, 3, 'Chauncey', 'Feeney', '575.981.2265 x035', 'quigley.fausto@hotmail.com', '35220 Dickens Mountains Apt. 550\nKrystalborough, NC 60699-6676', 7, '2020-04-26 10:34:09', '2020-04-26 10:34:09'),
(56, 3, 'Olaf', 'Corwin', '423.759.1986', 'howell.cassidy@stark.com', '724 Ronaldo Landing Suite 080\nWest Imanifurt, VA 15221-2924', 7, '2020-04-26 10:34:09', '2020-04-26 10:34:09'),
(57, 3, 'Gene', 'Kutch', '724-976-7260', 'marquardt.erika@anderson.com', '5429 Bettye Trafficway\nNorth Rudolph, MS 88213-2813', 8, '2020-04-26 10:34:09', '2020-04-26 10:34:09'),
(58, 3, 'Sydnee', 'Runolfsson', '(992) 624-3811 x44970', 'ypagac@west.com', '552 Jerrod Neck\nEast Jeromy, SC 50727-6119', 8, '2020-04-26 10:34:09', '2020-04-26 10:34:09'),
(59, 3, 'Willow', 'Williamson', '348.832.5703', 'emard.aisha@mitchell.net', '736 Dickens Lane Suite 185\nWest Gersonberg, IN 60028-2226', 8, '2020-04-26 10:34:09', '2020-04-26 10:34:09'),
(60, 3, 'Eli', 'Harvey', '+14925284995', 'ruecker.ethelyn@yahoo.com', '720 Feeney Crossing\nPagacport, CT 91047-0213', 8, '2020-04-26 10:34:09', '2020-04-26 10:34:09'),
(61, 3, 'Margarita', 'Bayer', '269.536.4335', 'haley.mante@zboncak.info', '24751 Jarret Mount Apt. 588\nLake Dan, MA 37425-6265', 8, '2020-04-26 10:34:09', '2020-04-26 10:34:09'),
(62, 3, 'Agustina', 'Shanahan', '936.268.5720 x0939', 'edna.bechtelar@yahoo.com', '559 Labadie Mill Apt. 578\nSouth Delaney, OR 68568-4126', 8, '2020-04-26 10:34:09', '2020-04-26 10:34:09'),
(63, 3, 'Janet', 'King', '679-304-0743 x9820', 'cormier.torrance@turcotte.com', '8978 Alanis Squares Apt. 561\nPort Kelley, WY 99861-3280', 8, '2020-04-26 10:34:09', '2020-04-26 10:34:09'),
(64, 3, 'Arjun', 'Davis', '1-242-935-2301 x45580', 'paolo.casper@hansen.com', '712 Stamm Fort Apt. 209\nNorth Miller, SC 19670', 9, '2020-04-26 10:34:09', '2020-04-26 10:34:09'),
(65, 3, 'Coleman', 'Gibson', '+1-228-808-5943', 'bogisich.jayden@block.com', '97468 Spencer Vista Apt. 766\nEveretteland, SD 50491', 9, '2020-04-26 10:34:09', '2020-04-26 10:34:09'),
(66, 3, 'Reese', 'Gusikowski', '+1.356.424.9893', 'americo.little@gmail.com', '427 Keeling Forge Apt. 145\nAronhaven, OH 68389', 9, '2020-04-26 10:34:09', '2020-04-26 10:34:09'),
(67, 3, 'Ferne', 'Stanton', '+1.276.407.5539', 'kianna.wunsch@yahoo.com', '661 Georgiana Plaza Apt. 091\nParisianport, NJ 30384-4081', 9, '2020-04-26 10:34:09', '2020-04-26 10:34:09'),
(68, 3, 'Samara', 'Quitzon', '+1-441-830-6919', 'gspinka@yahoo.com', '16607 Runte Row\nKeyonmouth, OR 03338-0232', 9, '2020-04-26 10:34:09', '2020-04-26 10:34:09'),
(69, 3, 'Jane', 'Rippin', '(758) 593-1662 x10124', 'bayer.devon@bradtke.com', '5093 Trinity Walks Apt. 463\nSerenityport, OK 44270-4661', 9, '2020-04-26 10:34:09', '2020-04-26 10:34:09'),
(70, 3, 'Zelma', 'Ryan', '(404) 327-1288', 'tanya.ziemann@cruickshank.org', '46710 Remington Land Apt. 514\nLake Eleonore, IL 38181-0087', 9, '2020-04-26 10:34:09', '2020-04-26 10:34:09'),
(71, 3, 'Janie', 'Bauch', '(480) 779-1156', 'wsporer@gmail.com', '67979 Jacobs Fields Apt. 115\nWest Felixburgh, ME 67454', 9, '2020-04-26 10:34:09', '2020-04-26 10:34:09'),
(72, 3, 'Caroline', 'Rohan', '1-430-580-5950', 'destiney.harber@bailey.com', '3549 McCullough Mountain\nLake Tara, MI 05519', 9, '2020-04-26 10:34:09', '2020-04-26 10:34:09'),
(73, 3, 'Morton', 'Schiller', '(451) 794-4040', 'mateo16@toy.biz', '511 Fay Mills\nO\'Connellstad, AR 70124-3966', 9, '2020-04-26 10:34:09', '2020-04-26 10:34:09'),
(74, 3, 'Sylvia', 'Kuhn', '447-777-6261', 'jdenesik@harris.com', '599 Emard Parks Suite 066\nBorertown, NC 78726-0471', 10, '2020-04-26 10:34:09', '2020-04-26 10:34:09'),
(75, 3, 'Arvilla', 'Franecki', '1-981-440-6403', 'fermin.wehner@rogahn.org', '30170 Syble Place\nRaynorton, OR 08851', 10, '2020-04-26 10:34:09', '2020-04-26 10:34:09'),
(76, 3, 'Shaylee', 'Carter', '702.560.1804', 'orie23@hotmail.com', '2805 Flatley Harbors\nHillardhaven, ID 79485', 10, '2020-04-26 10:34:09', '2020-04-26 10:34:09'),
(77, 3, 'Issac', 'DuBuque', '802.369.0102 x745', 'damaris.powlowski@yahoo.com', '236 Gleason Plaza\nNorth Geraldineshire, AK 54390-2571', 10, '2020-04-26 10:34:09', '2020-04-26 10:34:09'),
(78, 3, 'Van', 'Zemlak', '(428) 449-7057 x1134', 'janelle80@glover.com', '80468 Brown Drive Apt. 364\nGleasontown, MO 67138-0785', 10, '2020-04-26 10:34:09', '2020-04-26 10:34:09'),
(79, 3, 'German', 'Sawayn', '+18856408237', 'britney36@gmail.com', '85919 Kallie Brooks\nPort Leonshire, NV 29600', 10, '2020-04-26 10:34:09', '2020-04-26 10:34:09'),
(80, 3, 'Napoleon', 'Tremblay', '1-826-562-1992', 'marcel.nader@hotmail.com', '2657 Gutmann Lakes\nEast Sage, NE 06795', 10, '2020-04-26 10:34:09', '2020-04-26 10:34:09'),
(81, 3, 'Celestine', 'Monahan', '252-237-8147 x7840', 'ikilback@grant.net', '940 Treutel Locks\nClintonmouth, GA 34785', 10, '2020-04-26 10:34:09', '2020-04-26 10:34:09'),
(82, 3, 'Kurt', 'Huel', '1-902-787-2469 x968', 'ugutkowski@bechtelar.com', '834 Jabari Parks Apt. 457\nNew Kayleyburgh, AK 85151-8658', 10, '2020-04-26 10:34:09', '2020-04-26 10:34:09'),
(83, 4, 'Emory', 'Rolfson', '497.835.3714 x150', 'hmueller@hotmail.com', '894 Margret Grove Apt. 388\nDavestad, KY 53706-6117', 11, '2020-04-26 10:34:09', '2020-04-26 10:34:09'),
(84, 4, 'Alphonso', 'Hagenes', '792.978.0901', 'fay.jocelyn@yahoo.com', '4647 Denesik Underpass Suite 558\nEast Imaniville, CT 91255-4088', 11, '2020-04-26 10:34:09', '2020-04-26 10:34:09'),
(85, 4, 'Palma', 'Watsica', '637.417.4363', 'schumm.lenny@gmail.com', '1495 Deckow Bypass Suite 342\nLake Harold, MI 54503-2526', 11, '2020-04-26 10:34:09', '2020-04-26 10:34:09'),
(86, 4, 'Renee', 'Kirlin', '+1 (562) 924-8610', 'clinton.braun@hills.com', '2448 Wayne Trail Apt. 866\nSouth Lamont, MI 23952', 11, '2020-04-26 10:34:09', '2020-04-26 10:34:09'),
(87, 4, 'Leilani', 'Mante', '689-698-3101', 'jed.flatley@klein.biz', '5394 Joshua Grove Apt. 401\nAmiyaton, NC 33375-1759', 11, '2020-04-26 10:34:09', '2020-04-26 10:34:09'),
(88, 4, 'Jackson', 'Batz', '(503) 888-3393', 'yost.carole@schaefer.com', '37145 Maiya Vista Suite 751\nNew Toy, WV 72329', 11, '2020-04-26 10:34:09', '2020-04-26 10:34:09'),
(89, 4, 'Terrance', 'Schmeler', '1-680-241-5420', 'karlee.bergnaum@pollich.com', '2396 Virgil Lodge\nNorth Pearlie, MN 66226-1788', 11, '2020-04-26 10:34:09', '2020-04-26 10:34:09'),
(90, 4, 'Sydnie', 'Crooks', '+1 (940) 985-6375', 'margarett.nicolas@yahoo.com', '4460 Monroe Corners Apt. 065\nLake Viola, KY 59685', 12, '2020-04-26 10:34:09', '2020-04-26 10:34:09'),
(91, 4, 'Kirsten', 'Conn', '+1.803.417.7300', 'smccullough@macejkovic.com', '885 Eulalia Port\nLake Malikastad, OR 84575-1439', 12, '2020-04-26 10:34:09', '2020-04-26 10:34:09'),
(92, 4, 'Elizabeth', 'Crist', '(343) 288-4591 x42259', 'ckling@gmail.com', '1982 Isabel Rapids\nWest Tylerfurt, MT 42146', 12, '2020-04-26 10:34:09', '2020-04-26 10:34:09'),
(93, 4, 'Angela', 'Feil', '(425) 440-8177', 'nhowe@reynolds.org', '54860 Christina Lodge Suite 406\nRosemariefort, AL 25964-4165', 12, '2020-04-26 10:34:09', '2020-04-26 10:34:09'),
(94, 4, 'Keyon', 'Corwin', '972-542-1278', 'kailey.rohan@gmail.com', '70794 Becker Path Suite 183\nNew Abe, NJ 18464-6241', 12, '2020-04-26 10:34:09', '2020-04-26 10:34:09'),
(95, 4, 'Valentina', 'Nader', '687-940-3810 x641', 'qdaniel@gmail.com', '2692 Adah Trace Apt. 550\nAltenwerthfort, CA 74661-1148', 12, '2020-04-26 10:34:09', '2020-04-26 10:34:09'),
(96, 4, 'Tyson', 'Wintheiser', '1-310-936-5394 x82109', 'eulah45@hotmail.com', '67613 Earlene Crest\nDereckview, SC 10269', 12, '2020-04-26 10:34:09', '2020-04-26 10:34:09'),
(97, 4, 'Ivy', 'Stark', '+1.863.228.8162', 'jenkins.alek@yahoo.com', '56066 Wilkinson Isle\nEast Rowenaland, NJ 70463-1353', 12, '2020-04-26 10:34:09', '2020-04-26 10:34:09'),
(98, 4, 'Zack', 'Ullrich', '+1-991-286-4381', 'bklein@labadie.com', '421 Ruecker Causeway Apt. 043\nPerryton, NE 74053', 12, '2020-04-26 10:34:09', '2020-04-26 10:34:09'),
(99, 4, 'Caleb', 'Murphy', '1-875-376-5488', 'fritsch.franz@smitham.com', '244 Dickinson Keys\nSouth Charlieside, ND 88020-6393', 13, '2020-04-26 10:34:09', '2020-04-26 10:34:09'),
(100, 4, 'Rosamond', 'Hackett', '1-543-600-8265 x8025', 'evangeline47@hotmail.com', '1331 Emiliano Forest\nLake Helmermouth, DC 88355-4424', 13, '2020-04-26 10:34:09', '2020-04-26 10:34:09'),
(101, 4, 'Berenice', 'Haley', '612-756-5251 x69066', 'victoria.hirthe@yahoo.com', '259 Lowe Ramp Apt. 670\nHartmannville, MN 95205-0801', 13, '2020-04-26 10:34:09', '2020-04-26 10:34:09'),
(102, 4, 'Leann', 'Mante', '1-725-879-3612 x47656', 'fidel.rippin@bins.info', '568 Ena Burgs Suite 440\nHerzogberg, NM 85687', 13, '2020-04-26 10:34:09', '2020-04-26 10:34:09'),
(103, 4, 'Madalyn', 'Ebert', '1-282-846-1950 x57841', 'zstark@larkin.com', '3042 Boyer Run Apt. 831\nIsaiview, DE 64983-6883', 13, '2020-04-26 10:34:09', '2020-04-26 10:34:09'),
(104, 4, 'Teresa', 'Pagac', '+1-524-466-9519', 'mdonnelly@yahoo.com', '3837 Breitenberg Club\nNorth Kiraburgh, KY 76711-3995', 13, '2020-04-26 10:34:09', '2020-04-26 10:34:09'),
(105, 4, 'Peggie', 'Parisian', '(328) 510-0569 x507', 'pacocha.shea@cremin.org', '6444 Rodriguez Ridge Suite 710\nRobynshire, TX 18938', 13, '2020-04-26 10:34:09', '2020-04-26 10:34:09'),
(106, 4, 'Olaf', 'Hermiston', '364-703-0659 x18430', 'marisol.crist@yahoo.com', '2695 Isabel Springs Suite 842\nSanfordstad, CO 90912', 13, '2020-04-26 10:34:09', '2020-04-26 10:34:09'),
(107, 4, 'Mckayla', 'Ullrich', '(401) 431-5692 x13753', 'haley.garland@gutkowski.com', '210 Marlee Ways Suite 209\nRaeganton, VT 34844', 13, '2020-04-26 10:34:09', '2020-04-26 10:34:09'),
(108, 4, 'Destin', 'Wilderman', '796.347.6757', 'hryan@greenfelder.com', '7597 Garret Ways\nNashtown, NE 81770-6520', 14, '2020-04-26 10:34:09', '2020-04-26 10:34:09'),
(109, 4, 'Felipe', 'Kihn', '1-820-800-4868', 'carroll.jean@mcglynn.net', '24104 Jedidiah Lakes Suite 000\nNew Siennaville, WA 66378', 14, '2020-04-26 10:34:09', '2020-04-26 10:34:09'),
(110, 4, 'Lue', 'Greenfelder', '+16828660215', 'dominique63@gmail.com', '66928 Rogelio Locks\nPort Lillyborough, DC 37015', 14, '2020-04-26 10:34:09', '2020-04-26 10:34:09'),
(111, 4, 'Yasmine', 'Hayes', '(830) 516-8386', 'nicholas25@leannon.info', '47338 Johnny Extensions\nAbbottville, NM 15828-1701', 14, '2020-04-26 10:34:09', '2020-04-26 10:34:09'),
(112, 4, 'Shaun', 'Wisoky', '221-241-2674', 'dixie.oconner@hotmail.com', '7359 Billy Plaza Apt. 923\nThomasberg, ND 35051-8386', 14, '2020-04-26 10:34:09', '2020-04-26 10:34:09'),
(113, 4, 'Mabel', 'Murray', '+1-270-357-7089', 'kreiger.trycia@padberg.com', '3839 Swaniawski Curve Apt. 638\nNorth Metamouth, CA 32097-5693', 15, '2020-04-26 10:34:09', '2020-04-26 10:34:09'),
(114, 4, 'Valerie', 'Mueller', '1-852-733-6506', 'marquardt.harry@buckridge.org', '64067 Jake Lakes Apt. 056\nSteubershire, OR 49539-1614', 15, '2020-04-26 10:34:09', '2020-04-26 10:34:09'),
(115, 4, 'Mossie', 'Boehm', '1-621-877-4699', 'daniel.bennett@hackett.com', '3054 Bosco Street Apt. 395\nSouth Terrillland, VT 75617-9260', 15, '2020-04-26 10:34:09', '2020-04-26 10:34:09'),
(116, 4, 'Vito', 'McClure', '228.917.7107 x281', 'ocie19@ruecker.com', '81832 Koepp Summit\nNorth Shanieville, TX 10675-7931', 15, '2020-04-26 10:34:09', '2020-04-26 10:34:09'),
(117, 4, 'Cedrick', 'Trantow', '774-541-7041', 'allison.prosacco@hotmail.com', '906 Jacobson Turnpike Apt. 897\nBlandahaven, DC 53069', 15, '2020-04-26 10:34:09', '2020-04-26 10:34:09'),
(118, 4, 'Isom', 'Batz', '1-876-208-7960 x595', 'gulgowski.sammy@goodwin.com', '90816 Bergstrom Burgs\nNorth Geraldineshire, NJ 45112-0284', 15, '2020-04-26 10:34:09', '2020-04-26 10:34:09'),
(119, 4, 'Mona', 'Weimann', '+1-728-950-1231', 'molly94@lynch.com', '944 Hodkiewicz Divide\nNew Darrellfort, OK 51297-5886', 15, '2020-04-26 10:34:09', '2020-04-26 10:34:09'),
(120, 4, 'Rebeka', 'Schiller', '+1 (225) 624-6273', 'hoeger.mackenzie@pfannerstill.com', '189 Wolf Inlet Suite 269\nNew Beverlyfort, SC 22863', 15, '2020-04-26 10:34:09', '2020-04-26 10:34:09'),
(121, 4, 'Glen', 'Bahringer', '654.510.9454', 'wtillman@orn.com', '10770 Yoshiko Trail Suite 958\nPort Merritt, MO 07806-7914', 15, '2020-04-26 10:34:09', '2020-04-26 10:34:09'),
(122, 4, 'Garry', 'Romaguera', '1-884-248-4989', 'jacobson.dylan@bednar.com', '200 Nannie Cape Apt. 214\nLake Madelynn, MD 17094-5663', 15, '2020-04-26 10:34:09', '2020-04-26 10:34:09'),
(123, 5, 'Dorothy', 'King', '513.432.6174', 'veum.garrison@johnston.net', '534 Neil Curve\nEast Vivianneport, ND 51309-9036', 16, '2020-04-26 10:34:09', '2020-04-26 10:34:09'),
(124, 5, 'Ezekiel', 'Feest', '(528) 821-0366 x2870', 'wisozk.marcus@hotmail.com', '1490 Rogers Shoals\nNew Shakirabury, IL 08244-2058', 16, '2020-04-26 10:34:09', '2020-04-26 10:34:09'),
(125, 5, 'Roscoe', 'Ullrich', '(656) 557-1582', 'rau.alphonso@mckenzie.org', '7384 Huels Hollow Apt. 502\nBereniceview, FL 42451-3022', 16, '2020-04-26 10:34:09', '2020-04-26 10:34:09'),
(126, 5, 'Rosetta', 'Dietrich', '(497) 463-3679 x4240', 'jefferey54@gibson.com', '506 Kane Brook\nWest Eulah, MT 38241-5641', 16, '2020-04-26 10:34:09', '2020-04-26 10:34:09'),
(127, 5, 'June', 'Mitchell', '+1-321-956-0174', 'kirlin.greyson@yahoo.com', '8039 Schimmel Lake\nJakaylaside, IA 29289-6576', 16, '2020-04-26 10:34:09', '2020-04-26 10:34:09'),
(128, 5, 'Alec', 'Hill', '590.639.3921', 'dhilpert@hotmail.com', '7393 Shemar Village Suite 782\nEast Werner, GA 26135-7578', 16, '2020-04-26 10:34:09', '2020-04-26 10:34:09'),
(129, 5, 'Aryanna', 'Hoppe', '(250) 864-0396 x955', 'cleo72@parisian.com', '904 Sebastian Fall\nSaulport, MA 33229-5904', 16, '2020-04-26 10:34:09', '2020-04-26 10:34:09'),
(130, 5, 'Joaquin', 'Skiles', '826-368-6052', 'carter.hailee@gmail.com', '240 Nitzsche Overpass\nPort Judahview, SC 13268', 16, '2020-04-26 10:34:09', '2020-04-26 10:34:09'),
(131, 5, 'Joanne', 'Padberg', '1-989-406-0127 x7087', 'jodie06@yahoo.com', '963 Reilly Crest\nWest Erickaborough, VT 58780-2968', 17, '2020-04-26 10:34:09', '2020-04-26 10:34:09'),
(132, 5, 'Emmett', 'Mills', '1-902-715-9919', 'baumbach.paula@hotmail.com', '21969 Dallas Via Apt. 817\nWest Waltermouth, KY 05350-0459', 17, '2020-04-26 10:34:09', '2020-04-26 10:34:09'),
(133, 5, 'Jeanie', 'Nienow', '890-315-6642', 'helena47@hotmail.com', '1208 Madeline Trace\nLake Kelton, WI 42308-7853', 17, '2020-04-26 10:34:09', '2020-04-26 10:34:09'),
(134, 5, 'Alysson', 'Kutch', '860.740.1104 x46268', 'padberg.cindy@gmail.com', '128 Boehm Manors Suite 273\nCandidomouth, AK 04058', 17, '2020-04-26 10:34:09', '2020-04-26 10:34:09'),
(135, 5, 'Aylin', 'Lakin', '1-859-200-1718 x66393', 'bogan.dee@gmail.com', '83083 Towne Ferry Apt. 475\nSigurdside, FL 65470-7717', 17, '2020-04-26 10:34:09', '2020-04-26 10:34:09'),
(136, 5, 'Zoie', 'Feeney', '409-201-4340 x593', 'king.lakin@cronin.net', '27661 Greg Knoll\nNew Nicole, MN 30594-9529', 17, '2020-04-26 10:34:09', '2020-04-26 10:34:09'),
(137, 5, 'Orpha', 'Hammes', '770.621.9639', 'zboncak.freddie@block.com', '26520 Schulist Camp Suite 963\nJakubowskifort, NE 46833-8989', 17, '2020-04-26 10:34:09', '2020-04-26 10:34:09'),
(138, 5, 'Mary', 'Murphy', '+1 (665) 843-0423', 'waelchi.charlene@yahoo.com', '78217 Feeney Oval\nPort Miloton, CO 83307-4673', 17, '2020-04-26 10:34:09', '2020-04-26 10:34:09'),
(139, 5, 'Corrine', 'Wilkinson', '(303) 640-5913 x6688', 'qemard@gmail.com', '20105 Rowe Ways\nZoiemouth, DE 16525', 17, '2020-04-26 10:34:09', '2020-04-26 10:34:09'),
(140, 5, 'Zena', 'Walter', '1-506-205-6068', 'rachael.koss@hotmail.com', '68674 Linnea Ridges\nModestoview, KS 39979', 18, '2020-04-26 10:34:09', '2020-04-26 10:34:09'),
(141, 5, 'Chaim', 'Dibbert', '(375) 718-7287 x2355', 'foster66@hotmail.com', '807 Wisozk Turnpike Suite 486\nArianefort, SD 80101-7373', 18, '2020-04-26 10:34:09', '2020-04-26 10:34:09'),
(142, 5, 'Liana', 'O\'Kon', '619-916-2524 x866', 'beau96@king.com', '53234 Bennie Mountains\nSouth Cornelius, MI 07995', 18, '2020-04-26 10:34:09', '2020-04-26 10:34:09'),
(143, 5, 'Wilburn', 'Corkery', '1-534-983-2813', 'johnathan20@windler.com', '7265 Schultz Spurs\nEdgardofort, UT 59513', 18, '2020-04-26 10:34:09', '2020-04-26 10:34:09'),
(144, 5, 'Brandy', 'Hodkiewicz', '1-968-327-9326 x06041', 'oberbrunner.brenda@gmail.com', '92093 Swift Walk\nNorth Clemmie, NY 56733-4209', 18, '2020-04-26 10:34:09', '2020-04-26 10:34:09'),
(145, 5, 'Aisha', 'Pfannerstill', '759-654-9440', 'wuckert.kimberly@murphy.com', '8137 Diamond Tunnel\nNew Montyhaven, SD 58070-3104', 18, '2020-04-26 10:34:09', '2020-04-26 10:34:09'),
(146, 5, 'Arielle', 'Gorczany', '861.744.4664', 'aileen08@hegmann.org', '94648 Dakota Hollow\nWaylonfurt, NH 79758', 18, '2020-04-26 10:34:09', '2020-04-26 10:34:09'),
(147, 5, 'Laron', 'Hoeger', '287.239.0231 x318', 'trevor.leffler@jenkins.com', '632 Mohr Bridge\nParkertown, ND 96382-9492', 18, '2020-04-26 10:34:09', '2020-04-26 10:34:09'),
(148, 5, 'Fatima', 'Bartell', '+1.913.439.5091', 'modesta47@kirlin.net', '7481 Kuhic Stream\nPort Art, MA 68870-5586', 18, '2020-04-26 10:34:09', '2020-04-26 10:34:09'),
(149, 5, 'Lenna', 'Bartoletti', '1-290-630-9065 x219', 'cicero43@wisozk.com', '81639 Flatley Well\nMarisoltown, NE 82016', 18, '2020-04-26 10:34:09', '2020-04-26 10:34:09');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_04_07_204609_create_companies_table', 1),
(5, '2020_04_08_141654_create_contacts_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Jakayla Durgan', 'vandervort.samir@example.org', '2020-04-26 10:34:08', '92199900a', 'VQY7I7qmZm', '2020-04-26 10:34:08', '2020-04-26 10:34:08'),
(2, 'Danielle Gerhold MD', 'carole59@example.org', '2020-04-26 10:34:08', '92199900a', '8qirIIUkhS', '2020-04-26 10:34:08', '2020-04-26 10:34:08'),
(3, 'Nya Fay', 'alexie.ernser@example.com', '2020-04-26 10:34:08', '92199900a', 'jfq7nV97et', '2020-04-26 10:34:08', '2020-04-26 10:34:08'),
(4, 'Kaylee Mante III', 'lon27@example.org', '2020-04-26 10:34:08', '92199900a', 'TqY8oyRvnn', '2020-04-26 10:34:08', '2020-04-26 10:34:08'),
(5, 'Janie Mann', 'little.stanley@example.com', '2020-04-26 10:34:08', '92199900a', 'IdCou6fNyq', '2020-04-26 10:34:08', '2020-04-26 10:34:08'),
(6, 'aly feteha', 'alyfeteha1@gmail.com', NULL, '$2y$10$QGI485sTjyS6z3Pq0b1OXOaZE224y4WF/KLQujeMaGlcwSRuTmNxa', NULL, '2020-04-26 10:35:32', '2020-04-26 10:35:32');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `companies`
--
ALTER TABLE `companies`
  ADD PRIMARY KEY (`id`),
  ADD KEY `companies_user_id_foreign` (`user_id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `contacts_company_id_foreign` (`company_id`),
  ADD KEY `contacts_user_id_foreign` (`user_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `companies`
--
ALTER TABLE `companies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=150;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `companies`
--
ALTER TABLE `companies`
  ADD CONSTRAINT `companies_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `contacts`
--
ALTER TABLE `contacts`
  ADD CONSTRAINT `contacts_company_id_foreign` FOREIGN KEY (`company_id`) REFERENCES `companies` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `contacts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
