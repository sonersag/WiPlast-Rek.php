<?php

$dirs = array_filter(glob('*'), 'is_dir');
$silinsin=array("","parisafoster","azginkar","maidenpo","liselisi","animetu1","chicarabioso","azmisdul","xgizlika","xliselip","xpornoiz","hdamsiki","storiess");
$sil=array_diff($dirs,$silinsin);
sort($sil);
$sonuc = count( $sil );
print_r($sil);

$slot1='';
$slot2='';
$slot3='';
$slot4='';
$slot5='';
$slot6='';
$slot7='';

//$slothep=7;
//$rek="/home/themetube/public_html/include/rek.php";

for($x=0; $x<=$sonuc; $x++){
$dizin="$sil[$x]/public_html/include/footer.php";
//$dizin="$sil[$x]/public_html/include/";

if (file_exists($dizin)) {

$sil2='<?php include "rek.php"; ?>';
   $dosya=file_get_contents("$dizin");
   $yeni=str_replace($sil2,null,$dosya);
   file_put_contents("$dizin",$yeni);




/*
include $dizin;

$connect = mysql_connect($server, $dbuser, $dbpass) or die("HATA : " . mysql_error());;
$db_select = mysql_select_db($dbadi);

$sql = "update adversite set slot1='$slot1',slot2='$slot2',slot3='$slot3',slot4='$slot4',slot5='$slot5',slot6='$slot6',slot7='$slot7' where id=1";
mysql_query($sql);
mysql_close($connect);
*/

} else {
echo "$dizin dosyası yok!";
}
}
//print_r( $dirs);



?>
