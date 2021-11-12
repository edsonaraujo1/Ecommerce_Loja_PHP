<?
/*
 -----------------------------------------
 Desenvolvido por...: Edson de Araujo
 Desenvolvido por...: Jean Carlos de Araujo
 
 Finalidade.........: Contador de Visitas
 Criado em Data.....: 06/07/2009
 Ultima Atualização : 07/07/2009 

 DEUS SEJA LOUVADO
 -----------------------------------------
*/

@session_start();
$ser_name3_c    = strtoupper($_SESSION["log_name_c"]);
$acesso_2       = $_SESSION['data_log_2'];

if (!empty($ser_name3_c)){

}else{
	$ser_name3_c = trim(strtoupper("Visitante"));
}


//echo $ser_name3_c;


// Abre Conexão com o MySql
include("conexao.php");
// Chama o Banco de Dados

$link = @mysql_connect($host,$user,$pass)

    or die( include("server.php"));

@mysql_select_db($db);


  // --- Informa No de Visitas
    
// Abre Tabela
$consulta  = "SELECT * FROM log_user_event ORDER BY id DESC LIMIT 0,1";
	
$resultado = @mysql_query($consulta);

$row = @mysql_fetch_array($resultado);

$qtd_i   = @$row["QTD"];
$data_i  = @$row["DATA"];
$nome_i  = @$row["USUARIO"];
$ip_i    = @$row["IP"];

// Atualiza arquivo Log
$data_log = date("d/m/Y");
$hora_log = date("H:i:s"); 
$even_log = "VISITA NO SITE -";
$qtd_novo = $qtd_i+1;

//if (empty($ser_name3_c)){
$consulta_log = "INSERT INTO log_user_event (IP,
                                             DATA,
  						                     EVENTO,
											 HORA,
											 USUARIO,
											 ARQUIVO,
											 QTD)
									   
	                           VALUES ('$REMOTE_ADDR',
							           '$data_log',
									   '$even_log',
									   '$hora_log',
									   '$ser_name3_c',
									   '$PHP_SELF',
									   '$qtd_novo')";
	
	
		
@mysql_query($consulta_log, $link) or die ("erro ");
//}

$consulta1  = "SELECT * FROM log_user_event ORDER BY id DESC LIMIT 0,1";
	
$resultado1 = @mysql_query($consulta1);

$row1 = @mysql_fetch_array($resultado1);

$qtd_ivisita  = @$row1["QTD"];
$id_cons      = @$row1["id"];


for ($i = 0; $i < strlen($qtd_ivisita); $i++) //"anda" pelos números de $counter
{
    $imgsrc = substr($qtd_ivisita,$i ,1); //armazena o número que está sendo analisado em $imgsrc
    $ima_01[$i]  = trim("graphics/im/".$imgsrc.".gif");
}

if(!empty($ima_01[0])){
   $fim_00 = "<img src=".$ima_01[0].">";
}
if(!empty($ima_01[1])){
   $fim_01 = "<img src=".$ima_01[1].">";
}
if(!empty($ima_01[2])){
   $fim_02 = "<img src=".$ima_01[2].">";
}
if(!empty($ima_01[3])){
   $fim_03 = "<img src=".$ima_01[3].">";
}
if(!empty($ima_01[4])){
   $fim_04 = "<img src=".$ima_01[4].">";
}
if(!empty($ima_01[5])){
   $fim_05 = "<img src=".$ima_01[5].">";
}
if(!empty($ima_01[6])){
   $fim_06 = "<img src=".$ima_01[6].">";
}
if(!empty($ima_01[7])){
   $fim_07 = "<img src=".$ima_01[7].">";
}
if(!empty($ima_01[8])){
   $fim_08 = "<img src=".$ima_01[8].">";
}
if(!empty($ima_01[9])){
   $fim_09 = "<img src=".$ima_01[9].">";
}

$qtd_ivisita = trim($fim_00.$fim_01.$fim_02.$fim_03.$fim_04.$fim_05.$fim_06.$fim_07.$fim_08.$fim_09);

  //--- Informa quantos usuarios estao conectados ao sistema
  $date_time = date("d/m/Y");
  $hora_time = date("H:i:s");
  $timestamp=time(); 
  $timeout=time()-100; // valor em segundos 
  $result=@mysql_db_query($db, "INSERT INTO useronline VALUES ('$timestamp','$REMOTE_ADDR','$PHP_SELF','$date_time','$hora_time','$ser_name3_c')");
  $result=@mysql_db_query($db, "DELETE FROM useronline WHERE timestamp<$timeout"); 
  $result=@mysql_db_query($db, "SELECT DISTINCT ip FROM useronline"); 
  $usuarios=@mysql_num_rows($result); 
  @mysql_close();   

//echo $qtd_ivisita;

?>