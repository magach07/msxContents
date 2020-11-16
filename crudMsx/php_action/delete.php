<?php 
// ABRINDO SESSÃO
    session_start();
// CONEXÃO
    require_once 'db_connect.php';

    if(isset($_POST['btn-deletar'])){
    $id = $_POST['id'];

        
    $sql = "DELETE FROM clientes WHERE id = '$id'";


    if(mysqli_query($connect, $sql)):
        header('Location: ../index.php');
        $_SESSION['mensagem'] = "Deletado com sucesso!";
    else:
        header('Location: ../index.php');
        $_SESSION['mensagem'] = "Erro ao deletar";
    endif;    
}
?>