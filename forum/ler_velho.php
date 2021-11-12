<?
/*
 ----------------------------------------------------------
 Desenvolvido por...: Edson de Araujo
 Finalidade.........: Motrar Topicos
 Criado em Data.....: 02/08/2009
 Ultima Atualização : 11/11/2010 

 DEUS SEJA LOUVADO
 ----------------------------------------------------------
*/

// Resgata a Sessao
@session_start();
$ser_name3_c    = $_SESSION["log_name_c"];
$acesso_2 = $_SESSION['data_log_2'];

if (!empty($ser_name3_c)){
	
	$permissao = 12;
}else{
	$permissao = 0;
	
}

// Abre Conexão com o MySql
include("../conexao.php");

// Resgata a Sessao
@session_start();
$ser_name3_c    = $_SESSION["log_name_c"];
$acesso_2 = $_SESSION['data_log_2'];
$novo_new = $_SESSION['novo_new'];

$link = @mysql_connect($host,$user,$pass)

    or die( require("../login.php"));

@mysql_select_db($db);

$consulta  = "SELECT * FROM tt_ser_01 WHERE login = '$ser_name3_c'";
					
$resultado = @mysql_query($consulta);

// Incrementa novo codigo
					
$row = @mysql_fetch_array($resultado);
					
$codigo 	= @$row["codigo"];             
$nome 		= trim(@$row["nome"])." ".trim(@$row["sobrenome"]);      		
$mail_des 	= @$row["e_mail"];
$login 		= @$row["login"];
$foto_pda   = @$row["foto_peq"];


if (!empty($codigo)){
	
//	$res = 0;
}else{
//	$res = 0;
	
}

?><head>
<style type="text/css">
<!--


body {
	   SCROLLBAR-ARROW-COLOR: blue;
	   SCROLLBAR-BASE-COLOR: #FFC082
	   
}

.style19 {
	font-family: "Comic Sans MS";
	font-size: 20px;
	font-style: italic;
	color: #FFFFFF;
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

include_once("moderador.php");

include "barrasup.php";

/*
Função que lê as mensagens de  um topico

$conn variavel de conexao do MySQL
$pai variavel que  informa  o pai da mensagem
$topico variavel que  informa  o topico da mensagem
$codigo variavel usada para marcar o indicador para pagina
*/

//echo $pai."<br>";
//echo $titulo."<br>";
//echo $topico."<br>";
//echo $codigo1."<br>";


//break;
function read($conn,$pai,$topico,$codigo)
{
	
	
   if($pai == 0)
   {
      $query="SELECT * FROM msg WHERE (pai=\"0\" AND topico=$topico)";
   }else{
      $query="SELECT * FROM msg WHERE  pai=\"$pai\" ORDER BY `codigo` ASC";
   }
   $consulta=mysql_query($query,$conn);
   while($linha=mysql_fetch_row($consulta)){
      $consulta2 = "SELECT COUNT(*) as total FROM msg WHERE pai=\"$pai\"";
      $quantidade = mysql_query($consulta2, $conn);
      $total = mysql_result($quantidade, 0, "total");
      if($linha[0]==$codigo){ //Marca o indicador
         echo "<a name=\"mesg\"></a>";
      }
      $mes=retiraCaracteres(encode_msg(retirar_carac($linha[4])));
      $mes = eregi_replace("([ \\t]|^)www."," http://www.",$mes);
      $mes = eregi_replace("([ \\t]|^)ftp\\."," ftp://ftp.",$mes);
      $mes = eregi_replace("(http://[^ )\r\n]+)","<A href='\\1\\' target='_blank'>\\1</A>",$mes);
      $mes = eregi_replace("(https://[^ )\r\n]+)","<A href='\\1\\' target='_blank'>\\1</A>",$mes);
      $mes = eregi_replace("(ftp://[^ )\r\n]+)","<A href='\\1' target='_blank'>\\1</A>",$mes);
      $mes = eregi_replace("([-a-z0-9_]+(\\.[_a-z0-9-]+)*@([a-z0-9-]+(\\.[a-z0-9-]+)+))","<A HREF='mailto:\\1'>\\1</A>",$mes);

if ($linha[12] == 0){
	
	
}else{
?>
<br>
<table width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td width="1%" height="70"><img src="../graphics/bor_1a.png" width="100%" height="100%"></td>
    
	
	
	      <?
      if (!empty($linha[10])){
      ?>	
    <td width="7%" align="left" bgcolor="#FFB974"><div align="left"><img src="../graphics/espacador_tb.gif" width="10" height="3">        <img src="../cadastro/<?=$linha[10];?>" width="65" height="65"></div></td>
      <?
	  }else{
	  ?>	
    <td width="7%" align="left" bgcolor="#FFB974"><div align="left"><img src="../graphics/espacador_tb.gif" width="10" height="3">        <img src="../graphics/corpo_msg/foto_padrao65.jpg" width="65" height="65"></div></td>
	  <?	
	  } 
	  ?> 
	
	<td width="1%" bgcolor="#FFB974"></td>
    <td width="81%" bgcolor="#FFB974"><table width="100%" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td width="708"><img src="../graphics/espacador_tb.gif" width="10" height="10"><b>          <?=$linha[3];?></b></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td><img src="../graphics/espacador_tb.gif" width="10" height="10">          <?=$linha[5];?></td>
      </tr>
    </table></td>
    <td width="2%"><img src="../graphics/bor_1b.png" width="100%" height="100%"></td>
    <td width="1%"><img src="../graphics/espacador_tb.gif" width="15" height="10"></td>
  </tr>
</table>
<table width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td width="9" bgcolor="#FFB974">&nbsp;</td>
    <td width="291" bgcolor="#FFB974"><a href="mailto:<?=$linha[2];?>?subject=<?=$linha[3];?>"><b>&nbsp;&nbsp;.:
          <?=strtoupper($linha[1]);?>
&nbsp;:.</b> </a></td>
    <td width="643" bgcolor="#FFB974">&nbsp;</td>
    <td width="15" bgcolor="#FFB974">&nbsp;</td>
    <td width="15"><img src="../graphics/espacador_tb.gif" width="15" height="10"></td>
  </tr>
</table>
<table width="100%" height="1%"  border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td width="10" height="100%" bgcolor="#FFB974">&nbsp;</td>
    <td width="932" bgcolor="#FFB974"><img src="../graphics/forum_msg_r1_c1.gif" width="100%" height="12"></td>
    <td width="2%" bgcolor="#FFB974"></td>
    <td width="15"><img src="../graphics/espacador_tb.gif" width="15" height="10"></td>
  </tr>
</table>
<table width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td width="1%" height="63" bgcolor="#FFB974">&nbsp;</td>
    <td width="96%" valign="top" bgcolor="#DDDDDD"><?=$mes;?>
      <div align="right"><br>
        <br>
        <?
	
	if ($linha[6] == 0){
		$dona_top = $linha[2];
		@session_start();
		$_SESSION["dona_top"]  = $linha[2]; 
		$_SESSION["nome_dona"] = $linha[1];
		
	}	
	
		@session_start();
		$dona_top  = $_SESSION["dona_top"]; 
		$nome_dona = $_SESSION["nome_dona"];
	
	?>
            <a href="ler.php?topico=<?=$linha[7];?> &titulo=<?="$linha[3]";?> &user_top=<?=$nome_dona;?> &email_per=<?=$dona_top;?> &res=1 &pai=<?=$linha[0];?>  #form"><img src="../graphics/responder.gif" border="0" align="bottom"/></a>
        <br>
    </div></td>
    <td width="2%" bgcolor="#FFB974">&nbsp;</td>
    <td width="1%"><img src="../graphics/espacador_tb.gif" width="15" height="10"></td>
  </tr>
  <tr>
    <td height="20"><img src="../graphics/bor_1a1.png" width="100%" height="20"></td>
    <td bgcolor="#FFB974"><img src="../graphics/espacador_tb.gif" width="10" height="10"></td>
    <td><img src="../graphics/bor_1ba.png" width="100%" height="20"></td>
    <td><img src="../graphics/espacador_tb.gif" width="15" height="10"></td>
  </tr>
</table>
<link rel="stylesheet" href="../forum.css" type="text/css">
<table width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td><img src="../graphics/forum_msg_r6_c1.gif" width="100%" height="21"></td>
  </tr>
</table>
<?
}

      if($total != 0){
         read($conn,$linha[0],$topico,$codigo);
      }
   }
   
}
  

read($conn,0,$topico,$codigo);


if ($res == 1){

	   @session_start();
	   $_SESSION['novo_new'] = "velho_new";
		
	   include "barrainf.php";	
       include "form.php";   
       $res = 0; 
	
}else{

?>
<!--
<table width="100%" height="105" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td height="101"><div align="center"><font color="#FF0000"><b>ATENÇÃO</b></font> <strong>para se corresponder pelo Forum e preciso se cadastrar<br>
  e gratuito, os dados e apenas para seguran&ccedil;a tanto de quem<br>
      pergunta quanto para quem responde<br>
      Cadastre-se e se possivel inclua uma foto sua<br>
      Para se cadastrar Clique</strong> <a href="../../cadastro/layout.php?entra_no_web1=at2"><font color="#0000CC"><b></b><u>AQUI</u></b></font></a><br>
      <strong>Obrigado !!!</strong><br>
    </div>
    <p></p></td>
  </tr>
</table>
-->
<?
}

include "barrasup.php";		


Function retirar_carac($var){

$var = ereg_replace("[ÁÀÂ]",        "A",$var);
$var = ereg_replace("[áàâª]",       "a",$var);
$var = ereg_replace("[ÉÈÊ]",         "E",$var);
$var = ereg_replace("[éèê]",         "e",$var);
$var = ereg_replace("[ÓÒÔÕ]",        "O",$var);
$var = ereg_replace("[óòôõº]",       "o",$var);
$var = ereg_replace("[ÚÙÛ]",         "U",$var);
$var = ereg_replace("[úùû]",         "u",$var);
$var = ereg_replace("[*#'´`!$%¨]",  " ",$var);
$var = str_replace("\\",             " ",$var);
$var = str_replace(" or ",           " ",$var);
$var = str_replace("select ",        " ",$var);
$var = str_replace("delete ",        " ",$var);
$var = str_replace("create ",        " ",$var);
$var = str_replace("drop ",          " ",$var);
$var = str_replace("update ",        " ",$var);
$var = str_replace("drop table",     " ",$var);
$var = str_replace("show table",     " ",$var);
$var = str_replace("applet",         " ",$var);
$var = str_replace("objetc",         " ",$var);
$var = str_replace("where",          " ",$var);

return($var);
}

?>
