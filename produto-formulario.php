<?php require_once("cabecalho.php");?>
                <h1>Formulário de Cadastro</h1>
                <form action="adiciona-produto.php" method="post">
                <div class="form-group">
                    <label>Nome:</label>
                    <input type="text" name="nome" class="form-control">
                </div>
                <div class="form-group">
                    <label>Preco:</label>
                    <input type="number" name="preco" class="form-control">
                </div>
                <div class="form-group">
                    <label>Descrição:</label>
                    <textarea name="descricao" class="form-control"></textarea>
                </div>
                <input type="submit" value="Cadastrar" class="btn btn-success">
                </form>
<?php require_once("rodape.php");?>