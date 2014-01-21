<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Brony Videos</title>
    </head>
    <body>
      <?php
      // put your code here
      /*
      
{"page":1,"limit":10,"explicit":false,"total":6,"has_more":false,"list":[{"id":"x2ppm3","name":"Friendship is Witchcraft","owner":"x19emeo"},{"id":"x2pplw","name":"Mentally Advanced Series","owner":"x19emeo"},{"id":"x2h3zl","name":"MLP - Season 4","owner":"x19emeo"},{"id":"x2emfj","name":"MLP - Season 3","owner":"x19emeo"},{"id":"x2emfe","name":"MLP - Season 2","owner":"x19emeo"},{"id":"x2emfc","name":"MLP - Season 1","owner":"x19emeo"}]}
      */
      //get json from Dailymotion api
      $json = file_get_contents("https://api.dailymotion.com/user/x19emeo/playlists");
      $json = json_decode($json);
      $arr = $json->list;
      foreach($arr as $key => $value){
        echo "<a href=\"playlist.php?id=".$value->id."\">".$value->name."</a><br />\n";
      }
      ?>
    </body>
</html>
