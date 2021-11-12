<?php

/**
 * @author holodek
 * @copyright 2010
 */



?>

<script language="Javascript">
function loadImages() {
if (document.getElementById) {  // DOM3 = IE5, NS6
document.getElementById('hidepage').style.visibility = 'hidden';
}
else {
if (document.layers) {  // Netscape 4
document.hidepage.visibility = 'hidden';
}
else {  // IE 4
document.all.hidepage.style.visibility = 'hidden';
}
}
}
</script>

</head>

<body onload="loadImages();">

<div id="hidepage" style="position: absolute; left:0px; top:0px; background-color: #FFFFCC; layer-background-color: #FFFFCC; height: 100%; width: 100%;"> 

<table width='100%' height='100%'>
<tr>
<td>
<i><b><font color="#000000" face="Verdana">Aguarde Carregando...</font></b></i>
</td>
</tr>
</table>

</div>
</body>
