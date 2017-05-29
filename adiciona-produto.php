<?php
require_once("cabecalho.php");
require_once("conexao.php");
require_once("banco-produto.php");
$nome = $_POST["nome"];
$preco = $_POST["preco"];
$descricao = $_POST["descricao"];
if(insereProduto($conexao, $nome, $preco, $descricao)){
    echo("<h1 class='alert-success text-center'>cadastrado com sucesso</h1>");
}else{
    echo("<h1 class='alert-danger'>Deu ruim</h1>");
}
?>

            <p class="lead">O nome cadastrado é (<?php echo($nome);?>) </p>
            <p class="lead">O preço cadastrado é (<?=$preco?>)</p>
            <p class="lead">A descrição Cadastrada é ( <?=$descricao?>)</p>
            
<?php require_once("rodape.php");?>