<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

     <style>

        body{
            background-color: #FFDEAD;
        }

        h1{
            text-size: 50px;
            color: #FF4500;
            text-shadow: 
               -1px -1px 0px #000, 
               -1px 1px 0px #000,                    
                1px -1px 0px #000,                  
                1px 0px 0px #000;
                text-align: center; 
        }

        img{
        width: 150px;
        height: 200px;
        }

        .wrapper{
            text-align: center;
            display: grid;
    grid-template-columns: 30fr 5fr 5fr 6fr;
    grid-template-rows: 100px;
    grid-gap: 10px;
        }

    </style>

</head>
<body>

<br>
<?php

session_start();
require('conexao.php');

if( $_SESSION['login'])
   {

    $login=$_SESSION['login'];

$sql = "SELECT * FROM usuarios WHERE email='$login'";
$res = mysqli_query($conect, $sql);      

 while ($r = mysqli_fetch_array($res)) {

   
 echo "Bem-Vindo(a):<font color='red'> ".$r['nome']."</font>"; 
}
 echo "<br>
 <a href='perfil.php'>Perfil</a><br>
     <a href='logout.php'>Sair</a>";
 }else{
     header('Location: index.php');//aqui vai para a página de login.
    }   

?>

<h1>Olá, Seja Bem vindo ao seu contole de estoque!</h1>
<br><br>
<div class="wrapper">
  <div class="box1"><a href="estoque.php"><img src="img/estoque.png"></a></div>
  <div class="box2"><a href="venda.php"><img src="img/venda.png"></a></div>
</div>

    
</body>
</html>