<html>
<head>
<meta charset="utf-8">
<title>Doce Festas - Editar Aluguel</title>
<?php
    
    $codigo = $_GET['codigo'];
    include("config_doce.php");
    include("verificar.php");
    //Milhões de consultas pra esse ninho de rato rodar
    $consultaMesas = $conexao->query("select * from tb_itens where ite_item like '%Mesa%';");
    $consultaJarros = $conexao->query("select * from tb_itens where ite_item like '%Jarro%';");
    $consultaBandeja = $conexao->query("select * from tb_itens where ite_item like '%Bandeja%';");
    $consultaLuminaria = $conexao->query("select * from tb_itens where ite_item like '%Luminaria%';");
    $consultaPainel = $conexao->query("select * from tb_itens where ite_item like '%Painel%';");
    $consultaMuroingles = $conexao->query("select * from tb_itens where ite_item like '%Muro%';");
    $consultaFlores = $conexao->query("select * from tb_itens where ite_item like '%Flor%';");
    $consultaTecidos = $conexao->query("select * from tb_itens where ite_item like '%Tecido%';");
    $consultaTapetes = $conexao->query("select * from tb_itens where ite_item like '%Tapete%';");

    $consultaClientes = $conexao->query("select cli_codigo, cli_nome from tb_clientes order by cli_nome;");
    $consultaTemas = $conexao->query("select * from tb_temas;");

    $vendedor = '1';

    // consulta para pegar os dados do aluguel atual
    $consultaAlu = $conexao->query("select * from tb_alugueis join tb_temas on tem_codigo = alu_tem_codigo where alu_codigo = $codigo");
    $resultadoAlu = $consultaAlu->fetch_assoc();

    //inserindo as coisas nas tabelas
    if(isset($_POST['especificacao'])){
        extract($_POST);
        if($consulta = $conexao->query("update tb_alugueis set alu_cli_codigo='$cliente',alu_tem_codigo='$tema',alu_valor='$valor', alu_idade='$idade', alu_entrega='$data_e',
        alu_recebimento='$data_r', alu_data_festa='$data_f', alu_especificacao='$especificacao', alu_aniversariante='$nome_ani' where alu_codigo=$codigo")) {
            header("Location: TabelaDosAlugueis.php");
        } else {
            echo"REGISTRATION ERROR1";
        }
    }
?>
<style type="text/css">
    /* CSS da página*/
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
                width: 40%;
                color: #fff;
                cursor:pointer;
            }

            .formulario{
                position: absolute;
                left:50%;
                top:55%;
                transform: translate(-50%,-50%);
            }
            ul{
            position: absolute;
            top: 44%;
            left: 130%;
            transform: translate(-50%, -50%);
            margin: 0;
            padding: 0;
            list-style: none;
            width: 30%;
        }
    
        ul li{
            position: relative;

        }

        ul li ul li{
            color: black;
            font-size: 15px;
            border: 1px solid black;
            background-color: #d8b800;
            width: 350%;
            text-align: left;

        } 

        li ul{
            position: absolute;
            left: 120%;
            top: 0;
            display: none;
        }
        
        ul li a{
            display: block;
            text-decoration: none;
            color: black;
            background: #e7e7d3;
            padding: 3px;
            border: 1px solid black;
            border-radius: 5px;
        }
        
        li:hover ul {display: block;}
        li a:hover {background-color: mediumvioletred;}

</style>
	
</head>

<body>
   <!-- Div da parte de cima--> 
    <div id = header>
            <h1 style= "text-align: center">Edição de aluguel</h1>
    </div>
    
    <a href="TabelaDosAlugueis.php" id = "enviar">Voltar</a>

<!--Formulário com tudo que deverá ser preenchido.--> 
    
    <form class="formulario" method="POST" action="?codigo=<?php echo $resultadoAlu['alu_codigo']; ?>">
     <br>

    <center>
        <!-- Os dois whiles de baixo são para selecionar o cliente e o tema baseados nas tabelas de clientes e de temas-->
        <h2 style="font-size:100%;font-weight:bold;">Cliente:</h2>
        <select name="cliente">
		<?php while($resultadoCli = $consultaClientes->fetch_assoc()){ ?>
			<option value="<?php echo $resultadoCli['cli_codigo']?>"<?php if($resultadoAlu['alu_cli_codigo'] == $resultadoCli['cli_codigo']) { echo " selected";}?>><?php echo $resultadoCli['cli_nome']?></option>
		<?php } ?>

		</select><br>
        <h2 style="font-size:100%;font-weight:bold;">Tema:</h2>
        <select name="tema">
		<?php while($resultadoTem = $consultaTemas->fetch_assoc()){ ?>
			<option value="<?php echo $resultadoTem['tem_codigo']?>"<?php if($resultadoAlu['alu_tem_codigo'] == $resultadoTem['tem_codigo']) { echo " selected";}?>><?php echo $resultadoTem['tem_temas']?></option>
		<?php } ?>
		</select><br>

    <!-- Formularios normais -->
    <h2 style="font-size: 100%; font-weight: bold;">Data de festa</h2><input required class ="form" type="date" name="data_f" value="<?php echo $resultadoAlu['alu_data_festa']; ?>"> <br>
    <h2 style="font-size: 100%; font-weight: bold;">Data de entrega</h2><input required class ="form" type="date" name="data_e" value="<?php echo $resultadoAlu['alu_entrega']; ?>"> <br>
    <h2 style="font-size: 100%; font-weight: bold;">Data de recebimento</h2><input required class ="form" type="date" name="data_r" value="<?php echo $resultadoAlu['alu_recebimento']; ?>"> <br>
    <input required class ="form" type="text" name="nome_ani" placeholder="Nome do aniversariante:" value="<?php echo $resultadoAlu['alu_aniversariante']; ?>"> <br>
    <input required class ="form" type="Number" name="idade" placeholder="Idade do aniversariante:" value="<?php echo $resultadoAlu['alu_idade']; ?>"> <br>
    <input required class ="form" type="Number" name="valor" placeholder="Valor do kit:" value="<?php echo $resultadoAlu['alu_valor']; ?>"> <br>
    <textarea required class ="form" rows="4" cols="20" name="especificacao" placeholder="Especificação:"><?php echo $resultadoAlu['alu_especificacao']; ?></textarea><br>
<!-- Por fim, o botão de enviar -->
    <input id="enviar" type="submit" value="ALTERAR">

    </center>

</form>

</body>

</html>