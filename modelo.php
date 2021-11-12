<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">

<html>
<head>
    <title>Modelo</title>
    <link rel="shortcut icon" href="graphics/favicon.ico"/>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<style type="text/css">
<!--
.style1 {
	font-family: Arial, Helvetica, sans-serif;
	font-weight: bold;
	font-size: 14px;
}
body {
	background-image:  url(graphics/bg.gif);
}
.style3 {font-size: 12px}
.style4 {font-family: Arial, Helvetica, sans-serif; font-weight: bold; font-size: 12px; }
.style5 {
	color: #FF9933;
	font-weight: bold;
}
.style7 {font-size: 12px; font-weight: bold; }
.style8 {color: #FF9933}
.style9 {color: #000000}
.style10 {font-size: 12px; color: #000000; }
.style12 {font-size: 12px; color: #FF9933; }
.style15 {
	font-family: Arial;
	font-size: 10px;
	font-weight: bold;
}
.style17 {
	color: #FFFFFF;
	font-size: 10px;
}
.style18 {font-size: 9px}
.style19 {
	font-family: Arial;
	font-size: 12px;
	font-weight: bold;
	color: #FF0000;
}	

.style20 {font-size: 13px}

-->
</style>

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
<body leftmargin=0 topmargin=0 marginheight="0" marginwidth="0" onload="startTime()">
<table width="100%" height="602" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td width="135" align="center" valign="top" background="graphics/img4y_seg.PNG"><div align="center"><img src="graphics/port_3.gif" width="135" height="99"></div></td>
        <td width="404" valign="bottom" background="graphics/img4y_seg.PNG"><table width="200" border="0" cellpadding="0" cellspacing="0">
          <tr>
          
          
            <td><a href="<?=$progr_13;?>"><img src="graphics/botoes1.png" width="87" height="16" border="0"/></a></td>
            <td><a href="<?=$progr_14;?>"><img src="graphics/botoes2.png" width="87" height="16" border="0"/></a></td>
            <td><a href="<?=$progr_15;?>"><img src="graphics/botoes3.png" width="87" height="16" border="0"/></a></td>
            <td><a href="<?=$progr_16;?>"><img src="graphics/botoes4.png" width="87" height="16" border="0"/></a></td>

          </tr>
        </table></td>
        <td width="230" background="graphics/img4y_seg.PNG">
		
		
		<div align="center">
          <table width="201" border="0" cellpadding="0" cellspacing="0" background="graphics/area_user2.png">
            <tr>
              <td width="272">&nbsp;</td>
            </tr>
            <tr>
              <td>
			  
			  
			  <table width="198" height="74" border="0" cellpadding="0" cellspacing="0">
			  
			  
              <form name="form1" method="post" action="logar.php?acao=logar">
              

                <tr>
                  <td width="268"><div align="left"><span class="style1">
				  <img src="graphics/px1.gif" width="8" height="1"><span class="style3">login.</span>:<img src="graphics/px1.gif" width="9" height="8"></span>
                        <input type="text" name="log_name_c" style="height:14px; width:90px ">
                        <a href="<?=$progr_0;?>"><img src="graphics/ajud-1.png" width="13" height="13" border="0"></a>

                  </div></td>  
                  
                </tr>
                <tr>
                  <td><div align="left"><span class="style4">
				  <img src="graphics/px1.gif" width="10" height="1">senha.:</span>
                        <input type="password" name="pwd" style="height:14px; width:90px ">
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
      </tr>
      <tr>
        <td align="left" bgcolor="#FFB368"><div align="left" class="style15"><img src="graphics/px1.gif" width="10" height="1"><span class="style17">1&nbsp;&nbsp;usu&aacute;rio(s) on-line</span> </div></td>
        <td bgcolor="#FFB368"><span class="style1"> <img src="graphics/px1.gif" width="20" height="5"> <span class="style3">
		

		Boa Tarde, hoje e segunda-feira, 05 de outubro de 2009 
		
		 </span></span></td>
        <td bgcolor="#FFB368"><div align="center" class="style4">


		<a href="<?=$progr_0;?>"><img src="graphics/bot_home1.png" width="17" height="17" border="0"/></a>
		<a href="javascript:history.go(-1);"><img src="graphics/bot_back1.png" width="17" height="17" border="0"/></a>
		<a href="javascript:history.go(+1);"><img src="graphics/bot_hist1.png" width="17" height="17"border="0"/></a>
		<a href="<?=$progr_18;?>"><img src="graphics/bot_car1.png" width="17" height="17"border="0"/></a>
		<a href="<?=$progr_11;?>"><img src="graphics/bot_fale1.png" width="17" height="17"border="0"/></a>

		  <div id="txt"></div>
		
		</div></td>
      </tr>
    </table>
    
      <table width="102%" height="182%" border="0">
      
        <tr>
          <td width="145" height="873" align="center" valign="top"><table width="126" border="0" cellpadding="0" cellspacing="0">

		<tr>
		<td width="126"><a href="<?=$progr_0;?>"><img src="graphics/home.png" width="120" height="29" border="0"/></a></td>
		</tr>
		<tr>
		<td><a href="<?=$progr_1;?>"><img src="graphics/forum.png" width="120" height="29" border="0"/></a></td>
		</tr>
		<tr>
		<td><a href="<?=$progr_2;?>"><img src="graphics/programacao.png" width="120" height="29" border="0"/></a></td>
		</tr>
		<tr>
		<td><a href="<?=$progr_3;?>"><img src="graphics/portal.png" width="120" height="29" border="0"/></a></td>
		</tr>
		<tr>
		<td><a href="<?=$progr_4;?>"><img src="graphics/loja.png" width="120" height="29" border="0"/></a></td>
		</tr>
		<tr>
		<td><a href="<?=$progr_5;?>"><img src="graphics/vender.png" width="120" height="29" border="0"/></a></td>
		</tr>
		<tr>
		<td><a href="<?=$progr_6;?>"><img src="graphics/empregos.png" width="120" height="29" border="0"/></a></td>
		</tr>
		<tr>
		<td><a href="<?=$progr_7;?>"><img src="graphics/cadastro.png" width="120" height="29" border="0"/></a></td>
		</tr>
		<tr>
		<td><a href="<?=$progr_8;?>"><img src="graphics/downloads.png" width="120" height="29" border="0"/></a></td>
		</tr>
		<tr>
		<td><a href="<?=$progr_9;?>"><img src="graphics/enquete.png" width="120" height="29" border="0"/></a></td>
		</tr>
		<tr>
		<td><a href="<?=$progr_10;?>"><img src="graphics/webs.png" width="120" height="29" border="0"/></a></td>
		</tr>

            <tr>
              <td><span class="style18">.</span></td>
            </tr>
            <tr>
              <td align="center"> <strong>N&ordm; de visitas </strong> </td>
            </tr>
            <tr>
              <td align="center"><?=$qtd_ivisita;?></td>
            </tr>
          </table>
            <table width="130" height="360" border="0">
            
              <tr>
                <td width="124" align="center" bgcolor="#FFFFFF"><div align="center"><a href="<?=$progr_4;?>"><img src="graphics/banner01.gif" width="124" height="82" border="0"></a></div></td>
              </tr>
              <tr>
                <td height="253" align="center" bgcolor="#FFFFFF"><p><img src="graphics/temphtml.gif" width="124" height="119"></p>
                <p class="style3"><strong>Criamos o Seu Site </strong><br>
Desenvolvimento de site e sistema Web para sua empresa, sistemas ERP integrado com banco de dados, consulte-nos </p>
                <p>&nbsp;</p></td>
              </tr>
              
              <tr>
			  <td>
			  <p><img src="graphics/twitty.png" width="124" height="82" border="0"></p>
			  <p><p class="style3"><strong>Estamos no twitty </strong><br>
Siga-nos veja promoções e dicas de usuario compradores e amigos.</p>
                </p>
			  </td>
			  </tr>
              
          </table>            
          <br>          </td>
          <td width="804" valign="top" bgcolor="#FFFFFF">
		  
		  
		  
		  
		  
		  Conteudo Site
		  ......
		  
		  <table>
                <td height="6" class="corpo esquerda" > <h3><br>
                    <strong><font color="#0000FF">Caracter&iacute;sticas de vendedores 
                    de sucesso</font></strong> </h3>
                  <p><font color="#0000FF"><strong><font size="2">1. S&atilde;o 
                    persistentes.</font></strong></font><font size="2"><br>
                    Vender ou gerenciar seu pr&oacute;prio neg&oacute;cio requer 
                    uma grande dose de persist&ecirc;ncia. Os obst&aacute;culos 
                    aparecem freq&uuml;entemente em sua frente por&eacute;m a 
                    forma como s&atilde;o ultrapassados determinam o n&iacute;vel 
                    de sucesso que alcan&ccedil;ar&aacute;. As pessoas mais bem 
                    sucedidas em qualquer ramo de neg&oacute;cios aprenderam como 
                    lidar com os obst&aacute;culos que se apresentam em seu caminho. 
                    Elas procuram por novas solu&ccedil;&otilde;es, persistem 
                    e nunca desistem. </font></p>
                  <p><font color="#0000FF" size="2"><strong>2. Bons vendedores 
                    sabem definir objetivos. </strong></font><font size="2"><br>
                    Bons vendedores sabem o que querem realizar e como planejar 
                    para alcan&ccedil;ar seu objetivo. Eles definem os objetivos 
                    de uma forma espec&iacute;fica, motivadora, vi&aacute;vel 
                    embora desafiante e com datas bem definidas. Eles visualizam 
                    o objetivo, determinam como ser&aacute; alcan&ccedil;ado e 
                    executam a&ccedil;&otilde;es diariamente para alcan&ccedil;a-los.</font></p>
                  <p><font color="#0000FF" size="2"><strong>3. Bons vendedores 
                    sabem fazer as perguntas-chaves</strong></font><font size="2"><br>
                    Os melhores vendedores fazem v&aacute;rias perguntas aos seus 
                    clientes (atuais e futuros) para determinar sua situa&ccedil;&atilde;o 
                    atual e as necessidades de compras. Eles sabem que a melhor 
                    forma de apresentar seus produtos ou servi&ccedil;os &eacute; 
                    descobrir os objetivos, preocupa&ccedil;&otilde;es e hesita&ccedil;&otilde;es 
                    dos seus clientes. Isto permite que efetivamente discutam 
                    as caracter&iacute;sticas e benef&iacute;cios do produto ou 
                    servi&ccedil;o que melhor se adaptam ao cliente.</font></p>
                  <p><font color="#0000FF" size="2"><strong>4. Bons vendedores 
                    sabem ouvir</strong></font><font size="2"><br>
                    A maior parte dos vendedores faz uma pergunta e depois eles 
                    mesmos respondem a pergunta ou continuam a falar em vez de 
                    esperar uma resposta do cliente. Os bons vendedores sabem 
                    que seus clientes informar&atilde;o tudo que necessitam se 
                    tiverem a oportunidade de falar. Sabem fazer perguntas e ouvir 
                    as respostas com bastante aten&ccedil;&atilde;o e at&eacute; 
                    tomar nota das respostas e resumi-las posteriormente. Eles 
                    sabem que o silencio &eacute; de ouro.</font></p>
                  <p><font color="#0000FF" size="2"><strong>5. Bons vendedores 
                    s&atilde;o apaixonados pelos seus produtos</strong></font><font size="2"><br>
                    Eles amam sua empresa e mostram seu orgulho falando sobre 
                    seus produtos ou servi&ccedil;os. Quanto mais entusiasta for 
                    em rela&ccedil;&atilde;o &agrave; sua carreira, maiores ser&atilde;o 
                    as chances de sucesso pois quando se ama o que est&aacute; 
                    se fazendo mais esfor&ccedil;o colocamos neste trabalho. Quando 
                    somos entusiastas sobre produtos ou servi&ccedil;os que vendemos, 

                    este entusiasmo brilhar&aacute; em cada conversa que ter&aacute;. 
                    </font></p>
                  <p><font color="#0000FF" size="2"><strong>6. Vendedores bem 
                    sucedidos s&atilde;o entusiastas</strong></font><font size="2"><br>
                    Bons vendedores tem sempre uma atitude positiva e seu entusiasmo 
                    &eacute; contagiante, mesmo durante per&iacute;odos dif&iacute;ceis. 
                    Eles raramente falam negativamente sobre sua empresa ou neg&oacute;cios. 
                    Quando enfrentam situa&ccedil;&otilde;es negativas ou ruins 
                    eles focalizam em pontos positivos.</font></p>
                  <p><font color="#0000FF" size="2"><strong>7. Bons vendedores 
                    assumem a responsabilidade pelos resultados.<br>
                    </strong></font><font size="2">Se n&atilde;o conseguem atingir 
                    as cotas eles n&atilde;o culpam problemas internos ou a economia 
                    ou a concorr&ecirc;ncia. Eles sabem que somente suas a&ccedil;&otilde;es 
                    determinar&atilde;o os resultados e sabem fazer o que &eacute; 
                    necess&aacute;rio.</font></p>
                  <p><font color="#0000FF" size="2"><strong>8. Bons vendedores 
                    trabalham muito.</strong></font><font size="2"><br>
                    A maior parte das pessoas quer alcan&ccedil;ar o sucesso por&eacute;m 
                    n&atilde;o est&atilde;o preparados para trabalhar muito para 
                    conseguir alcan&ccedil;ar seus objetivos. Os grandes vendedores 
                    procuram neg&oacute;cios e n&atilde;o esperam que os neg&oacute;cios 
                    venham at&eacute; eles. Normalmente iniciam a trabalhar bem 
                    mais cedo que seus colegas; telefonam mais; contatam mais 
                    clientes em potencial; conversam mais com pessoas e fazem 
                    mais apresenta&ccedil;&otilde;es de vendas do que seus colegas.<br>
                    <br>
                    <strong><font color="#0000FF">9. Bons vendedores sempre est&atilde;o 
                    em contato com seus clientes.</font></strong><br>
                    Eles sabem que o contato constante ajuda a manter os clientes. 
                    Assim, usam v&aacute;rios artif&iacute;cios para sempre estar 
                    em contato com os clientes. Enviam mensagens de agradecimentos, 
                    de anivers&aacute;rio etc. Telefonam e programam caf&eacute;s 
                    da manh&atilde;, almo&ccedil;os etc. Enviam artigos importantes 
                    para seus clientes e, tamb&eacute;m, boletins informativos 
                    (newsletters). Est&atilde;o sempre procurando novas formas 
                    de manter seu nome e o da sua empresa na mente de seus clientes. 
                    </font></p>
                  <p><font color="#0000FF" size="2"><strong>10. Bons vendedores 
                    sabem demonstrar o valor dos seus produtos e servi&ccedil;os.<br>
                    </strong></font><font size="2">O mundo de neg&oacute;cios 
                    hoje &eacute; muito competitivo e muitos vendedores pensam 
                    que somente o pre&ccedil;o &eacute; o fator motivador. Bons 
                    vendedores sabem que o pre&ccedil;o &eacute; um fator importante 
                    em toda venda entretanto &eacute; raramente o &uacute;nico 
                    fator na escolha de um produto ou fornecedor. Eles sabem que 
                    um comprador bem informado baseia muito de sua decis&atilde;o 
                    no valor da proposta apresentada pelo vendedor. Sabem como 
                    valorizar o seu produto para cada cliente ou comprador.<br/><br />
                    Retirado do site: http://www.institutodenver.com.br
                    </font></p>
                                 
                  <h3>&nbsp;</h3>
                  </td>
              </tr>
 
</table>     

		  
		  
		  
		  
		  ......
		  </td>
          <td width="19" align="center" valign="top" bgcolor="#FFB368">
<table width="100%" height="715" border="0" cellpadding="0" cellspacing="1">
  <tr>
    <td height="489" align="center" valign="top" bgcolor="#FFFFFF">
    
	
	<table width="127" height="75" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td width="127" height="75" align="center" background="file:///C|/Arquivos de programas/Apache Group/Apache/htdocs/novo/graphics/bus_prod.png">      <table width="105" border="0">
        <tr>
          <td width="99" align="center"><input name="textfield" type="text" size="13" style="height:14px;"></td>
        </tr>
        <tr>
          <td align="center"><img src="file:///C|/Arquivos%20de%20programas/Apache%20Group/Apache/htdocs/novo/graphics/pesq.png" width="58" height="17"></td>
        </tr>
      </table> </td>
  </tr>
</table>

	
          dest

		  </td>
  </tr>
</table>		  
 </td>
        </tr>
      </table>
      <table width="100%" height="17" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td width="16%" height="17" valign="top" bgcolor="#FFB368"><div align="center" class="style3">Created by iSysMp.com todos os direitos reservados 2009</div></td>
        </tr>
      </table>      
      <table width="100%" height="50" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td height="50" background="graphics/img5y_seg.PNG">&nbsp;</td>
        </tr>
      </table>      </td>
  </tr>
</table>
</body>
</html>
