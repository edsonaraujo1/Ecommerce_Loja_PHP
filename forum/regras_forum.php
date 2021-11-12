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

@session_start();
$alte_url_pag = $_SESSION["alte_url_pag"];


//include_once("config.php");

if (!empty($alte_url_pag)){

    unset ($_SESSION["alte_url_pag"]);


require("../config.php");

if ($entra_no_web1 == 'at2'){

session_start();
$ser_name3_c    = strtoupper($_SESSION["log_name_c"]);

require("../funcoes2.php");
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
<body  style=" margin-left: 0px;  margin-top: 0px;  margin-right: 0px;  margin-bottom: 0px; "   bgcolor="#FFFFFF" >

<table width="100%" height="52" border="0">
            <tr>
              <td width="100%" background="../graphics/forum_baner.png"><span class="style19">&nbsp;&nbsp;Regras e Normas para uso do Forum</span></td>
            </tr>
</table>
		  <table width="100%" height="370" border="0">
            <tr>
              <td height="111"><div align="center"><b><font color="#FF0000" size="5" face="Verdana">Essas s&atilde;o algumas regras que devem ser seguidas para que tenhamos sempre um F&oacute;rum limpo e organizado.</font></b><br>
              </div></td>
            </tr>
            <tr>
              <td height="105"><div align="center">
                <p align="center"><b> <br>
                  </b>Apesar dos administradores e moderadores deste f&oacute;rum tentarem remover ou editar qualquer material indesej&aacute;vel logo que detectado, &eacute; imposs&iacute;vel rever todas as mensagens. Todas as mensagens enviadas nos f&oacute;runs expressam os pontos de vista e opini&otilde;es dos seus respectivos autores e n&atilde;o dos administradores, moderadores ou os encarregados das p&aacute;ginas. <br>
                  <b>E PROIBIDO colocar qualquer mensagem abusiva, obscena, vulgar, insultuosa, de &oacute;dio, amea&ccedil;adora, sexualmente tendenciosa, racismo, e de preconceito ou qualquer outro material que possa violar qualquer lei aplic&aacute;vel. Caso aconte&ccedil;a isso implicar&aacute; em expuls&atilde;o imediata e permanente do autor e demais utilizadores </b>. <b>Os endere&ccedil;os de IP de todas as mensagens s&atilde;o registrados para ajudar a implementar essas condi&ccedil;&otilde;es, </b>Assim como Avatares e Assinaturas s&atilde;o permitidos aqui no f&oacute;rum, desde que respeitem um certo padr&atilde;o de tamanho. Os Avatares j&aacute; tem o seu tamanho padr&atilde;o, e quaisquer imagens superiores a este tamanho ser&atilde;o automaticamente ajustadas. Quanto &agrave;s assinaturas, s&oacute; pedimos para que os usu&aacute;rios tenham o bom senso de n&atilde;o colocarem imagens monstruosas que quebrem a p&aacute;gina ou atrapalhem na navega&ccedil;&atilde;o do F&oacute;rum, bem como existem usu&aacute;rios que possuem conex&atilde;o discada, e imagens “pesadas” atrasam o tempo de carregamento das p&aacute;ginas. </p>
                <p align="center"><font size="4"><b>O F&oacute;rum iSysmp.com agradece a todos os colaboradores. <br>
                  <br>
                  <a href="topicos.php"><img src="../graphics/retorno.png" width="30" height="31" border="0"></a><br>
                </b></font></p>
              </div></td>
            </tr>
          </table>
		  <p><center></center>
</p>
</div>

</body></html>

<?
}else{
	
	require("inew_undher_files.php");	
	
}


}else{

header('Location:../index.php');

	
}
?>