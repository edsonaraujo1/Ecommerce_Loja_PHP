<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link rel="stylesheet" href="estilo1.css" type="text/css">
</head>

<body style=" margin-left: 0px;  margin-top: 0px;  margin-right: 0px;  margin-bottom: 0px; " onload="startTime()">
<table border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td width="174" align="center" valign="top" ><div align="center"><img src="graphics/lixo1.png" ></div></td>
    <td width="603" valign="bottom" background="graphics/banner_sys1b.png"><table width="538" height="93" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td width="509" height="59"><div align="center">
              <table width="319" height="47" border="0">
                <tr>
                  <td><!-- <img src="graphics/banner.gif" width="320" height="47">--></td>
                </tr>
              </table>
          </div></td>
          <td width="29">&nbsp;</td>
        </tr>
        <tr>
          <td height="27"><table width="506" border="0" cellpadding="0" cellspacing="0">
              <tr>
                <td width="303" height="24" align="right" valign="bottom">
                  <?
				  include('bot_atalho.php');
				  ?>
&nbsp; <img src="graphics/px1.gif" width="50" height="10"></td>
                <td width="53" align="center"><b><font size="2" face="Verdana">Busca:&nbsp;</font></b></td>
                <td width="90" align="center">
                  <form name="form" method="post" action="buscar/buscar.php?acao=buscar">
                    <input name="buscar" type="text" size="20" style="height:20px;">
                </form></td>
                <td width="39" align="right">&nbsp;&nbsp;
                    <input type=image name="Pesquisa" src="graphics/ok_2.png" width="29" height="20"></td>
                <td width="17" valign="bottom"><img src="graphics/espacador_tb.gif" width="15" height="10"/></td>
              </tr>
          </table></td>
          <td align="right" valign="bottom">&nbsp; </td>
        </tr>
    </table></td>
    <td width="201" bgcolor="#FC9107">
      <?
if ($ser_name3_c == "VISITANTE"){
?>
      <div align="center">
        <table width="201" border="0" cellpadding="0" cellspacing="0" background="graphics/area_user2.png">
          <tr>
            <td width="272">&nbsp;</td>
          </tr>
          <tr>
            <td>
              <table width="198" height="74" border="0" cellpadding="0" cellspacing="0">
                <?
if ($ser_name3_c == "VISITANTE"){
?>
                <form name="form1" method="post" autocomplete="off" action="logar.php?acao=logar">
                  <?
}else{
?>
                </form>
                <form name="form1" method="post" autocomplete="off" action="login_sair.php">
                  <?	
}	
?>
                  <?
if ($falha_login == "falhou"){
?>
                  <tr>
                    <td width="268">
                      <div align="left"><span class="style1"> <img src="graphics/px1.gif" width="8" height="1"><span class="style3">login.</span>:<img src="graphics/px1.gif" width="9" height="8"></span>
                          <input type="text" name="log_name_c" style="height:22px; width:90px ">
                          <a href="lembra/senha_4i.php"><img src="graphics/ajud-1.png" width="13" height="13" alt="Esqueci minha Senha" border="0"></a> </div></td>
                  </tr>
                  <tr>
                    <td><div align="left"><span class="style4"> <img src="graphics/px1.gif" width="10" height="1">senha.:</span>
                            <input type="password" name="pwd" style="height:22px; width:90px ">
                    </div></td>
                  </tr>
                  <tr>
                    <td height="20" align="right" valign="top"><div align="right"><span class="style19"><span class="style20">Falha no Login</span> <img src="graphics/px1.gif" width="8" height="1"></span>
                            <input type=image name="Entrar" src="graphics/enter.png" width="58" height="20">
                            <img src="graphics/px1.gif" width="13" height="1"></div></td>
                  </tr>
                  <?
}else{
?>
                  <tr>
                    <td width="268"><div align="left"><span class="style1"> <img src="graphics/px1.gif" width="10" height="1"><span class="style3">login.</span>:<img src="graphics/px1.gif" width="7" height="8"></span>
                            <input type="text" name="log_name_c" style="height:22px; width:90px ">
                            <a href="lembra/senha_4i.php"><img src="graphics/ajud-1.png" width="13" height="13" alt="Esqueci minha Senha" border="0"></a> </div></td>
                  </tr>
                  <tr>
                    <td><div align="left"><span class="style4"> <img src="graphics/px1.gif" width="10" height="1">senha.:</span>
                            <input type="password" name="pwd" style="height:22px; width:90px ">
                    </div></td>
                  </tr>
                  <?
if ($ser_name3_c == "VISITANTE"){
?>
                  <tr>
                    <td height="20" align="right" valign="top"><img src="graphics/px1.gif" width="8" height="1">
                        <input type=image name="Entrar" src="graphics/enter.png" width="58" height="20">
                        <img src="graphics/px1.gif" width="13" height="1"></td>
                  </tr>
                  <?
}else{
?>
                  <tr>
                    <td height="20" align="right" valign="top"><img src="graphics/px1.gif" width="8" height="1">
                        <input type=image name="Entrar" src="graphics/sair.png" width="58" height="20">
                        <img src="graphics/px1.gif" width="13" height="1"></td>
                  </tr>
                  <?
}
?>
                  <?	
}   
?>
                  <tr>
                    <td height="21">&nbsp;</td>
                  </tr>
                </form>
            </table></td>
          </tr>
        </table>
      </div>
      <?
}else{
?>
      <table width="201" height="102" border="0" cellpadding="0" cellspacing="0" background="graphics/area_user2.png">
        <form name="form1" method="post" action="login_sair.php">
          <tr>
            <td width="272" height="27"><div align="left"><span class="style1"><br>
                      <img src="graphics/px1.gif" width="8" height="8"><span class="style3">Ola.:
                      <?=$ser_name3_c;?>
                      <br>
                      <img src="graphics/px1.gif" width="8" height="1">Seu Ultimo acesso foi em:<br>
                      <img src="graphics/px1.gif" width="8" height="1">&nbsp;
                      <?=trim($acesso_2);?>
      &nbsp;<br>
                  </span></span></div></td>
          </tr>
          <tr>
            <td height="33" align="right" valign="top"><input type=image name="Sair" src="graphics/sair.png" width="58" height="20">
                <img src="graphics/px1.gif" width="10" height="1"></td>
          </tr>
        </form>
      </table>
      <?	
}
?>
    </td>
    <td width="34" bgcolor="#FC9102"><img src="graphics/espacador_tb.gif" width="15" height="10"></td>
  </tr>
</table>
<table width="100%" border="0" cellpadding="0" cellspacing="0">
  <td width="100%" height="23" valign="top" bgcolor="#FC9102">
      <?
			include('lay_menu_x.php');
			?>
    </td>
</table>
<br>
</body>
</html>
