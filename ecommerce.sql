-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
DROP SCHEMA IF EXISTS `mydb` ;

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `mydb` DEFAULT CHARACTER SET utf8 ;
USE `mydb` ;

-- -----------------------------------------------------
-- Table `mydb`.`Usuarios`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`Usuarios` (
  `idUsuarios` INT NOT NULL AUTO_INCREMENT,
  `Nombre` VARCHAR(45) NULL,
  `Apellido` VARCHAR(45) NULL,
  `Email` VARCHAR(45) NULL,
  `Telefono` VARCHAR(45) NULL,
  `Direccion` VARCHAR(45) NULL,
  `Contraseña` VARCHAR(100) NULL,
  `DNI` VARCHAR(45) NULL,
  `Imagen` VARCHAR(200) NULL,
  `tipoUsuarios_idtipoUsuarios` INT NOT NULL,
  PRIMARY KEY (`idUsuarios`, `tipoUsuarios_idtipoUsuarios`),
  CONSTRAINT `fk_Usuarios_tipoUsuarios1`
    FOREIGN KEY (`tipoUsuarios_idtipoUsuarios`)
    REFERENCES `mydb`.`tipoUsuarios` (`idtipoUsuarios`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

CREATE UNIQUE INDEX `Email_UNIQUE` ON `mydb`.`Usuarios` (`Email` ASC);

CREATE UNIQUE INDEX `DNI_UNIQUE` ON `mydb`.`Usuarios` (`DNI` ASC);


-- -----------------------------------------------------
-- Table `mydb`.`table1`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`table1` (
)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`tipoUsuarios`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`tipoUsuarios` (
  `idtipoUsuarios` INT NOT NULL AUTO_INCREMENT,
  `Nombre` VARCHAR(45) NULL,
  PRIMARY KEY (`idtipoUsuarios`))
ENGINE = InnoDB;

CREATE UNIQUE INDEX `Nombre_UNIQUE` ON `mydb`.`tipoUsuarios` (`Nombre` ASC);


-- -----------------------------------------------------
-- Table `mydb`.`Usuarios`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`Usuarios` (
  `idUsuarios` INT NOT NULL AUTO_INCREMENT,
  `Nombre` VARCHAR(45) NULL,
  `Apellido` VARCHAR(45) NULL,
  `Email` VARCHAR(45) NULL,
  `Telefono` VARCHAR(45) NULL,
  `Direccion` VARCHAR(45) NULL,
  `Contraseña` VARCHAR(100) NULL,
  `DNI` VARCHAR(45) NULL,
  `Imagen` VARCHAR(200) NULL,
  `tipoUsuarios_idtipoUsuarios` INT NOT NULL,
  PRIMARY KEY (`idUsuarios`, `tipoUsuarios_idtipoUsuarios`),
  CONSTRAINT `fk_Usuarios_tipoUsuarios1`
    FOREIGN KEY (`tipoUsuarios_idtipoUsuarios`)
    REFERENCES `mydb`.`tipoUsuarios` (`idtipoUsuarios`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

CREATE UNIQUE INDEX `Email_UNIQUE` ON `mydb`.`Usuarios` (`Email` ASC);

CREATE UNIQUE INDEX `DNI_UNIQUE` ON `mydb`.`Usuarios` (`DNI` ASC);

CREATE INDEX `fk_Usuarios_tipoUsuarios1_idx` ON `mydb`.`Usuarios` (`tipoUsuarios_idtipoUsuarios` ASC);


-- -----------------------------------------------------
-- Table `mydb`.`Categorias`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`Categorias` (
  `idCategoria` INT NOT NULL AUTO_INCREMENT,
  `Nombre` VARCHAR(45) NULL,
  PRIMARY KEY (`idCategoria`))
ENGINE = InnoDB;

CREATE UNIQUE INDEX `Nombre_UNIQUE` ON `mydb`.`Categorias` (`Nombre` ASC);


-- -----------------------------------------------------
-- Table `mydb`.`Productos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`Productos` (
  `idProductos` INT NOT NULL AUTO_INCREMENT,
  `Nombre` VARCHAR(45) NULL,
  `Precio` VARCHAR(45) NULL,
  `Detalle` VARCHAR(45) NULL,
  `Stock` VARCHAR(45) NULL,
  `Imagen` VARCHAR(500) NULL,
  `Categorias_idCategoria` INT NOT NULL,
  PRIMARY KEY (`idProductos`, `Categorias_idCategoria`),
  CONSTRAINT `fk_Productos_Categorias1`
    FOREIGN KEY (`Categorias_idCategoria`)
    REFERENCES `mydb`.`Categorias` (`idCategoria`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

CREATE UNIQUE INDEX `Nombre_UNIQUE` ON `mydb`.`Productos` (`Nombre` ASC);

CREATE INDEX `fk_Productos_Categorias1_idx` ON `mydb`.`Productos` (`Categorias_idCategoria` ASC);


-- -----------------------------------------------------
-- Table `mydb`.`Pedidos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`Pedidos` (
  `Usuarios_idUsuarios` INT NOT NULL,
  `Productos_idProductos` INT NOT NULL,
  `idPedidos` INT NOT NULL AUTO_INCREMENT,
  `numeroPedido` INT NULL,
  `numeroFactura` INT NULL,
  `Estado` VARCHAR(45) NULL,
  PRIMARY KEY (`idPedidos`),
  CONSTRAINT `fk_Usuarios_has_Productos_Usuarios1`
    FOREIGN KEY (`Usuarios_idUsuarios`)
    REFERENCES `mydb`.`Usuarios` (`idUsuarios`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Usuarios_has_Productos_Productos1`
    FOREIGN KEY (`Productos_idProductos`)
    REFERENCES `mydb`.`Productos` (`idProductos`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

CREATE INDEX `fk_Usuarios_has_Productos_Productos1_idx` ON `mydb`.`Pedidos` (`Productos_idProductos` ASC);

CREATE INDEX `fk_Usuarios_has_Productos_Usuarios1_idx` ON `mydb`.`Pedidos` (`Usuarios_idUsuarios` ASC);

CREATE UNIQUE INDEX `numeroPedido_UNIQUE` ON `mydb`.`Pedidos` (`numeroPedido` ASC);

CREATE UNIQUE INDEX `numeroFactura_UNIQUE` ON `mydb`.`Pedidos` (`numeroFactura` ASC);


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
