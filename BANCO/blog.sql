-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: 13-Maio-2019 às 11:55
-- Versão do servidor: 10.1.38-MariaDB
-- versão do PHP: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `posts`
--

CREATE TABLE `posts` (
  `cdpost` int(11) NOT NULL,
  `titulo` varchar(255) CHARACTER SET utf8 NOT NULL,
  `resumo` text CHARACTER SET utf8 NOT NULL,
  `texto` text CHARACTER SET utf8 NOT NULL,
  `imagem` varchar(100) CHARACTER SET utf8 NOT NULL,
  `posicao` varchar(5) CHARACTER SET utf8 NOT NULL DEFAULT 'right',
  `data` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `posts`
--

INSERT INTO `posts` (`cdpost`, `titulo`, `resumo`, `texto`, `imagem`, `posicao`, `data`) VALUES
(1, 'FenÃƒÂ´meno da Internet', '', 'Todas estas questÃƒÂµes, devidamente ponderadas, levantam dÃƒÂºvidas sobre se o fenÃƒÂ´meno da Internet exige a precisÃƒÂ£o e a definiÃƒÂ§ÃƒÂ£o do sistema de formaÃƒÂ§ÃƒÂ£o de quadros que corresponde ÃƒÂ s necessidades.', 'internet.png', 'right', '2019-05-12'),
(2, 'NÃƒÂ£o obstante', '', 'NÃƒÂ£o obstante, a hegemonia do ambiente polÃƒÂ­tico maximiza as possibilidades por conta das posturas dos ÃƒÂ³rgÃƒÂ£os dirigentes com relaÃƒÂ§ÃƒÂ£o ÃƒÂ s suas atribuiÃƒÂ§ÃƒÂµes.', 'mundo.png', 'right', '2019-05-12'),
(3, 'A expansÃƒÂ£o dos mercados mundiais', '', 'Evidentemente, a expansÃƒÂ£o dos mercados mundiais nos obriga ÃƒÂ  anÃƒÂ¡lise das direÃƒÂ§ÃƒÂµes preferenciais no sentido do progresso.', 'economia.png', 'right', '2019-05-12'),
(4, 'Preferências de consumo kk', '', 'Gostaria de enfatizar que o acompanhamento das preferÃƒÂªncias de consumo maximiza as possibilidades por conta de alternativas ÃƒÂ s soluÃƒÂ§ÃƒÂµes ortodoxas.', 'compras.png', 'right', '2019-05-12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`cdpost`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `cdpost` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
