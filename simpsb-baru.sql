-- phpMyAdmin SQL Dump
-- version 5.1.1deb5ubuntu1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 26 Jun 2024 pada 08.55
-- Versi server: 10.6.18-MariaDB-0ubuntu0.22.04.1
-- Versi PHP: 8.1.2-1ubuntu2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `simpsb`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `categories`
--

INSERT INTO `categories` (`id`, `nama`, `created_at`, `updated_at`) VALUES
(1, 'quo', '2024-01-28 19:31:22', '2024-01-28 19:31:22'),
(2, 'eaque', '2024-01-28 19:31:22', '2024-01-28 19:31:22'),
(3, 'culpa', '2024-01-28 19:31:22', '2024-01-28 19:31:22'),
(4, 'illum', '2024-01-28 19:31:22', '2024-01-28 19:31:22'),
(5, 'officia', '2024-01-28 19:31:22', '2024-01-28 19:31:22'),
(6, 'omnis', '2024-01-28 19:31:22', '2024-01-28 19:31:22'),
(7, 'laborum', '2024-01-28 19:31:22', '2024-01-28 19:31:22'),
(8, 'numquam', '2024-01-28 19:31:22', '2024-01-28 19:31:22'),
(9, 'non', '2024-01-28 19:31:22', '2024-01-28 19:31:22'),
(10, 'dolores', '2024-01-28 19:31:22', '2024-01-28 19:31:22');

-- --------------------------------------------------------

--
-- Struktur dari tabel `daftar_ulangs`
--

CREATE TABLE `daftar_ulangs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `siswa_id` bigint(20) UNSIGNED NOT NULL,
  `tgl_daftar_ulang` date NOT NULL,
  `bukti_bayar` varchar(255) DEFAULT NULL,
  `status` enum('Belum Bayar','Sudah Bayar') NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `daftar_ulangs`
--

INSERT INTO `daftar_ulangs` (`id`, `siswa_id`, `tgl_daftar_ulang`, `bukti_bayar`, `status`, `created_at`, `updated_at`) VALUES
(2, 2, '2024-06-01', 'storage/bukti_bayar/X51JDT4wHZca5C8xG8ak4q8KjrIyR3BRBHBPzX4z.jpg', 'Sudah Bayar', '2024-05-31 19:58:12', '2024-05-31 19:58:12');

-- --------------------------------------------------------

--
-- Struktur dari tabel `dokumen_siswas`
--

CREATE TABLE `dokumen_siswas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `siswa_id` bigint(20) UNSIGNED NOT NULL,
  `file_pendukung` varchar(255) NOT NULL,
  `file_kk` varchar(255) NOT NULL,
  `file_akta` varchar(255) NOT NULL,
  `file_foto` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `dokumen_siswas`
--

INSERT INTO `dokumen_siswas` (`id`, `siswa_id`, `file_pendukung`, `file_kk`, `file_akta`, `file_foto`, `created_at`, `updated_at`) VALUES
(2, 2, 'storage/dokumen/fKYGgHv1S3BErHBmUusYPrH7Uu9tyYUDzbFx3w0H.jpg', 'storage/dokumen/zVwKg0zJ1v9onV3rTkhBJtah9FFDh2VJ5ggkNcKH.jpg', 'storage/dokumen/ibBjA2Eg6ZU1j5KHSDQ8VfnPZImE9aYxJK4dPB5d.jpg', 'storage/dokumen/Zq2lUmVIaQ7XdyXVs2rnKPG4UncfccaTIJ6EVKCk.jpg', '2024-05-31 19:57:35', '2024-05-31 19:57:35');

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
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
-- Struktur dari tabel `galeris`
--

CREATE TABLE `galeris` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kategori` enum('Belajar','Bermain','Sekolah','Kelas','Kegiatan','Prestasi','Lainnya') NOT NULL,
  `judul` varchar(255) NOT NULL,
  `deskripsi` longtext NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `galeris`
--

INSERT INTO `galeris` (`id`, `kategori`, `judul`, `deskripsi`, `gambar`, `created_at`, `updated_at`) VALUES
(1, 'Belajar', 'werwr', '53qqeqeq', 'storage/galeri/WoCibeQKuMnTOgOzZIMz2lngkqasUjj3XO1v81NR.png', '2024-05-27 23:14:45', '2024-05-27 23:14:45');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelas`
--

CREATE TABLE `kelas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `maksimal` int(11) NOT NULL,
  `terisi` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `kelas`
--

INSERT INTO `kelas` (`id`, `nama`, `maksimal`, `terisi`, `created_at`, `updated_at`) VALUES
(2, 'XI', 50, 0, '2024-01-28 19:31:21', '2024-01-28 19:31:21'),
(3, 'XII', 50, 0, '2024-01-28 19:31:21', '2024-01-28 19:31:21');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_01_08_130540_create_galeris_table', 1),
(6, '2024_01_08_130632_create_kelas_table', 1),
(7, '2024_01_08_131328_create_pendaftarans_table', 1),
(8, '2024_01_08_131428_create_siswas_table', 1),
(9, '2024_01_09_010527_create_daftar_ulangs_table', 1),
(10, '2024_01_16_133155_create_dokumen_siswas_table', 1),
(11, '2024_01_16_151107_create_categories_table', 1),
(12, '2024_01_16_151120_create_posts_table', 1),
(13, '2024_01_18_022936_create_status_pendaftarans_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pendaftarans`
--

CREATE TABLE `pendaftarans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `mulai` date NOT NULL,
  `berakhir` date NOT NULL,
  `tahun_akademik` year(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pendaftarans`
--

INSERT INTO `pendaftarans` (`id`, `mulai`, `berakhir`, `tahun_akademik`, `created_at`, `updated_at`) VALUES
(1, '2024-01-29', '2024-06-30', 2024, '2024-01-28 19:31:21', '2024-05-31 19:46:18');

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `slug` varchar(255) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `isi` text NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `posts`
--

INSERT INTO `posts` (`id`, `category_id`, `slug`, `judul`, `isi`, `gambar`, `created_at`, `updated_at`) VALUES
(1, 9, 'mollitia-et-suscipit-nisi-necessitatibus-similique-ab', 'Belajar Laravel', 'Laravel Adalah bla bla bla', 'storage/info/9JMfJe7CEpGkE9ghM8Gll6ceQ8UGVqy5jFeK7zsQ.png', '2024-01-28 19:31:22', '2024-05-27 23:50:52'),
(2, 6, 'eius-a-asperiores-tempore-aut-aut-non', 'Qui est at ut quam quibusdam blanditiis quia.', 'Sed voluptas nobis cumque facere quos aut. Unde velit ut assumenda consequatur occaecati eos.\n\nRecusandae aut consectetur nostrum omnis repellendus deleniti. Impedit porro asperiores tempora accusantium saepe ut ea. Ea ut est quas occaecati et. Odio aspernatur sunt sit et. Maiores sed doloremque molestias laudantium.\n\nDignissimos iure voluptate quia rerum omnis est provident. Aperiam dolores laboriosam deserunt et. Nam reprehenderit tenetur et aperiam sit quo commodi. Odit natus sit qui sed et.\n\nAssumenda enim fugit occaecati aut ut voluptatem beatae. Incidunt repellendus repellendus in nihil. Odit temporibus omnis facilis maxime similique esse unde. Tempora officia dolore unde voluptatibus nesciunt.\n\nEarum sit eum consequatur tempore et quaerat placeat. Nesciunt ea quaerat quo ipsa deserunt possimus. Id et sequi vero maiores vero. Modi fuga error consequatur sunt tempora nam pariatur.', 'https://via.placeholder.com/640x480.png/0088aa?text=suscipit', '2024-01-28 19:31:22', '2024-01-28 19:31:22'),
(3, 7, 'quia-deserunt-est-recusandae-est-a-quod-sit', 'Quia sunt provident facilis et id et dolore.', 'Iure consequatur nobis quo ut. Laborum ipsam exercitationem possimus ut iste aliquam suscipit. Aut a aut et quos harum iure qui.\n\nVitae architecto facere voluptates in et voluptates fuga. Molestiae accusamus rerum esse amet provident. Voluptas voluptatem veniam eaque in dolorem ratione ea.\n\nIn officiis praesentium odio sed. Est qui ipsa asperiores et earum dolorem. Sunt debitis itaque adipisci.\n\nQuis numquam saepe eaque. Quia explicabo labore in ut sunt in consequatur. Qui quia voluptas et optio animi autem. In consequatur cum quam consequatur qui quidem sunt.\n\nMolestiae rerum voluptate quia laborum recusandae rem. Reiciendis voluptatem placeat mollitia ut suscipit sed.', 'https://via.placeholder.com/640x480.png/00ee44?text=iusto', '2024-01-28 19:31:22', '2024-01-28 19:31:22'),
(4, 1, 'officiis-quidem-eligendi-corporis-cumque', 'Possimus quam est tenetur modi possimus in et.', 'Sit velit sint quia similique. Optio vitae dolores aspernatur qui numquam esse recusandae.\n\nVeritatis dolorum voluptas aspernatur laudantium tempore. Qui consequatur autem et ea in deserunt vitae. Dignissimos sunt et autem nesciunt libero est libero. Sit sequi et velit explicabo eius.\n\nOptio omnis hic aliquam. Dolore unde est excepturi suscipit corporis voluptas reprehenderit. Ullam quis qui aliquid. Mollitia quibusdam autem qui voluptatem modi saepe.\n\nAtque occaecati perferendis cum natus quod quidem. Odio mollitia reiciendis atque molestiae rerum. Cum expedita dignissimos delectus qui odio sapiente. Sit repudiandae aut sint enim optio hic et. Accusamus minima vel tenetur fuga.\n\nHarum rerum accusantium tempora eum et. Quia qui non aspernatur minima. Id possimus eum aliquid cum qui.', 'https://via.placeholder.com/640x480.png/00ccaa?text=praesentium', '2024-01-28 19:31:22', '2024-01-28 19:31:22'),
(5, 6, 'et-qui-et-sed-nemo-nam', 'Non nam at cumque consequatur et blanditiis.', 'Velit sapiente et sed aut aspernatur aut libero. Adipisci blanditiis beatae eveniet. Voluptatibus ipsum adipisci aut et et ad possimus enim. Omnis ducimus ex et rerum.\n\nUllam eum est saepe dolore temporibus voluptatibus dicta. Nostrum aut qui magni quasi illum et. Quo quam qui facere ut quae sunt ullam.\n\nRepellendus sit qui qui aut. Quos occaecati in quo. Voluptates occaecati repellat velit distinctio aut ipsum at.\n\nAmet rerum et praesentium nobis aut. Est facilis qui non rerum cupiditate. Eveniet perspiciatis fugiat nihil unde aut nostrum non. Dolor maxime ea porro modi numquam commodi nostrum et.\n\nNon quis nam aut aut repellendus quas omnis. Excepturi temporibus est quae consequatur a est. Aut cupiditate architecto reiciendis ducimus eum voluptate placeat.', 'https://via.placeholder.com/640x480.png/0044aa?text=sit', '2024-01-28 19:31:22', '2024-01-28 19:31:22'),
(6, 5, 'maxime-voluptate-reprehenderit-minus-quia-unde', 'Reprehenderit sit officia tempore enim placeat.', 'Omnis porro reprehenderit id voluptate. Qui fuga placeat facere facere nostrum nobis nobis. Dolore error quia eum tempore. Maiores earum eum et et ipsam ut.\n\nImpedit ducimus enim et laudantium facere explicabo ut. Sunt at nisi ut dignissimos est ut. Assumenda magnam dolore quod in. Sunt cupiditate et reiciendis debitis neque aut quo.\n\nUnde magnam officiis ut aut sed quo nam. A aut possimus quia molestiae quod. Nam id quae expedita vel.\n\nIure et officia et quasi qui ad. Rem quia veritatis earum voluptatem. Quis quaerat quibusdam iusto et quis. Odio in repellendus ut omnis deserunt.\n\nPerspiciatis fugit quo dolore. Officia qui accusantium rerum provident et praesentium. Voluptatem voluptas sit id et ut.', 'https://via.placeholder.com/640x480.png/006699?text=aspernatur', '2024-01-28 19:31:22', '2024-01-28 19:31:22'),
(7, 5, 'officiis-laboriosam-est-voluptas-consequatur-et-maxime-ea', 'Qui aut in laboriosam atque dignissimos nisi.', 'Quis officiis omnis ratione voluptas illo facilis repellendus. Accusantium maxime et consequatur quas eius voluptas. Occaecati aspernatur quae asperiores temporibus dolorum.\n\nEx possimus corrupti libero atque eos. Vitae sit rerum et nemo in et aut. Quia tempora ut dolorem quis. Cupiditate cupiditate vel earum voluptates.\n\nDeleniti delectus at nulla et. Cum dolorum dolores minima id ipsam quia sunt. Voluptate veritatis quidem ducimus voluptatem libero.\n\nIncidunt delectus pariatur non voluptatem. Excepturi voluptas explicabo atque. Perferendis quia amet sequi libero iusto quis ut non. Reiciendis aut ut ea sit.\n\nModi consequatur quo maxime quas rerum. At cupiditate vero omnis voluptatibus et. Debitis quasi quo quasi ea ad. Quia ut officiis voluptas incidunt molestiae aut ab dolores.', 'https://via.placeholder.com/640x480.png/00ccaa?text=doloremque', '2024-01-28 19:31:22', '2024-01-28 19:31:22'),
(8, 2, 'atque-vel-possimus-consequuntur-esse-rerum', 'Facere voluptatem voluptatem voluptatem fugit quam rerum.', 'Qui nisi nihil inventore provident est et tempora. Officiis dolores non qui itaque reprehenderit omnis. Illum eos et dolores repellendus. Id error quia provident tempora quo et.\n\nNesciunt quas voluptas ea molestias impedit ea. Ea quasi aperiam voluptatum voluptas perferendis voluptas. Qui et quo voluptatibus expedita in labore.\n\nVoluptas maiores est sit eum cupiditate fuga provident. Corrupti praesentium iure dolorum quia. Officia omnis voluptates sunt voluptatem quia aut eaque.\n\nAt iure consequatur et explicabo. Modi excepturi laboriosam repudiandae voluptatum sunt laborum. Reprehenderit aut voluptatum nostrum dolore. Asperiores omnis et maiores recusandae quae quod.\n\nLaudantium iusto asperiores temporibus et alias architecto. Nostrum consequatur ea vel.', 'https://via.placeholder.com/640x480.png/000011?text=consequuntur', '2024-01-28 19:31:22', '2024-01-28 19:31:22'),
(9, 2, 'occaecati-qui-aut-quidem-mollitia-praesentium', 'Voluptatem voluptatem officiis asperiores.', 'Aut rerum molestias maxime consectetur exercitationem sint. Sed in quaerat laboriosam fugit.\n\nOmnis provident expedita et molestiae voluptas adipisci. Vitae qui molestiae harum soluta. Optio quis non distinctio voluptatem itaque quo.\n\nVoluptas suscipit natus adipisci ut. Omnis aspernatur est sint dolores officia. Est ipsam quo et minus tempora quod suscipit. Perferendis autem quod iure aliquid laborum repellat ullam.\n\nUnde harum qui a culpa sed. Quia placeat magni exercitationem repudiandae velit in laboriosam. Sit minima eveniet sed quod fuga architecto ut sit.\n\nQuia maiores repudiandae aut id vel. Sint corporis repudiandae alias facilis ea. Tenetur et qui consequatur dicta est officia esse non. In vero aut est omnis.', 'https://via.placeholder.com/640x480.png/00ff44?text=nobis', '2024-01-28 19:31:22', '2024-01-28 19:31:22'),
(10, 8, 'aliquid-rem-non-qui-nulla', 'Ea quia repellat libero nam placeat.', 'Nulla perferendis est et unde odio magni. Impedit magni blanditiis est sit repellat ipsum. Voluptatum ut nostrum vero commodi explicabo.\n\nAdipisci aut blanditiis animi sapiente impedit repudiandae. Quis quam est rerum minima soluta est et. Vel pariatur et tempora ullam quidem. Esse sequi illum nostrum laboriosam.\n\nQui dolor porro non sunt ullam. Facere veritatis aut nisi eveniet explicabo qui. Libero dignissimos officia et repellendus itaque iusto. Atque beatae dicta voluptatem voluptatem repellendus debitis. Inventore odit facere voluptates commodi.\n\nSint eos est aut laborum provident odit iure. Facere quaerat at ut odio. Non magnam et dolor et. Iusto velit delectus accusamus dolores.\n\nFuga distinctio laborum recusandae aut ut voluptatem temporibus natus. Veniam occaecati eligendi sunt rerum nobis. Ullam nisi quis error fugit voluptatum laudantium aliquid. Incidunt laborum doloremque sed et. Quisquam quidem autem excepturi praesentium.', 'https://via.placeholder.com/640x480.png/0011dd?text=non', '2024-01-28 19:31:22', '2024-01-28 19:31:22');

-- --------------------------------------------------------

--
-- Struktur dari tabel `siswas`
--

CREATE TABLE `siswas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `kelas_id` bigint(20) UNSIGNED NOT NULL,
  `pendaftaran_id` bigint(20) UNSIGNED NOT NULL,
  `nama_panggilan` varchar(255) NOT NULL,
  `jenis_kelamin` enum('Laki-Laki','Perempuan') NOT NULL,
  `tempat_lahir` varchar(255) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `golongan_darah` varchar(255) NOT NULL,
  `agama` varchar(255) NOT NULL,
  `alamat_asal` text NOT NULL,
  `alamat_sekarang` text NOT NULL,
  `whatsapp` bigint(20) NOT NULL,
  `anak_ke` int(11) NOT NULL,
  `jumlah_saudara` int(11) NOT NULL,
  `bahasa` varchar(255) NOT NULL,
  `sekolah_asal` varchar(255) NOT NULL,
  `ijazah_terakhir` enum('SMP','MTS') NOT NULL,
  `nisn` varchar(255) NOT NULL,
  `nama_ayah` varchar(255) NOT NULL,
  `pekerjaan_ayah` varchar(255) NOT NULL,
  `kondisi_ayah` varchar(255) NOT NULL,
  `penghasilan_ayah` bigint(20) NOT NULL,
  `telpon_ayah` bigint(20) NOT NULL,
  `nama_ibu` varchar(255) NOT NULL,
  `pekerjaan_ibu` varchar(255) NOT NULL,
  `kondisi_ibu` varchar(255) NOT NULL,
  `penghasilan_ibu` bigint(20) NOT NULL,
  `telpon_ibu` bigint(20) NOT NULL,
  `alamat_ortu` text NOT NULL,
  `nama_wali` varchar(255) DEFAULT NULL,
  `pekerjaan_wali` varchar(255) DEFAULT NULL,
  `kondisi_wali` varchar(255) DEFAULT NULL,
  `penghasilan_wali` bigint(20) DEFAULT NULL,
  `alamat_wali` text DEFAULT NULL,
  `telpon_wali` bigint(20) DEFAULT NULL,
  `status` enum('Menunggu Konfirmasi','Tidak Diterima','Diterima') NOT NULL DEFAULT 'Menunggu Konfirmasi',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `siswas`
--

INSERT INTO `siswas` (`id`, `user_id`, `kelas_id`, `pendaftaran_id`, `nama_panggilan`, `jenis_kelamin`, `tempat_lahir`, `tanggal_lahir`, `golongan_darah`, `agama`, `alamat_asal`, `alamat_sekarang`, `whatsapp`, `anak_ke`, `jumlah_saudara`, `bahasa`, `sekolah_asal`, `ijazah_terakhir`, `nisn`, `nama_ayah`, `pekerjaan_ayah`, `kondisi_ayah`, `penghasilan_ayah`, `telpon_ayah`, `nama_ibu`, `pekerjaan_ibu`, `kondisi_ibu`, `penghasilan_ibu`, `telpon_ibu`, `alamat_ortu`, `nama_wali`, `pekerjaan_wali`, `kondisi_wali`, `penghasilan_wali`, `alamat_wali`, `telpon_wali`, `status`, `created_at`, `updated_at`) VALUES
(2, 3, 2, 1, 'Ahmad', 'Laki-Laki', 'Sumenep', '2024-06-01', '0', 'Islam', 'Sumenep', 'Sumenep', 6287716408127, 3, 3, 'Indonesia', 'MA Al-Ibrohimy', 'MTS', '0057435024', 'Ali Mufi', 'Petani', 'Sehat', 100, 12345, 'Nasibah', 'Petani', 'Sehat', 100, 12345, 'Sumenep', NULL, NULL, NULL, NULL, NULL, NULL, 'Diterima', '2024-05-31 19:47:22', '2024-05-31 19:52:10');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(255) DEFAULT NULL,
  `level` enum('admin','siswa') NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `level`, `created_at`, `updated_at`) VALUES
(1, 'Administrator', 'admin@admin.com', '$2y$12$elYUZUIfeDfxcv6LW4kyauNS/j0RI5hJH6SQDfaQqY7V1Pp5nU8x2', NULL, 'admin', '2024-01-28 19:31:21', '2024-01-28 19:31:21'),
(3, 'Ahmad Muzayyin', 'muzayyin@gmail.com', '$2y$12$CXnaTEkyd4nPKjfkHOyHEu27MZJ71rOjuRQY/D/ZdYBQhYvjZ4/K6', NULL, 'siswa', '2024-05-31 19:44:43', '2024-05-31 19:44:43'),
(4, 'Istifa', 'istifa@gmail.com', '$2y$12$41GpIwYNyWpSEKYLpy/mDOVEVI7TN.3Q/okbkpUSSAIwQoA.jggxK', NULL, 'siswa', '2024-05-31 21:51:54', '2024-05-31 21:51:54');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `daftar_ulangs`
--
ALTER TABLE `daftar_ulangs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `daftar_ulangs_siswa_id_foreign` (`siswa_id`);

--
-- Indeks untuk tabel `dokumen_siswas`
--
ALTER TABLE `dokumen_siswas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `dokumen_siswas_siswa_id_foreign` (`siswa_id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `galeris`
--
ALTER TABLE `galeris`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indeks untuk tabel `pendaftarans`
--
ALTER TABLE `pendaftarans`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `posts_slug_unique` (`slug`),
  ADD KEY `posts_category_id_foreign` (`category_id`);

--
-- Indeks untuk tabel `siswas`
--
ALTER TABLE `siswas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `siswas_user_id_foreign` (`user_id`),
  ADD KEY `siswas_kelas_id_foreign` (`kelas_id`),
  ADD KEY `siswas_pendaftaran_id_foreign` (`pendaftaran_id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `daftar_ulangs`
--
ALTER TABLE `daftar_ulangs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `dokumen_siswas`
--
ALTER TABLE `dokumen_siswas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `galeris`
--
ALTER TABLE `galeris`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `pendaftarans`
--
ALTER TABLE `pendaftarans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `siswas`
--
ALTER TABLE `siswas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `daftar_ulangs`
--
ALTER TABLE `daftar_ulangs`
  ADD CONSTRAINT `daftar_ulangs_siswa_id_foreign` FOREIGN KEY (`siswa_id`) REFERENCES `siswas` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `dokumen_siswas`
--
ALTER TABLE `dokumen_siswas`
  ADD CONSTRAINT `dokumen_siswas_siswa_id_foreign` FOREIGN KEY (`siswa_id`) REFERENCES `siswas` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `siswas`
--
ALTER TABLE `siswas`
  ADD CONSTRAINT `siswas_kelas_id_foreign` FOREIGN KEY (`kelas_id`) REFERENCES `kelas` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `siswas_pendaftaran_id_foreign` FOREIGN KEY (`pendaftaran_id`) REFERENCES `pendaftarans` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `siswas_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
