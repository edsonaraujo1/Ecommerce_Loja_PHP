<?
include_once("../config.php");

@session_start();
$ser_name3_c    = escapestrings(strtoupper($_SESSION["log_name_c"]));
$acesso_2       = escapestrings($_SESSION['data_log_2']);
$abrir_up       = $_SESSION['abrir_up'];

$files_open =  $abrir_up;

if (!empty($files_open)){
	
	$files_open = 'layout.php';
}
//$servletjs2 = '20$$20';

if ($servletjs2 == '20$$20'){

	if (!empty($ser_name3_c)){
	
	}else{
		$ser_name3_c = trim(strtoupper("Visitante"));
	}

include("visitas_pag.php");

include('help.php');

?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link rel="stylesheet" href="../estilo1.css" type="text/css" media="screen,projection" />

<style type="text/css">
<!--
.style1 {	font-family: Arial, Helvetica, sans-serif;
	font-weight: bold;
	font-size: 14px;
}
.style3 {font-size: 12px}
.style4 {font-family: Arial, Helvetica, sans-serif; font-weight: bold; font-size: 12px; }
.style22 {font-size: 10px}
.style23 {font-size: 14px; font-weight: bold;}

    A:link,a:active,a:visited{ color:#FFFFFF; text-decoration:none; }
    A:hover{ color:#000000; text-decoration:none; }
	A:visited {color:#0000cc;}
	A:active {color:#0000cc;}

	A.clase1:visited {color:#FFFFFF;}
	A.clase1:active {color:#FFFFFF;} 
	A.clase1:link {color:#000000;}
	A.clase1:hover {color:#000000;}

-->
</style>


		<script type="text/javascript">
                  
		//relogio
		
		
		function startTime()
		{
		var today=new Date()
		var h=today.getHours()
		var m=today.getMinutes()
		var s=today.getSeconds()
		// add a zero in front of numbers<10
		m=checkTime(m)
		s=checkTime(s)
		document.getElementById('txt').innerHTML=h+":"+m+":"+s
		t=setTimeout('startTime()',500)
		}
		
		function checkTime(i)
		{
		if (i<10) 
		  {i="0" + i}
		  return i
		}
		</script>

</head>

<body style=" margin-left: 0px;  margin-top: 0px;  margin-right: 0px;  margin-bottom: 0px; "   bgcolor="#FFFFFF">
<table width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td><table width="100%" border="0" cellpadding="0" cellspacing="0">
            <tr>
              <td height="19" bgcolor="#005151"><div align="right"><font color="#FFFFFF" size="1" face="Verdana"><b>
			  <A class=linkbranco href="../<?=$progr_0;?>"> Home </a>|
			  <A class=linkbranco href="../<?=$progr_0;?>"> Cadastre-se </a>|
			  <A class=linkbranco href="../<?=$progr_0;?>"> Fale Conosco </a>|
			  <A class=linkbranco href="../<?=$progr_0;?>"> Loja Virtual </a>|
			  <A class=linkbranco href="../<?=$progr_0;?>"> Forum </a>|
			  <A class=linkbranco href="../<?=$progr_0;?>">Sair </a><img src="../graphics/px1.gif" width="20" height="8"></b></font></div></td>
            </tr>
          </table>
            <table width="100%" height="69" border="0" cellpadding="0" cellspacing="0" >
              <tr>
                <td width="306" height="69" bgcolor="#FC9107"><img src="../graphics/logo10.png" width="250" height="71"></td>
                <td width="365" bgcolor="#FC9107"><img src="../graphics/pagto.png" width="320" height="68"></td>
                <td width="322" align="right" background="../graphics/user.png" bgcolor="#FC9107">
                  <div align="right"></div>
                  <table width="233" height="53" border="0" cellpadding="0" cellspacing="0">
                  
                  
                   <? 
                   if ($falha_login == "falhou")
				   {
                   ?>
				   
				    <form name="form1" method="post" autocomplete="off" action="../login_sair.php">

                      <tr>
                        <td width="188" height="5" valign="bottom"><div align="right"><span class="style1"> <img src="../graphics/px1.gif" width="1" height="5"><img src="../graphics/px1.gif" width="1" height="1"></span> </div></td>
                        <td width="45" align="right" valign="bottom"></td>
                      </tr>
                      <tr>
                        <td height="46" align="right"><div align="right"><span class="style4"> <font color="#FF0000">Falha no Login</font> <br>
                               Usuario ou Senha Incorretos <br>
                              &nbsp;<font color="#FF0000">ERRO !!!</font> &nbsp;  </span> </div></td>
                        <td align="left" valign="bottom"><input type=image name="Sair" src="../graphics/sair.png" width="28" height="11"> </td>
                      </tr>
                    </form>
				   

                   <?
				   }else{
				   ?>                    
                  
                  
		                  <?
		                  if ($ser_name3_c == "VISITANTE"){
		                  ?>
		                  
		                    <form name="form1" method="post" autocomplete="off" action="../logar.php?acao=logar">
		
		                      <tr>
		                        <td width="113" height="30" valign="bottom"><div align="right"><span class="style1"> <img src="../graphics/px1.gif" width="1" height="1"/><span class="style3">login.</span>:<img src="../graphics/px1.gif" width="5" height="1"/><img src="../graphics/px1.gif" width="1" height="1"/></span> </div></td>
		                        <td width="90" align="right" valign="bottom">
								<input type="text" name="log_name_c" style="height:20px; width:90px; "/></td>
		                        <td width="30" valign="bottom"><div align="center"><a href="../lembra/senha_4i.php"><img src="../graphics/ajud-1.png" width="13" height="13" border="0"/></a></div></td>
		                      </tr>
		                      <tr>
		                        <td height="16" align="right"><div align="right"><span class="style4"> <img src="../graphics/px1.gif" width="1" height="1"/>senha.:<img src="../graphics/px1.gif" width="5" height="1"/></span> </div></td>
		                        <td align="right">
								<input type="password" name="pwd" style="height:20px; width:90px; "/></td>
		                        <td>&nbsp;</td>
		                      </tr>
		                      <tr>
		                        <td height="19" align="right" valign="top">&nbsp; </td>
		                        <td align="right" valign="top">&nbsp;</td>
		                        
		                        
		                        <td align="center" valign="top"><input type='image' name="Entrar" src="../graphics/enter.png" width="28" height="11"/></td>
		                        
		                      </tr>
		                    </form>
		
		                    
		                   <?
						   }else{
						   ?> 
						   
						    <form name="form1" method="post" autocomplete="off" action="../login_sair.php">
		
		                      <tr>
		                        <td width="188" height="5" valign="bottom"><div align="right"><span class="style1"> <img src="../graphics/px1.gif" width="1" height="2"></span> </div></td>
		                        <td width="45" align="right" valign="bottom"></td>
		                      </tr>
		                      <tr>
		                        <td height="44" align="right"><div align="right"><span class="style4"> Ola.: <?=$ser_name3_c;?> <br>
		                              Seu Ultimo acesso foi em: <br>
		                              &nbsp;<?=trim($acesso_2);?>&nbsp;  </span> </div></td>
		                        <td align="left" valign="bottom"><input type=image name="Sair" src="../graphics/sair.png" width="28" height="11"> </td>
		                      </tr>
		                    </form>
		
						   <?	
		                   }	
		                   ?>
				   
				   <?
				   }
				   ?>
                    
                </table>
                </td>
              </tr>
            </table>
            <table width="100%%" border="0" cellpadding="0" cellspacing="0">
              <tr>
                <td width="17%" height="27" background="../graphics/fon03.gif"><img src="../graphics/px1.gif" width="10" height="1"><span class="style15"><span class="style22"><font color="#005151"><?=trim($usuarios);?>&nbsp;&nbsp;usu&aacute;rio(s) on-line</font></span></span></td>
                <td width="83%" background="../graphics/fon03.gif"> <font size="2" face="Verdana"><span class="style1"><span class="style3">
				
		<?		
		if ($ser_name3_c == "VISITANTE"){
        ?>
                <?=$bomdia;?>
                <?
		}else{
		?>
				
				<?=trim($situa_1);?>
                &nbsp;
                <?=$ser_name3_c;?>
                &nbsp;Seja Bem vindo.
        <?
		}
		?>
				
				
				 <i><font color="#009999">Se vo&ccedil;&ecirc; n&atilde;o e cadastrado </font></i></span></span> </font><font size="2"><a href="../<?=$progr_7;?>"><b><font color="#000000">clique aqui</font></b></a></font> </td>
              </tr>
            </table>
            <table width="100%" height="32" border="0" cellpadding="0" cellspacing="0">
              <tr>
                <td width="54%" height="30" bgcolor="#FFB368"><div align="center">
                    <table width="409" border="0" cellpadding="0" cellspacing="0">
                      <tr>
                      
                      <form name="form" method="post" action="../buscar/buscar.php?acao=buscar">

                        <td width="62"><b><font size="2" face="Verdana">Buscar:<img src="../graphics/px1.gif" width="5" height="1"></font></b></td>
                        <td width="309"><input name="buscar" type="text" size="15" style="width:300px "></td>
                        <td width="38"><div align="center"><input type=image name="Pesquisa" src="../graphics/ok_2.png" width="29" height="20"></div></td>
                       </form>
					    
                      </tr>
                    </table>
                </div></td>
                <td width="13%" bgcolor="#FFB368">&nbsp;</td>
                <td width="33%" bgcolor="#FFB368"><div align="center">
                    <table width="200" border="0" cellpadding="0" cellspacing="0">
                      <tr>

                      <?
                      include('bot_atalho.php');
                      ?>
                      
                        
                      </tr>
                    </table>
                </div></td>
              </tr>
          </table></td>
      </tr>
    </table>
      <table width="100%" height="23" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td height="23" valign="top" bgcolor="#FC9107">
          
		   <?
		   include('lay_menu_x.php');
	 	   ?>		  
		  
		  </td>
        </tr>
      </table>
      <table width="100%" height="998" border="0">
        <tr>
          <td width="15%" height="994" align="left" valign="top" bgcolor="#FFB368"><table width="100%" height="960" border="0" cellpadding="0" cellspacing="0">
            <tr>
              <td height="923" align="center" valign="top" bgcolor="#FFFFFF">
			  
			  <?
			  include('lay_menu.php');
			  ?>

              <br>
                <img src="../graphics/baner_vertical.PNG" width="140" height="580">                <br>
                <table width="128" border="0">
                  <tr>
                    <td width="130" align="center"> <strong>N&ordm; de visitas </strong> </td>
                  </tr>
                  <tr>
                    <td align="center"><?=$qtd_ivisita;?></td>
                  </tr>
                </table></td>
				
				
            </tr>
			
          </table>
            <table width="100%" height="34" border="0" cellpadding="0" cellspacing="0">
              <tr>
                <td width="146" height="27" valign="top" bgcolor="#FFFFFF">&nbsp;</td>
              </tr>
          </table>          </td>
          <td width="85%" valign="top" bgcolor="#FFB368">            
		    <table width="100%" height="994" border="0" cellpadding="0" cellspacing="0">
              <tr>
                <td width="100%" height="28" valign="top" bgcolor="#FFFFFF">
				
		  <?
          @session_start();
		  $_SESSION["alte_url_pag"] = "dsds32";
          ?>
          
          <iframe src="layout.php?entra_no_web1=at2" name="idPrincipal" width='100%' height='1013' scrolling="auto" frameborder="0"  borderCOLOR="#3A72BC" align="left" allowtransparency="true" ></iframe>
				
				</td>
              </tr>
          </table>            </td>
          <!--
          <td width="11%" align="left" valign="top" bgcolor="#FFB368">
            <table width="100%" height="960" border="0" cellpadding="0" cellspacing="0">
              <tr>
                <td width="172" height="942" align="center" valign="top" bgcolor="#FFFFFF">
				
				<?
				//include('destaque.php');
				?>
				
				</td>
              </tr>
            </table>      
            <table width="100%" height="34" border="0" cellpadding="0" cellspacing="0">
              <tr>
                <td width="146" height="27" valign="top" bgcolor="#FFFFFF">&nbsp;</td>
              </tr>
            </table>          
          </td>
          -->
        </tr>
      </table>
      <table width="100%" height="164" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td width="20%" height="17" valign="top" bgcolor="#005151"><div align="center" class="style3">
          </div></td>
          <td width="61%" valign="top" bgcolor="#005151"><div align="center"><span class="style3"><font color="#FFFFFF">
            <?=$createby;?>
          </font></span></div></td>
          <td width="19%" valign="top" bgcolor="#005151">&nbsp;</td>
        </tr>
        <tr>
          <td height="70" align="center" bordercolor="#FFFFFF" bgcolor="#FC9107">
            <DIV align=center></DIV>
          <DIV class=invisivel><a href="http://www.nfp.fazenda.sp.gov.br/" target="new"><img src="../graphics/nota_paulista.png" width="151" height="67" border="0"></a></DIV></td>
          <td align="center" bordercolor="#FFFFFF" bgcolor="#FC9107"><DIV align=center></DIV>
          <DIV class=invisivel><a href="http://www.pagseguro.uol.com.br" target="new"><img src="../graphics/pagseguroUOL.png" width="468" height="60" border="0"></a></DIV></td>
          <td align="center" bordercolor="#FFFFFF" bgcolor="#FC9107"><div align="left"></div></td>
        </tr>
        <tr>
          <td height="75" align="center" bordercolor="#FFFFFF" bgcolor="#FC9107"><span class="invisivel"><img src="../graphics/imagens_fontes/cadeado_1.png" width="165" height="67"></span></td>
          <td align="center" bordercolor="#FFFFFF" bgcolor="#FC9107"><DIV align=center><span class="style15"><STRONG><font color="#FFFFFF">Compraai.com.br</font></STRONG><font color="#FFFFFF"> - Portal de Trocas - Vendas - Compras - Forum - e muito mais <br>
  Todo conte&uacute;do deste site &eacute; protegido pela Lei 9.610, de Fevereiro de 1998.<BR>
  <A class=linkbranco href="../<?=$progr_0;?>">Home</A> | <A class=linkbranco href="../<?=$progr_11;?>">Comprar</A> | <A class=linkbranco href="../<?=$progr_5;?>">Vender</A> | <A class=linkbranco href="../<?=$progr_1;?>">Trocar</A> | <A class=linkbranco href="../<?=$progr_4;?>">Forum</A> | <A class=linkbranco href="../<?=$progr_25;?>">Loja Vitrine</A> | <A class=linkbranco href="../<?=$progr_13;?>">Fale Conosco </A> </font></span>
                <DIV class=invisivel>
                  <CENTER class="style14">
                  </CENTER>
                </DIV>
          </DIV>
            <DIV class=invisivel>
              <CENTER class="style14">
                <font color="#FFFF00"><span class="style15"><FONT face=verdana size=1>Criado por iSysmp.com.br</FONT></span></font>
              </CENTER>
          </DIV></td>
          <td align="center" bordercolor="#FFFFFF" bgcolor="#FC9107"><div align="left"><img src="../graphics/satisfacao_garantida3.png" width="72" height="72"><img src="../graphics/px1.gif" width="10" height="10"></div></td>
        </tr>
    </table>    </td>
  </tr>
</table>
</body>
</html>
<?
}else{
	
	
	header('Location:../index.php');

}
?>