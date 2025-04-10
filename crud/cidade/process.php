<?php
include "../includes/config.php";

if (isset($_POST['acao'])) {
    $acao = $_POST['acao'];
    $nome = mysqli_real_escape_string($conn, $_POST["nome"]);
    $estado = mysqli_real_escape_string($conn, $_POST["estado"]);

    if ($acao === 'add') {
        $sql = "INSERT INTO cidades(nome, estado) VALUES ('$nome', '$estado')";
        if (mysqli_query($conn, $sql)) {
            header("Location: index.php?sucesso=1");
        } else {
            header("Location: index.php?erro=1");
        }
    } elseif ($acao === 'edit') {
        $id = (int)$_POST["id"];

        $verifica = "SELECT id FROM cidades WHERE id = $id";
        $resultado = mysqli_query($conn, $verifica);
        if (mysqli_num_rows($resultado) > 0) {
            $sql = "UPDATE cidades SET nome = '$nome', estado = '$estado' WHERE id = $id";
            if (mysqli_query($conn, $sql)) {
                header("Location: index.php?sucesso=2");
            } else {
                header("Location: index.php?erro=2");
            }
        } else {
            header("Location: index.php?erro=3");
        }
    }
}
?>