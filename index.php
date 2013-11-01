<?php

require_once('simple_html_dom.php');

// Create DOM from URL or file
$html = file_get_html('http://www.coppercolorado.com/winter/the_mountain/dom/snow.html');

$table = $html->find('table[id=report-page-conditions-snow]', 0);
$row = $table->find('tr',2);
$value = $row->find('td',0);

if((float)$value->innertext >= 4){
	echo "<h1>It's a snow day!!</h1>";
}
else{
	echo "<h1>Nope.</h1>";
}

echo "<h2>It snowed ".$value->innertext." inches in the last 24 hours.</h2>";

?>
<img src="http://webcams.coppercolorado.com/SnowStake/MorningStake_430AM/still.jpg"/>

<h3><a href='https://github.com/danmandle/CopperSnowDay'>Source</a></h3>