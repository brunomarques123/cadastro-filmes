<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Filmes</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>Cadastro de Filmes</h1>

    <!-- Formulário para adicionar/alterar filmes -->
    <form action="processa_form.php" method="POST">
        <label for="titulo">Título:</label>
        <input type="text" id="titulo" name="titulo" required>
        <!-- Outros campos do filme (ano, diretor, etc.) -->
        <button type="submit">Salvar</button>
    </form>

    <!-- Tabela para listar filmes -->
    <?php
    // Inclui o arquivo PHP para listar os filmes
    include 'listar_filmes.php';
    ?>
</body>
</html>
