<?
/*
 ------------------------------------------
 Desenvolvido por...: Edson de Araujo
 Finalidade.........: Tela de Help
 Criado em Data.....: 07/12/2007
 Ultima Atualização : 07/12/2007 

 DEUS SEJA LOUVADO
 ------------------------------------------
*/

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

?>


<style type=text/css>



#topo {
width:96px;
height:31px;
border: 0px;
margin:1px;
padding:0;
right:0px;
bottom:-1px;
position:fixed;
}

* html img#topo {
position: absolute;
}


</style> 


<!--Inicio da Funcao PopUP 'Segunda Tela de Ajuda' com a classe popup-->

<script language='javascript'>
// Função que fecha o pop-up ao clicar no botao fechar
function fechar(){
document.getElementById('popup').style.display = 'none';
}
// Aqui definimos o tempo para fechar o pop-up automaticamente
function abrir(){
document.getElementById('popup').style.display = 'block';
setTimeout ('fechar()', 80000);
}
</script>

<body>

        <span>
        <?
if ($browser == "MS Internet Explorer"){
?>

		
		</span>
        <div id="marca" style="position:absolute; visibility:show; left:0px; top:0px; z-index:5000;">
		<a href="#"><img id="topo" src="../graphics/botao_t.PNG" alt="Ir para o Topo da Pagina" /></a>
		</div>             
		
		
		
		<span>
<script language='javaScript'>
		function checanav(){
		var x = navigator.appVersion;
		y = x.substring(0,4);
		if (y>=4) variaveis(),local();
		}
		function variaveis(){
		if (navigator.appName == "Netscape") {
		h=".left";
		v=".top";
		dS="document.";
		sD="";
		iW="window.innerWidth"
		iH="window.innerHeight"
		osX="window.pageXOffset"
		osY="window.pageYOffset"
		}else{
		h=".pixelLeft";
		v=".pixelTop";
		dS="";
		sD=".style";
		iW="document.body.clientWidth"
		iH="document.body.clientHeight"
		osX="document.body.scrollLeft"
		osY="document.body.scrollTop"
		}
		}
		obW=114+-114
		obH=24+-24
		objectXY="marca" 
		
		function local(){
		eval(dS+objectXY+sD+h+"="+((eval(iW))-obW+(eval(osX))));
		eval(dS+objectXY+sD+v+"="+((eval(iH))-obH+(eval(osY))));
		setTimeout("local()",100)
		}
		checanav()
		</script>

<?
}else{
?>	

		<div class="wrap" style="Z-INDEX: 5000; font-family: Arial; font-size: 10px;">
		<a href="#"><img src="../graphics/botao_t.PNG" id="topo" alt="Ir para o Topo da Pagina" /></a>
		</div>            


<?	
}
?>
        </span>
</body>

<!--Fim da Funcao PopUP 'Segunda Tela de Ajuda' com a classe popup-->
