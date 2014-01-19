<?php
/*

{"page":1,"limit":100,"explicit":false,"total":9,"has_more":false,"list":[{"id":"x114x2l","title":"Friendship is Witchcraft | Episode 1 | The Perfect Swarm","channel":"fun","owner":"x19emeo"},{"id":"x114xl1","title":"Friendship is Witchcraft | Episode 2 | Read it and Sleep","channel":"fun","owner":"x19emeo"},{"id":"x114xzz","title":"Friendship is Witchcraft | Episode 3 | Dragone Baby Gone","channel":"fun","owner":"x19emeo"},{"id":"x114ygo","title":"Friendship is Witchcraft | Episode 4 | Cute From The Hip","channel":"fun","owner":"x19emeo"},{"id":"x114z9h","title":"Friendship is Witchcraft | Episode 5 | Neigh, Soul Sister","channel":"fun","owner":"x19emeo"},{"id":"x11504k","title":"Friendship is Witchcraft | Episode 6 | Lunar Slander","channel":"fun","owner":"x19emeo"},{"id":"x1150zh","title":"Friendship is Witchcraft | Episode 7 | Cherry Bomb","channel":"fun","owner":"x19emeo"},{"id":"x1152gw","title":"Friendship is Witchcraft | Episode 8 | Foaly Matripony","channel":"fun","owner":"x19emeo"},{"id":"x12l9ef","title":"Friendship is Witchcraft | Episode 9 | Seed No Evil","channel":"fun","owner":"x19emeo"}]}
*/

$playlistId=$_GET['id'];
$json = file_get_contents("https://api.dailymotion.com/playlist/" . $playlistId . "/videos?limit=100"); //asuming less than 100 episodes per season.
$json = json_decode($json);
$arr = $json->list;
foreach($arr as $key => $value){
  echo "<a href=\"video.php?id=".$value->id."\">".$value->title."</a><br>\n";
}
?>