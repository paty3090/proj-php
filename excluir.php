<?php
$strcon = mysqli_connect(‘localhost’,’carla’,’123′,’banco_teste’) or die(‘Erro ao conectar ao banco de dados requisitado’);
$nome = $_POST[‘registro’];
$sql = “DELETE FROM Cadastro WHERE NomeCliente=’$registro'”; 
mysqli_query($strcon,$sql) or die(“Erro ao tentar excluir registro”);
echo “Cliente excluído”;
mysqli_close($strcon);

?>
