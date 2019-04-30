<?php
    define('HOST', 'mysql.hostinger.com.br');
    define('USUARIO', 'u787430728_estac');
    define('SENHA', 'qwe123!@#');
    define('DB', 'u787430728_estac');
     
    $conexao = mysqli_connect(HOST, USUARIO, SENHA, DB) or die ('Não foi possível conectar');
?>