<?
/*
 ------------------------------------------------
 Desenvolvido por...: Edson de Araujo
 Finalidade.........: Conectar ao Banco de Dados
 Criado em Data.....: 07/12/2007
 Ultima Atualização : 07/12/2007 

 DEUS SEJA LOUVADO
 ------------------------------------------------
*/

// Legendas
// 1 localhost Administrador
// 2 maquina isolada


// Mudar aqui
$faz_agora = 1;

$limite="10";//limite de mensagens por página

if ($faz_agora == 1){

    // Administrador

	$host     = "localhost";    // Host do servidor
	$user     = "admin";        // Conta do Usuario
	$pass     = "admin";        // Senha do Usuario
	$db       = "compraai";     // Banco de Dados
	
}

if ($faz_agora == 2){

    // Banco local

	$host     = "localhost";       // Host do servidor
	$user     = "root";            // Conta do Usuario
	$pass     = "1234";            // Senha do Usuario
	$db       = "bancodados";      // Banco de Dados
	
}

?>
