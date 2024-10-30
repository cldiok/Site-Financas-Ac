<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet" href="stylelog.css">
</head>

<body>
    <div class="container">
        <div class="centralizada">
            <h1 id="titulo">Registre-se</h1>
        </div>
        <p id="cor"><strong>*Preencha todos os campos*</strong></p>
        <form action="register.php" method="post">
            <p>
                <Label>Nome</Label><br>
                <input type="text" name="nome" id="nome" class="box" placeholder="Como deseja ser chamado" maxlength="150" required>
            </p>
            <p>
                <label for="email">Email</label><br>
                <input type="email" name="email" id="email" class="box" placeholder="Seu@email.com" maxlength="150" required>
            </p>
            <p>
            <label for="senha">Senha</label><br>
                <input type="password" name="senha" id="senha" class="box" placeholder="*****" maxlength="50" minlength="4" required>
            </p>
            <p>
            <label for="confirmPassword">Confirme sua senha</label><br>
                <input type="password" name="confirmPassword" id="confirmPassword" class="box" placeholder="*****" maxlength="150" minlength="4" required>
            </p>
            <p>‎ </p> <!--caractere invisível para dar espaço-->
            <input type="checkbox" name="termos" id="termos" class="box" required> Eu estou de acordo com os <a href="termos.html"><strong>Termos e Condições</strong></a></input>

            <input type="submit" value="Registrar" id="buttom">
        </form>
        <p>Já possui uma conta? <br>
            Acesse clicando <a href="index.php"><strong>Aqui</strong></a></p>
    </div>
    
</body>

</html>