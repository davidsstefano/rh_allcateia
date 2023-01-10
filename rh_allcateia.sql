/*
Navicat MySQL Data Transfer

Source Server         : 127.0.0.1
Source Server Version : 100411
Source Host           : localhost:3306
Source Database       : rh_allcateia

Target Server Type    : MYSQL
Target Server Version : 100411
File Encoding         : 65001

Date: 2023-01-10 15:48:25
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for tbl_cargo
-- ----------------------------
DROP TABLE IF EXISTS `tbl_cargo`;
CREATE TABLE `tbl_cargo` (
  `id_cargo` int(11) NOT NULL,
  `nome` varchar(45) NOT NULL,
  `salario` varchar(45) NOT NULL,
  PRIMARY KEY (`id_cargo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of tbl_cargo
-- ----------------------------

-- ----------------------------
-- Table structure for tbl_financeiro-ent
-- ----------------------------
DROP TABLE IF EXISTS `tbl_financeiro-ent`;
CREATE TABLE `tbl_financeiro-ent` (
  `id-ent` int(11) NOT NULL,
  `nome` varchar(45) NOT NULL,
  `valor` varchar(45) NOT NULL,
  `data` date NOT NULL,
  PRIMARY KEY (`id-ent`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of tbl_financeiro-ent
-- ----------------------------

-- ----------------------------
-- Table structure for tbl_financeiro-sai
-- ----------------------------
DROP TABLE IF EXISTS `tbl_financeiro-sai`;
CREATE TABLE `tbl_financeiro-sai` (
  `id_sai` int(11) NOT NULL,
  `nome` varchar(45) NOT NULL,
  `valor` varchar(45) NOT NULL,
  `data` time NOT NULL,
  PRIMARY KEY (`id_sai`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of tbl_financeiro-sai
-- ----------------------------

-- ----------------------------
-- Table structure for tbl_ponto
-- ----------------------------
DROP TABLE IF EXISTS `tbl_ponto`;
CREATE TABLE `tbl_ponto` (
  `id_ponto` int(11) NOT NULL,
  `data` date NOT NULL,
  `h_ent` time DEFAULT NULL,
  `h_almo-in` time DEFAULT NULL,
  `h_almo-fim` time DEFAULT NULL,
  `h_saida` time DEFAULT NULL,
  PRIMARY KEY (`id_ponto`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of tbl_ponto
-- ----------------------------

-- ----------------------------
-- Table structure for tbl_usuario
-- ----------------------------
DROP TABLE IF EXISTS `tbl_usuario`;
CREATE TABLE `tbl_usuario` (
  `id_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(45) NOT NULL,
  `sobrenome` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `senha` varchar(45) NOT NULL,
  `telefone` varchar(12) NOT NULL,
  `cpf` varchar(11) NOT NULL,
  `nascimento` date NOT NULL,
  `cargo` varchar(25) NOT NULL,
  `categoria` int(11) NOT NULL,
  PRIMARY KEY (`id_usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of tbl_usuario
-- ----------------------------
INSERT INTO `tbl_usuario` VALUES ('1', 'teste-adm', 'adm', 'testeadmm@gmail.com', '12345', '00000', '00000', '0000-00-00', 'RH', '1');
INSERT INTO `tbl_usuario` VALUES ('2', 'teste-funcionario', 'funcionario', 'testefunc@gmail.com', '123456', '00000', '0000', '0000-00-00', 'DEV', '2');
