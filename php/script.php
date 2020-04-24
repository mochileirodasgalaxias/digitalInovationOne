<?php
session_start();

$nome = $_POST['nome'];
$idade = $_POST['idade'];
/*$categorias[] = ['Infantil','Adolescente','Adulto','Idoso'];*/

if (empty($nome)) {
    $_SESSION['mensagem'] = '<p>O nome não pode ser vazio</p>';
    header('Location: index.php');
}

if (strlen($nome)< 3) {
    echo "O nome deve ter mais de 3 caracteres";
    return;
}

if (strlen($nome) > 40) {
    echo "O nome é muito extenso";
    return;
}

if (!is_numeric($idade)) {
    echo "Digite uma idade";
    return;
}
