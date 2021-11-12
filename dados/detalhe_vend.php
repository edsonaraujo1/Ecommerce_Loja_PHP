<?
include('aguarde.php');

include('titulo.php');

// Abre Conexão com o MySql
include("../conexao.php");

// Resgata a Sessao
@session_start();
$ser_name3_c    = $_SESSION["log_name_c"];
$acesso_2       = $_SESSION['data_log_2'];

$date1     = date("d/m/Y");
$hora      = date("H:i:s");

// Chama o Banco de Dados

$link = @mysql_connect($host,$user,$pass);

@mysql_select_db($db);

$consulta4  = "SELECT * FROM tt_ser_01 WHERE codigo = '". decode5t($prod) ."'";
					
$resultado4 = @mysql_query($consulta4);
				
$row4 = @mysql_fetch_array($resultado4);
					
$id           = @$row4["codigo"];
$ligon        = @$row4["login"];
$nome         = @$row4["nome"];      		
$sobrenome    = @$row4["sobrenome"];
$id_email     = @$row4["e_mail"];
$rua          = @$row4["rua"];
$endereco     = @$row4["endereco"];
$bairro       = @$row4["bairro"];
$cidade       = @$row4["cidade"];
$estado       = @$row4["estado"];
$cep          = @$row4["cep"];
$fone_fix     = @$row4["fone_fix"];
$id_fone      = @$row4["fone_cel"];
$positivo     = @$row4["positivo"];
$negativo     = @$row4["negativo"];
$data_2       = @$row4["data"];
$excluido     = @$row4["excluido"];

if ($excluido == "SIM"){
	
	$user_ativ = "EXCLUIDO";
}else{

	$user_ativ = "ATIVO";
	
}
$mes_a = substr($data_2,3,2);

if ($mes_a == 1){
	$mes_a1 = "Janeiro";
}
if ($mes_a == 2){
	$mes_a1 = "Fevereiro";
}
if ($mes_a == 3){
	$mes_a1 = "Março";
}
if ($mes_a == 4){
	$mes_a1 = "Abril";
}
if ($mes_a == 5){
	$mes_a1 = "Maio";
}
if ($mes_a == 6){
	$mes_a1 = "Junho";
}
if ($mes_a == 7){
	$mes_a1 = "Julho";
}
if ($mes_a == 8){
	$mes_a1 = "Agosto";
}
if ($mes_a == 9){
	$mes_a1 = "Setembro";
}
if ($mes_a == 10){
	$mes_a1 = "Outubro";
}
if ($mes_a == 11){
	$mes_a1 = "Novembro";
}
if ($mes_a == 12){
	$mes_a1 = "Dezembro";
}
$ano_a = substr($data_2,6,4);

?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title><?=$Titulo;?></title>
<link rel="shortcut icon" href="../graphics/favicon.ico"/>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"/>
</head>

<body>
<table width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td bgcolor="#FF9900"><table width="100%" border="0" cellpadding="0" cellspacing="1">
      <tr>
        <td bgcolor="#FDECDB"><img src="../graphics/px1.gif" width="15" height="14"><b><font color="#FF6600" face="Arial">Perfil do Usuario </font></b></td>
      </tr>
    </table></td>
  </tr>
</table>
<table width="100%" border="0">
  <tr>
    <td width="1%" align="center" valign="top">
	        <?
	        include('lay_menu.php');
	        ?>
      <br>      <table width="128" border="0">
        <tr>
          <td width="130" align="center"> <b>N&ordm; de visitas</b> </td>
        </tr>
        <tr>
          <td align="center"><?=$qtd_ivisita;?></td>
        </tr>
      </table>      <br>    </td>
    <td width="98%" valign="top">
	<!-- Inicioda do Layout -->
    <table width="100%" border="0" cellpadding="0">
      <tr>
        <td bgcolor="#FFBE66"><div align="center"><font size="3"><b><font color="#FFFFFF" face="Verdana">Usuario - <?=$user_ativ;?> - </font></b></font></div></td>
      </tr>
    </table>    
    <div align="center"></div>
    
	  <table width="100%" border="0" cellpadding="0" cellspacing="1" bgcolor="#FF9900">
    <tr>
      <td width="100%"><div align="center">
        <table width="100%%" border="0" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
          <tr>
            <td width="162" bgcolor="#FDECDB"><font size="-1" face="Verdana"><b>&nbsp;Usuario desde:</b></font></td>
            <td width="330" bgcolor="#FDECDB"><b>&nbsp;<?=$mes_a1;?>&nbsp; - <?=$ano_a;?></b></td>
            <td width="316" bgcolor="#FDECDB">&nbsp;</td>
          </tr>
          <tr>
            <td height="25"><font size="-1" face="Verdana"><b>&nbsp;Nome:</b></font></td>
            <td>&nbsp;<?=$nome;?>&nbsp;&nbsp;<?=$sobrenome;?> </td>

            <td><font size="-1" face="Verdana"><b>&nbsp;Contato:</b>&nbsp;<?=$fone_fix;?>&nbsp;/&nbsp;<?=$id_fone;?></font></td>
          </tr>
          <tr>
            <td bgcolor="#FDECDB"><font size="-1" face="Verdana"><b>&nbsp;Vendas:</b></font></td>
            <td bgcolor="#FDECDB">&nbsp;12 Produtos - 1 Loja </td>
            <td bgcolor="#FDECDB"><font size="-1" face="Verdana"><b>&nbsp;Localidade:</b>&nbsp;<?=$cidade;?>&nbsp;/&nbsp;<?=$estado;?></font></td>
          </tr>
          <tr>
            <td><font size="-1" face="Verdana"><b>&nbsp;Pontos Positivos:</b></font></td>
            <td>&nbsp;<?=include('positivo.php');?></td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td bgcolor="#FDECDB"><font size="-1" face="Verdana"><b>&nbsp;Pontos Negativos: </b></font></td>
            <td bgcolor="#FDECDB">&nbsp;<?=include('negativo.php');?></td>
            <td bgcolor="#FDECDB">&nbsp;</td>
          </tr>
        </table>
      </div></td>
    </tr>
  </table>
	  <div align="center"><br>
	    <table width="200" border="0">
          <tr>
            <td><img src="../graphics/positivas.png" width="136" height="32"></td>
            <td>&nbsp;</td>
            <td><img src="../graphics/negativas.png" width="136" height="32"></td>
            <td>&nbsp;</td>
            <td><img src="../graphics/neutras.png" width="136" height="32"></td>
          </tr>
        </table>
	    <br>
	    <table width="100%" border="0">
          <tr>
            <td bgcolor="#FFBE66"><div align="center"><font size="2"><b><font face="Verdana">Outras Vendas deste Usuario</font></b> </font></div></td>
          </tr>
        </table>
	    <br>
	  
	  <?
	  include('destaque_mercado.php');
	  ?>
        <!-- Fim do Layout -->
    </div></td>
    <td width="1%"><div align="center"><img src="../graphics/px1.gif" width="8" height="10"></div></td>
  </tr>
</table>
</body>
</html>

<?
include('rodape.php');
?>