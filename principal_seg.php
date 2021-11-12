<?
/*
 -----------------------------------------
 Desenvolvido por...: Edson de Araujo
 Finalidade.........: Loja Virtual
 Criado em Data.....: 07/12/2007
 Ultima Atualização : 07/07/2008 

 DEUS SEJA LOUVADO
 -----------------------------------------
*/
include('aguarde.php');

include('titulo.php');

?>

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

<script type="text/javascript">

// Automatico
var mygallery=new fadeSlideShow({
	wrapperid: "fadeshow1", //ID of blank DIV on page to house Slideshow
	dimensions: [340, 170], // Tamanho da imagen
	imagearray: [
		["img/php.png",                "sistema/layout.php?entra_no_web1=at2", "",  "Programação de Sites em PHP MySQL SQLServer com autenticação rotinas confiavés e criptografadas"],
		["img/interrogacao_forum.jpg", "forum/layout.php?entra_no_web1=at2", "",  "Tire suas duvidas Programação, Analise e Consultoria via Forum"],
		["img/programacao.jpg",        "programacao/layout.php?entra_no_web1=at2", "",  "Ajuda na Criação de rotinas simples para solucionar problemas do seu sites e sistemas!"],
		["img/sistemas.jpg",           "sistema/layout.php?entra_no_web1=at2", "",  "Desenvolvimento de Sistemas ERP Web e soluções para empresas!"],
		["img/php1.jpg",               "php/layout.php?entra_no_web1=at2", "",  "Dicas e macetes da linguagem Web PHP/MySQL Apache, rotina e Downloads!"],
		["img/Cartao_Nata.png", ]
		
 //<--no trailing comma after very last image element!
	],
	displaymode: {type:'auto', pause:7000, cycles:0, wraparound:false},
	persist: false, //remember last viewed slide and recall within same session?
	fadeduration: 500, //Tempo da mudanca)
	descreveal: "always",
	togglerid: "fadeshow1toggler"
})

</script>


<body style=" margin-left: 0px;  margin-top: 0px;  margin-right: 0px;  margin-bottom: 0px; " bgcolor="#FFFFFF">
<table width="100%" border="0" cellpadding="0" cellspacing="1">
  <tr>
    <td height="763" valign="top" bgcolor="#FFFFFF"><div align="center">
	
      <table width="148" height="394" border="0" cellpadding="0" cellspacing="1">
        <tr>
          <td width="146" height="743" bgcolor="#FFFFFF"><div align="center">
		  
            <?
	        include('lay_menu.php');
	        ?>
            <br>
            <img src="graphics/baner_vertical.PNG" width="140" height="580">
			<br>
			<table width="128" border="0">
              <tr>
                <td width="130" align="center"> <b>N&ordm; de visitas</b> </td>
              </tr>
              <tr>
                <td align="center"><?=$qtd_ivisita;?></td>
              </tr>
            </table>
            <br>
            <img src="graphics/px1.gif" width="10" height="10">          </div></td>
        </tr>
      </table>
</div></td>
    <td width="87%" valign="top" bgcolor="#FFFFFF"><table width="100%" border="0" cellpadding="0" cellspacing="1" bgcolor="#FFFFFF">
      <tr>
        <td width="112" align="center" valign="top"><p>&nbsp;</p></td>
        <td width="340" valign="top" bgcolor="#FFFFFF"><span class="style3 style22">
		<br>
		                <!-- Automatico -->
                <div id="fadeshow1"></div>
                <div id="fadeshow1toggler" style="width:340px; text-align:center; margin-top:10px"> <a href="#" class="prev"><font size="2"color="#6699CC">&lt;&lt; Anterior</font></a><font size="2"color="#6699CC">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </font> <a href="#" class="next"><font size="2"color="#6699CC"> Proximo &gt;&gt;</font></a> </div>

		
		
		 </span></td>
        <td width="408" align="center" valign="top"> <span class="style3"><span class="style21"></span></span>
		<br>
            <?
    if ($browser != "MS Internet Explorer"){
    ?>
            <img src='graphics/px1.gif' width='30' height='5'/>
            <?
	 }
	 ?>
            <table border="0">
              <tr>
                <td><div align="center">
                    <?
		  include("destaq_forum.php");
		  ?>
                </div></td>
              </tr>
            </table>
            <img src='graphics/px1.gif' width='30' height='3'/>
            <table border="0">
              <tr>
              <td> <img src="graphics/logo10_branco.png" width="233" height="76"></td>  
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
                  <!--
                    <iframe frameborder="0" width="300" height="250" marginwidth="0" marginheight="0" src="http://www.google.com/uds/modules/elements/newsshow/iframe.html?topic=h&rsz=small&format=300x250"></iframe>
                  -->  
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
	  <?
	  include('destaque_loja.php');
	  ?>
    </div></td>
  <td>oi</td>
   
  </tr>
 </table>
</body>
</html>
<?

include('rodape.php');
?>
