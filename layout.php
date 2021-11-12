<?
/*
 -----------------------------------------
 Desenvolvido por...: Edson de Araujo
 Finalidade.........: Loja Virtual
 Criado em Data.....: 07/12/2007
 Ultima Atualização : 07/07/2008 

 DEUS SEJA LOUVADO
 -----------------------------------------
*/

@session_start();
$alte_url_pag = $_SESSION["alte_url_pag"];


//include_once("config.php");

if (!empty($alte_url_pag)){

    unset ($_SESSION["alte_url_pag"]);
    
	include_once("config.php");
	
	if ($entra_no_web1 == 'at2'){
	
	include("principal.php");
	
	
	}else{
		
		include("inew_undher_files.php");
	}

}else{

header('Location:index.php');

	
}
?>
