<?php

/**
 * @author holodek
 * @copyright 2009
 */

// Abre Conexão com o MySql
include("../conexao.php");

$link = @mysql_connect($host,$user,$pass);

@mysql_select_db($db);


function retiraCaracteres($menssagem)
{
	$resultado = mysql_query("SELECT * FROM palavrao");
	while ($mostra = mysql_fetch_array($resultado)){

		$menssagem = ereg_replace($mostra['MsgErrada'], "<img src='c-angry.jpg' width=46 height=16>", $menssagem);
	}	             
	return $menssagem;
	
}

$database =	$db;     // Banco de Dados

function encode_msg ($smil) {
    global $image_dir,$database;
    if ($smil) {
        $smil = str_replace("\r", "", $smil);             // Replace carrige return
        $smil = str_replace("\n", "<BR>", $smil); 	// Replace newline with <br>
	$result = mysql_db_query($database, "SELECT * FROM smilies") or died("Query Error");
        while ($db = mysql_fetch_array($result)) {
	    $smil = str_replace($db[code], "<img src=".$image_dir."../graphics/smilies/".$db[file].">", $smil); // Smilie
        }
    }
    return $smil;
}

?>