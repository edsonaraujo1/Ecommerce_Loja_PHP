<?
/*
 ----------------------------------------------------------
 Desenvolvido por...: Edson de Araujo
 Finalidade.........: Pesquisa Forum
 Criado em Data.....: 02/08/2009
 Ultima Atualização : 02/08/2009 

 DEUS SEJA LOUVADO
 ----------------------------------------------------------
*/

?>
<style type="text/css">
<!--

.style19 {
	font-family: "Comic Sans MS";
	font-size: 20px;
	font-style: italic;
	color: #FFFFFF;
}

-->
</style>

<table width="100%" height="52" border="0">
            <tr>
              <td width="100%" background="../graphics/forum_baner.png"><span class="style19">&nbsp;&nbsp;iSysMP Forum</span></td>
            </tr>
          </table>
<?
include "./barrasup.php";
?>
<link rel="stylesheet" href="romano.css" type="text/css">
<style type="text/css">
<!--
.style2 {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-weight: bold;
	color: #FFFFFF;
}
.style3 {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-weight: bold;
}
-->
</style>
<body leftmargin="0" topmargin="0">
<table border="0" cellspacing="0"cellpadding="0" width="100%">
<form action="pesquisa.php?val=1" method=post name=pesquisa>
   <TR>
      <TD vAlign=top noWrap width="100%">
         
        <TABLE cellSpacing=0 cellPadding=2 border=0 width="100%">
          <TBODY> 
          <TR bgcolor="#FF9900"> 
            <TD width="100%" colspan="2" align=right><div align="center" class="style2">Pesquisa no Forum </div></TD>
            </TR>
               
          <TR bgcolor="#00CCCC"> 
            <TD align=right bgcolor="#cccccc"><img src="../graphics/pesquisar.gif" width="108" height="16"></TD>
                  
            <TD bgcolor="#cccccc"> 
              <INPUT size=40 name=string class="novo">
              &nbsp;&nbsp;&nbsp;&nbsp;
                     
              <INPUT type=submit value=Procurar class="novo"></TD>
            </TR>
              
          <TR bgcolor="#00CC99"> 
            <TD align=right bgcolor="#cccccc"><?
$sql="SELECT * FROM msg ";
$l=0;
if($val==1){
   $cont=0;
   $var = explode(' ',$string);
   if($autor != ""){
      $vetor[$cont]="autor";
      $cont++;
   }
   if($titulo != ""){
      $vetor[$cont]="titulo";
      $cont++;
   }
   if($mensagem != ""){
      $vetor[$cont]="mensagem";
      $cont++;
   }
   for($i=0;$i < $cont;$i++){
      if($i==0){
         $sql .= "where $vetor[$i] like \"%$var[0]%\" ";
         $a=1;
      }else{
         $a=0;
      }
      for (;$a < count($var); $a++) {
        $sql .= "or $vetor[$i] like \"%$var[$a]%\" ";
      }
   }
}
$sql.="ORDER BY topico ASC";
?></TD>
                 
            <TD bgcolor="#cccccc"> 
              <INPUT type=checkbox value="autor" name=autor> Autor
                    <INPUT type=checkbox CHECKED value="titulo" name=titulo>Assunto
              <INPUT type=checkbox CHECKED value="mensagem" name="mensagem"> Corpos das Mensagens              </TD>
            </TR>
          </TBODY>
        </TABLE>
      </TD>
   </TR>
</form>
</TABLE>
<table width="100%" border="0">
  <tr>
    <td><div align="center"><span class="style3">Resultado da Pesquisa </span></div></td>
  </tr>
</table>
<table  cellSpacing="0" cellPadding="0" width="100%"
border="0">
  
<?
if($string != ""){
  $strcor="semcor";
  $query=mysql_query($sql,$conn);
  $k=0;
  $cor=1;
  while($linha=mysql_fetch_row($query)){
     $titulo="Re:$linha[3]";
     if($cor == -1){
        $strcor="semcor";
     }else{
        $strcor="cor";
     }//Fim if
     if($linha[7] != $oldtopico){
        $oldtopico=$linha[7];
        $k++;
?>
  <tr vAlign="center" bgcolor="#00CCCC"> 
    <td width="227" bgcolor="#CCCCCC" class=<?=$strcor;?>>
      <table width="52%" border="0" cellspacing="0" cellpadding="0" align="center">
        <tr>
          <td>
            <table cellspacing="0" cellpadding="0" border="0" width="227">
              <tbody> 
              <tr > 
                <td class=<?=$strcor;?>>
                  <?=$k;?>
                </td>
                 <td class=<?=$strcor;?>>&nbsp; 
                  <? if ($linha[9]) { ?>
                  <? }?>
                  <a href="./ler.php?pai=<?=$linha[0];?>&titulo=<?=$titulo;?>&topico=<?=$linha[7];?>&codigo=<?=$linha[0];?>#mesg" > 
                  <?=$linha[3];?>
                  </a></td>
              </tr>
              </tbody> 
            </table>
          </td>
        </tr>
    </table>    </td>
    <td width="180"  noWrap bgcolor="#CCCCCC" class=<?=$strcor;?>><small> 
      <?=$linha[1];?>
      </small></td>
    <td width="230"  noWrap bgcolor="#CCCCCC" class=<?=$strcor;?>><small> 
      <?=$linha[5];?>
      </small></td>
  </tr>
<?
     }
     $cor=-$cor;
     $l++;
  }
}
if($l == 0){
   if($string != ""){

    	echo "<body bgcolor='#FFFFFF'><br>";
		echo "<center><b>Sua consulta não foi encontrada!</b><br></center>";
		echo "<center><b>Verifique o autor, Assunto e palavras</b><br></center>";
		echo "<center><b>contidas nos topicos</b></center>";
		echo "<center><b>Frase solicitada:</b> $string</center>";
   }else{
      echo "<tr><td>&nbsp;</td></tr>";
   }
}
?>
</table>
</html>