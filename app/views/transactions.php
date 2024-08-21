<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="/css/style.css">
    <script src="/js/scripts.js"></script>
</head>
<body>
    <h1>Transações</h1>
    <ul>
        <?php foreach ($transactions as $transaction): ?>
            <li><?= $transaction->description ?> - <?= $transaction->value ?></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
