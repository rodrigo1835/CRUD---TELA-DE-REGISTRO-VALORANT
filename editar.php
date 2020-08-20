<?php

include_once 'db_connect.php';
include_once 'includes/header.php';

if(isset($_GET['id'])):
    $id = mysqli_escape_string($connect, $_GET['id']);

    $sql = "SELECT * FROM alunos WHERE id = '$id'";
    $resultado = mysqli_query($connect, $sql);
    $dados = mysqli_fetch_array($resultado);
endif;
?>

<div class="banner">
        <div class="center">
            <div class="text-banner"><h1>CRUD - APITANO</h1></div><div class="clear"></div>   
            <div class="content">
                <div class="form-create">
                    <h2>Edite seus dados:</h2>
                    
                    <form action="update.php" method="POST">
                        <input type="hidden" name="id" value="<?php echo $dados['id']; ?>"/>
                        <div class="form-content">
                            <input id="nome" name="nome" type="text" value="<?php echo $dados['nome']; ?>">
                            <input id="foto" name="foto"  value="<?php echo $dados['foto']; ?>">              
                            <input id="telefone" name="telefone" type="number" value="<?php echo $dados['telefone']; ?>"> 
                            <input id="cpf" name="cpf" type="text" value="<?php echo $dados['cpf']; ?>">
                            
                        </div><!--Form-content-->
                        <button type="submit" name="editar"><i class="fas fa-arrow-circle-right"></i></button>    
                    </form>
                    <div class="link"><a href="cadastrados.php">Usuarios cadastrados</a><i class="fas fa-arrow-left"></i></div>
                </div><!--Form-Crate-->
                <div class="clear"></div>
            </div><!--Content-->
        </div>
</div><!--Banner-->



</body>
</html>




