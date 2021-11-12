<?php

/**
 * @author holodek
 * @copyright 2010
 */


$assunto   = "Resposta sobre Topico ".$titulo;
    
require_once('phpmailer/class.phpmailer.php');

$erros = "";

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
							
	$phpmail->AddAddress($_POST["email_per"]);           // Destino
	//    $phpmail->AddAddress("isysmp@isysmp.com"); // Trocar CCo
    

    $message = "<html>
	            <head>
	            <style>
	            
	            .style1 {
                    	color: #FFFFFF;
	                    font-weight: bold;
                 }
                </style>
	            
	            
				</head>
				<body>

				<table width='513' border='0' align='center' cellpadding='0' cellspacing='0'>
				  <tr>
				    <td width='13'>&nbsp;</td>
				    <td width='489' bgcolor='#FF8401'><div align='center' class='style1'>Sua Duvida foi Respondida                    </div></td>
				    <td width='11'>&nbsp;</td>
				  </tr>
				  <tr>
				    <td>&nbsp;</td>
				    <td bgcolor='#CCCCCC'><div align='center'>
				      <p align='center'><br>
				        </b>Respondida por.:&nbsp;&nbsp; <strong><b>$nome</b> <br>
				                </strong>em&nbsp;&nbsp;<strong> $data
				          <br><br>
				          </strong>
				          
				          <center><b>$titulo</b></center>
				          			          
				          
				          <br><br>
				          ". nl2br($_POST['elm1']) ."
			            </strong></p>
				      <p><strong><br>
				          </strong></p>
				    </div></td>
				    <td>&nbsp;</td>
				  </tr>
				  <tr>
				    <td height='23'>&nbsp;</td>
				    <td bgcolor='#FF8401'><div align='center'><span>Created by iSysMp todos direitos reservados 2009</span>                    </div></td>
				    <td>&nbsp;</td>
				  </tr>
				</table>				</body>
				</html>";
    
    $phpmail->Subject = "Sua Questão foi Respondida";
 //   $phpmail->Body .= "Nome: ".$_POST["nome"]."<br />";
 //   $phpmail->Body .= "E-mail: ".$_POST["vt_mail"]."<br />";
    $phpmail->Body .= "<br />";
//    $phpmail->Body .= "$assunto";
    $phpmail->Body .= "$message";
    $phpmail->Body .= "<br />";
    
    $send = $phpmail->Send();



    if($send){


    	echo "<body bgcolor='#FFFFFF'><br><br><br><br><br><br><br><br><br>";
		echo "<center><b>Sua Resposta foi enviada com sucesso!</b><br></center>";
		echo "<center><b>Porem a sua resposta será analisada</b><br></center>";
		echo "<center><b>pelo moderador, e se estiver conforme</b><br></center>";
		echo "<center><b>as normas e ética do <a href='regras_fórum.php'>regulamento</a>,</b><br></center>";
		echo "<center><b>será publicada no Forum !!!</b><br></center>";
		echo "<center><b>Obrigado por usar o Forum iSysmp.com.</b><br></center>";
		$faz_x1 = 1;

    	
    }else{
?>    	

<head>
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

</style>
</head>

<table width="100%" height="52" border="0">
            <tr>
              <td width="100%" background="graphics/forum.png"><span class="style19">&nbsp;&nbsp;iSysMP Forum</span></td>
            </tr>
          </table>

<?    	
    	echo "<body bgcolor='#FFFFFF'><br><br><br><br>";
		echo "<center><b>Sua mensagem não foi enviada !! POSSIVÉL causa!</b><br></center>";
		echo "<center><b>Você não esta conectado a Internet ou ocorreu</b><br></center>";
		echo "<center><b>um erro de Servidor SMTP, tente de novo mais tarde.</b></center>";
    	
    }


}
   
   // fim do envia email
?>
<html><head>
<meta HTTP-EQUIV="Refresh" CONTENT="0;URL=topicos.php?pagina=0&modo=2">
</head>
</html>
<?
}else{
?>
<html><head>
</head>
<script>alert("<?=$erro;?>")</script>
<script>history.go(-1)</script>
</html>
<?
}
?>


?>