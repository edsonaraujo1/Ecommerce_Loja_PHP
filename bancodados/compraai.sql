-- MySQL Administrator dump 1.4
--
-- ------------------------------------------------------
-- Server version	5.0.45-community-nt


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


--
-- Create schema site
--

CREATE DATABASE /*!32312 IF NOT EXISTS*/ site;
USE site;

--
-- Table structure for table `site`.`categoria_loja`
--

DROP TABLE IF EXISTS `categoria_loja`;
CREATE TABLE `categoria_loja` (
  `cod_categ` int(11) NOT NULL auto_increment,
  `descricao` varchar(50) default NULL,
  `data` varchar(10) default NULL,
  `logo_loja` varchar(100) default NULL,
  PRIMARY KEY  (`cod_categ`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `site`.`categoria_loja`
--

/*!40000 ALTER TABLE `categoria_loja` DISABLE KEYS */;
INSERT INTO `categoria_loja` (`cod_categ`,`descricao`,`data`,`logo_loja`) VALUES 
 (1,'.:Selecione a Vitrine.:','30/07/2009',NULL),
 (2,'Herbalife','02/08/2009','graphics/banner_herbalife.gif'),
 (3,'Nutrição','26/09/2009',NULL),
 (4,'Avon Cosmeticos','09/12/2010','graphics/avon.png'),
 (5,'Natura Mulher','09/12/2010','graphics/natura.png'),
 (6,'Polishopping TV','09/12/2010','graphics/polishopping1.png'),
 (7,'Bijuterias e Acessorios','09/12/2010','graphics/bijuteria.png');
/*!40000 ALTER TABLE `categoria_loja` ENABLE KEYS */;


--
-- Table structure for table `site`.`categoria_prod`
--

DROP TABLE IF EXISTS `categoria_prod`;
CREATE TABLE `categoria_prod` (
  `cod_categ` int(11) NOT NULL auto_increment,
  `descricao` varchar(20) default NULL,
  `sub_codigo` int(11) default NULL,
  `data` varchar(10) default NULL,
  PRIMARY KEY  (`cod_categ`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `site`.`categoria_prod`
--

/*!40000 ALTER TABLE `categoria_prod` DISABLE KEYS */;
INSERT INTO `categoria_prod` (`cod_categ`,`descricao`,`sub_codigo`,`data`) VALUES 
 (1,'Selecione',NULL,'29/07/2009'),
 (2,'Micros Desktop',2,'29/07/2009'),
 (3,'Notebook',2,'29/07/2009'),
 (4,'Handhelds',2,'29/07/2009'),
 (5,'DVDs - CDs',4,'29/07/2009'),
 (6,'Monitores',2,'29/07/2009'),
 (7,'Bijuteria',1,'29/07/2009'),
 (8,'Videos Adultos',1,'30/07/2009'),
 (9,'Impressoras',4,'30/07/2009'),
 (10,'Garagem',1,'30/07/2009'),
 (11,'Herbalife',1,'30/07/2009'),
 (12,'Nutrição',1,'02/08/2009'),
 (13,'Auto-Moto',1,'25/10/2009'),
 (14,'Informatica',1,'25/10/2009'),
 (15,'Netbook',2,'04/01/2011'),
 (16,'Palm',2,'04/01/2011'),
 (17,'Smartphone',3,'04/01/2011'),
 (18,'LG',3,'04/01/2011'),
 (19,'HTC',3,'04/01/2011'),
 (20,'Motorola',3,'04/01/2011'),
 (21,'Outras Marcas',3,'04/01/2011'),
 (22,'Scaners',4,'04/01/2011'),
 (23,'Web-Cam',4,'04/01/2011'),
 (24,'Fontes',4,'04/01/2011'),
 (25,'Placa Mae',4,'04/01/2011');
/*!40000 ALTER TABLE `categoria_prod` ENABLE KEYS */;


--
-- Table structure for table `site`.`categoria_prod1`
--

DROP TABLE IF EXISTS `categoria_prod1`;
CREATE TABLE `categoria_prod1` (
  `cod_categ` int(11) NOT NULL auto_increment,
  `descricao` varchar(20) default NULL,
  `sub_cod` int(11) default NULL,
  `data` varchar(10) default NULL,
  PRIMARY KEY  (`cod_categ`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `site`.`categoria_prod1`
--

/*!40000 ALTER TABLE `categoria_prod1` DISABLE KEYS */;
INSERT INTO `categoria_prod1` (`cod_categ`,`descricao`,`sub_cod`,`data`) VALUES 
 (1,'Compraai Vitrine',0,'29/12/2010'),
 (2,'Informatica',0,'29/12/2010'),
 (3,'Celular',0,'29/12/2010'),
 (4,'Acessorios',0,'29/12/2010');
/*!40000 ALTER TABLE `categoria_prod1` ENABLE KEYS */;


--
-- Table structure for table `site`.`enquete`
--

DROP TABLE IF EXISTS `enquete`;
CREATE TABLE `enquete` (
  `id` int(10) NOT NULL auto_increment,
  `descricao` varchar(255) NOT NULL default '0',
  `qtdcampos` int(10) unsigned default '0',
  `campos` text NOT NULL,
  `valorcampos` varchar(100) default '0',
  `ativa` tinyint(1) unsigned default '0',
  PRIMARY KEY  (`id`),
  KEY `id` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `site`.`enquete`
--

/*!40000 ALTER TABLE `enquete` DISABLE KEYS */;
INSERT INTO `enquete` (`id`,`descricao`,`qtdcampos`,`campos`,`valorcampos`,`ativa`) VALUES 
 (1,'Qual sua opniao sobre nosso site?',3,'Ótimo|Bom|Ruim','57|59|3',1);
/*!40000 ALTER TABLE `enquete` ENABLE KEYS */;


--
-- Table structure for table `site`.`estados`
--

DROP TABLE IF EXISTS `estados`;
CREATE TABLE `estados` (
  `id_estado` smallint(5) unsigned NOT NULL auto_increment,
  `uf` char(2) NOT NULL,
  `estado` varchar(19) NOT NULL,
  PRIMARY KEY  (`id_estado`),
  UNIQUE KEY `estado` (`estado`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `site`.`estados`
--

/*!40000 ALTER TABLE `estados` DISABLE KEYS */;
INSERT INTO `estados` (`id_estado`,`uf`,`estado`) VALUES 
 (1,'AC','Acre'),
 (2,'AL','Alagoas'),
 (3,'AP','Amapá'),
 (4,'AM','Amazonas'),
 (5,'BA','Bahia'),
 (6,'CE','Ceará'),
 (7,'DF','Distrito Federal'),
 (8,'ES','Espirito Santo'),
 (9,'GO','Goiás'),
 (10,'MA','Maranhão'),
 (11,'MT','Mato Grosso'),
 (12,'MS','Mato Grosso do Sul'),
 (13,'MG','Minas Gerais'),
 (14,'PA','Pará'),
 (15,'PB','Paraíba'),
 (16,'PR','Paraná'),
 (17,'PE','Pernambuco'),
 (18,'PI','Piauí'),
 (19,'RN','Rio Grande do Norte'),
 (20,'RS','Rio Grande do Sul'),
 (21,'RJ','Rio de Janeiro'),
 (22,'RO','Rondônia'),
 (23,'RR','Roraima'),
 (24,'SC','Santa Catarina'),
 (25,'SP','São Paulo'),
 (26,'SE','Sergipe'),
 (27,'TO','Tocantins');
/*!40000 ALTER TABLE `estados` ENABLE KEYS */;


--
-- Table structure for table `site`.`fale`
--

DROP TABLE IF EXISTS `fale`;
CREATE TABLE `fale` (
  `id` int(11) NOT NULL auto_increment,
  `nome` varchar(100) default NULL,
  `email` varchar(100) default NULL,
  `assunto` varchar(100) default NULL,
  `mensagem` text,
  `data` varchar(30) default NULL,
  `hora` varchar(14) default NULL,
  `user` varchar(40) default NULL,
  `ip` varchar(40) default NULL,
  `navegador` varchar(200) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=82 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `site`.`fale`
--

/*!40000 ALTER TABLE `fale` DISABLE KEYS */;
INSERT INTO `fale` (`id`,`nome`,`email`,`assunto`,`mensagem`,`data`,`hora`,`user`,`ip`,`navegador`) VALUES 
 (1,'ENDREWS FILIPI ROCHA ARAUJO','endrewsaraujo@hotmail.com','Criticas','oseu saite e muito loco','24/10/2009  18:23:26','20091024182326','ENDREWS','127.0.0.1',' Netscape'),
 (2,'EDSON DE ARAUJO','edsonaraujo1@hotmail.com','Sugestoes','oi','28/11/2010  19:55:48','20101128195548','HOLODEK','127.0.0.1','MS Internet Explorer'),
 (3,'EDSON DE ARAUJO','edsonaraujo1@hotmail.com','Sugestoes','oi','28/11/2010  19:58:48','20101128195848','HOLODEK','127.0.0.1','MS Internet Explorer'),
 (4,' edson',' edsonaraujo1@hotmail.com','Sugestoes','ola teste','20/12/2010  15:55:03','20101220155503','VISITANTE','127.0.0.1','MS Internet Explorer'),
 (5,' edson','edsonaraujo1@hotmail.com','Sugestoes','olaaaaaa.','20/12/2010  15:59:25','20101220155925','VISITANTE','127.0.0.1','MS Internet Explorer'),
 (6,' edson','edsonaraujo1@hotmail.com','Sugestoes','oiiiiiiieeeeee','20/12/2010  16:01:03','20101220160103','VISITANTE','127.0.0.1','MS Internet Explorer'),
 (7,' edson','edsonaraujo1@hotmail.com','Sugestoes','aioooooo','20/12/2010  16:01:56','20101220160156','VISITANTE','127.0.0.1','MS Internet Explorer');
INSERT INTO `fale` (`id`,`nome`,`email`,`assunto`,`mensagem`,`data`,`hora`,`user`,`ip`,`navegador`) VALUES 
 (8,' edson','edson@uol.com.br','Sugestoes','dsoidoifdoifdo','20/12/2010  16:19:44','20101220161944','VISITANTE','127.0.0.1','MS Internet Explorer'),
 (9,' edson','edsonaraujo1@hotmail.com','Sugestoes','teste de teste','20/12/2010  16:37:33','20101220163733','VISITANTE','127.0.0.1','MS Internet Explorer'),
 (10,' edson','edsonaraujo1@hotmail.com','Sugestoes','fdfdfdfd','20/12/2010  17:00:01','20101220170001','VISITANTE','127.0.0.1','MS Internet Explorer'),
 (11,' edson','edsonaraujo1@hotmail.com','Sugestoes','refsfdfd','20/12/2010  17:02:23','20101220170223','VISITANTE','127.0.0.1','MS Internet Explorer'),
 (12,' edson','edsonaraujo1@hotmail.com','Sugestoes','oioiiiiii','20/12/2010  17:59:45','20101220175945','VISITANTE','127.0.0.1','MS Internet Explorer'),
 (13,' edson','edsonaraujo1@hotmail.com','Sugestoes','fdjfkdjfkdjfkdjfkdj','20/12/2010  18:01:21','20101220180121','VISITANTE','127.0.0.1','MS Internet Explorer'),
 (14,' edson','edsonaraujo1@hotmail.com','Sugestoes','dsdsdsds','20/12/2010  18:27:27','20101220182727','VISITANTE','127.0.0.1','MS Internet Explorer');
INSERT INTO `fale` (`id`,`nome`,`email`,`assunto`,`mensagem`,`data`,`hora`,`user`,`ip`,`navegador`) VALUES 
 (15,' edson','edsonaraujo1@hotmail.com','Sugestoes','fdfdfdfdfd','20/12/2010  18:30:21','20101220183021','VISITANTE','127.0.0.1','MS Internet Explorer'),
 (16,' eds','edsonaraujo1@hotmail.com','Sugestoes','dsdsds','20/12/2010  18:32:14','20101220183214','VISITANTE','127.0.0.1','MS Internet Explorer'),
 (17,' edson','edsonaraujo1@hotmail.com','Sugestoes','dsdsds','20/12/2010  18:32:33','20101220183233','VISITANTE','127.0.0.1','MS Internet Explorer'),
 (18,' edson','edsonaraujo1@hotmail.com','Sugestoes','dsdsdsds','20/12/2010  18:36:17','20101220183617','VISITANTE','127.0.0.1','MS Internet Explorer'),
 (19,' edson','edsonaraujo1@hotmail.com','Sugestoes','fdfdfd','20/12/2010  18:37:55','20101220183755','VISITANTE','127.0.0.1','MS Internet Explorer'),
 (20,' edson','edsonaraujo1@hotmail.com','Sugestoes','ddfdfdfd','20/12/2010  18:39:30','20101220183930','VISITANTE','127.0.0.1','MS Internet Explorer'),
 (21,' edson','edsonaraujo1@hotmail.com','Sugestoes','fdfdfdf','20/12/2010  18:41:28','20101220184128','VISITANTE','127.0.0.1','MS Internet Explorer');
INSERT INTO `fale` (`id`,`nome`,`email`,`assunto`,`mensagem`,`data`,`hora`,`user`,`ip`,`navegador`) VALUES 
 (22,' edson','edsonaraujo1@hotmail.com','Sugestoes','fdfdfdfd','20/12/2010  18:42:58','20101220184258','VISITANTE','127.0.0.1','MS Internet Explorer'),
 (23,' edson','edsonaraujo1@hotmail.com','Sugestoes','fdfdfd','20/12/2010  18:43:37','20101220184337','VISITANTE','127.0.0.1','MS Internet Explorer'),
 (24,' edson','edsonaraujo1@hotmail.com','Sugestoes','dfdfdfd','20/12/2010  18:45:04','20101220184504','VISITANTE','127.0.0.1','MS Internet Explorer'),
 (25,' edson','edsonaraujo1@hotmail.com','Sugestoes','dsdfsds','20/12/2010  18:45:32','20101220184532','VISITANTE','127.0.0.1','MS Internet Explorer'),
 (26,' edson','edsonaraujo1@hotmail.com','Sugestoes','redsds','20/12/2010  18:47:41','20101220184741','VISITANTE','127.0.0.1','MS Internet Explorer'),
 (27,' edson','edsonaraujo1@hotmail.com','Sugestoes','fdfdfd','20/12/2010  18:51:39','20101220185139','VISITANTE','127.0.0.1','MS Internet Explorer'),
 (28,' edson','edsonaraujo1@hotmail.com','Sugestoes','fdfdfdfd','20/12/2010  18:54:23','20101220185423','VISITANTE','127.0.0.1','MS Internet Explorer');
INSERT INTO `fale` (`id`,`nome`,`email`,`assunto`,`mensagem`,`data`,`hora`,`user`,`ip`,`navegador`) VALUES 
 (29,' edson','edsonaraujo1@hotmail.com','Sugestoes','rere','20/12/2010  18:56:07','20101220185607','VISITANTE','127.0.0.1','MS Internet Explorer'),
 (30,' edson','edsonaraujo1@hotmail.com','Sugestoes','fdfdfdfd','20/12/2010  18:57:22','20101220185722','VISITANTE','127.0.0.1','MS Internet Explorer'),
 (31,' edson','edsonaraujo1@hotmail.com','Sugestoes','fdfdfd','20/12/2010  18:58:37','20101220185837','VISITANTE','127.0.0.1','MS Internet Explorer'),
 (32,' edson','edsonaraujo1@hotmail.com','Sugestoes','dsdsds','20/12/2010  18:59:19','20101220185919','VISITANTE','127.0.0.1','MS Internet Explorer'),
 (33,' edson','edsonaraujo1@hotmail.com','Sugestoes','fdfdfdfd','20/12/2010  19:05:49','20101220190549','VISITANTE','127.0.0.1','MS Internet Explorer'),
 (34,' edson','edsonaraujo1@hotmail.com','Sugestoes','fdfdfd','20/12/2010  19:07:05','20101220190705','VISITANTE','127.0.0.1','MS Internet Explorer'),
 (35,' edson','edsonaraujo1@hotmail.com','Sugestoes','dsdsds','20/12/2010  19:08:18','20101220190818','VISITANTE','127.0.0.1','MS Internet Explorer');
INSERT INTO `fale` (`id`,`nome`,`email`,`assunto`,`mensagem`,`data`,`hora`,`user`,`ip`,`navegador`) VALUES 
 (36,' edson','edsonaraujo1@hotmail.com','Sugestoes','fsdsds','20/12/2010  19:09:39','20101220190939','VISITANTE','127.0.0.1','MS Internet Explorer'),
 (37,' edson','edsonaraujo1@hotmail.com','Sugestoes','dsds','20/12/2010  19:10:30','20101220191030','VISITANTE','127.0.0.1','MS Internet Explorer'),
 (38,' edson','edsonaraujo1@hotmail.com','Sugestoes','dsdsds','20/12/2010  19:11:01','20101220191101','VISITANTE','127.0.0.1','MS Internet Explorer'),
 (39,' edson','edsonaraujo1@hotmail.com','Sugestoes','efdfdfd','20/12/2010  19:17:07','20101220191707','VISITANTE','127.0.0.1','MS Internet Explorer'),
 (40,' edson','edsonaraujo1@hotmail.com','Sugestoes','fdfdfd','20/12/2010  19:17:46','20101220191746','VISITANTE','127.0.0.1','MS Internet Explorer'),
 (41,' edson','edsonaraujo1@hotmail.com','Sugestoes','fdfdfd','20/12/2010  19:18:31','20101220191831','VISITANTE','127.0.0.1','MS Internet Explorer'),
 (42,' edson','edsonaraujo1@hotmail.com','Sugestoes','dsdsds','20/12/2010  19:19:47','20101220191947','VISITANTE','127.0.0.1','MS Internet Explorer');
INSERT INTO `fale` (`id`,`nome`,`email`,`assunto`,`mensagem`,`data`,`hora`,`user`,`ip`,`navegador`) VALUES 
 (43,' edson','edsonaraujo1@hotmail.com','Sugestoes','fdfdfd','20/12/2010  19:20:41','20101220192041','VISITANTE','127.0.0.1','MS Internet Explorer'),
 (44,' edson','edsonaraujo1@hotmail.com','Sugestoes','fdfdfd','20/12/2010  19:21:31','20101220192131','VISITANTE','127.0.0.1','MS Internet Explorer'),
 (45,' edson','edsonaraujo1@hotmail.com','Sugestoes','dsds','20/12/2010  19:23:02','20101220192302','VISITANTE','127.0.0.1','MS Internet Explorer'),
 (46,' edson','edsonaraujo1@hotmail.com','Sugestoes','fdfdfdfd','20/12/2010  19:23:43','20101220192343','VISITANTE','127.0.0.1','MS Internet Explorer'),
 (47,' edson','edsonaraujo1@hotmail.com','Sugestoes','dsds','20/12/2010  19:24:18','20101220192418','VISITANTE','127.0.0.1','MS Internet Explorer'),
 (48,' edson','edsonaraujo1@hotmail.com','Sugestoes','fdfdfd','20/12/2010  19:30:09','20101220193009','VISITANTE','127.0.0.1','MS Internet Explorer'),
 (49,' edson','edsonaraujo1@hotmail.com','Sugestoes','fdfdfd','20/12/2010  19:30:32','20101220193032','VISITANTE','127.0.0.1','MS Internet Explorer');
INSERT INTO `fale` (`id`,`nome`,`email`,`assunto`,`mensagem`,`data`,`hora`,`user`,`ip`,`navegador`) VALUES 
 (50,' edson','edsonaraujo1@hotmail.com','Sugestoes','dsdsds','20/12/2010  19:31:44','20101220193144','VISITANTE','127.0.0.1','MS Internet Explorer'),
 (51,' edson','edsonaraujo1@hotmail.com','Sugestoes','dsdsds','20/12/2010  19:33:54','20101220193354','VISITANTE','127.0.0.1','MS Internet Explorer'),
 (52,' edson','edsonaraujo1@hotmail.com','Sugestoes','dsdsds','20/12/2010  19:35:57','20101220193557','VISITANTE','127.0.0.1','MS Internet Explorer'),
 (53,' edson','edsonaraujo1@hotmail.com','Sugestoes','dsdsds','20/12/2010  19:40:35','20101220194035','VISITANTE','127.0.0.1','MS Internet Explorer'),
 (54,' edson','edsonaraujo1@hotmail.com','Sugestoes','dsdsds','20/12/2010  19:41:20','20101220194120','VISITANTE','127.0.0.1','MS Internet Explorer'),
 (55,' edson','edsonaraujo1@hotmail.com','Sugestoes','dsdsds','20/12/2010  19:41:51','20101220194151','VISITANTE','127.0.0.1','MS Internet Explorer'),
 (56,' edson','edsonaraujo1@hotmail.com','Sugestoes','dsds','20/12/2010  19:42:19','20101220194219','VISITANTE','127.0.0.1','MS Internet Explorer');
INSERT INTO `fale` (`id`,`nome`,`email`,`assunto`,`mensagem`,`data`,`hora`,`user`,`ip`,`navegador`) VALUES 
 (57,' edson','edsonaraujo1@hotmail.com','Sugestoes','dsdsds','20/12/2010  19:43:02','20101220194302','VISITANTE','127.0.0.1','MS Internet Explorer'),
 (58,' edson','edsonaraujo1@hotmail.com','Sugestoes','dsds','20/12/2010  19:43:55','20101220194355','VISITANTE','127.0.0.1','MS Internet Explorer'),
 (59,' edson','edsonaraujo1@hotmail.com','Sugestoes','dsdsd','20/12/2010  19:47:29','20101220194729','VISITANTE','127.0.0.1','MS Internet Explorer'),
 (60,' edson','edsonaraujo1@hotmail.com','Sugestoes','dsds','20/12/2010  19:48:37','20101220194837','VISITANTE','127.0.0.1','MS Internet Explorer'),
 (61,' edson','edsonaraujo1@hotmail.com','Sugestoes','dsdsd','20/12/2010  20:05:50','20101220200550','VISITANTE','127.0.0.1','MS Internet Explorer'),
 (62,' edson','edsonaraujo1@hotmail.com','Sugestoes','dsds','20/12/2010  20:10:15','20101220201015','VISITANTE','127.0.0.1','MS Internet Explorer'),
 (63,' edson','edsonaraujo1@hotmail.com','Sugestoes','fdfdfd','20/12/2010  20:28:23','20101220202823','VISITANTE','127.0.0.1','MS Internet Explorer');
INSERT INTO `fale` (`id`,`nome`,`email`,`assunto`,`mensagem`,`data`,`hora`,`user`,`ip`,`navegador`) VALUES 
 (64,'EDSON DE ARAUJO','edsonaraujo1@hotmail.com','Sugestoes','fdfdfd','21/12/2010  12:46:48','20101221124648','HOLODEK','127.0.0.1','MS Internet Explorer'),
 (65,'EDSON DE ARAUJO','edsonaraujo1@hotmail.com','Sugestoes','dsdsd','21/12/2010  12:47:02','20101221124702','HOLODEK','127.0.0.1','MS Internet Explorer'),
 (66,'EDSON DE ARAUJO','edsonaraujo1@hotmail.com','Sugestoes','dsdsds','21/12/2010  12:49:12','20101221124912','HOLODEK','127.0.0.1','MS Internet Explorer'),
 (67,'EDSON DE ARAUJO','edsonaraujo1@hotmail.com','Sugestoes','dsdsds','21/12/2010  12:49:42','20101221124942','HOLODEK','127.0.0.1','MS Internet Explorer'),
 (68,'EDSON DE ARAUJO','edsonaraujo1@hotmail.com','Sugestoes','dsdsds','21/12/2010  12:50:50','20101221125050','HOLODEK','127.0.0.1','MS Internet Explorer'),
 (69,'EDSON DE ARAUJO','edsonaraujo1@hotmail.com','Sugestoes','hjhjhjhjh','21/12/2010  12:51:14','20101221125114','VISITANTE','127.0.0.1','MS Internet Explorer'),
 (70,'EDSON DE ARAUJO','edsonaraujo1@hotmail.com','Sugestoes','hjhjhjhjhjhjhj','21/12/2010  12:51:51','20101221125151','HOLODEK','127.0.0.1','MS Internet Explorer');
INSERT INTO `fale` (`id`,`nome`,`email`,`assunto`,`mensagem`,`data`,`hora`,`user`,`ip`,`navegador`) VALUES 
 (71,'EDSON DE ARAUJO','edsonaraujo1@hotmail.com','Sugestoes','dsdsds','21/12/2010  12:58:18','20101221125818','HOLODEK','127.0.0.1','MS Internet Explorer'),
 (72,'EDSON DE ARAUJO','edsonaraujo1@hotmail.com','Sugestoes','dsdsds','21/12/2010  12:58:48','20101221125848','HOLODEK','127.0.0.1','MS Internet Explorer'),
 (73,'EDSON DE ARAUJO','edsonaraujo1@hotmail.com','Criticas','sdsdsds','21/12/2010  12:59:30','20101221125930','HOLODEK','127.0.0.1','MS Internet Explorer'),
 (74,'EDSON DE ARAUJO','edsonaraujo1@hotmail.com','Sugestoes','fdfdfd','21/12/2010  13:02:15','20101221130215','HOLODEK','127.0.0.1','MS Internet Explorer'),
 (75,'EDSON DE ARAUJO','edsonaraujo1@hotmail.com','Sugestoes','dsdsds','21/12/2010  13:03:42','20101221130342','HOLODEK','127.0.0.1','MS Internet Explorer'),
 (76,'EDSON DE ARAUJO','edsonaraujo1@hotmail.com','Problemas de Acesso','fdfdfd','21/12/2010  13:04:22','20101221130422','HOLODEK','127.0.0.1','MS Internet Explorer'),
 (77,'EDSON DE ARAUJO','edsonaraujo1@hotmail.com','Criticas','dsdsd','21/12/2010  13:14:22','20101221131422','VISITANTE','127.0.0.1','MS Internet Explorer');
INSERT INTO `fale` (`id`,`nome`,`email`,`assunto`,`mensagem`,`data`,`hora`,`user`,`ip`,`navegador`) VALUES 
 (78,'EDSON DE ARAUJO','edsonaraujo1@hotmail.com','Sugestoes','klklk','21/12/2010  15:37:07','20101221153707','HOLODEK','192.168.1.44','MS Internet Explorer'),
 (79,'EDSON DE ARAUJO','edsonaraujo1@hotmail.com','Sugestoes','klklklk','21/12/2010  15:44:07','20101221154407','HOLODEK','192.168.1.61','MS Internet Explorer'),
 (80,' edson de araujo','edsonaraujo1@hotmail.com','Sugestoes','Esta bom mas pode estar melhor ao acha ','13/01/2011  12:57:38','20110113125738','VISITANTE','127.0.0.1','Firefox'),
 (81,'ENDREWS FILIPI ROCHA ARAUJO','endrewsaraujo@hotmail.com','Outros','oi tudo belesa','13/01/2011  14:04:49','20110113140449','ENDREWS','192.168.1.1','Firefox');
/*!40000 ALTER TABLE `fale` ENABLE KEYS */;


--
-- Table structure for table `site`.`log_user_event`
--

DROP TABLE IF EXISTS `log_user_event`;
CREATE TABLE `log_user_event` (
  `id` int(11) NOT NULL auto_increment,
  `IP` varchar(100) default NULL,
  `DATA` varchar(10) default NULL,
  `EVENTO` varchar(200) default NULL,
  `HORA` varchar(20) default NULL,
  `USUARIO` varchar(50) default NULL,
  `ARQUIVO` varchar(100) default NULL,
  `QTD` int(11) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2471 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `site`.`log_user_event`
--

/*!40000 ALTER TABLE `log_user_event` DISABLE KEYS */;
INSERT INTO `log_user_event` (`id`,`IP`,`DATA`,`EVENTO`,`HORA`,`USUARIO`,`ARQUIVO`,`QTD`) VALUES 
 (1,'127.0.0.1','12/11/2010','VISITA NO SITE -','09:44:29','VISITANTE','/novo_visu/visitas.php',1),
 (26,'127.0.0.1','12/11/2010','VISITA NO SITE -','10:03:16','VISITANTE','/novo_visu/senha_erro.php',2),
 (27,'127.0.0.1','12/11/2010','VISITA NO SITE -','10:03:30','VISITANTE','/novo_visu/senha_erro.php',3),
 (28,'127.0.0.1','12/11/2010','VISITA NO SITE -','10:11:14','VISITANTE','/novo_visu/inicio.php',4),
 (29,'127.0.0.1','12/11/2010','VISITA NO SITE -','10:11:25','VISITANTE','/novo_visu/inicio.php',5),
 (30,'192.168.1.44','12/11/2010','VISITA NO SITE -','10:13:01','VISITANTE','/novo_visu/inicio.php',6),
 (31,'192.168.1.44','12/11/2010','VISITA NO SITE -','10:13:28','VISITANTE','/novo_visu/senha_erro.php',7),
 (32,'192.168.1.44','12/11/2010','VISITA NO SITE -','10:15:13','VISITANTE','/novo_visu/inicio.php',8),
 (33,'192.168.1.44','12/11/2010','VISITA NO SITE -','10:15:30','VISITANTE','/novo_visu/inicio.php',9),
 (34,'192.168.1.44','12/11/2010','VISITA NO SITE -','10:16:28','VISITANTE','/novo_visu/inicio.php',10);
INSERT INTO `log_user_event` (`id`,`IP`,`DATA`,`EVENTO`,`HORA`,`USUARIO`,`ARQUIVO`,`QTD`) VALUES 
 (35,'192.168.1.44','12/11/2010','VISITA NO SITE -','10:16:38','VISITANTE','/novo_visu/inicio.php',11),
 (36,'192.168.1.44','12/11/2010','VISITA NO SITE -','10:16:41','VISITANTE','/novo_visu/inicio.php',12),
 (37,'192.168.1.44','12/11/2010','VISITA NO SITE -','10:17:03','VISITANTE','/novo_visu/inicio.php',13),
 (38,'192.168.1.44','12/11/2010','VISITA NO SITE -','10:17:18','VISITANTE','/novo_visu/inicio.php',14),
 (39,'192.168.1.44','12/11/2010','VISITA NO SITE -','10:21:09','VISITANTE','/novo_visu/inicio.php',15),
 (40,'192.168.1.44','12/11/2010','VISITA NO SITE -','12:05:15','VISITANTE','/novo_visu/inicio.php',16),
 (41,'192.168.1.44','12/11/2010','VISITA NO SITE -','12:12:20','VISITANTE','/novo_visu/inicio.php',17),
 (42,'192.168.1.1','13/11/2010','VISITA NO SITE -','19:15:59','VISITANTE','/novo_visu/inicio.php',18),
 (43,'127.0.0.1','13/11/2010','VISITA NO SITE -','22:54:43','VISITANTE','/novo_visu/inicio.php',19),
 (44,'127.0.0.1','13/11/2010','VISITA NO SITE -','23:21:34','VISITANTE','/novo_visu/avaleht.php',20);
INSERT INTO `log_user_event` (`id`,`IP`,`DATA`,`EVENTO`,`HORA`,`USUARIO`,`ARQUIVO`,`QTD`) VALUES 
 (45,'127.0.0.1','13/11/2010','VISITA NO SITE -','23:21:45','VISITANTE','/novo_visu/inicio.php',21),
 (46,'127.0.0.1','13/11/2010','VISITA NO SITE -','23:23:33','VISITANTE','/novo_visu/inicio.php',22),
 (47,'127.0.0.1','13/11/2010','VISITA NO SITE -','23:30:13','VISITANTE','/novo_visu/inicio.php',23),
 (48,'127.0.0.1','13/11/2010','VISITA NO SITE -','23:31:28','VISITANTE','/novo_visu/inicio.php',24),
 (49,'127.0.0.1','13/11/2010','VISITA NO SITE -','23:36:14','VISITANTE','/novo_visu/inicio.php',25),
 (50,'127.0.0.1','13/11/2010','VISITA NO SITE -','23:37:04','VISITANTE','/novo_visu/inicio.php',26),
 (51,'127.0.0.1','13/11/2010','VISITA NO SITE -','23:39:16','VISITANTE','/novo_visu/inicio.php',27),
 (52,'127.0.0.1','13/11/2010','VISITA NO SITE -','23:40:14','VISITANTE','/novo_visu/inicio.php',28),
 (53,'127.0.0.1','13/11/2010','VISITA NO SITE -','23:58:55','VISITANTE','/novo_visu/inicio.php',29),
 (54,'127.0.0.1','13/11/2010','VISITA NO SITE -','23:59:43','VISITANTE','/novo_visu/inicio.php',30);
/*!40000 ALTER TABLE `log_user_event` ENABLE KEYS */;


--
-- Table structure for table `site`.`messenger`
--

DROP TABLE IF EXISTS `messenger`;
CREATE TABLE `messenger` (
  `id` int(11) NOT NULL auto_increment,
  `origem` varchar(40) default NULL,
  `destino` varchar(40) default NULL,
  `data` varchar(10) default NULL,
  `hora` varchar(5) default NULL,
  `texto` text,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=47 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `site`.`messenger`
--

/*!40000 ALTER TABLE `messenger` DISABLE KEYS */;
INSERT INTO `messenger` (`id`,`origem`,`destino`,`data`,`hora`,`texto`) VALUES 
 (1,'','endrews','16/11/2010','15:16',NULL),
 (3,'','endrews','16/11/2010','15:17',NULL),
 (16,'','','19/11/2010','14:11',NULL),
 (17,'','','19/11/2010','14:11',NULL),
 (18,'','','19/11/2010','14:12',NULL);
/*!40000 ALTER TABLE `messenger` ENABLE KEYS */;


--
-- Table structure for table `site`.`messenger_priv`
--

DROP TABLE IF EXISTS `messenger_priv`;
CREATE TABLE `messenger_priv` (
  `id` int(11) NOT NULL auto_increment,
  `origem` varchar(40) default NULL,
  `destino` varchar(40) default NULL,
  `data` varchar(10) default NULL,
  `hora` varchar(5) default NULL,
  `texto` text,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=47 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `site`.`messenger_priv`
--

/*!40000 ALTER TABLE `messenger_priv` DISABLE KEYS */;
INSERT INTO `messenger_priv` (`id`,`origem`,`destino`,`data`,`hora`,`texto`) VALUES 
 (1,'','endrews','16/11/2010','15:16','<font face=verdana size=1>(15:16:09)</font> <font face=verdana size=2 color=><b>&nbsp;diz:</b></font> <font face=verdana size=2> oi</font><br>'),
 (2,'','holodek','16/11/2010','15:17','<font face=verdana size=1>(15:17:03)</font> <font face=verdana size=2 color=><b>&nbsp;diz:</b></font> <font face=verdana size=2> entao bro<img src=../graphics/smilies/crying.gif></font><br>'),
 (3,'','endrews','16/11/2010','15:17','<font face=verdana size=1>(15:17:23)</font> <font face=verdana size=2 color=><b>&nbsp;diz:</b></font> <font face=verdana size=2> como estao as coisas?</font><br>'),
 (4,'','holodek','16/11/2010','15:18','<font face=verdana size=1>(15:18:36)</font> <font face=verdana size=2 color=><b>&nbsp;diz:</b></font> <font face=verdana size=2> entao fala meu</font><br>'),
 (5,'','holodek','16/11/2010','15:20','<font face=verdana size=1>(15:20:45)</font> <font face=verdana size=2 color=><b>&nbsp;diz:</b></font> <font face=verdana size=2> ate</font><br>'),
 (6,'','holodek','16/11/2010','15:22','<font face=verdana size=1>(15:22:00)</font> <font face=verdana size=2 color=><b>&nbsp;diz:</b></font> <font face=verdana size=2> oi</font><br>');
INSERT INTO `messenger_priv` (`id`,`origem`,`destino`,`data`,`hora`,`texto`) VALUES 
 (7,'','holodek','16/11/2010','15:29','<font face=verdana size=1>(15:29:20)</font> <font face=verdana size=2 color=><b>&nbsp;diz:</b></font> <font face=verdana size=2> oi</font><br>'),
 (8,'','holodek','16/11/2010','15:31','<font face=verdana size=1>(15:31:59)</font> <font face=verdana size=2 color=><b>&nbsp;diz:</b></font> <font face=verdana size=2> ola...</font><br>'),
 (9,'','holodek','16/11/2010','15:35','<font face=verdana size=1>(15:35:58)</font> <font face=verdana size=2 color=><b>endrews&nbsp;diz:</b></font> <font face=verdana size=2> oi...</font><br>'),
 (10,'','holodek','16/11/2010','15:36','<font face=verdana size=1>(15:36:27)</font> <font face=verdana size=2 color=><b>endrews&nbsp;diz:</b></font> <font face=verdana size=2> vai responde ou nao</font><br>'),
 (11,'endrews','holodek','16/11/2010','15:41','<font face=verdana size=1>(15:41:54)</font> <font face=verdana size=2 color=><b>endrews&nbsp;diz:</b></font> <font face=verdana size=2> fala ai meu???</font><br>'),
 (12,'holodek','endrews','16/11/2010','15:42','<font face=verdana size=1>(15:42:32)</font> <font face=verdana size=2 color=><b>holodek&nbsp;diz:</b></font> <font face=verdana size=2> fuiiiiiiii</font><br>');
INSERT INTO `messenger_priv` (`id`,`origem`,`destino`,`data`,`hora`,`texto`) VALUES 
 (13,'endrews','holodek','16/11/2010','15:44','<font face=verdana size=1>(15:44:00)</font> <font face=verdana size=2 color=><b>endrews&nbsp;diz:</b></font> <font face=verdana size=2> belez<br></font><br>'),
 (14,'endrews','holodek','16/11/2010','16:10','<font face=verdana size=1>(16:10:28)</font> <font face=verdana size=2 color=><b>endrews&nbsp;diz:</b></font> <font face=verdana size=2> oi</font><br>'),
 (15,'endrews','holodek','16/11/2010','16:46','<font face=verdana size=1>(16:46:01)</font> <font face=verdana size=2 color=><b>endrews&nbsp;diz:</b></font> <font face=verdana size=2> oi</font><br>'),
 (16,'','','19/11/2010','14:11','<font face=verdana size=1>(14:11:48)</font> <font face=verdana size=2 color=><b>&nbsp;diz:</b></font> <font face=verdana size=2> fdfd<img src=../graphics/smilies/frown.gif></font><br>'),
 (17,'','','19/11/2010','14:11','<font face=verdana size=1>(14:11:59)</font> <font face=verdana size=2 color=><b>&nbsp;diz:</b></font> <font face=verdana size=2> oi</font><br>'),
 (18,'','','19/11/2010','14:12','<font face=verdana size=1>(14:12:18)</font> <font face=verdana size=2 color=><b>&nbsp;diz:</b></font> <font face=verdana size=2> <img src=../graphics/smilies/smile.gif></font><br>');
INSERT INTO `messenger_priv` (`id`,`origem`,`destino`,`data`,`hora`,`texto`) VALUES 
 (19,'marley','holodek','19/11/2010','14:41','<font face=verdana size=1>(14:41:43)</font> <font face=verdana size=2 color=><b>marley&nbsp;diz:</b></font> <font face=verdana size=2> ola....<img src=../graphics/smilies/smile.gif></font><br>'),
 (20,'holodek','marley','19/11/2010','14:43','<font face=verdana size=1>(14:43:28)</font> <font face=verdana size=2 color=><b>holodek&nbsp;diz:</b></font> <font face=verdana size=2> oi marley.....<img src=../graphics/smilies/smile.gif></font><br>'),
 (21,'holodek','marley','19/11/2010','14:45','<font face=verdana size=1>(14:45:09)</font> <font face=verdana size=2 color=><b>holodek&nbsp;diz:</b></font> <font face=verdana size=2> tudo tranquilo???<img src=../graphics/smilies/sleepy.gif></font><br>'),
 (22,'marley','holodek','19/11/2010','14:45','<font face=verdana size=1>(14:45:27)</font> <font face=verdana size=2 color=><b>marley&nbsp;diz:</b></font> <font face=verdana size=2> tudo</font><br>'),
 (23,'holodek','marley','19/11/2010','14:45','<font face=verdana size=1>(14:45:53)</font> <font face=verdana size=2 color=><b>holodek&nbsp;diz:</b></font> <font face=verdana size=2> para onde vc vai amanha?</font><br>');
INSERT INTO `messenger_priv` (`id`,`origem`,`destino`,`data`,`hora`,`texto`) VALUES 
 (24,'marley','holodek','19/11/2010','14:46','<font face=verdana size=1>(14:46:20)</font> <font face=verdana size=2 color=><b>marley&nbsp;diz:</b></font> <font face=verdana size=2> nao sei nao.....<img src=../graphics/smilies/confused.gif></font><br>'),
 (25,'marley','holodek','19/11/2010','14:47','<font face=verdana size=1>(14:47:00)</font> <font face=verdana size=2 color=><b>marley&nbsp;diz:</b></font> <font face=verdana size=2> <img src=../graphics/smilies/bounce.gif></font><br>'),
 (26,'holodek','marley','19/11/2010','14:47','<font face=verdana size=1>(14:47:32)</font> <font face=verdana size=2 color=><b>holodek&nbsp;diz:</b></font> <font face=verdana size=2> oi</font><br>'),
 (27,'marley','holodek','19/11/2010','14:48','<font face=verdana size=1>(14:48:21)</font> <font face=verdana size=2 color=><b>marley&nbsp;diz:</b></font> <font face=verdana size=2> ta mau ai</font><br>'),
 (28,'marley','holodek','19/11/2010','14:48','<font face=verdana size=1>(14:48:55)</font> <font face=verdana size=2 color=><b>marley&nbsp;diz:</b></font> <font face=verdana size=2> acho que agora foi....</font><br>'),
 (29,'marley','holodek','19/11/2010','14:57','<font face=verdana size=1>(14:57:14)</font> <font face=verdana size=2 color=><b>marley&nbsp;diz:</b></font> <font face=verdana size=2> oi</font><br>');
INSERT INTO `messenger_priv` (`id`,`origem`,`destino`,`data`,`hora`,`texto`) VALUES 
 (30,'holodek','marley','19/11/2010','14:58','<font face=verdana size=1>(14:58:02)</font> <font face=verdana size=2 color=><b>holodek&nbsp;diz:</b></font> <font face=verdana size=2> ola digue</font><br>'),
 (31,'holodek','marley','19/11/2010','15:00','<font face=verdana size=1>(15:00:21)</font> <font face=verdana size=2 color=><b>holodek&nbsp;diz:</b></font> <font face=verdana size=2> oiiiiiiiiiie</font><br>'),
 (32,'marley','holodek','19/11/2010','15:20','<font face=verdana size=1>(15:20:22)</font> <font face=verdana size=2 color=><b>marley&nbsp;diz:</b></font> <font face=verdana size=2> ola...</font><br>'),
 (33,'holodek','marley','19/11/2010','15:21','<font face=verdana size=1>(15:21:25)</font> <font face=verdana size=2 color=><b>holodek&nbsp;diz:</b></font> <font face=verdana size=2> eita</font><br>'),
 (34,'holodek','marley','19/11/2010','19:33','<font face=verdana size=1>(19:33:32)</font> <font face=verdana size=2 color=><b>holodek&nbsp;diz:</b></font> <font face=verdana size=2> ola</font><br>'),
 (35,'holodek','marley','19/11/2010','19:33','<font face=verdana size=1>(19:33:56)</font> <font face=verdana size=2 color=><b>holodek&nbsp;diz:</b></font> <font face=verdana size=2> ola</font><br>');
INSERT INTO `messenger_priv` (`id`,`origem`,`destino`,`data`,`hora`,`texto`) VALUES 
 (36,'marley','holodek','19/11/2010','19:34','<font face=verdana size=1>(19:34:36)</font> <font face=verdana size=2 color=><b>marley&nbsp;diz:</b></font> <font face=verdana size=2> caraca...</font><br>'),
 (37,'marley','holodek','19/11/2010','19:37','<font face=verdana size=1>(19:37:13)</font> <font face=verdana size=2 color=><b>marley&nbsp;diz:</b></font> <font face=verdana size=2> e que coisa<img src=../graphics/smilies/redface.gif></font><br>'),
 (38,'marley','holodek','19/11/2010','19:37','<font face=verdana size=1>(19:37:36)</font> <font face=verdana size=2 color=><b>marley&nbsp;diz:</b></font> <font face=verdana size=2> <img src=../graphics/smilies/tongue.gif></font><br>'),
 (39,'marley','holodek','19/11/2010','23:17','<font face=verdana size=1>(23:17:05)</font> <font face=verdana size=2 color=><b>marley&nbsp;diz:</b></font> <font face=verdana size=2> ola como vai?</font><br>'),
 (40,'marley','holodek','19/11/2010','23:20','<font face=verdana size=1>(23:20:12)</font> <font face=verdana size=2 color=><b>marley&nbsp;diz:</b></font> <font face=verdana size=2> ola...</font><br>'),
 (41,'holodek','marley','19/11/2010','23:20','<font face=verdana size=1>(23:20:47)</font> <font face=verdana size=2 color=><b>holodek&nbsp;diz:</b></font> <font face=verdana size=2> tudo bem....</font><br>');
INSERT INTO `messenger_priv` (`id`,`origem`,`destino`,`data`,`hora`,`texto`) VALUES 
 (42,'holodek','marley','19/11/2010','23:24','<font face=verdana size=1>(23:24:01)</font> <font face=verdana size=2 color=><b>holodek&nbsp;diz:</b></font> <font face=verdana size=2> ei responde...</font><br>'),
 (43,'holodek','marley','19/11/2010','23:27','<font face=verdana size=1>(23:27:32)</font> <font face=verdana size=2 color=><b>holodek&nbsp;diz:</b></font> <font face=verdana size=2> oi</font><br>'),
 (44,'holodek','marley','20/11/2010','00:36','<font face=verdana size=1>(00:36:45)</font> <font face=verdana size=2 color=><b>holodek&nbsp;diz:</b></font> <font face=verdana size=2> oi</font><br>'),
 (45,'marley','holodek','03/12/2010','14:49','<font face=verdana size=1>(14:49:54)</font> <font face=verdana size=2 color=><b>marley&nbsp;diz:</b></font> <font face=verdana size=2> olaaaa</font><br>'),
 (46,'holodek','marley','03/12/2010','14:51','<font face=verdana size=1>(14:51:05)</font> <font face=verdana size=2 color=><b>holodek&nbsp;diz:</b></font> <font face=verdana size=2> fala...tudo bem ai?</font><br>');
/*!40000 ALTER TABLE `messenger_priv` ENABLE KEYS */;


--
-- Table structure for table `site`.`msg`
--

DROP TABLE IF EXISTS `msg`;
CREATE TABLE `msg` (
  `codigo` int(11) NOT NULL auto_increment,
  `autor` varchar(255) default NULL,
  `email` varchar(255) default NULL,
  `titulo` varchar(255) default NULL,
  `mensagem` longtext,
  `data` varchar(30) default NULL,
  `pai` int(11) default NULL,
  `topico` int(11) default NULL,
  `time` varchar(14) default NULL,
  `icone` tinyint(3) default NULL,
  `foto_peq1` varchar(100) default NULL,
  `resposta` int(100) default '0',
  `ativa` int(1) default NULL,
  PRIMARY KEY  (`codigo`)
) ENGINE=MyISAM AUTO_INCREMENT=83 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `site`.`msg`
--

/*!40000 ALTER TABLE `msg` DISABLE KEYS */;
INSERT INTO `msg` (`codigo`,`autor`,`email`,`titulo`,`mensagem`,`data`,`pai`,`topico`,`time`,`icone`,`foto_peq1`,`resposta`,`ativa`) VALUES 
 (73,'holodek','edsonaraujo1@hotmail.com','Re:Programacao PHP levada a serio ','<p>sim so falta arruma o moderador</p>','12/11/2010  15:47:20',72,2,'20101112154720',0,'fotos/a4e09ca5007e2c65e938Eu2.JPG',0,1),
 (75,'ENDREWS','endrewsaraujo@hotmail.com','classes e objetos ','<p>para que serve&nbsp; classes e objetos</p>','14/11/2010  15:49:04',0,4,'20101114154904',0,'fotos/373a8e9403untitledGRANA.jpg',0,1),
 (71,'holodek','edsonaraujo1@hotmail.com','Falta de Respeito','<p>puxa vida que falta de respeito com os profissionais de programacao?</p>','12/11/2010  15:41:56',0,3,'20101112154156',0,'fotos/a4e09ca5007e2c65e938Eu2.JPG',0,1),
 (72,'holodek','edsonaraujo1@hotmail.com','Re:Programacao PHP levada a serio','<p>ola eu topo me adicione no seu msn ok.</p>','12/11/2010  15:42:44',70,2,'20101112154244',0,'fotos/a4e09ca5007e2c65e938Eu2.JPG',0,0),
 (70,'holodek','edsonaraujo1@hotmail.com','Programacao PHP levada a serio','<p>ola para todos os programadores de PHP estamos recrutnando pessoal para projeto em grade.</p>','12/11/2010  15:41:06',0,2,'20101117175826',0,'fotos/a4e09ca5007e2c65e938Eu2.JPG',9,1),
 (74,'holodek','edsonaraujo1@hotmail.com','Seja Bem Vindo ','<p>Obrigado ate mais tarde pocha.</p>','12/11/2010  15:48:48',69,1,'20101112154848',0,'fotos/a4e09ca5007e2c65e938Eu2.JPG',0,1);
INSERT INTO `msg` (`codigo`,`autor`,`email`,`titulo`,`mensagem`,`data`,`pai`,`topico`,`time`,`icone`,`foto_peq1`,`resposta`,`ativa`) VALUES 
 (69,'holodek','edsonaraujo1@hotmail.com','Seja Bem Vindo','<p>Ola a todos sejam bem vindo ao forum isysmp.com fiquem a vontade para sanar suas duvidas.</p>','12/11/2010  15:39:43',0,1,'20101112154848',0,'fotos/a4e09ca5007e2c65e938Eu2.JPG',1,1),
 (76,'holodek','edsonaraujo1@hotmail.com','Re:Programacao PHP levada a serio  ','<p>Ola tudo tranquilo como e mesmo esse trampo de programador tem que saber muito ou nao?</p>','17/11/2010  17:00:51',73,2,'20101117170051',0,'fotos/a4e09ca5007e2c65e938Eu2.JPG',0,0),
 (77,'holodek','edsonaraujo1@hotmail.com','Re:Programacao PHP levada a serio  ','<p>so mais uma pergunta e isso mesmo que vc falou?</p>','17/11/2010  17:04:05',73,2,'20101117170405',0,'fotos/a4e09ca5007e2c65e938Eu2.JPG',0,0),
 (78,'holodek','edsonaraujo1@hotmail.com','Re:Programacao PHP levada a serio  ','<p>to esperando em po.</p>','17/11/2010  17:06:36',73,2,'20101117170636',0,'fotos/a4e09ca5007e2c65e938Eu2.JPG',0,0),
 (79,'holodek','edsonaraujo1@hotmail.com','Re:Programacao PHP levada a serio  ','<p>olaha eu mais uma vez merda que coisa?</p>','17/11/2010  17:11:10',73,2,'20101117171110',0,'fotos/a4e09ca5007e2c65e938Eu2.JPG',0,0);
INSERT INTO `msg` (`codigo`,`autor`,`email`,`titulo`,`mensagem`,`data`,`pai`,`topico`,`time`,`icone`,`foto_peq1`,`resposta`,`ativa`) VALUES 
 (80,'holodek','edsonaraujo1@hotmail.com','Re:Programacao PHP levada a serio  ','<p>sei la em</p>','17/11/2010  17:11:56',73,2,'20101117171156',0,'fotos/a4e09ca5007e2c65e938Eu2.JPG',0,0),
 (81,'holodek','edsonaraujo1@hotmail.com','Re:Programacao PHP levada a serio  ','<p>vamos ver se essa merda funciona como eu quero pois ta dificil hemmmm vaMO LOA MEU</p>','17/11/2010  17:49:52',73,2,'20101117174952',0,'fotos/a4e09ca5007e2c65e938Eu2.JPG',0,0),
 (82,'holodek','edsonaraujo1@hotmail.com','Re:Programacao PHP levada a serio  ','<p>Digite aqui sua mensagem EITA TREM BAO HEM SO MEU CARACA HEM<br />PARA ONDE VAI ISSOI TUOD</p>\r\n<p>&nbsp;</p>','17/11/2010  17:58:26',73,2,'20101117175826',0,'fotos/a4e09ca5007e2c65e938Eu2.JPG',0,0);
/*!40000 ALTER TABLE `msg` ENABLE KEYS */;


--
-- Table structure for table `site`.`msg_question`
--

DROP TABLE IF EXISTS `msg_question`;
CREATE TABLE `msg_question` (
  `id` int(11) NOT NULL auto_increment,
  `nome` varchar(200) NOT NULL,
  `foto` varchar(200) default NULL,
  `vendedor` varchar(200) default NULL,
  `comprador` varchar(200) NOT NULL,
  `mensagem` text,
  `data` varchar(30) NOT NULL,
  `time` varchar(14) NOT NULL,
  `cod_prod` int(11) default NULL,
  `respondido` varchar(3) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=77 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `site`.`msg_question`
--

/*!40000 ALTER TABLE `msg_question` DISABLE KEYS */;
INSERT INTO `msg_question` (`id`,`nome`,`foto`,`vendedor`,`comprador`,`mensagem`,`data`,`time`,`cod_prod`,`respondido`) VALUES 
 (1,'HTC Atron Exec 450 Mhz','../cadastro/fotos/e49ab7a26dEu3.JPG','holodek','HOLODEK','Boa Tarde ele tem 3G?','07/09/2009  19:25:49','20090907192549',2,'SIM'),
 (2,'HTC Atron Exec 450 Mhz','../graphics/foto_padrao65.jpg','holodek','VISITANTE','Digite aqui sua pergunta...vai tomar no cu seu finho da puta arrombado cuzao e isso.','07/09/2009  20:38:17','20090907203817',2,'SIM'),
 (4,'HTC Atron Exec 450 Mhz','../cadastro/fotos/e49ab7a26dEu3.JPG','holodek','HOLODEK','Função que lê as mensagens de  um topico\r\n\r\n$conn variavel de conexao do MySQL\r\n$pai variavel que  informa  o pai da mensagem\r\n$topico variavel que  informa  o topico da mensagem\r\n$codigo variavel usada para marcar o indicador para pagina\r\n','07/09/2009  21:32:47','20090907213247',2,'SIM'),
 (5,'HTC Atron Exec 450 Mhz','../graphics/foto_padrao65.jpg','holodek','VISITANTE','Meu vc quer trocar por uma ferrari 2009?','08/09/2009  15:05:11','20090908150511',2,'SIM'),
 (6,'Notebook Compag Evo N610c','../graphics/foto_padrao65.jpg','holodek','VISITANTE','Da pra fazer por R$ 500.00?','08/09/2009  15:07:21','20090908150721',1,'SIM');
INSERT INTO `msg_question` (`id`,`nome`,`foto`,`vendedor`,`comprador`,`mensagem`,`data`,`time`,`cod_prod`,`respondido`) VALUES 
 (7,'Monitor LCD 17','../graphics/foto_padrao65.jpg','holodek','VISITANTE','Nova Pergunta quer 500?','10/09/2009  09:55:11','20090910095511',3,'SIM'),
 (8,'Notebook Compag Evo N610c','../graphics/foto_padrao65.jpg','holodek','VISITANTE','aceita um hd como parte de pagamento. hd + 350.','11/09/2009  08:41:03','20090911084103',1,'SIM'),
 (11,'HTC Atron Exec 450 Mhz','../graphics/foto_padrao65.jpg','holodek','VISITANTE','Meu agora vai troca por um HTC 2090?','17/09/2009  14:58:04','20090917145804',2,NULL),
 (20,'HTC Atron Exec 450 Mhz','../graphics/foto_padrao65.jpg','holodek','MARLEY','Digite aqui sua pergunta...','17/09/2009  15:51:32','20090917155132',2,NULL),
 (21,'HTC Atron Exec 450 Mhz','../graphics/foto_padrao65.jpg','holodek','MARLEY','Digite aqui sua pergunta...','17/09/2009  15:54:40','20090917155441',2,NULL),
 (22,'LG Touch Smathtc 3090','../cadastro/fotos/833ff12b98Eu2.JPG','marley','HOLODEK','Ola voce troca por um HTC semi novo?','17/09/2009  16:04:59','20090917160459',4,'SIM'),
 (23,'Impressora HP 1200','../cadastro/fotos/833ff12b98Eu2.JPG','marley','HOLODEK','Ola me diz ela esta na caixa com os manuais?','28/09/2009  18:56:58','20090928185658',5,NULL);
INSERT INTO `msg_question` (`id`,`nome`,`foto`,`vendedor`,`comprador`,`mensagem`,`data`,`time`,`cod_prod`,`respondido`) VALUES 
 (24,'HTC Atron Exec 450 Mhz','../graphics/foto_padrao65.jpg','holodek','','<p>teste de invio</p>','30/09/2010  15:57:54','20100930155754',2,NULL),
 (25,'HTC Atron Exec 450 Mhz','graphics/foto_padrao65.jpg','holodek','','<p>entao da pra melhorar o preco? ;)</p>','30/09/2010  15:59:46','20100930155946',2,NULL),
 (26,'HTC Atron Exec 450 Mhz','graphics/foto_padrao65.jpg','holodek','','<p>olha eu denovo entao podemos ver com um preco melhor?</p>','30/09/2010  16:02:05','20100930160205',2,NULL),
 (27,'HTC Atron Exec 450 Mhz','graphics/foto_padrao65.jpg','holodek','','<p>he he he he he olha nois aqui de novo to querendo saber faz ai vai pelo preco melhor !!!!</p>','30/09/2010  16:08:20','20100930160820',2,NULL),
 (28,'HTC Atron Exec 450 Mhz','graphics/foto_padrao65.jpg','holodek','','<p>olha nois aqui de novo entao faz ai vai pelo preco melhor vai vai vai vai vai vai????</p>','30/09/2010  16:13:04','20100930161304',2,NULL),
 (29,'HTC Atron Exec 450 Mhz','graphics/foto_padrao65.jpg','holodek','','<p>olha la que eu vou querer hem pelo melhor preco he he he he he...</p>','30/09/2010  16:16:59','20100930161659',2,NULL);
INSERT INTO `msg_question` (`id`,`nome`,`foto`,`vendedor`,`comprador`,`mensagem`,`data`,`time`,`cod_prod`,`respondido`) VALUES 
 (30,'HTC Atron Exec 450 Mhz','graphics/foto_padrao65.jpg','holodek','','<p>ho cara chato enquanto vc nao vender para mim eu nao socedo !@!!!</p>','30/09/2010  16:22:36','20100930162236',2,NULL),
 (31,'HTC Atron Exec 450 Mhz','graphics/foto_padrao65.jpg','holodek','','<p>he he he he he he he</p>','30/09/2010  16:33:31','20100930163331',2,NULL),
 (32,'HTC Atron Exec 450 Mhz','graphics/foto_padrao65.jpg','holodek','','<p>desculpe agora e serio faz ai vai um preco melhor.</p>','30/09/2010  16:35:24','20100930163524',2,'SIM'),
 (33,'HTC Atron Exec 450 Mhz','../cadastro/fotos/7e9fa1c010banner_sac[1].jpg','holodek','','<p>Oi holodek tudo OK como esta faz o melhor preco?</p>','30/09/2010  17:15:09','20100930171509',2,''),
 (34,'HTC Atron Exec 450 Mhz','../cadastro/fotos/7e9fa1c010banner_sac[1].jpg','holodek','','<p>oi eu denovo !!!!</p>','30/09/2010  17:32:22','20100930173222',2,NULL),
 (35,'LG Touch Smathtc 3090','../cadastro/fotos/833ff12b98Eu2.JPG','marley','HOLODEK','<p>sim pode ser?????? oi nao?</p>','30/09/2010  18:23:41','20100930182341',4,'SIM');
INSERT INTO `msg_question` (`id`,`nome`,`foto`,`vendedor`,`comprador`,`mensagem`,`data`,`time`,`cod_prod`,`respondido`) VALUES 
 (36,'LG Touch Smathtc 3090','graphics/foto_padrao65.jpg','marley','','<p>ola</p>','18/10/2010  18:37:19','20101018183719',4,NULL),
 (37,'HTC Atron Exec 450 Mhz','../cadastro/fotos/7e9fa1c010banner_sac[1].jpg','holodek','marley','<p>oi tudo bem? quero falar com vc. bjs</p>','21/12/2010  17:35:01','20101221173501',2,NULL),
 (38,'HTC Atron Exec 450 Mhz','../cadastro/fotos/7e9fa1c010banner_sac[1].jpg','holodek','marley','<p>fala comigo eu quero comprar seu produto tambem...</p>','21/12/2010  17:36:22','20101221173622',2,NULL),
 (39,'HTC Atron Exec 450 Mhz','../cadastro/fotos/7e9fa1c010banner_sac[1].jpg','holodek','marley','<p>ola</p>','21/12/2010  17:37:10','20101221173710',2,NULL),
 (40,'HTC Atron Exec 450 Mhz','../cadastro/fotos/7e9fa1c010banner_sac[1].jpg','holodek','marley','<p>eu denovo</p>','21/12/2010  17:37:59','20101221173759',2,'SIM'),
 (41,'Carrinho de Compras Mercado','../graphics/foto_padrao65.jpg','holodek','','<p>Bom Dia vc tem em Java ou e so em PHP? Obrigado</p>','05/01/2011  14:44:38','20110105144438',6,'SIM'),
 (42,'Carrinho de Compras Mercado','../graphics/foto_padrao65.jpg','holodek','','<p>Desculpe a pergunta eu queria em Java servlet...teria</p>','05/01/2011  14:48:55','20110105144855',6,'SIM');
INSERT INTO `msg_question` (`id`,`nome`,`foto`,`vendedor`,`comprador`,`mensagem`,`data`,`time`,`cod_prod`,`respondido`) VALUES 
 (43,'Fogao Industrial','../cadastro/fotos/e75f4b1666relanpago mac.jpg','marley','endrews','<p>esse fogao e novo</p>','11/01/2011  16:28:10','20110111162810',8,NULL),
 (44,'Carrinho de Compras Mercado','../cadastro/fotos/e75f4b1666relanpago mac.jpg','holodek','endrews','<p>esse carrinho aguenta mais de 700 kl</p>','11/01/2011  16:29:34','20110111162934',6,'SIM'),
 (45,'psp ','../cadastro/fotos/a4e09ca5007e2c65e938Eu2.JPG','endrews','holodek','<p>ola da pra vc fazer um preco melhor? uns 300 reais ????</p>','11/01/2011  16:50:17','20110111165017',9,'SIM'),
 (46,'psp ','../graphics/foto_padrao65.jpg','endrews','','<p>entao eu compro por 150.00 OK</p>','11/01/2011  17:14:27','20110111171427',9,NULL),
 (47,'camaro','../graphics/foto_padrao65.jpg','endrews','','<p>ele esta com a documentacao serta? tem multas ou dividas vc faz por 80 mil ???</p>','11/01/2011  17:16:43','20110111171643',10,'SIM'),
 (48,'sansao','../cadastro/fotos/a4e09ca5007e2c65e938Eu2.JPG','endrews','holodek','<p>Ue nao era um camaro ???? agora e um sansao ???? que coisa e essa?????</p>','11/01/2011  17:27:39','20110111172739',10,'SIM');
INSERT INTO `msg_question` (`id`,`nome`,`foto`,`vendedor`,`comprador`,`mensagem`,`data`,`time`,`cod_prod`,`respondido`) VALUES 
 (49,'psp ','../cadastro/fotos/a4e09ca5007e2c65e938Eu2.JPG','endrews','holodek','<p>cara vende pra mim agora ja vai....</p>','11/01/2011  17:39:19','20110111173919',9,'SIM'),
 (50,'sansao','../graphics/foto_padrao65.jpg','endrews','','<p>responde...</p>','11/01/2011  18:08:38','20110111180838',10,'SIM'),
 (51,'sansao','../graphics/foto_padrao65.jpg','endrews','','<p>respoonde ai ooooo</p>','11/01/2011  18:11:44','20110111181144',10,NULL),
 (52,'sansao','../cadastro/fotos/a4e09ca5007e2c65e938Eu2.JPG','endrews','holodek','<p>oi Posso comprar seu sansao</p>','11/01/2011  19:30:20','20110111193020',10,NULL),
 (53,'Carrinho de Compras Mercado','../cadastro/fotos/e75f4b1666relanpago mac.jpg','holodek','endrews','<p>vai vender ou nao?</p>','11/01/2011  20:07:39','20110111200739',6,'SIM'),
 (54,'Carrinho de Compras Mercado','../cadastro/fotos/e75f4b1666relanpago mac.jpg','holodek','endrews','<p>entao vou comprar ok?</p>','11/01/2011  20:12:40','20110111201240',6,'SIM'),
 (55,'Carrinho de Compras Mercado','../cadastro/fotos/e75f4b1666relanpago mac.jpg','holodek','endrews','<p>Ok 2</p>','11/01/2011  20:22:39','20110111202239',6,'SIM');
INSERT INTO `msg_question` (`id`,`nome`,`foto`,`vendedor`,`comprador`,`mensagem`,`data`,`time`,`cod_prod`,`respondido`) VALUES 
 (56,'sansao','../cadastro/fotos/a4e09ca5007e2c65e938Eu2.JPG','endrews','holodek','<p>e o camaro...???</p>','11/01/2011  20:36:07','20110111203607',10,'SIM'),
 (57,'sansao','../cadastro/fotos/a4e09ca5007e2c65e938Eu2.JPG','endrews','holodek','<p>eu quero o camaro...</p>','11/01/2011  20:59:04','20110111205904',10,'SIM'),
 (58,'sansao','../cadastro/fotos/a4e09ca5007e2c65e938Eu2.JPG','endrews','holodek','<p>camaroooooooo</p>','11/01/2011  21:02:35','20110111210235',10,'SIM'),
 (59,'Carrinho de Compras Mercado','../cadastro/fotos/e75f4b1666relanpago mac.jpg','holodek','endrews','<p>pergunta.....</p>','11/01/2011  21:08:01','20110111210801',6,'SIM'),
 (60,'Carrinho de Compras Mercado','../cadastro/fotos/e75f4b1666relanpago mac.jpg','holodek','endrews','<p>eai beleza certinho</p>','11/01/2011  21:30:40','20110111213040',6,'SIM'),
 (61,'Carrinho de Compras Mercado','../cadastro/fotos/e75f4b1666relanpago mac.jpg','holodek','endrews','<p>eai beleza tranquilo&nbsp;</p>','12/01/2011  11:48:58','20110112114858',6,'SIM'),
 (62,'sansao','../cadastro/fotos/a4e09ca5007e2c65e938Eu2.JPG','endrews','holodek','<p>qual e o tamanho da monica?</p>','12/01/2011  13:28:50','20110112132850',10,NULL);
INSERT INTO `msg_question` (`id`,`nome`,`foto`,`vendedor`,`comprador`,`mensagem`,`data`,`time`,`cod_prod`,`respondido`) VALUES 
 (63,'sansao','../cadastro/fotos/a4e09ca5007e2c65e938Eu2.JPG','endrews','holodek','<p>vc ja tem o camaro?????</p>','12/01/2011  13:56:23','20110112135623',10,NULL),
 (64,'sansao','../graphics/foto_padrao65.jpg','endrews','','<p>tenho 3 camaros</p>\r\n<p>&nbsp;</p>','12/01/2011  13:57:16','20110112135716',10,NULL),
 (65,'sansao','../cadastro/fotos/a4e09ca5007e2c65e938Eu2.JPG','endrews','holodek','<p>tem camaro rsrsrs</p>','12/01/2011  13:58:41','20110112135841',10,'SIM'),
 (66,'sansao','../cadastro/fotos/a4e09ca5007e2c65e938Eu2.JPG','endrews','holodek','<p>Ta mas cade o meu camaro, eu quero na cor amarelo com detalher preto...</p>','12/01/2011  14:06:53','20110112140653',10,NULL),
 (67,'camaro','../cadastro/fotos/a4e09ca5007e2c65e938Eu2.JPG','endrews','holodek','<p>eu compro....tem com bancos esportivos de couro?</p>','12/01/2011  14:18:08','20110112141808',11,'SIM'),
 (68,'Carrinho de Compras Mercado','../cadastro/fotos/e75f4b1666relanpago mac.jpg','holodek','endrews','<p>ola tudo em cima?????.</p>','12/01/2011  14:25:52','20110112142552',6,NULL);
INSERT INTO `msg_question` (`id`,`nome`,`foto`,`vendedor`,`comprador`,`mensagem`,`data`,`time`,`cod_prod`,`respondido`) VALUES 
 (69,'Carrinho de Compras Mercado','../cadastro/fotos/e75f4b1666relanpago mac.jpg','holodek','endrews','<p>esse carrinho tem garantia</p>','13/01/2011  13:36:55','20110113133655',6,NULL),
 (70,'celular motorola','../graphics/foto_padrao65.jpg','endrews','','<p>vc so tem um eu queria uns 10 pode arrumar? tem msn, orkut, facebook acessa a internet sem fio, e gps ele e 3G?</p>','13/01/2011  14:59:10','20110113145910',12,'SIM'),
 (71,'celular motorola','../graphics/foto_padrao65.jpg','endrews','','<p>Oi tem tudo <strong>3G</strong>, msn, internet, orkut GPS e jogos em java?</p>','13/01/2011  16:00:09','20110113160009',12,'SIM'),
 (72,'celular motorola','../cadastro/fotos/a4e09ca5007e2c65e938Eu2.JPG','endrews','holodek','<p>Oi vc ja vendeu eu to intere&ccedil;aso pode me responder?</p>','13/01/2011  16:06:34','20110113160634',12,'SIM'),
 (73,'notebooks positivo','../cadastro/fotos/a4e09ca5007e2c65e938Eu2.JPG','endrews','holodek','<p><strong>Qual a Comfigura&ccedil;&atilde;o ele e um Pentiun, Coredue, ou Celeron? quantos giga de memoria, qual o tamanho do HD a tela e de led ou LCD, tem unidade de DVD gravavel e Bluewey, a placa de video e 3D ou 2D, e a bateria qual a autonomia dele? tem maleta como esta a fonte de alimentacao ele vem com sistema operacional estalado ou com nao, e compativel com windows XP, Vista e windows 7, posso estalar Linux nele, ele e 32 bits ou 64 bits, tem garantia, quanto tempo de uso tem? vem com os manuais e cds de estalacao?</strong></p>','13/01/2011  16:45:53','20110113164553',14,'SIM'),
 (74,'Cadeado para Plam','../cadastro/fotos/e75f4b1666relanpago mac.jpg','holodek','endrews','<p>me fas por 10 reais</p>','13/01/2011  16:54:24','20110113165424',13,'SIM');
INSERT INTO `msg_question` (`id`,`nome`,`foto`,`vendedor`,`comprador`,`mensagem`,`data`,`time`,`cod_prod`,`respondido`) VALUES 
 (75,'celular motorola','../cadastro/fotos/a4e09ca5007e2c65e938Eu2.JPG','endrews','holodek','<p>esse celular vem com chip,camera,orkut e msn</p>','14/01/2011  10:12:04','20110114101204',12,NULL),
 (76,'tv philips','../graphics/foto_padrao65.jpg','endrews','','<p>Essa TV tem HD e entrada USB?</p>','14/01/2011  14:07:33','20110114140733',17,'SIM');
/*!40000 ALTER TABLE `msg_question` ENABLE KEYS */;


--
-- Table structure for table `site`.`msg_resposta`
--

DROP TABLE IF EXISTS `msg_resposta`;
CREATE TABLE `msg_resposta` (
  `id` int(11) NOT NULL auto_increment,
  `id_mensage` int(11) NOT NULL,
  `nome` varchar(200) default NULL,
  `mensagem` text NOT NULL,
  `data` varchar(30) NOT NULL,
  `time` varchar(14) NOT NULL,
  `vendedor` varchar(200) NOT NULL,
  `comprador` varchar(200) default NULL,
  `foto` varchar(200) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `site`.`msg_resposta`
--

/*!40000 ALTER TABLE `msg_resposta` DISABLE KEYS */;
INSERT INTO `msg_resposta` (`id`,`id_mensage`,`nome`,`mensagem`,`data`,`time`,`vendedor`,`comprador`,`foto`) VALUES 
 (1,1,NULL,'Nao ele nao e 3G ele usa GPRS','09/09/2009 as 15:20','','holodek',NULL,NULL),
 (3,5,NULL,'Nao porque o seguro e muito carro e o brasil nao tem estrada para andar com ferrai...','09/09/2009  16:22:09','20090909162209','holodek',NULL,'../cadastro/fotos/e49ab7a26dEu3.JPG'),
 (4,4,NULL,'Desculpe mas nao entendi sua pergunta????','09/09/2009  16:27:07','20090909162707','holodek',NULL,'../cadastro/fotos/e49ab7a26dEu3.JPG'),
 (5,7,NULL,'sim faco por 500 + 500 ok','10/09/2009  09:56:22','20090910095622','holodek',NULL,'../cadastro/fotos/e49ab7a26dEu3.JPG'),
 (6,3,NULL,'esssa e a resposta de cima','10/09/2009  09:57:01','20090910095701','holodek',NULL,'../cadastro/fotos/e49ab7a26dEu3.JPG'),
 (7,6,NULL,'500 so se sua irma de a buceta e o cu pra mim seu cu.','10/09/2009  10:04:05','20090910100405','holodek',NULL,'../cadastro/fotos/e49ab7a26dEu3.JPG'),
 (8,8,NULL,'sim aceito me mande um email para negociar OK Abracos','11/09/2009  08:42:37','20090911084237','holodek',NULL,'../cadastro/fotos/e49ab7a26dEu3.JPG'),
 (12,22,'LG Touch Smathtc 3090','Sim podemos negociar ele esta funcionando?','17/09/2009  16:55:29','20090917165529','marley','','../cadastro/fotos/7e9fa1c010banner_sac[1].jpg');
INSERT INTO `msg_resposta` (`id`,`id_mensage`,`nome`,`mensagem`,`data`,`time`,`vendedor`,`comprador`,`foto`) VALUES 
 (13,33,'HTC Atron Exec 450 Mhz','<p>sim pode ser...</p>','30/09/2010  17:17:42','20100930171742','holodek','','../cadastro/fotos/833ff12b98Eu2.JPG'),
 (14,33,'HTC Atron Exec 450 Mhz','<p>pode ser sim!!!</p>','30/09/2010  17:27:25','20100930172725','holodek','','../cadastro/fotos/833ff12b98Eu2.JPG'),
 (15,35,'LG Touch Smathtc 3090','<p>sim</p>','30/09/2010  18:28:16','20100930182816','marley','','../cadastro/fotos/7e9fa1c010banner_sac[1].jpg'),
 (16,35,'LG Touch Smathtc 3090','<p>sim</p>','30/09/2010  18:33:14','20100930183314','marley','','../cadastro/fotos/7e9fa1c010banner_sac[1].jpg'),
 (17,40,'HTC Atron Exec 450 Mhz','<p>sim tudo bem</p>','21/12/2010  17:52:20','20101221175220','holodek','','../cadastro/fotos/a4e09ca5007e2c65e938Eu2.JPG'),
 (18,40,'HTC Atron Exec 450 Mhz','<p>sim tudo bem</p>','21/12/2010  17:54:37','20101221175437','holodek','','../cadastro/fotos/a4e09ca5007e2c65e938Eu2.JPG'),
 (19,32,'HTC Atron Exec 450 Mhz','<p>ah ah ah ah banana ha ha ha ha BaNaaaaNaaaaaa !!!!!!</p>','21/12/2010  17:55:34','20101221175534','holodek','','../cadastro/fotos/a4e09ca5007e2c65e938Eu2.JPG');
INSERT INTO `msg_resposta` (`id`,`id_mensage`,`nome`,`mensagem`,`data`,`time`,`vendedor`,`comprador`,`foto`) VALUES 
 (20,42,'Carrinho de Compras Mercado','<p>Sim teria....</p>','05/01/2011  15:11:53','20110105151153','holodek','','../cadastro/fotos/a4e09ca5007e2c65e938Eu2.JPG'),
 (21,41,'Carrinho de Compras Mercado','<p>Sim e so em PHP mas tenho modulos em Java tambem !!!</p>','05/01/2011  15:14:25','20110105151425','holodek','','../cadastro/fotos/a4e09ca5007e2c65e938Eu2.JPG'),
 (22,44,'Carrinho de Compras Mercado','<p>logico aguenta ate 1 (uma tonelada) rsrsrs</p>','11/01/2011  16:33:38','20110111163338','holodek','','../cadastro/fotos/a4e09ca5007e2c65e938Eu2.JPG'),
 (23,45,'psp ','<p>nao ja abaixou ta uns 150.90 reais</p>','11/01/2011  17:04:43','20110111170443','endrews','','../cadastro/fotos/e75f4b1666relanpago mac.jpg'),
 (24,48,'sansao','<p>aonde eu vou arrumar um camaro</p>','11/01/2011  18:15:13','20110111181513','endrews','','../cadastro/fotos/e75f4b1666relanpago mac.jpg'),
 (25,47,'camaro','<p>nao tem documenta&ccedil;ao e ta com mais de 9000 multas</p>','11/01/2011  18:17:32','20110111181732','endrews','','../cadastro/fotos/e75f4b1666relanpago mac.jpg'),
 (26,50,'sansao','<p>nao&nbsp;</p>','11/01/2011  18:18:46','20110111181846','endrews','','../cadastro/fotos/e75f4b1666relanpago mac.jpg');
INSERT INTO `msg_resposta` (`id`,`id_mensage`,`nome`,`mensagem`,`data`,`time`,`vendedor`,`comprador`,`foto`) VALUES 
 (27,49,'psp ','<p>para voce e so 50</p>','11/01/2011  18:23:20','20110111182320','endrews','','../cadastro/fotos/e75f4b1666relanpago mac.jpg'),
 (28,53,'Carrinho de Compras Mercado','<p>logico pode comprar</p>','11/01/2011  20:08:56','20110111200856','holodek','','../cadastro/fotos/a4e09ca5007e2c65e938Eu2.JPG'),
 (29,54,'Carrinho de Compras Mercado','<p>ok</p>','11/01/2011  20:14:28','20110111201428','holodek','','../cadastro/fotos/a4e09ca5007e2c65e938Eu2.JPG'),
 (30,55,'Carrinho de Compras Mercado','<p>entao ta...</p>','11/01/2011  20:34:10','20110111203410','holodek','','../cadastro/fotos/a4e09ca5007e2c65e938Eu2.JPG'),
 (31,56,'sansao','<p>nao tem camaro nao eu to sen dinheiro para comprar</p>','11/01/2011  20:38:46','20110111203846','endrews','','../cadastro/fotos/e75f4b1666relanpago mac.jpg'),
 (32,57,'sansao','<p>ahhhhhhhhhhhhh nao e camarooooo;;;;;;</p>','11/01/2011  21:00:48','20110111210048','endrews','','../cadastro/fotos/e75f4b1666relanpago mac.jpg'),
 (33,58,'sansao','<p>ahhhhhhhhhhhhhhhhhhhhhhhhh</p>','11/01/2011  21:04:30','20110111210430','endrews','','../cadastro/fotos/e75f4b1666relanpago mac.jpg');
INSERT INTO `msg_resposta` (`id`,`id_mensage`,`nome`,`mensagem`,`data`,`time`,`vendedor`,`comprador`,`foto`) VALUES 
 (34,59,'Carrinho de Compras Mercado','<p>Digite aqui sua Resposta... Oque ????</p>','11/01/2011  21:12:20','20110111211220','holodek','endrews','../cadastro/fotos/a4e09ca5007e2c65e938Eu2.JPG'),
 (35,61,'Carrinho de Compras Mercado','<p>Belezzzzzzzzzz</p>','12/01/2011  11:55:44','20110112115544','holodek','endrews','../cadastro/fotos/a4e09ca5007e2c65e938Eu2.JPG'),
 (36,65,'sansao','<p>ja tenho 3</p>','12/01/2011  14:01:15','20110112140115','endrews','holodek','../cadastro/fotos/e75f4b1666relanpago mac.jpg'),
 (37,60,'Carrinho de Compras Mercado','<p>tudo belez...</p>','12/01/2011  14:13:28','20110112141328','holodek','endrews','../cadastro/fotos/a4e09ca5007e2c65e938Eu2.JPG'),
 (38,67,'camaro','<p>todos os bancos sao esportivos e e tudo de couro</p>','12/01/2011  14:20:38','20110112142038','endrews','holodek','../cadastro/fotos/e75f4b1666relanpago mac.jpg'),
 (39,6,'Carrinho de Compras Mercado','<p>aqui ta tudo alagado......:-(</p>','12/01/2011  14:31:20','20110112143120','holodek','endrews','../cadastro/fotos/a4e09ca5007e2c65e938Eu2.JPG'),
 (40,2,'HTC Atron Exec 450 Mhz','<p>sim...</p>','12/01/2011  15:44:25','20110112154425','holodek','marley','../cadastro/fotos/a4e09ca5007e2c65e938Eu2.JPG');
INSERT INTO `msg_resposta` (`id`,`id_mensage`,`nome`,`mensagem`,`data`,`time`,`vendedor`,`comprador`,`foto`) VALUES 
 (41,9,'psp ','<p>nao 100.000</p>','13/01/2011  13:35:18','20110113133518','endrews','VISITANTE','../cadastro/fotos/e75f4b1666relanpago mac.jpg'),
 (42,12,'celular motorola','<p>sim tem camera, msn, orkt, fecebook,tuiter e internet speed de 2 mega</p>','13/01/2011  15:03:03','20110113150303','endrews','VISITANTE','../cadastro/fotos/e75f4b1666relanpago mac.jpg'),
 (43,12,'celular motorola','<p>sim tem msn,orkt,fecebook,tuitere tem internet speed de 2 mega</p>','13/01/2011  15:15:05','20110113151505','endrews','VISITANTE','../cadastro/fotos/e75f4b1666relanpago mac.jpg'),
 (44,12,'celular motorola','<p>oque nao entendi?????</p>','13/01/2011  15:19:05','20110113151905','endrews','VISITANTE','../cadastro/fotos/e75f4b1666relanpago mac.jpg'),
 (45,70,'celular motorola','<p>sim tem tudo e muito mais...</p>','13/01/2011  15:48:33','20110113154833','endrews','VISITANTE','../cadastro/fotos/e75f4b1666relanpago mac.jpg'),
 (46,71,'celular motorola','<p>Sim tem internet, orkut, msn, 3G e intermet, completo</p>','13/01/2011  16:02:44','20110113160244','endrews','VISITANTE','../cadastro/fotos/e75f4b1666relanpago mac.jpg');
INSERT INTO `msg_resposta` (`id`,`id_mensage`,`nome`,`mensagem`,`data`,`time`,`vendedor`,`comprador`,`foto`) VALUES 
 (47,72,'celular motorola','<p>N&atilde;o ainda n&atilde;o e espero sua compra.</p>','13/01/2011  16:10:01','20110113161001','endrews','holodek','../cadastro/fotos/e75f4b1666relanpago mac.jpg'),
 (48,73,'notebooks positivo','<p>nao entendi</p>','13/01/2011  16:48:02','20110113164802','endrews','holodek','../cadastro/fotos/e75f4b1666relanpago mac.jpg'),
 (49,74,'Cadeado para Plam','<p>Faz por 10 reais so as chaves..rsrsr</p>','13/01/2011  16:55:46','20110113165546','holodek','endrews','../cadastro/fotos/a4e09ca5007e2c65e938Eu2.JPG'),
 (50,76,'tv philips','<p>logico que tem entrada usb&nbsp;</p>','14/01/2011  14:13:33','20110114141333','endrews','VISITANTE','../cadastro/fotos/e75f4b1666relanpago mac.jpg');
/*!40000 ALTER TABLE `msg_resposta` ENABLE KEYS */;


--
-- Table structure for table `site`.`pagsegurotransacoes`
--

DROP TABLE IF EXISTS `pagsegurotransacoes`;
CREATE TABLE `pagsegurotransacoes` (
  `TransacaoID` varchar(36) NOT NULL,
  `VendedorEmail` varchar(200) NOT NULL,
  `Referencia` varchar(200) default NULL,
  `TipoFrete` char(2) default NULL,
  `ValorFrete` decimal(10,2) default NULL,
  `Extras` decimal(10,2) default NULL,
  `Anotacao` text,
  `TipoPagamento` varchar(50) NOT NULL,
  `StatusTransacao` varchar(50) NOT NULL,
  `CliNome` varchar(200) NOT NULL,
  `CliEmail` varchar(200) NOT NULL,
  `CliEndereco` varchar(200) NOT NULL,
  `CliNumero` varchar(10) default NULL,
  `CliComplemento` varchar(100) default NULL,
  `CliBairro` varchar(100) NOT NULL,
  `CliCidade` varchar(100) NOT NULL,
  `CliEstado` char(2) NOT NULL,
  `CliCEP` varchar(9) NOT NULL,
  `CliTelefone` varchar(14) default NULL,
  `NumItens` int(11) NOT NULL,
  PRIMARY KEY  (`TransacaoID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `site`.`pagsegurotransacoes`
--

/*!40000 ALTER TABLE `pagsegurotransacoes` DISABLE KEYS */;
/*!40000 ALTER TABLE `pagsegurotransacoes` ENABLE KEYS */;


--
-- Table structure for table `site`.`pagsegurotransacoesprodutos`
--

DROP TABLE IF EXISTS `pagsegurotransacoesprodutos`;
CREATE TABLE `pagsegurotransacoesprodutos` (
  `TransProdID` int(11) NOT NULL auto_increment,
  `TransacaoID` varchar(36) NOT NULL,
  `ProdID` varchar(100) NOT NULL,
  `ProdDescricao` varchar(100) NOT NULL,
  `ProdValor` decimal(10,2) NOT NULL,
  `ProdQuantidade` int(11) NOT NULL,
  `ProdFrete` decimal(10,2) default NULL,
  `ProdExtras` decimal(10,2) default NULL,
  PRIMARY KEY  (`TransProdID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `site`.`pagsegurotransacoesprodutos`
--

/*!40000 ALTER TABLE `pagsegurotransacoesprodutos` DISABLE KEYS */;
/*!40000 ALTER TABLE `pagsegurotransacoesprodutos` ENABLE KEYS */;


--
-- Table structure for table `site`.`palavrao`
--

DROP TABLE IF EXISTS `palavrao`;
CREATE TABLE `palavrao` (
  `MsgErrada` varchar(200) default NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `site`.`palavrao`
--

/*!40000 ALTER TABLE `palavrao` DISABLE KEYS */;
INSERT INTO `palavrao` (`MsgErrada`) VALUES 
 ('p o r a'),
 ('pora'),
 ('porra'),
 ('p o r r a'),
 ('caralho'),
 ('c a r a l h o'),
 ('cuzao '),
 ('c u z a o '),
 ('cu '),
 ('c u '),
 ('puta'),
 ('p u t a'),
 ('vagabunda'),
 ('v a g a b u n d a'),
 ('merda'),
 ('m e r d a'),
 ('buceta'),
 ('b u c e t a'),
 ('bucetuda'),
 ('b u c e t u d a'),
 ('bucetona'),
 ('b u c e t o n a'),
 ('vagina'),
 ('v a g i n a'),
 ('bu ce tu da'),
 ('buce tuda'),
 ('vadia'),
 ('v a d i a'),
 ('vaca'),
 ('v a c a'),
 ('vacona'),
 ('v a c o n a'),
 ('bosta'),
 ('b o s t a'),
 ('pinto'),
 ('p i n t o'),
 ('pintudo'),
 ('p i n t u d o'),
 ('verme'),
 ('v e r m e'),
 ('noia'),
 ('n o i a'),
 ('safado'),
 ('s a f a d o'),
 ('pilantra'),
 ('p i l a n t r a'),
 ('bundao'),
 ('b u n d a o'),
 ('bunda'),
 ('b u n d a'),
 ('viado'),
 (' v i a d o'),
 ('bicha'),
 ('b i c h a'),
 ('bixona'),
 ('b i x o n a'),
 ('arrombado'),
 ('a r r o m b a d o'),
 ('arronbado'),
 ('a r r o n b a d o'),
 ('arombado'),
 ('a r o m b a d o'),
 ('aronbado');
INSERT INTO `palavrao` (`MsgErrada`) VALUES 
 ('a r o n b a d o'),
 ('anus'),
 ('a n u s'),
 ('baba-ovo'),
 ('b a b a - o v o'),
 ('babaca'),
 ('b a b a c a'),
 ('bacura'),
 ('b a c u r a'),
 ('bagos'),
 ('b a g o s'),
 ('baitola'),
 ('b a i t o l a'),
 ('besta'),
 ('b e s t a'),
 ('bestao'),
 ('b e s t a o'),
 ('abestalhado'),
 ('a b e s t a l h a d o'),
 ('abestado'),
 ('a b e s t a d o'),
 ('bixa'),
 ('b i x a'),
 ('bixona'),
 ('b i x o n a'),
 ('bisca'),
 ('b i s c a'),
 ('biscate'),
 ('b i s c a t e'),
 ('boazuda'),
 ('b o a z u d a'),
 ('boco'),
 ('b o c o'),
 ('bocozao'),
 ('b o c o z a o'),
 ('boiola'),
 ('b o i o l a'),
 ('boiolao'),
 ('b o i o l a o'),
 ('bolagato'),
 ('b o l a g a t o'),
 ('boquete'),
 ('b o q u e t e'),
 ('boceta'),
 ('b o c e t a'),
 ('bocetuda'),
 ('b o c e t u d a'),
 ('bocetao'),
 ('b o c e t a o'),
 ('bucetao'),
 ('b u c e t a o'),
 ('bosseta'),
 ('b o s s e t a'),
 ('bossetao'),
 ('b o s s e t a o'),
 ('bossetuda'),
 ('b o s s e t u d a'),
 ('bossetudo'),
 ('b o s s e t u d o');
INSERT INTO `palavrao` (`MsgErrada`) VALUES 
 ('bostana'),
 ('b o s t a n a'),
 ('bunduda'),
 ('b u n d u d a'),
 ('brioco'),
 ('b r i o c o'),
 ('burra'),
 ('b u r r a'),
 ('burro'),
 ('b u r r o'),
 ('burao'),
 ('b u r a o'),
 ('burrao'),
 ('b u r r a o'),
 ('cachorra'),
 ('c a c h o r r a'),
 ('cadela'),
 ('c a d e l a'),
 ('cachorrona'),
 ('c a c h o r r o n a'),
 ('cadela'),
 ('c a d e l a'),
 ('caga'),
 ('c a g a'),
 ('cagar'),
 ('c a g a r'),
 ('cagao'),
 ('c a g a o'),
 ('canalha'),
 ('c a n a l h a'),
 ('canalhao'),
 ('c a n a l h a o'),
 ('caralho'),
 ('c a r a l h o'),
 ('carralho'),
 ('c a r r a l h o'),
 ('caralhudo'),
 ('c a r a l h u d o'),
 ('cassete'),
 ('c a s s e t e'),
 ('cassetao'),
 ('c a s s e t a o'),
 ('casete'),
 ('c a s e t e'),
 ('cassette'),
 ('c a s s e t t e'),
 ('casette'),
 ('c a s e t t e'),
 ('checheca'),
 ('c h e c h e c a'),
 ('xexeca'),
 ('x e x e c a'),
 ('chifruda'),
 ('c h i f r u d a'),
 ('chifrudo'),
 ('c h i f r u d o'),
 ('chifrudao'),
 ('c h i f r u d a o'),
 ('chifrudona');
INSERT INTO `palavrao` (`MsgErrada`) VALUES 
 ('c h i f r u d o n a'),
 ('chota'),
 ('c h o t a'),
 ('chochota'),
 ('c h o c h o t a'),
 ('xoxota'),
 ('x o x o t a'),
 ('chupada'),
 ('c h u p a d a'),
 ('xupada'),
 ('x u p a d a'),
 ('clitoris'),
 ('c l i t o r i s'),
 ('cocaina'),
 ('c o c a i n a'),
 ('corna'),
 ('c o r n a'),
 ('corno'),
 ('c o r n o'),
 ('cornuda'),
 ('c o r n u d a'),
 ('cornudo'),
 ('c o r n u d o'),
 ('cretina'),
 ('c r e t i n a'),
 ('cretino'),
 ('c r e t i n o'),
 ('cuzinho'),
 ('c u z i n h o'),
 ('cusinho'),
 ('c u s i n h o'),
 ('cuzuda'),
 ('c u z u d a'),
 ('cuzudo'),
 ('c u z u d o'),
 ('culhao'),
 ('c u l h a o'),
 ('debil'),
 ('b e b i l'),
 ('debiloite'),
 ('d e b i l o i d e'),
 ('demonio'),
 ('d e m o n i o'),
 ('demoniaco'),
 ('d e m o n i a c o'),
 ('diabolico'),
 ('d i a b o l i c o'),
 ('egua'),
 ('e g u a'),
 ('jumenta'),
 ('j u m e n t a'),
 ('jumento'),
 ('j u m e n t o'),
 ('escroto'),
 ('e s c r o t o'),
 ('escrota'),
 ('e s c r o t a'),
 ('esporrada'),
 ('e s p o r r a d a');
INSERT INTO `palavrao` (`MsgErrada`) VALUES 
 ('esporro'),
 ('e s p o r r o'),
 ('esporrar'),
 ('e s p o r r a r'),
 ('estupida'),
 ('e s t u p i d a'),
 ('estupido'),
 ('e s t u p i d o'),
 ('estupidez'),
 ('e s t u p i d e z'),
 ('fedida'),
 ('f e d i d a'),
 ('fedido'),
 ('f e d i d o'),
 ('fedorenta'),
 ('f e d o r e n t a'),
 ('fedorento'),
 ('f e d o r e n t o'),
 ('foder'),
 ('f o d e r'),
 ('fode'),
 ('f o d e');
/*!40000 ALTER TABLE `palavrao` ENABLE KEYS */;


--
-- Table structure for table `site`.`pedidos`
--

DROP TABLE IF EXISTS `pedidos`;
CREATE TABLE `pedidos` (
  `ID_PEDIDO` tinyint(11) NOT NULL default '0',
  `ID_PRODUTO` tinyint(11) default NULL,
  `QUANTIDADE` int(11) default NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `site`.`pedidos`
--

/*!40000 ALTER TABLE `pedidos` DISABLE KEYS */;
INSERT INTO `pedidos` (`ID_PEDIDO`,`ID_PRODUTO`,`QUANTIDADE`) VALUES 
 (1,10,2),
 (2,9,5),
 (2,12,2),
 (2,15,3);
/*!40000 ALTER TABLE `pedidos` ENABLE KEYS */;


--
-- Table structure for table `site`.`pedidos_cliente`
--

DROP TABLE IF EXISTS `pedidos_cliente`;
CREATE TABLE `pedidos_cliente` (
  `ID_PEDIDO_CLIENTE` int(11) NOT NULL,
  `Nome` text,
  `Endereco` text,
  `Cidade` text,
  `Estado` text,
  `CEP` text,
  `CPF` text,
  `tipo_pagto` varchar(100) default NULL,
  PRIMARY KEY  (`ID_PEDIDO_CLIENTE`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `site`.`pedidos_cliente`
--

/*!40000 ALTER TABLE `pedidos_cliente` DISABLE KEYS */;
INSERT INTO `pedidos_cliente` (`ID_PEDIDO_CLIENTE`,`Nome`,`Endereco`,`Cidade`,`Estado`,`CEP`,`CPF`,`tipo_pagto`) VALUES 
 (1,' Edson de Araujo',' rua sete de abril, 34','sao paulo','São Paulo - SP','01044-000','','No Ato da Entraga'),
 (2,'EDSON DE ARAUJO','Rua Sete de Abril, 34','Sao Paulo','Sao Paulo','01044-000','13552119809','Dinheiro'),
 (3,'EDSON DE ARAUJO','Rua Sete de Abril, 34','Sao Paulo','Sao Paulo','01044-000','13552119809','A Combinar'),
 (4,' edson ','rua sete de abril,34','sao paulo','São Paulo - SP','01044-000','','A Combinar'),
 (5,'Nancy Araujo','rua sete de abril, 34','sao paulo','São Paulo - SP','01044-000','','A Combinar'),
 (6,' Edson','rua sete de abril, 34','sao paulo','São Paulo - SP','01044-000','','A Combinar'),
 (7,'EDSON DE ARAUJO','Rua Sete de Abril, 34','Sao Paulo','Sao Paulo','01044-000','13552119809','A Combinar'),
 (8,'EDSON DE ARAUJO','Rua Sete de Abril, 34','Sao Paulo','Sao Paulo','01044-000','13552119809','No Ato da Entraga'),
 (9,'EDSON DE ARAUJO','Rua Sete de Abril, 34','Sao Paulo','Sao Paulo','01044-000','13552119809','No Ato da Entraga'),
 (10,'EDSON DE ARAUJO','Rua Sete de Abril, 34','Sao Paulo','Sao Paulo','01044-000','13552119809','No Ato da Entraga');
INSERT INTO `pedidos_cliente` (`ID_PEDIDO_CLIENTE`,`Nome`,`Endereco`,`Cidade`,`Estado`,`CEP`,`CPF`,`tipo_pagto`) VALUES 
 (11,'EDSON DE ARAUJO','Rua Sete de Abril, 34','Sao Paulo','Sao Paulo','01044-000','13552119809','No Ato da Entraga'),
 (12,' Edson de Araujo','rua 7 de abril, 34','sao paulo','São Paulo - SP','01044-901','','Cartão de Credito'),
 (13,' sjdksjdskj','dskdjskdjskdjsk','sao paulo','Santa Catarina - SC','10329-099','','Cartão de Credito'),
 (14,' dskldksldsk','dksldksldksldkl','sao paulo','Santa Catarina - SC','01044-901','','Cartão de Credito'),
 (15,'EDSON DE ARAUJO','Rua Sete de Abril, 34','Sao Paulo','Sao Paulo','01044-000','13552119809','A Combinar'),
 (16,'EDSON DE ARAUJO','Rua Sete de Abril, 34','Sao Paulo','Sao Paulo','01044-000','13552119809','No Ato da Entraga'),
 (17,'EDSON DE ARAUJO','Rua Sete de Abril, 34','Sao Paulo','Sao Paulo','01044-000','13552119809','No Ato da Entraga'),
 (18,'EDSON DE ARAUJO','Rua Sete de Abril, 34','Sao Paulo','Sao Paulo','01044-000','13552119809','No Ato da Entraga'),
 (19,'EDSON DE ARAUJO','Rua Sete de Abril, 34','Sao Paulo','Sao Paulo','01044-000','13552119809','No Ato da Entraga');
INSERT INTO `pedidos_cliente` (`ID_PEDIDO_CLIENTE`,`Nome`,`Endereco`,`Cidade`,`Estado`,`CEP`,`CPF`,`tipo_pagto`) VALUES 
 (20,'EDSON DE ARAUJO','Rua Sete de Abril, 34','Sao Paulo','Sao Paulo','01044-000','13552119809','No Ato da Entraga');
/*!40000 ALTER TABLE `pedidos_cliente` ENABLE KEYS */;


--
-- Table structure for table `site`.`produto`
--

DROP TABLE IF EXISTS `produto`;
CREATE TABLE `produto` (
  `cod_prod` int(11) NOT NULL auto_increment,
  `codigo` int(11) default NULL,
  `categoria` varchar(25) default NULL,
  `nome` varchar(50) default NULL,
  `descricao` text,
  `valor` decimal(8,2) default NULL,
  `sabores` text NOT NULL,
  `conteudo` varchar(100) NOT NULL,
  `destaque` varchar(3) default NULL,
  `data` varchar(10) default NULL,
  `hora` varchar(10) default NULL,
  `fot_peq` varchar(70) default NULL,
  `fot_1` varchar(70) default NULL,
  `fot_2` varchar(70) default NULL,
  `fot_3` varchar(70) default NULL,
  `tipo_venda` varchar(20) default NULL,
  `visita` int(11) default NULL,
  PRIMARY KEY  (`cod_prod`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `site`.`produto`
--

/*!40000 ALTER TABLE `produto` DISABLE KEYS */;
INSERT INTO `produto` (`cod_prod`,`codigo`,`categoria`,`nome`,`descricao`,`valor`,`sabores`,`conteudo`,`destaque`,`data`,`hora`,`fot_peq`,`fot_1`,`fot_2`,`fot_3`,`tipo_venda`,`visita`) VALUES 
 (1,1,'2','Pó para Preparo de Bebiba Para controle de peso (S','Proporciona 8 gramas de proteína por porção.\r\n-Baixo teor de calorias, gordura e sódio.\r\n-Excelente fonte de fibras alimentares.\r\n-Contém vitaminas e minerais.\r\n-Proporciona aminoácidos dietéticos.\r\n-Sabores: Baunilha, Chocolate, Morango e Frutas Tropicais.\r\n','87.00','Baunilha,Chocolate,Morango,Frutas Tropicais,\r\n','','SIM',NULL,NULL,'fotos/1.jpg',NULL,NULL,NULL,NULL,30),
 (2,2,'2','Programa Básico','Para dar a você um bom começo. Pó para bebidas e tabletes Fiber & Herb. Oferece alimentação nutritiva com resultados desejados de controle de peso. Formulado com uma mistura exclusiva de ingredientes naturais., ajudará a se sentir satisfeito e energizado.','122.00','','','SIM',NULL,NULL,'fotos/2.jpg',NULL,NULL,NULL,NULL,7),
 (3,3,'2','Programa Avançado','Fornece uma combinação de produtos excelentes para o seu corpo. Inclui todos os componentes do mais pó para bebidas de ervas aromáticas - Thermojetics.','252.00','','','SIM',NULL,NULL,'fotos/3.jpg',NULL,NULL,NULL,NULL,2);
INSERT INTO `produto` (`cod_prod`,`codigo`,`categoria`,`nome`,`descricao`,`valor`,`sabores`,`conteudo`,`destaque`,`data`,`hora`,`fot_peq`,`fot_1`,`fot_2`,`fot_3`,`tipo_venda`,`visita`) VALUES 
 (4,4,'2','Pó para preparo de Bebidas 100g','Pó para preparo de Bebidas de Ervas Aromáticas (Thermojetics), Uma bebida revigorante, resultante da combinação de cinco ingredientes botânicos naturais. Baixo teor de calorias. Deliciosa, quente ou fria. Complementa seu programa e controle de peso. Sabores: Original, Limão, Pêssego, Framboesa.\r\n\r\n','127.00','Original,Limão,Pêssego,Framboesa,','','SIM',NULL,NULL,'fotos/4.jpg',NULL,NULL,NULL,NULL,5),
 (5,5,'2','Pó para preparo de Bebidas 50g','Pó para preparo de Bebidas de Ervas Aromáticas (Thermojetics)\r\nUma bebida revigorante, resultante da combinação de cinco ingredientes botânicos naturais. Baixo teor de calorias. Deliciosa, quente ou fria. Complementa seu programa e controle de peso. Sabores: Original, Limão, Pêssego, Framboesa.\r\n\r\n','74.00','Limão,Pêssego,Framboesa,','','SIM',NULL,NULL,'fotos/5.jpg',NULL,NULL,NULL,NULL,2),
 (6,6,'2','N-R-G','O N-R-G pó para o preparo de bebida à base de chá preto e guaraná tem um delicioso sabor cítrico e pode ser preparado instantâneamente em casa, no trabalho ou em qualquer lugar. Aprecie-o, quente ou frio, como uma fonte refrescante de prazer.','56.00','','','SIM',NULL,NULL,'fotos/6.jpg',NULL,NULL,NULL,NULL,4);
INSERT INTO `produto` (`cod_prod`,`codigo`,`categoria`,`nome`,`descricao`,`valor`,`sabores`,`conteudo`,`destaque`,`data`,`hora`,`fot_peq`,`fot_1`,`fot_2`,`fot_3`,`tipo_venda`,`visita`) VALUES 
 (7,7,'2','Protein Powder','Ideal para pessoas que praticam atividades físicas e que precisam de uma absorção de nutrientes rápida e fácil, para maior energia antes, durante e depois dos esportes.','77.00','','','SIM',NULL,NULL,'fotos/7.jpg',NULL,NULL,NULL,NULL,2),
 (8,8,'2','Fiber & Herb','Auxilia a produzir uma sensação agradável de satisfação enquanto ajuda a manter seu sistema equilibrado. Tabletes especialmente formulados com uma mistura exclusiva de ingredientes naturais que, associados com os alimentos ingeridos, podem auxiliar na diminuição do colesterol.\r\n','37.00','','','SIM',NULL,NULL,'fotos/8.jpg',NULL,NULL,NULL,NULL,0),
 (9,9,'2','Pó Nutricional ShapeWorks','Delicioso e prático substituto de refeições que ajudará a manter sob controle sua ingestão de calorias. Alimento nutritivo e completo que fornece níveis adequados de proteínas de qualidade (proteína isolada de soja e proteína do soro do leite), carboidratos, gorduras, fibras, vitaminas e minerais, incluindo vitaminas antioxidantes A, C e E. Disponível em quatro deliciosos sabores: Baunilha, Chocolate, Morango e Frutas Tropicais. ','87.00','Baunilha,Chocolate,Morango,Frutas,Tropicais,','500 g.','SIM','30/07/2009','17:26:33','fotos/5b9582c0c00141g.jpg','fotos/6d3c55c88e19.jpg','fotos/dbbc39c57720.jpg','fotos/sem_foto.jpg',NULL,152),
 (10,10,'2','Pó Nutricional ShapeWorks em Sachês','O dia-a-dia agitado muitas vezes nos impede de fazer uma alimentação saudável, então nada melhor que uma refeição balanceada, saborosa, que você pode levar para qualquer lugar e está pronta em segundos. Disponível no tradicional e saboroso sabor baunilha.','29.90','Tradicional,Baunilha,','50 g.','SIM','30/07/2009','17:29:31','fotos/4780df0c392700.jpg',NULL,NULL,NULL,NULL,89);
INSERT INTO `produto` (`cod_prod`,`codigo`,`categoria`,`nome`,`descricao`,`valor`,`sabores`,`conteudo`,`destaque`,`data`,`hora`,`fot_peq`,`fot_1`,`fot_2`,`fot_3`,`tipo_venda`,`visita`) VALUES 
 (11,11,'2','Fiber & Herb ShapeWorks','Tabletes com uma exclusiva mistura de fibras de aveia e vegetais especialmente selecionados para ajudar a suprir as suas necessidades diárias. Especialistas recomendam a ingestão de 20g a 35g de fibras por dia, pois as fibras auxiliam o funcionamento do intestino. É importante a ingestão de água para um bom desempenho das fibras.','29.90','','','SIM','30/07/2009','17:30:37','fotos/ae8b411d9a3114g.jpg',NULL,NULL,NULL,NULL,59),
 (12,12,'2','Multivitaminas e Minerais ShapeWorks','Estresse, correria diária e exposição à poluição podem resultar na falta de nutrientes vitais ao organismo, aumentando a sensação de cansaço, diminuindo a resposta do sistema imunológico e dificultando a redução de peso. O suplemento de vitaminas e minerais fornece micronutrientes vitais e antioxidantes que apóiam um estilo de vida saudável. Contém vitaminas e minerais essenciais para uma boa nutrição diária e antioxidantes como vitaminas A, C e E.','32.99','','30 g.','SIM','30/07/2009','17:31:48','fotos/48435ed1c23122g.jpg',NULL,NULL,NULL,NULL,87),
 (13,13,'2','Chá Thermojetics ShapeWorks Pequeno','Deliciosa e refrescante bebida de baixo teor de açúcares e de calorias que pode ser saboreada sozinha, entre as refeições ou após os exercícios físicos. Combina a antiga sabedoria do uso dos chás com a conveniência dos tempos modernos. Contém chá verde e uma exclusiva mistura de ervas aromáticas, podendo ser apreciado quente ou frio. Disponível em quatro deliciosos sabores: Original, Limão, Pêssego e Framboesa. ','59.90','Original,Limão,Pêssego,Framboesa','300 g.','SIM','30/07/2009','17:33:47','fotos/fd788710910106g.jpg',NULL,NULL,NULL,NULL,47);
INSERT INTO `produto` (`cod_prod`,`codigo`,`categoria`,`nome`,`descricao`,`valor`,`sabores`,`conteudo`,`destaque`,`data`,`hora`,`fot_peq`,`fot_1`,`fot_2`,`fot_3`,`tipo_venda`,`visita`) VALUES 
 (14,14,'2','Chá Thermojetics ShapeWorks Grande','Deliciosa e refrescante bebida de baixo teor de açúcares e de calorias que pode ser saboreada sozinha, entre as refeições ou após os exercícios físicos. Combina a antiga sabedoria do uso dos chás com a conveniência dos tempos modernos. Contém chá verde e uma exclusiva mistura de ervas aromáticas, podendo ser apreciado quente ou frio. Disponível em quatro deliciosos sabores: Original, Limão, Pêssego e Framboesa. ','98.99','','','SIM','30/07/2009','17:34:37','fotos/ca8d100f7a0106g.jpg',NULL,NULL,NULL,NULL,32),
 (15,15,'2','Barra de Proteína ShapeWorks','Um lanche saudável, prático e delicioso. \r\n\r\nDesejo por Doces? Ao invés de comer doces com alto teor de gordura, experimente a barra de proteína ShapeWorks. Satisfaça seu desejo, aumente seu nível de energia e ainda saboreie uma barra deliciosa com recheio sabor limão e cobertura de Chocolate. Com ShapeWorks ajudamos você a criar um hábito saudável, oferecendo uma opção nutritiva e saborosa na hora do lanche. \r\n\r\nBarra de 35g com 140 calorias. \r\n10g de proteína do leite. \r\nPrática e conveniente: embalada individualmente e vendida em caixa com 7 barras. \r\nSabor Citrus Lemon com cobertura de chocolate e sabor Brownie Chocolate.. \r\nBoa consistência e textura, dissolve na boca. \r\nUm ótimo complemento para todos os programas ShapeWorks. \r\nEmbalagem com 245g com 7 barras de 35g cada ','47.00','Citrus,Limão,Brownie,chocolate,','30 g.','SIM','30/07/2009','18:11:35','fotos/ec2b968ca50030g.jpg',NULL,NULL,NULL,NULL,47),
 (16,16,'2','Sopa Instantânea ShapeWorks','É uma ótima opção para um lanche saudável ou como complemento das refeições principais. Preparar a sopa é fácil e rápido! É só misturar com 200ml de água fervente! Cada porção contém aproximadamente 5g de protéina, 3 g de fibras e 60 calorias. Além disso, tem baixo teor de sódio e gorduras saturadas. Disponível em três deliciosos sabores: Frango com Legumes, Legumes e Verduras e 4 Queijos com Croutons','30.00','Frango com Legumes,Legumes e Verduras,4 Queijos com Croutons,','100 g. cada','SIM','30/07/2009','18:20:29','fotos/f7b8fd6c9c1052g.jpg',NULL,NULL,NULL,NULL,56);
INSERT INTO `produto` (`cod_prod`,`codigo`,`categoria`,`nome`,`descricao`,`valor`,`sabores`,`conteudo`,`destaque`,`data`,`hora`,`fot_peq`,`fot_1`,`fot_2`,`fot_3`,`tipo_venda`,`visita`) VALUES 
 (17,17,'2','Xtra-Cal (Cálcio, Magnésio e Vitamina D)','Tabletes com boa concentração de cálcio, vitamina D e magnésio. O cálcio é o mineral presente em maior quantidade no corpo humano e desenvolve um papel vital em nossa saúde. Uma dieta deficiente em cálcio pode tornar os ossos frágeis e propensos a fraturas. Cada tablete oferece 400mg de cálcio, que corresponde a 50% das necessidades diárias.','33.90','','250 g.','SIM','30/07/2009','18:29:41','fotos/ec2b968ca50030g.jpg',NULL,NULL,NULL,NULL,40),
 (18,18,'2','FIRM CELL','Mistura de vegetais com Vitamina C, Cálcio e Iodo em tabletes \r\n\r\nOs tabletes Firm Cell contêm vitamina C, cálcio e iodo para complementar as necessidades destes micronutrientes, que muitas vezes se encontram em pequenas quantidades em nossa dieta* \r\n\r\nFormula exclusiva que combina vegetais, rica em vitamina C, cálcio e iodo.\r\n\r\n','65.00','','','SIM',NULL,NULL,'fotos/18.jpg',NULL,NULL,NULL,NULL,1),
 (19,19,'2','Fiberbond','Aumente a absorção e a ação da vitaminas e minerais que você ingere. Auxilia a absorção e a ação das vitaminas e minerais provenientes da sua alimentação, criando uma base sólida para uma excelente saúde. Ajuda a melhorar a vitalidade e, quando consumido diáriamente, pode contribuir para o seu bem-estar.','66.00','','','SIM',NULL,NULL,'fotos/19.jpg',NULL,NULL,NULL,NULL,1);
INSERT INTO `produto` (`cod_prod`,`codigo`,`categoria`,`nome`,`descricao`,`valor`,`sabores`,`conteudo`,`destaque`,`data`,`hora`,`fot_peq`,`fot_1`,`fot_2`,`fot_3`,`tipo_venda`,`visita`) VALUES 
 (20,20,'2','Xtra- Cal','Boa concentração de cálcio. Composto de magnésio e vitamina D, elementos fundamentais para a boa formação e manutenção da saúde dos ossos.','44.00','','','SIM',NULL,NULL,'fotos/20.jpg',NULL,NULL,NULL,NULL,NULL),
 (21,21,'2','Multivitaminas','Inclui 23 vitaminas e minerais mais uma exclusiva combinação de ervas que trabalham sinergeticamente para criar a base de uma vida saudável. Contém fatores antioxidantes como vitamina A, C, E e Selênio, bem como Cromo GTF, um mineral essencial que auxilia na manutenção de um corpo saudável e em boas condições.','43.00','','','SIM',NULL,NULL,'fotos/21.jpg',NULL,NULL,NULL,NULL,1),
 (22,22,'2','Thermojetics™ Green','Os tabletes Thermojetics Green contribuem para elevar a energia, melhorar o humor e podem ser usados como complementos em dietas para controle de peso. Sua fórmula é composta por ingredientes botânicos, como chá verde, erva mate e cacau. O chá verde pode ter efeito termogênico no corpo e, embora sejam necessários estudos complementares para se chegar a uma conclusão definitiva, as pesquisas preliminares já são bastante animadoras. A erva mate é conhecida por seus efeitos benéficos sobre o humor e o cacau contém pequenas quantidades de cafeína que aumentam a produção de energia. ','84.00','','','SIM',NULL,NULL,'fotos/22.jpg',NULL,NULL,NULL,NULL,NULL),
 (23,23,'2','Herbalifeline','É uma mistura exclusiva de lipídios marinhos refinados contendo ácidos graxos ?mega-3 de alta qualidade, especialmente o ácido eicosapentan?ico (EPA) e o ácido docosaexaenico (DHA).\r\nÔmega-3\r\nPode ajudar a regular os níveis de triglicerídeos gordurosos presentes no sangue e que representam um fator de risco para ataques cardíacos.\r\nNão são produzidos pelo corpo e devem ser supridos com a dieta alimentar. \r\nEstudos: esquimós e os japoneses, consumidores centenários de peixes com gordura, apresentam taxas menores de doença cardíaca e de desordens circulatórias.\r\nOs ácidos graxos Ômega-3 são essenciais ao processo normal de crescimento e desenvolvimento.','92.00','','','SIM',NULL,NULL,'fotos/23.jpg',NULL,NULL,NULL,NULL,2);
INSERT INTO `produto` (`cod_prod`,`codigo`,`categoria`,`nome`,`descricao`,`valor`,`sabores`,`conteudo`,`destaque`,`data`,`hora`,`fot_peq`,`fot_1`,`fot_2`,`fot_3`,`tipo_venda`,`visita`) VALUES 
 (24,24,'2','Tônico - Pele Normal a Seca','O Tônico Multivitaminas Nourifusion tem consistência leve e refrescante que elimina, suavemente, a gordura nociva, a sujeira e os resíduos da pele. A ação do Pantenol (vitamina B5) combinada com a Hamamélis desobstrui os poros, deixando a pela hidratada e fresca.','34.00','','','SIM',NULL,NULL,'fotos/24.jpg',NULL,NULL,NULL,NULL,5),
 (25,25,'2','Thermo Complete','Deliciosa bebida à base de Chá Verde, com sabor de laranja e mel, que pode servir como complemento à nutrição diária ou a um programa de controle de peso. Mais disposição para o seu dia-a-dia. Contém aromatizantes naturais de laranja e mel. Com Zero de açúcar, auxiliar o consumo diário de água.\r\n\r\nContém Chá Verde - O Chá Verde é muito conhecido por suas propriedades benéficas, pois contém manganês, potássio, ácido fólico, as vitaminas K, B1 e B2. Além disso, possui Vitamina C e polifenóis que possui ação antioxidante.\r\n Gelado - O Thermo Complete é muito refrescante por causa da sua combinação de sabores e porque pode ser consumido com água gelada.\r\n Prático - O Thermo Complete é muito conveniente e fácil de preparar.Pó para preparo de bebida à base de chá Verde sabor laranja, Mel, Gengibre e Cacau\r\n Chá Verde - rico em nutrientes antioxidantes de polifenol, contribui para uma sensação de bem estar geral. O chá verde contém pouca cafeína.','89.00','','','SIM',NULL,NULL,'fotos/25.jpg',NULL,NULL,NULL,NULL,1);
/*!40000 ALTER TABLE `produto` ENABLE KEYS */;


--
-- Table structure for table `site`.`produto2`
--

DROP TABLE IF EXISTS `produto2`;
CREATE TABLE `produto2` (
  `id` int(11) NOT NULL auto_increment,
  `codigo` int(11) NOT NULL,
  `categoria` varchar(200) default NULL,
  `nome` varchar(200) default NULL,
  `tipo` varchar(15) default NULL,
  `peso` decimal(12,3) NOT NULL,
  `descricao` text,
  `combinar` varchar(15) default NULL,
  `valor1` varchar(6) default NULL,
  `valor2` decimal(12,2) NOT NULL,
  `valor3` int(2) NOT NULL,
  `quantidade` int(11) NOT NULL,
  `entrega` varchar(50) default NULL,
  `pagamento` varchar(50) default NULL,
  `destaque` varchar(10) default NULL,
  `local_produto` varchar(75) default NULL,
  `nome_user` varchar(40) NOT NULL,
  `data` varchar(10) default NULL,
  `hora` varchar(10) default NULL,
  `situacao` varchar(45) default NULL,
  `visita` int(11) NOT NULL,
  `fot_peq` varchar(200) default NULL,
  `fot_1` varchar(200) default NULL,
  `fot_2` varchar(200) default NULL,
  `fot_3` varchar(200) default NULL,
  `negociacao` varchar(20) default NULL,
  `comprado_por` varchar(100) default NULL,
  `como_foi` varchar(20) default NULL,
  `comp_em` varchar(100) default NULL,
  `categoriaa` varchar(200) default NULL,
  `excluido` varchar(3) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `site`.`produto2`
--

/*!40000 ALTER TABLE `produto2` DISABLE KEYS */;
INSERT INTO `produto2` (`id`,`codigo`,`categoria`,`nome`,`tipo`,`peso`,`descricao`,`combinar`,`valor1`,`valor2`,`valor3`,`quantidade`,`entrega`,`pagamento`,`destaque`,`local_produto`,`nome_user`,`data`,`hora`,`situacao`,`visita`,`fot_peq`,`fot_1`,`fot_2`,`fot_3`,`negociacao`,`comprado_por`,`como_foi`,`comp_em`,`categoriaa`,`excluido`) VALUES 
 (3,1,'3','Notebook Compag Evo N610c','USADO','0.800','','SIM','R$','900.00',0,1,'Correios','A Combinar','SIM','Franco da Rocha - SP','holodek','23/08/2009','09:36:50','Finalizado',115,'fotos/1b5d28b52339c50c2150images.jpg','fotos/6d3c55c88e19.jpg','fotos/dbbc39c57720.jpg','fotos/45cfc148c568.jpg','Venda ou Troca','HOLODEK',NULL,'21/12/2010','4','NAO'),
 (4,2,'2','HTC Atron Exec 450 Mhz','USADO','0.400','<p align=\"center\"><strong><span style=\"font-size: large;\"><span style=\"color: #ff0000;\">OPORTUNIDADE<br /></span></span></strong><strong><span style=\"color: #ccffff;\"><span style=\"font-size: medium; font-family: Courier New, Courier, mono; background-color: #3333ff;\">O2 Atron Exec 450 Mhz com 256 de Ram<br />SD de 2 Gb + fone + carregador veicular</span><br /></span></strong><span style=\"font-size: medium; font-family: Verdana, Arial, Helvetica, sans-serif;\"><em><strong>todos os manuais e teclado e rede sem fio<br /><br />igual ao HTC 9000<br /></strong>muito rapido com processador de 450Mhz alta performace com uso de rede e internet.<br /><span style=\"color: #ff0000;\">\"<span style=\"color: #99cc00;\">&nbsp;Oportunidade !!!</span>&nbsp;\"</span></em></span></p>\r\n<p align=\"center\"><span style=\"font-size: medium; font-family: Verdana, Arial, Helvetica, sans-serif;\"><em><span style=\"color: #ff0000;\">...........<br />fim</span></em></span></p>','SIM','R$','500.00',0,1,'Correios','A Combinar','SIM','Franco da Rocha','holodek','27/08/2009','12:53:27','ATIVO',824,'fotos/e1d738a748temp01.gif','fotos/ccc7fecbe1temp02.gif','fotos/57324e6b88418737_640.jpg','fotos/sem_foto.jpg','Venda ou Troca','HOLODEK',NULL,'12/01/2011','4','SIM'),
 (5,3,'2','Monitor LCD 17','NOVO','1.000','<p><strong>TV LCD 32\" c/ 2 HDMI, Entrada p/ PC, XD Engine, Simplink<br /></strong><em>, IPS e Energy Saving (32LH20R) - LG</em></p>\r\n<p><span style=\"color: #888888;\">Principais Caracter&iacute;sticas da TV LCD LG:<br /></span>- Resolu&ccedil;&atilde;o: 1366 x 768 pixels<br />- Energy Saving: Fun&ccedil;&atilde;o que proporciona economia de energia atrav&eacute;s do ajuste do n&iacute;vel do brilho da TV. Basta selecionar a fun&ccedil;&atilde;o Eco Friendly (bot&atilde;o verde) do controle remoto.<br />- Tecnologia IPS: tecnologia que permite um maior &acirc;ngulo de vis&atilde;o, al&eacute;m de garantir melhor qualidade em cenas de velocidade. As principais vantagens do painel IPS s&atilde;o: melhor reprodu&ccedil;&atilde;o e fidelidade das cores em qualquer &acirc;ngulo de vis&atilde;o; baixo tempo de resposta, ideal para cenas em movimento, al&eacute;m da confiabilidade do painel que &eacute; mais resistente em fun&ccedil;&atilde;o do alinhamento horizontal dos cristais.<br />- Menu de acesso r&aacute;pido que possibilita ajuste (Quick Menu): Formato de tela/Ajuste de imagem/Closed caption/Sleep Timer/Canais favoritos/Energy saving<br />- Simplink: controla outros aparelhos compat&iacute;veis com a fun&ccedil;&atilde;o, atrav&eacute;s do controle remoto da TV.<br />- XD Engine<br />- Progressive Scan<br />- Closed Caption<br />- Fun&ccedil;&atilde;o Mute<br />- Bloqueio de teclas</p>\r\n<p>&Aacute;udio:<br />- Est&eacute;reo/SAP<br />- Pot&ecirc;ncia: 20 W RMS<br />- AVL (Auto Volume Level)<br />- Ajuste de &Aacute;udio: Balan&ccedil;o/graves/agudos</p>\r\n<p>Especifica&ccedil;&otilde;es T&eacute;cnicas da TV LCD LG:<br />- Polegadas: 32<br />- Tempo de resposta: 5 ms<br />- Resolu&ccedil;&atilde;o: 1366 x 768 pixels<br />- Contraste: 60.000:1<br />- &Acirc;ngulo de vis&atilde;o: 178&ordm; x 178&ordm;<br />- Brilho: 500 cd/m2<br />- Formato Tela: 16:9<br />- Vida &uacute;til: 60.000 horas ou 20 anos (considerando o uso de 8 horas di&aacute;rias)<br />- Ajuste formato tela:4:3/16:9/Just Scan/Zoom1/Cinema Zoom1<br />- Ajuste temp. cor (ACC): quente/frio/m&eacute;dio<br />- Ajuste imagem: vivo / padr&atilde;o / natural cinema / esportes / jogos / expert 1 e 2<br />- Pr&eacute;-ajustes &aacute;udio: SRS TXT / Voz N&iacute;tida / Padr&atilde;o M&uacute;sica Cinema / Esportes / Jogos<br />- Rel&oacute;gio: On-Off Timer / Sleep Timer/desl. aut<br />- Ajuste &aacute;udio: balan&ccedil;o/graves/agudos<br />- Quantidade de canais: 181 canais<br />- Idiomas do menu: Portugu&ecirc;s / Ingl&ecirc;s / Espanhol<br />- Trinorma: PAL-M / N / NTSC<br />- Alimenta&ccedil;&atilde;o: 100~240v<br />- Consumo m&eacute;dio: 110 W<br />- Consumo stand by: 1W</p>\r\n<p>Conex&otilde;es da TV LCD LG:<br />- 1 entrada v&iacute;deo componente<br />- 1 sa&iacute;da &aacute;udio e v&iacute;deo<br />- 1 entrada &aacute;udio e v&iacute;deo<br />- 2 entrada HDMI<br />- 1 entrada RGB (para PC)<br />- 1 entrada de &aacute;udio PC<br />- 1 entrada USB (service): Entrada exclusiva para atualiza&ccedil;&atilde;o de software<br />- 1 Antena RF<br />- 1 Entrada RS-232C</p>\r\n<p>Dimens&otilde;es (L x A x P) e Peso da TV LCD LG:<br />- Dimens&otilde;es do Produto sem base: (804 x 529 x 80) mm<br />- Peso do Produto sem base: 10,44 Kg<br />- Dimens&otilde;es do Produto com base: (804 x 583 x 200) mm<br />- Peso do Produto com base: 11,58 kg<br />- Dimens&otilde;es da Embalagem: (976 x 649 x 183) mm<br />- Peso da Embalagem: 13,40 Kg</p>\r\n<p>&nbsp;</p>','SIM','R$','1999.00',0,3,'Transportadora','Cartão de Credito','SIM','Sao Paulo','holodek','02/09/2009','16:03:34','Finalizado',174,'fotos/8e31da1c36edd7d1bc53monitor.jpg',NULL,NULL,NULL,'Troca','MARLEY',NULL,'05/01/2011','4','NAO');
INSERT INTO `produto2` (`id`,`codigo`,`categoria`,`nome`,`tipo`,`peso`,`descricao`,`combinar`,`valor1`,`valor2`,`valor3`,`quantidade`,`entrega`,`pagamento`,`destaque`,`local_produto`,`nome_user`,`data`,`hora`,`situacao`,`visita`,`fot_peq`,`fot_1`,`fot_2`,`fot_3`,`negociacao`,`comprado_por`,`como_foi`,`comp_em`,`categoriaa`,`excluido`) VALUES 
 (6,4,'4','LG Touch Smathtc 3090','NOVO','0.100','<p style=\"text-align: center;\"><span style=\"font-size: medium;\"><span style=\"color: #ff0000;\"><strong>Celular NOVO<br /></strong><span style=\"color: #000000;\"><span style=\"font-size: small;\">ultimo modelo destravado para todas as operadoras<br /><em><strong>acompanha capa de cilicone, CDs para comunucacao com o PC<br />cabo de dados e SD de 4 Gb<br />aceito proposta...</strong></em></span></span></span></span></p>','SIM','R$','600.00',0,1,'A Combinar','A Combinar','SIM','Sao Paulo','marley','17/09/2009','15:58:42','Finalizado',105,'fotos/7f151d8809img_telefone.GIF',NULL,NULL,NULL,'Venda','HOLODEK',NULL,'28/10/2010',NULL,'NAO'),
 (7,5,'2','Impressora HP 1200','NOVO','1.000','<p><strong><span style=\"font-size: x-small;\">Descri&ccedil;&atilde;o: Impressora HP LaserJet 1200 modelo b&aacute;sico. Velocidade de impress&atilde;o: Qualidade normal, preto, carta: at&eacute; 15 ppm. Qualidade otimizada, preto, carta: at&eacute; 15 ppm. Sa&iacute;da da primeira p&aacute;gina impressa, preto, carta: menos de 10 segundos. Resolu&ccedil;&atilde;o: Qualidade de resolu&ccedil;&atilde;o de impress&atilde;o otimizada, preto: 1200 x 1200 dpi. Tecnologia: Tecnologia de resolu&ccedil;&atilde;o de impress&atilde;o REt, HP ProRes 1200, HP FastRes 1200. Manuseio de papel: Capacidade de entrada padr&atilde;o 250 folhas. Capacidade de entrada m&aacute;xima 250 folhas. Capacidade de sa&iacute;da padr&atilde;o 125 folhas. Capacidade de sa&iacute;da m&aacute;xima 125 folhas. Ciclo de trabalho At&eacute; 10000 p&aacute;ginas por m&ecirc;s. Tipos de papel Papel (liso, reciclado, personalizado), envelopes, transpar&ecirc;ncias, etiquetas. m&iacute;dia para trabalho pesado. Capacidade de bandeja para papel, m&aacute;xima 1 bandeja. Impress&atilde;o frente e verso Manual (fornecido suporte de driver). Tamanhos de papel 76 x 127 a 216 x 356 mm.</span></strong></p>','SIM','R$','161.64',0,2,'Transportadora','A Combinar','SIM','Sao Paulo','marley','23/09/2009','15:13:09','Finalizado',45,'fotos/985084f679418737_640.jpg',NULL,'fotos/4edb5762e9avon.jpg',NULL,'Venda','HOLODEK',NULL,'27/10/2009','9','NAO');
INSERT INTO `produto2` (`id`,`codigo`,`categoria`,`nome`,`tipo`,`peso`,`descricao`,`combinar`,`valor1`,`valor2`,`valor3`,`quantidade`,`entrega`,`pagamento`,`destaque`,`local_produto`,`nome_user`,`data`,`hora`,`situacao`,`visita`,`fot_peq`,`fot_1`,`fot_2`,`fot_3`,`negociacao`,`comprado_por`,`como_foi`,`comp_em`,`categoriaa`,`excluido`) VALUES 
 (8,6,'2','Carrinho de Compras Mercado','USADO','0.200','<p style=\"text-align: center;\"><strong><span style=\"font-size: small;\">Carrinho de Mercado adquirido por meios ilicitos, de dentro do supermercado, oportunidade, motivo da venda depois que fiz as comprar nao consegui mais devolver para o mercado com medo de ser preso por roubo, entao estou me defazendo do mesmo.<br /></span></strong><em><span style=\"font-size: x-small;\"><span style=\"color: #ff0000;\">Obs: Carrinho em bom estado sem ferrugem e com rolamento e rodinhas novas.OK</span></span></em></p>','SIM','R$','100.00',0,1,'A Combinar','Dinheiro','SIM','minha montanha 2','holodek','25/11/2010','16:15:30','ATIVO',24,'fotos/f948b7abb2CA8VU1E7.jpg','fotos/e86130efdcav.jpg','fotos/2788f03fbfcarrinho de supermercado.jpg',NULL,'Troca','',NULL,'05/01/2011','14','NAO'),
 (9,7,'2','Filmes em 3GP','NOVO','0.010','<p style=\"text-align: center;\"><span style=\"font-size: medium; color: #ff0000;\"><strong>Varios Filmes de sexo em modo 3GP, varios titulos<br /></strong></span></p>\r\n<p style=\"text-align: center;\"><span style=\"font-size: medium; color: #ff0000;\"><strong>sao mais de 25 giga de filmes em HD<br /></strong></span></p>','SIM','R$','45.00',0,20,'Correios','Dinheiro','SIM','Sao Paulo','holodek','04/01/2011','22:17:05','Finalizado',12,'fotos/2c8bc77976imagesCAUY7N8U.jpg',NULL,NULL,NULL,'Venda','HOLODEK',NULL,'12/01/2011','5','NAO');
INSERT INTO `produto2` (`id`,`codigo`,`categoria`,`nome`,`tipo`,`peso`,`descricao`,`combinar`,`valor1`,`valor2`,`valor3`,`quantidade`,`entrega`,`pagamento`,`destaque`,`local_produto`,`nome_user`,`data`,`hora`,`situacao`,`visita`,`fot_peq`,`fot_1`,`fot_2`,`fot_3`,`negociacao`,`comprado_por`,`como_foi`,`comp_em`,`categoriaa`,`excluido`) VALUES 
 (10,8,'4','Fogao Industrial','USADO','50.000','<p>Fogao industrial somente 6 meses de uso novo na garantia 6 bocas e dois fornos.</p>','SIM','R$','300.00',0,1,'Transportadora','Dinheiro','SIM','Campinas - SP','marley','06/01/2011','00:07:40','ATIVO',1,'fotos/0714975c1d122843o.jpg',NULL,NULL,NULL,'Venda',NULL,NULL,NULL,'21','NAO'),
 (11,9,'2','psp ','NOVO','350.000','<h1>esse psp e novo e vem com 200 games e capinha de silicone&nbsp;</h1>','SIM','R$','550.00',0,2,'Correios','Dinheiro','SIM','lojas','endrews','11/01/2011','16:46:17','Finalizado',11,'fotos/b5534d538bPSP.jpg','fotos/0f7adf513421284734_4.jpg','fotos/881302647dPSP.jpg',NULL,'Venda','HOLODEK',NULL,'11/01/2011','14','NAO'),
 (12,10,'4','sansao','NOVO','20.000','<h1>esse urcinho ven com caixa e uma boneca da monica</h1>','SIM','R$','50.00',0,2,'Correios','A Combinar','SIM','lojos','endrews','11/01/2011','17:15:14','ATIVO',9,'fotos/f749fd5487SANSAO.jpg','fotos/69b1224c2c1792294_4.jpg',NULL,NULL,'Venda',NULL,NULL,NULL,'1','NAO');
INSERT INTO `produto2` (`id`,`codigo`,`categoria`,`nome`,`tipo`,`peso`,`descricao`,`combinar`,`valor1`,`valor2`,`valor3`,`quantidade`,`entrega`,`pagamento`,`destaque`,`local_produto`,`nome_user`,`data`,`hora`,`situacao`,`visita`,`fot_peq`,`fot_1`,`fot_2`,`fot_3`,`negociacao`,`comprado_por`,`como_foi`,`comp_em`,`categoriaa`,`excluido`) VALUES 
 (13,11,'','camaro','NOVO','9000.000','<h1>esses camaros vem com alarme e radio&nbsp;</h1>','SIM','R$','100.00',0,3,'A Combinar','A Combinar','SIM','lojas','endrews','12/01/2011','14:11:07','ATIVO',4,'fotos/3f5b36466fcamaro_2011_brasil_2.jpg','fotos/0d890991b12011-camaro-ss.jpg','fotos/8c4d8317f0camaro linha 2011.jpg',NULL,'Venda',NULL,NULL,NULL,'13','NAO'),
 (14,12,'','celular motorola','NOVO','35.000','<h1>esse celular vem com capa lacrado de vem um chip da oi grats</h1>','SIM','R$','100.00',0,1,'Correios','Dinheiro','SIM','lojas','endrews','13/01/2011','14:38:46','ATIVO',0,'fotos/56740b0bcccelular-motorola-a12-1020593125.jpg','fotos/6652981deaCelular_Motorola_A1200.jpg','fotos/01affa64781230668870768_bigPhoto_0.jpg',NULL,'Venda',NULL,NULL,NULL,'14','NAO'),
 (15,13,'4','Cadeado para Plam','NOVO','1.000','<p style=\"text-align: center;\">Cadeado para Palm, cadeado eletrico que e ativado por sinal de celular, funciona com codigo criptografado.<br /><span style=\"font-size: small;\"><strong>COMPATIVEL COM QUALQUER MODELO DE PALM</strong></span><br /><br /><em><span style=\"font-size: medium;\"><strong><span style=\"color: #ff0000;\">Fa&ccedil;a todas as perguntas necessaria antes de comprar</span></strong></span></em></p>','SIM','R$','50.00',0,1,'A Combinar','Pagamento Seguro (Pagseguro)','SIM','Santos - SP','holodek','13/01/2011','16:19:36','ATIVO',0,'fotos/4ac5610e43imagesCAEENR03.jpg',NULL,NULL,NULL,'Venda',NULL,NULL,NULL,'16','NAO');
INSERT INTO `produto2` (`id`,`codigo`,`categoria`,`nome`,`tipo`,`peso`,`descricao`,`combinar`,`valor1`,`valor2`,`valor3`,`quantidade`,`entrega`,`pagamento`,`destaque`,`local_produto`,`nome_user`,`data`,`hora`,`situacao`,`visita`,`fot_peq`,`fot_1`,`fot_2`,`fot_3`,`negociacao`,`comprado_por`,`como_foi`,`comp_em`,`categoriaa`,`excluido`) VALUES 
 (16,14,'2','notebooks positivo','NOVO','100.000','<h1>esses notebooks vem com memoria de 2 giga</h1>','NÃO','R$','450.00',0,1,'Correios','Dinheiro','SIM','lojas','endrews','13/01/2011','16:29:29','Finalizado',0,'fotos/f5fbe98127notebook-positivo.jpg',NULL,NULL,NULL,'Venda','HOLODEK',NULL,'13/01/2011','3','NAO'),
 (17,15,'2','Leitor de DVD Portatil USB','NOVO','100.000','<p style=\"text-align: center;\"><span style=\"font-size: medium;\"><strong>Unidade de Leitura e Grava&ccedil;&atilde;o de DVDR-W e CDR-W </strong></span><br />controladora USB 2.0 compativel com todos os modelos de Notebooks<span style=\"font-size: medium;\"><span style=\"font-family: comic sans ms,sans-serif;\"><br /><strong><span style=\"color: #ff0000;\">acompanha CD de estala&ccedil;&atilde;o e cados para ligacao.</span></strong></span></span></p>','SIM','R$','100.00',0,1,'A Combinar','A Combinar','SIM','Praia Grande - SP','holodek','13/01/2011','16:39:51','ATIVO',0,'fotos/5c024afe666d3c55c88e19.jpg',NULL,NULL,NULL,'Venda ou Troca',NULL,NULL,NULL,'3','NAO'),
 (18,16,'2','Placa de Som SondBlaster','NOVO','1.000','<p style=\"text-align: center;\"><strong><span style=\"font-size: small;\">Placa de Som da marca <span style=\"color: #ff0000;\">SondBlaster Pro</span>, com varias entradas e saidas, modulacao digital, com varios programas para mixar e transformar qualquer tipo de tipo e formato de som, 64 bits com 16 mg de memoria, nova na caixa com todoso o s mauais, e Cds de estalacao</span></strong></p>','SIM','R$','80.00',0,1,'A Combinar','Pagamento Seguro (Pagseguro)','SIM','Jundiai - SP','holodek','14/01/2011','07:44:57','ATIVO',0,'fotos/3908d0b641dbbc39c57720.jpg',NULL,NULL,NULL,'Venda ou Troca',NULL,NULL,NULL,'14','NAO');
INSERT INTO `produto2` (`id`,`codigo`,`categoria`,`nome`,`tipo`,`peso`,`descricao`,`combinar`,`valor1`,`valor2`,`valor3`,`quantidade`,`entrega`,`pagamento`,`destaque`,`local_produto`,`nome_user`,`data`,`hora`,`situacao`,`visita`,`fot_peq`,`fot_1`,`fot_2`,`fot_3`,`negociacao`,`comprado_por`,`como_foi`,`comp_em`,`categoriaa`,`excluido`) VALUES 
 (20,17,'2','tv philips','NOVO','300.000','<h1>essa tv philips led de 44 polegadas&nbsp;</h1>','NÃO','R$','5000.00',0,1,'A Combinar','A Combinar','SIM','lojas','endrews','14/01/2011','13:59:52','ATIVO',0,'fotos/5e5b034e6cphilips-42pfl9803-uk-lcd-tv.jpg',NULL,NULL,NULL,'Venda',NULL,NULL,NULL,'14','NAO');
/*!40000 ALTER TABLE `produto2` ENABLE KEYS */;


--
-- Table structure for table `site`.`sistema`
--

DROP TABLE IF EXISTS `sistema`;
CREATE TABLE `sistema` (
  `id` int(11) NOT NULL auto_increment,
  `titulo` varchar(30) default NULL,
  `texto` text,
  `data` varchar(10) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `site`.`sistema`
--

/*!40000 ALTER TABLE `sistema` DISABLE KEYS */;
INSERT INTO `sistema` (`id`,`titulo`,`texto`,`data`) VALUES 
 (1,'Sistemas ERP WEB em PHP','<p><span style=\"font-size: small;\"><strong>Sistema Coorporativo ERP*</strong></span></p>\r\n<h2><span style=\"FONT-WEIGHT: normal\">* </span><span style=\"FONT-FAMILY: Verdana\">ERP</span><span style=\"FONT-WEIGHT: normal\"> e um &uacute;nico programa de software que supra as necessidades de todos os departamentos e trabalhadores, cadastro, financeiro, cobran&ccedil;a, estoque, cada setor possui seu pr&oacute;prio programa e cada um aperfei&ccedil;oado para cada necessidade o ERP combina todos eles juntos em uso num s&oacute; programa de software interligados com um banco de dados comum; Dessa forma, os v&aacute;rios departamentos podem mais facilmente dividir informa&ccedil;&otilde;es e se comunicar entre si.<br /></span></h2>','08/11/2010');
/*!40000 ALTER TABLE `sistema` ENABLE KEYS */;


--
-- Table structure for table `site`.`smilies`
--

DROP TABLE IF EXISTS `smilies`;
CREATE TABLE `smilies` (
  `code` char(3) NOT NULL,
  `file` varchar(15) NOT NULL,
  `name` varchar(25) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `site`.`smilies`
--

/*!40000 ALTER TABLE `smilies` DISABLE KEYS */;
INSERT INTO `smilies` (`code`,`file`,`name`) VALUES 
 (':)','smile.gif','Sorriso'),
 (':-)','smile.gif','Sorriso'),
 (':))','lol.gif','Risada'),
 (';)','wink.gif','Piscando'),
 (';-)','wink.gif','Piscando'),
 (':(','frown.gif','Triste'),
 (':-(','frown.gif','Triste'),
 (':[','mad.gif','Mau'),
 (':z)','grazy.gif','Doido'),
 (':y)','crying.gif','Chorando'),
 (':o)','sleepy.gif','Dormindo'),
 (':a)','alien.gif','Alien'),
 (':s)','smokie.gif','Fumando'),
 (':l)','love.gif','Amor'),
 (':L)','love2.gif','Amando'),
 (':]','biggrin.gif','Grande Sorriso'),
 (':-/','bounce.gif','Pulando'),
 (':b)','burnout.gif','Rodando'),
 (':&)','clown.gif','Palhaço'),
 (':?)','confused.gif','Confuso'),
 (':c)','cool.gif','Legal'),
 (':e)','eek.gif','Assutado'),
 (':f)','flash.gif','Rápido'),
 (':g)','girl.gif','Garota'),
 (':i)','idee.gif','Idéia'),
 (':r)','redface.gif','Cara Vermelha'),
 (':8)','rolleyes.gif','Vesgo'),
 (':}','tongue.gif','Bobo'),
 (':t)','tasty.gif','Gostoso'),
 (':1)','alien2.gif','Alien'),
 (':2)','kitty.gif','Gatinho');
INSERT INTO `smilies` (`code`,`file`,`name`) VALUES 
 (':3)','heart.gif','Coração'),
 (':4)','rainbow.gif','Arco-Íris'),
 (':5)','el.gif','Filé'),
 (':6)','pumpkin2.gif','Halloween'),
 (':7)','private.gif','Invisível'),
 (':x)','xmas.gif','Natal'),
 (':9)','kiss.gif','Beijos'),
 (':1]','karate.gif','Karateca'),
 (':2]','cold.gif','Frio'),
 (':3]','devil.gif','Demônio'),
 (':4]','tongue2.gif','Bestinha'),
 (':5]','redhot.gif','Inflamado'),
 (':6]','smash.gif','Cacetada'),
 (':7]','frosty.gif','Boneco de Neve'),
 (':8]','confused2.gif','Confuso'),
 (':9]','kaioken.gif','Iluminado'),
 (':1}','vampire.gif','Vampiro'),
 (':2}','splat.gif','Explodindo'),
 (':3}','rwb.gif','Cara Pintada'),
 (':4}','FRlol.gif','Risada'),
 (':5}','goodbad.gif','Inocente'),
 (':6}','eek2.gif','Assustado'),
 (':7}','dodgy.gif','Opa'),
 (':8}','bawling.gif','Chorando'),
 (':9}','party.gif','Festa!'),
 (':ni','nighty.gif','Dormindo'),
 (':wa','wavey.gif','Onda!'),
 (':pa','patty.gif','Festa'),
 (':al','alarm.gif','Alarme'),
 (':ba','barf.gif','Blerg!');
INSERT INTO `smilies` (`code`,`file`,`name`) VALUES 
 (':bd','birthday.gif','Aniversário'),
 (':bu','bubble.gif','Chiclete'),
 (':ca','cat.gif','Xaninho'),
 (':ce','censored.gif','Censurado'),
 (':ch','cheers.gif','Beberrões'),
 (':co','cowboy.gif','Cowboy'),
 (':da','dance.gif','Dançando'),
 (':gr','dance1.gif','Dançando'),
 (':du','dunce.gif','Festa'),
 (':fi','finger.gif','Cotoco'),
 (':fe','flame.gif','Flama'),
 (':fg','flaming.gif','Enflamadinho'),
 (':fl','flower2.gif','Flor'),
 (':hi','hippie.gif','Hippie'),
 (':jo','joker.gif','Jester'),
 (':kn','knight.gif','Faca'),
 (':ko','koolaid.gif','Legal'),
 (':lo','looney.gif','Piradinho'),
 (':pi','pimp.gif','Cuspe'),
 (':fy','mfinger.gif','Passaro'),
 (':pu','pukeface.gif','Cuspe'),
 (':no','no.gif','Não!'),
 (':ro','rosie.gif','Rosa'),
 (':sh','shudder.gif','Desesperado'),
 (':si','sick.gif','Doente'),
 (':sm','smoker.gif','Fumando'),
 (':se','sperm.gif','Esperma'),
 (':to','tomato.gif','Tomate'),
 (':tu','tut.gif','Faraó'),
 (':ty','type.gif','Digitando');
/*!40000 ALTER TABLE `smilies` ENABLE KEYS */;


--
-- Table structure for table `site`.`tbl_carrinho`
--

DROP TABLE IF EXISTS `tbl_carrinho`;
CREATE TABLE `tbl_carrinho` (
  `id` int(11) NOT NULL auto_increment,
  `cod` int(11) NOT NULL,
  `nome` varchar(150) collate latin1_general_ci NOT NULL,
  `preco` double(10,2) NOT NULL,
  `qtd` int(11) NOT NULL,
  `sessao` text collate latin1_general_ci NOT NULL,
  `ID_PEDIDO_CLIENTE` tinyint(11) default NULL,
  `foto` varchar(300) collate latin1_general_ci default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=127 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `site`.`tbl_carrinho`
--

/*!40000 ALTER TABLE `tbl_carrinho` DISABLE KEYS */;
INSERT INTO `tbl_carrinho` (`id`,`cod`,`nome`,`preco`,`qtd`,`sessao`,`ID_PEDIDO_CLIENTE`,`foto`) VALUES 
 (1,9,'Pó Nutricional ShapeWorks  ',56.99,1,'15906dbde0937c064e1cbca8f2eefd21',NULL,NULL),
 (2,11,'Fiber & Herb ShapeWorks ',29.90,1,'540cad9695d5ad5275de29dc0cc28255',NULL,NULL),
 (3,11,'Fiber & Herb ShapeWorks ',29.90,1,' ',1,NULL),
 (4,13,'Chá Thermojetics ShapeWorks Pequeno  ',59.90,1,'30b285cc5d07ee6fc9d7762e17c92ec6',NULL,NULL),
 (5,11,'Fiber & Herb ShapeWorks ',29.90,1,'30b285cc5d07ee6fc9d7762e17c92ec6',NULL,NULL),
 (6,9,'Pó Nutricional ShapeWorks Chocolate',56.99,2,'9d1351f2eeddddfd9cbd40f60eac5b78',NULL,NULL),
 (7,13,'Chá Thermojetics ShapeWorks Pequeno  ',59.90,1,'0dd39fa821cb6da2807f6e251dfac441',NULL,NULL),
 (8,9,'Pó Nutricional ShapeWorks  ',56.99,1,'fed791bb35992331f8018af6d557a47e',NULL,NULL),
 (9,10,'Pó Nutricional ShapeWorks em Sachês  ',29.90,20,'ec3e5d5d080a194139dac9445b90ae00',NULL,NULL),
 (10,9,'Pó Nutricional ShapeWorks  ',56.99,1,'d395ab351db06794f4e3153c5423b19a',NULL,NULL),
 (11,15,'Barra de Proteína ShapeWorks  ',32.00,1,'d395ab351db06794f4e3153c5423b19a',NULL,NULL);
INSERT INTO `tbl_carrinho` (`id`,`cod`,`nome`,`preco`,`qtd`,`sessao`,`ID_PEDIDO_CLIENTE`,`foto`) VALUES 
 (15,11,'Fiber & Herb ShapeWorks ',29.90,1,'6a17dd502ba75fe2c4d8f0e354176d6e',NULL,NULL),
 (14,9,'Pó Nutricional ShapeWorks Chocolate',56.99,10,'6a17dd502ba75fe2c4d8f0e354176d6e',NULL,NULL),
 (16,10,'Pó Nutricional ShapeWorks em Sachês Baunilha',29.90,2,'445d40dd10e4a92e43237863c1fa8dd2',NULL,NULL),
 (17,11,'Fiber & Herb ShapeWorks ',29.90,1,'445d40dd10e4a92e43237863c1fa8dd2',NULL,NULL),
 (18,9,'Pó Nutricional ShapeWorks Chocolate',56.99,2,'961f5f42bf02891d87bf97d8d4bd50b7',NULL,NULL),
 (19,9,'Pó Nutricional ShapeWorks Morango',56.99,2,'2ed4e29c03a1365a1d293f31f42e29c0',NULL,NULL),
 (20,14,'Chá Thermojetics ShapeWorks Grande ',98.99,1,'2ed4e29c03a1365a1d293f31f42e29c0',NULL,NULL),
 (21,11,'Fiber & Herb ShapeWorks ',29.90,1,'d915168800303f61a359f408cfe3513d',NULL,NULL),
 (22,9,'Pó Nutricional ShapeWorks Baunilha',56.99,1,'d915168800303f61a359f408cfe3513d',NULL,NULL),
 (23,10,'Pó Nutricional ShapeWorks em Sachês  ',29.90,1,'eac644a7e8326b6589ee33673ba69441',NULL,NULL),
 (24,11,'Fiber & Herb ShapeWorks ',29.90,1,'eac644a7e8326b6589ee33673ba69441',NULL,NULL);
INSERT INTO `tbl_carrinho` (`id`,`cod`,`nome`,`preco`,`qtd`,`sessao`,`ID_PEDIDO_CLIENTE`,`foto`) VALUES 
 (25,10,'Pó Nutricional ShapeWorks em Sachês  ',29.90,1,' ',2,NULL),
 (26,9,'Pó Nutricional ShapeWorks  ',56.99,10,'92fb69633fca5818a872178f6d7a74a1',NULL,NULL),
 (27,15,'Barra de Proteína ShapeWorks Limão',32.00,1,'8c5321d49e9e653f6b613e32dfddb5a8',NULL,NULL),
 (28,13,'Chá Thermojetics ShapeWorks Pequeno  ',59.90,2,' ',3,NULL),
 (29,9,'Pó Nutricional ShapeWorks  ',56.99,1,' ',3,NULL),
 (30,11,'Fiber & Herb ShapeWorks ',29.90,2,' ',4,NULL),
 (31,9,'Pó Nutricional ShapeWorks Morango',56.99,1,' ',5,NULL),
 (32,13,'Chá Thermojetics ShapeWorks Pequeno Pêssego',59.90,1,' ',5,NULL),
 (33,15,'Barra de Proteína ShapeWorks chocolate',32.00,1,' ',5,NULL),
 (34,9,'Pó Nutricional ShapeWorks  ',56.99,1,' ',6,NULL),
 (35,11,'Fiber & Herb ShapeWorks ',29.90,1,' ',7,NULL),
 (36,16,'Sopa Instantânea ShapeWorks Frango com Legumes',24.50,5,' ',7,NULL),
 (37,9,'Pó Nutricional ShapeWorks  ',56.99,1,'4e7cbc4fd2c5679f93ad327f16c2e1fe',NULL,NULL),
 (38,11,'Fiber & Herb ShapeWorks ',29.90,2,'4e7cbc4fd2c5679f93ad327f16c2e1fe',NULL,NULL);
INSERT INTO `tbl_carrinho` (`id`,`cod`,`nome`,`preco`,`qtd`,`sessao`,`ID_PEDIDO_CLIENTE`,`foto`) VALUES 
 (39,14,'Chá Thermojetics ShapeWorks Grande ',98.99,1,'4e7cbc4fd2c5679f93ad327f16c2e1fe',NULL,NULL),
 (40,12,'Multivitaminas e Minerais ShapeWorks ',32.99,1,'4e7cbc4fd2c5679f93ad327f16c2e1fe',NULL,NULL),
 (41,11,'Fiber & Herb ShapeWorks ',29.90,1,'1c7c513626aac8f8bfd19fd331c9e6ab',NULL,NULL),
 (42,9,'Pó Nutricional ShapeWorks  ',56.99,1,'638695600d515ac721524bf4ad2825a4',NULL,NULL),
 (43,11,'Fiber & Herb ShapeWorks ',29.90,3,'db4668f456a187648af95bae1a78d9b7',NULL,NULL),
 (44,10,'Pó Nutricional ShapeWorks em Sachês  ',29.90,1,'db4668f456a187648af95bae1a78d9b7',NULL,NULL),
 (45,16,'Sopa Instantânea ShapeWorks  ',24.50,1,'2cac9dafe12b00631a72336e3d3298d8',NULL,NULL),
 (46,10,'Pó Nutricional ShapeWorks em Sachês  ',29.90,1,'2cac9dafe12b00631a72336e3d3298d8',NULL,NULL),
 (47,9,'Pó Nutricional ShapeWorks  ',56.99,1,'19baca1e24ec17b163966519b1938bbd',8,NULL),
 (48,12,'Multivitaminas e Minerais ShapeWorks ',32.99,1,'19baca1e24ec17b163966519b1938bbd',8,NULL),
 (49,10,'Pó Nutricional ShapeWorks em Sachês  ',29.90,1,'19baca1e24ec17b163966519b1938bbd',8,NULL);
INSERT INTO `tbl_carrinho` (`id`,`cod`,`nome`,`preco`,`qtd`,`sessao`,`ID_PEDIDO_CLIENTE`,`foto`) VALUES 
 (50,11,'Fiber & Herb ShapeWorks ',29.90,1,'19baca1e24ec17b163966519b1938bbd',8,NULL),
 (51,11,'Fiber & Herb ShapeWorks ',29.90,1,'c339be16b7ba68b909c58e4d554294f5',NULL,NULL),
 (52,15,'Barra de Proteína ShapeWorks  ',32.00,1,'a190c5e18d841a221a274ca271d67e0f',NULL,NULL),
 (53,9,'Pó Nutricional ShapeWorks  ',56.99,1,'fc8a230212d16e9e2c87ae1a84bcdc96',NULL,NULL),
 (54,16,'Sopa Instantânea ShapeWorks 4 Queijos com Croutons',24.50,3,'fc8a230212d16e9e2c87ae1a84bcdc96',NULL,NULL),
 (56,10,'Pó Nutricional ShapeWorks em Sachês  ',29.90,20,'abd55329295bdb1471d7f3be6f9a28f6',NULL,'fotos/4780df0c392700.jpg'),
 (57,15,'Barra de Proteína ShapeWorks  ',32.00,20,'abd55329295bdb1471d7f3be6f9a28f6',NULL,'fotos/ec2b968ca50030g.jpg'),
 (58,16,'Sopa Instantânea ShapeWorks  ',24.50,20,'abd55329295bdb1471d7f3be6f9a28f6',NULL,'fotos/f7b8fd6c9c1052g.jpg'),
 (59,9,'Pó Nutricional ShapeWorks  ',56.99,20,'abd55329295bdb1471d7f3be6f9a28f6',NULL,'fotos/5b9582c0c00141g.jpg'),
 (60,11,'Fiber & Herb ShapeWorks ',29.90,20,'abd55329295bdb1471d7f3be6f9a28f6',NULL,'fotos/ae8b411d9a3114g.jpg');
INSERT INTO `tbl_carrinho` (`id`,`cod`,`nome`,`preco`,`qtd`,`sessao`,`ID_PEDIDO_CLIENTE`,`foto`) VALUES 
 (61,14,'Chá Thermojetics ShapeWorks Grande ',98.99,20,'abd55329295bdb1471d7f3be6f9a28f6',NULL,'fotos/ca8d100f7a0106g.jpg'),
 (62,13,'Chá Thermojetics ShapeWorks Pequeno  ',59.90,20,'abd55329295bdb1471d7f3be6f9a28f6',NULL,'fotos/fd788710910106g.jpg'),
 (73,10,'Pó Nutricional ShapeWorks em Sachês  ',29.90,5,'bd753753f0091c3a52c47bba0fa1341f',NULL,'fotos/4780df0c392700.jpg'),
 (64,9,'Pó Nutricional ShapeWorks Baunilha',56.99,20,'6dff3764cc2621cfd1badcbebc30a9db',NULL,'fotos/5b9582c0c00141g.jpg'),
 (75,9,'Pó Nutricional ShapeWorks  ',56.99,20,'d67284b1981cfcc4425511997aa43c02',NULL,'fotos/5b9582c0c00141g.jpg'),
 (76,10,'Pó Nutricional ShapeWorks em Sachês  ',29.90,20,'d67284b1981cfcc4425511997aa43c02',NULL,'fotos/4780df0c392700.jpg'),
 (77,11,'Fiber & Herb ShapeWorks ',29.90,20,'d67284b1981cfcc4425511997aa43c02',NULL,'fotos/ae8b411d9a3114g.jpg'),
 (78,13,'Chá Thermojetics ShapeWorks Pequeno  ',59.90,20,'d67284b1981cfcc4425511997aa43c02',NULL,'fotos/fd788710910106g.jpg'),
 (74,9,'Pó Nutricional ShapeWorks Chocolate',56.99,2,'bd753753f0091c3a52c47bba0fa1341f',NULL,'fotos/5b9582c0c00141g.jpg');
INSERT INTO `tbl_carrinho` (`id`,`cod`,`nome`,`preco`,`qtd`,`sessao`,`ID_PEDIDO_CLIENTE`,`foto`) VALUES 
 (70,17,'Xtra-Cal (Cálcio, Magnésio e Vitamina D) ',33.90,20,'6dff3764cc2621cfd1badcbebc30a9db',NULL,'fotos/ec2b968ca50030g.jpg'),
 (79,15,'Barra de Proteína ShapeWorks  ',32.00,20,'d67284b1981cfcc4425511997aa43c02',NULL,'fotos/ec2b968ca50030g.jpg'),
 (82,10,'Pó Nutricional ShapeWorks em Sachês  ',29.90,20,'654b3729ce1733f9425bfb41799842ec',NULL,'fotos/4780df0c392700.jpg'),
 (81,14,'Chá Thermojetics ShapeWorks Grande ',98.99,20,'654b3729ce1733f9425bfb41799842ec',NULL,'fotos/ca8d100f7a0106g.jpg'),
 (83,9,'Pó Nutricional ShapeWorks  ',56.99,20,'654b3729ce1733f9425bfb41799842ec',NULL,'fotos/5b9582c0c00141g.jpg'),
 (84,14,'Chá Thermojetics ShapeWorks Grande ',98.99,20,'d67284b1981cfcc4425511997aa43c02',NULL,'fotos/ca8d100f7a0106g.jpg'),
 (85,9,'Pó Nutricional ShapeWorks  ',56.99,4,'4c5b243f90801e56b3d7fb3358ad2625',NULL,'fotos/5b9582c0c00141g.jpg'),
 (86,16,'Sopa Instantânea ShapeWorks 4 Queijos com Croutons',24.50,1,'4c5b243f90801e56b3d7fb3358ad2625',NULL,'fotos/f7b8fd6c9c1052g.jpg'),
 (87,9,'Pó Nutricional ShapeWorks  ',56.99,1,' ',9,'fotos/5b9582c0c00141g.jpg');
INSERT INTO `tbl_carrinho` (`id`,`cod`,`nome`,`preco`,`qtd`,`sessao`,`ID_PEDIDO_CLIENTE`,`foto`) VALUES 
 (88,11,'Fiber & Herb ShapeWorks ',29.90,4,' ',10,'fotos/ae8b411d9a3114g.jpg'),
 (89,10,'Pó Nutricional ShapeWorks em Sachês Baunilha',29.90,6,' ',11,'fotos/4780df0c392700.jpg'),
 (90,9,'Pó Nutricional ShapeWorks  ',56.99,3,'c6fd9cb780af33acbc4514220ac2aa80',NULL,'fotos/5b9582c0c00141g.jpg'),
 (91,3,'Programa Avançado ',252.00,20,'7296f689742b219b4f330ba6c1a3d482',NULL,'fotos/3.jpg'),
 (92,2,'Programa Básico ',122.00,20,'7296f689742b219b4f330ba6c1a3d482',NULL,'fotos/2.jpg'),
 (93,4,'Pó para preparo de Bebidas 100g Pêssego',127.00,20,'7296f689742b219b4f330ba6c1a3d482',NULL,'fotos/4.jpg'),
 (94,14,'Chá Thermojetics ShapeWorks Grande ',98.99,20,'7296f689742b219b4f330ba6c1a3d482',NULL,'fotos/ca8d100f7a0106g.jpg'),
 (95,1,'Pó para Preparo de Bebiba Para controle de peso (S  ',87.00,20,'7296f689742b219b4f330ba6c1a3d482',NULL,'fotos/1.jpg'),
 (96,7,'Protein Powder ',77.00,20,'7296f689742b219b4f330ba6c1a3d482',NULL,'fotos/7.jpg'),
 (97,6,'N-R-G ',56.00,20,'7296f689742b219b4f330ba6c1a3d482',NULL,'fotos/6.jpg');
INSERT INTO `tbl_carrinho` (`id`,`cod`,`nome`,`preco`,`qtd`,`sessao`,`ID_PEDIDO_CLIENTE`,`foto`) VALUES 
 (98,15,'Barra de Proteína ShapeWorks  ',47.00,20,'7296f689742b219b4f330ba6c1a3d482',NULL,'fotos/ec2b968ca50030g.jpg'),
 (99,4,'Pó para preparo de Bebidas 100g Pêssego',127.00,1,'0a4e38fdc1b262489e225504b41d7b1c',NULL,'fotos/4.jpg'),
 (100,1,'Pó para Preparo de Bebiba Para controle de peso (S  ',87.00,1,'00ccc54e5c8b1863591871b032296664',NULL,'fotos/1.jpg'),
 (101,2,'Programa Básico ',122.00,20,'00ccc54e5c8b1863591871b032296664',NULL,'fotos/2.jpg'),
 (102,3,'Programa Avançado ',252.00,1,'00ccc54e5c8b1863591871b032296664',NULL,'fotos/3.jpg'),
 (103,4,'Pó para preparo de Bebidas 100g  ',127.00,1,'ba1341c78cf2cb97ef5236aede000636',NULL,'fotos/4.jpg'),
 (104,1,'Pó para Preparo de Bebiba Para controle de peso (S  ',87.00,1,'f103ea7f606d05fae2e2529f38770d6f',NULL,'fotos/1.jpg'),
 (105,1,'Pó para Preparo de Bebiba Para controle de peso (S  ',87.00,1,'f7806b7fae8603b5d418f842b766380b',NULL,'fotos/1.jpg'),
 (106,2,'Programa Básico ',122.00,10,'e959019bef9709be21c0ba966f01583f',14,'fotos/2.jpg');
INSERT INTO `tbl_carrinho` (`id`,`cod`,`nome`,`preco`,`qtd`,`sessao`,`ID_PEDIDO_CLIENTE`,`foto`) VALUES 
 (107,3,'Programa Avançado ',252.00,1,'e959019bef9709be21c0ba966f01583f',14,'fotos/3.jpg'),
 (108,5,'Pó para preparo de Bebidas 50g Pêssego',74.00,4,'e959019bef9709be21c0ba966f01583f',14,'fotos/5.jpg'),
 (109,1,'Pó para Preparo de Bebiba Para controle de peso (S Morango',87.00,3,'e959019bef9709be21c0ba966f01583f',14,'fotos/1.jpg'),
 (110,11,'Fiber & Herb ShapeWorks ',29.90,10,'fb0b12836d51a22f9568e5ef5996440c',NULL,'fotos/ae8b411d9a3114g.jpg'),
 (111,7,'Protein Powder ',77.00,1,'e959019bef9709be21c0ba966f01583f',NULL,'fotos/7.jpg'),
 (112,3,'Programa Avançado ',252.00,19,'565d7356545b4d7b250c5ce33b1c7329',NULL,'fotos/3.jpg'),
 (113,4,'Pó para preparo de Bebidas 100g Limão',127.00,1,'bd388e067d324e28fd619094514fe6d7',NULL,'fotos/4.jpg'),
 (114,25,'Thermo Complete ',89.00,1,'bcafe81da3bfb7b3985cccb911494882',17,'fotos/25.jpg'),
 (115,2,'Programa Básico ',122.00,1,'19df9b9e19b59aa250442bb1ad2316ae',NULL,'fotos/2.jpg'),
 (116,2,'Programa Básico ',122.00,1,'1be9df11d3e569f9a21ef7b5b2832e22',18,'fotos/2.jpg');
INSERT INTO `tbl_carrinho` (`id`,`cod`,`nome`,`preco`,`qtd`,`sessao`,`ID_PEDIDO_CLIENTE`,`foto`) VALUES 
 (117,2,'Programa Básico ',122.00,1,'5978652194893b7d2ccc5c55f923b3f9',NULL,'fotos/2.jpg'),
 (118,25,'Thermo Complete ',89.00,1,'0bb5d80a29d960bad32e44b6b3e117cb',NULL,'fotos/25.jpg'),
 (119,25,'Thermo Complete ',89.00,1,'333cea7f35785eaecc5e7b907907364d',NULL,'fotos/25.jpg'),
 (120,1,'Pó para Preparo de Bebiba Para controle de peso (S  ',87.00,1,'4df59ae030147dd1ea704c4c9d6d3766',20,'fotos/1.jpg'),
 (121,2,'Programa Básico ',122.00,1,'4df59ae030147dd1ea704c4c9d6d3766',20,'fotos/2.jpg'),
 (122,2,'Programa Básico ',122.00,1,'acb52d021d76cfa1730deb3510cce895',NULL,'fotos/2.jpg'),
 (123,3,'Programa Avançado ',252.00,1,'acb52d021d76cfa1730deb3510cce895',NULL,'fotos/3.jpg'),
 (126,9,'Pó Nutricional ShapeWorks  ',87.00,1,'53275ac286719d9522d3fd601136aded',NULL,'fotos/5b9582c0c00141g.jpg');
/*!40000 ALTER TABLE `tbl_carrinho` ENABLE KEYS */;


--
-- Table structure for table `site`.`temp_user`
--

DROP TABLE IF EXISTS `temp_user`;
CREATE TABLE `temp_user` (
  `id_temp` int(20) NOT NULL auto_increment,
  `data` varchar(10) NOT NULL,
  `user` varchar(100) NOT NULL,
  PRIMARY KEY  (`id_temp`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `site`.`temp_user`
--

/*!40000 ALTER TABLE `temp_user` DISABLE KEYS */;
/*!40000 ALTER TABLE `temp_user` ENABLE KEYS */;


--
-- Table structure for table `site`.`time_zone`
--

DROP TABLE IF EXISTS `time_zone`;
CREATE TABLE `time_zone` (
  `zone_id` int(6) NOT NULL,
  `desc_zone` varchar(25) NOT NULL,
  `id_date` varchar(10) NOT NULL,
  `id_dias` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `site`.`time_zone`
--

/*!40000 ALTER TABLE `time_zone` DISABLE KEYS */;
/*!40000 ALTER TABLE `time_zone` ENABLE KEYS */;


--
-- Table structure for table `site`.`tt_ser_01`
--

DROP TABLE IF EXISTS `tt_ser_01`;
CREATE TABLE `tt_ser_01` (
  `id` int(6) NOT NULL auto_increment,
  `codigo` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `sobrenome` varchar(100) NOT NULL,
  `nasc_dia` int(2) NOT NULL,
  `nasc_mes` int(2) NOT NULL,
  `nasc_ano` int(4) NOT NULL,
  `sexo` varchar(20) NOT NULL,
  `e_mail` varchar(50) NOT NULL,
  `login` varchar(35) NOT NULL,
  `senha` varchar(100) NOT NULL,
  `frase` varchar(100) default NULL,
  `data` varchar(10) NOT NULL,
  `hora` varchar(10) NOT NULL,
  `data_entrada` varchar(35) default NULL,
  `ultima_dt` varchar(35) default NULL,
  `permissao` int(2) NOT NULL,
  `rg` varchar(18) NOT NULL,
  `cpf` varchar(19) NOT NULL,
  `rua` varchar(20) default NULL,
  `endereco` varchar(70) default NULL,
  `numero` varchar(100) default NULL,
  `bairro` varchar(40) default NULL,
  `estado` varchar(30) default NULL,
  `cidade` varchar(100) default NULL,
  `cep` varchar(9) default NULL,
  `fone_fix` varchar(20) default NULL,
  `fone_cel` varchar(20) default NULL,
  `foto_peq` varchar(200) default NULL,
  `acess_site` int(11) default NULL,
  `messenger` varchar(2) default NULL,
  `url` varchar(250) default NULL,
  `positivo` varchar(11) NOT NULL,
  `negativo` varchar(11) NOT NULL,
  `excluido` varchar(3) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `site`.`tt_ser_01`
--

/*!40000 ALTER TABLE `tt_ser_01` DISABLE KEYS */;
INSERT INTO `tt_ser_01` (`id`,`codigo`,`nome`,`sobrenome`,`nasc_dia`,`nasc_mes`,`nasc_ano`,`sexo`,`e_mail`,`login`,`senha`,`frase`,`data`,`hora`,`data_entrada`,`ultima_dt`,`permissao`,`rg`,`cpf`,`rua`,`endereco`,`numero`,`bairro`,`estado`,`cidade`,`cep`,`fone_fix`,`fone_cel`,`foto_peq`,`acess_site`,`messenger`,`url`,`positivo`,`negativo`,`excluido`) VALUES 
 (1,1,'Marlene','Firmino Silva',23,4,1975,'FEMININO','iamnotnobody007@hotmail.com','marley','12345','um por todos todos por 1','17/09/2009','15:48','08/01/2011 as 03:08','16/11/2010 as 17:09',1,'32437854','23409812309','Avenida','Lourenco Fagundes, 346',NULL,'Louzane','Sao Paulo','Sao Paulo','04509000','(11) 5555-5555','(12) 97979797','fotos/7e9fa1c010banner_sac[1].jpg',20,'OF',NULL,'','',NULL);
 (2,3,'MARIANO','LIMA DE OLIVEIRA',3,10,1978,'MASCULINO','edson@sindificios.com.br','mariano','12345','acerte no alva','29/09/2009','16:18:56','29/09/2009 as 16:51','29/09/2009 as 15:37',0,'123454657','26440050869','RUA','sete de abril, 34',NULL,'centro','São Paulo - SP','Caieiras','01044-000','(11)9999-9999','(13)8888-8888',NULL,0,NULL,NULL,'','',NULL),
 (3,3,'joao','alceder lima',5,5,1995,'MASCULINO','isysmp@isysmp.com.br','matrix','12345','joao','25/11/2010','17:30:53','25/11/2010 as 17:55','16/11/2010 as 17:09',0,'3810430','10365643475','ALAMEDA','alamedas, 34',NULL,'alamedas','São Paulo - SP','sao paulo','01044-000','(11)9098-976','(11)9990-9876','fotos/32f9375d9cimpossivel.jpg',20,NULL,NULL,'','',NULL);
/*!40000 ALTER TABLE `tt_ser_01` ENABLE KEYS */;


--
-- Table structure for table `site`.`update`
--

DROP TABLE IF EXISTS `update`;
CREATE TABLE `update` (
  `ATUALIZA` tinyint(4) default NULL,
  `DIRETORIO` varchar(20) default NULL,
  `ULTIMADAT` date default NULL,
  `OBS` longtext
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `site`.`update`
--

/*!40000 ALTER TABLE `update` DISABLE KEYS */;
/*!40000 ALTER TABLE `update` ENABLE KEYS */;


--
-- Table structure for table `site`.`user_logados`
--

DROP TABLE IF EXISTS `user_logados`;
CREATE TABLE `user_logados` (
  `timestamp` int(15) NOT NULL default '0',
  `ip` varchar(40) NOT NULL default '',
  `arquivo` varchar(100) NOT NULL default '',
  `data` varchar(10) default NULL,
  `hora` varchar(10) default NULL,
  `usuario` varchar(100) default NULL,
  PRIMARY KEY  (`timestamp`),
  KEY `ip` (`ip`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `site`.`user_logados`
--

/*!40000 ALTER TABLE `user_logados` DISABLE KEYS */;
INSERT INTO `user_logados` (`timestamp`,`ip`,`arquivo`,`data`,`hora`,`usuario`) VALUES 
 (1295020047,'192.168.1.1','/compraai/logar.php','14/01/2011','13:47:27','endrews'),
 (1295026941,'127.0.0.1','/compraai/logar.php','14/01/2011','15:42:21','HOLODEK');
/*!40000 ALTER TABLE `user_logados` ENABLE KEYS */;


--
-- Table structure for table `site`.`user_pagina`
--

DROP TABLE IF EXISTS `user_pagina`;
CREATE TABLE `user_pagina` (
  `timestamp` int(15) NOT NULL default '0',
  `ip` varchar(40) NOT NULL default '',
  `arquivo` varchar(100) NOT NULL default '',
  `data` varchar(10) default NULL,
  `hora` varchar(10) default NULL,
  `usuario` varchar(100) default NULL,
  PRIMARY KEY  (`timestamp`),
  KEY `ip` (`ip`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `site`.`user_pagina`
--

/*!40000 ALTER TABLE `user_pagina` DISABLE KEYS */;
/*!40000 ALTER TABLE `user_pagina` ENABLE KEYS */;


--
-- Table structure for table `site`.`useronline`
--

DROP TABLE IF EXISTS `useronline`;
CREATE TABLE `useronline` (
  `timestamp` int(15) NOT NULL default '0',
  `ip` varchar(40) NOT NULL default '',
  `arquivo` varchar(100) NOT NULL default '',
  `data` varchar(10) default NULL,
  `hora` varchar(10) default NULL,
  `usuario` varchar(100) default NULL,
  PRIMARY KEY  (`timestamp`),
  KEY `ip` (`ip`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `site`.`useronline`
--

/*!40000 ALTER TABLE `useronline` DISABLE KEYS */;
INSERT INTO `useronline` (`timestamp`,`ip`,`arquivo`,`data`,`hora`,`usuario`) VALUES 
 (1295031267,'127.0.0.1','/compraai/comercio/comercio.php','14/01/2011','16:54:27','HOLODEK'),
 (1295031199,'127.0.0.1','/compraai/dados/detalhe_vend.php','14/01/2011','16:53:19','HOLODEK');
/*!40000 ALTER TABLE `useronline` ENABLE KEYS */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
