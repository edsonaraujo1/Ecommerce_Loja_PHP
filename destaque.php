<?
/*
 ------------------------------------------------
 Desenvolvido por...: Edson de Araujo
 Finalidade.........: Produto em Destaque
 Criado em Data.....: 14/01/2009
 Ultima Atualização : 14/01/2009 

 DEUS SEJA LOUVADO
 ------------------------------------------------
*/

// Resgata a Sessao
@session_start();
$nome3      = addslashes(strtolower($_SESSION["log_name_c"]));

include_once("config.php");

// Abre Conexão com o MySql
include("conexao.php");
// Chama o Banco de Dados

$link = @mysql_connect($host,$user,$pass);

@mysql_select_db($db);

$sql  = "SELECT * FROM produto WHERE destaque = 'SIM' ORDER BY RAND()";

$faz = 1;

// Número de registros por página
$registros_pagina = "5";

$lista = (int)$_GET["lista"];

if(!$lista) {
	$pc = "1";
}
else {
	$pc = $lista;
}

$inicio = $pc - 1;
$inicio = $inicio * $registros_pagina;

$resultado = @mysql_query("$sql LIMIT $inicio, $registros_pagina");

$todos = @mysql_query("$sql");

$tr = @mysql_num_rows($todos);

$tp = $tr / $registros_pagina;


//include('infor/online.php');

if(@mysql_num_rows($resultado) < 1) {

}
else{
	
	if ($browser != "MS Internet Explorer"){
	
	    echo "<table border=0  align=center>
	          <tr align=center colspan=2>
	          <img src='graphics/px1.gif' width='30' height='3' border='0'>
	          <div align='center'>
	          
			  
			  </div>          
	          <td>
	          <font style=' font-family: Verdana; font-size: 13px;'><b><font color='#FF850E'>OFERTAS EM<br> DESTAQUE</b></font><br><br>
	          <table border='0' align=center cellpadding='0' cellspacing='0'>";
          
     }else{
     	
	    echo "<br><table border=0  align=center>
	          <tr align=center colspan=2>
	          <div align='center'>
	          


			  </div>          
	          <td>
	          <font style=' font-family: Verdana; font-size: 13px;'><b><font color='#FF850E'>OFERTAS EM<br> DESTAQUE</b></font><br><br>
	          <table border='0' align=center cellpadding='0' cellspacing='0'>";
     }

$negrita = 1;

@session_start();
$_SESSION["entra_no_web1"] = 'at2';

       while ($linha = @mysql_fetch_array($resultado))
       {

		$id_prod    = encode5t($linha["cod_prod"]);
		$des_prod 	= $linha["nome"];
		$prog_xx    = $linha["valor"];
		$fot_peq    = $linha["fot_peq"];

        if ($faz == 1){

           $faz = 0;
        }
		   ?>	
		                 
           <tr> 
		   <td align='center'> 		
		   				  
		   <a href='loja/descricao.php?id_prod=<?=$id_prod;?>'><img id="Image1" src="<?=trim($fot_peq);?>" width="60"  height="60" border="0" /></a><br />
		   <font style=' font-family: Verdana; font-size: 11px; color=#000000;'><b><?=$des_prod;?></b></font><br />
		   <font style=' font-family: Verdana; font-size: 11px;'><b><font color="#FF3333">R$&nbsp;&nbsp; <?=$prog_xx;?></b></font>
		   </td>
		   <? 
				
		}
	}

     echo "
		     </table>
		     </td>
		     </tr>
		     </table>";

?>
			  
