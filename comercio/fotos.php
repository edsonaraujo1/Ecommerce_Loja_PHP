<?
// Abre Conexão com o MySql
include("../conexao.php");
// Chama o Banco de Dados

$link = @mysql_connect($host,$user,$pass);

@mysql_select_db($db);

$consulta3  = "SELECT * FROM produto2 WHERE codigo = '$cod_prod'";
					
$resultado3 = @mysql_query($consulta3);
					
				
$row3 = @mysql_fetch_array($resultado3);
					
$id         = @$row3["codigo"];
$id_prod    = @$row3["codigo"];
$nome       = @$row3["nome"];
$descricao  = @$row3["descricao"];
$preco      = @$row3["valor"];
$foto       = @$row3["fot_peq"];
$foto1      = @$row3["fot_1"];
$foto2      = @$row3["fot_2"];
$foto3      = @$row3["fot_3"];

?>
<html>
<head>
<title>Fotos do Produto</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body bgcolor="#FFFFFF">
<br/>

<?
    if (empty($foto1)){
	
	    $foto1 = "fotos/sem_foto.jpg";

    }else{
?>
        <center><img src="../<?=$foto1;?>"/></center><br/>
<?
}
    if (empty($foto2)){
	
	    $foto2 = "fotos/sem_foto.jpg";

    }else{
?>
        <center><img src="../<?=$foto2;?>"/></center><br/>
<?
}
    if (empty($foto3)){
	
	    $foto3 = "fotos/sem_foto.jpg";

    }else{
?>
        
        <center><img src="../<?=$foto3;?>"/></center><br/>
<?
}
?>        
</body>
</html>