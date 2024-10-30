<?php
// Inicia a sessão se ainda não estiver iniciada
    if (!isset($_SESSION['ID'])) {
    session_start();
}

// Verifica se o usuário está logado
    if (!isset($_SESSION['usuario_id'])) {
    header("Location: erro.php");
}
