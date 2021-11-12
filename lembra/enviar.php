<?
/*
 -----------------------------------------
 Desenvolvido por...: Edson de Araujo
 Desenvolvido por...: Jean Carlos de Araujo
 
 Finalidade.........: layout do Sistema
 Criado em Data.....: 06/07/2009
 Ultima Atualização : 07/07/2009 

 DEUS SEJA LOUVADO
 -----------------------------------------
*/
include('aguarde.php');

include('titulo.php');

// Resgata Sessao
@session_start();
$ser_name3_c    = escapestrings(strtoupper($_SESSION["log_name_c"]));

if (!empty($ser_name3_c)){
	$user_pag = $ser_name3_c;
}else{
	$user_pag = "VISITANTE";
}


session_start();  // Start the session where the code will be stored.

  include("securimage.php");
  $img = new Securimage();
  $valid = $img->check($_POST['code']);

  if($valid == true) {
  	 // Senha Correta
  	
    //echo "<center>Senha correta<br />Click <a href=\"{$_SERVER['PHP_SELF']}\">here</a> to go back.</center>";
    
    
  } else {
  	// Senha Incorreta

		?>
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

<table width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr><td bgcolor="#FF9900"><table width="100%" border="0" cellpadding="0" cellspacing="1">
      <tr>
        <td bgcolor="#FDECDB"><img src="../graphics/px1.gif" width="15" height="14"/>
		<b><font color="#FF6600" face="Arial">Recuperação de Senha</font></b></td>
      </tr></table></td>
  </tr>
</table>
		
		<?

    	echo "<body bgcolor='#FFFFFF'><br><br><br><br>";
		echo "<center><b>Codigo Digitado esta Incorreto</b><br></center>";
		echo "<center><b>Digite o codigo conforme</b><br></center>";
		echo "<center><b>a imagem mostrada !!!</b><br></center><br>";
        echo "<center><a href='javascript:history.back(1)'><img src='../graphics/retorno.png' border='0' /></a></center><br><br><br>";
  	
//    echo "<center>Senha Invalida  <a href=\"javascript:history.go(-1)\">Go back</a> to try again.</center>";

include('rodape.php');

    exit;
  }


include_once("../conexao.php");

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

$email      = retirar_carac($_POST["mail_sec"]);
$palavra    = retirar_carac($_POST["palavra_sec"]);
$data      = date("d/m/Y  H:i:s");                             //função para pegar a data de envio do e-mail
$ip        = $_SERVER['REMOTE_ADDR'];                          //função para pegar o ip do usuário
$navegador = retirar_carac($browser);                          //função para pegar o navegador do visitante
$hora      = date("YmdHis");


// Abre Conexão com o MySql
include("../conexao.php");

// Chama o Banco de Dados
$link = @mysql_connect($host,$user,$pass)

    or die( require("../login.php"));

@mysql_select_db($db);

// Abrir tabela Dados
$consulta  = "SELECT * FROM tt_ser_01 WHERE `e_mail` = '$email'"; // AND frase = '$palavra'";

$resultado = @mysql_query($consulta);

$row = @mysql_fetch_array($resultado);

$id0       = @$row["id"];
$Edit1     = @$row["nome"];      		
$Edit2     = @$row["sobrenome"];
$Edit7     = @$row["login"];
$Edit8     = @$row["senha"];
$Edit10    = @$row["e_mail"];
$Edit12    = @$row["frase"];

if (!empty($id0)){


// Envia email de Recuperacao de Senha

$nome      = retirar_carac($_POST["nome"]);
$mail_des  = retirar_carac($_POST["mail_sec"]);
$assunto   = retirar_carac($_POST["assunto"]);
$mensagem  = retirar_carac($_POST["mensagem"]);
    
require_once('phpmailer/class.phpmailer.php');

$erros = "";

if(empty($HTTP_POST_VARS["mail_sec"]) ){
    $erros .= "O E-mail deve ser preenchido.<br />";
}else{
    $email = $HTTP_POST_VARS["mail_sec"];
    eregi("([\._0-9A-Za-z-]+)@([0-9A-Za-z-]+)(\.[0-9A-Za-z\.]+)",$email,$match);
    if(!isset($match)){
        $erros .= "O e-mail informado é inválido.<br />";
    }
}

if(empty($HTTP_POST_VARS["palavra_sec"])){
//    $erros .= "Palavra Secreta deve ser preenchido.<br />";
}

if( empty($erros) ){

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
	$phpmail->FromName = "Portal Compraai";
							
	$phpmail->AddAddress($_POST["mail_sec"]);           // Destino
	$phpmail->AddAddress("compraai@compraai.com.br"); // Trocar CCo
    

    $message = "<html>
	            <head>
				<style type='text/css'>
				<!--
				.style1 { color: #FFFFFF;
					      font-weight: bold;
				}
				-->
                </style>
	            </head>
				<body>

                <table width='376' border='0' align='center' cellpadding='0' cellspacing='0'>
				  <tr>
				    <td width='10'>&nbsp;</td>
				    <td width='356' align='center' bgcolor='#FF8401'><table width='200' border='0' cellpadding='0' cellspacing='0'>
                      <tr>
                        <td><div align='center'><img src='http://www.compraai.com.br/site/graphics/rosto_email.png' width='353' height='115' ></div></td>
                      </tr>
                      <tr>
                        <td><div align='center'><span class='style1'>* Portal * www.Compraai.com.br </span></div></td>
                      </tr>
                    </table></tr>
				  <tr>
				    <td>&nbsp;</td>
				    <td bgcolor='#CCCCCC'><div align='center'>
				      <p align='center'><br>
				        <strong>Conforme sua solicita&ccedil;&atilde;o estamos lhe enviando<br> 
				        os seus dados para efetuar login em nosso<br> 
				        site agradecemos seu contato.<br> 
				        <b>OBRIGADO</b> por acesar o Compraai.<br>
				          <br>
				          <br>
				        Obrigado.: Administrador do Site</strong></p>
				      <p><strong><br>
				          </strong></p>
				    </div></td>
				    <td>&nbsp;</td>
				  </tr>
				  <tr>
				    <td height='23'>&nbsp;</td>
				    <td bordercolor='#999999' bgcolor='#CCCCCC'><div align='left'>
				      <p><b>Seus dados</b><br>
					     Nome.:&nbsp;$Edit1&nbsp;$Edit2<br>
				         Email:&nbsp;$mail_des<br>
				         Mensagem.: Recupera&ccedil;ao de Senha.<br>
				         <br>
			             <strong>Seu login</strong>:&nbsp;$Edit7<br>
			             <strong>Sua Senha</strong>:&nbsp;$Edit8<br>
			          <b>Palavra Secreta:</b>&nbsp;$Edit12<br>
                      <br>
	                  </p>
				      </div></td>
				    <td>&nbsp;</td>
				  </tr>
				  <tr>
				    <td height='23'>&nbsp;</td>
				    <td bgcolor='#FF8401'><div align='center'>Created by Compraai todos direitos reservados 2009                    </div></td>
				    <td>&nbsp;</td>
				  </tr>
				</table></body>
                </html>";
    
    $phpmail->Subject = "Administrador Portal Compraai";
    $phpmail->Body .= "Nome: ".$_POST["nome"]."<br />";
    $phpmail->Body .= "E-mail: ".$_POST["email"]."<br />";
    $phpmail->Body .= "<br />";
    $phpmail->Body .= "Recuperação de Senha Compraai  ".  $_POST["assunto"] ." <br />";
    $phpmail->Body .= "$message";
    $phpmail->Body .= "<br />";
    
    $send = $phpmail->Send();

    if($send){
?>
<table width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr><td bgcolor="#FF9900"><table width="100%" border="0" cellpadding="0" cellspacing="1">
      <tr>
        <td bgcolor="#FDECDB"><img src="../graphics/px1.gif" width="15" height="14"/>
		<b><font color="#FF6600" face="Arial">Recuperação de Senha</font></b></td>
      </tr></table></td>
  </tr>
</table>
<?
    	echo "<body bgcolor='#FFFFFF'><br><br><br><br>";
		echo "<center><b>Sua mensagem foi enviada com sucesso!</b><br></center>";
		echo "<center><b>Você recebera um e-mail com as informações</b><br></center>";
		echo "<center><b>solicitadas. OBRIGADO por acesar o Compraai</b></center><br><br>";
        echo "<center><a href='../principal.php'><img src='../graphics/retorno.png' border='0' /></a></center><br><br>";

		$faz_x1 = 1;

    	
    }else{

?>
<table width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr><td bgcolor="#FF9900"><table width="100%" border="0" cellpadding="0" cellspacing="1">
      <tr>
        <td bgcolor="#FDECDB"><img src="../graphics/px1.gif" width="15" height="14"/>
		<b><font color="#FF6600" face="Arial">Recuperação de Senha</font></b></td>
      </tr></table></td>
  </tr>
</table>
<?
    	
    	echo "<body bgcolor='#FFFFFF'><br><br><br><br>";
		echo "<center><b>Sua mensagem não foi enviada !! POSSIVÉL causa!</b><br></center>";
		echo "<center><b>Você não esta conectado a Internet ou ocorreu</b><br></center>";
		echo "<center><b>um erro de Servidor SMTP, tente de novo mais tarde.</b></center><br><br>";
        echo "<center><a href='../principal.php'><img src='../graphics/retorno.png' border='0' /></a></center><br><br>";

    }

}else{
    echo $erros;
}

}else{

?>
<table width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr><td bgcolor="#FF9900"><table width="100%" border="0" cellpadding="0" cellspacing="1">
      <tr>
        <td bgcolor="#FDECDB"><img src="../graphics/px1.gif" width="15" height="14"/>
		<b><font color="#FF6600" face="Arial">Recuperação de Senha</font></b></td>
      </tr></table></td>
  </tr>
</table>
<?
	
    	echo "<body bgcolor='#FFFFFF'><br><br><br>";
		echo "<center><b>Dados Informados são Incorretos</b><br></center>";
		echo "<center><b>Digite seu e-Mail</b><br></center>";
		echo "<center><b>conforme cadastrado !!!</b><br></center><br>";
        echo "<center><a href='javascript:history.back(1)'><img src='../graphics/retorno.png' border='0' /></a><br><br></center><br><br><br>";
	
}

//aqui envia o e-mail para você


/*
 --------------------------------
 Funcao para Retirar os caracter
 estranhos e acentos na hora de
 atualizar Table 
---------------------------------
*/

Function retirar_carac($var){

$var = ereg_replace("[ÁÀÂÃ]",      "A",$var);
$var = ereg_replace("[áàâãª]",     "a",$var);
$var = ereg_replace("[ÉÈÊ]",       "E",$var);
$var = ereg_replace("[éèê]",       "e",$var);
$var = ereg_replace("[ÓÒÔÕ]",      "O",$var);
$var = ereg_replace("[óòôõº]",     "o",$var);
$var = ereg_replace("[ÚÙÛ]",       "U",$var);
$var = ereg_replace("[úùû]",       "u",$var);
$var = ereg_replace("[íìî]",       "i",$var);
$var = ereg_replace("[ÍÌÎ]",       "I",$var);
$var = ereg_replace("[?*#'´`!$%¨]"," ",$var);
$var = str_replace("Ç",            "C",$var);
$var = str_replace("ç",            "c",$var);
$var = str_replace("\\",           " ",$var);

return($var);
}

include('rodape.php');

?>
