<?php

// Configurações do banco de dados
$servername = "localhost";
$username = "root"; 
$password = "";    
$dbname = "meu_banco"; // Certifique-se de que este é o nome correto
$port = 3306;

// Conectar ao banco de dados
$conn = new mysqli($servername, $username, $password, $dbname, $port);

// Verificar a conexão
if ($conn->connect_error) {
    // Redireciona com status de erro, mas sem mostrar detalhes
    header("Location: quiz.html?status=error");
    exit();
}

// Resgatar os dados do formulário
$melhor_professor = $_POST['melhor_professor'];
$continuar_profissao = $_POST['continuar_profissao'];
$fazer_faculdade = $_POST['fazer_faculdade'];
$fazer_concurso_publico = $_POST['fazer_concurso_publico'];
$area_atuacao_array = isset($_POST['area_atuacao']) ? $_POST['area_atuacao'] : [];
$area_atuacao = implode(", ", $area_atuacao_array);

// Preparar e executar a query SQL
// Nomes das colunas ajustados para corresponder ao seu db.sql
$sql = "INSERT INTO respostas_quiz (professor, profissao, faculdade, concurso, area) VALUES (?, ?, ?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("sssss", $melhor_professor, $continuar_profissao, $fazer_faculdade, $fazer_concurso_publico, $area_atuacao);

if ($stmt->execute()) {
    // Redireciona com status de sucesso
    header("Location: quiz.html?status=success");
    exit();
} else {
    // Redireciona com status de erro
    header("Location: quiz.html?status=error");
    exit();
}

// Fechar a conexão
$stmt->close();
$conn->close();

?>