<?php
/*ID: 602110199
Name: Cai Anmin(Sandwich)
Wechat: Sandwich*/
function f($c){
	return($c*(9/5))+32;
}function p($r){
  printf("Celsius Fahrenheit\n");
  foreach($r as $c){
    printf("%7.2f%11.2f\n",$c,f($c));
  }
}function a($s,$e,$a,$r){
  for($i=$s;$i<=$e;$i+=$a){
    $r[]=$i;
	}return$r;
}
$f=fopen($_SERVER['argv'][1], 'r');
fscanf($f,"%d",$n);
$r=[];
for($j=1;$j<=$n;$j++){
	fscanf($f,"%f%f%f",$s,$e,$a);
	$r=a($s,$e,$a,$r);
	}fclose($f);
p($r);
?>