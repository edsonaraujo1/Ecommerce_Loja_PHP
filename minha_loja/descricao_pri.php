<?
if ($situacao != "Finalizado"){
	
	$consulta_log = "UPDATE produto2  SET visita = '$qtd_id' WHERE codigo = '$id_prod'";
	
	@mysql_query($consulta_log, $link);
	
}


$consulta4  = "SELECT * FROM tt_ser_01 WHERE login = '$nome_user_1'";
					
$resultado4 = @mysql_query($consulta4);
					
				
$row4 = @mysql_fetch_array($resultado4);
					
$id          = @$row4["codigo"];
$id_email    = @$row4["e_mail"];
$id_fone     = @$row4["fone_cel"];
$id_fone1    = @$row4["fone_fix"];


require("../funcoes2.php");
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">

<style type="text/css">
<!--

body {
	   SCROLLBAR-ARROW-COLOR: blue;
	   SCROLLBAR-BASE-COLOR: #FFC082
	   
}

.style1 {
	font-size: 18px;
	font-weight: bold;
	font-family: Arial, Helvetica, sans-serif;
}
.style2 {
	font-family: Arial, Helvetica, sans-serif;
	font-weight: bold;
	color: #FF0000;
	font-size: 24px;
}
.style3 {
	font-family: Arial, Helvetica, sans-serif;
	font-weight: bold;
	color: #000000;
}
.style4 {
	font-size: 36px;
	font-weight: bold;
	color: #3333FF;
}
.style5 {font-size: 24px}
.style8 {font-size: 14px}
.style10 {font-size: 12px; font-family: Arial, Helvetica, sans-serif; }
.style12 {font-size: 12px}
-->
</style>

<script>
function DOMCall(name) {
	if (document.layers) 
		return document.layers[name];
	else if (document.all)
		return document.all[name];
	else if (document.getElementById)
		return document.getElementById(name);
}
function showPic (whichpic) {
	DOMCall('placeholder').src = whichpic.href;
	if (whichpic.title) {
		DOMCall('imageCaption').innerHTML = whichpic.title;
		DOMCall('imageCaption').className = "";
	} else {
		DOMCall('imageCaption').className = "hidden";
	}
 	return false;
}

function clickedImage (whichpic) {
	imageUrl = whichpic.src;  // grab the url of the medium image.
	imageUrl = imageUrl.replace(/images/gi, "images/"); // add in the "large" dir so we can display the big picture
	imageWindow = window.open("popup.php?z="+imageUrl,'imageWin','width=540,height=380');  // popup the image in a new window set width and height to your max values
}

function switchPage(pageId) {
<JS>
DOMCall(pageId).className = "asdasd"; // set the current page to junk so it becomes visible
}
</script>
</head>


<script language="JavaScript" type="text/JavaScript">

<!--
function MM_openBrWindow(theURL,winName,features) { //v2.0
  window.open(theURL,winName,features);
}
//-->
</script>

<body>
<table width="100%" height="319" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td align="center" valign="top"><table width="100%" height="302" border="0">
      <tr>
        <td bordercolor="#FF6600" bgcolor="#FF9966"> <div align="left" class="style1">&nbsp;&nbsp;<?=$nome;?> </div></td>
      </tr>
      <tr>
        <td align="left"><table width="98%" border="0">
          <tr>
            <td width="266" valign="top"><table width="100%" height="331" border="0">
              <tr>
                <td width="247" height="291">
				
				<div id="browsercheck"><hr></div>

	<div id="container">

		<div id="images"><PLACEHOLDER>
		</div>

		<div id="imageCaption" class="<RANDCLASS>"><RANDCAPTION></div>

		<CONTENT>

		<br clear="all" />
		<div style="text-align: center;">
			<MENU>
		</div>
	</div>
	<br clear="all" />

				
				
				</td>
              </tr>
              <tr>
                <td><div align="center"><a href="javascript:;" onClick="MM_openBrWindow('fotos.php?cod_prod=<?=$id_prod;?>','','scrollbars=yes,width=350,height=400,left=1o,top=10')"><img id="Image4" src="../graphics/ver_fotos.png"  width="166"  height="32"  border="0"       /></a></div></td>
              </tr>
            </table></td>
            <td width="685" align="center"><table width="100%" border="0">
              <tr>
                <td width="158"><div align="left"><strong>Pre&ccedil;o de Venda </strong></div></td>
                <td width="296"><div align="left" class="style2"><?=$preco1;?>&nbsp;&nbsp;<?=$preco2;?></div></td>
              </tr>
              <tr>
                <td><div align="left">Tipo de Produto.: </div></td>
                <td><div align="left"><strong><?=$tipo;?></strong></div></td>
              </tr>
              <tr>
                <td><div align="left">Quantidade.:</div></td>
                <td><div align="left"><?=$quantidade;?></div></td>
              </tr>
              <tr>
                <td><div align="left">N&ordm; de Visitas.: </div></td>
                <td><div align="left"><?=$visitas;?></div></td>
              </tr>
              <tr>
                <td><div align="left">Data do Anuncio.: </div></td>
                <td><div align="left"><?=$data;?></div></td>
              </tr>
              <tr>
                <td><div align="left">Peso do Produto.: </div></td>
                <td><div align="left"><?=$peso_1;?> Kilos</div></td>
              </tr>
              <tr>
                <td><div align="left">Contato.: <img src="../graphics/tel.gif" width="17" height="17"></div></td>
                <td><div align="left"><?=$id_fone;?></div></td>
              </tr>
              <tr>
                <td><div align="left">Vendedor.:</div></td>
                <td><div align="left"><strong><em><?=trim($nome_user_1);?>&nbsp;&nbsp;<img src="../graphics/alarm.gif" width="16" height="16"></em></strong></div></td>
              </tr>
              <tr>
                <td><div align="left">Local estado/ regi&atilde;o.: </div></td>
                <td><div align="left"><?=trim($estado);?></div></td>
              </tr>
              <tr>
                <td><div align="left"></div></td>
                <td><div align="left"></div></td>
              </tr>
              <tr>
                <td><div align="left"></div></td>
                <?
                if ($nome_user_1 != $ser_name3_c){


                    if ($situacao != "Finalizado"){

                ?>


                
                        <td><div align="left"><a href="comprar.php?id_prod=<?=$id_prod;?>"><img src="../graphics/loja_compra.png" width="169" height="65" border="0"/></a></div></td>




                <?
                    }else{
                    	
                ?>	

                        <td><div align="left"><img src="../graphics/finalizada.png" width="169" height="65" border="0"></div></td>
                	

                	
                <?	
                	
                    }
                
				}else{
					
					  If ($situacao != "Finalizado"){

				?>	

                <td><div align="left"><a href="finalizar.php?id_prod=<?=$id_prod;?>"><img src="../graphics/finalizar_venda.png" width="169" height="65" border="0"></a></div></td>
				
				<?	
				    }else{
				    	
				?>    	
                <td><div align="left"><a href="ativar.php?id_prod=<?=$id_prod;?>"><img src="../graphics/ativar_venda.png" width="169" height="65" border="0"></a></div></td>
				<?    	
				    	
				    	
				    }
				
				
				}
				?>                
              </tr>
              <tr>
                <td>&nbsp;</td>
                <?
                if ($nome_user_1 != $ser_name3_c){


                    if ($situacao != "Finalizado"){

                ?>

                <td><div align="left"><a href="pergunta.php?id_prod=<?=$id_prod;?>"><img src="../graphics/pergunta.png" width="166" height="32" border="0"></a></div></td>

                <?
                    }
                    
                }else{
                ?>
                
                <td><div align="left"><a href="../mercado/alterar_prod.php?id_prod=<?=$id_prod;?>"><img id="Image3" src="../graphics/alterar_prod.png"  width="166"  height="65"  border="0"       /></a></div></td>
                
                <?
                }
                ?>
              </tr>
            </table>
              <div align="center"></div></td>
          </tr>
        </table></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td bgcolor="#FFB368"><div align="center" class="style3">Descri&ccedil;&atilde;o e Caracteristicas do Produto</div></td>
      </tr>
      <tr>
        <td><?=$descricao;?></td>
      </tr>
      
      
      
<table width="100%" border="0">
  <tr>
    <td bgcolor="#FF6600"><div align="center" class="style3">Mais detalhes  do Produto</div></td>
  </tr>
  <tr>
    <td valign="top"><table width="100%" border="0" align="left" cellpadding="0" cellspacing="0">
      <tr bgcolor="#FFFFCC">
        <td width="19%" class="style12"> Valor a Combinar?.: </td>
        <td width="23%"><?=$combinar;?></td>
        <td width="13%"><span class="style12">E-Mail.: </span></td>
        <td width="45%"><?=$id_email;?></td>
      </tr>
      <tr>
        <td class="style12"> Detalhes da Entrega.: </td>
        <td><?=$entrega;?></td>
        <td><span class="style12">Fones.: </span></td>
        <td><?=$id_fone." / ".$id_fone1;?></td>
      </tr>
      <tr bgcolor="#FFFFCC">
        <td><span class="style12"> Forma de Pagamento.: </span></td>
        <td><?=$pagamento;?></td>
        <td><span class="style12">Vendedor.: </span></td>
        <td><?=$nome_user_1;?></td>
      </tr>
      <tr>
        <td><span class="style12"> Tipo de Negociacao.: </span></td>
        <td><?=$negociacao;?></td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
    </table>      </td>
  </tr>
</table>
      
      
      
      <tr>
        <td bgcolor="#FFB368" height="15%"><div align="center"><span class="style3">Perguntas e Respostas</span></div></td>
      </tr>
      
<?

$consulta5  = "SELECT * FROM msg_question WHERE cod_prod = '$id_prod' ORDER BY time DESC";
					
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

if(file_exists('../cadastro/'.$foto_pda))
{
	
}else{
	
	$foto_pda = '../graphics/corpo_msg/foto_padrao65.jpg';
}


?>

<table width="100%" border="0" cellpadding="0" cellspacing="0" bgcolor="#FFFFCC" align="center">

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

if(file_exists('../cadastro/'.$foto))
{
	
}else{
	
	$foto = '../graphics/corpo_msg/foto_padrao65.jpg';
}

if (!empty($id)){
?>

<table width="100%" border="0" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF" align="center">

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

    </table></td>
  </tr>
</table>

<?
if ($nome_user_1 != $ser_name3_c){

    if ($situacao != "Finalizado"){

?>

<center><a href="pergunta.php?id_prod=<?=$id_prod;?>"><img id="Image3" src="../graphics/pergunta.png"  width="166"  height="32"  border="0" /></a></center>

<?
    }
}
?>

<br />
</body>
</html>
<!-- Unit1 end -->
