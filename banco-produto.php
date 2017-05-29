<?php
function insereProduto($conexao,$nome,$preco, $descricao){
        $sql = "insert into produtos(nome, preco, descricao) values('{$nome}', {$preco}, '{$descricao}')";
	$resultado = mysqli_query($conexao, $sql);
	return $resultado;
}
function listaProdutos($conexao){
	$sql = "SELECT * FROM produtos";
	$resultado = mysqli_query($conexao, $sql);
	$lista = array(); // ou [];
	while($produto = mysqli_fetch_assoc($resultado)){
		array_push($lista,$produto);
	}
	return $lista;
}
function removeProduto($conexao, $id){
	$sql="delete from produtos where id={$id}";
	$resultado = mysqli_query($conexao, $sql);
	return $resultado;
}