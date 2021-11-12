<?php

// Resgata a Sessao
@session_start();
$ser_name3_c    = $_SESSION["log_name_c"];
$acesso_2       = $_SESSION['data_log_2'];

if (!empty($ser_name3_c)){

}else{
	$ser_name3_c = trim(strtoupper("Visitante"));
}


$Edit0_x      = trim($_POST['Edit0']);

session_name("pesq_nome");
session_start();
$_SESSION['faz_nome']  = "nao";
$_SESSION['Edit0x']    = $Edit0_x;
$_SESSION['Edit1']    = "";

if (!empty($Edit0_x)){
	
    $sql  = "SELECT * FROM produto2 WHERE nome LIKE '%$Edit0_x%' ORDER BY nome ASC";

    $resultado = @mysql_query($sql);

    include("comercio.php");

}else{
	
    $sql  = "SELECT * FROM produto2 ORDER BY nome ASC";

    $resultado = @mysql_query($sql);

    include("comercio.php");
	
}

?>