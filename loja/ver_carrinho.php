<?php


$sabor_01 = $_POST["saborx"];

if ($sabor_01 == "Escolha o Sabor"){
	
	$sabor_01 = " ";
}

// Iniciamos nossa sessão que vai indicar o usuário pela session_id
@session_start();
include "../conexao.php";

$_SESSION['meu_carrinho'] = $qtd_car_pg;


$hostname_conn = $host;
$database_conn = $db;
$username_conn = $user;
$password_conn = $pass;

// Conectamos ao nosso servidor MySQL
if(!($conn = @mysql_connect($hostname_conn,$username_conn,$password_conn))) 
{
   echo "Erro ao conectar ao MySQL.";
   exit;
}
// Selecionamos nossa base de dados MySQL
if(!($con = @mysql_select_db($database_conn,$conn))) 
{
   echo "Erro ao selecionar ao MySQL.";
   exit;
}

// Recuperamos os valores passados por parametros
$acao = $_GET['acao'];
$cod =  $_GET['cod'];


// Verificamos se a acao é igual a incluir
if ($acao == "incluir")
{	
	// Verificamos se cod do produto é diferente de vazio
	if ($cod != '')
	{
		// Se for diferente de vazio verificamos se é numérico
		if (is_numeric($cod))
		{	
		    // Tratamos a variavel de caracteres indevidos
			$cod = addslashes(htmlentities($cod));
			
			// Verificamos se o produto referente ao $cod já está no carrinho para o session id correnpondente
			$query_rs_carrinho = "SELECT * FROM tbl_carrinho WHERE tbl_carrinho.cod = '".$cod."'  AND tbl_carrinho.sessao = '".session_id()."'";
			$rs_carrinho = @mysql_query($query_rs_carrinho, $conn) or die(mysql_error());
			$row_rs_carrinho = @mysql_fetch_assoc($rs_carrinho);
			$totalRows_rs_carrinho = @mysql_num_rows($rs_carrinho);
			
			// Se o total for igual a zero é sinal que o produto ainda não está no carrinho
			if ($totalRows_rs_carrinho == 0)
			{
				// Aqui pegamos os dados do produto a ser incluido no carrinho
				$query_rs_produto = "select * from produto where codigo = '".$cod."'";
				$rs_produto = @mysql_query($query_rs_produto, $conn) or die(mysql_error());
				$row_rs_produto = @mysql_fetch_assoc($rs_produto);
				$totalRows_rs_produto = @mysql_num_rows($rs_produto);
				
				// Se total for maior que zero esse produto existe e então podemos incluir no carrinho
				if ($totalRows_rs_produto > 0)
				{
					$registro_produto = @mysql_fetch_assoc($rs_produto);
					// Incluimos o produto selecionado no carrinho de compras
					$add_sql = "INSERT INTO tbl_carrinho ( cod, nome, preco, qtd, sessao) 
					VALUES
					('".$row_rs_produto['codigo']."','".$row_rs_produto['nome'].' '.$sabor_01."','".$row_rs_produto['valor']."','1','".session_id()."')";
					$rs_produto_add = @mysql_query($add_sql, $conn) or die(mysql_error());
				}
			}		
		}
	}
}	

// Verificamos se a acao é igual a excluir
if ($acao == "excluir")
{
	// Verificamos se cod do produto é diferente de vazio
	if ($cod != '')
	{
		// Se for diferente de vazio verificamos se é numérico
		if (is_numeric($cod))
		{	
		    // Tratamos a variavel de caracteres indevidos
			$cod = addslashes(htmlentities($cod));
			// Verificamos se o produto referente ao $cod  está no carrinho para o session id correnpondente
			$query_rs_car = "SELECT * FROM tbl_carrinho WHERE cod = '".$cod."'  AND sessao = '".session_id()."'";
			$rs_car = @mysql_query($query_rs_car, $conn) or die(mysql_error());
			$row_rs_carrinho = @mysql_fetch_assoc($rs_car);
			$totalRows_rs_car = @mysql_num_rows($rs_car);
			
			// Se encontrarmos o registro, excluimos do carrinho
			if ($totalRows_rs_car > 0)
			{
				$sql_carrinho_excluir = "DELETE FROM tbl_carrinho WHERE cod = '".$cod."' AND sessao = '".session_id()."'";	
				$exec_carrinho_excluir = @mysql_query($sql_carrinho_excluir, $conn) or die(mysql_error());
			}
		}
	}
}

// Verificamos se a ação é de modificar a quantidade do produto
if ($acao == "modifica")
{
	$quant = $_POST['qtd'];
		// Se for diferente de vazio verificamos se é numérico
		if (is_array($quant))
		{	
		    // Aqui percorremos o nosso array
			foreach($quant as $cod => $qtd)
			{
				// Verificamos se os valores são do tipo numeric
				if(is_numeric($cod) && is_numeric($qtd))
				{
					// Fazemos nosso update nas quantidades dos produtos
					$sql_modifica = "UPDATE tbl_carrinho SET qtd = 	'". anti_sql_injection($qtd) ."' WHERE  cod = '$cod' AND sessao = '".session_id()."'";
					$rs_modifica = @mysql_query($sql_modifica, $conn) or die(mysql_error());
				}
			}
		}

}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Meu Carrinho de Compras</title>
<style type="text/css">
<!--

.style1 {
	font-family: Arial, Helvetica, sans-serif;
	font-weight: bold;
	font-size: 14px;
}
.style2 {font-size: 8px; font-family: Verdana, Arial, Helvetica, sans-serif; }
.style3 {font-size: 9px; font-family: Verdana, Arial, Helvetica, sans-serif; }
.style4 {
	color: #FF0000;
	font-weight: bold;
}

.style5 {font-size: 10px; font-family: Verdana, Arial, Helvetica, sans-serif; }

-->
</style>
</head>

<script language="javascript">

function fechar(){
	
	if(document.all){
		window.opener=window;
		window.close("#");
	}else{
		self.close();
	}
}

</script>

<body bgcolor="#ffffff">
<div align="center"><img src="../graphics/meu_carrinho.png"/>
</div>

<table width="100%" height="72" border="0" cellpadding="0" cellspacing="0" align="center">
  <tr>
    <td width="293" height="72" align="center">
      <table width="100%" border="1" cellpadding="0" cellspacing="0">
      <tr>
        <td width="81%"><span class="style5">Quantidade de Itens no carrinho</span></td>


  <?
  $sql_meu_carrinho = "SELECT * FROM tbl_carrinho WHERE  sessao = '".session_id()."' ORDER BY nome ASC";
  $exec_meu_carrinho =  @mysql_query($sql_meu_carrinho, $conn) or die(mysql_error());
  $qtd_meu_carrinho = @mysql_num_rows($exec_meu_carrinho);
  
  if ($qtd_meu_carrinho > 0)
  {
  	$soma_carrinho = 0;
  	while ($row_rs_produto_carrinho = @mysql_fetch_assoc($exec_meu_carrinho))
	{
		$soma_carrinho += ($row_rs_produto_carrinho['preco']*$row_rs_produto_carrinho['qtd']);
  ?>
    <?

$qtd_car_pg = $qtd_car_pg + $row_rs_produto_carrinho['qtd'];

    }
	
  }
//session_start();
//$qtd_car_pg = $_SESSION['meu_carrinho'];
?>

        <td width="19%" align="center"><strong><?=$qtd_car_pg;?></strong></td>
      </tr>
    </table>
    <table width="100%" border="1" cellpadding="0" cellspacing="0">
      <tr>
        <td width="66%" align="right"><strong>TOTAL</strong></td>
        <td width="34%" align="right"><span class="style1"><font color="#FF0000"><?= number_format($soma_carrinho,2,",","."); ?></font></span></td>
      </tr>
    </table></td>
  </tr>
</table>

</body>
</html>

<script language="javascript">
setTimeout("fechar()",5500);
</script>