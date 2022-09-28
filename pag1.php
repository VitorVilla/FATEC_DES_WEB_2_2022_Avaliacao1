<?php
session_start();

if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("location: index.php");
    exit;
}
?>

<html lang="pt_BR">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body {
            font: 14px sans-serif;
            text-align: center;
        }
    </style>
    <title>Login</title>
</head>

<!DOCTYPE html>
<html lang="pt_BR">

<head>
    <meta charset="UTF-8">
    <title>Bem vindo</title>
</head>

<body>
    <div class="page-header">
        <h1>Olá, <b><?php echo htmlspecialchars($_SESSION["username"]); ?>
                <br>
                <br>
            </b>Seja Bem vindo para nosso cadastro de filmes :).</h1>
    </div>
    <p>
        <a href="cadastro.php" class="btn btn-primary">Cadastro de filmes</a>
        <br><br><br>

    <p style="color: red;">DANGER ZONE!!</p>
    <a href="logout.php" class="btn btn-primary">Sair da conta</a>
    </p>
</body>

</html>