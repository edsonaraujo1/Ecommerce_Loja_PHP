<?
include_once('config.php');

// Abre Conexão com o MySql
include("conexao.php");
// Chama o Banco de Dados
		
$link = @mysql_connect($host,$user,$pass);
		
@mysql_select_db($db);

//include_once("config.php");

if (!empty($alte_url_pag)){

	if ($ser_name3_c != "VISITANTE"){
	?>
	
		<table width="141" border="0" cellpadding="0" cellspacing="1">
		  <tr>
		    <td width="145" bgcolor="#FF9900"><table width="141" border="0" cellpadding="0" cellspacing="1">
		      <tr>
		        <td width="141" height="19" bgcolor="#FF9900"><img src="graphics/px1.gif" width="10" height="10"><b><font color="#FFFFFF" size="2" face="Verdana">Meus Dados </font></b></td>
		      </tr>
		      <tr>
		        <td height="102" valign="top" bgcolor="#FFFFFF">
		          <table width="141" border="0">
		            <tr>
		              <td width="163"><img src="graphics/setinha_menu.gif" width="9" height="9"><font size="2" face="Verdana"><img src="graphics/px1.gif" width="5" height="10"><a href="dados/dados.php">Meu Cadastro </font></td>
		            </tr>
		            <tr>
		              <td><img src="graphics/setinha_menu.gif" width="9" height="9"><font size="2" face="Verdana"><img src="graphics/px1.gif" width="5" height="10"><a href="meus_prod/meus_prod.php">Minhas Vendas </a></font></td>
		            </tr>
		            <tr>
		              <td><img src="graphics/setinha_menu.gif" width="9" height="9"><font size="2" face="Verdana"><img src="graphics/px1.gif" width="5" height="10"><a href="minha_loja/minha_loja.php">Minha Loja </font></td>
		            </tr>
		            <tr>
		              <td><img src="graphics/setinha_menu.gif" width="9" height="9"><font size="2" face="Verdana"><img src="graphics/px1.gif" width="5" height="10"><a href="mensagens/mensagens.php">Mensagens</font></td>
		            </tr>
		            <tr>
		              <td><img src="graphics/setinha_menu.gif" width="9" height="9"><font size="2" face="Verdana"><img src="graphics/px1.gif" width="5" height="10"><a href="espaco/espaco.php">Meu Espa&ccedil;o </font></td>
		            </tr>
		        </table></td>
		      </tr>
		    </table></td>
		  </tr>
		</table>
		<font size="-6" face="Salina">.
		</font>
	<?
	}
	?>


<table width="136" border="0" cellpadding="0" cellspacing="1">
  <tr>
    <td width="134" bgcolor="#FF9900"><table width="141" border="0" cellpadding="0" cellspacing="1">
      <tr>
        <td width="167" height="19" bgcolor="#FF9900"><img src="graphics/px1.gif" width="10" height="10"><b><font color="#FFFFFF" size="2" face="Verdana">Compraai Vitrine</font></b></td>
      </tr>
      <tr>
        <td height="100%" valign="top" bgcolor="#FFFFFF">
		<table width="141" border="0">
        <?		
		
		$sql1  = "SELECT * FROM categoria_prod WHERE sub_codigo = 1 ORDER BY cod_categ ASC";

		$resultado1 = @mysql_query($sql1);

		while($linha1 = mysql_fetch_array($resultado1)) {
		
		$id_prod1    = $linha1["cod_categ"];
		$descricao1  = $linha1["descricao"];
		$sub_cod1    = $linha1["sub_cod"];

		$var_1a = encode5t('1');
		$var_2b = encode5t($id_prod1);
		$var_3c = encode5t('ye');
		
		?>
            <tr>
              <td width="134"><img src="graphics/setinha_menu.gif" width="9" height="9"><font size="2" face="Verdana"><img src="graphics/px1.gif" width="5" height="10"><a href="loja/loja.php?vazer_y=<?=$var_1a;?>&Edit1_xz=<?=$var_2b;?>&faz_nome=<?=$var_3c;?>"><?=$descricao1;?></a></font></td>
            </tr>
         <?
		 }
		 ?>   
		
        </table></td>
      </tr>
    </table></td>
  </tr>
</table>
<font size="-6" face="Salina">.
</font>
<table width="136" border="0" cellpadding="0" cellspacing="1">
  <tr>
    <td width="134" bgcolor="#FF9900"><table width="141" border="0" cellpadding="0" cellspacing="1">
      <tr>
        <td width="167" height="19" bgcolor="#FF9900"><img src="graphics/px1.gif" width="10" height="10"><b><font color="#FFFFFF" size="2" face="Verdana">Informatica</font></b></td>
      </tr>
      <tr>
        <td height="100%" valign="top" bgcolor="#FFFFFF">
		<table width="141" border="0">
		
		<?
		
		$sql2  = "SELECT * FROM categoria_prod WHERE sub_codigo = 2 ORDER BY cod_categ ASC";

		$resultado2 = @mysql_query($sql2);

		while($linha2 = mysql_fetch_array($resultado2)) {
		
		$id_prod2    = $linha2["cod_categ"];
		$descricao2  = $linha2["descricao"];
		$sub_cod2    = $linha2["sub_codigo"];
		
		$vari_send = encode5t('vazer_y=1&Edit1_xz='.$id_prod2.'&faz_nome=ye');
	
		$var_1 = encode5t('1');
		$var_2 = encode5t($id_prod2);
		$var_3 = encode5t('ye');
		
		?>
            <tr>
              <td width="134"><img src="graphics/setinha_menu.gif" width="9" height="9"><font size="2" face="Verdana"><img src="graphics/px1.gif" width="5" height="10"><a href="comercio/comercio.php?vazer_y=<?=$var_1;?>&Edit1_xz=<?=$var_2;?>&faz_nome=<?=$var_3;?>"><?=$descricao2;?></a></font></td>
            </tr>
         <?
		 }
		 ?>   
            
        </table></td>
      </tr>
    </table></td>
  </tr>
</table>
<font size="-6" face="Salina">.
</font>
<table width="124" border="0" cellpadding="0" cellspacing="1">
  <tr>
    <td width="122" bgcolor="#FF9900"><table width="141" border="0" cellpadding="0" cellspacing="1">
      <tr>
        <td width="167" height="19" bgcolor="#FF9900"><img src="graphics/px1.gif" width="10" height="10"><b><font color="#FFFFFF" size="2" face="Verdana">Celular</font></b></td>
      </tr>
      <tr>
        <td height="100%" valign="top" bgcolor="#FFFFFF">
		<table width="141" border="0">
		
        <?		
		
		$sql3  = "SELECT * FROM categoria_prod WHERE sub_codigo = 3 ORDER BY cod_categ ASC";

		$resultado3 = @mysql_query($sql3);

		while($linha3 = mysql_fetch_array($resultado3)) {
		
		$id_prod3    = $linha3["cod_categ"];
		$descricao3  = $linha3["descricao"];
		$sub_cod3    = $linha3["sub_codigo"];

		$var_4 = encode5t('1');
		$var_5 = encode5t($id_prod3);
		$var_6 = encode5t('ye');
		
		?>
            <tr>
              <td width="134"><img src="graphics/setinha_menu.gif" width="9" height="9"><font size="2" face="Verdana"><img src="graphics/px1.gif" width="5" height="10"><a href="comercio/comercio.php?vazer_y=<?=$var_4;?>&Edit1_xz=<?=$var_5;?>&faz_nome=<?=$var_6;?>"><?=$descricao3;?></a></font></td>
            </tr>
         <?
		 }
		 ?>   

        </table></td>
      </tr>
    </table></td>
  </tr>
</table>
<font size="-6" face="Salina">.
</font>
<table width="124" border="0" cellpadding="0" cellspacing="1">
  <tr>
    <td width="122" bgcolor="#FF9900"><table width="141" border="0" cellpadding="0" cellspacing="1">
      <tr>
        <td width="167" height="19" bgcolor="#FF9900"><img src="graphics/px1.gif" width="10" height="10"><b><font color="#FFFFFF" size="2" face="Verdana">Acessorios</font></b></td>
      </tr>
      <tr>
        <td height="102" valign="top" bgcolor="#FFFFFF">
		<table width="141" border="0">
		
        <?		
		
		$sql4  = "SELECT * FROM categoria_prod WHERE sub_codigo = 4 ORDER BY cod_categ ASC";

		$resultado4 = @mysql_query($sql4);

		while($linha4 = mysql_fetch_array($resultado4)) {
		
		$id_prod4    = $linha4["cod_categ"];
		$descricao4  = $linha4["descricao"];
		$sub_cod4    = $linha4["sub_codigo"];

		$var_7 = encode5t('1');
		$var_8 = encode5t($id_prod4);
		$var_9 = encode5t('ye');
		
		?>
            <tr>
              <td width="134"><img src="graphics/setinha_menu.gif" width="9" height="9"><font size="2" face="Verdana"><img src="graphics/px1.gif" width="5" height="10"><a href="comercio/comercio.php?vazer_y=<?=$var_7;?>&Edit1_xz=<?=$var_8;?>&faz_nome=<?=$var_9;?>"><?=$descricao4;?></a></font></td>
            </tr>
         <?
		 }
		 ?>   

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
