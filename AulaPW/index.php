<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="estilo.css">
        <title>Login</title>
    </head>
    <body>
        <div class="global">
            <!--Aqui temos o formulario-->

            <form name="" method="post" action="">
                <label>Usuário: <input type="text" name="user" /></label><br><br>
                <label>Senha: <input type="password" name="pass" /></label><br><br>
                <input type="submit" name="submit" value="Logar!"/>
            </form>

            <?php

                /*Declaração de Variaveis */
                $user = @$_REQUEST ['user'];
                $pass = @$_REQUEST ['pass'];
                $submit = @$_REQUEST ['submit'];

                /* Declaração das variaveis que possuem os usuarios e as senhas */
                
                $user1 = 'admin';
                $pass1 = '123456';

                $user2 = 'user';
                $pass2 = '123456';
                
                /* Testa se o botão submit foi ativado */
                if ($submit){
                    /* se o campo usuario ou senha estivere, vazios geramos um alerta */ 

                    if ($user == "" || $pass == ""){
                        echo "<script:alert('Por favor, preencha todos os campos!');</script>";
                    }
                    /* Caso campo de uysuario e senha não estajam vazios, testar se o usuario e a senha batem, iniciamos uma sessão e redirecionamos o usuario para o home */
                    else{
                        if(($user == $user1 && $pass == $pass1) || ($user == $user2 && $pass == $pass2)){
                            session_start();

                            $_SESSION['Uusuario']=$user;
                            $_SESSION['senha']=$pass;

                            header("Location: home.php");

                            else{
                                "<script>alert('Usuario e/ou senha invalido(s), tente novamente!');</script>";
                            }
                        }
                    }                
                }
            ?>
        </div>

    </body>
    </html>