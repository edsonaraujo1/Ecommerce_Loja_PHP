<?
/*
 ----------------------------------------------------------
 Desenvolvido por...: Edson de Araujo
 Finalidade.........: Motrar Topicos
 Criado em Data.....: 02/08/2009
 Ultima Atualização : 02/08/2009 

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
	
	$res = 1;
}else{
	$res = 0;
	
}

?>

<head>
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
      $consulta2 = "SELECT COUNT(*) as total FROM msg WHERE pai=\"$linha[0]\"";
      $quantidade = mysql_query($consulta2, $conn);
      $total = mysql_result($quantidade, 0, "total");
      if($linha[0]==$codigo){ //Marca o indicador
         echo "<a name=\"mesg\"></a>";
      }
      $mes=retiraCaracteres(encode_msg($linha[4]));
      $mes = eregi_replace("([ \\t]|^)www."," http://www.",$mes);
      $mes = eregi_replace("([ \\t]|^)ftp\\."," ftp://ftp.",$mes);
      $mes = eregi_replace("(http://[^ )\r\n]+)","<A href='\\1\\' target='_blank'>\\1</A>",$mes);
      $mes = eregi_replace("(https://[^ )\r\n]+)","<A href='\\1\\' target='_blank'>\\1</A>",$mes);
      $mes = eregi_replace("(ftp://[^ )\r\n]+)","<A href='\\1' target='_blank'>\\1</A>",$mes);
      $mes = eregi_replace("([-a-z0-9_]+(\\.[_a-z0-9-]+)*@([a-z0-9-]+(\\.[a-z0-9-]+)+))","<A HREF='mailto:\\1'>\\1</A>",$mes);


?>
<link rel="stylesheet" href="forum.css" type="text/css">

<style type="text/css">
<!--
.style1 {color: #FFFFFF}
-->
</style>
<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
  <!--DWLayoutTable-->
  <!-- fwtable fwsrc="forum_msg.png" fwbase="forum_msg.gif" fwstyle="Dreamweaver" fwdocid = "742308039" fwnested="0" -->
  <tr> 
    <td height="1" colspan="3"><img src="../graphics/corpo_msg/spacer.gif" width="25" height="1" border="0"></td>
    <td width="4"><img src="../graphics/corpo_msg/spacer.gif" width="1" height="1" border="0"></td>
  </tr>
  <tr> 
    <td width="49" height="24">&nbsp;</td>
    <td width="100%">&nbsp;</td>
    <td width="32">&nbsp;</td>
    <td><img src="../graphics/corpo_msg/spacer.gif" width="1" height="24" border="0"></td>
  </tr>
  <tr> 
    <td height="119" colspan="3"><table width="100%" border="0" cellpadding="0" cellspacing="0" bordercolor="#000000">
      <tr>
      <?
      if (!empty($linha[10])){
      ?>	
        <td><div align="left">&nbsp;&nbsp;<img src="../cadastro/<?=$linha[10];?>" width="65" height="65"></div></td>
      <?
	  }else{
	  ?>	
        <td><div align="left">&nbsp;&nbsp;<img src="../graphics/corpo_msg/foto_padrao65.jpg" width="65" height="65"></div></td>
	  <?	
	  } 
	  ?> 
      </tr>
      <tr>
        <td><a href="mailto:<?=$linha[2];?>?subject=<?=$linha[3];?>">
        </a>
          &nbsp;&nbsp;<?=$linha[3];?></td>
      </tr>
      <tr>
        <td><a href="mailto:<?=$linha[2];?>?subject=<?=$linha[3];?>">
          <b>&nbsp;&nbsp;.:&nbsp;<?=strtoupper($linha[1]);?>&nbsp;:.</b>
        </a></td>
      </tr>
      <tr>
        <td width=5 height=5>&nbsp;&nbsp;<?=$linha[5];?></td>
      </tr>
    </table></td>
    <td>&nbsp;&nbsp;<img src="../graphics/corpo_msg/spacer.gif" width="1" height="29" border="0"></td>
  </tr>
  <tr> 
    <td height="29" colspan="2" valign="top"><div align="left">&nbsp;&nbsp;<img src="../graphics/forum_msg_r1_c1.gif" width="100%" height="24"></div></td>
    <td>&nbsp;</td>
    <td rowspan="2">&nbsp;&nbsp;<img src="../graphics/corpo_msg/spacer.gif" width="1" height="51" border="0"></td>
  </tr>
  <tr>
    <td height="94" valign="top"><!--DWLayoutEmptyCell-->&nbsp;</td>
    <td valign="top" bgcolor="#FFFFFF"> 
      <?=$mes;?>      <div align="right"><br>
    
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
	
	        </div></td>
    <td>&nbsp;</td>
  </tr>
  <tr> 
    <td height="21" colspan="3" valign="top">&nbsp;&nbsp;<img src="../graphics/forum_msg_r6_c1.gif" width="100%" height="23"></td>
    <td><!--DWLayoutEmptyCell-->&nbsp;</td>
  </tr>
</table>
<table width="100%" border="0" cellspacing="0" cellpadding="0" bgcolor="#D4D0C8" align="center">
  <tr> 
    <td bgcolor="#FFFFFF"><span class="style1"></span></td>
  </tr>
  <tr>
    <td bgcolor="#FFFFFF">&nbsp;</td>
  </tr>
</table>
<?


      if($total != 0){
         read($conn,$linha[0],$topico,$codigo);
      }
   }
   
}

read($conn,0,$topico,$codigo);


if ($res == 1){

		
	   include "barrainf.php";	
       include "form.php";   
       $res = 0; 
	
}else{

?>

<table width="100%" height="105" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td height="101"><div align="center"><font color="#FF0000"><b>ATENÇÃO</b></font> <strong>para se corresponder pelo Forum e preciso se cadastrar<br>
  e gratuito, os dados e apenas para seguran&ccedil;a tanto de quem<br>
      pergunta quanto para quem responde<br>
      Cadastre-se e se possivel inclua uma foto sua<br>
      Para se cadastrar Clique</strong> <a href="../cadastro/layout.php?entra_no_web1=at2"><font color="#0000CC"><b></b><u>AQUI</u></b></font></a><br>
      <strong>Obrigado !!!</strong><br>
    </div>
    <p></p></td>
  </tr>
</table>
<?
}

include "barrasup.php";		
?>
