<body  style="background-color: #FFB368">

<script>
function refresh(){
	setTimeout('dorefresh()', 30000);
}
function dorefresh(){
	window.location.reload();
}
</script>

<?php

/**
 * @author holodek
 * @copyright 2010
 */


include_once("../config.php");

// Resgata a Sessao
@session_start();
$nome2 = strtolower($_SESSION["log_name_c"]);

include_once('../sql_injection.php');

// Abre Conexão com o MySql
include("../conexao.php");
// Chama o Banco de Dados

$link = @mysql_connect($host,$user,$pass);

@mysql_select_db($db);



//    @mysql_close();   


  //--- Informa quantos usuarios estao conectados ao sistema
  $date_time = date("d/m/Y");
  $hora_time = date("H:i:s");
  $timestamp=time(); 
  $timeout=time()-100; // valor em segundos 
  $result=@mysql_db_query($db, "INSERT INTO useronline VALUES ('$timestamp','$REMOTE_ADDR','$PHP_SELF','$date_time','$hora_time','$ser_name3_c')");
  $result=@mysql_db_query($db, "DELETE FROM useronline WHERE timestamp<$timeout"); 
  $result=@mysql_db_query($db, "SELECT DISTINCT ip FROM useronline"); 
  $usuarios2=@mysql_num_rows($result); 
//  @mysql_close();   

if ($usuarios2 == 0){
	
  $result=@mysql_db_query($db, "INSERT INTO useronline VALUES ('$timestamp','$REMOTE_ADDR','$PHP_SELF','$date_time','$hora_time','$ser_name3_c')");

}

?>


<div style="Z-INDEX: 500; LEFT: 0px; WIDTH: 130px; POSITION: absolute; TOP: -5px; HEIGHT: 22px; background-color: #FFB368">
<font color="#FFFFFF" face="Ariel" size="2"><span class="style17">&nbsp;&nbsp;&nbsp;<?=$usuarios2;?>&nbsp;usu&aacute;rio(s) on-line</font>
</div>

<script>
refresh();
</script>
</body>