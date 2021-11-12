<?
include_once('logar.php');

include_once('config.php');

@session_start();
$ser_name3_c    = escapestrings(strtoupper($_SESSION["log_name_c"]));
$acesso_2       = escapestrings($_SESSION['data_log_2']);
$abrir_up       = $_SESSION['abrir_up'];


if (!empty($ser_name3_c)){

}else{
	$ser_name3_c = trim(strtoupper("Visitante"));
}

include("visitas_pag.php");

?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Compraai</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link rel="stylesheet" href="estilo1.css" type="text/css" media="screen,projection" />

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

    A:link,a:active,a:visited{ color:#000000; text-decoration:none; }
    A:hover{ color:#000000; text-decoration:none; }
	A:visited {color:#0000cc;}
	A:active {color:#0000cc;}

	A.clase1:visited {color:#000000;}
	A.clase1:active {color:#000000;} 
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
			  <A class=linkbranco href="inicio.php"><font color="#FFFFFF"> Home </font></a>|
			  <A class=linkbranco href="cadastro/cadastro.php"><font color="#FFFFFF"> Cadastre-se </font></a>|
			  <A class=linkbranco href="fale/fale.php"><font color="#FFFFFF"> Fale Conosco </font></a>|
			  <A class=linkbranco href="loja/loja.php"><font color="#FFFFFF"> Loja Virtual </font></a>|
			  <A class=linkbranco href="forum/forum.php"><font color="#FFFFFF"> Forum </font></a>|
			  <A class=linkbranco href="login_sair.php"><font color="#FFFFFF">Sair</font></a> <img src="graphics/px1.gif" width="20" height="8"></b></font></div></td>
            </tr>
          </table>
            <table width="100%" height="69" border="0" cellpadding="0" cellspacing="0" >
              <tr>
                <td width="306" height="69" bgcolor="#FC9107"><img src="graphics/logo10.png" width="250" height="71"></td>
                <td width="365" bgcolor="#FC9107"><img src="graphics/pagto.png" width="320" height="68"></td>
                <td width="322" align="right" background="graphics/user.png" bgcolor="#FC9107">
                  <div align="right"></div>
                  <table width="233" height="53" border="0" cellpadding="0" cellspacing="0">
                  
                  
                   <? 
                   if ($falha_login == "falhou")
				   {
                   ?>
				   
				    <form name="form1" method="post" autocomplete="off" action="login_sair.php">

                      <tr>
                        <td width="188" height="5" valign="bottom"><div align="right"><span class="style1"> <img src="graphics/px1.gif" width="1" height="5"><img src="graphics/px1.gif" width="1" height="1"></span> </div></td>
                        <td width="45" align="right" valign="bottom"></td>
                      </tr>
                      <tr>
                        <td height="46" align="right"><div align="right"><span class="style4"> <font color="#FF0000">Falha no Login</font> <br>
                               Usuario ou Senha Incorretos <br>
                              &nbsp;<font color="#FF0000">ERRO !!!</font> &nbsp;  </span> </div></td>
                        <td align="left" valign="bottom"><input type=image name="Sair" src="graphics/sair.png" width="28" height="11"> </td>
                      </tr>
                    </form>
				   

                   <?
				   }else{
				   ?>                    
                  
                  
		                  <?
		                  if ($ser_name3_c == "VISITANTE"){
		                  
						  ?>
		                  
		                    <form name="form1" method="post" autocomplete="off" action="logar.php?acao=logar">
		
		                      <tr>
		                        <td width="113" height="30" valign="bottom"><div align="right"><span class="style1"> <img src="graphics/px1.gif" width="1" height="1"/><span class="style3">login.</span>:<img src="graphics/px1.gif" width="5" height="1"/><img src="graphics/px1.gif" width="1" height="1"/></span> </div></td>
		                        <td width="90" align="right" valign="bottom">
								<input type="text" name="log_name_c" style="height:20px; width:90px; "/></td>
		                        <td width="30" valign="bottom"><div align="center"><a href="lembra/senha_4i.php"><img src="graphics/ajud-1.png" width="13" height="13" border="0"/></a></div></td>
		                      </tr>
		                      <tr>
		                        <td height="16" align="right"><div align="right"><span class="style4"> <img src="graphics/px1.gif" width="1" height="1"/>senha.:<img src="graphics/px1.gif" width="5" height="1"/></span> </div></td>
		                        <td align="right">
								<input type="password" name="pwd" style="height:20px; width:90px; "/></td>
		                        <td>&nbsp;</td>
		                      </tr>
		                      <tr>
		                        <td height="19" align="right" valign="top">&nbsp; </td>
		                        <td align="right" valign="top">&nbsp;</td>
		                        
		                        
		                        <td align="center" valign="top"><input type='image' name="Entrar" src="graphics/enter.png" width="28" height="11"/></td>
		                        
		                      </tr>
		                    </form>
		
		                    
		                   <?
						   }else{
						   ?> 
						   
						    <form name="form1" method="post" autocomplete="off" action="login_sair.php">
		
		                      <tr>
		                        <td width="188" height="5" valign="bottom"><div align="right"><span class="style1"> <img src="graphics/px1.gif" width="1" height="2"></span> </div></td>
		                        <td width="45" align="right" valign="bottom"></td>
		                      </tr>
		                      <tr>
		                        <td height="44" align="right"><div align="right"><span class="style4"> Ola.: <?=$ser_name3_c;?> <br>
		                              Seu Ultimo acesso foi em: <br>
		                              &nbsp;<?=trim($acesso_2);?>&nbsp;  </span> </div></td>
		                        <td align="left" valign="bottom"><input type=image name="Sair" src="graphics/sair.png" width="28" height="11"> </td>
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
                <td width="17%" height="27" background="graphics/fon03.gif"><img src="graphics/px1.gif" width="10" height="1"><span class="style15"><span class="style22"><font color="#005151"><?=trim($usuarios);?>&nbsp;&nbsp;usu&aacute;rio(s) on-line</font></span></span></td>
                <td width="83%" background="graphics/fon03.gif"> <font size="2" face="Verdana"><span class="style1"><span class="style3">
				
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
				
				
				 <i><font color="#009999">Se vo&ccedil;&ecirc; n&atilde;o e cadastrado </font></i></span></span> </font><font size="2"><a href="<?=$progr_7;?>"><b><font color="#000000">clique aqui</font></b></a></font> </td>
              </tr>
            </table>
            <table width="100%" height="32" border="0" cellpadding="0" cellspacing="0">
              <tr>
                <td width="54%" height="30" bgcolor="#FFB368"><div align="center">
                    <table width="409" border="0" cellpadding="0" cellspacing="0">
                      <tr>
                      
                      <form name="form" method="post" action="buscar/buscar.php?acao=buscar">

                        <td width="62"><b><font size="2" face="Verdana">Buscar:<img src="graphics/px1.gif" width="5" height="1"></font></b></td>
                        <td width="309"><input name="buscar" type="text" size="15" style="width:300px "></td>
                        <td width="38"><div align="center"><input type=image name="Pesquisa" src="graphics/ok_2.png" width="29" height="20"></div></td>
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
    </td>
  </tr>
</table>
</body>
</html>