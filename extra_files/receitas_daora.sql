-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           10.4.28-MariaDB - mariadb.org binary distribution
-- OS do Servidor:               Win64
-- HeidiSQL Versão:              12.5.0.6677
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Copiando estrutura do banco de dados para receitasdaora
DROP DATABASE IF EXISTS `receitasdaora`;
CREATE DATABASE IF NOT EXISTS `receitasdaora` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci */;
USE `receitasdaora`;

-- Copiando estrutura para tabela receitasdaora.bancoreceita
DROP TABLE IF EXISTS `bancoreceita`;
CREATE TABLE IF NOT EXISTS `bancoreceita` (
  `idReceita` int(11) NOT NULL AUTO_INCREMENT,
  `nome` text NOT NULL,
  `autor` int(11) NOT NULL,
  `ingredientes` text NOT NULL,
  `modoPreparo` text NOT NULL,
  `tempoPreparo` int(11) NOT NULL,
  `foto` varchar(255) DEFAULT 'nophoto.png',
  PRIMARY KEY (`idReceita`),
  KEY `fk_bancoReceita_bancoUsuario_idx` (`autor`),
  CONSTRAINT `fk_bancoReceita_bancoUsuario` FOREIGN KEY (`autor`) REFERENCES `bancousuario` (`idUsuario`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- Copiando dados para a tabela receitasdaora.bancoreceita: ~1 rows (aproximadamente)
INSERT INTO `bancoreceita` (`idReceita`, `nome`, `autor`, `ingredientes`, `modoPreparo`, `tempoPreparo`, `foto`) VALUES
	(1, 'Teste', 1, 'a; va; ca; da; fa; ga', 'wjfiejwfwifoejifjeiofjeiwofjeifjioewjfiodsifjojsioxjfkkmfenfejiofjeiofhjeofhbueihfu', 12, 'nophoto.png');

-- Copiando estrutura para tabela receitasdaora.bancousuario
DROP TABLE IF EXISTS `bancousuario`;
CREATE TABLE IF NOT EXISTS `bancousuario` (
  `idUsuario` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(60) NOT NULL,
  `email` varchar(200) NOT NULL,
  `senha` varchar(200) NOT NULL,
  `formacao` text DEFAULT NULL,
  `foto` varchar(255) DEFAULT 'nophoto.png',
  PRIMARY KEY (`idUsuario`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- Copiando dados para a tabela receitasdaora.bancousuario: ~1 rows (aproximadamente)
INSERT INTO `bancousuario` (`idUsuario`, `nome`, `email`, `senha`, `formacao`, `foto`) VALUES
	(1, 'admin', 'admin@mail.com', '123', 'Mestrado', 'nophoto.png');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
