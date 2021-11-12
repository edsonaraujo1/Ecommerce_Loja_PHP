<?
include('aguarde.php');

include('titulo.php');
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title><?=$Titulo;?></title>
<link rel="shortcut icon" href="../graphics/favicon.ico"/>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"/>
</head>

<body>
<table width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td bgcolor="#FF9900"><table width="100%" border="0" cellpadding="0" cellspacing="1">
      <tr>
        <td bgcolor="#FDECDB"><img src="../graphics/px1.gif" width="15" height="14"><b><font color="#FF6600" face="Arial">Modelo com Menu </font></b></td>
      </tr>
    </table></td>
  </tr>
</table>
<table width="100%" border="0">
  <tr>
    <td width="1%" align="center">
	        <?
	        include('lay_menu.php');
	        ?>
      <br>
      <img src="../graphics/baner_vertical.PNG" width="141" height="580"> <br>
      <table width="128" border="0">
        <tr>
          <td width="130" align="center"> <b>N&ordm; de visitas</b> </td>
        </tr>
        <tr>
          <td align="center"><?=$qtd_ivisita;?></td>
        </tr>
    </table></td>
    <td width="98%" valign="top">
	<!-- Inicioda do Layout -->

    <div align="center">
      <table width="452" border="0">
        <tr>
          <td width="105"><b><font size="-1" face="Verdana">Procurar Loja</font></b> </td>
          <td width="301"><input name="textfield" type="text" size="50"></td>
          <td width="32"><img src="../graphics/ok_azul.gif" width="28" height="20"></td>
        </tr>
      </table>
      <img src="../graphics/px1.gif" width="50" height="10"></div>
    <table width="100%" border="0" cellpadding="0" cellspacing="1">
  <tr>
    <td height="193" valign="top" bgcolor="#FF9900"><div align="center">
      <table width="100%" border="0" cellpadding="0" cellspacing="1">
        <tr>
          <td height="191" bgcolor="#EEEEEE"><div align="center">
            <table border="0">
              <tr>
                <td height="120" bgcolor="#FFFFFF"><div align="center"><img src="../graphics/avon.png" width="230" height="109"></div></td>
                <td bgcolor="#FF9900"><table width="306" border="0" cellpadding="0" cellspacing="1" bgcolor="#FFFFFF">
                  <tr>
                    <td width="304"><b><font size="2" face="Verdana">Avon the company form women LTDA </font></b></td>
                  </tr>
                  <tr>
                    <td height="16"><font size="-2" face="Verdana">Rua Alamedas, 213 loja 12 1&ordm; subsolo </font></td>
                  </tr>
                  <tr>
                    <td height="17"><font size="-2" face="Verdana">S&atilde;o Paulo - Jd Paulista - CEP: 04512-000 </font></td>
                  </tr>
                  <tr>
                    <td height="17"><font size="-2" face="Verdana">Fone: 11 2345-2312/2345-7898 </font></td>
                  </tr>
                  <tr>
                    <td height="39"><font size="-2" face="Verdana">Visite o Site: <br>
                      http://www.avon.br.com.br</font></td>
                  </tr>
                  <tr>
                    <td height="39"><table width="301" border="0">
                      <tr>
                        <td width="113">&nbsp;</td>
                        <td width="178"><img src="../graphics/ir_loja.png" width="175" height="42"></td>
                      </tr>
                    </table></td>
                  </tr>
                </table></td>
              </tr>
            </table>
          </div></td>
        </tr>
      </table>
    </div></td>
  </tr>
</table>


    &nbsp;
	
	<!-- Fim do Layout -->    </td>
    <td width="1%"><div align="center"><img src="../graphics/px1.gif" width="8" height="10"></div></td>
  </tr>
  <tr>
    <td align="center">&nbsp;</td>
    <td><div align="center"><img src="../graphics/retorno.png" width="30" height="31"><br>
    </div></td>
    <td>&nbsp;</td>
  </tr>
</table>
</body>
</html>

<?
include('rodape.php');
?>