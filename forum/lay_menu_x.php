<?
//include_once("config.php");

if (!empty($alte_url_pag)){


?>

            <div id="nav">
              <ul>
                <li ><a href="../inicio.php?op_z=wy">Principal</a></li>
                <li id="current"><a href="../forum/forum.php">Forum</a></li>
                <li><a href="../comercio/comercio.php">Comprar</a></li>
                <li><a href="../mercado/produto.php">Vender</a></li>
                <li ><a href="../loja/loja.php?abrir_up=layout.php">Loja</a></li>
                <li><a href="../emprego/emprego.php">Emprego</a></li>
                <li><a href="../cadastro/cadastro.php">Cadastre_se</a></li>
                <li><a href="../batepapo/bate_papo.php">Bate-Papo</a></li>
                <li><a href="../downloads/downloads.php">Downloads</a></li>
                <li><a href="../fale/fale.php">Contato</a></li>
              </ul>
          </div>

<?
}else{

header('Location:../index.php');

	
}
?>
