CREATE DATABASE  IF NOT EXISTS `gerenciadorimagens` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `gerenciadorimagens`;
-- MySQL dump 10.13  Distrib 5.7.17, for Win64 (x86_64)
--
-- Host: localhost    Database: gerenciadorimagens
-- ------------------------------------------------------
-- Server version	5.7.19-log

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `imagem`
--

DROP TABLE IF EXISTS `imagem`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `imagem` (
  `id` bigint(20) NOT NULL,
  `titulo` varchar(30) CHARACTER SET utf8 NOT NULL,
  `descricao` varchar(60) CHARACTER SET utf8 NOT NULL,
  `endereco` varchar(250) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `imagem`
--

LOCK TABLES `imagem` WRITE;
/*!40000 ALTER TABLE `imagem` DISABLE KEYS */;
INSERT INTO `imagem` VALUES (20171119011109,'Paisagem Pôr do Sol','Uma imagem de uma mulher com o pôr do sol ao fundo.','http://localhost/gerenciadorImagens/imagens_bd/20171119011109.png'),(20171119014117,'Noite estrelada','Acampando na floresta sobre um céu estrelado.','http://localhost/gerenciadorImagens/imagens_bd/20171119014117.png'),(20171119014140,'Inverno rigoroso','Paisagem de montanhas sobre neve em no inverno.','http://localhost/gerenciadorImagens/imagens_bd/20171119014140.png'),(20171119014157,'Homem voando','Homem voando sobre montanha.','http://localhost/gerenciadorImagens/imagens_bd/20171119014157.png'),(20171119014219,'Homem na praia','Um homem olhando para o horizonte em uma praia deserta.','http://localhost/gerenciadorImagens/imagens_bd/20171119014219.png'),(20171119014241,'Balão','Um balão colorido no céu, com sol atrás das montanhas.','http://localhost/gerenciadorImagens/imagens_bd/20171119014241.png');
/*!40000 ALTER TABLE `imagem` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-11-20 22:48:58
