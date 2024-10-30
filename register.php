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
        
        $host = 'localhost';
        $db = 'registros';
        $user = 'root';
        $pass = '';


        $conn = new mysqli($host, $user, $pass, $db);

        if ($conn->connect_error) {
            die("Conexão falhou: " . $conn->connect_error);
        }

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nome = $_POST['nome'];
            $email = $_POST['email'];
            $senha = $_POST['senha'];
            $confirmarSenha = $_POST['confirmPassword'];

            if ($senha !== $confirmarSenha) {
                echo "As senhas não coincidem!<br>";
        ?>
                <hr>
                <p><strong><a href="logon.php">Tentar novamente</a></strong></p>
        <?php
                exit;
            }

            $senhaHash = password_hash($senha, PASSWORD_DEFAULT);

            $stmt = $conn->prepare("SELECT * FROM usuarios WHERE email = ?");
            $stmt->bind_param("s", $email);
            $stmt->execute();
            $result = $stmt->get_result();

            if ($result->num_rows > 0) {
                echo "Email já registrado!";
            } else {

                $stmt = $conn->prepare("INSERT INTO usuarios (nome, email, senha) VALUES (?, ?, ?)");
                $stmt->bind_param("sss", $nome, $email, $senhaHash);


                if ($stmt->execute()) {
                    echo "Usuário registrado com sucesso!";
                } else {
                    echo "Erro ao registrar usuário!";
                }
            }
        }


        $stmt->close();
        $conn->close();
        ?>
        <hr>
        <p><strong><a href="index.php">Voltar para a tela de login</a></strong></p>
    </div>
</body>

</html>