<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">

<html>
<head>
    <title><?=$Titulo;?></title>
    <link rel="shortcut icon" href="graphics/favicon.ico"/>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
    <link rel="stylesheet" href="estilo1.css" type="text/css">
    <link rel="stylesheet" href="andreas07.css" type="text/css" media="screen,projection" />

		<script type="text/javascript">
                  
		//relogio
		
		
		function startTime()
		{
		var today=new Date()
		var h=today.getHours()
		var m=today.getMinutes()
		var s=today.getSeconds()
		// add a zero in front of numbers<10
		m=checkTime(m)
		s=checkTime(s)
		document.getElementById('txt').innerHTML=h+":"+m+":"+s
		t=setTimeout('startTime()',500)
		}
		
		function checkTime(i)
		{
		if (i<10) 
		  {i="0" + i}
		  return i
		}
		</script>

</head>
<body style=" margin-left: 0px;  margin-top: 0px;  margin-right: 0px;  margin-bottom: 0px; " onload="startTime()">
<table width="100%" height="602" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td valign="top">


<table border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td width="174" align="center" valign="top" ><div align="center"><img src="graphics/lixo1.png" ></div></td>
        <td width="603" valign="bottom" background="graphics/banner_sys1b.png"><table width="510" height="93" border="0" cellpadding="0" cellspacing="0">
          <tr>
            <td width="358" height="59"><div align="center">
                <table width="319" height="47" border="0">
                  <tr>
                    <td><!-- <img src="graphics/banner.gif" width="320" height="47">--></td>
                  </tr>
                </table>
            </div></td>
            <td width="152">&nbsp;</td>
          </tr>
          <tr>
            <td height="27" valign="bottom"><table width="304" border="0" cellpadding="0" cellspacing="0">
 

                <tr>
                  <td height="24" valign="bottom">&nbsp;</td>
                  <td valign="bottom">&nbsp;</td>
                  <td valign="bottom">&nbsp;</td>
                  <td valign="bottom">&nbsp;</td>
                  <td valign="bottom"><img src="graphics/espacador_tb.gif" width="15" height="10"/></td>
                </tr>

            </table></td>
            <td align="right" valign="center">
			
			<a href="<?=$progr_0;?>"><img src="graphics/bot_home1.png" width="17" height="17" alt="Ir para a Pagina Inicial" border="0"/></a>
<a href="javascript:history.go(-1);"><img src="graphics/bot_back1.png" width="17" height="17" alt="Voltar Evento Anterior" border="0"/></a>
<a href="javascript:history.go(+1);"><img src="graphics/bot_hist1.png" width="17" height="17" alt="Ir Proximo Evento" border="0"/></a>
<a href="javascript:;" onClick="MM_openBrWindow('<?=$progr_20;?>','','width=315,height=100')"><img src="graphics/bot_car1.png" width="17" height="17" alt="Meu Carrinho" border="0"/></a>
<a href="<?=$progr_13;?>"><img src="graphics/bot_fale1.png" width="17" height="17" alt="Fale Connosco" border="0"/></a>

			
			&nbsp;</td>
          </tr>
        </table></td>
        <td width="201" bgcolor="#FC9107">
        
		
<div align="center">
          <table width="201" border="0" cellpadding="0" cellspacing="0" background="graphics/area_user2.png">
            <tr>
              <td width="272">&nbsp;</td>
            </tr>
            <tr>
              <td>
			  
			  
			  <table width="198" height="74" border="0" cellpadding="0" cellspacing="0">
			  
			  
              <form name="form1" method="post" autocomplete="off" action="logar.php?acao=logar">


									

                <tr>
                  <td width="268"><div align="left"><span class="style1">
				  <img src="graphics/px1.gif" width="10" height="30"><span class="style3">login.</span>:<img src="graphics/px1.gif" width="7" height="8"></span>
                        <input type="text" name="log_name_c" style="height:15px; width:90px ">
                        <a href="lembra/senha_4i.php"><img src="graphics/ajud-1.png" width="13" height="13" alt="Esqueci minha Senha" border="0"></a>

                  </div></td>  
                  
                </tr>
                <tr>
                  <td><div align="left"><span class="style4">
				  <img src="graphics/px1.gif" width="10" height="1">senha.:</span>
                        <input type="password" name="pwd" style="height:15px; width:90px ">
                  </div></td>
                  </tr>



                <tr>
                  <td height="20" align="right" valign="top"><img src="graphics/px1.gif" width="8" height="1"><input type=image name="Entrar" src="graphics/enter.png" width="58" height="20"><img src="graphics/px1.gif" width="13" height="1"></td>
                  </tr>


                <tr>
                  <td height="21">&nbsp;</td>
                  </tr>
                  </form>
              </table>
			  
			  
			  </td>
            </tr>
          </table>
        </div>


		</td>
        <td width="34" bgcolor="#FC8704"><img src="graphics/espacador_tb.gif" width="15" height="10"></td>
      </tr>
      
	  


    </table>

<table width="100%" height="23" border="0" cellpadding="0" cellspacing="0">

  <tr>
    <td height="23" valign="top" bgcolor="#FC9107">
	
	
		
			  <div id="nav">
<ul>
<li id="current"><a href="#">Home</a></li>
<li ><a href="teste2.html">Forum</a></li>
<li><a href="#">Programação</a></li>
<li><a href="#">Portal da Troca</a></li>
<li><a href="#">Loja</a></li>
<li><a href="#">Vender</a></li>
<li><a href="#">Emprego</a></li>
<li><a href="#">Cadastre_se</a></li>
<li><a href="#">Bate-Papo</a></li>
<li><a href="#">Downloads</a></li>
<li><a href="#">Sistemas</a></li>
<li><a href="#">Contato</a></li>
</ul>
</div>	</td>
</tr>	
</table>



<table width="100%" height="139" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td valign="top" bgcolor="#FDDFC5"><div align="center">
	
	
<table width="100%" height="100" border="0">
  <tr>
  
    <td width="139" height="220" align="center" valign="top"><p><img src="graphics/cartoon_edson.png" width="110" height="163"></p>
    <p><a href="http://www.herbalifeww.com/br/"><img src="graphics/b_buy.png" width="121" height="28" border="0"/></a></p></td>
    <td width="410" valign="top"><span class="style3 style22"><strong>Algumas Dicas do WebMaster <br>
PENSE NISSO <br>
    </strong>&Eacute; poss&iacute;vel viver com menos sofrimento seguindo os ensinamentos dos que conseguiram, eles dizem: &quot;A atitude s&aacute;bia consiste em estar no mundo sem ser do mundo e em possuir coisas &uacute;teis, necess&aacute;rias e belas sem ser aprisionado por elas. &Eacute; preciso saber que as coisas s&atilde;o passageiras, os prazeres duram pouco, e tudo se modifica. Este e o modo de ser do Universo, o fluxo e refluxo da vida, e o poder do tempo de alterar o padr&atilde;o de existencia. O Sabio se ajusta a esse ritimo e aprende como e quando soltar ou reter, mantendo sua abilidade e seu equil&iacute;brio internos&quot;. Reflita sobre isso. <br>
    </span>
      <span class="style3 style22">    </span></td>
    <td width="430" align="center" valign="top"> <table border="0">
      <tr>
        <td><div align="center"><img src="graphics/banner3.gif" width="393" height="46">        </div></td>
        </tr>
    </table>      
    <span class="style3"><strong><span class="style21"></span></strong></span>
    
 	   <img src='graphics/px1.gif' width='30' height='5'>

      <table border="0">
        <tr>
          <td><div align="center">
		  
		  <?
		  include("destaq_forum.php");
		  ?>
		  
		  </div></td>
        </tr>
      </table>    
      <img src='graphics/px1.gif' width='30' height='20'>
      <table width="200" border="0">
        <tr>
          <td align="center"><img src="graphics/Pin_lunix.png" width="109" height="110"></td>
          <td align="center"><img src="graphics/phpmysql.JPG" width="200" height="116"></td>
        </tr>
      </table></td>
  </tr>
</table>
<table width="100%" border="0">
  <tr>
    <td height="54" align="center" valign="top"><table width="100%" border="0">
      <tr>
        <td align="center" bgcolor="#FF9933"><span class="style3 style22 style27"><strong>Ofertas do Portal da Troca</strong></span></td>
      </tr>
    </table>
    <?
				include("destaque_mercado.php");
				?>
    <br>
    <img src="graphics/px1.gif" width="20" height="20"></td>
  </tr>
</table>
<table width="100%" height="10" border="0">
  <tr>
    <td width="20%" height="229" align="center" valign="top"><img src="graphics/HANDSHAK.gif" width="132" height="92"></td>
    <td width="31%" valign="top" bgcolor="#FFFFFF"><p class="style26"><a href="mais_info.php" class="style25 style8"><strong>Otimos Negocios depende de voc&ecirc; !!! </strong></a></p>
        <p class="style3 style22"><a href="mais_info.php"><img src="graphics/e01.gif" width="13" height="16" border="0"></a><strong>Boas Dicas</strong><br>
            <br>
            <img height="5" src="graphics/e_punct_b.gif" width="5">&nbsp;&nbsp;Vender ou gerenciar seu pr&oacute;prio neg&oacute;cio requer uma grande dose de persist&ecirc;ncia. Os obst&aacute;culos aparecem freq&uuml;entemente em sua frente por&eacute;m a forma como s&atilde;o ultrapassados determinam o n&iacute;vel de sucesso que alcan&ccedil;ar&aacute;. As pessoas mais bem sucedidas em qualquer ramo de neg&oacute;cios aprenderam como lidar com os obst&aacute;culos que se apresentam em seu caminho. Elas procuram por novas solu&ccedil;&otilde;es, persistem e nunca desistem. <br>
            <br>
            <a href="mais_info.php" class="style8 style25">Mais Informa&ccedil;&otilde;es</a> </p></td>
    <td width="49%"><div align="center">
      <table width="200" border="0">
        <tr>
          <td>
		  
		  <iframe frameborder="0" width="300" height="250" marginwidth="0" marginheight="0" src="http://www.google.com/uds/modules/elements/newsshow/iframe.html?topic=h&rsz=small&format=300x250"></iframe>
		  
		  </td>
        </tr>
      </table>
    </div></td>
  </tr>
  <tr>
    <td height="134" align="center" valign="top"><img src="graphics/correios_sedex.gif" width="145" height="40"><br>
        <img src="graphics/p_pagseguro.gif" width="142" height="88"></td>
    <td valign="top"><p class="style3 style8"><span class="style7"><a href="mais_info.php"><span class="style22"><img height="16" src="graphics/e01.gif" width="13" border="0"></span></a><span class="style9 style22"><strong>SERVI&Ccedil;OS DOS CORRERIOS</strong> <br>
                <br>
                <img height="5" src="graphics/e_punct_b.gif" width="5">&nbsp;&nbsp;</span></span><span class="style10 style22">Trabalhamos com os servi&ccedil;os dos Correios nossos produtos s&atilde;o despachados pelo correio com seguro de entrega garantida, nos Servi&ccedil;os SEDEX, SEDEX 10, com rastreamento pelo pr&oacute;prio usu&aacute;rio. <br>
                <br>
                <span class="style3 style22"><a href="http://www.correios.com.br/" class="style8 style25">Mais Informa&ccedil;&otilde;es</a></span>                </span></p>    </td>

    <td width="49%"><div align="center">
      
      <table width="200" border="0">
        <tr>
          <td align="center"><img src="graphics/banner_herbalife.gif" width="150" height="70"></td>
        </tr>
      </table>
    </div>
	
	
		
	</td>


  </tr>
  
  
</table>
      <table width="100%" height="17" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td width="16%" height="17" valign="top" bgcolor="#FFB368"><div align="center" class="style3"><?=$createby;?></div></td>
        </tr>
      </table>      
      <table width="100%" height="50" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td width="100%" height="50" align="center" bordercolor="#FFFFFF" bgcolor="#FF850E">
		  
		  <DIV align=center><span class="style15"><STRONG><font color="#FFFFFF">iSysmp.com</font></STRONG><font color="#FFFFFF"> - Portal da Troca - Forum - Programa&ccedil;&atilde;o PHP - Discurs&atilde;o - e muito mais <br>
  Todo conteúdo deste site é protegido pela Lei 9.610, de 
            Fevereiro de 1998.<BR>
            <A class=linkbranco href="<?=$progr_0;?>">Home</A> |
			<A class=linkbranco href="<?=$progr_11;?>">Sistema</A> |
			<A class=linkbranco href="<?=$progr_5;?>">Vender</A> |
			<A class=linkbranco href="<?=$progr_1;?>">Forum</A> |
			<A class=linkbranco href="<?=$progr_4;?>">Loja Virtual</A> |
			<A class=linkbranco href="<?=$progr_25;?>">PHP</A> |
			<A class=linkbranco href="<?=$progr_13;?>">Fale Conosco </A> </font></span>
		    <DIV class=invisivel>
              <CENTER class="style14"></CENTER>
            </DIV>
            </DIV>
            <DIV class=invisivel>
            <CENTER class="style14">
                    <font color="#FFFF00"><span class="style15"><FONT face=verdana size=1>Criado por iSysmp.com</FONT></span></font>
            </CENTER>
</DIV>
		  
		  
		  </td>
        </tr>
      </table>      </td>
  </tr>
</table>

</body>
</html>
