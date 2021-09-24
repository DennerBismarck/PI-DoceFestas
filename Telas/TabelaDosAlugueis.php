<html>
    <head>
        <meta charset="utf-8">
        <title>Doce festas - Locações</title>
         <script src="https://kit.fontawesome.com/a4a3c0465f.js" crossorigin="anonymous"></script>
         <?php 
            include("config_doce.php");
            $consulta = $conexao->query("select * from tb_alugueis 
            join tb_clientes on alu_cli_codigo = cli_codigo
            join tb_temas on alu_tem_codigo = tem_codigo
            group by alu_codigo;");
            $consulta2 = $conexao->query("select * from tb_itensdosalugueis
            join tb_alugueis on ilu_alu_codigo = alu_codigo
            join tb_itens on ilu_ite_codigo = ite_codigo
            group by ilu_alu_codigo;")
         ?>
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
        </style>
    </head>
    <body>
        <div id = header>
            <h1 style= "text-align: center">Tabela dos alugueis</h1>
        </div>
        <br>
        <div id="quadrotabela">
            <table>
                <tr>
                    <th>Código da locação</th>
                    <th>Cliente</th>
                    <th>Tema</th>
                    <th>Aniversariante</th>
                    <th>Acessórios</th>
                    <th>Data da festa</th>
                    <th>Data da entrega</th>
                    <th>Data do recebimento</th>
                   <!-- <th>Itens</th>-->
                    <th>Valor do kit</th>
                    <th>Ações</th>
                </tr>
                <?php while ($resultado = $consulta->fetch_assoc()){ ?>
                <tr>
                    <td><?php echo $resultado["alu_codigo"]?></td> 
                    <td><?php echo $resultado["cli_nome"]?></td>
                    <td><?php echo $resultado["tem_temas"]?></td>
                    <td><?php echo $resultado["alu_aniversariante"]?></td> 
                    <td><?php echo $resultado["alu_acessorios"]?></td>
                    <td><?php echo $resultado["alu_data_festa"]?></td> 
                    <td><?php echo $resultado["alu_entrega"]?></td> 
                    <td><?php echo $resultado["alu_recebimento"]?></td> 
                    <!--<td><//?php while ($resultado2 = $consulta2->fetch_assoc()){?>  
                        <//?php echo $resultado2['ite_item']?>
                    <//?php } ?></td> -->   
                    <td >R$ <?php echo number_format($resultado['alu_valor'],2,",",".");?>
                    <td><a href="aluguelEditar.php?codigo=<?php echo $resultado['alu_codigo']; ?>"><i class="fas fa-edit" aria-hidden = "true"></i></a>
                    || <a href="https://cdn.discordapp.com/attachments/715244206154580016/817353242442858557/1ff408ad-4df9-4183-a311-ac043b35d6dc.png" onclick="return confirm('Deseja apagar?')"><i class="fas fa-trash"></i></a></td>    
                </tr>
                <?php } ?>
            </table>
        </div>
    </body>
</html>