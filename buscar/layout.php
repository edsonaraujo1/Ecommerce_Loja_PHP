<?
/*
 -----------------------------------------
 Desenvolvido por...: Edson de Araujo
 Desenvolvido por...: Jean Carlos de Araujo
 
 Finalidade.........: layout de Busca
 Criado em Data.....: 06/07/2009
 Ultima Atualização : 07/07/2009 

 DEUS SEJA LOUVADO
 -----------------------------------------
*/
require("../config.php");

if ($entra_no_web1 == 'at2'){

session_start();
$ser_name3_c    = strtoupper($_SESSION["log_name_c"]);

// Abre Conexão com o MySql
include("../conexao.php");
// Chama o Banco de Dados

$link = @mysql_connect($host,$user,$pass);

@mysql_select_db($db);


?>
<html >
<head>
<title><?=$Titulo;?></title>
<link rel="shortcut icon" href="../graphics/favicon.ico"/>


<style type="text/css">
<!--

body {
	   SCROLLBAR-ARROW-COLOR: blue;
	   SCROLLBAR-BASE-COLOR: #FFC082
	   
}

.style19 {
	font-family: "Comic Sans MS";
	font-size: 20px;
	font-style: italic;
	color: #FFFFFF;
}

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

<body  style=" margin-left: 0px;  margin-top: 0px;  margin-right: 0px;  margin-bottom: 0px; "   bgcolor="#FFFFFF" >

<table width="100%" height="52" border="0">
            <tr>
              <td width="100%" background="../graphics/forum_baner.png"><span class="style19">&nbsp;&nbsp;Pesquisa no Site !!!</span></td>
            </tr>
          </table>
		  
<?
$primeiro = 1;
$faz = 1;

session_start();
$pesq = $_SESSION["log_proc_c"]; 

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

				$id_prod    = $linha["codigo"];
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
				   <tr bgcolor='#FFFFFF'><td align='left' ><font style=' font-family: Verdana; font-size: 12px;'><a href="../comercio/descricao.php?id_prod=<?=$id_prod;?>" class="clase1"><b><?=$nome;?></b></a></font></td>
				   <? 
				   $conta_p = $conta_p + 1; $rec_nu = $rec_nu + 1; $negrita = 0;		            
			    }else{
				?>	
				   <tr bgcolor="#C0C0C0"><td align='left'><font style=' font-family: Verdana; font-size: 12px;'><a href="../comercio/descricao.php?id_prod=<?=$id_prod;?>" class="clase1"><b><?=$nome;?></b></a></font></td>
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
				   <tr bgcolor='#FFFFFF'><td align='left'><font style=' font-family: Verdana; font-size: 12px;'><a href='../descricao/layout.php?id_prod=<?=$id_prod;?>' class="clase1"><b><?=$nome;?></b></a></font></td>
				   <? 
				   $conta_p = $conta_p + 1; $rec_nu = $rec_nu + 1; $negrita = 0;		            
			    }else{
				?>	
				   <tr bgcolor="#C0C0C0"><td align='left'><font style=' font-family: Verdana; font-size: 12px;'><a href='../descricao/layout.php?id_prod=<?=$id_prod;?>' class="clase1"><b><?=$nome;?></b></a></font></td>
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
				   <tr bgcolor='#FFFFFF'><td align='left'><font style=' font-family: Verdana; font-size: 12px;'><a href="../forum/ler.php?pai=<?=$linha[0];?>&titulo=<?=$nome;?>&topico=<?=$linha[7];?>&codigo=<?=$linha[0];?>#mesg" class="clase1"><b><?=$nome;?></b></a></font></td>
				   <? 
				   $conta_p = $conta_p + 1; $rec_nu = $rec_nu + 1; $negrita = 0;		            
			    }else{
				?>	
				   <tr bgcolor="#C0C0C0"><td align='left'><font style=' font-family: Verdana; font-size: 12px;'><a href="../forum/ler.php?pai=<?=$linha[0];?>&titulo=<?=$nome;?>&topico=<?=$linha[7];?>&codigo=<?=$linha[0];?>#mesg"class="clase1" ><b><?=$nome;?></b></a></font></td>
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
			
			<form method='POST' action='../layout.php?entra_no_web1=at2'>
			<td><input type=image name='Sair' src='../graphics/retorno.png'></td>
			</form>
			          
			</table>";
}	
if ($primeiro == 1){
	
	
	
}

if ($primeiro == 1){
	
	
	
}

session_start();
unset ($_SESSION["log_proc_c"]);
		
?>
</body></html>

<?
}else{
	
	require("inew_undher_files.php");
}
?>