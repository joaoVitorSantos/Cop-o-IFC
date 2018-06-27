-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 27-Jun-2018 às 02:01
-- Versão do servidor: 10.1.32-MariaDB
-- PHP Version: 7.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `copao`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `curtir`
--

CREATE TABLE `curtir` (
  `id_time` int(4) DEFAULT NULL,
  `id_usuario` int(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `curtir`
--

INSERT INTO `curtir` (`id_time`, `id_usuario`) VALUES
(3, 1),
(1, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `jogador`
--

CREATE TABLE `jogador` (
  `id_jogador` int(4) NOT NULL,
  `numero_camisa` varchar(4) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `gols` int(3) NOT NULL,
  `cartao_amarelo` int(3) NOT NULL,
  `cartao_vermelho` int(3) NOT NULL,
  `id_time` int(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `jogador`
--

INSERT INTO `jogador` (`id_jogador`, `numero_camisa`, `nome`, `gols`, `cartao_amarelo`, `cartao_vermelho`, `id_time`) VALUES
(1, '7', 'João Vitor', 0, 0, 0, 1),
(2, '18', 'Asaph', 0, 0, 0, 1),
(3, '9', 'Vinicius', 0, 0, 0, 1),
(4, '8', 'Bryan', 35, 0, 0, 1),
(5, '19', 'Leonardo Edenir', 0, 0, 0, 1),
(6, '88', 'Russo', 35, 0, 0, 1),
(7, '99', 'Léo Vieira', 0, 0, 0, 1),
(8, '21', 'Marlon', 0, 0, 0, 1),
(9, '60', 'Christian', 0, 0, 0, 1),
(10, '10', 'André', 7, 0, 0, 1),
(11, '6', 'Leandro', 0, 0, 0, 3),
(12, '16', 'Henrique', 0, 0, 0, 3),
(13, '27', 'Lucas', 0, 0, 0, 3),
(14, '3', 'Welliton', 3, 0, 0, 3),
(15, '8', 'Ruan', 0, 0, 0, 3),
(16, '5', 'Luciano', 0, 0, 0, 3),
(17, '21', 'Oberdan', 0, 0, 0, 3),
(26, '9', 'Matheus', 0, 0, 0, 3),
(27, '1', 'Willian', 0, 0, 0, 3),
(28, '11', 'João Pedro', 0, 0, 0, 3),
(29, '7', 'Lucas', 0, 0, 0, 3),
(30, '?', 'Kauan', 0, 0, 0, 3),
(31, '1', 'Nicolas Train', 0, 0, 0, 2),
(32, '70', 'Antônio Faruk', 0, 0, 0, 2),
(33, '18', 'Henrique Benevenutti', 0, 0, 0, 2),
(34, '27', 'Guilherme Neitzel', 0, 0, 0, 2),
(35, '10', 'Anisio Neto', 0, 0, 0, 2),
(36, '9', 'Gerson Bayer', 0, 0, 0, 2),
(37, '8', 'Fábio Santos', 0, 0, 0, 2),
(38, '11', 'Víctor', 0, 0, 0, 5),
(39, '8', 'Vagner', 0, 0, 0, 5),
(40, '10', 'Dhiego', 0, 0, 0, 5),
(41, '9', 'Eloy', 0, 0, 0, 5),
(42, '5', 'Breno', 0, 0, 0, 5),
(43, '14', 'Luã', 0, 0, 0, 5),
(44, '15', 'Matheus', 0, 0, 0, 5),
(45, '7', 'Wellington', 0, 0, 0, 5),
(46, '20', 'Athirson', 0, 0, 0, 6),
(47, '7', 'Carlos', 0, 0, 0, 6),
(48, '9', 'Amon', 0, 0, 0, 6),
(49, '12', 'Lucas', 0, 0, 0, 6),
(50, '00', 'Arthur', 0, 0, 0, 6),
(51, '8', 'Éder', 0, 0, 0, 6),
(52, '17', 'Henrique', 0, 0, 0, 6),
(53, '13', 'Gustavo', 0, 0, 0, 6),
(54, '?', 'Chico', 0, 0, 0, 6),
(55, '?', 'Mineiro', 0, 0, 0, 2),
(56, '?', 'Kauan', 0, 0, 0, 3),
(57, '?', 'Jeff', 0, 0, 0, 5),
(58, '?', 'Anderson', 0, 0, 0, 5),
(59, '1', 'Marlon', 0, 0, 0, 4),
(60, '2', 'Decker', 0, 0, 0, 4),
(61, '3', 'Gefe', 0, 0, 0, 4),
(62, '4', 'Pedro', 0, 0, 0, 4),
(63, '?', 'Renan', 0, 0, 0, 4),
(64, '6', 'Goiano', 0, 0, 0, 4),
(65, '7', 'Mateus Souza', 0, 0, 0, 4),
(66, '8', 'Luan', 0, 0, 0, 4),
(67, '9', 'Mateus Quintino', 0, 0, 0, 4),
(68, '10', 'Matheus Silva', 0, 0, 0, 4);

-- --------------------------------------------------------

--
-- Estrutura da tabela `partida`
--

CREATE TABLE `partida` (
  `id_partida` int(4) NOT NULL,
  `id_time_mandante` int(4) DEFAULT NULL,
  `id_time_visitante` int(4) DEFAULT NULL,
  `data` varchar(15) NOT NULL,
  `resultado` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `partida`
--

INSERT INTO `partida` (`id_partida`, `id_time_mandante`, `id_time_visitante`, `data`, `resultado`) VALUES
(1, 1, 3, '01/07/18', '2 x 0'),
(2, 2, 5, '01/07/18', '1 x 2');

-- --------------------------------------------------------

--
-- Estrutura da tabela `time`
--

CREATE TABLE `time` (
  `id_time` int(4) NOT NULL,
  `logo` varchar(55) NOT NULL,
  `nome_time` varchar(25) NOT NULL,
  `pontos` int(4) NOT NULL,
  `cor` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `time`
--

INSERT INTO `time` (`id_time`, `logo`, `nome_time`, `pontos`, `cor`) VALUES
(1, '../assets/imagens/logos/laranja.png', 'Tigers Outbreak', 30, 'Laranja'),
(2, '../assets/imagens/logos/azul.png', 'Abiduzidos', 20, 'Azul'),
(3, '../assets/imagens/logos/amarelo.png', 'Solares', 23, 'Amarelo'),
(4, '../assets/imagens/logos/roxo.png', 'Vigaristas', 16, 'Roxo'),
(5, '../assets/imagens/logos/vermelho.png', 'Socanelas', 12, 'Vermelho'),
(6, '../assets/imagens/logos/preto.png', 'Maori', 28, 'Preto'),
(7, '../assets/imagens/logos/servidores.png', 'Servidores', 10, 'Branco');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tipo_usuario`
--

CREATE TABLE `tipo_usuario` (
  `id_tipo_usuario` int(4) NOT NULL,
  `tipo` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tipo_usuario`
--

INSERT INTO `tipo_usuario` (`id_tipo_usuario`, `tipo`) VALUES
(1, 'Comum'),
(2, 'Admin');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(4) NOT NULL,
  `nome_usuario` varchar(25) NOT NULL,
  `id_tipo_usuario` int(4) DEFAULT NULL,
  `email` varchar(25) NOT NULL,
  `senha` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `nome_usuario`, `id_tipo_usuario`, `email`, `senha`) VALUES
(1, 'admin', 2, 'copaoifc@gmail.com', 'copao'),
(5, 'Russo', 2, 'email@email', '$2y$10$e7kGPm19zD7gXSdvn62DweiY4NXPEU7k2f3UfrLP1wfGh28t4/IyG');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `curtir`
--
ALTER TABLE `curtir`
  ADD KEY `id_time` (`id_time`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- Indexes for table `jogador`
--
ALTER TABLE `jogador`
  ADD PRIMARY KEY (`id_jogador`),
  ADD KEY `id_time` (`id_time`);

--
-- Indexes for table `partida`
--
ALTER TABLE `partida`
  ADD PRIMARY KEY (`id_partida`),
  ADD KEY `id_time_mandante` (`id_time_mandante`),
  ADD KEY `id_time_visitante` (`id_time_visitante`);

--
-- Indexes for table `time`
--
ALTER TABLE `time`
  ADD PRIMARY KEY (`id_time`);

--
-- Indexes for table `tipo_usuario`
--
ALTER TABLE `tipo_usuario`
  ADD PRIMARY KEY (`id_tipo_usuario`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`),
  ADD KEY `id_tipo_usuario` (`id_tipo_usuario`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jogador`
--
ALTER TABLE `jogador`
  MODIFY `id_jogador` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT for table `partida`
--
ALTER TABLE `partida`
  MODIFY `id_partida` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `time`
--
ALTER TABLE `time`
  MODIFY `id_time` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tipo_usuario`
--
ALTER TABLE `tipo_usuario`
  MODIFY `id_tipo_usuario` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `curtir`
--
ALTER TABLE `curtir`
  ADD CONSTRAINT `curtir_ibfk_1` FOREIGN KEY (`id_time`) REFERENCES `time` (`id_time`),
  ADD CONSTRAINT `curtir_ibfk_2` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`);

--
-- Limitadores para a tabela `jogador`
--
ALTER TABLE `jogador`
  ADD CONSTRAINT `jogador_ibfk_1` FOREIGN KEY (`id_time`) REFERENCES `time` (`id_time`);

--
-- Limitadores para a tabela `partida`
--
ALTER TABLE `partida`
  ADD CONSTRAINT `partida_ibfk_1` FOREIGN KEY (`id_time_mandante`) REFERENCES `time` (`id_time`),
  ADD CONSTRAINT `partida_ibfk_2` FOREIGN KEY (`id_time_visitante`) REFERENCES `time` (`id_time`);

--
-- Limitadores para a tabela `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`id_tipo_usuario`) REFERENCES `tipo_usuario` (`id_tipo_usuario`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
