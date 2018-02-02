<?php
include('simple_html_dom.php');   
$html = new simple_html_dom();   
$html->load(file_get_contents("http://ellips.biz/"));   
$array = [];
$array1 = [];
foreach($html->find('a[class=brands__item] img') as $element){ 
	$array[] = $element->src;
}
foreach($html->find('a[class=brands__item]') as $element){ 
	$array1[] = $element->title;
}
for ($i=0; $i < count($array); $i++) { 
	echo "Название: " . $array1[$i] . "\nСсылка: " . $array[$i] . "\n\n";
}
?> 