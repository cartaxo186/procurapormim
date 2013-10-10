/*
 Navicat Premium Data Transfer

 Source Server         : MySQL_dev
 Source Server Type    : MySQL
 Source Server Version : 50529
 Source Host           : localhost
 Source Database       : procurapormim

 Target Server Type    : MySQL
 Target Server Version : 50529
 File Encoding         : utf-8

 Date: 10/10/2013 11:40:31 AM
*/

SET NAMES utf8;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
--  Table structure for `estado`
-- ----------------------------
DROP TABLE IF EXISTS `estado`;
CREATE TABLE `estado` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(75) DEFAULT NULL,
  `uf` varchar(5) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=latin1;

-- ----------------------------
--  Records of `estado`
-- ----------------------------
BEGIN;
INSERT INTO `estado` VALUES ('1', 'Acre', 'AC'), ('2', 'Alagoas', 'AL'), ('3', 'Amazonas', 'AM'), ('4', 'Amapá', 'AP'), ('5', 'Bahia', 'BA'), ('6', 'Ceará', 'CE'), ('7', 'Distrito Federal', 'DF'), ('8', 'Espírito Santo', 'ES'), ('9', 'Goiás', 'GO'), ('10', 'Maranhão', 'MA'), ('11', 'Minas Gerais', 'MG'), ('12', 'Mato Grosso do Sul', 'MS'), ('13', 'Mato Grosso', 'MT'), ('14', 'Pará', 'PA'), ('15', 'Paraíba', 'PB'), ('16', 'Pernambuco', 'PE'), ('17', 'Piauí', 'PI'), ('18', 'Paraná', 'PR'), ('19', 'Rio de Janeiro', 'RJ'), ('20', 'Rio Grande do Norte', 'RN'), ('21', 'Rondônia', 'RO'), ('22', 'Roraima', 'RR'), ('23', 'Rio Grande do Sul', 'RS'), ('24', 'Santa Catarina', 'SC'), ('25', 'Sergipe', 'SE'), ('26', 'São Paulo', 'SP'), ('27', 'Tocantins', 'TO');
COMMIT;

-- ----------------------------
--  Table structure for `usuario`
-- ----------------------------
DROP TABLE IF EXISTS `usuario`;
CREATE TABLE `usuario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `usuario_tipo_id` int(11) NOT NULL,
  `nome` varchar(200) NOT NULL,
  `sexo` char(1) NOT NULL,
  `data_nascimento` date NOT NULL,
  `email` varchar(250) NOT NULL,
  `telefone` varchar(13) DEFAULT NULL,
  `celular` varchar(14) DEFAULT NULL,
  `cep` varchar(9) NOT NULL,
  `endereco` varchar(255) NOT NULL,
  `numero` varchar(20) NOT NULL,
  `complemento` varchar(200) DEFAULT NULL,
  `bairro` varchar(200) NOT NULL,
  `cidade` varchar(120) NOT NULL,
  `estado_id` int(11) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `notificacao` tinyint(1) NOT NULL,
  `data_cadastro` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

-- ----------------------------
--  Records of `usuario`
-- ----------------------------
BEGIN;
INSERT INTO `usuario` VALUES ('3', '1', 'Marcelo Ogeda', 'M', '0000-00-00', 'marcelo.ogeda@gmail.com', '', '(11) 96282-950', '06144-350', 'Rua Pedro Alvares Cabral', '229', '', 'Jardim Veloso', 'Osasco', '26', '123mudar', '1', '2013-10-09 16:59:45', '1'), ('5', '1', 'Brunno Cartax', 'M', '0000-00-00', 'brunno.cartaxo@gmail.com', '(11) 3621-211', '(11) 99875-356', '05103-010', 'Rua Pregrave do Amaral', '146', '', 'Vila dos Remédios', 'São Paulo', '26', 'asd123', '1', '2013-10-09 19:34:00', '1'), ('6', '1', 'Apuu Júnior', 'F', '0000-00-00', 'apu.jr@gmail.com', '', '(00) 00000-000', '00000-000', 'Avenida Imperatriz', 's/n', '', 'Vila Leopoldina', 'São Paulo', '1', 'xxxx', '1', '2013-10-09 20:02:04', '1'), ('7', '1', 'maria rosilene', 'F', '0000-00-00', 'marial@umc.br', '(11) 3333-333', '(11) 44444-444', '22222-222', 'Rua Pedro Alvares Cabral', '10', '', 'Vila Leopoldina', 'São Paulo', '26', 'xxx', '1', '2013-10-09 20:28:43', '1');
COMMIT;

-- ----------------------------
--  Table structure for `usuario_tipo`
-- ----------------------------
DROP TABLE IF EXISTS `usuario_tipo`;
CREATE TABLE `usuario_tipo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tipo` varchar(200) NOT NULL,
  `status` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- ----------------------------
--  Records of `usuario_tipo`
-- ----------------------------
BEGIN;
INSERT INTO `usuario_tipo` VALUES ('1', 'Pessoa Física', '1'), ('2', 'Pessoa Juridica', '1');
COMMIT;

SET FOREIGN_KEY_CHECKS = 1;
