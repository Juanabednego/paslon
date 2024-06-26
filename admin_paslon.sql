-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 25, 2024 at 03:26 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `admin_paslon`
--

-- --------------------------------------------------------

--
-- Table structure for table `anggotas`
--

CREATE TABLE `anggotas` (
  `id` bigint UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `posisi/jabatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `educations`
--

CREATE TABLE `educations` (
  `id` bigint UNSIGNED NOT NULL,
  `paslon_id` bigint UNSIGNED NOT NULL,
  `program_studi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tahun_mulai` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tahun_selesai` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kampus` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `educations`
--

INSERT INTO `educations` (`id`, `paslon_id`, `program_studi`, `tahun_mulai`, `tahun_selesai`, `kampus`, `keterangan`, `created_at`, `updated_at`) VALUES
(1, 1, 'Sarjana Ilmu Administrasi Negara (S.I.A.N)', '1998', '2002', 'Universitas Gadjah Mada', 'Lulus dengan predikat cum laude, aktif dalam organisasi mahasiswa sebagai ketua BEM. Selama masa kuliah, terlibat dalam berbagai penelitian dan proyek yang berfokus pada reformasi birokrasi dan pelayanan publik. Menerima beberapa penghargaan untuk makalah dan presentasi terbaik dalam seminar nasional.', NULL, '2024-06-24 03:16:26'),
(2, 1, 'Magister Manajemen Publik (M.M.P)', '2005', '2007', 'Rochester Institute of Technology, Rochester, NY2', 'Menyelesaikan tesis dengan topik tentang inovasi dalam manajemen publik daerah. Memperoleh beasiswa unggulan dan menjadi asisten dosen selama dua tahun. Aktif dalam forum-forum diskusi tentang pengembangan kebijakan publik di tingkat regional dan nasional, serta mempublikasikan artikel di jurnal ilmiah terkemuka.', NULL, '2024-06-24 03:16:52'),
(3, 2, 'Sarjana Teknik (S.T.)', '2000', '2004', 'Universitas Indonesia', 'Aktif dalam proyek pembangunan infrastruktur di kampus dan lulus dengan predikat sangat memuaskan. Selama kuliah, terlibat dalam berbagai proyek penelitian dan pembangunan jalan serta jembatan. Mengikuti program pertukaran mahasiswa ke Jepang untuk mempelajari teknologi konstruksi terbaru dan berpartisipasi dalam konferensi internasional.', NULL, '2024-06-24 03:18:52'),
(4, 2, 'Magister Perencanaan Wilayah dan Kota (M.P.W.K)', '2008', '2010', 'Universitas Diponegoro', 'Berkontribusi dalam penelitian tentang tata kelola perkotaan yang berkelanjutan. Terlibat dalam berbagai proyek pengembangan masterplan kota dan menjadi konsultan untuk beberapa pemerintah daerah. Aktif dalam organisasi profesi perencana kota dan sering menjadi pembicara dalam seminar tentang perencanaan kota yang berkelanjutan.', NULL, '2024-06-24 03:19:29');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
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
-- Table structure for table `galeris`
--

CREATE TABLE `galeris` (
  `id` bigint UNSIGNED NOT NULL,
  `path` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `galeris`
--

INSERT INTO `galeris` (`id`, `path`, `created_at`, `updated_at`) VALUES
(2, '1719320363.jpg', '2024-06-25 05:59:23', '2024-06-25 05:59:23'),
(3, '1719320374.jpg', '2024-06-25 05:59:34', '2024-06-25 05:59:34'),
(4, '1719320389.jpg', '2024-06-25 05:59:49', '2024-06-25 05:59:49'),
(5, '1719320411.jpg', '2024-06-25 06:00:11', '2024-06-25 06:00:11'),
(6, '1719320442.jpg', '2024-06-25 06:00:43', '2024-06-25 06:00:43'),
(7, '1719320465.jpg', '2024-06-25 06:01:05', '2024-06-25 06:01:05');

-- --------------------------------------------------------

--
-- Table structure for table `karirs`
--

CREATE TABLE `karirs` (
  `id` bigint UNSIGNED NOT NULL,
  `paslon_id` bigint UNSIGNED NOT NULL,
  `keterangan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `tempat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `karirs`
--

INSERT INTO `karirs` (`id`, `paslon_id`, `keterangan`, `tempat`, `created_at`, `updated_at`) VALUES
(4, 2, 'Profesional layanan publik berpengalaman dengan pengalaman luas dalam pemberdayaan masyarakat dan program kesejahteraan sosial. Menggagas inisiatif untuk meningkatkan kesehatan masyarakat dan mengurangi tingkat kemiskinan.', 'Dinas Sosial, Jl. Sudirman No.45, Yogyakarta', NULL, '2024-06-22 06:29:13'),
(5, 1, 'Pemimpin yang berdedikasi dan visioner dengan lebih dari 10 tahun pengalaman dalam administrasi publik. Berhasil mengimplementasikan inisiatif berbasis komunitas untuk meningkatkan infrastruktur lokal, sistem kesehatan, dan pendidikan.', 'Kantor Bupati, Jl. Pahlawan No.1, Bandung, Jawa Barat', NULL, '2024-06-22 06:28:31'),
(8, 1, 'Pembuat kebijakan yang berprestasi dengan rekam jejak dalam pembangunan berkelanjutan dan konservasi lingkungan. Memimpin berbagai proyek yang meningkatkan ruang hijau dan mengurangi polusi di daerah perkotaan.', 'Dinas Lingkungan Hidup, Jl. Merdeka Barat No.15, Jakarta', '2024-06-22 06:28:48', '2024-06-22 06:28:48'),
(9, 2, 'Wakil dinamis dan berorientasi hasil dengan keahlian dalam pengembangan ekonomi dan tata kelola lokal. Berhasil menjalin kemitraan dengan bisnis untuk merangsang ekonomi lokal dan menciptakan lapangan kerja.', 'Badan Pengembangan Ekonomi, Jl. Gatot Subroto No.19, Surabaya', '2024-06-22 06:29:39', '2024-06-22 06:29:39');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_06_20_140839_create_misi_table', 2),
(6, '2024_06_20_145220_create_program_table', 3),
(7, '2024_06_14_020545_add_timestamps_to_visi_table', 4),
(8, '2024_06_20_145600_create_anggotas_table', 4),
(9, '2024_06_20_145813_create_galeris_table', 4),
(10, '2024_06_20_145221_create_program_table', 5),
(11, '2024_06_20_145601_create_anggotas_table', 6),
(12, '2024_06_21_121842_create_paslons_table', 7),
(13, '2024_06_22_121424_create_karirs_table', 8),
(14, '2024_06_23_051245_create_educations_table', 9),
(15, '2024_06_23_051246_create_educations_table', 10),
(16, '2024_06_24_104527_create_organisasi_table', 11),
(17, '2024_06_24_110412_create_pengalaman_organisasi_table', 12),
(18, '2024_06_24_104528_create_organisasi_table', 13),
(19, '2024_06_24_110413_create_pengalaman_organisasi_table', 14),
(20, '2024_06_25_131828_create_official_table', 15);

-- --------------------------------------------------------

--
-- Table structure for table `misi`
--

CREATE TABLE `misi` (
  `id` bigint UNSIGNED NOT NULL,
  `isi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `misi`
--

INSERT INTO `misi` (`id`, `isi`, `created_at`, `updated_at`) VALUES
(3, 'Menawarkan pendidikan berkualitas yang berfokus pada pengembangan keterampilan praktis dan pengetahuan untuk mendukung pembelajar sepanjang hayat atau hidup', NULL, '2024-06-21 01:05:26'),
(4, 'Menyediakan layanan kesehatan yang terjangkau dan berkualitas tinggi dengan pendekatan yang berbasis pada penelitian ilmiah dan inovasi medis.', '2024-06-21 01:06:36', '2024-06-21 01:06:36');

-- --------------------------------------------------------

--
-- Table structure for table `official`
--

CREATE TABLE `official` (
  `id` bigint UNSIGNED NOT NULL,
  `gambar` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `nomor_telepon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `twitter` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `youtube` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `instagram` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `linkedin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `official`
--

INSERT INTO `official` (`id`, `gambar`, `alamat`, `nomor_telepon`, `email`, `twitter`, `facebook`, `youtube`, `instagram`, `linkedin`, `created_at`, `updated_at`) VALUES
(1, '1719323499.jpg', 'Jalan Sisingamangaraja, Balige, Toba, Sumut', '08732783838834', 'paslonB@gmail.com', 'https://x.com/', 'https://www.facebook.com/', 'https://www.youtube.com/', 'https://www.instagram.com/', 'https://www.linkedin.com/', '2024-06-25 06:51:39', '2024-06-25 06:56:56');

-- --------------------------------------------------------

--
-- Table structure for table `organisasi`
--

CREATE TABLE `organisasi` (
  `id` bigint UNSIGNED NOT NULL,
  `paslon_id` bigint UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lokasi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `posisi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tahun_mulai` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tahun_sampai` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `organisasi`
--

INSERT INTO `organisasi` (`id`, `paslon_id`, `nama`, `lokasi`, `posisi`, `tahun_mulai`, `tahun_sampai`, `created_at`, `updated_at`) VALUES
(1, 1, 'Komite Pemuda Indonesia (KPI)', 'Jakarta', 'Anggota', '2015', '2020', NULL, '2024-06-24 06:17:12'),
(2, 2, 'Perhimpunan Mahasiswa Hukum (PMH)', 'Yogyakarta', 'Sekretaris', '2016', '2018', NULL, '2024-06-25 05:36:53'),
(6, 2, 'Komunitas Pecinta Alam (KPA) Toba', 'Balige', 'Ketua', '2017', 'Present', '2024-06-25 05:38:02', '2024-06-25 05:38:38'),
(7, 1, 'Forum Pemuda Peduli Lingkungan (FPPL)', 'Porsea', 'Koordinator', '2016', 'Present', '2024-06-25 05:43:01', '2024-06-25 05:43:01');

-- --------------------------------------------------------

--
-- Table structure for table `paslons`
--

CREATE TABLE `paslons` (
  `id` bigint UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `calon_role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `tempat_lahir` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nomor_hp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `degree` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `agama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `twitter` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `instagram` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `skype` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `linkedin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `paslons`
--

INSERT INTO `paslons` (`id`, `nama`, `calon_role`, `foto`, `deskripsi`, `tanggal_lahir`, `tempat_lahir`, `nomor_hp`, `alamat`, `degree`, `email`, `agama`, `facebook`, `twitter`, `instagram`, `skype`, `linkedin`, `created_at`, `updated_at`) VALUES
(1, 'Turman Hutapea, SH.M Hum', 'Bupati', '1719129622_GOS1.jpg', 'Seorang pemimpin yang visioner dan berpengalaman dalam bidang pemerintahan dan pembangunan daerah. Dengan latar belakang pendidikan yang kuat di bidang administrasi publik, beliau telah bekerja di berbagai posisi strategis dalam pemerintahan selama lebih dari 20 tahun. Komitmennya terhadap transparansi, akuntabilitas, dan partisipasi publik telah membawa perubahan positif di berbagai daerah yang dipimpinnya. Beliau juga dikenal sebagai seorang inovator yang selalu mencari solusi kreatif untuk mengatasi tantangan pembangunan dan kesejahteraan masyarakat.', '1962-10-20', 'Soposurung', '0812345678', 'Jl. Baba Lubis Sangkarnihuta Balige', 'Master', 'turmanhutapea@gmail.com', 'Kristen Protestan', 'https://www.facebook.com/', 'https://x.com/', 'https://www.instagram.com/', 'https://www.skype.com/', 'https://www.linkedin.com/', NULL, '2024-06-23 01:00:22'),
(2, 'Ronald Panjaitan', 'Wakil Bupati', '1719129638_GOS2.jpg', 'seorang profesional muda yang dinamis dan bersemangat dalam pelayanan publik. Dengan gelar Master, beliau memiliki pengalaman luas dalam mengelola proyek-proyek pembangunan yang berdampak langsung pada kesejahteraan masyarakat. Sebagai seorang aktivis sosial, dia juga aktif dalam berbagai kegiatan kemanusiaan dan pemberdayaan masyarakat. Beliau dikenal karena dedikasinya dalam meningkatkan kualitas hidup masyarakat melalui program-program inovatif dan berkelanjutan.', '1966-06-06', 'Laguboti', '08123456789', 'Jalan Sisingamangaraja, Balige, Sumatera Utara', 'Master', 'ronaldpjt@gmail.com', 'Kristen Protestan', 'https://www.facebook.com/', 'https://x.com/', 'https://www.instagram.com/', 'https://www.skype.com/', 'https://www.linkedin.com/', NULL, '2024-06-23 01:00:38');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pengalaman_organisasi`
--

CREATE TABLE `pengalaman_organisasi` (
  `id` bigint UNSIGNED NOT NULL,
  `organisasi_id` bigint UNSIGNED NOT NULL,
  `keterangan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pengalaman_organisasi`
--

INSERT INTO `pengalaman_organisasi` (`id`, `organisasi_id`, `keterangan`, `created_at`, `updated_at`) VALUES
(1, 1, 'Menginisiasi program sosial untuk pemuda di Jakarta.', NULL, '2024-06-24 06:17:28'),
(3, 2, 'Mengadakan seminar dan diskusi hukum untuk mahasiswa.', NULL, '2024-06-25 05:37:07'),
(8, 1, 'Mengkoordinir kegiatan budaya dan seni untuk memperkuat identitas lokal.', '2024-06-24 06:17:36', '2024-06-24 06:17:36'),
(9, 1, 'Berpartisipasi dalam kampanye sosial untuk kebersihan lingkungan.', '2024-06-24 06:17:46', '2024-06-24 06:17:46'),
(11, 2, 'Mengorganisir kegiatan advokasi untuk hak-hak mahasiswa di kampus.', '2024-06-25 05:37:16', '2024-06-25 05:37:16'),
(12, 2, 'Terlibat dalam program sosial untuk anak-anak jalanan di Yogyakarta.', '2024-06-25 05:37:25', '2024-06-25 05:37:25'),
(13, 6, 'Mengadakan ekspedisi ke gunung-gunung terpencil', '2024-06-25 05:38:52', '2024-06-25 05:38:52'),
(14, 6, 'Mengkoordinir kegiatan pembersihan pantai dan sungai di Toba.', '2024-06-25 05:39:08', '2024-06-25 05:39:08'),
(16, 7, 'Mengorganisir aksi-aksi penanaman pohon di sejumlah kawasan kritis.', '2024-06-25 05:43:17', '2024-06-25 05:43:17'),
(17, 7, 'Mengembangkan program edukasi lingkungan untuk sekolah-sekolah di Toba.', '2024-06-25 05:43:27', '2024-06-25 05:43:39'),
(18, 7, 'Berpartisipasi dalam advokasi kebijakan untuk perlindungan lingkungan di tingkat lokal.', '2024-06-25 05:43:50', '2024-06-25 05:43:50'),
(19, 6, 'Terlibat dalam upaya konservasi flora dan fauna di hutan-hutan', '2024-06-25 05:45:54', '2024-06-25 05:45:54');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `program`
--

CREATE TABLE `program` (
  `id` bigint UNSIGNED NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `program`
--

INSERT INTO `program` (`id`, `judul`, `keterangan`, `gambar`, `created_at`, `updated_at`) VALUES
(1, 'Makan Gratis', 'Makan makan semua anak sekolah Kabupaten Toba', '1719129957.jpg', '2024-06-21 01:54:59', '2024-06-23 01:05:57'),
(3, 'Bersih bersih', 'Bersih bersih jalanan dan parit', '1718962181.jpeg', '2024-06-21 02:29:41', '2024-06-21 02:29:41'),
(4, 'Wisata', 'Penambahan tempat dan fasilitas wisata Toba', '1718962367.jpeg', '2024-06-21 02:32:47', '2024-06-21 02:32:47');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(3, 'admin', 'admin@gmail.com', NULL, '$2y$10$Tj/XGfofjhHiOcjk/Z7s7OlroYxoy/qVr2F96owlsvqqPgEAU6Way', NULL, '2024-06-20 07:06:29', '2024-06-20 07:06:29');

-- --------------------------------------------------------

--
-- Table structure for table `visi`
--

CREATE TABLE `visi` (
  `id` int NOT NULL,
  `isi` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `visi`
--

INSERT INTO `visi` (`id`, `isi`, `created_at`, `updated_at`) VALUES
(2, 'Menjaga keamanan lingkungan', '2024-06-20 21:41:37', '2024-06-21 00:52:44'),
(6, 'Menciptakan masa depan yang berkelanjutan melalui energi terbarukan dan pengelolaan lingkungan yang bertanggung jawab', '2024-06-21 00:51:50', '2024-06-21 00:51:50'),
(7, 'Mendorong budaya keunggulan dan perbaikan berkelanjutan dalam pendidikan untuk para pembelajar seumur hidup.', '2024-06-21 00:52:03', '2024-06-21 00:52:03'),
(8, 'Menginspirasi dan membangkitkan semangat manusia melalui kekuatan seni dan kreativitas', '2024-06-21 00:52:20', '2024-06-21 00:52:20');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anggotas`
--
ALTER TABLE `anggotas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `educations`
--
ALTER TABLE `educations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `educations_paslon_id_foreign` (`paslon_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `galeris`
--
ALTER TABLE `galeris`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `karirs`
--
ALTER TABLE `karirs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `karirs_paslon_id_foreign` (`paslon_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `misi`
--
ALTER TABLE `misi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `official`
--
ALTER TABLE `official`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `organisasi`
--
ALTER TABLE `organisasi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `organisasi_paslon_id_foreign` (`paslon_id`);

--
-- Indexes for table `paslons`
--
ALTER TABLE `paslons`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `pengalaman_organisasi`
--
ALTER TABLE `pengalaman_organisasi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pengalaman_organisasi_organisasi_id_foreign` (`organisasi_id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `program`
--
ALTER TABLE `program`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `visi`
--
ALTER TABLE `visi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `anggotas`
--
ALTER TABLE `anggotas`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `educations`
--
ALTER TABLE `educations`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `galeris`
--
ALTER TABLE `galeris`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `karirs`
--
ALTER TABLE `karirs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `misi`
--
ALTER TABLE `misi`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `official`
--
ALTER TABLE `official`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `organisasi`
--
ALTER TABLE `organisasi`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `paslons`
--
ALTER TABLE `paslons`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pengalaman_organisasi`
--
ALTER TABLE `pengalaman_organisasi`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `program`
--
ALTER TABLE `program`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `visi`
--
ALTER TABLE `visi`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `educations`
--
ALTER TABLE `educations`
  ADD CONSTRAINT `educations_paslon_id_foreign` FOREIGN KEY (`paslon_id`) REFERENCES `paslons` (`id`);

--
-- Constraints for table `karirs`
--
ALTER TABLE `karirs`
  ADD CONSTRAINT `karirs_paslon_id_foreign` FOREIGN KEY (`paslon_id`) REFERENCES `paslons` (`id`);

--
-- Constraints for table `organisasi`
--
ALTER TABLE `organisasi`
  ADD CONSTRAINT `organisasi_paslon_id_foreign` FOREIGN KEY (`paslon_id`) REFERENCES `paslons` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pengalaman_organisasi`
--
ALTER TABLE `pengalaman_organisasi`
  ADD CONSTRAINT `pengalaman_organisasi_organisasi_id_foreign` FOREIGN KEY (`organisasi_id`) REFERENCES `organisasi` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
