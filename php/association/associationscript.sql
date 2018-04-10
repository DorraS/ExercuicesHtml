-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema association
-- -----------------------------------------------------
DROP SCHEMA IF EXISTS `association` ;

-- -----------------------------------------------------
-- Schema association
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `association` DEFAULT CHARACTER SET utf8 ;
USE `association` ;

-- -----------------------------------------------------
-- Table `association`.`adherent`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `association`.`adherent` ;

CREATE TABLE IF NOT EXISTS `association`.`adherent` (
  `id_adherent` INT NOT NULL AUTO_INCREMENT,
  `nom` VARCHAR(45) NULL,
  `prenom` VARCHAR(45) NULL,
  `date_naissance` DATE NULL,
  PRIMARY KEY (`id_adherent`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `association`.`typeAdherent`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `association`.`typeAdherent` ;

CREATE TABLE IF NOT EXISTS `association`.`typeAdherent` (
  `idtypeAdherent` INT NOT NULL AUTO_INCREMENT,
  `typeAdherent` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idtypeAdherent`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `association`.`typeActivite`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `association`.`typeActivite` ;

CREATE TABLE IF NOT EXISTS `association`.`typeActivite` (
  `idtypeActivite` INT NOT NULL AUTO_INCREMENT,
  `typeActivite` VARCHAR(45) NULL,
  PRIMARY KEY (`idtypeActivite`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `association`.`planning`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `association`.`planning` ;

CREATE TABLE IF NOT EXISTS `association`.`planning` (
  `id_planning` INT NOT NULL AUTO_INCREMENT,
  `date_planning` DATE NULL,
  PRIMARY KEY (`id_planning`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `association`.`activite`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `association`.`activite` ;

CREATE TABLE IF NOT EXISTS `association`.`activite` (
  `id_activite` INT NOT NULL AUTO_INCREMENT,
  `idtypeActivite` INT NOT NULL,
  `id_prof` INT NULL,
  `heureDebut` VARCHAR(45) NULL,
  `dateFin` VARCHAR(45) NULL,
  `idplanning` INT NOT NULL,
  PRIMARY KEY (`id_activite`),
  INDEX `fk_activite_typeActivite1_idx` (`idtypeActivite` ASC),
  INDEX `fk_activite_planning1_idx` (`idplanning` ASC),
  CONSTRAINT `fk_activite_typeActivite1`
    FOREIGN KEY (`idtypeActivite`)
    REFERENCES `association`.`typeActivite` (`idtypeActivite`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_activite_planning1`
    FOREIGN KEY (`idplanning`)
    REFERENCES `association`.`planning` (`id_planning`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `association`.`role`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `association`.`role` ;

CREATE TABLE IF NOT EXISTS `association`.`role` (
  `id_adherent` INT NOT NULL,
  `idtypeAdherent` INT NOT NULL,
  PRIMARY KEY (`id_adherent`, `idtypeAdherent`),
  INDEX `fk_adherent_has_typeAdherent_typeAdherent1_idx` (`idtypeAdherent` ASC),
  INDEX `fk_adherent_has_typeAdherent_adherent_idx` (`id_adherent` ASC),
  CONSTRAINT `fk_adherent_has_typeAdherent_adherent`
    FOREIGN KEY (`id_adherent`)
    REFERENCES `association`.`adherent` (`id_adherent`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_adherent_has_typeAdherent_typeAdherent1`
    FOREIGN KEY (`idtypeAdherent`)
    REFERENCES `association`.`typeAdherent` (`idtypeAdherent`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `association`.`participant`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `association`.`participant` ;

CREATE TABLE IF NOT EXISTS `association`.`participant` (
  `id_adherent` INT NOT NULL,
  `id_activite` INT NOT NULL,
  PRIMARY KEY (`id_adherent`, `id_activite`),
  INDEX `fk_adherent_has_activite_activite1_idx` (`id_activite` ASC),
  INDEX `fk_adherent_has_activite_adherent1_idx` (`id_adherent` ASC),
  CONSTRAINT `fk_adherent_has_activite_adherent1`
    FOREIGN KEY (`id_adherent`)
    REFERENCES `association`.`adherent` (`id_adherent`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_adherent_has_activite_activite1`
    FOREIGN KEY (`id_activite`)
    REFERENCES `association`.`activite` (`id_activite`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
