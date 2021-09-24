<html>
    <head>
        <meta charset="utf-8">
        <title>Doce festas - Clientes</title>
        <?php include("config_doce.php");
        include("verificar.php"); 
        
        //Delete
        if(isset($_GET['excluir'])){
            $codigo = $_GET['excluir'];
            if($consulta = $conexao->query("delete from tb_teldoscli where tel_cli_codigo = $codigo")) {
                if($consulta = $conexao->query("delete from tb_clientes where cli_codigo = $codigo")) {
                        header("Location: TabelaDosClientes.php");
                        } else {
                            echo "Erro na exclusão!";
                        }
                } else {
                    echo "Erro na exclusão!";
                }
            }
        
        $consulta = $conexao->query("select * from tb_clientes 
        join tb_bairros on cli_bai_codigo = bai_codigo
        join tb_teldoscli on cli_codigo = tel_cli_codigo;");
        ?>
         <script src="https://kit.fontawesome.com/a4a3c0465f.js" crossorigin="anonymous"></script>
        <style>
             *{
                margin:0;
                padding:0;
                border:0;
            }
            body{
                background-image: url("imgs/BackGroundTabela.jpg");
                background-color: #807f7f;
                background-repeat: no-repeat;
                background-size: cover;
                backdrop-filter: blur(2px);
            }
            #header{
                color: #ffffff;
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
            #quadrotabela{
                display: flex;
                width: 100%;
                justify-content: center;
            }
            table{
                border: 2px solid black;
                width: 60%;
                border-radius: 5px;
                font-size: larger;
            }
            th{
                border: 1px solid black;
                color: white;
                background-color: #e7e7d3;
                color: rgb(0, 0, 0);  
            }
            td{
                border: 1px solid black;
                text-align: center;
                background-color: #B38B6D;
                color: white;
            }
            i{
                color:#000000;
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
        </style>
    </head>
    <body>
        <div id = header>
            <h1 style= "text-align: center">Tabela dos clientes</h1>
        </div>
        <a href="Doce_Festas.php" id = "enviar">Voltar ao menu</a>
        <br>
        <div id="quadrotabela">
            <table>
                <tr>
                    <th>Código do cliente</th> 
                    <th>Nome</th> 
                    <th>Bairro</th>
                    <th>Logradouro</th>
                    <th>Número</th>
                    <th>Telefones</th>
                    <th>Ações</th>
                                      
                </tr>
                <?php while ($resultado = $consulta->fetch_assoc()){?>
                <tr>
                    <td><?php echo $resultado["cli_codigo"]?></td> 
                    <td><?php echo $resultado["cli_nome"]?></td>
                    <td><?php echo $resultado["bai_bairro"]?></td> 
                    <td><?php echo $resultado["cli_logradouro"]?></td> 
                    <td><?php echo $resultado["cli_numero"]?></td> 
                    <td><?php echo $resultado["tel_telefone"]?></td> 
                    
                    <td><a href="EditarCliente.php?codigo=<?php echo $resultado ['cli_codigo']; ?> ">

                        <i class="fas fa-edit" aria-hidden = "true"></i></a>
                    || <a href="?excluir=<?php echo $resultado['cli_codigo'];?>" onclick="return confirm('Deseja apagar?');"><i class="fas fa-trash"></i></a>
                </td>
                    
                </tr>
                <?php } ?>
                
                
                
            </table>
        </div>
    </body>
</html>