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
// 2 localhost Sindificios
// 3 Server 192.168.1.100
// 4 Intranet Locasite
// 5 maquina isolada


// Mudar aqui
$faz_agora = 5;

$limite="10";//limite de mensagens por página

if ($faz_agora == 1){

    // Administrador

	$host     = "localhost";      // Host do servidor
	$user     = "admin_1";        // Conta do Usuario
	$pass     = "!_@ADM?12";      // Senha do Usuario
	$db       = "bancodados";     // Banco de Dados
	
}

if ($faz_agora == 2){

    // Banco local

	$host     = "localhost";       // Host do servidor
	$user     = "sindificios";     // Conta do Usuario
	$pass     = "@12xlsin_!?";     // Senha do Usuario
	$db       = "bancodados";      // Banco de Dados
	
}

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

if ($faz_agora == 6){
	
	// Banco Internet
	
	$host  = "fdb2.leadhoster.com";         // Host do servidor
	$user  = "318737_sysmp";              // Conta do Usuario
	$pass  = "xt909z";             // Senha do Usuario
	$db    = "318737_sysmp";        // Banco de Dados
	
}

if ($faz_agora == 7){
	
	// Banco Bysite .com
	
	$host  = "localhost";         // Host do servidor
	$user  = "isysmpbr_isysmp";              // Conta do Usuario
	$pass  = "xt909z";             // Senha do Usuario
	$db    = "isysmpbr_site";        // Banco de Dados
	
}

if ($faz_agora == 8){
	
	// Banco Bysite .com.br
	
	$host  = "localhost";         // Host do servidor
	$user  = "isysmpco_site02";              // Conta do Usuario
	$pass  = "xt909z";             // Senha do Usuario
	$db    = "isysmpco_site";        // Banco de Dados
	
}

?>
