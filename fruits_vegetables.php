<?php
$foods = array(
"fruits" => array("イチゴ","りんご","バナナ"),
"vegetable" => array("きゅうり","かぼちゃ","じゃがいも")
);
var_dump($foods);
foreach ($foods as $food_type => $food){
    echo $food_type . ":" .$food ."<br>";
}
var_dump($foods);
?>
