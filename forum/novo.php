<?
/*
 ----------------------------------------------------------
 Desenvolvido por...: Edson de Araujo
 Finalidade.........: Novo Topico
 Criado em Data.....: 02/08/2009
 Ultima Atualização : 02/08/2009 

 DEUS SEJA LOUVADO
 ----------------------------------------------------------
*/

@session_start();
unset  ($_SESSION["dona_top"]); 
unset  ($_SESSION["nome_dona"]);

// Abre Conexão com o MySql
include("../conexao.php");

// Resgata a Sessao
@session_start();
$ser_name3_c    = $_SESSION["log_name_c"];
$acesso_2 = $_SESSION['data_log_2'];
$_SESSION['novo_new'] = 'nov_new';

$link = @mysql_connect($host,$user,$pass)

    or die( require("../login.php"));

@mysql_select_db($db);

$consulta  = "SELECT * FROM tt_ser_01 WHERE login = '$ser_name3_c'";
					
$resultado = @mysql_query($consulta);
					
// Incrementa novo codigo
					
$row = @mysql_fetch_array($resultado);
					
$codigo 	= @$row["codigo"];             
$nome 		= trim(@$row["nome"])." ".trim(@$row["sobrenome"]);      		
$mail_des 	= @$row["e_mail"];
$login 		= @$row["login"];
$foto_pda   = @$row["foto_peq"];

if (!empty($codigo)){
	
	$permissao = 12;
	
}else{
	
	$permissao = 0;
	
}

if ($ser_name3_c == "VISITANTE"){
	
    $permissao = 0;
}
if (empty($ser_name3_c)){
	
    $permissao = 0;
}


$pai=0;

//echo $val;

if ($permissao == 12){
	
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

</head>
	
<table width="100%" height="52" border="0">
            <tr>
              <td width="100%" background="../graphics/forum_baner.png"><span class="style19">&nbsp;&nbsp;iSysMP Forum</span></td>
            </tr>
          </table>


	<?	
	include "barrasup.php";
    include "form.php";	
    include "barrasup.php";
}else{
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

<table width="100%" height="52" border="0">
            <tr>
              <td width="100%" background="../graphics/forum_baner.png"><span class="style19">&nbsp;&nbsp;iSysMP Forum</span></td>
            </tr>
          </table>

<div id="Image1_outer" style="Z-INDEX: 14; POSITION: absolute; TOP: 85px; HEIGHT: 84px">
<?
	    echo "<table  align='center' width='100%' border='0'><td width='100%'>";
		echo "<center><b><font color='#FF0000'>ATENÇÃO</font> para enviar sua mensagem e preciso se cadastrar</b><br></center>";
		echo "<center><b>e gratuito, os dados e apenas para segurança tanto de quem</b><br></center>";
		echo "<center><b>pergunta quanto para quem responde</b></center>";
		echo "<center><b>Cadastre-se e se possivel inclua uma foto sua</b></center>";
		echo "<center><b>Para se cadastrar Clique&nbsp;&nbsp;<a href=../cadastro/layout.php?entra_no_web1=at2><font color='#3333CC'><u>AQUI</u></font></a></b></center>";
		echo "<center><b>Obrigado !!!</b></center>";
		echo "</td></table>";
	   
?>
</div>
<?	
include("barrasup.php");
}
?>