<?php
@session_start();
if(!isset($_SESSION['codigo'])){
	header("Location: telaLogin.php");
}

?>