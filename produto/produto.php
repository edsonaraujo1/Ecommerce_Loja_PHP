<?
/*
 -----------------------------------------
 Desenvolvido por...: Edson de Araujo
 Finalidade.........: Tela do Sistema
 Criado em Data.....: 07/12/2007
 Ultima Atualização : 07/07/2008 

 DEUS SEJA LOUVADO
 -----------------------------------------
*/

require("../config.php");

//require("../logar.php");

session_start();
$ser_name3_c    = escapestrings(strtoupper($_SESSION["log_name_c"]));
$acesso_2       = escapestrings($_SESSION['data_log_2']);


if (!empty($ser_name3_c)){

}else{
	$ser_name3_c = trim(strtoupper("Visitante"));
}

include("../visitas_pag.php");

require("inew_undher_files.php");

?>

