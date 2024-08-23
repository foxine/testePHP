<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Login</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container">
        <div class="left-panel">
            <div class="logo">
                <img src="../../../public/imgs/layout-test-assets/ball.png" alt="Logo BOOOL">
            </div>
            <h1>Olá!<br>Entre com seu login e senha para começar.</h1>
            <form>
                <input type="text" placeholder="E-mail" required>
                <input type="password" placeholder="Password" required>
                <div class="error-message" style="display:none;">Dados inválidos!</div>
                <div class="success-message" style="display:none;">Bem vindo(a)!</div>
                <button type="submit">Entrar</button>
            </form>
        </div>
        <div class="right-panel"></div>
    </div>
    <script src="js/scripts.js"></script>
</body>
</html>
