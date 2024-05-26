<?php
$servername = "localhost";  // Endereço do servidor
$username = "root";         // Nome de usuário do banco de dados
$password = "";             // Senha do banco de dados
$dbname = "formulario";  // Nome do banco de dados

// Cria a conexão
$conexao = new mysqli($servername, $username, $password, $dbname);

// Verifica a conexão
if ($conexao->connect_error) {
    die("Conexão falhou: " . $conexao->connect_error);
}

if (isset($_POST['botao_enviar'])) {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $fone = $_POST['fone'];
    $assunto = $_POST['assunto'];
    $descricao = $_POST['descricao'];

    $sql = "INSERT INTO chamados (nome, email, fone, assunto, descricao) VALUES ('$nome', '$email', '$fone', '$assunto', '$descricao')";

    if ($conexao->query($sql) === TRUE) {
    } else {
        echo "Erro: " . $sql . "<br>" . $conexao->error;
    }

    $conexao -> close();
}
?>