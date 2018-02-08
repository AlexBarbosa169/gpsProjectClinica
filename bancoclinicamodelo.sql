-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 08-Fev-2018 às 09:43
-- Versão do servidor: 5.7.19-log
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bancoclinicamodelo`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `consulta`
--

DROP TABLE IF EXISTS `consulta`;
CREATE TABLE IF NOT EXISTS `consulta` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `dataConsulta` date NOT NULL,
  `idPaciente` int(11) NOT NULL,
  `idMedico` int(11) NOT NULL,
  `descricaoConsulta` text NOT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  KEY `idPaciente` (`idPaciente`) USING BTREE,
  KEY `crmMedico` (`idMedico`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `consulta`
--

INSERT INTO `consulta` (`id`, `dataConsulta`, `idPaciente`, `idMedico`, `descricaoConsulta`) VALUES
(1, '2018-02-09', 1, 1, 'Teste consulta'),
(2, '2018-02-09', 2, 1, 'consulta teste');

-- --------------------------------------------------------

--
-- Estrutura da tabela `exame`
--

DROP TABLE IF EXISTS `exame`;
CREATE TABLE IF NOT EXISTS `exame` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nomeExame` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `descricaoExame` varchar(1000) NOT NULL,
  `valor` double NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `exame`
--

INSERT INTO `exame` (`id`, `nomeExame`, `descricaoExame`, `valor`) VALUES
(1, 'Endoscopia Digestiva', 'Necessita Jejum de 12hrs do paciente;\r\nAplicação de anestesia;\r\n', 250),
(2, 'Radiografia', 'Exame de raio X', 150);

-- --------------------------------------------------------

--
-- Estrutura da tabela `medicamento`
--

DROP TABLE IF EXISTS `medicamento`;
CREATE TABLE IF NOT EXISTS `medicamento` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Nome` text NOT NULL,
  `Descricao` text NOT NULL,
  `fabricante` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `medicamento`
--

INSERT INTO `medicamento` (`id`, `Nome`, `Descricao`, `fabricante`) VALUES
(1, 'Pantoprazol', 'Medicamento utilizado para proteção da parede digestiva.', 'TEUTO');

-- --------------------------------------------------------

--
-- Estrutura da tabela `medico`
--

DROP TABLE IF EXISTS `medico`;
CREATE TABLE IF NOT EXISTS `medico` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `CRM` int(10) NOT NULL,
  `Nome` varchar(100) NOT NULL,
  `Telefone` varchar(30) NOT NULL,
  `DataNasc` date DEFAULT NULL,
  `Especialidade` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `medico`
--

INSERT INTO `medico` (`id`, `CRM`, `Nome`, `Telefone`, `DataNasc`, `Especialidade`) VALUES
(1, 1, 'Dr. House ', '32315013', '1980-05-08', 'Clinico Geral');

-- --------------------------------------------------------

--
-- Estrutura da tabela `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `paciente`
--

DROP TABLE IF EXISTS `paciente`;
CREATE TABLE IF NOT EXISTS `paciente` (
  `CPF` varchar(11) NOT NULL,
  `Nome` varchar(100) NOT NULL,
  `Convenio` varchar(100) NOT NULL,
  `Telefone` varchar(30) NOT NULL,
  `DataNasc` date NOT NULL,
  `TipoSanguineo` varchar(4) DEFAULT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `paciente`
--

INSERT INTO `paciente` (`CPF`, `Nome`, `Convenio`, `Telefone`, `DataNasc`, `TipoSanguineo`, `id`) VALUES
('07272344474', 'Gilberto Neto', 'SUS', '8332315013', '1991-11-26', NULL, 1),
('10912275430', 'Amanda Santos Borges', 'UNIMED', '32315013', '1994-09-20', NULL, 2),
('12345678912', 'Teste Insert', 'GEAP', '32315013', '1994-11-28', NULL, 3);

-- --------------------------------------------------------

--
-- Estrutura da tabela `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('teste@email.com', '$2y$10$bpgRnKQUWP0hqHJBJlY/i.AmVHpHrOTxx3mRH2XHcJ2eh/t3XloLC', '2018-02-08 03:43:17');

-- --------------------------------------------------------

--
-- Estrutura da tabela `prescricao`
--

DROP TABLE IF EXISTS `prescricao`;
CREATE TABLE IF NOT EXISTS `prescricao` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idConsulta` int(11) NOT NULL,
  `idMedicamento` int(11) DEFAULT NULL,
  `idExame` int(11) DEFAULT NULL,
  `Comentario` text NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `idConsulta` (`idConsulta`),
  UNIQUE KEY `idMedicamento` (`idMedicamento`),
  UNIQUE KEY `idExame` (`idExame`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `prescricao`
--

INSERT INTO `prescricao` (`id`, `idConsulta`, `idMedicamento`, `idExame`, `Comentario`) VALUES
(1, 1, 1, 1, 'Paciente apresenta sinais de gastrite');

-- --------------------------------------------------------

--
-- Estrutura da tabela `userlogin`
--

DROP TABLE IF EXISTS `userlogin`;
CREATE TABLE IF NOT EXISTS `userlogin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cpf` varchar(11) NOT NULL,
  `password` varchar(8) NOT NULL,
  `tipousuario` varchar(10) NOT NULL,
  `ativo` int(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `userlogin`
--

INSERT INTO `userlogin` (`id`, `cpf`, `password`, `tipousuario`, `ativo`) VALUES
(1, '07272344474', '123456', 'paciente', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Gilberto Firmino de Souza Neto', 'gilbertofsneto@gmail.com', '$2y$10$Bxk6Co7QtI6UKL1090ro0eS9LlmiIeC7NxoCrnAnhwFY2ICJ.AXIC', '0Ku8l1I5MC9a1BeYzJg5I3PttfQg5BBgrPaWiTBrTQ5dthDy7mAbZQxesYuZ', '2018-02-08 01:13:14', '2018-02-08 01:13:14'),
(2, 'Teste Cadastro', 'teste@email.com', '$2y$10$FI/cS9BTVroaquDwo6TQ4Os8xHwJ3Z0LKd3QyIM9wEIYz46PYC4Sy', 'mNLSLSJZOUMRe1JzT37Rlh3lvXfEWPL5rAP4dSYIhEzjrUe4NVLJAKaC26Tq', '2018-02-08 03:18:59', '2018-02-08 03:18:59'),
(3, 'Testando', 'teste3@email.com', '$2y$10$j7X3eStYQH.xlinDeVpCQ.70Xtd98PppugzOomU0gB3vjwvk4QzJe', 'uaBIMAMT1OYAoQBh7dpds9zBqW4iyMQgKzrJWzzmPizOSrdKjHHVyRfxdZWu', '2018-02-08 12:38:27', '2018-02-08 12:38:27');

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `consulta`
--
ALTER TABLE `consulta`
  ADD CONSTRAINT `FK_MEDICO` FOREIGN KEY (`idMedico`) REFERENCES `medico` (`id`),
  ADD CONSTRAINT `FK_PACIENTE` FOREIGN KEY (`idPaciente`) REFERENCES `paciente` (`id`);

--
-- Limitadores para a tabela `prescricao`
--
ALTER TABLE `prescricao`
  ADD CONSTRAINT `FK_CONSULTA` FOREIGN KEY (`idConsulta`) REFERENCES `consulta` (`id`),
  ADD CONSTRAINT `FK_EXAME` FOREIGN KEY (`idExame`) REFERENCES `exame` (`id`),
  ADD CONSTRAINT `FK_MEDICAMENTO` FOREIGN KEY (`idMedicamento`) REFERENCES `medicamento` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
