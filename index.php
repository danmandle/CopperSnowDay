<?php

require_once('simple_html_dom.php');

// Create DOM from URL or file
$html = file_get_html('http://www.coppercolorado.com/winter/the_mountain/dom/snow.html');

// Find all images 
/*
foreach($html->find('.table_data') as $element) 
       //echo $element->src . '<br>';
		print_r($element);
*/

/*
foreach($html->find('div.table_data') as $e){
    $snowfall = $e->innertext;
	//print_r($e);
	break;
}
*/

$yes = $html->find('div.table_data', 0);

if((float)$yes->innertext >= 4){
	echo "<h1>It's a snow day!!</h1>";
}
else{
	echo "<h1>Nope. It snowed </h1>";
}

echo "<h2>It snowed ".$yes->innertext." inches in the last 24 hours.</h2>";

?>
<img src="http://webcams.coppercolorado.com/SnowStake/MorningStake_430AM/still.jpg"/>