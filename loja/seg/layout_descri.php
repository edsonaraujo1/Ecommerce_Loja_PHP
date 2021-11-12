<?

// Abre Conexão com o MySql
include("../conexao.php");
// Chama o Banco de Dados

$link = @mysql_connect($host,$user,$pass);

@mysql_select_db($db);

$consulta3  = "SELECT * FROM produto WHERE cod_prod = '$id_prod'";
					
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

$qtd_id = $visita_1 + 1;

$faz = 1;


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

<style type="text/css">
<!--
.style1 {
	font-size: 20px;
	font-weight: bold;
	font-family: Arial, Helvetica, sans-serif;
}
.style2 {
	font-family: Arial, Helvetica, sans-serif;
	font-weight: bold;
	color: #FF0000;
	font-size: 24px;
}
.style3 {
	font-family: Arial, Helvetica, sans-serif;
	font-weight: bold;
	color: #FFFF00;
}
.style4 {
	font-size: 36px;
	font-weight: bold;
	color: #3333FF;
}
.style5 {font-size: 24px}
.style8 {font-size: 14px}
.style10 {font-size: 12px; font-family: Arial, Helvetica, sans-serif; }
-->
</style>

<body bgcolor="#ffffff">
<form action='layout_carrinho.php?cod=<?=$id_prod;?>&acao=incluir' method='POST'>
<table width="70%" height="319" border="0">
  <tr>
    <td align="center" valign="top"><table width="96%" height="302" border="0">
      <tr>
        <td bordercolor="#FF6600"> <div align="left" class="style1"><?=$nome;?></div></td>
      </tr>
      <tr>
        <td align="left"><table width="98%" border="0">
          <tr>
            <td width="266" valign="top"><table width="226" height="294" border="0">
              <tr>
                <td width="247" height="234"><img src="../<?=$foto;?>" width="218" height="207" border="0"></td>
              </tr>
              <td align="center"><img id="Image5" src="graphics/banner_herbalife.gif"    border="0"       /></td>
            </table></td>
            <td width="685" align="center"><table width="406" border="0" >
              <tr>
                <td width="158"><div align="left"><font face=Tahoma><font size=4><b>Pre&ccedil;o.:</b></font></strong></div></td>
                <td width="296"><div align="left" class="style2">R$ <?=$preco;?> </div></td>
              </tr>
              <tr>
                <td><div align="left"><font face=Tahoma><font size=2><b>Tipo de Entrega.:</b></font></div></td>
                <td><div align="left"><img id="Image5" src="graphics/correios_entrega.gif"    border="0"       /></div></td>
              </tr>
              <tr>
                <td><div align="left"><font face=Tahoma><font size=2><b>Forma de Pagamento.:</b></font></div></td>
                <td><div align="left"><img id="Image5" src="graphics/p_pagseguro.gif"    border="0"       /></div></td>
              </tr>
              <tr>
                <td><div align="left"></div></td>
                <td><div align="left"></div></td>
              </tr>
              <tr>
                <td><div align="left"><font face=Tahoma><font size=2><b>Sabores.:</b></font></div></td>
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

<div align="left"><font face=Tahoma><font size=2><b><?=$visita_1;?></b></font></div>

<?	
}
?>
				
				</font></div>
				</td>
              </tr>
              <tr>
                <td><div align="left"></div></td>
                <td><div align="left"></div></td>
              </tr>
              <tr>
                <td><div align="left"></div></td>
                <td><div align="left">
				
				
				<input type=image name='Submit' src="graphics/loja_compra.png" width="169" height="65" border="0"/>
				
				
				
				</div></td>
              </tr>
              <tr>
                <td><div align="left"></div></td>
                <td><div align="left"></div></td>
              </tr>
            </table>
              </td>
          </tr>
        </table></td>
      </tr>
      <tr>
        <td bgcolor="#FF6600"><div align="center" class="style3">Descri&ccedil;&atilde;o do Produto</div></td>
      </tr>
      <tr>
        <td><?=$descricao;?></td>
      </tr>
      <tr>
        <td bgcolor="#FF6600"><div align="center"><span class="style3"></span></div></td>
      </tr>
      <tr>
        <td bgcolor="#FF6600">&nbsp;</td>
      </tr>
    </table></td>
  </tr>
  </form>
</table>
</body>
</html>
