<?
/*
 -----------------------------------------
 Desenvolvido por...: Edson de Araujo
 Finalidade.........: Alterar no Cadastro Produto
 Criado em Data.....: 07/12/2007
 Ultima Atualização : 13/07/2009 

 DEUS SEJA LOUVADO
 -----------------------------------------
*/

include_once("../config.php");

include('aguarde.php');

include('titulo.php');

// Resgata a Sessao
session_start();
$ser_name3_c = strtolower($_SESSION["log_name_c"]);
$acesso_2 = $_SESSION['data_log_2'];


if ($ser_name3_c == "VISITANTE"){
	
	require("../informe.php");
	exit;
}
if (empty($ser_name3_c)){
	
	require("../informe.php");
	exit;
}

$id_01        = $_POST['id_01'];
$Edit1        = $_POST['Edit1'];
$Edit2a       = $_POST['Edit2a'];
$Edit2        = $_POST['Edit2'];
$Edit3        = $_POST['Edit3'];
$Edit4        = $_POST['Edit4'];
$Edit5        = $_POST['Edit5'];
$Edit6        = $_POST['Edit6'];
$Edit7        = $_POST['Edit7'];
$Edit8        = $_POST['Edit8'];
$Edit9        = $_POST['Edit9'];
$Edit10       = $_POST['Edit10'];
$Edit11       = $_POST['Edit11'];
$Edit12       = $_POST['Edit12'];
$Edit13       = $_POST['Edit13'];
$Edit14       = $_POST['Edit14'];
$Edit15       = $_POST['elm1'];
$Edit16       = $_POST['Edit16'];


if(strlen($Edit4)<=0){
  $Edit4 = 0;
}
if($Edit4 == "."){
  $Edit4 = 0;
}

if(strlen($Edit6)<=0){
  $Edit6 = 0;
}
if($Edit6 == "."){
  $Edit6 = 0;
}
if(strlen($Edit7)<=0){
  $Edit7 = 0;
}
if($Edit7 == "."){
  $Edit7 = 0;
}
if(strlen($Edit8)<=0){
  $Edit8 = 0;
}
if($Edit8 == "."){
  $Edit8 = 0;
}
if(strlen($Edit9)<=0){
  $Edit9 = 0;
}
if($Edit9 == "."){
  $Edit9 = 0;
}


//echo "Edit1  ".$Edit1."<br>";
//echo "Edit2  ".$Edit2."<br>";
//echo "Edit3  ".$Edit3."<br>";
//echo "Edit4  ".$Edit4."<br>";
//echo "Edit5  ".$Edit5."<br>";
//echo "Edit6  ".$Edit6."<br>";
//echo "Edit7  ".$Edit7."<br>";
//echo "Edit8  ".$Edit8."<br>";
//echo "Edit9  ".$Edit9."<br>";
//echo "Edit10 ".$Edit10."<br>";
//echo "Edit11 ".$Edit11."<br>";
//echo "Edit12 ".$Edit12."<br>";
//echo "Edit13 ".$Edit13."<br>";
//echo "Edit14 ".$Edit14."<br>";
//echo "Edit15 ".$Edit15."<br>";
//echo "Edit16 ".$Edit16."<br>";

//break;


// Abre Conexão com o MySql
include("../conexao.php");
// Chama o Banco de Dados

$link = @mysql_connect($host,$user,$pass)

    or die( require("../server.php.php"));

@mysql_select_db($db);


					$consulta4 = "UPDATE produto2 SET   categoria     = '$Edit1',
					                                    categoriaa    = '$Edit2a',
														nome          = '$Edit2',
														tipo          = '$Edit3',
														peso          = '$Edit4',
														descricao     = '$Edit15',
														combinar      = '$Edit6',
														valor1        = '$Edit7',
														valor2        = '$Edit8',
														valor3        = '$Edit9',
														quantidade    = '$Edit10',
														entrega       = '$Edit11',
														pagamento     = '$Edit12',
														destaque      = '$Edit13',
														local_produto = '$Edit14',
														negociacao    = '$Edit16' WHERE codigo = ". decode5t($cod_prod). " ";

					@mysql_query($consulta4, $link)  or

                                  die("<script>alert('Erro: Falha na Alteração !!!');</script>	
				                       <script>history.go(-1);</script>");					
                     	


$consulta4  = "SELECT * FROM produto2 WHERE codigo = ". decode5t($cod_prod). " ";
					
$resultado4 = @mysql_query($consulta4);
					
$row4 = @mysql_fetch_array($resultado4);
					
$id_prod    = encode5t(@$row4["codigo"]);

include_once("../funcoes2.php");
?>
<html >
<head>
<title><?=$Titulo;?></title>
<link rel="shortcut icon" href="../graphics/favicon.ico"/>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

<style type="text/css">
<!--
body {
	   SCROLLBAR-ARROW-COLOR: blue;
	   SCROLLBAR-BASE-COLOR: #FFC082
	   
}
.style19 {
	font-family: "Comic Sans MS";
	font-size: 20px;
	font-style: italic;
	color: #FFFFFF;
}

-->
</style>

</head>

<body style=" margin-left: 0px;  margin-top: 0px;  margin-right: 0px;  margin-bottom: 0px; " bgcolor="#FFFFFF">

<table width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td bgcolor="#FF9900"><table width="100%" border="0" cellpadding="0" cellspacing="1">
      <tr>
        <td bgcolor="#FDECDB"><img src="../graphics/px1.gif" width="15" height="14"><b><font color="#FF6600" face="Arial">Cadastro de Produto <font size="2">(portal da troca)</font> </font></b> </td>
      </tr>
    </table></td>
  </tr>
</table>

<br />


<form style="margin-bottom: 0" id="Unit1" name="Unit1" method="post"  action="/confirmacao_800_600.php">
<table  width="100%"   style="height:296px"  border="0" cellpadding="0" cellspacing="0"  bgcolor="#FFFFFF"  ><tr><td valign="top">

<br />

<center><img id="Image2" src="../graphics/ok.gif"  width="68"  height="91"  border="0"/></center>

<br /><br />
<center><STRONG>Parabéns - Seu produto foi Alterado com Susseco !!!</STRONG><br /><br /></center>
<center><STRONG>Clique <FONT color=#0000ff><a href="pre_upload.php?cod_prod=<?=$id_prod;?>">AQUI</a></FONT> para Alterar as Fotos do Produto</STRONG><br /><br /><br /></center>
<center><a href="../comercio/descricao.php?id_prod=<?=$cod_prod;?>"><img id="Image3" src="../graphics/fechar_fot.png"  width="148"  height="29"  border="0"       /></a></center>

</table>
<br />
</form></body>
</html>

<?
include('rodape.php');
?>