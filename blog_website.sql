-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 25, 2025 at 11:37 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog_website`
--

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cache`
--

INSERT INTO `cache` (`key`, `value`, `expiration`) VALUES
('laravel-cache-356a192b7913b04c54574d18c28d46e6395428ab', 'i:1;', 1761297045),
('laravel-cache-356a192b7913b04c54574d18c28d46e6395428ab:timer', 'i:1761297045;', 1761297045),
('laravel-cache-livewire-rate-limiter:16d36dff9abd246c67dfac3e63b993a169af77e6', 'i:1;', 1761281608),
('laravel-cache-livewire-rate-limiter:16d36dff9abd246c67dfac3e63b993a169af77e6:timer', 'i:1761281608;', 1761281608);

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `color` varchar(255) NOT NULL DEFAULT '#6366f1',
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `description`, `color`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 'Mysticism', 'mysticism', 'Ancient wisdom and mystical practices', '#8b5cf6', 1, '2025-10-15 04:51:18', '2025-10-15 04:51:18'),
(2, 'Symbolism', 'symbolism', 'Sacred symbols and their meanings', '#06b6d4', 1, '2025-10-15 04:51:27', '2025-10-15 04:51:27'),
(3, 'Meditation', 'meditation', 'Spiritual practices and mindfulness', '#10b981', 1, '2025-10-15 04:51:36', '2025-10-15 04:51:36'),
(4, 'Ajit', 'ajit', 'qwed', '#6366f1', 1, '2025-10-15 05:45:38', '2025-10-15 05:45:38');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2025_10_15_091645_create_posts_table', 2),
(5, '2025_10_15_101911_create_categories_table', 3),
(6, '2025_10_15_102850_add_category_id_to_posts_table', 4),
(7, '2025_10_15_112904_add_meta_fields_to_posts_table', 5);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `slug` varchar(255) NOT NULL,
  `excerpt` varchar(255) DEFAULT NULL,
  `meta_title` varchar(255) DEFAULT NULL,
  `meta_description` text DEFAULT NULL,
  `featured_image` varchar(255) DEFAULT NULL,
  `is_published` tinyint(1) NOT NULL DEFAULT 0,
  `published_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `category_id` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `content`, `slug`, `excerpt`, `meta_title`, `meta_description`, `featured_image`, `is_published`, `published_at`, `created_at`, `updated_at`, `category_id`) VALUES
(1, 'ajit', '<p>asdadad</p><p><img src=\"http://localhost/storage/posts/K71t9BLSSXL86fv2RrgQvBhsWffrbNtoYIgBiKiT.webp\" alt=\"ajit11\" data-id=\"posts/K71t9BLSSXL86fv2RrgQvBhsWffrbNtoYIgBiKiT.webp\"></p>', 'welcome-to-my-occult-blog', 'adq43AWETSRDTUIHOJKPL;qwarsetdxfcgv;kl,.qqsgdfhgjkbnlm,/.,mnbxcvbnm;l;kjgsdfcgvbnm,./', 'Welcome to My Occult Blog - Mystical Journey Begins', 'Discover ancient wisdom, mystical practices, and esoteric knowledge. Join us on a journey into the realm of the occult and spiritual enlightenment.', 'posts/01K7KSNHSH2YHX7173XVY62SCF.jpg', 1, '2025-10-15 05:42:26', '2025-10-15 04:29:09', '2025-10-24 00:30:07', 4),
(2, 'zodiac sign by name alphabets​', '<p><strong>Find Your Zodiac Sign by Name Alphabet</strong></p><p>Did you know your name has power? Yes! In astrology, there’s something called the Alphabet Horoscope. It means every letter in your name carries a special kind of energy.</p><p>This energy is linked to your zodiac sign (also called <em>Rashi</em>) and can tell a lot about your personality and how you behave.</p><p>In this blog, we will explore <strong>zodiac sign by name alphabets</strong>, why each letter is important in astrology, and how these letters can reveal things about love, friendship, and more!</p><h3><strong>Zodiac Sign by Name Alphabets</strong></h3><p style=\"text-align: center;\">Each zodiac sign has certain letters linked to it. Let’s see what they are and what they mean!</p><ol start=\"1\"><li><p><strong>1. Aries (Mesh Rashi)</strong></p></li><li><p><strong>Letters:</strong> Chu, Che, Cho, La, Lee, Lu, Le, Lo, A</p></li><li><p>Aries people are brave, full of energy, and great leaders. They love taking action and trying new things.</p></li><li><p><strong>2. Taurus (Vrishabha Rashi)</strong></p></li></ol><p><strong>Letters:</strong> Ee, U, Aa, O, Va, Vi, Vu, Ve, Vo</p><p>Taurus people are calm, patient, and love comfort. They enjoy beauty, good food, and peaceful surroundings.</p><table><tbody><tr><th rowspan=\"1\" colspan=\"1\" data-colwidth=\"89\"><p>hh</p></th><th rowspan=\"1\" colspan=\"1\" data-colwidth=\"174\"><p>uu</p></th><th rowspan=\"1\" colspan=\"1\" data-colwidth=\"168\"><p>hh</p></th></tr><tr><td rowspan=\"1\" colspan=\"1\" data-colwidth=\"89\"><p></p></td><td rowspan=\"1\" colspan=\"1\" data-colwidth=\"174\"><p></p></td><td rowspan=\"1\" colspan=\"1\" data-colwidth=\"168\"><p></p></td></tr></tbody></table><p><img src=\"http://localhost/storage/V6inNwSfgeXRPdzg8pwadlmIllVCIkaLcNTEPC6I.jpg\" alt=\"ajit\" data-id=\"V6inNwSfgeXRPdzg8pwadlmIllVCIkaLcNTEPC6I.jpg\"><strong>4. Cancer (Karka Rashi)</strong></p><p><strong>Letters:</strong> Hee, Hoo, He, Ho, Da, Dee, Doo, De, Do</p><p>This<strong> zodiac sign by name alphabets </strong>people are caring and emotional. They love their family and always try to make others feel safe.</p><h3><strong>5. Leo (Simha Rashi)</strong></h3><p><strong>Letters:</strong> Maa, Mee, Moo, Me, Mo, Ta, Tee, Too, Te</p><p>Leos are confident, bold, and love being noticed. They shine in everything they do.</p><h3><strong>6. Virgo (Kanya Rashi)</strong></h3><p><strong>Letters:</strong> To, Pa, Pee, Poo, Sha, Na, Tha, Pe, Po</p><p>Virgos are hardworking and careful. They like things to be neat and well-planned.</p><h3><strong>7. Libra (Tula Rashi)</strong></h3><p><strong>Letters:</strong> Ra, Ree, Ru, Re, Ro, Ta, Tee, Tu, Te</p><p>Libras are friendly, peaceful, and fair. They love harmony and enjoy helping others.</p><h3><strong>8. Scorpio (Vrishchik Rashi)</strong></h3><p><strong>Letters:</strong> To, Na, Nee, Nu, Ne, No, Ya, Ye, Yu</p><p>Scorpios are strong, mysterious, and loyal. They care deeply and keep secrets well.</p><h3><strong>9. Sagittarius (Dhanu Rashi)</strong></h3><p><strong>Letters:</strong> Ye, Yo, Bha, Bhee, Bhu, Dha, Pha, Bhe</p><p>This <strong>zodiac sign by name alphabets </strong>people are adventurous and love freedom. They are honest, fun, and full of wisdom.</p><h3><strong>10. Capricorn (Makar Rashi)</strong></h3><p><strong>Letters:</strong> Bho, Ja, Jee, Ju, Je, Jo, Kha, Khi, Khu, Khe, Kho, Ga, Gi</p><p>Capricorns are focused and disciplined. They work hard to reach their goals and never give up easily.</p><h3><strong>11. Aquarius (Kumbh Rashi)</strong></h3><p><strong>Letters:</strong> Goo, Ge, Go, Sa, See, Su, Se, So, Da</p><p>Aquarians are creative and open-minded. They love helping others and thinking in new ways.</p><p></p>', 'zodiac', 'Find Your Zodiac Sign by Name Alphabet Did you know your name has power? Yes! In astrology, there’s something', 'Welcome to My Occult Blog - Mystical Journey Begins', 'Find Your Zodiac Sign by Name Alphabet Did you know your name has power? Yes! In astrology, there’s something', 'posts/01K7V6WGGC0G36BB098ZNRRC1Z.png', 1, '2025-10-19 11:13:07', '2025-10-18 02:57:25', '2025-10-24 00:04:28', 4),
(4, 'zodiac sign ram ram ', '<h1><strong>Find Your Zodiac Sign by Name Alphabet</strong></h1><p>Did you know your name has power? Yes! In astrology, there’s something called the Alphabet Horoscope. It means every letter in your name carries a special kind of energy.</p><p>This energy is linked to your zodiac sign (also called <em>Rashi</em>) and can tell a lot about your personality and how you behave.</p><p>In this blog, we will explore <strong>zodiac sign by name alphabets</strong>, why each letter is important in astrology, and how these letters can reveal things about love, friendship, and more!</p><h2><strong>Zodiac Sign by Name Alphabets</strong></h2><p>Each zodiac sign has certain letters linked to it. Let’s see what they are and what they mean!</p><h3><strong>1. Aries (Mesh Rashi)</strong></h3><p><strong>Letters:</strong> Chu, Che, Cho, La, Lee, Lu, Le, Lo, A</p><p>Aries people are brave, full of energy, and great leaders. They love taking action and trying new things.</p><h3><strong>2. Taurus (Vrishabha Rashi)</strong></h3><p><strong>Letters:</strong> Ee, U, Aa, O, Va, Vi, Vu, Ve, Vo</p><p>Taurus people are calm, patient, and love comfort. They enjoy beauty, good food, and peaceful surroundings.</p><h3><strong>3. Gemini (Mithun Rashi)</strong></h3><p><strong>Letters:</strong> Ka, Kee, Ku, Gha, D, Chha, Ke, Ko, Ha</p><p>Geminis are curious, talkative, and smart. They love learning new things and sharing ideas.</p><h3><strong>4. Cancer (Karka Rashi)</strong></h3><p><strong>Letters:</strong> Hee, Hoo, He, Ho, Da, Dee, Doo, De, Do</p><p>This<strong> zodiac sign by name alphabets </strong>people are caring and emotional. They love their family and always try to make others feel safe.</p><h3><strong>5. Leo (Simha Rashi)</strong></h3><p><strong>Letters:</strong> Maa, Mee, Moo, Me, Mo, Ta, Tee, Too, Te</p><p>Leos are confident, bold, and love being noticed. They shine in everything they do.</p><h3><strong>6. Virgo (Kanya Rashi)</strong></h3><p><strong>Letters:</strong> To, Pa, Pee, Poo, Sha, Na, Tha, Pe, Po</p><p>Virgos are hardworking and careful. They like things to be neat and well-planned.</p><h3><strong>7. Libra (Tula Rashi)</strong></h3><p><strong>Letters:</strong> Ra, Ree, Ru, Re, Ro, Ta, Tee, Tu, Te</p><p>Libras are friendly, peaceful, and fair. They love harmony and enjoy helping others.</p><h3><strong>8. Scorpio (Vrishchik Rashi)</strong></h3><p><strong>Letters:</strong> To, Na, Nee, Nu, Ne, No, Ya, Ye, Yu</p><p>Scorpios are strong, mysterious, and loyal. They care deeply and keep secrets well.</p><h3><strong>9. Sagittarius (Dhanu Rashi)</strong></h3><p><strong>Letters:</strong> Ye, Yo, Bha, Bhee, Bhu, Dha, Pha, Bhe</p><p>This <strong>zodiac sign by name alphabets </strong>people are adventurous and love freedom. They are honest, fun, and full of wisdom.</p><h3><strong>10. Capricorn (Makar Rashi)</strong></h3><p><strong>Letters:</strong> Bho, Ja, Jee, Ju, Je, Jo, Kha, Khi, Khu, Khe, Kho, Ga, Gi</p><p>Capricorns are focused and disciplined. They work hard to reach their goals and never give up easily.</p><h3><strong>11. Aquarius (Kumbh Rashi)</strong></h3><p><strong>Letters:</strong> Goo, Ge, Go, Sa, See, Su, Se, So, Da</p><p>Aquarians are creative and open-minded. They love helping others and thinking in new ways.</p><h3><strong>12. Pisces (Meen Rashi)</strong></h3><p><strong>Letters:</strong> Di, Du, Th, Jh, Yn, De, Do, Cha, Chi</p><p>Pisces people are kind, artistic, and emotional. They have big hearts and care deeply for others.</p><p><strong>Also Read: </strong><a target=\"_blank\" rel=\"noopener noreferrer nofollow\" href=\"https://blog.occultscience.in/right-eye-blinking-for-female/\">Right Eye Blinking (Twitching) For Female Astrology Meaning</a></p><h2><strong>What Is Alphabet Horoscope?</strong></h2><p>Alphabet Horoscope is the idea that each letter from A to Z has its own power. This power is linked to:</p><ul><li><p>The planets at the time you were born (your birth chart).</p></li><li><p>Your Rashi (moon sign in <a target=\"_blank\" rel=\"noopener noreferrer nofollow\" href=\"https://www.occultscience.in/astrology-course/\">Vedic astrology</a>).</p></li><li><p></p></li><li><p>Your personality and habits.</p></li></ul><p>That’s why some people believe that changing the spelling of their name or using a lucky letter can bring them good luck and peace. Many parents also use this idea when choosing names for their babies.</p><h2><strong>Why Alphabet Horoscope Is Important</strong></h2><p>Alphabet Horoscope is not something that controls your life. It’s more like a helpful guide. It can help you:</p><ul><li><p>Choose a name that has a good meaning.</p></li><li><p>Understand your strengths and weaknesses.</p></li><li><p>Feel confident by knowing your zodiac traits.</p></li><li><p>Make friends and relationships more fun and positive.</p></li></ul><p>In Vedic astrology, people believe that names have strong vibrations. Because of this, many still follow this system today.</p><h2><strong>Importance of Letters in Astrology</strong></h2><p>In Vedic astrology, the first letter of your name is very special. It’s usually chosen based on your birth star (called <em>Nakshatra</em>). Each star has its own set of lucky letters.</p><p><strong>For example:</strong></p><ul><li><p>A baby born under one star might have a name starting with A or L.</p></li><li><p>Another baby might have a name starting with K or M.</p></li></ul><p>In numerology (the study of numbers), every letter is also linked to a number and a planet. Some letters are said to bring good luck, while others may bring small challenges.<img src=\"http://localhost/storage/HXaVUiysjoPnYx8Acbizxm4KFGMFuo3IDbNfESoA.jpg\" alt=\"convocation\" data-id=\"HXaVUiysjoPnYx8Acbizxm4KFGMFuo3IDbNfESoA.jpg\"></p>', 'zodi11', 'Find Your Zodiac Sign by Name Alphabet Did you know your name has power? Yes! In astrology, there’s something', 'Welcome to My Occult Blog - Mystical Journey Begins', 'Find Your Zodiac Sign by Name Alphabet Did you know your name has power? Yes! In astrology, there’s something', 'posts/01K8ABQNMTW39NJE9GMNVX6AK9.jpg', 1, '2025-10-24 05:40:58', '2025-10-24 00:10:45', '2025-10-24 00:11:04', 4),
(5, 'zodiac sign ram ram shu=yaj', '<p>efvv</p>', 'zodi12', 'wfefv efvefv fevefv', 'Welcome to My Occult Blog - Mystical Journey Begins', 'refev', 'posts/01K8ANSJFE5QQ64JYK2BHTZ5XE.jpg', 1, '2025-10-24 08:36:15', '2025-10-24 03:06:33', '2025-10-24 03:06:33', 4),
(6, 'zodiac sign ram ram shu=yaj', '<p>fhgjvbjknjhdsesrdtfgh</p>', 'zodi13', 'vhbjn', 'Welcome to My Occult Blog - Mystical Journey Begins', 'hj', 'posts/01K8APQ1BV2EA80H69B029TG82.jpg', 1, '2025-10-24 08:52:33', '2025-10-24 03:22:39', '2025-10-24 03:22:39', 4),
(7, 'xys', '<h1><strong>Find Your Zodiac Sign by Name Alphabet</strong></h1><p>Did you know your name has power? Yes! In astrology, there’s something called the Alphabet Horoscope. It means every letter in your name carries a special kind of energy.</p><p>This energy is linked to your zodiac sign (also called <em>Rashi</em>) and can tell a lot about your personality and how you behave.</p><p>In this blog, we will explore <strong>zodiac sign by name alphabets</strong>, why each letter is important in astrology, and how these letters can reveal things about love, friendship, and more!</p><h2><strong>Zodiac Sign by Name Alphabets</strong></h2><p>Each zodiac sign has certain letters linked to it. Let’s see what they are and what they mean!</p><h3><strong>1. Aries (Mesh Rashi)</strong></h3><p><strong>Letters:</strong> Chu, Che, Cho, La, Lee, Lu, Le, Lo, A</p><p>Aries people are brave, full of energy, and great leaders. They love taking action and trying new things.</p><h3><strong>2. Taurus (Vrishabha Rashi)</strong></h3><p><strong>Letters:</strong> Ee, U, Aa, O, Va, Vi, Vu, Ve, Vo</p><p>Taurus people are calm, patient, and love comfort. They enjoy beauty, good food, and peaceful surroundings.</p><h3><strong>3. Gemini (Mithun Rashi)</strong></h3><p><strong>Letters:</strong> Ka, Kee, Ku, Gha, D, Chha, Ke, Ko, Ha</p><p>Geminis are curious, talkative, and smart. They love learning new things and sharing ideas.</p><h3><strong>4. Cancer (Karka Rashi)</strong></h3><p><strong>Letters:</strong> Hee, Hoo, He, Ho, Da, Dee, Doo, De, Do</p><p>This<strong> zodiac sign by name alphabets </strong>people are caring and emotional. They love their family and always try to make others feel safe.</p><h3><strong>5. Leo (Simha Rashi)</strong></h3><p><strong>Letters:</strong> Maa, Mee, Moo, Me, Mo, Ta, Tee, Too, Te</p><p>Leos are confident, bold, and love being noticed. They shine in everything they do.</p><h3><strong>6. Virgo (Kanya Rashi)</strong></h3><p><strong>Letters:</strong> To, Pa, Pee, Poo, Sha, Na, Tha, Pe, Po</p><p>Virgos are hardworking and careful. They like things to be neat and well-planned.</p><h3><strong>7. Libra (Tula Rashi)</strong></h3><p><strong>Letters:</strong> Ra, Ree, Ru, Re, Ro, Ta, Tee, Tu, Te</p><p>Libras are friendly, peaceful, and fair. They love harmony and enjoy helping others.</p><h3><strong>8. Scorpio (Vrishchik Rashi)</strong></h3><p><strong>Letters:</strong> To, Na, Nee, Nu, Ne, No, Ya, Ye, Yu</p><h1><strong>Find Your Zodiac Sign by Name Alphabet</strong></h1><p>Did you know your name has power? Yes! In astrology, there’s something called the Alphabet Horoscope. It means every letter in your name carries a special kind of energy.</p><p>This energy is linked to your zodiac sign (also called <em>Rashi</em>) and can tell a lot about your personality and how you behave.</p><p>In this blog, we will explore <strong>zodiac sign by name alphabets</strong>, why each letter is important in astrology, and how these letters can reveal things about love, friendship, and more!</p><h2><strong>Zodiac Sign by Name Alphabets</strong></h2><p>Each zodiac sign has certain letters linked to it. Let’s see what they are and what they mean!</p><h3><strong>1. Aries (Mesh Rashi)</strong></h3><p><strong>Letters:</strong> Chu, Che, Cho, La, Lee, Lu, Le, Lo, A</p><p>Aries people are brave, full of energy, and great leaders. They love taking action and trying new things.</p><h3><strong>2. Taurus (Vrishabha Rashi)</strong></h3><p><strong>Letters:</strong> Ee, U, Aa, O, Va, Vi, Vu, Ve, Vo</p><p>Taurus people are calm, patient, and love comfort. They enjoy beauty, good food, and peaceful surroundings.</p><h3><strong>3. Gemini (Mithun Rashi)</strong></h3><p><strong>Letters:</strong> Ka, Kee, Ku, Gha, D, Chha, Ke, Ko, Ha</p><p>Geminis are curious, talkative, and smart. They love learning new things and sharing ideas.</p><h3><strong>4. Cancer (Karka Rashi)</strong></h3><p><strong>Letters:</strong> Hee, Hoo, He, Ho, Da, Dee, Doo, De, Do</p><p>This<strong> zodiac sign by name alphabets </strong>people are caring and emotional. They love their family and always try to make others feel safe.</p><h3><strong>5. Leo (Simha Rashi)</strong></h3><p><strong>Letters:</strong> Maa, Mee, Moo, Me, Mo, Ta, Tee, Too, Te</p><p>Leos are confident, bold, and love being noticed. They shine in everything they do.</p><h3><strong>6. Virgo (Kanya Rashi)</strong></h3><p><strong>Letters:</strong> To, Pa, Pee, Poo, Sha, Na, Tha, Pe, Po</p><p>Virgos are hardworking and careful. They like things to be neat and well-planned.</p><h3><strong>7. Libra (Tula Rashi)</strong></h3><p><strong>Letters:</strong> Ra, Ree, Ru, Re, Ro, Ta, Tee, Tu, Te</p><p>Libras are friendly, peaceful, and fair. They love harmony and enjoy helping others.</p><h3><strong>8. Scorpio (Vrishchik Rashi)</strong></h3><p><strong>Letters:</strong> To, Na, Nee, Nu, Ne, No, Ya, Ye, Yu</p>', 'zodi16', 'esrtyui', 'Welcome to My Occult Blog - Mystical Journey Begins', 'seghj', 'posts/01K8AQQA1E4QRCFW86QAQ2VD16.jpg', 1, '2025-10-24 09:13:15', '2025-10-24 03:40:16', '2025-10-24 03:43:27', 4);

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('QV3VqiDX2ngjajsfSQ2JA6unAxHIlm6OJ0bgqY0A', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/141.0.0.0 Safari/537.36 Edg/141.0.0.0', 'YTo4OntzOjY6Il90b2tlbiI7czo0MDoidFB3RXhleEI5cmtRclB3U3p3QmVXTnZjU3lDZmVicDI5VFRZVXVPVSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6MzoidXJsIjthOjA6e31zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO3M6MTc6InBhc3N3b3JkX2hhc2hfd2ViIjtzOjYwOiIkMnkkMTIkUHJOYnhvQkRYSm9TMTE2VkNXdmpsdThpNlg2bU5oZTQzbDVBOHVzYVZrREJabVFRa0pOTW0iO3M6NjoidGFibGVzIjthOjI6e3M6NDA6ImRkYzFkMDhlYmVmYTY1MjI5MDNhYjFmMzdjM2NiOGFjX2NvbHVtbnMiO2E6Njp7aTowO2E6Nzp7czo0OiJ0eXBlIjtzOjY6ImNvbHVtbiI7czo0OiJuYW1lIjtzOjQ6Im5hbWUiO3M6NToibGFiZWwiO3M6NDoiTmFtZSI7czo4OiJpc0hpZGRlbiI7YjowO3M6OToiaXNUb2dnbGVkIjtiOjE7czoxMjoiaXNUb2dnbGVhYmxlIjtiOjA7czoyNDoiaXNUb2dnbGVkSGlkZGVuQnlEZWZhdWx0IjtOO31pOjE7YTo3OntzOjQ6InR5cGUiO3M6NjoiY29sdW1uIjtzOjQ6Im5hbWUiO3M6NDoic2x1ZyI7czo1OiJsYWJlbCI7czo0OiJTbHVnIjtzOjg6ImlzSGlkZGVuIjtiOjA7czo5OiJpc1RvZ2dsZWQiO2I6MTtzOjEyOiJpc1RvZ2dsZWFibGUiO2I6MDtzOjI0OiJpc1RvZ2dsZWRIaWRkZW5CeURlZmF1bHQiO047fWk6MjthOjc6e3M6NDoidHlwZSI7czo2OiJjb2x1bW4iO3M6NDoibmFtZSI7czo1OiJjb2xvciI7czo1OiJsYWJlbCI7czo1OiJDb2xvciI7czo4OiJpc0hpZGRlbiI7YjowO3M6OToiaXNUb2dnbGVkIjtiOjE7czoxMjoiaXNUb2dnbGVhYmxlIjtiOjA7czoyNDoiaXNUb2dnbGVkSGlkZGVuQnlEZWZhdWx0IjtOO31pOjM7YTo3OntzOjQ6InR5cGUiO3M6NjoiY29sdW1uIjtzOjQ6Im5hbWUiO3M6OToiaXNfYWN0aXZlIjtzOjU6ImxhYmVsIjtzOjY6IkFjdGl2ZSI7czo4OiJpc0hpZGRlbiI7YjowO3M6OToiaXNUb2dnbGVkIjtiOjE7czoxMjoiaXNUb2dnbGVhYmxlIjtiOjA7czoyNDoiaXNUb2dnbGVkSGlkZGVuQnlEZWZhdWx0IjtOO31pOjQ7YTo3OntzOjQ6InR5cGUiO3M6NjoiY29sdW1uIjtzOjQ6Im5hbWUiO3M6MTE6InBvc3RzX2NvdW50IjtzOjU6ImxhYmVsIjtzOjU6IlBvc3RzIjtzOjg6ImlzSGlkZGVuIjtiOjA7czo5OiJpc1RvZ2dsZWQiO2I6MTtzOjEyOiJpc1RvZ2dsZWFibGUiO2I6MDtzOjI0OiJpc1RvZ2dsZWRIaWRkZW5CeURlZmF1bHQiO047fWk6NTthOjc6e3M6NDoidHlwZSI7czo2OiJjb2x1bW4iO3M6NDoibmFtZSI7czoxMDoiY3JlYXRlZF9hdCI7czo1OiJsYWJlbCI7czoxMDoiQ3JlYXRlZCBhdCI7czo4OiJpc0hpZGRlbiI7YjowO3M6OToiaXNUb2dnbGVkIjtiOjA7czoxMjoiaXNUb2dnbGVhYmxlIjtiOjE7czoyNDoiaXNUb2dnbGVkSGlkZGVuQnlEZWZhdWx0IjtiOjE7fX1zOjQwOiJhNjA3Y2RhNzNjYmRlNDQ2ZjhiYjY0Y2NkNzU2MDZlZV9jb2x1bW5zIjthOjk6e2k6MDthOjc6e3M6NDoidHlwZSI7czo2OiJjb2x1bW4iO3M6NDoibmFtZSI7czo1OiJ0aXRsZSI7czo1OiJsYWJlbCI7czo1OiJUaXRsZSI7czo4OiJpc0hpZGRlbiI7YjowO3M6OToiaXNUb2dnbGVkIjtiOjE7czoxMjoiaXNUb2dnbGVhYmxlIjtiOjA7czoyNDoiaXNUb2dnbGVkSGlkZGVuQnlEZWZhdWx0IjtOO31pOjE7YTo3OntzOjQ6InR5cGUiO3M6NjoiY29sdW1uIjtzOjQ6Im5hbWUiO3M6NDoic2x1ZyI7czo1OiJsYWJlbCI7czo0OiJTbHVnIjtzOjg6ImlzSGlkZGVuIjtiOjA7czo5OiJpc1RvZ2dsZWQiO2I6MTtzOjEyOiJpc1RvZ2dsZWFibGUiO2I6MDtzOjI0OiJpc1RvZ2dsZWRIaWRkZW5CeURlZmF1bHQiO047fWk6MjthOjc6e3M6NDoidHlwZSI7czo2OiJjb2x1bW4iO3M6NDoibmFtZSI7czoxMzoiY2F0ZWdvcnkubmFtZSI7czo1OiJsYWJlbCI7czo4OiJDYXRlZ29yeSI7czo4OiJpc0hpZGRlbiI7YjowO3M6OToiaXNUb2dnbGVkIjtiOjE7czoxMjoiaXNUb2dnbGVhYmxlIjtiOjA7czoyNDoiaXNUb2dnbGVkSGlkZGVuQnlEZWZhdWx0IjtOO31pOjM7YTo3OntzOjQ6InR5cGUiO3M6NjoiY29sdW1uIjtzOjQ6Im5hbWUiO3M6MTQ6ImZlYXR1cmVkX2ltYWdlIjtzOjU6ImxhYmVsIjtzOjE0OiJGZWF0dXJlZCBpbWFnZSI7czo4OiJpc0hpZGRlbiI7YjowO3M6OToiaXNUb2dnbGVkIjtiOjE7czoxMjoiaXNUb2dnbGVhYmxlIjtiOjA7czoyNDoiaXNUb2dnbGVkSGlkZGVuQnlEZWZhdWx0IjtOO31pOjQ7YTo3OntzOjQ6InR5cGUiO3M6NjoiY29sdW1uIjtzOjQ6Im5hbWUiO3M6MTI6ImlzX3B1Ymxpc2hlZCI7czo1OiJsYWJlbCI7czoxMjoiSXMgcHVibGlzaGVkIjtzOjg6ImlzSGlkZGVuIjtiOjA7czo5OiJpc1RvZ2dsZWQiO2I6MTtzOjEyOiJpc1RvZ2dsZWFibGUiO2I6MDtzOjI0OiJpc1RvZ2dsZWRIaWRkZW5CeURlZmF1bHQiO047fWk6NTthOjc6e3M6NDoidHlwZSI7czo2OiJjb2x1bW4iO3M6NDoibmFtZSI7czoxMjoicHVibGlzaGVkX2F0IjtzOjU6ImxhYmVsIjtzOjEyOiJQdWJsaXNoZWQgYXQiO3M6ODoiaXNIaWRkZW4iO2I6MDtzOjk6ImlzVG9nZ2xlZCI7YjoxO3M6MTI6ImlzVG9nZ2xlYWJsZSI7YjowO3M6MjQ6ImlzVG9nZ2xlZEhpZGRlbkJ5RGVmYXVsdCI7Tjt9aTo2O2E6Nzp7czo0OiJ0eXBlIjtzOjY6ImNvbHVtbiI7czo0OiJuYW1lIjtzOjEwOiJtZXRhX3RpdGxlIjtzOjU6ImxhYmVsIjtzOjEwOiJNZXRhIFRpdGxlIjtzOjg6ImlzSGlkZGVuIjtiOjA7czo5OiJpc1RvZ2dsZWQiO2I6MDtzOjEyOiJpc1RvZ2dsZWFibGUiO2I6MTtzOjI0OiJpc1RvZ2dsZWRIaWRkZW5CeURlZmF1bHQiO2I6MTt9aTo3O2E6Nzp7czo0OiJ0eXBlIjtzOjY6ImNvbHVtbiI7czo0OiJuYW1lIjtzOjEwOiJjcmVhdGVkX2F0IjtzOjU6ImxhYmVsIjtzOjEwOiJDcmVhdGVkIGF0IjtzOjg6ImlzSGlkZGVuIjtiOjA7czo5OiJpc1RvZ2dsZWQiO2I6MDtzOjEyOiJpc1RvZ2dsZWFibGUiO2I6MTtzOjI0OiJpc1RvZ2dsZWRIaWRkZW5CeURlZmF1bHQiO2I6MTt9aTo4O2E6Nzp7czo0OiJ0eXBlIjtzOjY6ImNvbHVtbiI7czo0OiJuYW1lIjtzOjEwOiJ1cGRhdGVkX2F0IjtzOjU6ImxhYmVsIjtzOjEwOiJVcGRhdGVkIGF0IjtzOjg6ImlzSGlkZGVuIjtiOjA7czo5OiJpc1RvZ2dsZWQiO2I6MDtzOjEyOiJpc1RvZ2dsZWFibGUiO2I6MTtzOjI0OiJpc1RvZ2dsZWRIaWRkZW5CeURlZmF1bHQiO2I6MTt9fX1zOjg6ImZpbGFtZW50IjthOjA6e319', 1761309121),
('SUQcnMsF0Dv13B0rlJRnAMyzSLZ1mR0VEJEX0AUs', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/141.0.0.0 Safari/537.36 Edg/141.0.0.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiUHAxVktxR1JNQWdoY1pMMWJ0WGJTMFBJS0pFVnhqT2xqNGtjZVZ3bCI7czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7czo1OiJyb3V0ZSI7Tjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1761383619),
('WQRAjDG7PvJknieqgr6oyQT2JFKFzvoicY2xJdlu', NULL, '127.0.0.1', 'Mozilla/5.0 (iPhone; CPU iPhone OS 18_5 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/18.5 Mobile/15E148 Safari/604.1 Edg/141.0.0.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiQ3ZoWU94RTVaUkdOdDZwRVVSTkdYRGNEWVZVWG9yWHB0dkxEQXhPVCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1761322757),
('YxwIr4Ghb7yOHXzxS3bsercY0QXaEUxICiOXSyvU', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/141.0.0.0 Safari/537.36 Edg/141.0.0.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiR05RZ0VGeUxyaW4xT0FRWmkyUWp3a1VlaGRXZUZJZE1La2JaeVVQRyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1761384937);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@gmail.com', NULL, '$2y$12$PrNbxoBDXJoS116VCWvjlu8i6X6mNhe43l5A8usaVkDBZmQQkJNMm', NULL, '2025-10-15 02:14:47', '2025-10-15 02:14:47');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_slug_unique` (`slug`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `posts_slug_unique` (`slug`),
  ADD KEY `posts_category_id_foreign` (`category_id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

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
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE SET NULL;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
