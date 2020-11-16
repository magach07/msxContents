<?php 
// ABRINDO SESSÃO
    session_start();
// CONEXÃO
    require_once 'db_connect.php';

    if(isset($_POST['btn-cadastrar'])){
    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];
    $email = $_POST['email'];
    $idade = $_POST['idade'];
    
        
    $sql = "INSERT INTO clientes (nome, sobrenome, email, idade) VALUES ('$nome', '$sobrenome', '$email', '$idade')";


    if(mysqli_query($connect, $sql)):
        header('Location: ../index.php');
        $_SESSION['mensagem'] = "Cadastrado com sucesso!";
    else:
        header('Location: ../index.php');
        $_SESSION['mensagem'] = "Erro ao cadastrar";
    endif;    
}
?>