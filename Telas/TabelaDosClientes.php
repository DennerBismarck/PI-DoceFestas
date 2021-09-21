<html>
    <head>
        <meta charset="utf-8">
        <title>Doce festas - Clientes</title>
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
        </style>
    </head>
    <body>
        <div id = header>
            <h1 style= "text-align: center">Tabela dos clientes</h1>
        </div>
        <br>
        <div id="quadrotabela">
            <table>
                <tr>
                    <th>Código do cliente</th> 
                    <th>Nome</th> 
                    <th>Bairro</th>
                    <th>Logradouro</th>
                    <th>Número</th>
                    <th>Telefone</th>
                    <th>Ações</th>
                </tr>
                <tr>
                    <td>aaaaaaaaaaaaaaaaaaaaaaa</td> 
                    <td>bbbbbbbb</td>
                    <td>jhjhjh</td> 
                    <td>bvbvhhhhh</td> 
                    <td>ccccccccc</td> 
                    <td>xxxxxxxxxx</td> 
                    <td><a href="https://cdn.discordapp.com/attachments/715244206154580016/882320071739994162/1630431891912.jpg"><i class="fas fa-edit" aria-hidden = "true"></i></a>
                    || <a href="https://cdn.discordapp.com/attachments/715244206154580016/817353242442858557/1ff408ad-4df9-4183-a311-ac043b35d6dc.png" onclick="return confirm('Deseja apagar?')"><i class="fas fa-trash"></i></a></td>
                </tr>
                <tr>
                    <td>aaaaaaaaaaaaaaaaaaaaaaa</td> 
                    <td>bbbbbbbb</td>
                    <td>jhjhjh</td> 
                    <td>bvbvhhhhh</td> 
                    <td>ccccccccc</td> 
                    <td>xxxxxxxxxx</td> 
                    <td><a href="https://cdn.discordapp.com/attachments/715244206154580016/882320071739994162/1630431891912.jpg"><i class="fas fa-edit" aria-hidden = "true"></i></a>
                    || <a href="https://cdn.discordapp.com/attachments/715244206154580016/817353242442858557/1ff408ad-4df9-4183-a311-ac043b35d6dc.png" onclick="return confirm('Deseja apagar?')"><i class="fas fa-trash"></i></a></td>
                </tr>
                <tr>
                    <td>aaaaaaaaaaaaaaaaaaaaaaa</td> 
                    <td>bbbbbbbb</td>
                    <td>jhjhjh</td> 
                    <td>bvbvhhhhh</td> 
                    <td>ccccccccc</td> 
                    <td>xxxxxxxxxx</td> 
                    <td><a href="https://cdn.discordapp.com/attachments/715244206154580016/882320071739994162/1630431891912.jpg"><i class="fas fa-edit" aria-hidden = "true"></i></a>
                    || <a href="https://cdn.discordapp.com/attachments/715244206154580016/817353242442858557/1ff408ad-4df9-4183-a311-ac043b35d6dc.png" onclick="return confirm('Deseja apagar?')"><i class="fas fa-trash"></i></a></td>
                </tr>
                <tr>
                    <td>aaaaaaaaaaaaaaaaaaaaaaa</td> 
                    <td>bbbbbbbb</td>
                    <td>jhjhjh</td> 
                    <td>bvbvhhhhh</td> 
                    <td>ccccccccc</td> 
                    <td>xxxxxxxxxx</td> 
                    <td><a href="https://cdn.discordapp.com/attachments/715244206154580016/882320071739994162/1630431891912.jpg"><i class="fas fa-edit" aria-hidden = "true"></i></a>
                    || <a href="https://cdn.discordapp.com/attachments/715244206154580016/817353242442858557/1ff408ad-4df9-4183-a311-ac043b35d6dc.png" onclick="return confirm('Deseja apagar?')"><i class="fas fa-trash"></i></a></td>
                </tr>
            </table>
        </div>
    </body>
</html>