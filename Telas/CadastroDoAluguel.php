<html>
<head>
<meta charset="utf-8">
<title>Doce Festas - Cadastro</title>
<?php
    include("config_doce.php");
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

    $vendedor = 1;
    //inserindo as coisas nas tabelas
    if(isset($_POST['cliente'])){
        extract($_POST);
        if($consulta = $conexao->query("insert into tb_alugueis 
        (alu_valor, alu_idade, alu_entrega, alu_recebimento, alu_data_festa, alu_acessorios, alu_aniversariante, cli_codigo, alu_tem_codigo, alu_ven_codigo)
        values ('$valor', $idade, '$data_e','$data_r', '$data_f', '$acessorios', '$nome_ani, '$cliente', '$tema', '$vendedor');"))
            {
                if($consulta = $conexao->query("insert into tb_itensdosalugueis (ilu_alu_codigo, ilu_ite_codigo)
                values ('$alu_codigo, $item');"))
                {
                    header("Location: TabelaDosAlugueis.php");
                } else {
                    echo "REGISTRATION ERROR2";
                }
            } else {
                echo "REGISTRATION ERROR1";
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
    
    <div id = header>
            <h1 style= "text-align: center">Cadastro dos aluguéis</h1>
    </div>


    <form class="formulario" method="POST" action="?">
     <br>

    <center>
    <h2 style="font-size: 100%; font-weight: bold;">Cliente</h2> <select name="cliente">
        <?php while ($resultado2 = $consultaClientes->fetch_assoc()){?>
            <option value = <?php echo $resultado2['cli_codigo']?>><?php echo $resultado2['cli_nome']?> 
        <?php } ?>        
    </select> <br>
    <h2 style="font-size: 100%; font-weight: bold;">Tema</h2> <select name="tema">
        <?php while ($resultado3 = $consultaTemas->fetch_assoc()){?>
            <option value = <?php echo $resultado2['tem_codigo']?>><?php echo $resultado3['tem_temas']?> 
        <?php } ?>        
    </select> <br>
    <h2 style="font-size: 100%; font-weight: bold;">Data de festa</h2><input required class ="form" type="date" name="data_f" placeholder="Data da festa:"> <br>
    <h2 style="font-size: 100%; font-weight: bold;">Data de entrega</h2><input required class ="form" type="date" name="data_e" placeholder="Data da entrega:"> <br>
    <h2 style="font-size: 100%; font-weight: bold;">Data de recebimento</h2><input required class ="form" size="45" type="date" name="data_r" placeholder="Data do recebimento:"> <br>
    <input required class ="form" type="text" name="nome_ani" placeholder="Nome do aniversariante:"> <br>
    <input required class ="form" type="text" name="cor" placeholder="Cor:"> <br>
    <input required class ="form" type="Number" name="idade" placeholder="Idade do aniversariante:"> <br>
    <input required class ="form" type="text" name="valor" placeholder="Valor do kit:"> <br>
    <input required class ="form" size="45" type="text" name="acessorios" placeholder="Acessórios:"> <br>
    <ul>
    <li><a href="#"> Mesas </a>
        <ul>
           <?php while ($resultado = $consultaMesas->fetch_assoc()){?>
                <li><input id="marcar" type="checkbox" name="item" value="mesa"><?php echo $resultado["ite_item"];?> 
            <br></li>
            <?php }?>
        </ul>
    </li>

     <li><a href="#"> Jarros </a>
        <ul>
           <?php while ($resultado = $consultaJarros->fetch_assoc()){?>
                <li><input id="marcar" type="checkbox" name="item" value="jarro"><?php echo $resultado["ite_item"];?> 
            <br></li>
            <?php }?>
        </ul>
    </li>

     <li><a href="#"> Bandeja </a>
        <ul>
           <?php while ($resultado = $consultaBandeja->fetch_assoc()){?>
                <li><input id="marcar" type="checkbox" name="item" value="bandeja"><?php echo $resultado["ite_item"];?> 
            <br></li>
            <?php }?>
        </ul>
    </li>

    <li><a href="#"> Luminárias </a>
        <ul>
           <?php while ($resultado = $consultaLuminaria->fetch_assoc()){?>
                <li><input id="marcar" type="checkbox" name="item" value="luminaria"><?php echo $resultado["ite_item"];?> 
            <br></li>
            <?php }?>
        </ul>
    </li>

    <li><a href="#"> Painel </a>
        <ul>
           <?php while ($resultado = $consultaPainel->fetch_assoc()){?>
                <li><input id="marcar" type="checkbox" name="item" value="painel"><?php echo $resultado["ite_item"];?> 
            <br></li>
            <?php }?>
        </ul>
    </li>

    <li><a href="#"> Muro inglês </a>
        <ul>
           <?php while ($resultado = $consultaMuroingles->fetch_assoc()){?>
                <li><input id="marcar" type="checkbox" name="item" value="muro"><?php echo $resultado["ite_item"];?> 
            <br></li>
            <?php }?>
        </ul>
    </li>

    <li><a href="#"> Flores </a>
        <ul>
           <?php while ($resultado = $consultaFlores->fetch_assoc()){?>
                <li><input id="marcar" type="checkbox" name="item" value="flor"><?php echo $resultado["ite_item"];?> 
            <br></li>
            <?php }?>
        </ul>
    </li>

    <li><a href="#"> Tecidos </a>
        <ul>
           <?php while ($resultado = $consultaTecidos->fetch_assoc()){?>
                <li><input id="marcar" type="checkbox" name="item" value="tecido"><?php echo $resultado["ite_item"];?> 
            <br></li>
            <?php }?>
        </ul>
    </li>

    <li><a href="#"> Tapetes </a>
        <ul>
           <?php while ($resultado = $consultaTapetes->fetch_assoc()){?>
                <li><input id="marcar" type="checkbox" name="item" value="tapete"><?php echo $resultado["ite_item"];?> 
            <br></li>
            <?php }?>
        </ul>
    </li>
</ul>
    <input id="enviar" type="submit" value="ENVIAR">

    </center>

</form>

</body>

</html>