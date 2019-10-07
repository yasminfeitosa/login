<?php

  $servername = "localhost";
  $username = "usuario";
  $password = "webmaster123";
  $dbname = "bd_verao";

  try{

    $con = new PDO ("mysql:host=$servername;dbname=$dbname", $username, $password);
  	$con->setAttribute (PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo "OK ";

  }

  catch(PDOException $erro) {

  	echo "Falha na Conexao: " . $erro->getMessage();

  }
?>
