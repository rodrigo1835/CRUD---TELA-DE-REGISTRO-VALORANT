<?php

include_once 'db_connect.php';
include_once 'includes/header.php';
?>

<div class="banner">
        <div class="center">
            <div class="text-banner"><h1>CRUD - APITANO</h1></div><div class="clear"></div>   
            <div class="content">
                <div class="form-create">
                    <h2>Ensira seus dados:</h2>

                    <form action="create.php" method="POST">
                        <div class="form-content">
                            <input id="nome" name="nome" placeholder="Nome" type="text">
                            <input id="foto" name="foto" placeholder="Sua Foto, Obs: 'Comece com Https://'"type="url" >              
                            <input id="telefone" name="telefone" placeholder="Número" type="number"> 
                            <input id="cpf" name="cpf" placeholder="CPF" type="text">
                            
                        </div><!--Form-content-->
                        <button type="submit" name="incluir"><i class="fas fa-arrow-circle-right"></i></button>    
                    </form>
                    <div class="link"><a href="cadastrados.php">Usuarios cadastrados</a><i class="fas fa-arrow-left"></i></div>
                </div><!--Form-Crate-->
                <div class="clear"></div>
            </div><!--Content-->
        </div>
</div><!--Banner-->



</body>
</html>




