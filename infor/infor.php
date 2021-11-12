<?

require("../config.php");

//require("../logar.php");

session_start();
$ser_name3_c    = escapestrings(strtoupper($_SESSION["log_name_c"]));
$acesso_2       = escapestrings($_SESSION['data_log_2']);


if (!empty($ser_name3_c)){

}else{
	$ser_name3_c = trim(strtoupper("Visitante"));
}

include("../visitas_pag.php");


require("inew_undher_files.php");

?>