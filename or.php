<pre>
<?php
$true = TRUE; //確認のための準備
$false = FALSE;

$a = $true || $true; // どちらもTRUEなので結果はTRUE
$b = $true || $false; //1つTRUEなので結果はTRUE
$c = $true || $true || $true; //複数の演算ができる。結果はTRUE
$d = $true || $false || $false; //複数であっても1つTRUEなので結果はTRUE
$e = $true || ($true || $false); //カッコを先に演算し、結果はTRUE
$f = $false || $false; //TRUEが1つもないのでFALSE
var_dump($a, $b, $c, $d, $e, $f,);
?>

