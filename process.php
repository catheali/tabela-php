<?php 
include_once 'dados.php';

if(isset($_POST['enviar'])){
$nome = $_POST['nome'];
$cidade = $_POST['cidade'];
$matricula = $_POST['matricula'];

$sql = "INSERT INTO `php-tabela`.`alunos` (`nome`, `cidade`, `matricula`) VALUES ('{$nome}', '{$cidade}', '{$matricula}');";

$result = mysqli_query($con, $sql);
};

?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<style>
    body{
        margin-top: 10px;
    }
</style>
<div class="container">
    <h1> Alunos</h1> 
    <a href="http://localhost:8000/tabela.php"> Voltar para listagem</a>
<hr>
<div class="container">
    <h3>Cadastrar usuario</h3>
   <form method="POST" action="process.php">
    <div class="mb-3">
    <label >Nome:<br>
    <input type="text" name="nome" placeholder="Digite o nome" required>
    </label>
    </div>
    <div class="mb-3">
    <label >Cidade:<br>
    <input type="text" name="cidade" placeholder="Digite a cidade" required>
    </label>
    </div>
    <div class="mb-3">
    <label >Matricula :<br>
    <input type="text" name="matricula" placeholder="Digite a matricula" required>
    </label>
    <br>
    <input type="submit" class="btn btn-primary mt-2" name="enviar">
   </div>   
   </form>