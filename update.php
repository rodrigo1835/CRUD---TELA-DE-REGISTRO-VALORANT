<?php


require_once 'db_connect.php';


if(isset($_POST['editar'])):
    $nome = mysqli_escape_string($connect, $_POST['nome']);
    $foto = mysqli_escape_string($connect, $_POST['foto']);
    $telefone = mysqli_escape_string($connect, $_POST['telefone']);
    $cpf = mysqli_escape_string($connect, $_POST['cpf']);

    $id = mysqli_escape_string($connect, $_POST['id']);
    

    $sql = "UPDATE alunos SET nome = '$nome', foto = '$foto', telefone = '$telefone', cpf = '$cpf' WHERE id = '$id'";

    
    if(mysqli_query($connect, $sql)):
        header('Location: cadastrados.php?sucesso');
        
    else:
        header('Location: cadastrados.php?erro');
    endif;
endif;    