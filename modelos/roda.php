<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>
<table width="100%" border="0">
  <tr>
    <td width="2%"><img src="../graphics/px1.gif" width="10" height="10"></td>
    <td width="97%"><div align="center">
        <table width="100%" border="0">
          <tr>
            <td bgcolor="#FF6600"><div align="center" class="style3"><b><font color="#FFFFFF">Mais detalhes do Produto</font></b></div></td>
          </tr>
          <tr>
            <td valign="top"><table width="100%" border="0" align="left" cellpadding="0" cellspacing="0">
                <tr bgcolor="#FFFFCC">
                  <td width="19%" class="style12"> Valor a Combinar?.: </td>
                  <td width="23%"><?=$combinar;?></td>
                  <td width="13%"><span class="style12">E-Mail.: </span></td>
                  <td width="45%"><?=$id_email;?></td>
                </tr>
                <tr>
                  <td class="style12"> Detalhes da Entrega.: </td>
                  <td><?=$entrega;?></td>
                  <td><span class="style12">Fones.: </span></td>
                  <td><?=$id_fone." / ".$id_fone1;?></td>
                </tr>
                <tr bgcolor="#FFFFCC">
                  <td><span class="style12"> Forma de Pagamento.: </span></td>
                  <td><?=$pagamento;?></td>
                  <td><span class="style12">Vendedor.: </span></td>
                  <td><?=$nome_user_1;?></td>
                </tr>
                <tr>
                  <td><span class="style12"> Tipo de Negociacao.: </span></td>
                  <td><?=$negociacao;?></td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                </tr>
            </table></td>
          </tr>
        </table>
    </div></td>
    <td width="1%"><img src="../graphics/px1.gif" width="8" height="10"></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><div align="center">
        <table width="632" border="0">
          <tr>
            <td width="85"><div align="center"><img src="<?=$foto;?>" width="85" height="95">
            </div></td>
            <td width="339"><div align="center">
              <table width="331" border="0">
                <tr>
                  <td width="321">&nbsp;<font size="2" face="Verdana"><b>
                    <?=$descricao;?>
                  </b></font> </td>
                </tr>
                <tr>
                  <td>&nbsp;<font size="2" face="Verdana"><b>R$&nbsp;
                          <?=$valor;?>
                  </b></font></td>
                </tr>
                <tr>
                  <td>&nbsp;<font size="2" face="Verdana"><b>
                    <?=$negociacao;?>
                  </b></font></td>
                </tr>
              </table>
			
			</div></td>
			<td width="186"><div align="center">
			  <?
                if ($nome_user_1 != $ser_name3_c){


                    if ($situacao != "Finalizado"){

                ?>
			  <br>
		    <img src="../graphics/loja_compra.png" width="169" height="65">			</div></td>
			<?
			}
			}
			?>
          </tr>
        </table>
    </div></td>
    <td>&nbsp;</td>
  </tr>
</table>
</body>
</html>
