-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           10.4.27-MariaDB - mariadb.org binary distribution
-- OS do Servidor:               Win64
-- HeidiSQL Versão:              12.3.0.6589
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
  `foto` varchar(255) DEFAULT 'vazio.jpg',
  PRIMARY KEY (`idReceita`),
  KEY `fk_bancoReceita_bancoUsuario_idx` (`autor`),
  CONSTRAINT `fk_bancoReceita_bancoUsuario` FOREIGN KEY (`autor`) REFERENCES `bancousuario` (`idUsuario`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- Copiando dados para a tabela receitasdaora.bancoreceita: ~4 rows (aproximadamente)
INSERT INTO `bancoreceita` (`idReceita`, `nome`, `autor`, `ingredientes`, `modoPreparo`, `tempoPreparo`, `foto`) VALUES
	(1, 'Fricassê de Frango', 3, '1 lata de creme de leite\r;1 copo de requeijão cremoso\r;2 peitos de frango desfiados\r;100g de batata palha\r;1 pitada de sal\r;1 lata de milho verde\r;100g de azeitona sem caroço\r;200g de mussarela fatiada\r;1 xícara de água', 'Comece batendo o milho, o requeijão, o creme de leite e a água no liquidificador. Em seguida, refogue o creme do liquidificador com o frango desfiado, azeitonas e sal até ficar com uma textura espessa. Depois, coloque o refogado em uma assadeira, cubra com mussarela e espalhe a batata palha por cima. Deixe no forno até borbulhar, e quando pronto, sirva com arroz branco.', 30, '1686943778frango.png'),
	(2, 'Cordeiro ao Molho de Vinho do Porto com Aligot e Shimeji', 2, '200 grama(s) de queijo minas\r;200 grama(s) de shitake\r;1 e 1/2 de cebola\r;4 dente(s) de alho\r;1 talo(s) de salsão\r;250 ml(s) de vinho do Porto\r;400 grama(s) de lombo de cordeiro\r;1 ramo(s) de hortelã\r;de pimenta a gosto\r;800 grama(s) de batata\r;300 ml(s) de creme de leite\r;100 ml(s) de leite\r;150 grama(s) de manteiga\r;200 grama(s) de queijo gruyère', 'Descasque as batatas e as cozinhe até ficarem macias. Amasse as batatas, acrescente 50 ml de leite e passe a mistura por uma peneira. Reserve. Pique as cebolas finamente, pique bem dois dentes de alho, o talo de salsão e faça um refogado até dourar. Acrescente o vinho e deixe reduzir até metade do volume. Passe na peneira e reserve. Leve o molho para o fogão e reduza até a textura do molho cobrir as costas de uma colher. Reserve. Tempere o coerdeiro com sal, pimenta, hortelã e alho. Reserve por 30 minutos. Em uma panela, acrescente o leite, 100 ml de creme de leite, 80 g de manteiga e 1/3 dos queijos. Misture até obter uma mistura homogênea e reserve. Pique os cogumelos em lâminas e reserve. Esquente uma frigideira e grelhe os lombos de cordeiro. A carne de cordeiro deve ser servida ao ponto menos e deve descansar por cinco minutos. Acrescente manteiga à frigideira que você grelhou os cordeiros e salteie os cogumelos. Finalize o aligot com o restante dos queijos, adicionando creme de leite caso a mistura não apresente leveza. Sirva imediatamente junto ao cordeiro, o shitake e o molho.', 90, '1686945705imagem_2023-06-16_170052089.png'),
	(3, 'Petit Gateau', 3, '250g de manteiga sem sal\r;300g de chocolate meio amargo\r;5 gemas\r;5 ovos inteiros\r;170g de açúcar\r;100g de farinha de trigo peneirada\r;50g de açúcar de confeiteiro\r;4 forminhas redondas de 6cm de diâmetro, de preferência antiaderentes\r;Manteiga para untar as forminhas\r;Sorvete de chocolate branco para acompanhar ao servir', 'Preaqueça o forno a 180º C. Unte as forminhas com manteiga, ponha-as sobre uma assadeira e reserve. Derreta a manteiga e o chocolate no micro-ondas. Bata à mão as gemas, os ovos, açúcar e, por último, a farinha. Adicione o chocolate derretido à mistura e continue batendo até obter uma massa homogênea. Ponha a massa nas forminhas e leve ao forno por 4 minutos ou até que a superfície dos bolinhos esteja assada. Desenforme cada bolinho num prato e polvilhe com o açúcar de confeiteiro. Sirva imediatamente com sorvete de chocolate branco.', 20, '1686946262imagem_2023-06-16_171100431.png'),
	(4, 'Joelho de presunto e queijo', 3, 'MASSA\r;400 gramas de farinha de trigo\r;1 xícara de leite morno\r;100 ml de óleo\r;1 colher bem cheia de açúcar\r;1 pitada de sal\r;1 colher de fermento biológico\r;RECHEIO\r;300 gramas de presunto\r;300 gramas de queijo prato\r;100 gramas de requeijão\r;Orégano a gosto', 'MASSA -> Misture o leite morno com o fermento, sal e açúcar. Agora, leve essa mistura para uma vasilha e adicione o óleo junte a farinha de trigo. Sove por cerca de 10 minutos. Espere a massa crescer por 1 hora. Sove novamente e espere crescer. Pronto, agora basta rechear e levar para assar em forno pré-aquecido em 180 graus por cerca de 15 minutos. RECHEIO -> Misture todos os ingredientes em uma vasilha e coloque dentro da massa.', 180, '1686946720imagem_2023-06-16_171620233.png');

-- Copiando estrutura para tabela receitasdaora.bancousuario
DROP TABLE IF EXISTS `bancousuario`;
CREATE TABLE IF NOT EXISTS `bancousuario` (
  `idUsuario` int(11) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(60) NOT NULL,
  `email` varchar(200) NOT NULL,
  `senha` varchar(200) NOT NULL,
  `formacao` text DEFAULT NULL,
  `foto` varchar(255) DEFAULT 'vazio.png',
  PRIMARY KEY (`idUsuario`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- Copiando dados para a tabela receitasdaora.bancousuario: ~7 rows (aproximadamente)
INSERT INTO `bancousuario` (`idUsuario`, `usuario`, `email`, `senha`, `formacao`, `foto`) VALUES
	(1, 'superuser', 'super@user.com', '$2y$10$IPycESWF9YLp01/D5rMLHeEbBC1471XcFIR0fD9AGvqXtKbHLY8JC', 'super', '1686875144sudo.png'),
	(2, 'Henrique Foagraça', 'foagraca.panicoschef@mail.com', '$2y$10$hS3e2ojda8BBBtZea16ElOExv3ILgpZER5LpOEgkXSJ.20oq19FcS', 'MasterChef', '1686937579imagem_2023-06-16_144503853.png'),
	(3, 'Erick Jacão', 'jacao.panicoschef@mail.com', '$2y$10$dQsFVFOb.xqwUXiDYeIgvOUJRkwHpZOGw1Hbs31smFJcCjBt5xbHS', 'MasterChef', '1686937708imagem_2023-06-16_144707442.png'),
	(4, 'Mana Bruscheta', 'mana123@mail.com', '$2y$10$mn6y5kLBtC1RRyTVBusFauqB8/eDH5EbLxhvv27RKq9ZwSXz.qoJG', NULL, '1686937934imagem_2023-06-16_145143754.png'),
	(5, 'Paolha Cassarolha', 'cassarolha.panicoschef@mail.com', '$2y$10$lCToKVn0LA7pJWRj9PtapuF2X9zYO/9pMyYgpkQF7Cd2uJ03s4ucy', 'Masterchef', '1686938078imagem_2023-06-16_145345176.png'),
	(7, 'Chinesa', 'basilela@mail.com', '$2y$10$u5GTfSDyG9u0vK8YM04AjuXFUDzs1lK78ALR.vcC9IeFXtDlLY7Sm', NULL, '1686947323imagem_2023-06-16_172811313.png'),
	(8, 'Índio Ana Jones', 'indiomtoloko@mail.com', '$2y$10$uaoAg88OYEm79bExyqZjzemfaBlulCt0qxgXFarzucinXAUrJCOU.', NULL, '1687170030indioanajones.jpg');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
