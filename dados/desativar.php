<?
/*
 ----------------------------------------------------------
 Desenvolvido por...: Edson de Araujo
 Finalidade.........: Finalizar Produto
 Criado em Data.....: 02/08/2009
 Ultima Atualização : 02/08/2009 

 DEUS SEJA LOUVADO
 ----------------------------------------------------------
*/

include('aguarde.php');

include('titulo.php');

// Abre Conexão com o MySql
include("../conexao.php");

// Resgata a Sessao
@session_start();
$ser_name3_c    = $_SESSION["log_name_c"];
$acesso_2       = $_SESSION['data_log_2'];

if ($ser_name3_c == strtoupper("VISITANTE")){
	
	include("../informe.php");
	exit;
}
if (empty($ser_name3_c)){
	
	include("../informe.php");
	exit;
}

$date1     = date("d/m/Y");
$hora      = date("H:i:s");

// Chama o Banco de Dados

$link = @mysql_connect($host,$user,$pass);

@mysql_select_db($db);


$consulta_log = "UPDATE tt_ser_01  SET excluido  = 'SIM'  WHERE codigo = ". decode5t($cod_dados) ." ";

@mysql_query($consulta_log, $link);


// Envia e-mail informando que o produto recebeu uma pergunta

$consulta4  = "SELECT * FROM tt_ser_01 WHERE codigo = '". decode5t($cod_dados) ."'";
					
$resultado4 = @mysql_query($consulta4);
				
$row4 = @mysql_fetch_array($resultado4);
					
$id           = @$row4["codigo"];
$ligon        = @$row4["login"];
$nome         = @$row4["nome"];      		
$sobrenome    = @$row4["sobrenome"];
$id_email     = @$row4["e_mail"];
$rua          = @$row4["rua"];
$endereco     = @$row4["endereco"];
$bairro       = @$row4["bairro"];
$cidade       = @$row4["cidade"];
$estado       = @$row4["estado"];
$cep          = @$row4["cep"];
$fone_fix     = @$row4["fone_fix"];
$id_fone      = @$row4["fone_cel"];

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

<?


if ($ser_name3_c != "VISITANTE"){

?>

<body style=" margin-left: 0px;  margin-top: 0px;  margin-right: 0px;  margin-bottom: 0px; "   bgcolor="#FFFFFF" >

<table width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td bgcolor="#FF9900"><table width="100%" border="0" cellpadding="0" cellspacing="1">
      <tr>
        <td bgcolor="#FDECDB"><img src="../graphics/px1.gif" width="15" height="14"><b><font color="#FF6600" face="Arial">Cadastro de Usuario </font></b></td>
      </tr>
    </table></td>
  </tr>
</table>

<?

		echo "<body bgcolor='#FFFFFF'><br><br><br><br>";
		echo "<center><b>Você Desabilitou seu Cadastro ". $ligon ." com sucesso!!! </b><br></center>";
		echo "<center><b>para voltar a usa-lo entre com seu login e senha</b><br></center>";
		echo "<center><b>e ative-o novamente seu login ". $ligon ." em alteração</b></center>";
		echo "<center><b>O Compraai agradece por usar o Portal</b></center>";
		echo "<center><b>Duvidas acesse o <a href=../fale/fale.php>Fale Conosco</a></b></center>";
		echo "<center><b>Obrigado</b></center><br><br><br></body>";
		echo "<center><a href='../principal.php'><img src='../graphics/retorno.png' border='0'/></a></center><br><br>";
?>
</body>
</html>

<?

}else{
	
	
	include('../principal.php');
	
}

include('rodape.php');
?>
