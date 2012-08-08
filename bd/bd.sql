SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL';

CREATE SCHEMA IF NOT EXISTS `biblioteca` DEFAULT CHARACTER SET utf8 ;
USE `biblioteca` ;

-- -----------------------------------------------------
-- Table `biblioteca`.`generos`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `biblioteca`.`generos` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `genero` VARCHAR(45) NULL ,
  `classificacao` INT NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `biblioteca`.`autores`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `biblioteca`.`autores` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `autor` VARCHAR(100) NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `biblioteca`.`livros`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `biblioteca`.`livros` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `nome` VARCHAR(100) NULL ,
  `generos_id` INT NOT NULL ,
  `autores_id` INT NOT NULL ,
  PRIMARY KEY (`id`) ,
  INDEX `fk_livros_generos` (`generos_id` ASC) ,
  INDEX `fk_livros_autores1` (`autores_id` ASC) ,
  CONSTRAINT `fk_livros_generos`
    FOREIGN KEY (`generos_id` )
    REFERENCES `biblioteca`.`generos` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_livros_autores1`
    FOREIGN KEY (`autores_id` )
    REFERENCES `biblioteca`.`autores` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;



SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
