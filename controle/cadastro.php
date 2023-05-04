<?php

$nome = $_POST["nome"];
$email = $_POST ["email"];
$fone = $_POST["fone"];
$senha = $_POST["senha"];
$enviar = $_POST["enviar"];

include("conexao.php");
 
if (isset($enviar)) {
$query = "INSERT INTO usuarios (id, nome, email, fone, senha ) VALUES ('NULL','$nome' , '$email', '$fone', '$senha')";
$query = mysqli_query($conect,$query);

echo '<script>
alert("cadastrado realizado com sucesso!");
window.location="index.php";
</script>';
}

?>