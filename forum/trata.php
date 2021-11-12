<?
/*
 ----------------------------------------------------------
 Desenvolvido por...: Edson de Araujo
 Finalidade.........: Incluir Resposta Forum
 Criado em Data.....: 02/08/2009
 Ultima Atualização : 02/08/2009 

 DEUS SEJA LOUVADO
 ----------------------------------------------------------
*/

include "../conexao.php";

// Resgata a Sessao
session_start();
$ser_name3_c = $_SESSION["log_name_c"];

if ($ser_name3_c == "VISITANTE"){
	
	require("forum.php");
	exit;
}
if (empty($ser_name3_c)){
	
	require("forum.php");
	exit;
}


$saida=0;
$erro="Erro(s):";
if($titulo == ""){
   $saida++;
   $erro.="Digite o titulo da mensagem.";
}
if($nome == ""){
   $saida++;
   $erro.="Digite o seu nome.";
}
if($email == ""){
   $saida++;
   $erro.="Digite o seu e-mail.";
}

if($saida == 0){
   $conn = mysql_connect($host,$user,$pass);
   mysql_select_db($db);

   $consulta = "SELECT COUNT(*) as total FROM msg WHERE pai=\"0\"";
   $quantidade = mysql_query($consulta, $conn);
   $total = mysql_result($quantidade, 0, "total"); //Recebe o numeros de topicos no forum
   $total++;
   

	$consulta0  = "SELECT * FROM msg ORDER BY codigo DESC";
	$resultado0 = @mysql_query($consulta0);
	$row0       = @mysql_fetch_array($resultado0);
	$cod_nov    = @$row0["codigo"];

    $cod_nov_web = $cod_nov + 1;    
   
   /*
   Se o _$POST[´topico´] tem um valor nulo ,cria um novo topico.
   Senão adiciona mais uma mensagem ao topico.
   */
   if($topico == ""){
      $topico=$total;
   }//Fim if
   $data=date("d/m/Y  H:i:s");
   $time=date("YmdHis");
   if ($icone) $valicon=$icone;
   else $valicon=0;
   $str="INSERT INTO `msg` (`autor`, `email`, `titulo`, `mensagem`, `data`, `pai`, `topico`, `time`, `icone`, `foto_peq1`, `ativa`, `resposta` ) VALUES ('$nome', '$email', '$titulo', '$elm1', '$data', '$pai', '$topico', '$time', '$valicon', '$foto_pda', '0', '0')";
   $update="UPDATE msg SET time='$time', resposta=resposta+1 WHERE topico ='$topico' AND pai='0'";
   mysql_query($update,$conn);
   if(!mysql_query($str,$conn)){
      echo mysql_error();
   }//Fim if
   mysql_close($conn);
   // envia email 


// '

$assunto   = "Resposta sobre Topico ".$titulo;
    
require_once('phpmailer/class.phpmailer.php');

$erros = "";

$meu_email = 'edsonaraujo1@hotmail.com';

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
				    <td width='489' bgcolor='#FF8401'><div align='center' class='style1'>Uma Duvida foi Respondida no Forum                  </div></td>
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
				      <p><strong><a href='http://www.isysmp.com.br/site/forum/aceitar.php?pai=$pai&res=2&titulo=$titulo&topico=$topico&nome=$nome&ativa=$cod_nov_web'><img src='http://www.isysmp.com.br/site/graphics/aceitar.png' width='148' height='29' border='0'></a><img src='http://www.isysmp.com.br/site/graphics/px1.gif' width='10' height='1'><a href='http://www.isysmp.com.br/site/forum/rejeitar.php?pai=$pai&res=2&titulo=$titulo&topico=$topico&nome=$nome&ativa=1'></a>
					             <a href='http://www.isysmp.com.br/site/forum/rejeitar.php?pai=$pai&res=2&titulo=$titulo&topico=$topico&nome=$nome&ativa=$cod_nov_web'><img src='http://www.isysmp.com.br/site/graphics/rejeitar.png' width='148' height='29' border='0'></a><br>
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
    
    $phpmail->Subject = "Liberar Resposta Forum";
 //   $phpmail->Body .= "Nome: ".$_POST["nome"]."<br />";
 //   $phpmail->Body .= "E-mail: ".$_POST["vt_mail"]."<br />";
    $phpmail->Body .= "<br />";
//    $phpmail->Body .= "$assunto";
    $phpmail->Body .= "$message";
    $phpmail->Body .= "<br />";
    
    $send = $phpmail->Send();

    if($send){

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
		
		<body style=" margin-left: 0px;  margin-top: 0px;  margin-right: 0px;  margin-bottom: 0px; "   bgcolor="#FFFFFF" >
		
		<table width="100%" height="52" border="0">
		            <tr>
		              <td width="100%" background="../graphics/forum_baner.png"><span class="style19">&nbsp;&nbsp;iSysMP Forum</span></td>
		            </tr>
		</table>
		
		<?    	
		    	echo "<br><br>";
				echo "<center><b>Seu Topico/Resposta foi enviada com sucesso!</b><br></center>";
				echo "<center><b>Porem a sua resposta será analisada</b><br></center>";
				echo "<center><b>pelo moderador, e se estiver conforme</b><br></center>";
				echo "<center><b>as normas e ética do <a href='regras_forum.php'>regulamento</a>,</b><br></center>";
				echo "<center><b>será publicada no Forum !!!</b><br></center>";
				echo "<center><b>Obrigado por usar o Forum iSysmp.com.</b><br></br></center>";
		        echo "<center><a href='topicos.php'><img src='../graphics/retorno.png' border='0' /></a></center>";
    
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
		
		<body style=" margin-left: 0px;  margin-top: 0px;  margin-right: 0px;  margin-bottom: 0px; "   bgcolor="#FFFFFF" >
		
		<table width="100%" height="52" border="0">
		            <tr>
		              <td width="100%" background="../graphics/forum_baner.png"><span class="style19">&nbsp;&nbsp;iSysMP Forum</span></td>
		            </tr>
		</table>
		
		<?    	
		    	echo "<br><br>";
				echo "<center><b>Sua mensagem não foi enviada !! POSSIVÉL causa!</b><br></center>";
				echo "<center><b>Você não esta conectado a Internet ou ocorreu</b><br></center>";
				echo "<center><b>um erro de Servidor SMTP, tente de novo mais tarde.</b></center>";
		        echo "<center><a href='topicos.php'><img src='../graphics/retorno.png' border='0' /></a></center>";
        	
        	
        }		
}

}   // fim do envia email
?>