<?
//include_once("config.php");

if (!empty($alte_url_pag)){


?>


            <div id="nav">
              <ul>
                <li ><a href="../<?=$progr_0;?>">Home</a></li>
                <li ><a href="../<?=$progr_1;?>">Forum</a></li>
                <li><a href="../<?=$progr_2;?>">Programa&ccedil;&atilde;o</a></li>
                <li><a href="../<?=$progr_3;?>">Portal da Troca</a></li>
                <li><a href="../<?=$progr_4;?>?abrir_up=layout.php">Loja</a></li>
                <li><a href="../<?=$progr_5;?>">Vender</a></li>
                <li id="current"><a href="../<?=$progr_6;?>">Emprego</a></li>
                <li><a href="../<?=$progr_7;?>">Cadastre_se</a></li>
                <li><a href="../<?=$progr_8;?>">Bate-Papo</a></li>
                <li><a href="../<?=$progr_9;?>">Downloads</a></li>
                <li><a href="../<?=$progr_11;?>">Sistemas</a></li>
                <li><a href="../<?=$progr_13;?>">Contato</a></li>
              </ul>
          </div>

<?
}else{

header('Location:../index.php');

	
}
?>
