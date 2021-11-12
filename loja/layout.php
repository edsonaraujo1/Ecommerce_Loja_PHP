<?
/*
 -----------------------------------------
 Desenvolvido por...: Edson de Araujo
 Finalidade.........: Loja Virtual
 Criado em Data.....: 07/12/2007
 Ultima Atualização : 07/07/2008 

 DEUS SEJA LOUVADO
 -----------------------------------------
*/

include('titulo.php');

include_once("../config.php");

include_once('../sql_injection.php');

?>

<style>

body {
	   SCROLLBAR-ARROW-COLOR: blue;
	   SCROLLBAR-BASE-COLOR: #FFC082
	   
}

    A:link,a:active,a:visited{ color:#000000; text-decoration:none; }
    A:hover{ color:#FF3333; text-decoration:none; }
	A:visited {color:#0000cc;}
	A:active {color:#0000cc;}

	A.clase1:visited {color:#000000;}
	A.clase1:active {color:#000000;} 
	A.clase1:link {color:#000000}
	A.clase1:hover {color:#FFFFFF}

</style>

<style type="text/css">
<!--
.style1 {
	font-size: 11px;
	font-family: Arial, Helvetica, sans-serif;
	font-weight: bold;
}
.style2 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 10px;
}
.style19 {
	font-family: Arial;
	font-size: 9px;
}
.style20 {
	font-family: Arial;
	font-weight: bold;
	font-size: 11px;
}
-->
</style>

</head>

<script>

// Funcao Salva Sessao
function Salva1(Var1)
{
     window.location = "salva_session.php?Var_1="+Var1.value;     
}
function Salva2(Var2)
{
     window.location = "salva_session.php?Var_2="+Var2.value;     
}

</script>

<div align="left">
<?php

include("../conexao.php");

$hostname_conn = $host;
$database_conn = $db;
$username_conn = $user;
$password_conn = $pass;

// Conectamos ao nosso servidor MySQL
if(!($conn = @mysql_connect($hostname_conn,$username_conn,$password_conn))) 
{
   echo "Erro ao conectar ao MySQL.";
   exit;
}
// Selecionamos nossa base de dados MySQL
if(!($con = @mysql_select_db($database_conn,$conn))) 
{
   echo "Erro ao selecionar ao MySQL.";
   exit;
}


//*********************************************************************
// CONFIGURAÇÃO DE BANCO DE DADOS
//*********************************************************************
$con = @mysql_connect($hostname_conn,$username_conn,$password_conn);
$bd  = @mysql_select_db($database_conn);

@session_start();
$qtd_car_pg2 = $_SESSION['meu_carrinho'];

if (empty($qtd_car_pg2)){


	  $sql_meu_carrinho = "SELECT * FROM tbl_carrinho WHERE  sessao = '".session_id()."' ORDER BY nome ASC";
	  $exec_meu_carrinho =  @mysql_query($sql_meu_carrinho, $conn) or die(mysql_error());
	  $qtd_meu_carrinho = @mysql_num_rows($exec_meu_carrinho);
	  
	  if ($qtd_meu_carrinho > 0)
	  {
	  	$soma_carrinho = 0;
	  	while ($row_rs_produto_carrinho = @mysql_fetch_assoc($exec_meu_carrinho))
		{
			$soma_carrinho += ($row_rs_produto_carrinho['preco']*$row_rs_produto_carrinho['qtd']);
	
	        $qtd_car_pg = $qtd_car_pg + $row_rs_produto_carrinho['qtd'];
	        
	        $soma_carrinho_x = $row_rs_produto_carrinho['preco']*$row_rs_produto_carrinho['qtd'];
	
	    }
		
	  }else{
	  	
	      $qtd_car_pg = 0;
	  	
	  }

	
}else{
	
	
	  $sql_meu_carrinho = "SELECT * FROM tbl_carrinho WHERE  sessao = '".session_id()."' ORDER BY nome ASC";
	  $exec_meu_carrinho =  @mysql_query($sql_meu_carrinho, $conn) or die(mysql_error());
	  $qtd_meu_carrinho = @mysql_num_rows($exec_meu_carrinho);

	  if ($qtd_meu_carrinho > 0)
	  {
	  	$soma_carrinho = 0;
	  	while ($row_rs_produto_carrinho = @mysql_fetch_assoc($exec_meu_carrinho))
		{
			$soma_carrinho += ($row_rs_produto_carrinho['preco']*$row_rs_produto_carrinho['qtd']);
	
	        $qtd_car_pg = $qtd_car_pg + $row_rs_produto_carrinho['qtd'];
	        
	        $soma_carrinho_x = $row_rs_produto_carrinho['preco']*$row_rs_produto_carrinho['qtd'];
	
	    }
		
	  }else{
	  	
	      $qtd_car_pg = 0;
	  	
	  }

	$qtd_car_pg = $qtd_car_pg2;
}

$query_Recordset1 = "SELECT cod_categ, descricao FROM categoria_loja";
$Recordset1 = @mysql_query($query_Recordset1, $conn); // or die(mysql_error());
$row_Recordset1 = @mysql_fetch_assoc($Recordset1);
$totalRows_Recordset1 = @mysql_num_rows($Recordset1);

?>
<body  bgcolor="#ffffff">
<table width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td width="62%" height="114" valign="top"><img src="../graphics/banner5.png" width="630" height="103"></td>
    <td width="38%"><div align="center">
	
	         <?
                
                @session_start();
		        $_SESSION["ver_car_pag"] = "ds54ds32";
                
                ?>

<table width="164" height="60" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td width="164" height="54" bgcolor="#F8810A"><table width="164" height="69" border="0" cellpadding="0" cellspacing="1">
      <tr>
        <td width="76" height="67"><a href='carrinho.php'>	<img src="../graphics/carrinho_compras.gif" width="76" height="67" border="0"/></a></td>
        <td width="112" bgcolor="#E6E6E6"><div align="center"><font size="1" face="Arial">Itens no Carrinho</font> <br>
            <b><font color="#FF0000"><?=$qtd_car_pg;?></font></b><br>
          <font size="2" face="Arial"><b>R$</b></font><font size="2"><b> <?= number_format($soma_carrinho,2,",","."); ?></b> </font></div></td>
      </tr>
    </table></td>
  </tr>
</table>
	
	
      <?
// Resgata Sessao
@session_start();
if (!empty($_SESSION['Edit1'])){

   $Edit1_x   = $_SESSION['Edit1'];
	
}else{
	$Edit1_x = 2;
}
?>
    </div></td>
  </tr>
</table>
<table width="100%" height="70" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td width="165" height="70"><span class="style20">Tipo de Produto.:&nbsp;</samp>
      <select type="text" id="Edit1" name="Edit1" value="" style=" font-family: Verdana; font-size: 10px;  background-color: #FFFFFF;" onchange="Salva1(this)" tabindex="0">
<?
Do {  
?>
      <option value="<?php echo $row_Recordset1['cod_categ']?>"><?php echo $row_Recordset1['descricao']?></option>
<?

}
while ($row_Recordset1 = @mysql_fetch_assoc($Recordset1));
      $rows = @mysql_num_rows($Recordset1);
      if($rows > 0) {
         @mysql_data_seek($Recordset1, 0);
	     $row_Recordset1 = @mysql_fetch_assoc($Recordset1);
      }
?>
</select></td>
    <td width="186">
	
	<?
$query_Recordset5 = "SELECT descricao, logo_loja FROM categoria_loja WHERE cod_categ = $Edit1_x";
$Recordset5 = @mysql_query($query_Recordset5, $conn); // or die(mysql_error());
$row_Recordset5 = @mysql_fetch_assoc($Recordset5);
$totalRows_Recordset5 = @mysql_num_rows($Recordset5);
?><img src="../graphics/esta_loja.jpg" width="180" height="46">

	</td>
    <td width="349">
	
	<?
	if (empty($row_Recordset5['logo_loja'])){
	?>
	<img src="../graphics/loja_virtual.png" width="220" height="70" />
	<?
	}else{
	?>
	<img src="../<?php echo $row_Recordset5['logo_loja']?>" width="150" height="70" />
	<?
	}
	?>
	</td>
    <td width="273"><div align="left"><a href="http://www.pagseguro.uol.com.br" target="new"><img src="../graphics/pagamento.png" width="125" height="80" border="0"/></a></div></td>
  </tr>
</table>
<table width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr>


    <td height="21"><img src="../graphics/forum_msg_r6_c1.gif" width="100%" height="21"/></td>
  </tr>
</table>
<table width="100%" border="0" cellpadding="0" cellspacing="0">
<?
     


 //*********************************************************************
 // GERA A INSTRU&Ccedil;&Atilde;O SQL E CHAMA A FUN&Ccedil;&Atilde;O PARA GERAR AS COLUNAS
 //*********************************************************************
 $sql = "SELECT * FROM produto WHERE categoria = '". anti_sql_injection($Edit1_x)."'"; // LIMIT 0,6
 GeraColunas(4, $sql);
 
 ?>
 
 
  <tr>
    <td>
<?
//*********************************************************************
// FUN&Ccedil;&Atilde;O: GERACOLUNAS
// Parametros:
//  $pNumColunas (int)   > Quant. de colunas para distribui&ccedil;&atilde;o
//  $pQuery    (string) > Query de registros
//*********************************************************************
function GeraColunas($pNumColunas, $pQuery) {
//$resultado = @mysql_query($pQuery);


// Número de registros por página
$registros_pagina = "8";

$lista = (int)$_GET["lista"];

if(!$lista) {
	$pc = "1";
}
else {
	$pc = $lista;
}

$inicio = $pc - 1;
$inicio = $inicio * $registros_pagina;

$resultado = mysql_query("$pQuery LIMIT $inicio, $registros_pagina");

$todos = mysql_query("$pQuery");

$tr = mysql_num_rows($todos);

$tp = $tr / $registros_pagina;

if(mysql_num_rows($resultado) < 1) {

}


if (@mysql_num_rows($resultado)== 0){
	echo "<br><br><center><b>N&atilde;o existe nenhum produtos nessa Loja !!!</b></center><br><br>";

}else{
echo ("<table width='50' border='0' align='center'>\n");
 for($i = 0; $i <= @mysql_num_rows($resultado); ++$i) {
 
 for ($intCont = 0; $intCont < $pNumColunas; $intCont++) {
  $linha = @mysql_fetch_array($resultado);
  if ($i > $linha) {
   if ( $intCont < $pNumColunas-1) echo "</tr>\n";
   break;
  }

  $cod = $linha[1];
  $nome = $linha[3];
  $img = $linha[11];
  $gosto = trim($linha[6]); 

  $preco = @number_format($linha[5],2,",",".");

  if ( $intCont == 0 ) echo "<tr>\n";
  echo "<td>";
  // Aqui voc&ecirc; inclui o conteudo
  echo "<form action='carrinho.php?cod=".$cod."&acao=incluir' method='POST'>";
  echo "<table width='150' border='0' align='center' cellspacing='0' cellpadding='0'>";
  echo "<tr><center>";
  echo "<td width='366' height='141' valign='middle'><div align='center'><a href='descricao.php?id_prod=".$cod."'><img src='../".$img."' border='0' width='90' height='80' /></a></div></td>";
  echo "</tr>";
  echo "<tr>";
  echo "<td>";
  echo "<table width='72%' border='0' align='center' cellpadding='0' cellspacing='0'>";
  echo "<tr>";
  echo "<td><div align='center' style='font-size:10px;font-family:Verdana'><strong><a href='descricao.php?id_prod=".$cod."&acao=incluir'>".$nome."</a></strong></div><strong><div align='center'><font color='#FF0000' size='4px'> R$ ".$preco." </font></strong></div></td>";
  echo "</tr>";
  
  if (!empty($gosto)){
  	
  echo "<td><div align='center' style='font-size:10px;font-family:Verdana'>
  <strong><center>
  
  <select name='saborx' value='Escolha o Sabor'>".
  
  $programa = trim('Escolha o Sabor,'.$linha[6]);
  $array    = explode(',', $programa);
  
  for ($si = 0; $si < strlen($programa); $si++){
  
       if (!empty($array[$si])){
       	
              echo "<option value='" . $array[$si] . "'>". $array[$si] ." </option>";
              
       }else{
       	   break;
       }
  }
    
  $si = 0;

  echo "</select>";
  echo "</center></strong>";
  echo "</div></td>";
  
  }
  
  echo "<tr>";
  echo "<td><div align='center' style='font-size:10px;font-family:Verdana'>
  
  
  <input type=image name='Submit' src='../graphics/add_carrinho.png'/>
  
  
  
  
  </div><br></td>";
  echo "</tr>";
  echo "</table>";
  echo "</td>";
  echo "</tr>";
  echo "</table></form>";
  
   // Aqui &eacute; o final do conteudo
  echo "</td>";

  if ( $intCont == $pNumColunas-1 ) {
   echo "</tr>\n";
  } else { $i++; }
 }
 
 }
 
echo ('</table>');
}

echo ('<center>');

 	$tp = ceil($tp);
	if($pc>1) {
		$anterior = $pc - 1;
		echo "<a href=\"?lista=$anterior\"><img src=\"../graphics/anterior.png\" border=\"0\" /></a>";
	}else{
		
		echo "<img src=\"../graphics/anterior.png\" border=\"0\" />";
		
	}
	for($i=$pc-5;$i<$pc;$i++) {
		if($i<=0) {
		}
		else {
			echo "<a href=\"?lista=$i\">";
			if($i=="$pc") {
				echo "<b>[ $i]</b>";
			}
			else {
				echo "[$i]";
			}
			echo "</a> ";
		}
	}
	for($i=$pc;$i<=$pc+5;$i++) {
		if($i==$tp) {
			echo "<a href=\"?lista=$i\">";
			if($i=="$pc") {
				echo "<b>[$i]</b>";
			}
			else {
				echo "[$i]";
			}

			echo "</a> ";
			break;
		}
		else {
			echo "<a href=\"?lista=$i\">";
			if($i=="$pc") {
				echo "<b>[$i]</b>";
			}
			else {
				echo "[$i]";
			}
			echo "</a> ";

			if($i==$pc+5 && $tp>$pc+5) {
				echo " ... <a href=\"?lista=$tp\">[$tp]</a>";
			}
		}
	}
	if($pc<$tp) {
		$proxima = $pc + 1;
		echo " <a href=\"?lista=$proxima\"><img src=\"../graphics/proximo.png\" border=\"0\" /></a>";
	}else{
		
		echo "<img src=\"../graphics/proximo.png\" border=\"0\" />";
		
	}

echo ('<br><br></center>');

?>
<p><br><br>&nbsp;</p></td>
  </tr>
<?
}
?>
  
</table>
<center>
</center>

</body>

<?
include('rodape.php');
?>