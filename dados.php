<?php
// definições de host, database, usuário e senha

$servername = "localhost:3306";
$username = "root";
$password = "1234";
$dbname = "php-tabela";

$con = new mysqli($servername, $username, $password, $dbname);

if (!$con) {
    die("Não foi possível conectar ao banco de dados" . mysqli_connect_error());
}


$sql = "SELECT * FROM `php-tabela`.alunos";

$result = mysqli_query($con, $sql);


$alunos = mysqli_fetch_assoc($result);

$total = mysqli_num_rows($result);

include('tabela.php');