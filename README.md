# tabela-php

- Para visualizar o projeto, vai ser necessário criar um banco de dados.

- Abra o arquivo meubanco.sql e cole no mysqlshell.

- Depois de colocar o banco no server:
        - abra o vscode, no arquivo dados.php, DIGITE as informações do banco criado, após isso no terminal digite:
    `php -S localhost:8000`
- Entre no link https://localhost:8000/tabela.php . O projeto deve funcionar se os passos forem seguidos corretamente.


- Se o erro sqli aparecer: 
        -entre na pasta onde o php foi instalado e procure pelo arquivo php.ini.developer, renomeei o arquivo para php.ini, abra no vscode e tire o ';' da linha  928 onde tem : `extension=mysqli`
