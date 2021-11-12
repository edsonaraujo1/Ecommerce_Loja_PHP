<?
include_once('config.php');

if (!empty($alte_url_pag)){

?>

<table width="141" border="0" cellpadding="0" cellspacing="1">
  <tr>
    <td width="145" bgcolor="#FF9900"><table width="141" border="0" cellpadding="0" cellspacing="1">
      <tr>
        <td width="141" height="19" bgcolor="#FF9900"><img src="graphics/px1.gif" width="10" height="10"><b><font color="#FFFFFF" size="2" face="Verdana">Serviços</font></b></td>
      </tr>
      <tr>
        <td height="102" valign="top" bgcolor="#FFFFFF">
          <table width="141" border="0">
            <tr>
              <td width="163"><img src="graphics/setinha_menu.gif" width="9" height="9"><font size="2" face="Verdana"><img src="graphics/px1.gif" width="5" height="10"><a href="inicio.php">Principal </a></font></td>
            </tr>
            <tr>
              <td><img src="graphics/setinha_menu.gif" width="9" height="9"><font size="2" face="Verdana"><img src="graphics/px1.gif" width="5" height="10"><a href="forum/forum.php">Forum </a></font></td>
            </tr>
            <tr>
              <td><img src="graphics/setinha_menu.gif" width="9" height="9"><font size="2" face="Verdana"><img src="graphics/px1.gif" width="5" height="10"><a href="comercio/comercio.php">Comprar </a></font></td>
            </tr>
            <tr>
              <td><img src="graphics/setinha_menu.gif" width="9" height="9"><font size="2" face="Verdana"><img src="graphics/px1.gif" width="5" height="10"><a href="mercado/produto.php">Vender </a></font></td>
            </tr>
            <tr>
              <td><img src="graphics/setinha_menu.gif" width="9" height="9"><font size="2" face="Verdana"><img src="graphics/px1.gif" width="5" height="10"><a href="loja/loja.php">Loja </a></font></td>
            </tr>
            <tr>
              <td><img src="graphics/setinha_menu.gif" width="9" height="9"><font size="2" face="Verdana"><img src="graphics/px1.gif" width="5" height="10"><a href="emprego/emprego.php">Empregos </a></font></td>
            </tr>
            <tr>
              <td><img src="graphics/setinha_menu.gif" width="9" height="9"><font size="2" face="Verdana"><img src="graphics/px1.gif" width="5" height="10"><a href="cadastro/cadastro.php">Cadastre-se </a></font></td>
            </tr>
            <tr>
              <td><img src="graphics/setinha_menu.gif" width="9" height="9"><font size="2" face="Verdana"><img src="graphics/px1.gif" width="5" height="10"><a href="batepapo/bate_papo.php">Bate-Papo </a></font></td>
            </tr>
            <tr>
              <td><img src="graphics/setinha_menu.gif" width="9" height="9"><font size="2" face="Verdana"><img src="graphics/px1.gif" width="5" height="10"><a href="download/download.php">Downloads </a></font></td>
            </tr>
            <tr>
              <td><img src="graphics/setinha_menu.gif" width="9" height="9"><font size="2" face="Verdana"><img src="graphics/px1.gif" width="5" height="10"><a href="fale/fale.php">Contato </a></font></td>
            </tr>
        </table></td>
      </tr>
    </table></td>
  </tr>
</table>

<?
}else{

header('Location:index.php');

	
}
?>
