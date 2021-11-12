<?
/*
 ----------------------------------------------------------
 Desenvolvido por...: Edson de Araujo
 Finalidade.........: Layout Compras
 Criado em Data.....: 02/08/2009
 Ultima Atualização : 02/08/2009 

 DEUS SEJA LOUVADO
 ----------------------------------------------------------
*/
// Abre Conexão com o MySql
include("../conexao.php");
// Chama o Banco de Dados

if ($entra_no_web1 == 'at2'){

$link = @mysql_connect($host,$user,$pass);

@mysql_select_db($db);

// Resgata a Sessao
@session_start();
$ser_name3_c    = $_SESSION["log_name_c"];
$acesso_2       = $_SESSION['data_log_2'];


$sql  = "SELECT * FROM produto2 where nome_user = '$ser_name3_c' ORDER BY nome ASC";

$faz = 1;

// Número de registros por página
$registros_pagina = "15";

$lista = (int)$_GET["lista"];

if(!$lista) {
	$pc = "1";
}
else {
	$pc = $lista;
}

$inicio = $pc - 1;
$inicio = $inicio * $registros_pagina;

$resultado = mysql_query("$sql LIMIT $inicio, $registros_pagina");

$todos = mysql_query("$sql");

$tr = mysql_num_rows($todos);

$tp = $tr / $registros_pagina;
?>

<html >
<head>
<title><?=$Titulo;?></title>
<link rel="shortcut icon" href="../graphics/favicon.ico"/>

<style type="text/css">
<!--
.style19 {
	font-family: "Comic Sans MS";
	font-size: 20px;
	font-style: italic;
	color: #FFFFFF;
}
-->
</style>
</head>

<html >
<head>
<title><?=$Titulo;?></title>
<link rel="shortcut icon" href="../graphics/favicon.ico"/>

<style type="text/css">
<!--
body {
	   SCROLLBAR-ARROW-COLOR: blue;
	   SCROLLBAR-BASE-COLOR: #FFC082
	   
}

.style2 {font-size: 12px}
.style4 {
	font-family: Arial;
	font-size: 11px;
	font-weight: bold;
	color: #FF0000;
}
.style6 {font-size: 12px; font-weight: bold; }
.style7 {
	font-family: Arial;
	font-weight: bold;
}
.style8 {font-size: 11px;
	font-weight: bold;

}
.style11 {font-family: Arial; font-weight: bold; font-size: 11px; }
.style13 {font-family: Arial; font-size: 11px; color: #0000FF; }
.style14 {font-size: 9px}
.style15 {font-family: Arial; font-weight: bold; font-size: 9px; }
.style19 {
	font-family: "Comic Sans MS";
	font-size: 20px;
	font-style: italic;
	color: #FFFFFF;
}

-->
</style>

</head>

<body style=" margin-left: 0px;  margin-top: 0px;  margin-right: 0px;  margin-bottom: 0px; "   bgcolor="#FFFFFF" >

<table width="100%" height="52" border="0" cellpadding="0" cellspacing="0">
            <tr>
              <td width="100%" background="../graphics/forum_baner.png"><span class="style19">&nbsp;&nbsp;Meus Produtos</span></td>
            </tr>
          </table>

<table width="100%" border="0">
  <tr>
    <td height="172" valign="top">
	

    
      <table width="100%" border="0" cellpadding="0">
        <tr bgcolor="#CCCCCC">
          <td><div align="center" class="style7 style14">foto</div></td>
          <td><div align="center" class="style11 style14">Nome do Produto </div></td>
          <td><div align="center" class="style15">Pre&ccedil;o</div></td>
          <td><div align="center" class="style15">Quantidade</div></td>
          <td><div align="center" class="style15">Visitas</div></td>
          <td><div align="center" class="style15">Data do Cadastro </div></td>
          <td><div align="center" class="style15">Negocia&ccedil;&atilde;o</div></td>
          <td><div align="center" class="style15">Situa&ccedil;&atilde;o</div></td>
		  <td><div align="center" class="style15">Alterar</div></td>
        </tr>

<?

$negrita = 1;

while($linha = mysql_fetch_array($resultado)) {

$ID_COD     = $linha["codigo"];
$id_prod    = $linha["codigo"];
$nome       = $linha["nome"];
$descricao  = $linha["descricao"];
$preco1     = $linha["valor1"];
$preco2     = $linha["valor2"];
$foto       = $linha["fot_peq"];
$quantidade = $linha["quantidade"];
$visitas    = $linha["visita"];
$estado     = $linha["local_produto"];
$data       = $linha["data"];
$tipo_merc  = $linha["negociacao"];
$situacao   = $linha["situacao"];

if (empty($foto)){
	
	$foto = "fotos/sem_foto.jpg";
	
}

if ($negrita==1){

?>


  <tr bgcolor="#FFFFCC">
    <td align="center" bgcolor="#FFFFFF"><img src="../<?=$foto;?>" width="47" height="37"></td>
    <td><span class="style13"><a href='descricao.php?id_prod=<?=$ID_COD;?>'><?=$nome;?></a></span></td>
    <td align="center"><span class="style4"><?=$preco1.' '.$preco2;?></span></td>
    <td align="center"><span class="style2"><?=$quantidade;?></span></td>
    <td align="center"><span class="style2"><?=$visitas;?></span></td>
    <td align="center"><span class="style2"><?=$data;?></span></td>
    <td align="center"><span class="style2"><?=$tipo_merc;?></span></td>
    <td align="center"><span class="style6"><?=$situacao;?></span></td>
    <td><center><a href="../mercado/alterar_prod.php?id_prod=<?=$ID_COD;?>"><img src='../graphics/atualizar.gif' border='0'/></a></font></center></td>

  </tr>

<?
			
	$negrita = 0;		            
}else{

?>

  <tr bgcolor="#CCCCCC">
    <td align="center" bgcolor="#FFFFFF"><img src="../<?=$foto;?>" width="47" height="37"></td>
    <td><span class="style13"><a href='descricao.php?id_prod=<?=$ID_COD;?>'><?=$nome;?></a></span></td>
    <td align="center"><span class="style4"><?=$preco1.' '.$preco2;?></span></td>
    <td align="center"><span class="style2"><?=$quantidade;?></span></td>
    <td align="center"><span class="style2"><?=$visitas;?></span></td>
    <td align="center"><span class="style2"><?=$data;?></span></td>
    <td align="center"><span class="style2"><?=$tipo_merc;?></span></td>
    <td align="center"><span class="style6"><?=$situacao;?></span></td>
    <td><center><a href="../mercado/alterar_prod.php?id_prod=<?=$ID_COD;?>"><img src='../graphics/atualizar.gif' border='0'/></a></font></center></td>

  </tr>

<?

    $negrita = 1;	
}			
}
?>
        </tr>
      </table>
    </td>
</table>
</body>
</html>




<table width="100%" border="0" cellpadding="0">

<div align="center">
<font face="Arial,Helvetica" size='2'><b>
<?
	$tp = ceil($tp);
	if($pc>1) {
		$anterior = $pc - 1;
		echo "<a href=\"?lista=$anterior\">[Anterior]</a>";
	}
	for($i=$pc-5;$i<$pc;$i++) {
		if($i<=0) {
		}
		else {
			echo "<a href=\"?lista=$i\">";
			if($i=="$pc") {
				echo "<b>[$i]</b>";
			}
			else {
				echo "[$i]";
			}
			echo "</a> ";
		}
	}
	for($i=$pc;$i<=$pc+5;$i++) {
		if($i==$tp) {
			echo "<a href=\"?lista=$i\">";
			if($i=="$pc") {
				echo "<b>[$i]</b>";
			}
			else {
				echo "[$i]";
			}

			echo "</a> ";
			break;
		}
		else {
			echo "<a href=\"?lista=$i\">";
			if($i=="$pc") {
				echo "<b>[$i]</b>";
			}
			else {
				echo "[$i]";
			}
			echo "</a> ";

			if($i==$pc+5 && $tp>$pc+5) {
				echo " ... <a href=\"?lista=$tp\">[$tp]</a>";
			}
		}
	}
	if($pc<$tp) {
		$proxima = $pc + 1;
		echo " <a href=\"?lista=$proxima\">[Próxima]</a>";
	}

?>
</b></font>
</div>
</table>
<?
}else{
	
	require("inew_undher_files.php");	
	
}
?>