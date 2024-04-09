<?php
// Operação de leitura para listar os filmes na tabela
$sql = "SELECT id, titulo FROM filmes";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Exibe os filmes em uma tabela HTML
    echo "<table>";
    echo "<tr><th>ID</th><th>Título</th><th>Ações</th></tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>".$row["id"]."</td>";
        echo "<td>".$row["titulo"]."</td>";
        echo "<td><a href='processa_form.php?action=update&id=".$row["id"]."'>Editar</a> | <a href='processa_form.php?action=delete&id=".$row["id"]."'>Excluir</a></td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "Nenhum filme encontrado.";
}
?>
