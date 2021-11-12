<?
include("../conexao.php");

$host     = $host;// Host do MySQL
$user     = $user;//Usuario do MySQL
$password = $pass;//Senha do MySQL
$database = $db;//Databade do MySQL
$limite="1000000";//limite de mensagens por página

$conn = mysql_connect($host,$user,$password);
mysql_select_db($database);
?>
<html>
<head>
<link href="sysmp.css" rel="stylesheet" type="text/css">
</head>
<body leftmargin="0" topmargin="0" bgcolor="#FFFFFF" >

<div align="center" style=" background-color: #FFFFFF;">
  <table width="100%" border="0">
    <tr align="center">
      <td><a href="novo.php"><img src="../graphics/n_topico.gif" width="108" height="16" border="0"></a><img src="../graphics/espacador_tb.gif" width="10" height="10"></td>
      <td><a href="topicos.php?pagina=0&modo=1"><img src="../graphics/ir_topico.gif" width="108" height="16" border="0"></a><img src="../graphics/espacador_tb.gif" width="10" height="10"></td>
      <td><a href="topicos.php?pagina=0&modo=2"><img src="../graphics/rec_topico.gif" width="108" height="16" border="0"></a><img src="../graphics/espacador_tb.gif" width="10" height="10"></td>
      <td><a href="pesquisa.php"><img src="../graphics/pesquisar.gif" width="108" height="16" border="0"></a></td>
      <td><a href="regras_forum.php"><img src="../graphics/regras.png" width="108" height="16" border="0"></a></td>
    </tr>
  </table>

</div>
