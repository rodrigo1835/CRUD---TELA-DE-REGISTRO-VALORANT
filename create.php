<?php


require_once 'db_connect.php';


if(isset($_POST['incluir'])):
    $nome = mysqli_escape_string($connect, $_POST['nome']);
    $foto = mysqli_escape_string($connect, $_POST['foto']);
    $telefone = mysqli_escape_string($connect, $_POST['telefone']);
    $cpf = mysqli_escape_string($connect, $_POST['cpf']);
    

    $sql = "INSERT INTO alunos (nome, foto, telefone, cpf) VALUES ('$nome', '$foto', '$telefone', '$cpf')";

    if(mysqli_query($connect, $sql)):

        header('Location: cadastrados.php');
    else:

        header('Location: cadastrados.php');
    endif;
endif;    