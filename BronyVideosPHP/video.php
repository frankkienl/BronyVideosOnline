<?php
$videoId = $_GET['id'];
$json = file_get_contents("https://api.dailymotion.com/video/" . $videoId . 
"?fields=title,allow_embed,description,embed_url,filmstrip_small_url,geoblocking,thumbnail_480_url,url,id");
$json = json_decode($json);
echo "<h2>".$json->title."</h2>\n";
echo $json->description."<br>\n";
echo "<img src=\"".$json->thumbnail_480_url."\" alt=\"image\" /><br />\n";

$url = "http://frankkie.nl/android/bronyvideos/viewDailymotion.php?id=" . $videoId;

echo "<br /><a href=\"$url\">View Video</a>";
?>