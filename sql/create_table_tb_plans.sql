CREATE TABLE `db_amarcasarv1`.`tb_plans` (
  `idplan` INT(11) NOT NULL AUTO_INCREMENT,
  `iduser` INT(11) NOT NULL,
  `idorder` INT(11) NOT NULL,
  `idpayment` INT(11) NOT NULL,
  `idstatus` TINYINT(4) NOT NULL,
  `inmigration` TINYINT(4) NOT NULL,
  `inperiod` TINYINT(2) NOT NULL,
  `vlprice` DECIMAL(10,2) NOT NULL,
  `dtregister` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`idplan`));