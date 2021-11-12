<?
/*###################################################################################################
	
	ImageGal version 1.0
		
   Author: Lloyd Hannesson (dasme@dasme.org)
     Date: Oct 31, 2004
   Corrigido por : Edson de Araujo em 23/11/2010
	
//###################################################################################################*/


@session_start();
$foto  = $_SESSION["foto"];
$foto1 = $_SESSION["foto1"];
$foto2 = $_SESSION["foto2"];
$foto3 = $_SESSION["foto3"];


if (!empty($foto)){
	
    $a_img[0] = $foto;

}else{	

	$a_img[0] = "fotos/sem_foto.jpg";
}

if (!empty($foto1)){
	
    $a_img[1] = $foto1;

}else{	

	$a_img[1] = "fotos/sem_foto.jpg";
}

if (!empty($foto2)){
	
    $a_img[2] = $foto2;

}else{	

	$a_img[2] = "fotos/sem_foto.jpg";
}

if (!empty($foto3)){
	
    $a_img[3] = $foto3;

}else{	

	$a_img[3] = "fotos/sem_foto.jpg";
}


//$a_img[2] = $fot_1[2];
//$a_img[4] = $fot_1[3];




//echo $a_img[0]."<br>";
//echo $a_img[1]."<br>";
//echo $a_img[2]."<br>";
//echo $a_img[3]."<br>";



$MAX_IMAGES = 4; // Set the max number of images per page. 
$USE_LARGE_IMAGES = true; // will there be a large image popup used? if not, set to false

//###################################################################################################
	
// Included here as my webhost doesn't have this function enabled for some reason.
// If yours does, this will just be ignored.

if (!function_exists('file_get_contents')) { 
  function file_get_contents($filename, $use_include_path = 0) {
   $data = '';
   $file = @fopen($filename, "rb", $use_include_path);
   if ($file) {
     while (!feof($file)) $data .= fread($file, 1024);
     fclose($file);
   } else {
     /* There was a problem opening the file. */
     return FALSE;
   }
   return $data;
  }
} 

$imgdir = (isset($unix_dir))?$unix_dir:"."; // ability to use a seperate dir for debugging...
$dimg = @opendir($imgdir."/../fotos/"); // grab the images directory

//Lets build up some arrays of info to better handle all of our data
/*
while($imgfile = @readdir($dimg)) {
	$conta_fim++;
	if((substr($imgfile,-3)=="gif") || (substr($imgfile,-3)=="jpg") || (substr($imgfile,-3)=="JPG") || (substr($imgfile,-3)=="GIF")) {
		$a_img[count($a_img)] = $imgfile;
		sort($a_img);
		reset($a_img);
		// Look for a $img_dir/thumb/* file that matches the filename in the directory listing. 
		// If there is one, set the Key Value pair [IMAGE NAME] => True
		$filename = "../fotos/".$imgfile;
		if (file_exists($filename)) {
			$tn_img[$imgfile] = "true";
		}
		// Look for a filename.txt file in the image dir. If it exists load it into an array
		// with the Key Value pair [IMAGE NAME] => Desc
		$filename = "../fotos/".substr($imgfile, 0, -3)."txt";
		if (file_exists($filename)) {
			$desc_img[$imgfile] = str_replace("\"","'",file_get_contents($filename));
		}		
	} 
	
    if ($conta_fim == 4){
    	break;;
    }
}
*/
echo "<body bgcolor='#FFFFFF'>";

// Ok we have everything loaded into our arrays.. Now lets start building the page!
$tot_img = count($a_img);
$i = 0; $count = 0; $page = 0;

while($i < $tot_img) {
	if($count==0) { 
		// if the count is 0, we have a new page. 
		$page++;
		$output .= "<div id=\"page$page\" ";
		if($page != 1) { $output .= "class=\"hidden\""; }
		$output .= ">"; 
	}
	$count++;
	$output .= "<span class=\"thumb\"><a onclick=\"return showPic(this)\" href=\"../$a_img[$i]\" title=\"";
	if($desc_img[$a_img[$i]] != "") { $output .= $desc_img[$a_img[$i]]; }
	$output .= "\">";
	if($tn_img[$a_img[$i]] == TRUE) {
		$output .= "<center><img src=\"../fotos/$a_img[$i]\" alt=\"$a_img[$i]\" border=\"0\" width=\"45\" height=\"37\" /></center>";
	} else {
		$output .= "<center><img src=\"../$a_img[$i]\" alt=\"$a_img[$i]\" border=\"0\" width=\"45\" height=\"37\" /></center>";
	}
	$output .= "</a></span>";
	// And if we are at the max image #, close the page div and reset the counter
	if($count==$MAX_IMAGES) { $output .= "</div>"; $count=0;}
	$i++;
} 
if($count != 0) { $output .= "</div>"; }

// Write out the menu div
for ($b=1; $b<$page+1; $b++) {
	//$menu .= "<a href=\"#\" onclick=\"return switchPage('page$b')\">page $b</a> &nbsp; ";
}

// Write out the JS hiding function for all of the pages
for ($b=1; $b<$page+1; $b++) {
	$js .= "DOMCall('page$b').className = \"hidden\";\n";
}

if ($USE_LARGE_IMAGES) {
	$placeholder = "<img id=\"placeholder\" src=\"../$foto\" title=\"Click for larger version\" style=\"cursor:pointer;\" onClick=\"return clickedImage(this);\" alt=\"\" width=258 height=\"207\" />";
} else {
	$placeholder = "<img id=\"placeholder\" src=\"../$foto\" alt=\"\" />";
}

// Ok we're done, lets build the page and send it to the browser.
$rand_class=""; $rand_caption="";  // zero some stuff out
$rand_img = $a_img[mt_rand(0, $tot_img-1)]; // grab a random starting image...
$rand_caption = $desc_img[$rand_img]; // ...and it's caption if it exists
$rand_class= ($rand_caption!="")?"asdasd":"hidden"; // if it exists, we'll want to show it.

$placeholder = str_replace("<RANDOM>", $rand_img, $placeholder);


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

if ($browser == 'MS Internet Explorer'){

    $page_output = file_get_contents("template.inc.html"); //grab the template, then replace the placeholders

}else{
	
    $page_output = file_get_contents("template2.inc.html"); //grab the template, then replace the placeholders
	
}	

$page_output = str_replace("<CONTENT>", $output, $page_output);
$page_output = str_replace("<MENU>", $menu, $page_output);
$page_output = str_replace("<JS>", $js, $page_output);
$page_output = str_replace("<PLACEHOLDER>", $placeholder, $page_output);
$page_output = str_replace("<RANDCLASS>", $rand_class, $page_output);
$page_output = str_replace("<RANDCAPTION>", $rand_caption, $page_output);

echo $page_output;

$i = 0;
$conta_fim = 0;
$a_img[0] = " ";
$a_img[1] = " ";
$a_img[2] = " ";
$a_img[3] = " ";
?>

