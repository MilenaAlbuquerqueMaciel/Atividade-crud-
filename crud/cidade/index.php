<?php
include "../templates/header.php"; 
include "../includes/config.php"; 
echo "<h1>Lista de Cidades</h1>";
?>

<main>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Estado</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $q = "SELECT id, nome, estado FROM cidades";
            $result = mysqli_query($conn, $q);

            if ($result && mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>{$row['id']}</td>";
                    echo "<td>{$row['nome']}</td>";
                    echo "<td>{$row['estado']}</td>";
                    echo "<td><a href='editar.php?id=" . mysqli_real_escape_string($conn, $row['id']) . "'>Editar</a> | <a href='excluir.php?id=" . mysqli_real_escape_string($conn, $row['id']) . "'>Excluir</a></td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='4'>Nenhuma cidade encontrada.</td></tr>";
            }
            ?>
        </tbody>
    </table>

</main>

<?php
include "../templates/footer.php";
?>