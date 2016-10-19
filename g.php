<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Search</title>
</head>
<body>
<?php

$query = $_GET["q"];
$page = $_GET["p"];
$url = "http://ajax.googleapis.com/ajax/services/search/web?v=1.0&q=".$query."&rsz=large";
if(isset($page)) $url = $url."&start=".($page*8);

$body = file_get_contents($url);
$json = json_decode($body);
for($x=0;$x<count($json->responseData->results);$x++){
echo "<b>Result ".($x+1)."</b>";
echo "<br>URL: ";
echo "<a href=\"".$json->responseData->results[$x]->url."\">".$json->responseData->results[$x]->url."</a>";
echo "<br>VisibleURL: ";
echo $json->responseData->results[$x]->visibleUrl;
echo "<br>Title: ";
echo $json->responseData->results[$x]->title;
echo "<br>Content: ";
echo $json->responseData->results[$x]->content;
echo "<br><br>";
}

?>  
</body>
</html>
