<?php 
// get 1
$T = trim(fgets(STDIN));
$T = explode(" ", $T);
// get2
$md = $T[0];
$hm = $T[1];
// get3
$md = explode("/", $md);
$mdm = $md[0];
$mdd = $md[1];
$hm  = explode(":", $hm);
$hmh = $hm[0];
$hmm = $hm[1];
// up
$mdd = intval($mdd) + floor($hmh / 24);
// cut
$hmh = floor( $hmh % 24 );
// suppress
if($mdd < 10) $mdd = "0".$mdd;
if($hmh < 10) $hmh = "0".$hmm;
// out
echo $mdm."月".$mdd."日 ".$hmh."時".$hmm."分\n";
// out2
echo "ok";
?>
