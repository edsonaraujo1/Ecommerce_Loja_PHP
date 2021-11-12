<?php

/**
 * @author holodek
 * @copyright 2010
 */
?>

<script language="javascript">

function fechar(){
	
	if(document.all){
		window.opener=window;
		window.close("#");
	}else{
		self.close();
	}
}

</script>
<?

include('../conexao.php');

// Chama o Banco de Dados
$link = @mysql_connect($host,$user,$pass);


//echo $host."<br>";
//echo $user."<br>";
//echo $pass."<br>";
//echo $db."<br><br>";

@mysql_select_db($db);

$data=date("d/m/Y  H:i:s");
$time=date("YmdHis");
$ati = 0;

//echo $pai."<br>";
//echo $res."<br>";
//echo $titulo."<br>";
//echo $topico."<br>";
//echo $nome."<br>";
//echo $ativa."<br>";

$titulo1 = trim($titulo);
$topico1 = trim($topico);


$consulta0  = "SELECT * FROM msg WHERE pai = '$pai' AND titulo = '$titulo1' AND topico ='$topico1' AND autor = '$nome' AND codigo = $ativa";
	
$resultado0 = @mysql_query($consulta0);

$row0 = @mysql_fetch_array($resultado0);

$codigo_banco     = @$row0["codigo"];
$autor_banco      = @$row0["autor"];
$data_banco       = @$row0["data"];
$email_banco      = @$row0["email"];
$emm_banco        = @$row0["mensagem"];
$titu_banco       = @$row0["titulo"];

//echo "do Banco <br>";
//echo $codigo_banco."<br>";
//echo $autor_banco."<br>";
//echo $data_banco."<br><br><br>";
//echo "valor do ati ".$ati."<br>";


// envia email

$assunto   = "Resposta sobre Topico ".$titulo;
    
require_once('phpmailer/class.phpmailer.php');

$erros = "";

$meu_email = $email_banco;

if( empty($erros) ){

    $phpmail = new PHPMailer();

	$phpmail->IsSMTP();                              // Envia por SMTP
	$phpmail->Mailer   = "smtp";
	$phpmail->Host     = "74.55.238.114";            // SMTP servers
	$phpmail->SMTPAuth = true;                       // Caso o servidor SMTP precise de autenticação
	$phpmail->Port     = 25;
	$phpmail->Username = "isysmp@isysmp.com";        // SMTP username
	$phpmail->Password = "tty%909$";                 // SMTP password
							
	$phpmail->IsHTML(true);
	$phpmail->From     = "isysmp@isysmp.com";        // Retorno CC
	$phpmail->FromName = "Portal iSysMp.com";
							
	$phpmail->AddAddress($meu_email);           // Destino
	//    $phpmail->AddAddress("isysmp@isysmp.com"); // Trocar CCo
    

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
				<body bgcolor='#FFFFFF'>
                
				<table width='376' border='0' align='center' cellpadding='0' cellspacing='0'>
				  <tr>
				    <td>&nbsp;</td>
				    <td width='356' align='center' bgcolor='#FF8401'><table width='200' border='0' cellpadding='0' cellspacing='0'>
                      <tr>
                        <td><div align='center'><img src='http://www.isysmp.com.br/site/graphics/isysmp.png' width='400' height='110' ></div></td>
                      </tr>
                      <tr>
                        <td><div align='center'><span class='style1'>* Portal * www.iSysmp.com.br </span></div></td>
                      </tr>
                    </table></tr>
				  <tr>
				    <td>&nbsp;</td>
				    <td bgcolor='#CCCCCC'><div align='center'>
				      <p align='center'><br>
				        <strong>Seu Topico/Resposta(comentario) n&atilde;o foi publicada<br>
                                pois estava fora das normas do Forum, <br>
                                Pedimos que reformule-o no Portal Forum,<br>
                                novamente, <b>OBRIGADO</b> por acesar o iSysMp.com<br>
                                para ler as normas do Forum entre em Forum - regras.<br>
				          <br>
				          <br>
				        Obrigado.: Moderador Forum iSysmp.com </strong></p>
				      <p><strong><br>
				          </strong></p>
				    </div></td>
				    <td>&nbsp;</td>
				  </tr>
				  <tr>
				    <td height='23'>&nbsp;</td>
				    <td bordercolor='#999999' bgcolor='#CCCCCC'><div align='left'>
				      <p><b>Seus dados</b><br>
					     Nome.:&nbsp;$autor_banco<br>
				         Email:&nbsp;$email_banco<br><br>
				         <b>Comentario.:</b>&nbsp;".  $titu_banco ."<br>
				         ". $emm_banco ."<br><br><br>
				  </p>
				    </div></td>
				    <td>&nbsp;</td>
				  </tr>
				  <tr>
				    <td height='23'>&nbsp;</td>
				    <td bgcolor='#FF8401'><div align='center'><span>Created by iSysMp todos direitos reservados 2009</span>                    </div></td>
				    <td>&nbsp;</td>
				  </tr>

				</table>
				</body>
                </html>";
    
    $phpmail->Subject = "Nao Liberado no Forum";
 //   $phpmail->Body .= "Nome: ".$_POST["nome"]."<br />";
 //   $phpmail->Body .= "E-mail: ".$_POST["vt_mail"]."<br />";
    $phpmail->Body .= "<br />";
//    $phpmail->Body .= "$assunto";
    $phpmail->Body .= "$message";
    $phpmail->Body .= "<br />";
    
    $send = $phpmail->Send();

    if($send){


		echo "<font size=8><b>Rejeitado !!!</b></font>";
		?>
		<script language="javascript">
		setTimeout("fechar()",55);
		</script>
		<?
		    
     }else{
        	
		echo "<font size=8><b>Erro de Servidor !!!</b></font>";
		?>
		<script language="javascript">
		setTimeout("fechar()",55);
		</script>
		<?
        	
        	
     }		
}

?>
<script language="javascript">
setTimeout("fechar()",55);
</script>