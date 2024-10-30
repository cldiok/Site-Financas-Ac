<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Aliado Financeiro</title>
    <link rel="stylesheet" href="styleprob.css">
</head>

<body>
    <div class="container">
        
        <?php

        session_start();

        $host = 'localhost';
        $db = 'registros';
        $user = 'root';
        $pass = '';

        $conn = new mysqli($host, $user, $pass, $db);

        if ($conn->connect_error) {
            die("Conexão falhou: " . $conn->connect_error);
        }

        $login_foi_sucesso = false;

        $email = $_POST['email'];
        $senha = $_POST['senha'];

        $consultaUsuario = $conn->prepare("SELECT * FROM usuarios WHERE email = ?");
        $consultaUsuario->bind_param("s", $email);
        $consultaUsuario->execute();
        $result = $consultaUsuario->get_result();

        if ($result->num_rows > 0) {
            $usuario = $result->fetch_assoc();

            if (password_verify($senha, $usuario['senha'])) {
                $login_foi_sucesso = true;

                $_SESSION['usuario_id'] = $usuario['ID'];
            } else {
                header("Location: errosenha.php");
            }
        } else {
            echo "Usuário não encontrado!";
        }

        $consultaUsuario->close();

        $conn->close();

        if ($login_foi_sucesso) {
            session_start();
            header('Location: Site.php');
            exit();
        }
        ?>

        <hr>
        <p><strong><a href="logon.php">Criar uma conta</a></strong></p>
    </div>
</body>

</html>