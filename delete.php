<?php


require_once 'db_connect.php';


if(isset($_POST['deletar'])):

    $id = mysqli_escape_string($connect, $_POST['id']);
    

    $sql = "DELETE FROM alunos WHERE id = '$id'";

    
    if(mysqli_query($connect, $sql)):
        header('Location: cadastrados.php?DeletadoComSucesso');
        
    else:
        header('Location: cadastrados.php?erroAoDeletar');
    endif;
endif;    