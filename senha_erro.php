<?
/*
 -----------------------------------------
 Desenvolvido por...: Edson de Araujo
 Desenvolvido por...: Jean Carlos de Araujo
 
 Finalidade.........: login do Sistema Senha Erro
 Criado em Data.....: 06/07/2009
 Ultima Atualização : 18/08/2009 

 DEUS SEJA LOUVADO
 -----------------------------------------
*/

include_once("config.php");

@session_start();
$nome2 = strtolower($_SESSION["log_name_c"]);
$_SESSION["servletjs2"] = '20$$20';
$ser_name3_c    = escapestrings($_SESSION["log_name_c"]);

if($_GET['login'] == "falhou") {
    print $_GET['causa'];
}

$falha_login = "falhou";

if ($login == 'falhou'){
	

if (!empty($ser_name3_c)){

}else{
	$ser_name3_c = escapestrings(trim(strtoupper("Visitante")));
}

include("visitas_pag.php");


include("principal.php");

}else{
	
	include('index.php');
	
}
?>

