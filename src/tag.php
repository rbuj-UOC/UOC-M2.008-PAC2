<?
include("config.php");

$aTags = Content::getTags();
//$aTags = array("politics","politics","social media","politics","social media","politics","technology","technology","politics","education","health","crisis","crisis");
$aCountTags = array();
$aTotal = 0;
foreach ($aTags as $aTag) {
	$aCountTags[$aTag] = isset($aCountTags[$aTag])?$aCountTags[$aTag]+1:1;
	$aTotal++; 
}

foreach (array_keys($aCountTags) as $aTag) {
	$aTagFreqs[] = array('name'=>$aTag,'freq'=>round(($aCountTags[$aTag] / $aTotal)*100,2)); 
}

header("Content-type: application/json");
echo(json_encode($aTagFreqs));
?>
