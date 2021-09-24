<html>
<head>

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<title>Doce Festas</title>
	<?php 
		include("config_doce.php");
		include("verificar.php");
	?>
	<style type="text/css">
		
		*{
	        margin: 0;
	        padding: 0;
	        border: 0;
        }
      
        body{
      	    background-image: url("imgs/plano.jpg");
      	    background-repeat: no-repeat;
      	    background-size: cover;
      	    background-position: center center;
      	    background-attachment: fixed;
        }

        .cabecalho{
			height: 15%;
			width: 100%;
			background-color: MediumVioletRed;
			float: left;
			padding: 50px 8%;
        }

        .doce{
		    position: absolute;
		    width: 40%;
		    top: 15%;
		    left: 55%;
		    transform: translate(-50%, -50%);
        }
        
        .festas{
		    position: absolute;
		    width: 40%;
		    top: 16%;
		    left: 72%;
		    transform: translate(-50%, -50%);
        }

        .menu ul{
    	    width: 100%;
    	    margin: 0;
    	    background-color: #1C1C1C;
    	    list-style: none;
        }

        .menu ul li{
    	    display: inline;
        }

        .menu ul li a{
    	    padding: 10px 10px;
    	    display: inline-block;
    	    color: white;
    	    text-decoration: none;
        }

        .menu ul li a:hover{
    	    color:#FFD700;
        }


        .content{
    	    height: 293px;
    	    width: 490px;
    	    border-radius: 11px;
    	    overflow: hidden;
    	    position: absolute;
    	    top: 86%;
    	    left: 50%;
    	    transform: translate(-50%, -86%);
        }

        .navigation{
    	    position: absolute;
    	    bottom: 20px;
    	    left: 50%;
    	    transform: translate(-50%);
    	    display: flex;
        }

        .bar{
    	    width: 60px;
    	    height: 17px;
    	    border: 2px solid black;
    	    margin: 6px;
    	    border-radius: 5px;
    	    cursor: pointer;
    	    transition: .6s;
        }

        .bar:hover{
    	    background-color: #fff;
        }

    
        input{
    	    display: none;
        }

    
        .slides{
    	    display: flex;
    	    width: 500%;
    	    height: 100%;
        }

        .slide{
    	    width: 20%;
    	    transition: .6s;
        }

        .slide img{
    	    width: 100%;
    	    height: 100%;
        }

        #slide1:checked ~ .s1{
    	    margin-left: 0;
        }

        #slide2:checked ~ .s1{
    	    margin-left: -20%;
        }

        #slide3:checked ~ .s1{
    	    margin-left: -40%;
        }

        #slide4:checked ~ .s1{
    	    margin-left: -60%;
        }

      
        .inv{
    	    width: 200px;
     	    height: 50px;
        }

        
        footer{
    	    bottom: 0px;
    	    width: 100%;
    	    background-color: #1C1C1C;
    	    height: 8%;
        }

</style>

</head>

<body>
	
	<header class="cabecalho">
      <div class="doce">
        	<img src="imgs/doce.png" width="200px" height="100px">
      </div>

      <div class="festas">
        	<img src="imgs/festas.png" width="200px" height="70px">
      </div>
    
    </header>

    <div class="menu">
    	<ul>
    		<center>
    		<li><a href="CadastroDoCliente.php">Cadastro do cliente</a></li>
    		<li><a href="CadastroDoAluguel.php">Cadastro do aluguel</a></li>
    		<li><a href="TabelaDosClientes.php">Tabela dos clientes</a></li>
    		<li><a href="TabelaDosAlugueis.php">Tabela dos alugueis</a></li>
    	</center>
    	</ul>
    	
    </div>

    
    <div class="content">
    	<div class="slides">
    		<input type="radio" name="slide" id="slide1">
    		<input type="radio" name="slide" id="slide2">
    		<input type="radio" name="slide" id="slide3">
    		<input type="radio" name="slide" id="slide4">

    		<div class="slide s1">
    			<img src="imgs/imagem1.jpg">
    		</div>

    		<div class="slide">
    			<img src="imgs/imagem2.jpg">
    		</div>

    		<div class="slide">
    			<img src="imgs/img3.jpg">
    		</div>

    		<div class="slide">
    			<img src="imgs/imagem4.jpg">
    		</div>
    		
    	</div>
   
        <div class="navigation">
    	  <label class="bar" for="slide1"></label>
          <label class="bar" for="slide2"></label>
          <label class="bar" for="slide3"></label>
          <label class="bar" for="slide4"></label>
       </div>

    </div>

    <div class="inv"></div>

      <div class="mao">
        	<center>
        	<img src="imgs/telmao.png" width="700px" height="500px">
        </center>
      </div>

    <footer>
	  
	  <center>
	    <a href="https://www.instagram.com/docefestasloja/"><i class="fa fa-instagram" style="font-size: 25px; top: 65%;
    	transform: translateY(65%); color:MediumVioletRed "></i> </a><br>
    	<a href="https://web.whatsapp.com/"><i class="fa fa-whatsapp" style="font-size: 26px; top: 35%;
    	left: 200%;
    	transform: translate(-200%, -35%); color:MediumVioletRed "></i></a>
    	<a href="https://www.facebook.com/lojadocefestas"><i class="fa fa-facebook-f" style="font-size: 23px; top: 50%;
    	left: 280%;
    	transform: translate(280%, -50%); color:MediumVioletRed "></i> </a> 
       </center>
    
    </footer>

</body>

</html>