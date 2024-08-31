<?php
// Exemplo simples de autenticação
$usuario_correto = "admin@example.com";
$senha_correta = "1234";

// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $login = $_POST['login'];
    $senha = $_POST['senha'];

    // Verifica se as credenciais estão corretas
    if ($login === $usuario_correto && $senha === $senha_correta) {
        echo "Login bem-sucedido!";
        // Aqui você poderia redirecionar para uma página protegida
    } else {
        echo "Login ou senha incorretos!";
    }
}
?>

