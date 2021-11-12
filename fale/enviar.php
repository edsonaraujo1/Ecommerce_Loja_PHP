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



?>


<html >
<head>
<title><?=$Titulo;?></title>
<link rel="shortcut icon" href="../graphics/favicon.ico"/>

<style type="text/css">
<!--

-->
</style>


<?
$nome      = retirar_carac($_POST["nome1"]);
$site      = retirar_carac($_POST["site"]);
$email     = retirar_carac($_POST["email"]);
$fone      = retirar_carac($_POST["fone"]);
$assunto   = retirar_carac($_POST["assunto"]);
$mensagem  = retirar_carac($_POST["mensagem"]);
$data      = date("d/m/Y  H:i:s");                             //função para pegar a data de envio do e-mail
$ip        = $_SERVER['REMOTE_ADDR'];                          //função para pegar o ip do usuário
$navegador = retirar_carac($browser);                          //função para pegar o navegador do visitante
$hora      = date("YmdHis");

//echo $nome."<br>";
//echo $site."<br>";
//echo $email."<br>";
//echo $fone."<br>";
//echo $assunto."<br>";
//echo $mensagem."<br>";
//echo $data."<br>";
//echo $ip."<br>";                          //função para pegar o ip do usuário
//echo $navegador."<br>";                   //função para pegar o navegador do visitante
//echo $hora."<br>";
//echo $user_pag;

// Abre Conexão com o MySql
include("../conexao.php");
// Chama o Banco de Dados

$link = @mysql_connect($host,$user,$pass);

@mysql_select_db($db);

// Grava as informacoes na tabela

$consulta = "INSERT INTO fale (nome, email, assunto, mensagem, data, hora, user, ip, navegador)           
					                VALUES
					          ('$nome', '$email', '$assunto', '$mensagem', '$data', '$hora', '$user_pag', '$ip', '$navegador')";

@mysql_query($consulta, $link) or

            die("echo '<script>alert('Erro: Falha ao Enviar a Menssagem !!!');</script>'	
				 echo '<script>history.go(-1);</script>'");	


// Envia email de Confitmacao Fale Conosco

$nome      = retirar_carac($_POST["nome"]);
$mail_des  = retirar_carac($_POST["email"]);
$assunto   = retirar_carac($_POST["assunto"]);
$mensagem  = retirar_carac($_POST["mensagem"]);
    
require_once('phpmailer/class.phpmailer.php');

$erros = "";

if(empty($HTTP_POST_VARS["email"]) ){
    $erros .= "O E-mail deve ser preenchido.<br />";
}else{
    $email = $HTTP_POST_VARS["email"];
    eregi("([\._0-9A-Za-z-]+)@([0-9A-Za-z-]+)(\.[0-9A-Za-z\.]+)",$email,$match);
    if(!isset($match)){
        $erros .= "O e-mail informado é inválido.<br />";
    }
}

if( empty($erros) ){

    $phpmail = new PHPMailer();


    $phpmail->IsSMTP();                         // Envia por SMTP
    $phpmail->Mailer   = "smtp";
	$phpmail->Host     = "174.122.66.98";       // SMTP servers
	$phpmail->SMTPAuth = true;                  // Caso o servidor SMTP precise de autenticação
	$phpmail->Port     = 25;
	$phpmail->Username = "compraai@compraai.com.br";   // SMTP username
	$phpmail->Password = "tty%909$";            // SMTP password

    $phpmail->IsHTML(true);
    $phpmail->From     = "compraai@compraai.com.br";   // Retorno CC
    $phpmail->FromName = "Compraai.com.br";

    $phpmail->AddAddress($_POST["email"]);       // Destino
    $phpmail->AddAddress("compraai@compraai.com.br"); // Trocar CCo
    

    $message = "<html>
	            <head>
				<style type='text/css'>
				<!--
				.style1 {color: #FFFFFF;
					     font-weight: bold;
				}
				-->
                </style>
	            </head>
				<body bgcolor='#FFFFFF' >
                
				<table width='376' border='0' align='center' cellpadding='0' cellspacing='0'>
				  <tr>
				    <td>&nbsp;</td>
				    <td width='356' align='center' bgcolor='#FF8401'><table width='200' border='0' cellpadding='0' cellspacing='0'>
                      <tr>
                        <td><div align='center'><img src='http://www.compraai.com.br/site/graphics/rosto_email.png' width='353' height='115' ></div></td>
                      </tr>
                      <tr>
                        <td><div align='center'><span class='style1'>* Compraai * www.Compraai.com.br </span></div></td>
                      </tr>
                    </table></tr>
				  <tr>
				    <td>&nbsp;</td>
				    <td bgcolor='#CCCCCC'><div align='center'>
				      <p align='center'><br>
				        <strong>Sua mensagem foi enviada com sucesso!<br>
                                Você recebera um e-mail com as informações<br>
                                digitadas, estaremos analisando e breve entraremos<br>
                                em contato. <b>OBRIGADO</b> por acesar o Compraai<br>
                                sua opnião e importate para nos.<br>
				          <br>
				          <br>
				        Obrigado.: Equipe Fale Conosco </strong></p>
				      <p><strong><br>
				          </strong></p>
				    </div></td>
				    <td>&nbsp;</td>
				  </tr>
				  <tr>
				    <td height='23'>&nbsp;</td>
				    <td bordercolor='#999999' bgcolor='#CCCCCC'><div align='left'>
				      <p><b>Seus dados</b><br>
					     Nome.:&nbsp;$nome<br>
				         Email:&nbsp;$mail_des<br><br>
				         <b>Mensagem.:</b>&nbsp;".  $_POST["assunto"] ."<br>". nl2br($_POST['mensagem']) ."<br><br><br>
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
    
    $phpmail->Subject = "Equipe Fale Conosco Compraai";
    $phpmail->Body .= "Nome: ".$_POST["nome"]."<br />";
    $phpmail->Body .= "E-mail: ".$_POST["email"]."<br />";
    $phpmail->Body .= "<br />";
    $phpmail->Body .= "Assunto: Fale Conosco Portal Compraai.com.br <br>";
    $phpmail->Body .= "$message";
    $phpmail->Body .= "<br />";
    
    $send = $phpmail->Send();

    if($send){

?>
<table width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr><td bgcolor="#FF9900"><table width="100%" border="0" cellpadding="0" cellspacing="1">
      <tr>
        <td bgcolor="#FDECDB"><img src="../graphics/px1.gif" width="15" height="14"/>
		<b><font color="#FF6600" face="Arial">Fale Conosco</font></b></td>
      </tr></table></td>
  </tr>
</table>

<?    	
    	echo "<body bgcolor='#FFFFFF' style='margin-left: 0px;  margin-top: 0px;  margin-right: 0px;  margin-bottom: 0px;'><br><br><br><br>";
		echo "<center><b>Sua mensagem foi enviada com sucesso!</b><br></center>";
		echo "<center><b>Você recebera um e-mail com as informações</b><br></center>";
		echo "<center><b>digitadas, estaremos analisando e breve entraremos</b></center>";
		echo "<center><b>em contato. OBRIGADO por acesar o Compraai</b></center>";
		echo "<center><b>sua opnião e importate para nos.</b></center><br><br>";
        echo "<center><a href='../principal.php'><img src='../graphics/retorno.png' border='0' /></a></center><br><br>";
		
		$faz_x1 = 1;

    	
    }else{
?>
<table width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr><td bgcolor="#FF9900"><table width="100%" border="0" cellpadding="0" cellspacing="1">
      <tr>
        <td bgcolor="#FDECDB"><img src="../graphics/px1.gif" width="15" height="14"/>
		<b><font color="#FF6600" face="Arial">Fale Conosco</font></b></td>
      </tr></table></td>
  </tr>
</table>

<?    	
    	echo "<body bgcolor='#FFFFFF' style='margin-left: 0px;  margin-top: 0px;  margin-right: 0px;  margin-bottom: 0px;'><br><br><br><br>";
		echo "<center><b>Sua mensagem não foi enviada !! POSSIVÉL causa!</b><br></center>";
		echo "<center><b>Você não esta conectado a Internet ou ocorreu</b><br></center>";
		echo "<center><b>um erro de Servidor SMTP, tente de novo mais tarde.</b></center><br><br>";
        echo "<center><a href='../principal.php'><img src='../graphics/retorno.png' border='0' /></a></center><br><br>";
		

    }

}else{
    echo $erros;
}
?>

</html>
</body>
<?

include('rodape.php');
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
$var = str_replace("\\",            "",$var);

return($var);
}

?>
