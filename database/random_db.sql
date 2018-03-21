-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 01, 2018 at 12:59 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `groupfour_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `destinations`
--

CREATE TABLE `destinations` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `about` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `legacy` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `present` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `trivia` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `lat` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lon` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img_1` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img_2` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img_3` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img_4` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img_5` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `destinations`
--

INSERT INTO `destinations` (`id`, `name`, `about`, `legacy`, `present`, `trivia`, `lat`, `lon`, `img_1`, `img_2`, `img_3`, `img_4`, `img_5`, `created_at`, `updated_at`) VALUES
(1, 'Bit Pazar', ' Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum condimentum dolor diam, ac feugiat eros finibus nec. In aliquam, elit quis suscipit suscipit, lorem ante ullamcorper eros, ut placerat libero lectus eget ex. Pellentesque lacinia eleifend gravida. Curabitur at ante et nulla placerat dignissim. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque massa nisi, vulputate sit amet feugiat a, sollicitudin id dui. Sed placerat feugiat venenatis. Maecenas ac mollis purus.\r\n\r\nProin mattis dignissim ipsum, ut commodo nisl ultricies rhoncus. Aliquam semper feugiat tortor, nec porttitor ligula gravida eu. Etiam eleifend vitae massa vel sagittis. Nam vulputate porttitor elit, sed venenatis ante mollis ac. Maecenas tincidunt purus sed eros feugiat, et consectetur nunc vestibulum. Proin luctus nisi vel magna hendrerit molestie. Aliquam iaculis blandit imperdiet. Suspendisse et suscipit dolor. Aenean sed lectus vitae urna porttitor mollis.\r\n\r\nNunc congue ac neque ac tincidunt. Aliquam nec placerat leo, in elementum ex. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam pellentesque malesuada eros, sit amet ultricies orci sollicitudin id. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Aliquam ullamcorper pellentesque laoreet. Cras in eros accumsan, fringilla dui eget, fringilla enim. Cras est ante, vehicula at leo ut, tincidunt luctus diam. Vestibulum consequat ipsum a nisl venenatis viverra vel non libero. Nulla facilisi. Sed sit amet enim non mi imperdiet vehicula quis eget lectus. Nulla sagittis ipsum ut tortor suscipit consequat. Praesent id lectus augue. Morbi quis lectus posuere, finibus metus vel, tempus ligula. Etiam placerat metus sed gravida euismod. Vestibulum laoreet porttitor lacinia. ', 'Ut eget sollicitudin odio, eu tincidunt eros. Interdum et malesuada fames ac ante ipsum primis in faucibus. Suspendisse at vehicula tellus, id elementum enim. Vivamus consectetur mauris vitae bibendum tincidunt. Etiam massa lorem, finibus eu odio suscipit, euismod interdum nibh. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Phasellus convallis sodales arcu, non tristique orci dignissim ut. Integer feugiat turpis nec molestie varius. Vestibulum condimentum condimentum ante. Aliquam sed ligula erat. ', 'Vestibulum ex justo, fringilla at iaculis viverra, auctor vitae ipsum. Curabitur blandit, quam et tempus interdum, tortor diam pulvinar justo, ac accumsan risus nibh ac massa. Duis id bibendum ex. Cras bibendum venenatis eros sagittis malesuada. Aenean commodo viverra nisl, id ornare dolor accumsan id. Etiam at metus gravida libero feugiat rhoncus lacinia vitae purus. In vel bibendum dolor. Integer tristique tellus odio, at facilisis augue hendrerit sed. Nullam tincidunt pretium arcu, vel lacinia purus aliquet at. Mauris porttitor nisl eget pharetra faucibus. Sed nibh libero, bibendum eu fermentum vitae, pharetra eget magna. Curabitur eu augue a dui blandit euismod. ', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '42.003612', '21.439557', 'https://upload.wikimedia.org/wikipedia/commons/f/fb/Bit_Pazar_Skopje.jpg', 'https://static.panoramio.com.storage.googleapis.com/photos/large/14477305.jpg', 'https://farm5.static.flickr.com/4722/39911664612_63aa0465e8_b.jpg', 'http://www.travelingauthentic.com/wp-content/uploads/2017/08/DSC08914.jpg', 'https://www.visitskopje.mk/images/old/charshijaja.jpg', NULL, NULL),
(2, 'Bit Pazar 2', ' Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum condimentum dolor diam, ac feugiat eros finibus nec. In aliquam, elit quis suscipit suscipit, lorem ante ullamcorper eros, ut placerat libero lectus eget ex. Pellentesque lacinia eleifend gravida. Curabitur at ante et nulla placerat dignissim. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque massa nisi, vulputate sit amet feugiat a, sollicitudin id dui. Sed placerat feugiat venenatis. Maecenas ac mollis purus.\r\n\r\nProin mattis dignissim ipsum, ut commodo nisl ultricies rhoncus. Aliquam semper feugiat tortor, nec porttitor ligula gravida eu. Etiam eleifend vitae massa vel sagittis. Nam vulputate porttitor elit, sed venenatis ante mollis ac. Maecenas tincidunt purus sed eros feugiat, et consectetur nunc vestibulum. Proin luctus nisi vel magna hendrerit molestie. Aliquam iaculis blandit imperdiet. Suspendisse et suscipit dolor. Aenean sed lectus vitae urna porttitor mollis.\r\n\r\nNunc congue ac neque ac tincidunt. Aliquam nec placerat leo, in elementum ex. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam pellentesque malesuada eros, sit amet ultricies orci sollicitudin id. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Aliquam ullamcorper pellentesque laoreet. Cras in eros accumsan, fringilla dui eget, fringilla enim. Cras est ante, vehicula at leo ut, tincidunt luctus diam. Vestibulum consequat ipsum a nisl venenatis viverra vel non libero. Nulla facilisi. Sed sit amet enim non mi imperdiet vehicula quis eget lectus. Nulla sagittis ipsum ut tortor suscipit consequat. Praesent id lectus augue. Morbi quis lectus posuere, finibus metus vel, tempus ligula. Etiam placerat metus sed gravida euismod. Vestibulum laoreet porttitor lacinia. ', 'Ut eget sollicitudin odio, eu tincidunt eros. Interdum et malesuada fames ac ante ipsum primis in faucibus. Suspendisse at vehicula tellus, id elementum enim. Vivamus consectetur mauris vitae bibendum tincidunt. Etiam massa lorem, finibus eu odio suscipit, euismod interdum nibh. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Phasellus convallis sodales arcu, non tristique orci dignissim ut. Integer feugiat turpis nec molestie varius. Vestibulum condimentum condimentum ante. Aliquam sed ligula erat. ', 'Vestibulum ex justo, fringilla at iaculis viverra, auctor vitae ipsum. Curabitur blandit, quam et tempus interdum, tortor diam pulvinar justo, ac accumsan risus nibh ac massa. Duis id bibendum ex. Cras bibendum venenatis eros sagittis malesuada. Aenean commodo viverra nisl, id ornare dolor accumsan id. Etiam at metus gravida libero feugiat rhoncus lacinia vitae purus. In vel bibendum dolor. Integer tristique tellus odio, at facilisis augue hendrerit sed. Nullam tincidunt pretium arcu, vel lacinia purus aliquet at. Mauris porttitor nisl eget pharetra faucibus. Sed nibh libero, bibendum eu fermentum vitae, pharetra eget magna. Curabitur eu augue a dui blandit euismod. ', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '42.003612', '21.439557', 'https://upload.wikimedia.org/wikipedia/commons/f/fb/Bit_Pazar_Skopje.jpg', 'https://static.panoramio.com.storage.googleapis.com/photos/large/14477305.jpg', 'https://farm5.static.flickr.com/4722/39911664612_63aa0465e8_b.jpg', 'http://www.travelingauthentic.com/wp-content/uploads/2017/08/DSC08914.jpg', 'https://www.visitskopje.mk/images/old/charshijaja.jpg', NULL, NULL),
(3, 'Bit Pazar 3', ' Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum condimentum dolor diam, ac feugiat eros finibus nec. In aliquam, elit quis suscipit suscipit, lorem ante ullamcorper eros, ut placerat libero lectus eget ex. Pellentesque lacinia eleifend gravida. Curabitur at ante et nulla placerat dignissim. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque massa nisi, vulputate sit amet feugiat a, sollicitudin id dui. Sed placerat feugiat venenatis. Maecenas ac mollis purus.\r\n\r\nProin mattis dignissim ipsum, ut commodo nisl ultricies rhoncus. Aliquam semper feugiat tortor, nec porttitor ligula gravida eu. Etiam eleifend vitae massa vel sagittis. Nam vulputate porttitor elit, sed venenatis ante mollis ac. Maecenas tincidunt purus sed eros feugiat, et consectetur nunc vestibulum. Proin luctus nisi vel magna hendrerit molestie. Aliquam iaculis blandit imperdiet. Suspendisse et suscipit dolor. Aenean sed lectus vitae urna porttitor mollis.\r\n\r\nNunc congue ac neque ac tincidunt. Aliquam nec placerat leo, in elementum ex. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam pellentesque malesuada eros, sit amet ultricies orci sollicitudin id. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Aliquam ullamcorper pellentesque laoreet. Cras in eros accumsan, fringilla dui eget, fringilla enim. Cras est ante, vehicula at leo ut, tincidunt luctus diam. Vestibulum consequat ipsum a nisl venenatis viverra vel non libero. Nulla facilisi. Sed sit amet enim non mi imperdiet vehicula quis eget lectus. Nulla sagittis ipsum ut tortor suscipit consequat. Praesent id lectus augue. Morbi quis lectus posuere, finibus metus vel, tempus ligula. Etiam placerat metus sed gravida euismod. Vestibulum laoreet porttitor lacinia. ', 'Ut eget sollicitudin odio, eu tincidunt eros. Interdum et malesuada fames ac ante ipsum primis in faucibus. Suspendisse at vehicula tellus, id elementum enim. Vivamus consectetur mauris vitae bibendum tincidunt. Etiam massa lorem, finibus eu odio suscipit, euismod interdum nibh. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Phasellus convallis sodales arcu, non tristique orci dignissim ut. Integer feugiat turpis nec molestie varius. Vestibulum condimentum condimentum ante. Aliquam sed ligula erat. ', 'Vestibulum ex justo, fringilla at iaculis viverra, auctor vitae ipsum. Curabitur blandit, quam et tempus interdum, tortor diam pulvinar justo, ac accumsan risus nibh ac massa. Duis id bibendum ex. Cras bibendum venenatis eros sagittis malesuada. Aenean commodo viverra nisl, id ornare dolor accumsan id. Etiam at metus gravida libero feugiat rhoncus lacinia vitae purus. In vel bibendum dolor. Integer tristique tellus odio, at facilisis augue hendrerit sed. Nullam tincidunt pretium arcu, vel lacinia purus aliquet at. Mauris porttitor nisl eget pharetra faucibus. Sed nibh libero, bibendum eu fermentum vitae, pharetra eget magna. Curabitur eu augue a dui blandit euismod. ', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '42.003612', '21.439557', 'https://upload.wikimedia.org/wikipedia/commons/f/fb/Bit_Pazar_Skopje.jpg', 'https://static.panoramio.com.storage.googleapis.com/photos/large/14477305.jpg', 'https://farm5.static.flickr.com/4722/39911664612_63aa0465e8_b.jpg', 'http://www.travelingauthentic.com/wp-content/uploads/2017/08/DSC08914.jpg', 'https://www.visitskopje.mk/images/old/charshijaja.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_02_28_225753_create_destinations_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `destinations`
--
ALTER TABLE `destinations`
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
-- AUTO_INCREMENT for table `destinations`
--
ALTER TABLE `destinations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
