<?php
ini_set("display_errors", 1);
ini_set("display_startup_errors", 1);
error_reporting(E_ALL);
include "templates/header.php";
include "includes/config.php";
?>
<main>
<h2>Lista de contatos</h2>
<table>
    <thead>
        <tr>
            <th>id</th>
            <th>Nome</th>
            <th>E-mail</th>
            <th>Telefone</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
        <?php
        
       $q = "SELECT id ,nome,telefone ,email  FROM contatos";
        $result = mysqli_query($conn, $q);
        while($row = mysqli_fetch_assoc($result)){
            echo "<tr>"; //crio a linha no html da pagina 
            echo "<td>{$row['id']}</td>";
            echo "<td>{$row['nome']}</td>";
            echo "<td>{$row['email']}</td>";
            echo "<td>{$row['telefone']}</td>";
            echo "<td><a href='editar.php?id={$row['id']}'>Editar</a> | <a href='excluir.php?id={$row['id']}'>Excluir</a> </td>";
            echo "</tr>";
        }
            
        
        ?>
    </tbody>
</table>
</main>
<?php
include "templates/footer.php";

?>