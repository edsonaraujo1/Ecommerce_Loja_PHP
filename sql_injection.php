<?
/*
 -----------------------------------------
 Desenvolvido por...: Edson de Araujo
 Finalidade.........: Funcao SQL Injecton
 Criado em Data.....: 11/09/2010
 Ultima Atualização : 11/09/2010 

 DEUS SEJA LOUVADO
 -----------------------------------------
*/

/*

 Funcao que evita ataques de SQL Injection

*/
	function anti_sql_injection($string)
	{
	    $string = get_magic_quotes_gpc() ? stripslashes($string) : $string;
	
	    $string = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($string) : mysql_escape_string($string);
	
	    return $string;
	}



?>