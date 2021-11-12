<?
/*
 -----------------------------------------
 Desenvolvido por...: Edson de Araujo
 Finalidade.........: Incluir no Cadastro Usuario
 Criado em Data.....: 07/12/2007
 Ultima Atualização : 13/07/2009 

 DEUS SEJA LOUVADO
 -----------------------------------------
*/

include('aguarde.php');

include('titulo.php');


$Edit1        = trim($_POST['Edit1']);
$Edit2        = trim($_POST['Edit2']);
$Edit3        = $_POST['Edit3'];
$Edit4        = $_POST['Edit4'];
$Edit5        = $_POST['Edit5'];
$Edit6        = $_POST['Edit6'];
$Edit7        = trim($_POST['Edit7']);
$Edit8        = $_POST['Edit8'];
$Edit9        = $_POST['Edit9'];
$Edit10       = $_POST['Edit10'];
$Edit11       = $_POST['Edit11'];
$Edit12       = $_POST['Edit12'];
$Edit13       = $_POST['Edit13'];
$Edit14       = $_POST['Edit14'];
$Edit15       = $_POST['Edit15'];
$Edit16       = $_POST['Edit16'];
$Edit17       = $_POST['Edit17'];
$Edit18       = $_POST['Edit18'];
$Edit19       = $_POST['Edit19'];
$Edit20       = $_POST['Edit20'];
$Edit21       = $_POST['Edit21'];
$Edit22       = $_POST['Edit22'];
$Edit24       = $_POST['Edit24'];
$Edit25       = $_POST['Edit25'];

/*
echo "Nome =".$Edit1."<br>";
echo "Sobrenome =".$Edit2."<br>";
echo "dia =".$Edit3."<br>";
echo "mes =".$Edit4."<br>";
echo "ano =".$Edit5."<br>";
echo "sexo =".$Edit6."<br>";
echo "logim =".$Edit7."<br>";
echo "senha =".$Edit8."<br>";
echo "senha 2 =".$Edit9."<br>";
echo "e-mail =".$Edit10."<br>";
echo "e-mail 2 =".$Edit11."<br>";
echo "plavra =".$Edit12."<br>";
echo "rg =".$Edit13."<br>";
echo "cpf =".$Edit14."<br>";
echo "rua =".$Edit15."<br>";
echo "endereco =".$Edit16."<br>";
echo "bairro =".$Edit17."<br>";
echo "cidade =".$Edit18."<br>";
echo "cep =".$Edit19."<br>";
echo "fixo =".$Edit20."<br>";
echo "cel =".$Edit21."<br>";
echo "url =".$Edit22."<br>";
echo "estado =".$Edit24."<br>";
echo "numero =".$Edit25."<br>";
*/
//break;

// Abre Conexão com o MySql
include("../conexao.php");
// Chama o Banco de Dados

$link = @mysql_connect($host,$user,$pass)

    or die( require("../login.php"));

@mysql_select_db($db);

// Abrir tabela tt_ser_01

// Verifica se o login ja existe
$consulta  = "SELECT * FROM tt_ser_01 WHERE `login` = '$Edit7'";

$resultado = @mysql_query($consulta);

$row = @mysql_fetch_array($resultado);

$id0       = @$row["id"];

if (!empty($id0)){

	
   echo "<script>alert('Erro: Login escolhido já existe !!!');</script>";	
   echo "<script>history.go(-1);</script>";
	
}else{
	
		$texto_cpf = $Edit14;
			
		$eliminar1 = str_replace("-"," ",$texto_cpf);
		$eliminar2 = str_replace("."," ",$eliminar1);
		$valor_cp = str_replace(" ","",$eliminar2);

	
		// Verifica se o Nome e Sobrenos ja existe
		$consulta1  = "SELECT * FROM tt_ser_01 WHERE cpf = '$valor_cp'";
		
		$resultado1 = @mysql_query($consulta1);
		
		$row1 = @mysql_fetch_array($resultado1);
		
		$id1       = @$row1["id"];
	    
		if (!empty($id1)){
			
		   echo "<script>alert('Erro: C.P.F. já cadastrado !!!');</script>";	
		   echo "<script>history.go(-1);</script>";
			
		}else{


				// Verifica se o e-Nail ja esta cadastrado
				$consulta2  = "SELECT * FROM tt_ser_01 WHERE e_mail = '$Edit11'";
				
				$resultado2 = @mysql_query($consulta2);
				
				$row2 = @mysql_fetch_array($resultado2);
				
				$id2       = @$row2["id"];
	
				if (!empty($id2)){
					
				   echo "<script>alert('Erro: e-mail já cadastrado para outro usuario !!!');</script>";	
				   echo "<script>history.go(-1);</script>";
					
				}else{

                     // Caso contrario entao cadaste
                     
					$consulta3  = "SELECT * FROM tt_ser_01 ORDER BY codigo DESC LIMIT 0,1";
					
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
                    $aces_st   = 0;

					$consulta4 = "INSERT INTO tt_ser_01 (codigo,             
														 nome,      		
					                                     sobrenome,
														 nasc_dia,
														 nasc_mes,
														 nasc_ano,
														 sexo,
														 e_mail,
														 login,
														 senha,
														 data,
														 hora,
														 permissao,
														 rg,
														 cpf,
														 frase,
														 rua,
														 endereco,
														 numero,
														 bairro,
														 estado,
														 cep,
														 fone_fix,
														 fone_cel,
														 cidade,
														 acess_site,
														 url)           
					                VALUES
					                                  (  '$Novo_cod',
														 '$Edit1',
														 '$Edit2',
														 '$Edit3', 
														 '$Edit4',
														 '$Edit5',
														 '$Edit6',
														 '$Edit10',
														 '$Edit7',
														 '$Edit8',
														 '$date1',
														 '$hora',
														 '$per_1',
														 '$Edit13',
														 '$valor_cp',
														 '$Edit12',
														 '$Edit15',
														 '$Edit16',
														 '$Edit17',
														 '$Edit25',
														 '$Edit24',
														 '$Edit19',
														 '$Edit20',
														 '$Edit21',
														 '$Edit18',
														 '$aces_st',
														 '$Edit22')";

					@mysql_query($consulta4, $link) or

                                  die("echo '<script>alert('Erro: Falha incluindo !!!');</script>'	
				                       echo '<script>history.go(-1);</script>'");	
									   
									   
                     }	
              }
              
}

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
$var = ereg_replace("[?*#'´`!$%¨]"," ",$var);
$var = str_replace("Ç",            "C",$var);
$var = str_replace("ç",            "c",$var);

return($var);
}


$consulta14  = "SELECT * FROM tt_ser_01 WHERE codigo = '$Novo_cod'";
					
$resultado14 = @mysql_query($consulta14);
					
$row14 = @mysql_fetch_array($resultado14);
					
$id_prod    = @$row14["id"];
$id_log     = @$row14["nome"]." ".@$row14["sobrenome"];

if ($browser == " MS Internet Explorer"){
?>

<style>
body {
	   SCROLLBAR-ARROW-COLOR: blue;
	   SCROLLBAR-BASE-COLOR: #FFC082
	   
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
<body style=" margin-left: 0px;  margin-top: 0px;  margin-right: 0px;  margin-bottom: 0px; "   bgcolor="#FFFFFF">
<form style="margin-bottom: 0" id="Unit1" name="Unit1" method="post"  action="/cad_user_02_800_600.php">
<table  width="100%"   style="height:396px"  border="0" cellpadding="0" cellspacing="0"  bgcolor="#FFFFFF"  >
<tr>
<td valign="top">


<table width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td bgcolor="#FF9900"><table width="100%" border="0" cellpadding="0" cellspacing="1">
      <tr>
        <td bgcolor="#FDECDB"><img src="../graphics/px1.gif" width="15" height="14"><b><font color="#FF6600" face="Arial">Cadastro de Usuario <font size="2">(Compraai)</font> </font></b> </td>
      </tr>
    </table></td>
  </tr>
</table>

<br />

<center><img id="Image2" src="../graphics/ok.gif"  width="72"  height="98"  border="0"       /></center>
<br />
<center><STRONG>Parabéns - Seu cadastrados foi efetuado com Sucesso !!!</center><br />
<center>Clique&nbsp; </STRONG>


<FONT color=#0000ff><a href="pre_upload.php?cod_prod=<?=$id_prod;?>"><b><U>AQUI</U></b></a>&nbsp; </FONT>
<FONT color=#000000><STRONG>Para incluir sua fotos no Cadastro</STRONG></FONT></center><br />
<center><STRONG>Ou clique&nbsp; <STRONG><FONT color=#0000ff>
<a href="../principal.php"><b><U>AQUI</U></b></a>&nbsp; </FONT>
<FONT color=#000000><STRONG>Para&nbsp;Retornoar</STRONG></FONT></center><br />


<br />
<center><a href="../principal.php"><img src="../graphics/retorno.png" width="30" height="31" border="0"></a></center>

</td></tr></table>
</form></body>
</html>

<?

//*****Envia e-mail de Confirmação de Cadastro*

    $nick     = trim($HTTP_POST_VARS["Edit7"]);
    $mail_des = trim($HTTP_POST_VARS["Edit11"]);
    $nome     = trim($HTTP_POST_VARS["Edit1"]." ".$HTTP_POST_VARS["Edit2"]);
    $cpf      = trim($HTTP_POST_VARS["Edit12"]);

    
    
require_once('phpmailer/class.phpmailer.php');

$erros = "";

if( empty($erros) ){

    $phpmail = new PHPMailer();

    $phpmail->IsSMTP();                         // Envia por SMTP
    $phpmail->Mailer   = "smtp";
	$phpmail->Host     = "74.55.238.114";       // SMTP servers
	$phpmail->SMTPAuth = true;                  // Caso o servidor SMTP precise de autenticação
	$phpmail->Port     = 25;
	$phpmail->Username = "isysmp@isysmp.com";   // SMTP username
	$phpmail->Password = "tty%909$";            // SMTP password

    $phpmail->IsHTML(true);
    $phpmail->From     = "isysmp@isysmp.com";   // Retorno CC
    $phpmail->FromName = "Portal iSysMp.com";

    $phpmail->AddAddress($_POST["Edit11"]);
    $phpmail->AddAddress("isysmp@isysmp.com");
    
    
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
				        <strong>Parab&eacute;ns seu Cadastro foi realizada com sucesso!<br>
				          Agora voc&ecirc; ja pode usufruir de mais uma<br>
				          alternativa para Vender, Comprar e Trocar,<br>
				          Saiba que para esse Portal evoluir isso so ser&aacute; <br>
				          Possivel com sua Ajuda...<br>
				          De sua opni&atilde;o e sugest&atilde;o.<br>
				          <br>
				          <br>
				        Obrigado.: WebMaster </strong></p>
				      <p><strong><br>
				          </strong></p>
				    </div></td>
				    <td>&nbsp;</td>
				  </tr>
				  <tr>
				    <td height='23'>&nbsp;</td>
				    <td bordercolor='#999999' bgcolor='#CCCCCC'><div align='left'>
				      <p><b>Seus dados</b><br>
					     Login.:&nbsp;$nick<br>
				         Nome:&nbsp;$nome<br>
				         Palavra secreta.:&nbsp;$cpf<br><br><br>
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

    
    
    $phpmail->Subject = "Confirmação Cadastro Portal iSysMP.com";
 //   $phpmail->Body .= "Nome: ".trim($_POST["Edit1"]." ".$_POST["Edit2"])."<br />";
 //   $phpmail->Body .= "E-mail: ".$_POST["Edit11"]."<br />";
 //   $phpmail->Body .= "CPF: ".$_POST['Edit14']."<br />";
    $phpmail->Body .= "Assunto:  Confirmação de Cadastro <br />";
    $phpmail->Body .= "$message";
    $phpmail->Body .= "Mensagem: ".nl2br($_POST['mensagem'])."<br />";
    
    $send = $phpmail->Send();

    if($send){
    	
//    	echo "<br><br><br><br>";
//		echo "<center><b>Parabéns sua compra foi realizada com sucesso!</b><br></center>";
//		echo "<center><b>Você recebera um e-mail com os procedimentos</b><br></center>";
//		echo "<center><b>Caso nao receba o e-mail, entre em contato</b></center>";
//		echo "<center><b>com o vendedor ou com o Portal da Troca</b></center>";
//		echo "<center><b>pelo telefone ou acesse <a href=faleconosco.php>Fale com o Portal</a></b></center>";
//		echo "<center><b>Obrigado</b></center>";
		$faz_x1 = 1;

    	
    }else{
       //echo "Não foi possível enviar a mensagem. Erro: " .$phpmail->ErrorInfo;
    }

}else{
    echo $erros;
}

//*****Fim da Comfirmacao*********************		

include('rodape.php');							   				
?>