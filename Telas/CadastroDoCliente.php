<html>
<meta charset="utf-8">
<title>Doce Festas - Cadastro</title>

<head>

<style type="text/css">
    *{
                margin:0;
                padding:0;
                
            }

            body{
                background-image: url("imgs/bolo.jpg");
                background-repeat: no-repeat;
                background-size: cover;
                backdrop-filter: blur(3px);
            }



    #header{
                color: white;
                font-family: American Typewriter, serif;
                font-size: 200%;
                width: 100%;
                height: 25%;
                background-color: mediumvioletred;
                top: 10%;
                left: 50%;
                display: flex;
                align-items: center;
                justify-content:center;
                box-shadow: 0 0 1em rgb(49, 48, 44);
            }

            .form{
                background: #e7e7d3;
                border-radius: 5px;
                font-size: 100%;
                height: 40%;
                max-width: 100%;
                padding: 0 5px;
                width: 100%;
                margin-top: 3px;
            }
            #enviar{
                font-size: 120%;
                background-color: #d8b800;
                border-radius: 5px;
                font-size: 100%;
                height: 40px;
                max-width: 200%;
                padding: 0 5px;
                width: 30%;
                color: #fff;
                cursor:pointer;
            }

            .formulario{
                position: absolute;
                left:50%;
                top:50%;
                transform: translate(-50%,-50%);
            }

</style>
	
</head>
<?php
include("config_doce.php");
if(isset($_POST['Nome'])){
    extract($_POST);
    if($consulta = $conexao->query("insert into tb_clientes 
    (cli_nome, cli_bai_codigo, cli_logradouro, cli_numero)
    values ('$Nome', $Bairro, '$Logradouro', $Numero);"))
        {
            header("Location: TabelaDosClientes.php");
            } else {
            echo "REGISTRATION ERROR";
            }

}
            if(isset($_POST['Nome'])){
            extract($_POST);
            if($consulta = $conexao->query("insert into tb_teldoscli 
            (tel_telefone)
            values ($Telefone);")){
            } else {
            echo "REGISTRATION ERROR";
            }
        }
?>

<body>
    
    <div id = header>
            <h1 style= "text-align: center">Cadastro dos clientes</h1>
    </div>

   


<form class="formulario" method="POST" action="?">
     <br>

    <center>
    <input required class ="form" size="45" type="text" name="Nome" placeholder="Nome completo:"> <br>
    <select required class ="form" size="1" name="Bairro">
    <option value="1" selected> Centro </option>
    <option value="2"> Imboca </option>
    <option value="3"> São José </option>
    <option value="4"> Santa Cecília </option>
    <option value="5"> Santo Amaro </option>
    <option value="6"> Sede </option>
    <option value="7"> Vila do Rio </option>
    <option value="8"> Zona rural </option>
    </select>
    <input required class ="form" type="text" name="Logradouro" placeholder="Logradouro:"> <br>
    <input required class ="form" type="number" name="Numero" placeholder="Numero:"> <br>
    <input required class ="form" type="number" name="Telefone" placeholder="Telefone:"> <br>
    <br>
    <input id="enviar" type="submit" value="ENVIAR">
   
    </center>

</form>


</body>

</html>