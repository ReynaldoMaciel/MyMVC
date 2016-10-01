CREATE TABLE `mymvc`.`posts` (
  `idPosts` INT NOT NULL,
  `Title` VARCHAR(100) NOT NULL,
  `Description` VARCHAR(200) NOT NULL,
  `Content` LONGTEXT NOT NULL,
  `Author` VARCHAR(50) NOT NULL,
  `Date` DATETIME NOT NULL,
  PRIMARY KEY (`idPosts`));

INSERT INTO `mymvc`.`posts` (`Title`, `Description`, `Content`, `Author`, `Date`) 
                     VALUES ('Teste2', 'Apenas um teste2', 'Conteúdo teste2', 'Ruan Miguel', '2016-09-17 07:46:00');
