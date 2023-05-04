<?php 


/// session_start inicia a sessão 
require('conexao.php');
session_start();
$usuario = $_POST['email'];
$senha = $_POST['senha'];
// If form submitted, insert values into the database.
if (isset($_POST['login'])){
        // removes backslashes
	        $query = "SELECT * FROM usuarios WHERE email='$usuario'
and senha='$senha'";
	$result = mysqli_query($conect,$query) or die(mysql_error());
	$rows = mysqli_num_rows($result);
	
        if($rows==1){
			  $_SESSION['login'] = $usuario;
              
                        // Redirect user to index.php
	    header("Location: inicio.php");
         }else{
	echo "<div class='form'>
<h3>Usuário/ou senha incorreta.</h3>
<br/>Clique para fazer o login <a href='index.php'>Login</a></div>";

	}
	
	
}
?>