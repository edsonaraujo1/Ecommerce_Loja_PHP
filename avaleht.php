<?
/*
 -----------------------------------------
 Desenvolvido por...: Edson de Araujo
 Desenvolvido por...: Jean Carlos de Araujo
 
 Finalidade.........: Index da Pagina
 Criado em Data.....: 06/07/2009
 Ultima Atualização : 18/08/2009 

 DEUS SEJA LOUVADO
 -----------------------------------------
*/

include_once('config.php');

include('logar.php');

@session_start();
$ser_name3_c    = escapestrings(strtoupper($_SESSION['log_name_c']));
$acesso_2       = escapestrings($_SESSION['data_log_2']);
$servletjs2     = $_SESSION["servletjs2"];

if (!empty($ser_name3_c)){

}else{
	$ser_name3_c = trim(strtoupper("Visitante"));
	$nome3       = trim(strtoupper("Visitante"));
}

if ($inpg == 1){
	if ($mod == 0){
	    include('visitas.php');
	}
}	


if ($servletjs2 == '20$$20'){


	@session_start();
	$_SESSION['abrir_up'] = 'principal.php';

	include('visitas_pag.php');
	
	
	include('principal.php');

}else{
	
	include('visitas.php');
	
	header('Location:index.php');

}
?>

