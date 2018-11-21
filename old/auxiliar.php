<?php

$emailcadastrado = $_GET["emailcadastrado"];
$senha1 = $_GET["senha1"];
$email = $_GET["email"];

echo "O usuário ja foi cadastrado então os dados são $emailcadastrado e $senha1";
echo "O usuário ainda não foi cadastrado $email";
?>