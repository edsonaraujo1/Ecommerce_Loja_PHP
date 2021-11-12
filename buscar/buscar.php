<?
include('aguarde.php');

include('titulo.php');

require_once("../config.php");

session_start();
$ser_name3_c    = strtoupper($_SESSION["log_name_c"]);

// Abre Conexão com o MySql
include("../conexao.php");
// Chama o Banco de Dados

$link = @mysql_connect($host,$user,$pass);

@mysql_select_db($db);

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

    A:link,a:active,a:visited{ color:#000000; text-decoration:none; }
    A:hover{ color:#FF3333; text-decoration:none; }
	A:visited {color:#0000cc;}
	A:active {color:#0000cc;}

	A.clase1:visited {color:#000000;}
	A.clase1:active {color:#000000;} 
	A.clase1:link {color:#000000}
	A.clase1:hover {color:#FF6600}

-->
</style>

</head>

<body>
<table width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td bgcolor="#FF9900"><table width="100%" border="0" cellpadding="0" cellspacing="1">
      <tr>
        <td bgcolor="#FDECDB"><img src="../graphics/px1.gif" width="15" height="14"><b><font color="#FF6600" face="Arial">Resultado da Pesquiza </font></b></td>
      </tr>
    </table></td>
  </tr>
</table>
<table width="100%" border="0">
  <tr>
    <td width="1%" align="center">
	        <?
	        include('lay_menu.php');
	        ?>
      <br>
      <img src="../graphics/baner_vertical.PNG" width="141" height="580"> <br>
      <table width="128" border="0">
        <tr>
          <td width="130" align="center"> <b>N&ordm; de visitas</b> </td>
        </tr>
        <tr>
          <td align="center"><?=$qtd_ivisita;?></td>
        </tr>
    </table></td>
    <td width="98%" valign="top">
	<!-- Inicioda do Layout -->



<?
$primeiro = 1;
$faz = 1;
$pesq = trim($_POST['buscar']);

session_start();
$_SESSION["log_proc_c"] = $pesq; 


if ($primeiro == 1){
	
		$sql1       = "SELECT * FROM `produto2` WHERE `nome` LIKE '%". $pesq . "%'";
		$resultado1 = @mysql_query($sql1);

		$sql2       = "SELECT * FROM `produto`  WHERE `nome` LIKE '%". $pesq . "%'";
		$resultado2 = @mysql_query($sql2);

		$sql3       = "SELECT * FROM `msg`      WHERE `titulo` LIKE '%". $pesq . "%'";
		$resultado3 = @mysql_query($sql3);
		
		      echo "<table width='100%' align=center border='15' bgcolor='#FFFFFF' bordercolor ='$color_bor'>
		            <tr>
		            <td bgcolor='#FFFFFF'>
		            <table width='100%' border='0' cellpadding='0' cellspacing='1' align=left bgcolor='#FF9966'>";
		
		       $negrita = 1;
		
		       while ($linha = mysql_fetch_array($resultado1))
		       {

				$id_prod    = encode5t($linha["codigo"]);
				$nome       = $linha["nome"];
				$preco1     = $linha["valor1"];
				$preco2     = $linha["valor2"];
		
		        if(empty($pesq)){
		        	$pesq = "Nenhuma Palavra Digitada !!!";
		        }
		        if ($faz == 1){
		           ?>
<tr valign=top align='center' bgcolor='#FFFFFF'><th><b>NOME&nbsp;&nbsp;PESQUISADO&nbsp;&nbsp;(&nbsp;<?=$pesq;?>&nbsp;)</b>
		           <?
		           $faz = 0;
		        }
				if ($negrita==1){
				   ?>	
<tr bgcolor='#FFFFFF'><td align='left' ><font style=' font-family: Verdana; font-size: 12px;'><a href="../comercio/descricao.php?id_prod=<?=$id_prod;?>" class="clase1"><b>&nbsp;<?=$nome;?></b></a></font></td>
				   <? 
				   $conta_p = $conta_p + 1; $rec_nu = $rec_nu + 1; $negrita = 0;		            
			    }else{
				?>	
<tr bgcolor="#C0C0C0"><td align='left'><font style=' font-family: Verdana; font-size: 12px;'><a href="../comercio/descricao.php?id_prod=<?=$id_prod;?>" class="clase1"><b>&nbsp;<?=$nome;?></b></a></font></td>
				<? 
				   $conta_p = $conta_p + 1;
				   $rec_nu = $rec_nu + 1;
				   $negrita = 1;		            
				}
				$conta_p = 0;		
				}
						         
                // Produto
                
		       while ($linha = mysql_fetch_array($resultado2))
		       {

				$id_prod    = $linha["codigo"];
				$nome       = $linha["nome"];
				$preco1     = $linha["valor1"];
				$preco2     = $linha["valor2"];
		
		        if ($faz == 1){
		           ?>
<tr valign=top align='center' bgcolor='#FFFFFF'><th><b>NOME&nbsp;&nbsp;PESQUISADO&nbsp;&nbsp;(&nbsp;<?=$pesq;?>&nbsp;)</b>
		           <?
		           $faz = 0;
		        }
				if ($negrita==1){
				   ?>	
<tr bgcolor='#FFFFFF'><td align='left'><font style=' font-family: Verdana; font-size: 12px;'><a href='../descricao/layout.php?id_prod=<?=$id_prod;?>' class="clase1"><b>&nbsp;<?=$nome;?></b></a></font></td>
				   <? 
				   $conta_p = $conta_p + 1; $rec_nu = $rec_nu + 1; $negrita = 0;		            
			    }else{
				?>	
<tr bgcolor="#C0C0C0"><td align='left'><font style=' font-family: Verdana; font-size: 12px;'><a href='../descricao/layout.php?id_prod=<?=$id_prod;?>' class="clase1"><b>&nbsp;<?=$nome;?></b></a></font></td>
				<? 
				   $conta_p = $conta_p + 1;
				   $rec_nu = $rec_nu + 1;
				   $negrita = 1;		            
				}
				$conta_p = 0;		
				}
                

				// Forum
				
		       while ($linha = mysql_fetch_array($resultado3))
		       {

				$id_prod    = $linha["codigo"];
				$nome       = $linha["titulo"];
		
		        if ($faz == 1){
		           ?>
<tr valign=top align='center' bgcolor='#FFFFFF'><th><b>NOME&nbsp;&nbsp;PESQUISADO</b>
		           <?
		           $faz = 0;
		        }
				if ($negrita==1){
				   ?>	
<tr bgcolor='#FFFFFF'><td align='left'><font style=' font-family: Verdana; font-size: 12px;'><a href="../forum/ler.php?pai=<?=$linha[0];?>&titulo=<?=$nome;?>&topico=<?=$linha[7];?>&codigo=<?=$linha[0];?>#mesg" class="clase1"><b>&nbsp;<?=$nome;?></b></a></font></td>
				   <? 
				   $conta_p = $conta_p + 1; $rec_nu = $rec_nu + 1; $negrita = 0;		            
			    }else{
				?>	
<tr bgcolor="#C0C0C0"><td align='left'><font style=' font-family: Verdana; font-size: 12px;'><a href="../forum/ler.php?pai=<?=$linha[0];?>&titulo=<?=$nome;?>&topico=<?=$linha[7];?>&codigo=<?=$linha[0];?>#mesg"class="clase1" ><b>&nbsp;<?=$nome;?></b></a></font></td>
				<? 
				   $conta_p = $conta_p + 1;
				   $rec_nu = $rec_nu + 1;
				   $negrita = 1;		            
				}
				$conta_p = 0;		
				}
						         
					
			if (empty($rec_nu)){
				?>
<tr bgcolor='#FFFFFF'><td align='center' ><font style=' font-family: Verdana; font-size: 12px;'><b>Nome não Encontrado</b></font></td>
                <?
				
			}			         

		     echo "
				      
				     </table>
				     </td>
				     </tr>
				     </table>
				     </div>
					 
			<table border=0  align=center>
			<tr align=center colspan=2> 
			
			<td><br>";
			
			
						include('destaque_mercado.php');

			
			
			
			echo "<br><center><a href='../principal.php'><img src='../graphics/retorno.png' border='0'/></a></center></td>
			          
			</table>";


}	
if ($primeiro == 1){
	
	
	
}

if ($primeiro == 1){
	
	
	
}

session_start();
unset ($_SESSION["log_proc_c"]);
		
?>


	<!-- Fim do Layout -->

    </td>
    <td width="1%"><div align="center"><img src="../graphics/px1.gif" width="8" height="10"></div></td>
  </tr>
  <tr>
    <td align="center">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
</body>
</html>

<?
include('rodape.php');
?>