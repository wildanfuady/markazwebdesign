-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 18 Sep 2017 pada 03.37
-- Versi Server: 10.1.10-MariaDB
-- PHP Version: 5.5.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `markazwebdesign`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `m_artikel`
--

CREATE TABLE `m_artikel` (
  `id_artikel` int(7) NOT NULL,
  `judul` varchar(150) NOT NULL,
  `link_judul` varchar(150) NOT NULL,
  `penulis` varchar(150) NOT NULL,
  `kategori_id` varchar(12) NOT NULL,
  `hari` varchar(12) NOT NULL,
  `tgl_post` varchar(12) NOT NULL,
  `jam` varchar(12) NOT NULL,
  `isi` text NOT NULL,
  `gambar` varchar(150) NOT NULL,
  `dibaca` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `m_artikel`
--

INSERT INTO `m_artikel` (`id_artikel`, `judul`, `link_judul`, `penulis`, `kategori_id`, `hari`, `tgl_post`, `jam`, `isi`, `gambar`, `dibaca`) VALUES
(4352764, 'Dalam Dua Pekan, KCB 2 Ditonton 1,5 Juta Penonton', 'dalam-dua-pekan-kcb-2-ditonton-15-juta-penonton', 'Wildan Fuady', '1', 'Sabtu', '2017-07-01', '11:00:19', '<p>Film Ketika Cinta Bertasbih (KCB) 2 diyakini bakal mereguk sukses seperti sekuel pertamanya Sejak diputar perdana tanggal 17 September lalu atau selama 15 hari, film garapan SinemArt telah disaksikan 1,5 juta penonton.</p>\r\n<p>Rekor yang sama juga dialami KCB 1. "Pada pemutaran KCB 1 kami bisa memecah rekor pemutaran film di Indonesia, yaitu mendapat penonton sebanyak 100.000 perhari," ungkap Frans dari SinemArt saat promo film KCB 2 di Royal Plaza, Minggu (4/10).</p>\r\n<p>Pihak SinemArt berharap KCB 2 bisa meraih prestasi minimal sama dengan KCB 1 dengan total 3 juta penonton. Untuk mencapai target tersebut, pihak SinemArt tak henti melakukan serangkaian promo di sejumlah kota di Tanah Air maupun di mancanegara.</p>\r\n<p>"Hari ini (Minggu, 4/10), Kholidi (Kholidi Asadil Alam, pemeran Azzam) dan Oki (Oki Setiana Dewi pemeran Anna) ke Hongkong untuk promo di sana," imbuh Frans. Pekan depan (10-12 Oktober 2009), giliran Meyda Sefira berangkat ke Makau untuk kegiatan yang sama.</p>\r\n<p>Film besutan sutradara Chaerul Umam ini juga dijadwalkan diputar di Aceh pada tanggal 11-12 Oktober mendatang. Menurut Frans, pemutaran KCB 1 di kota yang dikenal dengan sebutan Serambi Mekkah ini ditonton 8.000 orang.</p>\r\n<p>Padahal di kota tersebut sama sekali tidak ada gedung bioskop. Karena itu kru SinemArt terpaksa mengusung peralatan khusus dari Jakarta dan memutar di sebuah gedung khusus selama dua hari dalam tujuh kali show.</p>\r\n<p>Bertutur tentang kesan berperan di KCB 2, Kholidi beberapa waktu lalu mengaku paling terkesan dengan adegan kecelakaan saat membonceng Bu''e (Ninik L Karim). Karena ketika sepeda motornya terjatuh dia harus teriak memanggil ibundanya. "Bu''eee! Wah itu lumayan sulit," ungkap Kholidi.</p>\r\n<p>Adegan lain yang cukup berkesan adalah ketika pria asal Pasuruan ini terkapar di rumah sakit paska kecelakaan yang dia alami. "Ekspresi orang sakitnya kan harus dapat. Terus suaranya juga harus disesuaikan, tidak seperti kita ngomong biasa, jadi agak sedikit tertahan di tenggorokan, powernya tidak full seperti ngomong biasanya," bebernya.</p>\r\n<p>Untuk adegan itu Kholidi yang kini menempuh pendidikan di Universitas Al Azhar, Jakarta melakukan observasi pada beberapa orang yang pernah mengalami kecelakaan. "Aku juga tanya-tanya ke dokter. Ternyata di tempat tidurnya nggak bisa pakai bantal, posisi badannya harus lurus. Terus kalau ada gips di kaki, posisi jalan kita akan seperti apa. Biar nantinya terlihat lebih reel lah adengannya," pungkas Kholidi. (sumber: <a href="http://surya.co.id/">surya.co.id</a>)</p>', '54kcb2.jpg', 98),
(4352765, 'Cristiano Ronaldo Pemain Sepakbola Terbaik 2008', 'cristiano-ronaldo-pemain-sepakbola-terbaik-2008', 'Wildan Fuady', '2', 'Sabtu', '2017-07-01', '17:00:12', '<p>Cristiano Ronaldo akhirnya terpilih sebagai Pemain Terbaik Dunia versi FIFA, mengalahkan Lionel Messi (Barcelona), dan Fernando Torres (Liverpool). Penetapan itu diumumkan di Zurich, Swiss, Senin atau Selasa (13/1) dini hari. Ronaldo menjadi pemain pertama dari Premier League yang menerima penghargaan itu. Sebelumnya, dia juga terpilih sebagai Pemain Terbaik Eropa (Ballon d''Or) dan baru saja dinobatkan sebagai Pemain Terbaik Dunia versi suporter.<br /><br />Pemain Manchester United (MU) asal Portugal itu meraih 935 pemilih dari poling yang disebar ke seluruh dunia. Pemilihnya hanya dibatasi kapten tim dan pelatih. Hasil itu diumumkan oleh pemain legendaris Brasil, Pele.<br /><br />Sementara itu, Lionel Messi berada di tempat kedua. Pemain Barcelona asal Argentina itu meraih 678 suara. Adapun striker Liverpool asal Spanyol, Fernando Torres, berada di tempat ketiga dengan 203 suara.<br /><br />Musim lalu, Ronaldo memang tampil bagus. Dia mencetak 42 gol dan membawa Manchester United merebut gelar Premier League dan Liga Champions.<br /><br />"Ini momen yang sangat indah buatku. Momen spesial dalam hidupku. Aku ingin mengatakan kepada ibu dan saudara perempuanku bahwa kembang api sudah saatnya disulut," kata Ronaldo seusai menerima penghargaan itu. (sumber: detiksport.com)</p>', '92cristianoronaldo.jpg', 46);

-- --------------------------------------------------------

--
-- Struktur dari tabel `m_blok`
--

CREATE TABLE `m_blok` (
  `kode_blok` int(3) NOT NULL,
  `nama_blok` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `m_blok`
--

INSERT INTO `m_blok` (`kode_blok`, `nama_blok`) VALUES
(111, 'Second Menu'),
(112, 'Sosial Media'),
(113, 'Statistik');

-- --------------------------------------------------------

--
-- Struktur dari tabel `m_blok_footer`
--

CREATE TABLE `m_blok_footer` (
  `id_blok_footer` int(1) NOT NULL,
  `blok1` int(3) NOT NULL,
  `nama_blok1` varchar(25) NOT NULL,
  `blok2` int(3) NOT NULL,
  `nama_blok2` varchar(25) NOT NULL,
  `blok3` int(3) NOT NULL,
  `nama_blok3` varchar(25) NOT NULL,
  `blok4` int(3) NOT NULL,
  `nama_blok4` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `m_blok_footer`
--

INSERT INTO `m_blok_footer` (`id_blok_footer`, `blok1`, `nama_blok1`, `blok2`, `nama_blok2`, `blok3`, `nama_blok3`, `blok4`, `nama_blok4`) VALUES
(1, 111, 'Tentang Kami', 111, 'Layanan', 111, 'Sosial Media', 113, 'Pengunjung');

-- --------------------------------------------------------

--
-- Struktur dari tabel `m_hubungi_kami`
--

CREATE TABLE `m_hubungi_kami` (
  `id_hubungi_kami` int(11) NOT NULL,
  `nama` varchar(35) NOT NULL,
  `email` varchar(75) NOT NULL,
  `subjek` varchar(100) NOT NULL,
  `pesan` text NOT NULL,
  `tanggal` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `m_hubungi_kami`
--

INSERT INTO `m_hubungi_kami` (`id_hubungi_kami`, `nama`, `email`, `subjek`, `pesan`, `tanggal`) VALUES
(1, 'Wildan Fuady', 'wildanfuady@gmail.com', 'Tolong', 'Iyaa', '2017-06-23'),
(2, 'Tes', 'tes@tes.com', 'Tes', 'Tes', '2017-06-24');

-- --------------------------------------------------------

--
-- Struktur dari tabel `m_instansi`
--

CREATE TABLE `m_instansi` (
  `id_instansi` int(1) NOT NULL,
  `nama_instansi` varchar(75) NOT NULL,
  `tagline_instansi` varchar(200) NOT NULL,
  `about_instansi` text NOT NULL,
  `visi_instansi` text NOT NULL,
  `misi_instansi` text NOT NULL,
  `alamat_instansi` varchar(200) NOT NULL,
  `email_instansi` varchar(75) NOT NULL,
  `no_hp` varchar(13) NOT NULL,
  `favicon_instansi` varchar(150) NOT NULL,
  `logo_instansi` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `m_instansi`
--

INSERT INTO `m_instansi` (`id_instansi`, `nama_instansi`, `tagline_instansi`, `about_instansi`, `visi_instansi`, `misi_instansi`, `alamat_instansi`, `email_instansi`, `no_hp`, `favicon_instansi`, `logo_instansi`) VALUES
(1, 'Markaz Web Design', 'Jasa Pembuatan Website Murah dan Berkualitas', '<p><strong>Markaz Web Design</strong> adalah sebuah software house yang menangani bidang jasa pembuatan website toko online, company profile, perusahaan, lembaga maupun yayasan. Kami memberikan jaminan sesuai dengan kesepakatan di awal. Client bebas mendeskripsikan keinginan websitenya kepada tim kami.</p>', '<p><strong>VISI: </strong></p>\r\n<p>Menjadi software house terbaik sekota Bogor dan Depok.</p>', '<p><strong>MISI:</strong></p>\r\n<ol>\r\n<li>Memberikan pelayanan prima pada setiap pemesanan website di <a href="http://www.markazwebdesign.net">www.markazwebdesign.net</a></li>\r\n<li>Mensupport perkembangan website client dengan fitur-fitur terbaru.</li>\r\n</ol>', 'Jl. Pajajaran Raya, RT 05/06, Ds. Pabuaran, Kec. Bojong Gede, Kab. Bogor, Indonesia', 'admin@markazwebdesign.net', '085839102147', 'favicon.png', 'markazwebdesign2.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `m_kategori`
--

CREATE TABLE `m_kategori` (
  `id_kategori` int(12) NOT NULL,
  `nama_kategori` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `m_kategori`
--

INSERT INTO `m_kategori` (`id_kategori`, `nama_kategori`) VALUES
(1, 'Berita'),
(2, 'Olah Raga'),
(3, 'Mysql'),
(4, 'Pemrograman'),
(5, 'Wisata');

-- --------------------------------------------------------

--
-- Struktur dari tabel `m_menu`
--

CREATE TABLE `m_menu` (
  `id_menu` int(11) NOT NULL,
  `nama_menu` varchar(25) NOT NULL,
  `link_menu` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `m_menu`
--

INSERT INTO `m_menu` (`id_menu`, `nama_menu`, `link_menu`) VALUES
(1, 'HOME', '#'),
(2, 'ARTIKEL', 'artikel'),
(3, 'LAYANAN', 'layanan'),
(4, 'PORTOFOLIO', 'portofolio'),
(5, 'TENTANG KAMI', 'page/view/7929416-tentang');

-- --------------------------------------------------------

--
-- Struktur dari tabel `m_menu_second`
--

CREATE TABLE `m_menu_second` (
  `id_second_menu` int(3) NOT NULL,
  `second_menu` varchar(25) NOT NULL,
  `link_menu` varchar(150) NOT NULL,
  `blok_id` int(1) NOT NULL,
  `kode_blok` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `m_menu_second`
--

INSERT INTO `m_menu_second` (`id_second_menu`, `second_menu`, `link_menu`, `blok_id`, `kode_blok`) VALUES
(1, 'Tim Kami', 'Oke', 1, 112),
(2, 'Web Design', 'webs', 2, 112),
(3, 'Blog', 'blog', 1, 0),
(4, 'Editing Video', 'video', 2, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `m_page`
--

CREATE TABLE `m_page` (
  `id_page` int(7) NOT NULL,
  `judul_page` varchar(150) NOT NULL,
  `penulis_page` varchar(150) NOT NULL,
  `isi_page` text NOT NULL,
  `hari` varchar(12) NOT NULL,
  `tgl_post` varchar(12) NOT NULL,
  `jam` varchar(12) NOT NULL,
  `foto_page` varchar(150) NOT NULL,
  `dibaca` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `m_page`
--

INSERT INTO `m_page` (`id_page`, `judul_page`, `penulis_page`, `isi_page`, `hari`, `tgl_post`, `jam`, `foto_page`, `dibaca`) VALUES
(4257269, 'Tim Kami', 'Wildan Fuady', '<p>Berikut adalah tim kami....</p>', 'Jumat', '2017-06-30', '06:17:49', '', 1),
(4910210, 'Karir', 'Wildan Fuady', '<p>Kariiiirr</p>', 'Jumat', '2017-06-30', '06:18:55', '', 1),
(7929416, 'Tentang Kami', 'Wildan Fuady', '<p>Markaz web design adalah sebuah situs yang menangani bidang web design.</p>', 'Senin', '2017-06-26', '20:23:41', 'markaz.png', 43);

-- --------------------------------------------------------

--
-- Struktur dari tabel `m_page_builder`
--

CREATE TABLE `m_page_builder` (
  `id_page_builder` int(1) NOT NULL,
  `status_slide` varchar(3) NOT NULL,
  `status_perkenalan` varchar(3) NOT NULL,
  `judul_perkenalan` varchar(100) NOT NULL,
  `desc_perkenalan` text NOT NULL,
  `status_our_value` varchar(3) NOT NULL,
  `judul_our_value` varchar(100) NOT NULL,
  `desc_our_value` text NOT NULL,
  `status_whyme` varchar(3) NOT NULL,
  `judul_whyme` varchar(100) NOT NULL,
  `desc_whyme` text NOT NULL,
  `status_portofolio` varchar(3) NOT NULL,
  `judul_portofolio` varchar(100) NOT NULL,
  `desc_portofolio` text NOT NULL,
  `status_testimoni` varchar(3) NOT NULL,
  `judul_testimoni` varchar(100) NOT NULL,
  `desc_testimoni` text NOT NULL,
  `status_product` varchar(3) NOT NULL,
  `judul_product` varchar(100) NOT NULL,
  `desc_product` text NOT NULL,
  `status_contact` varchar(3) NOT NULL,
  `judul_contact` varchar(100) NOT NULL,
  `desc_contact` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `m_page_builder`
--

INSERT INTO `m_page_builder` (`id_page_builder`, `status_slide`, `status_perkenalan`, `judul_perkenalan`, `desc_perkenalan`, `status_our_value`, `judul_our_value`, `desc_our_value`, `status_whyme`, `judul_whyme`, `desc_whyme`, `status_portofolio`, `judul_portofolio`, `desc_portofolio`, `status_testimoni`, `judul_testimoni`, `desc_testimoni`, `status_product`, `judul_product`, `desc_product`, `status_contact`, `judul_contact`, `desc_contact`) VALUES
(1, 'OFF', 'ON', 'MEMPERKENALKAN', '', 'ON', 'OUR VALUE', '<p>Alasan mengapa kami begitu dipercaya.</p>', 'ON', 'MENGAPA HARUS KAMI?', '<p>Berbagai alasan mengapa anda tidak salah memilih kami.</p>', 'ON', 'PORTOFOLIO', '<p>Berikut portofolio yang pernah kami kerjakan.</p>', 'ON', 'TESTIMONI', '<p>Apa kata mereka tentang layanan markaz web design.</p>', 'ON', 'PILIHAN PRODUK DAN JASA', '<p>Silahkan pilih daftar layanan yang kami berikan kepada anda.</p>', 'ON', 'HUBUNGI KAMI', '<p>Berbagai alasan mengapa anda tidak salah memilih kami.</p>');

-- --------------------------------------------------------

--
-- Struktur dari tabel `m_portofolio`
--

CREATE TABLE `m_portofolio` (
  `id_portofolio` int(12) NOT NULL,
  `nama_project` varchar(100) NOT NULL,
  `link_project` varchar(150) NOT NULL,
  `build_project` varchar(100) NOT NULL,
  `gambar_project` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `m_portofolio`
--

INSERT INTO `m_portofolio` (`id_portofolio`, `nama_project`, `link_project`, `build_project`, `gambar_project`) VALUES
(1, 'Rumah Sedekah', 'www.rumahsedekah.com', 'Jawa Tengah', 'rumahsedekah.png'),
(3, 'Rumah Pencerahan', 'www.rumahpencerahan.com', 'Cimahi', 'rumahpencerahan.png'),
(4, 'Markaz Toko', 'www.toko1.markazwebdesign.net', 'Bogor', 'markaztoko.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `m_product`
--

CREATE TABLE `m_product` (
  `id_product` int(2) NOT NULL,
  `nama_product` varchar(35) NOT NULL,
  `spec_product` text NOT NULL,
  `harga_product` int(12) NOT NULL,
  `per_tahun_product` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `m_product`
--

INSERT INTO `m_product` (`id_product`, `nama_product`, `spec_product`, `harga_product`, `per_tahun_product`) VALUES
(1, 'Company Profile', '<p><strong>2 GB</strong> Hosting</p>\r\n<p><strong>1</strong> Domain</p>\r\n<p><strong>1</strong> Cpanel</p>\r\n<p><strong>10</strong> Sub Domain</p>\r\n<p><strong>CMS</strong> Premium Theme</p>\r\n<p><strong>Design</strong> Menyesuaikan Permintaan</p>\r\n<p><strong>Email</strong> Unlimited Account</p>\r\n<p><strong>Fitur</strong> Chat, Contact, Email, Register</p>', 2000000, '350000'),
(2, 'Toko Online', '<p><strong>2 GB</strong> Hosting</p>\r\n<p><strong>1</strong> Domain</p>\r\n<p><strong>1</strong> Cpanel</p>\r\n<p><strong>No</strong> Sub Domain</p>\r\n<p><strong>CMS</strong> Premium Theme</p>\r\n<p><strong>Design</strong> Menyesuaikan Permintaan</p>\r\n<p><strong>Email</strong> Unlimited Account</p>\r\n<p><strong>Fitur</strong> CS, Ongkir, Resi, Pembayaran, +1500 Produk</p>', 2000000, '350000'),
(3, 'Costum System', '<p><strong>Hosting</strong> Menyesuaikan</p>\r\n<p><strong>Domain</strong> Menyesuaikan</p>\r\n<p><strong>Cpanel</strong> Menyesuaikan</p>\r\n<p><strong>Sub Domain</strong> Menyesuaikan</p>\r\n<p><strong>CMS</strong> Premium Theme</p>\r\n<p><strong>Design</strong> Menyesuaikan Permintaan</p>\r\n<p><strong>Email</strong> Unlimited Account</p>\r\n<p><strong>Fitur</strong> Menyesuaikan</p>', 5000000, '750000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `m_session`
--

CREATE TABLE `m_session` (
  `session_id` varchar(40) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `user_agent` varchar(120) NOT NULL,
  `last_activity` int(10) NOT NULL,
  `user_data` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `m_session`
--

INSERT INTO `m_session` (`session_id`, `ip_address`, `user_agent`, `last_activity`, `user_data`) VALUES
('a25d36b7a00f46b36af7d69158d62a82', '::1', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/60.0.3112.113 Safari/537.36', 1505698186, 'a:3:{s:9:"user_data";s:0:"";s:8:"username";s:11:"wildanfuady";s:7:"jabatan";s:5:"ADMIN";}');

-- --------------------------------------------------------

--
-- Struktur dari tabel `m_slide`
--

CREATE TABLE `m_slide` (
  `id_slide` int(1) NOT NULL,
  `slide1` varchar(100) NOT NULL,
  `slide2` varchar(100) NOT NULL,
  `slide3` varchar(100) NOT NULL,
  `slide4` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `m_slide`
--

INSERT INTO `m_slide` (`id_slide`, `slide1`, `slide2`, `slide3`, `slide4`) VALUES
(1, '', '', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `m_social_media`
--

CREATE TABLE `m_social_media` (
  `id_social_media` int(7) NOT NULL,
  `status_facebook` int(1) NOT NULL,
  `nama_facebook` varchar(35) NOT NULL,
  `link_facebook` varchar(50) NOT NULL,
  `class_facebook` varchar(35) NOT NULL,
  `status_google` int(1) NOT NULL,
  `nama_google` varchar(35) NOT NULL,
  `link_google` varchar(50) NOT NULL,
  `class_google` varchar(35) NOT NULL,
  `status_twitter` int(1) NOT NULL,
  `nama_twitter` varchar(35) NOT NULL,
  `link_twitter` varchar(50) NOT NULL,
  `class-twitter` varchar(35) NOT NULL,
  `status_instagram` int(1) NOT NULL,
  `nama_instagram` varchar(35) NOT NULL,
  `link_instagram` varchar(50) NOT NULL,
  `class_instagram` varchar(35) NOT NULL,
  `status_youtube` int(1) NOT NULL,
  `nama_youtube` varchar(35) NOT NULL,
  `link_youtube` varchar(50) NOT NULL,
  `class_youtube` varchar(35) NOT NULL,
  `status_aktif` int(1) NOT NULL,
  `nama_blok` varchar(35) NOT NULL,
  `blok_id` int(1) NOT NULL,
  `kode_blok` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `m_social_media`
--

INSERT INTO `m_social_media` (`id_social_media`, `status_facebook`, `nama_facebook`, `link_facebook`, `class_facebook`, `status_google`, `nama_google`, `link_google`, `class_google`, `status_twitter`, `nama_twitter`, `link_twitter`, `class-twitter`, `status_instagram`, `nama_instagram`, `link_instagram`, `class_instagram`, `status_youtube`, `nama_youtube`, `link_youtube`, `class_youtube`, `status_aktif`, `nama_blok`, `blok_id`, `kode_blok`) VALUES
(56784544, 1, 'Bole', 'bole', '', 1, 'Wildan', 'wildan', '', 1, 'twiterku', 'twitterku', '', 1, 'igku', 'igku', '', 1, 'utubku', 'utubku', '', 1, '', 1, 111);

-- --------------------------------------------------------

--
-- Struktur dari tabel `m_statistik`
--

CREATE TABLE `m_statistik` (
  `id_statistik` int(12) NOT NULL,
  `data_id` varchar(12) NOT NULL,
  `hits` int(12) NOT NULL,
  `kode_blok` int(113) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `m_statistik`
--

INSERT INTO `m_statistik` (`id_statistik`, `data_id`, `hits`, `kode_blok`) VALUES
(1, 'counter', 26, 113);

-- --------------------------------------------------------

--
-- Struktur dari tabel `m_style`
--

CREATE TABLE `m_style` (
  `id_style` int(1) NOT NULL,
  `header_color` varchar(7) NOT NULL,
  `button_color` varchar(7) NOT NULL,
  `footer1_color` varchar(7) NOT NULL,
  `footer2_color` varchar(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `m_style`
--

INSERT INTO `m_style` (`id_style`, `header_color`, `button_color`, `footer1_color`, `footer2_color`) VALUES
(1, '#ff0080', '#ff0080', '#ff0080', '#ff0080');

-- --------------------------------------------------------

--
-- Struktur dari tabel `m_testimoni`
--

CREATE TABLE `m_testimoni` (
  `id_testimoni` int(12) NOT NULL,
  `isi_testimoni` text NOT NULL,
  `who_is` varchar(35) NOT NULL,
  `owner` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `m_testimoni`
--

INSERT INTO `m_testimoni` (`id_testimoni`, `isi_testimoni`, `who_is`, `owner`) VALUES
(1, '"Pelayanannya cepat dan memuaskan!!"\r\n ', 'Ainul', 'KosmetikSehatAlami.Com'),
(2, '"Kang Wildan (CEO www.markazwebdesign.net) Ngajarin saya yang gaptek web jadi bisa!"', 'Jabbar Sambudi', 'www.jabbarsambudi.com');

-- --------------------------------------------------------

--
-- Struktur dari tabel `m_users`
--

CREATE TABLE `m_users` (
  `id_user` int(11) NOT NULL,
  `username` varchar(12) NOT NULL,
  `nama_user` varchar(35) NOT NULL,
  `bio` text NOT NULL,
  `password` varchar(35) NOT NULL,
  `jabatan` varchar(12) NOT NULL,
  `foto_profile` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `m_users`
--

INSERT INTO `m_users` (`id_user`, `username`, `nama_user`, `bio`, `password`, `jabatan`, `foto_profile`) VALUES
(3, 'wildanfuady', 'Wildan Fuady', '<p>CEO di <a href="http://www.markazwebdesign.net">www.markazwebdesign.net</a>&nbsp;</p>\r\n<p>ok</p>', 'dc00cb86815f85f3fbad0ed5d00c535d', 'ADMIN', 'oke.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `m_whyme`
--

CREATE TABLE `m_whyme` (
  `id_whyme` int(12) NOT NULL,
  `fitur` varchar(50) NOT NULL,
  `deskripsi` text NOT NULL,
  `icon` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `m_whyme`
--

INSERT INTO `m_whyme` (`id_whyme`, `fitur`, `deskripsi`, `icon`) VALUES
(1, 'Revisi Unlimited', '<p>Sesuai dengan permintaan, kapan saja bisa menghubungi untuk meminta revisi.</p>', 'glyphicon glyphicon-refresh'),
(2, 'Responsive Design', '<p>Design sangat responsive sehingga nyaman di buka di berbagai platfrom seperti PC, tablet dan handphone</p>', 'glyphicon glyphicon-phone'),
(3, 'Theme Premium', '<p>Berbagai jenis theme website kami sajikan untuk memilih theme yang cocok dengan Anda.</p>', 'glyphicon glyphicon-scale'),
(4, 'Harga Terjangkau', '<p>Harga yang diberikan oleh Markaz Web Design sangat murah tetapi kualitas tidak murahan.</p>', 'glyphicon glyphicon-usd'),
(5, 'Trust', '<p>Kami sangat mengoptimalkan kepercayaan kepada Anda.</p>', 'glyphicon glyphicon-heart-empty'),
(6, 'Diskon', '<p>Spesial diskon bagi client yang ingin membuat design website untuk sosial dan kemanusiaan.</p>', 'glyphicon glyphicon-gift'),
(7, 'Perform', '<p>Kami tidak hanya membangun website, tapi membantunya untuk tumbuh berkembang.</p>', 'glyphicon glyphicon-signal'),
(8, 'Domain Hosting', '<p>Kami menyediakan fasilitas domain dan hosting yang cocok untuk website anda.</p>', 'glyphicon glyphicon-cd');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `m_artikel`
--
ALTER TABLE `m_artikel`
  ADD PRIMARY KEY (`id_artikel`);

--
-- Indexes for table `m_blok`
--
ALTER TABLE `m_blok`
  ADD PRIMARY KEY (`kode_blok`);

--
-- Indexes for table `m_blok_footer`
--
ALTER TABLE `m_blok_footer`
  ADD PRIMARY KEY (`id_blok_footer`);

--
-- Indexes for table `m_hubungi_kami`
--
ALTER TABLE `m_hubungi_kami`
  ADD PRIMARY KEY (`id_hubungi_kami`);

--
-- Indexes for table `m_instansi`
--
ALTER TABLE `m_instansi`
  ADD PRIMARY KEY (`id_instansi`);

--
-- Indexes for table `m_kategori`
--
ALTER TABLE `m_kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `m_menu`
--
ALTER TABLE `m_menu`
  ADD PRIMARY KEY (`id_menu`);

--
-- Indexes for table `m_menu_second`
--
ALTER TABLE `m_menu_second`
  ADD PRIMARY KEY (`id_second_menu`);

--
-- Indexes for table `m_page`
--
ALTER TABLE `m_page`
  ADD PRIMARY KEY (`id_page`);

--
-- Indexes for table `m_page_builder`
--
ALTER TABLE `m_page_builder`
  ADD PRIMARY KEY (`id_page_builder`);

--
-- Indexes for table `m_portofolio`
--
ALTER TABLE `m_portofolio`
  ADD PRIMARY KEY (`id_portofolio`);

--
-- Indexes for table `m_product`
--
ALTER TABLE `m_product`
  ADD PRIMARY KEY (`id_product`);

--
-- Indexes for table `m_session`
--
ALTER TABLE `m_session`
  ADD PRIMARY KEY (`session_id`);

--
-- Indexes for table `m_slide`
--
ALTER TABLE `m_slide`
  ADD PRIMARY KEY (`id_slide`);

--
-- Indexes for table `m_social_media`
--
ALTER TABLE `m_social_media`
  ADD PRIMARY KEY (`id_social_media`);

--
-- Indexes for table `m_statistik`
--
ALTER TABLE `m_statistik`
  ADD PRIMARY KEY (`id_statistik`);

--
-- Indexes for table `m_style`
--
ALTER TABLE `m_style`
  ADD PRIMARY KEY (`id_style`);

--
-- Indexes for table `m_testimoni`
--
ALTER TABLE `m_testimoni`
  ADD PRIMARY KEY (`id_testimoni`);

--
-- Indexes for table `m_users`
--
ALTER TABLE `m_users`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `m_whyme`
--
ALTER TABLE `m_whyme`
  ADD PRIMARY KEY (`id_whyme`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `m_artikel`
--
ALTER TABLE `m_artikel`
  MODIFY `id_artikel` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4352766;
--
-- AUTO_INCREMENT for table `m_hubungi_kami`
--
ALTER TABLE `m_hubungi_kami`
  MODIFY `id_hubungi_kami` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `m_instansi`
--
ALTER TABLE `m_instansi`
  MODIFY `id_instansi` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `m_kategori`
--
ALTER TABLE `m_kategori`
  MODIFY `id_kategori` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `m_menu`
--
ALTER TABLE `m_menu`
  MODIFY `id_menu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `m_menu_second`
--
ALTER TABLE `m_menu_second`
  MODIFY `id_second_menu` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `m_page_builder`
--
ALTER TABLE `m_page_builder`
  MODIFY `id_page_builder` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `m_portofolio`
--
ALTER TABLE `m_portofolio`
  MODIFY `id_portofolio` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `m_product`
--
ALTER TABLE `m_product`
  MODIFY `id_product` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `m_slide`
--
ALTER TABLE `m_slide`
  MODIFY `id_slide` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `m_style`
--
ALTER TABLE `m_style`
  MODIFY `id_style` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `m_testimoni`
--
ALTER TABLE `m_testimoni`
  MODIFY `id_testimoni` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `m_users`
--
ALTER TABLE `m_users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `m_whyme`
--
ALTER TABLE `m_whyme`
  MODIFY `id_whyme` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
