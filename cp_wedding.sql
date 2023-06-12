-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 12, 2023 at 08:07 AM
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
-- Database: `cp_wedding`
--

-- --------------------------------------------------------

--
-- Table structure for table `background`
--

CREATE TABLE `background` (
  `id_gambar` varchar(30) NOT NULL,
  `tempatgambar` varchar(30) NOT NULL,
  `img` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `background`
--

INSERT INTO `background` (`id_gambar`, `tempatgambar`, `img`) VALUES
('jD8vK', 'home', 'home1.jpg,home2.jpg,journal1.jpg'),
('N0Z68', 'Journal', 'journal1.jpg'),
('NGCNj', 'portofolio', 'home1.jpg'),
('Zo0NX', 'contact', 'pexels-zukiman-mohamad-190417.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `journal`
--

CREATE TABLE `journal` (
  `id_journal` varchar(30) NOT NULL,
  `kategori` varchar(30) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL,
  `tanggal` date NOT NULL,
  `img` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `journal`
--

INSERT INTO `journal` (`id_journal`, `kategori`, `judul`, `deskripsi`, `tanggal`, `img`) VALUES
('YX2Gt', 'Lifestyle', 'Memotret', 'Halo', '2023-06-08', 'home1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`) VALUES
('admin', '123');

-- --------------------------------------------------------

--
-- Table structure for table `pesan`
--

CREATE TABLE `pesan` (
  `id_pesan` varchar(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pesan`
--

INSERT INTO `pesan` (`id_pesan`, `name`, `email`, `message`) VALUES
('IBu5D', 'maulana', 'maulanairsyad66@gmail.com', 'halo halo ges'),
('mYUTz', 'test', 'test', 'qwerty');

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id_project` varchar(6) NOT NULL,
  `name` varchar(100) NOT NULL,
  `lokasi` varchar(30) NOT NULL,
  `idyoutube` varchar(30) NOT NULL,
  `kategori` varchar(100) NOT NULL,
  `img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id_project`, `name`, `lokasi`, `idyoutube`, `kategori`, `img`) VALUES
('qkaOB', 'maul', 'Bali', 'Ut00hLerGBo', 'Pre-Wedding', 'home1.jpg'),
('YJzwr', 'ega', '', 'LcBQ1DMOThQ', 'Engagement', 'wedding1.jpg,wedding2.jpg,wedding4.jpg,wedding5.jpg,wedding6.jpg'),
('z9DeS', 'tes3op', 'PT. Kereta Api Indonesia UPT. ', 'asda', 'Pre-Wedding', '');

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE `team` (
  `id_team` varchar(30) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `deskripsi` text NOT NULL,
  `ig` varchar(30) NOT NULL,
  `devisi` varchar(30) NOT NULL,
  `img` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`id_team`, `nama`, `deskripsi`, `ig`, `devisi`, `img`) VALUES
('uYLbH', 'Bagas', 'Leon believes that everything in this world is connected somehow. He believes that each element influences the other, directly or indirectly. With this belief, he always tries to put a positive mindset and attitude to radiate that inner positivity to people and things around him. This is why he loves doing what heâ€™s doing because he can feel the joy and happiness of the couples and their loved ones and immortalize those moments through his eyes behind the lens.  Leon is a natural people person. He can start a conversation with anyone. With this trait, heâ€™s always able to make the couples feel comfortable around the crew. For him, a good picture is the one that reflects the personality of the people in it. And to get that result is to ensure that the couple is comfortable being around the crew and their lenses and, most importantly, being in their skin as their true selves.', 'bagasalifa', 'Photographer', 'Leon-pp-2.png'),
('VX6OU', 'Maulana', ' Halo para pengunjung website! Saya sangat senang berbagi dengan Anda pengalaman dan keindahan alam melalui jurnal ini. Sebagai seorang fotografer, saya memiliki kecintaan yang mendalam terhadap alam dan senang memotret keindahan yang ada di sekitar kita. Dalam jurnal ini, saya akan membawa Anda ke perjalanan saya saat menjelajahi lokasi-lokasi menakjubkan di pegunungan, pantai, dan hutan.  Pertama-tama, saya ingin berbagi tentang perjalanan saya ke pegunungan yang indah. Saya memiliki kesempatan untuk memotret pemandangan luar biasa seperti puncak gunung yang tertutup salju, lembah hijau yang subur, dan matahari terbit yang spektakuler di antara puncak-puncak gunung. Saya akan berbagi teknik fotografi yang saya gunakan untuk menangkap keindahan alam pegunungan, mulai dari pengaturan pencahayaan hingga komposisi yang menarik.  Selanjutnya, mari kita berbicara tentang petualangan saya di pantai. Saya sangat terpesona oleh keajaiban alam di sepanjang garis pantai, seperti pasir putih yang bersih, ombak yang men', 'maulana_irsyad', 'Videographer', 'Dre-pp.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `background`
--
ALTER TABLE `background`
  ADD PRIMARY KEY (`id_gambar`);

--
-- Indexes for table `journal`
--
ALTER TABLE `journal`
  ADD PRIMARY KEY (`id_journal`);

--
-- Indexes for table `pesan`
--
ALTER TABLE `pesan`
  ADD PRIMARY KEY (`id_pesan`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id_project`);

--
-- Indexes for table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`id_team`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
