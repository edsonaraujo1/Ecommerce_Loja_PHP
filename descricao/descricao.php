<?
/*
 -----------------------------------------
 Desenvolvido por...: Edson de Araujo
 Finalidade.........: Descricao Loja Virtual
 Criado em Data.....: 07/12/2007
 Ultima Atualização : 07/07/2008 

 DEUS SEJA LOUVADO
 -----------------------------------------
*/

require("../config.php");

//require("../logar.php");

@session_start();
$ser_name3_c    = escapestrings(strtoupper($_SESSION["log_name_c"]));
$acesso_2       = escapestrings($_SESSION['data_log_2']);
$_SESSION['id_prod_2'] = $id_prod;

if (!empty($ser_name3_c)){

}else{
	$ser_name3_c = trim(strtoupper("Visitante"));
}

include("visitas_pag.php");

// Abre Conexão com o MySql
include("../conexao.php");
// Chama o Banco de Dados

$link = @mysql_connect($host,$user,$pass);

@mysql_select_db($db);

$consulta3  = "SELECT * FROM produto WHERE cod_prod = '$id_prod'";
					
$resultado3 = @mysql_query($consulta3);
					
				
$row3 = @mysql_fetch_array($resultado3);
					
$id         = @$row3["cod_prod"];
$id_prod    = @$row3["cod_prod"];
$nome       = @$row3["nome"];
$descricao  = @$row3["descricao"];
$preco      = @$row3["valor"];
$peso_1     = @$row3["peso"];
$foto       = @$row3["fot_peq"];
$visita_1   = @$row3["visita"];
$data_1     = @$row3["data"];
$sabor      = @$row3["sabores"];
$conte      = @$row3["conteudo"];
 
$qtd_id = $visita_1 + 1;

$faz = 1;


$consulta_log = "UPDATE produto  SET visita = '$qtd_id' WHERE cod_prod = '$id_prod'";

@mysql_query($consulta_log, $link);


require("inew_undher_files.php");

?>

