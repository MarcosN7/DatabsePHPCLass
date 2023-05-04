<!DOCTYPE html>

<html lang="pt-br">

    <head>

        <meta charset="UTF-8">

        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <meta name="viewport"content="width=device-width, initial-scale=1.0">

        

        <title>Login</title>

        <style>
            body {

padding: 0;

margin: 0;

background-color: #F4A460;

}

#login {

display: flex;

align-items: center;

justify-content: center;

height: 100vh;

font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;

}

.card {

background-color: rgba(19, 19, 19, 0.3);

padding: 40px;

border-radius: 2px;

width:280px;

}

.card-header {

padding-bottom: 50px;

opacity: 0.8;

color: #fff;

}

.card-header::after {

content: "";

width: 70px;

height: 1px;

background-color: #fff;

display: block;

margin-top: -17px;

margin-left: -5px;

}

.card-content label {

color: #fff;

font-size: 12px;

opacity: 0.8;

}

.card-content-area {

display: flex;

flex-direction: column;

padding:10px 0;

}

.card-content-area input {

margin-top: 10px;

padding:0 5px;

background-color: transparent;

border:none;

border-bottom: 1px solid #000;

outline: none;

color: #fff;

}

.card-footer {

display: flex;

flex-direction: column;

}

.card-footer .submit{

width: 100%;

height: 40px;

background-color: #000;

border:none;

color:#e1e1e1;

margin: 10px 0;

}

.card-footer a {

text-align: center;

font-size: 12px;

opacity: 0.8;

color: #fff;

text-decoration: none;

}
        </style>

    </head>

    <body>

    
        <div id="login">

            <form class="card" method="POST" action="teste_login.php">

                <div class="card-header">
               

                    <h2>Login</h2>

                </div>

                <div class="card-content">

                    <div class="card-content-area">

                   
                        <label for="usuario">E-mail</label>

                        <input type="email" name="email" id="usuario" >

                    </div>

                    <div class="card-content-area">

                        <label for="password">Senha</label>

                        <input type="password" name="senha" id="password" >

                    </div>

                </div>

                <div class="card-footer">

                    <input type="submit" value="login" name="login" class="submit">

                
              
                    <a href="cadastro_usuario.php">Ainda não é cadastrado?</a>

                </div>

            </form>

        </div>

    </body>

</html>