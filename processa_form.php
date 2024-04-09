<?php
// Conexão com o banco de dados
$servername = "localhost";
$username = "seu_usuario";
$password = "sua_senha";
$dbname = "nome_do_banco";

// Cria a conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica se a conexão foi estabelecida com sucesso
if ($conn->connect_error) {
    die("Erro na conexão: " . $conn->connect_error);
}

// Operação de inserção (Create) para adicionar filme
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $titulo = $_POST['titulo'];
    // Processamento dos outros campos do filme

    $sql = "INSERT INTO filmes (titulo) VALUES ('$titulo')";
    if ($conn->query($sql) === TRUE) {
        echo "Filme adicionado com sucesso.";
    } else {
        echo "Erro ao adicionar filme: " . $conn->error;
    }
}


// Operação de atualização (Update) para alterar informações de um filme
if (isset($_GET['id']) && isset($_GET['action']) && $_GET['action'] == 'update') {
    $id = $_GET['id'];
    // Consulta SQL para atualizar informações do filme com o ID específico
    $titulo_atualizado = $_POST['titulo']; // Supondo que o campo do formulário seja 'titulo'
    $sql = "UPDATE filmes SET titulo = '$titulo_atualizado' WHERE id = $id";

    if ($conn->query($sql) === TRUE) {
        echo "Registro atualizado com sucesso.";
    } else {
        echo "Erro ao atualizar registro: " . $conn->error;
    }
}

// Operação de exclusão (Delete) para remover um filme do banco de dados
if (isset($_GET['id']) && isset($_GET['action']) && $_GET['action'] == 'delete') {
    $id = $_GET['id'];
    // Consulta SQL para excluir o filme com o ID específico
    $sql = "DELETE FROM filmes WHERE id = $id";

    if ($conn->query($sql) === TRUE) {
        echo "Registro excluído com sucesso.";
    } else {
        echo "Erro ao excluir registro: " . $conn->error;
    }
}
?>


