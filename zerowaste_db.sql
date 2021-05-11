-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 31, 2021 at 07:31 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `zerowaste_db`
--

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
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
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
(5, '2021_03_17_065712_create_projects_table', 2),
(11, '2021_03_24_043223_create_news_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subtitle` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_dep` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `long_dep` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_two` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `subtitle`, `type`, `date`, `image`, `short_dep`, `long_dep`, `image_two`, `created_at`, `updated_at`) VALUES
(1, 'Water is Happiness', 'lets make Bhutan Cleanfdg', 'News', '2021-03-31', '1670125086.jpg', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Similique, nisi. Aut nam commodi praesentium veniam quis corporis error recusandae, ullam iste, culpa iusto veritatis facere vel a. Sapiente, sequi est!', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Similique, nisi. Aut nam commodi praesentium veniam quis corporis error recusandae, ullam iste, culpa iusto veritatis facere vel a. Sapiente, sequi est!Lorem ipsum dolor, sit amet consectetur adipisicing elit. Similique, nisi. Aut nam commodi praesentium veniam quis corporis error recusandae, ullam iste, culpa iusto veritatis facere vel a. Sapiente, sequi est!Lorem ipsum dolor, sit amet consectetur adipisicing elit. Similique, nisi. Aut nam commodi praesentium veniam quis corporis error recusandae, ullam iste, culpa iusto veritatis facere vel a. Sapiente, sequi est!Lorem ipsum dolor, sit amet consectetur adipisicing elit. Similique, nisi. Aut nam commodi praesentium veniam quis corporis error recusandae, ullam iste, culpa iusto veritatis facere vel a. Sapiente, sequi est!Lorem ipsum dolor, sit amet consectetur adipisicing elit. Similique, nisi. Aut nam commodi praesentium veniam quis corporis error recusandae, ullam iste, culpa iusto veritatis facere vel a. Sapiente, sequi est!Lorem ipsum dolor, sit amet consectetur adipisicing elit. Similique, nisi. Aut nam commodi praesentium veniam quis corporis error recusandae, ullam iste, culpa iusto veritatis facere vel a. Sapiente, sequi est!Lorem ipsum dolor, sit amet consectetur adipisicing elit. Similique, nisi. Aut nam commodi praesentium veniam quis corporis error recusandae, ullam iste, culpa iusto veritatis facere vel a. Sapiente, sequi est!Lorem ipsum dolor, sit amet consectetur adipisicing elit. Similique, nisi. Aut nam commodi praesentium veniam quis corporis error recusandae, ullam iste, culpa iusto veritatis facere vel a. Sapiente, sequi est!Lorem ipsum dolor, sit amet consectetur adipisicing elit. Similique, nisi. Aut nam commodi praesentium veniam quis corporis error recusandae, ullam iste, culpa iusto veritatis facere vel a. Sapiente, sequi est!Lorem ipsum dolor, sit amet consectetur adipisicing elit. Similique, nisi. Aut nam commodi praesentium veniam quis corporis error recusandae, ullam iste, culpa iusto veritatis facere vel a. Sapiente, sequi est!Lorem ipsum dolor, sit amet consectetur adipisicing elit. Similique, nisi. Aut nam commodi praesentium veniam quis corporis error recusandae, ullam iste, culpa iusto veritatis facere vel a. Sapiente, sequi est!Lorem ipsum dolor, sit amet consectetur adipisicing elit. Similique, nisi. Aut nam commodi praesentium veniam quis corporis error recusandae, ullam iste, culpa iusto veritatis facere vel a. Sapiente, sequi est!Lorem ipsum dolor, sit amet consectetur adipisicing elit. Similique, nisi. Aut nam commodi praesentium veniam quis corporis error recusandae, ullam iste, culpa iusto veritatis facere vel a. Sapiente, sequi est!', '482824609.jpg', '2021-03-30 23:39:51', '2021-03-30 23:48:37'),
(2, 'Internship Opportunity', 'lets make Bhutan Clean', 'Announcement', '2021-03-25', '129144100.jpg', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Similique, nisi. Aut nam commodi praesentium veniam quis corporis error recusandae, ullam iste, culpa iusto veritatis facere vel a. Sapiente, sequi est!', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Similique, nisi. Aut nam commodi praesentium veniam quis corporis error recusandae, ullam iste, culpa iusto veritatis facere vel a. Sapiente, sequi est!Lorem ipsum dolor, sit amet consectetur adipisicing elit. Similique, nisi. Aut nam commodi praesentium veniam quis corporis error recusandae, ullam iste, culpa iusto veritatis facere vel a. Sapiente, sequi est!Lorem ipsum dolor, sit amet consectetur adipisicing elit. Similique, nisi. Aut nam commodi praesentium veniam quis corporis error recusandae, ullam iste, culpa iusto veritatis facere vel a. Sapiente, sequi est!Lorem ipsum dolor, sit amet consectetur adipisicing elit. Similique, nisi. Aut nam commodi praesentium veniam quis corporis error recusandae, ullam iste, culpa iusto veritatis facere vel a. Sapiente, sequi est!Lorem ipsum dolor, sit amet consectetur adipisicing elit. Similique, nisi. Aut nam commodi praesentium veniam quis corporis error recusandae, ullam iste, culpa iusto veritatis facere vel a. Sapiente, sequi est!Lorem ipsum dolor, sit amet consectetur adipisicing elit. Similique, nisi. Aut nam commodi praesentium veniam quis corporis error recusandae, ullam iste, culpa iusto veritatis facere vel a. Sapiente, sequi est!Lorem ipsum dolor, sit amet consectetur adipisicing elit. Similique, nisi. Aut nam commodi praesentium veniam quis corporis error recusandae, ullam iste, culpa iusto veritatis facere vel a. Sapiente, sequi est!Lorem ipsum dolor, sit amet consectetur adipisicing elit. Similique, nisi. Aut nam commodi praesentium veniam quis corporis error recusandae, ullam iste, culpa iusto veritatis facere vel a. Sapiente, sequi est!', '676293214.jpg', '2021-03-30 23:49:18', '2021-03-30 23:49:18'),
(4, 'Water is Happiness', 'lets make Bhutan Clean', 'News', '2021-03-25', '46368575.jpg', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Similique, nisi. Aut nam commodi praesentium veniam quis corporis error recusandae, ullam iste, culpa iusto veritatis facere vel a. Sapiente, sequi est!', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Similique, nisi. Aut nam commodi praesentium veniam quis corporis error recusandae, ullam iste, culpa iusto veritatis facere vel a. Sapiente, sequi est!Lorem ipsum dolor, sit amet consectetur adipisicing elit. Similique, nisi. Aut nam commodi praesentium veniam quis corporis error recusandae, ullam iste, culpa iusto veritatis facere vel a. Sapiente, sequi est!Lorem ipsum dolor, sit amet consectetur adipisicing elit. Similique, nisi. Aut nam commodi praesentium veniam quis corporis error recusandae, ullam iste, culpa iusto veritatis facere vel a. Sapiente, sequi est!Lorem ipsum dolor, sit amet consectetur adipisicing elit. Similique, nisi. Aut nam commodi praesentium veniam quis corporis error recusandae, ullam iste, culpa iusto veritatis facere vel a. Sapiente, sequi est!Lorem ipsum dolor, sit amet consectetur adipisicing elit. Similique, nisi. Aut nam commodi praesentium veniam quis corporis error recusandae, ullam iste, culpa iusto veritatis facere vel a. Sapiente, sequi est!Lorem ipsum dolor, sit amet consectetur adipisicing elit. Similique, nisi. Aut nam commodi praesentium veniam quis corporis error recusandae, ullam iste, culpa iusto veritatis facere vel a. Sapiente, sequi est!Lorem ipsum dolor, sit amet consectetur adipisicing elit. Similique, nisi. Aut nam commodi praesentium veniam quis corporis error recusandae, ullam iste, culpa iusto veritatis facere vel a. Sapiente, sequi est!Lorem ipsum dolor, sit amet consectetur adipisicing elit. Similique, nisi. Aut nam commodi praesentium veniam quis corporis error recusandae, ullam iste, culpa iusto veritatis facere vel a. Sapiente, sequi est!Lorem ipsum dolor, sit amet consectetur adipisicing elit. Similique, nisi. Aut nam commodi praesentium veniam quis corporis error recusandae, ullam iste, culpa iusto veritatis facere vel a. Sapiente, sequi est!Lorem ipsum dolor, sit amet consectetur adipisicing elit. Similique, nisi. Aut nam commodi praesentium veniam quis corporis error recusandae, ullam iste, culpa iusto veritatis facere vel a. Sapiente, sequi est!Lorem ipsum dolor, sit amet consectetur adipisicing elit. Similique, nisi. Aut nam commodi praesentium veniam quis corporis error recusandae, ullam iste, culpa iusto veritatis facere vel a. Sapiente, sequi est!Lorem ipsum dolor, sit amet consectetur adipisicing elit. Similique, nisi. Aut nam commodi praesentium veniam quis corporis error recusandae, ullam iste, culpa iusto veritatis facere vel a. Sapiente, sequi est!Lorem ipsum dolor, sit amet consectetur adipisicing elit. Similique, nisi. Aut nam commodi praesentium veniam quis corporis error recusandae, ullam iste, culpa iusto veritatis facere vel a. Sapiente, sequi est!Lorem ipsum dolor, sit amet consectetur adipisicing elit. Similique, nisi. Aut nam commodi praesentium veniam quis corporis error recusandae, ullam iste, culpa iusto veritatis facere vel a. Sapiente, sequi est!Lorem ipsum dolor, sit amet consectetur adipisicing elit. Similique, nisi. Aut nam commodi praesentium veniam quis corporis error recusandae, ullam iste, culpa iusto veritatis facere vel a. Sapiente, sequi est!Lorem ipsum dolor, sit amet consectetur adipisicing elit. Similique, nisi. Aut nam commodi praesentium veniam quis corporis error recusandae, ullam iste, culpa iusto veritatis facere vel a. Sapiente, sequi est!Lorem ipsum dolor, sit amet consectetur adipisicing elit. Similique, nisi. Aut nam commodi praesentium veniam quis corporis error recusandae, ullam iste, culpa iusto veritatis facere vel a. Sapiente, sequi est!Lorem ipsum dolor, sit amet consectetur adipisicing elit. Similique, nisi. Aut nam commodi praesentium veniam quis corporis error recusandae, ullam iste, culpa iusto veritatis facere vel a. Sapiente, sequi est!Lorem ipsum dolor, sit amet consectetur adipisicing elit. Similique, nisi. Aut nam commodi praesentium veniam quis corporis error recusandae, ullam iste, culpa iusto veritatis facere vel a. Sapiente, sequi est!Lorem ipsum dolor, sit amet consectetur adipisicing elit. Similique, nisi. Aut nam commodi praesentium veniam quis corporis error recusandae, ullam iste, culpa iusto veritatis facere vel a. Sapiente, sequi est!Lorem ipsum dolor, sit amet consectetur adipisicing elit. Similique, nisi. Aut nam commodi praesentium veniam quis corporis error recusandae, ullam iste, culpa iusto veritatis facere vel a. Sapiente, sequi est!Lorem ipsum dolor, sit amet consectetur adipisicing elit. Similique, nisi. Aut nam commodi praesentium veniam quis corporis error recusandae, ullam iste, culpa iusto veritatis facere vel a. Sapiente, sequi est!Lorem ipsum dolor, sit amet consectetur adipisicing elit. Similique, nisi. Aut nam commodi praesentium veniam quis corporis error recusandae, ullam iste, culpa iusto veritatis facere vel a. Sapiente, sequi est!', '1707681629.jpg', '2021-03-30 23:51:53', '2021-03-30 23:51:53');

-- --------------------------------------------------------

--
-- Table structure for table `outlets`
--

CREATE TABLE `outlets` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `latitude` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `longitude` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `creator_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `outlets`
--

INSERT INTO `outlets` (`id`, `name`, `address`, `type`, `contact`, `latitude`, `longitude`, `creator_id`, `created_at`, `updated_at`) VALUES
(1, 'Changlimithang', 'asdfasdfa asdf sdf', 'Dump-sites', '17004854', '27.471305981991', '89.641101658344', 1, '2021-03-29 20:18:11', '2021-03-30 13:11:06'),
(2, 'Changbangdu', '1708796', NULL, NULL, '27.451774236040', '89.650862216949', 1, '2021-03-29 21:10:01', '2021-03-29 21:10:01'),
(3, 'Khanku', 'asdfasdf', NULL, NULL, '27.411409542210', '89.416265487670', 1, '2021-03-29 21:13:08', '2021-03-29 21:13:08'),
(4, 'Kurutang', 'sdfgasdf asdf adfasdf', 'Drop-off Centers', '17004854', '27.547393746241', '89.885330200195', 1, '2021-03-29 23:27:31', '2021-03-29 23:27:31'),
(5, 'mamilakha', 'thimphu', 'Dump-sites', '17007867', '27.442430404223', '89.694153070449', 1, '2021-03-30 12:04:16', '2021-03-30 12:04:16');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subtitle` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_dep` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `long_dep` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_two` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `title`, `subtitle`, `image`, `short_dep`, `long_dep`, `image_two`, `created_at`, `updated_at`) VALUES
(6, 'Yaa sangaygag gii view yalamaa', 'lets make Bhutan Cleanfdg', '1012374039.s-1.jpg', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sit voluptatum dignissimos quibusdam ipsa eius qui, alias veritatis iste illo laborum deserunt tempora, voluptas molestiae amet velit nostrum nemo, quo expedita?', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sit voluptatum dignissimos quibusdam ipsa eius qui, alias veritatis iste illo laborum deserunt tempora, voluptas molestiae amet velit nostrum nemo, quo expedita?Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sit voluptatum dignissimos quibusdam ipsa eius qui, alias veritatis iste illo laborum deserunt tempora, voluptas molestiae amet velit nostrum nemo, quo expedita?Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sit voluptatum dignissimos quibusdam ipsa eius qui, alias veritatis iste illo laborum deserunt tempora, voluptas molestiae amet velit nostrum nemo, quo expedita?Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sit voluptatum dignissimos quibusdam ipsa eius qui, alias veritatis iste illo laborum deserunt tempora, voluptas molestiae amet velit nostrum nemo, quo expedita?Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sit voluptatum dignissimos quibusdam ipsa eius qui, alias veritatis iste illo laborum deserunt tempora, voluptas molestiae amet velit nostrum nemo, quo expedita?Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sit voluptatum dignissimos quibusdam ipsa eius qui, alias veritatis iste illo laborum deserunt tempora, voluptas molestiae amet velit nostrum nemo, quo expedita?Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sit voluptatum dignissimos quibusdam ipsa eius qui, alias veritatis iste illo laborum deserunt tempora, voluptas molestiae amet velit nostrum nemo, quo expedita?Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sit voluptatum dignissimos quibusdam ipsa eius qui, alias veritatis iste illo laborum deserunt tempora, voluptas molestiae amet velit nostrum nemo, quo expedita?Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sit voluptatum dignissimos quibusdam ipsa eius qui, alias veritatis iste illo laborum deserunt tempora, voluptas molestiae amet velit nostrum nemo, quo expedita?Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sit voluptatum dignissimos quibusdam ipsa eius qui, alias veritatis iste illo laborum deserunt tempora, voluptas molestiae amet velit nostrum nemo, quo expedita?', 'Exp 1.jpg', '2021-03-23 16:46:57', '2021-03-23 16:46:57'),
(7, 'Lockdown thimphu city', 'lets make Bhutan Cleanfdg', '1848388299.Exp 1.jpg', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sit voluptatum dignissimos quibusdam ipsa eius qui, alias veritatis iste illo laborum deserunt tempora, voluptas molestiae amet velit nostrum nemo, quo expedita?', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sit voluptatum dignissimos quibusdam ipsa eius qui, alias veritatis iste illo laborum deserunt tempora, voluptas molestiae amet velit nostrum nemo, quo expedita?', 's-5.jpg', '2021-03-23 16:47:29', '2021-03-23 16:47:29'),
(8, 'Sem mashi down down', 'lets make Bhutan Cleanfdg', '1324975710.s-2.jpg', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sit voluptatum dignissimos quibusdam ipsa eius qui, alias veritatis iste illo laborum deserunt tempora, voluptas molestiae amet velit nostrum nemo, quo expedita?', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sit voluptatum dignissimos quibusdam ipsa eius qui, alias veritatis iste illo laborum deserunt tempora, voluptas molestiae amet velit nostrum nemo, quo expedita?Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sit voluptatum dignissimos quibusdam ipsa eius qui, alias veritatis iste illo laborum deserunt tempora, voluptas molestiae amet velit nostrum nemo, quo expedita?Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sit voluptatum dignissimos quibusdam ipsa eius qui, alias veritatis iste illo laborum deserunt tempora, voluptas molestiae amet velit nostrum nemo, quo expedita?Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sit voluptatum dignissimos quibusdam ipsa eius qui, alias veritatis iste illo laborum deserunt tempora, voluptas molestiae amet velit nostrum nemo, quo expedita?Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sit voluptatum dignissimos quibusdam ipsa eius qui, alias veritatis iste illo laborum deserunt tempora, voluptas molestiae amet velit nostrum nemo, quo expedita?Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sit voluptatum dignissimos quibusdam ipsa eius qui, alias veritatis iste illo laborum deserunt tempora, voluptas molestiae amet velit nostrum nemo, quo expedita?Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sit voluptatum dignissimos quibusdam ipsa eius qui, alias veritatis iste illo laborum deserunt tempora, voluptas molestiae amet velit nostrum nemo, quo expedita?Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sit voluptatum dignissimos quibusdam ipsa eius qui, alias veritatis iste illo laborum deserunt tempora, voluptas molestiae amet velit nostrum nemo, quo expedita?Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sit voluptatum dignissimos quibusdam ipsa eius qui, alias veritatis iste illo laborum deserunt tempora, voluptas molestiae amet velit nostrum nemo, quo expedita?Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sit voluptatum dignissimos quibusdam ipsa eius qui, alias veritatis iste illo laborum deserunt tempora, voluptas molestiae amet velit nostrum nemo, quo expedita?Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sit voluptatum dignissimos quibusdam ipsa eius qui, alias veritatis iste illo laborum deserunt tempora, voluptas molestiae amet velit nostrum nemo, quo expedita?', 'Exp 1edit.jpg', '2021-03-23 16:48:23', '2021-03-23 16:48:23'),
(9, 'My test data', 'lets make Bhutan Cleanfdg', '1225376982.19-4.jpg', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Earum blanditiis excepturi incidunt odio quod officia in fuga labore deleniti consectetur atque vel voluptatibus, temporibus ducimus delectus voluptates, repellendus reprehenderit magni.', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Earum blanditiis excepturi incidunt odio quod officia in fuga labore deleniti consectetur atque vel voluptatibus, temporibus ducimus delectus voluptates, repellendus reprehenderit magni.Lorem ipsum dolor sit amet consectetur, adipisicing elit. Earum blanditiis excepturi incidunt odio quod officia in fuga labore deleniti consectetur atque vel voluptatibus, temporibus ducimus delectus voluptates, repellendus reprehenderit magni.Lorem ipsum dolor sit amet consectetur, adipisicing elit. Earum blanditiis excepturi incidunt odio quod officia in fuga labore deleniti consectetur atque vel voluptatibus, temporibus ducimus delectus voluptates, repellendus reprehenderit magni.Lorem ipsum dolor sit amet consectetur, adipisicing elit. Earum blanditiis excepturi incidunt odio quod officia in fuga labore deleniti consectetur atque vel voluptatibus, temporibus ducimus delectus voluptates, repellendus reprehenderit magni.Lorem ipsum dolor sit amet consectetur, adipisicing elit. Earum blanditiis excepturi incidunt odio quod officia in fuga labore deleniti consectetur atque vel voluptatibus, temporibus ducimus delectus voluptates, repellendus reprehenderit magni.Lorem ipsum dolor sit amet consectetur, adipisicing elit. Earum blanditiis excepturi incidunt odio quod officia in fuga labore deleniti consectetur atque vel voluptatibus, temporibus ducimus delectus voluptates, repellendus reprehenderit magni.', '19-3.jpg', '2021-03-30 20:31:17', '2021-03-30 20:33:15');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
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
(1, 'Thinley', 'thinleydorji215@gmail.com', NULL, '$2y$10$Ty4ThQx/jg3sHxvwFDnnmeO//jUG//.UzlXv0ubXQAM/qpa0EfCbG', NULL, '2021-03-29 20:17:11', '2021-03-29 20:17:11');

--
-- Indexes for dumped tables
--

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
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `outlets`
--
ALTER TABLE `outlets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `outlets`
--
ALTER TABLE `outlets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
