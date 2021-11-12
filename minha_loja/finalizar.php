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


$consulta_log = "UPDATE produto2  SET situacao     = 'Finalizado',
                                      comprado_por = '$ser_name3_c',
									  comp_em      = '$date1'  WHERE codigo = ". decode5t($id_prod) ." ";

@mysql_query($consulta_log, $link);


// Envia e-mail informando que o produto recebeu uma pergunta

$consulta  = "SELECT * FROM produto2 WHERE codigo = ". decode5t($id_prod) ." ";
					
$resultado = @mysql_query($consulta);
					
// Incrementa novo codigo
					
$row = @mysql_fetch_array($resultado);
					

$ID_COD     = @$row["codigo"];
$id_prod    = @$row["codigo"];
$nome_prod  = @$row["nome"];
$descricao  = @$row["descricao"];
$preco1     = @$row["valor1"];
$preco2     = @$row["valor2"];
$foto       = @$row["fot_peq"];
$quantidade = @$row["quantidade"];
$visitas    = @$row["visita"];
$estado     = @$row["local_produto"];
$usuario    = @$row["nome_user"];
$tipo       = @$row["tipo"];
$entrega    = @$row["entrega"];
$pagamento  = @$row["pagamento"];

$nome_user_1 = trim(strtoupper(@$row["nome_user"]));

$consulta4  = "SELECT * FROM tt_ser_01 WHERE login = '$nome_user_1'";
					
$resultado4 = @mysql_query($consulta4);
				
$row4 = @mysql_fetch_array($resultado4);
					
$id           = @$row4["codigo"];
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

// Recolhe dados do Comprador
$consulta5  = "SELECT * FROM tt_ser_01 WHERE login = '$ser_name3_c'";
					
$resultado5 = @mysql_query($consulta5);
				
$row5 = @mysql_fetch_array($resultado5);
					
$id_compra           = @$row5["codigo"];
$nome_compra         = @$row5["nome"];      		
$sobrenome_compra    = @$row5["sobrenome"];
$id_email_compra     = @$row5["e_mail"];
$rua_compra          = @$row5["rua"];
$endereco_compra     = @$row5["endereco"];
$bairro_compra       = @$row5["bairro"];
$cidade_compra       = @$row5["cidade"];
$estado_compra       = @$row5["estado"];
$cep_compra          = @$row5["cep"];
$fone_fix_compra     = @$row5["fone_fix"];
$id_fone_compra      = @$row5["fone_cel"];

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


if ($ser_name3_c == $nome_user_1){

?>

<body style=" margin-left: 0px;  margin-top: 0px;  margin-right: 0px;  margin-bottom: 0px; "   bgcolor="#FFFFFF" >

<table width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td bgcolor="#FF9900"><table width="100%" border="0" cellpadding="0" cellspacing="1">
      <tr>
        <td bgcolor="#FDECDB"><img src="../graphics/px1.gif" width="15" height="14"><b><font color="#FF6600" face="Arial">Portal da Troca </font></b></td>
      </tr>
    </table></td>
  </tr>
</table>

<?

		echo "<body bgcolor='#FFFFFF'><br><br><br><br>";
		echo "<center><b>Você FINALIZOU sua venda com sucesso! do produto</b><br></center>";
		echo "<center><b>". $nome_prod ." para voltar a negociar esse produto entre em alterção</b><br></center>";
		echo "<center><b>e ative-o novamente para venda ou troca</b></center>";
		echo "<center><b>O Compraai.com.br agradece por usar o Portal</b></center>";
		echo "<center><b>Duvidas acesse o <a href=../fale/fale.php>Fale com o Portal</a></b></center>";
		echo "<center><b>Obrigado</b></center><br><br><br></body>";
		echo "<center><a href='descricao.php?id_prod=". encode5t($id_prod) ."'><img src='../graphics/retorno.png' border='0'/></a></center><br><br>";
?>
</body>
</html>

<?

}else{
	

$assunto   = "Seu Produto ".$nome_prod." Foi Arrematado";
    
require_once('phpmailer/class.phpmailer.php');

$erros = "";

if( empty($erros) ){


    // Email para o Vendedor
    
    $phpmail = new PHPMailer();

	$phpmail->IsSMTP();                              // Envia por SMTP
	$phpmail->Mailer   = "smtp";
	$phpmail->Host     = "174.122.66.98";            // SMTP servers
	$phpmail->SMTPAuth = true;                       // Caso o servidor SMTP precise de autenticação
	$phpmail->Port     = 25;
	$phpmail->Username = "compraai@compraai.com.br";        // SMTP username
	$phpmail->Password = "tty%909$";                 // SMTP password
							
	$phpmail->IsHTML(true);
	$phpmail->From     = "compraai@compraai.com.br";        // Retorno CC
	$phpmail->FromName = "Compraai.com.br";
							
	$phpmail->AddAddress($id_email);           // Destino
	$phpmail->AddAddress("compraai@compraai.com.br"); // Trocar CCo

    $message = "<html>
	            <head>
				<style type='text/css'>
				<!--
				.style1 {font-size: 12px}
				-->
                </style>
	            </head>
				<body>

				<table border='0' align='center' cellpadding='0' cellspacing='0'>
				  <tr>
				    <td width='10'>&nbsp;</td>
				    <td width='353' align='center'><img src='http://www.compraai.com.br/site/graphics/rosto_email.png' width='353' height='115'></td>
				    <td width='10'>&nbsp;</td>
				  </tr>
				  <tr>
				    <td>&nbsp;</td>
				    <td valign='top' bgcolor='#CCCCCC'><div align='center'>
				      <table width='99%' border='0' cellpadding='1' cellspacing='1' bordercolor='#CCCCCC' bgcolor='#FFFFFF'>
                        <tr>
                          <td bgcolor='#CCCCCC'><div align='center'>Seu Produto: <strong>$nome_prod</strong></div></td>
                        </tr>
                        <tr>
                          <td bgcolor='#FFFFFF'><div align='center'><span class='style1'>Foi Arrematado por: </span><strong>$ser_name3_c</strong> <span class='style1'>em <strong>$date1</strong> as <strong>$hora</strong></span> </div></td>
                        </tr>
                        <tr>
                          <td align='left'><span class='style1'>Produto:</span>&nbsp;<b>$nome_prod</b> </td>
                        </tr>
                        <tr>
                          <td align='left'><span class='style1'>Valor:</span>&nbsp;<b>$preco1&nbsp;&nbsp;$preco2</b></td>
                        </tr>
                        <tr>
                          <td align='left'><span class='style1'>Tipo de Produto: </span>&nbsp;<b>$tipo</b></td>
                        </tr>
                        <tr>
                          <td align='left'><span class='style1'>Tipo de Entrega: </span>&nbsp;<b>$entrega</b></td>
                        </tr>
                        <tr>
                          <td align='left'><span class='style1'>Forma de Pagamento: </span>&nbsp;<b>$pagamento</b></td>
                        </tr>
                        <tr>
                          <td bgcolor='#CCCCCC'><div align='center'><strong>Dados do Comprador </strong></div></td>
                        </tr>
                        <tr>
                          <td align='left'>Nome:&nbsp;<b>$nome_compra&nbsp;$sobrenome_compra</b></td>
                        </tr>
                        <tr>
                          <td align='left'>Endereco:&nbsp;<b>$rua_compra&nbsp;$endereco_compra</b> </td>
                        </tr>
                        <tr>
                          <td align='left'>Cep:&nbsp;<b>$cep_compra</b></td>
                        </tr>
                        <tr>
                          <td align='left'>Fones para contato:&nbsp; <b>$fone_fix_compra&nbsp;ou&nbsp;$id_fone_compra</b></td>
                        </tr>
                        <tr>
                          <td align='left'>e-Mail:&nbsp;<b>$id_email_compra</b></td>
                        </tr>
                        <tr>
                          <td>&nbsp;</td>
                        </tr>
                      </table>
				      <p align='center'><span class='style1'>Ap&oacute;s a concretiza&ccedil;&atilde;o da negocia&ccedil;&atilde;o voc&ecirc; pode dar<br> 
			          uma nota para o comprador clicando</span> aqui <br>
			          <strong>				          </strong></p>
			        </div></td>
				    <td>&nbsp;</td>
				  </tr>
				  <tr>
				    <td height='23'>&nbsp;</td>
				    <td bordercolor='#999999' bgcolor='#CCCCCC'><div align='left'>
				      <p><b>Seus dados</b><br>
					     Nome.:&nbsp;$nome&nbsp;$sobrenome<br>
				         Email:&nbsp;$id_email<br>
				         <br>
				</p>
				    </div></td>
				    <td>&nbsp;</td>
				  </tr>
				  <tr>
				    <td height='23'>&nbsp;</td>
				    <td bgcolor='#FF8401'><div align='center'><span>Created by Compraai todos direitos reservados 2009</span>                    </div></td>
				    <td>&nbsp;</td>
				  </tr>

				</table>
				</body>
				</html>";
    
    $phpmail->Subject = $assunto;
    $phpmail->Body .= "<br />";
    $phpmail->Body .= "$message";
    $phpmail->Body .= "<br />";
    
    $send = $phpmail->Send();

    if($send){

?>

<body style=" margin-left: 0px;  margin-top: 0px;  margin-right: 0px;  margin-bottom: 0px; "   bgcolor="#FFFFFF" >

<table width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td bgcolor="#FF9900"><table width="100%" border="0" cellpadding="0" cellspacing="1">
      <tr>
        <td bgcolor="#FDECDB"><img src="../graphics/px1.gif" width="15" height="14"><b><font color="#FF6600" face="Arial">Portal da Troca </font></b></td>
      </tr>
    </table></td>
  </tr>
</table>

<?

		echo "<body bgcolor='#FFFFFF'><br><br><br><br>";
		echo "<center><b>PARABÉNS sua compra foi realizada com sucesso!</b><br></center>";
		echo "<center><b>Você recebera um e-mail com os procedimentos</b><br></center>";
		echo "<center><b>Dados do vendedor e-mail e telefone para contato</b></center>";
		echo "<center><b>O Compraai.com.br agradece por usar o Portal</b></center>";
		echo "<center><b>Duvidas acesse o <a href=../fale/fale.php>Fale com o Portal</a></b></center>";
		echo "<center><b>Obrigado</b></center><br><br><br></body>";
		echo "<center><a href='descricao.php?id_prod=". encode5t($id_prod) ."'><img src='../graphics/retorno.png' border='0'/></a></center><br><br>";

		$faz_x1 = 1;
?>
</body>
</html>
<?    	
    }else{


?>

<body style=" margin-left: 0px;  margin-top: 0px;  margin-right: 0px;  margin-bottom: 0px; "   bgcolor="#FFFFFF" >

<table width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td bgcolor="#FF9900"><table width="100%" border="0" cellpadding="0" cellspacing="1">
      <tr>
        <td bgcolor="#FDECDB"><img src="../graphics/px1.gif" width="15" height="14"><b><font color="#FF6600" face="Arial">Portal da Troca </font></b></td>
      </tr>
    </table></td>
  </tr>
</table>

<?
    	
		echo "<body bgcolor='#FFFFFF'><br><br>";
		echo "<center><font face=Tahoma><font size=4 color='#FF0000'><b>A T E N Ç Ã O</b></center>";
		echo "<center><b>Sua Compra não podera ser EFETUADA !!!</b><br></center>";
		echo "<center><b>Você não esta conectado a Internet ou ocorreu</b><br></center>";
		echo "<center><b>um erro de Servidor Reconecte, e tente de novo.</b></center><br>";
        echo "<center><a href='descricao.php?id_prod=". encode5t($id_prod) ."'><img src='../graphics/retorno.png' border='0'/></a></center><br><br><br><br>";

?>
</body>
</html>
<?
    }

}

}
include('rodape.php');
?>
