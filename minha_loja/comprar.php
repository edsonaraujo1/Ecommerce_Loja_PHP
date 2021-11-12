<?
/*
 ----------------------------------------------------------
 Desenvolvido por...: Edson de Araujo
 Finalidade.........: Descricao
 Criado em Data.....: 02/08/2009
 Ultima Atualização : 02/08/2009 

 DEUS SEJA LOUVADO
 ----------------------------------------------------------
*/

include('aguarde.php');

include('titulo.php');

// Abre Conexão com o MySql
include("../conexao.php");

// Resgata a Sessao
@session_start();
$ser_name3_c    = $_SESSION["log_name_c"];
$acesso_2       = $_SESSION['data_log_2'];

if ($ser_name3_c == strtoupper("VISITANTE")){
	
	include("../informe.php");
	exit;
}
if (empty($ser_name3_c)){
	
	include("../informe.php");
	exit;
}

// Chama o Banco de Dados

$link = @mysql_connect($host,$user,$pass);

@mysql_select_db($db);

$consulta3  = "SELECT * FROM produto2 WHERE codigo = ". decode5t($id_prod)." ";
					
$resultado3 = @mysql_query($consulta3);
					
				
$row3 = @mysql_fetch_array($resultado3);
					
$id          = @$row3["codigo"];
$id_prod     = @$row3["codigo"];
$nome        = @$row3["nome"];
$descricao   = @$row3["descricao"];
$preco1      = @$row3["valor1"];
$preco2      = @$row3["valor2"];
$foto        = @$row3["fot_peq"];
$quantidade  = @$row3["quantidade"];
$visitas     = @$row3["visita"];
$estado      = @$row3["local_produto"];
$data        = @$row3["data"];
$peso_1      = @$row3["peso"];
$tipo        = @$row3["tipo"];
$entrega     = @$row3["entrega"];
$situacao    = @$row3["situacao"];


$nome_user_1 = trim(strtoupper(@$row3["nome_user"]));


$consulta4  = "SELECT * FROM tt_ser_01 WHERE login = '$nome_user_1'";
					
$resultado4 = @mysql_query($consulta4);
					
				
$row4 = @mysql_fetch_array($resultado4);
					
$id          = @$row4["codigo"];
$id_email    = @$row4["e_mail"];
$id_fone     = @$row4["fone_cel"];


$faz = 1;

if ($situacao == "Finalizado"){

require("comercio.php");
exit;

}
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Portal</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<style type="text/css">
<!--
.style1 {
	font-size: 14px;
	font-weight: bold;
	font-family: Arial, Helvetica, sans-serif;
}
.style2 {
	font-family: Arial, Helvetica, sans-serif;
	font-weight: bold;
	color: #FF0000;
	font-size: 16px;
}
.style3 {
	font-family: Arial, Helvetica, sans-serif;
	font-weight: bold;
	color: #FFFF00;
}
.style11 {
	font-size: 12px;
	font-weight: bold;
}
.style12 {font-size: 12px}
.style13 {font-size: 9px}
.style14 {font-size: 18px}
.style15 {
	color: #FF0000;
	font-size: 18px;
}
.style16 {font-size: 16px}
-->
</style>
</head>

<body>
<table width="100%" height="471" border="0">
  <tr>
    <td height="467" align="center" valign="top"><table width="96%" height="302" border="0">
      <tr>
        <td bordercolor="#FF6600" bgcolor="#FF9966"> <div align="left" class="style1">
          <div align="center" class="style14"><?=$nome;?> </div>
        </div></td>
      </tr>
      <tr>
        <td align="left"><table width="100%" border="0">
          <tr>
            <td width="266" height="215" valign="top"><table width="100%" height="212" border="0">
              <tr>
                <td width="193" height="208" align="center"><div align="center"> <img src="../<?=$foto;?>" width="169" height="159" border="1"></div></td>
              </tr>
            </table></td>
            <td width="685" align="center"><table width="406" border="0">
              <tr>
                <td width="124"><div align="left" class="style11">Pre&ccedil;o de Venda </div></td>
                <td width="272"><div align="left" class="style2"><?=$preco1;?>&nbsp;&nbsp;<?=$preco2;?></div></td>
              </tr>
              <tr>
                <td><div align="left" class="style12">Tipo de Produto.: </div></td>
                <td><div align="left" class="style12"><strong><?=$tipo;?></strong></div></td>
              </tr>
              <tr>
                <td><div align="left" class="style12">Quantidade.:</div></td>
                <td><div align="left" class="style12"><?=$quantidade;?></div></td>
              </tr>
              <tr>
                <td><div align="left" class="style12">N&ordm; de Visitas.: </div></td>
                <td><div align="left" class="style12"><?=$visitas;?></div></td>
              </tr>
              <tr>
                <td><div align="left" class="style12">Data do Anuncio.: </div></td>
                <td><div align="left" class="style12"><?=$data;?></div></td>
              </tr>
              <tr>
                <td><div align="left" class="style12">Peso do Produto.: </div></td>
                <td><div align="left" class="style12"><?=$peso_1;?> Kilos</div></td>
              </tr>
              <tr>
                <td><div align="left"><span class="style12">Contato.: </span><img src="../graphics/tel.gif" width="17" height="17"></div></td>
                <td><div align="left" class="style12"><?=$id_fone;?></div></td>
              </tr>
              <tr>
                <td><div align="left" class="style12">Vendedor.:</div></td>
                <td><div align="left"><strong><em><span class="style12"><?=trim($nome_user_1);?>&nbsp;&nbsp;</span> <img src="../graphics/alarm.gif" width="16" height="16"></em></strong></div></td>
              </tr>
              <tr>
                <td><div align="left" class="style12">Local estado/ regi&atilde;o.: </div></td>
                <td><div align="left" class="style12"><?=trim($estado);?></div></td>
              </tr>
              <tr>
                <td><div align="left" class="style13"><span class="style12">Forma de Entrega.: </span></div></td>
                <td><div align="left"><span class="style12"><?=$entrega;?></span></div></td>
              </tr>
            </table>
              <div align="center"></div></td>
          </tr>
        </table></td>
      </tr>
      <tr>
        <td valign="top"><div align="center" class="style12">
          <table width="100%" border="1" cellpadding="0" cellspacing="0" bordercolor="#666666">
            <tr>
              <td><div align="center"><strong><span class="style15">A T E N &Ccedil; &Atilde; O</span><span class="style16"><br>
              </span></strong>Para confirmar a Compra deste produto clique no bot&atilde;o <strong>Aceito as Condi&ccedil;oes</strong> assim como a forma de pagamento e entrega do produto acima sitado, tendo consiencia de que tenho um compromisso com o vendedor, e devo entrar em contato com o mesmo para acertos e finalizar a negocia&ccedil;&atilde;o com o vendedor.<br>
Tanto o Vendedor quanto o comprador receber&atilde;o um e-mail com os dados dos participante da negocia&ccedil;&atilde;o.<br>
o <span class="style16"><strong>Compraai</strong></span> deseja para ambos uma boa negocia&ccedil;&atilde;o <br>
<br>
<a href="finalizar.php?id_prod=<?=encode5t($id_prod);?>"><img src="../graphics/aceito_1.png" width="166" height="32" border="0"/></a>
<img src="../graphics/px1.gif" width="15" height="8" border="0"/><a href="javascript:history.go(-1);"><img src="../graphics/nao_aceito.png" width="166" height="32" border="0"/></a><br/>
<img src="../graphics/px1.gif" width="8" height="8" border="0"/><br/>
              </div></td>
            </tr>
          </table>
</div></td>
      </tr>
      <tr>
        <td bgcolor="#FF9933"><div align="center" class="style3">FINALIZAR</div></td>
      </tr>
    </table></td>
  </tr>
</table>
</body>
</html>
<?
include('rodape.php');
?>