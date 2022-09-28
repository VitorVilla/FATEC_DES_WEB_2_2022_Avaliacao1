<?php
session_start();

if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("location: index.php");
    exit;
}
?>

<?php
if (isset($_POST['fname']) && isset($_POST['gen']) && isset($_POST['dur'])) {

    $filename = "cadastro.txt";
    if (!file_exists("cadastro.txt")) {
        $handle = fopen("cadastro.txt", "w");
    } else {
        $handle = fopen("cadastro.txt", "a");
    }

    $_POST["fname"];
    $_POST["gen"];
    $_POST["dur"];

    fwrite($handle, "Nome do filme: " . $_POST["fname"] . " | Gênero: " . $_POST["gen"] . " | Duração: " . $_POST["dur"] . "<br>");
    fflush($handle);
    fclose($handle);
}
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style type="text/css">
        body {
            font: 14px sans-serif;
            text-align: center;
        }
    </style>
    <title>Cadastro dos Filmes</title>

</head>

<body>
    <br>
    <form method="post">
        <div class="form-group">
            <label for="fname">Nome do filme:</label>
            <input type="text" id="fname" name="fname"><br><br>
            <label for="gen">Gênero:</label>
            <input type="text" id="gen" name="gen"><br><br>
            <label for="dur">Duração:</label>
            <input type="text" id="dur" name="dur"><br><br>
            <input class="btn btn-danger" type="submit" value="Enviar">
        </div>
    </form>
    <br>
    <a href="filmes.php" class="btn btn-danger">Ver meus filmes</a>
</body>

</html>