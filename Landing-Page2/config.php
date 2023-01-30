<?php

if (isset($_POST['submit'])) {
  $nome = $_POST['name'];
  $email = $_POST['email'];

  $servername = 'localhost';
  $username = 'root';
  $password = '';
  $dbname = 'lp_form';

  // Criar conexão
  $conn = new mysqli($servername, $username, $password, $dbname);

  // Verificar conexão
  if (!$conn) {
    die("Conexão falhou: " . mysqli_connect_error());
  }

  $sql = "INSERT INTO alunos (name, email)
  VALUES ('$nome', '$email')";

  if (mysqli_query($conn, $sql)) {
    echo "Dados salvos com sucesso.";
  } else {
    echo "Erro ao salvar os dados: " . mysqli_error($conn);
  }

  // Fechar conexão
  mysqli_close($conn);
}

?>