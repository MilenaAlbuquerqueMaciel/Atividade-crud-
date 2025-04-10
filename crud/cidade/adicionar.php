<?php
include "../templates/header.php";
?>

<main>
    <h2>Adicionar nova cidade</h2>
    <hr />

    <form action="process.php" method="post">
        <input type="hidden" name="acao" value="add" />

        <label for="nome">Nome da Cidade:</label>
        <input type="text" name="nome" required /><br />
        <br />

        <label for="estado">Nome do Estado:</label>
        <input type="text" name="estado" required /><br />
        <br />

        <button type="submit">Salvar</button>
    </form>
</main>

<?php
include "../templates/footer.php";
?>