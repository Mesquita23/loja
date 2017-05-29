<?php require_once("cabecalho.php"); // require_once
require_once("conexao.php"); 
require_once("banco-produto.php");
?>
<h1>Lista de produtos</h1>
<?php
$produtos = listaProdutos($conexao);?>
<table class="table table-striped table-hover table-bordered">
	<thead>
		<tr>
			<th>ID</th>
			<th>Nome</th>
			<th>Preco</th>
                        <th>Descrição</th>
			<th>Ações</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach($produtos as $prod){?>
	<tr>
		<td><?=$prod["id"]?></td>
		<td><?=$prod["nome"]?></td>
		<td><?=$prod["preco"]?></td>
                <td><?= substr($prod["descricao"],0, 40)?></td>
                <td>
                    <form action="remove-produto.php" method="post">
                        <input type="hidden" name="id" value="<?=$prod["id"]?>">
                        <button class="btn btn-danger" ><span class="glyphicon glyphicon-trash"></span>Remover</button>       
                    </form>
                </td>
		
	</tr>
	<?php } ?>

	</tbody>
</table>



<?php require_once("rodape.php");?>