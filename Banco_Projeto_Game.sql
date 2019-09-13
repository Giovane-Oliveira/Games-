-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           10.1.30-MariaDB - mariadb.org binary distribution
-- OS do Servidor:               Win32
-- HeidiSQL Versão:              10.1.0.5464
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Copiando estrutura do banco de dados para projetogame
CREATE DATABASE IF NOT EXISTS `projetogame` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `projetogame`;

-- Copiando estrutura para tabela projetogame.game
CREATE TABLE IF NOT EXISTS `game` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nomeGame` varchar(255) DEFAULT NULL,
  `descricao` varchar(255) DEFAULT NULL,
  `imgCapa` varchar(255) DEFAULT NULL,
  `disponivel` int(1) DEFAULT NULL,
  `usuario_id` int(10) DEFAULT NULL,
  `genero_id` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela projetogame.game: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `game` DISABLE KEYS */;
/*!40000 ALTER TABLE `game` ENABLE KEYS */;

-- Copiando estrutura para tabela projetogame.genero
CREATE TABLE IF NOT EXISTS `genero` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nomeGenero` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela projetogame.genero: ~10 rows (aproximadamente)
/*!40000 ALTER TABLE `genero` DISABLE KEYS */;
INSERT INTO `genero` (`id`, `nomeGenero`) VALUES
	(1, 'Ação'),
	(2, 'Aventura'),
	(3, 'Luta'),
	(4, 'Tiro'),
	(5, 'Rpg'),
	(6, 'Construção'),
	(7, 'Vida Virtual'),
	(8, 'Música'),
	(9, 'Esportes'),
	(10, 'Corrida');
/*!40000 ALTER TABLE `genero` ENABLE KEYS */;

-- Copiando estrutura para tabela projetogame.situacao
CREATE TABLE IF NOT EXISTS `situacao` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `situacao` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela projetogame.situacao: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `situacao` DISABLE KEYS */;
/*!40000 ALTER TABLE `situacao` ENABLE KEYS */;

-- Copiando estrutura para tabela projetogame.solicitacao
CREATE TABLE IF NOT EXISTS `solicitacao` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `data` date DEFAULT NULL,
  `usuario_id` int(10) DEFAULT NULL,
  `genero_id` int(10) DEFAULT NULL,
  `situacao_id` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela projetogame.solicitacao: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `solicitacao` DISABLE KEYS */;
/*!40000 ALTER TABLE `solicitacao` ENABLE KEYS */;

-- Copiando estrutura para tabela projetogame.usuario
CREATE TABLE IF NOT EXISTS `usuario` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `rua` varchar(255) DEFAULT NULL,
  `bairro` varchar(255) DEFAULT NULL,
  `cidade` varchar(255) DEFAULT NULL,
  `casa` int(12) DEFAULT NULL,
  `estado` varchar(2) DEFAULT NULL,
  `cpf` varchar(11) DEFAULT NULL,
  `cep` int(8) DEFAULT NULL,
  `telefone` int(20) NOT NULL,
  `senha` varchar(50) DEFAULT NULL,
  `imgPerfil` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela projetogame.usuario: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
INSERT INTO `usuario` (`id`, `nome`, `email`, `rua`, `bairro`, `cidade`, `casa`, `estado`, `cpf`, `cep`, `telefone`, `senha`, `imgPerfil`) VALUES
	(1, 'Alison Dias', 'alisoondias@gmail.com', 'Gustavo Peixoto', 'Tibiriça', 'Cachoeira do Sul', 1597, 'RS', '03620421013', 96503680, 996722363, '123', 'Imagens\\user\\user1.jpg'),
	(2, 'Pedro Machado', 'pedri@gmail.com', 'Carlos Miguel', 'Noemia', 'Cachoeira do Sul', 2587, 'RS', '03652478910', 96503680, 998756325, '123', 'Imagensuseruser2.jpg');
/*!40000 ALTER TABLE `usuario` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
