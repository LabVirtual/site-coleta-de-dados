<?php

// Conexão
require_once 'db_connect.php';

// Sessão
session_start();

if(isset($_POST['btn'])){



  $socket = fsockopen('udp://pool.ntp.br', 123, $err_no, $err_str, 1);
  if ($socket)
  {
      if (fwrite($socket, chr(bindec('00'.sprintf('%03d', decbin(3)).'011')).str_repeat(chr(0x0), 39).pack('N', time()).pack("N", 0)))
      {
          stream_set_timeout($socket, 1);
          $unpack0 = unpack("N12", fread($socket, 48));
          $dt_cadastro =  date('Y-m-d', $unpack0[7]);
      }
      fclose($socket);
  }

  $erros = array();

  $nome = mysqli_escape_string($conn,$_POST['nome']);
  $sobrenome = mysqli_escape_string($conn,$_POST['sobrenome']);
  $email1 = mysqli_escape_string($conn,$_POST['email1']);
  $email12 = mysqli_escape_string($conn,$_POST['email2']);
  $email = $email1.'@'.$email12;
  if(mysqli_escape_string($conn,$_POST['sexo']) == 'Masculino'){
    $sexo = 'M';
  } else{
    $sexo = 'F';
  }
  $nacionalidade = mysqli_escape_string($conn,$_POST['nacionalidade']);
  $cidade = mysqli_escape_string($conn,$_POST['cidade']);
  $estado = mysqli_escape_string($conn,$_POST['estado']);
  $cpf = mysqli_escape_string($conn,$_POST['cpf']);
  $senha = mysqli_escape_string($conn,$_POST['senha']);
  $dt_nascimento = mysqli_escape_string($conn,$_POST['nascimento']);


  $sql = "INSERT INTO dataset.tb_usuario(nome, sobrenome, cpf, senha, email, sexo, nacionalidade, cidade, uf, dt_nascimento, dt_cadastro) VALUES('$nome','$sobrenome',$cpf,'$senha','$email','$sexo','$nacionalidade','$cidade','$estado','$dt_nascimento','$dt_cadastro')";

  //echo "$sql";

  if (mysqli_query($conn, $sql)) {
      header('Location: ../login/login.php');
  } else {
      echo "Error: ";
  }

  mysqli_close($conn);

}
?>
