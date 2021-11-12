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

<style type="text/css">
<!--

body {
	   SCROLLBAR-ARROW-COLOR: blue;
	   SCROLLBAR-BASE-COLOR: #FFC082
	   
}

.style21 {font-size: 10px}
.style22 {font-size: 12px}
.style25 {color: #FF6600}
.style26 {color: #FF6600; font-size: 12px;}
.style27 {
	color: #FFFFFF;
	font-size: 14px;
}

.style4 {
	font-size: 11px;
	font-weight: bold;
}


    A:link,a:active,a:visited{ color:#000000; text-decoration:none; }
    A:hover{ color:#FF3333; text-decoration:none; }
	A:visited {color:#0000cc;}
	A:active {color:#0000cc;}

	A.clase1:visited {color:#000000;}
	A.clase1:active {color:#000000;} 
	A.clase1:link {color:#000000}
	A.clase1:hover {color:#FFFFFF}

-->
</style>

</head>

<script type="text/javascript" src="jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="fadeslideshow.js"></script>

<body style=" margin-left: 0px;  margin-top: 0px;  margin-right: 0px;  margin-bottom: 0px; " bgcolor="#FFFFFF">
<table width="100%" border="0">
  <tr>
    <td width="1%" align="center" valign="top">
	        <?
	        include('lay_menu.php');
	        ?>
      <br>
      <img src="graphics/baner_vertical.PNG" width="141" height="580"> <br>
      <table width="128" border="0">
        <tr>
          <td width="130" align="center"> <b>N&ordm; de visitas</b> </td>
        </tr>
        <tr>
          <td align="center"><?=$qtd_ivisita;?></td>
        </tr>
    </table></td>
    <td width="87%" valign="top" bgcolor="#FFFFFF"><table width="100%" border="0" cellpadding="0" cellspacing="1" bgcolor="#FFFFFF">
        <tr>
          <td width="12" height="220" align="center"><p>&nbsp;</p></td>
          <td width="404" valign="top" bgcolor="#FFFFFF"><span class="style3 style22">
		  </span>
            <table height="219" border="0" align="center" cellpadding="0" cellspacing="0">
              <tr>
                <td width="365" height="74"><img src="graphics/criar_vitrine.png" width="364" height="60"></td>
              </tr>
              <tr>
                <td height="72"><img src="graphics/criar_anuncio.png" width="364" height="60"></td>
              </tr>
              <tr>
                <td height="71"><img src="graphics/criar_curriculo.png" width="364" height="60"></td>
              </tr>
            </table>          </td>
          <td width="401" align="center" valign="top"> <span class="style3"><span class="style21"></span></span> 
              <?
    if ($browser != "MS Internet Explorer"){
    ?>
              <img src='graphics/px1.gif' width='30' height='5'/>
              <?
	 }
	 ?>
              <table border="0" align="center">
                <tr>
                  <td>                      <?
                  
                    // Resgata a Sessao
					session_start();
					$_SESSION["servletjs2"] = '20$$20';

                  
		  include("destaq_forum.php");
		  ?>                      <div align="center"></div>                    <div align="center"></div></td>
                </tr>
              </table>
              <img src='graphics/px1.gif' width='30' height='1'/>
              <table border="0">
                <tr>
                  <td><a href="vitrine/vitrine.php"><img src="graphics/logo10_branco.png" width="248" height="90" border="0"> </a></td>
                </tr>
            </table></td>
        </tr>
      </table>
        <table width="100%" border="0" cellpadding="0" cellspacing="1" bgcolor="#FFFFFF">
          <tr>
            <td align="center" valign="top"><table width="100%" border="0">
                <tr>
                  <td align="center" bgcolor="#FF9933"><font color="#FFFFFF" size="2" face="Verdana"><b>Ofertas do Portal da Troca</b></font></td>
                </tr>
              </table>
                <?
				include("destaque_mercado.php");
				?>
                <br>
                <img src="graphics/px1.gif" width="1" height="1"></td>
          </tr>
        </table>
        <table width="100%" border="0" cellpadding="0" cellspacing="1" bgcolor="#FFFFFF">
          <tr>
            <td width="20%" align="center" valign="top"><img src="graphics/HANDSHAK.gif" width="140" height="100"></td>
            <td width="31%" valign="top" bgcolor="#FFFFFF"><p class="style26"><a href="mais_info.php" class="style8 style25"><font face="Verdana"><b>Otimos Negocios depende de voc&ecirc; !!! </b></font></a></p>
                <p class="style3  style22"><font face="Verdana"><a href="mais_info.php"><img src="graphics/e01.gif" width="13" height="16" border="0"></a><b>Boas Dicas</b><br>
                      <br>
                      <img height="5" src="graphics/e_punct_b.gif" width="5">&nbsp;&nbsp;Vender ou gerenciar seu pr&oacute;prio neg&oacute;cio requer uma grande dose de persist&ecirc;ncia. Os obst&aacute;culos aparecem freq&uuml;entemente em sua frente por&eacute;m a forma como s&atilde;o ultrapassados determinam o n&iacute;vel de sucesso que alcan&ccedil;ar&aacute;. As pessoas mais bem sucedidas em qualquer ramo de neg&oacute;cios aprenderam como lidar com os obst&aacute;culos que se apresentam em seu caminho. Elas procuram por novas solu&ccedil;&otilde;es, persistem e nunca desistem. <br>
                      <br>
                      <a href="mais_info.php" class="style8  style25"><b>Mais Informa&ccedil;&otilde;es</b></a> </font></p></td>
            <td width="49%"><div align="center">
                <table width="200" border="0">
                  <tr>
                    <td>
                      <!--  -->
                    <iframe frameborder="0" width="300" height="250" marginwidth="0" marginheight="0" src="http://www.google.com/uds/modules/elements/newsshow/iframe.html?topic=h&rsz=small&format=300x250"></iframe>
                  
                    </td>
                  </tr>
                </table>
            </div></td>
          </tr>
          <tr>
            <td height="154" align="center" valign="top"><img src="graphics/correios_sedex.gif" width="145" height="40"><br>
                <img src="graphics/p_pagseguro.gif" width="142" height="88"></td>
            <td valign="top"><p class="style3 style8"><span class="style7"><a href="mais_info.php"><span class="style22"><img height="16" src="graphics/e01.gif" width="13" border="0"></span></a><span class="style9 style22"><font face="Verdana"><b>SERVI&Ccedil;OS DOS CORRERIOS</b></font> <b><font face="Verdana"><br>
                </font></b><font face="Verdana"><br>
                <img height="5" src="graphics/e_punct_b.gif" width="5">&nbsp;&nbsp;</font></span></span><font face="Verdana"><span class="style10  style22">Trabalhamos com os servi&ccedil;os dos Correios nossos produtos s&atilde;o despachados pelo correio com seguro de entrega garantida, nos Servi&ccedil;os SEDEX, SEDEX 10, com rastreamento pelo pr&oacute;prio usu&aacute;rio. <br>
                <br>
                <span class="style3  style22"><a href="http://www.correios.com.br/" class="style8  style25"><b>Mais Informa&ccedil;&otilde;es</b></a></span> </span></font></p></td>
            <td width="49%"><div align="center">
                <table width="200" border="0">
                  <tr>
                    <td align="center"><img src="graphics/banner_herbalife.gif" width="150" height="70"></td>
                  </tr>
                </table>
            </div></td>
          </tr>
        </table>
        <div align="center">
          <table width="100%" border="0" cellpadding="0" cellspacing="0">
            <tr>
              <td bgcolor="#FF9933"><div align="center"><b><font color="#FFFFFF">Destaques Lojas Virtuais</font></b> </div></td>
            </tr>
          </table>
          <table width="100%" border="0" cellpadding="0" cellspacing="0">
            <tr>
              <td><div align="center">
                <?
	  include('destaque_loja.php');
	  ?>
              </div></td>
            </tr>
          </table>
          <br>
</div></td>
    <td width="1%" valign="top"><div align="center">
	
	<!-- Inicio Banner Tempo Agora - http://www.tempoagora.com.br -->
<iframe src='http://www.tempoagora.com.br/selos/custom/selo_3dias.php?cid=SaoPaulo-SP,Caieiras-SP,FrancodaRocha-SP,Santos-SP,&height=155&cor=ff9900' name='tempoagora_custom_3dias' width='149' marginwidth='0' height='155' marginheight='0' scrolling='No' frameborder='0' id='tempoagora_custom_3dias'></iframe>
<!--Fim Banner Tempo Agora - http://www.tempoagora.com.br -->			  
<br>
    <img src="graphics/px1.gif" width="8" height="10"><br>
	
      <?
	        include('lay_menu2.php');
	        ?>
    <img src="graphics/px1.gif" width="8" height="10"><br>
	<?
	include('destaque.php');
	?>
    </div></td>
  </tr>
</table>
</body>
</html>

<?
include('rodape.php');
?>