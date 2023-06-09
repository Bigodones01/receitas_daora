-- --------------------------------------------------------
-- Arquivo criado pela exportação do banco de dados pelo HeidiSQL
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
CREATE DATABASE IF NOT EXISTS `receitasdaora` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci */;
USE `receitasdaora`;

-- Copiando estrutura para tabela receitasdaora.bancoreceita
CREATE TABLE IF NOT EXISTS `bancoreceita` (
  `idReceita` int(11) NOT NULL AUTO_INCREMENT,
  `nome` text NOT NULL,
  `autor` int(11) NOT NULL,
  `ingredientes` text NOT NULL,
  `modoPreparo` text NOT NULL,
  `tempoPreparo` int(11) NOT NULL,
  PRIMARY KEY (`idReceita`),
  KEY `fk_bancoReceita_bancoUsuario_idx` (`autor`),
  CONSTRAINT `fk_bancoReceita_bancoUsuario` FOREIGN KEY (`autor`) REFERENCES `bancousuario` (`idUsuario`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- Copiando estrutura para tabela receitasdaora.bancousuario
CREATE TABLE IF NOT EXISTS `bancousuario` (
  `idUsuario` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(60) NOT NULL,
  `email` varchar(200) NOT NULL,
  `senha` varchar(200) NOT NULL,
  `formacao` text DEFAULT '"N/A"',
  PRIMARY KEY (`idUsuario`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- Exportação de dados foi desmarcado.

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
