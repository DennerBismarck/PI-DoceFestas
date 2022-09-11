<html>
<meta charset="utf-8">
<title>Doce Festas - Cadastro</title>
<head>
<?php 
    $codigo = $_GET['codigo'];
    include("config_doce.php");
    include("verificar.php");
    // consulta para pegar os dados do cliente atual
    $consultaCli = $conexao->query("select * from tb_clientes join tb_bairros on bai_codigo = cli_bai_codigo where cli_codigo = $codigo");
    $resultadoCli = $consultaCli->fetch_assoc();

    //inserindo as coisas nas tabelas
    if(isset($_POST['Nome'])){
       extract($_POST);
        if($consulta = $conexao->query("update tb_clientes set cli_nome='$Nome',cli_numero = '$Numero', cli_bai_codigo = '$Bairro', cli_logradouro = '$Logradouro', cli_telefone = '$Telefone' where cli_codigo = $codigo")) {
            header("Location: TabelaDosClientes.php");
        } else {
           echo"REGISTRATION ERROR!";
            }
        }

?>
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

<body>
    
    <div id = header>
            <h1 style= "text-align: center">Editar Cliente</h1>
    </div>

    <a href="TabelaDosClientes.php" id = "enviar">Voltar</a>


<form class="formulario" method="POST" action="?codigo=<?php echo $resultadoCli['cli_codigo'];?>">
     <br>

    <center>
    <input required class ="form" size="45" type="text" name="Nome" placeholder="Nome completo:"value="<?php echo $resultadoCli['cli_nome']; ?>"> <br>
    <select required class ="form" size="1" name="Bairro"value=<?php echo $resultadoCli['cli_bai_codigo']; ?>>
    <option value="1"> Centro</option>
    <option value="2"> Imboca </option>
    <option value="3"> São José </option>
    <option value="4"> Santa Cecília </option>
    <option value="5"> Santo Amaro </option>
    <option value="6"> Sede </option>
    <option value="7"> Vila do Rio </option>
    <option value="8"> Zona rural </option>
    </select>
    <input required class ="form" type="text" name="Logradouro" placeholder="Logradouro:"value="<?php echo $resultadoCli['cli_logradouro'];?>"> <br>
    <input required class ="form" type="number" name="Numero" placeholder="Numero:"value=<?php echo $resultadoCli['cli_numero']; ?>> <br>
    <input required class ="form" type="number" name="Telefone" placeholder="Telefone:"value=<?php echo $resultadoCli['cli_telefone']; ?>> <br>
    <br>
    <input id="enviar" type="submit" value="ENVIAR">
   
    </center>

</form>


</body>

</html>