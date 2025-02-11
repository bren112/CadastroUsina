<?php
define('HOST', '127.0.0.1');
define('USUARIO', 'root');
define('SENHA', 'admin');
define('DB', 'users'); 

// Conexão com o banco de dados
$conexao = mysqli_connect(HOST, USUARIO, SENHA, DB);

// Verificar se a conexão foi bem-sucedida
if (!$conexao) {
    die("Não conseguiu conectar: " . mysqli_connect_error());
}
?>
