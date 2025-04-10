<?php
include "includes/config.php";

if(isset($_POST['acao'])){
  $acao = $_POST['acao'];
  $nome = mysqli_real_escape_string($conn, $_POST["nome"]);
  $email = mysqli_real_escape_string($conn, $_POST["email"]);
  $telefone = mysqli_real_escape_string($conn, $_POST["telefone"]);
 
  if($acao === 'add'){
    echo "Salvando novo contato";
    $sql = "INSERT INTO contatos(nome, email, telefone) ";
    $sql.="VALUES('$nome', '$email', ' $telefone')";
    mysqli_query($conn, $sql);
    header("Location:index.php");
  }elseif($acao === 'edit'){
    echo "Editando o contato existente";
  }
}
?>