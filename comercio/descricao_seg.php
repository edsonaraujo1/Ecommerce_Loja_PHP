<?
/*
 ----------------------------------------------------------
 Desenvolvido por...: Edson de Araujo
 Finalidade.........: Descricao
 Criado em Data.....: 02/08/2009
 Ultima Atualização : 02/08/2009 

 DEUS SEJA LOUVADO
 ----------------------------------------------------------
*/


// Abre Conexão com o MySql
include("../conexao.php");
include("moderador.php");

// Resgata a Sessao
@session_start();
$ser_name3_c    = $_SESSION["log_name_c"];
$acesso_2       = $_SESSION['data_log_2'];


// Chama o Banco de Dados

$link = @mysql_connect($host,$user,$pass);

@mysql_select_db($db);

$consulta3  = "SELECT * FROM produto2 WHERE codigo = '$id_prod'";
					
$resultado3 = @mysql_query($consulta3);
					
				
$row3 = @mysql_fetch_array($resultado3);
					
$id          = @$row3["codigo"];
$id_prod     = @$row3["codigo"];
$nome        = @$row3["nome"];
$descricao   = @$row3["descricao"];
$preco1      = @$row3["valor1"];
$preco2      = @$row3["valor2"];
$foto        = @$row3["fot_peq"];
$quantidade  = @$row3["quantidade"];
$visitas     = @$row3["visita"];
$estado      = @$row3["local_produto"];
$data        = @$row3["data"];
$peso_1      = @$row3["peso"];
$tipo        = @$row3["tipo"];
$nome_user_1 = trim(strtoupper(@$row3["nome_user"]));


$faz = 1;


if ($nome_user_1 != $ser_name3_c){
	
	
}

$qtd_id = $visitas + 1;
// Atualizar visita

$consulta_log = "UPDATE produto2  SET visita = '$qtd_id' WHERE codigo = '$id_prod'";

@mysql_query($consulta_log, $link);


$consulta4  = "SELECT * FROM tt_ser_01 WHERE login = '$nome_user_1'";
					
$resultado4 = @mysql_query($consulta4);
					
				
$row4 = @mysql_fetch_array($resultado4);
					
$id          = @$row4["codigo"];
$id_email    = @$row4["e_mail"];
$id_fone     = @$row4["fone_cel"];



require("../funcoes2.php");
?>

<!-- Unit1 begin -->

<html >
<head>
<title>Unit1</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<style>
body {
	BORDER-BOTTOM: #FFC082 3px ridge; BORDER-LEFT: #FFC082 3px ridge; BORDER-RIGHT: #FFC082 3px ridge; BORDER-TOP: #FFC082 3px ridge
}
</style>
<style>

.style1 {
	color: #FFFFFF;
	font-weight: bold;
	font-size: 14px;
}

</style>

<?
if ($browser == " MS Internet Explorer"){
?>

<style>
body {
	   BORDER-BOTTOM: #FFC082 3px ridge;
	   BORDER-LEFT: #FFC082 3px ridge;
	   BORDER-RIGHT: #FFC082 3px ridge;
	   BORDER-TOP: #FFC082 3px ridge;
	   SCROLLBAR-ARROW-COLOR: blue;
	   SCROLLBAR-BASE-COLOR: #FFC082
	   
}
</style>
<?
}
?>

</head>

<script src="DD_belatedPNG.js" type='text/javascript'></script> 

<!--[if lte IE 6]>
<script type="text/javascript">
  DD_belatedPNG.fix('#div1, #div2, img');
</script>
<![endif]-->

<script language="JavaScript" type="text/JavaScript">

<!--
function MM_openBrWindow(theURL,winName,features) { //v2.0
  window.open(theURL,winName,features);
}
//-->
</script>

<body  style=" margin-left: 0px;  margin-top: 0px;  margin-right: 0px;  margin-bottom: 0px; "   bgcolor="#FFFFFF" >
<form style="margin-bottom: 0" id="Unit1" name="Unit1" method="post"  action="/descricao_vendas.php">
<table  width="100%"   style="height:544px"  border="0" cellpadding="0" cellspacing="0"  bgcolor="#FFFFFF"  ><tr><td valign="top">
<div id="Shape1_outer" style="Z-INDEX: 0; LEFT: 13px; WIDTH: 664px; POSITION: absolute; TOP: 16px; HEIGHT: 48px">
<script type="text/javascript">
  var Shape1_Canvas = new jsGraphics("Shape1_outer");
  Shape1_Canvas.setColor("#FFFFFF");
  Shape1_Canvas.fillRect(1 + 6, 1, 662 - 12, 46);
  Shape1_Canvas.fillRect(1, 1 + 6, 662, 46 - 12);
  Shape1_Canvas.setStroke(1);
  Shape1_Canvas.setColor("#000000");
  Shape1_Canvas.drawLine(1 + 6, 1, 662 - 6, 1);
  Shape1_Canvas.drawLine(1 + 6, 46, 662 - 6, 46);
  Shape1_Canvas.drawLine(1, 1 + 6, 1, 46 - 6);
  Shape1_Canvas.drawLine(662, 1 + 6, 662, 46 - 6);
  Shape1_Canvas.fillArc(1, 1, 12, 12, 90, 180);
  Shape1_Canvas.fillArc(662 - 12 + 1, 1, 12, 12 + 1, 0, 90);
  Shape1_Canvas.fillArc(1, 46 - 12 + 1, 12, 12, 180, 270);
  Shape1_Canvas.fillArc(662 - 12 + 1, 46 - 12 + 1, 12, 12, 270, 360);
  Shape1_Canvas.setColor("#FFFFFF");
  Shape1_Canvas.fillArc(1 + 1, 1 + 1, 12 - 1, 12 - 1, 90, 180);
  Shape1_Canvas.fillArc(662 - 12 + 1, 1 + 1, 12 - 1, 12 - 1, 0, 90);
  Shape1_Canvas.fillArc(1 + 1, 46 - 12, 12, 12, 180, 270);
  Shape1_Canvas.fillArc(662 - 12, 46 - 12, 12, 12, 270, 360);
  Shape1_Canvas.paint();
</script>

</div>
<div id="Label1_outer" style="Z-INDEX: 1; LEFT: 30px; WIDTH: 500px; POSITION: absolute; TOP: 21px; HEIGHT: 37px">
<div id="Label1" style=" font-family: Verdana; font-size: 15px;  background-color: #FFFFFF;height:37px;width:500px;"   ><STRONG><?=$nome;?></STRONG></div>
</div>
<div id="Image1_outer" style="Z-INDEX: 2; LEFT: 16px; WIDTH: 288px; POSITION: absolute; TOP: 80px; HEIGHT: 248px">
<div id="Image1_container" style=" width: 288;  height: 248; text-align: center;" ><img id="Image1" src="../<?=$foto;?>"  width="250"  height="204"  border="0"  style="margin-top: 22;"     /></div>
</div>
<div id="Label2_outer" style="Z-INDEX: 3; LEFT: 312px; WIDTH: 136px; POSITION: absolute; TOP: 81px; HEIGHT: 15px">
<div id="Label2" style=" font-family: Verdana; font-size: 13px;  background-color: #FFFFFF;height:15px;width:136px;"   >Preço de Venda</div>
</div>
<div id="Label3_outer" style="Z-INDEX: 4; LEFT: 440px; WIDTH: 108px; POSITION: absolute; TOP: 78px; HEIGHT: 21px">
<div id="Label3" style=" font-family: Verdana; font-size: 16px; font-weight: bold; background-color: #FFFFFF;height:21px;width:108px;"   ><STRONG><FONT color=#ff0000><?=$preco1;?>&nbsp;&nbsp;<?=$preco2;?></FONT></STRONG></div>
</div>
<div id="Label4_outer" style="Z-INDEX: 5; LEFT: 312px; WIDTH: 136px; POSITION: absolute; TOP: 103px; HEIGHT: 14px">
<div id="Label4" style=" font-family: Verdana; font-size: 9px;  background-color: #FFFFFF;height:14px;width:136px;"   >Tipo de Produto</div>
</div>
<div id="Label6_outer" style="Z-INDEX: 6; LEFT: 312px; WIDTH: 136px; POSITION: absolute; TOP: 123px; HEIGHT: 15px">
<div id="Label6" style=" font-family: Verdana; font-size: 9px;  background-color: #FFFFFF;height:15px;width:136px;"   >Quantidade</div>
</div>
<div id="Label7_outer" style="Z-INDEX: 7; LEFT: 440px; WIDTH: 65px; POSITION: absolute; TOP: 123px; HEIGHT: 15px">
<div id="Label7" style=" font-family: Verdana; font-size: 13px;  background-color: #FFFFFF;height:15px;width:65px;"   ><STRONG><?=$quantidade;?></STRONG></div>
</div>
<div id="Label9_outer" style="Z-INDEX: 8; LEFT: 312px; WIDTH: 136px; POSITION: absolute; TOP: 141px; HEIGHT: 15px">
<div id="Label9" style=" font-family: Verdana; font-size: 9px;  background-color: #FFFFFF;height:15px;width:136px;"   >No de Visitas</div>
</div>
<div id="Label10_outer" style="Z-INDEX: 9; LEFT: 312px; WIDTH: 136px; POSITION: absolute; TOP: 159px; HEIGHT: 16px">
<div id="Label10" style=" font-family: Verdana; font-size: 9px;  background-color: #FFFFFF;height:16px;width:136px;"   >Data do anúncio</div>
</div>
<div id="Label11_outer" style="Z-INDEX: 10; LEFT: 440px; WIDTH: 137px; POSITION: absolute; TOP: 160px; HEIGHT: 16px">
<div id="Label11" style=" font-family: Verdana; font-size: 13px;  background-color: #FFFFFF;height:16px;width:137px;"   ><STRONG><?=$data;?></STRONG></div>
</div>
<div id="Label12_outer" style="Z-INDEX: 11; LEFT: 312px; WIDTH: 136px; POSITION: absolute; TOP: 180px; HEIGHT: 16px">
<div id="Label12" style=" font-family: Verdana; font-size: 9px;  background-color: #FFFFFF;height:16px;width:136px;"   >Peso do Produto</div>
</div>
<div id="Label13_outer" style="Z-INDEX: 12; LEFT: 440px; WIDTH: 137px; POSITION: absolute; TOP: 181px; HEIGHT: 16px">
<div id="Label13" style=" font-family: Verdana; font-size: 13px;  background-color: #FFFFFF;height:16px;width:137px;"   ><STRONG><?=$peso_1;?> Kilos</STRONG></div>
</div>
<div id="Label16_outer" style="Z-INDEX: 13; LEFT: 312px; WIDTH: 112px; POSITION: absolute; TOP: 203px; HEIGHT: 16px">
<div id="Label16" style=" font-family: Verdana; font-size: 9px;  background-color: #FFFFFF;height:16px;width:112px;"   >Contato</div>
</div>
<div id="Label17_outer" style="Z-INDEX: 14; LEFT: 440px; WIDTH: 124px; POSITION: absolute; TOP: 200px; HEIGHT: 16px">
<div id="Label17" style=" font-family: Verdana; font-size: 13px;  background-color: #FFFFFF;height:16px;width:124px;"   ><STRONG><?=$id_fone;?></STRONG></div>
</div>
<div id="Image2_outer" style="Z-INDEX: 15; LEFT: 374px; WIDTH: 17px; POSITION: absolute; TOP: 200px; HEIGHT: 17px">
<div id="Image2_container" style=" width: 17;  height: 17; overflow: hidden;" ><img id="Image2" src="../graphics/tel.gif"  width="17"  height="17"  border="0"       /></div>
</div>
<div id="Label18_outer" style="Z-INDEX: 16; LEFT: 312px; WIDTH: 144px; POSITION: absolute; TOP: 240px; HEIGHT: 16px">
<div id="Label18" style=" font-family: Verdana; font-size: 9px;  background-color: #FFFFFF;height:16px;width:144px;"   >Local estado / região</div>
</div>
<div id="Label19_outer" style="Z-INDEX: 17; LEFT: 477px; WIDTH: 144px; POSITION: absolute; TOP: 241px; HEIGHT: 39px">
<div id="Label19" style=" font-family: Verdana; font-size: 13px;  background-color: #FFFFFF;height:39px;width:144px;"   ><STRONG><?=trim($estado);?></STRONG></div>
</div>

<?
if ($nome_user_1 != $ser_name3_c){
?>
	<div id="Image3_outer" style="Z-INDEX: 18; LEFT: 388px; WIDTH: 166px; POSITION: absolute; TOP: 347px; HEIGHT: 32px">
	<div id="Image3_container" style=" width: 166;  height: 32; overflow: hidden;" ><a href="pergunta.php?id_prod=<?=$id_prod;?>"><img id="Image3" src="../graphics/pergunta.png"  width="166"  height="32"  border="0"       /></a></div>
	</div>
	
	<div id="Image5_outer" style="Z-INDEX: 25; LEFT: 384px; WIDTH: 169px; POSITION: absolute; TOP: 279px; HEIGHT: 65px">
	<div id="Image5_container" style=" width: 169;  height: 65; overflow: hidden;" ><img id="Image5" src="../graphics/loja_compra.png"  width="169"  height="65"  border="0"       /></div>
	</div>
	
<?
}else{
?>

	<div id="Image3_outer" style="Z-INDEX: 18; LEFT: 388px; WIDTH: 166px; POSITION: absolute; TOP: 347px; HEIGHT: 65px">
	<div id="Image3_container" style=" width: 166;  height: 65; overflow: hidden;" ><a href="../mercado/alterar_prod.php?id_prod=<?=$id_prod;?>"><img id="Image3" src="../graphics/alterar_prod.png"  width="166"  height="65"  border="0"       /></a></div>
	</div>

	<div id="Image5_outer" style="Z-INDEX: 25; LEFT: 384px; WIDTH: 169px; POSITION: absolute; TOP: 279px; HEIGHT: 65px">
	<div id="Image5_container" style=" width: 169;  height: 65; overflow: hidden;" ><img id="Image5" src="../graphics/finalizar_venda.png"  width="169"  height="65"  border="0"       /></div>
	</div>
<?
}
?>

<div id="Image4_outer" style="Z-INDEX: 21; LEFT: 83px; WIDTH: 166px; POSITION: absolute; TOP: 345px; HEIGHT: 32px">
<div id="Image4_container" style=" width: 166;  height: 32; overflow: hidden;" ><a href="javascript:;" onClick="MM_openBrWindow('fotos.php?cod_prod=<?=$id_prod;?>','','scrollbars=yes,width=350,height=400,left=1o,top=10')"><img id="Image4" src="../graphics/ver_fotos.png"  width="166"  height="32"  border="0"       /></a></div>
</div>
<div id="Label14_outer" style="Z-INDEX: 22; LEFT: 312px; WIDTH: 128px; POSITION: absolute; TOP: 220px; HEIGHT: 16px">
<div id="Label14" style=" font-family: Verdana; font-size: 13px;  background-color: #FFFFFF;height:16px;width:128px;"   >Vendendor</div>
</div>
<div id="Label15_outer" style="Z-INDEX: 23; LEFT: 440px; WIDTH: 124px; POSITION: absolute; TOP: 218px; HEIGHT: 16px">
<div id="Label15" style=" font-family: Verdana; font-size: 13px;  background-color: #FFFFFF;height:16px;width:124px;"   ><STRONG><?=trim($nome_user_1);?></STRONG></div>
</div>
<div id="Label5_outer" style="Z-INDEX: 24; LEFT: 441px; WIDTH: 100px; POSITION: absolute; TOP: 103px; HEIGHT: 15px">
<div id="Label5" style=" font-family: Verdana; font-size: 13px;  background-color: #FFFFFF;height:15px;width:215px;"   ><STRONG><?=$tipo;?></STRONG></div>
</div>

<div id="Label8_outer" style="Z-INDEX: 26; LEFT: 442px; WIDTH: 136px; POSITION: absolute; TOP: 140px; HEIGHT: 15px">
<div id="Label8" style=" font-family: Verdana; font-size: 13px;  background-color: #FFFFFF;height:15px;width:136px;"   ><STRONG><?=$visitas;?></STRONG></div>
</div>

<div id="Label22_outer" style="Z-INDEX: 20; LEFT: 20px; WIDTH: 650px; POSITION: absolute; TOP: 408px; HEIGHT: 16px">
<div id="Label22" style=" font-family: Verdana; font-size: 13px;  background-color: #FFFFFF;height:16px;width:650px;"   ><P align=left><STRONG><FONT style="BACKGROUND-COLOR: #ff8000" color=#ffffff>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; DESCRIÇÃO DO PRODUTO&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </FONT></STRONG></div>
</div>

<br /><br /><br />
<br /><br /><br />
<br /><br /><br />
<br /><br /><br />
<br /><br /><br />
<br /><br /><br />
<br /><br /><br />
<br /><br />


<table width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    
  </tr>
  <tr>
    <td height="120" valign="top">
	
	<table width="100%" border="0" align="center">
        <tr>
          <td width="16"><img src="../graphics/corpo_msg/forum_msg_r3_c8.gif" width="16" height="27"/></td>
          <td width="963"><?=$descricao;?> </td>
        </tr>
      </table>
	
    </td>
  </tr>
</table>

</td>
</tr>

<td height="12%" bgcolor="#FF9900" ><div align="center" class="style1">Perguntas e Respostas</div></td>
</table>
</form>



<?

$consulta5  = "SELECT * FROM msg_question WHERE cod_prod = '$id_prod' ORDER BY time";
					
$resultado5 = @mysql_query($consulta5);

			
while($linha = mysql_fetch_array($resultado5)) {

$id_msg     = $linha["id"];
$id_prod    = $linha["cod_prod"];
$nome       = $linha["nome"];
$foto       = $linha["foto"];
$vendedor   = $linha["vendedor"];
$comprador  = $linha["comprador"];
$mensagem   = $linha["mensagem"];
$data       = $linha["data"];
$cod_prod   = $linha["cod_prod"];
$time       = $linha["time"];
$foto_pda   = $linha["foto"];
$respondido = $linha["respondido"];
?>

<table width="100%" border="0" cellpadding="0" cellspacing="0" bgcolor="#FFFFCC">

     <tr> 
     <td width="161" style="padding:10px" valign="top" align="center" >
              
		<div align="center">
		                                 
			 <?
			 if (!empty($foto_pda)){
			 ?>

		     <a href="cadastro.php">
		     <img src="<?=$foto_pda;?>" alt="" width="65" height="65" border="0" style="border:#CCCCCC solid 1px;" /></a>
			 <br />

			 	
		     <?
		     }else{
		     ?>
		     
		     <img src="../graphics/foto_padrao65.jpg" alt="" width="65" height="65" border="0" style="border:#CCCCCC solid 1px;" />
			 <br />
		     
		     
		     <?
		     }
		     if ($comprador != "VISITANTE"){
		     ?>
		     
		         <font face="Verdana" size='-2px'><a href="../cadastro.php"><?=$comprador;?></a></font>
			     <br />

              <?
              }else{
              ?>	
              
		         <font face="Verdana" size='-2px'><?=$comprador;?></font>
			     <br />

              <?              	
              }

			 if ($comprador != "VISITANTE"){
			 ?>

		     <span><img src="../graphics/novo.gif" width="30" height="9" border="0" /></span>
		     
             <?
			 }
			 ?> 
		</div>
       
     <td width="651" valign="middle" align="left"><font face="Verdana" size='-2px'><span><?=retiraCaracteres($mensagem);?></span></font> 
     </td>
     
     <td width="165" valign="middle" align="center"><font face="Verdana" size='1px'><b>Pergunta em</b>:<br>
       <font face="Verdana" size='-1px'><?=$data;?></font>
       
       <?
       if ($ser_name3_c == strtoupper($vendedor)){
       	   if ($respondido != "SIM"){
       ?>
	      <a href="responder.php?id_msg=<?=$id_msg;?>"><img src="../graphics/responder.png" width="70"  height="18" border="0" /></a>
	   <?
	   }
	   }
	   ?>
	   
	   </td>
       </td>
     </tr>    
     <tr>
      <td colspan="5" style="border-top:#e0e0c2 Dashed 1px;"><div align="center"><img src="../graphics/hr01.gif" width="100%" height="1" /></div></td>
     </tr>
     
<!--  Procura Resposta -->     

<?     
$consulta6  = "SELECT * FROM msg_resposta WHERE id_mensage  = '$id_msg'";
					
$resultado6 = @mysql_query($consulta6);
				
$row6 = @mysql_fetch_array($resultado6);
					
$id          = @$row6["id"];
$foto        = @$row6["foto"];
$vendedor    = @$row6["vendedor"];
$resposta    = @$row6["mensagem"];
$data        = @$row6["data"];

if (!empty($id)){
?>

<table width="100%" border="0" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">

     <tr> 
     <td width="161" style="padding:10px" valign="top" align="center" >
              
		<div align="center">
		                                 
			 <?
			 if (!empty($foto)){
			 ?>

		     <img src="<?=$foto;?>" alt="" width="65" height="65" border="0" style="border:#FFFFFF solid 1px;" />
			 <br />

			 	
		     <?
		     }else{
		     ?>
		     
		     <img src="../graphics/foto_padrao65.jpg" alt="" width="65" height="65" border="0" style="border:#FFFFFF solid 1px;" />
			 <br />
		     
		     
		     <?
		     }
		     ?>
		     <font face="Verdana" size='-2px'><?=$vendedor;?></font>
			 <br />

		</div>
       
     <td width="651" valign="middle" align="left"><font face="Verdana" size='-2px'><span><?=retiraCaracteres($resposta);?></span></font> 
     </td>
     
     <td width="165" valign="middle" align="center"><font face="Verdana" size='1px'><b>Respondido em</b>:<br>
       <font face="Verdana" size='-1px'><?=$data;?></font>
       
   </td>
       </td>
     </tr>    
     <tr>
      <td colspan="5" style="border-top:#e0e0c2 Dashed 1px;"><div align="center"><img src="../graphics/hr01.gif" width="100%" height="1" /></div></td>
     </tr>
</table>




<?	
}     
?>     
     
     
<?
}
?>

</table>
<br />

<?
if ($nome_user_1 != $ser_name3_c){
?>

<center><a href="pergunta.php?id_prod=<?=$id_prod;?>"><img id="Image3" src="../graphics/pergunta.png"  width="166"  height="32"  border="0" /></a></center>

<?
}
?>

<br />
</body>
</html>
<!-- Unit1 end -->
