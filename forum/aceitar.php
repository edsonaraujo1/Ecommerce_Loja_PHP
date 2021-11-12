<?php

/**
 * @author holodek
 * @copyright 2010
 */
?>

<script language="javascript">

function fechar(){
	
	if(document.all){
		window.opener=window;
		window.close("#");
	}else{
		self.close();
	}
}

</script>
<?

include('../conexao.php');

// Chama o Banco de Dados
$link = @mysql_connect($host,$user,$pass);


//echo $host."<br>";
//echo $user."<br>";
//echo $pass."<br>";
//echo $db."<br><br>";

@mysql_select_db($db);

$data=date("d/m/Y  H:i:s");
$time=date("YmdHis");
$ati = 1;

//echo $pai."<br>";
//echo $res."<br>";
//echo $titulo."<br>";
//echo $topico."<br>";
//echo $nome."<br>";
//echo $ativa."<br>";

$titulo1 = trim($titulo);
$topico1 = trim($topico);


$consulta0  = "SELECT * FROM msg WHERE pai = '$pai' AND titulo = '$titulo1' AND topico ='$topico1' AND autor = '$nome'";
	
$resultado0 = @mysql_query($consulta0);

$row0 = @mysql_fetch_array($resultado0);

$codigo_banco     = @$row0["codigo"];
$autor_banco      = @$row0["autor"];
$data_banco       = @$row0["data"];


//echo "do Banco <br>";
//echo $codigo_banco."<br>";
//echo $autor_banco."<br>";
//echo $data_banco."<br><br><br>";
//echo "valor do ati ".$ati."<br>";


$consulta4 = "UPDATE msg SET ativa = '$ati' WHERE codigo = '$codigo_banco'";

@mysql_query($consulta4, $link) or


die("
     <br>
     <br>
     
     <div align=center>

     <table align=center border='15' bgcolor='#FFF8DC' bordercolor ='#FF8000'>
     <tr>
     <td>
     <font face=arial><b>*** Falha na Alteração !!! ***</b><br>". mysql_errno(). "
     <table align=center>
     <form method='POST' action='cadastro.php'>
     <td><input type=image name='consulta' src='../graphics/retorno.png' border='0'></td>
     </form> 
     </table>
     </td>
     </tr>
     </table>
     </div>");

echo "<font size=8><b>Aceito !!!</b></font>";
?>
<script language="javascript">
setTimeout("fechar()",55);
</script>