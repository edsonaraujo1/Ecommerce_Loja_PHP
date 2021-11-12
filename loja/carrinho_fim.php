<?
/*
 -----------------------------------------
 Desenvolvido por...: Edson de Araujo
 Finalidade.........: Carrinho Final Loja Virtual
 Criado em Data.....: 07/12/2007
 Ultima Atualização : 07/07/2008 

 DEUS SEJA LOUVADO
 -----------------------------------------
*/
include('titulo.php');

@session_start();
$var_car_pag_fim = $_SESSION["car_ver_pag_fim"];


include_once("../config.php");

// Abre Conexão com o MySql
include("../conexao.php");
// Chama o Banco de Dados

include_once('../sql_injection.php');

// Resgata a Sessao
@session_start();
$ser_name3_c    = $_SESSION["log_name_c"];
$acesso_2 = $_SESSION['data_log_2'];

if (!empty($ser_name3_c)){

}else{
	$ser_name3_c = trim(strtoupper("Visitante"));
}

$link = @mysql_connect($host,$user,$pass)

    or die( include("../login.php"));

@mysql_select_db($db);

$consulta  = "SELECT * FROM tt_ser_01 WHERE login = '". anti_sql_injection($ser_name3_c) ."'";
					
$resultado = @mysql_query($consulta);
					
// Incrementa novo codigo
					
$row = @mysql_fetch_array($resultado);
					
$codigo 	= @$row["codigo"];             
$nome 		= trim(@$row["nome"])." ".trim(@$row["sobrenome"]);      		
$nasc_dia 	= @$row["nasc_dia"];
$nasc_mes 	= @$row["nasc_mes"];
$nasc_ano 	= @$row["nasc_ano"];
$sexo 		= @$row["sexo"];
$mail_des 	= @$row["e_mail"];
$login 		= @$row["login"];
$senha 		= @$row["senha"];
$data 		= @$row["data"];
$hora 		= @$row["hora"];
$permissao 	= @$row["permissao"];
$rg 		= @$row["rg"];
$cpf 		= @$row["cpf"];
$rua 		= @$row["rua"]." ".@$row["endereco"];
$endereco 	= @$row["endereco"];
$bairro 	= @$row["cidade"];
$estado 	= @$row["estado"];
$cep 		= @$row["cep"];
$fone_fix 	= @$row["fone_fix"];
$fone_cel 	= @$row["fone_cel"];


// Consulta Tabela Estados
$consulta2  = "SELECT * FROM estados";
					
$resultado2 = @mysql_query($consulta2);

?>


<script>
// Valida Campo
function validaCampo()
{
if(document.Form1.TCIDADE.value=="")
{
	alert("O Campo Cidade esta em Branco!");
	return false;
}
else
if(document.Form1.TESTADO.value=="")
{
	alert("O Campo Estado esta em Branco!");
	return false;
}
else
if(document.Form1.TMAIL.value=="")
{
	alert("O Campo E-Mail e Obrigatoio!");
	return false;
}
else
if(document.Form1.TCEP.value=="")
{
	alert("O Campo Cep e Obrigatorio!");
	return false;
}
else
if(document.Form1.PAGTO.value=="Selecione")
{
	alert("O Campo Forma de Pagamento e Obrigatorio!");
	return false;
}
else
if(document.Form1.TNOME.value=="")
{
	alert("O Campo Nome é Obrigatorio!");
	return false;
}
else	
if(document.Form1.TENDERECO.value=="")
{
	alert("O Campo Endereço é Obrigatorio!");
	return false;
}
else
return true;	
}

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


<style>

.style1 {color: #FF0000}

.style19 {
	font-family: "Comic Sans MS";
	font-size: 20px;
	font-style: italic;
	color: #FFFFFF;
}

</style>

<html>
<body bgcolor="#FFFFFF" style=" margin-left: 0px;  margin-top: 0px;  margin-right: 0px;  margin-bottom: 0px; " >

<table width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr><td bgcolor="#FF9900"><table width="100%" border="0" cellpadding="0" cellspacing="1">
      <tr>
        <td bgcolor="#FDECDB"><img src="../graphics/px1.gif" width="15" height="14"/>
		<b><font color="#FF6600" face="Arial">Finalizar Compra</font></b></td>
      </tr></table></td>
  </tr>
</table>

<table width="100%" border="0">
  <tr>
    <td width="3%"><img src="../graphics/px1.gif" width="25" height="20"></td>
    <td width="94%"><div align="center">
      <?

@session_start();
$qtd_car_pg = $_SESSION['meu_carrinho'];

if (empty($qtd_car_pg)){
	
	?>
      <?

	
	echo "<br>";
	echo "<body bgcolor='#FFFFFF'><br><br><br>";
	echo "<center><font face=Tahoma><font size=4 color='#FF0000'><b>A T E N &Ccedil; &Atilde; O</b></font><font size=4></center>";
	echo "<center><b>Seu Carrinho esta vazio !!!!</b><br></center>";
	echo "<center><b>E preciso pelo menos 1 item para finalizar</b><br></center>";
	echo "<center><b>a Compra, Obrigado.</b></center>";
	echo "<br><br>";
	echo "<center><a href='layout.php'><img src='../graphics/retorno.png' border='0' /></a></center>";
	
	
}else{	
?>
      <br />
      <table width="100%" align="center" cellpadding="0" cellspacing="0" border="0">
  <td align="center"> <b>Para Finalizar a Compra preencha os campos</b><br />
          <b>e verifique se os dados est&atilde;o corretos</b>
          <form name="Form1" method="POST" action="finalizar_compra.php" onsubmit="return validaCampo(); return false;">
            <input type="hidden" name="FORM" value="FORM"/>
            <table cellpadding="0" cellspacing="0" border="1" bordercolor="#CCCCCC">
              <tr>
                <td align="left">Nome:</td>
                <td align="left"><input type="text" name="TNOME" value="<?=$nome;?>" style="width:337px;"></td>
              </tr>
              <tr>
                <td align="left">Endere&ccedil;o:</td>
                <td align="left"><input type="text" name="TENDERECO" value="<?=$rua;?>" style="width:337px;"></td>
              </tr>
              <tr>
                <td align="left">Cidade:</td>
                <td align="left"><input type="text" name="TCIDADE" value="<?=$bairro;?>" style="width:337px;"></td>
              </tr>
              <tr>
                <td align="left">Estado:</td>
                <td align="left"><select type="text" name="TESTADO" value="<?=$estado;?>" style="width:207px;">
                    <option value="<?=$estado;?>">
                    <?=$estado;?>
                    </option>
                    <?
	    while ($linha = @mysql_fetch_array($resultado2))
	    {
	       $estado2 = $linha["estado"];
		   $uf2     = $linha["uf"];	
	    ?>
                    <option value="<?=$estado2." - ".$uf2;?>">
                    <?=$estado2." - ".$uf2;?>
                    </option>
                    <?
		}
		?>
                  </select>
                </td>
              </tr>
              <tr>
                <td align="left">E-mail:</td>
                <td align="left"><input type="text" name="TMAIL" value="<?=$mail_des;?>" style="width:337px;" onblur="ValidaEmail()"/></td>
              </tr>
              <tr>
                <td align="left">CEP:</td>
                <td align="left"><input type="text" name="TCEP" value="<?=$cep;?>" style="width:100px;" onkeypress="return txtBoxFormat(document.Form1, 'TCEP', '99999-999', event);">
                </td>
              </tr>
              <tr>
                <td align="left">Forma de Pagamento.:</td>
                <td align="left"><input type="hidden" name="TCPF" value="<?=$cpf;?>"/>
                    <select type="text" name="PAGTO" value="<?=$pagto;?>" style="width:200px;">
                      <option value="Selecione"> Selecione </option>
                      <option value="A Combinar"> A Combinar </option>
                      <option value="No Ato da Entraga"> No Ato da Entrega </option>
                      <option value="Dinheiro"> Dinheiro </option>
                      <option value="Cart&atilde;o de Credito"> Cart&atilde;o de Credito </option>
                      <option value="Cheque"> Cheque </option>
                      <option value="Dep&oacute;sito Bancario"> Dep&oacute;sito Bancario </option>
                      <option value="Sedex a cobrar"> Sedex a cobrar </option>
                      <option value="Pagamento Seguro (Pagseguro)"> Pagamento Seguro (Pagseguro) </option>
                    </select>
                </td>
              </tr>
            </table>
            <br />
            <a href="carrinho.php"><img src='../graphics/voltar_carri.png' border='0'/></a>&nbsp;&nbsp;&nbsp;&nbsp;
            <input name="image" type='image' src="../graphics/finalizar.png"/>
          </form>
          <table width="100%" border="0">
            <tr>
              <td height="101"><div align="center"><strong><span class="style1">Aten&ccedil;&atilde;o</span> todas as informa&ccedil;&otilde;es aqui digitadas s&atilde;o criptografadas e enviadas automaticamente<br> 
                pelo sistema sem interven&ccedil;&atilde;o do Administrador do Site</strong> <br>
                      <br>
                      <img src="../graphics/seguranca.png" width="105" height="55"> </div>
                  <p></p></td>
            </tr>
          </table>
      </table>
      <?
}
?>
</div></td>
    <td width="3%"><img src="../graphics/px1.gif" width="25" height="20"></td>
  </tr>
</table>
</body>
</html>
<?

include('rodape.php');

?>
