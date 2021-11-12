<head>
<style type="text/css">
<!--

.style19 {
	font-family: "Comic Sans MS";
	font-size: 20px;
	font-style: italic;
	color: #FFFFFF;
}
.style20 {
	color: #000000;
	font-weight: bold;
	font-size: 14px;
}

-->
</style>

</style>
</head>

<table width="100%" height="52" border="0">
            <tr>
              <td width="100%" background="../graphics/forum_baner.png"><span class="style19">&nbsp;&nbsp;iSysMP Forum</span></td>
            </tr>
          </table>
          

<?
include("func.php");
include("barrasup.php");

/*
$hist isso da corrente.
*/
$hist[0]="<img src=\"../graphics/trans(2).gif\" width=\"12\" height=\"21\">";
$hist[1]="<img src=\"../graphics/trans(2).gif\" width=\"12\" height=\"21\">";
$hist[2]="<img src=\"../graphics/trans(2).gif\" width=\"12\" height=\"21\">";
$hist[3]="<img src=\"../graphics/trans(2).gif\" width=\"12\" height=\"21\">";

$cont=0;

/*
Listas as correntes.
*/
if($modo!=2){
   $query="SELECT * FROM msg WHERE  pai=\"0\" ORDER BY `topico` DESC LIMIT $pagina,$limite";
}else{
   $query="SELECT * FROM msg WHERE  pai=\"0\" ORDER BY `time` DESC LIMIT $pagina,$limite";
}
$consulta=mysql_query($query,$conn);
while($linha=mysql_fetch_row($consulta)){

   prox_nivel($conn,0,$linha[7],1,$hist,$cont,$mesg);

}
?>
<body leftmargin="0" topmargin="0">

<table width="100%" border="0" cellspacing="0" cellpadding="0" bgcolor="#000000" align="left">
  <tr>
    <td>
      <table  cellspacing="1" cellpadding="0" width="100%"
border="0" align="center">
        <tr  > 
          <td  class="titulo3" width="100%" align="center"><small><img src="../graphics/espacador_tb.gif" width="10" height="10"></small><span class="style20">Topico</span></td>
          <td  noWrap width="100%" class="titulo3" align="center"><small><img src="../graphics/espacador_tb.gif" width="10" height="10"></small><span class="style20">Autor</span><img src="../graphics/espacador_tb.gif" width="10" height="10"></td>
          <td  noWrap width="100%" class="titulo3" align="center"><small><img src="../graphics/espacador_tb.gif" width="10" height="10"></small><span class="style20">Data</span><img src="../graphics/espacador_tb.gif" width="10" height="10"></td>
        </tr>
        <?
$cor=1;//Variavel responsavel pelas cores alternadas
for($i=0;$i < $cont;$i++){
   $cor=-$cor;
   if($cor == -1){
      $strcor="semcor";
   }else{
      $strcor="cor";
   }//Fim if
?>
        <tr valign="center"> 
          <td class=<?=$strcor;?> width="372" bgcolor="#00CCCC"> 
            <table cellspacing="0" cellpadding="0" border="0" width="100%">
              <tbody> 
              <tr > 
                <td class=<?=$strcor;?> width="90"> <small><img src="../graphics/espacador_tb.gif" width="10" height="10"></small>
                  <?=$mesg[$i][0];?>
                </td>
                <td class=<?=$strcor;?> width="241"> <small><img src="../graphics/espacador_tb.gif" width="10" height="10"></small>
                  <? if ($mesg[$i][5]) { ?>
                  <? }?>
                  <?=$mesg[$i][1];?>
                </td>
              </tr>
              </tbody> 
            </table>
          </td>
          <td  noWrap class=<?=$strcor;?> width="100%" bgcolor="#00CCCC"><small> 
            <img src="../graphics/espacador_tb.gif" width="10" height="10">
            <?=$mesg[$i][2];?>
            </small><img src="../graphics/espacador_tb.gif" width="10" height="10"></td>
          <td  noWrap class=<?=$strcor;?> width="100%" bgcolor="#00CCCC"><small> 
            <img src="../graphics/espacador_tb.gif" width="10" height="10">
            <?=$mesg[$i][3];?>
&nbsp;&nbsp;            </small><img src="../graphics/espacador_tb.gif" width="10" height="10"></td>
        </tr>
        <?
}//Fim for
?>
      </table>
      
    </td>
  </tr>
  
</table><br /><br />



<?



//include("barrasup.php");

include "barrainf.php";
?>