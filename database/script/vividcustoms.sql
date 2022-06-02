-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-03-2019 a las 22:18:59
-- Versión del servidor: 10.1.25-MariaDB
-- Versión de PHP: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `vividcustoms`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `aditional_images`
--

CREATE TABLE `aditional_images` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `aditional_images`
--

INSERT INTO `aditional_images` (`id`, `name`, `file`, `created_at`, `updated_at`) VALUES
(1, 'Adult_Heavy_Blend_Hood_aditional_0', 'Adult_Heavy_Blend_Hood_aditional_0.png', '2019-03-07 01:17:29', '2019-03-07 01:17:29');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `audits`
--

CREATE TABLE `audits` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `event` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `auditable_id` int(10) UNSIGNED NOT NULL,
  `auditable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `old_values` text COLLATE utf8mb4_unicode_ci,
  `new_values` text COLLATE utf8mb4_unicode_ci,
  `url` text COLLATE utf8mb4_unicode_ci,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tags` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `audits`
--

INSERT INTO `audits` (`id`, `user_id`, `event`, `auditable_id`, `auditable_type`, `old_values`, `new_values`, `url`, `ip_address`, `user_agent`, `tags`, `created_at`, `updated_at`) VALUES
(1, 1, 'created', 1, 'App\\Product', '[]', '{\"stylenumber\":\"G185\",\"fabric\":\"Cotton\\/Poly\",\"visibility\":\"Visible\",\"name\":\"Adult Heavy Blend Hood\",\"price\":\"15\",\"min_quantity\":\"1\",\"status\":\"Enable\",\"image\":\"Adult_Heavy_Blend_Hood.png\",\"description\":\"<p>\\r\\n\\r\\nAdult Heavy Blend 8 oz Hood <\\/p><p><br><\\/p><p>Fabric: 50% Cotton, 50% Polyester<\\/p><p>All Heather Sport colors are 60% cotton, 40% polyester<\\/p>\\r\\n\\r\\n<br><p><\\/p>\",\"brand\":\"Gildan\",\"sizechartimage\":\"\",\"sizechartdescription\":\"<p>\\r\\n\\r\\n<\\/p><p>Length: Measure from shoulder seam at the collar to bottom hem.<\\/p><p><br><\\/p><p>Width:  Measure across the chest an inch below the armpit<\\/p>\\r\\n\\r\\n<br><p><\\/p>\",\"frontimage\":\"Adult_Heavy_Blend_Hood_front.png\",\"frontenable\":true,\"frontguidelineshorizontal\":true,\"frontguidelinesvertical\":true,\"frontguidelinesyouth\":true,\"frontguidelinesadult\":false,\"frontguidelinesleftchest\":false,\"frontwidth\":\"335\",\"frontheight\":\"335\",\"frontleft\":\"215\",\"fronttop\":\"120\",\"rightimage\":\"Adult_Heavy_Blend_Hood_right.png\",\"rightenable\":true,\"rightguidelineshorizontal\":true,\"rightguidelinesvertical\":true,\"rightguidelinesyouth\":false,\"rightguidelinesadult\":false,\"rightguidelinesleftchest\":false,\"rightwidth\":\"115\",\"rightheight\":\"438\",\"rightleft\":\"280\",\"righttop\":\"160\",\"backimage\":\"Adult_Heavy_Blend_Hood_back.png\",\"backenable\":true,\"backguidelineshorizontal\":true,\"backguidelinesvertical\":true,\"backguidelinesyouth\":false,\"backguidelinesadult\":false,\"backguidelinesleftchest\":false,\"backwidth\":\"350\",\"backheight\":\"467\",\"backleft\":\"205\",\"backtop\":\"150\",\"leftimage\":\"Adult_Heavy_Blend_Hood_left.png\",\"leftenable\":true,\"leftguidelineshorizontal\":true,\"leftguidelinesvertical\":true,\"leftguidelinesyouth\":false,\"leftguidelinesadult\":false,\"leftguidelinesleftchest\":false,\"leftwidth\":\"115\",\"leftheight\":\"438\",\"leftleft\":\"349\",\"lefttop\":\"160\",\"_INFANT\":null,\"_INFANTWHITE\":null,\"_TODDLER\":null,\"_TODDLERWHITE\":null,\"_YOUTH\":null,\"_YOUTHWHITE\":null,\"_ADULT\":null,\"_ADULTWHITE\":null,\"_2xl\":null,\"_2xlWHITE\":null,\"_3xl\":null,\"_3xlWHITE\":null,\"_4xl\":null,\"_4xlWHITE\":null,\"_5xl\":null,\"_5xlWHITE\":null,\"_ONE_SIZE\":null,\"_ONE_SIZEWHITE\":null,\"id\":1}', 'http://vividcustoms.test/admin/products/store', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/72.0.3626.119 Safari/537.36', NULL, '2019-03-07 01:17:29', '2019-03-07 01:17:29'),
(2, 1, 'created', 1, 'App\\SizeChart', '[]', '{\"size\":\"YXS\",\"width\":\"16\\\"\",\"length\":\"19.75\\\"\",\"id\":1}', 'http://vividcustoms.test/admin/products/store', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/72.0.3626.119 Safari/537.36', NULL, '2019-03-07 01:17:29', '2019-03-07 01:17:29'),
(3, 1, 'created', 2, 'App\\SizeChart', '[]', '{\"size\":\"YS\",\"width\":\"17\\\"\",\"length\":\"21.25\\\"\",\"id\":2}', 'http://vividcustoms.test/admin/products/store', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/72.0.3626.119 Safari/537.36', NULL, '2019-03-07 01:17:29', '2019-03-07 01:17:29'),
(4, 1, 'created', 3, 'App\\SizeChart', '[]', '{\"size\":\"YM\",\"width\":\"18\\\"\",\"length\":\"22.5\\\"\",\"id\":3}', 'http://vividcustoms.test/admin/products/store', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/72.0.3626.119 Safari/537.36', NULL, '2019-03-07 01:17:29', '2019-03-07 01:17:29'),
(5, 1, 'created', 4, 'App\\SizeChart', '[]', '{\"size\":\"YL\",\"width\":\"19\\\"\",\"length\":\"24\\\"\",\"id\":4}', 'http://vividcustoms.test/admin/products/store', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/72.0.3626.119 Safari/537.36', NULL, '2019-03-07 01:17:29', '2019-03-07 01:17:29'),
(6, 1, 'created', 5, 'App\\SizeChart', '[]', '{\"size\":\"YXL\",\"width\":\"20\\\"\",\"length\":\"25.5\\\"\",\"id\":5}', 'http://vividcustoms.test/admin/products/store', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/72.0.3626.119 Safari/537.36', NULL, '2019-03-07 01:17:29', '2019-03-07 01:17:29'),
(7, 1, 'created', 6, 'App\\SizeChart', '[]', '{\"size\":\"S\",\"width\":\"20\\\"\",\"length\":\"26\\\"\",\"id\":6}', 'http://vividcustoms.test/admin/products/store', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/72.0.3626.119 Safari/537.36', NULL, '2019-03-07 01:17:29', '2019-03-07 01:17:29'),
(8, 1, 'created', 7, 'App\\SizeChart', '[]', '{\"size\":\"M\",\"width\":\"22\\\"\",\"length\":\"27\\\"\",\"id\":7}', 'http://vividcustoms.test/admin/products/store', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/72.0.3626.119 Safari/537.36', NULL, '2019-03-07 01:17:29', '2019-03-07 01:17:29'),
(9, 1, 'created', 8, 'App\\SizeChart', '[]', '{\"size\":\"L\",\"width\":\"24\\\"\",\"length\":\"28\\\"\",\"id\":8}', 'http://vividcustoms.test/admin/products/store', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/72.0.3626.119 Safari/537.36', NULL, '2019-03-07 01:17:29', '2019-03-07 01:17:29'),
(10, 1, 'created', 9, 'App\\SizeChart', '[]', '{\"size\":\"XL\",\"width\":\"26\\\"\",\"length\":\"29\\\"\",\"id\":9}', 'http://vividcustoms.test/admin/products/store', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/72.0.3626.119 Safari/537.36', NULL, '2019-03-07 01:17:29', '2019-03-07 01:17:29'),
(11, 1, 'created', 10, 'App\\SizeChart', '[]', '{\"size\":\"2XL\",\"width\":\"28\\\"\",\"length\":\"30\\\"\",\"id\":10}', 'http://vividcustoms.test/admin/products/store', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/72.0.3626.119 Safari/537.36', NULL, '2019-03-07 01:17:29', '2019-03-07 01:17:29'),
(12, 1, 'created', 11, 'App\\SizeChart', '[]', '{\"size\":\"3XL\",\"width\":\"30\\\"\",\"length\":\"31\\\"\",\"id\":11}', 'http://vividcustoms.test/admin/products/store', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/72.0.3626.119 Safari/537.36', NULL, '2019-03-07 01:17:29', '2019-03-07 01:17:29'),
(13, 1, 'created', 12, 'App\\SizeChart', '[]', '{\"size\":\"4XL\",\"width\":\"32\\\"\",\"length\":\"32\\\"\",\"id\":12}', 'http://vividcustoms.test/admin/products/store', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/72.0.3626.119 Safari/537.36', NULL, '2019-03-07 01:17:29', '2019-03-07 01:17:29'),
(14, 1, 'created', 13, 'App\\SizeChart', '[]', '{\"size\":\"5XL\",\"width\":\"34\\\"\",\"length\":\"33\\\"\",\"id\":13}', 'http://vividcustoms.test/admin/products/store', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/72.0.3626.119 Safari/537.36', NULL, '2019-03-07 01:17:29', '2019-03-07 01:17:29'),
(15, 1, 'created', 1, 'App\\AditionalImage', '[]', '{\"name\":\"Adult_Heavy_Blend_Hood_aditional_0\",\"file\":\"Adult_Heavy_Blend_Hood_aditional_0.png\",\"id\":1}', 'http://vividcustoms.test/admin/products/store', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/72.0.3626.119 Safari/537.36', NULL, '2019-03-07 01:17:29', '2019-03-07 01:17:29'),
(16, 1, 'created', 1, 'App\\PriceShirt', '[]', '{\"RANGEFROM\":\"1\",\"RANGETO\":\"10000\",\"_INFANT\":null,\"_INFANTWHITE\":null,\"_TODDLER\":null,\"_TODDLERWHITE\":null,\"_YOUTH\":\"18\",\"_YOUTHWHITE\":\"17\",\"_ADULT\":\"18\",\"_ADULTWHITE\":\"17\",\"_2xl\":\"20.5\",\"_2xlWHITE\":\"19.5\",\"_3xl\":\"21.5\",\"_3xlWHITE\":\"20.5\",\"_4xl\":\"22.5\",\"_4xlWHITE\":\"21.5\",\"_5xl\":\"22.5\",\"_5xlWHITE\":\"21.5\",\"_ONE_SIZE\":null,\"_ONE_SIZEWHITE\":null,\"id\":1}', 'http://vividcustoms.test/admin/products/store', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/72.0.3626.119 Safari/537.36', NULL, '2019-03-07 01:17:29', '2019-03-07 01:17:29'),
(17, 1, 'created', 2, 'App\\Product', '[]', '{\"stylenumber\":\"G185\",\"fabric\":\"Cotton\\/Poly\",\"visibility\":\"Visible\",\"name\":\"Adult Heavy Blend Hood Black\",\"price\":\"15.00\",\"min_quantity\":\"1\",\"status\":\"Enable\",\"image\":\"Adult_Heavy_Blend_Hood.png\",\"description\":\"<p>\\r\\n\\r\\nAdult Heavy Blend 8 oz Hood <\\/p><p><br><\\/p><p>Fabric: 50% Cotton, 50% Polyester<\\/p><p>All Heather Sport colors are 60% cotton, 40% polyester<\\/p>\\r\\n\\r\\n<br><p><\\/p>\",\"brand\":\"Gildan\",\"parent_id\":\"1\",\"color_id\":\"35\",\"frontimage\":\"Adult_Heavy_Blend_Hood_Black_front.png\",\"rightimage\":\"Adult_Heavy_Blend_Hood_Black_right.png\",\"backimage\":\"Adult_Heavy_Blend_Hood_Black_back.png\",\"leftimage\":\"Adult_Heavy_Blend_Hood_Black_left.png\",\"id\":2}', 'http://vividcustoms.test/admin/childproducts/store', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/72.0.3626.119 Safari/537.36', NULL, '2019-03-07 01:19:02', '2019-03-07 01:19:02'),
(18, 1, 'created', 3, 'App\\Product', '[]', '{\"stylenumber\":\"G185\",\"fabric\":\"Cotton\\/Poly\",\"visibility\":\"Visible\",\"name\":\"Adult Heavy Blend Hood Charcoal\",\"price\":\"15.00\",\"min_quantity\":\"1\",\"status\":\"Enable\",\"image\":\"Adult_Heavy_Blend_Hood.png\",\"description\":\"<p>\\r\\n\\r\\nAdult Heavy Blend 8 oz Hood <\\/p><p><br><\\/p><p>Fabric: 50% Cotton, 50% Polyester<\\/p><p>All Heather Sport colors are 60% cotton, 40% polyester<\\/p>\\r\\n\\r\\n<br><p><\\/p>\",\"brand\":\"Gildan\",\"parent_id\":\"1\",\"color_id\":\"139\",\"frontimage\":\"Adult_Heavy_Blend_Hood_Charcoal_front.png\",\"rightimage\":\"Adult_Heavy_Blend_Hood_Charcoal_right.png\",\"backimage\":\"Adult_Heavy_Blend_Hood_Charcoal_back.png\",\"leftimage\":\"Adult_Heavy_Blend_Hood_Charcoal_left.png\",\"id\":3}', 'http://vividcustoms.test/admin/childproducts/store', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/72.0.3626.119 Safari/537.36', NULL, '2019-03-07 01:19:57', '2019-03-07 01:19:57'),
(19, 1, 'updated', 2, 'App\\Product', '{\"name\":\"Adult Heavy Blend Hood Black\",\"image\":\"Adult_Heavy_Blend_Hood.png\",\"color_id\":35}', '{\"name\":\"Adult Heavy Blend Hood white\\/navy\",\"image\":\"Adult_Heavy_Blend_Hood_Black_white_navy.png\",\"color_id\":\"31\"}', 'http://vividcustoms.test/admin/childproducts/2', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/71.0.3578.98 Safari/537.36 OPR/58.0.3135.79', NULL, '2019-03-07 01:29:32', '2019-03-07 01:29:32'),
(20, 1, 'updated', 2, 'App\\Product', '{\"name\":\"Adult Heavy Blend Hood white\\/navy\",\"image\":\"Adult_Heavy_Blend_Hood_Black_white_navy.png\",\"frontimage\":\"Adult_Heavy_Blend_Hood_Black_front.png\",\"rightimage\":\"Adult_Heavy_Blend_Hood_Black_right.png\",\"backimage\":\"Adult_Heavy_Blend_Hood_Black_back.png\",\"leftimage\":\"Adult_Heavy_Blend_Hood_Black_left.png\"}', '{\"name\":\"Adult Heavy Blend Hood white_navy\",\"image\":\"\",\"frontimage\":\"\",\"rightimage\":\"\",\"backimage\":\"\",\"leftimage\":\"\"}', 'http://vividcustoms.test/admin/childproducts/2', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/71.0.3578.98 Safari/537.36 OPR/58.0.3135.79', NULL, '2019-03-07 02:22:10', '2019-03-07 02:22:10'),
(21, 1, 'updated', 2, 'App\\Product', '{\"image\":\"\",\"frontimage\":\"\",\"rightimage\":\"\",\"backimage\":\"\",\"leftimage\":\"\"}', '{\"image\":\"Adult_Heavy_Blend_Hood_white_navy.png\",\"frontimage\":\"Adult_Heavy_Blend_Hood_white_navy_white_navy_front.png\",\"rightimage\":\"Adult_Heavy_Blend_Hood_white_navy_white_navy_right.png\",\"backimage\":\"Adult_Heavy_Blend_Hood_white_navy_white_navy_back.png\",\"leftimage\":\"Adult_Heavy_Blend_Hood_white_navy_white_navy_left.png\"}', 'http://vividcustoms.test/admin/childproducts/2', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/71.0.3578.98 Safari/537.36 OPR/58.0.3135.79', NULL, '2019-03-07 02:23:42', '2019-03-07 02:23:42'),
(22, 1, 'updated', 2, 'App\\Product', '{\"name\":\"Adult Heavy Blend Hood white_navy\",\"image\":\"Adult_Heavy_Blend_Hood_white_navy.png\",\"color_id\":31}', '{\"name\":\"Adult Heavy Blend Hood Black\",\"image\":\"Adult Heavy Blend Hood white_navy\",\"color_id\":\"35\"}', 'http://vividcustoms.test/admin/childproducts/2', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/71.0.3578.98 Safari/537.36 OPR/58.0.3135.79', NULL, '2019-03-07 02:38:34', '2019-03-07 02:38:34'),
(23, 1, 'deleted', 2, 'App\\Product', '{\"id\":2,\"stylenumber\":\"G185\",\"fabric\":\"Cotton\\/Poly\",\"visibility\":\"Visible\",\"name\":\"Adult Heavy Blend Hood Black\",\"price\":\"15.00\",\"min_quantity\":1,\"status\":\"Enable\",\"image\":\"Adult Heavy Blend Hood white_navy\",\"description\":\"<p>\\r\\n\\r\\nAdult Heavy Blend 8 oz Hood <\\/p><p><br><\\/p><p>Fabric: 50% Cotton, 50% Polyester<\\/p><p>All Heather Sport colors are 60% cotton, 40% polyester<\\/p>\\r\\n\\r\\n<br><p><\\/p>\",\"brand\":\"Gildan\",\"sizechartimage\":null,\"sizechartdescription\":null,\"frontenable\":1,\"frontimage\":\"Adult_Heavy_Blend_Hood_white_navy_white_navy_front.png\",\"frontguidelineshorizontal\":1,\"frontguidelinesvertical\":1,\"frontguidelinesyouth\":0,\"frontguidelinesadult\":0,\"frontguidelinesleftchest\":0,\"frontwidth\":null,\"frontheight\":null,\"frontleft\":null,\"fronttop\":null,\"rightimage\":\"Adult_Heavy_Blend_Hood_white_navy_white_navy_right.png\",\"rightenable\":0,\"rightguidelineshorizontal\":1,\"rightguidelinesvertical\":1,\"rightguidelinesyouth\":0,\"rightguidelinesadult\":0,\"rightguidelinesleftchest\":0,\"rightwidth\":null,\"rightheight\":null,\"rightleft\":null,\"righttop\":null,\"backimage\":\"Adult_Heavy_Blend_Hood_white_navy_white_navy_back.png\",\"backenable\":0,\"backguidelineshorizontal\":1,\"backguidelinesvertical\":1,\"backguidelinesyouth\":0,\"backguidelinesadult\":0,\"backguidelinesleftchest\":0,\"backwidth\":null,\"backheight\":null,\"backleft\":null,\"backtop\":null,\"leftimage\":\"Adult_Heavy_Blend_Hood_white_navy_white_navy_left.png\",\"leftenable\":0,\"leftguidelineshorizontal\":1,\"leftguidelinesvertical\":1,\"leftguidelinesyouth\":0,\"leftguidelinesadult\":0,\"leftguidelinesleftchest\":0,\"leftwidth\":null,\"leftheight\":null,\"leftleft\":null,\"lefttop\":null,\"_INFANT\":\"0.00\",\"_INFANTWHITE\":\"0.00\",\"_TODDLER\":\"0.00\",\"_TODDLERWHITE\":\"0.00\",\"_YOUTH\":\"0.00\",\"_YOUTHWHITE\":\"0.00\",\"_ADULT\":\"0.00\",\"_ADULTWHITE\":\"0.00\",\"_2xl\":\"0.00\",\"_2xlWHITE\":\"0.00\",\"_3xl\":\"0.00\",\"_3xlWHITE\":\"0.00\",\"_4xl\":\"0.00\",\"_4xlWHITE\":\"0.00\",\"_5xl\":\"0.00\",\"_5xlWHITE\":\"0.00\",\"_ONE_SIZE\":\"0.00\",\"_ONE_SIZEWHITE\":\"0.00\",\"parent_id\":1,\"color_id\":35}', '[]', 'http://vividcustoms.test/admin/childproducts/2', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/71.0.3578.98 Safari/537.36 OPR/58.0.3135.79', NULL, '2019-03-07 02:39:32', '2019-03-07 02:39:32'),
(24, 1, 'created', 4, 'App\\Product', '[]', '{\"stylenumber\":\"G185\",\"fabric\":\"Cotton\\/Poly\",\"visibility\":\"Visible\",\"name\":\"Adult Heavy Blend Hood Black\",\"price\":\"15.00\",\"min_quantity\":\"1\",\"status\":\"Enable\",\"image\":\"Adult_Heavy_Blend_Hood.png\",\"description\":\"<p>\\r\\n\\r\\nAdult Heavy Blend 8 oz Hood <\\/p><p><br><\\/p><p>Fabric: 50% Cotton, 50% Polyester<\\/p><p>All Heather Sport colors are 60% cotton, 40% polyester<\\/p>\\r\\n\\r\\n<br><p><\\/p>\",\"brand\":\"Gildan\",\"parent_id\":\"1\",\"color_id\":\"35\",\"frontimage\":\"Adult_Heavy_Blend_Hood_Black_front.png\",\"rightimage\":\"Adult_Heavy_Blend_Hood_Black_right.png\",\"backimage\":\"Adult_Heavy_Blend_Hood_Black_back.png\",\"leftimage\":\"Adult_Heavy_Blend_Hood_Black_left.png\",\"id\":4}', 'http://vividcustoms.test/admin/childproducts/store', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/71.0.3578.98 Safari/537.36 OPR/58.0.3135.79', NULL, '2019-03-07 02:39:56', '2019-03-07 02:39:56'),
(25, 1, 'updated', 4, 'App\\Product', '{\"image\":\"Adult_Heavy_Blend_Hood.png\"}', '{\"image\":\"Adult_Heavy_Blend_Hood_Black.png\"}', 'http://vividcustoms.test/admin/childproducts/4', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/71.0.3578.98 Safari/537.36 OPR/58.0.3135.79', NULL, '2019-03-07 02:40:11', '2019-03-07 02:40:11'),
(26, 1, 'updated', 4, 'App\\Product', '{\"image\":\"Adult_Heavy_Blend_Hood_Black.png\"}', '{\"image\":\"Adult Heavy Blend Hood Black\"}', 'http://vividcustoms.test/admin/childproducts/4', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/72.0.3626.119 Safari/537.36', NULL, '2019-03-07 02:48:53', '2019-03-07 02:48:53'),
(27, 1, 'deleted', 4, 'App\\Product', '{\"id\":4,\"stylenumber\":\"G185\",\"fabric\":\"Cotton\\/Poly\",\"visibility\":\"Visible\",\"name\":\"Adult Heavy Blend Hood Black\",\"price\":\"15.00\",\"min_quantity\":1,\"status\":\"Enable\",\"image\":\"Adult Heavy Blend Hood Black\",\"description\":\"<p>\\r\\n\\r\\nAdult Heavy Blend 8 oz Hood <\\/p><p><br><\\/p><p>Fabric: 50% Cotton, 50% Polyester<\\/p><p>All Heather Sport colors are 60% cotton, 40% polyester<\\/p>\\r\\n\\r\\n<br><p><\\/p>\",\"brand\":\"Gildan\",\"sizechartimage\":null,\"sizechartdescription\":null,\"frontenable\":1,\"frontimage\":\"Adult_Heavy_Blend_Hood_Black_front.png\",\"frontguidelineshorizontal\":1,\"frontguidelinesvertical\":1,\"frontguidelinesyouth\":0,\"frontguidelinesadult\":0,\"frontguidelinesleftchest\":0,\"frontwidth\":null,\"frontheight\":null,\"frontleft\":null,\"fronttop\":null,\"rightimage\":\"Adult_Heavy_Blend_Hood_Black_right.png\",\"rightenable\":0,\"rightguidelineshorizontal\":1,\"rightguidelinesvertical\":1,\"rightguidelinesyouth\":0,\"rightguidelinesadult\":0,\"rightguidelinesleftchest\":0,\"rightwidth\":null,\"rightheight\":null,\"rightleft\":null,\"righttop\":null,\"backimage\":\"Adult_Heavy_Blend_Hood_Black_back.png\",\"backenable\":0,\"backguidelineshorizontal\":1,\"backguidelinesvertical\":1,\"backguidelinesyouth\":0,\"backguidelinesadult\":0,\"backguidelinesleftchest\":0,\"backwidth\":null,\"backheight\":null,\"backleft\":null,\"backtop\":null,\"leftimage\":\"Adult_Heavy_Blend_Hood_Black_left.png\",\"leftenable\":0,\"leftguidelineshorizontal\":1,\"leftguidelinesvertical\":1,\"leftguidelinesyouth\":0,\"leftguidelinesadult\":0,\"leftguidelinesleftchest\":0,\"leftwidth\":null,\"leftheight\":null,\"leftleft\":null,\"lefttop\":null,\"_INFANT\":\"0.00\",\"_INFANTWHITE\":\"0.00\",\"_TODDLER\":\"0.00\",\"_TODDLERWHITE\":\"0.00\",\"_YOUTH\":\"0.00\",\"_YOUTHWHITE\":\"0.00\",\"_ADULT\":\"0.00\",\"_ADULTWHITE\":\"0.00\",\"_2xl\":\"0.00\",\"_2xlWHITE\":\"0.00\",\"_3xl\":\"0.00\",\"_3xlWHITE\":\"0.00\",\"_4xl\":\"0.00\",\"_4xlWHITE\":\"0.00\",\"_5xl\":\"0.00\",\"_5xlWHITE\":\"0.00\",\"_ONE_SIZE\":\"0.00\",\"_ONE_SIZEWHITE\":\"0.00\",\"parent_id\":1,\"color_id\":35}', '[]', 'http://vividcustoms.test/admin/childproducts/4', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/72.0.3626.119 Safari/537.36', NULL, '2019-03-07 02:51:57', '2019-03-07 02:51:57'),
(28, 1, 'deleted', 3, 'App\\Product', '{\"id\":3,\"stylenumber\":\"G185\",\"fabric\":\"Cotton\\/Poly\",\"visibility\":\"Visible\",\"name\":\"Adult Heavy Blend Hood Charcoal\",\"price\":\"15.00\",\"min_quantity\":1,\"status\":\"Enable\",\"image\":\"Adult_Heavy_Blend_Hood.png\",\"description\":\"<p>\\r\\n\\r\\nAdult Heavy Blend 8 oz Hood <\\/p><p><br><\\/p><p>Fabric: 50% Cotton, 50% Polyester<\\/p><p>All Heather Sport colors are 60% cotton, 40% polyester<\\/p>\\r\\n\\r\\n<br><p><\\/p>\",\"brand\":\"Gildan\",\"sizechartimage\":null,\"sizechartdescription\":null,\"frontenable\":1,\"frontimage\":\"Adult_Heavy_Blend_Hood_Charcoal_front.png\",\"frontguidelineshorizontal\":1,\"frontguidelinesvertical\":1,\"frontguidelinesyouth\":0,\"frontguidelinesadult\":0,\"frontguidelinesleftchest\":0,\"frontwidth\":null,\"frontheight\":null,\"frontleft\":null,\"fronttop\":null,\"rightimage\":\"Adult_Heavy_Blend_Hood_Charcoal_right.png\",\"rightenable\":0,\"rightguidelineshorizontal\":1,\"rightguidelinesvertical\":1,\"rightguidelinesyouth\":0,\"rightguidelinesadult\":0,\"rightguidelinesleftchest\":0,\"rightwidth\":null,\"rightheight\":null,\"rightleft\":null,\"righttop\":null,\"backimage\":\"Adult_Heavy_Blend_Hood_Charcoal_back.png\",\"backenable\":0,\"backguidelineshorizontal\":1,\"backguidelinesvertical\":1,\"backguidelinesyouth\":0,\"backguidelinesadult\":0,\"backguidelinesleftchest\":0,\"backwidth\":null,\"backheight\":null,\"backleft\":null,\"backtop\":null,\"leftimage\":\"Adult_Heavy_Blend_Hood_Charcoal_left.png\",\"leftenable\":0,\"leftguidelineshorizontal\":1,\"leftguidelinesvertical\":1,\"leftguidelinesyouth\":0,\"leftguidelinesadult\":0,\"leftguidelinesleftchest\":0,\"leftwidth\":null,\"leftheight\":null,\"leftleft\":null,\"lefttop\":null,\"_INFANT\":\"0.00\",\"_INFANTWHITE\":\"0.00\",\"_TODDLER\":\"0.00\",\"_TODDLERWHITE\":\"0.00\",\"_YOUTH\":\"0.00\",\"_YOUTHWHITE\":\"0.00\",\"_ADULT\":\"0.00\",\"_ADULTWHITE\":\"0.00\",\"_2xl\":\"0.00\",\"_2xlWHITE\":\"0.00\",\"_3xl\":\"0.00\",\"_3xlWHITE\":\"0.00\",\"_4xl\":\"0.00\",\"_4xlWHITE\":\"0.00\",\"_5xl\":\"0.00\",\"_5xlWHITE\":\"0.00\",\"_ONE_SIZE\":\"0.00\",\"_ONE_SIZEWHITE\":\"0.00\",\"parent_id\":1,\"color_id\":139}', '[]', 'http://vividcustoms.test/admin/childproducts/3', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/72.0.3626.119 Safari/537.36', NULL, '2019-03-07 02:52:03', '2019-03-07 02:52:03'),
(29, 1, 'created', 5, 'App\\Product', '[]', '{\"stylenumber\":\"G185\",\"fabric\":\"Cotton\\/Poly\",\"visibility\":\"Visible\",\"name\":\"Adult Heavy Blend Hood Black\",\"price\":\"15.00\",\"min_quantity\":\"1\",\"status\":\"Enable\",\"image\":\"Adult_Heavy_Blend_Hood.png\",\"description\":\"<p>\\r\\n\\r\\nAdult Heavy Blend 8 oz Hood <\\/p><p><br><\\/p><p>Fabric: 50% Cotton, 50% Polyester<\\/p><p>All Heather Sport colors are 60% cotton, 40% polyester<\\/p>\\r\\n\\r\\n<br><p><\\/p>\",\"brand\":\"Gildan\",\"parent_id\":\"1\",\"color_id\":\"35\",\"frontimage\":\"Adult_Heavy_Blend_Hood_Black_front.png\",\"rightimage\":\"Adult_Heavy_Blend_Hood_Black_right.png\",\"backimage\":\"Adult_Heavy_Blend_Hood_Black_back.png\",\"leftimage\":\"Adult_Heavy_Blend_Hood_Black_left.png\",\"id\":5}', 'http://vividcustoms.test/admin/childproducts/store', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/72.0.3626.119 Safari/537.36', NULL, '2019-03-07 02:54:34', '2019-03-07 02:54:34'),
(30, 1, 'created', 6, 'App\\Product', '[]', '{\"stylenumber\":\"G185\",\"fabric\":\"Cotton\\/Poly\",\"visibility\":\"Visible\",\"name\":\"Adult Heavy Blend Hood Charcoal\",\"price\":\"15.00\",\"min_quantity\":\"6\",\"status\":\"Enable\",\"image\":\"Adult_Heavy_Blend_Hood.png\",\"description\":\"<p>\\r\\n\\r\\nAdult Heavy Blend 8 oz Hood <\\/p><p><br><\\/p><p>Fabric: 50% Cotton, 50% Polyester<\\/p><p>All Heather Sport colors are 60% cotton, 40% polyester<\\/p>\\r\\n\\r\\n<br><p><\\/p>\",\"brand\":\"Gildan\",\"parent_id\":\"1\",\"color_id\":\"139\",\"frontimage\":\"Adult_Heavy_Blend_Hood_Charcoal_front.png\",\"rightimage\":\"Adult_Heavy_Blend_Hood_Charcoal_right.png\",\"backimage\":\"Adult_Heavy_Blend_Hood_Charcoal_back.png\",\"leftimage\":\"Adult_Heavy_Blend_Hood_Charcoal_left.png\",\"id\":6}', 'http://vividcustoms.test/admin/childproducts/store', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/72.0.3626.119 Safari/537.36', NULL, '2019-03-07 02:58:28', '2019-03-07 02:58:28'),
(31, 1, 'updated', 5, 'App\\Product', '{\"image\":\"Adult_Heavy_Blend_Hood.png\"}', '{\"image\":\"Adult_Heavy_Blend_Hood_Black.png\"}', 'http://vividcustoms.test/admin/childproducts/5', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/72.0.3626.119 Safari/537.36', NULL, '2019-03-07 03:00:44', '2019-03-07 03:00:44'),
(32, 1, 'updated', 6, 'App\\Product', '{\"image\":\"Adult_Heavy_Blend_Hood.png\"}', '{\"image\":\"Adult Heavy Blend Hood Charcoal\"}', 'http://vividcustoms.test/admin/childproducts/6', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/72.0.3626.119 Safari/537.36', NULL, '2019-03-07 03:09:12', '2019-03-07 03:09:12'),
(33, 1, 'updated', 6, 'App\\Product', '{\"image\":\"Adult Heavy Blend Hood Charcoal\"}', '{\"image\":\"Adult_Heavy_Blend_Hood_Charcoal.png\"}', 'http://vividcustoms.test/admin/childproducts/6', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/72.0.3626.119 Safari/537.36', NULL, '2019-03-07 03:10:15', '2019-03-07 03:10:15');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `brands`
--

CREATE TABLE `brands` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `brands`
--

INSERT INTO `brands` (`id`, `name`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Gildan', 'Enable', '2019-03-07 00:52:34', '2019-03-07 00:52:34'),
(2, 'Tultex', 'Enable', '2019-03-07 00:52:34', '2019-03-07 00:52:34'),
(3, 'Bella_Canvas', 'Enable', '2019-03-07 00:52:34', '2019-03-07 00:52:34'),
(4, 'American_Apparel', 'Enable', '2019-03-07 00:52:34', '2019-03-07 00:52:34'),
(5, 'Anvil', 'Enable', '2019-03-07 00:52:34', '2019-03-07 00:52:34'),
(6, 'Lat', 'Enable', '2019-03-07 00:52:34', '2019-03-07 00:52:34'),
(7, 'Rabbit_Skins', 'Enable', '2019-03-07 00:52:34', '2019-03-07 00:52:34'),
(8, 'Code_Five', 'Enable', '2019-03-07 00:52:34', '2019-03-07 00:52:34'),
(9, 'Augusta', 'Enable', '2019-03-07 00:52:34', '2019-03-07 00:52:34'),
(10, 'Izod', 'Enable', '2019-03-07 00:52:34', '2019-03-07 00:52:34'),
(11, 'Flexfit', 'Enable', '2019-03-07 00:52:34', '2019-03-07 00:52:34'),
(12, 'Liberty_Bags', 'Enable', '2019-03-07 00:52:34', '2019-03-07 00:52:34'),
(13, 'Sport_Tek', 'Enable', '2019-03-07 00:52:34', '2019-03-07 00:52:34'),
(14, 'PortAuthority', 'Enable', '2019-03-07 00:52:34', '2019-03-07 00:52:34'),
(15, 'Port&Company', 'Enable', '2019-03-07 00:52:34', '2019-03-07 00:52:34'),
(16, 'Harriton', 'Enable', '2019-03-07 00:52:34', '2019-03-07 00:52:34');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `categories`
--

INSERT INTO `categories` (`id`, `name`, `status`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Athletic', 'Enable', 'Athletic', '2019-03-07 00:52:34', '2019-03-07 00:52:34'),
(2, 'Bags', 'Enable', 'Bags', '2019-03-07 00:52:34', '2019-03-07 00:52:34'),
(3, 'FIT', 'Enable', 'FIT', '2019-03-07 00:52:34', '2019-03-07 00:52:34'),
(4, 'Ladies', 'Enable', 'Ladies', '2019-03-07 00:52:34', '2019-03-07 00:52:34'),
(5, 'No Minimum', 'Enable', 'No Minimum', '2019-03-07 00:52:34', '2019-03-07 00:52:34'),
(6, 'Polos', 'Enable', 'Polos', '2019-03-07 00:52:34', '2019-03-07 00:52:34'),
(7, 'Price', 'Enable', 'Price', '2019-03-07 00:52:34', '2019-03-07 00:52:34'),
(8, 'Specialty Sizes', 'Enable', 'Specialty Sizes', '2019-03-07 00:52:34', '2019-03-07 00:52:34'),
(9, 'T-shirts', 'Enable', 'T-shirts', '2019-03-07 00:52:35', '2019-03-07 00:52:35'),
(10, 'Unisex-Mens', 'Enable', 'Unisex-Mens', '2019-03-07 00:52:35', '2019-03-07 00:52:35'),
(11, 'Work Clothes', 'Enable', 'Work Clothes', '2019-03-07 00:52:35', '2019-03-07 00:52:35'),
(12, 'Youth', 'Enable', 'Youth', '2019-03-07 00:52:35', '2019-03-07 00:52:35');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `colors`
--

CREATE TABLE `colors` (
  `id` int(10) UNSIGNED NOT NULL,
  `order` int(11) NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hex` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `colors`
--

INSERT INTO `colors` (`id`, `order`, `name`, `hex`, `file`, `status`, `type`, `created_at`, `updated_at`) VALUES
(1, 1, 'Black', '#000000', NULL, 'Enable', 'ink', '2019-03-07 00:52:34', '2019-03-07 00:52:34'),
(2, 2, 'White', '#ffffff', NULL, 'Enable', 'ink', '2019-03-07 00:52:34', '2019-03-07 00:52:34'),
(3, 3, 'Yelow', '#fcdc6c', NULL, 'Enable', 'ink', '2019-03-07 00:52:34', '2019-03-07 00:52:34'),
(4, 4, 'Yelow', '#f3d407', NULL, 'Enable', 'ink', '2019-03-07 00:52:34', '2019-03-07 00:52:34'),
(5, 5, 'Gold', '#edbc12', NULL, 'Enable', 'ink', '2019-03-07 00:52:34', '2019-03-07 00:52:34'),
(6, 6, 'Light Pink', '#ffa7cc', NULL, 'Enable', 'ink', '2019-03-07 00:52:34', '2019-03-07 00:52:34'),
(7, 7, 'Pink', '#fe8ace', NULL, 'Enable', 'ink', '2019-03-07 00:52:34', '2019-03-07 00:52:34'),
(8, 8, 'Neon Magenta', '#f74bb4', NULL, 'Enable', 'ink', '2019-03-07 00:52:34', '2019-03-07 00:52:34'),
(9, 9, 'Orange', '#fc5f0a', NULL, 'Enable', 'ink', '2019-03-07 00:52:34', '2019-03-07 00:52:34'),
(10, 10, 'Red', '#d90303', NULL, 'Enable', 'ink', '2019-03-07 00:52:34', '2019-03-07 00:52:34'),
(11, 11, 'Cardinal Red', '#981d1d', NULL, 'Enable', 'ink', '2019-03-07 00:52:34', '2019-03-07 00:52:34'),
(12, 12, 'Maroon', '#680523', NULL, 'Enable', 'ink', '2019-03-07 00:52:34', '2019-03-07 00:52:34'),
(13, 13, 'Brown', '#45200c', NULL, 'Enable', 'ink', '2019-03-07 00:52:34', '2019-03-07 00:52:34'),
(14, 14, 'Lime Green', '#32d72e', NULL, 'Enable', 'ink', '2019-03-07 00:52:34', '2019-03-07 00:52:34'),
(15, 15, 'Brite Green', '#048107', NULL, 'Enable', 'ink', '2019-03-07 00:52:34', '2019-03-07 00:52:34'),
(16, 16, 'Green', '#006002', NULL, 'Enable', 'ink', '2019-03-07 00:52:34', '2019-03-07 00:52:34'),
(17, 17, 'Brite Blue', '#149ad9', NULL, 'Enable', 'ink', '2019-03-07 00:52:34', '2019-03-07 00:52:34'),
(18, 18, 'Peacock Blue', '#3ab3d6', NULL, 'Enable', 'ink', '2019-03-07 00:52:34', '2019-03-07 00:52:34'),
(19, 19, 'Aqua Marine', '#0caaac', NULL, 'Enable', 'ink', '2019-03-07 00:52:34', '2019-03-07 00:52:34'),
(20, 20, 'Mono Blue', '#063fc0', NULL, 'Enable', 'ink', '2019-03-07 00:52:34', '2019-03-07 00:52:34'),
(21, 21, 'Royal Blue', '#0f098d', NULL, 'Enable', 'ink', '2019-03-07 00:52:34', '2019-03-07 00:52:34'),
(22, 22, 'Navy', '#0e3875', NULL, 'Enable', 'ink', '2019-03-07 00:52:34', '2019-03-07 00:52:34'),
(23, 23, 'Lilac', '#d990ff', NULL, 'Enable', 'ink', '2019-03-07 00:52:34', '2019-03-07 00:52:34'),
(24, 24, 'Rose Magenta', '#aa23b2', NULL, 'Enable', 'ink', '2019-03-07 00:52:34', '2019-03-07 00:52:34'),
(25, 25, 'Purple', '#540471', NULL, 'Enable', 'ink', '2019-03-07 00:52:34', '2019-03-07 00:52:34'),
(26, 26, 'Light Gray', '#bbc1c4', NULL, 'Enable', 'ink', '2019-03-07 00:52:34', '2019-03-07 00:52:34'),
(27, 27, 'Dark Gray', '#737373', NULL, 'Enable', 'ink', '2019-03-07 00:52:34', '2019-03-07 00:52:34'),
(28, 28, 'Flesh', '#f3e2c7', NULL, 'Enable', 'ink', '2019-03-07 00:52:34', '2019-03-07 00:52:34'),
(29, 29, 'Khaki', '#d8c3a0', NULL, 'Enable', 'ink', '2019-03-07 00:52:34', '2019-03-07 00:52:34'),
(30, 30, 'Blazer Gold', '#d3a864', NULL, 'Enable', 'ink', '2019-03-07 00:52:34', '2019-03-07 00:52:34'),
(31, 1, 'white/navy', NULL, 'white-navy.png', 'Enable', 'shirt', '2019-03-07 00:52:34', '2019-03-07 00:52:34'),
(32, 2, 'white/black', NULL, 'white-black.png', 'Enable', 'shirt', '2019-03-07 00:52:34', '2019-03-07 00:52:34'),
(33, 3, 'white/red', NULL, 'white-red.png', 'Enable', 'shirt', '2019-03-07 00:52:34', '2019-03-07 00:52:34'),
(34, 4, 'white/royal', NULL, 'white-royal.png', 'Enable', 'shirt', '2019-03-07 00:52:34', '2019-03-07 00:52:34'),
(35, 5, 'Black', '#000000', NULL, 'Enable', 'shirt', '2019-03-07 00:52:34', '2019-03-07 00:52:34'),
(36, 6, 'White', '#ffffff', NULL, 'Enable', 'shirt', '2019-03-07 00:52:34', '2019-03-07 00:52:34'),
(37, 7, 'Natural', '#fff8e2', NULL, 'Enable', 'shirt', '2019-03-07 00:52:34', '2019-03-07 00:52:34'),
(38, 8, 'Sand', '#e1d7a6', NULL, 'Enable', 'shirt', '2019-03-07 00:52:34', '2019-03-07 00:52:34'),
(39, 9, 'Yellow Haze', '#f5ce8f', NULL, 'Enable', 'shirt', '2019-03-07 00:52:34', '2019-03-07 00:52:34'),
(40, 10, 'Butter', '#f1d480', NULL, 'Enable', 'shirt', '2019-03-07 00:52:34', '2019-03-07 00:52:34'),
(41, 11, 'Vegas Gold', '#ecc66a', NULL, 'Enable', 'shirt', '2019-03-07 00:52:34', '2019-03-07 00:52:34'),
(42, 12, 'Tan', '#c2955b', NULL, 'Enable', 'shirt', '2019-03-07 00:52:34', '2019-03-07 00:52:34'),
(43, 13, 'Terracotta', '#c58e72', NULL, 'Enable', 'shirt', '2019-03-07 00:52:34', '2019-03-07 00:52:34'),
(44, 14, 'Brown Savana', '#837050', NULL, 'Enable', 'shirt', '2019-03-07 00:52:34', '2019-03-07 00:52:34'),
(45, 15, 'Old Gold', '#936d2a', NULL, 'Enable', 'shirt', '2019-03-07 00:52:34', '2019-03-07 00:52:34'),
(46, 16, 'Chestnut', '#72573a', NULL, 'Enable', 'shirt', '2019-03-07 00:52:34', '2019-03-07 00:52:34'),
(47, 17, 'Cornsilk', '#eceb7d', NULL, 'Enable', 'shirt', '2019-03-07 00:52:34', '2019-03-07 00:52:34'),
(48, 18, 'Yellow', '#fffc00', NULL, 'Enable', 'shirt', '2019-03-07 00:52:34', '2019-03-07 00:52:34'),
(49, 19, 'Safety Green', '#edff23', NULL, 'Enable', 'shirt', '2019-03-07 00:52:34', '2019-03-07 00:52:34'),
(50, 20, 'Power Yellow', '#f7e412', NULL, 'Enable', 'shirt', '2019-03-07 00:52:34', '2019-03-07 00:52:34'),
(51, 21, 'Daisy', '#f9e71b', NULL, 'Enable', 'shirt', '2019-03-07 00:52:34', '2019-03-07 00:52:34'),
(52, 22, 'Sport Athletic Gold', '#fac717', NULL, 'Enable', 'shirt', '2019-03-07 00:52:34', '2019-03-07 00:52:34'),
(53, 23, 'Gold', '#f0af1b', NULL, 'Enable', 'shirt', '2019-03-07 00:52:34', '2019-03-07 00:52:34'),
(54, 24, 'Tangerine', '#e8964d', NULL, 'Enable', 'shirt', '2019-03-07 00:52:34', '2019-03-07 00:52:34'),
(55, 25, 'Bright Salmon', '#ee845b', NULL, 'Enable', 'shirt', '2019-03-07 00:52:34', '2019-03-07 00:52:34'),
(56, 26, 'Tennessee Orange', '#f19c16', NULL, 'Enable', 'shirt', '2019-03-07 00:52:34', '2019-03-07 00:52:34'),
(57, 27, 'S. Orange', '#ff8400', NULL, 'Enable', 'shirt', '2019-03-07 00:52:34', '2019-03-07 00:52:34'),
(58, 28, 'Sport Orange', '#f07a12', NULL, 'Enable', 'shirt', '2019-03-07 00:52:34', '2019-03-07 00:52:34'),
(59, 29, 'Orange', '#e64f16', NULL, 'Enable', 'shirt', '2019-03-07 00:52:34', '2019-03-07 00:52:34'),
(60, 30, 'Team Orange', '#e64f16', NULL, 'Enable', 'shirt', '2019-03-07 00:52:34', '2019-03-07 00:52:34'),
(61, 31, 'T. Orange', '#bf5f2f', NULL, 'Enable', 'shirt', '2019-03-07 00:52:34', '2019-03-07 00:52:34'),
(62, 32, 'Light Pink', '#f3cae0', NULL, 'Enable', 'shirt', '2019-03-07 00:52:34', '2019-03-07 00:52:34'),
(63, 33, 'Fuchsia', '#ff5fc5', NULL, 'Enable', 'shirt', '2019-03-07 00:52:34', '2019-03-07 00:52:34'),
(64, 34, 'Pink', '#ffcee8', NULL, 'Enable', 'shirt', '2019-03-07 00:52:34', '2019-03-07 00:52:34'),
(65, 35, 'Azalea', '#e56d9b', NULL, 'Enable', 'shirt', '2019-03-07 00:52:34', '2019-03-07 00:52:34'),
(66, 36, 'Coral Silk', '#e06c7d', NULL, 'Enable', 'shirt', '2019-03-07 00:52:34', '2019-03-07 00:52:34'),
(67, 37, 'Raspberry', '#fb87c5', NULL, 'Enable', 'shirt', '2019-03-07 00:52:34', '2019-03-07 00:52:34'),
(68, 38, 'Heliconia', '#c81f5f', NULL, 'Enable', 'shirt', '2019-03-07 00:52:34', '2019-03-07 00:52:34'),
(69, 39, 'Hot Pink', '#fe4e89', NULL, 'Enable', 'shirt', '2019-03-07 00:52:34', '2019-03-07 00:52:34'),
(70, 40, 'Paprika', '#f15149', NULL, 'Enable', 'shirt', '2019-03-07 00:52:34', '2019-03-07 00:52:34'),
(71, 41, 'Power Pink', '#da05dd', NULL, 'Enable', 'shirt', '2019-03-07 00:52:34', '2019-03-07 00:52:34'),
(72, 42, 'Red', '#b4140d', NULL, 'Enable', 'shirt', '2019-03-07 00:52:34', '2019-03-07 00:52:34'),
(73, 43, 'Cherry Red', '#9e1b1b', NULL, 'Enable', 'shirt', '2019-03-07 00:52:34', '2019-03-07 00:52:34'),
(74, 44, 'Sport Scarlet Red', '#9d2222', NULL, 'Enable', 'shirt', '2019-03-07 00:52:34', '2019-03-07 00:52:34'),
(75, 45, 'Cardinal Red', '#740c1b', NULL, 'Enable', 'shirt', '2019-03-07 00:52:34', '2019-03-07 00:52:34'),
(76, 46, 'Berry', '#7d2851', NULL, 'Enable', 'shirt', '2019-03-07 00:52:34', '2019-03-07 00:52:34'),
(77, 47, 'Garnet', '#71242f', NULL, 'Enable', 'shirt', '2019-03-07 00:52:34', '2019-03-07 00:52:34'),
(78, 48, 'Maroon', '#700e1c', NULL, 'Enable', 'shirt', '2019-03-07 00:52:34', '2019-03-07 00:52:34'),
(79, 49, 'Chambray', '#c9eef1', NULL, 'Enable', 'shirt', '2019-03-07 00:52:34', '2019-03-07 00:52:34'),
(80, 50, 'Light Blue', '#a1d3f6', NULL, 'Enable', 'shirt', '2019-03-07 00:52:34', '2019-03-07 00:52:34'),
(81, 51, 'Lagoon Blue', '#50cdc9', NULL, 'Enable', 'shirt', '2019-03-07 00:52:34', '2019-03-07 00:52:34'),
(82, 52, 'Chill', '#70cec8', NULL, 'Enable', 'shirt', '2019-03-07 00:52:34', '2019-03-07 00:52:34'),
(83, 53, 'Sky', '#5bceef', NULL, 'Enable', 'shirt', '2019-03-07 00:52:34', '2019-03-07 00:52:34'),
(84, 54, 'Carolina Blue', '#56c1ff', NULL, 'Enable', 'shirt', '2019-03-07 00:52:34', '2019-03-07 00:52:34'),
(85, 55, 'Iris', '#56a1d0', NULL, 'Enable', 'shirt', '2019-03-07 00:52:34', '2019-03-07 00:52:34'),
(86, 56, 'Sapphire', '#15a4cd', NULL, 'Enable', 'shirt', '2019-03-07 00:52:34', '2019-03-07 00:52:34'),
(87, 57, 'Turquoise', '#00c6ff', NULL, 'Enable', 'shirt', '2019-03-07 00:52:34', '2019-03-07 00:52:34'),
(88, 58, 'Sport Light Blue', '#7a9bb5', NULL, 'Enable', 'shirt', '2019-03-07 00:52:34', '2019-03-07 00:52:34'),
(89, 59, 'Stone Blue', '#7c8b95', NULL, 'Enable', 'shirt', '2019-03-07 00:52:34', '2019-03-07 00:52:34'),
(90, 60, 'Tropical Blue', '#258b94', NULL, 'Enable', 'shirt', '2019-03-07 00:52:34', '2019-03-07 00:52:34'),
(91, 61, 'Power Blue', '#1f7eaf', NULL, 'Enable', 'shirt', '2019-03-07 00:52:34', '2019-03-07 00:52:34'),
(92, 62, 'Colbalt', '#0b7dac', NULL, 'Enable', 'shirt', '2019-03-07 00:52:34', '2019-03-07 00:52:34'),
(93, 63, 'True Royal', '#1f50aa', NULL, 'Enable', 'shirt', '2019-03-07 00:52:34', '2019-03-07 00:52:34'),
(94, 64, 'Neon Blue', '#2f54c0', NULL, 'Enable', 'shirt', '2019-03-07 00:52:34', '2019-03-07 00:52:34'),
(95, 65, 'Flo Blue', '#5267b5', NULL, 'Enable', 'shirt', '2019-03-07 00:52:34', '2019-03-07 00:52:34'),
(96, 66, 'Royal', '#1a24e8', NULL, 'Enable', 'shirt', '2019-03-07 00:52:34', '2019-03-07 00:52:34'),
(97, 67, 'Power Royal', '#2c48c0', NULL, 'Enable', 'shirt', '2019-03-07 00:52:34', '2019-03-07 00:52:34'),
(98, 68, 'Metro Blue', '#262a6d', NULL, 'Enable', 'shirt', '2019-03-07 00:52:34', '2019-03-07 00:52:34'),
(99, 69, 'Sport Royal', '#041f79', NULL, 'Enable', 'shirt', '2019-03-07 00:52:34', '2019-03-07 00:52:34'),
(100, 70, 'Cobalt', '#253274', NULL, 'Enable', 'shirt', '2019-03-07 00:52:34', '2019-03-07 00:52:34'),
(101, 71, 'Galapagos Blue', '#236e73', NULL, 'Enable', 'shirt', '2019-03-07 00:52:34', '2019-03-07 00:52:34'),
(102, 72, 'Blue Dusk', '#3d4452', NULL, 'Enable', 'shirt', '2019-03-07 00:52:34', '2019-03-07 00:52:34'),
(103, 73, 'Indigo Blue', '#526a86', NULL, 'Enable', 'shirt', '2019-03-07 00:52:34', '2019-03-07 00:52:34'),
(104, 74, 'Blue', '#13294c', NULL, 'Enable', 'shirt', '2019-03-07 00:52:34', '2019-03-07 00:52:34'),
(105, 75, 'Navy', '#193152', NULL, 'Enable', 'shirt', '2019-03-07 00:52:34', '2019-03-07 00:52:34'),
(106, 76, 'Sport Dark Navy', '#011833', NULL, 'Enable', 'shirt', '2019-03-07 00:52:34', '2019-03-07 00:52:34'),
(107, 77, 'Neon Green', '#68ea4f', NULL, 'Enable', 'shirt', '2019-03-07 00:52:34', '2019-03-07 00:52:34'),
(108, 78, 'Apple', '#56c421', NULL, 'Enable', 'shirt', '2019-03-07 00:52:34', '2019-03-07 00:52:34'),
(109, 79, 'Electric Green', '#58ce3b', NULL, 'Enable', 'shirt', '2019-03-07 00:52:34', '2019-03-07 00:52:34'),
(110, 80, 'Greenish', '#00ee00', NULL, 'Enable', 'shirt', '2019-03-07 00:52:34', '2019-03-07 00:52:34'),
(111, 81, 'Lime', '#7bc24c', NULL, 'Enable', 'shirt', '2019-03-07 00:52:34', '2019-03-07 00:52:34'),
(112, 82, 'Key Lime', '#a0e36e', NULL, 'Enable', 'shirt', '2019-03-07 00:52:34', '2019-03-07 00:52:34'),
(113, 83, 'Mint Green', '#9de7a8', NULL, 'Enable', 'shirt', '2019-03-07 00:52:34', '2019-03-07 00:52:34'),
(114, 84, 'Irish Green', '#1ca01f', NULL, 'Enable', 'shirt', '2019-03-07 00:52:34', '2019-03-07 00:52:34'),
(115, 85, 'Turf Green', '#027c0b', NULL, 'Enable', 'shirt', '2019-03-07 00:52:34', '2019-03-07 00:52:34'),
(116, 86, 'Kelly Green', '#23ad64', NULL, 'Enable', 'shirt', '2019-03-07 00:52:34', '2019-03-07 00:52:34'),
(117, 87, 'Island Reef', '#5dc38d', NULL, 'Enable', 'shirt', '2019-03-07 00:52:34', '2019-03-07 00:52:34'),
(118, 88, 'Jade Dome', '#228f7c', NULL, 'Enable', 'shirt', '2019-03-07 00:52:34', '2019-03-07 00:52:34'),
(119, 89, 'Seafoam', '#76a49e', NULL, 'Enable', 'shirt', '2019-03-07 00:52:34', '2019-03-07 00:52:34'),
(120, 90, 'Chalky Mint', '#6f9989', NULL, 'Enable', 'shirt', '2019-03-07 00:52:34', '2019-03-07 00:52:34'),
(121, 91, 'Kiwi', '#729753', NULL, 'Enable', 'shirt', '2019-03-07 00:52:34', '2019-03-07 00:52:34'),
(122, 92, 'Green', '#1a5e1d', NULL, 'Enable', 'shirt', '2019-03-07 00:52:34', '2019-03-07 00:52:34'),
(123, 93, 'Forest Green', '#0f5015', NULL, 'Enable', 'shirt', '2019-03-07 00:52:34', '2019-03-07 00:52:34'),
(124, 94, 'Military Green', '#667c54', NULL, 'Enable', 'shirt', '2019-03-07 00:52:34', '2019-03-07 00:52:34'),
(125, 95, 'Dark Green', '#183c1a', NULL, 'Enable', 'shirt', '2019-03-07 00:52:34', '2019-03-07 00:52:34'),
(126, 96, 'Sport Dark Green', '#043e0d', NULL, 'Enable', 'shirt', '2019-03-07 00:52:34', '2019-03-07 00:52:34'),
(127, 97, 'Olive', '#54563f', NULL, 'Enable', 'shirt', '2019-03-07 00:52:34', '2019-03-07 00:52:34'),
(128, 98, 'Pistachio', '#a7b689', NULL, 'Enable', 'shirt', '2019-03-07 00:52:34', '2019-03-07 00:52:34'),
(129, 99, 'Orchid', '#bea8c4', NULL, 'Enable', 'shirt', '2019-03-07 00:52:34', '2019-03-07 00:52:34'),
(130, 100, 'Sport Purple', '#4d2b62', NULL, 'Enable', 'shirt', '2019-03-07 00:52:34', '2019-03-07 00:52:34'),
(131, 101, 'Violet', '#9187a5', NULL, 'Enable', 'shirt', '2019-03-07 00:52:34', '2019-03-07 00:52:34'),
(132, 102, 'Graphite', '#484b5a', NULL, 'Enable', 'shirt', '2019-03-07 00:52:34', '2019-03-07 00:52:34'),
(133, 103, 'Purple', '#340f4d', NULL, 'Enable', 'shirt', '2019-03-07 00:52:34', '2019-03-07 00:52:34'),
(134, 104, 'Sport Dark Maroon', '#400412', NULL, 'Enable', 'shirt', '2019-03-07 00:52:34', '2019-03-07 00:52:34'),
(135, 105, 'Silver Grey', '#c5c5c5', NULL, 'Enable', 'shirt', '2019-03-07 00:52:34', '2019-03-07 00:52:34'),
(136, 106, 'Gravel ', '#b2b4b5', NULL, 'Enable', 'shirt', '2019-03-07 00:52:34', '2019-03-07 00:52:34'),
(137, 107, 'Ice Grey', '#c3bab1', NULL, 'Enable', 'shirt', '2019-03-07 00:52:34', '2019-03-07 00:52:34'),
(138, 108, 'Prairie Dust', '#675f40', NULL, 'Enable', 'shirt', '2019-03-07 00:52:34', '2019-03-07 00:52:34'),
(139, 109, 'Charcoal', '#504d46', NULL, 'Enable', 'shirt', '2019-03-07 00:52:34', '2019-03-07 00:52:34'),
(140, 110, 'Dark Chocolate', '#291e0b', NULL, 'Enable', 'shirt', '2019-03-07 00:52:34', '2019-03-07 00:52:34');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fonts`
--

CREATE TABLE `fonts` (
  `id` int(10) UNSIGNED NOT NULL,
  `fontcategory_id` int(10) UNSIGNED NOT NULL,
  `displayname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `size` int(11) NOT NULL,
  `file` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `fonts`
--

INSERT INTO `fonts` (`id`, `fontcategory_id`, `displayname`, `name`, `size`, `file`, `status`, `description`, `created_at`, `updated_at`) VALUES
(1, 8, 'Old Standard', 'OldStandard-Regular', 10, 'OldStandard-Regular.otf', 'Enable', 'OldStandard-Regular', '2019-03-07 00:52:34', '2019-03-07 00:52:34'),
(2, 6, 'Lemon Tuesday', 'LemonTuesday', 10, 'LemonTuesday.otf', 'Enable', 'LemonTuesday', '2019-03-07 00:52:34', '2019-03-07 00:52:34'),
(3, 6, 'Carybe', 'Carybe', 10, 'Carybe.ttf', 'Enable', 'Carybe', '2019-03-07 00:52:34', '2019-03-07 00:52:34'),
(4, 6, 'Digory Doodles PS', 'Digory_Doodles_PS', 4, 'Digory_Doodles_PS.ttf', 'Enable', 'Digory_Doodles_PS', '2019-03-07 00:52:34', '2019-03-07 00:52:34'),
(5, 6, 'Loogie Hawk', 'LoogieHawk', 10, 'LoogieHawk.otf', 'Enable', 'LoogieHawk', '2019-03-07 00:52:34', '2019-03-07 00:52:34'),
(6, 6, 'To The Point', 'To The Point', 10, 'To The Point.ttf', 'Enable', 'To The Point', '2019-03-07 00:52:34', '2019-03-07 00:52:34'),
(7, 6, 'Junior Cat', 'Junior_CAT', 10, 'Junior_CAT.ttf', 'Enable', 'Junior_CAT', '2019-03-07 00:52:34', '2019-03-07 00:52:34'),
(8, 9, 'Crass Roots', 'CRASS ROOTS', 10, '!CRASS_ROOTS_OFL.ttf', 'Enable', 'CRASS ROOTS', '2019-03-07 00:52:34', '2019-03-07 00:52:34'),
(9, 1, 'Lampoon', 'lampoon', 10, 'lampoon.otf', 'Enable', 'lampoon', '2019-03-07 00:52:34', '2019-03-07 00:52:34'),
(10, 1, 'Taurus Mono Outline Bold', 'Taurus-Mono-Outline-Bold', 10, 'Taurus-Mono-Outline-Bold.otf', 'Enable', 'Taurus-Mono-Outline-Bold', '2019-03-07 00:52:34', '2019-03-07 00:52:34'),
(11, 1, 'Vipond Octic', 'vipond_octic', 10, 'vipond_octic.otf', 'Enable', 'vipond_octic', '2019-03-07 00:52:34', '2019-03-07 00:52:34'),
(12, 2, 'Halt', 'Halt', 10, 'Halt.ttf', 'Enable', 'Halt', '2019-03-07 00:52:34', '2019-03-07 00:52:34'),
(13, 2, 'Krugmann Brush', 'KrugmannBrush', 10, 'KrugmannBrush.ttf', 'Enable', 'KrugmannBrush', '2019-03-07 00:52:34', '2019-03-07 00:52:34'),
(14, 2, 'Shash', 'shash', 6, 'shash.ttf', 'Enable', 'shash', '2019-03-07 00:52:34', '2019-03-07 00:52:34'),
(15, 5, 'Broken Glass', 'BrokenGlass', 10, 'BrokenGlass.ttf', 'Enable', 'BrokenGlass', '2019-03-07 00:52:34', '2019-03-07 00:52:34'),
(16, 5, 'Catenary-Stamp', 'Catenary-Stamp', 10, 'Catenary-Stamp.ttf', 'Enable', 'Catenary-Stamp', '2019-03-07 00:52:34', '2019-03-07 00:52:34'),
(17, 5, 'Chalk Line Outline', 'Chalk Line Outline', 10, 'Chalk Line Outline.ttf', 'Enable', 'Chalk Line Outline', '2019-03-07 00:52:34', '2019-03-07 00:52:34'),
(18, 5, 'Mortified', 'Mortified', 10, 'Mortified.ttf', 'Enable', 'Mortified', '2019-03-07 00:52:34', '2019-03-07 00:52:34'),
(19, 5, 'Tippa', 'Tippa', 10, 'Tippa.ttf', 'Enable', 'Tippa', '2019-03-07 00:52:34', '2019-03-07 00:52:34'),
(20, 7, 'Pacifico', 'Pacifico', 10, 'Pacifico.ttf', 'Enable', 'Pacifico', '2019-03-07 00:52:34', '2019-03-07 00:52:34'),
(21, 7, 'Symphonie CAT', 'SymphonieCAT', 10, 'SymphonieCAT.ttf', 'Enable', 'SymphonieCAT', '2019-03-07 00:52:34', '2019-03-07 00:52:34'),
(22, 8, 'CATChilds', 'CATChilds', 10, 'CATChilds.ttf', 'Enable', 'CATChilds', '2019-03-07 00:52:34', '2019-03-07 00:52:34'),
(23, 8, 'Mash-up', 'Mash-up', 10, 'Mash-up.ttf', 'Enable', 'Mash-up', '2019-03-07 00:52:34', '2019-03-07 00:52:34'),
(24, 8, 'NixieOne', 'NixieOne', 10, 'NixieOne.ttf', 'Enable', 'NixieOne', '2019-03-07 00:52:34', '2019-03-07 00:52:34'),
(25, 8, 'Standard Graf', 'Standard Graf', 10, 'Standard_Graf.ttf', 'Enable', 'Standard Graf', '2019-03-07 00:52:34', '2019-03-07 00:52:34'),
(26, 1, 'Rabanera Outline Shadow', 'Rabanera-outline-shadow', 10, 'Rabanera-outline-shadow.ttf', 'Enable', 'Rabanera-outline-shadow', '2019-03-07 00:52:34', '2019-03-07 00:52:34'),
(27, 1, 'Railroader', 'Railroader', 10, 'Railroader.ttf', 'Enable', 'Railroader', '2019-03-07 00:52:34', '2019-03-07 00:52:34'),
(28, 9, 'USSR STENCIL WEBFONT', 'USSR STENCIL WEBFONT', 10, 'USSR STENCIL WEBFONT.ttf', 'Enable', 'USSR STENCIL WEBFONT', '2019-03-07 00:52:34', '2019-03-07 00:52:34'),
(29, 8, 'AmaticSC', 'AmaticSC-Bold', 10, 'AmaticSC-Bold.ttf', 'Enable', 'AmaticSC-Bold', '2019-03-07 00:52:34', '2019-03-07 00:52:34'),
(30, 8, 'ABeeZee', 'ABeeZee-Regular', 10, 'ABeeZee-Regular.ttf', 'Enable', 'ABeeZee-Regular', '2019-03-07 00:52:34', '2019-03-07 00:52:34'),
(31, 5, 'Monoton', 'Monoton-Regular', 10, 'Monoton-Regular.ttf', 'Enable', 'Monoton-Regular', '2019-03-07 00:52:34', '2019-03-07 00:52:34'),
(32, 8, 'Michroma', 'Michroma', 10, 'Michroma.ttf', 'Enable', 'Michroma', '2019-03-07 00:52:34', '2019-03-07 00:52:34'),
(33, 7, 'Sarina', 'Sarina-Regular', 10, 'Sarina-Regular.ttf', 'Enable', 'Sarina-Regular', '2019-03-07 00:52:34', '2019-03-07 00:52:34'),
(34, 7, 'DrSugiyama', 'DrSugiyama-Regular', 10, 'DrSugiyama-Regular.ttf', 'Enable', 'DrSugiyama-Regular', '2019-03-07 00:52:34', '2019-03-07 00:52:34'),
(35, 9, 'Allerta Stencil', 'AllertaStencil-Regular', 10, 'AllertaStencil-Regular.ttf', 'Enable', 'AllertaStencil-Regular', '2019-03-07 00:52:34', '2019-03-07 00:52:34'),
(36, 9, 'Sirin Stencil', 'SirinStencil-Regular', 10, 'SirinStencil-Regular.ttf', 'Enable', 'SirinStencil-Regular', '2019-03-07 00:52:34', '2019-03-07 00:52:34'),
(37, 2, 'Caveat Brush ', 'CaveatBrush-Regular', 10, 'CaveatBrush-Regular.ttf', 'Enable', 'CaveatBrush-Regular', '2019-03-07 00:52:34', '2019-03-07 00:52:34'),
(38, 1, 'EmporiumNF', 'EmporiumNF', 10, 'EmporiumNF.ttf', 'Enable', 'EmporiumNF', '2019-03-07 00:52:34', '2019-03-07 00:52:34'),
(39, 1, 'PROMESH', 'PROMESH-Regular', 10, 'PROMESH-Regular.ttf', 'Enable', 'PROMESH-Regular', '2019-03-07 00:52:34', '2019-03-07 00:52:34'),
(40, 2, 'Belepotan', 'Belepotan-Normal', 10, 'Belepotan-Normal.otf', 'Enable', 'Belepotan-Normal', '2019-03-07 00:52:34', '2019-03-07 00:52:34'),
(41, 2, 'Blowbrush', 'blowbrush', 10, 'blowbrush.otf', 'Enable', 'blowbrush', '2019-03-07 00:52:34', '2019-03-07 00:52:34'),
(42, 2, 'Painting With Chocolate', 'Painting_With_Chocolate', 10, 'Painting_With_Chocolate.ttf', 'Enable', 'Painting_With_Chocolate', '2019-03-07 00:52:34', '2019-03-07 00:52:34'),
(43, 2, 'Mrs Sheppards', 'MrsSheppards-Regular', 10, 'MrsSheppards-Regular.ttf', 'Enable', 'MrsSheppards-Regular', '2019-03-07 00:52:34', '2019-03-07 00:52:34'),
(44, 2, 'Seaweed Script', 'SeaweedScript-Regular', 10, 'SeaweedScript-Regular.ttf', 'Enable', 'SeaweedScript-Regular', '2019-03-07 00:52:34', '2019-03-07 00:52:34'),
(45, 2, 'Rockmaker', 'Rockmaker', 10, 'Rockmaker.ttf', 'Enable', 'Rockmaker', '2019-03-07 00:52:34', '2019-03-07 00:52:34'),
(46, 5, 'Grudge', 'grudge', 10, 'grudge.ttf', 'Enable', 'grudge', '2019-03-07 00:52:34', '2019-03-07 00:52:34'),
(47, 5, 'Akronim', 'Akronim-Regular', 10, 'Akronim-Regular.ttf', 'Enable', 'Akronim-Regular', '2019-03-07 00:52:34', '2019-03-07 00:52:34'),
(48, 5, 'Ransom', 'ransom', 10, 'ransom.ttf', 'Enable', 'ransom', '2019-03-07 00:52:34', '2019-03-07 00:52:34'),
(49, 5, 'Waver', 'waver', 10, 'waver.ttf', 'Enable', 'waver', '2019-03-07 00:52:34', '2019-03-07 00:52:34'),
(50, 5, 'SW Staff Meeting', 'SWStaffMeeting', 10, 'SWStaffMeeting.ttf', 'Enable', 'SWStaffMeeting', '2019-03-07 00:52:34', '2019-03-07 00:52:34'),
(51, 4, 'Asset', 'Asset-Regular', 7, 'Asset-Regular.ttf', 'Enable', 'Asset-Regular', '2019-03-07 00:52:34', '2019-03-07 00:52:34'),
(52, 4, 'Boecklins Universe', 'Boecklins Universe', 10, 'Boecklins_Universe.ttf', 'Enable', 'Boecklins Universe', '2019-03-07 00:52:34', '2019-03-07 00:52:34'),
(53, 4, 'Empire State NF', 'EmpireStateNF', 10, 'EmpireStateNF.ttf', 'Enable', 'EmpireStateNF', '2019-03-07 00:52:34', '2019-03-07 00:52:34'),
(54, 4, 'Engagement', 'Engagement-Regular', 10, 'Engagement-Regular.ttf', 'Enable', 'Engagement-Regular', '2019-03-07 00:52:34', '2019-03-07 00:52:34'),
(55, 4, 'Little Rickey NF', 'LittleRickeyNF', 10, 'LittleRickeyNF.ttf', 'Enable', 'LittleRickeyNF', '2019-03-07 00:52:34', '2019-03-07 00:52:34'),
(56, 4, 'Peach Sundress', 'peach-sundress', 10, 'peach-sundress.ttf', 'Enable', 'peach-sundress', '2019-03-07 00:52:34', '2019-03-07 00:52:34'),
(57, 4, 'PLAST20', 'PLAST20_', 10, 'PLAST20_.ttf', 'Enable', 'PLAST20_', '2019-03-07 00:52:34', '2019-03-07 00:52:34'),
(58, 4, 'Runy Tunes Revisited NF', 'RunyTunesRevisitedNF', 10, 'RunyTunesRevisitedNF.ttf', 'Enable', 'RunyTunesRevisitedNF', '2019-03-07 00:52:34', '2019-03-07 00:52:34'),
(59, 4, 'Sho-CardCapsNF', 'Sho-CardCapsNF', 10, 'Sho-CardCapsNF.otf', 'Enable', 'Sho-CardCapsNF', '2019-03-07 00:52:34', '2019-03-07 00:52:34'),
(60, 4, 'Stalemate', 'Stalemate-Regular', 10, 'Stalemate-Regular.ttf', 'Enable', 'Stalemate-Regular', '2019-03-07 00:52:34', '2019-03-07 00:52:34'),
(61, 4, 'Theatrical', 'Theatrical', 10, 'Theatrical.ttf', 'Enable', 'Theatrical', '2019-03-07 00:52:34', '2019-03-07 00:52:34'),
(62, 8, 'Bebas Neue ', 'BebasNeue-Regular', 10, 'BebasNeue-Regular.ttf', 'Enable', 'BebasNeue-Regular', '2019-03-07 00:52:34', '2019-03-07 00:52:34'),
(63, 8, 'CostaRica', 'CostaRica', 10, 'CostaRica.otf', 'Enable', 'CostaRica', '2019-03-07 00:52:34', '2019-03-07 00:52:34'),
(64, 8, 'Dozer Two', 'DozerTwo', 10, 'DozerTwo.ttf', 'Enable', 'DozerTwo', '2019-03-07 00:52:34', '2019-03-07 00:52:34'),
(65, 8, 'Helmet', 'Helmet-Regular', 10, 'Helmet-Regular.ttf', 'Enable', 'Helmet-Regular', '2019-03-07 00:52:34', '2019-03-07 00:52:34'),
(66, 8, 'Kazmann Sans', 'Kazmann Sans', 10, 'Kazmann_Sans.ttf', 'Enable', 'Kazmann Sans', '2019-03-07 00:52:34', '2019-03-07 00:52:34'),
(67, 8, 'Nonchalance', 'Nonchalance Bold', 10, 'Nonchalance_Bold.otf', 'Enable', 'Nonchalance Bold', '2019-03-07 00:52:34', '2019-03-07 00:52:34'),
(68, 8, 'Ostrich Sans', 'OstrichSans-Heavy', 10, 'OstrichSans-Heavy.otf', 'Enable', 'OstrichSans-Heavy', '2019-03-07 00:52:34', '2019-03-07 00:52:34'),
(69, 8, 'sportsjersey', 'sportsjersey', 10, 'sportsjersey.ttf', 'Enable', 'sportsjersey', '2019-03-07 00:52:34', '2019-03-07 00:52:34'),
(70, 8, 'college', 'collegeb', 10, 'collegeb.ttf', 'Enable', 'collegeb', '2019-03-07 00:52:34', '2019-03-07 00:52:34'),
(71, 3, 'Catty', 'catty', 10, 'catty.ttf', 'Enable', 'catty', '2019-03-07 00:52:34', '2019-03-07 00:52:34'),
(72, 2, 'MMA Champ', 'MMAchamp', 10, 'MMAchamp.woff', 'Enable', 'MMAchamp', '2019-03-07 00:52:34', '2019-03-07 00:52:34');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `font_categories`
--

CREATE TABLE `font_categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `font_categories`
--

INSERT INTO `font_categories` (`id`, `name`, `status`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Block', 'Enable', 'Block', '2019-03-07 00:52:34', '2019-03-07 00:52:34'),
(2, 'Brush', 'Enable', 'Brush', '2019-03-07 00:52:34', '2019-03-07 00:52:34'),
(3, 'Comical', 'Enable', 'Comical', '2019-03-07 00:52:34', '2019-03-07 00:52:34'),
(4, 'Decorative', 'Enable', 'Decorative', '2019-03-07 00:52:34', '2019-03-07 00:52:34'),
(5, 'Distressed', 'Enable', 'Distressed', '2019-03-07 00:52:34', '2019-03-07 00:52:34'),
(6, 'Handwriting', 'Enable', 'Handwriting', '2019-03-07 00:52:34', '2019-03-07 00:52:34'),
(7, 'Script', 'Enable', 'Script', '2019-03-07 00:52:34', '2019-03-07 00:52:34'),
(8, 'Standard', 'Enable', 'Standard', '2019-03-07 00:52:34', '2019-03-07 00:52:34'),
(9, 'Stencil', 'Enable', 'Stencil', '2019-03-07 00:52:34', '2019-03-07 00:52:34');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `invoices`
--

CREATE TABLE `invoices` (
  `id` int(10) UNSIGNED NOT NULL,
  `invoice_no` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `invoice_date` date NOT NULL,
  `due_date` date NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `client` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `client_address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_total` decimal(8,2) NOT NULL,
  `discount` decimal(8,2) NOT NULL,
  `grand_total` decimal(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `invoice_products`
--

CREATE TABLE `invoice_products` (
  `id` int(10) UNSIGNED NOT NULL,
  `invoice_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `qty` int(11) NOT NULL,
  `price` decimal(8,2) NOT NULL,
  `total` decimal(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(4608, '2014_10_12_000000_create_users_table', 1),
(4609, '2014_10_12_100000_create_password_resets_table', 1),
(4610, '2015_01_20_084450_create_roles_table', 1),
(4611, '2015_01_20_084525_create_role_user_table', 1),
(4612, '2015_01_24_080208_create_permissions_table', 1),
(4613, '2015_01_24_080433_create_permission_role_table', 1),
(4614, '2015_12_04_003040_add_special_role_column', 1),
(4615, '2017_10_17_170735_create_permission_user_table', 1),
(4616, '2019_01_03_164934_add_additional_fields_to_users_table', 1),
(4617, '2019_01_03_182621_create_colors_table', 1),
(4618, '2019_01_04_225907_create_jobs_table', 1),
(4619, '2019_01_05_080210_create_categories_table', 1),
(4620, '2019_01_05_081015_create_subcategories_table', 1),
(4621, '2019_01_06_092200_create_sizes_table', 1),
(4622, '2019_01_07_185036_create_newsletters_table', 1),
(4623, '2019_01_09_175615_create_audits_table', 1),
(4624, '2019_01_09_194136_modify_value_special_to_table_roles', 1),
(4625, '2019_01_13_065836_create_fonts_categories_table', 1),
(4626, '2019_01_13_070301_create_fonts_table', 1),
(4627, '2019_01_22_073005_create_reservedwords_table', 1),
(4628, '2019_01_22_230307_create_promo_code_table', 1),
(4629, '2019_02_01_040046_create_product_table', 1),
(4630, '2019_02_01_052057_add_parent_id_to_products', 1),
(4631, '2019_02_01_065720_create_brands_table', 1),
(4632, '2019_02_01_134842_create_invoices_table', 1),
(4633, '2019_02_01_134848_create_invoice_products_table', 1),
(4634, '2019_02_01_214809_add_color_id_to_products', 1),
(4635, '2019_02_03_035105_create_product_size_table', 1),
(4636, '2019_02_03_044034_create_relatedproduct_table', 1),
(4637, '2019_02_04_174925_create_size_chart_table', 1),
(4638, '2019_02_04_175224_create_product_size_chart_table', 1),
(4639, '2019_02_19_205658_create_product_categories_table', 1),
(4640, '2019_02_28_174828_create_aditional_image_table', 1),
(4641, '2019_02_28_175405_create_product_aditional_image_table', 1),
(4642, '2019_03_04_222129_create_price_shirt_chart_table', 1),
(4643, '2019_03_04_222943_create_product_price_shirt_chart_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `newsletters`
--

CREATE TABLE `newsletters` (
  `id` int(10) UNSIGNED NOT NULL,
  `from` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `to` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attach` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permissions`
--

CREATE TABLE `permissions` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `slug`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Users List', 'users.index', 'List of the users', '2019-03-07 00:52:33', '2019-03-07 00:52:33'),
(2, 'User Details', 'users.show', 'View user Details', '2019-03-07 00:52:33', '2019-03-07 00:52:33'),
(3, 'Edit User', 'users.edit', 'Edit user informationa', '2019-03-07 00:52:33', '2019-03-07 00:52:33'),
(4, 'Delete User', 'users.destroy', 'Delete user from the system', '2019-03-07 00:52:33', '2019-03-07 00:52:33'),
(5, 'Create User', 'users.create', 'Add user to the system', '2019-03-07 00:52:33', '2019-03-07 00:52:33'),
(6, 'Roles List', 'roles.index', 'List of the roles', '2019-03-07 00:52:33', '2019-03-07 00:52:33'),
(7, 'Role Details', 'roles.show', 'View role Details', '2019-03-07 00:52:33', '2019-03-07 00:52:33'),
(8, 'Edit Role', 'roles.edit', 'Edit role information', '2019-03-07 00:52:33', '2019-03-07 00:52:33'),
(9, 'Delete Role', 'roles.destroy', 'Delete role from the system', '2019-03-07 00:52:33', '2019-03-07 00:52:33'),
(10, 'Create Role', 'roles.create', 'Add role to the system', '2019-03-07 00:52:33', '2019-03-07 00:52:33'),
(11, 'Shirts Colors List', 'shirtcolors.index', 'List of the shirt colors', '2019-03-07 00:52:33', '2019-03-07 00:52:33'),
(12, 'Shirt Color Details', 'shirtcolors.show', 'View shirt colors Details', '2019-03-07 00:52:33', '2019-03-07 00:52:33'),
(13, 'Edit Shirt Color', 'shirtcolors.edit', 'Edit shirt colors informationa', '2019-03-07 00:52:33', '2019-03-07 00:52:33'),
(14, 'Delete Shirt Color', 'shirtcolors.destroy', 'Delete shirt colors from the system', '2019-03-07 00:52:33', '2019-03-07 00:52:33'),
(15, 'Create Shirt Color', 'shirtcolors.create', 'Add shirt colors to the system', '2019-03-07 00:52:33', '2019-03-07 00:52:33'),
(16, 'Ink Colors List', 'inkcolors.index', 'List of the ink colors', '2019-03-07 00:52:33', '2019-03-07 00:52:33'),
(17, 'Ink Color Details', 'inkcolors.show', 'View ink colors Details', '2019-03-07 00:52:33', '2019-03-07 00:52:33'),
(18, 'Edit Ink Color', 'inkcolors.edit', 'Edit ink colors informationa', '2019-03-07 00:52:33', '2019-03-07 00:52:33'),
(19, 'Delete Ink Color', 'inkcolors.destroy', 'Delete ink colors from the system', '2019-03-07 00:52:33', '2019-03-07 00:52:33'),
(20, 'Create Ink Color', 'inkcolors.create', 'Add ink colors to the system', '2019-03-07 00:52:33', '2019-03-07 00:52:33'),
(21, 'Newsletters View', 'admin.shownewsletters', 'Display newsletters view', '2019-03-07 00:52:33', '2019-03-07 00:52:33'),
(22, 'Send Newsletters email', 'admin.sendnewslettersemail', 'Send Newsletters to a customers', '2019-03-07 00:52:33', '2019-03-07 00:52:33'),
(23, 'Newsletters History', 'admin.newslettershistory', 'List of all Newsletters sended to a customers', '2019-03-07 00:52:33', '2019-03-07 00:52:33'),
(24, 'Categories List', 'categories.index', 'List of the categories', '2019-03-07 00:52:33', '2019-03-07 00:52:33'),
(25, 'Category Details', 'categories.show', 'View categories Details', '2019-03-07 00:52:33', '2019-03-07 00:52:33'),
(26, 'Edit Category', 'categories.edit', 'Edit categories informationa', '2019-03-07 00:52:33', '2019-03-07 00:52:33'),
(27, 'Delete Category', 'categories.destroy', 'Delete categories from the system', '2019-03-07 00:52:33', '2019-03-07 00:52:33'),
(28, 'Create Category', 'categories.create', 'Add categories to the system', '2019-03-07 00:52:33', '2019-03-07 00:52:33'),
(29, 'SubCategories List', 'subcategories.index', 'List of the subcategories', '2019-03-07 00:52:33', '2019-03-07 00:52:33'),
(30, 'SubCategory Details', 'subcategories.show', 'View subcategories Details', '2019-03-07 00:52:33', '2019-03-07 00:52:33'),
(31, 'Edit SubCategory', 'subcategories.edit', 'Edit subcategories informationa', '2019-03-07 00:52:33', '2019-03-07 00:52:33'),
(32, 'Delete SubCategory', 'subcategories.destroy', 'Delete subcategories from the system', '2019-03-07 00:52:33', '2019-03-07 00:52:33'),
(33, 'Create SubCategory', 'subcategories.create', 'Add subcategories to the system', '2019-03-07 00:52:33', '2019-03-07 00:52:33'),
(34, 'Sizes List', 'sizes.index', 'List of the sizes', '2019-03-07 00:52:33', '2019-03-07 00:52:33'),
(35, 'Size Details', 'sizes.show', 'View sizes Details', '2019-03-07 00:52:33', '2019-03-07 00:52:33'),
(36, 'Edit Size', 'sizes.edit', 'Edit sizes informationa', '2019-03-07 00:52:33', '2019-03-07 00:52:33'),
(37, 'Delete Size', 'sizes.destroy', 'Delete sizes from the system', '2019-03-07 00:52:33', '2019-03-07 00:52:33'),
(38, 'Create Size', 'sizes.create', 'Add sizes to the system', '2019-03-07 00:52:33', '2019-03-07 00:52:33'),
(39, 'Record List', 'records.index', 'List of the records', '2019-03-07 00:52:33', '2019-03-07 00:52:33'),
(40, 'Record Details', 'records.show', 'View record Details', '2019-03-07 00:52:33', '2019-03-07 00:52:33'),
(41, 'Delete Record', 'records.destroy', 'Delete record from the system', '2019-03-07 00:52:33', '2019-03-07 00:52:33'),
(42, 'Fonts Categories List', 'fontscategories.index', 'List of the fonts categories', '2019-03-07 00:52:33', '2019-03-07 00:52:33'),
(43, 'Font Category Details', 'fontscategories.show', 'View fonts categories Details', '2019-03-07 00:52:33', '2019-03-07 00:52:33'),
(44, 'Edit Font Category', 'fontscategories.edit', 'Edit fonts categories informationa', '2019-03-07 00:52:33', '2019-03-07 00:52:33'),
(45, 'Delete Font Category', 'fontscategories.destroy', 'Delete fonts categories from the system', '2019-03-07 00:52:33', '2019-03-07 00:52:33'),
(46, 'Create Font Category', 'fontscategories.create', 'Add fonts categories to the system', '2019-03-07 00:52:33', '2019-03-07 00:52:33'),
(47, 'Fonts  List', 'fonts.index', 'List of the fonts', '2019-03-07 00:52:34', '2019-03-07 00:52:34'),
(48, 'Font Details', 'fonts.show', 'View fonts  Details', '2019-03-07 00:52:34', '2019-03-07 00:52:34'),
(49, 'Edit Font ', 'fonts.edit', 'Edit fonts  information', '2019-03-07 00:52:34', '2019-03-07 00:52:34'),
(50, 'Delete Font ', 'fonts.destroy', 'Delete fonts  from the system', '2019-03-07 00:52:34', '2019-03-07 00:52:34'),
(51, 'Create Font ', 'fonts.create', 'Add fonts  to the system', '2019-03-07 00:52:34', '2019-03-07 00:52:34'),
(52, 'Reserverd Word List', 'reserverdwords.index', 'List of the reserverdwords', '2019-03-07 00:52:34', '2019-03-07 00:52:34'),
(53, 'Reserverd Word Details', 'reserverdwords.show', 'View reserverdwords Details', '2019-03-07 00:52:34', '2019-03-07 00:52:34'),
(54, 'Edit Reserverd Word', 'reserverdwords.edit', 'Edit reserverdwords informationa', '2019-03-07 00:52:34', '2019-03-07 00:52:34'),
(55, 'Delete Reserverd Word', 'reserverdwords.destroy', 'Delete reserverdwords from the system', '2019-03-07 00:52:34', '2019-03-07 00:52:34'),
(56, 'Create Reserverd Word', 'reserverdwords.create', 'Add reserverdwords to the system', '2019-03-07 00:52:34', '2019-03-07 00:52:34'),
(57, 'Promo Code List', 'promocodes.index', 'List of the promocodes', '2019-03-07 00:52:34', '2019-03-07 00:52:34'),
(58, 'Promo Code Details', 'promocodes.show', 'View promocodes Details', '2019-03-07 00:52:34', '2019-03-07 00:52:34'),
(59, 'Edit Promo Code', 'promocodes.edit', 'Edit promocodes informationa', '2019-03-07 00:52:34', '2019-03-07 00:52:34'),
(60, 'Delete Promo Code', 'promocodes.destroy', 'Delete promocodes from the system', '2019-03-07 00:52:34', '2019-03-07 00:52:34'),
(61, 'Create Promo Code', 'promocodes.create', 'Add promocodes to the system', '2019-03-07 00:52:34', '2019-03-07 00:52:34'),
(62, 'Brands List', 'brands.index', 'List of the brands', '2019-03-07 00:52:34', '2019-03-07 00:52:34'),
(63, 'Brand Details', 'brands.show', 'View brands Details', '2019-03-07 00:52:34', '2019-03-07 00:52:34'),
(64, 'Edit Brand', 'brands.edit', 'Edit brands informationa', '2019-03-07 00:52:34', '2019-03-07 00:52:34'),
(65, 'Delete Brand', 'brands.destroy', 'Delete brands from the system', '2019-03-07 00:52:34', '2019-03-07 00:52:34'),
(66, 'Create Brand', 'brands.create', 'Add brands to the system', '2019-03-07 00:52:34', '2019-03-07 00:52:34');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permission_role`
--

CREATE TABLE `permission_role` (
  `id` int(10) UNSIGNED NOT NULL,
  `permission_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permission_user`
--

CREATE TABLE `permission_user` (
  `id` int(10) UNSIGNED NOT NULL,
  `permission_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `price_shirts`
--

CREATE TABLE `price_shirts` (
  `id` int(10) UNSIGNED NOT NULL,
  `RANGEFROM` int(11) NOT NULL,
  `RANGETO` int(11) NOT NULL,
  `_INFANT` decimal(8,2) DEFAULT '0.00',
  `_INFANTWHITE` decimal(8,2) DEFAULT '0.00',
  `_TODDLER` decimal(8,2) DEFAULT '0.00',
  `_TODDLERWHITE` decimal(8,2) DEFAULT '0.00',
  `_YOUTH` decimal(8,2) DEFAULT '0.00',
  `_YOUTHWHITE` decimal(8,2) DEFAULT '0.00',
  `_ADULT` decimal(8,2) DEFAULT '0.00',
  `_ADULTWHITE` decimal(8,2) DEFAULT '0.00',
  `_2xl` decimal(8,2) DEFAULT '0.00',
  `_2xlWHITE` decimal(8,2) DEFAULT '0.00',
  `_3xl` decimal(8,2) DEFAULT '0.00',
  `_3xlWHITE` decimal(8,2) DEFAULT '0.00',
  `_4xl` decimal(8,2) DEFAULT '0.00',
  `_4xlWHITE` decimal(8,2) DEFAULT '0.00',
  `_5xl` decimal(8,2) DEFAULT '0.00',
  `_5xlWHITE` decimal(8,2) DEFAULT '0.00',
  `_ONE_SIZE` decimal(8,2) DEFAULT '0.00',
  `_ONE_SIZEWHITE` decimal(8,2) DEFAULT '0.00',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `price_shirts`
--

INSERT INTO `price_shirts` (`id`, `RANGEFROM`, `RANGETO`, `_INFANT`, `_INFANTWHITE`, `_TODDLER`, `_TODDLERWHITE`, `_YOUTH`, `_YOUTHWHITE`, `_ADULT`, `_ADULTWHITE`, `_2xl`, `_2xlWHITE`, `_3xl`, `_3xlWHITE`, `_4xl`, `_4xlWHITE`, `_5xl`, `_5xlWHITE`, `_ONE_SIZE`, `_ONE_SIZEWHITE`, `created_at`, `updated_at`) VALUES
(1, 1, 10000, NULL, NULL, NULL, NULL, '18.00', '17.00', '18.00', '17.00', '20.50', '19.50', '21.50', '20.50', '22.50', '21.50', '22.50', '21.50', NULL, NULL, '2019-03-07 01:17:29', '2019-03-07 01:17:29');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `stylenumber` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fabric` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `visibility` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `min_quantity` int(11) DEFAULT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `brand` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sizechartimage` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sizechartdescription` longtext COLLATE utf8mb4_unicode_ci,
  `frontenable` tinyint(1) NOT NULL DEFAULT '1',
  `frontimage` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `frontguidelineshorizontal` tinyint(1) NOT NULL DEFAULT '1',
  `frontguidelinesvertical` tinyint(1) NOT NULL DEFAULT '1',
  `frontguidelinesyouth` tinyint(1) NOT NULL DEFAULT '0',
  `frontguidelinesadult` tinyint(1) NOT NULL DEFAULT '0',
  `frontguidelinesleftchest` tinyint(1) NOT NULL DEFAULT '0',
  `frontwidth` int(11) DEFAULT NULL,
  `frontheight` int(11) DEFAULT NULL,
  `frontleft` int(11) DEFAULT NULL,
  `fronttop` int(11) DEFAULT NULL,
  `rightimage` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rightenable` tinyint(1) NOT NULL DEFAULT '0',
  `rightguidelineshorizontal` tinyint(1) NOT NULL DEFAULT '1',
  `rightguidelinesvertical` tinyint(1) NOT NULL DEFAULT '1',
  `rightguidelinesyouth` tinyint(1) NOT NULL DEFAULT '0',
  `rightguidelinesadult` tinyint(1) NOT NULL DEFAULT '0',
  `rightguidelinesleftchest` tinyint(1) NOT NULL DEFAULT '0',
  `rightwidth` int(11) DEFAULT NULL,
  `rightheight` int(11) DEFAULT NULL,
  `rightleft` int(11) DEFAULT NULL,
  `righttop` int(11) DEFAULT NULL,
  `backimage` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `backenable` tinyint(1) NOT NULL DEFAULT '0',
  `backguidelineshorizontal` tinyint(1) NOT NULL DEFAULT '1',
  `backguidelinesvertical` tinyint(1) NOT NULL DEFAULT '1',
  `backguidelinesyouth` tinyint(1) NOT NULL DEFAULT '0',
  `backguidelinesadult` tinyint(1) NOT NULL DEFAULT '0',
  `backguidelinesleftchest` tinyint(1) NOT NULL DEFAULT '0',
  `backwidth` int(11) DEFAULT NULL,
  `backheight` int(11) DEFAULT NULL,
  `backleft` int(11) DEFAULT NULL,
  `backtop` int(11) DEFAULT NULL,
  `leftimage` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `leftenable` tinyint(1) NOT NULL DEFAULT '0',
  `leftguidelineshorizontal` tinyint(1) NOT NULL DEFAULT '1',
  `leftguidelinesvertical` tinyint(1) NOT NULL DEFAULT '1',
  `leftguidelinesyouth` tinyint(1) NOT NULL DEFAULT '0',
  `leftguidelinesadult` tinyint(1) NOT NULL DEFAULT '0',
  `leftguidelinesleftchest` tinyint(1) NOT NULL DEFAULT '0',
  `leftwidth` int(11) DEFAULT NULL,
  `leftheight` int(11) DEFAULT NULL,
  `leftleft` int(11) DEFAULT NULL,
  `lefttop` int(11) DEFAULT NULL,
  `_INFANT` decimal(8,2) DEFAULT '0.00',
  `_INFANTWHITE` decimal(8,2) DEFAULT '0.00',
  `_TODDLER` decimal(8,2) DEFAULT '0.00',
  `_TODDLERWHITE` decimal(8,2) DEFAULT '0.00',
  `_YOUTH` decimal(8,2) DEFAULT '0.00',
  `_YOUTHWHITE` decimal(8,2) DEFAULT '0.00',
  `_ADULT` decimal(8,2) DEFAULT '0.00',
  `_ADULTWHITE` decimal(8,2) DEFAULT '0.00',
  `_2xl` decimal(8,2) DEFAULT '0.00',
  `_2xlWHITE` decimal(8,2) DEFAULT '0.00',
  `_3xl` decimal(8,2) DEFAULT '0.00',
  `_3xlWHITE` decimal(8,2) DEFAULT '0.00',
  `_4xl` decimal(8,2) DEFAULT '0.00',
  `_4xlWHITE` decimal(8,2) DEFAULT '0.00',
  `_5xl` decimal(8,2) DEFAULT '0.00',
  `_5xlWHITE` decimal(8,2) DEFAULT '0.00',
  `_ONE_SIZE` decimal(8,2) DEFAULT '0.00',
  `_ONE_SIZEWHITE` decimal(8,2) DEFAULT '0.00',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `parent_id` int(10) UNSIGNED DEFAULT NULL,
  `color_id` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `products`
--

INSERT INTO `products` (`id`, `stylenumber`, `fabric`, `visibility`, `name`, `price`, `min_quantity`, `status`, `image`, `description`, `brand`, `sizechartimage`, `sizechartdescription`, `frontenable`, `frontimage`, `frontguidelineshorizontal`, `frontguidelinesvertical`, `frontguidelinesyouth`, `frontguidelinesadult`, `frontguidelinesleftchest`, `frontwidth`, `frontheight`, `frontleft`, `fronttop`, `rightimage`, `rightenable`, `rightguidelineshorizontal`, `rightguidelinesvertical`, `rightguidelinesyouth`, `rightguidelinesadult`, `rightguidelinesleftchest`, `rightwidth`, `rightheight`, `rightleft`, `righttop`, `backimage`, `backenable`, `backguidelineshorizontal`, `backguidelinesvertical`, `backguidelinesyouth`, `backguidelinesadult`, `backguidelinesleftchest`, `backwidth`, `backheight`, `backleft`, `backtop`, `leftimage`, `leftenable`, `leftguidelineshorizontal`, `leftguidelinesvertical`, `leftguidelinesyouth`, `leftguidelinesadult`, `leftguidelinesleftchest`, `leftwidth`, `leftheight`, `leftleft`, `lefttop`, `_INFANT`, `_INFANTWHITE`, `_TODDLER`, `_TODDLERWHITE`, `_YOUTH`, `_YOUTHWHITE`, `_ADULT`, `_ADULTWHITE`, `_2xl`, `_2xlWHITE`, `_3xl`, `_3xlWHITE`, `_4xl`, `_4xlWHITE`, `_5xl`, `_5xlWHITE`, `_ONE_SIZE`, `_ONE_SIZEWHITE`, `created_at`, `updated_at`, `parent_id`, `color_id`) VALUES
(1, 'G185', 'Cotton/Poly', 'Visible', 'Adult Heavy Blend Hood', '15.00', 1, 'Enable', 'Adult_Heavy_Blend_Hood.png', '<p>\r\n\r\nAdult Heavy Blend 8 oz Hood </p><p><br></p><p>Fabric: 50% Cotton, 50% Polyester</p><p>All Heather Sport colors are 60% cotton, 40% polyester</p>\r\n\r\n<br><p></p>', 'Gildan', '', '<p>\r\n\r\n</p><p>Length: Measure from shoulder seam at the collar to bottom hem.</p><p><br></p><p>Width:  Measure across the chest an inch below the armpit</p>\r\n\r\n<br><p></p>', 1, 'Adult_Heavy_Blend_Hood_front.png', 1, 1, 1, 0, 0, 335, 335, 215, 120, 'Adult_Heavy_Blend_Hood_right.png', 1, 1, 1, 0, 0, 0, 115, 438, 280, 160, 'Adult_Heavy_Blend_Hood_back.png', 1, 1, 1, 0, 0, 0, 350, 467, 205, 150, 'Adult_Heavy_Blend_Hood_left.png', 1, 1, 1, 0, 0, 0, 115, 438, 349, 160, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-03-07 01:17:29', '2019-03-07 01:17:29', NULL, NULL),
(5, 'G185', 'Cotton/Poly', 'Visible', 'Adult Heavy Blend Hood Black', '15.00', 1, 'Enable', 'Adult_Heavy_Blend_Hood_Black.png', '<p>\r\n\r\nAdult Heavy Blend 8 oz Hood </p><p><br></p><p>Fabric: 50% Cotton, 50% Polyester</p><p>All Heather Sport colors are 60% cotton, 40% polyester</p>\r\n\r\n<br><p></p>', 'Gildan', NULL, NULL, 1, 'Adult_Heavy_Blend_Hood_Black_front.png', 1, 1, 0, 0, 0, NULL, NULL, NULL, NULL, 'Adult_Heavy_Blend_Hood_Black_right.png', 0, 1, 1, 0, 0, 0, NULL, NULL, NULL, NULL, 'Adult_Heavy_Blend_Hood_Black_back.png', 0, 1, 1, 0, 0, 0, NULL, NULL, NULL, NULL, 'Adult_Heavy_Blend_Hood_Black_left.png', 0, 1, 1, 0, 0, 0, NULL, NULL, NULL, NULL, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '2019-03-07 02:54:34', '2019-03-07 03:00:44', 1, 35),
(6, 'G185', 'Cotton/Poly', 'Visible', 'Adult Heavy Blend Hood Charcoal', '15.00', 6, 'Enable', 'Adult_Heavy_Blend_Hood_Charcoal.png', '<p>\r\n\r\nAdult Heavy Blend 8 oz Hood </p><p><br></p><p>Fabric: 50% Cotton, 50% Polyester</p><p>All Heather Sport colors are 60% cotton, 40% polyester</p>\r\n\r\n<br><p></p>', 'Gildan', NULL, NULL, 1, 'Adult_Heavy_Blend_Hood_Charcoal_front.png', 1, 1, 0, 0, 0, NULL, NULL, NULL, NULL, 'Adult_Heavy_Blend_Hood_Charcoal_right.png', 0, 1, 1, 0, 0, 0, NULL, NULL, NULL, NULL, 'Adult_Heavy_Blend_Hood_Charcoal_back.png', 0, 1, 1, 0, 0, 0, NULL, NULL, NULL, NULL, 'Adult_Heavy_Blend_Hood_Charcoal_left.png', 0, 1, 1, 0, 0, 0, NULL, NULL, NULL, NULL, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '2019-03-07 02:58:28', '2019-03-07 03:10:15', 1, 139);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `product_aditional_image`
--

CREATE TABLE `product_aditional_image` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `aditional_image_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `product_aditional_image`
--

INSERT INTO `product_aditional_image` (`id`, `product_id`, `aditional_image_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '2019-03-06 19:17:29', '2019-03-06 19:17:29');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `product_categories`
--

CREATE TABLE `product_categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `subcategory_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `product_categories`
--

INSERT INTO `product_categories` (`id`, `product_id`, `category_id`, `subcategory_id`, `created_at`, `updated_at`) VALUES
(1, 1, 3, 5, '2019-03-06 19:17:29', '2019-03-06 19:17:29'),
(2, 1, 10, 27, '2019-03-06 19:17:29', '2019-03-06 19:17:29');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `product_price_shirt`
--

CREATE TABLE `product_price_shirt` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `price_shirt_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `product_price_shirt`
--

INSERT INTO `product_price_shirt` (`id`, `product_id`, `price_shirt_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '2019-03-06 19:17:29', '2019-03-06 19:17:29');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `product_size`
--

CREATE TABLE `product_size` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `size_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `product_size`
--

INSERT INTO `product_size` (`id`, `product_id`, `size_id`, `created_at`, `updated_at`) VALUES
(1, 1, 15, '2019-03-06 19:17:29', '2019-03-06 19:17:29'),
(2, 1, 16, '2019-03-06 19:17:29', '2019-03-06 19:17:29'),
(3, 1, 17, '2019-03-06 19:17:29', '2019-03-06 19:17:29'),
(4, 1, 18, '2019-03-06 19:17:29', '2019-03-06 19:17:29'),
(5, 1, 19, '2019-03-06 19:17:29', '2019-03-06 19:17:29'),
(6, 1, 21, '2019-03-06 19:17:29', '2019-03-06 19:17:29'),
(7, 1, 22, '2019-03-06 19:17:29', '2019-03-06 19:17:29'),
(8, 1, 23, '2019-03-06 19:17:29', '2019-03-06 19:17:29'),
(9, 1, 24, '2019-03-06 19:17:29', '2019-03-06 19:17:29'),
(10, 1, 25, '2019-03-06 19:17:29', '2019-03-06 19:17:29'),
(11, 1, 26, '2019-03-06 19:17:29', '2019-03-06 19:17:29'),
(12, 1, 27, '2019-03-06 19:17:29', '2019-03-06 19:17:29'),
(13, 1, 28, '2019-03-06 19:17:29', '2019-03-06 19:17:29'),
(53, 5, 15, '2019-03-06 20:54:34', '2019-03-06 20:54:34'),
(54, 5, 16, '2019-03-06 20:54:34', '2019-03-06 20:54:34'),
(55, 5, 17, '2019-03-06 20:54:34', '2019-03-06 20:54:34'),
(56, 5, 18, '2019-03-06 20:54:34', '2019-03-06 20:54:34'),
(57, 5, 19, '2019-03-06 20:54:34', '2019-03-06 20:54:34'),
(58, 5, 21, '2019-03-06 20:54:34', '2019-03-06 20:54:34'),
(59, 5, 22, '2019-03-06 20:54:34', '2019-03-06 20:54:34'),
(60, 5, 23, '2019-03-06 20:54:34', '2019-03-06 20:54:34'),
(61, 5, 24, '2019-03-06 20:54:34', '2019-03-06 20:54:34'),
(62, 5, 25, '2019-03-06 20:54:34', '2019-03-06 20:54:34'),
(63, 5, 26, '2019-03-06 20:54:34', '2019-03-06 20:54:34'),
(64, 5, 27, '2019-03-06 20:54:34', '2019-03-06 20:54:34'),
(65, 5, 28, '2019-03-06 20:54:34', '2019-03-06 20:54:34'),
(66, 6, 15, '2019-03-06 20:58:28', '2019-03-06 20:58:28'),
(67, 6, 16, '2019-03-06 20:58:28', '2019-03-06 20:58:28'),
(68, 6, 17, '2019-03-06 20:58:28', '2019-03-06 20:58:28'),
(69, 6, 18, '2019-03-06 20:58:28', '2019-03-06 20:58:28'),
(70, 6, 19, '2019-03-06 20:58:28', '2019-03-06 20:58:28'),
(71, 6, 21, '2019-03-06 20:58:28', '2019-03-06 20:58:28'),
(72, 6, 22, '2019-03-06 20:58:28', '2019-03-06 20:58:28'),
(73, 6, 23, '2019-03-06 20:58:28', '2019-03-06 20:58:28'),
(74, 6, 24, '2019-03-06 20:58:28', '2019-03-06 20:58:28'),
(75, 6, 25, '2019-03-06 20:58:28', '2019-03-06 20:58:28'),
(76, 6, 26, '2019-03-06 20:58:28', '2019-03-06 20:58:28'),
(77, 6, 27, '2019-03-06 20:58:28', '2019-03-06 20:58:28'),
(78, 6, 28, '2019-03-06 20:58:28', '2019-03-06 20:58:28');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `product_size_chart`
--

CREATE TABLE `product_size_chart` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `size_chart_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `product_size_chart`
--

INSERT INTO `product_size_chart` (`id`, `product_id`, `size_chart_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '2019-03-06 19:17:29', '2019-03-06 19:17:29'),
(2, 1, 2, '2019-03-06 19:17:29', '2019-03-06 19:17:29'),
(3, 1, 3, '2019-03-06 19:17:29', '2019-03-06 19:17:29'),
(4, 1, 4, '2019-03-06 19:17:29', '2019-03-06 19:17:29'),
(5, 1, 5, '2019-03-06 19:17:29', '2019-03-06 19:17:29'),
(6, 1, 6, '2019-03-06 19:17:29', '2019-03-06 19:17:29'),
(7, 1, 7, '2019-03-06 19:17:29', '2019-03-06 19:17:29'),
(8, 1, 8, '2019-03-06 19:17:29', '2019-03-06 19:17:29'),
(9, 1, 9, '2019-03-06 19:17:29', '2019-03-06 19:17:29'),
(10, 1, 10, '2019-03-06 19:17:29', '2019-03-06 19:17:29'),
(11, 1, 11, '2019-03-06 19:17:29', '2019-03-06 19:17:29'),
(12, 1, 12, '2019-03-06 19:17:29', '2019-03-06 19:17:29'),
(13, 1, 13, '2019-03-06 19:17:29', '2019-03-06 19:17:29');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `promo_codes`
--

CREATE TABLE `promo_codes` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` decimal(10,2) NOT NULL,
  `freeshipping` tinyint(1) DEFAULT NULL,
  `expirationdate` timestamp NULL DEFAULT NULL,
  `minimumspend` decimal(10,2) DEFAULT NULL,
  `maximumspend` decimal(10,2) DEFAULT NULL,
  `individualuseonly` tinyint(1) DEFAULT NULL,
  `excludesaleitems` tinyint(1) DEFAULT NULL,
  `limitpercoupon` int(11) DEFAULT NULL,
  `limitperuser` int(11) DEFAULT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `related_products`
--

CREATE TABLE `related_products` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `related_product_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reserved_words`
--

CREATE TABLE `reserved_words` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `reserved_words`
--

INSERT INTO `reserved_words` (`id`, `name`, `status`, `created_at`, `updated_at`) VALUES
(1, 'a ', 'Enable', '2019-03-06 18:52:35', '2019-03-06 18:52:35'),
(2, 'abort ', 'Enable', '2019-03-06 18:52:35', '2019-03-06 18:52:35'),
(3, 'abs ', 'Enable', '2019-03-06 18:52:35', '2019-03-06 18:52:35'),
(4, 'absolute ', 'Enable', '2019-03-06 18:52:35', '2019-03-06 18:52:35'),
(5, 'abstract', 'Enable', '2019-03-06 18:52:35', '2019-03-06 18:52:35'),
(6, 'access ', 'Enable', '2019-03-06 18:52:35', '2019-03-06 18:52:35'),
(7, 'action ', 'Enable', '2019-03-06 18:52:35', '2019-03-06 18:52:35'),
(8, 'ada ', 'Enable', '2019-03-06 18:52:35', '2019-03-06 18:52:35'),
(9, 'add ', 'Enable', '2019-03-06 18:52:35', '2019-03-06 18:52:35'),
(10, 'admin ', 'Enable', '2019-03-06 18:52:35', '2019-03-06 18:52:35'),
(11, 'after ', 'Enable', '2019-03-06 18:52:35', '2019-03-06 18:52:35'),
(12, 'aggregate ', 'Enable', '2019-03-06 18:52:35', '2019-03-06 18:52:35'),
(13, 'alias ', 'Enable', '2019-03-06 18:52:35', '2019-03-06 18:52:35'),
(14, 'all ', 'Enable', '2019-03-06 18:52:35', '2019-03-06 18:52:35'),
(15, 'allocate ', 'Enable', '2019-03-06 18:52:35', '2019-03-06 18:52:35'),
(16, 'also ', 'Enable', '2019-03-06 18:52:35', '2019-03-06 18:52:35'),
(17, 'alter ', 'Enable', '2019-03-06 18:52:35', '2019-03-06 18:52:35'),
(18, 'always ', 'Enable', '2019-03-06 18:52:35', '2019-03-06 18:52:35'),
(19, 'analyse ', 'Enable', '2019-03-06 18:52:35', '2019-03-06 18:52:35'),
(20, 'analyze ', 'Enable', '2019-03-06 18:52:35', '2019-03-06 18:52:35'),
(21, 'and ', 'Enable', '2019-03-06 18:52:35', '2019-03-06 18:52:35'),
(22, 'any ', 'Enable', '2019-03-06 18:52:35', '2019-03-06 18:52:35'),
(23, 'are ', 'Enable', '2019-03-06 18:52:35', '2019-03-06 18:52:35'),
(24, 'array ', 'Enable', '2019-03-06 18:52:35', '2019-03-06 18:52:35'),
(25, 'as ', 'Enable', '2019-03-06 18:52:35', '2019-03-06 18:52:35'),
(26, 'asc ', 'Enable', '2019-03-06 18:52:35', '2019-03-06 18:52:35'),
(27, 'asensitive ', 'Enable', '2019-03-06 18:52:35', '2019-03-06 18:52:35'),
(28, 'assertion ', 'Enable', '2019-03-06 18:52:35', '2019-03-06 18:52:35'),
(29, 'assignment ', 'Enable', '2019-03-06 18:52:35', '2019-03-06 18:52:35'),
(30, 'asymmetric ', 'Enable', '2019-03-06 18:52:35', '2019-03-06 18:52:35'),
(31, 'at ', 'Enable', '2019-03-06 18:52:35', '2019-03-06 18:52:35'),
(32, 'atomic ', 'Enable', '2019-03-06 18:52:35', '2019-03-06 18:52:35'),
(33, 'attribute ', 'Enable', '2019-03-06 18:52:35', '2019-03-06 18:52:35'),
(34, 'attributes ', 'Enable', '2019-03-06 18:52:35', '2019-03-06 18:52:35'),
(35, 'audit ', 'Enable', '2019-03-06 18:52:35', '2019-03-06 18:52:35'),
(36, 'authorization ', 'Enable', '2019-03-06 18:52:35', '2019-03-06 18:52:35'),
(37, 'auto_increment ', 'Enable', '2019-03-06 18:52:35', '2019-03-06 18:52:35'),
(38, 'avg ', 'Enable', '2019-03-06 18:52:35', '2019-03-06 18:52:35'),
(39, 'avg_row_length ', 'Enable', '2019-03-06 18:52:35', '2019-03-06 18:52:35'),
(40, 'backup ', 'Enable', '2019-03-06 18:52:35', '2019-03-06 18:52:35'),
(41, 'backward ', 'Enable', '2019-03-06 18:52:35', '2019-03-06 18:52:35'),
(42, 'before ', 'Enable', '2019-03-06 18:52:35', '2019-03-06 18:52:35'),
(43, 'begin ', 'Enable', '2019-03-06 18:52:35', '2019-03-06 18:52:35'),
(44, 'bernoulli ', 'Enable', '2019-03-06 18:52:35', '2019-03-06 18:52:35'),
(45, 'between ', 'Enable', '2019-03-06 18:52:35', '2019-03-06 18:52:35'),
(46, 'bigint ', 'Enable', '2019-03-06 18:52:35', '2019-03-06 18:52:35'),
(47, 'binary ', 'Enable', '2019-03-06 18:52:35', '2019-03-06 18:52:35'),
(48, 'bit ', 'Enable', '2019-03-06 18:52:35', '2019-03-06 18:52:35'),
(49, 'bit_length ', 'Enable', '2019-03-06 18:52:35', '2019-03-06 18:52:35'),
(50, 'bitvar ', 'Enable', '2019-03-06 18:52:35', '2019-03-06 18:52:35'),
(51, 'blob ', 'Enable', '2019-03-06 18:52:35', '2019-03-06 18:52:35'),
(52, 'bool ', 'Enable', '2019-03-06 18:52:35', '2019-03-06 18:52:35'),
(53, 'boolean ', 'Enable', '2019-03-06 18:52:35', '2019-03-06 18:52:35'),
(54, 'both ', 'Enable', '2019-03-06 18:52:35', '2019-03-06 18:52:35'),
(55, 'breadth ', 'Enable', '2019-03-06 18:52:35', '2019-03-06 18:52:35'),
(56, 'break ', 'Enable', '2019-03-06 18:52:35', '2019-03-06 18:52:35'),
(57, 'browse ', 'Enable', '2019-03-06 18:52:35', '2019-03-06 18:52:35'),
(58, 'bulk ', 'Enable', '2019-03-06 18:52:35', '2019-03-06 18:52:35'),
(59, 'by ', 'Enable', '2019-03-06 18:52:35', '2019-03-06 18:52:35'),
(60, 'byte', 'Enable', '2019-03-06 18:52:35', '2019-03-06 18:52:35'),
(61, 'c ', 'Enable', '2019-03-06 18:52:35', '2019-03-06 18:52:35'),
(62, 'cache ', 'Enable', '2019-03-06 18:52:35', '2019-03-06 18:52:35'),
(63, 'call ', 'Enable', '2019-03-06 18:52:35', '2019-03-06 18:52:35'),
(64, 'called ', 'Enable', '2019-03-06 18:52:35', '2019-03-06 18:52:35'),
(65, 'cardinality ', 'Enable', '2019-03-06 18:52:35', '2019-03-06 18:52:35'),
(66, 'cascade ', 'Enable', '2019-03-06 18:52:35', '2019-03-06 18:52:35'),
(67, 'cascaded ', 'Enable', '2019-03-06 18:52:35', '2019-03-06 18:52:35'),
(68, 'case ', 'Enable', '2019-03-06 18:52:35', '2019-03-06 18:52:35'),
(69, 'cast ', 'Enable', '2019-03-06 18:52:35', '2019-03-06 18:52:35'),
(70, 'catalog ', 'Enable', '2019-03-06 18:52:35', '2019-03-06 18:52:35'),
(71, 'catalog_name ', 'Enable', '2019-03-06 18:52:35', '2019-03-06 18:52:35'),
(72, 'catch', 'Enable', '2019-03-06 18:52:35', '2019-03-06 18:52:35'),
(73, 'ceil ', 'Enable', '2019-03-06 18:52:35', '2019-03-06 18:52:35'),
(74, 'ceiling ', 'Enable', '2019-03-06 18:52:35', '2019-03-06 18:52:35'),
(75, 'chain ', 'Enable', '2019-03-06 18:52:35', '2019-03-06 18:52:35'),
(76, 'change ', 'Enable', '2019-03-06 18:52:35', '2019-03-06 18:52:35'),
(77, 'char ', 'Enable', '2019-03-06 18:52:35', '2019-03-06 18:52:35'),
(78, 'char_length ', 'Enable', '2019-03-06 18:52:35', '2019-03-06 18:52:35'),
(79, 'character ', 'Enable', '2019-03-06 18:52:35', '2019-03-06 18:52:35'),
(80, 'character_length ', 'Enable', '2019-03-06 18:52:35', '2019-03-06 18:52:35'),
(81, 'character_set_catalog ', 'Enable', '2019-03-06 18:52:35', '2019-03-06 18:52:35'),
(82, 'character_set_name ', 'Enable', '2019-03-06 18:52:35', '2019-03-06 18:52:35'),
(83, 'character_set_schema ', 'Enable', '2019-03-06 18:52:35', '2019-03-06 18:52:35'),
(84, 'characteristics ', 'Enable', '2019-03-06 18:52:35', '2019-03-06 18:52:35'),
(85, 'characters ', 'Enable', '2019-03-06 18:52:35', '2019-03-06 18:52:35'),
(86, 'check ', 'Enable', '2019-03-06 18:52:35', '2019-03-06 18:52:35'),
(87, 'checked ', 'Enable', '2019-03-06 18:52:35', '2019-03-06 18:52:35'),
(88, 'checkpoint ', 'Enable', '2019-03-06 18:52:35', '2019-03-06 18:52:35'),
(89, 'checksum ', 'Enable', '2019-03-06 18:52:35', '2019-03-06 18:52:35'),
(90, 'class ', 'Enable', '2019-03-06 18:52:35', '2019-03-06 18:52:35'),
(91, 'class_origin ', 'Enable', '2019-03-06 18:52:35', '2019-03-06 18:52:35'),
(92, 'clob ', 'Enable', '2019-03-06 18:52:35', '2019-03-06 18:52:35'),
(93, 'close ', 'Enable', '2019-03-06 18:52:35', '2019-03-06 18:52:35'),
(94, 'cluster ', 'Enable', '2019-03-06 18:52:35', '2019-03-06 18:52:35'),
(95, 'clustered ', 'Enable', '2019-03-06 18:52:35', '2019-03-06 18:52:35'),
(96, 'coalesce ', 'Enable', '2019-03-06 18:52:35', '2019-03-06 18:52:35'),
(97, 'cobol ', 'Enable', '2019-03-06 18:52:35', '2019-03-06 18:52:35'),
(98, 'collate ', 'Enable', '2019-03-06 18:52:35', '2019-03-06 18:52:35'),
(99, 'collation ', 'Enable', '2019-03-06 18:52:35', '2019-03-06 18:52:35'),
(100, 'collation_catalog ', 'Enable', '2019-03-06 18:52:35', '2019-03-06 18:52:35'),
(101, 'collation_name ', 'Enable', '2019-03-06 18:52:35', '2019-03-06 18:52:35'),
(102, 'collation_schema ', 'Enable', '2019-03-06 18:52:35', '2019-03-06 18:52:35'),
(103, 'collect ', 'Enable', '2019-03-06 18:52:35', '2019-03-06 18:52:35'),
(104, 'column ', 'Enable', '2019-03-06 18:52:35', '2019-03-06 18:52:35'),
(105, 'column_name ', 'Enable', '2019-03-06 18:52:35', '2019-03-06 18:52:35'),
(106, 'columns ', 'Enable', '2019-03-06 18:52:35', '2019-03-06 18:52:35'),
(107, 'command_function ', 'Enable', '2019-03-06 18:52:35', '2019-03-06 18:52:35'),
(108, 'command_function_code ', 'Enable', '2019-03-06 18:52:35', '2019-03-06 18:52:35'),
(109, 'comment ', 'Enable', '2019-03-06 18:52:35', '2019-03-06 18:52:35'),
(110, 'commit ', 'Enable', '2019-03-06 18:52:35', '2019-03-06 18:52:35'),
(111, 'committed ', 'Enable', '2019-03-06 18:52:35', '2019-03-06 18:52:35'),
(112, 'completion ', 'Enable', '2019-03-06 18:52:35', '2019-03-06 18:52:35'),
(113, 'compress ', 'Enable', '2019-03-06 18:52:35', '2019-03-06 18:52:35'),
(114, 'compute ', 'Enable', '2019-03-06 18:52:35', '2019-03-06 18:52:35'),
(115, 'condition ', 'Enable', '2019-03-06 18:52:35', '2019-03-06 18:52:35'),
(116, 'condition_number ', 'Enable', '2019-03-06 18:52:35', '2019-03-06 18:52:35'),
(117, 'connect ', 'Enable', '2019-03-06 18:52:35', '2019-03-06 18:52:35'),
(118, 'connection ', 'Enable', '2019-03-06 18:52:35', '2019-03-06 18:52:35'),
(119, 'connection_name ', 'Enable', '2019-03-06 18:52:35', '2019-03-06 18:52:35'),
(120, 'constraint ', 'Enable', '2019-03-06 18:52:35', '2019-03-06 18:52:35'),
(121, 'constraint_catalog ', 'Enable', '2019-03-06 18:52:35', '2019-03-06 18:52:35'),
(122, 'constraint_name ', 'Enable', '2019-03-06 18:52:35', '2019-03-06 18:52:35'),
(123, 'constraint_schema ', 'Enable', '2019-03-06 18:52:35', '2019-03-06 18:52:35'),
(124, 'constraints ', 'Enable', '2019-03-06 18:52:35', '2019-03-06 18:52:35'),
(125, 'constructor ', 'Enable', '2019-03-06 18:52:35', '2019-03-06 18:52:35'),
(126, 'contains ', 'Enable', '2019-03-06 18:52:35', '2019-03-06 18:52:35'),
(127, 'containstable ', 'Enable', '2019-03-06 18:52:35', '2019-03-06 18:52:35'),
(128, 'continue ', 'Enable', '2019-03-06 18:52:35', '2019-03-06 18:52:35'),
(129, 'conversion ', 'Enable', '2019-03-06 18:52:35', '2019-03-06 18:52:35'),
(130, 'convert ', 'Enable', '2019-03-06 18:52:35', '2019-03-06 18:52:35'),
(131, 'copy ', 'Enable', '2019-03-06 18:52:35', '2019-03-06 18:52:35'),
(132, 'corr ', 'Enable', '2019-03-06 18:52:35', '2019-03-06 18:52:35'),
(133, 'corresponding ', 'Enable', '2019-03-06 18:52:35', '2019-03-06 18:52:35'),
(134, 'count ', 'Enable', '2019-03-06 18:52:35', '2019-03-06 18:52:35'),
(135, 'covar_pop ', 'Enable', '2019-03-06 18:52:35', '2019-03-06 18:52:35'),
(136, 'covar_samp ', 'Enable', '2019-03-06 18:52:35', '2019-03-06 18:52:35'),
(137, 'create ', 'Enable', '2019-03-06 18:52:35', '2019-03-06 18:52:35'),
(138, 'createdb ', 'Enable', '2019-03-06 18:52:35', '2019-03-06 18:52:35'),
(139, 'createrole ', 'Enable', '2019-03-06 18:52:35', '2019-03-06 18:52:35'),
(140, 'createuser ', 'Enable', '2019-03-06 18:52:35', '2019-03-06 18:52:35'),
(141, 'cross ', 'Enable', '2019-03-06 18:52:35', '2019-03-06 18:52:35'),
(142, 'csv ', 'Enable', '2019-03-06 18:52:35', '2019-03-06 18:52:35'),
(143, 'cube ', 'Enable', '2019-03-06 18:52:35', '2019-03-06 18:52:35'),
(144, 'cume_dist ', 'Enable', '2019-03-06 18:52:35', '2019-03-06 18:52:35'),
(145, 'current ', 'Enable', '2019-03-06 18:52:35', '2019-03-06 18:52:35'),
(146, 'current_date ', 'Enable', '2019-03-06 18:52:35', '2019-03-06 18:52:35'),
(147, 'current_default_transform_group ', 'Enable', '2019-03-06 18:52:35', '2019-03-06 18:52:35'),
(148, 'current_path ', 'Enable', '2019-03-06 18:52:35', '2019-03-06 18:52:35'),
(149, 'current_role ', 'Enable', '2019-03-06 18:52:35', '2019-03-06 18:52:35'),
(150, 'current_time ', 'Enable', '2019-03-06 18:52:35', '2019-03-06 18:52:35'),
(151, 'current_timestamp ', 'Enable', '2019-03-06 18:52:35', '2019-03-06 18:52:35'),
(152, 'current_transform_group_for_type ', 'Enable', '2019-03-06 18:52:35', '2019-03-06 18:52:35'),
(153, 'current_user ', 'Enable', '2019-03-06 18:52:35', '2019-03-06 18:52:35'),
(154, 'cursor ', 'Enable', '2019-03-06 18:52:35', '2019-03-06 18:52:35'),
(155, 'cursor_name ', 'Enable', '2019-03-06 18:52:35', '2019-03-06 18:52:35'),
(156, 'cycle ', 'Enable', '2019-03-06 18:52:35', '2019-03-06 18:52:35'),
(157, 'data ', 'Enable', '2019-03-06 18:52:35', '2019-03-06 18:52:35'),
(158, 'database ', 'Enable', '2019-03-06 18:52:35', '2019-03-06 18:52:35'),
(159, 'databases ', 'Enable', '2019-03-06 18:52:35', '2019-03-06 18:52:35'),
(160, 'date ', 'Enable', '2019-03-06 18:52:35', '2019-03-06 18:52:35'),
(161, 'datetime ', 'Enable', '2019-03-06 18:52:35', '2019-03-06 18:52:35'),
(162, 'datetime_interval_code ', 'Enable', '2019-03-06 18:52:35', '2019-03-06 18:52:35'),
(163, 'datetime_interval_precision ', 'Enable', '2019-03-06 18:52:35', '2019-03-06 18:52:35'),
(164, 'day ', 'Enable', '2019-03-06 18:52:35', '2019-03-06 18:52:35'),
(165, 'day_hour ', 'Enable', '2019-03-06 18:52:35', '2019-03-06 18:52:35'),
(166, 'day_microsecond ', 'Enable', '2019-03-06 18:52:35', '2019-03-06 18:52:35'),
(167, 'day_minute ', 'Enable', '2019-03-06 18:52:35', '2019-03-06 18:52:35'),
(168, 'day_second ', 'Enable', '2019-03-06 18:52:35', '2019-03-06 18:52:35'),
(169, 'dayofmonth ', 'Enable', '2019-03-06 18:52:35', '2019-03-06 18:52:35'),
(170, 'dayofweek ', 'Enable', '2019-03-06 18:52:35', '2019-03-06 18:52:35'),
(171, 'dayofyear ', 'Enable', '2019-03-06 18:52:35', '2019-03-06 18:52:35'),
(172, 'dbcc ', 'Enable', '2019-03-06 18:52:35', '2019-03-06 18:52:35'),
(173, 'deallocate ', 'Enable', '2019-03-06 18:52:35', '2019-03-06 18:52:35'),
(174, 'dec ', 'Enable', '2019-03-06 18:52:35', '2019-03-06 18:52:35'),
(175, 'decimal ', 'Enable', '2019-03-06 18:52:35', '2019-03-06 18:52:35'),
(176, 'declare ', 'Enable', '2019-03-06 18:52:35', '2019-03-06 18:52:35'),
(177, 'default ', 'Enable', '2019-03-06 18:52:35', '2019-03-06 18:52:35'),
(178, 'defaults ', 'Enable', '2019-03-06 18:52:35', '2019-03-06 18:52:35'),
(179, 'deferrable ', 'Enable', '2019-03-06 18:52:35', '2019-03-06 18:52:35'),
(180, 'deferred ', 'Enable', '2019-03-06 18:52:35', '2019-03-06 18:52:35'),
(181, 'defined ', 'Enable', '2019-03-06 18:52:35', '2019-03-06 18:52:35'),
(182, 'definer ', 'Enable', '2019-03-06 18:52:35', '2019-03-06 18:52:35'),
(183, 'degree ', 'Enable', '2019-03-06 18:52:35', '2019-03-06 18:52:35'),
(184, 'delay_key_write ', 'Enable', '2019-03-06 18:52:35', '2019-03-06 18:52:35'),
(185, 'delayed ', 'Enable', '2019-03-06 18:52:35', '2019-03-06 18:52:35'),
(186, 'delete ', 'Enable', '2019-03-06 18:52:35', '2019-03-06 18:52:35'),
(187, 'delimiter ', 'Enable', '2019-03-06 18:52:35', '2019-03-06 18:52:35'),
(188, 'delimiters ', 'Enable', '2019-03-06 18:52:35', '2019-03-06 18:52:35'),
(189, 'dense_rank ', 'Enable', '2019-03-06 18:52:35', '2019-03-06 18:52:35'),
(190, 'deny ', 'Enable', '2019-03-06 18:52:35', '2019-03-06 18:52:35'),
(191, 'depth ', 'Enable', '2019-03-06 18:52:35', '2019-03-06 18:52:35'),
(192, 'deref ', 'Enable', '2019-03-06 18:52:35', '2019-03-06 18:52:35'),
(193, 'derived ', 'Enable', '2019-03-06 18:52:35', '2019-03-06 18:52:35'),
(194, 'desc ', 'Enable', '2019-03-06 18:52:35', '2019-03-06 18:52:35'),
(195, 'describe ', 'Enable', '2019-03-06 18:52:35', '2019-03-06 18:52:35'),
(196, 'descriptor ', 'Enable', '2019-03-06 18:52:35', '2019-03-06 18:52:35'),
(197, 'destroy ', 'Enable', '2019-03-06 18:52:35', '2019-03-06 18:52:35'),
(198, 'destructor ', 'Enable', '2019-03-06 18:52:35', '2019-03-06 18:52:35'),
(199, 'deterministic ', 'Enable', '2019-03-06 18:52:35', '2019-03-06 18:52:35'),
(200, 'diagnostics ', 'Enable', '2019-03-06 18:52:35', '2019-03-06 18:52:35'),
(201, 'dictionary ', 'Enable', '2019-03-06 18:52:35', '2019-03-06 18:52:35'),
(202, 'disable ', 'Enable', '2019-03-06 18:52:35', '2019-03-06 18:52:35'),
(203, 'disconnect ', 'Enable', '2019-03-06 18:52:35', '2019-03-06 18:52:35'),
(204, 'disk ', 'Enable', '2019-03-06 18:52:35', '2019-03-06 18:52:35'),
(205, 'dispatch ', 'Enable', '2019-03-06 18:52:35', '2019-03-06 18:52:35'),
(206, 'distinct ', 'Enable', '2019-03-06 18:52:35', '2019-03-06 18:52:35'),
(207, 'distinctrow ', 'Enable', '2019-03-06 18:52:35', '2019-03-06 18:52:35'),
(208, 'distributed ', 'Enable', '2019-03-06 18:52:35', '2019-03-06 18:52:35'),
(209, 'div ', 'Enable', '2019-03-06 18:52:35', '2019-03-06 18:52:35'),
(210, 'do ', 'Enable', '2019-03-06 18:52:35', '2019-03-06 18:52:35'),
(211, 'domain ', 'Enable', '2019-03-06 18:52:35', '2019-03-06 18:52:35'),
(212, 'double ', 'Enable', '2019-03-06 18:52:35', '2019-03-06 18:52:35'),
(213, 'drop ', 'Enable', '2019-03-06 18:52:35', '2019-03-06 18:52:35'),
(214, 'dual ', 'Enable', '2019-03-06 18:52:35', '2019-03-06 18:52:35'),
(215, 'dummy ', 'Enable', '2019-03-06 18:52:35', '2019-03-06 18:52:35'),
(216, 'dump ', 'Enable', '2019-03-06 18:52:35', '2019-03-06 18:52:35'),
(217, 'dynamic ', 'Enable', '2019-03-06 18:52:35', '2019-03-06 18:52:35'),
(218, 'dynamic_function ', 'Enable', '2019-03-06 18:52:35', '2019-03-06 18:52:35'),
(219, 'dynamic_function_code ', 'Enable', '2019-03-06 18:52:35', '2019-03-06 18:52:35'),
(220, 'each ', 'Enable', '2019-03-06 18:52:35', '2019-03-06 18:52:35'),
(221, 'element ', 'Enable', '2019-03-06 18:52:35', '2019-03-06 18:52:35'),
(222, 'else ', 'Enable', '2019-03-06 18:52:35', '2019-03-06 18:52:35'),
(223, 'elseif ', 'Enable', '2019-03-06 18:52:35', '2019-03-06 18:52:35'),
(224, 'enable ', 'Enable', '2019-03-06 18:52:35', '2019-03-06 18:52:35'),
(225, 'enclosed ', 'Enable', '2019-03-06 18:52:35', '2019-03-06 18:52:35'),
(226, 'encoding ', 'Enable', '2019-03-06 18:52:35', '2019-03-06 18:52:35'),
(227, 'encrypted ', 'Enable', '2019-03-06 18:52:35', '2019-03-06 18:52:35'),
(228, 'end ', 'Enable', '2019-03-06 18:52:35', '2019-03-06 18:52:35'),
(229, 'end-exec ', 'Enable', '2019-03-06 18:52:35', '2019-03-06 18:52:35'),
(230, 'enum ', 'Enable', '2019-03-06 18:52:35', '2019-03-06 18:52:35'),
(231, 'equals ', 'Enable', '2019-03-06 18:52:35', '2019-03-06 18:52:35'),
(232, 'errlvl ', 'Enable', '2019-03-06 18:52:35', '2019-03-06 18:52:35'),
(233, 'escape ', 'Enable', '2019-03-06 18:52:35', '2019-03-06 18:52:35'),
(234, 'escaped ', 'Enable', '2019-03-06 18:52:35', '2019-03-06 18:52:35'),
(235, 'every ', 'Enable', '2019-03-06 18:52:35', '2019-03-06 18:52:35'),
(236, 'except ', 'Enable', '2019-03-06 18:52:35', '2019-03-06 18:52:35'),
(237, 'exception ', 'Enable', '2019-03-06 18:52:35', '2019-03-06 18:52:35'),
(238, 'exclude ', 'Enable', '2019-03-06 18:52:35', '2019-03-06 18:52:35'),
(239, 'excluding ', 'Enable', '2019-03-06 18:52:35', '2019-03-06 18:52:35'),
(240, 'exclusive ', 'Enable', '2019-03-06 18:52:35', '2019-03-06 18:52:35'),
(241, 'exec ', 'Enable', '2019-03-06 18:52:35', '2019-03-06 18:52:35'),
(242, 'execute ', 'Enable', '2019-03-06 18:52:35', '2019-03-06 18:52:35'),
(243, 'existing ', 'Enable', '2019-03-06 18:52:35', '2019-03-06 18:52:35'),
(244, 'exists ', 'Enable', '2019-03-06 18:52:35', '2019-03-06 18:52:35'),
(245, 'exit ', 'Enable', '2019-03-06 18:52:35', '2019-03-06 18:52:35'),
(246, 'exp ', 'Enable', '2019-03-06 18:52:35', '2019-03-06 18:52:35'),
(247, 'explain ', 'Enable', '2019-03-06 18:52:35', '2019-03-06 18:52:35'),
(248, 'export', 'Enable', '2019-03-06 18:52:35', '2019-03-06 18:52:35'),
(249, 'extends', 'Enable', '2019-03-06 18:52:35', '2019-03-06 18:52:35'),
(250, 'external ', 'Enable', '2019-03-06 18:52:35', '2019-03-06 18:52:35'),
(251, 'extract ', 'Enable', '2019-03-06 18:52:35', '2019-03-06 18:52:35'),
(252, 'false ', 'Enable', '2019-03-06 18:52:35', '2019-03-06 18:52:35'),
(253, 'fetch ', 'Enable', '2019-03-06 18:52:35', '2019-03-06 18:52:35'),
(254, 'fields ', 'Enable', '2019-03-06 18:52:35', '2019-03-06 18:52:35'),
(255, 'file ', 'Enable', '2019-03-06 18:52:35', '2019-03-06 18:52:35'),
(256, 'fillfactor ', 'Enable', '2019-03-06 18:52:35', '2019-03-06 18:52:35'),
(257, 'filter ', 'Enable', '2019-03-06 18:52:35', '2019-03-06 18:52:35'),
(258, 'final', 'Enable', '2019-03-06 18:52:35', '2019-03-06 18:52:35'),
(259, 'first ', 'Enable', '2019-03-06 18:52:35', '2019-03-06 18:52:35'),
(260, 'float ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(261, 'float4 ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(262, 'float8 ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(263, 'floor ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(264, 'flush ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(265, 'following ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(266, 'for ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(267, 'force ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(268, 'foreign ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(269, 'fortran ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(270, 'forward ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(271, 'found ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(272, 'free ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(273, 'freetext ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(274, 'freetexttable ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(275, 'freeze ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(276, 'from ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(277, 'full ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(278, 'fulltext ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(279, 'function ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(280, 'fusion ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(281, 'g ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(282, 'general ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(283, 'generated ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(284, 'get ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(285, 'global ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(286, 'go ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(287, 'goto ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(288, 'grant ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(289, 'granted ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(290, 'grants ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(291, 'greatest ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(292, 'group ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(293, 'grouping ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(294, 'handler ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(295, 'having ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(296, 'header ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(297, 'heap ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(298, 'hierarchy ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(299, 'high_priority ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(300, 'hold ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(301, 'holdlock ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(302, 'host ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(303, 'hosts ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(304, 'hour ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(305, 'hour_microsecond ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(306, 'hour_minute ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(307, 'hour_second ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(308, 'identified ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(309, 'identity ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(310, 'identity_insert ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(311, 'identitycol ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(312, 'if ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(313, 'ignore ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(314, 'ilike ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(315, 'immediate ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(316, 'immutable ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(317, 'implementation ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(318, 'implicit ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(319, 'in ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(320, 'include ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(321, 'including ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(322, 'increment ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(323, 'index ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(324, 'indicator ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(325, 'infile ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(326, 'infix ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(327, 'inherit ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(328, 'inherits ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(329, 'initial ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(330, 'initialize ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(331, 'initially ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(332, 'inner ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(333, 'inout ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(334, 'input ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(335, 'insensitive ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(336, 'insert ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(337, 'insert_id ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(338, 'instance ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(339, 'instanceof', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(340, 'instantiable ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(341, 'instead ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(342, 'int', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(343, 'int1 ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(344, 'int2 ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(345, 'int3 ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(346, 'int4 ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(347, 'int8 ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(348, 'integer ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(349, 'interface', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(350, 'intersect ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(351, 'intersection ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(352, 'interval ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(353, 'into ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(354, 'invoker ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(355, 'is ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(356, 'isam ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(357, 'isnull ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(358, 'isolation ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(359, 'iterate ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(360, 'join ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(361, 'k ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(362, 'key ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(363, 'key_member ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(364, 'key_type ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(365, 'keys ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(366, 'kill ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(367, 'lancompiler ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(368, 'language ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(369, 'large ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(370, 'last ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(371, 'last_insert_id ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(372, 'lateral ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(373, 'leading ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(374, 'least ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(375, 'leave ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(376, 'left ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(377, 'length ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(378, 'less ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(379, 'let', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(380, 'level ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(381, 'like ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(382, 'limit ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(383, 'lineno ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(384, 'lines ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(385, 'listen ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(386, 'ln ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(387, 'load ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(388, 'local ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(389, 'localtime ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(390, 'localtimestamp ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(391, 'location ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(392, 'locator ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(393, 'lock ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(394, 'login ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(395, 'logs ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(396, 'long ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(397, 'longblob ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(398, 'longtext ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(399, 'loop ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(400, 'low_priority ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(401, 'lower ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(402, 'm ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(403, 'map ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(404, 'match ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(405, 'matched ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(406, 'max ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(407, 'max_rows ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(408, 'maxextents ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(409, 'maxvalue ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(410, 'mediumblob ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(411, 'mediumint ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(412, 'mediumtext ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(413, 'member ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(414, 'merge ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(415, 'message_length ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(416, 'message_octet_length ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(417, 'message_text ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(418, 'method ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(419, 'middleint ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(420, 'min ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(421, 'min_rows ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(422, 'minus ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(423, 'minute ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(424, 'minute_microsecond ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(425, 'minute_second ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(426, 'minvalue ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(427, 'mlslabel ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(428, 'mod ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(429, 'mode ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(430, 'modifies ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(431, 'modify ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(432, 'module ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(433, 'month ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(434, 'monthname ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(435, 'more ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(436, 'move ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(437, 'multiset ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(438, 'mumps ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(439, 'myisam ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(440, 'name ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(441, 'names ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(442, 'national ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(443, 'native', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(444, 'natural ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(445, 'nchar ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(446, 'nclob ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(447, 'nesting ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(448, 'new ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(449, 'next ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(450, 'no ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(451, 'no_write_to_binlog ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(452, 'noaudit ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(453, 'nocheck ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(454, 'nocompress ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(455, 'nocreatedb ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(456, 'nocreaterole ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(457, 'nocreateuser ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(458, 'noinherit ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(459, 'nologin ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(460, 'nonclustered ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(461, 'none ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(462, 'normalize ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(463, 'normalized ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(464, 'nosuperuser ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(465, 'not ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(466, 'nothing ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(467, 'notify ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(468, 'notnull ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(469, 'nowait ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(470, 'null ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(471, 'nullable ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(472, 'nullif ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(473, 'nulls ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(474, 'number ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(475, 'numeric ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(476, 'object ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(477, 'octet_length ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(478, 'octets ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(479, 'of ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(480, 'off ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(481, 'offline ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(482, 'offset ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(483, 'offsets ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(484, 'oids ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(485, 'old ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(486, 'on ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(487, 'online ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(488, 'only ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(489, 'open ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(490, 'opendatasource ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(491, 'openquery ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(492, 'openrowset ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(493, 'openxml ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(494, 'operation ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(495, 'operator ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(496, 'optimize ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(497, 'option ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(498, 'optionally ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(499, 'options ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(500, 'or ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(501, 'order ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(502, 'ordering ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(503, 'ordinality ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(504, 'others ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(505, 'out ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(506, 'outer ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(507, 'outfile ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(508, 'output ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(509, 'over ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(510, 'overlaps ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(511, 'overlay ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(512, 'overriding ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(513, 'owner ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(514, 'pack_keys ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(515, 'pad ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(516, 'parameter ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(517, 'parameter_mode ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(518, 'parameter_name ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(519, 'parameter_ordinal_position ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(520, 'parameter_specific_catalog ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(521, 'parameter_specific_name ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(522, 'parameter_specific_schema ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(523, 'parameters ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(524, 'partial ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(525, 'partition ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(526, 'pascal ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(527, 'password ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(528, 'path ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(529, 'pctfree ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(530, 'percent ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(531, 'percent_rank ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(532, 'percentile_cont ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(533, 'percentile_disc ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(534, 'placing ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(535, 'plan ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(536, 'pli ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(537, 'position ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(538, 'postfix ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(539, 'power ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(540, 'preceding ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(541, 'precision ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(542, 'prefix ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(543, 'preorder ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(544, 'prepare ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(545, 'prepared ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(546, 'preserve ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(547, 'primary ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(548, 'print ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(549, 'prior ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(550, 'privileges ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(551, 'proc ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(552, 'procedural ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(553, 'procedure ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(554, 'process ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(555, 'processlist ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(556, 'public ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(557, 'purge ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(558, 'quote ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(559, 'raid0 ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(560, 'raiserror ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(561, 'range ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(562, 'rank ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(563, 'raw ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(564, 'read ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(565, 'reads ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(566, 'readtext ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(567, 'real ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(568, 'recheck ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(569, 'reconfigure ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(570, 'recursive ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(571, 'ref ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(572, 'references ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(573, 'referencing ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(574, 'regexp ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(575, 'regr_avgx ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(576, 'regr_avgy ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(577, 'regr_count ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(578, 'regr_intercept ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(579, 'regr_r2 ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(580, 'regr_slope ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(581, 'regr_sxx ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(582, 'regr_sxy ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(583, 'regr_syy ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(584, 'reindex ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(585, 'relative ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(586, 'release ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(587, 'reload ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(588, 'rename ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(589, 'repeat ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(590, 'repeatable ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(591, 'replace ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(592, 'replication ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(593, 'require ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(594, 'reset ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(595, 'resignal ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(596, 'resource ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(597, 'restart ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(598, 'restore ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(599, 'restrict ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(600, 'result ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(601, 'return ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(602, 'returned_cardinality ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(603, 'returned_length ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(604, 'returned_octet_length ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(605, 'returned_sqlstate ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(606, 'returns ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(607, 'revoke ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(608, 'right ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(609, 'rlike ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(610, 'role ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(611, 'rollback ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(612, 'rollup ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(613, 'routine ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(614, 'routine_catalog ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(615, 'routine_name ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(616, 'routine_schema ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(617, 'row ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(618, 'row_count ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(619, 'row_number ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(620, 'rowcount ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(621, 'rowguidcol ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(622, 'rowid ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(623, 'rownum ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(624, 'rows ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(625, 'rule ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(626, 'save ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(627, 'savepoint ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(628, 'scale ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(629, 'schema ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(630, 'schema_name ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(631, 'schemas ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(632, 'scope ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(633, 'scope_catalog ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(634, 'scope_name ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(635, 'scope_schema ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(636, 'scroll ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(637, 'search ', 'Enable', '2019-03-06 18:52:36', '2019-03-06 18:52:36'),
(638, 'second ', 'Enable', '2019-03-06 18:52:37', '2019-03-06 18:52:37'),
(639, 'second_microsecond ', 'Enable', '2019-03-06 18:52:37', '2019-03-06 18:52:37'),
(640, 'section ', 'Enable', '2019-03-06 18:52:37', '2019-03-06 18:52:37'),
(641, 'security ', 'Enable', '2019-03-06 18:52:37', '2019-03-06 18:52:37'),
(642, 'select ', 'Enable', '2019-03-06 18:52:37', '2019-03-06 18:52:37'),
(643, 'self ', 'Enable', '2019-03-06 18:52:37', '2019-03-06 18:52:37'),
(644, 'sensitive ', 'Enable', '2019-03-06 18:52:37', '2019-03-06 18:52:37'),
(645, 'separator ', 'Enable', '2019-03-06 18:52:37', '2019-03-06 18:52:37'),
(646, 'sequence ', 'Enable', '2019-03-06 18:52:37', '2019-03-06 18:52:37'),
(647, 'serializable ', 'Enable', '2019-03-06 18:52:37', '2019-03-06 18:52:37'),
(648, 'server_name ', 'Enable', '2019-03-06 18:52:37', '2019-03-06 18:52:37'),
(649, 'session ', 'Enable', '2019-03-06 18:52:37', '2019-03-06 18:52:37'),
(650, 'session_user ', 'Enable', '2019-03-06 18:52:37', '2019-03-06 18:52:37'),
(651, 'set ', 'Enable', '2019-03-06 18:52:37', '2019-03-06 18:52:37'),
(652, 'setof ', 'Enable', '2019-03-06 18:52:37', '2019-03-06 18:52:37'),
(653, 'sets ', 'Enable', '2019-03-06 18:52:37', '2019-03-06 18:52:37'),
(654, 'setuser ', 'Enable', '2019-03-06 18:52:37', '2019-03-06 18:52:37'),
(655, 'share ', 'Enable', '2019-03-06 18:52:37', '2019-03-06 18:52:37'),
(656, 'show ', 'Enable', '2019-03-06 18:52:37', '2019-03-06 18:52:37'),
(657, 'shutdown ', 'Enable', '2019-03-06 18:52:37', '2019-03-06 18:52:37'),
(658, 'signal ', 'Enable', '2019-03-06 18:52:37', '2019-03-06 18:52:37'),
(659, 'similar ', 'Enable', '2019-03-06 18:52:37', '2019-03-06 18:52:37'),
(660, 'simple ', 'Enable', '2019-03-06 18:52:37', '2019-03-06 18:52:37'),
(661, 'size ', 'Enable', '2019-03-06 18:52:37', '2019-03-06 18:52:37'),
(662, 'smallint ', 'Enable', '2019-03-06 18:52:37', '2019-03-06 18:52:37'),
(663, 'some ', 'Enable', '2019-03-06 18:52:37', '2019-03-06 18:52:37'),
(664, 'soname ', 'Enable', '2019-03-06 18:52:37', '2019-03-06 18:52:37'),
(665, 'source ', 'Enable', '2019-03-06 18:52:37', '2019-03-06 18:52:37'),
(666, 'space ', 'Enable', '2019-03-06 18:52:37', '2019-03-06 18:52:37'),
(667, 'spatial ', 'Enable', '2019-03-06 18:52:37', '2019-03-06 18:52:37'),
(668, 'specific ', 'Enable', '2019-03-06 18:52:37', '2019-03-06 18:52:37'),
(669, 'specific_name ', 'Enable', '2019-03-06 18:52:37', '2019-03-06 18:52:37'),
(670, 'specifictype ', 'Enable', '2019-03-06 18:52:37', '2019-03-06 18:52:37'),
(671, 'sql ', 'Enable', '2019-03-06 18:52:37', '2019-03-06 18:52:37'),
(672, 'sql_big_result ', 'Enable', '2019-03-06 18:52:37', '2019-03-06 18:52:37'),
(673, 'sql_big_selects ', 'Enable', '2019-03-06 18:52:37', '2019-03-06 18:52:37'),
(674, 'sql_big_tables ', 'Enable', '2019-03-06 18:52:37', '2019-03-06 18:52:37'),
(675, 'sql_calc_found_rows ', 'Enable', '2019-03-06 18:52:37', '2019-03-06 18:52:37'),
(676, 'sql_log_off ', 'Enable', '2019-03-06 18:52:37', '2019-03-06 18:52:37'),
(677, 'sql_log_update ', 'Enable', '2019-03-06 18:52:37', '2019-03-06 18:52:37'),
(678, 'sql_low_priority_updates ', 'Enable', '2019-03-06 18:52:37', '2019-03-06 18:52:37');
INSERT INTO `reserved_words` (`id`, `name`, `status`, `created_at`, `updated_at`) VALUES
(679, 'sql_select_limit ', 'Enable', '2019-03-06 18:52:37', '2019-03-06 18:52:37'),
(680, 'sql_small_result ', 'Enable', '2019-03-06 18:52:37', '2019-03-06 18:52:37'),
(681, 'sql_warnings ', 'Enable', '2019-03-06 18:52:37', '2019-03-06 18:52:37'),
(682, 'sqlca ', 'Enable', '2019-03-06 18:52:37', '2019-03-06 18:52:37'),
(683, 'sqlcode ', 'Enable', '2019-03-06 18:52:37', '2019-03-06 18:52:37'),
(684, 'sqlerror ', 'Enable', '2019-03-06 18:52:37', '2019-03-06 18:52:37'),
(685, 'sqlexception ', 'Enable', '2019-03-06 18:52:37', '2019-03-06 18:52:37'),
(686, 'sqlstate ', 'Enable', '2019-03-06 18:52:37', '2019-03-06 18:52:37'),
(687, 'sqlwarning ', 'Enable', '2019-03-06 18:52:37', '2019-03-06 18:52:37'),
(688, 'sqrt ', 'Enable', '2019-03-06 18:52:37', '2019-03-06 18:52:37'),
(689, 'ssl ', 'Enable', '2019-03-06 18:52:37', '2019-03-06 18:52:37'),
(690, 'stable ', 'Enable', '2019-03-06 18:52:37', '2019-03-06 18:52:37'),
(691, 'start ', 'Enable', '2019-03-06 18:52:37', '2019-03-06 18:52:37'),
(692, 'starting ', 'Enable', '2019-03-06 18:52:37', '2019-03-06 18:52:37'),
(693, 'state ', 'Enable', '2019-03-06 18:52:37', '2019-03-06 18:52:37'),
(694, 'statement ', 'Enable', '2019-03-06 18:52:37', '2019-03-06 18:52:37'),
(695, 'static ', 'Enable', '2019-03-06 18:52:37', '2019-03-06 18:52:37'),
(696, 'statistics ', 'Enable', '2019-03-06 18:52:37', '2019-03-06 18:52:37'),
(697, 'status ', 'Enable', '2019-03-06 18:52:37', '2019-03-06 18:52:37'),
(698, 'stddev_pop ', 'Enable', '2019-03-06 18:52:37', '2019-03-06 18:52:37'),
(699, 'stddev_samp ', 'Enable', '2019-03-06 18:52:37', '2019-03-06 18:52:37'),
(700, 'stdin ', 'Enable', '2019-03-06 18:52:37', '2019-03-06 18:52:37'),
(701, 'stdout ', 'Enable', '2019-03-06 18:52:37', '2019-03-06 18:52:37'),
(702, 'storage ', 'Enable', '2019-03-06 18:52:37', '2019-03-06 18:52:37'),
(703, 'straight_join ', 'Enable', '2019-03-06 18:52:37', '2019-03-06 18:52:37'),
(704, 'strict ', 'Enable', '2019-03-06 18:52:37', '2019-03-06 18:52:37'),
(705, 'string ', 'Enable', '2019-03-06 18:52:37', '2019-03-06 18:52:37'),
(706, 'structure ', 'Enable', '2019-03-06 18:52:37', '2019-03-06 18:52:37'),
(707, 'style ', 'Enable', '2019-03-06 18:52:37', '2019-03-06 18:52:37'),
(708, 'subclass_origin ', 'Enable', '2019-03-06 18:52:37', '2019-03-06 18:52:37'),
(709, 'sublist ', 'Enable', '2019-03-06 18:52:37', '2019-03-06 18:52:37'),
(710, 'submultiset ', 'Enable', '2019-03-06 18:52:37', '2019-03-06 18:52:37'),
(711, 'substring ', 'Enable', '2019-03-06 18:52:37', '2019-03-06 18:52:37'),
(712, 'successful ', 'Enable', '2019-03-06 18:52:37', '2019-03-06 18:52:37'),
(713, 'sum ', 'Enable', '2019-03-06 18:52:37', '2019-03-06 18:52:37'),
(714, 'super ', 'Enable', '2019-03-06 18:52:37', '2019-03-06 18:52:37'),
(715, 'superuser ', 'Enable', '2019-03-06 18:52:37', '2019-03-06 18:52:37'),
(716, 'switch ', 'Enable', '2019-03-06 18:52:37', '2019-03-06 18:52:37'),
(717, 'symmetric ', 'Enable', '2019-03-06 18:52:37', '2019-03-06 18:52:37'),
(718, 'synchronized ', 'Enable', '2019-03-06 18:52:37', '2019-03-06 18:52:37'),
(719, 'synonym ', 'Enable', '2019-03-06 18:52:37', '2019-03-06 18:52:37'),
(720, 'sysdate ', 'Enable', '2019-03-06 18:52:37', '2019-03-06 18:52:37'),
(721, 'sysid ', 'Enable', '2019-03-06 18:52:37', '2019-03-06 18:52:37'),
(722, 'system ', 'Enable', '2019-03-06 18:52:37', '2019-03-06 18:52:37'),
(723, 'system_user ', 'Enable', '2019-03-06 18:52:37', '2019-03-06 18:52:37'),
(724, 'table ', 'Enable', '2019-03-06 18:52:37', '2019-03-06 18:52:37'),
(725, 'table_name ', 'Enable', '2019-03-06 18:52:37', '2019-03-06 18:52:37'),
(726, 'tables ', 'Enable', '2019-03-06 18:52:37', '2019-03-06 18:52:37'),
(727, 'tablesample ', 'Enable', '2019-03-06 18:52:37', '2019-03-06 18:52:37'),
(728, 'tablespace ', 'Enable', '2019-03-06 18:52:37', '2019-03-06 18:52:37'),
(729, 'temp ', 'Enable', '2019-03-06 18:52:37', '2019-03-06 18:52:37'),
(730, 'template ', 'Enable', '2019-03-06 18:52:37', '2019-03-06 18:52:37'),
(731, 'temporary ', 'Enable', '2019-03-06 18:52:37', '2019-03-06 18:52:37'),
(732, 'terminate ', 'Enable', '2019-03-06 18:52:37', '2019-03-06 18:52:37'),
(733, 'terminated ', 'Enable', '2019-03-06 18:52:37', '2019-03-06 18:52:37'),
(734, 'text ', 'Enable', '2019-03-06 18:52:37', '2019-03-06 18:52:37'),
(735, 'textsize ', 'Enable', '2019-03-06 18:52:37', '2019-03-06 18:52:37'),
(736, 'than ', 'Enable', '2019-03-06 18:52:37', '2019-03-06 18:52:37'),
(737, 'then ', 'Enable', '2019-03-06 18:52:37', '2019-03-06 18:52:37'),
(738, 'this ', 'Enable', '2019-03-06 18:52:37', '2019-03-06 18:52:37'),
(739, 'throws ', 'Enable', '2019-03-06 18:52:37', '2019-03-06 18:52:37'),
(740, 'ties ', 'Enable', '2019-03-06 18:52:37', '2019-03-06 18:52:37'),
(741, 'time ', 'Enable', '2019-03-06 18:52:37', '2019-03-06 18:52:37'),
(742, 'timestamp ', 'Enable', '2019-03-06 18:52:37', '2019-03-06 18:52:37'),
(743, 'timezone_hour ', 'Enable', '2019-03-06 18:52:37', '2019-03-06 18:52:37'),
(744, 'timezone_minute ', 'Enable', '2019-03-06 18:52:37', '2019-03-06 18:52:37'),
(745, 'tinyblob ', 'Enable', '2019-03-06 18:52:37', '2019-03-06 18:52:37'),
(746, 'tinyint ', 'Enable', '2019-03-06 18:52:37', '2019-03-06 18:52:37'),
(747, 'tinytext ', 'Enable', '2019-03-06 18:52:37', '2019-03-06 18:52:37'),
(748, 'to ', 'Enable', '2019-03-06 18:52:37', '2019-03-06 18:52:37'),
(749, 'toast ', 'Enable', '2019-03-06 18:52:37', '2019-03-06 18:52:37'),
(750, 'top ', 'Enable', '2019-03-06 18:52:37', '2019-03-06 18:52:37'),
(751, 'top_level_count ', 'Enable', '2019-03-06 18:52:37', '2019-03-06 18:52:37'),
(752, 'trailing ', 'Enable', '2019-03-06 18:52:37', '2019-03-06 18:52:37'),
(753, 'tran ', 'Enable', '2019-03-06 18:52:37', '2019-03-06 18:52:37'),
(754, 'transaction ', 'Enable', '2019-03-06 18:52:37', '2019-03-06 18:52:37'),
(755, 'transaction_active ', 'Enable', '2019-03-06 18:52:37', '2019-03-06 18:52:37'),
(756, 'transactions_committed ', 'Enable', '2019-03-06 18:52:37', '2019-03-06 18:52:37'),
(757, 'transactions_rolled_back ', 'Enable', '2019-03-06 18:52:37', '2019-03-06 18:52:37'),
(758, 'transform ', 'Enable', '2019-03-06 18:52:37', '2019-03-06 18:52:37'),
(759, 'transforms ', 'Enable', '2019-03-06 18:52:37', '2019-03-06 18:52:37'),
(760, 'translate ', 'Enable', '2019-03-06 18:52:37', '2019-03-06 18:52:37'),
(761, 'translation ', 'Enable', '2019-03-06 18:52:37', '2019-03-06 18:52:37'),
(762, 'treat ', 'Enable', '2019-03-06 18:52:37', '2019-03-06 18:52:37'),
(763, 'trigger ', 'Enable', '2019-03-06 18:52:37', '2019-03-06 18:52:37'),
(764, 'trigger_catalog ', 'Enable', '2019-03-06 18:52:37', '2019-03-06 18:52:37'),
(765, 'trigger_name ', 'Enable', '2019-03-06 18:52:37', '2019-03-06 18:52:37'),
(766, 'trigger_schema ', 'Enable', '2019-03-06 18:52:37', '2019-03-06 18:52:37'),
(767, 'trim ', 'Enable', '2019-03-06 18:52:37', '2019-03-06 18:52:37'),
(768, 'true ', 'Enable', '2019-03-06 18:52:37', '2019-03-06 18:52:37'),
(769, 'truncate ', 'Enable', '2019-03-06 18:52:37', '2019-03-06 18:52:37'),
(770, 'trusted ', 'Enable', '2019-03-06 18:52:37', '2019-03-06 18:52:37'),
(771, 'tsequal ', 'Enable', '2019-03-06 18:52:37', '2019-03-06 18:52:37'),
(772, 'type ', 'Enable', '2019-03-06 18:52:37', '2019-03-06 18:52:37'),
(773, 'uescape ', 'Enable', '2019-03-06 18:52:37', '2019-03-06 18:52:37'),
(774, 'uid ', 'Enable', '2019-03-06 18:52:37', '2019-03-06 18:52:37'),
(775, 'unbounded ', 'Enable', '2019-03-06 18:52:37', '2019-03-06 18:52:37'),
(776, 'uncommitted ', 'Enable', '2019-03-06 18:52:37', '2019-03-06 18:52:37'),
(777, 'under ', 'Enable', '2019-03-06 18:52:37', '2019-03-06 18:52:37'),
(778, 'undo ', 'Enable', '2019-03-06 18:52:37', '2019-03-06 18:52:37'),
(779, 'unencrypted ', 'Enable', '2019-03-06 18:52:37', '2019-03-06 18:52:37'),
(780, 'union ', 'Enable', '2019-03-06 18:52:37', '2019-03-06 18:52:37'),
(781, 'unique ', 'Enable', '2019-03-06 18:52:37', '2019-03-06 18:52:37'),
(782, 'unknown ', 'Enable', '2019-03-06 18:52:37', '2019-03-06 18:52:37'),
(783, 'unlisten ', 'Enable', '2019-03-06 18:52:37', '2019-03-06 18:52:37'),
(784, 'unlock ', 'Enable', '2019-03-06 18:52:37', '2019-03-06 18:52:37'),
(785, 'unnamed ', 'Enable', '2019-03-06 18:52:37', '2019-03-06 18:52:37'),
(786, 'unnest ', 'Enable', '2019-03-06 18:52:37', '2019-03-06 18:52:37'),
(787, 'unsigned ', 'Enable', '2019-03-06 18:52:37', '2019-03-06 18:52:37'),
(788, 'until ', 'Enable', '2019-03-06 18:52:37', '2019-03-06 18:52:37'),
(789, 'update ', 'Enable', '2019-03-06 18:52:37', '2019-03-06 18:52:37'),
(790, 'updatetext ', 'Enable', '2019-03-06 18:52:37', '2019-03-06 18:52:37'),
(791, 'upper ', 'Enable', '2019-03-06 18:52:37', '2019-03-06 18:52:37'),
(792, 'usage ', 'Enable', '2019-03-06 18:52:37', '2019-03-06 18:52:37'),
(793, 'use ', 'Enable', '2019-03-06 18:52:37', '2019-03-06 18:52:37'),
(794, 'user ', 'Enable', '2019-03-06 18:52:37', '2019-03-06 18:52:37'),
(795, 'user_defined_type_catalog ', 'Enable', '2019-03-06 18:52:37', '2019-03-06 18:52:37'),
(796, 'user_defined_type_code ', 'Enable', '2019-03-06 18:52:37', '2019-03-06 18:52:37'),
(797, 'user_defined_type_name ', 'Enable', '2019-03-06 18:52:37', '2019-03-06 18:52:37'),
(798, 'user_defined_type_schema ', 'Enable', '2019-03-06 18:52:37', '2019-03-06 18:52:37'),
(799, 'using ', 'Enable', '2019-03-06 18:52:37', '2019-03-06 18:52:37'),
(800, 'utc_date ', 'Enable', '2019-03-06 18:52:37', '2019-03-06 18:52:37'),
(801, 'utc_time ', 'Enable', '2019-03-06 18:52:37', '2019-03-06 18:52:37'),
(802, 'utc_timestamp ', 'Enable', '2019-03-06 18:52:37', '2019-03-06 18:52:37'),
(803, 'vacuum ', 'Enable', '2019-03-06 18:52:37', '2019-03-06 18:52:37'),
(804, 'valid ', 'Enable', '2019-03-06 18:52:37', '2019-03-06 18:52:37'),
(805, 'validate ', 'Enable', '2019-03-06 18:52:37', '2019-03-06 18:52:37'),
(806, 'validator ', 'Enable', '2019-03-06 18:52:37', '2019-03-06 18:52:37'),
(807, 'value ', 'Enable', '2019-03-06 18:52:37', '2019-03-06 18:52:37'),
(808, 'values ', 'Enable', '2019-03-06 18:52:37', '2019-03-06 18:52:37'),
(809, 'var_pop ', 'Enable', '2019-03-06 18:52:37', '2019-03-06 18:52:37'),
(810, 'var_samp ', 'Enable', '2019-03-06 18:52:37', '2019-03-06 18:52:37'),
(811, 'varbinary ', 'Enable', '2019-03-06 18:52:37', '2019-03-06 18:52:37'),
(812, 'varchar ', 'Enable', '2019-03-06 18:52:37', '2019-03-06 18:52:37'),
(813, 'varchar2 ', 'Enable', '2019-03-06 18:52:37', '2019-03-06 18:52:37'),
(814, 'varcharacter ', 'Enable', '2019-03-06 18:52:37', '2019-03-06 18:52:37'),
(815, 'variable ', 'Enable', '2019-03-06 18:52:37', '2019-03-06 18:52:37'),
(816, 'variables ', 'Enable', '2019-03-06 18:52:37', '2019-03-06 18:52:37'),
(817, 'varying ', 'Enable', '2019-03-06 18:52:37', '2019-03-06 18:52:37'),
(818, 'verbose ', 'Enable', '2019-03-06 18:52:37', '2019-03-06 18:52:37'),
(819, 'view ', 'Enable', '2019-03-06 18:52:37', '2019-03-06 18:52:37'),
(820, 'volatile ', 'Enable', '2019-03-06 18:52:37', '2019-03-06 18:52:37'),
(821, 'waitfor ', 'Enable', '2019-03-06 18:52:37', '2019-03-06 18:52:37'),
(822, 'when ', 'Enable', '2019-03-06 18:52:37', '2019-03-06 18:52:37'),
(823, 'whenever ', 'Enable', '2019-03-06 18:52:37', '2019-03-06 18:52:37'),
(824, 'where ', 'Enable', '2019-03-06 18:52:37', '2019-03-06 18:52:37'),
(825, 'while ', 'Enable', '2019-03-06 18:52:37', '2019-03-06 18:52:37'),
(826, 'width_bucket ', 'Enable', '2019-03-06 18:52:37', '2019-03-06 18:52:37'),
(827, 'window ', 'Enable', '2019-03-06 18:52:37', '2019-03-06 18:52:37'),
(828, 'with ', 'Enable', '2019-03-06 18:52:37', '2019-03-06 18:52:37'),
(829, 'within ', 'Enable', '2019-03-06 18:52:37', '2019-03-06 18:52:37'),
(830, 'without ', 'Enable', '2019-03-06 18:52:37', '2019-03-06 18:52:37'),
(831, 'work ', 'Enable', '2019-03-06 18:52:37', '2019-03-06 18:52:37'),
(832, 'write ', 'Enable', '2019-03-06 18:52:37', '2019-03-06 18:52:37'),
(833, 'writetext ', 'Enable', '2019-03-06 18:52:37', '2019-03-06 18:52:37'),
(834, 'x509 ', 'Enable', '2019-03-06 18:52:37', '2019-03-06 18:52:37'),
(835, 'xor ', 'Enable', '2019-03-06 18:52:37', '2019-03-06 18:52:37'),
(836, 'year ', 'Enable', '2019-03-06 18:52:37', '2019-03-06 18:52:37'),
(837, 'year_month ', 'Enable', '2019-03-06 18:52:37', '2019-03-06 18:52:37'),
(838, 'zerofill ', 'Enable', '2019-03-06 18:52:37', '2019-03-06 18:52:37'),
(839, 'zone', 'Enable', '2019-03-06 18:52:37', '2019-03-06 18:52:37');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `special` enum('all-access','no-access','no-assigned') COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id`, `name`, `slug`, `description`, `created_at`, `updated_at`, `special`) VALUES
(1, 'Admin', 'admin', 'System Web Admin', '2019-03-07 00:52:33', '2019-03-07 00:52:33', 'all-access'),
(2, 'Customer', 'customer', 'Registered Customer', '2019-03-07 00:52:33', '2019-03-07 00:52:33', 'no-access'),
(3, 'Store Designer', 'storedesigner', 'Registered Store Designer', '2019-03-07 00:52:33', '2019-03-07 00:52:33', 'no-access');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `role_user`
--

CREATE TABLE `role_user` (
  `id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `role_user`
--

INSERT INTO `role_user` (`id`, `role_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '2019-03-07 00:52:34', '2019-03-07 00:52:34'),
(2, 2, 2, '2019-03-07 00:52:34', '2019-03-07 00:52:34'),
(3, 3, 3, '2019-03-07 00:52:34', '2019-03-07 00:52:34'),
(4, 3, 4, '2019-03-07 00:52:34', '2019-03-07 00:52:34'),
(5, 3, 5, '2019-03-07 00:52:34', '2019-03-07 00:52:34'),
(6, 3, 6, '2019-03-07 00:52:34', '2019-03-07 00:52:34'),
(7, 3, 7, '2019-03-07 00:52:34', '2019-03-07 00:52:34'),
(8, 3, 8, '2019-03-07 00:52:34', '2019-03-07 00:52:34'),
(9, 3, 9, '2019-03-07 00:52:34', '2019-03-07 00:52:34'),
(10, 3, 10, '2019-03-07 00:52:34', '2019-03-07 00:52:34'),
(11, 3, 11, '2019-03-07 00:52:34', '2019-03-07 00:52:34'),
(12, 3, 12, '2019-03-07 00:52:34', '2019-03-07 00:52:34'),
(13, 3, 13, '2019-03-07 00:52:34', '2019-03-07 00:52:34');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sizes`
--

CREATE TABLE `sizes` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `orden` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `sizes`
--

INSERT INTO `sizes` (`id`, `name`, `status`, `orden`, `created_at`, `updated_at`) VALUES
(1, 'NB', 'Enable', 1, '2019-03-07 00:52:33', '2019-03-07 00:52:33'),
(2, '0M', 'Enable', 2, '2019-03-07 00:52:33', '2019-03-07 00:52:33'),
(3, '3M', 'Enable', 3, '2019-03-07 00:52:33', '2019-03-07 00:52:33'),
(4, '6M', 'Enable', 4, '2019-03-07 00:52:33', '2019-03-07 00:52:33'),
(5, '12M', 'Enable', 5, '2019-03-07 00:52:33', '2019-03-07 00:52:33'),
(6, '18M', 'Enable', 6, '2019-03-07 00:52:33', '2019-03-07 00:52:33'),
(7, '24M', 'Enable', 7, '2019-03-07 00:52:33', '2019-03-07 00:52:33'),
(8, '2T', 'Enable', 8, '2019-03-07 00:52:33', '2019-03-07 00:52:33'),
(9, '3T', 'Enable', 9, '2019-03-07 00:52:33', '2019-03-07 00:52:33'),
(10, '4T', 'Enable', 10, '2019-03-07 00:52:33', '2019-03-07 00:52:33'),
(11, '5T', 'Enable', 11, '2019-03-07 00:52:33', '2019-03-07 00:52:33'),
(12, '5_6', 'Enable', 12, '2019-03-07 00:52:33', '2019-03-07 00:52:33'),
(13, '6T', 'Enable', 13, '2019-03-07 00:52:33', '2019-03-07 00:52:33'),
(14, '7', 'Enable', 14, '2019-03-07 00:52:33', '2019-03-07 00:52:33'),
(15, 'YXS', 'Enable', 15, '2019-03-07 00:52:33', '2019-03-07 00:52:33'),
(16, 'YS', 'Enable', 16, '2019-03-07 00:52:33', '2019-03-07 00:52:33'),
(17, 'YM', 'Enable', 17, '2019-03-07 00:52:33', '2019-03-07 00:52:33'),
(18, 'YL', 'Enable', 18, '2019-03-07 00:52:33', '2019-03-07 00:52:33'),
(19, 'YXL', 'Enable', 19, '2019-03-07 00:52:33', '2019-03-07 00:52:33'),
(20, 'XS', 'Enable', 20, '2019-03-07 00:52:33', '2019-03-07 00:52:33'),
(21, 'S', 'Enable', 21, '2019-03-07 00:52:33', '2019-03-07 00:52:33'),
(22, 'M', 'Enable', 22, '2019-03-07 00:52:33', '2019-03-07 00:52:33'),
(23, 'L', 'Enable', 23, '2019-03-07 00:52:33', '2019-03-07 00:52:33'),
(24, 'XL', 'Enable', 24, '2019-03-07 00:52:33', '2019-03-07 00:52:33'),
(25, '2XL', 'Enable', 25, '2019-03-07 00:52:33', '2019-03-07 00:52:33'),
(26, '3XL', 'Enable', 26, '2019-03-07 00:52:33', '2019-03-07 00:52:33'),
(27, '4XL', 'Enable', 27, '2019-03-07 00:52:33', '2019-03-07 00:52:33'),
(28, '5XL', 'Enable', 28, '2019-03-07 00:52:33', '2019-03-07 00:52:33'),
(29, 'ONE_SIZE', 'Enable', 29, '2019-03-07 00:52:33', '2019-03-07 00:52:33');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `size_charts`
--

CREATE TABLE `size_charts` (
  `id` int(10) UNSIGNED NOT NULL,
  `size` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `width` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `length` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `size_charts`
--

INSERT INTO `size_charts` (`id`, `size`, `width`, `length`, `created_at`, `updated_at`) VALUES
(1, 'YXS', '16\"', '19.75\"', '2019-03-07 01:17:29', '2019-03-07 01:17:29'),
(2, 'YS', '17\"', '21.25\"', '2019-03-07 01:17:29', '2019-03-07 01:17:29'),
(3, 'YM', '18\"', '22.5\"', '2019-03-07 01:17:29', '2019-03-07 01:17:29'),
(4, 'YL', '19\"', '24\"', '2019-03-07 01:17:29', '2019-03-07 01:17:29'),
(5, 'YXL', '20\"', '25.5\"', '2019-03-07 01:17:29', '2019-03-07 01:17:29'),
(6, 'S', '20\"', '26\"', '2019-03-07 01:17:29', '2019-03-07 01:17:29'),
(7, 'M', '22\"', '27\"', '2019-03-07 01:17:29', '2019-03-07 01:17:29'),
(8, 'L', '24\"', '28\"', '2019-03-07 01:17:29', '2019-03-07 01:17:29'),
(9, 'XL', '26\"', '29\"', '2019-03-07 01:17:29', '2019-03-07 01:17:29'),
(10, '2XL', '28\"', '30\"', '2019-03-07 01:17:29', '2019-03-07 01:17:29'),
(11, '3XL', '30\"', '31\"', '2019-03-07 01:17:29', '2019-03-07 01:17:29'),
(12, '4XL', '32\"', '32\"', '2019-03-07 01:17:29', '2019-03-07 01:17:29'),
(13, '5XL', '34\"', '33\"', '2019-03-07 01:17:29', '2019-03-07 01:17:29');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `subcategories`
--

CREATE TABLE `subcategories` (
  `id` int(10) UNSIGNED NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `subcategories`
--

INSERT INTO `subcategories` (`id`, `category_id`, `name`, `status`, `description`, `created_at`, `updated_at`) VALUES
(1, 1, 'Ladies', 'Enable', 'Ladies', '2019-03-07 00:52:35', '2019-03-07 00:52:35'),
(2, 1, 'Unisex', 'Enable', 'Ladies', '2019-03-07 00:52:35', '2019-03-07 00:52:35'),
(3, 1, 'Youth', 'Enable', 'Ladies', '2019-03-07 00:52:35', '2019-03-07 00:52:35'),
(4, 2, 'Drawstrings', 'Enable', 'Drawstrings', '2019-03-07 00:52:35', '2019-03-07 00:52:35'),
(5, 3, 'Comfortable', 'Enable', 'Comfortable', '2019-03-07 00:52:35', '2019-03-07 00:52:35'),
(6, 3, 'Fitted', 'Enable', 'Fitted', '2019-03-07 00:52:35', '2019-03-07 00:52:35'),
(7, 4, 'Ladies Short Sleeve', 'Enable', 'Ladies Short Sleeve', '2019-03-07 00:52:35', '2019-03-07 00:52:35'),
(8, 4, 'No Minimum', 'Enable', 'No Minimum', '2019-03-07 00:52:35', '2019-03-07 00:52:35'),
(9, 4, 'T Shirts', 'Enable', 'T Shirts', '2019-03-07 00:52:35', '2019-03-07 00:52:35'),
(10, 6, 'Cotton', 'Enable', 'Cotton', '2019-03-07 00:52:35', '2019-03-07 00:52:35'),
(11, 6, 'Polyester', 'Enable', 'Polyester', '2019-03-07 00:52:35', '2019-03-07 00:52:35'),
(12, 7, '$', 'Enable', '$', '2019-03-07 00:52:35', '2019-03-07 00:52:35'),
(13, 7, '$$', 'Enable', '$$', '2019-03-07 00:52:35', '2019-03-07 00:52:35'),
(14, 7, '$$$', 'Enable', '$$$', '2019-03-07 00:52:35', '2019-03-07 00:52:35'),
(15, 8, '2XL & Up', 'Enable', '2XL & Up', '2019-03-07 00:52:35', '2019-03-07 00:52:35'),
(16, 8, '4XL & Up', 'Enable', '2XL & Up', '2019-03-07 00:52:35', '2019-03-07 00:52:35'),
(17, 9, 'Athletic', 'Enable', 'Athletic', '2019-03-07 00:52:35', '2019-03-07 00:52:35'),
(18, 9, 'Ladies Short Sleeve', 'Enable', 'Ladies Short Sleeve', '2019-03-07 00:52:35', '2019-03-07 00:52:35'),
(19, 9, 'Long Sleeve', 'Enable', 'Long Sleeve', '2019-03-07 00:52:35', '2019-03-07 00:52:35'),
(20, 9, 'No Minimum', 'Enable', 'No Minimum', '2019-03-07 00:52:35', '2019-03-07 00:52:35'),
(21, 9, 'Pocket', 'Enable', 'Pocket', '2019-03-07 00:52:35', '2019-03-07 00:52:35'),
(22, 9, 'Short Sleeve', 'Enable', 'Short Sleeve', '2019-03-07 00:52:35', '2019-03-07 00:52:35'),
(23, 9, 'Sleeveless', 'Enable', 'Sleeveless', '2019-03-07 00:52:35', '2019-03-07 00:52:35'),
(24, 9, 'Tank Tops', 'Enable', 'Tank Tops', '2019-03-07 00:52:35', '2019-03-07 00:52:35'),
(25, 9, 'Youth', 'Enable', 'Youth', '2019-03-07 00:52:35', '2019-03-07 00:52:35'),
(26, 10, 'Athletic', 'Enable', 'Athletic', '2019-03-07 00:52:35', '2019-03-07 00:52:35'),
(27, 10, 'Hoodies & Sweatshirts', 'Enable', 'Hoodies & Sweatshirts', '2019-03-07 00:52:35', '2019-03-07 00:52:35'),
(28, 10, 'T Shirts', 'Enable', 'T Shirts', '2019-03-07 00:52:35', '2019-03-07 00:52:35'),
(29, 10, 'Tank Tops', 'Enable', 'Tank Tops', '2019-03-07 00:52:35', '2019-03-07 00:52:35'),
(30, 12, 'Infants', 'Enable', 'Infants', '2019-03-07 00:52:35', '2019-03-07 00:52:35'),
(31, 12, 'T Shirts', 'Enable', 'T Shirts', '2019-03-07 00:52:35', '2019-03-07 00:52:35');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `firstname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `birthday` timestamp NULL DEFAULT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `newsletter` tinyint(1) NOT NULL DEFAULT '0',
  `special_offers` tinyint(1) NOT NULL DEFAULT '0',
  `billing_street` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `billing_city` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `billing_state` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `billing_zip` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shipping_street` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shipping_city` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shipping_state` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shipping_zip` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cardcompany` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'profile.png',
  `lockout_time` int(11) NOT NULL DEFAULT '30',
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Customer'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `remember_token`, `created_at`, `updated_at`, `firstname`, `lastname`, `birthday`, `username`, `phone`, `newsletter`, `special_offers`, `billing_street`, `billing_city`, `billing_state`, `billing_zip`, `shipping_street`, `shipping_city`, `shipping_state`, `shipping_zip`, `company`, `cardcompany`, `image`, `lockout_time`, `type`) VALUES
(1, 'admin@example.com', '$2y$10$WLxHkxR/Qx71RwZKsqjX5eyS1f6XI9AewMzTp8tvHSEnqEfAIErD6', 'Gt7NEAsRifVEydgTWmXu6BGn47eQpm9DxddJJiqTbHkeFkLKlNMB8uffdPVX', '2019-03-07 00:52:34', '2019-03-07 00:52:34', 'Systems', 'Web Admin', '2019-03-07 00:52:34', 'admin', '(800) 648-8518', 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'avatar.png', 30, 'Admin'),
(2, 'katiel@example.com', '$2y$10$WLxHkxR/Qx71RwZKsqjX5eyS1f6XI9AewMzTp8tvHSEnqEfAIErD6', 'Gt7NEAsRifVEydgTWmXu6BGn47eQpm9DxddJJiqTbHkeFkLKlNMB8uffdPVX', '2019-03-07 00:52:34', '2019-03-07 00:52:34', 'Katie', 'Luu', '2019-03-07 00:52:34', 'katiel', '(800) 648-8518', 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'photo.png', 30, 'Customer'),
(3, 'andy@example.com', '$2y$10$WLxHkxR/Qx71RwZKsqjX5eyS1f6XI9AewMzTp8tvHSEnqEfAIErD6', 'Gt7NEAsRifVEydgTWmXu6BGn47eQpm9DxddJJiqTbHkeFkLKlNMB8uffdPVX', '2019-03-07 00:52:34', '2019-03-07 00:52:34', 'Andy', 'Luu', '2019-03-07 00:52:34', 'andy', '(800) 648-8518', 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'profile.png', 30, 'Store Designer'),
(4, 'andy1@example.com', '$2y$10$WLxHkxR/Qx71RwZKsqjX5eyS1f6XI9AewMzTp8tvHSEnqEfAIErD6', 'Gt7NEAsRifVEydgTWmXu6BGn47eQpm9DxddJJiqTbHkeFkLKlNMB8uffdPVX', '2019-03-07 00:52:34', '2019-03-07 00:52:34', 'Andy', 'Luu', '2019-03-07 00:52:34', 'andy1', '(800) 648-8518', 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'profile.png', 30, 'Customer'),
(5, 'andy2@example.com', '$2y$10$WLxHkxR/Qx71RwZKsqjX5eyS1f6XI9AewMzTp8tvHSEnqEfAIErD6', 'Gt7NEAsRifVEydgTWmXu6BGn47eQpm9DxddJJiqTbHkeFkLKlNMB8uffdPVX', '2019-03-07 00:52:34', '2019-03-07 00:52:34', 'Andy', 'Luu', '2019-03-07 00:52:34', 'andy2', '(800) 648-8518', 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'profile.png', 30, 'Customer'),
(6, 'andy3@example.com', '$2y$10$WLxHkxR/Qx71RwZKsqjX5eyS1f6XI9AewMzTp8tvHSEnqEfAIErD6', 'Gt7NEAsRifVEydgTWmXu6BGn47eQpm9DxddJJiqTbHkeFkLKlNMB8uffdPVX', '2019-03-07 00:52:34', '2019-03-07 00:52:34', 'Andy', 'Luu', '2019-03-07 00:52:34', 'andy3', '(800) 648-8518', 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'profile.png', 30, 'Customer'),
(7, 'andy4@example.com', '$2y$10$WLxHkxR/Qx71RwZKsqjX5eyS1f6XI9AewMzTp8tvHSEnqEfAIErD6', 'Gt7NEAsRifVEydgTWmXu6BGn47eQpm9DxddJJiqTbHkeFkLKlNMB8uffdPVX', '2019-03-07 00:52:34', '2019-03-07 00:52:34', 'Andy', 'Luu', '2019-03-07 00:52:34', 'andy4', '(800) 648-8518', 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'profile.png', 30, 'Customer'),
(8, 'andy5@example.com', '$2y$10$WLxHkxR/Qx71RwZKsqjX5eyS1f6XI9AewMzTp8tvHSEnqEfAIErD6', 'Gt7NEAsRifVEydgTWmXu6BGn47eQpm9DxddJJiqTbHkeFkLKlNMB8uffdPVX', '2019-03-07 00:52:34', '2019-03-07 00:52:34', 'Andy', 'Luu', '2019-03-07 00:52:34', 'andy5', '(800) 648-8518', 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'profile.png', 30, 'Customer'),
(9, 'andy6@example.com', '$2y$10$WLxHkxR/Qx71RwZKsqjX5eyS1f6XI9AewMzTp8tvHSEnqEfAIErD6', 'Gt7NEAsRifVEydgTWmXu6BGn47eQpm9DxddJJiqTbHkeFkLKlNMB8uffdPVX', '2019-03-07 00:52:34', '2019-03-07 00:52:34', 'Andy', 'Luu', '2019-03-07 00:52:34', 'andy6', '(800) 648-8518', 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'profile.png', 30, 'Customer'),
(10, 'andy7@example.com', '$2y$10$WLxHkxR/Qx71RwZKsqjX5eyS1f6XI9AewMzTp8tvHSEnqEfAIErD6', 'Gt7NEAsRifVEydgTWmXu6BGn47eQpm9DxddJJiqTbHkeFkLKlNMB8uffdPVX', '2019-03-07 00:52:34', '2019-03-07 00:52:34', 'Andy', 'Luu', '2019-03-07 00:52:34', 'andy7', '(800) 648-8518', 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'profile.png', 30, 'Customer'),
(11, 'andy8@example.com', '$2y$10$WLxHkxR/Qx71RwZKsqjX5eyS1f6XI9AewMzTp8tvHSEnqEfAIErD6', 'Gt7NEAsRifVEydgTWmXu6BGn47eQpm9DxddJJiqTbHkeFkLKlNMB8uffdPVX', '2019-03-07 00:52:34', '2019-03-07 00:52:34', 'Andy', 'Luu', '2019-03-07 00:52:34', 'andy8', '(800) 648-8518', 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'profile.png', 30, 'Customer'),
(12, 'andy9@example.com', '$2y$10$WLxHkxR/Qx71RwZKsqjX5eyS1f6XI9AewMzTp8tvHSEnqEfAIErD6', 'Gt7NEAsRifVEydgTWmXu6BGn47eQpm9DxddJJiqTbHkeFkLKlNMB8uffdPVX', '2019-03-07 00:52:34', '2019-03-07 00:52:34', 'Andy', 'Luu', '2019-03-07 00:52:34', 'andy9', '(800) 648-8518', 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'profile.png', 30, 'Customer'),
(13, 'andy10@example.com', '$2y$10$WLxHkxR/Qx71RwZKsqjX5eyS1f6XI9AewMzTp8tvHSEnqEfAIErD6', 'Gt7NEAsRifVEydgTWmXu6BGn47eQpm9DxddJJiqTbHkeFkLKlNMB8uffdPVX', '2019-03-07 00:52:34', '2019-03-07 00:52:34', 'Andy', 'Luu', '2019-03-07 00:52:34', 'andy10', '(800) 648-8518', 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'profile.png', 30, 'Customer');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `aditional_images`
--
ALTER TABLE `aditional_images`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `audits`
--
ALTER TABLE `audits`
  ADD PRIMARY KEY (`id`),
  ADD KEY `audits_auditable_id_auditable_type_index` (`auditable_id`,`auditable_type`);

--
-- Indices de la tabla `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `colors`
--
ALTER TABLE `colors`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `fonts`
--
ALTER TABLE `fonts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fonts_fontcategory_id_foreign` (`fontcategory_id`);

--
-- Indices de la tabla `font_categories`
--
ALTER TABLE `font_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `invoices`
--
ALTER TABLE `invoices`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `invoice_products`
--
ALTER TABLE `invoice_products`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `newsletters`
--
ALTER TABLE `newsletters`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_slug_unique` (`slug`);

--
-- Indices de la tabla `permission_role`
--
ALTER TABLE `permission_role`
  ADD PRIMARY KEY (`id`),
  ADD KEY `permission_role_permission_id_index` (`permission_id`),
  ADD KEY `permission_role_role_id_index` (`role_id`);

--
-- Indices de la tabla `permission_user`
--
ALTER TABLE `permission_user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `permission_user_permission_id_index` (`permission_id`),
  ADD KEY `permission_user_user_id_index` (`user_id`);

--
-- Indices de la tabla `price_shirts`
--
ALTER TABLE `price_shirts`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_parent_id_foreign` (`parent_id`),
  ADD KEY `products_color_id_foreign` (`color_id`);

--
-- Indices de la tabla `product_aditional_image`
--
ALTER TABLE `product_aditional_image`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_aditional_image_product_id_index` (`product_id`),
  ADD KEY `product_aditional_image_aditional_image_id_index` (`aditional_image_id`);

--
-- Indices de la tabla `product_categories`
--
ALTER TABLE `product_categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_categories_product_id_index` (`product_id`),
  ADD KEY `product_categories_category_id_index` (`category_id`),
  ADD KEY `product_categories_subcategory_id_index` (`subcategory_id`);

--
-- Indices de la tabla `product_price_shirt`
--
ALTER TABLE `product_price_shirt`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_price_shirt_product_id_index` (`product_id`),
  ADD KEY `product_price_shirt_price_shirt_id_index` (`price_shirt_id`);

--
-- Indices de la tabla `product_size`
--
ALTER TABLE `product_size`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_size_product_id_index` (`product_id`),
  ADD KEY `product_size_size_id_index` (`size_id`);

--
-- Indices de la tabla `product_size_chart`
--
ALTER TABLE `product_size_chart`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_size_chart_product_id_index` (`product_id`),
  ADD KEY `product_size_chart_size_chart_id_index` (`size_chart_id`);

--
-- Indices de la tabla `promo_codes`
--
ALTER TABLE `promo_codes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `promo_codes_name_unique` (`name`);

--
-- Indices de la tabla `related_products`
--
ALTER TABLE `related_products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `related_products_product_id_index` (`product_id`),
  ADD KEY `related_products_related_product_id_index` (`related_product_id`);

--
-- Indices de la tabla `reserved_words`
--
ALTER TABLE `reserved_words`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `reserved_words_name_unique` (`name`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_unique` (`name`),
  ADD UNIQUE KEY `roles_slug_unique` (`slug`);

--
-- Indices de la tabla `role_user`
--
ALTER TABLE `role_user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `role_user_role_id_index` (`role_id`),
  ADD KEY `role_user_user_id_index` (`user_id`);

--
-- Indices de la tabla `sizes`
--
ALTER TABLE `sizes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `size_charts`
--
ALTER TABLE `size_charts`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `subcategories`
--
ALTER TABLE `subcategories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `subcategories_category_id_foreign` (`category_id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_username_unique` (`username`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `aditional_images`
--
ALTER TABLE `aditional_images`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `audits`
--
ALTER TABLE `audits`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
--
-- AUTO_INCREMENT de la tabla `brands`
--
ALTER TABLE `brands`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT de la tabla `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT de la tabla `colors`
--
ALTER TABLE `colors`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=141;
--
-- AUTO_INCREMENT de la tabla `fonts`
--
ALTER TABLE `fonts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;
--
-- AUTO_INCREMENT de la tabla `font_categories`
--
ALTER TABLE `font_categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT de la tabla `invoices`
--
ALTER TABLE `invoices`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `invoice_products`
--
ALTER TABLE `invoice_products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4644;
--
-- AUTO_INCREMENT de la tabla `newsletters`
--
ALTER TABLE `newsletters`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;
--
-- AUTO_INCREMENT de la tabla `permission_role`
--
ALTER TABLE `permission_role`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `permission_user`
--
ALTER TABLE `permission_user`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `price_shirts`
--
ALTER TABLE `price_shirts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `product_aditional_image`
--
ALTER TABLE `product_aditional_image`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `product_categories`
--
ALTER TABLE `product_categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `product_price_shirt`
--
ALTER TABLE `product_price_shirt`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `product_size`
--
ALTER TABLE `product_size`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;
--
-- AUTO_INCREMENT de la tabla `product_size_chart`
--
ALTER TABLE `product_size_chart`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT de la tabla `promo_codes`
--
ALTER TABLE `promo_codes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `related_products`
--
ALTER TABLE `related_products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `reserved_words`
--
ALTER TABLE `reserved_words`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=840;
--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `role_user`
--
ALTER TABLE `role_user`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT de la tabla `sizes`
--
ALTER TABLE `sizes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT de la tabla `size_charts`
--
ALTER TABLE `size_charts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT de la tabla `subcategories`
--
ALTER TABLE `subcategories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `fonts`
--
ALTER TABLE `fonts`
  ADD CONSTRAINT `fonts_fontcategory_id_foreign` FOREIGN KEY (`fontcategory_id`) REFERENCES `font_categories` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `permission_role`
--
ALTER TABLE `permission_role`
  ADD CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `permission_user`
--
ALTER TABLE `permission_user`
  ADD CONSTRAINT `permission_user_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `permission_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_color_id_foreign` FOREIGN KEY (`color_id`) REFERENCES `colors` (`id`),
  ADD CONSTRAINT `products_parent_id_foreign` FOREIGN KEY (`parent_id`) REFERENCES `products` (`id`);

--
-- Filtros para la tabla `product_aditional_image`
--
ALTER TABLE `product_aditional_image`
  ADD CONSTRAINT `product_aditional_image_aditional_image_id_foreign` FOREIGN KEY (`aditional_image_id`) REFERENCES `aditional_images` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `product_aditional_image_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `product_categories`
--
ALTER TABLE `product_categories`
  ADD CONSTRAINT `product_categories_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `product_categories_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `product_categories_subcategory_id_foreign` FOREIGN KEY (`subcategory_id`) REFERENCES `subcategories` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `product_price_shirt`
--
ALTER TABLE `product_price_shirt`
  ADD CONSTRAINT `product_price_shirt_price_shirt_id_foreign` FOREIGN KEY (`price_shirt_id`) REFERENCES `price_shirts` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `product_price_shirt_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `product_size`
--
ALTER TABLE `product_size`
  ADD CONSTRAINT `product_size_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `product_size_size_id_foreign` FOREIGN KEY (`size_id`) REFERENCES `sizes` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `product_size_chart`
--
ALTER TABLE `product_size_chart`
  ADD CONSTRAINT `product_size_chart_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `product_size_chart_size_chart_id_foreign` FOREIGN KEY (`size_chart_id`) REFERENCES `size_charts` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `related_products`
--
ALTER TABLE `related_products`
  ADD CONSTRAINT `related_products_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `related_products_related_product_id_foreign` FOREIGN KEY (`related_product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `role_user`
--
ALTER TABLE `role_user`
  ADD CONSTRAINT `role_user_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `subcategories`
--
ALTER TABLE `subcategories`
  ADD CONSTRAINT `subcategories_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
