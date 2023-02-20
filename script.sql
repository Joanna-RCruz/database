/* Script de banco de dados MySQL */

CREATE DATABASE trab_bancodados;

CREATE TABLE `trab_bancodados`.`pendências` (
    `id` INT NOT NULL AUTO_INCREMENT ,
    `nome` VARCHAR(60) NOT NULL ,
    `descricao` VARCHAR(300) NOT NULL ,
    `prazo_data` DATE NOT NULL ,
    PRIMARY KEY (`id`)
) ENGINE = InnoDB;

INSERT INTO `trab_bancodados`.`pendências` (
	`nome`,
	`descricao`,
	`prazo_data`
) VALUES (
	'Trabalho WEB2',
	'Terminar trabalho de Web2 sobre banco de dados',
	'2022-12-16'
);