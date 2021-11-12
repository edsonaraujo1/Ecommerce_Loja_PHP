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

body {
	   SCROLLBAR-ARROW-COLOR: blue;
	   SCROLLBAR-BASE-COLOR: #FFC082
	   
}

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
              <td width="100%" background="../graphics/forum_baner.png"><span class="style19">&nbsp;&nbsp;Desenvolvendo !!!</span></td>
            </tr>
          </table>

		  <p>&nbsp;</p>

<center><img id="Image2" src="../graphics/stop.gif"  border="0"       /></center>


<p><center><font face=Tahoma><font size=4 color='#006699'><b>desenvolvimento Aguardem em</center>
<center>breve estaremos disponibilizando um</center>
<center>novo serviço</center></p></font>
</div>

</body></html>
<?
}else{
	
	require("inew_undher_files.php");	
}
?>