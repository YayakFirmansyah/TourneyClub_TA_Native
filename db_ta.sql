-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 31 Okt 2022 pada 05.51
-- Versi server: 10.4.20-MariaDB
-- Versi PHP: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_ta`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_category`
--

CREATE TABLE `tb_category` (
  `id_category` int(11) NOT NULL,
  `name_category` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_category`
--

INSERT INTO `tb_category` (`id_category`, `name_category`) VALUES
(1, 'PlayerUnknown Battlegrounds'),
(2, 'PlayerUnknown Battlegrounds Mobile'),
(3, 'Counter-Strike Global Offensive'),
(4, 'Mobile Legends'),
(5, 'Free Fire'),
(6, 'Dota 2');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_comment`
--

CREATE TABLE `tb_comment` (
  `id_comment` int(11) NOT NULL,
  `body` text NOT NULL,
  `email` varchar(100) NOT NULL,
  `id_tournament` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_comment`
--

INSERT INTO `tb_comment` (`id_comment`, `body`, `email`, `id_tournament`) VALUES
(44, 'Test', 'yayak@gmail.com', 94),
(45, 'test', 'admin@admin.com', 87);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_commentnews`
--

CREATE TABLE `tb_commentnews` (
  `id_comment` int(11) NOT NULL,
  `body` text NOT NULL,
  `email` varchar(128) NOT NULL,
  `id_news` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_commentnews`
--

INSERT INTO `tb_commentnews` (`id_comment`, `body`, `email`, `id_news`) VALUES
(1, 'sadsadasd', 'user@user.com', 5),
(2, 'asdsad', 'admin@admin.com', 5),
(3, 'Aku iki komen\r\n', 'admin@admin.com', 8),
(4, 'Haloo', 'yayak@gmail.com', 16),
(5, 'anjing\r\n', '', 13);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_news`
--

CREATE TABLE `tb_news` (
  `id_news` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `subtitle` text NOT NULL,
  `body` text NOT NULL,
  `date_upload` datetime NOT NULL DEFAULT current_timestamp(),
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_news`
--

INSERT INTO `tb_news` (`id_news`, `title`, `subtitle`, `body`, `date_upload`, `image`) VALUES
(10, 'Detail ESL One Hamburg 2018, DreamLeague Season 10, dan The Kuala Lumpur Major', 'Peserta untuk 3 turnamen terdekat saat ini yaitu ESL One Hamburg 2018, DreamLeague Season 10, dan The Kuala Lumpur Major sudah lengkap dan berikut ini daftar lengkapnya!!', '1. ESL One Hamburg 2018\r\nTurnamen pertama setelah ajang The International 8 adalah ESL One Hamburg 2018 yang sayangnya bukan menjadi bagian dari musim kompetisi Dota Pro Circuit 2018-2019. Namun meskipun begitu, turnamen ini tetap diikuti oleh tim-tim besar seperti Virtus.Pro, Evil Geniuses, Team Secret, Mineski, Ninjas in Pyjamas (OpTic Gaming), dan Forward Gaming (VGJ.Storm).\r\n\r\nESL One Hamburg 2018 akan memiliki total hadiah sebesar 300 Ribu Dollar dan akan dimulai pada tanggal 23 - 28 Oktober 2018 di Barclaycard Arena, Hamburg - Jerman. Dengan total 12 peserta yang terdiri dari 8 tim dari undangan langsung dan 4 tim dari kualifikasi, turnamen ini akan menggunakan format Group terlebih dahulu dimana hanya akan ada 8 tim yang akan lolos ke fase Playoffs.\r\n\r\n*Untuk kualifikasi di regional China, terdapat kendala pada pertandingan antara Team Aster dengan Newbee dimana pada pertandingan ke-4 ternyata Team Aster melakukan pergantian pemain dan setelah ditindak-lanjuti oleh pihak panitia akhirnya Team Aster dan Newbee sepakat untuk melakukan Rematch pada tanggal 5 Oktober 2018.\r\n\r\n2. DreamLeague Season 10\r\nTurnamen Minor pembuka musim kompetisi Dota Pro Circuit 2018-2019 adalah DreamLeague Season 10 dimana sesuai dengan peraturan yang baru, kini tidak ada lagi tim yang mendapatkan undangan langsung sehingga seluruh tim harus melewati kualifikasi terlebih dahulu. Untuk turnamen Minor kali ini terdapat 2 regional yang mendapatkan 2 slot yaitu North America dan Europe, sisanya hanya akan mendapatkan 1 slot sehingga total peserta akan menjadi 8 tim.\r\n\r\nTotal hadiah yang akan diberikan pada turnamen ini adalah sebesar 300 Ribu Dollar dan 500 Pro Circuit Points yang terbagi untuk seluruh tim yang berhasil masuk ke dalam turnamen ini sesuai dengan hasil akhir turnamen nantinya. Selain itu tim yang berhasil memenangkan DreamLeague Season 10 akan mendapatkan 1 tempat terakhir di The Kuala Lumpur Major. Ajang DreamLeague Season 10 akan dimulai pada tanggal 29 Oktober 2018 - 4 November 2018 di Monster Energy DreamHack Studios, Stockholm - Swedia.\r\n\r\nUntuk pertama kalinya 2 pemain asal Indonesia yaitu Muhammad \"inYourdreaM\" Rizky dan Kenny \"Xepher\" Deo akan bermain di Dota Pro Circuit 2018-2019 setelah tim Tigers berhasil memenangkan kualifikasi regional SEA. Jika mereka berhasil memenangkan turnamen ini, maka mereka berkesempatan untuk bisa bermain di turnamen Major.\r\n\r\n3. The Kuala Lumpur Major\r\nThe Kuala Lumpur Major akan menjadi pasangan untuk turnamen Minor DreamLeague Season 10 dan akan menjadi turnamen Major pertama di regional South East Asia. Pada turnamen Major kali ini akan ada 16 tim yang berpartisipasi dengan pembagian 3 slot untuk Europe, 2 slot untuk CIS, 3 slot untuk China, 2 slot untuk SEA, 3 slot untuk North America, 2 slot dari South America, dan 1 slot dari tim yang berhasil memenangkan turnamen DreamLeague Season 10.\r\n\r\nTotal hadiah turnamen The Kuala Lumpur Major adalah sebesar 1 Juta Dollar atau sekitar 15 Miliar Rupiah dengan 15.000 Pro Circuit Point yang akan dibagi kepada seluruh tim peserta sesuai dengan hasil akhir turnamen nantinya. Turnamen ini akan dimulai pada tanggal 9 - 18 November 2018 di Axiata Arena, Kuala Lumpur - Malaysia dengan fase Group terlebih dahulu yang kemudian dilanjutkan dengan fase Playoffs.\r\n\r\nTampaknya masuk ke dalam turnamen Major akan menjadi kunci bagi tim untuk bisa mengamankan undangan langsung The International 9 yang kini menjadi 12 slot. Dengan perubahan dimana seluruh tim yang berhasil masuk ke dalam turnamen akan mendapat Pro Circuit Points maka berpartisipasi dalam setiap turnamen pada musim kompetisi Dota Pro Circuit 2018-2019 akan menjadi sangat krusial.\r\n\r\nKini kita akan segera melihat tim-tim mana yang akan mendapatkan keunggulan terlebih dahulu dengan menjadi juara di turnamen The Kuala Lumpur Major.', '2019-10-22 12:58:33', 'news1.jpg'),
(11, 'Red Bull Akan Adakan Turnamen Dota 2 Dengan Custom Game Mode', 'Untuk mengisi waktu yang kosong, Red Bull akan mengadakan sebuah kompetisi Dota 2 yang unik dengan sebuah Custom Game Mode dimana pemain bisa melakukan pergantian Hero.', 'Red Bull akan mengadakan turnamen Dota 2 yang diikuti oleh 4 tim profesional pada tanggal 19 - 20 Oktober 2018 di London, Inggris. Namun berbeda dari turnamen Dota 2 pada biasanya, turnamen ini akan menggunakan Custom Game Mode dimana pada saat bertanding tim akan dapat memilih 3 Hero yang bisa diganti di tengah-tengah pertandingan.\r\n\r\nSetiap pemain akan dapat mengganti Hero mereka dengan 3 Hero cadangan yang akan memiliki Cooldown selama 3 menit setelah digunakan. Hero yang diganti akan memiliki Level dan Item yang sama dengan Hero yang diganti, namun dengan pergantian ini maka dapat dipastikan akan terjadi perubahan Gameplay yang signifikan di tengah-tengah pertempuran.\r\n\r\nTurnamen ini hanya akan diikuti oleh 4 tim dan saat ini baru ada 2 tim yang dipastikan akan ikut serta yaitu Mineski dan paiN Gaming. Untuk 2 tim lainnya akan segera menyusul yang mungkin akan bersamaan dengan penjelasan format turnamen serta total hadiah yang diperebutkan. Terakhir turnamen dengan Custom Game Mode adalah turnamen Midas Mode yang diselenggarakan oleh Moonduck dan turnamen tersebut terbilang cukup sukses dengan berhasil mendapatkan penonton yang banyak.\r\n\r\nBagaimana menurut Anda? Apakah Anda tertarik untuk menonton pertandingan Red Bull Guardians 2018 dengan Custom Game Mode?', '2019-10-22 13:01:08', 'news2.jpg'),
(13, 'Tim Ninjas in Pyjamas Berhasil Keluar Sebagai Juara Di Ajang GG.Bet Invitational', 'Tim Dota 2 Ninjas in Pyjamas yang baru saja mengambil alih Roster dari OpTic Gaming berhasil mendapatkan mendapatkan gelar juara pertama mereka di ajang GG.Bet Invitational.', 'Vakum selama hampir 1 tahun dari dunia Dota 2, kini akhirnya tim E-Sports asal Swedia yaitu Ninjas in Pyjamas kembali dengan mengambil alih Roster dari OpTic Gaming yang dikepalai oleh Peter \"ppd\" Dager. Tim OpTic Gaming yang berhasil mencapai posisi 8 besar di ajang The International 8 akhirnya dibubarkan oleh manajemen dan membuat \"ppd\" dan kawan-kawan mencari tim baru.\r\n\r\nTapi ada sedikit perubahan pada tim \"ppd\" yaitu dengan mengganti Per \"Pajkatt\" Olsson Lille, Quinn \"CC&C\" Callahan, dan Ludwig \"zai\" Wahlberg dengan Marcus \"Ace\" Hoelgaard dam Adrian \"Fata\" Trinks dari Team Secret serta\r\nMartin \"Saksa\" Sazdov. Perubahan ini tampaknya memberikan dampak besar bagi tim Ninjas in Pyjamas karena mereka kini telah mengamankan posisi di ajang The Kuala Lumpur Major serta berhasil menjadi juara di ajang GG.Bet Invitational.', '2019-10-22 13:04:45', 'news3.jpg'),
(14, 'Tim BOOM ID Melakukan \"Throw\" Terbesar Sepanjang Sejarah Turnamen Dota 2', 'Berhasil masuk ke dalam turnamen The Bucharest Minor, Tim Dota 2 asal Indonesia yaitu BOOM ID melakukan \"Throw\" pada game pertama mereka melawan Team Team.', 'Di partai hidup mati antara tim BOOM ID dengan Team Team pada Lower Bracket, terjadi sebuah momen yang cukup konyol dan hampir membuat Caster terheran-heran karena Randy Muhammad \"Dreamocel\" Sapoetra melakukan kesalahan besar ketika melakukan GG Called di saat mereka bisa memenangkan pertandingan.\r\n\r\nHal ini terjadi ketika terjadi War terakhir di Base BOOM ID yang kemudian berhasil dimenangkan oleh Team Team. Namun Creep dari tim BOOM ID juga berhasil masuk ke dalam menghajar Ancient dari Team Team dan ketika HP dari Ancient tim musuh sudah mau habis, \"Dreamocel\" justru melakukan GG Called dan membuat semua Caster terdiam dan terheran-heran.\r\n\r\nPara panelis juga merasa bahwa hal ini merupakan The Biggest Throw in History of Dota 2 dan tentu saja di dalam partai hidup mati, kesalahan tidak boleh dilakukan apalagi kesalahan konyol seperti ini. Pertandingan menggunakan format BO3 dan sebenarnya tim BOOM ID berhasil memenangkan pertandingan ke-2 yang berarti jika mereka tidak melakukan Throw tersebut maka mereka berhasil lolos ke fase berikutnya dan menghadapi Keen Gaming.\r\n\r\nDengan begitu mereka setidaknya bisa mengamankan posisi 5-6 dengan uang hadiah sebesar $15.000,- atau sekitar 211 Juta Rupiah dan 40 DPC Point. Kini tim BOOM ID harus puas dengan posisi 7-8 dengan uang hadiah sebsar $7.500,- atau sekitar 106 Juta Rupiah dan 20 DPC Point. Semoga tim BOOM ID bisa belajar dari pengalaman berharga ini dan mampu menembus turnamen Dota Pro Circuit berikutnya!', '2019-10-22 13:11:55', 'news4.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_payment`
--

CREATE TABLE `tb_payment` (
  `id_payment` int(11) NOT NULL,
  `id_regist` int(11) NOT NULL,
  `email` varchar(128) NOT NULL,
  `code` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_payment`
--

INSERT INTO `tb_payment` (`id_payment`, `id_regist`, `email`, `code`) VALUES
(6, 24, 'admin@admin.com', '03da5aac'),
(7, 23, 'user@user.com', 'b17d0f5a'),
(8, 23, 'user@user.com', '50774720');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_regist`
--

CREATE TABLE `tb_regist` (
  `id_regist` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_category` int(11) NOT NULL,
  `payment` text NOT NULL,
  `tournament_name` varchar(128) NOT NULL,
  `team_name` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `captain_name` varchar(128) NOT NULL,
  `captain_nick` varchar(128) NOT NULL,
  `phone_number` varchar(128) NOT NULL,
  `member1` varchar(128) NOT NULL,
  `member2` varchar(128) NOT NULL,
  `member3` varchar(128) NOT NULL,
  `member4` varchar(128) NOT NULL,
  `member5` varchar(128) NOT NULL,
  `nick1` varchar(128) NOT NULL,
  `nick2` varchar(128) NOT NULL,
  `nick3` varchar(128) NOT NULL,
  `nick4` varchar(128) NOT NULL,
  `nick5` varchar(128) NOT NULL,
  `date_regist` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_regist`
--

INSERT INTO `tb_regist` (`id_regist`, `id_user`, `id_category`, `payment`, `tournament_name`, `team_name`, `email`, `captain_name`, `captain_nick`, `phone_number`, `member1`, `member2`, `member3`, `member4`, `member5`, `nick1`, `nick2`, `nick3`, `nick4`, `nick5`, `date_regist`) VALUES
(23, 11, 3, '', 'Red Bull Coliseum Season 2', 'Random Squad', 'user@user.com', 'asd', 'sad', '081', 'asdasd', 'asd', 'asd', 'asd', 'asd', 'asd', 'asdasdasd', 'asd', 'asd', 'asdasdas', '2019-10-30 09:01:02'),
(29, 15, 2, '', 'Turnamen PUBG Mobile - NEWB ESPORTS', 'Wind Of Squad', 'admin@admin.com', 'Budi', 'CaptBudi', '08123456', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'aaa', 'a', '2019-11-13 12:36:53'),
(31, 22, 1, '', 'asd', 'das', 'sda@gmail.com', 'asd', 'sad', 'sda', 'asd', 'sad', 'sda', 'sad', 'sad', 'asdasd', 'sad', 'asd', 'asd', 'sad', '2020-11-01 13:50:58');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_tournament`
--

CREATE TABLE `tb_tournament` (
  `id_tournament` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `subtitle` text NOT NULL,
  `body` text NOT NULL,
  `date_upload` date NOT NULL DEFAULT current_timestamp(),
  `date_expired` varchar(128) NOT NULL,
  `id_category` int(11) NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_tournament`
--

INSERT INTO `tb_tournament` (`id_tournament`, `title`, `subtitle`, `body`, `date_upload`, `date_expired`, `id_category`, `image`) VALUES
(104, 'Turnamen PUBG Mobile - PBB SEASON 23', 'Turnamen PUBG Mobile - PBB SEASON 23 dimulai tanggal 17 November 2019 Pendaftaran akan ditutup tanggal 16 November 2019', 'Turnamen PUBG Mobile - PBB SEASON 23\r\n\r\n- Detail Turnamen :\r\nMatch Day : 16 - 17 November 2019\r\nPendaftaran akan ditutup tanggal 15 November 2019\r\nTM tanggal 15 November 2019\r\nBiaya pendaftaran IDR 30.000,- / Slot\r\nVenue : Online\r\nOpen 100 Slot\r\nMulti Slot On\r\nNo Emulator\r\nNo Cheat | No Teaming\r\nSquad Mode\r\nSystem Points\r\nKualifikasi 2 Games : Erangel TPP + Miramar TPP\r\nGrand Final 3 Games : Erangel TPP + Miramar TPP + Vikendi TPP\r\nLive Streaming YouTube Channel \"BangKule\"\r\n\r\n- Hadiah :\r\nJuara 1 : Rp. 750.000,- + E-Sertifikat + Team Profile di Website Info Tourney\r\nJuara 2 : Rp. 500.000,- + E-Sertifikat + Team Profile di Website Info Tourney\r\nJuara 3 : Rp. 250.000,- + E-Sertifikat + Team Profile di Website Info Tourney\r\nJuara 4 - 5 : Free Registrasi Season 24 + E-Sertifikat + Team Profile di Website Info Tourney\r\nMost Kill on Grand Final : Rp. 250.000,-\r\n*Hadiah bisa berubah sesuai dengan jumlah peserta\r\n\r\n- Pendaftaran :\r\nPembayaran melalui Transfer ke :\r\n1. Mandiri : 1770000302494 a/n Rinrin Sri Lestari\r\n2. OVO : 081324466661\r\n*Bukti transfer harap dikirimkan ke Contact Person yang telah tersedia\r\n\r\n- Contact Person :\r\nWA : 081324466661\r\nInstagram : @bangkule\r\n\r\n- Laporan Penipuan Turnamen :\r\nLaporan penipuan turnamen : penipuan@tourneyclub.com', '2019-11-13', '2019-11-16', 2, 'pubgm1.jpg'),
(105, 'Turnamen PUBG Mobile - NEWB ESPORTS', 'Turnamen PUBG Mobile - NEWB ESPORTS dimulai tanggal 22 November 2019 Pendaftaran akan ditutup tanggal 20 November 2019', 'Turnamen PUBG Mobile - NEWB ESPORTS\r\n\r\n- Detail Turnamen :\r\nMatch Day : 22 - 24 November 2019\r\nPendaftaran akan ditutup tanggal 20 November 2019\r\nTM tanggal 21 November 2019, Jam 19.00 WIB\r\nBiaya pendaftaran IDR 25.000,- / Slot\r\nVenue : Online\r\nOpen 100 Slot\r\nMulti Slot On\r\nNo Emulator\r\nNo Cheat | No Teaming\r\nSquad Mode\r\nSystem Points\r\nKualifikasi 2 Games : Erangel TPP + Miramar TPP\r\nGrand Final 3 Games : Erangel TPP + Vikendi TPP + Sanhok TPP\r\n\r\n- Hadiah :\r\nJuara 1 : Rp. 750.000,- + E-Sertifikat + Team Profile di Website Info Tourney\r\nJuara 2 : Rp. 500.000,- + E-Sertifikat + Team Profile di Website Info Tourney\r\nJuara 3 : Rp. 250.000,- + E-Sertifikat + Team Profile di Website Info Tourney\r\n*Hadiah bisa berubah sesuai dengan jumlah peserta\r\n\r\n- Pendaftaran :\r\nPembayaran melalui Transfer ke :\r\n1. BCA : 0881351420 a/n Bryan Christopher\r\n2. OVO : 089696628128 a/n Filia Gracella Filia Gracella\r\n3. Gopay : 081279572101 a/n Filia Gracella\r\n*Bukti transfer harap dikirimkan ke Contact Person yang telah tersedia\r\n\r\n- Contact Person :\r\nWA : 081279572048\r\nInstagram : @newbesport\r\n\r\n- Laporan Penipuan Turnamen :\r\nLaporan penipuan turnamen : penipuan@tourneyclub.com', '2019-11-13', '2019-11-20', 2, 'pubgm2.jpg'),
(106, '2021-10-10', '2021-10-10', '2021-10-10', '2021-08-03', '2021-10-10', 1, ''),
(107, '2021-10-10', '2021-10-10', '2021-10-10', '2021-08-03', '2021-10-10', 1, ''),
(108, '2021-10-10', '2021-10-10', '2021-10-10', '2021-08-03', '2021-10-10', 1, ''),
(109, '2021-10-10', '2021-10-10', '2021-10-10', '2021-08-03', '2021-10-10', 1, ''),
(110, '2021-10-10', '2021-10-10', '2021-10-10', '2021-08-03', '2021-10-10', 1, ''),
(111, '2021-10-10', '2021-10-10', '2021-10-10', '2021-08-03', '2021-10-10', 1, ''),
(112, '2021-10-10', '2021-10-10', '2021-10-10', '2021-08-03', '2021-10-10', 1, ''),
(113, '2021-10-10', '2021-10-10', '2021-10-10', '2021-08-03', '2021-10-10', 1, ''),
(114, '2021-10-10', '2021-10-10', '2021-10-10', '2021-08-03', '2021-10-10', 1, ''),
(115, '2021-10-10', '2021-10-10', '2021-10-10', '2021-08-03', '2021-10-10', 1, ''),
(116, '2021-10-10', '2021-10-10', '2021-10-10', '2021-08-03', '2021-10-10', 1, '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(11) NOT NULL,
  `email` varchar(128) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` varchar(50) NOT NULL,
  `about` text NOT NULL,
  `date_birth` varchar(128) NOT NULL,
  `image` text NOT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `email`, `username`, `password`, `level`, `about`, `date_birth`, `image`, `date_created`) VALUES
(11, 'user@user.com', 'User', 'af95578f47fe47e6d7132bb66e387efe', 'user', '', '', 'Parasite-Eve-Lyrics-Bring-Me-The-Horizon-1-300x300.jpg', '2019-10-08 01:48:04'),
(15, 'admin@admin.com', 'Admin', 'af95578f47fe47e6d7132bb66e387efe', 'admin', 'Aku admin ate lapo oi', '2003-06-28', '2.jpg', '2019-10-08 10:08:06'),
(20, 'budian@gmail.com', 'Bu Dian', 'af95578f47fe47e6d7132bb66e387efe', 'user', '', '', '5.jpg', '2019-11-14 14:36:35'),
(21, 'deadless@gmail.com', 'arya', '82d07a43ccd9ecadb0cedc7f05cc7bd3', 'user', '', '', 'photo_2020-02-25_16-54-56.jpg', '2020-03-18 02:09:20'),
(22, 'user@user.com', 'User', 'af95578f47fe47e6d7132bb66e387efe', 'user', '', '', 'Parasite-Eve-Lyrics-Bring-Me-The-Horizon-1-300x300.jpg', '2020-11-01 13:46:32'),
(23, 'asdasd@gmail.com', 'asdasd', 'dd7dc6e6ea7c49b0dd7ca9c0ad351ce2', 'user', '', '', '', '2020-11-24 20:59:50'),
(24, 'adminku@admin.com', 'Admin', 'ef8febb80b0d87d9276c183a8de5fe75', 'admin', '', '', '', '2021-04-17 02:20:13'),
(25, 'saljukuning@gmail.com', 'nadicika', 'afe3e6f72690da21290166ba8a513db7', 'user', '', '', '', '2022-10-26 13:05:44');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_category`
--
ALTER TABLE `tb_category`
  ADD PRIMARY KEY (`id_category`);

--
-- Indeks untuk tabel `tb_comment`
--
ALTER TABLE `tb_comment`
  ADD PRIMARY KEY (`id_comment`);

--
-- Indeks untuk tabel `tb_commentnews`
--
ALTER TABLE `tb_commentnews`
  ADD PRIMARY KEY (`id_comment`);

--
-- Indeks untuk tabel `tb_news`
--
ALTER TABLE `tb_news`
  ADD PRIMARY KEY (`id_news`);

--
-- Indeks untuk tabel `tb_payment`
--
ALTER TABLE `tb_payment`
  ADD PRIMARY KEY (`id_payment`);

--
-- Indeks untuk tabel `tb_regist`
--
ALTER TABLE `tb_regist`
  ADD PRIMARY KEY (`id_regist`);

--
-- Indeks untuk tabel `tb_tournament`
--
ALTER TABLE `tb_tournament`
  ADD PRIMARY KEY (`id_tournament`);

--
-- Indeks untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_category`
--
ALTER TABLE `tb_category`
  MODIFY `id_category` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `tb_comment`
--
ALTER TABLE `tb_comment`
  MODIFY `id_comment` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT untuk tabel `tb_commentnews`
--
ALTER TABLE `tb_commentnews`
  MODIFY `id_comment` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tb_news`
--
ALTER TABLE `tb_news`
  MODIFY `id_news` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `tb_payment`
--
ALTER TABLE `tb_payment`
  MODIFY `id_payment` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `tb_regist`
--
ALTER TABLE `tb_regist`
  MODIFY `id_regist` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT untuk tabel `tb_tournament`
--
ALTER TABLE `tb_tournament`
  MODIFY `id_tournament` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=117;

--
-- AUTO_INCREMENT untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
