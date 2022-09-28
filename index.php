<?php


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    session_start();
    if ($_POST['username'] == 'fatec' and $_POST['password'] == 'araras') {
        $_SESSION['loggedin'] = TRUE;
        $_SESSION["username"] = 'Vitor Villa';
        header("location: pag1.php");
    } else {
        $_SESSION['loggedin'] = FALSE;
    }
}
?>


<html lang="pt_BR">

<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body {
            font: 14px sans-serif;
            text-align: center;
        }
    </style>
</head>


<body>
    <div class="wrapper">
        <h2>Página de Login</h2>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group">
                <label>Username</label>
                <input type="text" name="username" class="form-control" value="">
                <span class="help-block"></span>
            </div>
            <br>
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" class="form-control" value="">
                <span class="help-block"></span>
            </div>
            <br>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Acessar">
            </div>
        </form>
    </div>
</body>

</html>