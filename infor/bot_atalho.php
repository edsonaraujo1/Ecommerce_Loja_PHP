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

<a href="../<?=$progr_0;?>"><img src="../graphics/bot_home1.png" width="17" height="17" alt="Ir para a Pagina Inicial" border="0"/></a>
<a href="javascript:history.go(-1);"><img src="../graphics/bot_back1.png" width="17" height="17" alt="Voltar Evento Anterior" border="0"/></a>
<a href="javascript:history.go(+1);"><img src="../graphics/bot_hist1.png" width="17" height="17" alt="Ir Proximo Evento" border="0"/></a>
<a href="javascript:;" onClick="MM_openBrWindow('../<?=$progr_20;?>','','width=315,height=100')"><img src="../graphics/bot_car1.png" width="17" height="17" alt="Meu Carrinho" border="0"/></a>
<a href="../<?=$progr_13;?>"><img src="../graphics/bot_fale1.png" width="17" height="17" alt="Fale Connosco" border="0"/></a>

<?
}else{

header('Location:../index.php');

	
}
?>
