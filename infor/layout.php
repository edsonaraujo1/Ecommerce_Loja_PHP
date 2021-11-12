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
session_start();
$ser_name3_c    = strtoupper($_SESSION["log_name_c"]);
include("../config.php");

if ($entra_no_web1 == 'at2'){

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

</style>
</head>

<table width="100%" height="52" border="0">
            <tr>
              <td width="100%" background="graphics/forum.png"><span class="style19">&nbsp;&nbsp;Web Masters </span></td>
            </tr>
</table>
		  <p>&nbsp;</p>
		  <p>&nbsp;</p>

<body  style=" margin-left: 0px;  margin-top: 0px;  margin-right: 0px;  margin-bottom: 0px; "   bgcolor="#FFFFFF" >
<form style="margin-bottom: 0" id="Unit1" name="Unit1" method="post"  action="/infor_800_600.php">
<table  width="495"   style="height:480px"  border="0" cellpadding="0" cellspacing="0"  bgcolor="#FFFFFF"  ><tr><td valign="top">
<div id="Image2_outer" style="Z-INDEX: 1; LEFT: 16px; WIDTH: 88px; POSITION: absolute; TOP: 79px; HEIGHT: 104px">
<div id="Image2_container" style=" width: 88;  height: 104; overflow: hidden;" ><img id="Image2" src="graphics/Eu2.png"  width="84"  height="100"  border="0"       /></div>
</div>
<div id="Label1_outer" style="Z-INDEX: 2; LEFT: 112px; WIDTH: 360px; POSITION: absolute; TOP: 124px; HEIGHT: 66px">
<div id="Label1" style=" font-family: Verdana; font-size: 10px;  background-color: #FFFFFF;height:66px;width:360px;"   ><P class=MsoNormal style="MARGIN: 0cm 0cm 0pt">Programador desde 1989 Iniciando em Summer87 passando depois para o Dbase III e Clipper 5.1, Atualmente programador Visual Basic e Visual Fox Pro e Programação voltada para Web e Sistemas ERP Web Server usando Programação PHP/JavaScript/Ajax/SQL/MySQL, Neste Site você encontrara </P></div>
</div>
<div id="Label2_outer" style="Z-INDEX: 3; LEFT: 113px; WIDTH: 224px; POSITION: absolute; TOP: 84px; HEIGHT: 24px">
<div id="Label2" style=" font-family: Verdana; font-size: 10px;  background-color: #FFFFFF;height:24px;width:224px;"   ><SPAN style="FONT-SIZE: 12pt; FONT-FAMILY: 'Times New Roman'; mso-fareast-font-family: 'Times New Roman'; mso-ansi-language: PT-BR; mso-fareast-language: PT-BR; mso-bidi-language: AR-SA"><STRONG><EM>Web Master : <a href="mailto:edsonaraujo1@hotmail.com">Edson de Araujo</a></EM></STRONG></SPAN></div>
</div>
<div id="Label3_outer" style="Z-INDEX: 4; LEFT: 16px; WIDTH: 456px; POSITION: absolute; TOP: 191px; HEIGHT: 48px">
<div id="Label3" style=" font-family: Verdana; font-size: 10px;  background-color: #FFFFFF;height:48px;width:456px;"   ><P class=MsoNormal style="MARGIN: 0cm 0cm 0pt">dicas de programação de desenvolvimento de Sistemas Coorporativos em Visual Basic e Visual Fox Pro e PHP, aproveite as </P>
<P class=MsoNormal style="MARGIN: 0cm 0cm 0pt">dicas de programação, participe do nosso Fórum sobre o Assunto.</P>
<P class=MsoNormal style="MARGIN: 0cm 0cm 0pt">Siga Sempre em Frente e Nunca Desista.</P>
<P class=MsoNormal style="MARGIN: 0cm 0cm 0pt">Sua Sugestão e importante para que possamos manter um site de ajuda para os futuros programadores.</P></div>
</div>
<div id="Image3_outer" style="Z-INDEX: 5; LEFT: 16px; WIDTH: 88px; POSITION: absolute; TOP: 294px; HEIGHT: 104px">
<div id="Image3_container" style=" width: 88;  height: 104; overflow: hidden;" ><img id="Image3" src="graphics/jean2.png"  width="84"  height="100"  border="0"       /></div>
</div>
<div id="Label4_outer" style="Z-INDEX: 6; LEFT: 112px; WIDTH: 280px; POSITION: absolute; TOP: 294px; HEIGHT: 24px">
<div id="Label4" style=" font-family: Verdana; font-size: 10px;  background-color: #FFFFFF;height:24px;width:280px;"   ><SPAN style="FONT-SIZE: 12pt; FONT-FAMILY: 'Times New Roman'; mso-fareast-font-family: 'Times New Roman'; mso-ansi-language: PT-BR; mso-fareast-language: PT-BR; mso-bidi-language: AR-SA"><STRONG><EM>Web Master : <a href="mailto:ptc_jean@hotmail.com">Jean Carlos de Araujo</a></EM></STRONG></SPAN></div>
</div>
<div id="Label5_outer" style="Z-INDEX: 7; LEFT: 112px; WIDTH: 360px; POSITION: absolute; TOP: 334px; HEIGHT: 100px">
<div id="Label5" style=" font-family: Verdana; font-size: 10px;  background-color: #FFFFFF;height:100px;width:360px;"   >
  <p>Programador e Designer e cria&ccedil;&atilde;o de leyouts.<br> 
    Visual Basic e programa&ccedil;&atilde;o de Jogos.<br> 
    Formado recentemente no ano 01/01/2009 como t&eacute;cnico de hardware e redes, programador e web designer no col&eacute;gio NSL. Habilidade em desenvolvimento de sistemas PHP, Visual Basic e C. Conhecimentos em Web Design utilizando ferramentas DHTML, Flash e ActionScript. Atualmente Cursando Ci&ecirc;ncias das Computa&ccedil;&atilde;o na PUC S&atilde;o Paulo. </p>
  <P class=MsoNormal style="MARGIN: 0cm 0cm 0pt">&nbsp;</P>
</div>
</div>
</td></tr></table>
</form></body>
</html>
<?
}else{
	
	require("inew_undher_files.php");
}
?>