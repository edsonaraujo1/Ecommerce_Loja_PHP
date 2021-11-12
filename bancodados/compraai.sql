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
INSERT INTO `log_user_event` (`id`,`IP`,`DATA`,`EVENTO`,`HORA`,`USUARIO`,`ARQUIVO`,`QTD`) VALUES 
 (55,'127.0.0.1','14/11/2010','VISITA NO SITE -','00:01:23','VISITANTE','/novo_visu/inicio.php',31),
 (56,'127.0.0.1','14/11/2010','VISITA NO SITE -','00:02:28','VISITANTE','/novo_visu/inicio.php',32),
 (57,'127.0.0.1','14/11/2010','VISITA NO SITE -','00:08:14','VISITANTE','/novo_visu/inicio.php',33),
 (58,'127.0.0.1','14/11/2010','VISITA NO SITE -','00:10:57','VISITANTE','/novo_visu/inicio.php',34),
 (59,'127.0.0.1','14/11/2010','VISITA NO SITE -','00:13:50','VISITANTE','/novo_visu/inicio.php',35),
 (60,'127.0.0.1','14/11/2010','VISITA NO SITE -','00:16:56','VISITANTE','/novo_visu/inicio.php',36),
 (61,'127.0.0.1','14/11/2010','VISITA NO SITE -','00:21:46','VISITANTE','/novo_visu/inicio.php',37),
 (62,'127.0.0.1','14/11/2010','VISITA NO SITE -','00:25:54','VISITANTE','/novo_visu/inicio.php',38),
 (63,'127.0.0.1','14/11/2010','VISITA NO SITE -','00:39:30','VISITANTE','/novo_visu/inicio.php',39),
 (64,'127.0.0.1','14/11/2010','VISITA NO SITE -','00:40:39','VISITANTE','/novo_visu/inicio.php',40);
INSERT INTO `log_user_event` (`id`,`IP`,`DATA`,`EVENTO`,`HORA`,`USUARIO`,`ARQUIVO`,`QTD`) VALUES 
 (65,'127.0.0.1','14/11/2010','VISITA NO SITE -','00:50:34','VISITANTE','/novo_visu/inicio.php',41),
 (66,'127.0.0.1','14/11/2010','VISITA NO SITE -','01:08:24','VISITANTE','/novo_visu/inicio.php',42),
 (67,'127.0.0.1','14/11/2010','VISITA NO SITE -','02:47:18','VISITANTE','/novo_visu/inicio.php',43),
 (68,'127.0.0.1','14/11/2010','VISITA NO SITE -','03:37:21','VISITANTE','/novo_visu/inicio.php',44),
 (69,'192.168.1.1','14/11/2010','VISITA NO SITE -','15:29:44','VISITANTE','/novo_visu/inicio.php',45),
 (70,'127.0.0.1','14/11/2010','VISITA NO SITE -','15:46:35','VISITANTE','/novo_visu/inicio.php',46),
 (71,'127.0.0.1','14/11/2010','VISITA NO SITE -','19:32:04','VISITANTE','/novo_visu/inicio.php',47),
 (72,'127.0.0.1','14/11/2010','VISITA NO SITE -','21:54:22','VISITANTE','/novo_visu/inicio.php',48),
 (73,'127.0.0.1','14/11/2010','VISITA NO SITE -','22:05:37','VISITANTE','/novo_visu/inicio.php',49),
 (74,'127.0.0.1','14/11/2010','VISITA NO SITE -','22:09:46','VISITANTE','/novo_visu/inicio.php',50);
INSERT INTO `log_user_event` (`id`,`IP`,`DATA`,`EVENTO`,`HORA`,`USUARIO`,`ARQUIVO`,`QTD`) VALUES 
 (75,'127.0.0.1','14/11/2010','VISITA NO SITE -','22:09:52','VISITANTE','/novo_visu/inicio.php',51),
 (76,'127.0.0.1','14/11/2010','VISITA NO SITE -','22:10:16','VISITANTE','/novo_visu/inicio.php',52),
 (77,'127.0.0.1','14/11/2010','VISITA NO SITE -','22:20:51','VISITANTE','/novo_visu/inicio.php',53),
 (78,'127.0.0.1','14/11/2010','VISITA NO SITE -','22:22:07','VISITANTE','/novo_visu/inicio.php',54),
 (79,'127.0.0.1','14/11/2010','VISITA NO SITE -','22:50:49','VISITANTE','/novo_visu/inicio.php',55),
 (80,'127.0.0.1','14/11/2010','VISITA NO SITE -','22:51:22','VISITANTE','/novo_visu/inicio.php',56),
 (81,'127.0.0.1','14/11/2010','VISITA NO SITE -','23:41:10','VISITANTE','/novo_visu/inicio.php',57),
 (82,'127.0.0.1','15/11/2010','VISITA NO SITE -','00:44:38','VISITANTE','/novo_visu/inicio.php',58),
 (83,'127.0.0.1','15/11/2010','VISITA NO SITE -','00:53:23','VISITANTE','/novo_visu/inicio.php',59),
 (84,'127.0.0.1','15/11/2010','VISITA NO SITE -','00:54:45','VISITANTE','/novo_visu/inicio.php',60);
INSERT INTO `log_user_event` (`id`,`IP`,`DATA`,`EVENTO`,`HORA`,`USUARIO`,`ARQUIVO`,`QTD`) VALUES 
 (85,'127.0.0.1','15/11/2010','VISITA NO SITE -','00:55:31','VISITANTE','/novo_visu/inicio.php',61),
 (86,'127.0.0.1','15/11/2010','VISITA NO SITE -','00:56:11','VISITANTE','/novo_visu/inicio.php',62),
 (87,'127.0.0.1','15/11/2010','VISITA NO SITE -','00:56:30','VISITANTE','/novo_visu/inicio.php',63),
 (88,'127.0.0.1','15/11/2010','VISITA NO SITE -','00:58:29','VISITANTE','/novo_visu/inicio.php',64),
 (89,'127.0.0.1','15/11/2010','VISITA NO SITE -','00:59:04','VISITANTE','/novo_visu/inicio.php',65),
 (90,'127.0.0.1','15/11/2010','VISITA NO SITE -','00:59:31','VISITANTE','/novo_visu/inicio.php',66),
 (91,'127.0.0.1','15/11/2010','VISITA NO SITE -','01:00:35','VISITANTE','/novo_visu/inicio.php',67),
 (92,'127.0.0.1','15/11/2010','VISITA NO SITE -','01:03:23','VISITANTE','/novo_visu/inicio.php',68),
 (93,'127.0.0.1','15/11/2010','VISITA NO SITE -','01:04:13','VISITANTE','/novo_visu/inicio.php',69),
 (94,'127.0.0.1','15/11/2010','VISITA NO SITE -','01:05:01','VISITANTE','/novo_visu/inicio.php',70);
INSERT INTO `log_user_event` (`id`,`IP`,`DATA`,`EVENTO`,`HORA`,`USUARIO`,`ARQUIVO`,`QTD`) VALUES 
 (95,'127.0.0.1','15/11/2010','VISITA NO SITE -','01:06:40','VISITANTE','/novo_visu/inicio.php',71),
 (96,'127.0.0.1','15/11/2010','VISITA NO SITE -','01:07:05','VISITANTE','/novo_visu/inicio.php',72),
 (97,'127.0.0.1','15/11/2010','VISITA NO SITE -','01:07:27','VISITANTE','/novo_visu/inicio.php',73),
 (98,'127.0.0.1','15/11/2010','VISITA NO SITE -','01:07:58','VISITANTE','/novo_visu/inicio.php',74),
 (99,'127.0.0.1','15/11/2010','VISITA NO SITE -','01:09:21','VISITANTE','/novo_visu/inicio.php',75),
 (100,'127.0.0.1','15/11/2010','VISITA NO SITE -','01:09:49','VISITANTE','/novo_visu/inicio.php',76),
 (101,'127.0.0.1','15/11/2010','VISITA NO SITE -','01:12:09','VISITANTE','/novo_visu/inicio.php',77),
 (102,'127.0.0.1','15/11/2010','VISITA NO SITE -','01:12:44','VISITANTE','/novo_visu/inicio.php',78),
 (103,'127.0.0.1','15/11/2010','VISITA NO SITE -','01:13:00','VISITANTE','/novo_visu/inicio.php',79),
 (104,'127.0.0.1','15/11/2010','VISITA NO SITE -','01:14:41','VISITANTE','/novo_visu/inicio.php',80);
INSERT INTO `log_user_event` (`id`,`IP`,`DATA`,`EVENTO`,`HORA`,`USUARIO`,`ARQUIVO`,`QTD`) VALUES 
 (105,'127.0.0.1','15/11/2010','VISITA NO SITE -','01:15:55','VISITANTE','/novo_visu/inicio.php',81),
 (106,'127.0.0.1','15/11/2010','VISITA NO SITE -','01:20:16','VISITANTE','/novo_visu/inicio.php',82),
 (107,'127.0.0.1','15/11/2010','VISITA NO SITE -','01:21:09','VISITANTE','/novo_visu/inicio.php',83),
 (108,'127.0.0.1','15/11/2010','VISITA NO SITE -','01:23:01','VISITANTE','/novo_visu/inicio.php',84),
 (109,'127.0.0.1','15/11/2010','VISITA NO SITE -','01:24:00','VISITANTE','/novo_visu/inicio.php',85),
 (110,'127.0.0.1','15/11/2010','VISITA NO SITE -','01:24:31','VISITANTE','/novo_visu/inicio.php',86),
 (111,'127.0.0.1','15/11/2010','VISITA NO SITE -','01:25:01','VISITANTE','/novo_visu/inicio.php',87),
 (112,'127.0.0.1','15/11/2010','VISITA NO SITE -','01:26:00','VISITANTE','/novo_visu/inicio.php',88),
 (113,'127.0.0.1','15/11/2010','VISITA NO SITE -','01:26:45','VISITANTE','/novo_visu/inicio.php',89),
 (114,'127.0.0.1','15/11/2010','VISITA NO SITE -','01:32:06','VISITANTE','/novo_visu/inicio.php',90);
INSERT INTO `log_user_event` (`id`,`IP`,`DATA`,`EVENTO`,`HORA`,`USUARIO`,`ARQUIVO`,`QTD`) VALUES 
 (115,'127.0.0.1','15/11/2010','VISITA NO SITE -','01:32:34','VISITANTE','/novo_visu/inicio.php',91),
 (116,'127.0.0.1','15/11/2010','VISITA NO SITE -','01:33:19','VISITANTE','/novo_visu/inicio.php',92),
 (117,'127.0.0.1','15/11/2010','VISITA NO SITE -','01:34:58','VISITANTE','/novo_visu/inicio.php',93),
 (118,'127.0.0.1','15/11/2010','VISITA NO SITE -','01:36:39','VISITANTE','/novo_visu/inicio.php',94),
 (119,'127.0.0.1','15/11/2010','VISITA NO SITE -','01:38:54','VISITANTE','/novo_visu/inicio.php',95),
 (120,'127.0.0.1','15/11/2010','VISITA NO SITE -','01:43:26','VISITANTE','/novo_visu/inicio.php',96),
 (121,'127.0.0.1','15/11/2010','VISITA NO SITE -','02:15:01','VISITANTE','/novo_visu/inicio.php',97),
 (122,'192.168.1.61','16/11/2010','VISITA NO SITE -','09:04:24','VISITANTE','/novo_visu/inicio.php',98),
 (123,'192.168.1.44','16/11/2010','VISITA NO SITE -','12:09:07','VISITANTE','/novo_visu/inicio.php',99),
 (124,'192.168.1.44','16/11/2010','VISITA NO SITE -','12:36:47','VISITANTE','/novo_visu/inicio.php',100);
INSERT INTO `log_user_event` (`id`,`IP`,`DATA`,`EVENTO`,`HORA`,`USUARIO`,`ARQUIVO`,`QTD`) VALUES 
 (125,'192.168.1.44','16/11/2010','VISITA NO SITE -','12:43:47','VISITANTE','/novo_visu/inicio.php',101),
 (126,'192.168.1.44','16/11/2010','VISITA NO SITE -','13:19:53','VISITANTE','/novo_visu/inicio.php',102),
 (127,'127.0.0.1','16/11/2010','VISITA NO SITE -','13:21:59','VISITANTE','/novo_visu/inicio.php',103),
 (128,'127.0.0.1','16/11/2010','VISITA NO SITE -','13:29:31','VISITANTE','/novo_visu/inicio.php',104),
 (129,'127.0.0.1','16/11/2010','VISITA NO SITE -','13:29:54','VISITANTE','/novo_visu/inicio.php',105),
 (130,'127.0.0.1','16/11/2010','VISITA NO SITE -','13:32:07','VISITANTE','/novo_visu/inicio.php',106),
 (131,'127.0.0.1','16/11/2010','VISITA NO SITE -','13:33:42','VISITANTE','/novo_visu/inicio.php',107),
 (132,'127.0.0.1','16/11/2010','VISITA NO SITE -','14:18:14','VISITANTE','/novo_visu/inicio.php',108),
 (133,'127.0.0.1','16/11/2010','VISITA NO SITE -','14:19:13','VISITANTE','/novo_visu/inicio.php',109),
 (134,'127.0.0.1','16/11/2010','VISITA NO SITE -','14:56:57','VISITANTE','/novo_visu/inicio.php',110);
INSERT INTO `log_user_event` (`id`,`IP`,`DATA`,`EVENTO`,`HORA`,`USUARIO`,`ARQUIVO`,`QTD`) VALUES 
 (135,'127.0.0.1','16/11/2010','VISITA NO SITE -','15:34:09','VISITANTE','/novo_visu/inicio.php',111),
 (136,'127.0.0.1','16/11/2010','VISITA NO SITE -','17:07:05','VISITANTE','/novo_visu/inicio.php',112),
 (137,'192.168.1.61','16/11/2010','VISITA NO SITE -','17:33:53','VISITANTE','/novo_visu/inicio.php',113),
 (138,'192.168.1.44','17/11/2010','VISITA NO SITE -','16:21:02','VISITANTE','/novo_visu/inicio.php',114),
 (139,'127.0.0.1','18/11/2010','VISITA NO SITE -','13:16:45','VISITANTE','/novo_visu/inicio.php',115),
 (140,'127.0.0.1','18/11/2010','VISITA NO SITE -','18:47:49','VISITANTE','/site/novo_lay/inicio.php',116),
 (141,'127.0.0.1','18/11/2010','VISITA NO SITE -','18:50:21','VISITANTE','/novo_visu/inicio.php',117),
 (142,'127.0.0.1','19/11/2010','VISITA NO SITE -','11:48:40','VISITANTE','/novo_visu/inicio.php',118),
 (143,'192.168.1.44','19/11/2010','VISITA NO SITE -','11:51:27','VISITANTE','/novo_visu/inicio.php',119),
 (144,'127.0.0.1','19/11/2010','VISITA NO SITE -','14:36:21','VISITANTE','/novo_visu/inicio.php',120);
INSERT INTO `log_user_event` (`id`,`IP`,`DATA`,`EVENTO`,`HORA`,`USUARIO`,`ARQUIVO`,`QTD`) VALUES 
 (145,'127.0.0.1','19/11/2010','VISITA NO SITE -','14:40:30','VISITANTE','/novo_visu/inicio.php',121),
 (146,'127.0.0.1','19/11/2010','VISITA NO SITE -','14:40:50','VISITANTE','/novo_visu/inicio.php',122),
 (147,'127.0.0.1','19/11/2010','VISITA NO SITE -','14:41:56','VISITANTE','/novo_visu/inicio.php',123),
 (148,'192.168.1.44','19/11/2010','VISITA NO SITE -','15:36:17','VISITANTE','/novo_visu/inicio.php',124),
 (149,'127.0.0.1','19/11/2010','VISITA NO SITE -','15:51:39','VISITANTE','/novo_visu/inicio.php',125),
 (150,'127.0.0.1','19/11/2010','VISITA NO SITE -','15:52:09','VISITANTE','/novo_visu/inicio.php',126),
 (151,'192.168.1.44','19/11/2010','VISITA NO SITE -','15:52:27','VISITANTE','/novo_visu/inicio.php',127),
 (152,'192.168.1.44','19/11/2010','VISITA NO SITE -','15:57:57','VISITANTE','/novo_visu/inicio.php',128),
 (153,'192.168.1.44','19/11/2010','VISITA NO SITE -','15:58:28','VISITANTE','/novo_visu/inicio.php',129),
 (154,'192.168.1.44','19/11/2010','VISITA NO SITE -','16:00:51','VISITANTE','/novo_visu/inicio.php',130);
INSERT INTO `log_user_event` (`id`,`IP`,`DATA`,`EVENTO`,`HORA`,`USUARIO`,`ARQUIVO`,`QTD`) VALUES 
 (155,'127.0.0.1','19/11/2010','VISITA NO SITE -','16:01:14','VISITANTE','/novo_visu/inicio.php',131),
 (156,'192.168.1.44','19/11/2010','VISITA NO SITE -','16:01:32','VISITANTE','/novo_visu/inicio.php',132),
 (157,'192.168.1.44','19/11/2010','VISITA NO SITE -','16:01:58','VISITANTE','/novo_visu/inicio.php',133),
 (158,'192.168.1.44','19/11/2010','VISITA NO SITE -','16:02:20','VISITANTE','/novo_visu/inicio.php',134),
 (159,'192.168.1.44','19/11/2010','VISITA NO SITE -','16:02:34','VISITANTE','/novo_visu/inicio.php',135),
 (160,'192.168.1.44','19/11/2010','VISITA NO SITE -','16:02:44','VISITANTE','/novo_visu/inicio.php',136),
 (161,'192.168.1.44','19/11/2010','VISITA NO SITE -','16:03:06','VISITANTE','/novo_visu/inicio.php',137),
 (162,'192.168.1.44','19/11/2010','VISITA NO SITE -','16:03:37','VISITANTE','/novo_visu/inicio.php',138),
 (163,'192.168.1.44','19/11/2010','VISITA NO SITE -','16:04:28','VISITANTE','/novo_visu/inicio.php',139),
 (164,'192.168.1.44','19/11/2010','VISITA NO SITE -','16:07:00','VISITANTE','/novo_visu/inicio.php',140);
INSERT INTO `log_user_event` (`id`,`IP`,`DATA`,`EVENTO`,`HORA`,`USUARIO`,`ARQUIVO`,`QTD`) VALUES 
 (165,'192.168.1.44','19/11/2010','VISITA NO SITE -','16:07:31','VISITANTE','/novo_visu/inicio.php',141),
 (166,'192.168.1.44','19/11/2010','VISITA NO SITE -','16:08:17','VISITANTE','/novo_visu/inicio.php',142),
 (167,'192.168.1.44','19/11/2010','VISITA NO SITE -','16:09:53','VISITANTE','/novo_visu/inicio.php',143),
 (168,'192.168.1.44','19/11/2010','VISITA NO SITE -','16:10:17','VISITANTE','/novo_visu/inicio.php',144),
 (169,'127.0.0.1','19/11/2010','VISITA NO SITE -','16:13:30','VISITANTE','/novo_visu/inicio.php',145),
 (170,'127.0.0.1','19/11/2010','VISITA NO SITE -','16:14:02','VISITANTE','/novo_visu/inicio.php',146),
 (171,'192.168.1.44','19/11/2010','VISITA NO SITE -','16:14:33','VISITANTE','/novo_visu/inicio.php',147),
 (172,'192.168.1.44','19/11/2010','VISITA NO SITE -','16:14:50','VISITANTE','/novo_visu/inicio.php',148),
 (173,'192.168.1.44','19/11/2010','VISITA NO SITE -','16:15:37','VISITANTE','/novo_visu/inicio.php',149),
 (174,'192.168.1.44','19/11/2010','VISITA NO SITE -','16:19:52','VISITANTE','/novo_visu/inicio.php',150);
INSERT INTO `log_user_event` (`id`,`IP`,`DATA`,`EVENTO`,`HORA`,`USUARIO`,`ARQUIVO`,`QTD`) VALUES 
 (175,'192.168.1.44','19/11/2010','VISITA NO SITE -','16:21:43','VISITANTE','/novo_visu/inicio.php',151),
 (176,'127.0.0.1','19/11/2010','VISITA NO SITE -','16:27:35','VISITANTE','/novo_visu/inicio.php',152),
 (177,'127.0.0.1','19/11/2010','VISITA NO SITE -','16:29:40','VISITANTE','/novo_visu/inicio.php',153),
 (178,'127.0.0.1','19/11/2010','VISITA NO SITE -','16:46:17','VISITANTE','/novo_visu/inicio.php',154),
 (179,'127.0.0.1','19/11/2010','VISITA NO SITE -','16:50:57','VISITANTE','/novo_visu/inicio.php',155),
 (180,'127.0.0.1','19/11/2010','VISITA NO SITE -','16:51:32','VISITANTE','/novo_visu/inicio.php',156),
 (181,'127.0.0.1','19/11/2010','VISITA NO SITE -','16:53:59','VISITANTE','/novo_visu/inicio.php',157),
 (182,'127.0.0.1','19/11/2010','VISITA NO SITE -','16:59:29','VISITANTE','/novo_visu/inicio.php',158),
 (183,'192.168.1.44','19/11/2010','VISITA NO SITE -','16:59:47','VISITANTE','/novo_visu/inicio.php',159),
 (184,'192.168.1.44','19/11/2010','VISITA NO SITE -','17:02:54','VISITANTE','/novo_visu/inicio.php',160);
INSERT INTO `log_user_event` (`id`,`IP`,`DATA`,`EVENTO`,`HORA`,`USUARIO`,`ARQUIVO`,`QTD`) VALUES 
 (185,'127.0.0.1','19/11/2010','VISITA NO SITE -','17:09:37','VISITANTE','/novo_visu/inicio.php',161),
 (186,'192.168.1.44','19/11/2010','VISITA NO SITE -','17:17:04','VISITANTE','/novo_visu/inicio.php',162),
 (187,'192.168.1.44','19/11/2010','VISITA NO SITE -','17:17:33','VISITANTE','/novo_visu/inicio.php',163),
 (188,'192.168.1.44','19/11/2010','VISITA NO SITE -','17:19:42','VISITANTE','/novo_visu/inicio.php',164),
 (189,'127.0.0.1','19/11/2010','VISITA NO SITE -','18:40:08','VISITANTE','/novo_visu/inicio.php',165),
 (190,'192.168.1.44','19/11/2010','VISITA NO SITE -','18:40:15','VISITANTE','/novo_visu/inicio.php',166),
 (191,'192.168.1.44','19/11/2010','VISITA NO SITE -','18:41:13','VISITANTE','/novo_visu/inicio.php',167),
 (192,'192.168.1.44','19/11/2010','VISITA NO SITE -','19:14:23','VISITANTE','/novo_visu/inicio.php',168),
 (193,'127.0.0.1','19/11/2010','VISITA NO SITE -','19:19:23','VISITANTE','/novo_visu/inicio.php',169),
 (194,'192.168.1.44','19/11/2010','VISITA NO SITE -','19:19:44','VISITANTE','/novo_visu/inicio.php',170);
INSERT INTO `log_user_event` (`id`,`IP`,`DATA`,`EVENTO`,`HORA`,`USUARIO`,`ARQUIVO`,`QTD`) VALUES 
 (195,'127.0.0.1','19/11/2010','VISITA NO SITE -','19:35:29','VISITANTE','/novo_visu/inicio.php',171),
 (196,'127.0.0.1','19/11/2010','VISITA NO SITE -','23:14:18','VISITANTE','/novo_visu/inicio.php',172),
 (197,'127.0.0.1','19/11/2010','VISITA NO SITE -','23:15:00','VISITANTE','/novo_visu/inicio.php',173),
 (198,'127.0.0.1','19/11/2010','VISITA NO SITE -','23:31:53','VISITANTE','/novo_visu/inicio.php',174),
 (199,'127.0.0.1','19/11/2010','VISITA NO SITE -','23:32:24','VISITANTE','/novo_visu/inicio.php',175),
 (200,'127.0.0.1','19/11/2010','VISITA NO SITE -','23:36:00','VISITANTE','/novo_visu/inicio.php',176),
 (201,'127.0.0.1','19/11/2010','VISITA NO SITE -','23:36:30','VISITANTE','/novo_visu/inicio.php',177),
 (202,'127.0.0.1','19/11/2010','VISITA NO SITE -','23:39:52','VISITANTE','/novo_visu/inicio.php',178),
 (203,'127.0.0.1','19/11/2010','VISITA NO SITE -','23:39:53','VISITANTE','/novo_visu/avaleht.php',179),
 (204,'127.0.0.1','19/11/2010','VISITA NO SITE -','23:40:46','VISITANTE','/novo_visu/inicio.php',180);
INSERT INTO `log_user_event` (`id`,`IP`,`DATA`,`EVENTO`,`HORA`,`USUARIO`,`ARQUIVO`,`QTD`) VALUES 
 (205,'127.0.0.1','19/11/2010','VISITA NO SITE -','23:40:46','VISITANTE','/novo_visu/avaleht.php',181),
 (206,'127.0.0.1','19/11/2010','VISITA NO SITE -','23:41:15','VISITANTE','/novo_visu/inicio.php',182),
 (207,'127.0.0.1','19/11/2010','VISITA NO SITE -','23:42:12','VISITANTE','/novo_visu/inicio.php',183),
 (208,'127.0.0.1','19/11/2010','VISITA NO SITE -','23:47:01','VISITANTE','/novo_visu/inicio.php',184),
 (209,'127.0.0.1','19/11/2010','VISITA NO SITE -','23:57:11','VISITANTE','/novo_visu/inicio.php',185),
 (210,'127.0.0.1','19/11/2010','VISITA NO SITE -','23:57:42','VISITANTE','/novo_visu/inicio.php',186),
 (211,'127.0.0.1','19/11/2010','VISITA NO SITE -','23:58:43','VISITANTE','/novo_visu/inicio.php',187),
 (212,'127.0.0.1','20/11/2010','VISITA NO SITE -','00:01:37','VISITANTE','/novo_visu/inicio.php',188),
 (213,'127.0.0.1','20/11/2010','VISITA NO SITE -','00:02:08','VISITANTE','/novo_visu/inicio.php',189),
 (214,'127.0.0.1','20/11/2010','VISITA NO SITE -','00:04:10','VISITANTE','/novo_visu/inicio.php',190);
INSERT INTO `log_user_event` (`id`,`IP`,`DATA`,`EVENTO`,`HORA`,`USUARIO`,`ARQUIVO`,`QTD`) VALUES 
 (215,'127.0.0.1','20/11/2010','VISITA NO SITE -','00:05:11','VISITANTE','/novo_visu/inicio.php',191),
 (216,'127.0.0.1','20/11/2010','VISITA NO SITE -','00:06:07','VISITANTE','/novo_visu/inicio.php',192),
 (217,'127.0.0.1','20/11/2010','VISITA NO SITE -','00:12:49','VISITANTE','/novo_visu/inicio.php',193),
 (218,'127.0.0.1','20/11/2010','VISITA NO SITE -','00:12:50','VISITANTE','/novo_visu/inicio.php',194),
 (219,'127.0.0.1','20/11/2010','VISITA NO SITE -','00:13:20','HOLODEK','/novo_visu/inicio.php',195),
 (220,'127.0.0.1','20/11/2010','VISITA NO SITE -','00:14:14','VISITANTE','/novo_visu/inicio.php',196),
 (221,'127.0.0.1','20/11/2010','VISITA NO SITE -','00:14:14','VISITANTE','/novo_visu/inicio.php',197),
 (222,'127.0.0.1','20/11/2010','VISITA NO SITE -','00:14:29','MARLEY','/novo_visu/inicio.php',198),
 (223,'127.0.0.1','20/11/2010','VISITA NO SITE -','00:19:00','VISITANTE','/novo_visu/inicio.php',199),
 (224,'127.0.0.1','20/11/2010','VISITA NO SITE -','00:19:00','VISITANTE','/novo_visu/inicio.php',200);
INSERT INTO `log_user_event` (`id`,`IP`,`DATA`,`EVENTO`,`HORA`,`USUARIO`,`ARQUIVO`,`QTD`) VALUES 
 (225,'127.0.0.1','20/11/2010','VISITA NO SITE -','00:19:42','HOLODEK','/novo_visu/inicio.php',201),
 (226,'127.0.0.1','20/11/2010','VISITA NO SITE -','00:21:17','VISITANTE','/novo_visu/inicio.php',202),
 (227,'127.0.0.1','20/11/2010','VISITA NO SITE -','00:21:17','VISITANTE','/novo_visu/inicio.php',203),
 (228,'127.0.0.1','20/11/2010','VISITA NO SITE -','00:21:47','HOLODEK','/novo_visu/inicio.php',204),
 (229,'127.0.0.1','20/11/2010','VISITA NO SITE -','00:22:28','MARLEY','/novo_visu/inicio.php',205),
 (230,'127.0.0.1','20/11/2010','VISITA NO SITE -','00:23:26','HOLODEK','/novo_visu/inicio.php',206),
 (231,'127.0.0.1','20/11/2010','VISITA NO SITE -','00:24:13','MARLEY','/novo_visu/inicio.php',207),
 (232,'127.0.0.1','20/11/2010','VISITA NO SITE -','00:31:30','MARLEY','/novo_visu/inicio.php',208),
 (233,'127.0.0.1','20/11/2010','VISITA NO SITE -','00:32:04','HOLODEK','/novo_visu/inicio.php',209),
 (234,'127.0.0.1','20/11/2010','VISITA NO SITE -','00:33:09','MARLEY','/novo_visu/inicio.php',210);
INSERT INTO `log_user_event` (`id`,`IP`,`DATA`,`EVENTO`,`HORA`,`USUARIO`,`ARQUIVO`,`QTD`) VALUES 
 (235,'127.0.0.1','20/11/2010','VISITA NO SITE -','00:33:25','HOLODEK','/novo_visu/inicio.php',211),
 (236,'127.0.0.1','20/11/2010','VISITA NO SITE -','00:35:51','MARLEY','/novo_visu/inicio.php',212),
 (237,'127.0.0.1','20/11/2010','VISITA NO SITE -','00:36:00','HOLODEK','/novo_visu/inicio.php',213),
 (238,'127.0.0.1','22/11/2010','VISITA NO SITE -','10:55:40','VISITANTE','/novo_visu/inicio.php',214),
 (239,'127.0.0.1','22/11/2010','VISITA NO SITE -','10:55:41','VISITANTE','/novo_visu/inicio.php',215),
 (240,'192.168.1.44','22/11/2010','VISITA NO SITE -','10:56:18','VISITANTE','/novo_visu/inicio.php',216),
 (241,'192.168.1.44','22/11/2010','VISITA NO SITE -','10:56:19','VISITANTE','/novo_visu/inicio.php',217),
 (242,'127.0.0.1','22/11/2010','VISITA NO SITE -','10:57:33','VISITANTE','/novo_visu/inicio.php',218),
 (243,'127.0.0.1','22/11/2010','VISITA NO SITE -','10:57:41','VISITANTE','/novo_visu/inicio.php',219),
 (244,'127.0.0.1','22/11/2010','VISITA NO SITE -','10:59:38','VISITANTE','/novo_visu/inicio.php',220);
INSERT INTO `log_user_event` (`id`,`IP`,`DATA`,`EVENTO`,`HORA`,`USUARIO`,`ARQUIVO`,`QTD`) VALUES 
 (245,'192.168.1.44','22/11/2010','VISITA NO SITE -','11:00:00','VISITANTE','/novo_visu/inicio.php',221),
 (246,'127.0.0.1','22/11/2010','VISITA NO SITE -','14:53:45','VISITANTE','/novo_visu/inicio.php',222),
 (247,'127.0.0.1','22/11/2010','VISITA NO SITE -','14:53:45','VISITANTE','/novo_visu/inicio.php',223),
 (248,'127.0.0.1','22/11/2010','VISITA NO SITE -','15:19:48','VISITANTE','/novo_visu/inicio.php',224),
 (249,'127.0.0.1','22/11/2010','VISITA NO SITE -','15:19:49','VISITANTE','/novo_visu/inicio.php',225),
 (250,'127.0.0.1','22/11/2010','VISITA NO SITE -','15:23:00','VISITANTE','/novo_visu/inicio.php',226),
 (251,'127.0.0.1','22/11/2010','VISITA NO SITE -','15:23:00','VISITANTE','/novo_visu/inicio.php',227),
 (252,'127.0.0.1','22/11/2010','VISITA NO SITE -','16:31:40','VISITANTE','/novo_visu/inicio.php',228),
 (253,'127.0.0.1','22/11/2010','VISITA NO SITE -','16:31:40','VISITANTE','/novo_visu/inicio.php',229),
 (254,'127.0.0.1','22/11/2010','VISITA NO SITE -','16:32:12','VISITANTE','/novo_visu/inicio.php',230);
INSERT INTO `log_user_event` (`id`,`IP`,`DATA`,`EVENTO`,`HORA`,`USUARIO`,`ARQUIVO`,`QTD`) VALUES 
 (255,'127.0.0.1','22/11/2010','VISITA NO SITE -','16:32:13','VISITANTE','/novo_visu/inicio.php',231),
 (256,'192.168.1.44','22/11/2010','VISITA NO SITE -','17:05:43','VISITANTE','/novo_visu/inicio.php',232),
 (257,'192.168.1.44','22/11/2010','VISITA NO SITE -','17:05:43','VISITANTE','/novo_visu/inicio.php',233),
 (258,'192.168.1.44','22/11/2010','VISITA NO SITE -','17:17:34','VISITANTE','/novo_visu/inicio.php',234),
 (259,'192.168.1.44','22/11/2010','VISITA NO SITE -','17:17:34','VISITANTE','/novo_visu/inicio.php',235),
 (260,'192.168.1.44','22/11/2010','VISITA NO SITE -','17:18:50','VISITANTE','/novo_visu/inicio.php',236),
 (261,'127.0.0.1','22/11/2010','VISITA NO SITE -','18:10:03','VISITANTE','/novo_visu/inicio.php',237),
 (262,'127.0.0.1','22/11/2010','VISITA NO SITE -','18:10:03','VISITANTE','/novo_visu/inicio.php',238),
 (263,'192.168.1.44','22/11/2010','VISITA NO SITE -','19:06:54','VISITANTE','/novo_visu/inicio.php',239),
 (264,'192.168.1.44','22/11/2010','VISITA NO SITE -','19:06:55','VISITANTE','/novo_visu/inicio.php',240);
INSERT INTO `log_user_event` (`id`,`IP`,`DATA`,`EVENTO`,`HORA`,`USUARIO`,`ARQUIVO`,`QTD`) VALUES 
 (265,'192.168.1.61','22/11/2010','VISITA NO SITE -','19:07:16','VISITANTE','/novo_visu/inicio.php',241),
 (266,'192.168.1.61','22/11/2010','VISITA NO SITE -','19:07:17','VISITANTE','/novo_visu/inicio.php',242),
 (267,'192.168.1.44','22/11/2010','VISITA NO SITE -','19:11:46','VISITANTE','/novo_visu/inicio.php',243),
 (268,'192.168.1.44','22/11/2010','VISITA NO SITE -','19:11:46','VISITANTE','/novo_visu/inicio.php',244),
 (269,'127.0.0.1','22/11/2010','VISITA NO SITE -','19:13:49','VISITANTE','/novo_visu/inicio.php',245),
 (270,'127.0.0.1','22/11/2010','VISITA NO SITE -','19:13:49','VISITANTE','/novo_visu/inicio.php',246),
 (271,'192.168.1.44','22/11/2010','VISITA NO SITE -','19:14:33','VISITANTE','/novo_visu/inicio.php',247),
 (272,'192.168.1.44','22/11/2010','VISITA NO SITE -','19:14:33','VISITANTE','/novo_visu/inicio.php',248),
 (273,'192.168.1.44','23/11/2010','VISITA NO SITE -','12:08:41','VISITANTE','/novo_visu/inicio.php',249),
 (274,'192.168.1.44','23/11/2010','VISITA NO SITE -','12:08:41','VISITANTE','/novo_visu/inicio.php',250);
INSERT INTO `log_user_event` (`id`,`IP`,`DATA`,`EVENTO`,`HORA`,`USUARIO`,`ARQUIVO`,`QTD`) VALUES 
 (275,'127.0.0.1','23/11/2010','VISITA NO SITE -','12:28:16','VISITANTE','/novo_visu/inicio.php',251),
 (276,'127.0.0.1','23/11/2010','VISITA NO SITE -','12:28:17','VISITANTE','/novo_visu/inicio.php',252),
 (277,'127.0.0.1','23/11/2010','VISITA NO SITE -','12:30:08','VISITANTE','/novo_visu/inicio.php',253),
 (278,'127.0.0.1','23/11/2010','VISITA NO SITE -','12:30:08','VISITANTE','/novo_visu/inicio.php',254),
 (279,'192.168.1.44','23/11/2010','VISITA NO SITE -','12:31:06','VISITANTE','/novo_visu/inicio.php',255),
 (280,'192.168.1.44','23/11/2010','VISITA NO SITE -','12:31:06','VISITANTE','/novo_visu/inicio.php',256),
 (281,'192.168.1.44','23/11/2010','VISITA NO SITE -','12:31:24','VISITANTE','/novo_visu/inicio.php',257),
 (282,'192.168.1.44','23/11/2010','VISITA NO SITE -','12:31:24','VISITANTE','/novo_visu/inicio.php',258),
 (283,'192.168.1.44','23/11/2010','VISITA NO SITE -','12:35:18','VISITANTE','/novo_visu/inicio.php',259),
 (284,'192.168.1.44','23/11/2010','VISITA NO SITE -','12:35:18','VISITANTE','/novo_visu/inicio.php',260);
INSERT INTO `log_user_event` (`id`,`IP`,`DATA`,`EVENTO`,`HORA`,`USUARIO`,`ARQUIVO`,`QTD`) VALUES 
 (285,'192.168.1.44','23/11/2010','VISITA NO SITE -','12:36:07','VISITANTE','/novo_visu/inicio.php',261),
 (286,'192.168.1.44','23/11/2010','VISITA NO SITE -','12:36:07','VISITANTE','/novo_visu/inicio.php',262),
 (287,'127.0.0.1','23/11/2010','VISITA NO SITE -','12:39:57','VISITANTE','/novo_visu/inicio.php',263),
 (288,'127.0.0.1','23/11/2010','VISITA NO SITE -','12:41:54','VISITANTE','/novo_visu/inicio.php',264),
 (289,'127.0.0.1','23/11/2010','VISITA NO SITE -','12:41:55','VISITANTE','/novo_visu/inicio.php',265),
 (290,'192.168.1.44','23/11/2010','VISITA NO SITE -','12:45:52','VISITANTE','/novo_visu/inicio.php',266),
 (291,'192.168.1.44','23/11/2010','VISITA NO SITE -','12:45:53','VISITANTE','/novo_visu/inicio.php',267),
 (292,'192.168.1.61','23/11/2010','VISITA NO SITE -','12:47:38','VISITANTE','/novo_visu/inicio.php',268),
 (293,'192.168.1.61','23/11/2010','VISITA NO SITE -','12:47:38','VISITANTE','/novo_visu/inicio.php',269),
 (294,'192.168.1.61','23/11/2010','VISITA NO SITE -','12:48:06','VISITANTE','/novo_visu/inicio.php',270);
INSERT INTO `log_user_event` (`id`,`IP`,`DATA`,`EVENTO`,`HORA`,`USUARIO`,`ARQUIVO`,`QTD`) VALUES 
 (295,'192.168.1.61','23/11/2010','VISITA NO SITE -','12:48:06','VISITANTE','/novo_visu/inicio.php',271),
 (296,'192.168.1.61','23/11/2010','VISITA NO SITE -','12:54:19','VISITANTE','/novo_visu/inicio.php',272),
 (297,'192.168.1.61','23/11/2010','VISITA NO SITE -','12:54:19','VISITANTE','/novo_visu/inicio.php',273),
 (298,'192.168.1.61','23/11/2010','VISITA NO SITE -','12:54:51','VISITANTE','/novo_visu/inicio.php',274),
 (299,'192.168.1.61','23/11/2010','VISITA NO SITE -','12:54:52','VISITANTE','/novo_visu/inicio.php',275),
 (300,'192.168.1.44','23/11/2010','VISITA NO SITE -','13:00:32','VISITANTE','/novo_visu/inicio.php',276),
 (301,'192.168.1.44','23/11/2010','VISITA NO SITE -','13:00:33','VISITANTE','/novo_visu/inicio.php',277),
 (302,'192.168.1.44','23/11/2010','VISITA NO SITE -','13:01:53','VISITANTE','/novo_visu/inicio.php',278),
 (303,'192.168.1.44','23/11/2010','VISITA NO SITE -','13:01:53','VISITANTE','/novo_visu/inicio.php',279),
 (304,'192.168.1.44','23/11/2010','VISITA NO SITE -','13:02:10','VISITANTE','/novo_visu/inicio.php',280);
INSERT INTO `log_user_event` (`id`,`IP`,`DATA`,`EVENTO`,`HORA`,`USUARIO`,`ARQUIVO`,`QTD`) VALUES 
 (305,'192.168.1.44','23/11/2010','VISITA NO SITE -','13:02:10','VISITANTE','/novo_visu/inicio.php',281),
 (306,'192.168.1.44','23/11/2010','VISITA NO SITE -','13:05:14','VISITANTE','/novo_visu/inicio.php',282),
 (307,'192.168.1.44','23/11/2010','VISITA NO SITE -','13:05:14','VISITANTE','/novo_visu/inicio.php',283),
 (308,'192.168.1.44','23/11/2010','VISITA NO SITE -','13:05:39','VISITANTE','/novo_visu/inicio.php',284),
 (309,'192.168.1.44','23/11/2010','VISITA NO SITE -','13:05:39','VISITANTE','/novo_visu/inicio.php',285),
 (310,'192.168.1.44','23/11/2010','VISITA NO SITE -','13:07:00','VISITANTE','/novo_visu/inicio.php',286),
 (311,'192.168.1.44','23/11/2010','VISITA NO SITE -','13:07:00','VISITANTE','/novo_visu/inicio.php',287),
 (312,'192.168.1.44','23/11/2010','VISITA NO SITE -','13:07:15','VISITANTE','/novo_visu/inicio.php',288),
 (313,'192.168.1.44','23/11/2010','VISITA NO SITE -','13:07:15','VISITANTE','/novo_visu/inicio.php',289),
 (314,'192.168.1.44','23/11/2010','VISITA NO SITE -','13:08:16','VISITANTE','/novo_visu/inicio.php',290);
INSERT INTO `log_user_event` (`id`,`IP`,`DATA`,`EVENTO`,`HORA`,`USUARIO`,`ARQUIVO`,`QTD`) VALUES 
 (315,'192.168.1.44','23/11/2010','VISITA NO SITE -','13:08:17','VISITANTE','/novo_visu/inicio.php',291),
 (316,'192.168.1.44','23/11/2010','VISITA NO SITE -','13:09:07','VISITANTE','/novo_visu/inicio.php',292),
 (317,'192.168.1.44','23/11/2010','VISITA NO SITE -','13:09:07','VISITANTE','/novo_visu/inicio.php',293),
 (318,'192.168.1.44','23/11/2010','VISITA NO SITE -','13:10:19','VISITANTE','/novo_visu/inicio.php',294),
 (319,'192.168.1.44','23/11/2010','VISITA NO SITE -','13:10:19','VISITANTE','/novo_visu/inicio.php',295),
 (320,'192.168.1.44','23/11/2010','VISITA NO SITE -','13:12:19','VISITANTE','/novo_visu/inicio.php',296),
 (321,'192.168.1.44','23/11/2010','VISITA NO SITE -','13:12:19','VISITANTE','/novo_visu/inicio.php',297),
 (322,'192.168.1.44','23/11/2010','VISITA NO SITE -','13:13:42','VISITANTE','/novo_visu/inicio.php',298),
 (323,'192.168.1.44','23/11/2010','VISITA NO SITE -','13:13:42','VISITANTE','/novo_visu/inicio.php',299),
 (324,'192.168.1.44','23/11/2010','VISITA NO SITE -','13:15:07','VISITANTE','/novo_visu/inicio.php',300);
INSERT INTO `log_user_event` (`id`,`IP`,`DATA`,`EVENTO`,`HORA`,`USUARIO`,`ARQUIVO`,`QTD`) VALUES 
 (325,'192.168.1.44','23/11/2010','VISITA NO SITE -','13:15:07','VISITANTE','/novo_visu/inicio.php',301),
 (326,'192.168.1.44','23/11/2010','VISITA NO SITE -','13:15:21','VISITANTE','/novo_visu/inicio.php',302),
 (327,'192.168.1.44','23/11/2010','VISITA NO SITE -','13:15:21','VISITANTE','/novo_visu/inicio.php',303),
 (328,'192.168.1.44','23/11/2010','VISITA NO SITE -','13:15:39','VISITANTE','/novo_visu/inicio.php',304),
 (329,'192.168.1.44','23/11/2010','VISITA NO SITE -','13:15:39','VISITANTE','/novo_visu/inicio.php',305),
 (330,'192.168.1.44','23/11/2010','VISITA NO SITE -','13:16:14','VISITANTE','/novo_visu/inicio.php',306),
 (331,'192.168.1.44','23/11/2010','VISITA NO SITE -','13:16:15','VISITANTE','/novo_visu/inicio.php',307),
 (332,'192.168.1.44','23/11/2010','VISITA NO SITE -','13:16:37','VISITANTE','/novo_visu/inicio.php',308),
 (333,'192.168.1.44','23/11/2010','VISITA NO SITE -','13:16:37','VISITANTE','/novo_visu/inicio.php',309),
 (334,'127.0.0.1','23/11/2010','VISITA NO SITE -','13:16:55','VISITANTE','/novo_visu/inicio.php',310);
INSERT INTO `log_user_event` (`id`,`IP`,`DATA`,`EVENTO`,`HORA`,`USUARIO`,`ARQUIVO`,`QTD`) VALUES 
 (335,'127.0.0.1','23/11/2010','VISITA NO SITE -','13:16:55','VISITANTE','/novo_visu/inicio.php',311),
 (336,'127.0.0.1','23/11/2010','VISITA NO SITE -','13:17:26','VISITANTE','/novo_visu/inicio.php',312),
 (337,'127.0.0.1','23/11/2010','VISITA NO SITE -','13:17:26','VISITANTE','/novo_visu/inicio.php',313),
 (338,'127.0.0.1','23/11/2010','VISITA NO SITE -','13:18:00','VISITANTE','/novo_visu/inicio.php',314),
 (339,'127.0.0.1','23/11/2010','VISITA NO SITE -','13:18:00','VISITANTE','/novo_visu/inicio.php',315),
 (340,'127.0.0.1','23/11/2010','VISITA NO SITE -','13:18:31','VISITANTE','/novo_visu/inicio.php',316),
 (341,'127.0.0.1','23/11/2010','VISITA NO SITE -','13:18:32','VISITANTE','/novo_visu/inicio.php',317),
 (342,'192.168.1.61','23/11/2010','VISITA NO SITE -','13:18:55','VISITANTE','/novo_visu/inicio.php',318),
 (343,'192.168.1.61','23/11/2010','VISITA NO SITE -','13:18:55','VISITANTE','/novo_visu/inicio.php',319),
 (344,'127.0.0.1','23/11/2010','VISITA NO SITE -','13:27:44','VISITANTE','/novo_visu/inicio.php',320);
INSERT INTO `log_user_event` (`id`,`IP`,`DATA`,`EVENTO`,`HORA`,`USUARIO`,`ARQUIVO`,`QTD`) VALUES 
 (345,'127.0.0.1','23/11/2010','VISITA NO SITE -','13:27:45','VISITANTE','/novo_visu/inicio.php',321),
 (346,'127.0.0.1','23/11/2010','VISITA NO SITE -','14:34:11','VISITANTE','/novo_visu/inicio.php',322),
 (347,'127.0.0.1','23/11/2010','VISITA NO SITE -','14:34:12','VISITANTE','/novo_visu/inicio.php',323),
 (348,'127.0.0.1','23/11/2010','VISITA NO SITE -','14:37:10','VISITANTE','/novo_visu/inicio.php',324),
 (349,'127.0.0.1','23/11/2010','VISITA NO SITE -','14:37:11','VISITANTE','/novo_visu/inicio.php',325),
 (350,'127.0.0.1','23/11/2010','VISITA NO SITE -','14:43:26','VISITANTE','/novo_visu/inicio.php',326),
 (351,'127.0.0.1','23/11/2010','VISITA NO SITE -','14:43:26','VISITANTE','/novo_visu/inicio.php',327),
 (352,'127.0.0.1','23/11/2010','VISITA NO SITE -','15:21:24','VISITANTE','/novo_visu/inicio.php',328),
 (353,'127.0.0.1','23/11/2010','VISITA NO SITE -','15:21:24','VISITANTE','/novo_visu/inicio.php',329),
 (354,'192.168.1.44','23/11/2010','VISITA NO SITE -','15:22:54','VISITANTE','/novo_visu/inicio.php',330);
INSERT INTO `log_user_event` (`id`,`IP`,`DATA`,`EVENTO`,`HORA`,`USUARIO`,`ARQUIVO`,`QTD`) VALUES 
 (355,'192.168.1.44','23/11/2010','VISITA NO SITE -','15:22:54','VISITANTE','/novo_visu/inicio.php',331),
 (356,'192.168.1.44','23/11/2010','VISITA NO SITE -','15:26:29','VISITANTE','/novo_visu/inicio.php',332),
 (357,'192.168.1.44','23/11/2010','VISITA NO SITE -','15:27:26','VISITANTE','/novo_visu/inicio.php',333),
 (358,'192.168.1.44','23/11/2010','VISITA NO SITE -','15:27:26','VISITANTE','/novo_visu/inicio.php',334),
 (359,'127.0.0.1','23/11/2010','VISITA NO SITE -','15:28:15','VISITANTE','/novo_visu/inicio.php',335),
 (360,'127.0.0.1','23/11/2010','VISITA NO SITE -','15:28:15','VISITANTE','/novo_visu/inicio.php',336),
 (361,'192.168.1.61','23/11/2010','VISITA NO SITE -','15:28:44','VISITANTE','/novo_visu/inicio.php',337),
 (362,'192.168.1.61','23/11/2010','VISITA NO SITE -','15:28:45','VISITANTE','/novo_visu/inicio.php',338),
 (363,'192.168.1.44','23/11/2010','VISITA NO SITE -','15:31:20','VISITANTE','/novo_visu/inicio.php',339),
 (364,'192.168.1.44','23/11/2010','VISITA NO SITE -','15:31:20','VISITANTE','/novo_visu/inicio.php',340);
INSERT INTO `log_user_event` (`id`,`IP`,`DATA`,`EVENTO`,`HORA`,`USUARIO`,`ARQUIVO`,`QTD`) VALUES 
 (365,'192.168.1.44','23/11/2010','VISITA NO SITE -','16:02:17','VISITANTE','/novo_visu/inicio.php',341),
 (366,'192.168.1.44','23/11/2010','VISITA NO SITE -','16:02:18','VISITANTE','/novo_visu/inicio.php',342),
 (367,'127.0.0.1','23/11/2010','VISITA NO SITE -','16:02:33','VISITANTE','/novo_visu/inicio.php',343),
 (368,'192.168.1.44','23/11/2010','VISITA NO SITE -','16:02:54','VISITANTE','/novo_visu/inicio.php',344),
 (369,'192.168.1.44','23/11/2010','VISITA NO SITE -','16:02:59','VISITANTE','/novo_visu/inicio.php',345),
 (370,'192.168.1.44','23/11/2010','VISITA NO SITE -','16:03:42','VISITANTE','/novo_visu/inicio.php',346),
 (371,'192.168.1.44','23/11/2010','VISITA NO SITE -','16:06:55','VISITANTE','/novo_visu/inicio.php',347),
 (372,'192.168.1.44','23/11/2010','VISITA NO SITE -','16:11:38','VISITANTE','/novo_visu/inicio.php',348),
 (373,'192.168.1.44','23/11/2010','VISITA NO SITE -','16:11:39','VISITANTE','/novo_visu/inicio.php',349),
 (374,'192.168.1.44','23/11/2010','VISITA NO SITE -','18:01:34','VISITANTE','/novo_visu/inicio.php',350);
INSERT INTO `log_user_event` (`id`,`IP`,`DATA`,`EVENTO`,`HORA`,`USUARIO`,`ARQUIVO`,`QTD`) VALUES 
 (375,'192.168.1.44','23/11/2010','VISITA NO SITE -','18:01:34','VISITANTE','/novo_visu/inicio.php',351),
 (376,'192.168.1.44','23/11/2010','VISITA NO SITE -','18:17:02','VISITANTE','/novo_visu/inicio.php',352),
 (377,'192.168.1.44','23/11/2010','VISITA NO SITE -','18:17:02','VISITANTE','/novo_visu/inicio.php',353),
 (378,'192.168.1.44','24/11/2010','VISITA NO SITE -','13:28:16','VISITANTE','/novo_visu/inicio.php',354),
 (379,'192.168.1.44','24/11/2010','VISITA NO SITE -','13:28:16','VISITANTE','/novo_visu/inicio.php',355),
 (380,'127.0.0.1','25/11/2010','VISITA NO SITE -','08:58:52','VISITANTE','/novo_visu/inicio.php',356),
 (381,'127.0.0.1','25/11/2010','VISITA NO SITE -','08:58:52','VISITANTE','/novo_visu/inicio.php',357),
 (382,'192.168.1.44','25/11/2010','VISITA NO SITE -','09:34:45','VISITANTE','/novo_visu/inicio.php',358),
 (383,'192.168.1.44','25/11/2010','VISITA NO SITE -','09:35:20','HOLODEK','/novo_visu/inicio.php',359),
 (384,'192.168.1.44','25/11/2010','VISITA NO SITE -','10:13:06','VISITANTE','/novo_visu/inicio.php',360);
INSERT INTO `log_user_event` (`id`,`IP`,`DATA`,`EVENTO`,`HORA`,`USUARIO`,`ARQUIVO`,`QTD`) VALUES 
 (385,'192.168.1.44','25/11/2010','VISITA NO SITE -','10:13:06','VISITANTE','/novo_visu/inicio.php',361),
 (386,'192.168.1.44','25/11/2010','VISITA NO SITE -','10:13:27','HOLODEK','/novo_visu/inicio.php',362),
 (387,'192.168.1.44','25/11/2010','VISITA NO SITE -','10:33:24','HOLODEK','/novo_visu/inicio.php',363),
 (388,'192.168.1.44','25/11/2010','VISITA NO SITE -','12:22:59','VISITANTE','/novo_visu/inicio.php',364),
 (389,'192.168.1.44','25/11/2010','VISITA NO SITE -','12:23:00','VISITANTE','/novo_visu/inicio.php',365),
 (390,'192.168.1.44','25/11/2010','VISITA NO SITE -','12:47:25','VISITANTE','/novo_visu/inicio.php',366),
 (391,'192.168.1.44','25/11/2010','VISITA NO SITE -','12:58:05','VISITANTE','/novo_visu/inicio.php',367),
 (392,'192.168.1.44','25/11/2010','VISITA NO SITE -','12:58:05','VISITANTE','/novo_visu/inicio.php',368),
 (393,'127.0.0.1','25/11/2010','VISITA NO SITE -','16:10:24','VISITANTE','/novo_visu/inicio.php',369),
 (394,'127.0.0.1','25/11/2010','VISITA NO SITE -','16:10:24','VISITANTE','/novo_visu/inicio.php',370);
INSERT INTO `log_user_event` (`id`,`IP`,`DATA`,`EVENTO`,`HORA`,`USUARIO`,`ARQUIVO`,`QTD`) VALUES 
 (395,'127.0.0.1','25/11/2010','VISITA NO SITE -','16:10:48','HOLODEK','/novo_visu/inicio.php',371),
 (396,'127.0.0.1','25/11/2010','VISITA NO SITE -','17:55:29','MATRIX','/novo_visu/inicio.php',372),
 (397,'127.0.0.1','26/11/2010','VISITA NO SITE -','15:15:38','VISITANTE','/novo_visu/inicio.php',373),
 (398,'127.0.0.1','26/11/2010','VISITA NO SITE -','15:15:39','VISITANTE','/novo_visu/inicio.php',374),
 (399,'127.0.0.1','26/11/2010','VISITA NO SITE -','15:16:33','VISITANTE','/novo_visu/inicio.php',375),
 (400,'127.0.0.1','26/11/2010','VISITA NO SITE -','15:16:56','MARLEY','/novo_visu/inicio.php',376),
 (401,'127.0.0.1','26/11/2010','VISITA NO SITE -','15:17:18','HOLODEK','/novo_visu/inicio.php',377),
 (402,'127.0.0.1','28/11/2010','VISITA NO SITE -','19:18:38','VISITANTE','/novo_visu/inicio.php',378),
 (403,'127.0.0.1','28/11/2010','VISITA NO SITE -','19:18:39','VISITANTE','/novo_visu/inicio.php',379),
 (404,'127.0.0.1','28/11/2010','VISITA NO SITE -','19:18:50','HOLODEK','/novo_visu/inicio.php',380);
INSERT INTO `log_user_event` (`id`,`IP`,`DATA`,`EVENTO`,`HORA`,`USUARIO`,`ARQUIVO`,`QTD`) VALUES 
 (405,'127.0.0.1','28/11/2010','VISITA NO SITE -','19:35:25','VISITANTE','/novo_visu/inicio.php',381),
 (406,'127.0.0.1','28/11/2010','VISITA NO SITE -','19:35:25','VISITANTE','/novo_visu/inicio.php',382),
 (407,'127.0.0.1','28/11/2010','VISITA NO SITE -','19:35:26','VISITANTE','/novo_visu/inicio.php',383),
 (408,'127.0.0.1','28/11/2010','VISITA NO SITE -','19:36:42','HOLODEK','/novo_visu/inicio.php',384),
 (409,'127.0.0.1','29/11/2010','VISITA NO SITE -','18:07:10','VISITANTE','/novo_visu/inicio.php',385),
 (410,'127.0.0.1','29/11/2010','VISITA NO SITE -','18:07:11','VISITANTE','/novo_visu/inicio.php',386),
 (411,'127.0.0.1','29/11/2010','VISITA NO SITE -','18:07:45','HOLODEK','/novo_visu/inicio.php',387),
 (412,'192.168.1.44','29/11/2010','VISITA NO SITE -','18:08:00','VISITANTE','/novo_visu/inicio.php',388),
 (413,'192.168.1.44','29/11/2010','VISITA NO SITE -','18:08:01','VISITANTE','/novo_visu/inicio.php',389),
 (414,'192.168.1.44','29/11/2010','VISITA NO SITE -','18:08:13','MARLEY','/novo_visu/inicio.php',390);
INSERT INTO `log_user_event` (`id`,`IP`,`DATA`,`EVENTO`,`HORA`,`USUARIO`,`ARQUIVO`,`QTD`) VALUES 
 (415,'127.0.0.1','30/11/2010','VISITA NO SITE -','11:46:42','VISITANTE','/novo_visu/inicio.php',391),
 (416,'127.0.0.1','30/11/2010','VISITA NO SITE -','11:46:43','VISITANTE','/novo_visu/inicio.php',392),
 (417,'127.0.0.1','30/11/2010','VISITA NO SITE -','18:35:39','VISITANTE','/novo_visu/inicio.php',393),
 (418,'127.0.0.1','30/11/2010','VISITA NO SITE -','18:36:16','VISITANTE','/novo_visu/inicio.php',394),
 (419,'127.0.0.1','30/11/2010','VISITA NO SITE -','18:36:16','VISITANTE','/novo_visu/inicio.php',395),
 (420,'127.0.0.1','30/11/2010','VISITA NO SITE -','18:36:27','VISITANTE','/novo_visu/inicio.php',396),
 (421,'127.0.0.1','30/11/2010','VISITA NO SITE -','18:36:27','VISITANTE','/novo_visu/inicio.php',397),
 (422,'127.0.0.1','01/12/2010','VISITA NO SITE -','08:47:01','VISITANTE','/novo_visu/inicio.php',398),
 (423,'127.0.0.1','01/12/2010','VISITA NO SITE -','08:47:02','VISITANTE','/novo_visu/inicio.php',399),
 (424,'127.0.0.1','01/12/2010','VISITA NO SITE -','08:48:36','VISITANTE','/novo_visu/inicio.php',400);
INSERT INTO `log_user_event` (`id`,`IP`,`DATA`,`EVENTO`,`HORA`,`USUARIO`,`ARQUIVO`,`QTD`) VALUES 
 (425,'127.0.0.1','01/12/2010','VISITA NO SITE -','08:48:37','VISITANTE','/novo_visu/inicio.php',401),
 (426,'127.0.0.1','01/12/2010','VISITA NO SITE -','08:49:19','VISITANTE','/novo_visu/inicio.php',402),
 (427,'127.0.0.1','01/12/2010','VISITA NO SITE -','08:49:19','VISITANTE','/novo_visu/inicio.php',403),
 (428,'127.0.0.1','01/12/2010','VISITA NO SITE -','08:54:18','VISITANTE','/novo_visu/inicio.php',404),
 (429,'127.0.0.1','01/12/2010','VISITA NO SITE -','08:54:18','VISITANTE','/novo_visu/inicio.php',405),
 (430,'127.0.0.1','01/12/2010','VISITA NO SITE -','08:55:01','VISITANTE','/novo_visu/inicio.php',406),
 (431,'127.0.0.1','01/12/2010','VISITA NO SITE -','08:55:02','VISITANTE','/novo_visu/inicio.php',407),
 (432,'127.0.0.1','01/12/2010','VISITA NO SITE -','08:55:25','VISITANTE','/novo_visu/inicio.php',408),
 (433,'127.0.0.1','01/12/2010','VISITA NO SITE -','08:55:26','VISITANTE','/novo_visu/inicio.php',409),
 (434,'127.0.0.1','01/12/2010','VISITA NO SITE -','08:56:55','VISITANTE','/novo_visu/inicio.php',410);
INSERT INTO `log_user_event` (`id`,`IP`,`DATA`,`EVENTO`,`HORA`,`USUARIO`,`ARQUIVO`,`QTD`) VALUES 
 (435,'127.0.0.1','01/12/2010','VISITA NO SITE -','08:56:55','VISITANTE','/novo_visu/inicio.php',411),
 (436,'127.0.0.1','01/12/2010','VISITA NO SITE -','08:57:37','VISITANTE','/novo_visu/inicio.php',412),
 (437,'127.0.0.1','01/12/2010','VISITA NO SITE -','08:57:37','VISITANTE','/novo_visu/inicio.php',413),
 (438,'127.0.0.1','01/12/2010','VISITA NO SITE -','08:57:52','VISITANTE','/novo_visu/inicio.php',414),
 (439,'127.0.0.1','01/12/2010','VISITA NO SITE -','08:57:53','VISITANTE','/novo_visu/inicio.php',415),
 (440,'127.0.0.1','01/12/2010','VISITA NO SITE -','08:58:15','VISITANTE','/novo_visu/inicio.php',416),
 (441,'127.0.0.1','01/12/2010','VISITA NO SITE -','08:58:15','VISITANTE','/novo_visu/inicio.php',417),
 (442,'127.0.0.1','01/12/2010','VISITA NO SITE -','08:59:48','VISITANTE','/novo_visu/inicio.php',418),
 (443,'127.0.0.1','01/12/2010','VISITA NO SITE -','08:59:48','VISITANTE','/novo_visu/inicio.php',419),
 (444,'127.0.0.1','01/12/2010','VISITA NO SITE -','09:00:30','VISITANTE','/novo_visu/inicio.php',420);
INSERT INTO `log_user_event` (`id`,`IP`,`DATA`,`EVENTO`,`HORA`,`USUARIO`,`ARQUIVO`,`QTD`) VALUES 
 (445,'127.0.0.1','01/12/2010','VISITA NO SITE -','09:00:30','VISITANTE','/novo_visu/inicio.php',421),
 (446,'127.0.0.1','01/12/2010','VISITA NO SITE -','09:00:45','VISITANTE','/novo_visu/inicio.php',422),
 (447,'127.0.0.1','01/12/2010','VISITA NO SITE -','09:00:46','VISITANTE','/novo_visu/inicio.php',423),
 (448,'127.0.0.1','01/12/2010','VISITA NO SITE -','09:01:17','VISITANTE','/novo_visu/inicio.php',424),
 (449,'127.0.0.1','01/12/2010','VISITA NO SITE -','09:01:18','VISITANTE','/novo_visu/inicio.php',425),
 (450,'127.0.0.1','01/12/2010','VISITA NO SITE -','09:01:27','VISITANTE','/novo_visu/inicio.php',426),
 (451,'127.0.0.1','01/12/2010','VISITA NO SITE -','09:01:28','VISITANTE','/novo_visu/inicio.php',427),
 (452,'127.0.0.1','01/12/2010','VISITA NO SITE -','09:01:40','VISITANTE','/novo_visu/inicio.php',428),
 (453,'127.0.0.1','01/12/2010','VISITA NO SITE -','09:01:41','VISITANTE','/novo_visu/inicio.php',429),
 (454,'127.0.0.1','01/12/2010','VISITA NO SITE -','09:03:42','VISITANTE','/novo_visu/inicio.php',430);
INSERT INTO `log_user_event` (`id`,`IP`,`DATA`,`EVENTO`,`HORA`,`USUARIO`,`ARQUIVO`,`QTD`) VALUES 
 (455,'127.0.0.1','01/12/2010','VISITA NO SITE -','09:03:43','VISITANTE','/novo_visu/inicio.php',431),
 (456,'127.0.0.1','01/12/2010','VISITA NO SITE -','09:07:35','VISITANTE','/novo_visu/inicio.php',432),
 (457,'127.0.0.1','01/12/2010','VISITA NO SITE -','09:07:36','VISITANTE','/novo_visu/inicio.php',433),
 (458,'127.0.0.1','01/12/2010','VISITA NO SITE -','09:08:38','VISITANTE','/novo_visu/inicio.php',434),
 (459,'127.0.0.1','01/12/2010','VISITA NO SITE -','09:08:38','VISITANTE','/novo_visu/inicio.php',435),
 (460,'127.0.0.1','01/12/2010','VISITA NO SITE -','09:09:05','VISITANTE','/novo_visu/inicio.php',436),
 (461,'127.0.0.1','01/12/2010','VISITA NO SITE -','09:09:05','VISITANTE','/novo_visu/inicio.php',437),
 (462,'127.0.0.1','01/12/2010','VISITA NO SITE -','09:09:45','VISITANTE','/novo_visu/inicio.php',438),
 (463,'127.0.0.1','01/12/2010','VISITA NO SITE -','09:09:45','VISITANTE','/novo_visu/inicio.php',439),
 (464,'127.0.0.1','01/12/2010','VISITA NO SITE -','09:11:21','VISITANTE','/novo_visu/inicio.php',440);
INSERT INTO `log_user_event` (`id`,`IP`,`DATA`,`EVENTO`,`HORA`,`USUARIO`,`ARQUIVO`,`QTD`) VALUES 
 (465,'127.0.0.1','01/12/2010','VISITA NO SITE -','09:11:21','VISITANTE','/novo_visu/inicio.php',441),
 (466,'127.0.0.1','01/12/2010','VISITA NO SITE -','09:12:11','VISITANTE','/novo_visu/inicio.php',442),
 (467,'127.0.0.1','01/12/2010','VISITA NO SITE -','09:12:11','VISITANTE','/novo_visu/inicio.php',443),
 (468,'127.0.0.1','01/12/2010','VISITA NO SITE -','09:13:22','VISITANTE','/novo_visu/inicio.php',444),
 (469,'127.0.0.1','01/12/2010','VISITA NO SITE -','09:13:22','VISITANTE','/novo_visu/inicio.php',445),
 (470,'127.0.0.1','01/12/2010','VISITA NO SITE -','09:19:27','VISITANTE','/novo_visu/inicio.php',446),
 (471,'127.0.0.1','01/12/2010','VISITA NO SITE -','09:19:27','VISITANTE','/novo_visu/inicio.php',447),
 (472,'127.0.0.1','01/12/2010','VISITA NO SITE -','09:23:58','VISITANTE','/novo_visu/inicio.php',448),
 (473,'127.0.0.1','01/12/2010','VISITA NO SITE -','09:23:58','VISITANTE','/novo_visu/inicio.php',449),
 (474,'127.0.0.1','01/12/2010','VISITA NO SITE -','09:25:04','VISITANTE','/novo_visu/inicio.php',450);
INSERT INTO `log_user_event` (`id`,`IP`,`DATA`,`EVENTO`,`HORA`,`USUARIO`,`ARQUIVO`,`QTD`) VALUES 
 (475,'127.0.0.1','01/12/2010','VISITA NO SITE -','09:25:04','VISITANTE','/novo_visu/inicio.php',451),
 (476,'127.0.0.1','01/12/2010','VISITA NO SITE -','09:25:39','VISITANTE','/novo_visu/inicio.php',452),
 (477,'127.0.0.1','01/12/2010','VISITA NO SITE -','09:25:39','VISITANTE','/novo_visu/inicio.php',453),
 (478,'127.0.0.1','01/12/2010','VISITA NO SITE -','09:26:04','VISITANTE','/novo_visu/inicio.php',454),
 (479,'127.0.0.1','01/12/2010','VISITA NO SITE -','09:26:04','VISITANTE','/novo_visu/inicio.php',455),
 (480,'127.0.0.1','01/12/2010','VISITA NO SITE -','09:26:43','VISITANTE','/novo_visu/inicio.php',456),
 (481,'127.0.0.1','01/12/2010','VISITA NO SITE -','09:26:43','VISITANTE','/novo_visu/inicio.php',457),
 (482,'127.0.0.1','01/12/2010','VISITA NO SITE -','09:28:17','VISITANTE','/novo_visu/inicio.php',458),
 (483,'127.0.0.1','01/12/2010','VISITA NO SITE -','09:28:18','VISITANTE','/novo_visu/inicio.php',459),
 (484,'127.0.0.1','01/12/2010','VISITA NO SITE -','09:28:41','VISITANTE','/novo_visu/inicio.php',460);
INSERT INTO `log_user_event` (`id`,`IP`,`DATA`,`EVENTO`,`HORA`,`USUARIO`,`ARQUIVO`,`QTD`) VALUES 
 (485,'127.0.0.1','01/12/2010','VISITA NO SITE -','09:28:41','VISITANTE','/novo_visu/inicio.php',461),
 (486,'127.0.0.1','01/12/2010','VISITA NO SITE -','09:28:55','VISITANTE','/novo_visu/inicio.php',462),
 (487,'127.0.0.1','01/12/2010','VISITA NO SITE -','09:28:55','VISITANTE','/novo_visu/inicio.php',463),
 (488,'127.0.0.1','01/12/2010','VISITA NO SITE -','09:29:39','VISITANTE','/novo_visu/inicio.php',464),
 (489,'127.0.0.1','01/12/2010','VISITA NO SITE -','09:29:39','VISITANTE','/novo_visu/inicio.php',465),
 (490,'127.0.0.1','01/12/2010','VISITA NO SITE -','09:44:08','VISITANTE','/novo_visu/inicio.php',466),
 (491,'127.0.0.1','01/12/2010','VISITA NO SITE -','09:44:08','VISITANTE','/novo_visu/inicio.php',467),
 (492,'127.0.0.1','01/12/2010','VISITA NO SITE -','09:44:38','VISITANTE','/novo_visu/inicio.php',468),
 (493,'127.0.0.1','01/12/2010','VISITA NO SITE -','09:44:39','VISITANTE','/novo_visu/inicio.php',469),
 (494,'127.0.0.1','01/12/2010','VISITA NO SITE -','09:45:11','VISITANTE','/novo_visu/inicio.php',470);
INSERT INTO `log_user_event` (`id`,`IP`,`DATA`,`EVENTO`,`HORA`,`USUARIO`,`ARQUIVO`,`QTD`) VALUES 
 (495,'127.0.0.1','01/12/2010','VISITA NO SITE -','09:45:11','VISITANTE','/novo_visu/inicio.php',471),
 (496,'127.0.0.1','01/12/2010','VISITA NO SITE -','09:46:09','VISITANTE','/novo_visu/inicio.php',472),
 (497,'127.0.0.1','01/12/2010','VISITA NO SITE -','09:46:09','VISITANTE','/novo_visu/inicio.php',473),
 (498,'127.0.0.1','01/12/2010','VISITA NO SITE -','09:46:33','VISITANTE','/novo_visu/inicio.php',474),
 (499,'127.0.0.1','01/12/2010','VISITA NO SITE -','09:46:34','VISITANTE','/novo_visu/inicio.php',475),
 (500,'127.0.0.1','01/12/2010','VISITA NO SITE -','09:46:58','VISITANTE','/novo_visu/inicio.php',476),
 (501,'127.0.0.1','01/12/2010','VISITA NO SITE -','09:46:58','VISITANTE','/novo_visu/inicio.php',477),
 (502,'127.0.0.1','01/12/2010','VISITA NO SITE -','09:52:24','VISITANTE','/novo_visu/inicio.php',478),
 (503,'127.0.0.1','01/12/2010','VISITA NO SITE -','09:52:24','VISITANTE','/novo_visu/inicio.php',479),
 (504,'127.0.0.1','01/12/2010','VISITA NO SITE -','09:56:14','VISITANTE','/novo_visu/inicio.php',480);
INSERT INTO `log_user_event` (`id`,`IP`,`DATA`,`EVENTO`,`HORA`,`USUARIO`,`ARQUIVO`,`QTD`) VALUES 
 (505,'127.0.0.1','01/12/2010','VISITA NO SITE -','09:56:14','VISITANTE','/novo_visu/inicio.php',481),
 (506,'127.0.0.1','01/12/2010','VISITA NO SITE -','10:00:26','VISITANTE','/novo_visu/inicio.php',482),
 (507,'127.0.0.1','01/12/2010','VISITA NO SITE -','10:00:26','VISITANTE','/novo_visu/inicio.php',483),
 (508,'127.0.0.1','01/12/2010','VISITA NO SITE -','10:01:05','VISITANTE','/novo_visu/inicio.php',484),
 (509,'127.0.0.1','01/12/2010','VISITA NO SITE -','10:01:05','VISITANTE','/novo_visu/inicio.php',485),
 (510,'127.0.0.1','01/12/2010','VISITA NO SITE -','10:02:45','VISITANTE','/novo_visu/inicio.php',486),
 (511,'127.0.0.1','01/12/2010','VISITA NO SITE -','10:02:45','VISITANTE','/novo_visu/inicio.php',487),
 (512,'127.0.0.1','01/12/2010','VISITA NO SITE -','10:07:29','VISITANTE','/novo_visu/inicio.php',488),
 (513,'127.0.0.1','01/12/2010','VISITA NO SITE -','10:07:29','VISITANTE','/novo_visu/inicio.php',489),
 (514,'127.0.0.1','01/12/2010','VISITA NO SITE -','10:08:45','VISITANTE','/novo_visu/inicio.php',490);
INSERT INTO `log_user_event` (`id`,`IP`,`DATA`,`EVENTO`,`HORA`,`USUARIO`,`ARQUIVO`,`QTD`) VALUES 
 (515,'127.0.0.1','01/12/2010','VISITA NO SITE -','10:08:45','VISITANTE','/novo_visu/inicio.php',491),
 (516,'127.0.0.1','01/12/2010','VISITA NO SITE -','10:09:37','VISITANTE','/novo_visu/inicio.php',492),
 (517,'127.0.0.1','01/12/2010','VISITA NO SITE -','10:09:37','VISITANTE','/novo_visu/inicio.php',493),
 (518,'127.0.0.1','01/12/2010','VISITA NO SITE -','10:10:15','VISITANTE','/novo_visu/inicio.php',494),
 (519,'127.0.0.1','01/12/2010','VISITA NO SITE -','10:10:15','VISITANTE','/novo_visu/inicio.php',495),
 (520,'127.0.0.1','01/12/2010','VISITA NO SITE -','10:11:14','VISITANTE','/novo_visu/inicio.php',496),
 (521,'127.0.0.1','01/12/2010','VISITA NO SITE -','10:11:14','VISITANTE','/novo_visu/inicio.php',497),
 (522,'192.168.1.44','01/12/2010','VISITA NO SITE -','10:11:51','VISITANTE','/novo_visu/inicio.php',498),
 (523,'192.168.1.44','01/12/2010','VISITA NO SITE -','10:11:51','VISITANTE','/novo_visu/inicio.php',499),
 (524,'127.0.0.1','01/12/2010','VISITA NO SITE -','10:12:59','VISITANTE','/novo_visu/inicio.php',500);
INSERT INTO `log_user_event` (`id`,`IP`,`DATA`,`EVENTO`,`HORA`,`USUARIO`,`ARQUIVO`,`QTD`) VALUES 
 (525,'127.0.0.1','01/12/2010','VISITA NO SITE -','10:12:59','VISITANTE','/novo_visu/inicio.php',501),
 (526,'127.0.0.1','01/12/2010','VISITA NO SITE -','10:15:38','VISITANTE','/novo_visu/inicio.php',502),
 (527,'127.0.0.1','01/12/2010','VISITA NO SITE -','10:15:38','VISITANTE','/novo_visu/inicio.php',503),
 (528,'192.168.1.44','01/12/2010','VISITA NO SITE -','10:15:56','VISITANTE','/novo_visu/inicio.php',504),
 (529,'192.168.1.44','01/12/2010','VISITA NO SITE -','10:15:56','VISITANTE','/novo_visu/inicio.php',505),
 (530,'127.0.0.1','01/12/2010','VISITA NO SITE -','10:20:13','VISITANTE','/novo_visu/inicio.php',506),
 (531,'127.0.0.1','01/12/2010','VISITA NO SITE -','10:20:14','VISITANTE','/novo_visu/inicio.php',507),
 (532,'127.0.0.1','01/12/2010','VISITA NO SITE -','10:21:03','VISITANTE','/novo_visu/inicio.php',508),
 (533,'127.0.0.1','01/12/2010','VISITA NO SITE -','10:21:03','VISITANTE','/novo_visu/inicio.php',509),
 (534,'127.0.0.1','01/12/2010','VISITA NO SITE -','10:58:56','VISITANTE','/novo_visu/inicio.php',510);
INSERT INTO `log_user_event` (`id`,`IP`,`DATA`,`EVENTO`,`HORA`,`USUARIO`,`ARQUIVO`,`QTD`) VALUES 
 (535,'127.0.0.1','01/12/2010','VISITA NO SITE -','10:58:56','VISITANTE','/novo_visu/inicio.php',511),
 (536,'127.0.0.1','01/12/2010','VISITA NO SITE -','11:00:29','VISITANTE','/novo_visu/inicio.php',512),
 (537,'127.0.0.1','01/12/2010','VISITA NO SITE -','11:00:30','VISITANTE','/novo_visu/inicio.php',513),
 (538,'127.0.0.1','01/12/2010','VISITA NO SITE -','11:01:41','VISITANTE','/novo_visu/inicio.php',514),
 (539,'127.0.0.1','01/12/2010','VISITA NO SITE -','11:01:41','VISITANTE','/novo_visu/inicio.php',515),
 (540,'127.0.0.1','01/12/2010','VISITA NO SITE -','11:02:03','VISITANTE','/novo_visu/inicio.php',516),
 (541,'127.0.0.1','01/12/2010','VISITA NO SITE -','11:02:04','VISITANTE','/novo_visu/inicio.php',517),
 (542,'127.0.0.1','01/12/2010','VISITA NO SITE -','11:02:35','VISITANTE','/novo_visu/inicio.php',518),
 (543,'127.0.0.1','01/12/2010','VISITA NO SITE -','11:02:35','VISITANTE','/novo_visu/inicio.php',519),
 (544,'127.0.0.1','01/12/2010','VISITA NO SITE -','11:02:59','VISITANTE','/novo_visu/inicio.php',520);
INSERT INTO `log_user_event` (`id`,`IP`,`DATA`,`EVENTO`,`HORA`,`USUARIO`,`ARQUIVO`,`QTD`) VALUES 
 (545,'127.0.0.1','01/12/2010','VISITA NO SITE -','11:02:59','VISITANTE','/novo_visu/inicio.php',521),
 (546,'127.0.0.1','01/12/2010','VISITA NO SITE -','11:03:20','VISITANTE','/novo_visu/inicio.php',522),
 (547,'127.0.0.1','01/12/2010','VISITA NO SITE -','11:03:20','VISITANTE','/novo_visu/inicio.php',523),
 (548,'127.0.0.1','01/12/2010','VISITA NO SITE -','11:04:09','VISITANTE','/novo_visu/inicio.php',524),
 (549,'127.0.0.1','01/12/2010','VISITA NO SITE -','11:04:09','VISITANTE','/novo_visu/inicio.php',525),
 (550,'127.0.0.1','01/12/2010','VISITA NO SITE -','11:04:29','VISITANTE','/novo_visu/inicio.php',526),
 (551,'127.0.0.1','01/12/2010','VISITA NO SITE -','11:04:29','VISITANTE','/novo_visu/inicio.php',527),
 (552,'127.0.0.1','01/12/2010','VISITA NO SITE -','11:07:14','VISITANTE','/novo_visu/inicio.php',528),
 (553,'127.0.0.1','01/12/2010','VISITA NO SITE -','11:07:14','VISITANTE','/novo_visu/inicio.php',529),
 (554,'127.0.0.1','01/12/2010','VISITA NO SITE -','11:08:11','HOLODEK','/novo_visu/inicio.php',530);
INSERT INTO `log_user_event` (`id`,`IP`,`DATA`,`EVENTO`,`HORA`,`USUARIO`,`ARQUIVO`,`QTD`) VALUES 
 (555,'127.0.0.1','01/12/2010','VISITA NO SITE -','11:14:38','VISITANTE','/novo_visu/inicio.php',531),
 (556,'127.0.0.1','01/12/2010','VISITA NO SITE -','11:14:39','VISITANTE','/novo_visu/inicio.php',532),
 (557,'127.0.0.1','01/12/2010','VISITA NO SITE -','11:17:23','VISITANTE','/novo_visu/inicio.php',533),
 (558,'127.0.0.1','01/12/2010','VISITA NO SITE -','11:17:24','VISITANTE','/novo_visu/inicio.php',534),
 (559,'127.0.0.1','01/12/2010','VISITA NO SITE -','11:17:50','VISITANTE','/novo_visu/inicio.php',535),
 (560,'127.0.0.1','01/12/2010','VISITA NO SITE -','11:17:50','VISITANTE','/novo_visu/inicio.php',536),
 (561,'127.0.0.1','01/12/2010','VISITA NO SITE -','11:18:49','VISITANTE','/novo_visu/inicio.php',537),
 (562,'127.0.0.1','01/12/2010','VISITA NO SITE -','11:18:49','VISITANTE','/novo_visu/inicio.php',538),
 (563,'127.0.0.1','01/12/2010','VISITA NO SITE -','11:20:02','VISITANTE','/novo_visu/inicio.php',539),
 (564,'127.0.0.1','01/12/2010','VISITA NO SITE -','11:20:02','VISITANTE','/novo_visu/inicio.php',540);
INSERT INTO `log_user_event` (`id`,`IP`,`DATA`,`EVENTO`,`HORA`,`USUARIO`,`ARQUIVO`,`QTD`) VALUES 
 (565,'127.0.0.1','01/12/2010','VISITA NO SITE -','11:20:58','VISITANTE','/novo_visu/inicio.php',541),
 (566,'127.0.0.1','01/12/2010','VISITA NO SITE -','11:20:58','VISITANTE','/novo_visu/inicio.php',542),
 (567,'127.0.0.1','01/12/2010','VISITA NO SITE -','11:23:11','VISITANTE','/novo_visu/inicio.php',543),
 (568,'127.0.0.1','01/12/2010','VISITA NO SITE -','11:23:11','VISITANTE','/novo_visu/inicio.php',544),
 (569,'127.0.0.1','01/12/2010','VISITA NO SITE -','11:24:14','VISITANTE','/novo_visu/inicio.php',545),
 (570,'127.0.0.1','01/12/2010','VISITA NO SITE -','11:24:14','VISITANTE','/novo_visu/inicio.php',546),
 (571,'127.0.0.1','01/12/2010','VISITA NO SITE -','11:24:59','VISITANTE','/novo_visu/inicio.php',547),
 (572,'127.0.0.1','01/12/2010','VISITA NO SITE -','11:24:59','VISITANTE','/novo_visu/inicio.php',548),
 (573,'127.0.0.1','01/12/2010','VISITA NO SITE -','11:25:16','VISITANTE','/novo_visu/inicio.php',549),
 (574,'127.0.0.1','01/12/2010','VISITA NO SITE -','11:25:16','VISITANTE','/novo_visu/inicio.php',550);
INSERT INTO `log_user_event` (`id`,`IP`,`DATA`,`EVENTO`,`HORA`,`USUARIO`,`ARQUIVO`,`QTD`) VALUES 
 (575,'127.0.0.1','01/12/2010','VISITA NO SITE -','11:26:30','VISITANTE','/novo_visu/inicio.php',551),
 (576,'127.0.0.1','01/12/2010','VISITA NO SITE -','11:26:31','VISITANTE','/novo_visu/inicio.php',552),
 (577,'127.0.0.1','01/12/2010','VISITA NO SITE -','11:29:39','VISITANTE','/novo_visu/inicio.php',553),
 (578,'127.0.0.1','01/12/2010','VISITA NO SITE -','11:29:39','VISITANTE','/novo_visu/inicio.php',554),
 (579,'127.0.0.1','01/12/2010','VISITA NO SITE -','11:30:22','VISITANTE','/novo_visu/inicio.php',555),
 (580,'127.0.0.1','01/12/2010','VISITA NO SITE -','11:30:22','VISITANTE','/novo_visu/inicio.php',556),
 (581,'127.0.0.1','01/12/2010','VISITA NO SITE -','11:31:21','VISITANTE','/novo_visu/inicio.php',557),
 (582,'127.0.0.1','01/12/2010','VISITA NO SITE -','11:31:21','VISITANTE','/novo_visu/inicio.php',558),
 (583,'127.0.0.1','01/12/2010','VISITA NO SITE -','11:31:42','VISITANTE','/novo_visu/inicio.php',559),
 (584,'127.0.0.1','01/12/2010','VISITA NO SITE -','11:31:43','VISITANTE','/novo_visu/inicio.php',560);
INSERT INTO `log_user_event` (`id`,`IP`,`DATA`,`EVENTO`,`HORA`,`USUARIO`,`ARQUIVO`,`QTD`) VALUES 
 (585,'127.0.0.1','01/12/2010','VISITA NO SITE -','11:32:24','VISITANTE','/novo_visu/inicio.php',561),
 (586,'127.0.0.1','01/12/2010','VISITA NO SITE -','11:32:24','VISITANTE','/novo_visu/inicio.php',562),
 (587,'127.0.0.1','01/12/2010','VISITA NO SITE -','11:33:08','VISITANTE','/novo_visu/inicio.php',563),
 (588,'127.0.0.1','01/12/2010','VISITA NO SITE -','11:33:08','VISITANTE','/novo_visu/inicio.php',564),
 (589,'127.0.0.1','01/12/2010','VISITA NO SITE -','11:34:18','VISITANTE','/novo_visu/inicio.php',565),
 (590,'127.0.0.1','01/12/2010','VISITA NO SITE -','11:34:18','VISITANTE','/novo_visu/inicio.php',566),
 (591,'127.0.0.1','01/12/2010','VISITA NO SITE -','11:34:51','VISITANTE','/novo_visu/inicio.php',567),
 (592,'127.0.0.1','01/12/2010','VISITA NO SITE -','11:34:51','VISITANTE','/novo_visu/inicio.php',568),
 (593,'127.0.0.1','01/12/2010','VISITA NO SITE -','11:35:26','VISITANTE','/novo_visu/inicio.php',569),
 (594,'127.0.0.1','01/12/2010','VISITA NO SITE -','11:35:26','VISITANTE','/novo_visu/inicio.php',570);
INSERT INTO `log_user_event` (`id`,`IP`,`DATA`,`EVENTO`,`HORA`,`USUARIO`,`ARQUIVO`,`QTD`) VALUES 
 (595,'127.0.0.1','01/12/2010','VISITA NO SITE -','11:36:27','VISITANTE','/novo_visu/inicio.php',571),
 (596,'127.0.0.1','01/12/2010','VISITA NO SITE -','11:36:27','VISITANTE','/novo_visu/inicio.php',572),
 (597,'127.0.0.1','01/12/2010','VISITA NO SITE -','11:37:21','VISITANTE','/novo_visu/inicio.php',573),
 (598,'127.0.0.1','01/12/2010','VISITA NO SITE -','11:37:21','VISITANTE','/novo_visu/inicio.php',574),
 (599,'127.0.0.1','01/12/2010','VISITA NO SITE -','11:37:54','VISITANTE','/novo_visu/inicio.php',575),
 (600,'127.0.0.1','01/12/2010','VISITA NO SITE -','11:37:54','VISITANTE','/novo_visu/inicio.php',576),
 (601,'127.0.0.1','01/12/2010','VISITA NO SITE -','11:39:38','VISITANTE','/novo_visu/inicio.php',577),
 (602,'127.0.0.1','01/12/2010','VISITA NO SITE -','11:39:38','VISITANTE','/novo_visu/inicio.php',578),
 (603,'127.0.0.1','01/12/2010','VISITA NO SITE -','11:41:05','VISITANTE','/novo_visu/inicio.php',579),
 (604,'127.0.0.1','01/12/2010','VISITA NO SITE -','11:41:06','VISITANTE','/novo_visu/inicio.php',580);
INSERT INTO `log_user_event` (`id`,`IP`,`DATA`,`EVENTO`,`HORA`,`USUARIO`,`ARQUIVO`,`QTD`) VALUES 
 (605,'127.0.0.1','01/12/2010','VISITA NO SITE -','11:45:01','VISITANTE','/novo_visu/inicio.php',581),
 (606,'127.0.0.1','01/12/2010','VISITA NO SITE -','11:45:02','VISITANTE','/novo_visu/inicio.php',582),
 (607,'127.0.0.1','01/12/2010','VISITA NO SITE -','11:46:27','VISITANTE','/novo_visu/inicio.php',583),
 (608,'127.0.0.1','01/12/2010','VISITA NO SITE -','11:46:27','VISITANTE','/novo_visu/inicio.php',584),
 (609,'127.0.0.1','01/12/2010','VISITA NO SITE -','11:47:11','VISITANTE','/novo_visu/inicio.php',585),
 (610,'127.0.0.1','01/12/2010','VISITA NO SITE -','11:47:11','VISITANTE','/novo_visu/inicio.php',586),
 (611,'127.0.0.1','01/12/2010','VISITA NO SITE -','11:47:53','VISITANTE','/novo_visu/inicio.php',587),
 (612,'127.0.0.1','01/12/2010','VISITA NO SITE -','11:47:53','VISITANTE','/novo_visu/inicio.php',588),
 (613,'127.0.0.1','01/12/2010','VISITA NO SITE -','11:48:55','VISITANTE','/novo_visu/inicio.php',589),
 (614,'127.0.0.1','01/12/2010','VISITA NO SITE -','11:48:55','VISITANTE','/novo_visu/inicio.php',590);
INSERT INTO `log_user_event` (`id`,`IP`,`DATA`,`EVENTO`,`HORA`,`USUARIO`,`ARQUIVO`,`QTD`) VALUES 
 (615,'127.0.0.1','01/12/2010','VISITA NO SITE -','11:51:19','VISITANTE','/novo_visu/inicio.php',591),
 (616,'127.0.0.1','01/12/2010','VISITA NO SITE -','11:51:19','VISITANTE','/novo_visu/inicio.php',592),
 (617,'127.0.0.1','01/12/2010','VISITA NO SITE -','11:52:29','VISITANTE','/novo_visu/inicio.php',593),
 (618,'127.0.0.1','01/12/2010','VISITA NO SITE -','11:52:30','VISITANTE','/novo_visu/inicio.php',594),
 (619,'127.0.0.1','01/12/2010','VISITA NO SITE -','11:53:12','VISITANTE','/novo_visu/inicio.php',595),
 (620,'127.0.0.1','01/12/2010','VISITA NO SITE -','11:53:12','VISITANTE','/novo_visu/inicio.php',596),
 (621,'127.0.0.1','01/12/2010','VISITA NO SITE -','11:54:35','VISITANTE','/novo_visu/inicio.php',597),
 (622,'127.0.0.1','01/12/2010','VISITA NO SITE -','11:54:36','VISITANTE','/novo_visu/inicio.php',598),
 (623,'127.0.0.1','01/12/2010','VISITA NO SITE -','11:55:36','VISITANTE','/novo_visu/inicio.php',599),
 (624,'127.0.0.1','01/12/2010','VISITA NO SITE -','11:55:36','VISITANTE','/novo_visu/inicio.php',600);
INSERT INTO `log_user_event` (`id`,`IP`,`DATA`,`EVENTO`,`HORA`,`USUARIO`,`ARQUIVO`,`QTD`) VALUES 
 (625,'127.0.0.1','01/12/2010','VISITA NO SITE -','11:57:18','VISITANTE','/novo_visu/inicio.php',601),
 (626,'127.0.0.1','01/12/2010','VISITA NO SITE -','11:57:18','VISITANTE','/novo_visu/inicio.php',602),
 (627,'127.0.0.1','01/12/2010','VISITA NO SITE -','11:59:25','VISITANTE','/novo_visu/inicio.php',603),
 (628,'127.0.0.1','01/12/2010','VISITA NO SITE -','11:59:25','VISITANTE','/novo_visu/inicio.php',604),
 (629,'127.0.0.1','01/12/2010','VISITA NO SITE -','12:00:43','VISITANTE','/novo_visu/inicio.php',605),
 (630,'127.0.0.1','01/12/2010','VISITA NO SITE -','12:00:43','VISITANTE','/novo_visu/inicio.php',606),
 (631,'127.0.0.1','01/12/2010','VISITA NO SITE -','12:01:55','VISITANTE','/novo_visu/inicio.php',607),
 (632,'127.0.0.1','01/12/2010','VISITA NO SITE -','12:01:55','VISITANTE','/novo_visu/inicio.php',608),
 (633,'127.0.0.1','01/12/2010','VISITA NO SITE -','12:02:29','VISITANTE','/novo_visu/inicio.php',609),
 (634,'127.0.0.1','01/12/2010','VISITA NO SITE -','12:02:30','VISITANTE','/novo_visu/inicio.php',610);
INSERT INTO `log_user_event` (`id`,`IP`,`DATA`,`EVENTO`,`HORA`,`USUARIO`,`ARQUIVO`,`QTD`) VALUES 
 (635,'127.0.0.1','01/12/2010','VISITA NO SITE -','12:02:50','VISITANTE','/novo_visu/inicio.php',611),
 (636,'127.0.0.1','01/12/2010','VISITA NO SITE -','12:02:50','VISITANTE','/novo_visu/inicio.php',612),
 (637,'127.0.0.1','01/12/2010','VISITA NO SITE -','12:04:07','VISITANTE','/novo_visu/inicio.php',613),
 (638,'127.0.0.1','01/12/2010','VISITA NO SITE -','12:04:07','VISITANTE','/novo_visu/inicio.php',614),
 (639,'127.0.0.1','01/12/2010','VISITA NO SITE -','12:06:30','VISITANTE','/novo_visu/inicio.php',615),
 (640,'127.0.0.1','01/12/2010','VISITA NO SITE -','12:06:30','VISITANTE','/novo_visu/inicio.php',616),
 (641,'127.0.0.1','01/12/2010','VISITA NO SITE -','12:09:31','VISITANTE','/novo_visu/inicio.php',617),
 (642,'127.0.0.1','01/12/2010','VISITA NO SITE -','12:09:31','VISITANTE','/novo_visu/inicio.php',618),
 (643,'127.0.0.1','01/12/2010','VISITA NO SITE -','12:15:11','VISITANTE','/novo_visu/inicio.php',619),
 (644,'127.0.0.1','01/12/2010','VISITA NO SITE -','12:15:12','VISITANTE','/novo_visu/inicio.php',620);
INSERT INTO `log_user_event` (`id`,`IP`,`DATA`,`EVENTO`,`HORA`,`USUARIO`,`ARQUIVO`,`QTD`) VALUES 
 (645,'127.0.0.1','01/12/2010','VISITA NO SITE -','12:15:25','VISITANTE','/novo_visu/inicio.php',621),
 (646,'127.0.0.1','01/12/2010','VISITA NO SITE -','12:15:25','VISITANTE','/novo_visu/inicio.php',622),
 (647,'127.0.0.1','01/12/2010','VISITA NO SITE -','12:15:58','VISITANTE','/novo_visu/inicio.php',623),
 (648,'127.0.0.1','01/12/2010','VISITA NO SITE -','12:15:59','VISITANTE','/novo_visu/inicio.php',624),
 (649,'127.0.0.1','01/12/2010','VISITA NO SITE -','12:16:58','VISITANTE','/novo_visu/inicio.php',625),
 (650,'127.0.0.1','01/12/2010','VISITA NO SITE -','12:16:59','VISITANTE','/novo_visu/inicio.php',626),
 (651,'127.0.0.1','01/12/2010','VISITA NO SITE -','12:18:07','VISITANTE','/novo_visu/inicio.php',627),
 (652,'127.0.0.1','01/12/2010','VISITA NO SITE -','12:18:07','VISITANTE','/novo_visu/inicio.php',628),
 (653,'127.0.0.1','01/12/2010','VISITA NO SITE -','12:18:53','VISITANTE','/novo_visu/inicio.php',629),
 (654,'127.0.0.1','01/12/2010','VISITA NO SITE -','12:18:53','VISITANTE','/novo_visu/inicio.php',630);
INSERT INTO `log_user_event` (`id`,`IP`,`DATA`,`EVENTO`,`HORA`,`USUARIO`,`ARQUIVO`,`QTD`) VALUES 
 (655,'127.0.0.1','01/12/2010','VISITA NO SITE -','12:20:48','VISITANTE','/novo_visu/inicio.php',631),
 (656,'127.0.0.1','01/12/2010','VISITA NO SITE -','12:20:48','VISITANTE','/novo_visu/inicio.php',632),
 (657,'127.0.0.1','01/12/2010','VISITA NO SITE -','12:22:18','VISITANTE','/novo_visu/inicio.php',633),
 (658,'127.0.0.1','01/12/2010','VISITA NO SITE -','12:22:18','VISITANTE','/novo_visu/inicio.php',634),
 (659,'127.0.0.1','01/12/2010','VISITA NO SITE -','12:24:48','VISITANTE','/novo_visu/inicio.php',635),
 (660,'127.0.0.1','01/12/2010','VISITA NO SITE -','12:24:48','VISITANTE','/novo_visu/inicio.php',636),
 (661,'127.0.0.1','01/12/2010','VISITA NO SITE -','12:26:50','VISITANTE','/novo_visu/inicio.php',637),
 (662,'127.0.0.1','01/12/2010','VISITA NO SITE -','12:26:50','VISITANTE','/novo_visu/inicio.php',638),
 (663,'127.0.0.1','01/12/2010','VISITA NO SITE -','12:28:00','VISITANTE','/novo_visu/inicio.php',639),
 (664,'127.0.0.1','01/12/2010','VISITA NO SITE -','12:28:00','VISITANTE','/novo_visu/inicio.php',640);
INSERT INTO `log_user_event` (`id`,`IP`,`DATA`,`EVENTO`,`HORA`,`USUARIO`,`ARQUIVO`,`QTD`) VALUES 
 (665,'192.168.1.44','01/12/2010','VISITA NO SITE -','12:33:31','VISITANTE','/novo_visu/inicio.php',641),
 (666,'192.168.1.44','01/12/2010','VISITA NO SITE -','12:33:32','VISITANTE','/novo_visu/inicio.php',642),
 (667,'192.168.1.44','01/12/2010','VISITA NO SITE -','13:12:32','VISITANTE','/novo_visu/inicio.php',643),
 (668,'192.168.1.44','01/12/2010','VISITA NO SITE -','13:12:32','VISITANTE','/novo_visu/inicio.php',644),
 (669,'192.168.1.44','01/12/2010','VISITA NO SITE -','13:12:43','VISITANTE','/novo_visu/inicio.php',645),
 (670,'192.168.1.44','01/12/2010','VISITA NO SITE -','13:12:43','VISITANTE','/novo_visu/inicio.php',646),
 (671,'192.168.1.44','01/12/2010','VISITA NO SITE -','13:13:11','VISITANTE','/novo_visu/inicio.php',647),
 (672,'192.168.1.44','01/12/2010','VISITA NO SITE -','13:13:12','VISITANTE','/novo_visu/inicio.php',648),
 (673,'192.168.1.44','01/12/2010','VISITA NO SITE -','13:13:25','VISITANTE','/novo_visu/inicio.php',649),
 (674,'192.168.1.44','01/12/2010','VISITA NO SITE -','13:13:25','VISITANTE','/novo_visu/inicio.php',650);
INSERT INTO `log_user_event` (`id`,`IP`,`DATA`,`EVENTO`,`HORA`,`USUARIO`,`ARQUIVO`,`QTD`) VALUES 
 (675,'192.168.1.44','01/12/2010','VISITA NO SITE -','13:14:20','VISITANTE','/novo_visu/inicio.php',651),
 (676,'192.168.1.44','01/12/2010','VISITA NO SITE -','13:14:21','VISITANTE','/novo_visu/inicio.php',652),
 (677,'192.168.1.44','01/12/2010','VISITA NO SITE -','13:14:31','VISITANTE','/novo_visu/inicio.php',653),
 (678,'192.168.1.44','01/12/2010','VISITA NO SITE -','13:14:31','VISITANTE','/novo_visu/inicio.php',654),
 (679,'192.168.1.44','01/12/2010','VISITA NO SITE -','13:14:56','VISITANTE','/novo_visu/inicio.php',655),
 (680,'192.168.1.44','01/12/2010','VISITA NO SITE -','13:14:56','VISITANTE','/novo_visu/inicio.php',656),
 (681,'192.168.1.44','01/12/2010','VISITA NO SITE -','13:15:11','VISITANTE','/novo_visu/inicio.php',657),
 (682,'192.168.1.44','01/12/2010','VISITA NO SITE -','13:15:11','VISITANTE','/novo_visu/inicio.php',658),
 (683,'192.168.1.44','01/12/2010','VISITA NO SITE -','13:16:12','VISITANTE','/novo_visu/inicio.php',659),
 (684,'192.168.1.44','01/12/2010','VISITA NO SITE -','13:16:12','VISITANTE','/novo_visu/inicio.php',660);
INSERT INTO `log_user_event` (`id`,`IP`,`DATA`,`EVENTO`,`HORA`,`USUARIO`,`ARQUIVO`,`QTD`) VALUES 
 (685,'192.168.1.44','01/12/2010','VISITA NO SITE -','13:18:05','VISITANTE','/novo_visu/inicio.php',661),
 (686,'192.168.1.44','01/12/2010','VISITA NO SITE -','13:18:05','VISITANTE','/novo_visu/inicio.php',662),
 (687,'192.168.1.44','01/12/2010','VISITA NO SITE -','13:18:50','VISITANTE','/novo_visu/inicio.php',663),
 (688,'192.168.1.44','01/12/2010','VISITA NO SITE -','13:18:51','VISITANTE','/novo_visu/inicio.php',664),
 (689,'192.168.1.44','01/12/2010','VISITA NO SITE -','13:19:51','VISITANTE','/novo_visu/inicio.php',665),
 (690,'192.168.1.44','01/12/2010','VISITA NO SITE -','13:19:51','VISITANTE','/novo_visu/inicio.php',666),
 (691,'192.168.1.44','01/12/2010','VISITA NO SITE -','13:19:59','VISITANTE','/novo_visu/inicio.php',667),
 (692,'192.168.1.44','01/12/2010','VISITA NO SITE -','13:19:59','VISITANTE','/novo_visu/inicio.php',668),
 (693,'192.168.1.44','01/12/2010','VISITA NO SITE -','13:20:25','VISITANTE','/novo_visu/inicio.php',669),
 (694,'192.168.1.44','01/12/2010','VISITA NO SITE -','13:20:25','VISITANTE','/novo_visu/inicio.php',670);
INSERT INTO `log_user_event` (`id`,`IP`,`DATA`,`EVENTO`,`HORA`,`USUARIO`,`ARQUIVO`,`QTD`) VALUES 
 (695,'192.168.1.44','01/12/2010','VISITA NO SITE -','13:20:39','VISITANTE','/novo_visu/inicio.php',671),
 (696,'192.168.1.44','01/12/2010','VISITA NO SITE -','13:20:40','VISITANTE','/novo_visu/inicio.php',672),
 (697,'192.168.1.44','01/12/2010','VISITA NO SITE -','13:20:52','VISITANTE','/novo_visu/inicio.php',673),
 (698,'192.168.1.44','01/12/2010','VISITA NO SITE -','13:20:52','VISITANTE','/novo_visu/inicio.php',674),
 (699,'192.168.1.44','01/12/2010','VISITA NO SITE -','13:21:05','VISITANTE','/novo_visu/inicio.php',675),
 (700,'192.168.1.44','01/12/2010','VISITA NO SITE -','13:21:06','VISITANTE','/novo_visu/inicio.php',676),
 (701,'192.168.1.44','01/12/2010','VISITA NO SITE -','13:21:15','VISITANTE','/novo_visu/inicio.php',677),
 (702,'192.168.1.44','01/12/2010','VISITA NO SITE -','13:21:16','VISITANTE','/novo_visu/inicio.php',678),
 (703,'192.168.1.44','01/12/2010','VISITA NO SITE -','13:21:39','VISITANTE','/novo_visu/inicio.php',679),
 (704,'192.168.1.44','01/12/2010','VISITA NO SITE -','13:21:39','VISITANTE','/novo_visu/inicio.php',680);
INSERT INTO `log_user_event` (`id`,`IP`,`DATA`,`EVENTO`,`HORA`,`USUARIO`,`ARQUIVO`,`QTD`) VALUES 
 (705,'192.168.1.44','01/12/2010','VISITA NO SITE -','13:26:33','VISITANTE','/novo_visu/inicio.php',681),
 (706,'192.168.1.44','01/12/2010','VISITA NO SITE -','13:26:34','VISITANTE','/novo_visu/inicio.php',682),
 (707,'192.168.1.44','01/12/2010','VISITA NO SITE -','13:26:51','VISITANTE','/novo_visu/inicio.php',683),
 (708,'192.168.1.44','01/12/2010','VISITA NO SITE -','13:26:58','VISITANTE','/novo_visu/inicio.php',684),
 (709,'127.0.0.1','01/12/2010','VISITA NO SITE -','13:28:45','VISITANTE','/novo_visu/inicio.php',685),
 (710,'127.0.0.1','01/12/2010','VISITA NO SITE -','13:28:45','VISITANTE','/novo_visu/inicio.php',686),
 (711,'127.0.0.1','01/12/2010','VISITA NO SITE -','13:29:20','VISITANTE','/novo_visu/inicio.php',687),
 (712,'192.168.1.44','01/12/2010','VISITA NO SITE -','13:32:20','VISITANTE','/novo_visu/inicio.php',688),
 (713,'192.168.1.44','01/12/2010','VISITA NO SITE -','13:34:08','VISITANTE','/novo_visu/inicio.php',689),
 (714,'192.168.1.44','01/12/2010','VISITA NO SITE -','13:34:16','VISITANTE','/novo_visu/inicio.php',690);
INSERT INTO `log_user_event` (`id`,`IP`,`DATA`,`EVENTO`,`HORA`,`USUARIO`,`ARQUIVO`,`QTD`) VALUES 
 (715,'192.168.1.44','01/12/2010','VISITA NO SITE -','13:34:30','VISITANTE','/novo_visu/inicio.php',691),
 (716,'192.168.1.44','01/12/2010','VISITA NO SITE -','13:34:43','VISITANTE','/novo_visu/inicio.php',692),
 (717,'192.168.1.44','01/12/2010','VISITA NO SITE -','13:34:43','VISITANTE','/novo_visu/inicio.php',693),
 (718,'127.0.0.1','01/12/2010','VISITA NO SITE -','13:35:11','VISITANTE','/novo_visu/inicio.php',694),
 (719,'127.0.0.1','01/12/2010','VISITA NO SITE -','13:35:37','VISITANTE','/novo_visu/inicio.php',695),
 (720,'127.0.0.1','01/12/2010','VISITA NO SITE -','13:35:38','VISITANTE','/novo_visu/inicio.php',696),
 (721,'127.0.0.1','01/12/2010','VISITA NO SITE -','16:37:24','VISITANTE','/novo_visu/inicio.php',697),
 (722,'127.0.0.1','01/12/2010','VISITA NO SITE -','16:37:25','VISITANTE','/novo_visu/inicio.php',698),
 (723,'127.0.0.1','01/12/2010','VISITA NO SITE -','16:48:30','VISITANTE','/novo_visu/inicio.php',699),
 (724,'127.0.0.1','01/12/2010','VISITA NO SITE -','16:50:54','VISITANTE','/novo_visu/inicio.php',700);
INSERT INTO `log_user_event` (`id`,`IP`,`DATA`,`EVENTO`,`HORA`,`USUARIO`,`ARQUIVO`,`QTD`) VALUES 
 (725,'127.0.0.1','01/12/2010','VISITA NO SITE -','17:01:26','VISITANTE','/novo_visu/inicio.php',701),
 (726,'127.0.0.1','01/12/2010','VISITA NO SITE -','17:01:26','VISITANTE','/novo_visu/inicio.php',702),
 (727,'127.0.0.1','01/12/2010','VISITA NO SITE -','17:03:17','VISITANTE','/novo_visu/inicio.php',703),
 (728,'127.0.0.1','01/12/2010','VISITA NO SITE -','17:03:17','VISITANTE','/novo_visu/inicio.php',704),
 (729,'127.0.0.1','01/12/2010','VISITA NO SITE -','17:06:47','VISITANTE','/novo_visu/inicio.php',705),
 (730,'127.0.0.1','01/12/2010','VISITA NO SITE -','17:06:48','VISITANTE','/novo_visu/inicio.php',706),
 (731,'127.0.0.1','01/12/2010','VISITA NO SITE -','17:09:52','VISITANTE','/novo_visu/inicio.php',707),
 (732,'127.0.0.1','01/12/2010','VISITA NO SITE -','17:09:53','VISITANTE','/novo_visu/inicio.php',708),
 (733,'127.0.0.1','01/12/2010','VISITA NO SITE -','17:10:05','VISITANTE','/novo_visu/inicio.php',709),
 (734,'127.0.0.1','01/12/2010','VISITA NO SITE -','17:10:06','VISITANTE','/novo_visu/inicio.php',710);
INSERT INTO `log_user_event` (`id`,`IP`,`DATA`,`EVENTO`,`HORA`,`USUARIO`,`ARQUIVO`,`QTD`) VALUES 
 (735,'127.0.0.1','01/12/2010','VISITA NO SITE -','17:10:17','VISITANTE','/novo_visu/inicio.php',711),
 (736,'127.0.0.1','01/12/2010','VISITA NO SITE -','17:10:17','VISITANTE','/novo_visu/inicio.php',712),
 (737,'127.0.0.1','01/12/2010','VISITA NO SITE -','17:11:28','VISITANTE','/novo_visu/inicio.php',713),
 (738,'127.0.0.1','01/12/2010','VISITA NO SITE -','17:11:29','VISITANTE','/novo_visu/inicio.php',714),
 (739,'127.0.0.1','01/12/2010','VISITA NO SITE -','17:12:19','VISITANTE','/novo_visu/inicio.php',715),
 (740,'127.0.0.1','01/12/2010','VISITA NO SITE -','17:12:19','VISITANTE','/novo_visu/inicio.php',716),
 (741,'127.0.0.1','01/12/2010','VISITA NO SITE -','17:14:43','VISITANTE','/novo_visu/inicio.php',717),
 (742,'127.0.0.1','01/12/2010','VISITA NO SITE -','17:14:43','VISITANTE','/novo_visu/inicio.php',718),
 (743,'127.0.0.1','01/12/2010','VISITA NO SITE -','17:17:09','VISITANTE','/novo_visu/inicio.php',719),
 (744,'127.0.0.1','01/12/2010','VISITA NO SITE -','17:17:09','VISITANTE','/novo_visu/inicio.php',720);
INSERT INTO `log_user_event` (`id`,`IP`,`DATA`,`EVENTO`,`HORA`,`USUARIO`,`ARQUIVO`,`QTD`) VALUES 
 (745,'127.0.0.1','01/12/2010','VISITA NO SITE -','17:19:55','VISITANTE','/novo_visu/inicio.php',721),
 (746,'127.0.0.1','01/12/2010','VISITA NO SITE -','17:19:55','VISITANTE','/novo_visu/inicio.php',722),
 (747,'127.0.0.1','01/12/2010','VISITA NO SITE -','17:21:51','VISITANTE','/novo_visu/inicio.php',723),
 (748,'127.0.0.1','01/12/2010','VISITA NO SITE -','17:21:52','VISITANTE','/novo_visu/inicio.php',724),
 (749,'127.0.0.1','01/12/2010','VISITA NO SITE -','17:23:41','VISITANTE','/novo_visu/inicio.php',725),
 (750,'127.0.0.1','01/12/2010','VISITA NO SITE -','17:23:41','VISITANTE','/novo_visu/inicio.php',726),
 (751,'127.0.0.1','01/12/2010','VISITA NO SITE -','17:24:40','VISITANTE','/novo_visu/inicio.php',727),
 (752,'127.0.0.1','01/12/2010','VISITA NO SITE -','17:24:40','VISITANTE','/novo_visu/inicio.php',728),
 (753,'127.0.0.1','01/12/2010','VISITA NO SITE -','17:25:46','VISITANTE','/novo_visu/inicio.php',729),
 (754,'127.0.0.1','01/12/2010','VISITA NO SITE -','17:25:46','VISITANTE','/novo_visu/inicio.php',730);
INSERT INTO `log_user_event` (`id`,`IP`,`DATA`,`EVENTO`,`HORA`,`USUARIO`,`ARQUIVO`,`QTD`) VALUES 
 (755,'127.0.0.1','01/12/2010','VISITA NO SITE -','17:29:10','VISITANTE','/novo_visu/inicio.php',731),
 (756,'127.0.0.1','01/12/2010','VISITA NO SITE -','17:29:10','VISITANTE','/novo_visu/inicio.php',732),
 (757,'127.0.0.1','01/12/2010','VISITA NO SITE -','17:29:47','VISITANTE','/novo_visu/inicio.php',733),
 (758,'127.0.0.1','01/12/2010','VISITA NO SITE -','17:29:47','VISITANTE','/novo_visu/inicio.php',734),
 (759,'127.0.0.1','01/12/2010','VISITA NO SITE -','17:35:34','VISITANTE','/novo_visu/inicio.php',735),
 (760,'127.0.0.1','01/12/2010','VISITA NO SITE -','17:35:34','VISITANTE','/novo_visu/inicio.php',736),
 (761,'127.0.0.1','01/12/2010','VISITA NO SITE -','17:36:21','VISITANTE','/novo_visu/inicio.php',737),
 (762,'127.0.0.1','01/12/2010','VISITA NO SITE -','17:36:22','VISITANTE','/novo_visu/inicio.php',738),
 (763,'127.0.0.1','01/12/2010','VISITA NO SITE -','17:37:03','VISITANTE','/novo_visu/inicio.php',739),
 (764,'127.0.0.1','01/12/2010','VISITA NO SITE -','17:37:04','VISITANTE','/novo_visu/inicio.php',740);
INSERT INTO `log_user_event` (`id`,`IP`,`DATA`,`EVENTO`,`HORA`,`USUARIO`,`ARQUIVO`,`QTD`) VALUES 
 (765,'127.0.0.1','01/12/2010','VISITA NO SITE -','17:38:09','VISITANTE','/novo_visu/inicio.php',741),
 (766,'127.0.0.1','01/12/2010','VISITA NO SITE -','17:38:10','VISITANTE','/novo_visu/inicio.php',742),
 (767,'127.0.0.1','01/12/2010','VISITA NO SITE -','17:39:21','VISITANTE','/novo_visu/inicio.php',743),
 (768,'127.0.0.1','01/12/2010','VISITA NO SITE -','17:39:21','VISITANTE','/novo_visu/inicio.php',744),
 (769,'127.0.0.1','01/12/2010','VISITA NO SITE -','17:41:13','VISITANTE','/novo_visu/inicio.php',745),
 (770,'127.0.0.1','01/12/2010','VISITA NO SITE -','17:41:13','VISITANTE','/novo_visu/inicio.php',746),
 (771,'127.0.0.1','01/12/2010','VISITA NO SITE -','17:41:36','VISITANTE','/novo_visu/inicio.php',747),
 (772,'127.0.0.1','01/12/2010','VISITA NO SITE -','17:41:36','VISITANTE','/novo_visu/inicio.php',748),
 (773,'127.0.0.1','01/12/2010','VISITA NO SITE -','17:42:49','VISITANTE','/novo_visu/inicio.php',749),
 (774,'127.0.0.1','01/12/2010','VISITA NO SITE -','17:42:49','VISITANTE','/novo_visu/inicio.php',750);
INSERT INTO `log_user_event` (`id`,`IP`,`DATA`,`EVENTO`,`HORA`,`USUARIO`,`ARQUIVO`,`QTD`) VALUES 
 (775,'127.0.0.1','01/12/2010','VISITA NO SITE -','17:44:09','VISITANTE','/novo_visu/inicio.php',751),
 (776,'127.0.0.1','01/12/2010','VISITA NO SITE -','17:44:09','VISITANTE','/novo_visu/inicio.php',752),
 (777,'127.0.0.1','01/12/2010','VISITA NO SITE -','17:44:39','VISITANTE','/novo_visu/inicio.php',753),
 (778,'127.0.0.1','01/12/2010','VISITA NO SITE -','17:44:39','VISITANTE','/novo_visu/inicio.php',754),
 (779,'127.0.0.1','01/12/2010','VISITA NO SITE -','17:46:43','VISITANTE','/novo_visu/inicio.php',755),
 (780,'127.0.0.1','01/12/2010','VISITA NO SITE -','17:46:44','VISITANTE','/novo_visu/inicio.php',756),
 (781,'127.0.0.1','01/12/2010','VISITA NO SITE -','17:47:22','VISITANTE','/novo_visu/inicio.php',757),
 (782,'127.0.0.1','01/12/2010','VISITA NO SITE -','17:47:22','VISITANTE','/novo_visu/inicio.php',758),
 (783,'127.0.0.1','01/12/2010','VISITA NO SITE -','17:48:01','VISITANTE','/novo_visu/inicio.php',759),
 (784,'127.0.0.1','01/12/2010','VISITA NO SITE -','17:48:01','VISITANTE','/novo_visu/inicio.php',760);
INSERT INTO `log_user_event` (`id`,`IP`,`DATA`,`EVENTO`,`HORA`,`USUARIO`,`ARQUIVO`,`QTD`) VALUES 
 (785,'127.0.0.1','01/12/2010','VISITA NO SITE -','17:48:55','VISITANTE','/novo_visu/inicio.php',761),
 (786,'127.0.0.1','01/12/2010','VISITA NO SITE -','17:48:55','VISITANTE','/novo_visu/inicio.php',762),
 (787,'127.0.0.1','01/12/2010','VISITA NO SITE -','17:49:41','VISITANTE','/novo_visu/inicio.php',763),
 (788,'127.0.0.1','01/12/2010','VISITA NO SITE -','17:49:42','VISITANTE','/novo_visu/inicio.php',764),
 (789,'127.0.0.1','01/12/2010','VISITA NO SITE -','17:50:29','VISITANTE','/novo_visu/inicio.php',765),
 (790,'127.0.0.1','01/12/2010','VISITA NO SITE -','17:50:29','VISITANTE','/novo_visu/inicio.php',766),
 (791,'127.0.0.1','01/12/2010','VISITA NO SITE -','17:50:53','VISITANTE','/novo_visu/inicio.php',767),
 (792,'127.0.0.1','01/12/2010','VISITA NO SITE -','17:50:53','VISITANTE','/novo_visu/inicio.php',768),
 (793,'127.0.0.1','01/12/2010','VISITA NO SITE -','17:51:42','VISITANTE','/novo_visu/inicio.php',769),
 (794,'127.0.0.1','01/12/2010','VISITA NO SITE -','17:51:42','VISITANTE','/novo_visu/inicio.php',770);
INSERT INTO `log_user_event` (`id`,`IP`,`DATA`,`EVENTO`,`HORA`,`USUARIO`,`ARQUIVO`,`QTD`) VALUES 
 (795,'127.0.0.1','01/12/2010','VISITA NO SITE -','17:52:07','VISITANTE','/novo_visu/inicio.php',771),
 (796,'127.0.0.1','01/12/2010','VISITA NO SITE -','17:52:07','VISITANTE','/novo_visu/inicio.php',772),
 (797,'127.0.0.1','01/12/2010','VISITA NO SITE -','17:53:02','VISITANTE','/novo_visu/inicio.php',773),
 (798,'127.0.0.1','01/12/2010','VISITA NO SITE -','17:53:02','VISITANTE','/novo_visu/inicio.php',774),
 (799,'127.0.0.1','01/12/2010','VISITA NO SITE -','17:53:54','VISITANTE','/novo_visu/inicio.php',775),
 (800,'127.0.0.1','01/12/2010','VISITA NO SITE -','17:53:54','VISITANTE','/novo_visu/inicio.php',776),
 (801,'127.0.0.1','01/12/2010','VISITA NO SITE -','17:57:40','VISITANTE','/novo_visu/inicio.php',777),
 (802,'127.0.0.1','01/12/2010','VISITA NO SITE -','17:57:40','VISITANTE','/novo_visu/inicio.php',778),
 (803,'127.0.0.1','01/12/2010','VISITA NO SITE -','17:58:21','VISITANTE','/novo_visu/inicio.php',779),
 (804,'127.0.0.1','01/12/2010','VISITA NO SITE -','17:58:21','VISITANTE','/novo_visu/inicio.php',780);
INSERT INTO `log_user_event` (`id`,`IP`,`DATA`,`EVENTO`,`HORA`,`USUARIO`,`ARQUIVO`,`QTD`) VALUES 
 (805,'127.0.0.1','01/12/2010','VISITA NO SITE -','17:58:52','VISITANTE','/novo_visu/inicio.php',781),
 (806,'127.0.0.1','01/12/2010','VISITA NO SITE -','17:58:52','VISITANTE','/novo_visu/inicio.php',782),
 (807,'127.0.0.1','01/12/2010','VISITA NO SITE -','17:59:18','VISITANTE','/novo_visu/inicio.php',783),
 (808,'127.0.0.1','01/12/2010','VISITA NO SITE -','17:59:19','VISITANTE','/novo_visu/inicio.php',784),
 (809,'127.0.0.1','01/12/2010','VISITA NO SITE -','17:59:33','VISITANTE','/novo_visu/inicio.php',785),
 (810,'127.0.0.1','01/12/2010','VISITA NO SITE -','17:59:34','VISITANTE','/novo_visu/inicio.php',786),
 (811,'127.0.0.1','01/12/2010','VISITA NO SITE -','18:00:11','VISITANTE','/novo_visu/inicio.php',787),
 (812,'127.0.0.1','01/12/2010','VISITA NO SITE -','18:00:11','VISITANTE','/novo_visu/inicio.php',788),
 (813,'127.0.0.1','01/12/2010','VISITA NO SITE -','18:00:40','VISITANTE','/novo_visu/inicio.php',789),
 (814,'127.0.0.1','01/12/2010','VISITA NO SITE -','18:00:40','VISITANTE','/novo_visu/inicio.php',790);
INSERT INTO `log_user_event` (`id`,`IP`,`DATA`,`EVENTO`,`HORA`,`USUARIO`,`ARQUIVO`,`QTD`) VALUES 
 (815,'127.0.0.1','01/12/2010','VISITA NO SITE -','18:00:58','VISITANTE','/novo_visu/inicio.php',791),
 (816,'127.0.0.1','01/12/2010','VISITA NO SITE -','18:00:59','VISITANTE','/novo_visu/inicio.php',792),
 (817,'127.0.0.1','01/12/2010','VISITA NO SITE -','18:02:29','VISITANTE','/novo_visu/inicio.php',793),
 (818,'127.0.0.1','01/12/2010','VISITA NO SITE -','18:03:02','VISITANTE','/novo_visu/inicio.php',794),
 (819,'127.0.0.1','01/12/2010','VISITA NO SITE -','18:03:02','VISITANTE','/novo_visu/inicio.php',795),
 (820,'127.0.0.1','01/12/2010','VISITA NO SITE -','18:04:55','VISITANTE','/novo_visu/inicio.php',796),
 (821,'127.0.0.1','01/12/2010','VISITA NO SITE -','18:04:55','VISITANTE','/novo_visu/inicio.php',797),
 (822,'127.0.0.1','01/12/2010','VISITA NO SITE -','18:05:52','VISITANTE','/novo_visu/inicio.php',798),
 (823,'127.0.0.1','01/12/2010','VISITA NO SITE -','18:05:52','VISITANTE','/novo_visu/inicio.php',799),
 (824,'127.0.0.1','01/12/2010','VISITA NO SITE -','18:06:34','VISITANTE','/novo_visu/inicio.php',800);
INSERT INTO `log_user_event` (`id`,`IP`,`DATA`,`EVENTO`,`HORA`,`USUARIO`,`ARQUIVO`,`QTD`) VALUES 
 (825,'127.0.0.1','01/12/2010','VISITA NO SITE -','18:06:34','VISITANTE','/novo_visu/inicio.php',801),
 (826,'127.0.0.1','01/12/2010','VISITA NO SITE -','18:07:43','VISITANTE','/novo_visu/inicio.php',802),
 (827,'127.0.0.1','01/12/2010','VISITA NO SITE -','18:07:43','VISITANTE','/novo_visu/inicio.php',803),
 (828,'127.0.0.1','01/12/2010','VISITA NO SITE -','18:09:21','VISITANTE','/novo_visu/inicio.php',804),
 (829,'127.0.0.1','01/12/2010','VISITA NO SITE -','18:09:21','VISITANTE','/novo_visu/inicio.php',805),
 (830,'127.0.0.1','01/12/2010','VISITA NO SITE -','18:11:15','VISITANTE','/novo_visu/inicio.php',806),
 (831,'127.0.0.1','01/12/2010','VISITA NO SITE -','18:11:15','VISITANTE','/novo_visu/inicio.php',807),
 (832,'127.0.0.1','01/12/2010','VISITA NO SITE -','18:12:09','VISITANTE','/novo_visu/inicio.php',808),
 (833,'127.0.0.1','01/12/2010','VISITA NO SITE -','18:12:09','VISITANTE','/novo_visu/inicio.php',809),
 (834,'127.0.0.1','01/12/2010','VISITA NO SITE -','18:12:24','VISITANTE','/novo_visu/inicio.php',810);
INSERT INTO `log_user_event` (`id`,`IP`,`DATA`,`EVENTO`,`HORA`,`USUARIO`,`ARQUIVO`,`QTD`) VALUES 
 (835,'192.168.1.61','01/12/2010','VISITA NO SITE -','18:12:52','VISITANTE','/novo_visu/inicio.php',811),
 (836,'192.168.1.61','01/12/2010','VISITA NO SITE -','18:12:52','VISITANTE','/novo_visu/inicio.php',812),
 (837,'192.168.1.61','01/12/2010','VISITA NO SITE -','18:13:57','VISITANTE','/novo_visu/inicio.php',813),
 (838,'192.168.1.61','01/12/2010','VISITA NO SITE -','18:13:58','VISITANTE','/novo_visu/inicio.php',814),
 (839,'192.168.1.61','01/12/2010','VISITA NO SITE -','18:14:27','VISITANTE','/novo_visu/inicio.php',815),
 (840,'192.168.1.61','01/12/2010','VISITA NO SITE -','18:14:27','VISITANTE','/novo_visu/inicio.php',816),
 (841,'192.168.1.61','01/12/2010','VISITA NO SITE -','18:15:09','VISITANTE','/novo_visu/inicio.php',817),
 (842,'192.168.1.61','01/12/2010','VISITA NO SITE -','18:15:09','VISITANTE','/novo_visu/inicio.php',818),
 (843,'192.168.1.61','01/12/2010','VISITA NO SITE -','18:15:50','VISITANTE','/novo_visu/inicio.php',819),
 (844,'192.168.1.61','01/12/2010','VISITA NO SITE -','18:15:50','VISITANTE','/novo_visu/inicio.php',820);
INSERT INTO `log_user_event` (`id`,`IP`,`DATA`,`EVENTO`,`HORA`,`USUARIO`,`ARQUIVO`,`QTD`) VALUES 
 (845,'192.168.1.61','01/12/2010','VISITA NO SITE -','18:16:31','VISITANTE','/novo_visu/inicio.php',821),
 (846,'192.168.1.61','01/12/2010','VISITA NO SITE -','18:16:31','VISITANTE','/novo_visu/inicio.php',822),
 (847,'192.168.1.61','01/12/2010','VISITA NO SITE -','18:17:31','VISITANTE','/novo_visu/inicio.php',823),
 (848,'192.168.1.61','01/12/2010','VISITA NO SITE -','18:17:31','VISITANTE','/novo_visu/inicio.php',824),
 (849,'192.168.1.61','01/12/2010','VISITA NO SITE -','18:18:06','VISITANTE','/novo_visu/inicio.php',825),
 (850,'192.168.1.61','01/12/2010','VISITA NO SITE -','18:18:07','VISITANTE','/novo_visu/inicio.php',826),
 (851,'192.168.1.61','01/12/2010','VISITA NO SITE -','18:18:38','VISITANTE','/novo_visu/inicio.php',827),
 (852,'192.168.1.61','01/12/2010','VISITA NO SITE -','18:18:38','VISITANTE','/novo_visu/inicio.php',828),
 (853,'192.168.1.61','01/12/2010','VISITA NO SITE -','18:19:03','VISITANTE','/novo_visu/inicio.php',829),
 (854,'192.168.1.61','01/12/2010','VISITA NO SITE -','18:19:53','VISITANTE','/novo_visu/inicio.php',830);
INSERT INTO `log_user_event` (`id`,`IP`,`DATA`,`EVENTO`,`HORA`,`USUARIO`,`ARQUIVO`,`QTD`) VALUES 
 (855,'192.168.1.61','01/12/2010','VISITA NO SITE -','18:19:53','VISITANTE','/novo_visu/inicio.php',831),
 (856,'192.168.1.61','01/12/2010','VISITA NO SITE -','18:20:15','VISITANTE','/novo_visu/inicio.php',832),
 (857,'192.168.1.61','01/12/2010','VISITA NO SITE -','18:20:15','VISITANTE','/novo_visu/inicio.php',833),
 (858,'192.168.1.61','01/12/2010','VISITA NO SITE -','18:21:32','VISITANTE','/novo_visu/inicio.php',834),
 (859,'192.168.1.61','01/12/2010','VISITA NO SITE -','18:21:32','VISITANTE','/novo_visu/inicio.php',835),
 (860,'192.168.1.61','01/12/2010','VISITA NO SITE -','18:22:49','VISITANTE','/novo_visu/inicio.php',836),
 (861,'192.168.1.61','01/12/2010','VISITA NO SITE -','18:22:49','VISITANTE','/novo_visu/inicio.php',837),
 (862,'192.168.1.61','01/12/2010','VISITA NO SITE -','18:23:40','VISITANTE','/novo_visu/inicio.php',838),
 (863,'192.168.1.61','01/12/2010','VISITA NO SITE -','18:23:41','VISITANTE','/novo_visu/inicio.php',839),
 (864,'192.168.1.61','01/12/2010','VISITA NO SITE -','18:25:14','VISITANTE','/novo_visu/inicio.php',840);
INSERT INTO `log_user_event` (`id`,`IP`,`DATA`,`EVENTO`,`HORA`,`USUARIO`,`ARQUIVO`,`QTD`) VALUES 
 (865,'192.168.1.61','01/12/2010','VISITA NO SITE -','18:25:14','VISITANTE','/novo_visu/inicio.php',841),
 (866,'192.168.1.61','01/12/2010','VISITA NO SITE -','18:25:55','VISITANTE','/novo_visu/inicio.php',842),
 (867,'192.168.1.61','01/12/2010','VISITA NO SITE -','18:25:56','VISITANTE','/novo_visu/inicio.php',843),
 (868,'192.168.1.44','01/12/2010','VISITA NO SITE -','18:27:55','VISITANTE','/novo_visu/inicio.php',844),
 (869,'192.168.1.44','01/12/2010','VISITA NO SITE -','18:28:00','VISITANTE','/novo_visu/inicio.php',845),
 (870,'192.168.1.44','01/12/2010','VISITA NO SITE -','18:28:00','VISITANTE','/novo_visu/inicio.php',846),
 (871,'127.0.0.1','01/12/2010','VISITA NO SITE -','18:49:51','VISITANTE','/novo_visu/inicio.php',847),
 (872,'127.0.0.1','01/12/2010','VISITA NO SITE -','18:49:51','VISITANTE','/novo_visu/inicio.php',848),
 (873,'192.168.1.61','01/12/2010','VISITA NO SITE -','18:55:47','VISITANTE','/novo_visu/inicio.php',849),
 (874,'192.168.1.61','01/12/2010','VISITA NO SITE -','18:57:13','VISITANTE','/novo_visu/inicio.php',850);
INSERT INTO `log_user_event` (`id`,`IP`,`DATA`,`EVENTO`,`HORA`,`USUARIO`,`ARQUIVO`,`QTD`) VALUES 
 (875,'192.168.1.61','01/12/2010','VISITA NO SITE -','18:57:32','VISITANTE','/novo_visu/inicio.php',851),
 (876,'192.168.1.61','01/12/2010','VISITA NO SITE -','18:57:32','VISITANTE','/novo_visu/inicio.php',852),
 (877,'192.168.1.61','01/12/2010','VISITA NO SITE -','19:01:27','VISITANTE','/novo_visu/inicio.php',853),
 (878,'192.168.1.61','01/12/2010','VISITA NO SITE -','19:01:28','VISITANTE','/novo_visu/inicio.php',854),
 (879,'192.168.1.61','01/12/2010','VISITA NO SITE -','19:02:32','VISITANTE','/novo_visu/inicio.php',855),
 (880,'192.168.1.61','01/12/2010','VISITA NO SITE -','19:02:32','VISITANTE','/novo_visu/inicio.php',856),
 (881,'192.168.1.61','01/12/2010','VISITA NO SITE -','19:03:16','VISITANTE','/novo_visu/inicio.php',857),
 (882,'192.168.1.61','01/12/2010','VISITA NO SITE -','19:03:16','VISITANTE','/novo_visu/inicio.php',858),
 (883,'192.168.1.61','01/12/2010','VISITA NO SITE -','19:04:34','VISITANTE','/novo_visu/inicio.php',859),
 (884,'192.168.1.61','01/12/2010','VISITA NO SITE -','19:04:34','VISITANTE','/novo_visu/inicio.php',860);
INSERT INTO `log_user_event` (`id`,`IP`,`DATA`,`EVENTO`,`HORA`,`USUARIO`,`ARQUIVO`,`QTD`) VALUES 
 (885,'192.168.1.61','01/12/2010','VISITA NO SITE -','19:10:07','VISITANTE','/novo_visu/inicio.php',861),
 (886,'192.168.1.61','01/12/2010','VISITA NO SITE -','19:10:07','VISITANTE','/novo_visu/inicio.php',862),
 (887,'192.168.1.61','01/12/2010','VISITA NO SITE -','19:12:27','VISITANTE','/novo_visu/inicio.php',863),
 (888,'192.168.1.61','01/12/2010','VISITA NO SITE -','19:12:27','VISITANTE','/novo_visu/inicio.php',864),
 (889,'127.0.0.1','01/12/2010','VISITA NO SITE -','19:13:09','VISITANTE','/novo_visu/inicio.php',865),
 (890,'127.0.0.1','01/12/2010','VISITA NO SITE -','19:13:09','VISITANTE','/novo_visu/inicio.php',866),
 (891,'127.0.0.1','01/12/2010','VISITA NO SITE -','19:13:42','VISITANTE','/novo_visu/inicio.php',867),
 (892,'127.0.0.1','01/12/2010','VISITA NO SITE -','19:13:43','VISITANTE','/novo_visu/inicio.php',868),
 (893,'192.168.1.61','01/12/2010','VISITA NO SITE -','19:20:12','VISITANTE','/novo_visu/inicio.php',869),
 (894,'192.168.1.61','01/12/2010','VISITA NO SITE -','19:20:12','VISITANTE','/novo_visu/inicio.php',870);
INSERT INTO `log_user_event` (`id`,`IP`,`DATA`,`EVENTO`,`HORA`,`USUARIO`,`ARQUIVO`,`QTD`) VALUES 
 (895,'127.0.0.1','01/12/2010','VISITA NO SITE -','19:20:17','VISITANTE','/novo_visu/inicio.php',871),
 (896,'127.0.0.1','01/12/2010','VISITA NO SITE -','19:20:17','VISITANTE','/novo_visu/inicio.php',872),
 (897,'127.0.0.1','01/12/2010','VISITA NO SITE -','19:21:48','VISITANTE','/novo_visu/inicio.php',873),
 (898,'127.0.0.1','01/12/2010','VISITA NO SITE -','19:21:48','VISITANTE','/novo_visu/inicio.php',874),
 (899,'127.0.0.1','01/12/2010','VISITA NO SITE -','19:21:49','VISITANTE','/novo_visu/inicio.php',875),
 (900,'127.0.0.1','01/12/2010','VISITA NO SITE -','19:22:05','VISITANTE','/novo_visu/inicio.php',876),
 (901,'127.0.0.1','01/12/2010','VISITA NO SITE -','19:22:05','VISITANTE','/novo_visu/inicio.php',877),
 (902,'127.0.0.1','01/12/2010','VISITA NO SITE -','19:22:24','VISITANTE','/novo_visu/inicio.php',878),
 (903,'127.0.0.1','01/12/2010','VISITA NO SITE -','19:22:25','VISITANTE','/novo_visu/inicio.php',879),
 (904,'192.168.1.61','01/12/2010','VISITA NO SITE -','19:22:33','VISITANTE','/novo_visu/inicio.php',880);
INSERT INTO `log_user_event` (`id`,`IP`,`DATA`,`EVENTO`,`HORA`,`USUARIO`,`ARQUIVO`,`QTD`) VALUES 
 (905,'192.168.1.61','01/12/2010','VISITA NO SITE -','19:22:33','VISITANTE','/novo_visu/inicio.php',881),
 (906,'127.0.0.1','01/12/2010','VISITA NO SITE -','19:22:45','VISITANTE','/novo_visu/inicio.php',882),
 (907,'127.0.0.1','01/12/2010','VISITA NO SITE -','19:22:45','VISITANTE','/novo_visu/inicio.php',883),
 (908,'192.168.1.61','01/12/2010','VISITA NO SITE -','19:22:57','VISITANTE','/novo_visu/inicio.php',884),
 (909,'192.168.1.61','01/12/2010','VISITA NO SITE -','19:22:57','VISITANTE','/novo_visu/inicio.php',885),
 (910,'127.0.0.1','01/12/2010','VISITA NO SITE -','19:26:59','VISITANTE','/novo_visu/inicio.php',886),
 (911,'127.0.0.1','01/12/2010','VISITA NO SITE -','19:26:59','VISITANTE','/novo_visu/inicio.php',887),
 (912,'192.168.1.61','01/12/2010','VISITA NO SITE -','19:27:13','VISITANTE','/novo_visu/inicio.php',888),
 (913,'192.168.1.61','01/12/2010','VISITA NO SITE -','19:27:13','VISITANTE','/novo_visu/inicio.php',889),
 (914,'127.0.0.1','01/12/2010','VISITA NO SITE -','19:28:05','VISITANTE','/novo_visu/inicio.php',890);
INSERT INTO `log_user_event` (`id`,`IP`,`DATA`,`EVENTO`,`HORA`,`USUARIO`,`ARQUIVO`,`QTD`) VALUES 
 (915,'127.0.0.1','01/12/2010','VISITA NO SITE -','19:28:06','VISITANTE','/novo_visu/inicio.php',891),
 (916,'127.0.0.1','01/12/2010','VISITA NO SITE -','19:28:07','VISITANTE','/novo_visu/inicio.php',892),
 (917,'127.0.0.1','01/12/2010','VISITA NO SITE -','19:28:35','VISITANTE','/novo_visu/inicio.php',893),
 (918,'127.0.0.1','01/12/2010','VISITA NO SITE -','19:28:35','VISITANTE','/novo_visu/inicio.php',894),
 (919,'192.168.1.61','01/12/2010','VISITA NO SITE -','19:28:47','VISITANTE','/novo_visu/inicio.php',895),
 (920,'192.168.1.61','01/12/2010','VISITA NO SITE -','19:28:47','VISITANTE','/novo_visu/inicio.php',896),
 (921,'127.0.0.1','01/12/2010','VISITA NO SITE -','19:30:05','VISITANTE','/novo_visu/inicio.php',897),
 (922,'127.0.0.1','01/12/2010','VISITA NO SITE -','19:30:19','VISITANTE','/novo_visu/inicio.php',898),
 (923,'127.0.0.1','01/12/2010','VISITA NO SITE -','19:30:19','VISITANTE','/novo_visu/inicio.php',899),
 (924,'127.0.0.1','01/12/2010','VISITA NO SITE -','21:50:53','VISITANTE','/novo_visu/inicio.php',900);
INSERT INTO `log_user_event` (`id`,`IP`,`DATA`,`EVENTO`,`HORA`,`USUARIO`,`ARQUIVO`,`QTD`) VALUES 
 (925,'127.0.0.1','01/12/2010','VISITA NO SITE -','21:50:53','VISITANTE','/novo_visu/inicio.php',901),
 (926,'127.0.0.1','02/12/2010','VISITA NO SITE -','11:00:58','VISITANTE','/novo_visu/inicio.php',902),
 (927,'127.0.0.1','02/12/2010','VISITA NO SITE -','11:02:32','VISITANTE','/novo_visu/inicio.php',903),
 (928,'127.0.0.1','02/12/2010','VISITA NO SITE -','11:02:32','VISITANTE','/novo_visu/inicio.php',904),
 (929,'127.0.0.1','02/12/2010','VISITA NO SITE -','11:16:02','VISITANTE','/novo_visu/inicio.php',905),
 (930,'127.0.0.1','02/12/2010','VISITA NO SITE -','11:16:03','VISITANTE','/novo_visu/inicio.php',906),
 (931,'192.168.1.44','02/12/2010','VISITA NO SITE -','11:56:43','VISITANTE','/novo_visu/inicio.php',907),
 (932,'192.168.1.44','02/12/2010','VISITA NO SITE -','11:56:43','VISITANTE','/novo_visu/inicio.php',908),
 (933,'127.0.0.1','02/12/2010','VISITA NO SITE -','13:16:00','VISITANTE','/novo_visu/inicio.php',909),
 (934,'127.0.0.1','02/12/2010','VISITA NO SITE -','13:16:01','VISITANTE','/novo_visu/inicio.php',910);
INSERT INTO `log_user_event` (`id`,`IP`,`DATA`,`EVENTO`,`HORA`,`USUARIO`,`ARQUIVO`,`QTD`) VALUES 
 (935,'127.0.0.1','02/12/2010','VISITA NO SITE -','17:13:07','VISITANTE','/novo_visu/inicio.php',911),
 (936,'127.0.0.1','02/12/2010','VISITA NO SITE -','17:13:07','VISITANTE','/novo_visu/inicio.php',912),
 (937,'127.0.0.1','02/12/2010','VISITA NO SITE -','18:44:28','VISITANTE','/novo_visu/inicio.php',913),
 (938,'127.0.0.1','02/12/2010','VISITA NO SITE -','18:44:28','VISITANTE','/novo_visu/inicio.php',914),
 (939,'127.0.0.1','03/12/2010','VISITA NO SITE -','11:16:36','VISITANTE','/novo_visu/inicio.php',915),
 (940,'127.0.0.1','03/12/2010','VISITA NO SITE -','11:16:37','VISITANTE','/novo_visu/inicio.php',916),
 (941,'127.0.0.1','03/12/2010','VISITA NO SITE -','11:55:29','VISITANTE','/novo_visu/inicio.php',917),
 (942,'127.0.0.1','03/12/2010','VISITA NO SITE -','11:55:29','VISITANTE','/novo_visu/inicio.php',918),
 (943,'127.0.0.1','03/12/2010','VISITA NO SITE -','11:57:10','VISITANTE','/novo_visu/inicio.php',919),
 (944,'127.0.0.1','03/12/2010','VISITA NO SITE -','11:57:10','VISITANTE','/novo_visu/inicio.php',920);
INSERT INTO `log_user_event` (`id`,`IP`,`DATA`,`EVENTO`,`HORA`,`USUARIO`,`ARQUIVO`,`QTD`) VALUES 
 (945,'127.0.0.1','03/12/2010','VISITA NO SITE -','11:59:41','VISITANTE','/novo_visu/inicio.php',921),
 (946,'127.0.0.1','03/12/2010','VISITA NO SITE -','11:59:42','VISITANTE','/novo_visu/inicio.php',922),
 (947,'127.0.0.1','03/12/2010','VISITA NO SITE -','12:00:52','VISITANTE','/novo_visu/inicio.php',923),
 (948,'127.0.0.1','03/12/2010','VISITA NO SITE -','12:00:53','VISITANTE','/novo_visu/inicio.php',924),
 (949,'127.0.0.1','03/12/2010','VISITA NO SITE -','12:01:34','VISITANTE','/novo_visu/inicio.php',925),
 (950,'127.0.0.1','03/12/2010','VISITA NO SITE -','12:01:34','VISITANTE','/novo_visu/inicio.php',926),
 (951,'127.0.0.1','03/12/2010','VISITA NO SITE -','12:02:37','VISITANTE','/novo_visu/inicio.php',927),
 (952,'127.0.0.1','03/12/2010','VISITA NO SITE -','12:02:37','VISITANTE','/novo_visu/inicio.php',928),
 (953,'127.0.0.1','03/12/2010','VISITA NO SITE -','12:05:45','VISITANTE','/novo_visu/inicio.php',929),
 (954,'127.0.0.1','03/12/2010','VISITA NO SITE -','12:05:45','VISITANTE','/novo_visu/inicio.php',930);
INSERT INTO `log_user_event` (`id`,`IP`,`DATA`,`EVENTO`,`HORA`,`USUARIO`,`ARQUIVO`,`QTD`) VALUES 
 (955,'127.0.0.1','03/12/2010','VISITA NO SITE -','12:14:52','VISITANTE','/novo_visu/inicio.php',931),
 (956,'127.0.0.1','03/12/2010','VISITA NO SITE -','12:14:52','VISITANTE','/novo_visu/inicio.php',932),
 (957,'127.0.0.1','03/12/2010','VISITA NO SITE -','12:19:20','VISITANTE','/novo_visu/inicio.php',933),
 (958,'127.0.0.1','03/12/2010','VISITA NO SITE -','12:21:28','VISITANTE','/novo_visu/inicio.php',934),
 (959,'127.0.0.1','03/12/2010','VISITA NO SITE -','12:21:28','VISITANTE','/novo_visu/inicio.php',935),
 (960,'127.0.0.1','03/12/2010','VISITA NO SITE -','12:24:39','VISITANTE','/novo_visu/inicio.php',936),
 (961,'127.0.0.1','03/12/2010','VISITA NO SITE -','12:24:39','VISITANTE','/novo_visu/inicio.php',937),
 (962,'127.0.0.1','03/12/2010','VISITA NO SITE -','12:24:54','HOLODEK','/novo_visu/inicio.php',938),
 (963,'127.0.0.1','03/12/2010','VISITA NO SITE -','12:29:38','HOLODEK','/novo_visu/inicio.php',939),
 (964,'127.0.0.1','03/12/2010','VISITA NO SITE -','12:33:53','HOLODEK','/novo_visu/inicio.php',940);
INSERT INTO `log_user_event` (`id`,`IP`,`DATA`,`EVENTO`,`HORA`,`USUARIO`,`ARQUIVO`,`QTD`) VALUES 
 (965,'127.0.0.1','03/12/2010','VISITA NO SITE -','12:34:08','HOLODEK','/novo_visu/inicio.php',941),
 (966,'127.0.0.1','03/12/2010','VISITA NO SITE -','12:35:06','HOLODEK','/novo_visu/inicio.php',942),
 (967,'127.0.0.1','03/12/2010','VISITA NO SITE -','12:44:57','HOLODEK','/novo_visu/inicio.php',943),
 (968,'127.0.0.1','03/12/2010','VISITA NO SITE -','12:46:25','HOLODEK','/novo_visu/inicio.php',944),
 (969,'127.0.0.1','03/12/2010','VISITA NO SITE -','12:48:17','HOLODEK','/novo_visu/inicio.php',945),
 (970,'127.0.0.1','03/12/2010','VISITA NO SITE -','12:50:33','HOLODEK','/novo_visu/inicio.php',946),
 (971,'127.0.0.1','03/12/2010','VISITA NO SITE -','12:51:11','HOLODEK','/novo_visu/inicio.php',947),
 (972,'127.0.0.1','03/12/2010','VISITA NO SITE -','12:53:15','HOLODEK','/novo_visu/inicio.php',948),
 (973,'127.0.0.1','03/12/2010','VISITA NO SITE -','13:03:24','HOLODEK','/novo_visu/inicio.php',949),
 (974,'127.0.0.1','03/12/2010','VISITA NO SITE -','13:05:50','HOLODEK','/novo_visu/inicio.php',950);
INSERT INTO `log_user_event` (`id`,`IP`,`DATA`,`EVENTO`,`HORA`,`USUARIO`,`ARQUIVO`,`QTD`) VALUES 
 (975,'127.0.0.1','03/12/2010','VISITA NO SITE -','13:24:43','HOLODEK','/novo_visu/inicio.php',951),
 (976,'127.0.0.1','03/12/2010','VISITA NO SITE -','13:24:50','HOLODEK','/novo_visu/inicio.php',952),
 (977,'127.0.0.1','03/12/2010','VISITA NO SITE -','13:25:57','HOLODEK','/novo_visu/inicio.php',953),
 (978,'127.0.0.1','03/12/2010','VISITA NO SITE -','13:30:14','HOLODEK','/novo_visu/inicio.php',954),
 (979,'127.0.0.1','03/12/2010','VISITA NO SITE -','13:31:06','HOLODEK','/novo_visu/inicio.php',955),
 (980,'127.0.0.1','03/12/2010','VISITA NO SITE -','13:31:24','HOLODEK','/novo_visu/inicio.php',956),
 (981,'127.0.0.1','03/12/2010','VISITA NO SITE -','13:32:35','HOLODEK','/novo_visu/inicio.php',957),
 (982,'127.0.0.1','03/12/2010','VISITA NO SITE -','13:33:15','HOLODEK','/novo_visu/inicio.php',958),
 (983,'127.0.0.1','03/12/2010','VISITA NO SITE -','13:42:22','HOLODEK','/novo_visu/inicio.php',959),
 (984,'127.0.0.1','03/12/2010','VISITA NO SITE -','13:42:57','HOLODEK','/novo_visu/inicio.php',960);
INSERT INTO `log_user_event` (`id`,`IP`,`DATA`,`EVENTO`,`HORA`,`USUARIO`,`ARQUIVO`,`QTD`) VALUES 
 (985,'127.0.0.1','03/12/2010','VISITA NO SITE -','13:43:30','HOLODEK','/novo_visu/inicio.php',961),
 (986,'127.0.0.1','03/12/2010','VISITA NO SITE -','13:58:42','HOLODEK','/novo_visu/inicio.php',962),
 (987,'127.0.0.1','03/12/2010','VISITA NO SITE -','14:05:21','HOLODEK','/novo_visu/inicio.php',963),
 (988,'192.168.1.61','03/12/2010','VISITA NO SITE -','14:48:15','VISITANTE','/novo_visu/inicio.php',964),
 (989,'192.168.1.61','03/12/2010','VISITA NO SITE -','14:48:16','VISITANTE','/novo_visu/inicio.php',965),
 (990,'192.168.1.61','03/12/2010','VISITA NO SITE -','14:49:10','MARLEY','/novo_visu/inicio.php',966),
 (991,'127.0.0.1','03/12/2010','VISITA NO SITE -','15:56:39','HOLODEK','/novo_visu/inicio.php',967),
 (992,'127.0.0.1','03/12/2010','VISITA NO SITE -','15:58:27','VISITANTE','/novo_visu/inicio.php',968),
 (993,'127.0.0.1','03/12/2010','VISITA NO SITE -','15:58:41','VISITANTE','/novo_visu/inicio.php',969),
 (994,'127.0.0.1','03/12/2010','VISITA NO SITE -','15:58:41','VISITANTE','/novo_visu/inicio.php',970);
INSERT INTO `log_user_event` (`id`,`IP`,`DATA`,`EVENTO`,`HORA`,`USUARIO`,`ARQUIVO`,`QTD`) VALUES 
 (995,'127.0.0.1','03/12/2010','VISITA NO SITE -','16:03:33','VISITANTE','/novo_visu/inicio.php',971),
 (996,'127.0.0.1','03/12/2010','VISITA NO SITE -','16:03:33','VISITANTE','/novo_visu/inicio.php',972),
 (997,'127.0.0.1','03/12/2010','VISITA NO SITE -','17:10:51','VISITANTE','/novo_visu/inicio.php',973),
 (998,'127.0.0.1','03/12/2010','VISITA NO SITE -','17:12:27','VISITANTE','/novo_visu/inicio.php',974),
 (999,'127.0.0.1','03/12/2010','VISITA NO SITE -','17:14:08','VISITANTE','/novo_visu/inicio.php',975),
 (1000,'127.0.0.1','03/12/2010','VISITA NO SITE -','17:14:11','VISITANTE','/novo_visu/inicio.php',976),
 (1001,'127.0.0.1','03/12/2010','VISITA NO SITE -','17:20:29','VISITANTE','/novo_visu/inicio.php',977),
 (1002,'127.0.0.1','03/12/2010','VISITA NO SITE -','17:20:29','VISITANTE','/novo_visu/inicio.php',978),
 (1003,'127.0.0.1','03/12/2010','VISITA NO SITE -','17:21:51','VISITANTE','/novo_visu/inicio.php',979),
 (1004,'127.0.0.1','03/12/2010','VISITA NO SITE -','17:21:52','VISITANTE','/novo_visu/inicio.php',980);
INSERT INTO `log_user_event` (`id`,`IP`,`DATA`,`EVENTO`,`HORA`,`USUARIO`,`ARQUIVO`,`QTD`) VALUES 
 (1005,'127.0.0.1','03/12/2010','VISITA NO SITE -','17:32:14','VISITANTE','/novo_visu/inicio.php',981),
 (1006,'127.0.0.1','03/12/2010','VISITA NO SITE -','17:32:20','VISITANTE','/novo_visu/inicio.php',982),
 (1007,'127.0.0.1','03/12/2010','VISITA NO SITE -','17:34:52','VISITANTE','/novo_visu/inicio.php',983),
 (1008,'127.0.0.1','03/12/2010','VISITA NO SITE -','17:34:52','VISITANTE','/novo_visu/inicio.php',984),
 (1009,'127.0.0.1','03/12/2010','VISITA NO SITE -','17:35:52','VISITANTE','/novo_visu/inicio.php',985),
 (1010,'127.0.0.1','03/12/2010','VISITA NO SITE -','17:37:04','VISITANTE','/novo_visu/inicio.php',986),
 (1011,'127.0.0.1','03/12/2010','VISITA NO SITE -','17:41:34','VISITANTE','/novo_visu/inicio.php',987),
 (1012,'127.0.0.1','03/12/2010','VISITA NO SITE -','17:46:00','VISITANTE','/novo_visu/inicio.php',988),
 (1013,'127.0.0.1','03/12/2010','VISITA NO SITE -','19:06:43','VISITANTE','/novo_visu/inicio.php',989),
 (1014,'127.0.0.1','03/12/2010','VISITA NO SITE -','19:06:44','VISITANTE','/novo_visu/inicio.php',990);
INSERT INTO `log_user_event` (`id`,`IP`,`DATA`,`EVENTO`,`HORA`,`USUARIO`,`ARQUIVO`,`QTD`) VALUES 
 (1015,'192.168.1.61','03/12/2010','VISITA NO SITE -','19:21:37','VISITANTE','/novo_visu/inicio.php',991),
 (1016,'192.168.1.61','03/12/2010','VISITA NO SITE -','19:21:37','VISITANTE','/novo_visu/inicio.php',992),
 (1017,'192.168.1.44','03/12/2010','VISITA NO SITE -','19:21:48','VISITANTE','/novo_visu/inicio.php',993),
 (1018,'192.168.1.44','03/12/2010','VISITA NO SITE -','19:21:48','VISITANTE','/novo_visu/inicio.php',994),
 (1019,'127.0.0.1','04/12/2010','VISITA NO SITE -','11:38:39','VISITANTE','/novo_visu/inicio.php',995),
 (1020,'127.0.0.1','04/12/2010','VISITA NO SITE -','11:38:39','VISITANTE','/novo_visu/inicio.php',996),
 (1021,'127.0.0.1','04/12/2010','VISITA NO SITE -','12:38:58','VISITANTE','/novo_visu/inicio.php',997),
 (1022,'127.0.0.1','04/12/2010','VISITA NO SITE -','12:38:58','VISITANTE','/novo_visu/inicio.php',998),
 (1023,'127.0.0.1','04/12/2010','VISITA NO SITE -','12:46:00','VISITANTE','/novo_visu/inicio.php',999),
 (1024,'127.0.0.1','04/12/2010','VISITA NO SITE -','12:46:01','VISITANTE','/novo_visu/inicio.php',1000);
INSERT INTO `log_user_event` (`id`,`IP`,`DATA`,`EVENTO`,`HORA`,`USUARIO`,`ARQUIVO`,`QTD`) VALUES 
 (1025,'127.0.0.1','04/12/2010','VISITA NO SITE -','13:00:43','VISITANTE','/novo_visu/inicio.php',1001),
 (1026,'127.0.0.1','06/12/2010','VISITA NO SITE -','14:03:06','VISITANTE','/novo_visu/inicio.php',1002),
 (1027,'127.0.0.1','06/12/2010','VISITA NO SITE -','16:46:42','VISITANTE','/novo_visu/inicio.php',1003),
 (1028,'127.0.0.1','06/12/2010','VISITA NO SITE -','16:46:43','VISITANTE','/novo_visu/inicio.php',1004),
 (1029,'192.168.1.44','07/12/2010','VISITA NO SITE -','12:43:52','VISITANTE','/novo_visu/inicio.php',1005),
 (1030,'192.168.1.44','07/12/2010','VISITA NO SITE -','12:43:53','VISITANTE','/novo_visu/inicio.php',1006),
 (1031,'192.168.1.44','07/12/2010','VISITA NO SITE -','12:46:26','VISITANTE','/novo_visu/inicio.php',1007),
 (1032,'192.168.1.44','07/12/2010','VISITA NO SITE -','12:46:27','VISITANTE','/novo_visu/inicio.php',1008),
 (1033,'192.168.1.44','07/12/2010','VISITA NO SITE -','12:47:36','VISITANTE','/novo_visu/inicio.php',1009),
 (1034,'192.168.1.44','07/12/2010','VISITA NO SITE -','12:47:36','VISITANTE','/novo_visu/inicio.php',1010);
INSERT INTO `log_user_event` (`id`,`IP`,`DATA`,`EVENTO`,`HORA`,`USUARIO`,`ARQUIVO`,`QTD`) VALUES 
 (1035,'192.168.1.44','07/12/2010','VISITA NO SITE -','12:48:49','VISITANTE','/novo_visu/inicio.php',1011),
 (1036,'192.168.1.44','07/12/2010','VISITA NO SITE -','12:48:49','VISITANTE','/novo_visu/inicio.php',1012),
 (1037,'127.0.0.1','07/12/2010','VISITA NO SITE -','12:49:46','VISITANTE','/novo_visu/inicio.php',1013),
 (1038,'192.168.1.44','07/12/2010','VISITA NO SITE -','12:50:15','VISITANTE','/novo_visu/inicio.php',1014),
 (1039,'192.168.1.44','07/12/2010','VISITA NO SITE -','12:50:16','VISITANTE','/novo_visu/inicio.php',1015),
 (1040,'192.168.1.44','07/12/2010','VISITA NO SITE -','12:59:42','VISITANTE','/novo_visu/inicio.php',1016),
 (1041,'192.168.1.44','07/12/2010','VISITA NO SITE -','12:59:43','VISITANTE','/novo_visu/inicio.php',1017),
 (1042,'192.168.1.44','07/12/2010','VISITA NO SITE -','13:00:22','VISITANTE','/novo_visu/inicio.php',1018),
 (1043,'192.168.1.44','07/12/2010','VISITA NO SITE -','13:00:22','VISITANTE','/novo_visu/inicio.php',1019),
 (1044,'192.168.1.44','07/12/2010','VISITA NO SITE -','13:00:50','VISITANTE','/novo_visu/inicio.php',1020);
INSERT INTO `log_user_event` (`id`,`IP`,`DATA`,`EVENTO`,`HORA`,`USUARIO`,`ARQUIVO`,`QTD`) VALUES 
 (1045,'192.168.1.44','07/12/2010','VISITA NO SITE -','13:00:51','VISITANTE','/novo_visu/inicio.php',1021),
 (1046,'192.168.1.44','07/12/2010','VISITA NO SITE -','13:01:12','VISITANTE','/novo_visu/inicio.php',1022),
 (1047,'192.168.1.44','07/12/2010','VISITA NO SITE -','13:01:13','VISITANTE','/novo_visu/inicio.php',1023),
 (1048,'192.168.1.44','07/12/2010','VISITA NO SITE -','13:01:32','VISITANTE','/novo_visu/inicio.php',1024),
 (1049,'192.168.1.44','07/12/2010','VISITA NO SITE -','13:01:32','VISITANTE','/novo_visu/inicio.php',1025),
 (1050,'192.168.1.44','07/12/2010','VISITA NO SITE -','13:02:29','VISITANTE','/novo_visu/inicio.php',1026),
 (1051,'192.168.1.44','07/12/2010','VISITA NO SITE -','13:02:29','VISITANTE','/novo_visu/inicio.php',1027),
 (1052,'192.168.1.44','07/12/2010','VISITA NO SITE -','13:24:59','VISITANTE','/novo_visu/inicio.php',1028),
 (1053,'192.168.1.44','07/12/2010','VISITA NO SITE -','13:24:59','VISITANTE','/novo_visu/inicio.php',1029),
 (1054,'192.168.1.44','07/12/2010','VISITA NO SITE -','13:25:45','VISITANTE','/novo_visu/inicio.php',1030);
INSERT INTO `log_user_event` (`id`,`IP`,`DATA`,`EVENTO`,`HORA`,`USUARIO`,`ARQUIVO`,`QTD`) VALUES 
 (1055,'192.168.1.44','07/12/2010','VISITA NO SITE -','13:25:45','VISITANTE','/novo_visu/inicio.php',1031),
 (1056,'192.168.1.44','07/12/2010','VISITA NO SITE -','14:32:47','VISITANTE','/Novo_visu/inicio.php',1032),
 (1057,'192.168.1.44','07/12/2010','VISITA NO SITE -','14:32:47','VISITANTE','/Novo_visu/inicio.php',1033),
 (1058,'192.168.1.44','07/12/2010','VISITA NO SITE -','14:34:28','VISITANTE','/Novo_visu/inicio.php',1034),
 (1059,'192.168.1.44','07/12/2010','VISITA NO SITE -','14:34:28','VISITANTE','/Novo_visu/inicio.php',1035),
 (1060,'192.168.1.44','07/12/2010','VISITA NO SITE -','14:34:59','VISITANTE','/Novo_visu/inicio.php',1036),
 (1061,'192.168.1.44','07/12/2010','VISITA NO SITE -','14:34:59','VISITANTE','/Novo_visu/inicio.php',1037),
 (1062,'192.168.1.44','07/12/2010','VISITA NO SITE -','14:35:16','VISITANTE','/Novo_visu/inicio.php',1038),
 (1063,'192.168.1.44','07/12/2010','VISITA NO SITE -','14:35:16','VISITANTE','/Novo_visu/inicio.php',1039),
 (1064,'192.168.1.44','07/12/2010','VISITA NO SITE -','14:35:46','VISITANTE','/Novo_visu/inicio.php',1040);
INSERT INTO `log_user_event` (`id`,`IP`,`DATA`,`EVENTO`,`HORA`,`USUARIO`,`ARQUIVO`,`QTD`) VALUES 
 (1065,'192.168.1.44','07/12/2010','VISITA NO SITE -','14:35:47','VISITANTE','/Novo_visu/inicio.php',1041),
 (1066,'192.168.1.44','07/12/2010','VISITA NO SITE -','14:36:47','VISITANTE','/Novo_visu/inicio.php',1042),
 (1067,'192.168.1.44','07/12/2010','VISITA NO SITE -','14:36:47','VISITANTE','/Novo_visu/inicio.php',1043),
 (1068,'192.168.1.44','07/12/2010','VISITA NO SITE -','14:37:02','VISITANTE','/Novo_visu/inicio.php',1044),
 (1069,'192.168.1.44','07/12/2010','VISITA NO SITE -','14:37:03','VISITANTE','/Novo_visu/inicio.php',1045),
 (1070,'192.168.1.44','07/12/2010','VISITA NO SITE -','14:38:35','VISITANTE','/Novo_visu/inicio.php',1046),
 (1071,'192.168.1.44','07/12/2010','VISITA NO SITE -','14:38:35','VISITANTE','/Novo_visu/inicio.php',1047),
 (1072,'127.0.0.1','07/12/2010','VISITA NO SITE -','14:39:07','VISITANTE','/novo_visu/inicio.php',1048),
 (1073,'127.0.0.1','07/12/2010','VISITA NO SITE -','14:39:07','VISITANTE','/novo_visu/inicio.php',1049),
 (1074,'192.168.1.44','07/12/2010','VISITA NO SITE -','14:45:52','VISITANTE','/Novo_visu/inicio.php',1050);
INSERT INTO `log_user_event` (`id`,`IP`,`DATA`,`EVENTO`,`HORA`,`USUARIO`,`ARQUIVO`,`QTD`) VALUES 
 (1075,'192.168.1.44','07/12/2010','VISITA NO SITE -','14:45:52','VISITANTE','/Novo_visu/inicio.php',1051),
 (1076,'192.168.1.44','07/12/2010','VISITA NO SITE -','14:48:14','VISITANTE','/Novo_visu/inicio.php',1052),
 (1077,'192.168.1.44','07/12/2010','VISITA NO SITE -','14:48:15','VISITANTE','/Novo_visu/inicio.php',1053),
 (1078,'192.168.1.44','07/12/2010','VISITA NO SITE -','14:58:57','VISITANTE','/Novo_visu/inicio.php',1054),
 (1079,'192.168.1.44','07/12/2010','VISITA NO SITE -','14:58:57','VISITANTE','/Novo_visu/inicio.php',1055),
 (1080,'192.168.1.44','07/12/2010','VISITA NO SITE -','14:59:04','VISITANTE','/Novo_visu/inicio.php',1056),
 (1081,'192.168.1.44','07/12/2010','VISITA NO SITE -','14:59:05','VISITANTE','/Novo_visu/inicio.php',1057),
 (1082,'192.168.1.44','07/12/2010','VISITA NO SITE -','14:59:48','VISITANTE','/Novo_visu/inicio.php',1058),
 (1083,'192.168.1.44','07/12/2010','VISITA NO SITE -','14:59:48','VISITANTE','/Novo_visu/inicio.php',1059),
 (1084,'192.168.1.44','07/12/2010','VISITA NO SITE -','14:59:53','VISITANTE','/Novo_visu/inicio.php',1060);
INSERT INTO `log_user_event` (`id`,`IP`,`DATA`,`EVENTO`,`HORA`,`USUARIO`,`ARQUIVO`,`QTD`) VALUES 
 (1085,'192.168.1.44','07/12/2010','VISITA NO SITE -','14:59:53','VISITANTE','/Novo_visu/inicio.php',1061),
 (1086,'192.168.1.44','07/12/2010','VISITA NO SITE -','15:00:10','VISITANTE','/Novo_visu/inicio.php',1062),
 (1087,'192.168.1.44','07/12/2010','VISITA NO SITE -','15:00:10','VISITANTE','/Novo_visu/inicio.php',1063),
 (1088,'192.168.1.44','07/12/2010','VISITA NO SITE -','15:00:15','VISITANTE','/Novo_visu/inicio.php',1064),
 (1089,'192.168.1.44','07/12/2010','VISITA NO SITE -','15:00:15','VISITANTE','/Novo_visu/inicio.php',1065),
 (1090,'192.168.1.44','07/12/2010','VISITA NO SITE -','15:00:32','VISITANTE','/Novo_visu/inicio.php',1066),
 (1091,'192.168.1.44','07/12/2010','VISITA NO SITE -','15:00:33','VISITANTE','/Novo_visu/inicio.php',1067),
 (1092,'192.168.1.44','07/12/2010','VISITA NO SITE -','15:00:59','VISITANTE','/Novo_visu/inicio.php',1068),
 (1093,'192.168.1.44','07/12/2010','VISITA NO SITE -','15:00:59','VISITANTE','/Novo_visu/inicio.php',1069),
 (1094,'127.0.0.1','07/12/2010','VISITA NO SITE -','15:09:10','VISITANTE','/novo_visu/inicio.php',1070);
INSERT INTO `log_user_event` (`id`,`IP`,`DATA`,`EVENTO`,`HORA`,`USUARIO`,`ARQUIVO`,`QTD`) VALUES 
 (1095,'127.0.0.1','07/12/2010','VISITA NO SITE -','15:09:11','VISITANTE','/novo_visu/inicio.php',1071),
 (1096,'127.0.0.1','07/12/2010','VISITA NO SITE -','15:09:30','VISITANTE','/novo_visu/inicio.php',1072),
 (1097,'127.0.0.1','07/12/2010','VISITA NO SITE -','15:09:31','VISITANTE','/novo_visu/inicio.php',1073),
 (1098,'192.168.1.44','07/12/2010','VISITA NO SITE -','15:55:12','VISITANTE','/Novo_visu/inicio.php',1074),
 (1099,'192.168.1.44','07/12/2010','VISITA NO SITE -','15:55:12','VISITANTE','/Novo_visu/inicio.php',1075),
 (1100,'192.168.1.44','07/12/2010','VISITA NO SITE -','15:57:21','VISITANTE','/Novo_visu/inicio.php',1076),
 (1101,'192.168.1.44','07/12/2010','VISITA NO SITE -','15:57:21','VISITANTE','/Novo_visu/inicio.php',1077),
 (1102,'192.168.1.44','07/12/2010','VISITA NO SITE -','16:16:08','VISITANTE','/Novo_visu/inicio.php',1078),
 (1103,'192.168.1.44','07/12/2010','VISITA NO SITE -','16:16:08','VISITANTE','/Novo_visu/inicio.php',1079),
 (1104,'192.168.1.44','07/12/2010','VISITA NO SITE -','16:16:33','VISITANTE','/Novo_visu/inicio.php',1080);
INSERT INTO `log_user_event` (`id`,`IP`,`DATA`,`EVENTO`,`HORA`,`USUARIO`,`ARQUIVO`,`QTD`) VALUES 
 (1105,'192.168.1.44','07/12/2010','VISITA NO SITE -','16:18:09','VISITANTE','/Novo_visu/inicio.php',1081),
 (1106,'192.168.1.44','07/12/2010','VISITA NO SITE -','16:18:10','VISITANTE','/Novo_visu/inicio.php',1082),
 (1107,'192.168.1.44','07/12/2010','VISITA NO SITE -','16:18:29','VISITANTE','/Novo_visu/inicio.php',1083),
 (1108,'192.168.1.44','07/12/2010','VISITA NO SITE -','16:18:29','VISITANTE','/Novo_visu/inicio.php',1084),
 (1109,'192.168.1.44','07/12/2010','VISITA NO SITE -','16:19:24','VISITANTE','/Novo_visu/inicio.php',1085),
 (1110,'192.168.1.44','07/12/2010','VISITA NO SITE -','16:19:24','VISITANTE','/Novo_visu/inicio.php',1086),
 (1111,'192.168.1.44','07/12/2010','VISITA NO SITE -','16:19:35','VISITANTE','/Novo_visu/inicio.php',1087),
 (1112,'192.168.1.44','07/12/2010','VISITA NO SITE -','16:20:13','VISITANTE','/Novo_visu/inicio.php',1088),
 (1113,'192.168.1.44','07/12/2010','VISITA NO SITE -','16:20:14','VISITANTE','/Novo_visu/inicio.php',1089),
 (1114,'192.168.1.44','07/12/2010','VISITA NO SITE -','16:21:33','VISITANTE','/Novo_visu/inicio.php',1090);
INSERT INTO `log_user_event` (`id`,`IP`,`DATA`,`EVENTO`,`HORA`,`USUARIO`,`ARQUIVO`,`QTD`) VALUES 
 (1115,'192.168.1.44','07/12/2010','VISITA NO SITE -','16:21:33','VISITANTE','/Novo_visu/inicio.php',1091),
 (1116,'192.168.1.44','07/12/2010','VISITA NO SITE -','16:22:37','VISITANTE','/Novo_visu/inicio.php',1092),
 (1117,'192.168.1.44','07/12/2010','VISITA NO SITE -','16:22:38','VISITANTE','/Novo_visu/inicio.php',1093),
 (1118,'192.168.1.44','07/12/2010','VISITA NO SITE -','16:23:58','VISITANTE','/Novo_visu/inicio.php',1094),
 (1119,'192.168.1.44','07/12/2010','VISITA NO SITE -','16:48:10','VISITANTE','/Novo_visu/inicio.php',1095),
 (1120,'192.168.1.44','07/12/2010','VISITA NO SITE -','16:48:32','VISITANTE','/Novo_visu/inicio.php',1096),
 (1121,'192.168.1.44','07/12/2010','VISITA NO SITE -','16:48:32','VISITANTE','/Novo_visu/inicio.php',1097),
 (1122,'192.168.1.44','07/12/2010','VISITA NO SITE -','16:48:56','VISITANTE','/Novo_visu/inicio.php',1098),
 (1123,'192.168.1.44','07/12/2010','VISITA NO SITE -','16:48:57','VISITANTE','/Novo_visu/inicio.php',1099),
 (1124,'192.168.1.44','07/12/2010','VISITA NO SITE -','16:50:21','VISITANTE','/Novo_visu/inicio.php',1100);
INSERT INTO `log_user_event` (`id`,`IP`,`DATA`,`EVENTO`,`HORA`,`USUARIO`,`ARQUIVO`,`QTD`) VALUES 
 (1125,'192.168.1.44','07/12/2010','VISITA NO SITE -','16:50:21','VISITANTE','/Novo_visu/inicio.php',1101),
 (1126,'127.0.0.1','07/12/2010','VISITA NO SITE -','18:13:38','VISITANTE','/novo_visu/inicio.php',1102),
 (1127,'192.168.1.44','07/12/2010','VISITA NO SITE -','18:35:37','VISITANTE','/Novo_visu/inicio.php',1103),
 (1128,'192.168.1.44','07/12/2010','VISITA NO SITE -','18:35:37','VISITANTE','/Novo_visu/inicio.php',1104),
 (1129,'192.168.1.44','07/12/2010','VISITA NO SITE -','18:36:54','VISITANTE','/Novo_visu/inicio.php',1105),
 (1130,'192.168.1.44','07/12/2010','VISITA NO SITE -','18:36:54','VISITANTE','/Novo_visu/inicio.php',1106),
 (1131,'192.168.1.44','07/12/2010','VISITA NO SITE -','18:37:58','VISITANTE','/Novo_visu/inicio.php',1107),
 (1132,'192.168.1.44','07/12/2010','VISITA NO SITE -','18:38:10','VISITANTE','/Novo_visu/inicio.php',1108),
 (1133,'192.168.1.44','07/12/2010','VISITA NO SITE -','18:38:10','VISITANTE','/Novo_visu/inicio.php',1109),
 (1134,'192.168.1.44','07/12/2010','VISITA NO SITE -','18:42:06','VISITANTE','/Novo_visu/inicio.php',1110);
INSERT INTO `log_user_event` (`id`,`IP`,`DATA`,`EVENTO`,`HORA`,`USUARIO`,`ARQUIVO`,`QTD`) VALUES 
 (1135,'192.168.1.44','07/12/2010','VISITA NO SITE -','18:42:10','VISITANTE','/Novo_visu/inicio.php',1111),
 (1136,'192.168.1.44','07/12/2010','VISITA NO SITE -','18:43:38','VISITANTE','/Novo_visu/inicio.php',1112),
 (1137,'192.168.1.44','07/12/2010','VISITA NO SITE -','18:44:18','VISITANTE','/Novo_visu/inicio.php',1113),
 (1138,'192.168.1.44','07/12/2010','VISITA NO SITE -','18:45:03','VISITANTE','/Novo_visu/inicio.php',1114),
 (1139,'192.168.1.44','07/12/2010','VISITA NO SITE -','18:45:23','VISITANTE','/Novo_visu/inicio.php',1115),
 (1140,'192.168.1.44','07/12/2010','VISITA NO SITE -','18:46:19','VISITANTE','/Novo_visu/inicio.php',1116),
 (1141,'192.168.1.44','07/12/2010','VISITA NO SITE -','18:46:44','VISITANTE','/Novo_visu/inicio.php',1117),
 (1142,'192.168.1.44','07/12/2010','VISITA NO SITE -','18:47:02','VISITANTE','/Novo_visu/inicio.php',1118),
 (1143,'192.168.1.44','07/12/2010','VISITA NO SITE -','18:47:46','VISITANTE','/Novo_visu/inicio.php',1119),
 (1144,'192.168.1.44','07/12/2010','VISITA NO SITE -','18:48:06','VISITANTE','/Novo_visu/inicio.php',1120);
INSERT INTO `log_user_event` (`id`,`IP`,`DATA`,`EVENTO`,`HORA`,`USUARIO`,`ARQUIVO`,`QTD`) VALUES 
 (1145,'192.168.1.44','07/12/2010','VISITA NO SITE -','18:48:06','VISITANTE','/Novo_visu/inicio.php',1121),
 (1146,'192.168.1.44','07/12/2010','VISITA NO SITE -','18:48:16','VISITANTE','/Novo_visu/inicio.php',1122),
 (1147,'192.168.1.44','07/12/2010','VISITA NO SITE -','18:48:16','VISITANTE','/Novo_visu/inicio.php',1123),
 (1148,'192.168.1.44','07/12/2010','VISITA NO SITE -','18:48:37','VISITANTE','/Novo_visu/inicio.php',1124),
 (1149,'192.168.1.44','07/12/2010','VISITA NO SITE -','18:48:37','VISITANTE','/Novo_visu/inicio.php',1125),
 (1150,'192.168.1.44','07/12/2010','VISITA NO SITE -','18:49:04','VISITANTE','/Novo_visu/inicio.php',1126),
 (1151,'192.168.1.44','07/12/2010','VISITA NO SITE -','18:49:04','VISITANTE','/Novo_visu/inicio.php',1127),
 (1152,'192.168.1.44','07/12/2010','VISITA NO SITE -','18:49:11','VISITANTE','/Novo_visu/inicio.php',1128),
 (1153,'192.168.1.44','07/12/2010','VISITA NO SITE -','18:49:11','VISITANTE','/Novo_visu/inicio.php',1129),
 (1154,'192.168.1.44','07/12/2010','VISITA NO SITE -','18:49:20','VISITANTE','/Novo_visu/inicio.php',1130);
INSERT INTO `log_user_event` (`id`,`IP`,`DATA`,`EVENTO`,`HORA`,`USUARIO`,`ARQUIVO`,`QTD`) VALUES 
 (1155,'192.168.1.44','07/12/2010','VISITA NO SITE -','18:49:20','VISITANTE','/Novo_visu/inicio.php',1131),
 (1156,'192.168.1.44','07/12/2010','VISITA NO SITE -','18:49:49','VISITANTE','/Novo_visu/inicio.php',1132),
 (1157,'192.168.1.44','07/12/2010','VISITA NO SITE -','18:49:49','VISITANTE','/Novo_visu/inicio.php',1133),
 (1158,'192.168.1.44','07/12/2010','VISITA NO SITE -','18:50:22','VISITANTE','/Novo_visu/inicio.php',1134),
 (1159,'192.168.1.44','07/12/2010','VISITA NO SITE -','18:50:22','VISITANTE','/Novo_visu/inicio.php',1135),
 (1160,'192.168.1.44','07/12/2010','VISITA NO SITE -','18:50:26','VISITANTE','/Novo_visu/inicio.php',1136),
 (1161,'192.168.1.44','07/12/2010','VISITA NO SITE -','18:50:27','VISITANTE','/Novo_visu/inicio.php',1137),
 (1162,'127.0.0.1','07/12/2010','VISITA NO SITE -','18:56:36','VISITANTE','/novo_visu/inicio.php',1138),
 (1163,'127.0.0.1','07/12/2010','VISITA NO SITE -','18:56:36','VISITANTE','/novo_visu/inicio.php',1139),
 (1164,'192.168.1.61','07/12/2010','VISITA NO SITE -','18:57:11','VISITANTE','/novo_visu/inicio.php',1140);
INSERT INTO `log_user_event` (`id`,`IP`,`DATA`,`EVENTO`,`HORA`,`USUARIO`,`ARQUIVO`,`QTD`) VALUES 
 (1165,'192.168.1.61','07/12/2010','VISITA NO SITE -','18:57:11','VISITANTE','/novo_visu/inicio.php',1141),
 (1166,'192.168.1.61','07/12/2010','VISITA NO SITE -','18:57:46','VISITANTE','/novo_visu/inicio.php',1142),
 (1167,'127.0.0.1','07/12/2010','VISITA NO SITE -','18:58:00','VISITANTE','/novo_visu/inicio.php',1143),
 (1168,'127.0.0.1','07/12/2010','VISITA NO SITE -','18:58:22','VISITANTE','/novo_visu/inicio.php',1144),
 (1169,'192.168.1.61','07/12/2010','VISITA NO SITE -','19:01:25','VISITANTE','/novo_visu/inicio.php',1145),
 (1170,'192.168.1.61','07/12/2010','VISITA NO SITE -','19:01:35','VISITANTE','/novo_visu/inicio.php',1146),
 (1171,'192.168.1.61','07/12/2010','VISITA NO SITE -','19:02:07','VISITANTE','/novo_visu/inicio.php',1147),
 (1172,'192.168.1.61','07/12/2010','VISITA NO SITE -','19:02:07','VISITANTE','/novo_visu/inicio.php',1148),
 (1173,'192.168.1.61','07/12/2010','VISITA NO SITE -','19:02:19','VISITANTE','/novo_visu/inicio.php',1149),
 (1174,'192.168.1.61','07/12/2010','VISITA NO SITE -','19:02:19','VISITANTE','/novo_visu/inicio.php',1150);
INSERT INTO `log_user_event` (`id`,`IP`,`DATA`,`EVENTO`,`HORA`,`USUARIO`,`ARQUIVO`,`QTD`) VALUES 
 (1175,'192.168.1.61','07/12/2010','VISITA NO SITE -','19:05:47','VISITANTE','/novo_visu/inicio.php',1151),
 (1176,'192.168.1.61','07/12/2010','VISITA NO SITE -','19:14:29','VISITANTE','/novo_visu/inicio.php',1152),
 (1177,'192.168.1.44','08/12/2010','VISITA NO SITE -','08:53:41','VISITANTE','/novo_visu/inicio.php',1153),
 (1178,'192.168.1.44','08/12/2010','VISITA NO SITE -','08:53:41','VISITANTE','/novo_visu/inicio.php',1154),
 (1179,'192.168.1.44','08/12/2010','VISITA NO SITE -','08:54:39','VISITANTE','/novo_visu/inicio.php',1155),
 (1180,'192.168.1.44','08/12/2010','VISITA NO SITE -','08:55:19','VISITANTE','/novo_visu/inicio.php',1156),
 (1181,'192.168.1.44','08/12/2010','VISITA NO SITE -','08:55:39','VISITANTE','/novo_visu/inicio.php',1157),
 (1182,'192.168.1.44','08/12/2010','VISITA NO SITE -','09:01:25','VISITANTE','/novo_visu/inicio.php',1158),
 (1183,'192.168.1.44','08/12/2010','VISITA NO SITE -','09:01:49','VISITANTE','/novo_visu/inicio.php',1159),
 (1184,'192.168.1.44','08/12/2010','VISITA NO SITE -','09:02:16','VISITANTE','/novo_visu/inicio.php',1160);
INSERT INTO `log_user_event` (`id`,`IP`,`DATA`,`EVENTO`,`HORA`,`USUARIO`,`ARQUIVO`,`QTD`) VALUES 
 (1185,'192.168.1.44','08/12/2010','VISITA NO SITE -','09:03:55','VISITANTE','/novo_visu/inicio.php',1161),
 (1186,'192.168.1.44','08/12/2010','VISITA NO SITE -','09:04:18','VISITANTE','/novo_visu/inicio.php',1162),
 (1187,'192.168.1.44','08/12/2010','VISITA NO SITE -','09:04:56','VISITANTE','/novo_visu/inicio.php',1163),
 (1188,'192.168.1.44','08/12/2010','VISITA NO SITE -','09:06:56','VISITANTE','/novo_visu/inicio.php',1164),
 (1189,'127.0.0.1','08/12/2010','VISITA NO SITE -','19:12:16','VISITANTE','/novo_visu/inicio.php',1165),
 (1190,'127.0.0.1','08/12/2010','VISITA NO SITE -','19:12:16','VISITANTE','/novo_visu/inicio.php',1166),
 (1191,'127.0.0.1','08/12/2010','VISITA NO SITE -','19:13:01','VISITANTE','/novo_visu/inicio.php',1167),
 (1192,'127.0.0.1','08/12/2010','VISITA NO SITE -','19:13:02','VISITANTE','/novo_visu/inicio.php',1168),
 (1193,'127.0.0.1','08/12/2010','VISITA NO SITE -','19:14:16','VISITANTE','/novo_visu/inicio.php',1169),
 (1194,'127.0.0.1','08/12/2010','VISITA NO SITE -','19:14:16','VISITANTE','/novo_visu/inicio.php',1170);
INSERT INTO `log_user_event` (`id`,`IP`,`DATA`,`EVENTO`,`HORA`,`USUARIO`,`ARQUIVO`,`QTD`) VALUES 
 (1195,'127.0.0.1','08/12/2010','VISITA NO SITE -','19:16:03','VISITANTE','/novo_visu/inicio.php',1171),
 (1196,'127.0.0.1','08/12/2010','VISITA NO SITE -','19:16:03','VISITANTE','/novo_visu/inicio.php',1172),
 (1197,'127.0.0.1','08/12/2010','VISITA NO SITE -','19:17:25','VISITANTE','/novo_visu/inicio.php',1173),
 (1198,'127.0.0.1','08/12/2010','VISITA NO SITE -','19:17:25','VISITANTE','/novo_visu/inicio.php',1174),
 (1199,'127.0.0.1','08/12/2010','VISITA NO SITE -','19:18:20','VISITANTE','/novo_visu/inicio.php',1175),
 (1200,'127.0.0.1','08/12/2010','VISITA NO SITE -','19:18:21','VISITANTE','/novo_visu/inicio.php',1176),
 (1201,'127.0.0.1','08/12/2010','VISITA NO SITE -','19:19:17','VISITANTE','/novo_visu/inicio.php',1177),
 (1202,'127.0.0.1','08/12/2010','VISITA NO SITE -','19:19:17','VISITANTE','/novo_visu/inicio.php',1178),
 (1203,'127.0.0.1','08/12/2010','VISITA NO SITE -','19:20:36','VISITANTE','/novo_visu/inicio.php',1179),
 (1204,'127.0.0.1','08/12/2010','VISITA NO SITE -','19:20:36','VISITANTE','/novo_visu/inicio.php',1180);
INSERT INTO `log_user_event` (`id`,`IP`,`DATA`,`EVENTO`,`HORA`,`USUARIO`,`ARQUIVO`,`QTD`) VALUES 
 (1205,'127.0.0.1','08/12/2010','VISITA NO SITE -','19:21:16','VISITANTE','/novo_visu/inicio.php',1181),
 (1206,'127.0.0.1','08/12/2010','VISITA NO SITE -','19:21:16','VISITANTE','/novo_visu/inicio.php',1182),
 (1207,'192.168.1.44','08/12/2010','VISITA NO SITE -','19:21:36','VISITANTE','/novo_visu/inicio.php',1183),
 (1208,'192.168.1.44','08/12/2010','VISITA NO SITE -','19:21:36','VISITANTE','/novo_visu/inicio.php',1184),
 (1209,'192.168.1.44','08/12/2010','VISITA NO SITE -','19:23:34','VISITANTE','/novo_visu/inicio.php',1185),
 (1210,'192.168.1.44','08/12/2010','VISITA NO SITE -','19:23:35','VISITANTE','/novo_visu/inicio.php',1186),
 (1211,'192.168.1.44','09/12/2010','VISITA NO SITE -','09:33:08','VISITANTE','/novo_visu/inicio.php',1187),
 (1212,'192.168.1.44','09/12/2010','VISITA NO SITE -','09:34:21','VISITANTE','/novo_visu/inicio.php',1188),
 (1213,'192.168.1.44','09/12/2010','VISITA NO SITE -','09:34:22','VISITANTE','/novo_visu/inicio.php',1189),
 (1214,'192.168.1.44','09/12/2010','VISITA NO SITE -','09:34:47','VISITANTE','/novo_visu/inicio.php',1190);
INSERT INTO `log_user_event` (`id`,`IP`,`DATA`,`EVENTO`,`HORA`,`USUARIO`,`ARQUIVO`,`QTD`) VALUES 
 (1215,'192.168.1.44','09/12/2010','VISITA NO SITE -','09:34:47','VISITANTE','/novo_visu/inicio.php',1191),
 (1216,'192.168.1.44','09/12/2010','VISITA NO SITE -','09:35:04','VISITANTE','/novo_visu/inicio.php',1192),
 (1217,'192.168.1.44','09/12/2010','VISITA NO SITE -','09:35:05','VISITANTE','/novo_visu/inicio.php',1193),
 (1218,'192.168.1.44','09/12/2010','VISITA NO SITE -','09:36:42','VISITANTE','/novo_visu/inicio.php',1194),
 (1219,'192.168.1.44','09/12/2010','VISITA NO SITE -','09:36:42','VISITANTE','/novo_visu/inicio.php',1195),
 (1220,'192.168.1.44','09/12/2010','VISITA NO SITE -','09:39:44','VISITANTE','/novo_visu/inicio.php',1196),
 (1221,'192.168.1.44','09/12/2010','VISITA NO SITE -','09:39:44','VISITANTE','/novo_visu/inicio.php',1197),
 (1222,'192.168.1.44','09/12/2010','VISITA NO SITE -','09:40:16','VISITANTE','/novo_visu/inicio.php',1198),
 (1223,'192.168.1.44','09/12/2010','VISITA NO SITE -','09:40:16','VISITANTE','/novo_visu/inicio.php',1199),
 (1224,'192.168.1.44','09/12/2010','VISITA NO SITE -','09:42:05','VISITANTE','/novo_visu/inicio.php',1200);
INSERT INTO `log_user_event` (`id`,`IP`,`DATA`,`EVENTO`,`HORA`,`USUARIO`,`ARQUIVO`,`QTD`) VALUES 
 (1225,'192.168.1.44','09/12/2010','VISITA NO SITE -','09:42:05','VISITANTE','/novo_visu/inicio.php',1201),
 (1226,'192.168.1.44','09/12/2010','VISITA NO SITE -','11:22:29','VISITANTE','/novo_visu/inicio.php',1202),
 (1227,'192.168.1.44','09/12/2010','VISITA NO SITE -','11:22:30','VISITANTE','/novo_visu/inicio.php',1203),
 (1228,'192.168.1.44','09/12/2010','VISITA NO SITE -','11:29:44','VISITANTE','/novo_visu/inicio.php',1204),
 (1229,'192.168.1.44','09/12/2010','VISITA NO SITE -','11:29:44','VISITANTE','/novo_visu/inicio.php',1205),
 (1230,'192.168.1.44','09/12/2010','VISITA NO SITE -','11:41:27','VISITANTE','/novo_visu/inicio.php',1206),
 (1231,'192.168.1.44','09/12/2010','VISITA NO SITE -','11:41:27','VISITANTE','/novo_visu/inicio.php',1207),
 (1232,'192.168.1.44','09/12/2010','VISITA NO SITE -','11:41:46','VISITANTE','/novo_visu/inicio.php',1208),
 (1233,'127.0.0.1','09/12/2010','VISITA NO SITE -','12:05:54','VISITANTE','/novo_visu/inicio.php',1209),
 (1234,'127.0.0.1','09/12/2010','VISITA NO SITE -','12:10:31','VISITANTE','/novo_visu/inicio.php',1210);
INSERT INTO `log_user_event` (`id`,`IP`,`DATA`,`EVENTO`,`HORA`,`USUARIO`,`ARQUIVO`,`QTD`) VALUES 
 (1235,'127.0.0.1','09/12/2010','VISITA NO SITE -','12:10:31','VISITANTE','/novo_visu/inicio.php',1211),
 (1236,'127.0.0.1','09/12/2010','VISITA NO SITE -','12:12:33','VISITANTE','/novo_visu/inicio.php',1212),
 (1237,'127.0.0.1','09/12/2010','VISITA NO SITE -','12:13:50','VISITANTE','/novo_visu/inicio.php',1213),
 (1238,'192.168.1.44','09/12/2010','VISITA NO SITE -','12:57:07','VISITANTE','/novo_visu/inicio.php',1214),
 (1239,'192.168.1.44','09/12/2010','VISITA NO SITE -','12:57:07','VISITANTE','/novo_visu/inicio.php',1215),
 (1240,'192.168.1.44','09/12/2010','VISITA NO SITE -','12:58:01','VISITANTE','/novo_visu/inicio.php',1216),
 (1241,'192.168.1.44','09/12/2010','VISITA NO SITE -','12:58:39','VISITANTE','/novo_visu/inicio.php',1217),
 (1242,'192.168.1.44','09/12/2010','VISITA NO SITE -','13:00:34','VISITANTE','/novo_visu/inicio.php',1218),
 (1243,'192.168.1.44','09/12/2010','VISITA NO SITE -','13:11:00','VISITANTE','/novo_visu/inicio.php',1219),
 (1244,'192.168.1.44','09/12/2010','VISITA NO SITE -','13:11:28','VISITANTE','/novo_visu/inicio.php',1220);
INSERT INTO `log_user_event` (`id`,`IP`,`DATA`,`EVENTO`,`HORA`,`USUARIO`,`ARQUIVO`,`QTD`) VALUES 
 (1245,'192.168.1.44','09/12/2010','VISITA NO SITE -','13:16:27','VISITANTE','/novo_visu/inicio.php',1221),
 (1246,'192.168.1.44','09/12/2010','VISITA NO SITE -','13:21:35','VISITANTE','/novo_visu/inicio.php',1222),
 (1247,'192.168.1.44','09/12/2010','VISITA NO SITE -','13:25:11','VISITANTE','/novo_visu/inicio.php',1223),
 (1248,'192.168.1.44','09/12/2010','VISITA NO SITE -','16:10:33','VISITANTE','/novo_visu/inicio.php',1224),
 (1249,'192.168.1.44','09/12/2010','VISITA NO SITE -','16:10:33','VISITANTE','/novo_visu/inicio.php',1225),
 (1250,'192.168.1.44','09/12/2010','VISITA NO SITE -','16:21:33','VISITANTE','/novo_visu/inicio.php',1226),
 (1251,'192.168.1.44','09/12/2010','VISITA NO SITE -','17:12:44','VISITANTE','/novo_visu/inicio.php',1227),
 (1252,'192.168.1.44','09/12/2010','VISITA NO SITE -','17:15:32','VISITANTE','/novo_visu/inicio.php',1228),
 (1253,'192.168.1.61','09/12/2010','VISITA NO SITE -','17:22:06','VISITANTE','/novo_visu/inicio.php',1229),
 (1254,'192.168.1.61','09/12/2010','VISITA NO SITE -','17:22:06','VISITANTE','/novo_visu/inicio.php',1230);
INSERT INTO `log_user_event` (`id`,`IP`,`DATA`,`EVENTO`,`HORA`,`USUARIO`,`ARQUIVO`,`QTD`) VALUES 
 (1255,'192.168.1.44','09/12/2010','VISITA NO SITE -','17:27:32','VISITANTE','/novo_visu/inicio.php',1231),
 (1256,'192.168.1.44','09/12/2010','VISITA NO SITE -','17:32:25','VISITANTE','/novo_visu/inicio.php',1232),
 (1257,'192.168.1.44','09/12/2010','VISITA NO SITE -','17:34:33','VISITANTE','/novo_visu/inicio.php',1233),
 (1258,'192.168.1.44','09/12/2010','VISITA NO SITE -','17:53:39','VISITANTE','/novo_visu/inicio.php',1234),
 (1259,'127.0.0.1','09/12/2010','VISITA NO SITE -','18:36:19','VISITANTE','/novo_visu/inicio.php',1235),
 (1260,'127.0.0.1','09/12/2010','VISITA NO SITE -','18:36:19','VISITANTE','/novo_visu/inicio.php',1236),
 (1261,'192.168.1.61','09/12/2010','VISITA NO SITE -','18:42:04','VISITANTE','/novo_visu/inicio.php',1237),
 (1262,'192.168.1.61','09/12/2010','VISITA NO SITE -','18:59:54','VISITANTE','/novo_visu/inicio.php',1238),
 (1263,'192.168.1.61','09/12/2010','VISITA NO SITE -','18:59:54','VISITANTE','/novo_visu/inicio.php',1239),
 (1264,'192.168.1.61','09/12/2010','VISITA NO SITE -','19:00:44','VISITANTE','/novo_visu/inicio.php',1240);
INSERT INTO `log_user_event` (`id`,`IP`,`DATA`,`EVENTO`,`HORA`,`USUARIO`,`ARQUIVO`,`QTD`) VALUES 
 (1265,'192.168.1.61','09/12/2010','VISITA NO SITE -','19:05:09','VISITANTE','/novo_visu/inicio.php',1241),
 (1266,'192.168.1.61','09/12/2010','VISITA NO SITE -','19:05:14','VISITANTE','/novo_visu/inicio.php',1242),
 (1267,'192.168.1.61','09/12/2010','VISITA NO SITE -','19:05:20','VISITANTE','/novo_visu/inicio.php',1243),
 (1268,'192.168.1.61','09/12/2010','VISITA NO SITE -','19:05:44','VISITANTE','/novo_visu/inicio.php',1244),
 (1269,'192.168.1.61','09/12/2010','VISITA NO SITE -','19:07:38','VISITANTE','/novo_visu/inicio.php',1245),
 (1270,'127.0.0.1','09/12/2010','VISITA NO SITE -','21:24:34','VISITANTE','/novo_visu/inicio.php',1246),
 (1271,'127.0.0.1','09/12/2010','VISITA NO SITE -','21:24:34','VISITANTE','/novo_visu/inicio.php',1247),
 (1272,'192.168.1.61','10/12/2010','VISITA NO SITE -','09:07:26','VISITANTE','/novo_visu/inicio.php',1248),
 (1273,'192.168.1.61','10/12/2010','VISITA NO SITE -','09:07:27','VISITANTE','/novo_visu/inicio.php',1249),
 (1274,'192.168.1.61','10/12/2010','VISITA NO SITE -','09:08:59','VISITANTE','/novo_visu/inicio.php',1250);
INSERT INTO `log_user_event` (`id`,`IP`,`DATA`,`EVENTO`,`HORA`,`USUARIO`,`ARQUIVO`,`QTD`) VALUES 
 (1275,'192.168.1.61','10/12/2010','VISITA NO SITE -','09:47:55','VISITANTE','/novo_visu/inicio.php',1251),
 (1276,'192.168.1.61','10/12/2010','VISITA NO SITE -','09:49:36','VISITANTE','/novo_visu/inicio.php',1252),
 (1277,'192.168.1.61','10/12/2010','VISITA NO SITE -','09:52:27','VISITANTE','/novo_visu/inicio.php',1253),
 (1278,'192.168.1.61','10/12/2010','VISITA NO SITE -','09:52:41','VISITANTE','/novo_visu/inicio.php',1254),
 (1279,'192.168.1.61','10/12/2010','VISITA NO SITE -','09:59:08','VISITANTE','/novo_visu/inicio.php',1255),
 (1280,'192.168.1.61','10/12/2010','VISITA NO SITE -','09:59:14','VISITANTE','/novo_visu/inicio.php',1256),
 (1281,'192.168.1.61','10/12/2010','VISITA NO SITE -','09:59:20','VISITANTE','/novo_visu/inicio.php',1257),
 (1282,'192.168.1.61','10/12/2010','VISITA NO SITE -','10:02:04','VISITANTE','/novo_visu/inicio.php',1258),
 (1283,'192.168.1.61','10/12/2010','VISITA NO SITE -','10:02:27','VISITANTE','/novo_visu/inicio.php',1259),
 (1284,'192.168.1.61','10/12/2010','VISITA NO SITE -','10:02:49','VISITANTE','/novo_visu/inicio.php',1260);
INSERT INTO `log_user_event` (`id`,`IP`,`DATA`,`EVENTO`,`HORA`,`USUARIO`,`ARQUIVO`,`QTD`) VALUES 
 (1285,'192.168.1.61','10/12/2010','VISITA NO SITE -','10:03:05','VISITANTE','/novo_visu/inicio.php',1261),
 (1286,'192.168.1.61','10/12/2010','VISITA NO SITE -','10:03:33','VISITANTE','/novo_visu/inicio.php',1262),
 (1287,'192.168.1.61','10/12/2010','VISITA NO SITE -','10:03:37','VISITANTE','/novo_visu/inicio.php',1263),
 (1288,'192.168.1.61','10/12/2010','VISITA NO SITE -','10:03:43','VISITANTE','/novo_visu/inicio.php',1264),
 (1289,'192.168.1.61','10/12/2010','VISITA NO SITE -','10:04:00','VISITANTE','/novo_visu/inicio.php',1265),
 (1290,'192.168.1.61','10/12/2010','VISITA NO SITE -','10:04:38','VISITANTE','/novo_visu/inicio.php',1266),
 (1291,'192.168.1.61','10/12/2010','VISITA NO SITE -','10:05:13','VISITANTE','/novo_visu/inicio.php',1267),
 (1292,'192.168.1.61','10/12/2010','VISITA NO SITE -','10:06:05','VISITANTE','/novo_visu/inicio.php',1268),
 (1293,'192.168.1.61','10/12/2010','VISITA NO SITE -','10:06:24','VISITANTE','/novo_visu/inicio.php',1269),
 (1294,'192.168.1.61','10/12/2010','VISITA NO SITE -','10:06:28','VISITANTE','/novo_visu/inicio.php',1270);
INSERT INTO `log_user_event` (`id`,`IP`,`DATA`,`EVENTO`,`HORA`,`USUARIO`,`ARQUIVO`,`QTD`) VALUES 
 (1295,'192.168.1.44','10/12/2010','VISITA NO SITE -','12:07:41','VISITANTE','/novo_visu/inicio.php',1271),
 (1296,'192.168.1.44','10/12/2010','VISITA NO SITE -','12:12:49','VISITANTE','/novo_visu/inicio.php',1272),
 (1297,'192.168.1.44','10/12/2010','VISITA NO SITE -','12:13:05','VISITANTE','/novo_visu/inicio.php',1273),
 (1298,'192.168.1.44','10/12/2010','VISITA NO SITE -','12:13:57','VISITANTE','/novo_visu/inicio.php',1274),
 (1299,'192.168.1.44','10/12/2010','VISITA NO SITE -','12:14:07','VISITANTE','/novo_visu/inicio.php',1275),
 (1300,'192.168.1.44','10/12/2010','VISITA NO SITE -','12:14:33','VISITANTE','/novo_visu/inicio.php',1276),
 (1301,'192.168.1.44','10/12/2010','VISITA NO SITE -','12:15:52','VISITANTE','/novo_visu/inicio.php',1277),
 (1302,'192.168.1.44','10/12/2010','VISITA NO SITE -','12:15:59','VISITANTE','/novo_visu/inicio.php',1278),
 (1303,'192.168.1.44','10/12/2010','VISITA NO SITE -','12:15:59','VISITANTE','/novo_visu/inicio.php',1279),
 (1304,'192.168.1.44','10/12/2010','VISITA NO SITE -','12:16:44','VISITANTE','/novo_visu/inicio.php',1280);
INSERT INTO `log_user_event` (`id`,`IP`,`DATA`,`EVENTO`,`HORA`,`USUARIO`,`ARQUIVO`,`QTD`) VALUES 
 (1305,'192.168.1.44','10/12/2010','VISITA NO SITE -','12:20:58','VISITANTE','/novo_visu/inicio.php',1281),
 (1306,'127.0.0.1','10/12/2010','VISITA NO SITE -','12:30:37','VISITANTE','/novo_visu/inicio.php',1282),
 (1307,'127.0.0.1','10/12/2010','VISITA NO SITE -','12:30:37','VISITANTE','/novo_visu/inicio.php',1283),
 (1308,'127.0.0.1','10/12/2010','VISITA NO SITE -','12:30:50','VISITANTE','/novo_visu/inicio.php',1284),
 (1309,'127.0.0.1','10/12/2010','VISITA NO SITE -','12:30:51','VISITANTE','/novo_visu/inicio.php',1285),
 (1310,'127.0.0.1','10/12/2010','VISITA NO SITE -','12:31:37','VISITANTE','/novo_visu/inicio.php',1286),
 (1311,'127.0.0.1','10/12/2010','VISITA NO SITE -','12:31:37','VISITANTE','/novo_visu/inicio.php',1287),
 (1312,'127.0.0.1','10/12/2010','VISITA NO SITE -','14:01:57','VISITANTE','/novo_visu/inicio.php',1288),
 (1313,'127.0.0.1','10/12/2010','VISITA NO SITE -','14:01:58','VISITANTE','/novo_visu/inicio.php',1289),
 (1314,'127.0.0.1','10/12/2010','VISITA NO SITE -','14:02:58','VISITANTE','/site/novo_lay/inicio.php',1290);
INSERT INTO `log_user_event` (`id`,`IP`,`DATA`,`EVENTO`,`HORA`,`USUARIO`,`ARQUIVO`,`QTD`) VALUES 
 (1315,'127.0.0.1','12/12/2010','VISITA NO SITE -','20:00:54','VISITANTE','/novo_visu/inicio.php',1291),
 (1316,'127.0.0.1','12/12/2010','VISITA NO SITE -','20:00:55','VISITANTE','/novo_visu/inicio.php',1292),
 (1317,'127.0.0.1','12/12/2010','VISITA NO SITE -','20:01:35','VISITANTE','/novo_visu/inicio.php',1293),
 (1318,'127.0.0.1','12/12/2010','VISITA NO SITE -','20:01:49','VISITANTE','/novo_visu/inicio.php',1294),
 (1319,'127.0.0.1','12/12/2010','VISITA NO SITE -','20:48:12','VISITANTE','/novo_visu/inicio.php',1295),
 (1320,'127.0.0.1','12/12/2010','VISITA NO SITE -','21:06:28','VISITANTE','/novo_visu/inicio.php',1296),
 (1321,'127.0.0.1','12/12/2010','VISITA NO SITE -','21:06:29','VISITANTE','/novo_visu/inicio.php',1297),
 (1322,'127.0.0.1','12/12/2010','VISITA NO SITE -','21:09:42','VISITANTE','/novo_visu/inicio.php',1298),
 (1323,'127.0.0.1','12/12/2010','VISITA NO SITE -','21:11:00','VISITANTE','/novo_visu/inicio.php',1299),
 (1324,'127.0.0.1','12/12/2010','VISITA NO SITE -','21:11:01','VISITANTE','/novo_visu/inicio.php',1300);
INSERT INTO `log_user_event` (`id`,`IP`,`DATA`,`EVENTO`,`HORA`,`USUARIO`,`ARQUIVO`,`QTD`) VALUES 
 (1325,'127.0.0.1','12/12/2010','VISITA NO SITE -','21:12:11','VISITANTE','/novo_visu/inicio.php',1301),
 (1326,'127.0.0.1','12/12/2010','VISITA NO SITE -','21:12:11','VISITANTE','/novo_visu/inicio.php',1302),
 (1327,'127.0.0.1','12/12/2010','VISITA NO SITE -','21:12:26','VISITANTE','/novo_visu/inicio.php',1303),
 (1328,'127.0.0.1','12/12/2010','VISITA NO SITE -','21:12:27','VISITANTE','/novo_visu/inicio.php',1304),
 (1329,'127.0.0.1','12/12/2010','VISITA NO SITE -','21:13:45','VISITANTE','/novo_visu/inicio.php',1305),
 (1330,'127.0.0.1','12/12/2010','VISITA NO SITE -','21:13:45','VISITANTE','/novo_visu/inicio.php',1306),
 (1331,'127.0.0.1','12/12/2010','VISITA NO SITE -','21:15:43','VISITANTE','/novo_visu/inicio.php',1307),
 (1332,'127.0.0.1','12/12/2010','VISITA NO SITE -','21:15:48','VISITANTE','/novo_visu/inicio.php',1308),
 (1333,'127.0.0.1','12/12/2010','VISITA NO SITE -','21:16:52','VISITANTE','/novo_visu/inicio.php',1309),
 (1334,'127.0.0.1','12/12/2010','VISITA NO SITE -','21:16:52','VISITANTE','/novo_visu/inicio.php',1310);
INSERT INTO `log_user_event` (`id`,`IP`,`DATA`,`EVENTO`,`HORA`,`USUARIO`,`ARQUIVO`,`QTD`) VALUES 
 (1335,'127.0.0.1','12/12/2010','VISITA NO SITE -','21:38:44','VISITANTE','/novo_visu/inicio.php',1311),
 (1336,'127.0.0.1','12/12/2010','VISITA NO SITE -','21:43:01','VISITANTE','/novo_visu/inicio.php',1312),
 (1337,'127.0.0.1','12/12/2010','VISITA NO SITE -','21:44:35','VISITANTE','/novo_visu/inicio.php',1313),
 (1338,'127.0.0.1','12/12/2010','VISITA NO SITE -','21:44:54','VISITANTE','/novo_visu/inicio.php',1314),
 (1339,'127.0.0.1','12/12/2010','VISITA NO SITE -','21:45:32','VISITANTE','/novo_visu/inicio.php',1315),
 (1340,'127.0.0.1','12/12/2010','VISITA NO SITE -','21:45:49','VISITANTE','/novo_visu/inicio.php',1316),
 (1341,'192.168.1.44','13/12/2010','VISITA NO SITE -','17:07:48','VISITANTE','/novo_visu/inicio.php',1317),
 (1342,'192.168.1.44','13/12/2010','VISITA NO SITE -','17:07:49','VISITANTE','/novo_visu/inicio.php',1318),
 (1343,'192.168.1.44','13/12/2010','VISITA NO SITE -','17:18:16','VISITANTE','/novo_visu/inicio.php',1319),
 (1344,'192.168.1.44','13/12/2010','VISITA NO SITE -','18:02:48','VISITANTE','/novo_visu/inicio.php',1320);
INSERT INTO `log_user_event` (`id`,`IP`,`DATA`,`EVENTO`,`HORA`,`USUARIO`,`ARQUIVO`,`QTD`) VALUES 
 (1345,'192.168.1.44','13/12/2010','VISITA NO SITE -','18:02:48','VISITANTE','/novo_visu/inicio.php',1321),
 (1346,'192.168.1.44','13/12/2010','VISITA NO SITE -','18:03:30','VISITANTE','/novo_visu/inicio.php',1322),
 (1347,'192.168.1.44','13/12/2010','VISITA NO SITE -','18:03:31','VISITANTE','/novo_visu/inicio.php',1323),
 (1348,'192.168.1.44','13/12/2010','VISITA NO SITE -','18:04:11','VISITANTE','/novo_visu/inicio.php',1324),
 (1349,'192.168.1.44','13/12/2010','VISITA NO SITE -','18:04:11','VISITANTE','/novo_visu/inicio.php',1325),
 (1350,'192.168.1.44','13/12/2010','VISITA NO SITE -','18:13:32','VISITANTE','/novo_visu/inicio.php',1326),
 (1351,'192.168.1.44','13/12/2010','VISITA NO SITE -','18:14:17','VISITANTE','/novo_visu/inicio.php',1327),
 (1352,'192.168.1.44','13/12/2010','VISITA NO SITE -','18:14:24','VISITANTE','/novo_visu/inicio.php',1328),
 (1353,'192.168.1.44','13/12/2010','VISITA NO SITE -','18:14:24','VISITANTE','/novo_visu/inicio.php',1329),
 (1354,'192.168.1.44','13/12/2010','VISITA NO SITE -','18:15:06','VISITANTE','/novo_visu/inicio.php',1330);
INSERT INTO `log_user_event` (`id`,`IP`,`DATA`,`EVENTO`,`HORA`,`USUARIO`,`ARQUIVO`,`QTD`) VALUES 
 (1355,'192.168.1.44','13/12/2010','VISITA NO SITE -','18:26:31','VISITANTE','/novo_visu/inicio.php',1331),
 (1356,'192.168.1.44','13/12/2010','VISITA NO SITE -','18:31:37','VISITANTE','/novo_visu/inicio.php',1332),
 (1357,'192.168.1.44','13/12/2010','VISITA NO SITE -','18:31:38','VISITANTE','/novo_visu/inicio.php',1333),
 (1358,'192.168.1.44','13/12/2010','VISITA NO SITE -','18:37:18','VISITANTE','/novo_visu/inicio.php',1334),
 (1359,'192.168.1.44','13/12/2010','VISITA NO SITE -','18:37:19','VISITANTE','/novo_visu/inicio.php',1335),
 (1360,'192.168.1.44','13/12/2010','VISITA NO SITE -','18:41:20','VISITANTE','/novo_visu/inicio.php',1336),
 (1361,'192.168.1.44','13/12/2010','VISITA NO SITE -','18:41:52','VISITANTE','/novo_visu/inicio.php',1337),
 (1362,'192.168.1.44','13/12/2010','VISITA NO SITE -','18:59:15','VISITANTE','/novo_visu/inicio.php',1338),
 (1363,'192.168.1.44','13/12/2010','VISITA NO SITE -','18:59:16','VISITANTE','/novo_visu/inicio.php',1339),
 (1364,'127.0.0.1','14/12/2010','VISITA NO SITE -','18:41:27','VISITANTE','/novo_visu/inicio.php',1340);
INSERT INTO `log_user_event` (`id`,`IP`,`DATA`,`EVENTO`,`HORA`,`USUARIO`,`ARQUIVO`,`QTD`) VALUES 
 (1365,'127.0.0.1','14/12/2010','VISITA NO SITE -','18:41:28','VISITANTE','/novo_visu/inicio.php',1341),
 (1366,'127.0.0.1','14/12/2010','VISITA NO SITE -','18:57:11','VISITANTE','/novo_visu/inicio.php',1342),
 (1367,'127.0.0.1','14/12/2010','VISITA NO SITE -','18:57:11','VISITANTE','/novo_visu/inicio.php',1343),
 (1368,'192.168.1.61','14/12/2010','VISITA NO SITE -','19:08:52','VISITANTE','/novo_visu/inicio.php',1344),
 (1369,'192.168.1.61','14/12/2010','VISITA NO SITE -','19:08:52','VISITANTE','/novo_visu/inicio.php',1345),
 (1370,'192.168.1.61','14/12/2010','VISITA NO SITE -','19:10:08','VISITANTE','/novo_visu/inicio.php',1346),
 (1371,'192.168.1.61','14/12/2010','VISITA NO SITE -','19:10:18','VISITANTE','/novo_visu/inicio.php',1347),
 (1372,'192.168.1.61','14/12/2010','VISITA NO SITE -','19:10:27','VISITANTE','/novo_visu/inicio.php',1348),
 (1373,'192.168.1.61','14/12/2010','VISITA NO SITE -','19:10:48','VISITANTE','/novo_visu/inicio.php',1349),
 (1374,'192.168.1.44','16/12/2010','VISITA NO SITE -','17:22:01','VISITANTE','/novo_visu/inicio.php',1350);
INSERT INTO `log_user_event` (`id`,`IP`,`DATA`,`EVENTO`,`HORA`,`USUARIO`,`ARQUIVO`,`QTD`) VALUES 
 (1375,'192.168.1.44','16/12/2010','VISITA NO SITE -','17:22:02','VISITANTE','/novo_visu/inicio.php',1351),
 (1376,'192.168.1.44','16/12/2010','VISITA NO SITE -','17:24:14','VISITANTE','/novo_visu/inicio.php',1352),
 (1377,'192.168.1.44','16/12/2010','VISITA NO SITE -','17:24:14','VISITANTE','/novo_visu/inicio.php',1353),
 (1378,'192.168.1.44','16/12/2010','VISITA NO SITE -','17:24:21','VISITANTE','/novo_visu/inicio.php',1354),
 (1379,'192.168.1.44','16/12/2010','VISITA NO SITE -','17:24:22','VISITANTE','/novo_visu/inicio.php',1355),
 (1380,'192.168.1.44','16/12/2010','VISITA NO SITE -','17:24:37','VISITANTE','/novo_visu/inicio.php',1356),
 (1381,'192.168.1.44','16/12/2010','VISITA NO SITE -','17:24:37','VISITANTE','/novo_visu/inicio.php',1357),
 (1382,'192.168.1.44','16/12/2010','VISITA NO SITE -','17:25:07','VISITANTE','/novo_visu/inicio.php',1358),
 (1383,'192.168.1.44','16/12/2010','VISITA NO SITE -','17:25:07','VISITANTE','/novo_visu/inicio.php',1359),
 (1384,'192.168.1.44','16/12/2010','VISITA NO SITE -','17:25:12','VISITANTE','/novo_visu/inicio.php',1360);
INSERT INTO `log_user_event` (`id`,`IP`,`DATA`,`EVENTO`,`HORA`,`USUARIO`,`ARQUIVO`,`QTD`) VALUES 
 (1385,'192.168.1.44','16/12/2010','VISITA NO SITE -','17:25:12','VISITANTE','/novo_visu/inicio.php',1361),
 (1386,'192.168.1.44','16/12/2010','VISITA NO SITE -','17:25:22','VISITANTE','/novo_visu/inicio.php',1362),
 (1387,'192.168.1.44','16/12/2010','VISITA NO SITE -','17:25:23','VISITANTE','/novo_visu/inicio.php',1363),
 (1388,'192.168.1.44','16/12/2010','VISITA NO SITE -','17:25:44','VISITANTE','/novo_visu/inicio.php',1364),
 (1389,'192.168.1.44','16/12/2010','VISITA NO SITE -','17:25:44','VISITANTE','/novo_visu/inicio.php',1365),
 (1390,'192.168.1.44','16/12/2010','VISITA NO SITE -','17:25:54','VISITANTE','/novo_visu/inicio.php',1366),
 (1391,'192.168.1.44','16/12/2010','VISITA NO SITE -','17:25:54','VISITANTE','/novo_visu/inicio.php',1367),
 (1392,'192.168.1.44','16/12/2010','VISITA NO SITE -','17:26:43','VISITANTE','/novo_visu/inicio.php',1368),
 (1393,'192.168.1.44','16/12/2010','VISITA NO SITE -','17:26:43','VISITANTE','/novo_visu/inicio.php',1369),
 (1394,'192.168.1.44','16/12/2010','VISITA NO SITE -','17:26:53','VISITANTE','/novo_visu/inicio.php',1370);
INSERT INTO `log_user_event` (`id`,`IP`,`DATA`,`EVENTO`,`HORA`,`USUARIO`,`ARQUIVO`,`QTD`) VALUES 
 (1395,'192.168.1.44','16/12/2010','VISITA NO SITE -','17:26:53','VISITANTE','/novo_visu/inicio.php',1371),
 (1396,'192.168.1.44','16/12/2010','VISITA NO SITE -','17:29:20','VISITANTE','/novo_visu/inicio.php',1372),
 (1397,'192.168.1.44','16/12/2010','VISITA NO SITE -','17:29:20','VISITANTE','/novo_visu/inicio.php',1373),
 (1398,'192.168.1.44','16/12/2010','VISITA NO SITE -','17:30:19','VISITANTE','/novo_visu/inicio.php',1374),
 (1399,'192.168.1.44','16/12/2010','VISITA NO SITE -','17:30:19','VISITANTE','/novo_visu/inicio.php',1375),
 (1400,'192.168.1.44','16/12/2010','VISITA NO SITE -','17:31:00','VISITANTE','/novo_visu/inicio.php',1376),
 (1401,'192.168.1.44','16/12/2010','VISITA NO SITE -','17:31:00','VISITANTE','/novo_visu/inicio.php',1377),
 (1402,'192.168.1.44','16/12/2010','VISITA NO SITE -','17:35:51','VISITANTE','/novo_visu/inicio.php',1378),
 (1403,'192.168.1.44','16/12/2010','VISITA NO SITE -','17:35:51','VISITANTE','/novo_visu/inicio.php',1379),
 (1404,'192.168.1.44','16/12/2010','VISITA NO SITE -','17:37:27','VISITANTE','/novo_visu/inicio.php',1380);
INSERT INTO `log_user_event` (`id`,`IP`,`DATA`,`EVENTO`,`HORA`,`USUARIO`,`ARQUIVO`,`QTD`) VALUES 
 (1405,'192.168.1.44','16/12/2010','VISITA NO SITE -','17:37:27','VISITANTE','/novo_visu/inicio.php',1381),
 (1406,'192.168.1.44','16/12/2010','VISITA NO SITE -','17:37:40','VISITANTE','/novo_visu/inicio.php',1382),
 (1407,'192.168.1.44','16/12/2010','VISITA NO SITE -','17:37:41','VISITANTE','/novo_visu/inicio.php',1383),
 (1408,'192.168.1.44','16/12/2010','VISITA NO SITE -','17:38:09','VISITANTE','/novo_visu/inicio.php',1384),
 (1409,'192.168.1.44','16/12/2010','VISITA NO SITE -','17:38:10','VISITANTE','/novo_visu/inicio.php',1385),
 (1410,'192.168.1.44','16/12/2010','VISITA NO SITE -','17:38:22','VISITANTE','/novo_visu/inicio.php',1386),
 (1411,'192.168.1.44','16/12/2010','VISITA NO SITE -','17:38:22','VISITANTE','/novo_visu/inicio.php',1387),
 (1412,'192.168.1.44','16/12/2010','VISITA NO SITE -','17:39:10','VISITANTE','/novo_visu/inicio.php',1388),
 (1413,'192.168.1.44','16/12/2010','VISITA NO SITE -','17:39:10','VISITANTE','/novo_visu/inicio.php',1389),
 (1414,'192.168.1.44','16/12/2010','VISITA NO SITE -','17:46:56','VISITANTE','/novo_visu/inicio.php',1390);
INSERT INTO `log_user_event` (`id`,`IP`,`DATA`,`EVENTO`,`HORA`,`USUARIO`,`ARQUIVO`,`QTD`) VALUES 
 (1415,'192.168.1.44','16/12/2010','VISITA NO SITE -','17:46:57','VISITANTE','/novo_visu/inicio.php',1391),
 (1416,'192.168.1.44','16/12/2010','VISITA NO SITE -','17:47:10','VISITANTE','/novo_visu/inicio.php',1392),
 (1417,'192.168.1.44','16/12/2010','VISITA NO SITE -','17:47:10','VISITANTE','/novo_visu/inicio.php',1393),
 (1418,'192.168.1.44','16/12/2010','VISITA NO SITE -','17:51:30','VISITANTE','/novo_visu/inicio.php',1394),
 (1419,'192.168.1.44','16/12/2010','VISITA NO SITE -','17:51:31','VISITANTE','/novo_visu/inicio.php',1395),
 (1420,'192.168.1.44','16/12/2010','VISITA NO SITE -','17:54:38','VISITANTE','/novo_visu/inicio.php',1396),
 (1421,'192.168.1.44','16/12/2010','VISITA NO SITE -','17:54:39','VISITANTE','/novo_visu/inicio.php',1397),
 (1422,'192.168.1.44','16/12/2010','VISITA NO SITE -','18:22:14','VISITANTE','/novo_visu/inicio.php',1398),
 (1423,'192.168.1.44','16/12/2010','VISITA NO SITE -','18:22:14','VISITANTE','/novo_visu/inicio.php',1399),
 (1424,'192.168.1.44','16/12/2010','VISITA NO SITE -','18:22:45','VISITANTE','/novo_visu/inicio.php',1400);
INSERT INTO `log_user_event` (`id`,`IP`,`DATA`,`EVENTO`,`HORA`,`USUARIO`,`ARQUIVO`,`QTD`) VALUES 
 (1425,'192.168.1.44','16/12/2010','VISITA NO SITE -','18:22:45','VISITANTE','/novo_visu/inicio.php',1401),
 (1426,'192.168.1.44','16/12/2010','VISITA NO SITE -','18:22:54','VISITANTE','/novo_visu/inicio.php',1402),
 (1427,'192.168.1.44','16/12/2010','VISITA NO SITE -','18:22:54','VISITANTE','/novo_visu/inicio.php',1403),
 (1428,'192.168.1.44','16/12/2010','VISITA NO SITE -','18:23:53','VISITANTE','/novo_visu/inicio.php',1404),
 (1429,'192.168.1.44','16/12/2010','VISITA NO SITE -','18:23:53','VISITANTE','/novo_visu/inicio.php',1405),
 (1430,'192.168.1.44','16/12/2010','VISITA NO SITE -','18:35:54','VISITANTE','/novo_visu/inicio.php',1406),
 (1431,'192.168.1.44','16/12/2010','VISITA NO SITE -','18:35:55','VISITANTE','/novo_visu/inicio.php',1407),
 (1432,'192.168.1.44','16/12/2010','VISITA NO SITE -','18:39:40','VISITANTE','/novo_visu/inicio.php',1408),
 (1433,'192.168.1.44','16/12/2010','VISITA NO SITE -','18:39:40','VISITANTE','/novo_visu/inicio.php',1409),
 (1434,'192.168.1.44','16/12/2010','VISITA NO SITE -','18:39:57','VISITANTE','/novo_visu/inicio.php',1410);
INSERT INTO `log_user_event` (`id`,`IP`,`DATA`,`EVENTO`,`HORA`,`USUARIO`,`ARQUIVO`,`QTD`) VALUES 
 (1435,'192.168.1.44','16/12/2010','VISITA NO SITE -','18:39:57','VISITANTE','/novo_visu/inicio.php',1411),
 (1436,'192.168.1.44','16/12/2010','VISITA NO SITE -','18:42:04','VISITANTE','/novo_visu/inicio.php',1412),
 (1437,'192.168.1.44','16/12/2010','VISITA NO SITE -','18:42:04','VISITANTE','/novo_visu/inicio.php',1413),
 (1438,'192.168.1.44','16/12/2010','VISITA NO SITE -','19:06:29','VISITANTE','/novo_visu/inicio.php',1414),
 (1439,'192.168.1.44','16/12/2010','VISITA NO SITE -','19:06:35','VISITANTE','/novo_visu/inicio.php',1415),
 (1440,'192.168.1.44','16/12/2010','VISITA NO SITE -','19:06:35','VISITANTE','/novo_visu/inicio.php',1416),
 (1441,'192.168.1.44','16/12/2010','VISITA NO SITE -','19:06:35','VISITANTE','/novo_visu/inicio.php',1417),
 (1442,'192.168.1.44','16/12/2010','VISITA NO SITE -','19:06:36','VISITANTE','/novo_visu/inicio.php',1418),
 (1443,'192.168.1.44','16/12/2010','VISITA NO SITE -','19:06:37','VISITANTE','/novo_visu/inicio.php',1419),
 (1444,'192.168.1.44','16/12/2010','VISITA NO SITE -','19:06:38','VISITANTE','/novo_visu/inicio.php',1420);
INSERT INTO `log_user_event` (`id`,`IP`,`DATA`,`EVENTO`,`HORA`,`USUARIO`,`ARQUIVO`,`QTD`) VALUES 
 (1445,'192.168.1.44','16/12/2010','VISITA NO SITE -','19:06:38','VISITANTE','/novo_visu/inicio.php',1421),
 (1446,'192.168.1.44','16/12/2010','VISITA NO SITE -','19:06:39','VISITANTE','/novo_visu/inicio.php',1422),
 (1447,'192.168.1.44','16/12/2010','VISITA NO SITE -','19:06:40','VISITANTE','/novo_visu/inicio.php',1423),
 (1448,'192.168.1.44','16/12/2010','VISITA NO SITE -','19:07:15','VISITANTE','/novo_visu/inicio.php',1424),
 (1449,'192.168.1.44','16/12/2010','VISITA NO SITE -','19:07:15','VISITANTE','/novo_visu/inicio.php',1425),
 (1450,'192.168.1.44','16/12/2010','VISITA NO SITE -','19:07:39','VISITANTE','/novo_visu/inicio.php',1426),
 (1451,'192.168.1.44','16/12/2010','VISITA NO SITE -','19:07:40','VISITANTE','/novo_visu/inicio.php',1427),
 (1452,'192.168.1.44','16/12/2010','VISITA NO SITE -','19:08:06','VISITANTE','/novo_visu/inicio.php',1428),
 (1453,'192.168.1.44','16/12/2010','VISITA NO SITE -','19:08:07','VISITANTE','/novo_visu/inicio.php',1429),
 (1454,'192.168.1.44','16/12/2010','VISITA NO SITE -','19:11:29','VISITANTE','/novo_visu/inicio.php',1430);
INSERT INTO `log_user_event` (`id`,`IP`,`DATA`,`EVENTO`,`HORA`,`USUARIO`,`ARQUIVO`,`QTD`) VALUES 
 (1455,'192.168.1.44','16/12/2010','VISITA NO SITE -','19:11:29','VISITANTE','/novo_visu/inicio.php',1431),
 (1456,'127.0.0.1','17/12/2010','VISITA NO SITE -','14:23:04','VISITANTE','/novo_visu/inicio.php',1432),
 (1457,'127.0.0.1','17/12/2010','VISITA NO SITE -','14:23:04','VISITANTE','/novo_visu/inicio.php',1433),
 (1458,'127.0.0.1','17/12/2010','VISITA NO SITE -','14:23:16','VISITANTE','/novo_visu/inicio.php',1434),
 (1459,'127.0.0.1','17/12/2010','VISITA NO SITE -','14:23:16','VISITANTE','/novo_visu/inicio.php',1435),
 (1460,'192.168.1.44','17/12/2010','VISITA NO SITE -','15:13:20','VISITANTE','/novo_visu/inicio.php',1436),
 (1461,'192.168.1.44','17/12/2010','VISITA NO SITE -','15:13:21','VISITANTE','/novo_visu/inicio.php',1437),
 (1462,'192.168.1.44','17/12/2010','VISITA NO SITE -','16:56:15','VISITANTE','/novo_visu/inicio.php',1438),
 (1463,'192.168.1.44','17/12/2010','VISITA NO SITE -','16:56:16','VISITANTE','/novo_visu/inicio.php',1439),
 (1464,'192.168.1.44','17/12/2010','VISITA NO SITE -','17:51:37','VISITANTE','/novo_visu/inicio.php',1440);
INSERT INTO `log_user_event` (`id`,`IP`,`DATA`,`EVENTO`,`HORA`,`USUARIO`,`ARQUIVO`,`QTD`) VALUES 
 (1465,'192.168.1.44','17/12/2010','VISITA NO SITE -','17:51:37','VISITANTE','/novo_visu/inicio.php',1441),
 (1466,'192.168.1.44','17/12/2010','VISITA NO SITE -','18:24:38','VISITANTE','/novo_visu/inicio.php',1442),
 (1467,'192.168.1.44','17/12/2010','VISITA NO SITE -','19:02:47','VISITANTE','/novo_visu/inicio.php',1443),
 (1468,'127.0.0.1','17/12/2010','VISITA NO SITE -','23:14:34','VISITANTE','/novo_visu/inicio.php',1444),
 (1469,'127.0.0.1','17/12/2010','VISITA NO SITE -','23:14:35','VISITANTE','/novo_visu/inicio.php',1445),
 (1470,'127.0.0.1','17/12/2010','VISITA NO SITE -','23:27:13','VISITANTE','/novo_visu/inicio.php',1446),
 (1471,'127.0.0.1','17/12/2010','VISITA NO SITE -','23:27:13','VISITANTE','/novo_visu/inicio.php',1447),
 (1472,'127.0.0.1','17/12/2010','VISITA NO SITE -','23:30:49','VISITANTE','/novo_visu/inicio.php',1448),
 (1473,'127.0.0.1','17/12/2010','VISITA NO SITE -','23:30:50','VISITANTE','/novo_visu/inicio.php',1449),
 (1474,'127.0.0.1','17/12/2010','VISITA NO SITE -','23:32:55','VISITANTE','/novo_visu/inicio.php',1450);
INSERT INTO `log_user_event` (`id`,`IP`,`DATA`,`EVENTO`,`HORA`,`USUARIO`,`ARQUIVO`,`QTD`) VALUES 
 (1475,'127.0.0.1','17/12/2010','VISITA NO SITE -','23:32:55','VISITANTE','/novo_visu/inicio.php',1451),
 (1476,'127.0.0.1','17/12/2010','VISITA NO SITE -','23:35:00','VISITANTE','/novo_visu/inicio.php',1452),
 (1477,'127.0.0.1','17/12/2010','VISITA NO SITE -','23:35:00','VISITANTE','/novo_visu/inicio.php',1453),
 (1478,'127.0.0.1','17/12/2010','VISITA NO SITE -','23:35:43','VISITANTE','/novo_visu/inicio.php',1454),
 (1479,'127.0.0.1','17/12/2010','VISITA NO SITE -','23:35:43','VISITANTE','/novo_visu/inicio.php',1455),
 (1480,'127.0.0.1','17/12/2010','VISITA NO SITE -','23:36:32','VISITANTE','/novo_visu/inicio.php',1456),
 (1481,'127.0.0.1','17/12/2010','VISITA NO SITE -','23:36:32','VISITANTE','/novo_visu/inicio.php',1457),
 (1482,'127.0.0.1','17/12/2010','VISITA NO SITE -','23:38:27','VISITANTE','/novo_visu/inicio.php',1458),
 (1483,'127.0.0.1','17/12/2010','VISITA NO SITE -','23:38:27','VISITANTE','/novo_visu/inicio.php',1459),
 (1484,'127.0.0.1','17/12/2010','VISITA NO SITE -','23:39:31','VISITANTE','/novo_visu/inicio.php',1460);
INSERT INTO `log_user_event` (`id`,`IP`,`DATA`,`EVENTO`,`HORA`,`USUARIO`,`ARQUIVO`,`QTD`) VALUES 
 (1485,'127.0.0.1','17/12/2010','VISITA NO SITE -','23:39:31','VISITANTE','/novo_visu/inicio.php',1461),
 (1486,'127.0.0.1','17/12/2010','VISITA NO SITE -','23:39:48','VISITANTE','/novo_visu/inicio.php',1462),
 (1487,'127.0.0.1','17/12/2010','VISITA NO SITE -','23:39:48','VISITANTE','/novo_visu/inicio.php',1463),
 (1488,'127.0.0.1','17/12/2010','VISITA NO SITE -','23:40:04','VISITANTE','/novo_visu/inicio.php',1464),
 (1489,'127.0.0.1','17/12/2010','VISITA NO SITE -','23:40:04','VISITANTE','/novo_visu/inicio.php',1465),
 (1490,'127.0.0.1','17/12/2010','VISITA NO SITE -','23:40:19','VISITANTE','/novo_visu/inicio.php',1466),
 (1491,'127.0.0.1','17/12/2010','VISITA NO SITE -','23:40:20','VISITANTE','/novo_visu/inicio.php',1467),
 (1492,'127.0.0.1','17/12/2010','VISITA NO SITE -','23:40:44','VISITANTE','/novo_visu/inicio.php',1468),
 (1493,'127.0.0.1','17/12/2010','VISITA NO SITE -','23:40:44','VISITANTE','/novo_visu/inicio.php',1469),
 (1494,'127.0.0.1','17/12/2010','VISITA NO SITE -','23:41:03','VISITANTE','/novo_visu/inicio.php',1470);
INSERT INTO `log_user_event` (`id`,`IP`,`DATA`,`EVENTO`,`HORA`,`USUARIO`,`ARQUIVO`,`QTD`) VALUES 
 (1495,'127.0.0.1','17/12/2010','VISITA NO SITE -','23:41:03','VISITANTE','/novo_visu/inicio.php',1471),
 (1496,'127.0.0.1','17/12/2010','VISITA NO SITE -','23:41:17','VISITANTE','/novo_visu/inicio.php',1472),
 (1497,'127.0.0.1','17/12/2010','VISITA NO SITE -','23:41:18','VISITANTE','/novo_visu/inicio.php',1473),
 (1498,'127.0.0.1','17/12/2010','VISITA NO SITE -','23:41:39','VISITANTE','/novo_visu/inicio.php',1474),
 (1499,'127.0.0.1','17/12/2010','VISITA NO SITE -','23:41:40','VISITANTE','/novo_visu/inicio.php',1475),
 (1500,'127.0.0.1','17/12/2010','VISITA NO SITE -','23:46:39','VISITANTE','/novo_visu/inicio.php',1476),
 (1501,'127.0.0.1','17/12/2010','VISITA NO SITE -','23:46:39','VISITANTE','/novo_visu/inicio.php',1477),
 (1502,'127.0.0.1','17/12/2010','VISITA NO SITE -','23:46:59','VISITANTE','/novo_visu/inicio.php',1478),
 (1503,'127.0.0.1','17/12/2010','VISITA NO SITE -','23:46:59','VISITANTE','/novo_visu/inicio.php',1479),
 (1504,'127.0.0.1','17/12/2010','VISITA NO SITE -','23:48:21','VISITANTE','/novo_visu/inicio.php',1480);
INSERT INTO `log_user_event` (`id`,`IP`,`DATA`,`EVENTO`,`HORA`,`USUARIO`,`ARQUIVO`,`QTD`) VALUES 
 (1505,'127.0.0.1','17/12/2010','VISITA NO SITE -','23:48:21','VISITANTE','/novo_visu/inicio.php',1481),
 (1506,'127.0.0.1','17/12/2010','VISITA NO SITE -','23:48:28','VISITANTE','/novo_visu/inicio.php',1482),
 (1507,'127.0.0.1','17/12/2010','VISITA NO SITE -','23:48:29','VISITANTE','/novo_visu/inicio.php',1483),
 (1508,'127.0.0.1','17/12/2010','VISITA NO SITE -','23:48:44','VISITANTE','/novo_visu/inicio.php',1484),
 (1509,'127.0.0.1','17/12/2010','VISITA NO SITE -','23:48:44','VISITANTE','/novo_visu/inicio.php',1485),
 (1510,'127.0.0.1','18/12/2010','VISITA NO SITE -','00:03:05','VISITANTE','/compraai/inicio.php',1486),
 (1511,'127.0.0.1','18/12/2010','VISITA NO SITE -','00:03:05','VISITANTE','/compraai/inicio.php',1487),
 (1512,'127.0.0.1','18/12/2010','VISITA NO SITE -','00:04:10','VISITANTE','/compraai/inicio.php',1488),
 (1513,'127.0.0.1','18/12/2010','VISITA NO SITE -','00:04:10','VISITANTE','/compraai/inicio.php',1489),
 (1514,'127.0.0.1','18/12/2010','VISITA NO SITE -','00:11:08','VISITANTE','/compraai/inicio.php',1490);
INSERT INTO `log_user_event` (`id`,`IP`,`DATA`,`EVENTO`,`HORA`,`USUARIO`,`ARQUIVO`,`QTD`) VALUES 
 (1515,'127.0.0.1','18/12/2010','VISITA NO SITE -','00:11:09','VISITANTE','/compraai/inicio.php',1491),
 (1516,'127.0.0.1','18/12/2010','VISITA NO SITE -','00:19:23','VISITANTE','/compraai/inicio.php',1492),
 (1517,'127.0.0.1','18/12/2010','VISITA NO SITE -','00:19:23','VISITANTE','/compraai/inicio.php',1493),
 (1518,'127.0.0.1','18/12/2010','VISITA NO SITE -','00:19:28','VISITANTE','/compraai/inicio.php',1494),
 (1519,'127.0.0.1','18/12/2010','VISITA NO SITE -','00:19:28','VISITANTE','/compraai/inicio.php',1495),
 (1520,'127.0.0.1','18/12/2010','VISITA NO SITE -','00:19:54','VISITANTE','/compraai/inicio.php',1496),
 (1521,'127.0.0.1','18/12/2010','VISITA NO SITE -','00:19:54','VISITANTE','/compraai/inicio.php',1497),
 (1522,'127.0.0.1','18/12/2010','VISITA NO SITE -','00:20:44','VISITANTE','/compraai/inicio.php',1498),
 (1523,'127.0.0.1','18/12/2010','VISITA NO SITE -','00:20:44','VISITANTE','/compraai/inicio.php',1499),
 (1524,'127.0.0.1','18/12/2010','VISITA NO SITE -','00:21:57','VISITANTE','/compraai/inicio.php',1500);
INSERT INTO `log_user_event` (`id`,`IP`,`DATA`,`EVENTO`,`HORA`,`USUARIO`,`ARQUIVO`,`QTD`) VALUES 
 (1525,'127.0.0.1','18/12/2010','VISITA NO SITE -','00:21:57','VISITANTE','/compraai/inicio.php',1501),
 (1526,'127.0.0.1','18/12/2010','VISITA NO SITE -','00:22:22','VISITANTE','/compraai/inicio.php',1502),
 (1527,'127.0.0.1','18/12/2010','VISITA NO SITE -','00:22:22','VISITANTE','/compraai/inicio.php',1503),
 (1528,'127.0.0.1','18/12/2010','VISITA NO SITE -','00:24:20','VISITANTE','/compraai/inicio.php',1504),
 (1529,'127.0.0.1','18/12/2010','VISITA NO SITE -','00:24:20','VISITANTE','/compraai/inicio.php',1505),
 (1530,'127.0.0.1','18/12/2010','VISITA NO SITE -','00:24:46','VISITANTE','/compraai/inicio.php',1506),
 (1531,'127.0.0.1','18/12/2010','VISITA NO SITE -','00:24:46','VISITANTE','/compraai/inicio.php',1507),
 (1532,'127.0.0.1','18/12/2010','VISITA NO SITE -','00:36:21','VISITANTE','/compraai/inicio.php',1508),
 (1533,'127.0.0.1','18/12/2010','VISITA NO SITE -','00:36:21','VISITANTE','/compraai/inicio.php',1509),
 (1534,'127.0.0.1','18/12/2010','VISITA NO SITE -','00:42:52','VISITANTE','/compraai/inicio.php',1510);
INSERT INTO `log_user_event` (`id`,`IP`,`DATA`,`EVENTO`,`HORA`,`USUARIO`,`ARQUIVO`,`QTD`) VALUES 
 (1535,'127.0.0.1','18/12/2010','VISITA NO SITE -','00:42:52','VISITANTE','/compraai/inicio.php',1511),
 (1536,'127.0.0.1','18/12/2010','VISITA NO SITE -','00:45:23','VISITANTE','/compraai/inicio.php',1512),
 (1537,'127.0.0.1','18/12/2010','VISITA NO SITE -','00:51:33','VISITANTE','/compraai/inicio.php',1513),
 (1538,'127.0.0.1','18/12/2010','VISITA NO SITE -','00:51:33','VISITANTE','/compraai/inicio.php',1514),
 (1539,'127.0.0.1','18/12/2010','VISITA NO SITE -','00:51:44','VISITANTE','/compraai/inicio.php',1515),
 (1540,'127.0.0.1','18/12/2010','VISITA NO SITE -','00:51:44','VISITANTE','/compraai/inicio.php',1516),
 (1541,'127.0.0.1','18/12/2010','VISITA NO SITE -','00:55:11','VISITANTE','/compraai/inicio.php',1517),
 (1542,'127.0.0.1','18/12/2010','VISITA NO SITE -','00:55:37','VISITANTE','/compraai/inicio.php',1518),
 (1543,'127.0.0.1','18/12/2010','VISITA NO SITE -','00:55:38','VISITANTE','/compraai/inicio.php',1519),
 (1544,'127.0.0.1','18/12/2010','VISITA NO SITE -','01:20:22','VISITANTE','/compraai/inicio.php',1520);
INSERT INTO `log_user_event` (`id`,`IP`,`DATA`,`EVENTO`,`HORA`,`USUARIO`,`ARQUIVO`,`QTD`) VALUES 
 (1545,'127.0.0.1','18/12/2010','VISITA NO SITE -','01:24:59','VISITANTE','/compraai/inicio.php',1521),
 (1546,'127.0.0.1','18/12/2010','VISITA NO SITE -','01:25:00','VISITANTE','/compraai/inicio.php',1522),
 (1547,'127.0.0.1','18/12/2010','VISITA NO SITE -','01:27:18','VISITANTE','/compraai/inicio.php',1523),
 (1548,'127.0.0.1','18/12/2010','VISITA NO SITE -','01:27:18','VISITANTE','/compraai/inicio.php',1524),
 (1549,'127.0.0.1','18/12/2010','VISITA NO SITE -','01:28:38','VISITANTE','/compraai/inicio.php',1525),
 (1550,'127.0.0.1','18/12/2010','VISITA NO SITE -','01:28:39','VISITANTE','/compraai/inicio.php',1526),
 (1551,'127.0.0.1','18/12/2010','VISITA NO SITE -','01:31:35','VISITANTE','/compraai/inicio.php',1527),
 (1552,'127.0.0.1','18/12/2010','VISITA NO SITE -','01:31:36','VISITANTE','/compraai/inicio.php',1528),
 (1553,'127.0.0.1','18/12/2010','VISITA NO SITE -','01:34:11','VISITANTE','/compraai/inicio.php',1529),
 (1554,'127.0.0.1','18/12/2010','VISITA NO SITE -','01:34:12','VISITANTE','/compraai/inicio.php',1530);
INSERT INTO `log_user_event` (`id`,`IP`,`DATA`,`EVENTO`,`HORA`,`USUARIO`,`ARQUIVO`,`QTD`) VALUES 
 (1555,'127.0.0.1','18/12/2010','VISITA NO SITE -','01:35:46','VISITANTE','/compraai/inicio.php',1531),
 (1556,'127.0.0.1','18/12/2010','VISITA NO SITE -','01:35:46','VISITANTE','/compraai/inicio.php',1532),
 (1557,'127.0.0.1','18/12/2010','VISITA NO SITE -','01:36:13','VISITANTE','/novo_visu/inicio.php',1533),
 (1558,'127.0.0.1','18/12/2010','VISITA NO SITE -','01:36:14','VISITANTE','/novo_visu/inicio.php',1534),
 (1559,'127.0.0.1','18/12/2010','VISITA NO SITE -','01:36:49','VISITANTE','/compraai/inicio.php',1535),
 (1560,'127.0.0.1','18/12/2010','VISITA NO SITE -','01:36:49','VISITANTE','/compraai/inicio.php',1536),
 (1561,'127.0.0.1','18/12/2010','VISITA NO SITE -','01:55:24','VISITANTE','/compraai/inicio.php',1537),
 (1562,'127.0.0.1','18/12/2010','VISITA NO SITE -','14:31:28','VISITANTE','/compraai/inicio.php',1538),
 (1563,'127.0.0.1','18/12/2010','VISITA NO SITE -','14:31:28','VISITANTE','/compraai/inicio.php',1539),
 (1564,'127.0.0.1','18/12/2010','VISITA NO SITE -','14:45:43','VISITANTE','/compraai/inicio.php',1540);
INSERT INTO `log_user_event` (`id`,`IP`,`DATA`,`EVENTO`,`HORA`,`USUARIO`,`ARQUIVO`,`QTD`) VALUES 
 (1565,'127.0.0.1','18/12/2010','VISITA NO SITE -','14:47:11','VISITANTE','/compraai/inicio.php',1541),
 (1566,'127.0.0.1','18/12/2010','VISITA NO SITE -','14:49:11','VISITANTE','/compraai/inicio.php',1542),
 (1567,'127.0.0.1','18/12/2010','VISITA NO SITE -','14:49:11','VISITANTE','/compraai/inicio.php',1543),
 (1568,'127.0.0.1','18/12/2010','VISITA NO SITE -','14:54:55','VISITANTE','/compraai/inicio.php',1544),
 (1569,'127.0.0.1','18/12/2010','VISITA NO SITE -','15:01:26','VISITANTE','/compraai/inicio.php',1545),
 (1570,'127.0.0.1','18/12/2010','VISITA NO SITE -','15:01:27','VISITANTE','/compraai/inicio.php',1546),
 (1571,'127.0.0.1','18/12/2010','VISITA NO SITE -','15:16:58','VISITANTE','/compraai/inicio.php',1547),
 (1572,'127.0.0.1','18/12/2010','VISITA NO SITE -','15:16:58','VISITANTE','/compraai/inicio.php',1548),
 (1573,'127.0.0.1','18/12/2010','VISITA NO SITE -','15:21:08','VISITANTE','/compraai/inicio.php',1549),
 (1574,'127.0.0.1','18/12/2010','VISITA NO SITE -','15:21:08','VISITANTE','/compraai/inicio.php',1550);
INSERT INTO `log_user_event` (`id`,`IP`,`DATA`,`EVENTO`,`HORA`,`USUARIO`,`ARQUIVO`,`QTD`) VALUES 
 (1575,'127.0.0.1','18/12/2010','VISITA NO SITE -','15:22:57','VISITANTE','/compraai/inicio.php',1551),
 (1576,'127.0.0.1','18/12/2010','VISITA NO SITE -','15:28:36','VISITANTE','/compraai/inicio.php',1552),
 (1577,'127.0.0.1','18/12/2010','VISITA NO SITE -','15:28:36','VISITANTE','/compraai/inicio.php',1553),
 (1578,'127.0.0.1','18/12/2010','VISITA NO SITE -','15:29:04','VISITANTE','/compraai/inicio.php',1554),
 (1579,'127.0.0.1','18/12/2010','VISITA NO SITE -','15:29:33','VISITANTE','/compraai/inicio.php',1555),
 (1580,'127.0.0.1','18/12/2010','VISITA NO SITE -','15:32:12','VISITANTE','/compraai/inicio.php',1556),
 (1581,'127.0.0.1','18/12/2010','VISITA NO SITE -','15:32:13','VISITANTE','/compraai/inicio.php',1557),
 (1582,'127.0.0.1','18/12/2010','VISITA NO SITE -','15:33:12','VISITANTE','/compraai/inicio.php',1558),
 (1583,'127.0.0.1','18/12/2010','VISITA NO SITE -','15:33:12','VISITANTE','/compraai/inicio.php',1559),
 (1584,'127.0.0.1','18/12/2010','VISITA NO SITE -','15:42:41','VISITANTE','/compraai/inicio.php',1560);
INSERT INTO `log_user_event` (`id`,`IP`,`DATA`,`EVENTO`,`HORA`,`USUARIO`,`ARQUIVO`,`QTD`) VALUES 
 (1585,'127.0.0.1','18/12/2010','VISITA NO SITE -','15:43:40','VISITANTE','/compraai/inicio.php',1561),
 (1586,'127.0.0.1','18/12/2010','VISITA NO SITE -','15:44:04','VISITANTE','/compraai/inicio.php',1562),
 (1587,'127.0.0.1','18/12/2010','VISITA NO SITE -','15:44:04','VISITANTE','/compraai/inicio.php',1563),
 (1588,'127.0.0.1','18/12/2010','VISITA NO SITE -','15:45:19','VISITANTE','/compraai/inicio.php',1564),
 (1589,'127.0.0.1','18/12/2010','VISITA NO SITE -','15:50:26','VISITANTE','/compraai/inicio.php',1565),
 (1590,'127.0.0.1','18/12/2010','VISITA NO SITE -','15:50:26','VISITANTE','/compraai/inicio.php',1566),
 (1591,'127.0.0.1','18/12/2010','VISITA NO SITE -','16:32:32','VISITANTE','/compraai/inicio.php',1567),
 (1592,'127.0.0.1','18/12/2010','VISITA NO SITE -','16:36:18','VISITANTE','/compraai/inicio.php',1568),
 (1593,'127.0.0.1','18/12/2010','VISITA NO SITE -','16:36:18','VISITANTE','/compraai/inicio.php',1569),
 (1594,'127.0.0.1','18/12/2010','VISITA NO SITE -','16:36:47','VISITANTE','/compraai/inicio.php',1570);
INSERT INTO `log_user_event` (`id`,`IP`,`DATA`,`EVENTO`,`HORA`,`USUARIO`,`ARQUIVO`,`QTD`) VALUES 
 (1595,'127.0.0.1','18/12/2010','VISITA NO SITE -','17:04:49','VISITANTE','/compraai/inicio.php',1571),
 (1596,'127.0.0.1','18/12/2010','VISITA NO SITE -','17:04:50','VISITANTE','/compraai/inicio.php',1572),
 (1597,'127.0.0.1','18/12/2010','VISITA NO SITE -','17:06:52','VISITANTE','/compraai/inicio.php',1573),
 (1598,'127.0.0.1','18/12/2010','VISITA NO SITE -','17:06:52','VISITANTE','/compraai/inicio.php',1574),
 (1599,'127.0.0.1','18/12/2010','VISITA NO SITE -','17:07:40','VISITANTE','/compraai/inicio.php',1575),
 (1600,'127.0.0.1','18/12/2010','VISITA NO SITE -','17:07:40','VISITANTE','/compraai/inicio.php',1576),
 (1601,'127.0.0.1','18/12/2010','VISITA NO SITE -','17:08:14','VISITANTE','/compraai/inicio.php',1577),
 (1602,'127.0.0.1','18/12/2010','VISITA NO SITE -','17:08:14','VISITANTE','/compraai/inicio.php',1578),
 (1603,'127.0.0.1','18/12/2010','VISITA NO SITE -','17:09:25','VISITANTE','/compraai/inicio.php',1579),
 (1604,'127.0.0.1','18/12/2010','VISITA NO SITE -','17:09:26','VISITANTE','/compraai/inicio.php',1580);
INSERT INTO `log_user_event` (`id`,`IP`,`DATA`,`EVENTO`,`HORA`,`USUARIO`,`ARQUIVO`,`QTD`) VALUES 
 (1605,'127.0.0.1','18/12/2010','VISITA NO SITE -','17:09:52','VISITANTE','/compraai/inicio.php',1581),
 (1606,'127.0.0.1','18/12/2010','VISITA NO SITE -','17:09:53','VISITANTE','/compraai/inicio.php',1582),
 (1607,'127.0.0.1','18/12/2010','VISITA NO SITE -','17:11:09','VISITANTE','/compraai/inicio.php',1583),
 (1608,'127.0.0.1','18/12/2010','VISITA NO SITE -','17:11:10','VISITANTE','/compraai/inicio.php',1584),
 (1609,'127.0.0.1','18/12/2010','VISITA NO SITE -','17:12:25','VISITANTE','/compraai/inicio.php',1585),
 (1610,'127.0.0.1','18/12/2010','VISITA NO SITE -','17:12:25','VISITANTE','/compraai/inicio.php',1586),
 (1611,'127.0.0.1','18/12/2010','VISITA NO SITE -','17:13:09','VISITANTE','/compraai/inicio.php',1587),
 (1612,'127.0.0.1','18/12/2010','VISITA NO SITE -','17:13:10','VISITANTE','/compraai/inicio.php',1588),
 (1613,'127.0.0.1','18/12/2010','VISITA NO SITE -','17:14:58','VISITANTE','/compraai/inicio.php',1589),
 (1614,'127.0.0.1','18/12/2010','VISITA NO SITE -','17:14:59','VISITANTE','/compraai/inicio.php',1590);
INSERT INTO `log_user_event` (`id`,`IP`,`DATA`,`EVENTO`,`HORA`,`USUARIO`,`ARQUIVO`,`QTD`) VALUES 
 (1615,'127.0.0.1','18/12/2010','VISITA NO SITE -','17:20:46','VISITANTE','/compraai/inicio.php',1591),
 (1616,'127.0.0.1','18/12/2010','VISITA NO SITE -','17:20:47','VISITANTE','/compraai/inicio.php',1592),
 (1617,'127.0.0.1','18/12/2010','VISITA NO SITE -','17:22:56','VISITANTE','/compraai/inicio.php',1593),
 (1618,'127.0.0.1','18/12/2010','VISITA NO SITE -','17:22:56','VISITANTE','/compraai/inicio.php',1594),
 (1619,'127.0.0.1','18/12/2010','VISITA NO SITE -','17:23:53','VISITANTE','/compraai/inicio.php',1595),
 (1620,'127.0.0.1','18/12/2010','VISITA NO SITE -','17:24:40','VISITANTE','/compraai/inicio.php',1596),
 (1621,'127.0.0.1','18/12/2010','VISITA NO SITE -','17:24:40','VISITANTE','/compraai/inicio.php',1597),
 (1622,'127.0.0.1','18/12/2010','VISITA NO SITE -','17:27:17','VISITANTE','/compraai/inicio.php',1598),
 (1623,'127.0.0.1','18/12/2010','VISITA NO SITE -','17:27:18','VISITANTE','/compraai/inicio.php',1599),
 (1624,'127.0.0.1','18/12/2010','VISITA NO SITE -','17:31:00','VISITANTE','/compraai/inicio.php',1600);
INSERT INTO `log_user_event` (`id`,`IP`,`DATA`,`EVENTO`,`HORA`,`USUARIO`,`ARQUIVO`,`QTD`) VALUES 
 (1625,'127.0.0.1','18/12/2010','VISITA NO SITE -','17:31:01','VISITANTE','/compraai/inicio.php',1601),
 (1626,'127.0.0.1','18/12/2010','VISITA NO SITE -','17:34:41','VISITANTE','/compraai/inicio.php',1602),
 (1627,'127.0.0.1','18/12/2010','VISITA NO SITE -','17:34:42','VISITANTE','/compraai/inicio.php',1603),
 (1628,'127.0.0.1','18/12/2010','VISITA NO SITE -','17:36:03','VISITANTE','/compraai/inicio.php',1604),
 (1629,'127.0.0.1','18/12/2010','VISITA NO SITE -','17:36:03','VISITANTE','/compraai/inicio.php',1605),
 (1630,'127.0.0.1','18/12/2010','VISITA NO SITE -','17:41:35','VISITANTE','/compraai/inicio.php',1606),
 (1631,'127.0.0.1','18/12/2010','VISITA NO SITE -','17:41:35','VISITANTE','/compraai/inicio.php',1607),
 (1632,'127.0.0.1','18/12/2010','VISITA NO SITE -','17:42:43','VISITANTE','/compraai/inicio.php',1608),
 (1633,'127.0.0.1','18/12/2010','VISITA NO SITE -','17:42:44','VISITANTE','/compraai/inicio.php',1609),
 (1634,'127.0.0.1','18/12/2010','VISITA NO SITE -','17:47:01','VISITANTE','/compraai/inicio.php',1610);
INSERT INTO `log_user_event` (`id`,`IP`,`DATA`,`EVENTO`,`HORA`,`USUARIO`,`ARQUIVO`,`QTD`) VALUES 
 (1635,'127.0.0.1','18/12/2010','VISITA NO SITE -','17:47:01','VISITANTE','/compraai/inicio.php',1611),
 (1636,'127.0.0.1','18/12/2010','VISITA NO SITE -','17:49:28','VISITANTE','/compraai/inicio.php',1612),
 (1637,'127.0.0.1','18/12/2010','VISITA NO SITE -','17:49:28','VISITANTE','/compraai/inicio.php',1613),
 (1638,'127.0.0.1','18/12/2010','VISITA NO SITE -','17:58:47','VISITANTE','/compraai/inicio.php',1614),
 (1639,'127.0.0.1','18/12/2010','VISITA NO SITE -','17:58:47','VISITANTE','/compraai/inicio.php',1615),
 (1640,'127.0.0.1','18/12/2010','VISITA NO SITE -','17:59:49','VISITANTE','/compraai/inicio.php',1616),
 (1641,'127.0.0.1','18/12/2010','VISITA NO SITE -','17:59:50','VISITANTE','/compraai/inicio.php',1617),
 (1642,'127.0.0.1','18/12/2010','VISITA NO SITE -','18:01:45','VISITANTE','/compraai/inicio.php',1618),
 (1643,'127.0.0.1','18/12/2010','VISITA NO SITE -','18:01:45','VISITANTE','/compraai/inicio.php',1619),
 (1644,'127.0.0.1','18/12/2010','VISITA NO SITE -','18:02:01','VISITANTE','/compraai/inicio.php',1620);
INSERT INTO `log_user_event` (`id`,`IP`,`DATA`,`EVENTO`,`HORA`,`USUARIO`,`ARQUIVO`,`QTD`) VALUES 
 (1645,'127.0.0.1','18/12/2010','VISITA NO SITE -','18:02:01','VISITANTE','/compraai/inicio.php',1621),
 (1646,'127.0.0.1','18/12/2010','VISITA NO SITE -','18:05:01','VISITANTE','/compraai/inicio.php',1622),
 (1647,'127.0.0.1','18/12/2010','VISITA NO SITE -','18:05:01','VISITANTE','/compraai/inicio.php',1623),
 (1648,'127.0.0.1','18/12/2010','VISITA NO SITE -','21:52:51','VISITANTE','/compraai/inicio.php',1624),
 (1649,'127.0.0.1','18/12/2010','VISITA NO SITE -','21:52:51','VISITANTE','/compraai/inicio.php',1625),
 (1650,'127.0.0.1','18/12/2010','VISITA NO SITE -','22:23:02','VISITANTE','/compraai/inicio.php',1626),
 (1651,'127.0.0.1','18/12/2010','VISITA NO SITE -','22:23:03','VISITANTE','/compraai/inicio.php',1627),
 (1652,'127.0.0.1','18/12/2010','VISITA NO SITE -','22:23:38','VISITANTE','/compraai/inicio.php',1628),
 (1653,'127.0.0.1','18/12/2010','VISITA NO SITE -','22:23:38','VISITANTE','/compraai/inicio.php',1629),
 (1654,'127.0.0.1','18/12/2010','VISITA NO SITE -','22:25:28','VISITANTE','/compraai/inicio.php',1630);
INSERT INTO `log_user_event` (`id`,`IP`,`DATA`,`EVENTO`,`HORA`,`USUARIO`,`ARQUIVO`,`QTD`) VALUES 
 (1655,'127.0.0.1','18/12/2010','VISITA NO SITE -','22:25:28','VISITANTE','/compraai/inicio.php',1631),
 (1656,'127.0.0.1','18/12/2010','VISITA NO SITE -','22:26:27','VISITANTE','/compraai/inicio.php',1632),
 (1657,'127.0.0.1','18/12/2010','VISITA NO SITE -','22:26:27','VISITANTE','/compraai/inicio.php',1633),
 (1658,'127.0.0.1','18/12/2010','VISITA NO SITE -','22:29:39','VISITANTE','/compraai/inicio.php',1634),
 (1659,'127.0.0.1','18/12/2010','VISITA NO SITE -','22:29:39','VISITANTE','/compraai/inicio.php',1635),
 (1660,'127.0.0.1','18/12/2010','VISITA NO SITE -','22:31:59','VISITANTE','/compraai/inicio.php',1636),
 (1661,'127.0.0.1','18/12/2010','VISITA NO SITE -','22:32:00','VISITANTE','/compraai/inicio.php',1637),
 (1662,'127.0.0.1','18/12/2010','VISITA NO SITE -','22:34:33','VISITANTE','/compraai/inicio.php',1638),
 (1663,'127.0.0.1','18/12/2010','VISITA NO SITE -','22:34:34','VISITANTE','/compraai/inicio.php',1639),
 (1664,'127.0.0.1','18/12/2010','VISITA NO SITE -','22:45:25','VISITANTE','/compraai/inicio.php',1640);
INSERT INTO `log_user_event` (`id`,`IP`,`DATA`,`EVENTO`,`HORA`,`USUARIO`,`ARQUIVO`,`QTD`) VALUES 
 (1665,'127.0.0.1','18/12/2010','VISITA NO SITE -','22:47:17','VISITANTE','/compraai/inicio.php',1641),
 (1666,'127.0.0.1','18/12/2010','VISITA NO SITE -','22:47:17','VISITANTE','/compraai/inicio.php',1642),
 (1667,'127.0.0.1','18/12/2010','VISITA NO SITE -','22:48:07','VISITANTE','/compraai/inicio.php',1643),
 (1668,'127.0.0.1','18/12/2010','VISITA NO SITE -','22:48:07','VISITANTE','/compraai/inicio.php',1644),
 (1669,'127.0.0.1','18/12/2010','VISITA NO SITE -','22:48:21','VISITANTE','/compraai/inicio.php',1645),
 (1670,'127.0.0.1','18/12/2010','VISITA NO SITE -','22:48:22','VISITANTE','/compraai/inicio.php',1646),
 (1671,'127.0.0.1','18/12/2010','VISITA NO SITE -','22:48:39','VISITANTE','/compraai/inicio.php',1647),
 (1672,'127.0.0.1','18/12/2010','VISITA NO SITE -','22:48:40','VISITANTE','/compraai/inicio.php',1648),
 (1673,'127.0.0.1','18/12/2010','VISITA NO SITE -','22:48:55','VISITANTE','/compraai/inicio.php',1649),
 (1674,'127.0.0.1','18/12/2010','VISITA NO SITE -','22:48:56','VISITANTE','/compraai/inicio.php',1650);
INSERT INTO `log_user_event` (`id`,`IP`,`DATA`,`EVENTO`,`HORA`,`USUARIO`,`ARQUIVO`,`QTD`) VALUES 
 (1675,'127.0.0.1','18/12/2010','VISITA NO SITE -','22:54:21','VISITANTE','/compraai/inicio.php',1651),
 (1676,'127.0.0.1','18/12/2010','VISITA NO SITE -','22:54:21','VISITANTE','/compraai/inicio.php',1652),
 (1677,'127.0.0.1','18/12/2010','VISITA NO SITE -','22:55:18','VISITANTE','/compraai/inicio.php',1653),
 (1678,'127.0.0.1','18/12/2010','VISITA NO SITE -','22:55:19','VISITANTE','/compraai/inicio.php',1654),
 (1679,'127.0.0.1','18/12/2010','VISITA NO SITE -','22:55:42','VISITANTE','/compraai/inicio.php',1655),
 (1680,'127.0.0.1','18/12/2010','VISITA NO SITE -','22:55:42','VISITANTE','/compraai/inicio.php',1656),
 (1681,'127.0.0.1','18/12/2010','VISITA NO SITE -','22:55:52','VISITANTE','/compraai/inicio.php',1657),
 (1682,'127.0.0.1','18/12/2010','VISITA NO SITE -','22:56:19','VISITANTE','/compraai/inicio.php',1658),
 (1683,'127.0.0.1','18/12/2010','VISITA NO SITE -','22:56:19','VISITANTE','/compraai/inicio.php',1659),
 (1684,'127.0.0.1','18/12/2010','VISITA NO SITE -','22:56:38','VISITANTE','/compraai/inicio.php',1660);
INSERT INTO `log_user_event` (`id`,`IP`,`DATA`,`EVENTO`,`HORA`,`USUARIO`,`ARQUIVO`,`QTD`) VALUES 
 (1685,'127.0.0.1','18/12/2010','VISITA NO SITE -','22:56:39','VISITANTE','/compraai/inicio.php',1661),
 (1686,'127.0.0.1','18/12/2010','VISITA NO SITE -','22:57:22','VISITANTE','/compraai/inicio.php',1662),
 (1687,'127.0.0.1','18/12/2010','VISITA NO SITE -','22:57:22','VISITANTE','/compraai/inicio.php',1663),
 (1688,'127.0.0.1','18/12/2010','VISITA NO SITE -','22:58:02','VISITANTE','/compraai/inicio.php',1664),
 (1689,'127.0.0.1','18/12/2010','VISITA NO SITE -','22:58:02','VISITANTE','/compraai/inicio.php',1665),
 (1690,'127.0.0.1','18/12/2010','VISITA NO SITE -','23:00:22','VISITANTE','/compraai/inicio.php',1666),
 (1691,'127.0.0.1','18/12/2010','VISITA NO SITE -','23:00:22','VISITANTE','/compraai/inicio.php',1667),
 (1692,'127.0.0.1','18/12/2010','VISITA NO SITE -','23:01:42','VISITANTE','/compraai/inicio.php',1668),
 (1693,'127.0.0.1','18/12/2010','VISITA NO SITE -','23:01:43','VISITANTE','/compraai/inicio.php',1669),
 (1694,'127.0.0.1','18/12/2010','VISITA NO SITE -','23:02:09','VISITANTE','/compraai/inicio.php',1670);
INSERT INTO `log_user_event` (`id`,`IP`,`DATA`,`EVENTO`,`HORA`,`USUARIO`,`ARQUIVO`,`QTD`) VALUES 
 (1695,'127.0.0.1','18/12/2010','VISITA NO SITE -','23:02:09','VISITANTE','/compraai/inicio.php',1671),
 (1696,'127.0.0.1','18/12/2010','VISITA NO SITE -','23:03:00','VISITANTE','/compraai/inicio.php',1672),
 (1697,'127.0.0.1','18/12/2010','VISITA NO SITE -','23:03:00','VISITANTE','/compraai/inicio.php',1673),
 (1698,'127.0.0.1','18/12/2010','VISITA NO SITE -','23:03:40','VISITANTE','/compraai/inicio.php',1674),
 (1699,'127.0.0.1','18/12/2010','VISITA NO SITE -','23:03:40','VISITANTE','/compraai/inicio.php',1675),
 (1700,'127.0.0.1','18/12/2010','VISITA NO SITE -','23:03:45','VISITANTE','/compraai/inicio.php',1676),
 (1701,'127.0.0.1','18/12/2010','VISITA NO SITE -','23:05:42','VISITANTE','/compraai/inicio.php',1677),
 (1702,'127.0.0.1','18/12/2010','VISITA NO SITE -','23:05:42','VISITANTE','/compraai/inicio.php',1678),
 (1703,'127.0.0.1','18/12/2010','VISITA NO SITE -','23:06:25','VISITANTE','/compraai/inicio.php',1679),
 (1704,'127.0.0.1','18/12/2010','VISITA NO SITE -','23:06:26','VISITANTE','/compraai/inicio.php',1680);
INSERT INTO `log_user_event` (`id`,`IP`,`DATA`,`EVENTO`,`HORA`,`USUARIO`,`ARQUIVO`,`QTD`) VALUES 
 (1705,'127.0.0.1','18/12/2010','VISITA NO SITE -','23:07:04','VISITANTE','/compraai/inicio.php',1681),
 (1706,'127.0.0.1','18/12/2010','VISITA NO SITE -','23:07:05','VISITANTE','/compraai/inicio.php',1682),
 (1707,'127.0.0.1','18/12/2010','VISITA NO SITE -','23:07:52','VISITANTE','/compraai/inicio.php',1683),
 (1708,'127.0.0.1','18/12/2010','VISITA NO SITE -','23:07:52','VISITANTE','/compraai/inicio.php',1684),
 (1709,'127.0.0.1','18/12/2010','VISITA NO SITE -','23:18:17','VISITANTE','/compraai/inicio.php',1685),
 (1710,'127.0.0.1','18/12/2010','VISITA NO SITE -','23:18:17','VISITANTE','/compraai/inicio.php',1686),
 (1711,'127.0.0.1','18/12/2010','VISITA NO SITE -','23:19:31','VISITANTE','/compraai/inicio.php',1687),
 (1712,'127.0.0.1','18/12/2010','VISITA NO SITE -','23:19:32','VISITANTE','/compraai/inicio.php',1688),
 (1713,'127.0.0.1','18/12/2010','VISITA NO SITE -','23:21:49','VISITANTE','/compraai/inicio.php',1689),
 (1714,'127.0.0.1','18/12/2010','VISITA NO SITE -','23:21:50','VISITANTE','/compraai/inicio.php',1690);
INSERT INTO `log_user_event` (`id`,`IP`,`DATA`,`EVENTO`,`HORA`,`USUARIO`,`ARQUIVO`,`QTD`) VALUES 
 (1715,'127.0.0.1','18/12/2010','VISITA NO SITE -','23:27:38','VISITANTE','/compraai/inicio.php',1691),
 (1716,'127.0.0.1','18/12/2010','VISITA NO SITE -','23:27:38','VISITANTE','/compraai/inicio.php',1692),
 (1717,'127.0.0.1','18/12/2010','VISITA NO SITE -','23:38:49','VISITANTE','/compraai/inicio.php',1693),
 (1718,'127.0.0.1','18/12/2010','VISITA NO SITE -','23:56:41','VISITANTE','/compraai/inicio.php',1694),
 (1719,'127.0.0.1','18/12/2010','VISITA NO SITE -','23:56:42','VISITANTE','/compraai/inicio.php',1695),
 (1720,'127.0.0.1','18/12/2010','VISITA NO SITE -','23:58:41','VISITANTE','/compraai/inicio.php',1696),
 (1721,'127.0.0.1','18/12/2010','VISITA NO SITE -','23:58:42','VISITANTE','/compraai/inicio.php',1697),
 (1722,'127.0.0.1','18/12/2010','VISITA NO SITE -','23:59:46','VISITANTE','/compraai/inicio.php',1698),
 (1723,'127.0.0.1','18/12/2010','VISITA NO SITE -','23:59:46','VISITANTE','/compraai/inicio.php',1699),
 (1724,'127.0.0.1','19/12/2010','VISITA NO SITE -','00:04:54','VISITANTE','/compraai/inicio.php',1700);
INSERT INTO `log_user_event` (`id`,`IP`,`DATA`,`EVENTO`,`HORA`,`USUARIO`,`ARQUIVO`,`QTD`) VALUES 
 (1725,'127.0.0.1','19/12/2010','VISITA NO SITE -','00:04:55','VISITANTE','/compraai/inicio.php',1701),
 (1726,'127.0.0.1','19/12/2010','VISITA NO SITE -','00:07:37','VISITANTE','/compraai/inicio.php',1702),
 (1727,'127.0.0.1','19/12/2010','VISITA NO SITE -','00:07:38','VISITANTE','/compraai/inicio.php',1703),
 (1728,'127.0.0.1','19/12/2010','VISITA NO SITE -','00:09:02','VISITANTE','/compraai/inicio.php',1704),
 (1729,'127.0.0.1','19/12/2010','VISITA NO SITE -','00:09:03','VISITANTE','/compraai/inicio.php',1705),
 (1730,'127.0.0.1','19/12/2010','VISITA NO SITE -','00:10:11','VISITANTE','/compraai/inicio.php',1706),
 (1731,'127.0.0.1','19/12/2010','VISITA NO SITE -','00:10:12','VISITANTE','/compraai/inicio.php',1707),
 (1732,'127.0.0.1','19/12/2010','VISITA NO SITE -','00:12:16','VISITANTE','/compraai/inicio.php',1708),
 (1733,'127.0.0.1','19/12/2010','VISITA NO SITE -','00:12:17','VISITANTE','/compraai/inicio.php',1709),
 (1734,'127.0.0.1','19/12/2010','VISITA NO SITE -','00:12:36','VISITANTE','/compraai/inicio.php',1710);
INSERT INTO `log_user_event` (`id`,`IP`,`DATA`,`EVENTO`,`HORA`,`USUARIO`,`ARQUIVO`,`QTD`) VALUES 
 (1735,'127.0.0.1','19/12/2010','VISITA NO SITE -','00:12:37','VISITANTE','/compraai/inicio.php',1711),
 (1736,'127.0.0.1','19/12/2010','VISITA NO SITE -','00:12:58','VISITANTE','/compraai/inicio.php',1712),
 (1737,'127.0.0.1','19/12/2010','VISITA NO SITE -','00:12:58','VISITANTE','/compraai/inicio.php',1713),
 (1738,'127.0.0.1','19/12/2010','VISITA NO SITE -','00:14:32','VISITANTE','/compraai/inicio.php',1714),
 (1739,'127.0.0.1','19/12/2010','VISITA NO SITE -','00:14:32','VISITANTE','/compraai/inicio.php',1715),
 (1740,'127.0.0.1','19/12/2010','VISITA NO SITE -','00:15:56','VISITANTE','/compraai/inicio.php',1716),
 (1741,'127.0.0.1','19/12/2010','VISITA NO SITE -','00:15:56','VISITANTE','/compraai/inicio.php',1717),
 (1742,'127.0.0.1','19/12/2010','VISITA NO SITE -','00:17:37','VISITANTE','/compraai/inicio.php',1718),
 (1743,'127.0.0.1','19/12/2010','VISITA NO SITE -','00:17:37','VISITANTE','/compraai/inicio.php',1719),
 (1744,'127.0.0.1','19/12/2010','VISITA NO SITE -','00:18:27','VISITANTE','/compraai/inicio.php',1720);
INSERT INTO `log_user_event` (`id`,`IP`,`DATA`,`EVENTO`,`HORA`,`USUARIO`,`ARQUIVO`,`QTD`) VALUES 
 (1745,'127.0.0.1','19/12/2010','VISITA NO SITE -','00:18:28','VISITANTE','/compraai/inicio.php',1721),
 (1746,'127.0.0.1','19/12/2010','VISITA NO SITE -','00:23:08','VISITANTE','/compraai/inicio.php',1722),
 (1747,'127.0.0.1','19/12/2010','VISITA NO SITE -','00:23:08','VISITANTE','/compraai/inicio.php',1723),
 (1748,'127.0.0.1','19/12/2010','VISITA NO SITE -','00:24:30','VISITANTE','/compraai/inicio.php',1724),
 (1749,'127.0.0.1','19/12/2010','VISITA NO SITE -','00:24:30','VISITANTE','/compraai/inicio.php',1725),
 (1750,'127.0.0.1','19/12/2010','VISITA NO SITE -','00:25:19','VISITANTE','/compraai/inicio.php',1726),
 (1751,'127.0.0.1','19/12/2010','VISITA NO SITE -','00:25:19','VISITANTE','/compraai/inicio.php',1727),
 (1752,'127.0.0.1','19/12/2010','VISITA NO SITE -','00:26:07','VISITANTE','/compraai/inicio.php',1728),
 (1753,'127.0.0.1','19/12/2010','VISITA NO SITE -','00:26:08','VISITANTE','/compraai/inicio.php',1729),
 (1754,'127.0.0.1','19/12/2010','VISITA NO SITE -','00:27:28','VISITANTE','/compraai/inicio.php',1730);
INSERT INTO `log_user_event` (`id`,`IP`,`DATA`,`EVENTO`,`HORA`,`USUARIO`,`ARQUIVO`,`QTD`) VALUES 
 (1755,'127.0.0.1','19/12/2010','VISITA NO SITE -','00:27:49','HOLODEK','/compraai/inicio.php',1731),
 (1756,'127.0.0.1','19/12/2010','VISITA NO SITE -','00:30:27','VISITANTE','/compraai/login_sair.php',1732),
 (1757,'127.0.0.1','19/12/2010','VISITA NO SITE -','00:30:48','VISITANTE','/compraai/senha_erro.php',1733),
 (1758,'127.0.0.1','19/12/2010','VISITA NO SITE -','00:32:54','HOLODEK','/compraai/inicio.php',1734),
 (1759,'127.0.0.1','19/12/2010','VISITA NO SITE -','00:40:46','HOLODEK','/compraai/inicio.php',1735),
 (1760,'127.0.0.1','19/12/2010','VISITA NO SITE -','00:45:16','HOLODEK','/compraai/inicio.php',1736),
 (1761,'127.0.0.1','19/12/2010','VISITA NO SITE -','00:46:38','VISITANTE','/compraai/inicio.php',1737),
 (1762,'127.0.0.1','19/12/2010','VISITA NO SITE -','00:46:38','VISITANTE','/compraai/inicio.php',1738),
 (1763,'127.0.0.1','19/12/2010','VISITA NO SITE -','01:00:36','VISITANTE','/compraai/inicio.php',1739),
 (1764,'127.0.0.1','19/12/2010','VISITA NO SITE -','01:00:36','VISITANTE','/compraai/inicio.php',1740);
INSERT INTO `log_user_event` (`id`,`IP`,`DATA`,`EVENTO`,`HORA`,`USUARIO`,`ARQUIVO`,`QTD`) VALUES 
 (1765,'127.0.0.1','19/12/2010','VISITA NO SITE -','01:01:25','VISITANTE','/compraai/inicio.php',1741),
 (1766,'127.0.0.1','19/12/2010','VISITA NO SITE -','01:01:25','VISITANTE','/compraai/inicio.php',1742),
 (1767,'127.0.0.1','19/12/2010','VISITA NO SITE -','01:01:43','VISITANTE','/compraai/inicio.php',1743),
 (1768,'127.0.0.1','19/12/2010','VISITA NO SITE -','01:01:44','VISITANTE','/compraai/inicio.php',1744),
 (1769,'127.0.0.1','19/12/2010','VISITA NO SITE -','01:37:37','VISITANTE','/compraai/inicio.php',1745),
 (1770,'127.0.0.1','19/12/2010','VISITA NO SITE -','02:36:27','VISITANTE','/compraai/inicio.php',1746),
 (1771,'127.0.0.1','19/12/2010','VISITA NO SITE -','02:36:27','VISITANTE','/compraai/inicio.php',1747),
 (1772,'127.0.0.1','19/12/2010','VISITA NO SITE -','22:01:49','VISITANTE','/compraai/inicio.php',1748),
 (1773,'127.0.0.1','19/12/2010','VISITA NO SITE -','22:01:50','VISITANTE','/compraai/inicio.php',1749),
 (1774,'127.0.0.1','20/12/2010','VISITA NO SITE -','08:44:50','VISITANTE','/compraai/inicio.php',1750);
INSERT INTO `log_user_event` (`id`,`IP`,`DATA`,`EVENTO`,`HORA`,`USUARIO`,`ARQUIVO`,`QTD`) VALUES 
 (1775,'127.0.0.1','20/12/2010','VISITA NO SITE -','08:44:51','VISITANTE','/compraai/inicio.php',1751),
 (1776,'127.0.0.1','20/12/2010','VISITA NO SITE -','12:27:46','VISITANTE','/compraai/inicio.php',1752),
 (1777,'127.0.0.1','20/12/2010','VISITA NO SITE -','14:59:57','VISITANTE','/compraai/inicio.php',1753),
 (1778,'127.0.0.1','20/12/2010','VISITA NO SITE -','14:59:57','VISITANTE','/compraai/inicio.php',1754),
 (1779,'127.0.0.1','20/12/2010','VISITA NO SITE -','15:32:40','VISITANTE','/compraai/inicio.php',1755),
 (1780,'127.0.0.1','20/12/2010','VISITA NO SITE -','15:32:40','VISITANTE','/compraai/inicio.php',1756),
 (1781,'127.0.0.1','20/12/2010','VISITA NO SITE -','15:33:28','VISITANTE','/compraai/inicio.php',1757),
 (1782,'127.0.0.1','20/12/2010','VISITA NO SITE -','15:33:28','VISITANTE','/compraai/inicio.php',1758),
 (1783,'127.0.0.1','20/12/2010','VISITA NO SITE -','15:37:55','VISITANTE','/compraai/inicio.php',1759),
 (1784,'127.0.0.1','20/12/2010','VISITA NO SITE -','15:37:55','VISITANTE','/compraai/inicio.php',1760);
INSERT INTO `log_user_event` (`id`,`IP`,`DATA`,`EVENTO`,`HORA`,`USUARIO`,`ARQUIVO`,`QTD`) VALUES 
 (1785,'127.0.0.1','20/12/2010','VISITA NO SITE -','15:39:15','VISITANTE','/novo_visu/inicio.php',1761),
 (1786,'127.0.0.1','21/12/2010','VISITA NO SITE -','12:45:31','VISITANTE','/compraai/inicio.php',1762),
 (1787,'127.0.0.1','21/12/2010','VISITA NO SITE -','12:45:31','VISITANTE','/compraai/inicio.php',1763),
 (1788,'127.0.0.1','21/12/2010','VISITA NO SITE -','12:51:29','VISITANTE','/compraai/inicio.php',1764),
 (1789,'127.0.0.1','21/12/2010','VISITA NO SITE -','12:51:29','VISITANTE','/compraai/inicio.php',1765),
 (1790,'127.0.0.1','21/12/2010','VISITA NO SITE -','12:59:04','VISITANTE','/compraai/inicio.php',1766),
 (1791,'127.0.0.1','21/12/2010','VISITA NO SITE -','12:59:04','VISITANTE','/compraai/inicio.php',1767),
 (1792,'127.0.0.1','21/12/2010','VISITA NO SITE -','13:02:24','HOLODEK','/compraai/inicio.php',1768),
 (1793,'127.0.0.1','21/12/2010','VISITA NO SITE -','13:02:32','HOLODEK','/compraai/inicio.php',1769),
 (1794,'127.0.0.1','21/12/2010','VISITA NO SITE -','13:03:10','HOLODEK','/compraai/inicio.php',1770);
INSERT INTO `log_user_event` (`id`,`IP`,`DATA`,`EVENTO`,`HORA`,`USUARIO`,`ARQUIVO`,`QTD`) VALUES 
 (1795,'127.0.0.1','21/12/2010','VISITA NO SITE -','13:03:16','HOLODEK','/compraai/inicio.php',1771),
 (1796,'127.0.0.1','21/12/2010','VISITA NO SITE -','13:03:28','HOLODEK','/compraai/inicio.php',1772),
 (1797,'127.0.0.1','21/12/2010','VISITA NO SITE -','13:04:10','HOLODEK','/compraai/inicio.php',1773),
 (1798,'127.0.0.1','21/12/2010','VISITA NO SITE -','13:04:37','VISITANTE','/compraai/inicio.php',1774),
 (1799,'127.0.0.1','21/12/2010','VISITA NO SITE -','13:04:38','VISITANTE','/compraai/inicio.php',1775),
 (1800,'127.0.0.1','21/12/2010','VISITA NO SITE -','13:04:47','VISITANTE','/compraai/inicio.php',1776),
 (1801,'127.0.0.1','21/12/2010','VISITA NO SITE -','13:04:47','VISITANTE','/compraai/inicio.php',1777),
 (1802,'127.0.0.1','21/12/2010','VISITA NO SITE -','13:06:45','VISITANTE','/compraai/inicio.php',1778),
 (1803,'127.0.0.1','21/12/2010','VISITA NO SITE -','13:06:45','VISITANTE','/compraai/inicio.php',1779),
 (1804,'127.0.0.1','21/12/2010','VISITA NO SITE -','13:07:46','HOLODEK','/compraai/inicio.php',1780);
INSERT INTO `log_user_event` (`id`,`IP`,`DATA`,`EVENTO`,`HORA`,`USUARIO`,`ARQUIVO`,`QTD`) VALUES 
 (1805,'127.0.0.1','21/12/2010','VISITA NO SITE -','13:11:51','VISITANTE','/compraai/inicio.php',1781),
 (1806,'127.0.0.1','21/12/2010','VISITA NO SITE -','13:12:36','VISITANTE','/compraai/inicio.php',1782),
 (1807,'127.0.0.1','21/12/2010','VISITA NO SITE -','13:14:07','VISITANTE','/compraai/inicio.php',1783),
 (1808,'127.0.0.1','21/12/2010','VISITA NO SITE -','13:15:04','VISITANTE','/compraai/inicio.php',1784),
 (1809,'127.0.0.1','21/12/2010','VISITA NO SITE -','13:15:05','VISITANTE','/compraai/inicio.php',1785),
 (1810,'127.0.0.1','21/12/2010','VISITA NO SITE -','13:15:23','VISITANTE','/compraai/inicio.php',1786),
 (1811,'127.0.0.1','21/12/2010','VISITA NO SITE -','13:16:18','VISITANTE','/compraai/inicio.php',1787),
 (1812,'192.168.1.44','21/12/2010','VISITA NO SITE -','15:35:53','VISITANTE','/compraai/inicio.php',1788),
 (1813,'192.168.1.44','21/12/2010','VISITA NO SITE -','15:35:53','VISITANTE','/compraai/inicio.php',1789),
 (1814,'192.168.1.44','21/12/2010','VISITA NO SITE -','15:37:16','HOLODEK','/compraai/inicio.php',1790);
INSERT INTO `log_user_event` (`id`,`IP`,`DATA`,`EVENTO`,`HORA`,`USUARIO`,`ARQUIVO`,`QTD`) VALUES 
 (1815,'192.168.1.44','21/12/2010','VISITA NO SITE -','15:37:24','HOLODEK','/compraai/inicio.php',1791),
 (1816,'192.168.1.44','21/12/2010','VISITA NO SITE -','15:37:45','VISITANTE','/compraai/inicio.php',1792),
 (1817,'192.168.1.44','21/12/2010','VISITA NO SITE -','15:37:52','VISITANTE','/compraai/inicio.php',1793),
 (1818,'192.168.1.44','21/12/2010','VISITA NO SITE -','15:37:52','VISITANTE','/compraai/inicio.php',1794),
 (1819,'192.168.1.44','21/12/2010','VISITA NO SITE -','15:40:42','VISITANTE','/compraai/inicio.php',1795),
 (1820,'192.168.1.44','21/12/2010','VISITA NO SITE -','15:40:42','VISITANTE','/compraai/inicio.php',1796),
 (1821,'192.168.1.44','21/12/2010','VISITA NO SITE -','15:41:00','VISITANTE','/compraai/inicio.php',1797),
 (1822,'192.168.1.44','21/12/2010','VISITA NO SITE -','15:41:00','VISITANTE','/compraai/inicio.php',1798),
 (1823,'192.168.1.44','21/12/2010','VISITA NO SITE -','15:41:08','VISITANTE','/compraai/inicio.php',1799),
 (1824,'192.168.1.44','21/12/2010','VISITA NO SITE -','15:41:09','VISITANTE','/compraai/inicio.php',1800);
INSERT INTO `log_user_event` (`id`,`IP`,`DATA`,`EVENTO`,`HORA`,`USUARIO`,`ARQUIVO`,`QTD`) VALUES 
 (1825,'192.168.1.44','21/12/2010','VISITA NO SITE -','15:43:05','VISITANTE','/compraai/inicio.php',1801),
 (1826,'192.168.1.61','21/12/2010','VISITA NO SITE -','15:43:32','VISITANTE','/compraai/inicio.php',1802),
 (1827,'192.168.1.61','21/12/2010','VISITA NO SITE -','15:43:32','VISITANTE','/compraai/inicio.php',1803),
 (1828,'192.168.1.61','21/12/2010','VISITA NO SITE -','15:44:20','HOLODEK','/compraai/inicio.php',1804),
 (1829,'192.168.1.61','21/12/2010','VISITA NO SITE -','15:45:12','VISITANTE','/compraai/inicio.php',1805),
 (1830,'192.168.1.61','21/12/2010','VISITA NO SITE -','15:45:21','VISITANTE','/compraai/inicio.php',1806),
 (1831,'192.168.1.61','21/12/2010','VISITA NO SITE -','15:46:02','VISITANTE','/compraai/inicio.php',1807),
 (1832,'192.168.1.61','21/12/2010','VISITA NO SITE -','15:47:18','VISITANTE','/compraai/inicio.php',1808),
 (1833,'192.168.1.61','21/12/2010','VISITA NO SITE -','15:47:18','VISITANTE','/compraai/inicio.php',1809),
 (1834,'192.168.1.44','21/12/2010','VISITA NO SITE -','15:48:49','VISITANTE','/compraai/inicio.php',1810);
INSERT INTO `log_user_event` (`id`,`IP`,`DATA`,`EVENTO`,`HORA`,`USUARIO`,`ARQUIVO`,`QTD`) VALUES 
 (1835,'192.168.1.44','21/12/2010','VISITA NO SITE -','15:48:49','VISITANTE','/compraai/inicio.php',1811),
 (1836,'192.168.1.44','21/12/2010','VISITA NO SITE -','15:49:05','VISITANTE','/compraai/inicio.php',1812),
 (1837,'192.168.1.44','21/12/2010','VISITA NO SITE -','15:49:18','VISITANTE','/compraai/inicio.php',1813),
 (1838,'192.168.1.44','21/12/2010','VISITA NO SITE -','15:49:28','VISITANTE','/compraai/inicio.php',1814),
 (1839,'192.168.1.44','21/12/2010','VISITA NO SITE -','15:49:54','VISITANTE','/compraai/inicio.php',1815),
 (1840,'192.168.1.44','21/12/2010','VISITA NO SITE -','15:56:28','VISITANTE','/compraai/inicio.php',1816),
 (1841,'192.168.1.61','21/12/2010','VISITA NO SITE -','16:17:59','VISITANTE','/compraai/inicio.php',1817),
 (1842,'192.168.1.61','21/12/2010','VISITA NO SITE -','16:17:59','VISITANTE','/compraai/inicio.php',1818),
 (1843,'192.168.1.44','21/12/2010','VISITA NO SITE -','16:43:20','VISITANTE','/compraai/inicio.php',1819),
 (1844,'192.168.1.44','21/12/2010','VISITA NO SITE -','16:58:29','VISITANTE','/compraai/inicio.php',1820);
INSERT INTO `log_user_event` (`id`,`IP`,`DATA`,`EVENTO`,`HORA`,`USUARIO`,`ARQUIVO`,`QTD`) VALUES 
 (1845,'192.168.1.44','21/12/2010','VISITA NO SITE -','17:04:26','VISITANTE','/compraai/inicio.php',1821),
 (1846,'192.168.1.44','21/12/2010','VISITA NO SITE -','17:25:10','MARLEY','/compraai/inicio.php',1822),
 (1847,'192.168.1.44','21/12/2010','VISITA NO SITE -','18:03:53','VISITANTE','/compraai/inicio.php',1823),
 (1848,'192.168.1.44','21/12/2010','VISITA NO SITE -','18:03:53','VISITANTE','/compraai/inicio.php',1824),
 (1849,'192.168.1.44','21/12/2010','VISITA NO SITE -','18:08:49','VISITANTE','/novo_visu/inicio.php',1825),
 (1850,'192.168.1.44','21/12/2010','VISITA NO SITE -','18:08:50','VISITANTE','/novo_visu/inicio.php',1826),
 (1851,'192.168.1.44','21/12/2010','VISITA NO SITE -','18:09:03','HOLODEK','/novo_visu/inicio.php',1827),
 (1852,'192.168.1.44','21/12/2010','VISITA NO SITE -','18:24:30','VISITANTE','/novo_visu/inicio.php',1828),
 (1853,'192.168.1.44','21/12/2010','VISITA NO SITE -','18:24:31','VISITANTE','/novo_visu/inicio.php',1829),
 (1854,'192.168.1.44','21/12/2010','VISITA NO SITE -','18:24:44','HOLODEK','/novo_visu/inicio.php',1830);
INSERT INTO `log_user_event` (`id`,`IP`,`DATA`,`EVENTO`,`HORA`,`USUARIO`,`ARQUIVO`,`QTD`) VALUES 
 (1855,'127.0.0.1','21/12/2010','VISITA NO SITE -','18:36:26','VISITANTE','/compraai/inicio.php',1831),
 (1856,'127.0.0.1','21/12/2010','VISITA NO SITE -','18:36:27','VISITANTE','/compraai/inicio.php',1832),
 (1857,'127.0.0.1','21/12/2010','VISITA NO SITE -','18:37:58','VISITANTE','/novo_visu/inicio.php',1833),
 (1858,'127.0.0.1','21/12/2010','VISITA NO SITE -','18:37:58','VISITANTE','/novo_visu/inicio.php',1834),
 (1859,'127.0.0.1','21/12/2010','VISITA NO SITE -','18:38:11','HOLODEK','/novo_visu/inicio.php',1835),
 (1860,'127.0.0.1','21/12/2010','VISITA NO SITE -','22:42:07','VISITANTE','/novo_visu/inicio.php',1836),
 (1861,'127.0.0.1','21/12/2010','VISITA NO SITE -','22:42:07','VISITANTE','/novo_visu/inicio.php',1837),
 (1862,'127.0.0.1','21/12/2010','VISITA NO SITE -','22:50:51','VISITANTE','/novo_visu/inicio.php',1838),
 (1863,'127.0.0.1','21/12/2010','VISITA NO SITE -','22:50:51','VISITANTE','/novo_visu/inicio.php',1839),
 (1864,'127.0.0.1','21/12/2010','VISITA NO SITE -','22:56:56','VISITANTE','/compraai/inicio.php',1840);
INSERT INTO `log_user_event` (`id`,`IP`,`DATA`,`EVENTO`,`HORA`,`USUARIO`,`ARQUIVO`,`QTD`) VALUES 
 (1865,'127.0.0.1','21/12/2010','VISITA NO SITE -','22:56:57','VISITANTE','/compraai/inicio.php',1841),
 (1866,'127.0.0.1','21/12/2010','VISITA NO SITE -','22:58:07','VISITANTE','/compraai/inicio.php',1842),
 (1867,'127.0.0.1','21/12/2010','VISITA NO SITE -','22:58:12','VISITANTE','/compraai/inicio.php',1843),
 (1868,'127.0.0.1','22/12/2010','VISITA NO SITE -','17:37:38','VISITANTE','/novo_visu/inicio.php',1844),
 (1869,'127.0.0.1','22/12/2010','VISITA NO SITE -','17:37:39','VISITANTE','/novo_visu/inicio.php',1845),
 (1870,'127.0.0.1','22/12/2010','VISITA NO SITE -','17:39:04','HOLODEK','/novo_visu/inicio.php',1846),
 (1871,'127.0.0.1','23/12/2010','VISITA NO SITE -','21:33:20','VISITANTE','/compraai/inicio.php',1847),
 (1872,'127.0.0.1','23/12/2010','VISITA NO SITE -','21:33:21','VISITANTE','/compraai/inicio.php',1848),
 (1873,'192.168.1.1','23/12/2010','VISITA NO SITE -','21:39:34','VISITANTE','/compraai/inicio.php',1849),
 (1874,'192.168.1.1','23/12/2010','VISITA NO SITE -','21:39:34','VISITANTE','/compraai/inicio.php',1850);
INSERT INTO `log_user_event` (`id`,`IP`,`DATA`,`EVENTO`,`HORA`,`USUARIO`,`ARQUIVO`,`QTD`) VALUES 
 (1875,'192.168.1.1','23/12/2010','VISITA NO SITE -','21:42:46','VISITANTE','/compraai/inicio.php',1851),
 (1876,'192.168.1.1','23/12/2010','VISITA NO SITE -','21:43:56','VISITANTE','/compraai/inicio.php',1852),
 (1877,'127.0.0.1','23/12/2010','VISITA NO SITE -','21:50:41','HOLODEK','/compraai/inicio.php',1853),
 (1878,'127.0.0.1','23/12/2010','VISITA NO SITE -','22:16:56','HOLODEK','/compraai/inicio.php',1854),
 (1879,'127.0.0.1','23/12/2010','VISITA NO SITE -','22:32:12','HOLODEK','/compraai/inicio.php',1855),
 (1880,'127.0.0.1','23/12/2010','VISITA NO SITE -','22:33:01','HOLODEK','/compraai/inicio.php',1856),
 (1881,'127.0.0.1','23/12/2010','VISITA NO SITE -','22:33:36','VISITANTE','/compraai/inicio.php',1857),
 (1882,'127.0.0.1','23/12/2010','VISITA NO SITE -','22:33:36','VISITANTE','/compraai/inicio.php',1858),
 (1883,'127.0.0.1','26/12/2010','VISITA NO SITE -','20:34:54','VISITANTE','/compraai/inicio.php',1859),
 (1884,'127.0.0.1','26/12/2010','VISITA NO SITE -','20:34:55','VISITANTE','/compraai/inicio.php',1860);
INSERT INTO `log_user_event` (`id`,`IP`,`DATA`,`EVENTO`,`HORA`,`USUARIO`,`ARQUIVO`,`QTD`) VALUES 
 (1885,'127.0.0.1','26/12/2010','VISITA NO SITE -','20:37:31','VISITANTE','/compraai/inicio.php',1861),
 (1886,'127.0.0.1','26/12/2010','VISITA NO SITE -','20:52:07','HOLODEK','/compraai/inicio.php',1862),
 (1887,'127.0.0.1','26/12/2010','VISITA NO SITE -','20:53:46','VISITANTE','/compraai/inicio.php',1863),
 (1888,'127.0.0.1','26/12/2010','VISITA NO SITE -','20:53:46','VISITANTE','/compraai/inicio.php',1864),
 (1889,'127.0.0.1','26/12/2010','VISITA NO SITE -','20:55:13','VISITANTE','/compraai/inicio.php',1865),
 (1890,'127.0.0.1','26/12/2010','VISITA NO SITE -','20:58:23','VISITANTE','/compraai/inicio.php',1866),
 (1891,'127.0.0.1','26/12/2010','VISITA NO SITE -','20:58:23','VISITANTE','/compraai/inicio.php',1867),
 (1892,'127.0.0.1','26/12/2010','VISITA NO SITE -','21:01:56','VISITANTE','/compraai/inicio.php',1868),
 (1893,'127.0.0.1','29/12/2010','VISITA NO SITE -','13:34:15','VISITANTE','/compraai/inicio.php',1869),
 (1894,'127.0.0.1','29/12/2010','VISITA NO SITE -','13:34:15','VISITANTE','/compraai/inicio.php',1870);
INSERT INTO `log_user_event` (`id`,`IP`,`DATA`,`EVENTO`,`HORA`,`USUARIO`,`ARQUIVO`,`QTD`) VALUES 
 (1895,'127.0.0.1','29/12/2010','VISITA NO SITE -','13:43:56','VISITANTE','/novo_visu/inicio.php',1871),
 (1896,'127.0.0.1','29/12/2010','VISITA NO SITE -','13:44:27','VISITANTE','/novo_visu/inicio.php',1872),
 (1897,'127.0.0.1','29/12/2010','VISITA NO SITE -','13:58:57','HOLODEK','/compraai/inicio.php',1873),
 (1898,'127.0.0.1','29/12/2010','VISITA NO SITE -','14:06:01','VISITANTE','/compraai/inicio.php',1874),
 (1899,'127.0.0.1','29/12/2010','VISITA NO SITE -','14:06:01','VISITANTE','/compraai/inicio.php',1875),
 (1900,'127.0.0.1','29/12/2010','VISITA NO SITE -','14:13:01','VISITANTE','/compraai/inicio.php',1876),
 (1901,'127.0.0.1','29/12/2010','VISITA NO SITE -','14:13:01','VISITANTE','/compraai/inicio.php',1877),
 (1902,'127.0.0.1','29/12/2010','VISITA NO SITE -','14:16:28','VISITANTE','/compraai/inicio.php',1878),
 (1903,'127.0.0.1','29/12/2010','VISITA NO SITE -','14:16:28','VISITANTE','/compraai/inicio.php',1879),
 (1904,'127.0.0.1','29/12/2010','VISITA NO SITE -','15:43:10','VISITANTE','/compraai/inicio.php',1880);
INSERT INTO `log_user_event` (`id`,`IP`,`DATA`,`EVENTO`,`HORA`,`USUARIO`,`ARQUIVO`,`QTD`) VALUES 
 (1905,'127.0.0.1','29/12/2010','VISITA NO SITE -','15:43:10','VISITANTE','/compraai/inicio.php',1881),
 (1906,'127.0.0.1','29/12/2010','VISITA NO SITE -','15:57:28','VISITANTE','/compraai/inicio.php',1882),
 (1907,'127.0.0.1','29/12/2010','VISITA NO SITE -','15:57:48','VISITANTE','/compraai/inicio.php',1883),
 (1908,'127.0.0.1','29/12/2010','VISITA NO SITE -','15:57:48','VISITANTE','/compraai/inicio.php',1884),
 (1909,'127.0.0.1','29/12/2010','VISITA NO SITE -','16:02:27','VISITANTE','/compraai/inicio.php',1885),
 (1910,'127.0.0.1','29/12/2010','VISITA NO SITE -','16:02:35','VISITANTE','/compraai/inicio.php',1886),
 (1911,'127.0.0.1','29/12/2010','VISITA NO SITE -','16:02:35','VISITANTE','/compraai/inicio.php',1887),
 (1912,'127.0.0.1','30/12/2010','VISITA NO SITE -','14:13:58','VISITANTE','/compraai/inicio.php',1888),
 (1913,'127.0.0.1','30/12/2010','VISITA NO SITE -','14:13:58','VISITANTE','/compraai/inicio.php',1889),
 (1914,'127.0.0.1','30/12/2010','VISITA NO SITE -','15:06:33','VISITANTE','/compraai/inicio.php',1890);
INSERT INTO `log_user_event` (`id`,`IP`,`DATA`,`EVENTO`,`HORA`,`USUARIO`,`ARQUIVO`,`QTD`) VALUES 
 (1915,'127.0.0.1','30/12/2010','VISITA NO SITE -','15:11:26','VISITANTE','/compraai/inicio.php',1891),
 (1916,'127.0.0.1','30/12/2010','VISITA NO SITE -','15:11:26','VISITANTE','/compraai/inicio.php',1892),
 (1917,'127.0.0.1','30/12/2010','VISITA NO SITE -','15:17:24','VISITANTE','/compraai/inicio.php',1893),
 (1918,'127.0.0.1','30/12/2010','VISITA NO SITE -','15:17:24','VISITANTE','/compraai/inicio.php',1894),
 (1919,'127.0.0.1','30/12/2010','VISITA NO SITE -','22:51:49','VISITANTE','/compraai/inicio.php',1895),
 (1920,'127.0.0.1','30/12/2010','VISITA NO SITE -','22:51:50','VISITANTE','/compraai/inicio.php',1896),
 (1921,'127.0.0.1','30/12/2010','VISITA NO SITE -','23:33:58','VISITANTE','/compraai/inicio.php',1897),
 (1922,'127.0.0.1','30/12/2010','VISITA NO SITE -','23:33:58','VISITANTE','/compraai/inicio.php',1898),
 (1923,'127.0.0.1','30/12/2010','VISITA NO SITE -','23:36:47','VISITANTE','/compraai/inicio.php',1899),
 (1924,'127.0.0.1','30/12/2010','VISITA NO SITE -','23:37:02','VISITANTE','/compraai/inicio.php',1900);
INSERT INTO `log_user_event` (`id`,`IP`,`DATA`,`EVENTO`,`HORA`,`USUARIO`,`ARQUIVO`,`QTD`) VALUES 
 (1925,'127.0.0.1','30/12/2010','VISITA NO SITE -','23:37:59','VISITANTE','/compraai/inicio.php',1901),
 (1926,'127.0.0.1','30/12/2010','VISITA NO SITE -','23:38:07','VISITANTE','/compraai/inicio.php',1902),
 (1927,'127.0.0.1','30/12/2010','VISITA NO SITE -','23:38:07','VISITANTE','/compraai/inicio.php',1903),
 (1928,'127.0.0.1','30/12/2010','VISITA NO SITE -','23:38:31','VISITANTE','/compraai/inicio.php',1904),
 (1929,'127.0.0.1','30/12/2010','VISITA NO SITE -','23:38:31','VISITANTE','/compraai/inicio.php',1905),
 (1930,'127.0.0.1','30/12/2010','VISITA NO SITE -','23:39:43','VISITANTE','/compraai/inicio.php',1906),
 (1931,'127.0.0.1','30/12/2010','VISITA NO SITE -','23:39:43','VISITANTE','/compraai/inicio.php',1907),
 (1932,'127.0.0.1','31/12/2010','VISITA NO SITE -','20:12:55','VISITANTE','/compraai/inicio.php',1908),
 (1933,'127.0.0.1','31/12/2010','VISITA NO SITE -','20:12:56','VISITANTE','/compraai/inicio.php',1909),
 (1934,'127.0.0.1','31/12/2010','VISITA NO SITE -','20:19:55','VISITANTE','/compraai/inicio.php',1910);
INSERT INTO `log_user_event` (`id`,`IP`,`DATA`,`EVENTO`,`HORA`,`USUARIO`,`ARQUIVO`,`QTD`) VALUES 
 (1935,'127.0.0.1','31/12/2010','VISITA NO SITE -','20:20:04','VISITANTE','/compraai/inicio.php',1911),
 (1936,'127.0.0.1','31/12/2010','VISITA NO SITE -','20:21:02','VISITANTE','/compraai/inicio.php',1912),
 (1937,'127.0.0.1','31/12/2010','VISITA NO SITE -','20:21:26','VISITANTE','/compraai/inicio.php',1913),
 (1938,'127.0.0.1','31/12/2010','VISITA NO SITE -','20:22:08','VISITANTE','/compraai/inicio.php',1914),
 (1939,'127.0.0.1','31/12/2010','VISITA NO SITE -','20:23:54','VISITANTE','/compraai/inicio.php',1915),
 (1940,'127.0.0.1','31/12/2010','VISITA NO SITE -','20:23:54','VISITANTE','/compraai/inicio.php',1916),
 (1941,'127.0.0.1','31/12/2010','VISITA NO SITE -','20:27:50','VISITANTE','/compraai/inicio.php',1917),
 (1942,'127.0.0.1','31/12/2010','VISITA NO SITE -','20:39:10','VISITANTE','/compraai/inicio.php',1918),
 (1943,'127.0.0.1','31/12/2010','VISITA NO SITE -','20:58:31','VISITANTE','/compraai/inicio.php',1919),
 (1944,'127.0.0.1','03/01/2011','VISITA NO SITE -','11:30:43','VISITANTE','/compraai/inicio.php',1920);
INSERT INTO `log_user_event` (`id`,`IP`,`DATA`,`EVENTO`,`HORA`,`USUARIO`,`ARQUIVO`,`QTD`) VALUES 
 (1945,'127.0.0.1','03/01/2011','VISITA NO SITE -','11:30:43','VISITANTE','/compraai/inicio.php',1921),
 (1946,'127.0.0.1','03/01/2011','VISITA NO SITE -','11:37:11','HOLODEK','/compraai/inicio.php',1922),
 (1947,'127.0.0.1','03/01/2011','VISITA NO SITE -','11:37:23','HOLODEK','/compraai/inicio.php',1923),
 (1948,'127.0.0.1','03/01/2011','VISITA NO SITE -','11:37:36','HOLODEK','/compraai/inicio.php',1924),
 (1949,'127.0.0.1','03/01/2011','VISITA NO SITE -','11:56:56','VISITANTE','/compraai/inicio.php',1925),
 (1950,'127.0.0.1','03/01/2011','VISITA NO SITE -','11:56:56','VISITANTE','/compraai/inicio.php',1926),
 (1951,'127.0.0.1','03/01/2011','VISITA NO SITE -','12:30:34','HOLODEK','/compraai/inicio.php',1927),
 (1952,'127.0.0.1','03/01/2011','VISITA NO SITE -','12:44:58','HOLODEK','/compraai/inicio.php',1928),
 (1953,'127.0.0.1','03/01/2011','VISITA NO SITE -','13:39:50','MARLEY','/compraai/inicio.php',1929),
 (1954,'127.0.0.1','03/01/2011','VISITA NO SITE -','14:34:42','MARLEY','/compraai/inicio.php',1930);
INSERT INTO `log_user_event` (`id`,`IP`,`DATA`,`EVENTO`,`HORA`,`USUARIO`,`ARQUIVO`,`QTD`) VALUES 
 (1955,'127.0.0.1','03/01/2011','VISITA NO SITE -','14:54:25','MARLEY','/compraai/inicio.php',1931),
 (1956,'127.0.0.1','03/01/2011','VISITA NO SITE -','15:27:02','MARLEY','/compraai/inicio.php',1932),
 (1957,'127.0.0.1','03/01/2011','VISITA NO SITE -','15:27:28','MARLEY','/compraai/inicio.php',1933),
 (1958,'127.0.0.1','03/01/2011','VISITA NO SITE -','15:27:49','MARLEY','/compraai/inicio.php',1934),
 (1959,'127.0.0.1','03/01/2011','VISITA NO SITE -','15:27:58','MARLEY','/compraai/inicio.php',1935),
 (1960,'127.0.0.1','03/01/2011','VISITA NO SITE -','15:28:06','MARLEY','/compraai/inicio.php',1936),
 (1961,'127.0.0.1','03/01/2011','VISITA NO SITE -','15:28:13','MARLEY','/compraai/inicio.php',1937),
 (1962,'127.0.0.1','03/01/2011','VISITA NO SITE -','15:28:39','MARLEY','/compraai/inicio.php',1938),
 (1963,'127.0.0.1','03/01/2011','VISITA NO SITE -','15:40:51','MARLEY','/compraai/inicio.php',1939),
 (1964,'127.0.0.1','03/01/2011','VISITA NO SITE -','15:42:54','MARLEY','/compraai/inicio.php',1940);
INSERT INTO `log_user_event` (`id`,`IP`,`DATA`,`EVENTO`,`HORA`,`USUARIO`,`ARQUIVO`,`QTD`) VALUES 
 (1965,'127.0.0.1','03/01/2011','VISITA NO SITE -','15:47:48','MARLEY','/compraai/inicio.php',1941),
 (1966,'127.0.0.1','03/01/2011','VISITA NO SITE -','15:57:08','MARLEY','/compraai/inicio.php',1942),
 (1967,'127.0.0.1','03/01/2011','VISITA NO SITE -','16:01:59','MARLEY','/compraai/inicio.php',1943),
 (1968,'127.0.0.1','03/01/2011','VISITA NO SITE -','16:57:28','VISITANTE','/compraai/inicio.php',1944),
 (1969,'127.0.0.1','03/01/2011','VISITA NO SITE -','16:57:29','VISITANTE','/compraai/inicio.php',1945),
 (1970,'127.0.0.1','03/01/2011','VISITA NO SITE -','16:58:24','VISITANTE','/compraai/inicio.php',1946),
 (1971,'127.0.0.1','04/01/2011','VISITA NO SITE -','19:16:21','VISITANTE','/compraai/inicio.php',1947),
 (1972,'127.0.0.1','04/01/2011','VISITA NO SITE -','19:16:22','VISITANTE','/compraai/inicio.php',1948),
 (1973,'127.0.0.1','04/01/2011','VISITA NO SITE -','19:45:13','HOLODEK','/compraai/inicio.php',1949),
 (1974,'127.0.0.1','04/01/2011','VISITA NO SITE -','21:13:12','HOLODEK','/compraai/inicio.php',1950);
INSERT INTO `log_user_event` (`id`,`IP`,`DATA`,`EVENTO`,`HORA`,`USUARIO`,`ARQUIVO`,`QTD`) VALUES 
 (1975,'127.0.0.1','04/01/2011','VISITA NO SITE -','21:13:28','HOLODEK','/compraai/inicio.php',1951),
 (1976,'127.0.0.1','04/01/2011','VISITA NO SITE -','21:13:40','HOLODEK','/compraai/inicio.php',1952),
 (1977,'127.0.0.1','04/01/2011','VISITA NO SITE -','21:14:07','HOLODEK','/compraai/inicio.php',1953),
 (1978,'127.0.0.1','04/01/2011','VISITA NO SITE -','21:16:46','HOLODEK','/compraai/inicio.php',1954),
 (1979,'127.0.0.1','04/01/2011','VISITA NO SITE -','21:17:22','VISITANTE','/compraai/inicio.php',1955),
 (1980,'127.0.0.1','04/01/2011','VISITA NO SITE -','21:17:22','VISITANTE','/compraai/inicio.php',1956),
 (1981,'127.0.0.1','04/01/2011','VISITA NO SITE -','21:20:19','HOLODEK','/compraai/inicio.php',1957),
 (1982,'127.0.0.1','04/01/2011','VISITA NO SITE -','21:35:55','HOLODEK','/compraai/inicio.php',1958),
 (1983,'127.0.0.1','04/01/2011','VISITA NO SITE -','21:37:24','HOLODEK','/compraai/inicio.php',1959),
 (1984,'127.0.0.1','04/01/2011','VISITA NO SITE -','21:37:32','HOLODEK','/compraai/inicio.php',1960);
INSERT INTO `log_user_event` (`id`,`IP`,`DATA`,`EVENTO`,`HORA`,`USUARIO`,`ARQUIVO`,`QTD`) VALUES 
 (1985,'127.0.0.1','04/01/2011','VISITA NO SITE -','21:37:48','HOLODEK','/compraai/inicio.php',1961),
 (1986,'127.0.0.1','04/01/2011','VISITA NO SITE -','21:38:46','HOLODEK','/compraai/inicio.php',1962),
 (1987,'127.0.0.1','04/01/2011','VISITA NO SITE -','21:41:36','HOLODEK','/compraai/inicio.php',1963),
 (1988,'127.0.0.1','04/01/2011','VISITA NO SITE -','21:42:25','HOLODEK','/compraai/inicio.php',1964),
 (1989,'127.0.0.1','04/01/2011','VISITA NO SITE -','21:42:54','HOLODEK','/compraai/inicio.php',1965),
 (1990,'127.0.0.1','04/01/2011','VISITA NO SITE -','21:43:18','HOLODEK','/compraai/inicio.php',1966),
 (1991,'127.0.0.1','04/01/2011','VISITA NO SITE -','21:46:07','HOLODEK','/compraai/inicio.php',1967),
 (1992,'127.0.0.1','04/01/2011','VISITA NO SITE -','21:48:20','HOLODEK','/compraai/inicio.php',1968),
 (1993,'127.0.0.1','04/01/2011','VISITA NO SITE -','21:49:17','HOLODEK','/compraai/inicio.php',1969),
 (1994,'127.0.0.1','04/01/2011','VISITA NO SITE -','21:49:44','HOLODEK','/compraai/inicio.php',1970);
INSERT INTO `log_user_event` (`id`,`IP`,`DATA`,`EVENTO`,`HORA`,`USUARIO`,`ARQUIVO`,`QTD`) VALUES 
 (1995,'127.0.0.1','04/01/2011','VISITA NO SITE -','22:00:32','HOLODEK','/compraai/inicio.php',1971),
 (1996,'127.0.0.1','04/01/2011','VISITA NO SITE -','22:01:01','HOLODEK','/compraai/inicio.php',1972),
 (1997,'127.0.0.1','04/01/2011','VISITA NO SITE -','22:05:05','HOLODEK','/compraai/inicio.php',1973),
 (1998,'127.0.0.1','04/01/2011','VISITA NO SITE -','22:05:15','HOLODEK','/compraai/inicio.php',1974),
 (1999,'127.0.0.1','04/01/2011','VISITA NO SITE -','22:55:33','HOLODEK','/compraai/inicio.php',1975),
 (2000,'127.0.0.1','04/01/2011','VISITA NO SITE -','22:56:45','HOLODEK','/compraai/inicio.php',1976),
 (2001,'127.0.0.1','04/01/2011','VISITA NO SITE -','22:56:56','HOLODEK','/compraai/inicio.php',1977),
 (2002,'127.0.0.1','04/01/2011','VISITA NO SITE -','22:57:10','HOLODEK','/compraai/inicio.php',1978),
 (2003,'127.0.0.1','04/01/2011','VISITA NO SITE -','22:59:05','HOLODEK','/compraai/inicio.php',1979),
 (2004,'127.0.0.1','04/01/2011','VISITA NO SITE -','23:00:18','HOLODEK','/compraai/inicio.php',1980);
INSERT INTO `log_user_event` (`id`,`IP`,`DATA`,`EVENTO`,`HORA`,`USUARIO`,`ARQUIVO`,`QTD`) VALUES 
 (2005,'127.0.0.1','04/01/2011','VISITA NO SITE -','23:00:33','HOLODEK','/compraai/inicio.php',1981),
 (2006,'127.0.0.1','04/01/2011','VISITA NO SITE -','23:05:49','HOLODEK','/compraai/inicio.php',1982),
 (2007,'127.0.0.1','04/01/2011','VISITA NO SITE -','23:05:55','HOLODEK','/compraai/inicio.php',1983),
 (2008,'127.0.0.1','04/01/2011','VISITA NO SITE -','23:06:12','HOLODEK','/compraai/inicio.php',1984),
 (2009,'127.0.0.1','04/01/2011','VISITA NO SITE -','23:44:00','MARLEY','/compraai/inicio.php',1985),
 (2010,'127.0.0.1','04/01/2011','VISITA NO SITE -','23:47:09','MARLEY','/compraai/inicio.php',1986),
 (2011,'127.0.0.1','04/01/2011','VISITA NO SITE -','23:48:15','MARLEY','/compraai/inicio.php',1987),
 (2012,'127.0.0.1','05/01/2011','VISITA NO SITE -','13:02:43','VISITANTE','/compraai/inicio.php',1988),
 (2013,'127.0.0.1','05/01/2011','VISITA NO SITE -','13:02:44','VISITANTE','/compraai/inicio.php',1989),
 (2014,'127.0.0.1','05/01/2011','VISITA NO SITE -','13:10:17','VISITANTE','/compraai/inicio.php',1990);
INSERT INTO `log_user_event` (`id`,`IP`,`DATA`,`EVENTO`,`HORA`,`USUARIO`,`ARQUIVO`,`QTD`) VALUES 
 (2015,'127.0.0.1','05/01/2011','VISITA NO SITE -','13:10:17','VISITANTE','/compraai/inicio.php',1991),
 (2016,'127.0.0.1','05/01/2011','VISITA NO SITE -','13:11:44','VISITANTE','/compraai/inicio.php',1992),
 (2017,'127.0.0.1','05/01/2011','VISITA NO SITE -','13:11:44','VISITANTE','/compraai/inicio.php',1993),
 (2018,'127.0.0.1','05/01/2011','VISITA NO SITE -','13:18:09','VISITANTE','/compraai/inicio.php',1994),
 (2019,'127.0.0.1','05/01/2011','VISITA NO SITE -','13:32:11','VISITANTE','/compraai/inicio.php',1995),
 (2020,'127.0.0.1','05/01/2011','VISITA NO SITE -','13:32:11','VISITANTE','/compraai/inicio.php',1996),
 (2021,'127.0.0.1','05/01/2011','VISITA NO SITE -','13:59:02','VISITANTE','/compraai/inicio.php',1997),
 (2022,'127.0.0.1','05/01/2011','VISITA NO SITE -','14:00:34','VISITANTE','/compraai/inicio.php',1998),
 (2023,'127.0.0.1','05/01/2011','VISITA NO SITE -','14:10:39','VISITANTE','/compraai/inicio.php',1999),
 (2024,'127.0.0.1','05/01/2011','VISITA NO SITE -','14:17:07','VISITANTE','/compraai/inicio.php',2000);
INSERT INTO `log_user_event` (`id`,`IP`,`DATA`,`EVENTO`,`HORA`,`USUARIO`,`ARQUIVO`,`QTD`) VALUES 
 (2025,'127.0.0.1','05/01/2011','VISITA NO SITE -','14:41:14','VISITANTE','/compraai/inicio.php',2001),
 (2026,'127.0.0.1','05/01/2011','VISITA NO SITE -','15:17:49','HOLODEK','/compraai/inicio.php',2002),
 (2027,'127.0.0.1','05/01/2011','VISITA NO SITE -','15:21:58','HOLODEK','/compraai/inicio.php',2003),
 (2028,'127.0.0.1','05/01/2011','VISITA NO SITE -','15:22:57','HOLODEK','/compraai/inicio.php',2004),
 (2029,'127.0.0.1','05/01/2011','VISITA NO SITE -','15:27:01','HOLODEK','/compraai/inicio.php',2005),
 (2030,'127.0.0.1','05/01/2011','VISITA NO SITE -','15:29:45','HOLODEK','/compraai/inicio.php',2006),
 (2031,'127.0.0.1','05/01/2011','VISITA NO SITE -','15:30:35','HOLODEK','/compraai/inicio.php',2007),
 (2032,'127.0.0.1','05/01/2011','VISITA NO SITE -','15:31:35','HOLODEK','/compraai/inicio.php',2008),
 (2033,'127.0.0.1','05/01/2011','VISITA NO SITE -','15:31:48','HOLODEK','/compraai/inicio.php',2009),
 (2034,'127.0.0.1','05/01/2011','VISITA NO SITE -','15:32:23','HOLODEK','/compraai/inicio.php',2010);
INSERT INTO `log_user_event` (`id`,`IP`,`DATA`,`EVENTO`,`HORA`,`USUARIO`,`ARQUIVO`,`QTD`) VALUES 
 (2035,'127.0.0.1','05/01/2011','VISITA NO SITE -','15:32:49','HOLODEK','/compraai/inicio.php',2011),
 (2036,'127.0.0.1','05/01/2011','VISITA NO SITE -','16:19:21','HOLODEK','/compraai/inicio.php',2012),
 (2037,'127.0.0.1','05/01/2011','VISITA NO SITE -','16:22:46','HOLODEK','/compraai/inicio.php',2013),
 (2038,'127.0.0.1','05/01/2011','VISITA NO SITE -','16:25:14','HOLODEK','/compraai/inicio.php',2014),
 (2039,'127.0.0.1','05/01/2011','VISITA NO SITE -','16:27:08','HOLODEK','/compraai/inicio.php',2015),
 (2040,'127.0.0.1','05/01/2011','VISITA NO SITE -','16:28:11','HOLODEK','/compraai/inicio.php',2016),
 (2041,'127.0.0.1','05/01/2011','VISITA NO SITE -','16:28:55','HOLODEK','/compraai/inicio.php',2017),
 (2042,'127.0.0.1','05/01/2011','VISITA NO SITE -','16:33:00','HOLODEK','/compraai/inicio.php',2018),
 (2043,'127.0.0.1','05/01/2011','VISITA NO SITE -','16:33:30','HOLODEK','/compraai/inicio.php',2019),
 (2044,'127.0.0.1','05/01/2011','VISITA NO SITE -','16:34:08','HOLODEK','/compraai/inicio.php',2020);
INSERT INTO `log_user_event` (`id`,`IP`,`DATA`,`EVENTO`,`HORA`,`USUARIO`,`ARQUIVO`,`QTD`) VALUES 
 (2045,'127.0.0.1','05/01/2011','VISITA NO SITE -','16:35:29','HOLODEK','/compraai/inicio.php',2021),
 (2046,'127.0.0.1','05/01/2011','VISITA NO SITE -','16:36:25','HOLODEK','/compraai/inicio.php',2022),
 (2047,'127.0.0.1','05/01/2011','VISITA NO SITE -','16:37:53','HOLODEK','/compraai/inicio.php',2023),
 (2048,'127.0.0.1','05/01/2011','VISITA NO SITE -','16:39:05','HOLODEK','/compraai/inicio.php',2024),
 (2049,'127.0.0.1','05/01/2011','VISITA NO SITE -','16:42:19','HOLODEK','/compraai/inicio.php',2025),
 (2050,'127.0.0.1','05/01/2011','VISITA NO SITE -','16:44:23','HOLODEK','/compraai/inicio.php',2026),
 (2051,'127.0.0.1','05/01/2011','VISITA NO SITE -','16:48:31','HOLODEK','/compraai/inicio.php',2027),
 (2052,'127.0.0.1','05/01/2011','VISITA NO SITE -','16:50:14','HOLODEK','/compraai/inicio.php',2028),
 (2053,'127.0.0.1','05/01/2011','VISITA NO SITE -','16:52:45','HOLODEK','/compraai/inicio.php',2029),
 (2054,'127.0.0.1','05/01/2011','VISITA NO SITE -','16:53:13','HOLODEK','/compraai/inicio.php',2030);
INSERT INTO `log_user_event` (`id`,`IP`,`DATA`,`EVENTO`,`HORA`,`USUARIO`,`ARQUIVO`,`QTD`) VALUES 
 (2055,'127.0.0.1','05/01/2011','VISITA NO SITE -','16:53:48','HOLODEK','/compraai/inicio.php',2031),
 (2056,'127.0.0.1','05/01/2011','VISITA NO SITE -','16:54:10','HOLODEK','/compraai/inicio.php',2032),
 (2057,'127.0.0.1','05/01/2011','VISITA NO SITE -','16:55:01','HOLODEK','/compraai/inicio.php',2033),
 (2058,'127.0.0.1','05/01/2011','VISITA NO SITE -','16:55:54','HOLODEK','/compraai/inicio.php',2034),
 (2059,'127.0.0.1','05/01/2011','VISITA NO SITE -','16:57:36','HOLODEK','/compraai/inicio.php',2035),
 (2060,'127.0.0.1','05/01/2011','VISITA NO SITE -','16:58:10','HOLODEK','/compraai/inicio.php',2036),
 (2061,'127.0.0.1','05/01/2011','VISITA NO SITE -','16:58:54','HOLODEK','/compraai/inicio.php',2037),
 (2062,'127.0.0.1','05/01/2011','VISITA NO SITE -','16:59:44','HOLODEK','/compraai/inicio.php',2038),
 (2063,'127.0.0.1','05/01/2011','VISITA NO SITE -','17:00:11','HOLODEK','/compraai/inicio.php',2039),
 (2064,'127.0.0.1','05/01/2011','VISITA NO SITE -','17:00:43','HOLODEK','/compraai/inicio.php',2040);
INSERT INTO `log_user_event` (`id`,`IP`,`DATA`,`EVENTO`,`HORA`,`USUARIO`,`ARQUIVO`,`QTD`) VALUES 
 (2065,'127.0.0.1','05/01/2011','VISITA NO SITE -','17:01:13','HOLODEK','/compraai/inicio.php',2041),
 (2066,'127.0.0.1','05/01/2011','VISITA NO SITE -','17:01:33','HOLODEK','/compraai/inicio.php',2042),
 (2067,'127.0.0.1','05/01/2011','VISITA NO SITE -','17:02:16','HOLODEK','/compraai/inicio.php',2043),
 (2068,'127.0.0.1','05/01/2011','VISITA NO SITE -','22:58:03','VISITANTE','/compraai/inicio.php',2044),
 (2069,'127.0.0.1','05/01/2011','VISITA NO SITE -','22:58:03','VISITANTE','/compraai/inicio.php',2045),
 (2070,'127.0.0.1','05/01/2011','VISITA NO SITE -','23:00:08','VISITANTE','/compraai/inicio.php',2046),
 (2071,'127.0.0.1','05/01/2011','VISITA NO SITE -','23:00:08','VISITANTE','/compraai/inicio.php',2047),
 (2072,'127.0.0.1','05/01/2011','VISITA NO SITE -','23:01:48','VISITANTE','/compraai/inicio.php',2048),
 (2073,'127.0.0.1','05/01/2011','VISITA NO SITE -','23:01:48','VISITANTE','/compraai/inicio.php',2049),
 (2074,'127.0.0.1','05/01/2011','VISITA NO SITE -','23:04:09','VISITANTE','/compraai/inicio.php',2050);
INSERT INTO `log_user_event` (`id`,`IP`,`DATA`,`EVENTO`,`HORA`,`USUARIO`,`ARQUIVO`,`QTD`) VALUES 
 (2075,'127.0.0.1','05/01/2011','VISITA NO SITE -','23:04:10','VISITANTE','/compraai/inicio.php',2051),
 (2076,'127.0.0.1','05/01/2011','VISITA NO SITE -','23:04:43','VISITANTE','/compraai/inicio.php',2052),
 (2077,'127.0.0.1','05/01/2011','VISITA NO SITE -','23:04:43','VISITANTE','/compraai/inicio.php',2053),
 (2078,'127.0.0.1','05/01/2011','VISITA NO SITE -','23:05:29','VISITANTE','/compraai/inicio.php',2054),
 (2079,'127.0.0.1','05/01/2011','VISITA NO SITE -','23:05:29','VISITANTE','/compraai/inicio.php',2055),
 (2080,'127.0.0.1','05/01/2011','VISITA NO SITE -','23:06:20','VISITANTE','/compraai/inicio.php',2056),
 (2081,'127.0.0.1','05/01/2011','VISITA NO SITE -','23:06:21','VISITANTE','/compraai/inicio.php',2057),
 (2082,'127.0.0.1','05/01/2011','VISITA NO SITE -','23:07:03','VISITANTE','/compraai/inicio.php',2058),
 (2083,'127.0.0.1','05/01/2011','VISITA NO SITE -','23:07:03','VISITANTE','/compraai/inicio.php',2059),
 (2084,'127.0.0.1','05/01/2011','VISITA NO SITE -','23:07:40','VISITANTE','/compraai/inicio.php',2060);
INSERT INTO `log_user_event` (`id`,`IP`,`DATA`,`EVENTO`,`HORA`,`USUARIO`,`ARQUIVO`,`QTD`) VALUES 
 (2085,'127.0.0.1','05/01/2011','VISITA NO SITE -','23:07:40','VISITANTE','/compraai/inicio.php',2061),
 (2086,'127.0.0.1','05/01/2011','VISITA NO SITE -','23:08:20','VISITANTE','/compraai/inicio.php',2062),
 (2087,'127.0.0.1','05/01/2011','VISITA NO SITE -','23:08:20','VISITANTE','/compraai/inicio.php',2063),
 (2088,'127.0.0.1','05/01/2011','VISITA NO SITE -','23:09:06','VISITANTE','/compraai/inicio.php',2064),
 (2089,'127.0.0.1','05/01/2011','VISITA NO SITE -','23:09:07','VISITANTE','/compraai/inicio.php',2065),
 (2090,'127.0.0.1','05/01/2011','VISITA NO SITE -','23:09:34','VISITANTE','/compraai/inicio.php',2066),
 (2091,'127.0.0.1','05/01/2011','VISITA NO SITE -','23:09:34','VISITANTE','/compraai/inicio.php',2067),
 (2092,'127.0.0.1','05/01/2011','VISITA NO SITE -','23:10:28','VISITANTE','/compraai/inicio.php',2068),
 (2093,'127.0.0.1','05/01/2011','VISITA NO SITE -','23:10:29','VISITANTE','/compraai/inicio.php',2069),
 (2094,'127.0.0.1','05/01/2011','VISITA NO SITE -','23:10:57','VISITANTE','/compraai/inicio.php',2070);
INSERT INTO `log_user_event` (`id`,`IP`,`DATA`,`EVENTO`,`HORA`,`USUARIO`,`ARQUIVO`,`QTD`) VALUES 
 (2095,'127.0.0.1','05/01/2011','VISITA NO SITE -','23:10:58','VISITANTE','/compraai/inicio.php',2071),
 (2096,'127.0.0.1','05/01/2011','VISITA NO SITE -','23:12:13','VISITANTE','/compraai/inicio.php',2072),
 (2097,'127.0.0.1','05/01/2011','VISITA NO SITE -','23:12:14','VISITANTE','/compraai/inicio.php',2073),
 (2098,'127.0.0.1','05/01/2011','VISITA NO SITE -','23:13:22','VISITANTE','/compraai/inicio.php',2074),
 (2099,'127.0.0.1','05/01/2011','VISITA NO SITE -','23:13:22','VISITANTE','/compraai/inicio.php',2075),
 (2100,'127.0.0.1','05/01/2011','VISITA NO SITE -','23:14:01','VISITANTE','/compraai/inicio.php',2076),
 (2101,'127.0.0.1','05/01/2011','VISITA NO SITE -','23:14:02','VISITANTE','/compraai/inicio.php',2077),
 (2102,'127.0.0.1','05/01/2011','VISITA NO SITE -','23:15:00','VISITANTE','/compraai/inicio.php',2078),
 (2103,'127.0.0.1','05/01/2011','VISITA NO SITE -','23:15:01','VISITANTE','/compraai/inicio.php',2079),
 (2104,'127.0.0.1','05/01/2011','VISITA NO SITE -','23:16:21','VISITANTE','/compraai/inicio.php',2080);
INSERT INTO `log_user_event` (`id`,`IP`,`DATA`,`EVENTO`,`HORA`,`USUARIO`,`ARQUIVO`,`QTD`) VALUES 
 (2105,'127.0.0.1','05/01/2011','VISITA NO SITE -','23:16:21','VISITANTE','/compraai/inicio.php',2081),
 (2106,'127.0.0.1','05/01/2011','VISITA NO SITE -','23:17:29','VISITANTE','/compraai/inicio.php',2082),
 (2107,'127.0.0.1','05/01/2011','VISITA NO SITE -','23:17:30','VISITANTE','/compraai/inicio.php',2083),
 (2108,'127.0.0.1','05/01/2011','VISITA NO SITE -','23:17:30','VISITANTE','/compraai/inicio.php',2084),
 (2109,'127.0.0.1','05/01/2011','VISITA NO SITE -','23:18:33','VISITANTE','/compraai/inicio.php',2085),
 (2110,'127.0.0.1','05/01/2011','VISITA NO SITE -','23:18:34','VISITANTE','/compraai/inicio.php',2086),
 (2111,'127.0.0.1','05/01/2011','VISITA NO SITE -','23:22:12','VISITANTE','/compraai/inicio.php',2087),
 (2112,'127.0.0.1','05/01/2011','VISITA NO SITE -','23:22:13','VISITANTE','/compraai/inicio.php',2088),
 (2113,'127.0.0.1','05/01/2011','VISITA NO SITE -','23:25:26','VISITANTE','/compraai/inicio.php',2089),
 (2114,'127.0.0.1','05/01/2011','VISITA NO SITE -','23:25:27','VISITANTE','/compraai/inicio.php',2090);
INSERT INTO `log_user_event` (`id`,`IP`,`DATA`,`EVENTO`,`HORA`,`USUARIO`,`ARQUIVO`,`QTD`) VALUES 
 (2115,'127.0.0.1','05/01/2011','VISITA NO SITE -','23:26:00','VISITANTE','/compraai/inicio.php',2091),
 (2116,'127.0.0.1','05/01/2011','VISITA NO SITE -','23:26:00','VISITANTE','/compraai/inicio.php',2092),
 (2117,'127.0.0.1','05/01/2011','VISITA NO SITE -','23:27:04','VISITANTE','/compraai/inicio.php',2093),
 (2118,'127.0.0.1','05/01/2011','VISITA NO SITE -','23:27:05','VISITANTE','/compraai/inicio.php',2094),
 (2119,'127.0.0.1','05/01/2011','VISITA NO SITE -','23:27:33','VISITANTE','/compraai/inicio.php',2095),
 (2120,'127.0.0.1','05/01/2011','VISITA NO SITE -','23:27:33','VISITANTE','/compraai/inicio.php',2096),
 (2121,'127.0.0.1','05/01/2011','VISITA NO SITE -','23:28:29','VISITANTE','/compraai/inicio.php',2097),
 (2122,'127.0.0.1','05/01/2011','VISITA NO SITE -','23:28:29','VISITANTE','/compraai/inicio.php',2098),
 (2123,'127.0.0.1','05/01/2011','VISITA NO SITE -','23:29:13','VISITANTE','/compraai/inicio.php',2099),
 (2124,'127.0.0.1','05/01/2011','VISITA NO SITE -','23:29:13','VISITANTE','/compraai/inicio.php',2100);
INSERT INTO `log_user_event` (`id`,`IP`,`DATA`,`EVENTO`,`HORA`,`USUARIO`,`ARQUIVO`,`QTD`) VALUES 
 (2125,'127.0.0.1','05/01/2011','VISITA NO SITE -','23:29:46','VISITANTE','/compraai/inicio.php',2101),
 (2126,'127.0.0.1','05/01/2011','VISITA NO SITE -','23:29:46','VISITANTE','/compraai/inicio.php',2102),
 (2127,'127.0.0.1','05/01/2011','VISITA NO SITE -','23:30:29','VISITANTE','/compraai/inicio.php',2103),
 (2128,'127.0.0.1','05/01/2011','VISITA NO SITE -','23:30:30','VISITANTE','/compraai/inicio.php',2104),
 (2129,'127.0.0.1','05/01/2011','VISITA NO SITE -','23:31:01','VISITANTE','/compraai/inicio.php',2105),
 (2130,'127.0.0.1','05/01/2011','VISITA NO SITE -','23:31:01','VISITANTE','/compraai/inicio.php',2106),
 (2131,'127.0.0.1','05/01/2011','VISITA NO SITE -','23:31:44','VISITANTE','/compraai/inicio.php',2107),
 (2132,'127.0.0.1','05/01/2011','VISITA NO SITE -','23:31:44','VISITANTE','/compraai/inicio.php',2108),
 (2133,'127.0.0.1','05/01/2011','VISITA NO SITE -','23:32:15','VISITANTE','/compraai/inicio.php',2109),
 (2134,'127.0.0.1','05/01/2011','VISITA NO SITE -','23:32:15','VISITANTE','/compraai/inicio.php',2110);
INSERT INTO `log_user_event` (`id`,`IP`,`DATA`,`EVENTO`,`HORA`,`USUARIO`,`ARQUIVO`,`QTD`) VALUES 
 (2135,'127.0.0.1','05/01/2011','VISITA NO SITE -','23:33:03','VISITANTE','/compraai/inicio.php',2111),
 (2136,'127.0.0.1','05/01/2011','VISITA NO SITE -','23:33:03','VISITANTE','/compraai/inicio.php',2112),
 (2137,'127.0.0.1','05/01/2011','VISITA NO SITE -','23:34:42','VISITANTE','/compraai/inicio.php',2113),
 (2138,'127.0.0.1','05/01/2011','VISITA NO SITE -','23:34:43','VISITANTE','/compraai/inicio.php',2114),
 (2139,'127.0.0.1','05/01/2011','VISITA NO SITE -','23:35:19','VISITANTE','/compraai/inicio.php',2115),
 (2140,'127.0.0.1','05/01/2011','VISITA NO SITE -','23:35:20','VISITANTE','/compraai/inicio.php',2116),
 (2141,'127.0.0.1','05/01/2011','VISITA NO SITE -','23:35:52','VISITANTE','/compraai/inicio.php',2117),
 (2142,'127.0.0.1','05/01/2011','VISITA NO SITE -','23:35:53','VISITANTE','/compraai/inicio.php',2118),
 (2143,'127.0.0.1','05/01/2011','VISITA NO SITE -','23:36:31','VISITANTE','/compraai/inicio.php',2119),
 (2144,'127.0.0.1','05/01/2011','VISITA NO SITE -','23:36:31','VISITANTE','/compraai/inicio.php',2120);
INSERT INTO `log_user_event` (`id`,`IP`,`DATA`,`EVENTO`,`HORA`,`USUARIO`,`ARQUIVO`,`QTD`) VALUES 
 (2145,'127.0.0.1','05/01/2011','VISITA NO SITE -','23:37:05','VISITANTE','/compraai/inicio.php',2121),
 (2146,'127.0.0.1','05/01/2011','VISITA NO SITE -','23:37:06','VISITANTE','/compraai/inicio.php',2122),
 (2147,'127.0.0.1','05/01/2011','VISITA NO SITE -','23:37:49','VISITANTE','/compraai/inicio.php',2123),
 (2148,'127.0.0.1','05/01/2011','VISITA NO SITE -','23:37:50','VISITANTE','/compraai/inicio.php',2124),
 (2149,'127.0.0.1','05/01/2011','VISITA NO SITE -','23:40:37','VISITANTE','/compraai/inicio.php',2125),
 (2150,'127.0.0.1','05/01/2011','VISITA NO SITE -','23:40:38','VISITANTE','/compraai/inicio.php',2126),
 (2151,'127.0.0.1','05/01/2011','VISITA NO SITE -','23:41:51','VISITANTE','/compraai/inicio.php',2127),
 (2152,'127.0.0.1','05/01/2011','VISITA NO SITE -','23:41:51','VISITANTE','/compraai/inicio.php',2128),
 (2153,'127.0.0.1','05/01/2011','VISITA NO SITE -','23:44:00','VISITANTE','/compraai/inicio.php',2129),
 (2154,'127.0.0.1','05/01/2011','VISITA NO SITE -','23:44:00','VISITANTE','/compraai/inicio.php',2130);
INSERT INTO `log_user_event` (`id`,`IP`,`DATA`,`EVENTO`,`HORA`,`USUARIO`,`ARQUIVO`,`QTD`) VALUES 
 (2155,'127.0.0.1','05/01/2011','VISITA NO SITE -','23:45:42','VISITANTE','/compraai/inicio.php',2131),
 (2156,'127.0.0.1','05/01/2011','VISITA NO SITE -','23:45:42','VISITANTE','/compraai/inicio.php',2132),
 (2157,'127.0.0.1','05/01/2011','VISITA NO SITE -','23:49:13','VISITANTE','/compraai/inicio.php',2133),
 (2158,'127.0.0.1','05/01/2011','VISITA NO SITE -','23:52:31','VISITANTE','/compraai/inicio.php',2134),
 (2159,'127.0.0.1','05/01/2011','VISITA NO SITE -','23:52:32','VISITANTE','/compraai/inicio.php',2135),
 (2160,'127.0.0.1','05/01/2011','VISITA NO SITE -','23:55:11','VISITANTE','/compraai/inicio.php',2136),
 (2161,'127.0.0.1','05/01/2011','VISITA NO SITE -','23:55:11','VISITANTE','/compraai/inicio.php',2137),
 (2162,'127.0.0.1','05/01/2011','VISITA NO SITE -','23:56:55','VISITANTE','/compraai/inicio.php',2138),
 (2163,'127.0.0.1','05/01/2011','VISITA NO SITE -','23:56:55','VISITANTE','/compraai/inicio.php',2139),
 (2164,'127.0.0.1','06/01/2011','VISITA NO SITE -','00:02:36','VISITANTE','/compraai/inicio.php',2140);
INSERT INTO `log_user_event` (`id`,`IP`,`DATA`,`EVENTO`,`HORA`,`USUARIO`,`ARQUIVO`,`QTD`) VALUES 
 (2165,'127.0.0.1','06/01/2011','VISITA NO SITE -','00:02:37','VISITANTE','/compraai/inicio.php',2141),
 (2166,'127.0.0.1','06/01/2011','VISITA NO SITE -','00:08:26','MARLEY','/compraai/inicio.php',2142),
 (2167,'127.0.0.1','06/01/2011','VISITA NO SITE -','00:09:50','VISITANTE','/compraai/inicio.php',2143),
 (2168,'127.0.0.1','06/01/2011','VISITA NO SITE -','00:09:51','VISITANTE','/compraai/inicio.php',2144),
 (2169,'127.0.0.1','06/01/2011','VISITA NO SITE -','00:17:08','VISITANTE','/compraai/inicio.php',2145),
 (2170,'127.0.0.1','06/01/2011','VISITA NO SITE -','00:17:08','VISITANTE','/compraai/inicio.php',2146),
 (2171,'127.0.0.1','06/01/2011','VISITA NO SITE -','00:19:38','VISITANTE','/compraai/inicio.php',2147),
 (2172,'127.0.0.1','06/01/2011','VISITA NO SITE -','00:19:39','VISITANTE','/compraai/inicio.php',2148),
 (2173,'127.0.0.1','06/01/2011','VISITA NO SITE -','00:21:09','VISITANTE','/compraai/inicio.php',2149),
 (2174,'127.0.0.1','06/01/2011','VISITA NO SITE -','00:21:10','VISITANTE','/compraai/inicio.php',2150);
INSERT INTO `log_user_event` (`id`,`IP`,`DATA`,`EVENTO`,`HORA`,`USUARIO`,`ARQUIVO`,`QTD`) VALUES 
 (2175,'127.0.0.1','06/01/2011','VISITA NO SITE -','00:22:58','VISITANTE','/compraai/inicio.php',2151),
 (2176,'127.0.0.1','06/01/2011','VISITA NO SITE -','00:22:59','VISITANTE','/compraai/inicio.php',2152),
 (2177,'127.0.0.1','06/01/2011','VISITA NO SITE -','00:27:06','VISITANTE','/compraai/inicio.php',2153),
 (2178,'127.0.0.1','06/01/2011','VISITA NO SITE -','00:27:07','VISITANTE','/compraai/inicio.php',2154),
 (2179,'127.0.0.1','06/01/2011','VISITA NO SITE -','00:28:05','VISITANTE','/compraai/inicio.php',2155),
 (2180,'127.0.0.1','06/01/2011','VISITA NO SITE -','00:28:06','VISITANTE','/compraai/inicio.php',2156),
 (2181,'127.0.0.1','06/01/2011','VISITA NO SITE -','00:30:57','VISITANTE','/compraai/inicio.php',2157),
 (2182,'127.0.0.1','06/01/2011','VISITA NO SITE -','00:30:58','VISITANTE','/compraai/inicio.php',2158),
 (2183,'127.0.0.1','06/01/2011','VISITA NO SITE -','00:32:03','VISITANTE','/compraai/inicio.php',2159),
 (2184,'127.0.0.1','06/01/2011','VISITA NO SITE -','00:32:03','VISITANTE','/compraai/inicio.php',2160);
INSERT INTO `log_user_event` (`id`,`IP`,`DATA`,`EVENTO`,`HORA`,`USUARIO`,`ARQUIVO`,`QTD`) VALUES 
 (2185,'127.0.0.1','06/01/2011','VISITA NO SITE -','00:34:22','VISITANTE','/compraai/inicio.php',2161),
 (2186,'127.0.0.1','06/01/2011','VISITA NO SITE -','00:34:23','VISITANTE','/compraai/inicio.php',2162),
 (2187,'127.0.0.1','06/01/2011','VISITA NO SITE -','00:36:50','VISITANTE','/compraai/inicio.php',2163),
 (2188,'127.0.0.1','06/01/2011','VISITA NO SITE -','00:36:51','VISITANTE','/compraai/inicio.php',2164),
 (2189,'127.0.0.1','06/01/2011','VISITA NO SITE -','00:38:44','VISITANTE','/compraai/inicio.php',2165),
 (2190,'127.0.0.1','06/01/2011','VISITA NO SITE -','00:41:13','VISITANTE','/compraai/inicio.php',2166),
 (2191,'127.0.0.1','06/01/2011','VISITA NO SITE -','00:41:13','VISITANTE','/compraai/inicio.php',2167),
 (2192,'127.0.0.1','06/01/2011','VISITA NO SITE -','00:42:03','VISITANTE','/compraai/inicio.php',2168),
 (2193,'127.0.0.1','06/01/2011','VISITA NO SITE -','00:42:04','VISITANTE','/compraai/inicio.php',2169),
 (2194,'127.0.0.1','06/01/2011','VISITA NO SITE -','00:43:31','VISITANTE','/compraai/inicio.php',2170);
INSERT INTO `log_user_event` (`id`,`IP`,`DATA`,`EVENTO`,`HORA`,`USUARIO`,`ARQUIVO`,`QTD`) VALUES 
 (2195,'127.0.0.1','06/01/2011','VISITA NO SITE -','00:43:32','VISITANTE','/compraai/inicio.php',2171),
 (2196,'127.0.0.1','06/01/2011','VISITA NO SITE -','00:46:51','VISITANTE','/compraai/inicio.php',2172),
 (2197,'127.0.0.1','06/01/2011','VISITA NO SITE -','00:46:51','VISITANTE','/compraai/inicio.php',2173),
 (2198,'127.0.0.1','06/01/2011','VISITA NO SITE -','00:50:03','VISITANTE','/compraai/inicio.php',2174),
 (2199,'127.0.0.1','06/01/2011','VISITA NO SITE -','00:50:14','VISITANTE','/compraai/inicio.php',2175),
 (2200,'127.0.0.1','06/01/2011','VISITA NO SITE -','01:01:22','VISITANTE','/compraai/inicio.php',2176),
 (2201,'127.0.0.1','06/01/2011','VISITA NO SITE -','01:01:30','VISITANTE','/compraai/inicio.php',2177),
 (2202,'127.0.0.1','06/01/2011','VISITA NO SITE -','01:01:46','VISITANTE','/compraai/inicio.php',2178),
 (2203,'127.0.0.1','06/01/2011','VISITA NO SITE -','01:02:24','VISITANTE','/compraai/inicio.php',2179),
 (2204,'127.0.0.1','06/01/2011','VISITA NO SITE -','01:02:25','VISITANTE','/compraai/inicio.php',2180);
INSERT INTO `log_user_event` (`id`,`IP`,`DATA`,`EVENTO`,`HORA`,`USUARIO`,`ARQUIVO`,`QTD`) VALUES 
 (2205,'127.0.0.1','06/01/2011','VISITA NO SITE -','01:07:02','VISITANTE','/compraai/inicio.php',2181),
 (2206,'127.0.0.1','06/01/2011','VISITA NO SITE -','01:07:03','VISITANTE','/compraai/inicio.php',2182),
 (2207,'127.0.0.1','06/01/2011','VISITA NO SITE -','01:51:06','VISITANTE','/compraai/inicio.php',2183),
 (2208,'127.0.0.1','06/01/2011','VISITA NO SITE -','01:51:07','VISITANTE','/compraai/inicio.php',2184),
 (2209,'127.0.0.1','06/01/2011','VISITA NO SITE -','01:56:30','VISITANTE','/compraai/inicio.php',2185),
 (2210,'127.0.0.1','06/01/2011','VISITA NO SITE -','01:58:21','VISITANTE','/compraai/inicio.php',2186),
 (2211,'127.0.0.1','06/01/2011','VISITA NO SITE -','01:58:21','VISITANTE','/compraai/inicio.php',2187),
 (2212,'127.0.0.1','06/01/2011','VISITA NO SITE -','02:02:23','VISITANTE','/compraai/inicio.php',2188),
 (2213,'127.0.0.1','06/01/2011','VISITA NO SITE -','02:02:23','VISITANTE','/compraai/inicio.php',2189),
 (2214,'127.0.0.1','06/01/2011','VISITA NO SITE -','02:03:14','VISITANTE','/compraai/inicio.php',2190);
INSERT INTO `log_user_event` (`id`,`IP`,`DATA`,`EVENTO`,`HORA`,`USUARIO`,`ARQUIVO`,`QTD`) VALUES 
 (2215,'127.0.0.1','06/01/2011','VISITA NO SITE -','02:03:15','VISITANTE','/compraai/inicio.php',2191),
 (2216,'127.0.0.1','06/01/2011','VISITA NO SITE -','02:04:23','VISITANTE','/compraai/inicio.php',2192),
 (2217,'127.0.0.1','06/01/2011','VISITA NO SITE -','02:04:23','VISITANTE','/compraai/inicio.php',2193),
 (2218,'127.0.0.1','06/01/2011','VISITA NO SITE -','02:28:14','VISITANTE','/compraai/inicio.php',2194),
 (2219,'127.0.0.1','06/01/2011','VISITA NO SITE -','02:36:50','VISITANTE','/compraai/inicio.php',2195),
 (2220,'127.0.0.1','06/01/2011','VISITA NO SITE -','02:36:51','VISITANTE','/compraai/inicio.php',2196),
 (2221,'127.0.0.1','06/01/2011','VISITA NO SITE -','02:46:19','VISITANTE','/compraai/inicio.php',2197),
 (2222,'127.0.0.1','06/01/2011','VISITA NO SITE -','02:46:20','VISITANTE','/compraai/inicio.php',2198),
 (2223,'127.0.0.1','06/01/2011','VISITA NO SITE -','03:00:06','VISITANTE','/compraai/inicio.php',2199),
 (2224,'127.0.0.1','06/01/2011','VISITA NO SITE -','03:00:07','VISITANTE','/compraai/inicio.php',2200);
INSERT INTO `log_user_event` (`id`,`IP`,`DATA`,`EVENTO`,`HORA`,`USUARIO`,`ARQUIVO`,`QTD`) VALUES 
 (2225,'127.0.0.1','06/01/2011','VISITA NO SITE -','03:01:26','VISITANTE','/compraai/inicio.php',2201),
 (2226,'127.0.0.1','06/01/2011','VISITA NO SITE -','03:06:05','VISITANTE','/compraai/inicio.php',2202),
 (2227,'127.0.0.1','06/01/2011','VISITA NO SITE -','03:06:06','VISITANTE','/compraai/inicio.php',2203),
 (2228,'127.0.0.1','06/01/2011','VISITA NO SITE -','11:58:34','VISITANTE','/compraai/inicio.php',2204),
 (2229,'127.0.0.1','06/01/2011','VISITA NO SITE -','11:58:35','VISITANTE','/compraai/inicio.php',2205),
 (2230,'127.0.0.1','06/01/2011','VISITA NO SITE -','12:02:30','VISITANTE','/compraai/inicio.php',2206),
 (2231,'127.0.0.1','06/01/2011','VISITA NO SITE -','12:07:45','VISITANTE','/compraai/inicio.php',2207),
 (2232,'127.0.0.1','06/01/2011','VISITA NO SITE -','12:07:46','VISITANTE','/compraai/inicio.php',2208),
 (2233,'127.0.0.1','06/01/2011','VISITA NO SITE -','12:10:03','VISITANTE','/compraai/inicio.php',2209),
 (2234,'127.0.0.1','06/01/2011','VISITA NO SITE -','12:10:03','VISITANTE','/compraai/inicio.php',2210);
INSERT INTO `log_user_event` (`id`,`IP`,`DATA`,`EVENTO`,`HORA`,`USUARIO`,`ARQUIVO`,`QTD`) VALUES 
 (2235,'127.0.0.1','06/01/2011','VISITA NO SITE -','12:11:10','VISITANTE','/compraai/inicio.php',2211),
 (2236,'127.0.0.1','06/01/2011','VISITA NO SITE -','12:11:35','VISITANTE','/compraai/inicio.php',2212),
 (2237,'127.0.0.1','06/01/2011','VISITA NO SITE -','12:11:35','VISITANTE','/compraai/inicio.php',2213),
 (2238,'127.0.0.1','06/01/2011','VISITA NO SITE -','12:40:12','VISITANTE','/novo_visu/inicio.php',2214),
 (2239,'127.0.0.1','06/01/2011','VISITA NO SITE -','12:40:13','VISITANTE','/novo_visu/inicio.php',2215),
 (2240,'127.0.0.1','06/01/2011','VISITA NO SITE -','16:01:11','VISITANTE','/compraai/inicio.php',2216),
 (2241,'127.0.0.1','06/01/2011','VISITA NO SITE -','16:01:11','VISITANTE','/compraai/inicio.php',2217),
 (2242,'127.0.0.1','06/01/2011','VISITA NO SITE -','16:46:29','VISITANTE','/compraai/inicio.php',2218),
 (2243,'127.0.0.1','06/01/2011','VISITA NO SITE -','16:46:29','VISITANTE','/compraai/inicio.php',2219),
 (2244,'192.168.1.1','06/01/2011','VISITA NO SITE -','16:53:24','VISITANTE','/compraai/inicio.php',2220);
INSERT INTO `log_user_event` (`id`,`IP`,`DATA`,`EVENTO`,`HORA`,`USUARIO`,`ARQUIVO`,`QTD`) VALUES 
 (2245,'192.168.1.1','06/01/2011','VISITA NO SITE -','16:53:24','VISITANTE','/compraai/inicio.php',2221),
 (2246,'127.0.0.1','07/01/2011','VISITA NO SITE -','13:50:03','VISITANTE','/compraai/inicio.php',2222),
 (2247,'127.0.0.1','07/01/2011','VISITA NO SITE -','13:50:03','VISITANTE','/compraai/inicio.php',2223),
 (2248,'127.0.0.1','07/01/2011','VISITA NO SITE -','14:33:10','KATTI','/compraai/inicio.php',2224),
 (2249,'127.0.0.1','07/01/2011','VISITA NO SITE -','23:43:20','VISITANTE','/compraai/inicio.php',2225),
 (2250,'127.0.0.1','07/01/2011','VISITA NO SITE -','23:43:20','VISITANTE','/compraai/inicio.php',2226),
 (2251,'127.0.0.1','07/01/2011','VISITA NO SITE -','23:51:00','VISITANTE','/compraai/inicio.php',2227),
 (2252,'127.0.0.1','07/01/2011','VISITA NO SITE -','23:51:00','VISITANTE','/compraai/inicio.php',2228),
 (2253,'127.0.0.1','07/01/2011','VISITA NO SITE -','23:52:02','VISITANTE','/compraai/inicio.php',2229),
 (2254,'127.0.0.1','07/01/2011','VISITA NO SITE -','23:52:02','VISITANTE','/compraai/inicio.php',2230);
INSERT INTO `log_user_event` (`id`,`IP`,`DATA`,`EVENTO`,`HORA`,`USUARIO`,`ARQUIVO`,`QTD`) VALUES 
 (2255,'127.0.0.1','07/01/2011','VISITA NO SITE -','23:56:27','VISITANTE','/compraai/inicio.php',2231),
 (2256,'127.0.0.1','07/01/2011','VISITA NO SITE -','23:56:27','VISITANTE','/compraai/inicio.php',2232),
 (2257,'127.0.0.1','08/01/2011','VISITA NO SITE -','00:02:37','VISITANTE','/compraai/inicio.php',2233),
 (2258,'127.0.0.1','08/01/2011','VISITA NO SITE -','00:02:37','VISITANTE','/compraai/inicio.php',2234),
 (2259,'127.0.0.1','08/01/2011','VISITA NO SITE -','00:04:57','VISITANTE','/compraai/inicio.php',2235),
 (2260,'127.0.0.1','08/01/2011','VISITA NO SITE -','00:04:58','VISITANTE','/compraai/inicio.php',2236),
 (2261,'127.0.0.1','08/01/2011','VISITA NO SITE -','00:06:57','VISITANTE','/compraai/inicio.php',2237),
 (2262,'127.0.0.1','08/01/2011','VISITA NO SITE -','00:34:25','VISITANTE','/compraai/inicio.php',2238),
 (2263,'127.0.0.1','08/01/2011','VISITA NO SITE -','00:34:26','VISITANTE','/compraai/inicio.php',2239),
 (2264,'127.0.0.1','08/01/2011','VISITA NO SITE -','00:45:47','VISITANTE','/compraai/inicio.php',2240);
INSERT INTO `log_user_event` (`id`,`IP`,`DATA`,`EVENTO`,`HORA`,`USUARIO`,`ARQUIVO`,`QTD`) VALUES 
 (2265,'127.0.0.1','08/01/2011','VISITA NO SITE -','00:45:47','VISITANTE','/compraai/inicio.php',2241),
 (2266,'127.0.0.1','08/01/2011','VISITA NO SITE -','00:48:35','VISITANTE','/compraai/inicio.php',2242),
 (2267,'127.0.0.1','08/01/2011','VISITA NO SITE -','00:48:35','VISITANTE','/compraai/inicio.php',2243),
 (2268,'127.0.0.1','08/01/2011','VISITA NO SITE -','00:49:28','VISITANTE','/compraai/inicio.php',2244),
 (2269,'127.0.0.1','08/01/2011','VISITA NO SITE -','00:49:28','VISITANTE','/compraai/inicio.php',2245),
 (2270,'127.0.0.1','08/01/2011','VISITA NO SITE -','00:53:21','VISITANTE','/compraai/inicio.php',2246),
 (2271,'127.0.0.1','08/01/2011','VISITA NO SITE -','00:53:21','VISITANTE','/compraai/inicio.php',2247),
 (2272,'127.0.0.1','08/01/2011','VISITA NO SITE -','00:58:22','VISITANTE','/compraai/inicio.php',2248),
 (2273,'127.0.0.1','08/01/2011','VISITA NO SITE -','00:58:22','VISITANTE','/compraai/inicio.php',2249),
 (2274,'127.0.0.1','08/01/2011','VISITA NO SITE -','01:00:15','VISITANTE','/compraai/inicio.php',2250);
INSERT INTO `log_user_event` (`id`,`IP`,`DATA`,`EVENTO`,`HORA`,`USUARIO`,`ARQUIVO`,`QTD`) VALUES 
 (2275,'127.0.0.1','08/01/2011','VISITA NO SITE -','01:00:16','VISITANTE','/compraai/inicio.php',2251),
 (2276,'127.0.0.1','08/01/2011','VISITA NO SITE -','01:02:08','VISITANTE','/compraai/inicio.php',2252),
 (2277,'127.0.0.1','08/01/2011','VISITA NO SITE -','01:02:08','VISITANTE','/compraai/inicio.php',2253),
 (2278,'127.0.0.1','08/01/2011','VISITA NO SITE -','01:03:51','VISITANTE','/compraai/inicio.php',2254),
 (2279,'127.0.0.1','08/01/2011','VISITA NO SITE -','01:03:51','VISITANTE','/compraai/inicio.php',2255),
 (2280,'127.0.0.1','08/01/2011','VISITA NO SITE -','01:05:27','VISITANTE','/compraai/inicio.php',2256),
 (2281,'127.0.0.1','08/01/2011','VISITA NO SITE -','01:05:28','VISITANTE','/compraai/inicio.php',2257),
 (2282,'127.0.0.1','08/01/2011','VISITA NO SITE -','01:06:05','VISITANTE','/compraai/inicio.php',2258),
 (2283,'127.0.0.1','08/01/2011','VISITA NO SITE -','01:06:05','VISITANTE','/compraai/inicio.php',2259),
 (2284,'127.0.0.1','08/01/2011','VISITA NO SITE -','01:07:12','VISITANTE','/compraai/inicio.php',2260);
INSERT INTO `log_user_event` (`id`,`IP`,`DATA`,`EVENTO`,`HORA`,`USUARIO`,`ARQUIVO`,`QTD`) VALUES 
 (2285,'127.0.0.1','08/01/2011','VISITA NO SITE -','01:07:12','VISITANTE','/compraai/inicio.php',2261),
 (2286,'127.0.0.1','08/01/2011','VISITA NO SITE -','01:07:59','VISITANTE','/compraai/inicio.php',2262),
 (2287,'127.0.0.1','08/01/2011','VISITA NO SITE -','01:07:59','VISITANTE','/compraai/inicio.php',2263),
 (2288,'127.0.0.1','08/01/2011','VISITA NO SITE -','01:10:52','VISITANTE','/compraai/inicio.php',2264),
 (2289,'127.0.0.1','08/01/2011','VISITA NO SITE -','01:10:52','VISITANTE','/compraai/inicio.php',2265),
 (2290,'127.0.0.1','08/01/2011','VISITA NO SITE -','01:55:26','VISITANTE','/compraai/inicio.php',2266),
 (2291,'127.0.0.1','08/01/2011','VISITA NO SITE -','01:55:27','VISITANTE','/compraai/inicio.php',2267),
 (2292,'127.0.0.1','08/01/2011','VISITA NO SITE -','02:41:40','HOLODEK','/compraai/inicio.php',2268),
 (2293,'127.0.0.1','08/01/2011','VISITA NO SITE -','02:42:42','HOLODEK','/compraai/inicio.php',2269),
 (2294,'127.0.0.1','08/01/2011','VISITA NO SITE -','02:44:11','HOLODEK','/compraai/inicio.php',2270);
INSERT INTO `log_user_event` (`id`,`IP`,`DATA`,`EVENTO`,`HORA`,`USUARIO`,`ARQUIVO`,`QTD`) VALUES 
 (2295,'127.0.0.1','08/01/2011','VISITA NO SITE -','02:45:29','HOLODEK','/compraai/inicio.php',2271),
 (2296,'127.0.0.1','08/01/2011','VISITA NO SITE -','02:51:50','VISITANTE','/compraai/inicio.php',2272),
 (2297,'127.0.0.1','08/01/2011','VISITA NO SITE -','02:51:51','VISITANTE','/compraai/inicio.php',2273),
 (2298,'127.0.0.1','08/01/2011','VISITA NO SITE -','02:54:30','VISITANTE','/compraai/inicio.php',2274),
 (2299,'127.0.0.1','08/01/2011','VISITA NO SITE -','02:54:31','VISITANTE','/compraai/inicio.php',2275),
 (2300,'127.0.0.1','08/01/2011','VISITA NO SITE -','02:57:25','HOLODEK','/compraai/inicio.php',2276),
 (2301,'127.0.0.1','08/01/2011','VISITA NO SITE -','03:02:27','HOLODEK','/compraai/inicio.php',2277),
 (2302,'127.0.0.1','08/01/2011','VISITA NO SITE -','03:04:39','HOLODEK','/compraai/inicio.php',2278),
 (2303,'127.0.0.1','08/01/2011','VISITA NO SITE -','03:06:30','VISITANTE','/compraai/inicio.php',2279),
 (2304,'127.0.0.1','08/01/2011','VISITA NO SITE -','03:06:30','VISITANTE','/compraai/inicio.php',2280);
INSERT INTO `log_user_event` (`id`,`IP`,`DATA`,`EVENTO`,`HORA`,`USUARIO`,`ARQUIVO`,`QTD`) VALUES 
 (2305,'127.0.0.1','08/01/2011','VISITA NO SITE -','03:07:33','MARLEY','/compraai/inicio.php',2281),
 (2306,'127.0.0.1','09/01/2011','VISITA NO SITE -','01:02:21','VISITANTE','/compraai/inicio.php',2282),
 (2307,'127.0.0.1','09/01/2011','VISITA NO SITE -','01:02:22','VISITANTE','/compraai/inicio.php',2283),
 (2308,'127.0.0.1','09/01/2011','VISITA NO SITE -','01:05:05','VISITANTE','/compraai/inicio.php',2284),
 (2309,'127.0.0.1','09/01/2011','VISITA NO SITE -','01:15:38','HOLODEK','/compraai/inicio.php',2285),
 (2310,'127.0.0.1','09/01/2011','VISITA NO SITE -','01:19:01','HOLODEK','/compraai/inicio.php',2286),
 (2311,'127.0.0.1','09/01/2011','VISITA NO SITE -','01:19:12','VISITANTE','/compraai/inicio.php',2287),
 (2312,'127.0.0.1','09/01/2011','VISITA NO SITE -','01:19:12','VISITANTE','/compraai/inicio.php',2288),
 (2313,'127.0.0.1','09/01/2011','VISITA NO SITE -','01:22:21','VISITANTE','/compraai/inicio.php',2289),
 (2314,'127.0.0.1','09/01/2011','VISITA NO SITE -','01:22:22','VISITANTE','/compraai/inicio.php',2290);
INSERT INTO `log_user_event` (`id`,`IP`,`DATA`,`EVENTO`,`HORA`,`USUARIO`,`ARQUIVO`,`QTD`) VALUES 
 (2315,'192.168.1.1','11/01/2011','VISITA NO SITE -','16:14:48','VISITANTE','/compraai/inicio.php',2291),
 (2316,'192.168.1.1','11/01/2011','VISITA NO SITE -','16:14:49','VISITANTE','/compraai/inicio.php',2292),
 (2317,'127.0.0.1','11/01/2011','VISITA NO SITE -','16:23:13','VISITANTE','/compraai/inicio.php',2293),
 (2318,'127.0.0.1','11/01/2011','VISITA NO SITE -','16:23:13','VISITANTE','/compraai/inicio.php',2294),
 (2319,'127.0.0.1','11/01/2011','VISITA NO SITE -','16:31:47','VISITANTE','/compraai/inicio.php',2295),
 (2320,'127.0.0.1','11/01/2011','VISITA NO SITE -','16:31:48','VISITANTE','/compraai/inicio.php',2296),
 (2321,'192.168.1.1','11/01/2011','VISITA NO SITE -','16:38:26','ENDREWS','/compraai/inicio.php',2297),
 (2322,'192.168.1.1','11/01/2011','VISITA NO SITE -','16:40:25','ENDREWS','/compraai/inicio.php',2298),
 (2323,'127.0.0.1','11/01/2011','VISITA NO SITE -','16:42:09','HOLODEK','/compraai/inicio.php',2299),
 (2324,'192.168.1.1','11/01/2011','VISITA NO SITE -','16:42:11','ENDREWS','/compraai/inicio.php',2300);
INSERT INTO `log_user_event` (`id`,`IP`,`DATA`,`EVENTO`,`HORA`,`USUARIO`,`ARQUIVO`,`QTD`) VALUES 
 (2325,'127.0.0.1','11/01/2011','VISITA NO SITE -','16:42:54','VISITANTE','/compraai/inicio.php',2301),
 (2326,'127.0.0.1','11/01/2011','VISITA NO SITE -','16:42:54','VISITANTE','/compraai/inicio.php',2302),
 (2327,'192.168.1.1','11/01/2011','VISITA NO SITE -','16:48:01','ENDREWS','/compraai/inicio.php',2303),
 (2328,'192.168.1.1','11/01/2011','VISITA NO SITE -','16:48:44','ENDREWS','/compraai/inicio.php',2304),
 (2329,'192.168.1.1','11/01/2011','VISITA NO SITE -','16:50:28','ENDREWS','/compraai/inicio.php',2305),
 (2330,'192.168.1.1','11/01/2011','VISITA NO SITE -','16:53:56','ENDREWS','/compraai/inicio.php',2306),
 (2331,'192.168.1.1','11/01/2011','VISITA NO SITE -','16:59:33','ENDREWS','/compraai/inicio.php',2307),
 (2332,'192.168.1.1','11/01/2011','VISITA NO SITE -','17:05:54','ENDREWS','/compraai/inicio.php',2308),
 (2333,'127.0.0.1','11/01/2011','VISITA NO SITE -','17:09:30','VISITANTE','/compraai/inicio.php',2309),
 (2334,'127.0.0.1','11/01/2011','VISITA NO SITE -','17:09:32','VISITANTE','/compraai/inicio.php',2310);
INSERT INTO `log_user_event` (`id`,`IP`,`DATA`,`EVENTO`,`HORA`,`USUARIO`,`ARQUIVO`,`QTD`) VALUES 
 (2335,'192.168.1.1','11/01/2011','VISITA NO SITE -','17:17:32','ENDREWS','/compraai/inicio.php',2311),
 (2336,'192.168.1.1','11/01/2011','VISITA NO SITE -','17:18:07','VISITANTE','/compraai/inicio.php',2312),
 (2337,'192.168.1.1','11/01/2011','VISITA NO SITE -','17:18:07','VISITANTE','/compraai/inicio.php',2313),
 (2338,'192.168.1.1','11/01/2011','VISITA NO SITE -','17:25:35','ENDREWS','/compraai/inicio.php',2314),
 (2339,'192.168.1.1','11/01/2011','VISITA NO SITE -','17:26:21','VISITANTE','/compraai/inicio.php',2315),
 (2340,'192.168.1.1','11/01/2011','VISITA NO SITE -','17:26:21','VISITANTE','/compraai/inicio.php',2316),
 (2341,'192.168.1.1','11/01/2011','VISITA NO SITE -','17:28:04','VISITANTE','/compraai/inicio.php',2317),
 (2342,'192.168.1.1','11/01/2011','VISITA NO SITE -','17:30:59','ENDREWS','/compraai/inicio.php',2318),
 (2343,'192.168.1.1','11/01/2011','VISITA NO SITE -','17:34:20','ENDREWS','/compraai/inicio.php',2319),
 (2344,'192.168.1.1','11/01/2011','VISITA NO SITE -','17:37:46','ENDREWS','/compraai/inicio.php',2320);
INSERT INTO `log_user_event` (`id`,`IP`,`DATA`,`EVENTO`,`HORA`,`USUARIO`,`ARQUIVO`,`QTD`) VALUES 
 (2345,'192.168.1.1','11/01/2011','VISITA NO SITE -','17:53:23','ENDREWS','/compraai/inicio.php',2321),
 (2346,'192.168.1.1','11/01/2011','VISITA NO SITE -','17:53:47','ENDREWS','/compraai/inicio.php',2322),
 (2347,'127.0.0.1','11/01/2011','VISITA NO SITE -','17:56:17','VISITANTE','/compraai/inicio.php',2323),
 (2348,'127.0.0.1','11/01/2011','VISITA NO SITE -','17:56:18','VISITANTE','/compraai/inicio.php',2324),
 (2349,'127.0.0.1','11/01/2011','VISITA NO SITE -','18:00:37','VISITANTE','/compraai/inicio.php',2325),
 (2350,'127.0.0.1','11/01/2011','VISITA NO SITE -','18:05:00','VISITANTE','/compraai/inicio.php',2326),
 (2351,'192.168.1.1','11/01/2011','VISITA NO SITE -','18:12:53','VISITANTE','/compraai/inicio.php',2327),
 (2352,'192.168.1.1','11/01/2011','VISITA NO SITE -','18:12:53','VISITANTE','/compraai/inicio.php',2328),
 (2353,'192.168.1.1','11/01/2011','VISITA NO SITE -','18:19:16','ENDREWS','/compraai/inicio.php',2329),
 (2354,'192.168.1.1','11/01/2011','VISITA NO SITE -','18:19:32','VISITANTE','/compraai/inicio.php',2330);
INSERT INTO `log_user_event` (`id`,`IP`,`DATA`,`EVENTO`,`HORA`,`USUARIO`,`ARQUIVO`,`QTD`) VALUES 
 (2355,'192.168.1.1','11/01/2011','VISITA NO SITE -','18:19:32','VISITANTE','/compraai/inicio.php',2331),
 (2356,'192.168.1.1','11/01/2011','VISITA NO SITE -','18:21:46','ENDREWS','/compraai/inicio.php',2332),
 (2357,'192.168.1.1','11/01/2011','VISITA NO SITE -','18:26:02','ENDREWS','/compraai/inicio.php',2333),
 (2358,'127.0.0.1','11/01/2011','VISITA NO SITE -','20:26:17','HOLODEK','/compraai/inicio.php',2334),
 (2359,'127.0.0.1','11/01/2011','VISITA NO SITE -','20:31:53','HOLODEK','/compraai/inicio.php',2335),
 (2360,'127.0.0.1','12/01/2011','VISITA NO SITE -','11:45:11','VISITANTE','/compraai/inicio.php',2336),
 (2361,'127.0.0.1','12/01/2011','VISITA NO SITE -','11:45:12','VISITANTE','/compraai/inicio.php',2337),
 (2362,'192.168.1.1','12/01/2011','VISITA NO SITE -','11:45:37','VISITANTE','/compraai/inicio.php',2338),
 (2363,'192.168.1.1','12/01/2011','VISITA NO SITE -','11:45:38','VISITANTE','/compraai/inicio.php',2339),
 (2364,'127.0.0.1','12/01/2011','VISITA NO SITE -','11:52:55','VISITANTE','/compraai/inicio.php',2340);
INSERT INTO `log_user_event` (`id`,`IP`,`DATA`,`EVENTO`,`HORA`,`USUARIO`,`ARQUIVO`,`QTD`) VALUES 
 (2365,'127.0.0.1','12/01/2011','VISITA NO SITE -','11:52:55','VISITANTE','/compraai/inicio.php',2341),
 (2366,'192.168.1.1','12/01/2011','VISITA NO SITE -','12:09:21','ENDREWS','/compraai/inicio.php',2342),
 (2367,'192.168.1.1','12/01/2011','VISITA NO SITE -','12:19:51','ENDREWS','/compraai/inicio.php',2343),
 (2368,'192.168.1.1','12/01/2011','VISITA NO SITE -','13:32:18','VISITANTE','/compraai/inicio.php',2344),
 (2369,'192.168.1.1','12/01/2011','VISITA NO SITE -','13:32:20','VISITANTE','/compraai/inicio.php',2345),
 (2370,'192.168.1.1','12/01/2011','VISITA NO SITE -','14:12:30','ENDREWS','/compraai/inicio.php',2346),
 (2371,'192.168.1.1','12/01/2011','VISITA NO SITE -','14:16:58','ENDREWS','/compraai/inicio.php',2347),
 (2372,'192.168.1.1','12/01/2011','VISITA NO SITE -','14:27:50','ENDREWS','/compraai/inicio.php',2348),
 (2373,'192.168.1.1','12/01/2011','VISITA NO SITE -','14:30:48','ENDREWS','/compraai/inicio.php',2349),
 (2374,'192.168.1.1','12/01/2011','VISITA NO SITE -','14:33:39','ENDREWS','/compraai/inicio.php',2350);
INSERT INTO `log_user_event` (`id`,`IP`,`DATA`,`EVENTO`,`HORA`,`USUARIO`,`ARQUIVO`,`QTD`) VALUES 
 (2375,'192.168.1.1','12/01/2011','VISITA NO SITE -','14:34:59','ENDREWS','/compraai/inicio.php',2351),
 (2376,'192.168.1.1','12/01/2011','VISITA NO SITE -','14:36:05','ENDREWS','/compraai/inicio.php',2352),
 (2377,'192.168.1.1','12/01/2011','VISITA NO SITE -','14:36:13','ENDREWS','/compraai/inicio.php',2353),
 (2378,'192.168.1.1','12/01/2011','VISITA NO SITE -','14:36:50','ENDREWS','/compraai/inicio.php',2354),
 (2379,'192.168.1.1','12/01/2011','VISITA NO SITE -','14:36:52','ENDREWS','/compraai/inicio.php',2355),
 (2380,'192.168.1.1','12/01/2011','VISITA NO SITE -','14:36:54','ENDREWS','/compraai/inicio.php',2356),
 (2381,'192.168.1.1','12/01/2011','VISITA NO SITE -','14:36:54','ENDREWS','/compraai/inicio.php',2357),
 (2382,'192.168.1.1','12/01/2011','VISITA NO SITE -','14:36:55','ENDREWS','/compraai/inicio.php',2358),
 (2383,'192.168.1.1','12/01/2011','VISITA NO SITE -','14:36:55','ENDREWS','/compraai/inicio.php',2359),
 (2384,'127.0.0.1','12/01/2011','VISITA NO SITE -','14:36:56','HOLODEK','/compraai/inicio.php',2360);
INSERT INTO `log_user_event` (`id`,`IP`,`DATA`,`EVENTO`,`HORA`,`USUARIO`,`ARQUIVO`,`QTD`) VALUES 
 (2385,'127.0.0.1','12/01/2011','VISITA NO SITE -','14:38:28','HOLODEK','/compraai/inicio.php',2361),
 (2386,'192.168.1.1','12/01/2011','VISITA NO SITE -','14:38:40','ENDREWS','/compraai/inicio.php',2362),
 (2387,'192.168.1.1','12/01/2011','VISITA NO SITE -','14:40:33','ENDREWS','/compraai/inicio.php',2363),
 (2388,'192.168.1.1','12/01/2011','VISITA NO SITE -','14:41:12','ENDREWS','/compraai/inicio.php',2364),
 (2389,'127.0.0.1','12/01/2011','VISITA NO SITE -','15:03:31','HOLODEK','/compraai/inicio.php',2365),
 (2390,'127.0.0.1','12/01/2011','VISITA NO SITE -','15:05:56','HOLODEK','/compraai/inicio.php',2366),
 (2391,'127.0.0.1','12/01/2011','VISITA NO SITE -','15:08:24','VISITANTE','/compraai/inicio.php',2367),
 (2392,'127.0.0.1','12/01/2011','VISITA NO SITE -','15:08:25','VISITANTE','/compraai/inicio.php',2368),
 (2393,'127.0.0.1','12/01/2011','VISITA NO SITE -','15:26:23','VISITANTE','/compraai/inicio.php',2369),
 (2394,'127.0.0.1','12/01/2011','VISITA NO SITE -','15:26:24','VISITANTE','/compraai/inicio.php',2370);
INSERT INTO `log_user_event` (`id`,`IP`,`DATA`,`EVENTO`,`HORA`,`USUARIO`,`ARQUIVO`,`QTD`) VALUES 
 (2395,'127.0.0.1','12/01/2011','VISITA NO SITE -','15:32:40','VISITANTE','/compraai/inicio.php',2371),
 (2396,'127.0.0.1','12/01/2011','VISITA NO SITE -','15:32:40','VISITANTE','/compraai/inicio.php',2372),
 (2397,'127.0.0.1','12/01/2011','VISITA NO SITE -','22:14:52','VISITANTE','/compraai/inicio.php',2373),
 (2398,'127.0.0.1','12/01/2011','VISITA NO SITE -','22:14:53','VISITANTE','/compraai/inicio.php',2374),
 (2399,'127.0.0.1','13/01/2011','VISITA NO SITE -','12:12:04','VISITANTE','/compraai/inicio.php',2375),
 (2400,'127.0.0.1','13/01/2011','VISITA NO SITE -','12:12:04','VISITANTE','/compraai/inicio.php',2376),
 (2401,'127.0.0.1','13/01/2011','VISITA NO SITE -','12:13:13','VISITANTE','/compraai/inicio.php',2377),
 (2402,'127.0.0.1','13/01/2011','VISITA NO SITE -','12:13:22','VISITANTE','/compraai/inicio.php',2378),
 (2403,'127.0.0.1','13/01/2011','VISITA NO SITE -','12:13:32','VISITANTE','/compraai/inicio.php',2379),
 (2404,'127.0.0.1','13/01/2011','VISITA NO SITE -','12:13:40','VISITANTE','/compraai/inicio.php',2380);
INSERT INTO `log_user_event` (`id`,`IP`,`DATA`,`EVENTO`,`HORA`,`USUARIO`,`ARQUIVO`,`QTD`) VALUES 
 (2405,'127.0.0.1','13/01/2011','VISITA NO SITE -','12:13:47','VISITANTE','/compraai/inicio.php',2381),
 (2406,'127.0.0.1','13/01/2011','VISITA NO SITE -','12:13:58','VISITANTE','/compraai/inicio.php',2382),
 (2407,'127.0.0.1','13/01/2011','VISITA NO SITE -','12:14:07','VISITANTE','/compraai/inicio.php',2383),
 (2408,'127.0.0.1','13/01/2011','VISITA NO SITE -','12:14:24','VISITANTE','/compraai/inicio.php',2384),
 (2409,'127.0.0.1','13/01/2011','VISITA NO SITE -','12:14:27','VISITANTE','/compraai/inicio.php',2385),
 (2410,'127.0.0.1','13/01/2011','VISITA NO SITE -','12:14:59','VISITANTE','/compraai/inicio.php',2386),
 (2411,'127.0.0.1','13/01/2011','VISITA NO SITE -','12:19:43','VISITANTE','/compraai/inicio.php',2387),
 (2412,'127.0.0.1','13/01/2011','VISITA NO SITE -','12:28:07','VISITANTE','/compraai/inicio.php',2388),
 (2413,'127.0.0.1','13/01/2011','VISITA NO SITE -','13:06:39','VISITANTE','/compraai/inicio.php',2389),
 (2414,'192.168.1.1','13/01/2011','VISITA NO SITE -','13:30:28','VISITANTE','/compraai/inicio.php',2390);
INSERT INTO `log_user_event` (`id`,`IP`,`DATA`,`EVENTO`,`HORA`,`USUARIO`,`ARQUIVO`,`QTD`) VALUES 
 (2415,'192.168.1.1','13/01/2011','VISITA NO SITE -','13:30:28','VISITANTE','/compraai/inicio.php',2391),
 (2416,'127.0.0.1','13/01/2011','VISITA NO SITE -','13:31:21','VISITANTE','/compraai/inicio.php',2392),
 (2417,'192.168.1.1','13/01/2011','VISITA NO SITE -','13:32:10','VISITANTE','/compraai/inicio.php',2393),
 (2418,'127.0.0.1','13/01/2011','VISITA NO SITE -','13:38:49','VISITANTE','/compraai/inicio.php',2394),
 (2419,'127.0.0.1','13/01/2011','VISITA NO SITE -','13:40:40','VISITANTE','/compraai/inicio.php',2395),
 (2420,'127.0.0.1','13/01/2011','VISITA NO SITE -','13:42:27','VISITANTE','/compraai/inicio.php',2396),
 (2421,'127.0.0.1','13/01/2011','VISITA NO SITE -','13:42:36','VISITANTE','/compraai/inicio.php',2397),
 (2422,'127.0.0.1','13/01/2011','VISITA NO SITE -','13:43:32','VISITANTE','/compraai/inicio.php',2398),
 (2423,'192.168.1.1','13/01/2011','VISITA NO SITE -','13:43:46','ENDREWS','/compraai/inicio.php',2399),
 (2424,'127.0.0.1','13/01/2011','VISITA NO SITE -','13:47:45','VISITANTE','/compraai/inicio.php',2400);
INSERT INTO `log_user_event` (`id`,`IP`,`DATA`,`EVENTO`,`HORA`,`USUARIO`,`ARQUIVO`,`QTD`) VALUES 
 (2425,'127.0.0.1','13/01/2011','VISITA NO SITE -','13:50:17','VISITANTE','/compraai/inicio.php',2401),
 (2426,'192.168.1.1','13/01/2011','VISITA NO SITE -','13:52:04','ENDREWS','/compraai/inicio.php',2402),
 (2427,'127.0.0.1','13/01/2011','VISITA NO SITE -','13:57:33','VISITANTE','/compraai/inicio.php',2403),
 (2428,'127.0.0.1','13/01/2011','VISITA NO SITE -','14:06:14','VISITANTE','/compraai/inicio.php',2404),
 (2429,'127.0.0.1','13/01/2011','VISITA NO SITE -','14:07:27','VISITANTE','/compraai/inicio.php',2405),
 (2430,'192.168.1.1','13/01/2011','VISITA NO SITE -','14:31:19','ENDREWS','/compraai/inicio.php',2406),
 (2431,'192.168.1.1','13/01/2011','VISITA NO SITE -','14:43:48','ENDREWS','/compraai/inicio.php',2407),
 (2432,'192.168.1.1','13/01/2011','VISITA NO SITE -','14:47:04','ENDREWS','/compraai/inicio.php',2408),
 (2433,'192.168.1.1','13/01/2011','VISITA NO SITE -','15:04:49','ENDREWS','/compraai/inicio.php',2409),
 (2434,'192.168.1.1','13/01/2011','VISITA NO SITE -','15:07:33','VISITANTE','/compraai/inicio.php',2410);
INSERT INTO `log_user_event` (`id`,`IP`,`DATA`,`EVENTO`,`HORA`,`USUARIO`,`ARQUIVO`,`QTD`) VALUES 
 (2435,'127.0.0.1','13/01/2011','VISITA NO SITE -','15:12:25','VISITANTE','/compraai/inicio.php',2411),
 (2436,'127.0.0.1','13/01/2011','VISITA NO SITE -','15:12:26','VISITANTE','/compraai/inicio.php',2412),
 (2437,'192.168.1.1','13/01/2011','VISITA NO SITE -','15:13:30','ENDREWS','/compraai/inicio.php',2413),
 (2438,'127.0.0.1','14/01/2011','VISITA NO SITE -','07:35:08','VISITANTE','/compraai/inicio.php',2414),
 (2439,'127.0.0.1','14/01/2011','VISITA NO SITE -','07:35:09','VISITANTE','/compraai/inicio.php',2415),
 (2440,'127.0.0.1','14/01/2011','VISITA NO SITE -','08:06:36','VISITANTE','/compraai/inicio.php',2416),
 (2441,'127.0.0.1','14/01/2011','VISITA NO SITE -','08:06:36','VISITANTE','/compraai/inicio.php',2417),
 (2442,'127.0.0.1','14/01/2011','VISITA NO SITE -','08:34:31','HOLODEK','/novo_visu/inicio.php',2418),
 (2443,'127.0.0.1','14/01/2011','VISITA NO SITE -','09:47:23','HOLODEK','/compraai/inicio.php',2419),
 (2444,'127.0.0.1','14/01/2011','VISITA NO SITE -','10:09:06','HOLODEK','/compraai/inicio.php',2420);
INSERT INTO `log_user_event` (`id`,`IP`,`DATA`,`EVENTO`,`HORA`,`USUARIO`,`ARQUIVO`,`QTD`) VALUES 
 (2445,'127.0.0.1','14/01/2011','VISITA NO SITE -','11:18:31','HOLODEK','/compraai/inicio.php',2421),
 (2446,'127.0.0.1','14/01/2011','VISITA NO SITE -','12:26:42','HOLODEK','/compraai/inicio.php',2422),
 (2447,'127.0.0.1','14/01/2011','VISITA NO SITE -','12:29:09','HOLODEK','/compraai/inicio.php',2423),
 (2448,'127.0.0.1','14/01/2011','VISITA NO SITE -','12:29:40','HOLODEK','/compraai/inicio.php',2424),
 (2449,'127.0.0.1','14/01/2011','VISITA NO SITE -','12:30:00','HOLODEK','/compraai/inicio.php',2425),
 (2450,'127.0.0.1','14/01/2011','VISITA NO SITE -','12:38:29','HOLODEK','/compraai/inicio.php',2426),
 (2451,'127.0.0.1','14/01/2011','VISITA NO SITE -','12:45:19','HOLODEK','/compraai/inicio.php',2427),
 (2452,'127.0.0.1','14/01/2011','VISITA NO SITE -','12:51:01','HOLODEK','/compraai/inicio.php',2428),
 (2453,'127.0.0.1','14/01/2011','VISITA NO SITE -','12:54:45','HOLODEK','/compraai/inicio.php',2429),
 (2454,'127.0.0.1','14/01/2011','VISITA NO SITE -','12:54:50','HOLODEK','/compraai/inicio.php',2430);
INSERT INTO `log_user_event` (`id`,`IP`,`DATA`,`EVENTO`,`HORA`,`USUARIO`,`ARQUIVO`,`QTD`) VALUES 
 (2455,'127.0.0.1','14/01/2011','VISITA NO SITE -','12:56:12','HOLODEK','/compraai/inicio.php',2431),
 (2456,'127.0.0.1','14/01/2011','VISITA NO SITE -','12:56:56','HOLODEK','/compraai/inicio.php',2432),
 (2457,'127.0.0.1','14/01/2011','VISITA NO SITE -','13:01:39','HOLODEK','/compraai/inicio.php',2433),
 (2458,'127.0.0.1','14/01/2011','VISITA NO SITE -','13:08:01','HOLODEK','/compraai/inicio.php',2434),
 (2459,'127.0.0.1','14/01/2011','VISITA NO SITE -','13:30:32','HOLODEK','/compraai/inicio.php',2435),
 (2460,'127.0.0.1','14/01/2011','VISITA NO SITE -','13:39:37','HOLODEK','/compraai/inicio.php',2436),
 (2461,'192.168.1.1','14/01/2011','VISITA NO SITE -','13:45:15','VISITANTE','/compraai/inicio.php',2437),
 (2462,'192.168.1.1','14/01/2011','VISITA NO SITE -','13:45:16','VISITANTE','/compraai/inicio.php',2438),
 (2463,'192.168.1.1','14/01/2011','VISITA NO SITE -','14:01:29','ENDREWS','/compraai/inicio.php',2439),
 (2464,'127.0.0.1','14/01/2011','VISITA NO SITE -','14:03:19','VISITANTE','/compraai/inicio.php',2440);
INSERT INTO `log_user_event` (`id`,`IP`,`DATA`,`EVENTO`,`HORA`,`USUARIO`,`ARQUIVO`,`QTD`) VALUES 
 (2465,'192.168.1.1','14/01/2011','VISITA NO SITE -','14:04:34','ENDREWS','/compraai/inicio.php',2441),
 (2466,'192.168.1.1','14/01/2011','VISITA NO SITE -','14:11:06','ENDREWS','/compraai/inicio.php',2442),
 (2467,'192.168.1.1','14/01/2011','VISITA NO SITE -','14:18:36','ENDREWS','/compraai/inicio.php',2443),
 (2468,'192.168.1.1','14/01/2011','VISITA NO SITE -','14:23:17','ENDREWS','/compraai/inicio.php',2444),
 (2469,'127.0.0.1','14/01/2011','VISITA NO SITE -','14:58:29','VISITANTE','/compraai/inicio.php',2445),
 (2470,'127.0.0.1','14/01/2011','VISITA NO SITE -','16:49:29','HOLODEK','/compraai/inicio.php',2446);
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
 (1,1,'EDSON','DE ARAUJO',22,6,1970,'MASCULINO','edsonaraujo1@hotmail.com','holodek','dx44l09','Deus seja Louvado','19/08/2009','14:09:02','14/01/2011 as 15:42','14/01/2011 as 08:07',0,'174416921','99999999999','RUA','Sete de Abril','34','Centro','Sao Paulo','Franco da Rocha','01044-000','3259-0067','(11)8989-8989','fotos/a4e09ca5007e2c65e938Eu2.JPG',212,'ON','http://','','','NAO'),
 (2,2,'ENDREWS','FILIPI ROCHA ARAUJO',21,11,2000,'MASCULINO','endrewsaraujo@hotmail.com','endrews','741963852','E NOIS','23/09/2009','17:43:24','14/01/2011 as 13:47','13/01/2011 as 15:08',0,'453423231','08447540804','RUA','sincinato braga,','53','santo amaro','sao paulo','sao paulo','02310-000','8888-8888','9100-8989','fotos/e75f4b1666relanpago mac.jpg',25,'OF','www','','',NULL),
 (3,3,'Marlene','Firmino Silva',23,4,1975,'FEMININO','iamnotnobody007@hotmail.com','marley','12345','um por todos todos por 1','17/09/2009','15:48','08/01/2011 as 03:08','16/11/2010 as 17:09',1,'32437854','23409812309','Avenida','Lourenco Fagundes, 346',NULL,'Louzane','Sao Paulo','Sao Paulo','04509000','(11) 5555-5555','(12) 97979797','fotos/7e9fa1c010banner_sac[1].jpg',20,'OF',NULL,'','',NULL);
INSERT INTO `tt_ser_01` (`id`,`codigo`,`nome`,`sobrenome`,`nasc_dia`,`nasc_mes`,`nasc_ano`,`sexo`,`e_mail`,`login`,`senha`,`frase`,`data`,`hora`,`data_entrada`,`ultima_dt`,`permissao`,`rg`,`cpf`,`rua`,`endereco`,`numero`,`bairro`,`estado`,`cidade`,`cep`,`fone_fix`,`fone_cel`,`foto_peq`,`acess_site`,`messenger`,`url`,`positivo`,`negativo`,`excluido`) VALUES 
 (4,4,'MARIANO','LIMA DE OLIVEIRA',3,10,1978,'MASCULINO','edson@sindificios.com.br','mariano','12345','acerte no alva','29/09/2009','16:18:56','29/09/2009 as 16:51','29/09/2009 as 15:37',0,'123454657','26440050869','RUA','sete de abril, 34',NULL,'centro','São Paulo - SP','Caieiras','01044-000','(11)9999-9999','(13)8888-8888',NULL,0,NULL,NULL,'','',NULL),
 (5,5,'djkdjskdjsk','djskdjskdj',10,10,2000,'MASCULINO','lavar@uol.com.br','lavar','12345','oi','06/11/2010','01:55:55',NULL,NULL,0,'352635263526','12312312312','RUA','sete',NULL,'centro','Acre - AC','sao paulo','01044-901','(78)7878-7878','(78)7878-7878',NULL,0,NULL,NULL,'','',NULL),
 (6,6,'joao','alceder lima',5,5,1995,'MASCULINO','isysmp@isysmp.com.br','matrix','12345','joao','25/11/2010','17:30:53','25/11/2010 as 17:55','16/11/2010 as 17:09',0,'3810430','10365643475','ALAMEDA','alamedas, 34',NULL,'alamedas','São Paulo - SP','sao paulo','01044-000','(11)9098-976','(11)9990-9876','fotos/32f9375d9cimpossivel.jpg',20,NULL,NULL,'','',NULL);
INSERT INTO `tt_ser_01` (`id`,`codigo`,`nome`,`sobrenome`,`nasc_dia`,`nasc_mes`,`nasc_ano`,`sexo`,`e_mail`,`login`,`senha`,`frase`,`data`,`hora`,`data_entrada`,`ultima_dt`,`permissao`,`rg`,`cpf`,`rua`,`endereco`,`numero`,`bairro`,`estado`,`cidade`,`cep`,`fone_fix`,`fone_cel`,`foto_peq`,`acess_site`,`messenger`,`url`,`positivo`,`negativo`,`excluido`) VALUES 
 (11,7,'JOENVILE','SOBERANO',20,2,1968,'MASCULINO','soberano@uol.com.br','katti','123456','eu nao sei nada','07/01/2011','14:12:39','07/01/2011 as 14:28','',0,'1231231234','13552119809','RUA','das palmeiras','76','centro','São Paulo - SP','caieiras','07000-000','(44)4444-4444','(99)9999-9999','fotos/117b8a89ba123500o.jpg',1,NULL,'http://www.compraai.com.br','','',NULL);
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
