<?php

/**
 * @author holodek
 * @copyright 2009
 */

?>

<script>
// Valida email
function ValidaEmail()
{
  var obj = eval("document.Form1.TMAIL");
  var txt = obj.value;
  if ((txt.length != 0) && ((txt.indexOf("@") < 1) || (txt.indexOf('.') < 7)))
  {
    alert('Email incorreto');
	obj.focus();
  }
}
</script>


<html>
<body bgcolor="#FFFFFF">

<?

session_start();
$qtd_car_pg = $_SESSION['meu_carrinho'];

if (empty($qtd_car_pg)){
	
	echo "<br>";
	echo "<body bgcolor='#FFFFFF'><br><br><br>";
	echo "<center><font face=Tahoma><font size=4 color='#FF0000'><b>A T E N Ç Ã O</b></font><font size=4></center>";
	echo "<center><b>Seu Carrinho esta vazio !!!!</b><br></center>";
	echo "<center><b>E preciso pelo menos 1 item para finalizar</b><br></center>";
	echo "<center><b>a Compra, Obrigado.</b></center>";
	echo "<br><br>";
	echo "<center><a href='loja.php'><img src='graphics/retorno.png' border='0' /></a></center>";
	
	
}else{	
?>

<table align="center" border="0">
<td align="center">
<b>Para Finalizar a Compra preencha os campos</b><br />
<b>e verifique se os dados estão corretos</b>
<form name="Form1" method="POST" action="finalizar_compra.php">
	<input type="hidden" name="FORM" value="FORM"/>

	<table border=0>

	<tr>
	<td align="left">Nome:</td>
	<td align="left"><input type="text" name="TNOME" value="<?=$nome;?>" style="height:16px;width:437px;"></td>
	</tr>

	<tr>
	<td align="left">Endereço:</td>
	<td align="left"><input type="text" name="TENDERECO" value="<?=$rua;?>" style="height:16px;width:437px;"></td>
	</tr>
	
	<tr>
	<td align="left">Cidade:</td>
	<td align="left"><input type="text" name="TCIDADE" value="<?=$bairro;?>" style="height:16px;width:437px;"></td>
	</tr>
	
	<tr>
	<td align="left">Estado:</td>
	<td align="left"><select type="text" name="TESTADO" value="<?=$estado;?>" style="height:16px;width:437px;">
	
	    <option value="<?=$estado;?>"> <?=$estado;?> </option>
	    <?
	    while ($linha = @mysql_fetch_array($resultado2))
	    {
	       $estado2 = $linha["estado"];
		   $uf2     = $linha["uf"];	
	    ?>
	    
		<option value="<?=$estado2." - ".$uf2;?>"> <?=$estado2." - ".$uf2;?> </option>
        <?
		}
		?>  
	
	    </select>
	    
	</td>
	</tr>
	
	<tr>
	<td align="left">E-mail:</td>
	<td align="left"><input type="text" name="TMAIL" value="<?=$mail_des;?>" style="height:16px;width:437px;" onblur="ValidaEmail()"/></td>
	</tr>
	
	<tr>
	<td align="left">CEP:</td>
	<td align="left"><input type="text" name="TCEP" value="<?=$cep;?>" style="height:16px;width:137px;" onkeypress="return txtBoxFormat(document.Form1, 'TCEP', '99999-999', event);">
	    <input type="hidden" name="TCPF" value="<?=$cpf;?>"/>
	Forma de Pagamento.:<select type="text" name="PAGTO" value="<?=$pagto;?>" style="height:25px;width:237px;">
	
            <option value="Selecione"> Selecione   </option>
            <option value="A Combinar"> A Combinar   </option>
            <option value="No Ato da Entraga"> No Ato da Entrega </option>
            <option value="Dinheiro"> Dinheiro   </option>
            <option value="Cartão de Credito"> Cartão de Credito   </option>
            <option value="Cheque"> Cheque   </option>
            <option value="Depósito Bancario"> Depósito Bancario   </option>
            <option value="Sedex a cobrar"> Sedex a cobrar   </option>
            <option value="Pagamento Seguro (Pagseguro)"> Pagamento Seguro (Pagseguro)   </option>

</select>
	
	</td>
	</tr>
	
	</table>
	<br />
	<a href="Carrinho.php"><img src='graphics/voltar_carri.png' border='0'/></a>&nbsp;&nbsp;&nbsp;&nbsp;
	<input type='image' src="graphics/finalizar.png"/>
</form>


<center><b>Atenção todas as informações aqui digitadas são criptografadas e enviadas </b><br />
<center><b>automaticamente pelo sistema sem intervenção do Administrador do Site</b><br/></center>
<center></b></b><br/></center>
<center><img src="../graphics/seguranca.png"/></center>
</table>

<?
}
?>
</body>
</html>
