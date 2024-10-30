<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="stylelog.css">
</head>

<body>
    
    <div class="container">
        <div class="centralizada"><h1 id="titulo">Login</h1></div>
        <form action="login.php" method="post">
            <p>
                <label for="login">Email</label><br>
                <input type="text" name="email" id="email" class="box" maxlength="150" required>
            </p>
            <p>
                <label for="senha">Senha</label><br>
                <input type="password" name="senha" id="senha" class="box" maxlength="50" minlength="4" required>
            </p>
            <input type="submit" value="Entrar" id="buttom">
        </form>
<p>Ainda não possui uma conta? <br>
Crie uma clicando <a href="logon.php"><strong>Aqui</strong></a>
</div>
</body>

</html>