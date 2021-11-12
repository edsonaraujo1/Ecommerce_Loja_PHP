<?
/*
 -----------------------------------------
 Desenvolvido por...: Edson de Araujo
 Finalidade.........: Incluir no Cadastro Produto
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


$Edit1        = $_POST['Edit1'];
$Edit2        = $_POST['Edit2'];
$Edit2a       = $_POST['Edit2a'];
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


//echo $Edit1."<br>";
//echo $Edit2."<br>";
//echo $Edit3."<br>";
//echo $Edit4."<br>";
//echo $Edit5."<br>";
//echo $Edit6."<br>";
//echo $Edit7." ".trim($Edit8).trim($Edit9)."<br>";
//echo $Edit8."<br>";
//echo $Edit9."<br>";
//echo $Edit10."<br>";
//echo $Edit11."<br>";
//echo $Edit12."<br>";
//echo $Edit13."<br>";
//echo $Edit14."<br>";
//echo $Edit15."<br>";



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

// Abre Conexão com o MySql
include("../conexao.php");
// Chama o Banco de Dados

$link = @mysql_connect($host,$user,$pass)

    or die( require("../server.php.php"));

@mysql_select_db($db);


if (!empty($Edit2)){
                     // Caso contrario entao cadaste
                     
					$consulta3  = "SELECT * FROM produto2 ORDER BY codigo DESC LIMIT 0,1";
					
					$resultado3 = @mysql_query($consulta3);
					
					// Incrementa novo codigo
					
					$row3 = @mysql_fetch_array($resultado3);
					
					$id        = @$row3["id"];
					$cod_2     = @$row3["codigo"];
					
					$Novo_cod  = $cod_2+1;
					$date1     = date("d/m/Y");
                    $hora      = date("H:i:s");
                    $per_1     = 0;
                    $per_2     = 0;
                    $situa     = "ATIVO";
                    $visita    = 0;

					$consulta4 = "INSERT produto2      (codigo,
														categoria,
														categoriaa,
														nome,
														tipo,
														peso,
														descricao,
														combinar,
														valor1,
														valor2,
														valor3,
														quantidade,
														entrega,
														pagamento,
														destaque,
														local_produto,
														nome_user,
														data,
														hora,
														situacao,
														visita,
														negociacao,
														excluido)    
														 
														 
														 
														 
														        
					                VALUES
					                                  ('$Novo_cod',
													   '$Edit1',
													   '$Edit2a',
													   '$Edit2',
													   '$Edit3',
													   '$Edit4',
													   '$Edit15',
													   '$Edit6',
													   '$Edit7',
													   '$Edit8',
													   '$Edit9',
													   '$Edit10',
													   '$Edit11',
													   '$Edit12',
													   '$Edit13',
													   '$Edit14',
													   '$ser_name3_c',
													   '$date1',
													   '$hora',
													   '$situa',
													   '$visita',
													   '$Edit16',
													   'NAO')";

					@mysql_query($consulta4, $link)  or

                                  die("echo '<script>alert('Erro: Falha incluindo !!!');</script>'	
				                       echo '<script>history.go(-1);</script>'");					
                     	


$consulta4  = "SELECT * FROM produto2 WHERE codigo = '$Novo_cod'";
					
$resultado4 = @mysql_query($consulta4);
					
$row4 = @mysql_fetch_array($resultado4);
					
$id_prod    = encode5t(@$row4["codigo"]);

include_once("../funcoes2.php");

}else{
	
	?>
	<table width="100%" border="0" cellpadding="0" cellspacing="0">
	  <tr>
	    <td bgcolor="#FF9900"><table width="100%" border="0" cellpadding="0" cellspacing="1">
	      <tr>
	        <td bgcolor="#FDECDB"><img src="../graphics/px1.gif" width="15" height="14"><b><font color="#FF6600" face="Arial">Cadastro de Produto (Portal da Troca) </font></b></td>
	      </tr>
	    </table></td>
	  </tr>
	</table>
	<?    	

    echo "<body bgcolor='#FFFFFF'><br><br><br><br>";
	echo "<center><b>Falha na Inclusão tente novamente !!!</b><br><br></center>";
    echo "<center><a href='produto.php'><img src='../graphics/retorno.png' border='0' /></a></center><br><br><br>";
    echo "<br><br><br><br><br><br><br><br>";

    include('rodape.php');

    exit;	
}
?>
<html >
<head>
<title><?=$Titulo;?></title>
<link rel="shortcut icon" href="../graphics/favicon.ico"/>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

<?
if ($browser == " MS Internet Explorer"){
?>

<style>
body {
	   BORDER-BOTTOM: #FFC082 3px ridge;
	   BORDER-LEFT: #FFC082 3px ridge;
	   BORDER-RIGHT: #FFC082 3px ridge;
	   BORDER-TOP: #FFC082 3px ridge;
	   SCROLLBAR-ARROW-COLOR: blue;
	   SCROLLBAR-BASE-COLOR: #FFC082
	   
}

.style19 {
	font-family: "Comic Sans MS";
	font-size: 20px;
	font-style: italic;
	color: #FFFFFF;
}

</style>
<?
}
?>

<style>

.style19 {
	font-family: "Comic Sans MS";
	font-size: 20px;
	font-style: italic;
	color: #FFFFFF;
}

</style>
</head>

<body  style=" margin-left: 0px;  margin-top: 0px;  margin-right: 0px;  margin-bottom: 0px; "   bgcolor="#FFFFFF" >
<form style="margin-bottom: 0" id="Unit1" name="Unit1" method="post"  action="/confirmacao_800_600.php">
<table  width="100%"   style="height:296px"  border="0" cellpadding="0" cellspacing="0"  bgcolor="#FFFFFF"  ><tr><td valign="top">

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

<center><img id="Image2" src="../graphics/ok.gif"  width="68"  height="91"  border="0"/></center>

<br /><br />
<center><STRONG>Parabéns - Seu produto foi cadastrados com Susseco !!!</STRONG><br /><br /></center>
<center><STRONG>Clique <FONT color=#0000ff><a href="pre_upload.php?cod_prod=<?=$id_prod;?>">AQUI</a></FONT> para incluir as Fotos do Produto</STRONG><br /><br /><br /></center>
<center><a href="../comercio/descricao.php?id_prod=<?=$id_prod;?>"><img id="Image3" src="../graphics/fechar.png"  width="148"  height="29"  border="0"       /></a></center>

</table>
<br />
<br />
</form></body>
</html>

<?

$Edit1        = " ";
$Edit2        = " ";
$Edit2a       = " ";
$Edit3        = " ";
$Edit4        = " ";
$Edit5        = " ";
$Edit6        = " ";
$Edit7        = " ";
$Edit8        = " ";
$Edit9        = " ";
$Edit10       = " ";
$Edit11       = " ";
$Edit12       = " ";
$Edit13       = " ";
$Edit14       = " ";
$Edit15       = " ";
$Edit16       = " ";

include('rodape.php');
?>