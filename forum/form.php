<?
/*
 ----------------------------------------------------------
 Desenvolvido por...: Edson de Araujo
 Finalidade.........: Form Resposta Forum
 Criado em Data.....: 02/08/2009
 Ultima Atualização : 02/08/2009 

 DEUS SEJA LOUVADO
 ----------------------------------------------------------
*/

@session_start();
$email_per  = $_SESSION["dona_top"]; 
$user_top   = $_SESSION["nome_dona"];

// Abre Conexão com o MySql
include("../conexao.php");

// Resgata a Sessao
@session_start();
$ser_name3_c    = $_SESSION["log_name_c"];
$acesso_2 = $_SESSION['data_log_2'];
$novo_new = $_SESSION['novo_new'];

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



if ($permissao == 12){

//echo $codigo."<br>";
//echo $ser_name3_c;

//break;


function fmodAddOn($x,$y)
{
       $i = floor($x/$y);

       // r = x - i * y
       return $x - $i*$y;
}
?>
<link rel="stylesheet" href="forum.css" type="text/css">

<style type="text/css">
<!--

.style1 {
	color: #FF0000;
	font-weight: bold;
}

.style3 {
	color: #FFFFFF;
	font-weight: bold;
}
-->
</style>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<head>

<!-- TinyMCE -->
<script type="text/javascript" src="../jscripts/tiny_mce/tiny_mce.js"></script>
<script type="text/javascript">
	tinyMCE.init({
		mode : "textareas",
		theme : "simple"
	});
</script>
<!-- /TinyMCE -->

</head>
<a name="form"></a>

<form action="trata.php" name="form" method="post">
<table width="95%" border=0 cellpadding=0  cellspacing=0 align="center">
  <!--DWLayoutTable-->
  <tbody bgcolor="#FFFFFF">
    <tr bgcolor="#FFFFFF">
      <td width="100%" align="center" nowrap class=campo>
        <table width="100%" border="0" cellspacing="1" cellpadding="0" bgcolor="ffffff" align="center">
          <!--DWLayoutTable-->
          <tr>
            <td width="100%" align="center" valign="top">
              <table width="100%" border="0" cellspacing="0" cellpadding="0" align="center">
                <!--DWLayoutTable-->
                <tr>
                  <td width="100%" height="19" valign="top" bgcolor="#FF9900">
                  <div align="center" class="style3"> Formule sua Pregunta ou Resposta abaixo </div></td>
                </tr>
                <tr>
                  <td height="19" valign="top" bgcolor="#CCCCCC">
                    <div align="center"><strong>Ola:</strong>&nbsp;&nbsp;<b><?=$login;?></b><br />
					<input type="hidden" maxlength=30 size=30 name=nome value="<?=$login;?>"> </div></td>
                </tr>
                <input maxlength=50 size=30 name=foto_pda value="<?=$foto_pda;?>" style=" font-family: Verdana; font-size: 10px; color: #FFFFFF; border-width: 0px; border-style: none;background-color: #FFFFFF;height:23px;width:60px;" readonly />
                <tr>
                  <td height="19" valign="top" bgcolor="#CCCCCC">
                    <div align="center"><strong>Seu email:</strong>&nbsp;&nbsp;</b><?=$mail_des;?></b><br /><br />
                    
                    <?
                    if (!empty($user_top)){
                    ?>

                    <strong>Resposta para:</strong>&nbsp;&nbsp;</b><?=$user_top;?></b>
                    
                    <?
					}
					?>
                   
					</div></td>
                </tr>
                <tr>
                  <td height="19" valign="top" bgcolor="#CCCCCC">
                    <div align="center">
                      <input type="hidden" maxlength=60 size=30 name=email value="<?=$mail_des;?>" class="button">
                      <input type="hidden" maxlength=60 size=30 name=email_per value="<?=$email_per;?>" class="button">
</div></td>
                </tr>
                <tr>
                  <td height="19" valign="top" bgcolor="#CCCCCC">
                    <div align="center"><strong>Assunto:</strong> </div></td>
                </tr>
                <tr>
                  <td height="19" valign="top" bgcolor="#CCCCCC">
                    <div align="center">
                    
                    <?
                    if (!empty($titulo)){
                    ?>
                      <input maxlength=80 size=50 name=titulo value="<?=$titulo;?>">
                    <?
					}else{
						
						if ($novo_new == 'nov_new')
					    {
						   ?>
                           <input maxlength=80 size=50 name=titulo value="<?=$titulo;?>">
					       <?
					    }else{
							?>  
		                      <input maxlength=80 size=50 name=titulo value="Re:<?=$titulo;?>">
		                    <?
					    	
					    }

					}
					?>  
                      
                     
                      
</div></td>
                </tr>
                <tr>
                  <td height="19" valign="top" bgcolor="#CCCCCC">
                    <div align="center"></div></td>
                </tr>
                <tr>
                  <td height="22" valign="top" bgcolor="#CCCCCC">
                    <div align="center"><strong>Digite sua mensagem:</strong></div></td>
                </tr>
                <tr>
                  <td height="15" valign="top" bgcolor="#CCCCCC">
                    <div align="center">
                    
                    
	<!-- Gets replaced with TinyMCE, remember HTML in a textarea should be encoded -->
	<textarea id="elm1" name="elm1" rows="15" cols="50" style="width: 95%">
		Digite aqui sua mensagem
	</textarea>
                   

</div></td>
                </tr>
                <tr>
                  <td height="19" valign="top" bgcolor="#CCCCCC">
                    <div align="center"></div></td>
                </tr>
            </table></td>
          </tr>
      </table></td>
    </tr>
    <tr bgcolor="#FFFFFF">
      <td align=center nowrap class=campo >
        <div align="center">
          <input type=submit  name=post value="Registrar Mensagem" style="background-color: #ffffff;"/>
          <input type="hidden" name="pai" value="<?=$pai;?>">
          <input type="hidden" name="topico" value="<?=$topico;?>">
      </div></td>
    </tr>
  </tbody>
</table>
</form>
<div align="center"></div>
<?
}else{

?>

<a name="form"></a>

<form name="form" method="post">
<br />
<br />
<br />
<table width="100%" height="105" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td height="101"><div align="center"><font color="#FF0000"><b>ATENÇÃO</b></font> <strong>para se corresponder pelo Forum e preciso se cadastrar<br>
  e gratuito, os dados e apenas para seguran&ccedil;a tanto de quem<br>
      pergunta quanto para quem responde<br>
      Cadastre-se e se possivel inclua uma foto sua<br>
      Para se cadastrar Clique</strong> <a href="../cadastro/layout.php?entra_no_web1=at2"><font color="#0000CC"><b></b><u>AQUI</u></b></font></a><br>
      <strong>Obrigado !!!</strong><br>
    </div>
    <p></p></td>
  </tr>
</table>
</form>
	   
<?

//include "barrasup.php";
}

?>