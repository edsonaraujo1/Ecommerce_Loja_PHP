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

// Resgata Sessao
session_name("Val_Vagas");
session_start();

$Edit0_x   = trim($_SESSION['Edit0x']);
$Edit1_x   = $_SESSION['Edit1'];
$Edit2_x   = $_SESSION['Edit2'];

$faz_nome =	$_SESSION['faz_nome'];

if ($vazer_y == 3){
	
	$sql  = "SELECT * FROM produto2 ORDER BY nome ASC";
	$vazer_y = 0;

	session_start();
	
	$_SESSION['Edit0']  = "";
	$_SESSION['Edit0x'] = "";
	$_SESSION['Edit1']  = "";
	$_SESSION['Edit2']  = "";

	
}else{
	
	
	if ($faz_nome !=  "nao"){
		
        require("teste.php");
		
	} 
	
}

 
session_name("pesq_nome");
session_start();

$_SESSION['faz_nome'] = "";


$query_Recordset1 = "SELECT cod_categ, descricao FROM categoria_prod";
$Recordset1 = @mysql_query($query_Recordset1, $link); // or die(mysql_error());
$row_Recordset1 = @mysql_fetch_assoc($Recordset1);
$totalRows_Recordset1 = @mysql_num_rows($Recordset1);

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

if(mysql_num_rows($resultado) < 1) {

   $sql  = "SELECT * FROM produto2 ORDER BY nome ASC";

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

<body style=" margin-left: 0px;  margin-top: 0px;  margin-right: 0px;  margin-bottom: 0px; "   bgcolor="#FFFFFF" >

<table width="100%" height="52" border="0">
            <tr>
              <td width="100%" background="../graphics/forum_baner.png"><span class="style19">&nbsp;&nbsp;Portal da Troca</span></td>
            </tr>
          </table>

<?


   echo "<br><br><center><b>Produto não Encontrado !!!!</b></center><br>";
   echo "<center><a href='../comercio/layout.php'><img src='../graphics/retorno.png' border='0'/></a></center>";
   echo "</body>";

}
else {

?>
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

<script>

// Funcao Salva Sessao
function Salva0(Var0)
{
     window.location = "salva_session.php?Var_0="+Var0.value;
}
function Salva1(Var1)
{
     window.location = "salva_session.php?Var_1="+Var1.value;     
}
function Salva2(Var2)
{
     window.location = "salva_session.php?Var_2="+Var2.value;     
}

</script>


<body style=" margin-left: 0px;  margin-top: 0px;  margin-right: 0px;  margin-bottom: 0px; "   bgcolor="#FFFFFF" >

<table width="100%" height="52" border="0">
            <tr>
              <td width="100%" background="../graphics/forum_baner.png"><span class="style19">&nbsp;&nbsp;Portal da Troca</span></td>
            </tr>
          </table>

<table width="100%" border="0">
  <tr>
    <td height="172" valign="top">
	
	<form style="margin-bottom: 0" id="Form1" name="Form1" method="post"  action="pesq_nome.php">

	<table width="100%" height="28" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td width="35%" height="24"><span class="style7 style8">Procura por: </span>
		  <input name="Edit0" type="text" style=" font-family: Verdana; font-size: 10px; height:19px;width:130px;"/>
		  <input type=image name="Pesq" src="../graphics/ok_azul.gif" border="0"/>
		  
		  </td>
        <td width="33%"><span class="style7 style8">Categoria:
          <select name="Edit1" type="text" onchange="Salva1(this)" style=" font-family: Verdana; font-size: 10px; height:19px;width:135px;">
          
          <?
			Do {  
			?>
			      <option value="<?php echo $row_Recordset1['cod_categ']?>"><?php echo $row_Recordset1['descricao']?></option>
			<?
			}
			while ($row_Recordset1 = mysql_fetch_assoc($Recordset1));
			      $rows = mysql_num_rows($Recordset1);
			      if($rows > 0) {
			         mysql_data_seek($Recordset1, 0);
				     $row_Recordset1 = mysql_fetch_assoc($Recordset1);
			      }
			?>
			</select>

        </span></td>
        <td width="30%"><span class="style7 style8">Pre&ccedil;o:
          <select name="Edit2" type="text" onchange="Salva2(this)" style=" font-family: Verdana; font-size: 10px; height:19px;width:100px;">
          
                <option value="0">Selecione</option>
			    <option value="1">Menor Preço</option>
			    <option value="2">Maior Preço</option>
			</select>

        </span></td>
        </tr>
    </table>
    </form>
    
    
      <table width="100%" border="0" cellpadding="0">
        <tr bgcolor="#CCCCCC">
          <td><div align="center" class="style7 style14">foto</div></td>
          <td><div align="center" class="style11 style14">Nome do Produto </div></td>
          <td><div align="center" class="style15">Pre&ccedil;o</div></td>
          <td><div align="center" class="style15">Quantidade</div></td>
          <td><div align="center" class="style15">Visitas</div></td>
          <td><div align="center" class="style15">Estado</div></td>
          <td><div align="center" class="style15">Data do Cadastro </div></td>
          <td><div align="center" class="style15">Negocia&ccedil;&atilde;o</div></td>
          <td><div align="center" class="style15">Situa&ccedil;&atilde;o</div></td>
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
	
	$foto = "../graphics/sem_foto.jpg";
	
}

if ($negrita==1){

?>


  <tr bgcolor="#FFFFCC">
    <td align="center" bgcolor="#FFFFFF"><img src="../<?=$foto;?>" width="47" height="37"></td>
    <td><span class="style13"><a href='descricao.php?id_prod=<?=$ID_COD;?>'><?=$nome;?></a></span></td>
    <td align="center"><span class="style4"><?=$preco1.' '.$preco2;?></span></td>
    <td align="center"><span class="style2"><?=$quantidade;?></span></td>
    <td align="center"><span class="style2"><?=$visitas;?></span></td>
    <td align="center"><span class="style2"><?=$estado;?></span></td>
    <td align="center"><span class="style2"><?=$data;?></span></td>
    <td align="center"><span class="style2"><?=$tipo_merc;?></span></td>
    <td align="center"><span class="style6"><?=$situacao;?></span></td>
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
    <td align="center"><span class="style2"><?=$estado;?></span></td>
    <td align="center"><span class="style2"><?=$data;?></span></td>
    <td align="center"><span class="style2"><?=$tipo_merc;?></span></td>
    <td align="center"><span class="style6"><?=$situacao;?></span></td>
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