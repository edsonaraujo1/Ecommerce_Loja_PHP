<?
/*
 -----------------------------------------
 Desenvolvido por...: Edson de Araujo
 Desenvolvido por...: Jean Carlos de Araujo
 
 Finalidade.........: configuracao visual da Pagina
 Criado em Data.....: 06/07/2009
 Ultima Atualização : 18/08/2009 

 DEUS SEJA LOUVADO
 -----------------------------------------
*/

$color_bor   = "#FF9933";

// Imagens da Pagina

$imagem_1    = "imag_1.png";                // 1ª Imagem do plano
$imagem_2    = "lay1x1.png";                // 2ª Imagem do plano
$imagem_3    = "lay2x1.png";                // 3ª Imagem do plano
$imagem_4    = "menu.png";                  // Fundo do Menu
$imagem_5    = "imag_5y.png";               // 4ª Imagem do plano
$imagem_6    = "imag_6.png";                // 5ª Imagem do plano
$imagem_7    = "";
$logo1_sis   = "port_3.gif";                 // Logo giratorio
$fundo_z     = "bg.gif";                     // Fundo da Pagina
$comercial_1 = "banner01.gif";               // Gif animado no Menu Vertical 
$pop_uper_1  = "banner_exemplos.PNG";        // Imagem do comercial Pop_uper
$pop_uper    = 0;                            // Tela de Pop_uper Comercial  // 9 = sim  0 = nao
$Titulo      = ".:Compraai.com.br:.";   // Titulo da Pagina
$createby    = "Created by iSysMp.com.br todos os direitos reservados 2009";


// Botoes Vertical

$botao_sys_0  = "home.png";        $progr_0     = "inicio.php?op_z=wy"; 			// 1º  Botão 
$botao_sys_1  = "forum.png";       $progr_8     = "forum/forum.php"; 				// 2º  Botão
$botao_sys_2  = "programacao.png"; 
$botao_sys_3  = "portal.png";      $progr_2     = "comercio/comercio.php"; 			// 4º  Botão
$botao_sys_4  = "loja.png";        $progr_4     = "loja/loja.php"; 					// 5º  Botão
$botao_sys_5  = "vender.png";      $progr_5     = "mercado/produto.php"; 			// 6º  Botão
$botao_sys_6  = "empregos.png";    $progr_6     = "empregos/empregos.php"; 			// 7º  Botão
$botao_sys_7  = "cadastro.png";    $progr_7     = "cadastro/cadastro.php"; 			// 8º  Botão
$botao_sys_8  = "bate_papo.png";   $progr_8     = "batepapo/bate_papo.php"; 		// 9º  Botão
$botao_sys_9  = "downloadsx.png";  $progr_9     = "downloads/downloads.php"; 		// 9º  Botão
$botao_sys_10 = "enquete.png";     $progr_10    = "enquete/enquete.php"; 			// 10º Botão
$botao_sys_11 = "sistemas.png";    $progr_11    = "sistema/sistema.php"; 			// 11º Botão
$botao_sys_12 = "sites.png";       $progr_12    = "sites/sites.php"; 				// 11º Botão
$botao_sys_13 = "contatos.png";    $progr_13    = "fale/fale.php"; 				    // 11º Botão
$botao_sys_14 = "#.png";           $progr_14    = "#"; 		                        // 9º  Botão


// Botoes Horizontais

$bot_horiz_1 = "botoes1.png";      $progr_15    = "dados/dados.php";  	// 1º Botal  
$bot_horiz_2 = "botoes2.png";      $progr_16    = "meus_prod/meus_prod.php"; 		// 2º Botal  
$bot_horiz_3 = "botoes.png";       $progr_17    = "#";  				// 3º Botal  
$bot_horiz_4 = "botoes.png";       $progr_18    = "#";  				// 4º Botal  
$bot_horiz_5 = "botoes.png";       $progr_19    = "#";  				// 5º Botal  

// Botoes Abaixo do Login


$progr_20 = "loja/ver_carrinho.php";
$progr_21 = "loja/ver_carrinho.php";
$progr_22 = "loja/ver_carrinho.php";
$progr_23 = "fale/fale.php";
$progr_24 = "carrinho.php?ver_0=9";
$progr_25 = "php/php.php";
$progr_26 = "jogos/jogos.php";


$anuncie     = "Anuncie Aqui seu<br>Site e Produto...;-)";

$alte_url_pag = "asdre";

// Video Apresentado na Tela inicial

$video_fx    = "

<object width='425' height='344'><param name='movie' value='http://www.youtube.com/v/YtZi4so47Fg&hl=pt-br&fs=1&'></param><param name='allowFullScreen' value='true'></param><param name='allowscriptaccess' value='always'></param><embed src='http://www.youtube.com/v/YtZi4so47Fg&hl=pt-br&fs=1&' type='application/x-shockwave-flash' allowscriptaccess='always' allowfullscreen='true' width='276' height='240'></embed></object>

";

// Saida
$progr_0x    = "../inicio.php";
$progr_1x    = "../inicio.php";
$progr_2x    = "../inicio.php";
$progr_3x    = "../inicio.php";
$progr_4x    = "../inicio.php";
$progr_5x    = "../inicio.php";
$progr_6x    = "../inicio.php";
$progr_7x    = "../inicio.php";

@session_start();
//unset ($_SESSION['Path1']);

// Funcao Verifica Versao do Browse
$browser_cliet = isset($_SERVER['HTTP_USER_AGENT']) ? $_SERVER['HTTP_USER_AGENT']:"";

if(strpos($browser_cliet, 'Opera')!== false) { $browser = 'Opera';
}elseif(strpos($browser_cliet, 'Gecko')!== false) { $browser = 'Firefox';
}elseif(strpos($browser_cliet, 'MSIE')!== false) { $browser = 'MS Internet Explorer';
}elseif(strpos($browser_cliet, 'Lynx')!== false) { $browser = 'Lynx';
}elseif(strpos($browser_cliet, 'WebTV')!== false) { $browser = 'WebTV';
}elseif(strpos($browser_cliet, 'Konqueror')!== false) { $browser = 'Konqueror';
}elseif(strpos($browser_cliet, 'Google')!== false) { $browser = 'Robôs de Busca';
}else $browser = " Desconhecido"; 
//echo $browser; 

// Saldação ao usuario

$hora = date("H"); //Extrai apenas a hora
if ($hora >= 0 and $hora < 6) {
 $situa_1 = "Boa Madrugada";
 $sol_1   = "imagens/noite.bmp";
 } elseif ($hora >=6 and $hora <12) {
 $situa_1 = "Bom Dia";
 $sol_1   = "imagens/dia.bmp";
 } elseif ($hora >=12 and $hora <19) {
 $situa_1 = "Boa Tarde";
 $sol_1   = "imagens/dia.bmp";
 }else {
 $situa_1 = "Boa Noite";
 $sol_1   = "imagens/noite.bmp";
}

setlocale(LC_TIME,"portuguese");
$bomdia = $situa_1.", hoje e  ".strftime("%A, %d de %B de %Y"); 
$bomdia2 = ", hoje e  ".strftime("%A, %d de %B de %Y");


function escapestrings($b) {
    //se magic_quotes não estiver ativado, escapa a string
    if (!get_magic_quotes_gpc()) {
        return @mysql_escape_string($b); // função nativa do php para escapar variáveis.
    } else { 
        // caso contrario
        return $b; // retorna a variável sem necessidade de escapar duas vezes
    }
}

//--- Informa quantos usuarios estao conectados ao sistema
  $date_time = date("d/m/Y");
  $hora_time = date("H:i:s");
  $timestamp=time(); 
  $timeout=time()-100; // valor em segundos 
  $result=@mysql_db_query($db, "INSERT INTO useronline VALUES ('$timestamp','$REMOTE_ADDR','$PHP_SELF','$date_time','$hora_time','$ser_name3_c')");
  $result=@mysql_db_query($db, "DELETE FROM useronline WHERE timestamp<$timeout"); 
  $result=@mysql_db_query($db, "SELECT FROM useronline"); 
  $usuarios=@mysql_num_rows($result); 


//function to encrypt the string
function encode5t($str)
{
  for($i=0; $i<3;$i++)
  {
    $str=strrev(base64_encode($str)); //apply base64 first and then reverse the string
  }
  return $str;
}
//function to decrypt the string
function decode5t($str)
{
  for($i=0; $i<3;$i++)
  {
    $str=base64_decode(strrev($str)); //apply base64 first and then reverse the string}
  }
  return $str;
}


?>