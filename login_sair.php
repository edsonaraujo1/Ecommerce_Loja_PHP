<?
/*
 -----------------------------------------
 Desenvolvido por...: Edson de Araujo
 Desenvolvido por...: Jean Carlos de Araujo
 
 Finalidade.........: login do Sistema Sair
 Criado em Data.....: 06/07/2009
 Ultima Atualização : 07/07/2009 

 DEUS SEJA LOUVADO
 -----------------------------------------
*/
include_once("config.php");

@session_start();
$nome2 = strtolower($_SESSION["log_name_c"]);
$_SESSION["servletjs2"] = '20$$20';


include_once('sql_injection.php');

// Abre Conexão com o MySql
include('conexao.php');
// Chama o Banco de Dados
			
$link = @mysql_connect($host,$user,$pass);
			
@mysql_select_db($db);
			
$consulta = "DELETE FROM user_logados Where usuario = '". anti_sql_injection($nome2)."'";
			
@mysql_query($consulta, $link);

//@session_destroy();

unset ($_SESSION["log_name_c"]);
unset ($_SESSION['data_log_2']);
unset ($_SESSION['novo_new']);
unset ($_SESSION["dona_top"]); 
unset ($_SESSION["nome_dona"]);

//$ser_name3_c = escapestrings(trim(strtoupper("Visitante")));

include("visitas_pag.php");

include("principal.php");

?>

