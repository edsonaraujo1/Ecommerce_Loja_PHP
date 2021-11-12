<?php

/**
 * @author holodek
 * @copyright 2010
 */


// Resgata a Sessao
@session_start();
$path  = addslashes(strtoupper($_SESSION['Path1']));

$nome3 = addslashes(strtolower($_SESSION['log_name_c']));


include_once('sql_injection.php');
			
// Abre Conexão com o MySql
include('conexao.php');
// Chama o Banco de Dados
			
$link = @mysql_connect($host,$user,$pass);
			
@mysql_select_db($db);
			
$consulta = "DELETE FROM useronline Where ip = '$REMOTE_ADDR'";
			
@mysql_query($consulta, $link);

$consulta2 = "DELETE FROM user_logados Where usuario = '". anti_sql_injection($nome3) ."'";
			
@mysql_query($consulta2, $link);


$consulta3 = "DELETE FROM user_logados Where ip = '$REMOTE_ADDR'";
			
@mysql_query($consulta3, $link);

@mysql_close();

@session_start();
unset ($_SESSION['informes_log']);
unset ($_SESSION['nome_log']);
unset ($_SESSION['log_name_c']);
$nome3 = ' ';

@session_destroy();
ob_end_flush();   // Limpa o buffer
			
?>

