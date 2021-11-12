<html>

<script>
function refresh(){
	setTimeout('dorefresh()', 30000);
}
function dorefresh(){
	window.location.reload();
}
</script>


<body style=" margin-left: 0px;  margin-top: 0px;  margin-right: 0px;  margin-bottom: 0px; " bgcolor="#D7DFEE">

<?

include('../sql_injection.php');

// Resgata a Sessao
@session_start();
$nome3      = addslashes(strtolower($_SESSION["log_name_c"]));

// Abre Conexão com o MySql
include("../conexao.php");

$link = @mysql_connect($host,$user,$pass);

@mysql_select_db($db);


$consulta_x  = "SELECT * FROM tt_ser_01 WHERE login = '". anti_sql_injection($nome3) ."'";

$resultado_x = @mysql_query($consulta_x);

$row_x = @mysql_fetch_array($resultado_x);

$id          = @$row_x["id"];
$on_line     = trim(@$row_x["messenger"]);
$hora_inicio = strtotime(@$row_x["hora1"]);
$hora_fim    = strtotime(@$row_x["hora2"]);
$semana      = @$row_x["semana"];
$hora_atual  = strtotime(date('H:i'));


	// Envia Alerta de Menssagem Privado
	
	$consulta2  = "SELECT * FROM messenger WHERE destino = '". strtolower($nome3) ."' ORDER BY id ASC";
	
	$resultado2 = @mysql_query($consulta2);
	
	$row2 = @mysql_fetch_array($resultado2);
	
	$id2       = @$row2["id"];
	$origem    = @$row2["origem"];
	$destino   = @$row2["destino"];
	$data      = @$row2["data"];
	$hora      = @$row2["hora"];
	$mensagem  = trim(@$row2["texto"]);

	if (!empty($destino)){

         if ($on_line == 'OF'){
         	
	
			?>
			<script>	
			function abrir(pagina,largura,altura) {
			        
			        //pega a resolução do visitante
			        w = screen.width;
			        h = screen.height;
			        
			        //divide a resolução por 2, obtendo o centro do monitor
			        meio_w = w/2;
			        meio_h = h/2;
			        
			        //diminui o valor da metade da resolução pelo tamanho da janela, fazendo com q ela fique centralizada
			        altura2 = altura/2;
			        largura2 = largura/2;
			        meio1 = meio_h-altura2;
			        meio2 = meio_w-largura2;
			        
			        //abre a nova janela, já com a sua devida posição
			        window.open(pagina,'','height=' + altura + ', width=' + largura + ', top='+meio1+', left='+meio2+'');
			 }

		     document.write('<embed src="despertador.wav" autostart="true" hidden="true">'); 
			
			 abrir('../batepapo/messenger.php?nome=<?=$origem;?>&mensa=<?=$mensagem;?>','380','460');
			 
			 </script>
			
		     <?	
		     $avizar = 'mostrar_balao';
			 $consulta2 = "DELETE FROM messenger WHERE id = '". anti_sql_injection($id2) ."'";
			
			 @mysql_query($consulta2, $link);
	         	
	         }
}

// Chama o Banco de Dados
$hostname_conn = $host;
$database_conn = $db;
$username_conn = $user;
$password_conn = $pass;

// Conectamos ao nosso servidor MySQL
if(!($conn = mysql_connect($hostname_conn,$username_conn,$password_conn))) 
{
   echo "Erro ao conectar ao MySQL.";
   exit;
}
// Selecionamos nossa base de dados MySQL
if(!($con = mysql_select_db($database_conn,$conn))) 
{
   echo "Erro ao selecionar ao MySQL.";
   exit;
}

$con = mysql_connect($hostname_conn,$username_conn,$password_conn);
$bd  = mysql_select_db($database_conn);


$query_Recordset1a = "SELECT usuario FROM user_logados";
$Recordset1a = @mysql_query($query_Recordset1a, $conn); // or die(mysql_error());
$row_Recordset1a = @mysql_fetch_assoc($Recordset1a);
$totalRows_Recordset1a = @mysql_num_rows($Recordset1a);


Do {  

	if (strtolower(trim($row_Recordset1a['usuario'])) == $nome3){

		echo "<tr><td bgcolor='#D7DFEE' width='10'><img src='../graphics/enviar/voce.gif' width='17' height='15'>";
        echo "<td width='190'><font size='2' face='Verdana'><b>". strtolower($row_Recordset1a['usuario'])."</b></td><br>";
		
	}else{
		
		if (empty($nome3)){
			
			echo "<tr><td bgcolor='#D7DFEE' width='10'><img src=../graphics/room_user.gif border=0></a>";
	        echo "<td width='190'><font size='2' face='Verdana'>". strtolower($row_Recordset1a['usuario'])."</td>";
			
		}else{
			
			
			if ($avizar == 'mostrar_balao'){
				
				echo "<tr><td bgcolor='#D7DFEE' width='10'><a href=javascript:janela_priva('../batepapo/messenger.php?nome=".strtolower($row_Recordset1a['usuario'])."')><img src=../graphics/room_user.gif border=0></a>";
		        echo "<td width='190'><font size='2' face='Verdana'>". strtolower($row_Recordset1a['usuario'])."<img src='../graphics/balao.png' width='17' height='17'></td>";
				$avizar = " ";
				
			}else{
			
				echo "<tr><td bgcolor='#D7DFEE' width='10'><a href=javascript:janela_priva('../batepapo/messenger.php?nome=".strtolower($row_Recordset1a['usuario'])."')><img src=../graphics/room_user.gif border=0></a>";
		        echo "<td width='190'><font size='2' face='Verdana'>". strtolower($row_Recordset1a['usuario'])."</td>";
				$avizar = " ";
	        }
	        
	        
		}
	}
echo "</td></tr>";
}
while ($row_Recordset1a = mysql_fetch_assoc($Recordset1a));
      $rows = mysql_num_rows($Recordset1a);
      if($rows > 0) {
         mysql_data_seek($Recordset1a, 0);
	     $row_Recordset1a = mysql_fetch_assoc($Recordset1a);
      }


?>
			  

</body>
<script>
refresh();
</script>

<script>

function janela_priva (URL){ 
   window.open(URL,"janela5","width=380,height=460,resizable=NO,status=NO,Scrollbars=NO,location=NO,menubar=NO,toolbar=NO"); 
} 

</script>


</html>