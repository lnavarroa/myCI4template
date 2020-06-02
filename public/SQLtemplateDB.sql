

CREATE TABLE `templatedb`.`user` (
  `username` VARCHAR(16) NOT NULL,
  `email` VARCHAR(255) NOT NULL,
  `password` VARCHAR(32) NOT NULL,
  `create_time` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`username`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


CREATE TABLE `templatedb`.`productos` (
  `idproductos` INT NOT NULL,
  `nombreProducto` VARCHAR(45) NULL,
  `descripcion` VARCHAR(45) NULL,
  `stock` INT NULL,
  PRIMARY KEY (`idproductos`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;

ALTER TABLE `templatedb`.`user` 
CHANGE COLUMN `password` `password` VARCHAR(256) NOT NULL ;

CREATE TABLE `templatedb`.`herramientas` (
  `idherramientas` INT NOT NULL,
  `nombre` VARCHAR(45) NULL,
  `descripcion` VARCHAR(45) NULL,
  PRIMARY KEY (`idherramientas`));


CREATE TABLE `templatedb`.`materiales` (
  `idmateriales` INT NOT NULL,
  `nombre` VARCHAR(45) NULL,
  `descripcion` VARCHAR(100) NULL,
  PRIMARY KEY (`idmateriales`));


