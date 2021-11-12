<?
include('aguarde.php');

include('titulo.php');

// Abre Conexão com o MySql
include("../conexao.php");
// Chama o Banco de Dados

$link = @mysql_connect($host,$user,$pass);

@mysql_select_db($db);

// Resgata a Sessao
@session_start();
$ser_name3_c    = $_SESSION["log_name_c"];
$acesso_2       = $_SESSION['data_log_2'];

$sql  = "SELECT * FROM produto2 where nome_user = '$ser_name3_c' ORDER BY nome ASC";

$faz = 1;

// Número de registros por página
$registros_pagina = "15";

$lista = (int)$_GET["lista"];

if(!$lista) {
	$pc = "1";
}
else {
	$pc = $lista;
}

$inicio = $pc - 1;
$inicio = $inicio * $registros_pagina;

$resultado = mysql_query("$sql LIMIT $inicio, $registros_pagina");

$todos = mysql_query("$sql");

$tr = mysql_num_rows($todos);

$tp = $tr / $registros_pagina;
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
body {
	   SCROLLBAR-ARROW-COLOR: blue;
	   SCROLLBAR-BASE-COLOR: #FFC082
	   
}

.style2 {font-size: 12px}
.style4 {
	font-family: Arial;
	font-size: 11px;
	font-weight: bold;
	color: #FF0000;
}
.style6 {font-size: 12px; font-weight: bold; }
.style7 {
	font-family: Arial;
	font-weight: bold;
}
.style8 {font-size: 11px;
	font-weight: bold;

}
.style11 {font-family: Arial; font-weight: bold; font-size: 11px; }
.style13 {font-family: Arial; font-size: 11px; color: #0000FF; }
.style14 {font-size: 9px}
.style15 {font-family: Arial; font-weight: bold; font-size: 9px; }
.style19 {
	font-family: "Comic Sans MS";
	font-size: 20px;
	font-style: italic;
	color: #FFFFFF;
}

#pages {
	padding: 3px;
}
#pages ul {
	list-style-type: none;
}
#pages li {
	float: left;
	display: inline;
	margin: 0 5px 0 0;
}
#pages li a {
	color: #FF6600;
	padding: 4px;
	border: 1px solid #ddd;
	text-decoration: none;
	float: left;
}
#pages li a:hover {
	color: #FF6600;
	background: #DBDBDB;
	border: 1px solid #FF9900;
}
#pages li.nolink {
	color: #FF6600;
	border: 1px solid #ddd;
	padding: 4px;
}
#pages li.current {
	color: #fff;
	border: 1px solid #b2e05d;
	padding: 4px;
	background: #b2e05d;
}


-->
</style>
</head>

<body>
<table width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td bgcolor="#FF9900"><table width="100%" border="0" cellpadding="0" cellspacing="1">
      <tr>
        <td bgcolor="#FDECDB"><img src="../graphics/px1.gif" width="15" height="14"><b><font color="#FF6600" face="Arial">Modelo com Menu </font></b></td>
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

    <table width="100%" border="0">
      <tr>
        <td height="172" valign="top">
          <table width="100%" border="0" cellpadding="0">
            <tr bgcolor="#CCCCCC">
              <td><div align="center" class="style7 style14">foto</div></td>
              <td><div align="center" class="style11 style14">Nome do Produto </div></td>
              <td><div align="center" class="style15">Pre&ccedil;o</div></td>
              <td><div align="center" class="style15">Quantidade</div></td>
              <td><div align="center" class="style15">Visitas</div></td>
              <td><div align="center" class="style15">Data do Cadastro </div></td>
              <td><div align="center" class="style15">Negocia&ccedil;&atilde;o</div></td>
              <td><div align="center" class="style15">Situa&ccedil;&atilde;o</div></td>
              <td><div align="center" class="style15">Alterar</div></td>
            </tr>
            <?

$negrita = 1;

while($linha = mysql_fetch_array($resultado)) {

$ID_COD     = encode5t($linha["codigo"]);
$id_prod    = $linha["codigo"];
$nome       = $linha["nome"];
$descricao  = $linha["descricao"];
$preco1     = $linha["valor1"];
$preco2     = $linha["valor2"];
$foto       = $linha["fot_peq"];
$quantidade = $linha["quantidade"];
$visitas    = $linha["visita"];
$estado     = $linha["local_produto"];
$data       = $linha["data"];
$tipo_merc  = $linha["negociacao"];
$situacao   = $linha["situacao"];

if (empty($foto)){
	
	$foto = "fotos/sem_foto.jpg";
	
}

if ($negrita==1){

?>
            <tr bgcolor="#FFFFCC">
              <td align="center" bgcolor="#FFFFFF"><img src="../<?=$foto;?>" width="47" height="37"></td>
              <td><span class="style13"><a href='descricao.php?id_prod=<?=$ID_COD;?>'>
                <?=$nome;?>
              </a></span></td>
              <td align="center"><span class="style4">
                <?=$preco1.' '.$preco2;?>
              </span></td>
              <td align="center"><span class="style2">
                <?=$quantidade;?>
              </span></td>
              <td align="center"><span class="style2">
                <?=$visitas;?>
              </span></td>
              <td align="center"><span class="style2">
                <?=$data;?>
              </span></td>
              <td align="center"><span class="style2">
                <?=$tipo_merc;?>
              </span></td>
              <td align="center"><span class="style6">
                <?=$situacao;?>
              </span></td>
              <td><center>
                  <a href="../mercado/alterar_prod.php?id_prod=<?=$ID_COD;?>"><img src='../graphics/atualizar.gif' border='0'/></a>
              </center></td>
            </tr>
            <?
			
	$negrita = 0;		            
}else{

?>
            <tr bgcolor="#CCCCCC">
              <td align="center" bgcolor="#FFFFFF"><img src="../<?=$foto;?>" width="47" height="37"></td>
              <td><span class="style13"><a href='descricao.php?id_prod=<?=$ID_COD;?>'>
                <?=$nome;?>
              </a></span></td>
              <td align="center"><span class="style4">
                <?=$preco1.' '.$preco2;?>
              </span></td>
              <td align="center"><span class="style2">
                <?=$quantidade;?>
              </span></td>
              <td align="center"><span class="style2">
                <?=$visitas;?>
              </span></td>
              <td align="center"><span class="style2">
                <?=$data;?>
              </span></td>
              <td align="center"><span class="style2">
                <?=$tipo_merc;?>
              </span></td>
              <td align="center"><span class="style6">
                <?=$situacao;?>
              </span></td>
              <td><center>
                  <a href="../mercado/alterar_prod.php?id_prod=<?=$ID_COD;?>"><img src='../graphics/atualizar.gif' border='0'/></a>
              </center></td>
            </tr>
            <?

    $negrita = 1;	
}			
}
?>
          </table>
      </tr>
    </table>
     
<table width="100%" border="0">
  <tr>
    <td height="33"><div align="center">
      <table width="500" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td width="500"><div align="center">

             <div id="pages" align="center">
             <ul>
<?
 	$tp = ceil($tp);
	if($pc>1) {
		$anterior = $pc - 1;
		echo "<li >";
		echo "<a href=\"?lista=$anterior\">Anterior</a></li>";
	}else{
		echo "<li class='nolink'>";
		echo "Anterior</li>";
		
	}
	for($i=$pc-5;$i<$pc;$i++) {
		if($i<=0) {
		}
		else {
			echo "<li><a href=\"?lista=$i\">";
			if($i=="$pc") {
				echo "<b>$i</b>";
			}
			else {
				echo "$i";
			}
			echo "</a> ";
		}
	}
	for($i=$pc;$i<=$pc+5;$i++) {
		if($i==$tp) {
			echo "<li><a href=\"?lista=$i\">";
			if($i=="$pc") {
				echo "<b>$i</b>";
			}
			else {
				echo "$i";
			}

			echo "</a> ";
			break;
		}
		else {
			echo "<li><a href=\"?lista=$i\">";
			if($i=="$pc") {
				echo "<b>$i</b>";
			}
			else {
				echo "$i";
			}
			echo "</a></li> ";

			if($i==$pc+5 && $tp>$pc+5) {
				echo " ... <a href=\"?lista=$tp\">[$tp]</a>";
			}
		}
	}
	if($pc<$tp) {
		$proxima = $pc + 1;
		echo "<li> <a href=\"?lista=$proxima\">Proximo</a></li>";
	}else{
		
		echo "<li class='nolink'>Proximo</li>";
		
	}
?>
</ul>
</div>

          </div></td>
        </tr>
      </table>
    </div></td>
  </tr>
</table>

	
	<!-- Fim do Layout -->

    </td>
    <td width="1%"><div align="center"><img src="../graphics/px1.gif" width="8" height="10"></div></td>
  </tr>
  <tr>
    <td align="center">&nbsp;</td>
    <td><div align="center"><br>
    </div></td>
    <td>&nbsp;</td>
  </tr>
</table>
</body>
</html>

<?
include('rodape.php');
?>