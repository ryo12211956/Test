<?php
$age = 26;
if ($age < 20) { //未成年は購入できない
    echo "購入できません"; 
} else if ($age <= 25) {
    echo "年齢確認が必要です。"; //20～25歳は年齢確認が必要
} else {
    echo "購入できます"; //未成年でも20～25歳でもない
}
?>