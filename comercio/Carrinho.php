<?
/*
 ----------------------------------------------------------
 Desenvolvido por...: Edson de Araujo
 Finalidade.........: Carrinho
 Criado em Data.....: 02/08/2009
 Ultima Atualização : 02/08/2009 

 DEUS SEJA LOUVADO
 ----------------------------------------------------------
*/

// Abre Conexão com o MySql
include("../conexao.php");
// Chama o Banco de Dados

include ("TMySQL.php");

include ("TCarrinho.php");
session_start();

//Verificando se a variavel de sessão foi criada
if (!session_is_registered("MeuCarrinho")){
	session_register("MeuCarrinho");
	$MeuCarrinho = new TCarrinho();
}

$MySQL = new TMySQL();
$MySQL->connect($host, $db, $user, $pass);

if (!empty($op)){
	switch ($op) {
	case "adicionar":
        if (!empty($id_prod)){
			$Query = "select cod_prod from produto where cod_prod = $id_prod";
			$R_Query = $MySQL->query($Query);
			if (mysql_num_rows($R_Query)>0){
				$MeuCarrinho->AdicionarItem($id_prod,1);
			}
		}
        break;
    case "excluir":
        $MeuCarrinho->RemoverItem($id_prod);
        break;
    case "atualizar":
		$MeuCarrinho->AtualizarCarrinho($HTTP_POST_VARS);
        break;
	case "finalizar":
		if ($MeuCarrinho->QuantosItens()>0) {
			header("Location:CarrinhoFinal.php");
		}
	break;
	}
}

$QuerySQL = "select cod_prod, nome, valor from produto " . $MeuCarrinho->QuerySQL_ObtemListaDeItens();
//echo $QuerySQL;
$Resultado = $MySQL->query($QuerySQL);

require("../funcoes2.php");
?>
<html >
<head>
<title><?=$Titulo;?></title>
<link rel="shortcut icon" href="imagens/favicon.ico"/>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<meta name="GENERATOR" content="Mozilla/4.7 [en] (Win98; I) [Netscape]">

<style>
body {
	BORDER-BOTTOM: #FFC082 3px ridge; BORDER-LEFT: #FFC082 3px ridge; BORDER-RIGHT: #FFC082 3px ridge; BORDER-TOP: #FFC082 3px ridge
}
</style>

<style>
body {
	SCROLLBAR-ARROW-COLOR: blue; SCROLLBAR-BASE-COLOR: #FFC082
}
</style>

</head>
<body bgcolor="#FFFFFF">
<form method="POST" action="Carrinho.php?op=atualizar">
<table  width="0"   style="height:0px"  border="1" cellpadding="0" cellspacing="0"  bgcolor="#FFC082"  ><tr><td valign="top">

<div id="Image1_outer" style="Z-INDEX: 4; LEFT: 5px; WIDTH: 780px; POSITION: absolute; TOP: 5px; HEIGHT: 84px">
<div id="Image1_container" style=" width: 780;  height: 84; overflow: hidden;" ><img id="Image1" src="imagens/forum.png"  width="777"  height="44"  border="0"       /></div>
</div>

<div id="Image1_outer" style="Z-INDEX: 3; LEFT: 3px; WIDTH: 780px; POSITION: absolute; TOP: 6px; HEIGHT: 84px">

<br>&nbsp;
<table BORDER=1 CELLSPACING=0 CELLPADDING=0 COLS=1 WIDTH="100%" BGCOLOR="#FF8400" >
<tr>
</tr>
</table>

<table BORDER=0 CELLSPACING=2 CELLPADDING=4 COLS=5 WIDTH="100%" BGCOLOR="#FFFFFF" >
<tr BGCOLOR="#CCCCCC">
<td><center><font face="Arial,Helvetica" size='1'><b>Produto</b></font></center></td>
<td><center><font face="Arial,Helvetica" size='1'><b>Quantidade</b></font></center></td>
<td><center><font face="Arial,Helvetica" size='1'><b>Preço por Unidade</b></font></center></td>
<td><center><font face="Arial,Helvetica" size='1'><b>Total</b></center></font></td>
<td BGCOLOR="#FFFFFF"></td>
</tr>

<?
$preco_total = "0.00";
while(list($ID_COD, $nome, $preco) = mysql_fetch_row($Resultado)) {
	//Computando preco total
	$preco_total = $preco_total + $MeuCarrinho->ObtemSubTotalDeUmItem($ID_COD,$preco);


if ($negrita==1){

	echo "	<tr BGCOLOR=#C0C0C0>
			<td><font size=-1>". $nome ."</font></td><td>
			<center><input type=TEXT name=". $ID_COD ." size=2 value=". $MeuCarrinho->ObtemQuantidadeItem($ID_COD) ."></center>
			</td><td>
			<center><b>". $preco ."</b></center>
			</td>";

			$ver_1 = $MeuCarrinho->ObtemSubTotalDeUmItem($ID_COD,$preco);
			
			if (strlen($ver_1) == 3 ){
				
			$ver_02 = $ver_1.".00";	
				
			}else{
			
			$ver_02 = $ver_1;	
	
            }

	echo "	<td>
	        <center><b>". $ver_02 ."</b></center></td>
	        <td BGCOLOR=#FFFFD7><b><font face=Tahoma><font size=-2><a href=Carrinho.php?op=excluir&id_prod=". $ID_COD ."><img src='imagens/excluir.gif' border='0'></a></font></font></b></td>
	        </tr>";

	$negrita = 0;		            
}else{


	echo "	<tr BGCOLOR=#FFFFD7>
			<td><font size=-1>". $nome ."</font></td><td>
			<center><input type=TEXT name=". $ID_COD ." size=2 value=". $MeuCarrinho->ObtemQuantidadeItem($ID_COD) ."></center>
			</td><td>
			<center><b>". $preco ."</b></center>
			</td>";

			$ver_1 = $MeuCarrinho->ObtemSubTotalDeUmItem($ID_COD,$preco);
			
			if (strlen($ver_1) == 3 ){
				
			$ver_02 = $ver_1.".00";	
				
			}else{
			
			$ver_02 = $ver_1;	
	
            }

	echo "	<td>
	        <center><b>". $ver_02 ."</b></center></td>
	        <td><b><font face=Tahoma><font size=-2><a href=Carrinho.php?op=excluir&id_prod=". $ID_COD ."><img src='imagens/excluir.gif' border='0'></a></font></font></b></td>
	        </tr>";

    $negrita = 1;	
}			
}
?>

<tr>
<td></td>

<td><b><font color="#FF0000"></font></b>&nbsp;</td>

<td>
<div align=right><b><font color="#FF0000">Total da Compra:</font></b></div>
</td>

<?

$ver_1a = $preco_total;

if (strlen($ver_1a) == 3  or strlen($ver_1a) == 4 ){
	
$ver_02a = $ver_1a.".00";	
	
}else{

$ver_02a = $ver_1a;	
	
}


?>


<td BGCOLOR="#FFFFD7">
<center><b><font color="#FF0000"><? echo $ver_02a; ?></font></b></center>
</td>

<td></td>
</tr>
</table>
<center>
<input type='image' src="imagens/atualizar.gif"/> 
<center><br>
</form>

<TABLE>
<TR>
	<TD>
		<form method="post" action="layout.php">
			<center><input type='image' src="imagens/voltar_compras.png"/><center>
		</form>
	</TD>
	<TD>
		<form method="post" action="Carrinho.php?op=finalizar">
			<center><input type='image' src="imagens/finalizar_compra.png"/><center>
		</form>	
	</TD>
</TR>
</TABLE>

</body>
</html>
</div>

