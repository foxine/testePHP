<?php require_once __DIR__ . '/../layouts/header.php'; ?>

<div class="login-container">
    <h2>Ola!</h2>
    <p>Entre com seu login e senha para começar.</p>
    <form method="post" action="/login">
        <input type="text" name="username" placeholder="Username">
        <input type="password" name="password" placeholder="Password">
        <button type="submit">Entrar</button>
    </form>
</div>

<?php require_once __DIR__ . '/../layouts/footer.php'; ?>
