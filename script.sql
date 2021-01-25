-- Host: localhost    Database: id11043282_db_usuario

-- Schema db_usuario
-- DROP SCHEMA IF EXISTS `id11043282_db_pessoa` ;

CREATE SCHEMA IF NOT EXISTS `id11043282_db_usuario`;

USE `id11043282_db_usuario` ;
-- -----------------------------------------------------
-- Table `tb_pessoa`
-- -----------------------------------------------------
-- DROP TABLE IF EXISTS `tb_pessoa` ;

CREATE TABLE IF NOT EXISTS `tb_pessoa` (
  `id_pessoa` INT(11) NOT NULL AUTO_INCREMENT,
  `nome_pessoa` VARCHAR(50) NOT NULL,
  `telefone` VARCHAR(16) NULL,
  `email` VARCHAR(50) NULL,
  PRIMARY KEY (`id_pessoa`));