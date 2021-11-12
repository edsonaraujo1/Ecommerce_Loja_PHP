<?
include('titulo.php');

if (!empty($ser_name3_c)){

}else{
	$ser_name3_c = trim(strtoupper("Visitante"));
}

include("visitas_pag.php");

include_once('../sql_injection.php');


// Abre Conexão com o MySql
include("../conexao.php");
// Chama o Banco de Dados

$link = @mysql_connect($host,$user,$pass);

@mysql_select_db($db);

$consulta3  = "SELECT * FROM produto WHERE cod_prod = '".anti_sql_injection(decode5t($id_prod))."'";
					
$resultado3 = @mysql_query($consulta3);
					
				
$row3 = @mysql_fetch_array($resultado3);
					
$id         = @$row3["cod_prod"];
$id_prod    = @$row3["cod_prod"];
$nome       = @$row3["nome"];
$descricao  = @$row3["descricao"];
$preco      = @$row3["valor"];
$peso_1     = @$row3["peso"];
$foto       = @$row3["fot_peq"];
$visita_1   = @$row3["visita"];
$data_1     = @$row3["data"];
$sabor      = @$row3["sabores"];
$conte      = @$row3["conteudo"];
$id_seg     = @$row3["cod_prod"];
 
$qtd_id = $visita_1 + 1;

$faz = 1;

if (empty($id_seg)){
	
	header('Location:../index.php');
	exit;

}

$consulta_log = "UPDATE produto  SET visita = '". anti_sql_injection($qtd_id) ."' WHERE cod_prod = '". anti_sql_injection($id_prod) ."'";

@mysql_query($consulta_log, $link);


@session_start();
$_SESSION["entra_no_web1"] = 'at2';

$entra_no_web1 = 'at2';
?>

 <!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html >

<script language="JavaScript" type="text/JavaScript">
<!--
function MM_openBrWindow(theURL,winName,features) { //v2.0
  window.open(theURL,winName,features);
}
//-->
</script>

<body bgcolor="#ffffff">
<form action='carrinho.php?cod=<?=$id_prod;?>&acao=incluir' method='POST'>
<table width="100%" border="0">
  <tr>
    <td width="1%"><img src="../graphics/px1.gif" width="10" height="10"></td>
    <td width="97%"><table width="100%" height="458" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td height="27" bgcolor="#FFB368">
          <div align="left" class="style1">
            <font size="3" face="Verdana">
            &nbsp;&nbsp;&nbsp;<?=$nome;?>
          </font></div></td>
      </tr>
      <tr>
        <td align="left"><table width="100%" border="0" cellpadding="0" cellspacing="0">
            <tr>
              <td width="266" valign="top"><table width="100%" height="294" border="0" cellpadding="0" cellspacing="0">
                  <tr>
                    <td width="247" height="234"><div align="center"><img src="../<?=$foto;?>" width="201" height="180" border="0"></div></td>
                  </tr>
              <td align="center">
                  <?
	          @session_start();
			  $_SESSION["alte_url_pag"] = "dsds32";
	          ?>
                  <a href="loja.php"><img src="../graphics/voltar_loja1.png" border="0" /></a><br />
                  <img id="Image5" src="../graphics/banner_herbalife.gif"    border="0"       /></td>
              </table></td>
              <td width="685" align="center"><table width="100%" border="0" cellpadding="0" cellspacing="0">
                  <tr>
                    <td width="158"><div align="left"><font size="3" face=Verdana><b>Pre&ccedil;o.:</b></font></div></td>
                    <td width="296"><div align="left" class="style2"><b><font size="3" face="Verdana">R$</font><font size="2" face="Verdana"><img src="../graphics/px1.gif" width="10" height="1"></font></b><font size="4" face="Verdana"><b><?=$preco;?></b></font>
                    </div></td>
                  </tr>
                  <tr>
                    <td><div align="left"><font size="3" face=Verdana>Tipo de Entrega.:</font></div></td>
                    <td><div align="left"><img id="Image5" src="../graphics/correios_entrega.gif"    border="0"       /></div></td>
                  </tr>
                  <tr>
                    <td><div align="left"><font size="3" face=Verdana>Forma de Pagamento.:</font></div></td>
                    <td><div align="left"><img id="Image5" src="../graphics/pagseguro_logo.gif"    border="0"       /></div></td>
                  </tr>
                  <tr>
                    <td><div align="left"><font size="3" face=Verdana>Conteudo Embalagem.:</font></div></td>
                    <td><div align="left"><font face=Tahoma><font size=1><b>
                        <?=$conte;?>
                    </b></font></font></div></td>
                  </tr>
                  <tr>
                    <td><div align="left"><font face="Verdana"><font size="2"><font face="Verdana"><font size="2"><font size="3"></font></font></font></font></font></div></td>
                    <td><div align="left"></div></td>
                  </tr>
                  <tr>
                    <td><div align="left"><font size="3" face=Verdana>Sabores.:</font></div></td>
                    <td><div align="left"><font face=Tahoma>
                        <?
				  if (!empty($sabor)){
  	
  echo "<select name='saborx' value='Escolha o Sabor'>".
  
  $programa = trim('Escolha o Sabor,'.$sabor);
  $array    = explode(',', $programa);
  
  for ($si = 0; $si < strlen($programa); $si++){
  
       if (!empty($array[$si])){
       	
              echo "<option value='" . $array[$si] . "'>". $array[$si] ." </option>";
              
       }else{
       	   break;
       }
  }


  $si = 0;

  echo "</select>";

}else{
	
?>
                        </font>
                        <div align="left"><font face=Tahoma><font size=2><b>Tradicional</b></font></font></div>
                        <font face=Tahoma><font face=Tahoma>
                        <?	
}
?>
                                            </font></font></div></td>
                  </tr>
                  <tr>
                    <td><div align="left"><font face="Verdana"><font size="2"><font face="Verdana"><font size="2"><font size="3"></font></font></font></font></font></div></td>
                    <td><div align="left"></div></td>
                  </tr>
                  <tr>
                    <td><div align="left"><font face="Verdana"><font size="2"><font face="Verdana"><font size="2"><font size="3"></font></font></font></font></font></div></td>
                    <td><div align="left">
                        <input type=image name='Submit' src="../graphics/loja_compra.png" width="169" height="65" border="0"/>
                    </div></td>
                  </tr>
                  <tr>
                    <td><div align="left"><font face="Verdana"><font size="2"><font face="Verdana"><font size="2"><font size="3"></font></font></font></font></font></div></td>
                    <td><div align="left"></div></td>
                  </tr>
              </table></td>
            </tr>
        </table></td>
      </tr>
      <tr>
        <td width="100%" height="27" bgcolor="#FFB368"><div align="center" class="style3"><font size="4"><b><font color="#000000" face="Verdana">Descri&ccedil;&atilde;o do Produto</font></b></font></div></td>
      </tr>
      <tr>
        <td><?=$descricao;?></td>
      </tr>
      <tr>
        <td bgcolor="#FFB368"><div align="center"><span class="style3"></span></div></td>
      </tr>
      <tr>
        <td bgcolor="#FFB368">&nbsp;</td>
      </tr>
    </table></td>
    <td><div align="center"><img src="../graphics/px1.gif" width="8" height="10"></div></td>
  </tr><tr>
    
  </tr>
    </form>
</table>
</body>
</html>
<?

include('rodape.php');

?>