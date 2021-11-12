<?php

/**
 * @author holodek
 * @copyright 2009
 */

if (!empty($alte_url_pag)){

// Abre Conexão com o MySql
include("../conexao.php");
// Chama o Banco de Dados

$link = @mysql_connect($host,$user,$pass);

@mysql_select_db($db);

}else{

header('Location:../index.php');

	
}

include_once("../config.php");

include_once('../sql_injection.php');

?>

<style>

body {
	   SCROLLBAR-ARROW-COLOR: blue;
	   SCROLLBAR-BASE-COLOR: #FFC082
	   
}

    A:link,a:active,a:visited{ color:#000000; text-decoration:none; }
    A:hover{ color:#FF3333; text-decoration:none; }
	A:visited {color:#0000cc;}
	A:active {color:#0000cc;}

	A.clase1:visited {color:#000000;}
	A.clase1:active {color:#000000;} 
	A.clase1:link {color:#000000}
	A.clase1:hover {color:#FFFFFF}

</style>

<style type="text/css">
<!--
.style1 {
	font-size: 11px;
	font-family: Arial, Helvetica, sans-serif;
	font-weight: bold;
}
.style2 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 10px;
}
.style19 {
	font-family: Arial;
	font-size: 9px;
}
.style20 {
	font-family: Arial;
	font-weight: bold;
	font-size: 11px;
}


#pages {
	padding: 3px;
}
#pages ul {
	list-style-type: none;
}
#pages li {
	float: left;
	display: inline;
	margin: 0 5px 0 0;
}
#pages li a {
	color: #FF6600;
	padding: 4px;
	border: 1px solid #ddd;
	text-decoration: none;
	float: left;
}
#pages li a:hover {
	color: #FF6600;
	background: #DBDBDB;
	border: 1px solid #FF9900;
}
#pages li.nolink {
	color: #FF6600;
	border: 1px solid #ddd;
	padding: 4px;
}
#pages li.current {
	color: #fff;
	border: 1px solid #b2e05d;
	padding: 4px;
	background: #b2e05d;
}

-->
</style>

</head>

<script>

// Funcao Salva Sessao
function Salva1(Var1)
{
     window.location = "salva_session.php?Var_1="+Var1.value;     
}
function Salva2(Var2)
{
     window.location = "salva_session.php?Var_2="+Var2.value;     
}

</script>

<div align="left">
<?php

include("../conexao.php");

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


//*********************************************************************
// CONFIGURAÇÃO DE BANCO DE DADOS
//*********************************************************************
$con = @mysql_connect($hostname_conn,$username_conn,$password_conn);
$bd  = @mysql_select_db($database_conn);

?>
<body  bgcolor="#ffffff">
<?
// Resgata Sessao
@session_start();
if (!empty($_SESSION['Edit1'])){

   $Edit1_x   = $_SESSION['Edit1'];
	
}else{
	$Edit1_x = 2;
}
?>
<?
     


 //*********************************************************************
 // GERA A INSTRU&Ccedil;&Atilde;O SQL E CHAMA A FUN&Ccedil;&Atilde;O PARA GERAR AS COLUNAS
 //*********************************************************************
 $sql = "SELECT * FROM produto2 WHERE nome_user = '". $ligon. "' ORDER BY RAND()"; // LIMIT 0,6
 GeraCol3a(4, $sql);
 
 ?>
 
 
  <tr>
    <td>
<?
//*********************************************************************
// FUN&Ccedil;&Atilde;O: GERACOLUNAS
// Parametros:
//  $pNumColunas (int)   > Quant. de colunas para distribui&ccedil;&atilde;o
//  $pQuery    (string) > Query de registros
//*********************************************************************
function GeraCol3a($pNumColunas, $pQuery) {
//$resultado = @mysql_query($pQuery);


// Número de registros por página
$registros_pagina = "4";

$lista = (int)$_GET["lista"];

if(!$lista) {
	$pc = "1";
}
else {
	$pc = $lista;
}

$inicio = $pc - 1;
$inicio = $inicio * $registros_pagina;

$resultado = mysql_query("$pQuery LIMIT $inicio, $registros_pagina");

$todos = mysql_query("$pQuery");

$tr = mysql_num_rows($todos);

$tp = $tr / $registros_pagina;

if(mysql_num_rows($resultado) < 1) {

}


if (@mysql_num_rows($resultado)== 0){
	echo "<br><br><center><b>N&atilde;o existe nenhum produtos nessa Loja !!!</b></center><br><br>";

}else{
echo ("<table width='50' height='60' border='0' cellpadding='0' cellspacing='1' align='center'>\n");
 for($i = 0; $i <= @mysql_num_rows($resultado); ++$i) {
 
 for ($intCont = 0; $intCont < $pNumColunas; $intCont++) {
  $linha = @mysql_fetch_array($resultado);
  if ($i > $linha) {
   if ( $intCont < $pNumColunas-1) echo "</tr>\n";
   break;
  }

  $cod = encode5t($linha[1]);
  $nome = $linha[3];
  $img = $linha[21];
  $gosto = trim($linha[6]); 

  $preco = @number_format($linha[5],2,",",".");

  if ( $intCont == 0 ) echo "<tr>\n";
  echo "<td bgcolor='#FF9900'>";
  echo "<table width='50' height='100%' border='0' cellpadding='0' cellspacing='1'>";
  echo "<tr>";
  echo "<td bgcolor='#FFFFFF'>";
  
  
  // Aqui voc&ecirc; inclui o conteudo
  echo "<table width='150' height='100%' border='0' align='center' cellspacing='0' cellpadding='0'>";
  
  echo "<tr>";
  echo "<td>";
  echo "<table width='110' height='100%' border='0' align='center' cellpadding='0' cellspacing='0'>";
  echo "<tr>";

  if (empty($img)){
	
     $img = "fotos/sem_foto.jpg";
	
  }
  
 $preco = number_format($linha[9],2,",",".");
  
  echo "<td align='center'><a href='../comercio/descricao.php?id_prod=".$cod."'><img src='../".$img."' border='0' width='60' height='60' /></a></td>";
  echo "</tr>";
  
  echo "<tr>";
  echo "<td><div align='center' style='font-size:10px;font-family:Verdana'><strong><a href='../comercio/descricao.php?id_prod=".$cod."&acao=incluir'>".$nome."</a></strong></div><strong><div align='center'><font color='#FF0000' size='2px'> R$ ".$preco." </font></strong>
    
  </div><br></td>";
  echo "</tr>";
  echo "</table>";
  echo "</td>";
  echo "</tr>";
  echo "</table>";
  
    echo "</td>";
      echo "  </tr>";
     echo " </table>";
	
	  echo "</td>";
   // Aqui &eacute; o final do conteudo
  echo "</td>";

  if ( $intCont == $pNumColunas-1 ) {
   echo "</tr>\n";
  } else { $i++; }
 }
 
 }
 
echo ('</table>');
}

echo ('<center>');
}
?>
