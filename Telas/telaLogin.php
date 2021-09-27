<html>
    <head>
        <meta charset="utf-8">
        <title>Doce Festas - Login!</title>
        <?php 
            include("config_doce.php");
            if(isset($_POST['login'])){
                extract($_POST);
                $consulta = $conexao->query("select * from tb_vendedores where ven_login = '$login' and ven_senha = '$senha';");
                if($resultado = $consulta->fetch_assoc()){
                    $_SESSION['codigo'] = $resultado['ven_codigo'];
                    header("Location: Doce_Festas.php");
                }
                else {
                    echo "Usuário ou senha inválidos!";
                }   
            }    
        ?>
        <style>
            *{
                padding: 0;
                margin: 0;
                border: 0;
            }
            body{
                background-image: url("imgs/imagemTelaInicial.jpg");
                background-color: #807f7f;
                background-repeat: no-repeat;
                background-size: cover;
                backdrop-filter: blur(5px);
            }
            .divLogin{
               position:absolute;
               left:50%;
               top:50%;
               transform: translate(-50%,-50%);
               font-size: 200%;
               background-color: rgb(199, 21, 133);
               color: #FFD700;
               width: 25%;
               height: 50%;
               font-family: Arial, Helvetica, sans-serif;
               font-weight: bold;
               border-radius: 5px;
               box-shadow: inset 0 0 1em rgb(41, 40, 39);
            }
            .formulario{
                position: absolute;
                left:50%;
                top:50%;
                transform: translate(-50%,-50%);
            }
            .tituloFormulario{
                position: absolute;
                left:50%;
                transform: translate(-50%,-50%);
            }
            #titulo2{
                top: 45%;
            }
            .form{
                background: #fff;
                border: 2px solid #ccc;
                border-radius: 5px;
                font-size: 100%;
                height: 40%;
                max-width: 100%;
                padding: 0 5px;
                width: 100%;
            }
            #enviar{
                font-size: 120%;
                background-color: #d8b800;
                border-radius: 5px;
                font-size: 100%;
                height: 40px;
                max-width: 200%;
                padding: 0 5px;
                width: 100%;
                color: #fff;
                cursor:pointer;
            }
        </style>
    </head>
    <body>
        <div class="divLogin">
                <form action="?" method="POST" class="formulario">
                    <p class="tituloFormulario">Usuário</p><br>
                    <input type="text" name="login" required class ="form"> <br>
                    <br>
                    <p class="tituloFormulario" id="titulo2">Senha</p><br>
                    <input type="password" name="senha" required class = "form"> <br>
                    <br>
                    <input type="submit" id="enviar" value="Acessar">
                </form>
        </div>
    </body>
</html>