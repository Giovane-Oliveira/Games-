-- --------------------------------------------------------
-- Servidor:                     localhost
-- Versão do servidor:           10.1.28-MariaDB - mariadb.org binary distribution
-- OS do Servidor:               Win32
-- HeidiSQL Versão:              9.4.0.5125
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Copiando estrutura do banco de dados para projetogame
CREATE DATABASE IF NOT EXISTS `projetogame` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `projetogame`;

-- Copiando estrutura para tabela projetogame.chat
CREATE TABLE IF NOT EXISTS `chat` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `id_de` int(100) NOT NULL,
  `id_para` int(100) NOT NULL,
  `mensagem` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela projetogame.chat: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `chat` DISABLE KEYS */;
/*!40000 ALTER TABLE `chat` ENABLE KEYS */;

-- Copiando estrutura para tabela projetogame.game
CREATE TABLE IF NOT EXISTS `game` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nomeGame` varchar(255) DEFAULT NULL,
  `descricao` text,
  `imgCapa` varchar(255) DEFAULT NULL,
  `disponivel` int(1) DEFAULT '0',
  `usuario_id` int(10) DEFAULT NULL,
  `genero_id` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela projetogame.game: ~4 rows (aproximadamente)
/*!40000 ALTER TABLE `game` DISABLE KEYS */;
INSERT IGNORE INTO `game` (`id`, `nomeGame`, `descricao`, `imgCapa`, `disponivel`, `usuario_id`, `genero_id`) VALUES
	(1, 'Dead Rising 4 - Xbox One', 'Dead Rising 4 marca o retorno do jornalista fotogrÃ¡fico Frank West em um novo capÃ­tulo de uma das franquias de jogos de zumbis mais populares de todos os tempos. Com um nÃ­vel inigualÃ¡vel de personalizaÃ§Ã£o de armas e personagens, novas caracterÃ­sticas ambiciosas como novas classes de zumbis e exoarmaduras, Dead Rising 4 traz uma experiÃªncia emocionante, na qual os jogadores exploram, buscam itens e lutam para sobreviver em um ambiente aberto Ã©pico.', '../Imagens/game/cf8ce9fe1413b96152aafa6385da8fa7.jpg', 0, 2, 1),
	(2, 'Grand Theft Auto V - Xbox 5555', 'Grand Theft Auto V Ã© um jogo eletrÃ´nico de aÃ§Ã£o-aventura desenvolvido pela Rockstar North e publicado pela Rockstar Games. ... O modo multijogador, Grand Theft Auto Online, permite que atÃ© trinta jogadores explorem o mundo e entrem em partidas competitivas ou cooperativas. ', '../Imagens/game/43c3c7310be8b2f45b1c7b8d41c54dd5.jpg', 0, 1, 1),
	(3, 'The sims 4 - Xbox One', 'The Sims 4. The Sims 4 Ã© o quarto tÃ­tulo da franquia de jogos eletrÃ´nicos de simulaÃ§Ã£o de vida The Sims, desenvolvido pela Maxis e The Sims Studio, e publicado pela Electronic Arts.', '../Imagens/game/cf5003eb8428a913deaf3aed357d9fb5.jpg', 0, 3, 7),
	(4, 'Need for Speed Rivals - PS3', 'O jogo permanece com o estilo de seus antecessores sobre pistas de personalizaÃ§Ãµes de veÃ­culos estÃ©ticas, como atualizaÃ§Ãµes de desempenho, trabalhos de pintura, decalques e juntas podem ser modificados. A Ferrari foi oficialmente retornada Ã  franquia, pela primeira vez em 11 anos, desde Hot Pursuit 2 em 2002 (embora jÃ¡ apareceu em 2009 com a mudanÃ§a de conteÃºdo para download do Xbox 360) com o F12berlinetta ser o primeiro veÃ­culo confirmado, a Ferrari.', '../Imagens/game/cc38ab95090a5d8f6d7f24b7f9ad1e94.jpg', 0, 3, 10);
/*!40000 ALTER TABLE `game` ENABLE KEYS */;

-- Copiando estrutura para tabela projetogame.genero
CREATE TABLE IF NOT EXISTS `genero` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nomeGenero` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela projetogame.genero: ~8 rows (aproximadamente)
/*!40000 ALTER TABLE `genero` DISABLE KEYS */;
INSERT IGNORE INTO `genero` (`id`, `nomeGenero`) VALUES
	(1, 'Ação'),
	(2, 'Aventura'),
	(3, 'Luta'),
	(4, 'Tiro'),
	(5, 'RPG'),
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
  `id` int(100) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `rua` varchar(255) DEFAULT NULL,
  `bairro` varchar(255) DEFAULT NULL,
  `cidade` varchar(255) DEFAULT NULL,
  `casa` int(10) DEFAULT NULL,
  `estado` varchar(2) DEFAULT NULL,
  `cpf` char(11) DEFAULT NULL,
  `cep` int(8) DEFAULT NULL,
  `telefone` int(20) NOT NULL,
  `senha` varchar(50) DEFAULT NULL,
  `imgPerfil` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela projetogame.usuario: ~4 rows (aproximadamente)
/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
INSERT IGNORE INTO `usuario` (`id`, `nome`, `email`, `rua`, `bairro`, `cidade`, `casa`, `estado`, `cpf`, `cep`, `telefone`, `senha`, `imgPerfil`) VALUES
	(1, 'Maurilio', 'aa@aaa.com', 'Estrada Volta da Charqueada', 'Volta da Charqueada', 'Cachoeira do Sul', 2198, 'RS', '03707910080', 96505830, 2147483647, '123', '../Imagens/user/687ae7305f6df4c0d27ef563e83982db.jpg'),
	(2, 'AndrÃ© Carvalho', 'andreCR@gmail.com', 'Rua Encruzilhada do Sul', 'Jardim MauÃ¡', 'Novo Hamburgo', 3110, 'RS', '5199821445', 93548200, 2147483647, '123', '../Imagens/user/ab2af97894b5fb71615b40fb8650e1d9.png'),
	(3, 'Rebeca Santos', 'ree_santos@hotmail.com', 'Rua Dona HermÃ­nia', 'Drews', 'Cachoeira do Sul', 1579, 'RS', '35707910024', 96501062, 2147483647, '123', '../Imagens/user/930195cc127573eed65716e3efae0f84.png'),
	(4, 'Alison Dias', 'alison@genteterra.com', 'Rua Gustavo Peixoto', 'TibiriÃ§a', 'Cachoeira do Sul', 1215, 'RS', '03701110024', 96503680, 2147483647, '123', '../Imagens/user/7cf003c0346a52a7084e612d5aabc4a5.png');
/*!40000 ALTER TABLE `usuario` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
