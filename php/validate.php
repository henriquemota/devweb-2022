<?php 
  $login = $_POST['login'];
  $senha = $_POST['senha'];

  if ($login === 'admin' && $senha === 'senha') {
    echo 'bem vindo ' . $login;
  } else {    
    echo 'usuário ou senha inválidos.';
  }
?>