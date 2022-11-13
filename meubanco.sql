CREATE database `php-tabela`;

CREATE TABLE  `alunos` (
    `id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY ,
    `nome` VARCHAR( 150 ) NOT NULL ,
    `cidade` VARCHAR( 150 ) NOT NULL,
    `matricula` VARCHAR( 150 ) NOT NULL,
 );

 INSERT INTO `php-tabela`.`alunos` (`nome`, `cidade`, `matricula`)
    VALUES ('Aluno 1', 'cidade 1', '1'),
    VALUES ('Aluno 2', 'cidade 2', '12'),
    VALUES ('Aluno 3', 'cidade 3', '123'),
    VALUES ('Aluno 4', 'cidade 4', '1231');
    
