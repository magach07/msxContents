<?php 
// ABRINDO SESSÃO
    session_start();
// CONEXÃO
    require_once 'db_connect.php';

    if(isset($_POST['btn-editar'])){
    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];
    $email = $_POST['email'];
    $idade = $_POST['idade'];

    $id = $_POST['id'];

        
    $sql = "UPDATE Materia SET nome = '$nome', sobrenome = '$sobrenome', email = '$email', idade = '$idade' WHERE id = '$id'";


    if(mysqli_query($connect, $sql)):
        header('Location: ../index.php');
        $_SESSION['mensagem'] = "Atualizado com sucesso!";
    else:
        header('Location: ../index.php');
        $_SESSION['mensagem'] = "Erro ao atualizar";
    endif;    
}
?>