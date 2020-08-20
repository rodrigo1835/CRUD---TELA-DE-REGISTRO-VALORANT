<?php

include_once 'includes/header.php';
include_once 'db_connect.php';

?>

<div class="banner-2">
         
        <div class="center">
            <div class="text-banner"><a href="index.php"><h1>PÁGINA INICIAL</h1></div></a><div class="clear"></div>
                <div class="container">      
                    <?php
                                $sql = "SELECT * FROM alunos";
                                $resultado = mysqli_query($connect, $sql);
                                while($dados = mysqli_fetch_array($resultado)):
                            ?>
                                <div class="usuarios-registrados-container">
                                    <?php echo "<img src='$dados[foto];'"?><br>
                                    <p><span>Aluno: </span> <?php echo $dados['nome'];?></p>
                                    <p><span>Telefone: </span> <?php echo $dados['telefone'];?></p>
                                    <p><span>CPF: </span><?php echo $dados['cpf'];?></p>

                                    <div class="icons">
                                        
                                        <a href="editar.php?id=<?php echo $dados['id'];?>"><i class="fas fa-pen"></i></a>
                                        <a href="index.php"><i class="fas fa-plus"></i></a>
                                        <form method="POST" action="delete.php">
                                            <input type="hidden" name="id" value="<?php echo $dados['id'];?>">
                                            <button type="submit" name="deletar"><i class="fas fa-trash-alt"></i></button>
                                        </form>
                                        
                                        
 
                                        
                                    </div><!--Icons-->

                                </div><!--Usuarios-->

                                <?php endwhile ?>
                    
                </div><!--Container-->
                                       
        </div>
        
</div><!--Banner-->
 


</body>
</html>
