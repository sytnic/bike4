<?php

/*  Функции разметки этого layout*/

// Row function

/////////

// Cards
function begin_rowcard() {
	include(VIEW.'cardrowbegin.html');
}

function card($title='', $body='', $footer='', $href='#', $disabled=false) { // пример $href='html/'
	// длинные пробелы для красоты внутренне отображаемого кода
	$p14 = '              ';
	$p12 = '            ';
	$p10 = '          ';
	$p8  = '        ';
	
	$output = "\n".$p8."<!-- card -->\n";
	
	$output.= $p8.'<div class="';
            if ($disabled){
               $output.=' w3-disabled'; 
            }
        $output.=' w3-card w3-col m5 l5 w3-hover-shadow" style="margin: 14px;" >'."\n";
	
	
	$output.= $p12.'<header class="w3-container w3-light-gray">'."\n";	
	$output.= $p14.'<h2>'.$title."</h2>\n";
	$output.= $p12."</header>\n";

	$output.= $p10.'<a href="'.$href.'"';
	if ($disabled){
               $output.=' class="w3-disabled"'; 
            }
	$output.=">\n";
	$output.= $p12.'<div class="w3-container"><br>'."\n";	
	$output.= $p14.'<p>'.$body."</p><br>\n";	
	$output.= $p12."</div>\n";
	$output.= $p10."</a>\n";
	
	$output.= $p12."<footer class=\"w3-container w3-light-gray\">\n";
	$output.= $p14.'<p class="w3-small w3-opacity">';
	$output.= $footer;
	$output.= "</p>\n";
	$output.= $p12."</footer>\n";

	
	$output.= $p8."</div>\n";
	
	echo $output;	
}

function end_rowcard() {
	include(VIEW.'cardrowend.html');
}
////////////

// Pagination in page
function pagination() {
	global $curr_light_key;
	global $numeric_leftsidebar;
// $numeric_leftsidebar - это массив, в котором первым идут ключи-числа, 
// а вторым - значения, равные названию ссылок (ключей) массива sidebar
	include(VIEW.'pagination.php');
}
/////////////

// Panels
function panel_class($class='') {
	switch ($class) {
		case 'info':
		  echo 'w3-panel w3-pale-green w3-leftbar w3-border-green';
		  break;
		case 'note':
		  echo 'w3-panel w3-pale-yellow w3-leftbar w3-border-yellow';
		  break;
		default:
          echo 'w3-panel w3-pale-green w3-leftbar';
	}
}
/////////////

/*  Окончание Функций разметки этого макета */

?>