<?php

$nome = $_POST["Nome"] ?? null;
$telefone = $_POST["Telefone"] ?? null;
$email = $_POST["E-mail"] ?? null;
$datanascimento = $_POST["DataNascimento"] ?? null;


if (empty($nome) || empty($telefone) || empty($email) || empty($datanascimento)) {
    echo "Preencha todos os campos!";
} else {
   
    $nome = htmlspecialchars($nome);
    $telefone = htmlspecialchars($telefone);
    $email = htmlspecialchars($email);
    $datanascimento = htmlspecialchars($datanascimento);

    
    $array1 = array(
        "nome" => $nome,
        "telefone" => $telefone,
        "email" => $email,
        "datanascimento" => $datanascimento,
    );

    
    echo "O contato foi criado com sucesso!<br>";

    
    echo "<pre>";
    print_r($array1);
    echo "</pre>";
}
?>