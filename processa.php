<?php
// Verifica se os dados foram enviados via POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = htmlspecialchars(trim($_POST["nome"]));
    $email = htmlspecialchars(trim($_POST["email"]));

    if (!empty($nome) && !empty($email)) {
        // Salva os dados em um arquivo
        $linha = "$nome | $email" . PHP_EOL;
        file_put_contents("usuarios.txt", $linha, FILE_APPEND);

        echo "<h2>Cadastro realizado com sucesso!</h2>";
        echo "<p><a href='index.html'>Voltar</a></p>";
    } else {
        echo "<p>Preencha todos os campos.</p>";
    }
} else {
    echo "<p>Requisição inválida.</p>";
}
?>
