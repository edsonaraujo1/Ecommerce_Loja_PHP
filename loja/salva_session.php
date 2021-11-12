<?
/*
 ----------------------------------------------------------
 Desenvolvido por...: Edson de Araujo
 Finalidade.........: Salvar info. digitadas em Sessao
 Criado em Data.....: 07/12/2007
 Ultima Atualização : 07/12/2007 

 DEUS SEJA LOUVADO
 ----------------------------------------------------------
*/

// Resgata Sessao
@session_start();
$_SESSION['Edit1']        = addslashes($Var_1);
$_SESSION['Edit2']        = addslashes($Var_2);
$_SESSION["alte_url_pag"] = 'dsds32';

include('loja.php');
	
?>