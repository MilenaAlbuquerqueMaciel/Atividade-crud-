<?php
include "../templates/header.php"; 
include "../includes/config.php"; 

$id = (int)$_GET['id'];
$sql = "SELECT * FROM cidades WHERE id = $id";
$result = mysqli_query($conn, $sql);
$cidades = mysqli_fetch_assoc($result);
?>

<main>
    <h2>Editar Cidade</h2>
    <hr/>
    <form action="process.php" method='post'>
        <input type="hidden" name="acao" value="edit"/>
        <input type="hidden" name="id" value="<?php echo $cidades['id'] ?>"/>

        <label for="nome">Nome de Cidade: </label>
        <input type="text" name="nome" value="<?php echo $cidades['nome'] ?>" required/><br/>

        <br/>

        <label for="estado">Nome de Estado: </label>
        <input type="text" name="estado" value="<?php echo $cidades['estado'] ?>" required/><br/>

        <br/>

        <button type="submit">Salvar</button>
    </form>
</main>

<?php include "../templates/footer.php"; ?> 