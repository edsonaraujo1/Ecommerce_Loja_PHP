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

// Resgata a Sessao
session_start();
$servletjs2 = $_SESSION["servletjs2"];

if ($servletjs2 == '20$$20'){

// Abre Conexão com o MySql
include("conexao.php");
// Chama o Banco de Dados

$link = @mysql_connect($host,$user,$pass);

@mysql_select_db($db);

$resultado = @mysql_query("SELECT * FROM msg WHERE pai = '0' ORDER BY RAND() LIMIT 0,5"); // LIMIT 0,6


?>

        <tr>
        
          <td align="center" height="20" bgcolor="#FF850E" >
          <b><font color="#FFFFFF">Destaque no Forum Compraai</font></b>
		    <span class="style22">

            <?		 
			  $negrita = 1; 
			  while($linha = @mysql_fetch_array($resultado)) {
	
					$id_cod     = $linha["codigo"];
					$titulo     = $linha["titulo"];
					$data       = $linha["data"];
					$pai        = $linha["pai"];
					$topico     = $linha["topico"];
									
					if ($negrita==1){
					?>
					  <tr bgcolor="#FFFF99">
					  <td class="style4" class="clase1"><a href="forum/ler.php?pai=<?=$pai;?>&titulo=<?=$titulo;?>&topico=<?=$topico;?>&codigo=<?=$id_cod;?>#mesg"><?=substr($titulo,0,25);?>&nbsp;&nbsp;<?=$data;?></a></td>
					  </tr>
					<?
								
					  $negrita = 0;		            
					}else{
					?>
					  <tr bgcolor="#CCCCCC">
					  <td class="style4" class="clase1"><a href="forum/ler.php?pai=<?=$pai;?>&titulo=<?=$titulo;?>&topico=<?=$topico;?>&codigo=<?=$id_cod;?>#mesg"><?=substr($titulo,0,25);?>&nbsp;&nbsp;<?=$data;?></a></td>
					  </tr>
					<?
					  $negrita = 1;	
					}			
			  }
		   ?>	  

		  </span></td>
        </tr>
<?
}else{
	
	
	header('Location:index.php');

}
?>
