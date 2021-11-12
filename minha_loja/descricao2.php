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

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<style type="text/css">
<!--
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
	color: #FFFF00;
}
.style4 {
	font-size: 36px;
	font-weight: bold;
	color: #3333FF;
}
.style5 {font-size: 24px}
.style8 {font-size: 14px}
.style10 {font-size: 12px; font-family: Arial, Helvetica, sans-serif; }
-->
</style>
</head>

<script language="JavaScript" type="text/JavaScript">

<!--
function MM_openBrWindow(theURL,winName,features) { //v2.0
  window.open(theURL,winName,features);
}
//-->
</script>

<body>
<table width="100%" height="319" border="0">
  <tr>
    <td align="center" valign="top"><table width="96%" height="302" border="0">
      <tr>
        <td bordercolor="#FF6600"> <div align="left" class="style1"><?=$nome;?> </div></td>
      </tr>
      <tr>
        <td align="left"><table width="98%" border="0">
          <tr>
            <td width="266" valign="top"><table width="226" height="331" border="0">
              <tr>
                <td width="247" height="291"><img src="../<?=$foto;?>" width="218" height="207" border="1"></td>
              </tr>
              <tr>
                <td><div align="center"><a href="javascript:;" onClick="MM_openBrWindow('fotos.php?cod_prod=<?=$id_prod;?>','','scrollbars=yes,width=350,height=400,left=1o,top=10')"><img id="Image4" src="../graphics/ver_fotos.png"  width="166"  height="32"  border="0"       /></a></div></td>
              </tr>
            </table></td>
            <td width="685" align="center"><table width="406" border="0">
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
                ?>
                
                <td><div align="left"><img src="../graphics/loja_compra.png" width="169" height="65"></div></td>
                <?
				}else{
				?>	

                <td><div align="left"><img src="../graphics/finalizar_venda.png" width="169" height="65"></div></td>
				
				<?	
				}
				?>                
              </tr>
              <tr>
                <td>&nbsp;</td>
                <?
                if ($nome_user_1 != $ser_name3_c){
                ?>

                <td><div align="left"><img src="../graphics/pergunta.png" width="166" height="32"></div></td>

                <?
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
        <td bgcolor="#FF6600"><div align="center" class="style3">Descri&ccedil;&atilde;o e Caracteristicas do Produto</div></td>
      </tr>
      <tr>
        <td><?=$descricao;?></td>
      </tr>
      <tr>
        <td bgcolor="#FF6600" height="12%"><div align="center"><span class="style3">Perguntas e Respostas</span></div></td>
      </tr>
      
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
?>

<center><a href="pergunta.php?id_prod=<?=$id_prod;?>"><img id="Image3" src="../graphics/pergunta.png"  width="166"  height="32"  border="0" /></a></center>

<?
}
?>

<br />
</body>
</html>
<!-- Unit1 end -->
