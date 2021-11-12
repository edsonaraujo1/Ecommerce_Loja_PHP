<?
/*
 -----------------------------------------
 Desenvolvido por...: Edson de Araujo
 Finalidade.........: Alterar Produto
 Criado em Data.....: 07/12/2007
 Ultima Atualização : 13/07/2009

 DEUS SEJA LOUVADO
 -----------------------------------------
*/

include('../config.php');

// Abre Conexão com o MySql
include("../conexao.php");
// Chama o Banco de Dados

$link = @mysql_connect($host,$user,$pass)

    or die( require("../server.php.php"));

@mysql_select_db($db);


$id_prod_xt = encode5t($cod_prod);

// Resgata a Sessao
@session_start();
$cod_apg = $_SESSION["id_apa"];


echo $id_prod_xt."<br>";
echo $cod_apg."<br>";
echo 'fim';

break;



$consulta4 = "UPDATE produto2 SET   excluido  = '". $id_apagar ."' WHERE codigo = ". $id_prod_x2 ." ";

@mysql_query($consulta4, $link)  or

             die("<script>alert('Erro: Falha na Alteração !!!');</script>	
				 <script>history.go(-1);</script>");					


include('descricao.php');
?>