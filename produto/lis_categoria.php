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

// Abre Conexão com o MySql
include("../conexao.php");
// Chama o Banco de Dados

$link = @mysql_connect($host,$user,$pass);

@mysql_select_db($db);

$sql  = "SELECT * FROM produto WHERE destaque = 'SIM' ORDER BY codigo ASC";

$faz = 1;

// Número de registros por página
$registros_pagina = "12";

$lista = (int)$_GET["lista"];

if(!$lista) {
	$pc = "1";
}
else {
	$pc = $lista;
}

$inicio = $pc - 1;
$inicio = $inicio * $registros_pagina;

$resultado = mysql_query("$sql LIMIT $inicio, $registros_pagina");

$todos = mysql_query("$sql");

$tr = mysql_num_rows($todos);

$tp = $tr / $registros_pagina;

if(mysql_num_rows($resultado) < 1) {

}
else {
	
      echo "
          <div id='menu_1' style='Z-INDEX: 50; LEFT: 0px; WIDTH: 100%px; POSITION: absolute; TOP: 150px; HEIGHT: 100%px'>
          <table border=0  align=center>
          <tr align=center colspan=2>
          <td>
          <font style=' font-family: Verdana; font-size: 11px;'><b><font color='#FF8400'>Ofertas em<br> Destaque</b></font><br><br>
          <table border='0' align=center cellpadding='0' cellspacing='0'>";

$negrita = 1;

       while ($linha = mysql_fetch_array($resultado))
       {

		$id_prod    = $linha["cod_prod"];
		$des_prod 	= $linha["nome"];
		$prog_xx    = $linha["valor"];
		$fot_peq    = $linha["fot_peq"];

        if ($faz == 1){

           $faz = 0;
        }
		   ?>	
		                 
           <tr> 
		   <td align='center'> 						  
		   <a href='incluir_categoria.php?'><img id="Image1" src="../<?=trim($fot_peq);?>" width="60"  height="50" border="0" /></a><br />
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
		     </table>
		     </div>";
?>
