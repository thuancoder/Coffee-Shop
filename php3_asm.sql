-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost
-- Thời gian đã tạo: Th8 09, 2023 lúc 03:56 PM
-- Phiên bản máy phục vụ: 8.0.31
-- Phiên bản PHP: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `php3_asm`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `categories`
--

CREATE TABLE `categories` (
  `id` bigint UNSIGNED NOT NULL,
  `category_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_content` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `categories`
--

INSERT INTO `categories` (`id`, `category_name`, `category_content`, `created_at`, `updated_at`) VALUES
(4, 'Food', 'Tổng hợp các bài viết về Food', '2023-07-29 11:47:12', '2023-07-29 11:47:12'),
(5, 'Drink', 'Tổng hợp các bài viết về drink', '2023-07-29 11:47:42', '2023-07-29 11:47:42'),
(6, 'Cake', 'Tổng hợp các bài viết về cake', '2023-07-29 11:47:51', '2023-07-29 11:47:51');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comments`
--

CREATE TABLE `comments` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `post_id` bigint UNSIGNED DEFAULT NULL,
  `parent_id` bigint UNSIGNED NOT NULL,
  `comment_content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `comments`
--

INSERT INTO `comments` (`id`, `user_id`, `post_id`, `parent_id`, `comment_content`, `created_at`, `updated_at`) VALUES
(1, 5, 1, 0, 'Bài viết hay lắm', '2023-08-09 02:54:27', '2023-08-09 02:54:27'),
(2, 5, 1, 0, 'ádasd', '2023-08-09 03:47:18', '2023-08-09 03:47:18'),
(3, 5, 1, 0, 'Test ne', '2023-08-09 03:53:39', '2023-08-09 03:53:39'),
(4, 5, 1, 0, 'hay tuye', '2023-08-09 03:53:52', '2023-08-09 03:53:52'),
(5, 5, NULL, 1, 'hay that', '2023-08-09 06:08:23', '2023-08-09 06:08:23'),
(6, 5, NULL, 2, 'comemt 2', '2023-08-09 06:08:57', '2023-08-09 06:08:57'),
(7, 6, NULL, 1, 'y nghia lam', '2023-08-09 08:25:41', '2023-08-09 08:25:41');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_07_30_192812_create_categories_table', 1),
(6, '2023_07_30_194344_create_posts_table', 1),
(7, '2023_07_30_194331_create_products_table', 1),
(8, '2023_07_30_194408_create_product_categories_table', 1),
(9, '2023_07_30_194125_create_orders_table', 2),
(10, '2023_07_30_194249_create_order_detail_table', 2),
(11, '2023_07_30_125653_create_sessions_table', 3),
(12, '2023_08_04_061229_create_products_testapi_table', 4),
(13, '2023_08_08_082309_create_productapi_table', 5),
(14, '2023_08_09_093405_create_comments_table', 6);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orders`
--

CREATE TABLE `orders` (
  `id` bigint UNSIGNED NOT NULL,
  `customer_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_phone` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `shipping_address` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `note` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `total` int NOT NULL,
  `user_id` bigint NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `orders`
--

INSERT INTO `orders` (`id`, `customer_name`, `customer_phone`, `customer_email`, `shipping_address`, `note`, `total`, `user_id`, `created_at`, `updated_at`) VALUES
(31, 'Võ Hoàng Thuận', '0941477074', 'thuanvhpc02894@fpt.edu.vn', 'Cần Thơ', 'ádsadasd', 100, 5, NULL, NULL),
(55, 'Võ Hoàng Thuận', '0941477074', 'thuanvhpc02894@fpt.edu.vn', 'Cần Thơ', 'aaaaa', 290, 5, NULL, NULL),
(56, 'Võ Hoàng Thuận', '0941477074', 'hoangthuan02022000@gmail.com', 'Cần Thơ', 'Thuan ne', 200, 5, NULL, NULL),
(57, 'Võ Hoàng Thuận', '0941477074', 'hoangthuan02022000@gmail.com', 'Cần Thơ', 'Yes', 35, 5, NULL, NULL),
(58, 'Võ Hoàng Thuận', '0941477074', 'hoangthuan02022000@gmail.com', 'Cần Thơ', 'Yes', 35, 5, NULL, NULL),
(59, 'Võ Hoàng Thuận', '0941477074', 'hoangthuan02022000@gmail.com', 'Cần Thơ', 'Yes', 35, 5, NULL, NULL),
(60, 'Võ Hoàng Thuận', '0941477074', 'hoangthuan02022000@gmail.com', 'Cần Thơ', 'Yes', 35, 5, NULL, NULL),
(61, 'Võ Hoàng Thuận', '0941477074', 'hoangthuan02022000@gmail.com', 'Cần Thơ', 'Can tho', 130000, 5, NULL, NULL),
(62, 'Võ Hoàng Thuận', '0941477074', 'hoangthuan02022000@gmail.com', 'Cần Thơ', 'ádad', 130000, 5, NULL, NULL),
(63, 'Võ Hoàng Thuận', '0941477074', 'hoangthuan02022000@gmail.com', 'Cần Thơ', 'ádad', 130000, 5, NULL, NULL),
(64, 'Võ Hoàng Thuận', '0941477074', 'hoangthuan02022000@gmail.com', 'Cần Thơ', 'ádad', 130000, 5, NULL, NULL),
(65, 'Võ Hoàng Thuận', '0941477074', 'hoangthuan02022000@gmail.com', 'Cần Thơ', 'ádad', 130000, 5, NULL, NULL),
(66, 'Võ Hoàng Thuận', '0941477074', 'hoangthuan02022000@gmail.com', 'Cần Thơ', 'tad', 130000, 5, NULL, NULL),
(67, 'QuyenXInhXiu', '0948533285', 'thuyquyen0202@gmail.com', 'Phú Thuận, Phú Tân, Cà Mau', 'Không hành không ớt', 160, 6, NULL, NULL),
(68, 'Võ Hoàng Thuận', '0941477074', 'hoangthuan02022000@gmail.com', 'Cần Thơ', 'adad', 130000, 5, NULL, NULL),
(69, 'Võ Hoàng Thuận', '0941477074', 'hoangthuan02022000@gmail.com', 'Cần Thơ', 'aaa', 130280, 5, NULL, NULL),
(70, 'Tran Quoc VInh', '0941477074', 'vinhtqpc03869@fpt.edu.vn', 'Can Tho', '1', 330000, 5, NULL, NULL),
(71, 'Võ Hoàng Thuận', '0941477074', 'hoangthuan02022000@gmail.com', 'Cần Thơ', 'Khong hanh', 540000, 5, NULL, NULL),
(72, 'Võ Hoàng Thuận', '0941477074', 'hoangthuan02022000@gmail.com', 'Cần Thơ', 'Không hành', 220000, 5, NULL, NULL),
(73, 'Võ Hoàng Thuận', '0941477074', 'hoangthuan02022000@gmail.com', 'Cần Thơ', 'hhhh', 220000, 5, NULL, NULL),
(74, 'Võ Hoàng Thuận', '0941477074', 'hoangthuan02022000@gmail.com', 'Cần Thơ', 'ádad', 220000, 5, NULL, NULL),
(75, 'QuyenQuyen', '0948533285', 'thuyquyen0202@gmail.com', 'Cần Thơ', 'Không rau', 270000, 5, NULL, NULL),
(76, 'Thuan Thuan', '0941477074', 'thuanvhpc02894@fpt.edu.vn', 'Cần Thơ', 'Không hành', 270000, 5, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order_detail`
--

CREATE TABLE `order_detail` (
  `id` bigint UNSIGNED NOT NULL,
  `order_id` bigint NOT NULL,
  `product_id` bigint NOT NULL,
  `qty` int NOT NULL,
  `price` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `order_detail`
--

INSERT INTO `order_detail` (`id`, `order_id`, `product_id`, `qty`, `price`, `created_at`, `updated_at`) VALUES
(1, 59, 15, 1, 20, '2023-08-04 14:24:36', '2023-08-04 14:24:36'),
(2, 59, 16, 1, 15, '2023-08-04 14:24:36', '2023-08-04 14:24:36'),
(3, 60, 15, 1, 20, '2023-08-04 14:25:11', '2023-08-04 14:25:11'),
(4, 60, 16, 1, 15, '2023-08-04 14:25:11', '2023-08-04 14:25:11'),
(5, 67, 10, 1, 80, '2023-08-06 09:03:04', '2023-08-06 09:03:04'),
(6, 67, 13, 1, 80, '2023-08-06 09:03:04', '2023-08-06 09:03:04'),
(7, 68, 9, 1, 130000, '2023-08-06 18:31:27', '2023-08-06 18:31:27'),
(8, 69, 9, 1, 130000, '2023-08-06 19:48:58', '2023-08-06 19:48:58'),
(9, 69, 12, 2, 50, '2023-08-06 19:48:58', '2023-08-06 19:48:58'),
(10, 69, 14, 2, 90, '2023-08-06 19:48:58', '2023-08-06 19:48:58'),
(11, 70, 8, 2, 100000, '2023-08-07 05:53:37', '2023-08-07 05:53:37'),
(12, 70, 9, 1, 130000, '2023-08-07 05:53:37', '2023-08-07 05:53:37'),
(13, 71, 8, 2, 100000, '2023-08-07 06:25:28', '2023-08-07 06:25:28'),
(14, 71, 9, 2, 130000, '2023-08-07 06:25:28', '2023-08-07 06:25:28'),
(15, 71, 10, 1, 80000, '2023-08-07 06:25:28', '2023-08-07 06:25:28'),
(16, 72, 9, 1, 130000, '2023-08-08 16:26:20', '2023-08-08 16:26:20'),
(17, 72, 14, 1, 90000, '2023-08-08 16:26:20', '2023-08-08 16:26:20'),
(18, 73, 9, 1, 130000, '2023-08-08 16:28:13', '2023-08-08 16:28:13'),
(19, 73, 14, 1, 90000, '2023-08-08 16:28:13', '2023-08-08 16:28:13'),
(20, 74, 9, 1, 130000, '2023-08-08 16:30:02', '2023-08-08 16:30:02'),
(21, 74, 14, 1, 90000, '2023-08-08 16:30:02', '2023-08-08 16:30:02'),
(22, 75, 9, 1, 130000, '2023-08-08 16:31:43', '2023-08-08 16:31:43'),
(23, 75, 14, 1, 90000, '2023-08-08 16:31:43', '2023-08-08 16:31:43'),
(24, 75, 12, 1, 50000, '2023-08-08 16:31:43', '2023-08-08 16:31:43'),
(25, 76, 9, 1, 130000, '2023-08-08 16:34:05', '2023-08-08 16:34:05'),
(26, 76, 14, 1, 90000, '2023-08-08 16:34:05', '2023-08-08 16:34:05'),
(27, 76, 12, 1, 50000, '2023-08-08 16:34:05', '2023-08-08 16:34:05');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `password_reset_tokens`
--

INSERT INTO `password_reset_tokens` (`email`, `token`, `created_at`) VALUES
('hoangthuan02022000@gmail.com', '$2y$10$6RPbihVGVUiadgRzeRmXB./Zsayd81n3ZTEH2jKeOm9.hJGXhG78a', '2023-07-28 00:14:29'),
('thuanvhpc02894@fpt.edu.vn', '$2y$10$tbVFq1VApML.8ciQ0AmtuOPyu..JbyfokFtGWjIYfedLvtAGY3/cG', '2023-07-30 06:38:15');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `posts`
--

CREATE TABLE `posts` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_content` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `thumbnail` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `view` int NOT NULL DEFAULT '0',
  `category_id` bigint NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `posts`
--

INSERT INTO `posts` (`id`, `name`, `slug`, `post_content`, `thumbnail`, `view`, `category_id`, `created_at`, `updated_at`) VALUES
(1, 'Sở thích uống cà phê tiết lộ bí mật động trời về tính cách của bạn', 'so-thich-uong-ca-phe-tiet-lo-bi-mat-dong-troi-ve-tinh-cach-cua-ban', '<p>Hãy nói cho tôi loại cà phê mà bạn hay uống, tôi sẽ nói cho bạn biết bạn là người như thế nào”. Chỉ với một ly cà phê nhưng chúng lại nói lên nhiều điều về tính cách của bạn, hãy cùng Classic Coffee tìm hiểu nhé.</p> <p>1. Cà phê espresso<br /> Cà phê này thường phục vụ ngay khi khách hàng gọi, chính vì thế nó có từ “espress” có nghĩa là nhanh chóng. Vị của loại cà phê này đắng đậm, khó tả, gần gũi. Nếu bạn có sở thích uống loại cà phê này thì bạn là một người thân thiện, dễ mến, dễ dàng thích ứng với sự thay đổi của môi trường. Bạn &nbsp;chính xác như vị của cà phê, hiếm có, lạ và thật khiến người khác ngưỡng mộ.</p> <p>Sở thích uống cà phê tiết lộ bí mật động trời về tính cách của bạn</p> <p>2. Cà phê sữa</p> <p>Nhẹ nhàng, tình cảm, ấm áp là từ để bộc lộ tính cách của người thích cà phê sữa. Tuy nhiên họ lại không giỏi chịu đựng áp lực. Những người này sống thiên về tình cảm, tính cách đôi lúc có trẻ con nhưng lại rất biết cảm thông với người khác. Nếu bạn định tìm ai đó để tâm sự thì anh chàng/cô nàng cà phê sữa là một tuýp người bạn không nên bỏ qua đâu đấy nhé.</p> <p>3. Cà phê đen&nbsp;</p> <p>Cà phê đen cho thấy rằng người này có tính cách khá mạnh mẽ, cứng rắn, bộc trực, thẳng thắn và có phần hơi nóng tính. Có thể trong nhiều tình huống họ không phải là người tinh ý hoặc nắm bắt tốt tình huống nhưng họ lại chứa sự nhiệt thành, sẵn sàng bên cạnh bạn khi bạn cần.&nbsp;</p> <p>Sở thích uống cà phê tiết lộ bí mật động trời về tính cách của bạn</p> <p>4. Cà phê hòa tan</p> <p>Người thích uống cà phê hòa tan có lẽ là mẫu người hơi hướng nội. Không thích chia sẻ suy nghĩ của mình cho người khác, nội tâm của họ cũng có vẻ khá phức tạp tuy nhiên lúc ra đường lại luôn tỏ ra bình ổn. Có thể bạn sẽ không thấy những người thích cà phê hòa tan buồn bao giờ. Bởi vì họ rất giỏi che đậy cảm xúc.</p> <p>5. Cà phê Cappuccino</p> <p>Cũng giống như loại thức uống sủi bọt này, người mê cappuccino có tâm hồn phong phú. Nên dù rất yêu thích chuyện gối chăn, họ dễ cảm thấy chán nếu bạn tình quá thụ động và máy móc trên giường. Họ không ham lợi danh hay những gì quá tỉ mỉ, vụn vặt. Họ thích bắt tay vào làm việc hơn là tìm hiểu các tiểu tiết lê thê. Đây là túyp người lạc quan, sống có phong cách và trân trọng cái đẹp.</p> <p>Sở thích uống cà phê tiết lộ bí mật động trời về tính cách của bạn</p> <p>6. Cà phê Latte</p> <p>Người ghiền latte chăm chút bề ngoài và thích sưu tầm những đồ vật dễ thương. Họ thích sự an toàn và muốn được mọi người yêu mến. Một ông chủ mê uống latte sẽ dùng giọng nói kiểu trẻ con để trách mắng bạn. Về bản chất, họ là người khá bướng bỉnh, không thích đối mặt trực tiếp và ít khi tự tay làm những việc nặng nhọc. Họ chung thủy với gia đình, thích bù khú với bạn bè thân thiết và có tính cách đôi chút trẻ con. Tình dục không phải là đam mê lớn trong đời họ.</p> <p>7. Cà phê Mocha</p> <p>Cà phê mocha sẽ nói cho bạn biết rằng bạn là một người vui vẻ, lạc quan, sống tình cảm và sở hữu một bộ óc sáng tạo. Bạn có vẻ như không thích cà phê lắm nhưng nếu thiếu nó bạn khó giữ cho bản thân tỉnh táo được.</p> <p>Sở thích uống cà phê tiết lộ bí mật động trời về tính cách của bạn</p> <p>8. Cà phê đá</p> <p>Quyết đoán và thẳng thắn, người thích cà phê đá chính là như vậy. Ở bên cạnh chàng trai này, bạn sẽ được là cô gái sướng nhất thế gian vì mọi chuyện đã có anh ấy lo. Cách giải quyết vấn đề của anh ấy sẽ vô cùng độc đáo vì chưa có ai từng làm như vậy. Đừng bắt chàng trai này phải thay đổi vì ai đó bởi điều này rất khó. Hãy yêu cả những điểm tốt và chưa tốt của họ rồi cùng nhau thích nghi. Đây là chàng trai rất có chí tiến thủ nên mong bạn sẽ trân trọng mối quan hệ này.</p>', '/posts/20230729125710.jpg', 157, 4, '2023-08-09 15:50:57', '2023-08-09 08:50:57'),
(2, 'Bật mí 4 cách trang trí quán cafe đơn giản mà hút khách', 'bat-mi-4-cach-trang-tri-quan-cafe-don-gian-ma-hut-khach', '<p>Hôm nay Classic coffee sẽ chia sẻ cho bạn 4 cách thiết kế không gian nội thất quán &nbsp;cà phê hoàn chỉnh, chủ đầu tư không thể quên công đoạn trang trí. Sự đơn giản trong cách trang trí chính là để tôn lên vẻ đẹp của thiết kế.</p> <p>Bật mí 4 cách trang trí quán cafe đơn giản mà hút khách</p> <p>1) Trang trí quán cà phê bằng đèn chiếu sáng</p> <p>Cùng với sự xuất hiện ngày càng nhiều của các mẫu mã đèn có kiểu dáng độc đáo là xu hướng sử dụng đèn trang trí trong quán cà phê. Giờ đây chúng không chỉ có tác dụng cung cấp ánh sáng mà còn khả năng trang trí không gian. Có nhiều loại đèn và nhiều cách lắp đặt mà chủ quán có thể tham khảo như đèn âm trần, đèn thả, đèn ray, đèn dây… Với mỗi phong cách quán cà phê, chủ đầu tư cần có sự lựa chọn các mẫu mã đèn và số lượng đèn khác nhau</p> <p>Bật mí 4 cách trang trí quán cafe đơn giản mà hút khách</p> <p>2) Trang trí tường bằng những hình ảnh độc, lạ và có chủ đề riêng</p> <p>Lấy kinh nghiệm từ những thiết kế quán cafe đẹp, được thiết kế theo chủ đề đã và đang thu hút một lượng lớn khách hàng bởi không gian ấn tượng và sự tiện lợi của nó. Tuy nhiên, chính sự đơn giản này cũng dễ dàng đem lại sự nhàm chán, đơn điệu nếu sau một thời gian không có sự thay đổi gì về thiết kế. Sau một thời gian kinh doanh, chủ đầu tư nên cân nhắc việc cải tạo, làm mới không gian quán để dễ dàng thu hút khách hàng.</p> <p>Cách trang trí quán quán cà phê đơn giản nhất theo chủ đề đó là trang trí tường. Công việc này tương đối dễ thực hiện so với việc đổi mới nội thất hay bố trí sắp xếp lại nội thất.</p> <p>Bật mí 4 cách trang trí quán cafe đơn giản mà hút khách</p> <p>3) Sử dụng những vật trang trí lạ mắt</p> <p>Đây là cách trang trí quán cà phê đơn giản mà lại tiết kiệm chi phí nhất. Các đồ vật để trang trí không những phải gọn nhẹ, tiện lợi dễ di chuyển, mà nó còn là điểm nhấn ấn tượng của quán cafe. Vì vậy hãy chọn những vật trang trí xinh đẹp, lạ mắt để thu hút ánh nhìn của khách hàng. Một chiếc tủ nhỏ xinh, một giá treo áo mưa hay vài kệ sách nho nhỏ cũng là một gợi ý không tồi.</p> <p>Tại sao bạn không phá cách bằng việc chế đồ trang trí từ lốp xe, thùng phi, hay các vật dụng handmade khác từ giấy, hoa cỏ,…</p> <p>Bật mí 4 cách trang trí quán cafe đơn giản mà hút khách</p> <p>4) Cây xanh chưa bao giờ là cách trang trí lỗi thời</p> <p>Một cách trang trí quán cà phê đơn giản nữa đó là sử dụng cây xanh. Không gian xanh luôn mang đến một nguồn cảm hứng vô hạn, và đó cũng là điểm đến được các bạn trẻ ưu tiên lựa chọn. Vậy thì chỉ cần đặt một vài chậu cây nhỏ đâu đó không quán, bố trí khéo léo để tận dụng được nhiều ánh sáng tự nhiên, thì quán cafe nhà bạn sẽ trở thành điểm đến lý tưởng.</p>', '/posts/20230729125921.jpg', 21, 5, '2023-08-09 12:05:03', '2023-08-09 05:05:03'),
(3, 'Cà phê hạt pha máy - Cách lựa chọn cà phê nguyên chất ngon', 'ca-phe-hat-pha-may-cach-lua-chon-ca-phe-nguyen-chat-ngon', '<p>Việc vào quán cà phê vào buổi sáng hay hẹn hò ki phố đã lên đèn là một lựa chọn được đông đảo người dân Việt ưa thích. Hiện nay, thưởng thức cà phê hạt pha máy hay còn được gọi là Espresso đang trở nên phổ biến hơn vì những ưu điểm vượt trội mà sản phẩm này mang lại. Cách lựa chọn cà phê hạt ngon, nguyên chất như thế nào? Hãy cùng Classic tìm hiểu trong bài viết này nhé!</p> <p>Ưu điểm của cà phê hạt pha máy<br /> Cà phê hạt pha máy đang là cách chế biến, thưởng thức mang tính hiện đại. Đây được xem là xu hướng và là sự lựa chọn thông minh trong lĩnh vực cà phê nói riêng và F&amp;B nói chung. Bạn có thể dễ dàng bắt gặp một cửa hàng cà phê sử dụng cách pha chế này. Với cà phê hạt pha máy, nhu cầu pha chế, thưởng thức nhanh được đáp ứng hoàn hảo, đặc biệt thích hợp với những quán lớn, quy mô rộng. Công suất của cà phê pha máy có thể lên đến 300 ly mỗi giờ.</p> <p>Công thức pha chế được lập trình sẵn, giúp người pha tiết kiệm thời gian và công sức. Hơn nữa, cà phê hạt pha máy điều chỉnh nước, áp suất cực chính xác, điều này mang lại cho ta một ly cà phê chuẩn chất lượng.</p> <p>Hơn nữa, cà phê hạt pha máy có xu hướng đậm hơn cà phê pha phin vì cách pha này mang khả năng chiết xuất tối đa những gì tinh tế nhất của cà phê. Cũng chính vì lý do đó, hương vị của cà phê pha máy chuẩn hơn, quyến rũ hơn. Điều này thực sự phù hợp với những tín đồ cà phê có công việc bận rộn, ít thời gian.</p> <p>Cà phê hạt pha máy - Cách lựa chọn cà phê nguyên chất ngon&nbsp;</p> <p>Mách bạn cách chọn cà phê ngon đúng điệu<br /> Một tách cà phê ngon không chỉ phụ thuộc vào cách pha chế, điều quan trọng hơn đó chính là nguyên liệu. Nguyên liệu tốt chính là cách dễ nhất để bạn có cho mình một hương vị đúng điệu. Tuy nhiên, không phải ai cũng biết cách chọn cà phê ngon cho bản thân, gia đình, cơ sở kinh doanh. Sau đây, Classic Coffee xin đưa ra một số lời khuyên dành cho bạn.</p> <p>Cách chọn cà phê ngon bằng hương vị vốn có</p> <p>Với mỗi loại cà phê, hương vị của chúng cũng khác nhau. Tìm đúng loại phù hợp chính là cách để bạn tự thưởng cho mình mỗi ngày. Tại Việt Nam, cà phê thực sự đa dạng, có thể kể đến như Robusta, Arabica, Culi, Moka,… Trong đó, Robusta và Arbica được dùng và yêu thích nhiều hơn.</p> <p>Robusta có vị đậm, đắng, đồng thời lượng caffeine cao hơn. Nếu bạn yêu mến sự mạnh mẽ trong hương vị thì đây là lựa chọn phù hợp. Arabica có vị chua nhẹ, đắng thanh, đây là dòng cà phê cao cấp, để lại hậu vị êm ái, dễ chịu.</p> <p>Cà phê hạt pha máy - Cách lựa chọn cà phê nguyên chất ngon&nbsp;</p> <p>Cách chọn cà phê ngon dựa vào hương vị</p> <p>Hương vị cà phê không chỉ được quyết định bằng loại hạt mà còn bị ảnh hưởng bởi độ rang. Rang cà phê được xem là quá trình quan trọng để phát triển hương vị sẵn có. Vì vậy, sau khi chọn hạt thì việc chọn mức độ rang cà phê cũng hết sức quan trọng.</p> <p>Nếu loại hạt bạn chọn là Arabica, mức độ rang thích hợp là rang nhạt. Cách này làm nổi bật vị chua cũng như hương thơm của cà phê. Với Robusta, rang nhạt thường không được sử dụng bởi cách này không phù hợp với khẩu vị người Việt.</p> <p>Thay vào đó, Robusta chất lượng cao phù hợp hơn với mức độ rang vừa. Ở mức này, hương vị cà phê trở nên cân bằng hơn, hậu vị cũng được gia tăng đáng kể. Hơn nữa, với cách rang này, cà phê giữ được bản chất nguyên thủy, không bị ảnh hưởng nhiều từ quy trình rang.</p> <p>Khẩu vị người Việt có xu hướng thích sự đậm dặc, đắng, mạnh mẽ. Vì vậy, mức độ rang đậm thường được sử dụng. Tuy nhiên, đây là cách rang làm ảnh hưởng đến mùi vị, đặc biệt là đối với Arabica.</p> <p>Cà phê hạt pha máy - Cách lựa chọn cà phê nguyên chất ngon&nbsp;</p> <p>Cà phê ngon phụ thuộc vào thời điểm rang</p> <p>Theo nhiều nghiêm cứu thì cà phê uống ngon nhất khi được rang mới từ 4 đến 21 ngày. Sau đó, hương vị của cà phê giảm dần vì bị ảnh hưởng bởi nhiệt độ, môi trường,… Vì vậy, cách chọn cà phê ngon là bạn cần xem kỹ ngày sản xuất trên bao bì, càng gần càng tốt.</p> <p>Loại bao bì cũng ảnh hưởng đến chất lượng cà phê. Bạn nên chọn cà phê được bảo quản trong túi ziplock hoặc van 1 chiều, khi đó hương vị cà phê được duy trì tốt, lâu hơn.</p> <p>Cách chọn cà phê ngon là đến với thương hiệu uy tín</p> <p>Thật sự mà nói, cách chọn cà phê ngon nhất, chính xác nhất là đến với một địa chỉ cung cấp uy tín như Classic. Tại những nơi này, hàm lượng chất bảo quản được đảm bảo ở mức thấp nhất, không gây hại cho sức khỏe. Đặc biệt, hạt cà phê được cung cấp mang lại hương vị chuẩn nhất và không có bất kì sai sót nào trong quy trình chế biến.</p> <p>Không nhất thiết bạn phải tìm một đơn vị quá nổi tiếng. Chỉ cần nơi đó cung cấp đủ thông tin về xuất xứ, tem nhãn, thông tin một cách tỉ mỉ và đặc biệt là hương vị cà phê phù hợp với bạn.</p> <p>Hơn nữa, tại Classic chúng tôi, bảng giá được niêm yết minh bạch, đảm bảo phù hợp cho mọi đối tượng khách hàng. Tuy nhiên, cà phê của chúng tôi đa số là cà phê thượng hạng, chất lượng cao, vì vậy giá cũng cao hơn so với nhiều loại cà phê trôi nổi trên thị trường. “Tiền nào của đó”, chúng tôi không bán giá cao mà chỉ bán giá hợp lý, đảm bảo sự yên tâm của mọi khách hàng khi sử dụng.</p> <p>Một điều được đông đảo khách hàng yêu thích tại Classic là dịch vụ hỗ trợ, tư vấn cách chọn cà phê ngon chuyên nghiệp. Khẩu vị mỗi người mỗi khác, vì thế chúng tôi tập trung hướng dẫn khách hàng đâu là loại cà phê phù hợp nhất với gu thưởng thức của bản thân.</p>', '/posts/20230729125941.jpg', 29, 5, '2023-08-02 05:20:42', '2023-08-01 22:20:42'),
(4, 'Phân biệt mùi vị cà phê nguyên chất thật dễ dàng', 'phan-biet-mui-vi-ca-phe-nguyen-chat-that-de-dang', '<p>Mỗi sớm bạn có uống cà phê trước khi đi làm? Bạn có thường tụ tập bạn bè ở quán cà phê và lắng nghe từng giọt rơi tí tách? Nếu là một tín đồ của loại thức uống này, bạn có biết cà phê nguyên chất có vị gì không? Có thể nói, cảm nhận được chất đắng, chất ngọt đi kèm với hương thơm nồng nàn của cà phê là cả một nghệ thuật. Trong bài viết hôm nay, Classic sẽ chia sẻ cho bạn những yếu tố hương vị chỉ cà phê nguyên chất mới có.</p> <p>Cà phê nguyên chất có vị gì?<br /> Vị ngọt tự nhiên<br /> Nếu nghĩ cà phê chỉ toàn vị đắng thì có lẽ bạn đã nhầm. Cà phê nguyên chất có chứa 6 – 9% lượng đường. Vì vậy, khi uống cà phê không cho đường hoặc sữa, nếu cảm nhận kỹ bạn sẽ thấy vị ngọt ngọt thanh thanh nơi đầu lưỡi. Tuy nhiên, vị ngọt tự nhiên ấy chỉ có thể giữ lại nếu công đoạn sản xuất, chế biến đúng kỹ thuật.</p> <p>Phân biệt mùi vị cà phê nguyên chất thật dễ dàng</p> <p>Vị đắng từ đại ngàn<br /> Khi hỏi đến cà phê nguyên chất có vị gì thì chắc chắn câu trả lời sẽ là vị đắng. Nếu loại thức uống này không có vị đắng thì cõ lẽ nó không được gọi là cà phê nữa. Classic gọi cà phê là “giọt đắng đại ngàn” đơn giản vì đây là vị mạnh nhất, dễ cảm nhận nhất. &nbsp;Vị đắng của cà phê nguyên chất được kết tinh từ lượng caffeine có trong hạt.</p> <p>Vị chua thanh đạm<br /> Với người chỉ xem cà phê là một loại đồ uống bình thường thì khó có thể đánh giá đúng vị chua của chúng. Mỗi loại cà phê có cho mình vị chua khác nhau, đôi khi là thanh đạm dễ cảm nhận, đôi khi bị lấn át bởi những vị khác. Với cà phê nguyên chất Arabica, vị chua được thể hiện một cách mạnh mẽ. Robusta có vị chua khó cảm nhận hơn nhưng đâu đó vẫn thấp thoáng. Tuy nhiên, với một người sành về loại thức uống này, vị chua chính là chìa khóa để đánh giá chất lượng, quy trình chế biến cà phê.</p> <p>Sự đậm đà<br /> Đậm đà ở đây không đơn giản là đặc hay loãng. Đôi khi, cà phê pha loãng nhưng vẫn giữ được hương vị, màu sắc, hơn nữa lại dễ thưởng thức, đó mới là thành công. Điều này cũng tùy thuộc vào khẩu vị của người dùng và được quyết định bởi công thức, tay nghề của người pha chế.</p> <p>Hương thơm tinh tế<br /> Khi đã biết được cà phê nguyên chất có vị gì, điều bạn cần quan tâm tiếp theo đó là hương thơm. Một ly cà phê hoàn hảo không thể thiếu đi cái mùi hương nhẹ nhàng, quyến rũ ấy. Hiện nay, có hơn 800 mùi khác nhau của cà phê, chúng cho thấy hương thơm này rất đa dạng. Tuy nhiên, bạn chỉ cần cảm nhận được 3 giai đoạn là xem như đã thành công để chinh phục loại đồ uống này. Đó là mùi thơm khi rang xay, mùi thơm khi vừa pha chế và hương thơm của dư vị sau khi thưởng thức.</p> <p>Phân biệt mùi vị cà phê nguyên chất thật dễ dàng</p> <p>Một số hương vị cà phê nguyên chất được yêu thích<br /> Robusta: Vị đắng mạnh, vị chua bị lấn át, hương thơm dịu nhẹ, lượng caffeine khá cao. Đây là loại cà phê hợp với khẩu vị người Việt.</p> <p>Arabica: Vị đắng dịu hơn, hương thơm tinh tế. Đặc biệt Arabica được xem là đẳng cấp với vị chua thanh thoát, hậu ngọt hấp dẫn.</p> <p>Culi: Nếu bạn muốn cà phê nguyên chất có độ mạnh mẽ cao thì đây là lựa chọn thích hợp. Culi có độ đắng gắt nhưng hương thơm vô cùng đẳng cấp, lượng caffeine cũng cao hơn cà phê thông thường.</p> <p>Moka: Đắng dịu, mùi thơm nồng nàn. Moka có hương vị khá giống Arabica những thơm hơn, có vị chua nhẹ nhàng.</p> <p>Cà phê nguyên chất có vị gì phụ thuộc vào cách chọn của bạn<br /> - &nbsp; Chọn vị đắng bằng cách tham khảo mức độ rang. Cà phê nguyên chất rang đậm có xu hướng đắng hơn bình thường.</p> <p>- &nbsp; Chọn cách phối trộn phù hợp với khẩu vị.</p> <p>- &nbsp; Chọn cà phê nguyên chất tại các thương hiệu uy tín. Nói không với cà phê trôi nổi, không rõ xuất xứ.</p> <p>- &nbsp; Chọn lựa cách pha chế phù hợp để mang lại hương vị mong muốn.</p>', '/posts/20230729115507.jpg', 0, 4, '2023-08-01 09:59:27', '2023-08-01 02:59:27'),
(5, 'Báo giá máy pha cà phê rang xay mới nhất, hiện đại, tiết kiệm', 'bao-gia-may-pha-ca-phe-rang-xay-moi-nhat-hien-dai-tiet-kiem', '<p>Máy pha cà phê hiện nay là một sản phẩm khá phổ biến tại công ty, gia đình, đặc biệt là các cửa hàng kinh doanh. Khi đem so sánh với cách pha chế truyền thống, cà phê pha máy tiết kiệm khá nhiều thời gian cũng như công sức để tạo ra một tách cà phê hoàn hảo. Vậy giá máy pha cà phê rang xay hiện nay có đắt không? Đây cũng là câu hỏi mà nhiều cá nhân, nhà đầu tư quan tâm.</p> <p>Phân loại máy pha cà phê rang xay<br /> Máy pha cà phê rang xay còn được gọi là máy pha cà phê tự động được tích hợp nhiều tính năng từ xay đến nén và pha chế cà phê theo công thức được lập trình. Đây là sản phẩm cho phép người dùng có thể tự tay làm ra một tách cà phê ngon đúng điệu từ nguyên liệu thô. Bạn chỉ cần bỏ hạt cà phê vào máy, nhấn nút là xong. Các loại máy pha cà phê rang xay có thể điều chỉnh lượng nước, nhiệt độ một cách phù hợp với khẩu vị.</p> <p>Chất lượng cà phê được pha chế bằng máy pha tự động khá đồng đều. Hiện tại, có thể phân loại sản phẩm này thành 2 dòng chính là:</p> <p>- &nbsp; Máy pha cà phê rang xay cho gia đình, văn phòng: Đây là loại máy nhỏ gọn, công suất pha khoảng 3 – 4 ly/lần.</p> <p>- &nbsp; Máy pha cà phê rang xay công nghiệp: Thường được dùng tại những quán cà phê có lượng khách lớn. Thể tích máy lên đến 5 lít, cho công suất cao và có thể pha chế liên tục không cần ngừng nghỉ.</p> <p>Báo giá máy pha cà phê rang xay mới nhất, hiện đại, tiết kiệm</p> <p>Ưu điểm của máy pha cà phê rang xay<br /> - &nbsp; Tiết kiệm thời gian hiệu quả, cho ra đời ly cà phê nhanh chóng nhưng vẫn đảm bảo hương vị.</p> <p>- &nbsp; Tiết kiệm nguyên liệu hợp lý.</p> <p>- &nbsp; Cài đặt thông số cố định theo công thức mà không cần đong đếm, từ đó cho ra chất lượng đồng đều mỗi ly cà phê.</p> <p>Báo giá máy pha cà phê rang xay thông dụng<br /> Nếu bạn đang có nhu cầu kinh doanh quán cà phê, sở hữu cho mình một máy pha cà phê rang xay là điều cần thiết. Classic là đơn vị bán máy pha cà phê uy tín tại Gia Lai, một số sản phẩm được tin dùng của chúng tôi có thể kể đến như:</p> <p>&nbsp; &nbsp; &nbsp; &nbsp; 1. Máy pha cà phê Faema E98 RE AUTO 2 group</p> <p>Đây là dòng máy pha cà phê rang xay tự động với hệ thống lập trình điện tử, dễ dàng sử dụng. Loại máy này có công suất hơn 200 ly cà phê mỗi giờ, chất lượng cực kỳ đồng đều, phù hợp với những quán cà phê có lượng khách lớn, ổn định. Giá bán của máy pha cà phê Faema E98 RE AUTO 2 group vào tầm 84 triệu VNĐ.</p> <p>Báo giá máy pha cà phê rang xay mới nhất, hiện đại, tiết kiệm</p> <p>&nbsp; &nbsp; &nbsp; &nbsp;2. Máy pha cà phê Breville 870</p> <p>Một trong những loại máy pha cà phê tự động chất lượng, giá tốt nhất của Classic đó là Breville 870. Giá máy pha cà phê rang xay này chỉ 19,900,000 VNĐ. Breville 870 được thiết kế với nhiều tùy biến, quá trình xay linh động, có thể điều chỉnh kích cỡ và lượng nguyên liệu cần thiết. Hơn nữa, cấu tạo của dòng máy pha này cực hiện đại, bắt mắt.</p> <p>&nbsp; &nbsp; &nbsp; 3. Máy pha cà phê Casadio Dieci A1</p> <p>Một dòng sản phẩm tự động chuyên nghiệp khác đang được phân phối bởi Classic đó là Casadio Dieci A1. Sản phẩm này dường như đáp ứng mọi nhu cầu của nhà đầu tư với dung tích 5 lít, khả năng hư hỏng được hạn chế thấp nhất, công suất pha chế mạnh mẽ. Giá máy pha cà phê rang xay Casadio Dieci A1 khoảng 59 triệu, phù hợp với những quán cà phê có lưu lượng khách ổn định.</p> <p>Báo giá máy pha cà phê rang xay mới nhất, hiện đại, tiết kiệm</p> <p>&nbsp; &nbsp; &nbsp; &nbsp;4. Máy pha cà phê Casadio Dieci A2</p> <p>Cùng xuất xứ với Casadio Dieci A1, Casadio Dieci A2 có công suất lớn hơn, phù hợp hơn với quán có lượng khách lớn. Giá bán của sản phẩm này khoảng 98 triệu VNĐ.</p> <p>&nbsp; &nbsp; &nbsp; 5. Máy pha cà phê Casadio Undici A1</p> <p>Casadio Undici A1 có dáng nhỏ gọn, thanh lịch nhưng công suất ổn định và phù hợp với những địa điểm có lượng khách trung bình, phục vụ tốt vào giờ cao điểm. Đây là dòng sản phẩm được ưa chuộng tại Classic với nhiều tính năng tích hợp. Casadio Undici A1 có thể cài đặt đồng thời 2 công thức khác nhau, giá bán của sản phẩm này rơi vào khoảng 49 triệu VNĐ.</p> <p>&nbsp; &nbsp; &nbsp; 6. Máy pha cà phê Casadio Undici A2</p> <p>Casadio Undici A2 là loại máy pha cà phê rang xay chuyên dụng 2 group với công suất lên đến hơn 200 ly/giờ. Dòng sản phẩm cao cấp này phù hợp hơn với những quán lớn, khách đông, yêu cầu cao. Tuy nhiên, giá của Casadio Undici A2 khá cao, khoảng 89 triệu VNĐ.</p> <p>&nbsp; &nbsp; &nbsp;7. Máy pha cà phê dùng cho gia đình Gene Cafe</p> <p>Máy rang cà phê Hàn Quốc Gene 101 là một trong những mẫu máy rang mini hiện đại nhất thường sử dụng trong gia đình. Máy có chế độ rang hoàn toàn tự động với nhiều tùy chỉnh đa dạng, cho phép người rang cà phê có thể cài đặt các chế độ rang cho từng loại cà phê khác nhau. Máy pha cà phê mini Gene 101 trở thành một chiếc máy rang tuyệt vời cho những người yêu thích cà phê nhưng không có quá nhiều thời gian nghiên cứu và giúp bất kỳ ai cũng có thể tự rang cho mình được những mẻ cà phê ngon ngay tại nhà.</p>', '/posts/20230729130928.jpg', 0, 6, '2023-08-01 10:00:06', '2023-08-01 03:00:06'),
(6, 'CÀ PHÊ PHA PHIN CHẤT LƯỢNG CAO - GIÁ TRỊ CỦA GIÂY PHÚT ĐỢI CHỜ', 'ca-phe-pha-phin-chat-luong-cao-gia-tri-cua-giay-phut-doi-cho', '<p>Hiện nay, có nhiều công thức, cách phá chế khác nhau để tạo nên một ly cà phê ngon. Với sự du nhập của sự hiện đại cùng nguyên liệu ngày một đa dạng, cà phê đang dần thay đổi về cả cách làm cũng như cách thưởng thức. Tuy nhiên, với một số tín đồ của loại thức uống này, cà phê pha phin giữ lại những phần ký ức, giữ lại nét truyền thống và hương vị cũng không thua kém gì những ly cà phê được pha chế theo cách hiện đại.</p> <p>Những yếu tố giúp cà phê pha phin đạt chất lượng</p> <p>Chất lượng nước và tỉ lệ</p> <p>Thành phần cơ bản của một tách cà phê pha phin hay pha máy đều là nước. Chất lượng nước pha cà phê được các nhà khoa học khuyên dùng là nước không mùi, không vị, không tạp chất, có độ pH khoảng 7. Nước lọc và nước suối bình thường có thể đáp ứng yêu cầu này.</p> <p>Tỉ lệ giữ cà phê với nước thông thường là 1:4 hoặc 1:5 tùy khẩu vị người dùng.</p> <p>Cà phê pha phin chất lượng cao - Giá trị của giây phút đợi chờ</p> <p>Nguyên liệu cà phê</p> <p>Cà phê tại thị trường Việt Nam cực kỳ đa dạng và không khó để bạn chọn được nguyên liệu cà phê pha phin chất lượng. Khẩu vị của người Việt phù hợp nhất với cà phê Robusta, tuy nhiên bạn có thể pha trộn giữa Robusta và Arabica để giảm lượng caffeine. Hơn thế nữa, với cà phê pha phin, bạn nên thường xuyên thay đổi nguyên liệu để chọn ra đâu là sản phẩm hợp gu nhất.</p> <p>Bạn nên chọn mua cà phê sạch, cà phê nguyên chất tại những thương hiệu uy tín trên thị trường. Với cá nhân, đây là cách để bạn thưởng thức sự hoàn hảo cũng như bảo vệ sức khỏe. Đối với cơ sở kinh doanh, chất lượng cà phê càng quan trọng bởi nó ảnh hưởng đến uy tín, thương hiệu của quán.</p> <p>Cà phê pha phin chất lượng cao - Giá trị của giây phút đợi chờ</p> <p>Độ mịn của cà phê</p> <p>Đây là điều quan trọng quyết định chất lượng của cà phê pha phin. Độ mịn ảnh hưởng trực tiếp đến thời gian pha chế cũng như độ chiết xuất của cà phê. Tách cà phê có hoàn hảo hay không phụ thuộc vào độ mịn, nhiệt độ nước và thời gian tiếp xúc giữa nước với cà phê bột. Cà phê có độ mịn cao thường chảy rất chậm, thành phẩm có vị đắng hơn. Nhưng nếu bột còn quá thô, khả năng chiết xuất thấp dẫn đến cà phê nhạt hơn bình thường.</p> <p>Chất liệu phin</p> <p>Nguyên liệu, tỉ lệ rất quan trọng, tuy nhiên bạn cũng cần sở hữu bộ dụng cụ pha chế chất lượng. Phin cà phê thường được dùng là phin nhôm với ưu điểm hấp thụ nhiệt tốt. Bạn nên chọn dòng sản phẩm nhôm cao cấp với các lỗ bên dưới đồng đều nhằm mang lại chất lượng cà phê tốt nhất.</p> <p>Để mang đến sự đổi mới cũng như giá trị thẩm mỹ, bạn cũng có thể chọn phin inox, phin gốm sứ hay phin nhôm mạ màu.</p> <p>Cẩn thận trong quy trình pha chế</p> <p>Bạn cần tráng phin, cốc bằng nước nóng trước khi pha chế để đảm bảo không có sự chênh lệch lớn giữa nhiệt độ bên ngoài và bên trong.</p> <p>Lực ép cà phê cần vừa phải, điều này ảnh hưởng đến độ đậm nhạt của cà phê pha phin. Hơn nữa, cần đảm bảo nước được thấm đều nguyên liệu.</p> <p>Cà phê pha phin chất lượng cao - Giá trị của giây phút đợi chờ</p> <p>Ưu điểm của cà phê pha phin</p> <p>Tuy không hiện đại bằng cách pha máy nhưng cà phê pha phin vẫn giữ được những ưu điểm khiến bao người yêu thích.</p> <p>- &nbsp; Cách pha chế đơn giản, dễ hiểu, dễ thực hiện.</p> <p>- &nbsp; Có thể điều chỉnh lượng nước, lượng cà phê tùy theo khẩu vị.</p> <p>- &nbsp; Dễ dàng vệ sinh, lau chùi dụng cụ pha chế.</p> <p>- &nbsp; Có thêm thời gian thư giãn trong quá trình chờ đợi.</p> <p>Tuy nhiên, ngoài những ưu điểm kể trên, bạn cần lưu ý một số nguyên tắc để có được ly cà phê pha phin chất lượng, đó là:</p> <p>- &nbsp; Chọn cà phê nguyên chất, không lẫn tạp. Tốt nhất nên mua cà phê hạt, sau đó xay lấy bột.</p> <p>- &nbsp; Kiểm soát tốt nhiệt độ nước, nhiệt độ phin cũng như tỉ lệ pha chế để có được chất lượng đồng nhất.</p> <p>- &nbsp; Hạn chế làm rơi nguyên liệu để giữ vệ sinh, thẩm mỹ đồng thời đảm bảo chất lượng của cà phê.</p>', '/posts/20230729130938.jpg', 1, 6, '2023-08-01 10:00:45', '2023-08-01 03:00:45');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `productapi`
--

CREATE TABLE `productapi` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `productapi`
--

INSERT INTO `productapi` (`id`, `name`, `price`, `created_at`, `updated_at`) VALUES
(2, 'san pham sua', 2000, '2023-08-08 01:54:15', '2023-08-09 05:29:50');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_content` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `thumbnail` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `view` int NOT NULL DEFAULT '0',
  `id_categories` int NOT NULL,
  `price` int NOT NULL,
  `sale_price` int NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id`, `name`, `slug`, `product_content`, `thumbnail`, `view`, `id_categories`, `price`, `sale_price`, `created_at`, `updated_at`) VALUES
(8, 'Bò nướng', 'bo-nuong', 'Các món ăn ngon hảo hạng', '/products/20230727234229.jpg', 11, 1, 301000, 10, '2023-07-25 15:44:57', '2023-08-08 09:00:03'),
(9, 'Sườn nướng', 'suon-nuong', 'Các món ăn ngon hảo hạng', '/products/20230727234831.jpg', 7, 1, 130000, 20, '2023-07-25 15:47:35', '2023-08-05 01:53:46'),
(10, 'Cari Gà', 'cari-ga', 'Các món ăn ngon hảo hạng', '/products/20230727234918.jpg', 1, 1, 80000, 10, '2023-07-26 06:00:11', '2023-08-06 21:28:19'),
(12, 'Soup theo mùa', 'soup-theo-mua', 'Các món ăn ngon hảo hạng', '/products/20230728004636.jpg', 0, 1, 50000, 10, '2023-07-28 00:46:36', '2023-08-06 21:28:40'),
(13, 'Hải sản', 'hai-san', 'Các món ăn ngon hảo hạng', '/products/20230728004736.jpg', 0, 1, 80000, 10, '2023-07-28 00:47:36', '2023-08-06 21:28:49'),
(14, 'Gà chiên bơ', 'ga-chien-bo', 'Các món ăn ngon hảo hạng', '/products/20230728004816.jpg', 0, 1, 90000, 10, '2023-07-28 00:48:16', '2023-08-06 21:28:57'),
(15, 'Nước cam', 'nuoc-cam', 'Các đồ uống ngon hảo hạng', '/products/20230728004956.jpg', 1, 2, 20000, 5, '2023-07-28 00:49:57', '2023-08-06 21:28:31'),
(16, 'Nước ép táo', 'nuoc-ep-tao', 'Các đồ uống ngon hảo hạng', '/products/20230728005111.jpg', 0, 2, 15000, 10, '2023-07-28 00:51:11', '2023-08-06 21:29:05'),
(17, 'SODA', 'soda', 'Các đồ uống ngon hảo hạng', '/products/20230728005137.jpg', 0, 2, 20000, 5, '2023-07-28 00:51:37', '2023-08-06 21:30:17'),
(18, 'Cocktail', 'cocktail', 'Các đồ uống ngon hảo hạng', '/products/20230728005332.jpg', 0, 2, 15000, 5, '2023-07-28 00:53:32', '2023-08-06 21:30:27'),
(19, 'Bạc xĩu', 'bac-xiu', 'Các đồ uống ngon hảo hạng', '/products/20230728005350.jpg', 0, 2, 30000, 15, '2023-07-28 00:53:50', '2023-08-06 21:30:36'),
(20, 'Trà dâu', 'tra-dau', 'Các đồ uống ngon hảo hạng', '/products/20230728005413.jpg', 0, 2, 12000, 10, '2023-07-28 00:54:13', '2023-08-06 21:31:03'),
(21, 'Bánh bông lan', 'banh-bong-lan', 'Các loại bánh ngon hảo hạng', '/products/20230728010417.jpg', 0, 3, 50000, 5, '2023-07-28 01:04:17', '2023-08-06 21:31:15'),
(22, 'Bánh donut kem trứng', 'banh-donut-kem-trung', 'Các loại bánh ngon hảo hạng', '/products/20230728010544.jpg', 0, 3, 30000, 10, '2023-07-28 01:05:44', '2023-08-06 21:31:21'),
(23, 'Bánh cupcake', 'banh-cupcake', 'Các loại bánh ngon hảo hạng', '/products/20230728010633.jpg', 0, 3, 20000, 10, '2023-07-28 01:06:33', '2023-08-06 21:31:28'),
(24, 'Bánh táo', 'banh-tao', 'Các loại bánh ngon hảo hạng', '/products/20230728010814.jpg', 0, 3, 15000, 5, '2023-07-28 01:08:14', '2023-08-06 21:31:35'),
(25, 'Bánh sữa chua', 'banh-sua-chua', 'Các loại bánh ngon hảo hạng', '/products/20230728010844.jpg', 0, 3, 12000, 20, '2023-07-28 01:08:44', '2023-08-06 21:30:48'),
(26, 'Bánh mousse xoài', 'banh-mousse-xoai', 'Các loại bánh ngon hảo hạng', '/products/20230728010949.jpg', 0, 3, 30000, 10, '2023-07-28 01:09:49', '2023-08-06 21:29:55'),
(30, 'CAPUCCINO', 'capuccino', 'Các loại cà phê ngon hảo hạng', '/products/20230801092501.jpg', 3, 6, 50000, 10, '2023-08-01 09:25:02', '2023-08-06 21:28:10'),
(31, 'ICED ESPRESSO', 'iced-espresso', 'Các loại cà phê ngon hảo hạng', '/products/20230801092748.jpg', 0, 6, 30000, 15, '2023-08-01 09:27:48', '2023-08-06 21:31:47'),
(32, 'AMERICANO', 'americano', 'Các loại cà phê ngon hảo hạng', '/products/20230801092839.jpg', 0, 6, 20000, 5, '2023-08-01 09:28:39', '2023-08-06 21:31:56'),
(33, 'MOCHA RECIPE', 'mocha-recipe', 'Các loại cà phê ngon hảo hạng', '/products/20230801092935.jpg', 0, 6, 20000, 20, '2023-08-01 09:29:35', '2023-08-06 21:29:31'),
(34, 'ESPRESSO', 'espresso', 'Các loại cà phê ngon hảo hạng', '/products/20230801094401.jpg', 0, 6, 20000, 5, '2023-08-01 09:44:01', '2023-08-06 21:29:38'),
(35, 'CARAMEL LATTE', 'caramel-latte', 'Các loại cà phê ngon hảo hạng', '/products/20230801094438.jpg', 0, 6, 25000, 10, '2023-08-01 09:44:38', '2023-08-06 21:29:47');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product_categories`
--

CREATE TABLE `product_categories` (
  `id` bigint UNSIGNED NOT NULL,
  `category_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_content` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `product_categories`
--

INSERT INTO `product_categories` (`id`, `category_name`, `category_content`, `created_at`, `updated_at`) VALUES
(1, 'Món ăn', 'Các món ăn hảo hạng của nhà hàng như bò, gà,...', '2023-08-01 09:20:23', '2023-08-01 09:20:23'),
(2, 'Đồ uống', 'Các loại đồ uống cao cấp của nhà hàng như soda, nước trái cây,...', '2023-08-01 09:20:59', '2023-08-01 09:20:59'),
(3, 'Bánh kem', 'Các loại bánh với mẫu mã khác nhau...', '2023-08-01 09:21:38', '2023-08-01 09:21:38'),
(6, 'Coffee', 'Các loại cafe hảo hạng như capuchino, latte,...', '2023-08-01 09:22:41', '2023-08-01 09:22:41');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('TCHV8McraEdgUTHsxfaEGyWm2wBo0299WeMc66jy', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiUkJJWjl0eG1QamdTdE9Vd0RzdUVFakFUV2tuWFJJaHFmQUpUVkdtTSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJuZXciO2E6MDp7fXM6Mzoib2xkIjthOjA6e319czo1OiJhbGVydCI7YTowOnt9czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fX0=', 1691596475);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'USER',
  `google_id` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `user_type`, `google_id`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(4, 'Vo Hoang Thuan (FPL CT)', 'USER', '107986867620049905153', 'thuanvhpc02894@fpt.edu.vn', NULL, NULL, NULL, '2023-07-29 14:21:46', '2023-07-29 14:21:46'),
(5, 'Võ Hoàng Thuận', 'ADM', NULL, 'hoangthuan02022000@gmail.com', '2023-08-09 02:09:24', '$2y$10$khiXb/gPf2pvtC3DyL.GEeXrMt90FlhowfnbJ1e7rL1A5Hbd4yIKK', 'cjkaJrXHUcPw2Eb4OnLxIEq9hqm5vrFnW9uP7X4Vh7bQRwaKjeQ30OJyEEa4', '2023-07-29 23:37:41', '2023-08-09 02:09:24'),
(6, 'Nguyen Thuy Quyen', 'USER', NULL, 'thuyquyen0202@gmail.com', NULL, '$2y$10$U9JOvlfmLOe4mj9tvVwexeQh5y.MMloB.s8opv7v3Dx36NwvVhQri', NULL, '2023-08-02 05:52:59', '2023-08-09 02:15:50');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comments_user_id_foreign` (`user_id`),
  ADD KEY `comments_post_id_foreign` (`post_id`);

--
-- Chỉ mục cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `order_detail`
--
ALTER TABLE `order_detail`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Chỉ mục cho bảng `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Chỉ mục cho bảng `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `productapi`
--
ALTER TABLE `productapi`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `product_categories`
--
ALTER TABLE `product_categories`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT cho bảng `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT cho bảng `order_detail`
--
ALTER TABLE `order_detail`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT cho bảng `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `productapi`
--
ALTER TABLE `productapi`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT cho bảng `product_categories`
--
ALTER TABLE `product_categories`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `comments_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
