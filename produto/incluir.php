<?
/*
 -----------------------------------------
 Desenvolvido por...: Edson de Araujo
 Finalidade.........: Incluir no Cadastro Produto
 Criado em Data.....: 07/12/2007
 Ultima Atualização : 13/07/2009 

 DEUS SEJA LOUVADO
 -----------------------------------------
*/

include_once("../config.php");

$Edit1        = $_POST['Edit1'];
$Edit2        = $_POST['Edit2'];
$Edit3        = $_POST['Edit3'];
$Edit4        = $_POST['Edit4'];
$Edit5        = $_POST['Edit5'];
$Edit6        = $_POST['Edit6'];
$Edit7        = $_POST['Edit7'];
$Edit8        = $_POST['Edit8'];
$Edit9        = $_POST['Edit9'];
$Edit10       = $_POST['Edit10'];
$Edit11       = $_POST['Edit11'];
$Edit12       = $_POST['Edit12'];
$Edit13       = $_POST['Edit13'];

// Abre Conexão com o MySql
include("../conexao.php");
// Chama o Banco de Dados

$link = @mysql_connect($host,$user,$pass)

    or die( require("../login.php"));

@mysql_select_db($db);

                     // Caso contrario entao cadaste
                     
					$consulta3  = "SELECT * FROM produto ORDER BY codigo DESC LIMIT 0,1";
					
					$resultado3 = @mysql_query($consulta3);
					
					// Incrementa novo codigo
					
					$row3 = @mysql_fetch_array($resultado3);
					
					$id        = @$row3["id"];
					$cod_2     = @$row3["codigo"];
					
					$Novo_cod  = $cod_2+1;
					$date1     = date("d/m/Y");
                    $hora      = date("H:i:s");
                    $per_1     = 0;
                    $per_2     = 0;

					$consulta4 = "INSERT produto        (codigo,             
														 categoria,      		
					                                     nome,
														 descricao,
														 valor,
														 destaque,
														 data,
														 hora)           
					                VALUES
					                                  ('$Novo_cod',
													   '$Edit1',
													   '$Edit2',
													   '$Edit3',
													   '$Edit4',
													   '$Edit5',
													   '$date1',
													   '$hora')";

					@mysql_query($consulta4, $link) or

                                  die("echo '<script>alert('Erro: Falha incluindo !!!');</script>'	
				                       echo '<script>history.go(-1);</script>'");					
                     	


$consulta4  = "SELECT * FROM produto WHERE nome = '$Edit2'";
					
$resultado4 = @mysql_query($consulta4);
					
$row4 = @mysql_fetch_array($resultado4);
					
$id_prod    = @$row4["cod_prod"];

include_once("../funcoes2.php");
?>
<html >
<head>
<title><?=$Titulo;?></title>
<link rel="shortcut icon" href="graphics/favicon.ico"/>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
</head>

<body  style=" margin-left: 0px;  margin-top: 0px;  margin-right: 0px;  margin-bottom: 0px; "   bgcolor="#FFC082" >
<form style="margin-bottom: 0" id="Unit1" name="Unit1" method="post"  action="/mensagem.php">
<table  width="775"   style="height:417px"  border="0" cellpadding="0" cellspacing="0"  bgcolor="#FFC082"  ><tr><td valign="top">
<div id="Shape1_outer" style="Z-INDEX: 0; LEFT: 5px; WIDTH: 765px; POSITION: absolute; TOP: 6px; HEIGHT: 417px">
<script type="text/javascript">
  var Shape1_Canvas = new jsGraphics("Shape1_outer");
  Shape1_Canvas.setColor("#C0C0C0");
  Shape1_Canvas.fillRect(1, 1, 779 - 1, 410 - 1);
  Shape1_Canvas.fillRect(1, 1, 779 - 1 + 1, 410 - 1 + 1);
  Shape1_Canvas.setStroke(0);
  Shape1_Canvas.setColor("#C0C0C0");
  Shape1_Canvas.drawRect(1, 1, 779 - 1 + 1, 410 - 1 + 1);
  Shape1_Canvas.paint();
</script>

</div>

<div id="Label1_outer" style="Z-INDEX: 1; LEFT: 48px; WIDTH: 608px; POSITION: absolute; TOP: 98px; HEIGHT: 30px">
<div id="Label1" style=" font-family: Verdana; font-size: 16px;  background-color: #C0C0C0;height:30px;width:608px;"  align="Center"   ><P><STRONG>Parabéns - Seu produto foi cadastrados com Susseco !!!</STRONG></P></div>
</div>
<div id="Image1_outer" style="Z-INDEX: 16; LEFT: 6px; WIDTH: 760px; POSITION: absolute; TOP: 6px; HEIGHT: 84px">
<div id="Image1_container" style=" width: 779;  height: 84; overflow: hidden;" ><img id="Image1" src="graphics/forum.png"  width="784"  height="84"  border="0"       /></div>
</div>
<div id="Label2_outer" style="Z-INDEX: 3; LEFT: 152px; WIDTH: 80px; POSITION: absolute; TOP: 138px; HEIGHT: 30px">
<div id="Label2" style=" font-family: Verdana; font-size: 16px;  background-color: #C0C0C0;height:30px;width:80px;"  align="Center"   ><P><STRONG>Clique </STRONG></P></div>
</div>
<div id="Label3_outer" style="Z-INDEX: 4; LEFT: 224px; WIDTH: 48px; POSITION: absolute; TOP: 138px; HEIGHT: 22px">
<div id="Label3" style=" font-family: Verdana; font-size: 16px;  background-color: #C0C0C0;height:22px;width:48px;"  align="Center"   ><a href="pre_upload.php?cod_prod=<?=$id_prod;?>"><P><STRONG><U><FONT color=#0000ff>aqui</FONT></U></STRONG></P></a></div>
</div>
<div id="Label4_outer" style="Z-INDEX: 5; LEFT: 272px; WIDTH: 288px; POSITION: absolute; TOP: 138px; HEIGHT: 22px">
<div id="Label4" style=" font-family: Verdana; font-size: 16px;  background-color: #C0C0C0;height:22px;width:288px;"  align="Center"   ><P><STRONG>Para incluir as fotos do Produto</STRONG></P></div>
</div>
</td></tr></table>
</form></body>
</html>
