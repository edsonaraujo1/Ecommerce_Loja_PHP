<?
//include_once("config.php");

if (!empty($alte_url_pag)){


?>
			  <ul id="menu">
				<li><div align="left"><a href="../<?=$progr_0;?>">Home</a></div></li>
				<li><div align="left"><a href="../<?=$progr_1;?>">Forum</a></div></li>
				<li><div align="left"><a href="../<?=$progr_2;?>">Programação</a></div></li>
				<li><div align="left"><a href="../<?=$progr_3;?>">Portal da Troca</a></div></li>
				
				
				<?
				if ($ser_name3_c != "VISITANTE"){
				?>                  
				
				<li><div align="left"><a href="../<?=$progr_15;?>">Meus Dados</a></div></li>
				<li><div align="left"><a href="../<?=$progr_16;?>">Minhas Vendas</a></div></li>
				<li><div align="left"><a href="../<?=$progr_17;?>">Meu Espaço</a></div></li>
				
				<?
				}
				?>
				
				<li><div align="left"><a href="../<?=$progr_4;?>">Loja Virtual</a></div></li>
				<li><div align="left"><a href="../<?=$progr_5;?>">Vender</a></div></li>
				<li><div align="left"><a href="../<?=$progr_6;?>">Empregos</a></div></li>
				<li><div align="left"><a href="../<?=$progr_7;?>">Cadastre-se</a></div></li>
				<li><div align="left"><a href="../<?=$progr_8;?>">Bate-Papo</a></div></li>
				<li><div align="left"><a href="../<?=$progr_9;?>">Downloads</a></div></li>
				<li><div align="left"><a href="../<?=$progr_25;?>">Rotimas PHP</a></div></li>
				<li><div align="left"><a href="../<?=$progr_10;?>">Enquetes</a></div></li>
				<li><div align="left"><a href="../<?=$progr_11;?>">Sistemas</a></div></li>
				<li><div align="left"><a href="../<?=$progr_12;?>">Sites</a></div></li>
				<li><div align="left"><a href="../<?=$progr_26;?>">Jogos</a></div></li>
				<li><div align="left"><a href="../<?=$progr_13;?>">Contato</a></div></li>
			  </ul>

<?
}else{

header('Location:../index.php');

	
}
?>
