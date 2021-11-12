<?
/*
 -----------------------------------------
 Desenvolvido por...: Edson de Araujo
 Desenvolvido por...: Jean Carlos de Araujo
 
 Finalidade.........: Login da Pagina
 Criado em Data.....: 06/07/2009
 Ultima Atualização : 18/08/2009 

 DEUS SEJA LOUVADO
 -----------------------------------------
*/

//include_once("config.php");

if (!empty($alte_url_pag)){

    include_once("config.php");


//session_name("MeuLogin");
@session_start();
$ser_name3_c    = escapestrings($_SESSION["log_name_c"]);
$acesso_2       = escapestrings($_SESSION['data_log_2']);

if($_GET['login'] == "falhou") {
    print $_GET['causa'];
}

if (!empty($ser_name3_c)){

}else{
	$ser_name3_c = trim(strtoupper("Visitante"));
}

include("visitas_pag.php");

include("inew_undher_files.php");


}else{

header('Location:index.php');

	
}
?>

