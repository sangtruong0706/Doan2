-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th4 04, 2023 lúc 02:48 PM
-- Phiên bản máy phục vụ: 10.4.27-MariaDB
-- Phiên bản PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `test_mvc`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_admin`
--

INSERT INTO `tbl_admin` (`id_admin`, `username`, `password`) VALUES
(1, 'sangadmin', '123456'),
(2, 'sanguser', '123456');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_category`
--

CREATE TABLE `tbl_category` (
  `id_category` int(11) UNSIGNED NOT NULL,
  `title_category` varchar(255) NOT NULL,
  `desc_category` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_category`
--

INSERT INTO `tbl_category` (`id_category`, `title_category`, `desc_category`) VALUES
(1, 'Laptop', 'giá rẻ'),
(2, 'Tivi giá rẻ', 'tivi giá rẻ'),
(3, 'Điện thoại thông minh', 'siêu cấp vip pro'),
(10, 'Game', 'lmht'),
(11, 'Anime', 'phim');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_category_post`
--

CREATE TABLE `tbl_category_post` (
  `id_category_post` int(11) UNSIGNED NOT NULL,
  `title_category_post` varchar(255) NOT NULL,
  `desc_category_post` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_category_post`
--

INSERT INTO `tbl_category_post` (`id_category_post`, `title_category_post`, `desc_category_post`) VALUES
(1, 'Kinh tế', 'trong nước'),
(2, 'Dự báo thời tiết', 'trong ngày'),
(4, 'Thể Thao', 'bóng đá, bóng chuyền..'),
(5, 'Pháp luật', 'toàn dân');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_customer`
--

CREATE TABLE `tbl_customer` (
  `id_customer` int(10) UNSIGNED NOT NULL,
  `customer_name` varchar(255) NOT NULL,
  `customer_phone` varchar(32) NOT NULL,
  `customer_email` varchar(100) NOT NULL,
  `customer_password` varchar(100) NOT NULL,
  `customer_address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_customer`
--

INSERT INTO `tbl_customer` (`id_customer`, `customer_name`, `customer_phone`, `customer_email`, `customer_password`, `customer_address`) VALUES
(1, 'truong van sang em', '0396456122', 'truongvansangem0706@gmail.com', '123456', 'an giang'),
(2, 'Doãn Chí Bình', '0396456122', 'binh@gmail.com', '123456', 'Châu Đốc An Giang'),
(3, 'abc', '123654785', 'sangtruong@gmail.com', '123456', 'Châu Đốc An Giang'),
(4, 'bình khùng', '01249877', 'binhkhung@gmail.com', '123456', 'an giang'),
(5, 'test 1', '123456987', 'test1@gmail.com', '123456', 'Châu Đốc An Giang'),
(6, 'test2', '0396445001', 'test2@gmail.com', '123456', 'Bình thành thoại sơn an giang'),
(7, 'test6', '0396445001', 'test6@gmail.com', '123456', 'Châu Đốc An Giang');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_order`
--

CREATE TABLE `tbl_order` (
  `order_id` int(11) NOT NULL,
  `order_code` varchar(100) NOT NULL,
  `order_date` varchar(100) NOT NULL,
  `order_status` int(11) NOT NULL,
  `order_payment` varchar(255) NOT NULL,
  `order_shipping` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_order`
--

INSERT INTO `tbl_order` (`order_id`, `order_code`, `order_date`, `order_status`, `order_payment`, `order_shipping`) VALUES
(1, '7713', '01/04/2023 07:36:44pm', 0, 'vnpay', 1),
(2, '2970', '04/04/2023 01:45:32pm', 1, 'vnpay', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_order_detail`
--

CREATE TABLE `tbl_order_detail` (
  `order_detail_id` int(11) NOT NULL,
  `order_code` varchar(100) NOT NULL,
  `product_id` int(11) UNSIGNED NOT NULL,
  `product_quantity` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone_number` varchar(50) NOT NULL,
  `address` varchar(500) NOT NULL,
  `email` varchar(50) NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_order_detail`
--

INSERT INTO `tbl_order_detail` (`order_detail_id`, `order_code`, `product_id`, `product_quantity`, `name`, `phone_number`, `address`, `email`, `content`) VALUES
(1, '7713', 14, 1, 'truong van sang em đẹp trai', '0396445221', 'bình thành thoại sơn an giang', 'truongvansangem0706@gmail.com', 'giao hàng lẹ dùm'),
(2, '7713', 13, 1, 'truong van sang em đẹp trai', '0396445221', 'bình thành thoại sơn an giang', 'truongvansangem0706@gmail.com', 'giao hàng lẹ dùm'),
(3, '2970', 17, 2, 'truong van sang em đẹp trai', '0396445221', 'bình thành thoại sơn an giang', 'truongvansangem0706@gmail.com', 'giao hàng lẹ dùm');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_post`
--

CREATE TABLE `tbl_post` (
  `id_post` int(11) NOT NULL,
  `desc_post` varchar(255) NOT NULL,
  `title_post` varchar(255) NOT NULL,
  `content_post` longtext NOT NULL,
  `img_post` varchar(255) NOT NULL,
  `id_category_post` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_post`
--

INSERT INTO `tbl_post` (`id_post`, `desc_post`, `title_post`, `content_post`, `img_post`, `id_category_post`) VALUES
(1, 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable.', 'Where can I get some?', '<p>Why do we use it? It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like). The standard Lorem Ipsum passage, used since the 1500s \"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\" Section 1.10.32 of \"de Finibus Bonorum et Malorum\", written by Cicero in 45 BC \"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?\"</p>', '51680438887.jpg', 4),
(2, 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one', 'Where does it come from?', '<p>Why do we use it? It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like). The standard Lorem Ipsum passage, used since the 1500s \"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\" Section 1.10.32 of \"de Finibus Bonorum et Malorum\", written by Cicero in 45 BC \"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?\"</p>', '61680438857.jpg', 5),
(3, 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using', 'Why do we use it?', '<p>Why do we use it? It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like). The standard Lorem Ipsum passage, used since the 1500s \"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\" Section 1.10.32 of \"de Finibus Bonorum et Malorum\", written by Cicero in 45 BC \"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?\"</p>', '31680438826.jpg', 2),
(5, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', 'What is Lorem Ipsum?', '<p>The standard Lorem Ipsum passage, used since the 1500s \"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\" Section 1.10.32 of \"de Finibus Bonorum et Malorum\", written by Cicero in 45 BC \"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?\" 1914 translation by H. Rackham \"But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure?\" Section 1.10.33 of \"de Finibus Bonorum et Malorum\", written by Cicero in 45 BC \"At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.\"</p>', '21680438766.jpg', 1),
(6, 'ANHMan Utd quyết tâm giành suất dự Champions League mùa sau, nhưng họ không được đánh giá cao khi gặp Newcastle mà thiếu Casemiro.', 'Newcastle - Man Utd: Quyết chiến vì Champions League', '<p>\"Có một điều tôi cần làm rõ, là Man Utd phải chơi ở Champions League\", HLV Erik ten Hag nói trong họp báo trước trận.</p><p>Cơ hội vô địch Ngoại hạng Anh với Man Utd coi như không còn, bởi nếu thắng cả ba trận chưa đấu, họ vẫn kém Arsenal 13 điểm. Mục tiêu bảo vệ vị trí trong top 4 phù hợp hơn với \"Quỷ Đỏ\", và họ là đội có nhiều cơ hội thứ ba làm được điều này, sau Arsenal và Man City. Phong độ lẫn vị trí trên bảng điểm có thể giúp Man Utd yên tâm sẽ hoàn thành mục tiêu, nhưng các đội vẫn có thể giành tối đa 30 điểm trở lên, và điều gì cũng có thể xảy ra.</p><p>Lịch đấu còn lại của Man Utd ở Ngoại hạng Anh mùa này còn ba trận khó khăn, gặp chủ nhà Newcastle và Tottenham, cũng như đội khách Chelsea. Dựa vào phong độ của đối thủ, trận đấu Newcastle có thể khó khăn nhất và \"Quỷ Đỏ\" có thể chấp nhận phải rơi điểm.</p><p>Newcastle mới thua một trận trên sân nhà mùa này, trước Liverpool hôm 18/2. St James\' Park là điểm tựa tinh thần cho \"Chích Choè\", giúp họ nuôi mộng dự Champions League mùa sau.</p><p>Điểm mạnh nhất của Newcastle chính là hàng thủ, khi họ thủng lưới ít nhất mùa này với 19 bàn thua. Đội phòng ngự tốt thứ hai là Man City, thủng lưới nhiều hơn bảy bàn so với Newcastle.</p><p>Bộ khung hàng thủ Newcastle được duy trì ổn định, khi thủ môn Nick Pope và hậu vệ Kieran Trippier đá chính trọn 26 trận đã qua ở Ngoại hạng Anh. Hậu vệ Dan Burn cũng đã chơi 26 trận, còn trung vệ Fabian Schar và Sven Botman mới vắng hai trận. Năm cầu thủ này là chốt chặn khiến đối thủ khó chọc thủng lưới Newcastle.</p><p>Hàng thủ Man Utd, trong khi đó, không được đánh giá cao, với 35 bàn lọt lưới, nhiều hơn cả đội áp chót bảng điểm West Ham. Không hậu vệ nào của \"Quỷ Đỏ\" đá chính nhiều hơn 21 trận mùa này. Sự ổn định ở hàng thủ không được như Newcastle, khi cặp trung vệ ưa thích Raphael Varane và Lisandro Martinez mới đá chính cùng nhau 14 trận.</p><p>Man Utd sẽ vắng Casemiro vì án treo giò, khiến khả năng phòng ngự từ xa của họ càng bị ảnh hưởng. Dù vậy, sức tấn công của Newcastle không cao so với vị trí thứ năm hiện tại. Quân của Eddie Howe mới ghi 39 bàn, tương đương đội đang cầm đèn đỏ Leicester. Họ ghi ít bàn hơn kỳ vọng phần nào vì sự sa sút của cầu thủ chạy cánh Allan Saint-Maximin.</p>', 'man1680439216.png', 4);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_product`
--

CREATE TABLE `tbl_product` (
  `id_product` int(11) UNSIGNED NOT NULL,
  `title_product` varchar(255) NOT NULL,
  `price_product` varchar(32) NOT NULL,
  `desc_product` text NOT NULL,
  `quantity_product` int(11) NOT NULL,
  `img_product` varchar(100) NOT NULL,
  `id_category` int(11) UNSIGNED NOT NULL,
  `product_hot` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_product`
--

INSERT INTO `tbl_product` (`id_product`, `title_product`, `price_product`, `desc_product`, `quantity_product`, `img_product`, `id_category`, `product_hot`) VALUES
(4, 'Kirito', '2000000', 'Màn hình : Super Amoled 4.5k\r\nĐộ phân giải : 2K+(1440x3040)\r\nRam : 8GB\r\nCPU : Android 9.0\r\nGPU : Mali-G76 MP12\r\nSSD : 512MB', 2, 'kirito1678377367.jpg', 11, 1),
(5, 'Dòng Smart Android Tivi TCL 4K 55 inch', '20990000 ', 'Quantum Dot; Doldy Vision & Atmos; 4K UHD; HDR 10+; Điều khiển giọng nói không cần remote; TCL AI - IN; Công nghệ IPQ.\r\nChấm lượng tử; Công nghệ Dolby Vision & Atmos; 4K UHD; HDR10+; Điều khiển giọng nói không cần remote; TCL AI-IN; Loa Soundbar kết hợp Onkyo: MEMC.\r\n4K HDR; Hệ điều hành Android P (9.0) mới nhất; Nội dung không giới hạn; Tăng cường màu sắc năng động; TCL AI - IN; Dolby Audio.\r\nĐiều khiển giọng nói rảnh tay; Công nghệ trí tuệ nhân tạo TCL AI - IN; Tăng cường màu sắc năng động; Hệ điều hành Android mới nhất; Thiết kế toàn màn hình.', 1, 'tivi41680445081.jpg', 2, 1),
(6, 'Zed', '500000', 'sát thủ', 3, 'zed1678515694.jpg', 10, 0),
(7, 'Irelia', '1000000', 'sát thủ đấu sĩ', 2, 'ahri1678521008.png', 10, 1),
(8, 'Laptop Asus TUF Gaming', '17490000', '15.6 inch, 1920 x 1080 Pixels, IPS, 144 Hz, Anti-glare LED-backlit\r\nIntel, Core i5, 10300H\r\n8 GB (1 thanh 8 GB), DDR4, 2933 MHz\r\nSSD 512 GB\r\nNVIDIA GeForce GTX 1650 4GB; Intel UHD Graphics', 2, 'laptop11680445382.jpg', 1, 1),
(9, 'Iphone 12', '10000000', 'Màn hình : Super Amoled 4.5k\r\nĐộ phân giải : 2K+(1440x3040)\r\nRam : 8GB\r\nCPU : Android 9.0\r\nGPU : Mali-G76 MP12\r\nSSD : 512MB', 4, 'iphone1678865518.png', 3, 1),
(10, 'Iphone X', '20000000', 'Màn hình : Super Amoled 4.5k\r\nĐộ phân giải : 2K+(1440x3040)\r\nRam : 8GB\r\nCPU : Android 9.0\r\nGPU : Mali-G76 MP12\r\nSSD : 512MB', 2, 'iphone21678865570.jpg', 3, 1),
(11, 'Android Tivi Xiaomi P1 55 inch', '8490000', 'Thiết kế cuốn hút, nổi bật không gian sống - Khung viền mỏng, độ hoàn tiện và thẩm mĩ cao\r\nThoải mái tận hưởng không gian giải trí hoàn mỹ - Màn hình 55 inch, 1.07 tỷ màu kêt hợp HDR10+\r\nÂm thanh sống động - Hai loa 10 W (tổng 20 W) hỗ trợ công nghệ Dolby Audio và DTS-HD\r\nKết nối và chia sẻ nhanh chóng - Đa dạng cổng gồm Bluetooth 5.0, HDMI 2.0, HDMI 2.1 (eARC, VRR), HDMI (CEC),...', 4, 'tivi11680444525.jpg', 2, 1),
(12, 'Iphone 14 Pro', '25000000', '<p>điện thoại giá rẻ</p>', 4, 'ip141679389361.jpg', 3, 1),
(13, 'Laptop Acer ', '20000000', '<p>Laptop giá rẻ</p>', 4, 'laptop11680229180.jpg', 1, 0),
(14, 'Laptop Acer Aspire 5 ', '15990000', '<p>Intel Core i5-1235U&nbsp;3.30GHz upto&nbsp;4.40GHz, 12MB Cache</p>', 2, 'laptop21680229459.jpg', 1, 1),
(15, 'Smart Tivi 4K Sony KD-50X80J 50 inch Google TV', '11490000', '<p>TV trí tuệ nhân tạo AI&nbsp;nhận thức đầu tiên trên thế giới<br>Bộ xử lý X1™ nâng cấp lên hình ảnh 4K với độ phân giải gấp 4 lần Full HD<br>Chuyển động mượt Motionflow XR 200<br>Độ tương phản chân thực nhờ 4K&nbsp;Triluminos Pro™<br>Màu sắc và độ tương phản trung thực hơn nữa<br>Âm thanh, hình ảnh hài hòa, loa gắn vào khung viền, âm thanh phát ra từ đúng vị trí trong cảnh</p>', 5, 'tivi21680444713.jpg', 2, 1),
(16, 'Smart Tivi LG 4K UHD 65 Inch 65UQ7550PSF', '22400000', '<p>Trải nghiệm Real 4K trong như pha lê</p><p>Thiết kế mỏng tinh tế</p><p>Bộ xử lý AI α5 Thế hệ 5 cho trải nghiệm xem nâng cao</p><p>ThinQ AI giúp TV LG UHD trở thành một trải nghiệm thông minh thực sự.</p><p>WebOS cho cài đặt cá nhân hóa</p><p>Tivi UHD 4k siêu lớn cho hiển thị hành ảnh sắc nét</p>', 5, 'tivi31680444939.jpg', 2, 0),
(17, 'Apple MacBook Pro 13 Touch Bar M1 16GB 256GB 2020', '28990000', '<p>Loại card đồ họa: 8 nhân GPU, 16 nhân Neural Engine</p><p>Dung lượng RAM: 16GB</p><p>Ổ cứng: 256GB SSD</p><p>Công nghệ màn hình: 13.3-inch (diagonal) LED-backlit display with IPS technology, Retina display</p><p>Kích thước màn hình: 13.3 inches</p><p>Pin: 58.2-watt-hour lithium-polymer, 61W USB-C Power Adapter</p><p>Hệ điều hành: macOS Big Sur</p><p>Trọng lượng: 1.4 kg</p><p>Cổng giao tiếp: 2 cổng Thunderbolt / USB 4 ports</p>', 1, 'laptop2-removebg-preview1680610758.png', 1, 1),
(18, 'Macbook Air 13 Late 2020 MGN63SA', '19390000', '<p>CPU: Apple M1 8 nhân / GPU 7 nhân</p><p>Màn hình: 13.3 inch 2560 x 1600 Retina</p><p>Ổ cứng: 256GB SSD</p><p>RAM: 8GB</p><p>Cổng kết nối: 2 x Thunderbolt 3 / USB4, 1 x 1/8\" / 3.5 mm Headphone Output</p><p>Kết nối không dây: &nbsp;Wi-Fi 6 (802.11ax), Bluetooth 5.0</p><p>Pin: 49.9 Wh</p><p>Kích thước: 30.4 x 21.23 x 1.6 cm</p><p>Trọng lượng: 1.3 kg</p><p>Hệ điều hành: macOS</p>', 4, 'laptop31680445872.jpg', 1, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_shipping`
--

CREATE TABLE `tbl_shipping` (
  `id_shipping` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `address` varchar(500) NOT NULL,
  `email` varchar(100) NOT NULL,
  `note` text NOT NULL,
  `id_customer` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_shipping`
--

INSERT INTO `tbl_shipping` (`id_shipping`, `name`, `phone`, `address`, `email`, `note`, `id_customer`) VALUES
(1, 'truong van sang em đẹp trai', '0396445221', 'bình thành thoại sơn an giang', 'truongvansangem0706@gmail.com', 'giao hàng lẹ dùm', 1),
(2, 'Doãn Chí Bình pro', '0907614552', 'bình thành thoại sơn an giang', 'binh@gmail.com', 'giao hàng lẹ dùm', 2),
(3, 'test no 2', '0907614552', 'Ninh Kiều Cần Thơ', 'sangtruong@gmail.com', 'giao nhanh', 3),
(4, 'dương thanh bình khùng', '013498755', 'an giang', 'binhkhung@gmail.com', 'giao hàng lẹ dùm nha', 4),
(5, 'test 1', '123456987', 'châu đốc an giang', 'test1@gmail.com', 'đóng gói cẩn thận', 5),
(6, 'test2', '0396445001', 'bình thành thoại sơn an giang', 'test2@gmail.com', 'đóng gói cẩn thận, giao nhanh', 6),
(7, 'test6 ', '0396445001', 'châu đốc an giang', 'test6@gmail.com', 'đóng gói cẩn thận', 7);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_vnpay`
--

CREATE TABLE `tbl_vnpay` (
  `id_vnpay` int(11) NOT NULL,
  `vnp_amount` varchar(200) NOT NULL,
  `vnp_bankcode` varchar(200) NOT NULL,
  `vnp_banktranno` varchar(200) NOT NULL,
  `vnp_cardtype` varchar(200) NOT NULL,
  `vnp_orderinfo` varchar(200) NOT NULL,
  `vnp_paydate` varchar(200) NOT NULL,
  `vnp_tmncode` varchar(200) NOT NULL,
  `vnp_transactionno` varchar(200) NOT NULL,
  `order_code` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_vnpay`
--

INSERT INTO `tbl_vnpay` (`id_vnpay`, `vnp_amount`, `vnp_bankcode`, `vnp_banktranno`, `vnp_cardtype`, `vnp_orderinfo`, `vnp_paydate`, `vnp_tmncode`, `vnp_transactionno`, `order_code`) VALUES
(1, '3599000000', 'NCB', 'VNP13980982', 'ATM', 'Thanh toán đơn hàng', '20230401193706', 'VHKWZDMW', '13980982', '7713'),
(2, '5798000000', 'NCB', 'VNP13982587', 'ATM', 'Thanh toán đơn hàng', '20230404134602', 'VHKWZDMW', '13982587', '2970');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Chỉ mục cho bảng `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`id_category`);

--
-- Chỉ mục cho bảng `tbl_category_post`
--
ALTER TABLE `tbl_category_post`
  ADD PRIMARY KEY (`id_category_post`);

--
-- Chỉ mục cho bảng `tbl_customer`
--
ALTER TABLE `tbl_customer`
  ADD PRIMARY KEY (`id_customer`);

--
-- Chỉ mục cho bảng `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD PRIMARY KEY (`order_id`);

--
-- Chỉ mục cho bảng `tbl_order_detail`
--
ALTER TABLE `tbl_order_detail`
  ADD PRIMARY KEY (`order_detail_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Chỉ mục cho bảng `tbl_post`
--
ALTER TABLE `tbl_post`
  ADD PRIMARY KEY (`id_post`),
  ADD KEY `id_category_post` (`id_category_post`);

--
-- Chỉ mục cho bảng `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`id_product`),
  ADD KEY `id_category` (`id_category`);

--
-- Chỉ mục cho bảng `tbl_shipping`
--
ALTER TABLE `tbl_shipping`
  ADD PRIMARY KEY (`id_shipping`);

--
-- Chỉ mục cho bảng `tbl_vnpay`
--
ALTER TABLE `tbl_vnpay`
  ADD PRIMARY KEY (`id_vnpay`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `id_category` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT cho bảng `tbl_category_post`
--
ALTER TABLE `tbl_category_post`
  MODIFY `id_category_post` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `tbl_customer`
--
ALTER TABLE `tbl_customer`
  MODIFY `id_customer` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `tbl_order`
--
ALTER TABLE `tbl_order`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `tbl_order_detail`
--
ALTER TABLE `tbl_order_detail`
  MODIFY `order_detail_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `tbl_post`
--
ALTER TABLE `tbl_post`
  MODIFY `id_post` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `id_product` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT cho bảng `tbl_shipping`
--
ALTER TABLE `tbl_shipping`
  MODIFY `id_shipping` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `tbl_vnpay`
--
ALTER TABLE `tbl_vnpay`
  MODIFY `id_vnpay` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `tbl_order_detail`
--
ALTER TABLE `tbl_order_detail`
  ADD CONSTRAINT `tbl_order_detail_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `tbl_product` (`id_product`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `tbl_post`
--
ALTER TABLE `tbl_post`
  ADD CONSTRAINT `tbl_post_ibfk_1` FOREIGN KEY (`id_category_post`) REFERENCES `tbl_category_post` (`id_category_post`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD CONSTRAINT `tbl_product_ibfk_1` FOREIGN KEY (`id_category`) REFERENCES `tbl_category` (`id_category`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
