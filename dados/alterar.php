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

include_once("../config.php");

include('aguarde.php');

include('titulo.php');

@session_start();
$ser_name3_c    = escapestrings(strtoupper($_SESSION["log_name_c"]));
$acesso_2       = escapestrings($_SESSION['data_log_2']);


if ($ser_name3_c != strtoupper("Visitante")){

$id_w         = $id_dados;
$Edit1        = strtoupper(trim($_POST['Edit1']));
$Edit2        = strtoupper(trim($_POST['Edit2']));
$Edit3        = strtoupper($_POST['Edit3']);
$Edit4        = strtoupper($_POST['Edit4']);
$Edit5        = strtoupper($_POST['Edit5']);
$Edit6        = strtoupper($_POST['Edit6']);
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
$Edit24       = $_POST['Edit24'];
$Edit22       = $_POST['Edit22'];
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

// Função que valida o CPF
function verificaCPF($cpf)
{	// Verifiva se o número digitado contém todos os digitos
    $cpf = str_pad(ereg_replace('[^0-9]', '', $cpf), 11, '0', STR_PAD_LEFT);
	
	// Verifica se nenhuma das sequências abaixo foi digitada, caso seja, retorna falso
    if (strlen($cpf) != 11 || $cpf == '00000000000' || $cpf == '11111111111' || $cpf == '22222222222' || $cpf == '33333333333' || $cpf == '44444444444' || $cpf == '55555555555' || $cpf == '66666666666' || $cpf == '77777777777' || $cpf == '88888888888' || $cpf == '99999999999')
	{
	return false;
	// echo '<center><font color="#FF0000" size="4">CNPJ Inválido, por favor digite um CNPJ válido.</b></font>'; 
    }
	else
	{   // Calcula os números para verificar se o CPF é verdadeiro
        for ($t = 9; $t < 11; $t++) {
            for ($d = 0, $c = 0; $c < $t; $c++) {
                $d += $cpf{$c} * (($t + 1) - $c);
            }

            $d = ((10 * $d) % 11) % 10;

            if ($cpf{$c} != $d) {
                return false;
                // echo '<center><font color="#FF0000" size="4">CNPJ Inválido, por favor digite um CNPJ válido.</b></font>'; 
            }
        }

        return true;
    }
}

function validar($campos){
	foreach($campos as $c){
		if (empty($c)){
			//echo "Erro: Campo ".$c." não pode ser branco";
			return false;
		}else{
			return true;
		}	
		}
}

if (validar(Array($Edit1)) == true){
    //echo $Edit1."<br>";
}else{
	
	 echo "<script>alert('Erro: Campo Nome: não pode ser Branco');</script>";	
     echo "<script>history.go(-1);</script>";
	 exit;
}
if (validar(Array($Edit2)) == true){
    //    echo $Edit2."<br>";
}else{
	 echo "<script>alert('Erro: Campo Sobrenome: não pode ser Branco');</script>";	
     echo "<script>history.go(-1);</script>";
	 exit;
}
if (validar(Array($Edit3)) == true){
    //    echo $Edit3."<br>";
}else{
	 echo "<script>alert('Erro: Campo Data Nascimento: não pode ser Branco');</script>";	
     echo "<script>history.go(-1);</script>";
	 exit;
}
if (validar(Array($Edit4)) == true){
    //    echo $Edit4."<br>";
}else{
	 echo "<script>alert('Erro: Campo Data Nascimento: não pode ser Branco');</script>";	
     echo "<script>history.go(-1);</script>";
	 exit;
}
if (validar(Array($Edit5)) == true){
    //    echo $Edit5."<br>";
}else{
	 echo "<script>alert('Erro: Campo Data Nascimento: não pode ser Branco');</script>";	
     echo "<script>history.go(-1);</script>";
	 exit;
}

if (validar(Array($Edit6)) == true){
    //    echo $Edit6."<br>";
}else{
	 echo "<script>alert('Erro: Campo Sexo: não pode ser Branco');</script>";	
     echo "<script>history.go(-1);</script>";
	 exit;
}
if (validar(Array($Edit7)) == true){
    //    echo $Edit7."<br>";
}else{
	 echo "<script>alert('Erro: Campo Login e Senha: não pode ser Branco');</script>";	
     echo "<script>history.go(-1);</script>";
	 exit;
}
if (validar(Array($Edit8)) == true){
    //    echo $Edit8."<br>";
}else{
	 echo "<script>alert('Erro: Campo Senha: não pode ser Branco');</script>";	
     echo "<script>history.go(-1);</script>";
	 exit;
}
if (validar(Array($Edit9)) == true){
    //    echo $Edit9."<br>";
}else{
	 echo "<script>alert('Erro: Campo Senha: não pode ser Branco');</script>";	
     echo "<script>history.go(-1);</script>";
	 exit;
}

if ($Edit8 != $Edit9){
	
	 echo "<script>alert('Erro: Campo Senha: e Campo Comfirma Senha não são iguais');</script>";	
     echo "<script>history.go(-1);</script>";
	 exit;
	
}

if ($Edit10 != $Edit11){
	
	 echo "<script>alert('Erro: Campo e-Mail: e Campo Comfirma e-Mail não são iguais');</script>";	
     echo "<script>history.go(-1);</script>";
	 exit;
}

// Validando o campo com E-mail

if (substr_count($Edit10,"@") == 0 || substr_count($Edit10,".") == 0)
  {
   echo "<script>alert('Erro: Por favor, utilize um e-mail válido');</script>";	
   echo "<script>history.go(-1);</script>";
   exit;
   
   }else{
   	
    //   	    echo $Edit10."<br>";
   }

if (substr_count($Edit11,"@") == 0 || substr_count($Edit11,".") == 0)
  {
   echo "<script>alert('Erro: Por favor, utilize um e-mail válido');</script>";	
   echo "<script>history.go(-1);</script>";
   exit;
   
   }else{
    //   	    echo $Edit11."<br>";
   	
   }

if (validar(Array($Edit12)) == true){
    //    echo $Edit9."<br>";
}else{
	 echo "<script>alert('Erro: Utilize uma palavra secreta para recuperar sua senha caso perca !!!');</script>";
	                         	
     echo "<script>history.go(-1);</script>";
	 exit;
}

if (validar(Array($Edit13)) == true){
    //    echo $Edit4."<br>";
}else{
	 echo "<script>alert('Erro: Campo R.G: não pode ser Branco');</script>";	
     echo "<script>history.go(-1);</script>";
	 exit;
}

if (validar(Array($Edit15)) == true){
    //    echo $Edit4."<br>";
}else{
	 echo "<script>alert('Erro: Existe Campos não preenchidos!!!!');</script>";	
     echo "<script>history.go(-1);</script>";
	 exit;
}

if (validar(Array($Edit16)) == true){
    //    echo $Edit4."<br>";
}else{
	 echo "<script>alert('Erro: Existe Campos não preenchidos!!!!');</script>";	
     echo "<script>history.go(-1);</script>";
	 exit;
}
if (validar(Array($Edit17)) == true){
    //    echo $Edit4."<br>";
}else{
	 echo "<script>alert('Erro: Existe Campos não preenchidos!!!!');</script>";	
     echo "<script>history.go(-1);</script>";
	 exit;
}

if (validar(Array($Edit18)) == true){
    //    echo $Edit4."<br>";
}else{
	 echo "<script>alert('Erro: Existe Campos não preenchidos!!!!');</script>";	
     echo "<script>history.go(-1);</script>";
	 exit;
}

if (validar(Array($Edit19)) == true){
    //    echo $Edit4."<br>";
}else{
	 echo "<script>alert('Erro: Existe Campos não preenchidos!!!!');</script>";	
     echo "<script>history.go(-1);</script>";
	 exit;
}

if (validar(Array($Edit20)) == true){
    //    echo $Edit4."<br>";
}else{
	 echo "<script>alert('Erro: Existe Campos não preenchidos!!!!');</script>";	
     echo "<script>history.go(-1);</script>";
	 exit;
}

if (validar(Array($Edit21)) == true){
    //    echo $Edit4."<br>";
}else{
	 echo "<script>alert('Erro: Existe Campos não preenchidos!!!!');</script>";	
     echo "<script>history.go(-1);</script>";
	 exit;
}

    //Echo $Edit12;	

// Abre Conexão com o MySql
include("../conexao.php");
// Chama o Banco de Dados

$link = @mysql_connect($host,$user,$pass)

    or die( require("../login.php"));

@mysql_select_db($db);


$consulta4 = "UPDATE tt_ser_01 SET  nome	   = '$Edit1',      		
					                sobrenome  = '$Edit2',
									nasc_dia   = '$Edit3',
									nasc_mes   = '$Edit4',
									nasc_ano   = '$Edit5',
									sexo       = '$Edit6',
									e_mail     = '$Edit11',
									senha      = '$Edit9',
									rg         = '$Edit13',
									frase      = '$Edit12',
									rua        = '$Edit15',
									endereco   = '$Edit16',
									numero     = '$Edit25', 
									bairro     = '$Edit17',
									estado     = '$Edit24',
									cidade     = '$Edit18',
									cep        = '$Edit19',
									fone_fix   = '$Edit20',
									fone_cel   = '$Edit21',
									url        = '$Edit22'  WHERE id = '$id_w'";

@mysql_query($consulta4, $link) or

             die("echo '<script>alert('Erro: Falha na Alteração !!!');</script>'	
				  echo '<script>history.go(-1);</script>'");	
									   

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


$consulta14  = "SELECT * FROM tt_ser_01 WHERE id = '$id_w'";
					
$resultado14 = @mysql_query($consulta14);
					
$row14 = @mysql_fetch_array($resultado14);
					
$id_prod    = @$row14["id"];
$id_log     = @$row14["nome"]." ".@$row14["sobrenome"];

include("../funcoes2.php");
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
<body style=" margin-left: 0px;  margin-top: 0px;  margin-right: 0px;  margin-bottom: 0px; "   bgcolor="#FFFFFF">


<table width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td bgcolor="#FF9900"><table width="100%" border="0" cellpadding="0" cellspacing="1">
      <tr>
        <td bgcolor="#FDECDB"><img src="../graphics/px1.gif" width="15" height="14"><b><font color="#FF6600" face="Arial">Cadastro de Usuario Alteração<font size="2">(Compraai)</font> </font></b> </td>
      </tr>
    </table></td>
  </tr>
</table>

<br />

<div align="left">&nbsp;&nbsp;&nbsp;</div>

<table width="470" border="0" align="center">
  <tr>
    <td width="90"><div align="center"><img src="../graphics/ok.gif" width="72" height="89"></div></td>
    <td width="370"><p align="center"><b>Seu cadastrados foi alterado com Susseco !!!<br>
    Clique <a href="pre_upload.php?cod_prod=<?=$id_prod;?>">AQUI</a> Para alterar sua fotos no Cadastro<br>
    Ou clique&nbsp; <a href="../principal.php">AQUI </a>Para&nbsp;Retornoar</b></p></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
<br />
<br />
<center><a href='../principal.php'><img src='../graphics/retorno.png' border='0' /></a></center>
</body>
</html>
<br />
<br />

<?
}
include('rodape.php');
?>
