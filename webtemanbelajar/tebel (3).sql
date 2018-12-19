-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 17 Des 2018 pada 06.17
-- Versi server: 10.1.33-MariaDB
-- Versi PHP: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tebel`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`) VALUES
(1, 'bubur', '34e5871ea326f5b9ac26fadad093c3ef');

-- --------------------------------------------------------

--
-- Struktur dari tabel `bank`
--

CREATE TABLE `bank` (
  `id_bank` int(11) NOT NULL,
  `nama_bank` varchar(50) NOT NULL,
  `no_rekening` int(50) NOT NULL,
  `id_tentor` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `jadwal`
--

CREATE TABLE `jadwal` (
  `id_jadwal` int(11) NOT NULL,
  `id_waktu` int(11) DEFAULT NULL,
  `id_kursus` int(11) DEFAULT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kabupaten`
--

CREATE TABLE `kabupaten` (
  `id_kabupaten` int(11) NOT NULL,
  `nama_kabupaten` varchar(50) NOT NULL,
  `id_kecamatan` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kabupaten`
--

INSERT INTO `kabupaten` (`id_kabupaten`, `nama_kabupaten`, `id_kecamatan`) VALUES
(1, 'solo', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kecamatan`
--

CREATE TABLE `kecamatan` (
  `id_kecamatan` int(11) NOT NULL,
  `nama_kecamatan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kecamatan`
--

INSERT INTO `kecamatan` (`id_kecamatan`, `nama_kecamatan`) VALUES
(1, 'jebres');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kursus`
--

CREATE TABLE `kursus` (
  `id_kursus` int(11) NOT NULL,
  `Id_murid` int(50) DEFAULT NULL,
  `id_mengajar` int(11) DEFAULT NULL,
  `harga_total` int(50) NOT NULL,
  `status_bayar` varchar(100) DEFAULT 'belum bayar',
  `status_les` varchar(100) NOT NULL DEFAULT 'belum selesai',
  `jumlah_pertemuan` int(50) NOT NULL,
  `hari_les` varchar(50) NOT NULL,
  `jam_les` varchar(50) NOT NULL,
  `file_pembayaran` varchar(200) NOT NULL,
  `status_booking` varchar(100) NOT NULL DEFAULT 'Menunggu Persetujuan Tentor',
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kursus`
--

INSERT INTO `kursus` (`id_kursus`, `Id_murid`, `id_mengajar`, `harga_total`, `status_bayar`, `status_les`, `jumlah_pertemuan`, `hari_les`, `jam_les`, `file_pembayaran`, `status_booking`, `tanggal`) VALUES
(2, 27, 1, 150000, 'lunas', 'Sudah Selesai', 3, 'jumat, minggu', '16.00', '', 'Approved', '2018-07-02'),
(3, 25, 4, 175000, 'lunas', 'belum selesai', 5, 'senin', '16:40', '', 'Di Tolak', '2018-08-13'),
(5, 25, 5, 210000, 'lunas', 'Sudah Selesai', 6, 'rabu', '15:00', '', 'Approved', '2018-11-08'),
(6, 25, 4, 245000, 'lunas', 'belum selesai', 7, 'senin, kamis', '19:00', '', 'Approved', '2018-12-02'),
(7, 27, 5, 175000, 'lunas', 'Sudah Selesai', 5, 'rabu', '1290', '', 'Approved', '2018-12-03'),
(8, 25, 39, 140000, 'belum bayar', 'belum selesai', 4, 'senin', '16:00', '', 'Menunggu Persetujuan Tentor', '2018-12-12'),
(12, 25, 29, 225000, 'belum bayar', 'belum selesai', 5, 'kamis', '09:00', '', 'Menunggu Persetujuan Tentor', '2018-12-13'),
(13, 35, 39, 280000, 'belum bayar', 'belum selesai', 8, 'rabu', '16:40', '', 'Menunggu Persetujuan Tentor', '2018-12-13'),
(14, 37, 39, 140000, 'belum bayar', 'belum selesai', 4, 'Senin,  Kamis', '16:00', '', 'Menunggu Persetujuan Tentor', '2018-12-13'),
(15, 37, 42, 210000, 'belum bayar', 'belum selesai', 6, 'Senin', '16:00', '', 'Approved', '2018-12-13'),
(17, 37, 23, 315000, 'belum bayar', 'belum selesai', 7, 'sabtu', '17:00', '', 'Menunggu Persetujuan Tentor', '2018-12-13'),
(18, 37, 29, 360000, 'belum bayar', 'belum selesai', 8, 'jumat', '16:00', '', 'Menunggu Persetujuan Tentor', '2018-12-13'),
(19, 38, 44, 140000, 'belum bayar', 'belum selesai', 4, 'Senin', '16.00', '', 'Approved', '2018-12-14'),
(20, 37, 46, 225000, 'belum bayar', 'belum selesai', 5, 'kamis', '15:00', '', 'Menunggu Persetujuan Tentor', '2018-12-17');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mapel`
--

CREATE TABLE `mapel` (
  `id_mapel` int(11) NOT NULL,
  `nama_mapel` varchar(255) NOT NULL,
  `tarif_1` int(11) NOT NULL,
  `tarif_2` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mapel`
--

INSERT INTO `mapel` (`id_mapel`, `nama_mapel`, `tarif_1`, `tarif_2`) VALUES
(1, 'Baca Tulis Hitung', 45000, 0),
(2, 'Mapel SD', 35000, 0),
(3, 'SMP Bahasa Indonesia', 45000, 0),
(4, 'SMP Bahasa Inggris', 45000, 0),
(5, 'SMP Matematika', 45000, 0),
(6, 'SMP IPA', 45000, 0),
(7, 'SMP IPS', 45000, 0),
(8, 'SMP Biologi', 45000, 0),
(9, 'SMP Fisika', 45000, 0),
(10, 'SMP Ekonomi', 45000, 0),
(11, 'SMP Geografi', 45000, 0),
(12, 'SMA Bahasa Indonesia', 45000, 0),
(13, 'SMA Bahasa Inggris', 45000, 0),
(14, 'SMA Matematika', 45000, 0),
(15, 'SMA Biologi', 45000, 0),
(16, 'SMA Kimia', 45000, 0),
(17, 'SMA Fisika', 45000, 0),
(18, 'SMA Ekonomi', 45000, 0),
(19, 'SMA Geografi', 45000, 0),
(20, 'SMA Sejarah', 45000, 0),
(21, 'SMA Sosiologi', 45000, 0),
(23, 'SBMPTN Bahasa Inggris', 45000, 0),
(24, 'SBMPTN Bahasa Indonesia', 45000, 0),
(25, 'SBMPTN Bioogi', 45000, 0),
(26, 'SBMPTN Kimia', 0, 0),
(27, 'SBMPTN Fisika', 45000, 0),
(28, 'SBMPTN Ekonomi', 45000, 0),
(29, 'SBMPTN Matematika', 45000, 0),
(30, 'Corel Draw', 35000, 0),
(31, 'Pemrograman Android', 45000, 0),
(32, 'Pemrogramman Web', 40000, 0),
(33, 'Microsoft Office', 35000, 0),
(34, 'Pemrogramman Java', 40000, 0),
(35, 'Bahasa Inggris', 40000, 0),
(36, 'Bahasa Arab', 40000, 0),
(37, 'bahasa Korea', 40000, 0),
(38, 'Bahasa Jepang', 40000, 0),
(39, 'Bahasa Jerman', 40000, 0),
(40, 'Bahasa Mandarin', 40000, 0),
(41, 'Bahasa Perancis', 40000, 0),
(42, 'TOEFL', 45000, 0),
(43, 'Kursus Piano', 40000, 0),
(44, 'Kursus Gitar', 40000, 0),
(45, 'Kursus Biola', 40000, 0),
(46, 'Kursus Drum', 40000, 0),
(47, 'Kursus Vokal', 40000, 0),
(48, 'Kursus Saxophone', 40000, 0),
(49, 'Kursus Cello', 40000, 0),
(50, 'Olahraga Renang', 35000, 0),
(51, 'Olahraga Sepakbola', 35000, 0),
(52, 'Olahraga Karate', 30000, 0),
(53, 'Olahraga Bulutangkis', 30000, 0),
(54, 'Olahraga Tenis', 40000, 0),
(55, 'Olahraga Basket', 35000, 0),
(56, 'Olahraga Taekwondo', 30000, 0),
(57, 'Personal GYM Triner', 35000, 0),
(58, 'Olahraga Catur', 30000, 0),
(59, 'Murotal Al Quran', 35000, 0),
(60, 'Mengaji Al Quran dan Pendidikan Islam', 35000, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `mengajar`
--

CREATE TABLE `mengajar` (
  `id_mengajar` int(11) NOT NULL,
  `id_tentor` int(11) DEFAULT NULL,
  `id_mapel` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mengajar`
--

INSERT INTO `mengajar` (`id_mengajar`, `id_tentor`, `id_mapel`) VALUES
(1, 1, 35),
(2, 2, 35),
(3, 1, 2),
(4, 2, 2),
(5, 4, 2),
(6, NULL, 2),
(7, 8, 2),
(8, 10, 1),
(10, 10, 2),
(11, 10, 4),
(12, 10, 13),
(13, 11, 2),
(14, 11, 5),
(15, 11, 14),
(16, 11, 24),
(17, 12, 1),
(18, 12, 2),
(19, 12, 9),
(20, 12, 17),
(21, 12, 27),
(22, 13, 1),
(23, 13, 5),
(25, 13, 14),
(26, 13, 29),
(28, 14, 1),
(29, 14, 4),
(30, 14, 13),
(32, 14, 23),
(33, 14, 35),
(34, 14, 42),
(35, 15, 1),
(36, 15, 2),
(37, 15, 21),
(38, 15, 60),
(39, 19, 2),
(40, 4, 17),
(41, 19, 21),
(42, 21, 2),
(43, 21, 3),
(44, 23, 2),
(45, 23, 5),
(46, 22, 5);

-- --------------------------------------------------------

--
-- Struktur dari tabel `murid`
--

CREATE TABLE `murid` (
  `id_murid` int(11) NOT NULL,
  `nama_murid` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `token` varchar(255) NOT NULL,
  `no_telp` varchar(50) NOT NULL,
  `jk` varchar(50) NOT NULL,
  `jenjang` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `sekolah` varchar(50) NOT NULL,
  `foto` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `murid`
--

INSERT INTO `murid` (`id_murid`, `nama_murid`, `password`, `email`, `token`, `no_telp`, `jk`, `jenjang`, `alamat`, `sekolah`, `foto`) VALUES
(15, 'fahri', '$2y$10$OXW3UzqIYnty04gIdQEF..KixMkXEs58PwWhCdEbgo.', 'fahri@gmail.com', '', '823144', 'Perempuan', '', '', '', ''),
(19, 'Anggit Nendyo', 'e10adc3949ba59abbe56e057f20f883e', 'anggitnendyo9@gmail.com', 'Anggit Nendyo', '2147483647', 'Laki-Laki', 'Mahasiswa', 'Jebres Surakarta', 'UNS', ''),
(20, 'Kirana Kiki', 'e10adc3949ba59abbe56e057f20f883e', 'ki@gmail.com', '', '2938', 'Perempuan', '', '', '', ''),
(22, 'burhanudin wakhid', 'e10adc3949ba59abbe56e057f20f883e', 'burhankeren@gmail.com', 'e56971fab761b44f4a5bef18d5e1a108', '08214582947', 'Perempuan', 'SMA', 'Jebres Surakarta', 'SMAN 1 Surakarta', ''),
(25, 'Rifka Kusuma Ardani', '978f9c8fa30137baf3b46e82f1e91e08', 'kaka@gmail.com', 'a0c35a7320d71a3e4892aebfd3e47656', '1223', 'Perempuan', 'sma', 'bekonang', 'sma n 3 sukoharjo', ''),
(27, 'Dinenda', 'e10adc3949ba59abbe56e057f20f883e', 'nenda255@gmail.com', '2c2f20a442dd2c0d428621b12f610527', '085726647183', 'Perempuan', 'sma', 'sragen', 'sma467', ''),
(31, 'fadli', 'e10adc3949ba59abbe56e057f20f883e', 'fadli190@gmail.com', '0a539e9da09b0ab58fd282832c07b6ab', '091736261', 'Perempuan', '', '', '', ''),
(35, 'valeria guntur', '7902b7c0be5cedb6fbada8d4c7fc42a0', 'valeri@gmail.com', '954c44230efb1f43d740b00b13ebc29a', '085647368677', 'perempuan', 'sma', 'mojogedang', 'sma n 1 surakarta', ''),
(36, 'Winda Etika', 'e10adc3949ba59abbe56e057f20f883e', 'winda@gmail.com', 'a9e38a0225e67e4658f021a87306ac7a', '082138972462', 'Perempuan', 'SD', 'Karanganyar', 'SD N 02 Sringin', ''),
(37, 'Muhammad Huda', 'e10adc3949ba59abbe56e057f20f883e', 'huda@gmail.com', '040eb9dc2cc1dd685a6d82270f255dd2', '082138972462', 'Laki Laki', 'SD', 'Surakarta', 'SD N 2 Surakarta', ''),
(38, 'irkham nur', 'e10adc3949ba59abbe56e057f20f883e', 'irkham@gmail.com', '4152591d796e58fe5deef66c827e6e6b', '0821493738', 'laki laki', 'SD', 'Jebres', 'Sd N 1 Jebres', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `provinsi`
--

CREATE TABLE `provinsi` (
  `id_provinsi` int(11) NOT NULL,
  `nama_provinsi` varchar(50) NOT NULL,
  `id_tentor` int(11) DEFAULT NULL,
  `id_kabupaten` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `provinsi`
--

INSERT INTO `provinsi` (`id_provinsi`, `nama_provinsi`, `id_tentor`, `id_kabupaten`) VALUES
(1, 'jateng', 2, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tentor`
--

CREATE TABLE `tentor` (
  `id_tentor` int(11) NOT NULL,
  `nama_tentor` varchar(50) NOT NULL,
  `status` enum('Aktif','Belum Aktif','','') NOT NULL DEFAULT 'Belum Aktif',
  `no_ktp` bigint(255) NOT NULL,
  `no_telp` bigint(255) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `pendidikan` varchar(2000) NOT NULL,
  `pengalaman` varchar(2000) NOT NULL,
  `prestasi` varchar(2000) NOT NULL,
  `pekerjaan` varchar(2000) NOT NULL,
  `alamat_tentor` varchar(2000) NOT NULL,
  `deskripsi` varchar(2000) NOT NULL,
  `foto_ktp` varchar(50) NOT NULL,
  `foto_ijazah` varchar(50) NOT NULL,
  `foto_profil` varchar(150) NOT NULL,
  `id_provinsi` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tentor`
--

INSERT INTO `tentor` (`id_tentor`, `nama_tentor`, `status`, `no_ktp`, `no_telp`, `email`, `password`, `pendidikan`, `pengalaman`, `prestasi`, `pekerjaan`, `alamat_tentor`, `deskripsi`, `foto_ktp`, `foto_ijazah`, `foto_profil`, `id_provinsi`) VALUES
(1, 'ridwan', 'Aktif', 987643212, 82138972462, 'ridwan@gmail.com', '0eaed533c2f81dc9990c9e35cb27c89c', 'D3 TI UNS', 'Asdos', '1. Lulus dengan IPK tertinggi seangkatan program studi.', 'Guru', 'laweyan', 'Saya adalah seorang pengajar yang humble dan dapat mengajar dengan baik dan keren', 'profile-picture.jpg', 'tb_slide_2.jpg', 'profile-picture.jpg', 1),
(2, 'Anggit', 'Aktif', 3312120205970002, 82138972462, 'anggitnendyo9@gmail.com', '0eaed533c2f81dc9990c9e35cb27c89c', 'S1-sistem informasi', 'Asdos', '1. Lulus dengan IPK tertinggi seangkatan program studi.', 'Mahasiswa, Guru', 'wonogiri', 'Saya adalah seorang pengajar yang humble dan dapat mengajar dengan baik dan keren', 'Screenshot_6.png', 'Screenshot_4.png', 'IMG-20181214-WA0000.jpg', 1),
(4, 'Firman', 'Aktif', 3312120212980001, 82138972462, 'firman@gmail.com', '0eaed533c2f81dc9990c9e35cb27c89c', 'D3 Teknik Informatika', 'D3 teknik informatika', '1. Lulus dengan IPK tertinggi seangkatan program studi.', 'Mahasiswa', 'mojolaban', 'Saya adalah seorang pengajar yang humble dan dapat mengajar dengn baik dan keren', '984a68fc9899fccfbac17c9a8ce5c8be-212x300.png', '984a68fc9899fccfbac17c9a8ce5c8be-212x300.png', 'Ananta-Wiyogo.jpg', 1),
(6, 'nendyo', 'Aktif', 3312122708980001, 82138972462, 'anggitnendyo8@gmail.com', '0eaed533c2f81dc9990c9e35cb27c89c', 'D3 Teknik Informatika', 'magang di Dilo Solo', 'Juara Cyber Jawara', 'Programmer', 'laweyan', 'Saya adalah seorang pengajar yang humble dan dapat mengajar dengan baik dan keren', 'Screenshot_1.png', 'Screenshot_12.png', 'Screenshot_6.png', NULL),
(7, 'Fitri Uswatun', 'Aktif', 3312122603970001, 82138972462, 'fitri_uswatun@gmail.com', '0eaed533c2f81dc9990c9e35cb27c89c', 'S1 Bimbingan dan Konseling, Universitas Sebelas Maret', 'Pembimbing (Guru BK) di SMP Negeri 3 Kebakkramat (selama bulan Agustus 2016 - Januari 2017) dalam Pelaksanaan Praktek Lapangan (PPL) yang diselenggarakan oleh Fakultas Keguruan dan Ilmu Pendidikan Universitas Sebelas Maret', '1. Mahasiswa Penerima Beasiswa PPA pada tahun 20152. Peringkat 10 besar lomba mading tiga dimensi untuk SMA/MA yang diselenggarakan oleh IAIN Surakarta', 'Mahasiswa', 'polokarto', 'Saya lulusan Madrasah Aliyah Negeri (MAN) dengan jurusan Ilmu Pengetahuan Alam (IPA), sehingga selain ilmu agama saya juga memiliki pengetahuan dalam bidang mata pelajaran sains. Selain itu, di jurusan bimbngan dan konseling kami diajarkan tentang perkembangan anak (SD, SMP, SMA), mempelajari ilmu psikologi, dan praktikum konseling yang berfunsi untuk menyelesaikan masalah. Sehingga selain menjadi tentor, saya bisa menjadi teman dalam mendiskusikan permasalahan.', 'ktp.jpg', 'ijazah.png', 'Fitri.png', NULL),
(8, 'Bagus Eko', 'Aktif', 3312122603950001, 82138972462, 'bagus_eko@gmail.com', '0eaed533c2f81dc9990c9e35cb27c89c', 's1 pendidikan matematika', '1. Mengajar bimbingan belajar2. Mengajar ekstrakurikuler musik', '-', 'mahasiswa', 'klaten', 'Nama saya Bagus Eko Nugroho, saya lulus S1 pendidikan matematika dari UNP Kediri pada tahun 2016 dan saat ini sedang melanjutkan kuliah S2 di UNS Surakarta. Pekerjaan sampingan  saya adalah sebagai guru bimbel dan guru ekstra musik. Saya pernah kursus bermain gitar selama 2 tahun, dan sering mewakili sekolah maupun kampus dalam beberapa event musik. saya juga hobi berolahraga, khususnya bulutangkis. Saya pernah menjadi juara 1 lomba bulutangkis tingkat desa.', 'ktp.jpg', 'ijazah.png', 'eko.png', NULL),
(9, 'Dinasti Afsari', 'Aktif', 3312122104970001, 82138972462, 'dinasti_afsari@gmail.com', '0eaed533c2f81dc9990c9e35cb27c89c', 'S1 Pendidikan Guru Sekolah Dasar UNS', 'Mengajar di KumonLes Privat simply fstLes privat pribadi', '-', 'Mahasiswa', 'Surakarta, Kecamatan Jebres', 'Supel dan ramah dengan anak-anak.menyukai mata pelajaran terutama matematika.siap untuk memberikan  metode yang lebih mudah untuk belajar anak.belajar santai dan menyenangkan', 'ktp.jpg', 'ijazah.png', 'dinasti.png', NULL),
(10, 'Cristia Andi', 'Aktif', 3312122602960001, 82138972462, 'cristia_andi@gmail.com', '0eaed533c2f81dc9990c9e35cb27c89c', 'akultas Keguruan dan Ilmu Pendidikan Program Studi Pendidikan Akuntansi', 'Menjadi tutor les di Sains Club dan menjadi tutor les dirumah', 'Juara 3 lomba akuntansi SMK se-Surakarta', 'Mahasiswa', 'Kota Surakarta, Kecamatan Jebres', 'Saya dari kecil memiliki keinginan untuk menjadi guru, sehingga saya diusahakan memiliki pandangan mengenai kemampuan anak dan cara untuk meningkatkannta dan saat kuliah saya juga menjadi guru les di Sains Club', 'ktp.jpg', 'ijazah.png', 'cristia_adi.png', NULL),
(11, 'Mikhael Jason', 'Aktif', 3312121003960002, 82138972462, 'mikhael_jason@gmail.com', '0eaed533c2f81dc9990c9e35cb27c89c', 'Mahasiswa Prodi S1 Psikologi, Fakultas Kedokteran, UNS.', 'Berpengalaman mengajar privat anak SD dan SMP.', 'Juara umum SD, peraih nilai 100 UN Matematika SMP.', 'Mahasiswa', 'Kota Surakarta, Kecamatan Jebres', 'Serius tapi santai, tegas tapi humoris, dan yang terpenting fleksibel.Karena cara belajar tiap orang berbeda-beda, maka tentor yang baik adalah yang dapat menyesuaikan kebutuhan dan kelebihan siswanya.', 'ktp.jpg', 'ijazah.png', 'mikhael.png', NULL),
(12, 'Ranita Firdausa', 'Aktif', 3312122107980001, 82138972462, 'ranita_firdausa@gmail.com', '0eaed533c2f81dc9990c9e35cb27c89c', 'S1 Fisika UNS', 'Asisten Dosen', '-', 'Mahasiswa', 'Jebres, Surakarta', 'Saya adalah mahasiswa S1 Fisika UNS.', 'ktp.jpg', 'ijazah.png', 'Ranita_Firdausa.png', NULL),
(13, 'Aziz Azindani', 'Aktif', 3312120103950002, 82138972462, 'aziz_azidani@gmail.com', '0eaed533c2f81dc9990c9e35cb27c89c', 's1 pendidikan matematika unss1 teknik informatka stmik sinar nusantara', '- freelance bimbel sosial science (SS) karanganyar- freelance tentor- guru smk bhakti praja kabupten tegal 2017- tentor bpun (bimbingan pasca ujian nasional) karanganyar 2018', '- Ranking 1 Paralel SMP 1 Slawi tahun 2008- Harapan 1 lomba olimpiade fisika tingkat kabupaten- ketua osis smp 1 slawi- ketua osis sma 3 semarang- paskibraka kota semarang 2008- kepala dewan santri pesantren mahasiswa Arroyan Surakarta', 'Mahasiswa', 'Jebres, Surakarta', 'pembelajar baik', 'ktp.jpg', 'ijazah.png', 'aziz.png', NULL),
(14, 'Ade Kurnia', 'Aktif', 3312122603950001, 82138972462, 'ade_kurnia@gmail.com', '0eaed533c2f81dc9990c9e35cb27c89c', 'S1 Pendidikan Bahasa Inggris', 'Guru magang SMA Batik 2 Surakarta 2017', 'Juara Speech Contest di Confident Show Kampung Inggris Kediri 2018, Juara 1 teater tingkat SMA se-Jawa Tengah 2012 FLS2N Jateng, Juara 1 teater tingkat Jawa dan Bali 2013, Juara 1 Seni Kriya Tingkat SMP Kota Salatiga 2010', 'Mahasiswa', 'Jebres Surakarta', 'I am quite fun, tidak mengekang, mengikuti peserta didik tapi tetap mengejar target materi, belajar sesuai mood siswa', 'ktp.jpg', 'ijazah.png', 'Ade_Kurnia.png', NULL),
(15, 'elwas berdha', 'Aktif', 3312122603980002, 82138972462, 'elwas_berdha@gmail.com', '0eaed533c2f81dc9990c9e35cb27c89c', 'S1 Bimbingan dan Konseling Universitas Sebelas Maret', 'Les Private', '-', 'Mahasiswa', 'Jebres, Surakarta', '-', 'ktp_elwas.jpg', 'ijazah_elwas.png', 'elwas.png', NULL),
(16, 'arum radhifah khori saputri', 'Aktif', 3312120205980002, 82138972462, 'arum_radhifah@gmail.com', '0eaed533c2f81dc9990c9e35cb27c89c', 'S1-sistem informasi\r\n', 'saya pernah menjadi guru komputer di Sd internasional islam Al-abidin\r\nsaya pernah menjadi admin olshop\r\nsaya pernah menjadi supir pribadi dan luar kota\r\nsaya pernah menjadi spg\r\nsaya pernah mengajar ngaji di 2 desa', '-', 'Mahasiswa', 'Sukoharjo', 'saya orangnya supel, \r\nmodel belajar mengikuti alur anak tetapi masuk dalam materi yang di sampaikan', '', '', '', NULL),
(17, 'Hanna budi pertiwi', 'Aktif', 3312122104950002, 82138972462, 'hanna_budi@gmail.com', '0eaed533c2f81dc9990c9e35cb27c89c', 'S1PGSD Universitas sanata dharma Yogyakarta', 'Mrngajar selama 6 bulan di SD NEGERI BABARSARI berakreditas A Yogyakarta\r\n', '-', 'Guru', 'mojogedang', 'Saya lebih senang membimbing siswa dengan cara menyenangkan. Seperti menyelipkan materi di gemes yg sy buat sendiri', '', '', '', NULL),
(18, 'Agustina Dyah Pratiwi', 'Aktif', 3312122603970002, 82138972462, 'agustina_dyah@gmail.com', '0eaed533c2f81dc9990c9e35cb27c89c', 'S1 Pendidikan TIK', '1. Asisten Seminar Dosen SMA Girimarto\r\n2. Guru Magang RPL SMK 5 Surakarta\r\n3. Guru SMK Batik 2 Multimedia\r\n4. Guru Les Privat pelajaran wajib', '1. Lulus dengan IPK tertinggi seangkatan program studi.', 'Guru', 'manahan', 'Berpengalaman untuk mengajar les privat. ', '', '', '', NULL),
(19, 'paijo', 'Aktif', 3312122205980002, 82138972462, 'paijo@gmail.com', '44529fdc8afb86d58c6c02cd00c02e43', 'D3 Teknik Informatika', 'magang di Dilo Solo', 'juara lomba cy ber', 'mahasiswa', 'mojolaban', 'saya adalah guru', 'Screenshot_6.png', 'DSC_0028.JPG', 'IMG-20181214-WA0001.jpg', NULL),
(20, 'yulita', 'Belum Aktif', 3311353472, 82138972462, 'yulita@gmail.com', '0eaed533c2f81dc9990c9e35cb27c89c', '', '', '', '', '', '', '', '', '', NULL),
(21, 'jujur', 'Aktif', 3312120305960002, 82138972462, 'jujur@gmail.com', '0eaed533c2f81dc9990c9e35cb27c89c', 'D3 Teknik Informatika', 'asisten dosen', 'mawapres tahun 2016', 'mahasiswa', 'boyolali', 'Saya adalah seorang pengajar yang humble dan dapat mengajar dengan baik dan keren', 'Screenshot_2.png', 'Screenshot_11.png', 'images.jpg', NULL),
(22, 'putri hujan', 'Aktif', 331156493, 82138972462, 'putri@gmail.com', '0eaed533c2f81dc9990c9e35cb27c89c', 'S1 Pendidikan Matematika', 'asisten dosen', 'mawapres tahun 2016', 'mahasiswa', 'bekonang', 'Saya adalah seorang pengajar yang humble dan dapat mengajar dengan baik', 'smp.png', 'DSC_0028.JPG', '41545257_751928685144738_8349263642847346688_n.jpg', NULL),
(23, 'kania ajeng', 'Aktif', 33114567243, 82138972462, 'kania@gmail.com', '0eaed533c2f81dc9990c9e35cb27c89c', 'S1 Pendidikan Matematika', 'asisten dosen', 'Juara 1 Lomba Olimpiade matematika', 'Mahasiswa', 'laweyan', 'Saya adalah seorang pengajar yang humble dan dapat mengajar dengan baik', 'Screenshot_11.png', 'tugas_4_jarkom.png', 'WhatsApp_Image_2018-12-14_at_09_19_11.jpeg', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `waktu`
--

CREATE TABLE `waktu` (
  `id_waktu` int(11) NOT NULL,
  `hari` varchar(11) NOT NULL,
  `sesi` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `bank`
--
ALTER TABLE `bank`
  ADD PRIMARY KEY (`id_bank`),
  ADD KEY `id_tentor` (`id_tentor`);

--
-- Indeks untuk tabel `jadwal`
--
ALTER TABLE `jadwal`
  ADD PRIMARY KEY (`id_jadwal`),
  ADD KEY `id_tentor` (`tanggal`),
  ADD KEY `id_waktu` (`id_waktu`),
  ADD KEY `id_kursus` (`id_kursus`);

--
-- Indeks untuk tabel `kabupaten`
--
ALTER TABLE `kabupaten`
  ADD PRIMARY KEY (`id_kabupaten`),
  ADD KEY `id_provinsi` (`id_kecamatan`);

--
-- Indeks untuk tabel `kecamatan`
--
ALTER TABLE `kecamatan`
  ADD PRIMARY KEY (`id_kecamatan`);

--
-- Indeks untuk tabel `kursus`
--
ALTER TABLE `kursus`
  ADD PRIMARY KEY (`id_kursus`),
  ADD KEY `id_tentor` (`id_mengajar`),
  ADD KEY `Id_murid` (`Id_murid`);

--
-- Indeks untuk tabel `mapel`
--
ALTER TABLE `mapel`
  ADD PRIMARY KEY (`id_mapel`);

--
-- Indeks untuk tabel `mengajar`
--
ALTER TABLE `mengajar`
  ADD PRIMARY KEY (`id_mengajar`),
  ADD KEY `id_mapel` (`id_mapel`),
  ADD KEY `id_tentor` (`id_tentor`);

--
-- Indeks untuk tabel `murid`
--
ALTER TABLE `murid`
  ADD PRIMARY KEY (`id_murid`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indeks untuk tabel `provinsi`
--
ALTER TABLE `provinsi`
  ADD PRIMARY KEY (`id_provinsi`),
  ADD KEY `id_tentor` (`id_tentor`),
  ADD KEY `id_kabupaten` (`id_kabupaten`);

--
-- Indeks untuk tabel `tentor`
--
ALTER TABLE `tentor`
  ADD PRIMARY KEY (`id_tentor`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `id_provinsi` (`id_provinsi`);

--
-- Indeks untuk tabel `waktu`
--
ALTER TABLE `waktu`
  ADD PRIMARY KEY (`id_waktu`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `bank`
--
ALTER TABLE `bank`
  MODIFY `id_bank` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `kabupaten`
--
ALTER TABLE `kabupaten`
  MODIFY `id_kabupaten` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `kecamatan`
--
ALTER TABLE `kecamatan`
  MODIFY `id_kecamatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `kursus`
--
ALTER TABLE `kursus`
  MODIFY `id_kursus` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `mapel`
--
ALTER TABLE `mapel`
  MODIFY `id_mapel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT untuk tabel `mengajar`
--
ALTER TABLE `mengajar`
  MODIFY `id_mengajar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT untuk tabel `murid`
--
ALTER TABLE `murid`
  MODIFY `id_murid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT untuk tabel `provinsi`
--
ALTER TABLE `provinsi`
  MODIFY `id_provinsi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tentor`
--
ALTER TABLE `tentor`
  MODIFY `id_tentor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT untuk tabel `waktu`
--
ALTER TABLE `waktu`
  MODIFY `id_waktu` int(11) NOT NULL AUTO_INCREMENT;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `bank`
--
ALTER TABLE `bank`
  ADD CONSTRAINT `bank_ibfk_1` FOREIGN KEY (`id_tentor`) REFERENCES `tentor` (`id_tentor`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `jadwal`
--
ALTER TABLE `jadwal`
  ADD CONSTRAINT `jadwal_ibfk_1` FOREIGN KEY (`id_waktu`) REFERENCES `waktu` (`id_waktu`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `jadwal_ibfk_2` FOREIGN KEY (`id_kursus`) REFERENCES `kursus` (`id_kursus`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `kabupaten`
--
ALTER TABLE `kabupaten`
  ADD CONSTRAINT `kabupaten_ibfk_1` FOREIGN KEY (`id_kecamatan`) REFERENCES `kecamatan` (`id_kecamatan`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `kursus`
--
ALTER TABLE `kursus`
  ADD CONSTRAINT `kursus_ibfk_1` FOREIGN KEY (`Id_murid`) REFERENCES `murid` (`id_murid`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `kursus_ibfk_2` FOREIGN KEY (`id_mengajar`) REFERENCES `mengajar` (`id_mengajar`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `mengajar`
--
ALTER TABLE `mengajar`
  ADD CONSTRAINT `mengajar_ibfk_1` FOREIGN KEY (`id_mapel`) REFERENCES `mapel` (`id_mapel`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `mengajar_ibfk_2` FOREIGN KEY (`id_tentor`) REFERENCES `tentor` (`id_tentor`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `provinsi`
--
ALTER TABLE `provinsi`
  ADD CONSTRAINT `provinsi_ibfk_1` FOREIGN KEY (`id_kabupaten`) REFERENCES `kabupaten` (`id_kabupaten`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tentor`
--
ALTER TABLE `tentor`
  ADD CONSTRAINT `tentor_ibfk_1` FOREIGN KEY (`id_provinsi`) REFERENCES `provinsi` (`id_provinsi`) ON DELETE SET NULL ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
