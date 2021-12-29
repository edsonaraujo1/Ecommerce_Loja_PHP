<?
/*
 ------------------------------------------------
 Desenvolvido por...: Edson de Araujo
 Finalidade.........: Conectar ao Banco de Dados
 Criado em Data.....: 07/12/2007
<<<<<<< HEAD
 Ultima Atualiza��o : 07/12/2007 
=======
 Ultima Atualização : 07/12/2007 
>>>>>>> d5e8136038a2e8b574efb99c20e7d0505b767eb8

 DEUS SEJA LOUVADO
 ------------------------------------------------
*/

// Legendas
// 1 localhost Administrador
// 2 maquina isolada


// Mudar aqui
$faz_agora = 1;

<<<<<<< HEAD
$limite="10";//limite de mensagens por p�gina
=======
$limite="10";//limite de mensagens por página
>>>>>>> d5e8136038a2e8b574efb99c20e7d0505b767eb8

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

<<<<<<< HEAD
if ($faz_agora == 3){
	
	// Banco Rede server 2003
	
	$host  = "192.168.1.50";   // Host do servidor
	$user  = "sindificios";     // Conta do Usuario
	$pass  = "@12XLSIN_!?";     // Senha do Usuario
	$db    = "site";      // Banco de Dados
	
}

if ($faz_agora == 4){
	
	// Banco Internet
	
	$host  = "sql.intranet";         // Host do servidor
	$user  = "sindificios";          // Conta do Usuario
	$pass  = "dx2005yw";             // Senha do Usuario
	$db    = "sindificios";          // Banco de Dados
	
}

if ($faz_agora == 5){
	
	// Banco Internet
	
	$host  = "localhost";         // Host do servidor
	$user  = "root";              // Conta do Usuario
	$pass  = "12345";             // Senha do Usuario
	$db    = "site";        // Banco de Dados
	
}

=======
>>>>>>> d5e8136038a2e8b574efb99c20e7d0505b767eb8
?>
