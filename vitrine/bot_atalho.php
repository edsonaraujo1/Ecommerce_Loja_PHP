<?
if (!empty($alte_url_pag)){
?>


<script language="JavaScript" type="text/JavaScript">
<!--
function MM_openBrWindow(theURL,winName,features) { //v2.0
  window.open(theURL,winName,features);
}
//-->
</script>

<td width="15"><div align="center"><a href="../<?=$progr_0;?>"><img src="../graphics/bot_home1.png" width="17" height="17" border="0" alt="Ir para a Pagina Inicial"/></a></div></td>
<td width="15"><div align="center"><a href="javascript:history.go(-1);"><img src="../graphics/bot_back1.png" width="17" height="17" border="0" alt="Voltar Evento Anterior"/></a></div></td>
<td width="15"><div align="center"><a href="javascript:history.go(+1);"><img src="../graphics/bot_hist1.png" width="17" height="17" border="0" alt="Ir Proximo Evento"/></a></div></td>
<td width="15"><div align="center"><a href="javascript:;" onClick="MM_openBrWindow('../<?=$progr_20;?>','','width=315,height=100')"><img src="../graphics/bot_car1.png" width="17" height="17" border="0" alt="Meu Carrinho"/></a></div></td>
<td width="15"><div align="center"><a href="../<?=$progr_13;?>"><img src="../graphics/bot_fale1.png" width="17" height="17" border="0" alt="Fale Connosco"/></a></div></td>
<td width="15"><div align="center"><a href="../<?=$progr_8;?>"><img src="../graphics/bot_papo1.png" width="17" height="17" border="0" alt="Chat e Bate-Papo"/></a></div></td>
<td width="15"><div align="center"><a href="http://pt-br.facebook.com/people/Isysmp-Araujo/100001102335091" target="new"><img src="../graphics/bot_face1.png" width="17" height="17" border="0" alt="Facebook"/></a></div></td>
<td width="15"><div align="center"><a href="http://twitter.com/isysmp" target="new"><img src="../graphics/bot_twit1.png" width="17" height="17" border="0" alt="Twitter"/></a></div></td>
<td width="15"><div align="center"><a href="http://www.youtube.com/?gl=BR&hl=pt" target="new"><img src="../graphics/bot_yout1.png" width="17" height="17" border="0" alt="Youtube.br"/></a></div></td>

<?
}else{

header('Location:../index.php');

	
}
?>
