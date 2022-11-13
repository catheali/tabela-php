
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<style>
    body{
        margin-top: 10px;
    }
</style>
<div class="container">
    <h1> Alunos</h1>
    <hr>
    <table class="table table-striped table-hover">
        <thead class="table-dark">
            <tr>
            <th>Nome</th>
            <th>Cidade</th>
            <th>Matricula</th>
            </tr>
        </thead>
        <tbody>

        <?php 
    
    if($total > 0) {
		// inicia o loop que vai mostrar todos os dados
		do {
?> 
		<tr>
                    <td><?=$alunos['nome']?></td>
                    <td> <?=$alunos['cidade']?></td>
                    <td> <?=$alunos['matricula']?></td>
                </tr>
<?php
		// finaliza o loop que vai mostrar os dados
		} while($alunos = mysqli_fetch_assoc($result));
	// fim do if
	}
?>
        </tbody>
    </table>
</div>