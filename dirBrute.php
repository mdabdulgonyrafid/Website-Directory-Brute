<?php
$ENDCOLOR = "\e[0m";
$RED = "\e[31m";
$GREEN = "\e[32m";
$YELLW = "\e[33m";
$LIGHTGREEN = "\e[92m";
$LIGHTCYAN = "\e[96m";
$GRAY = "\e[90m";

function check($site){
$url = $site;
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_HEADER, true);    // we want headers
curl_setopt($ch, CURLOPT_NOBODY, true);    // we don't need body
curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
curl_setopt($ch, CURLOPT_TIMEOUT,10);
$output = curl_exec($ch);
$httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
curl_close($ch);
$ENDCOLOR = "\e[0m";
$RED = "\e[31m";
$YELLW = "\e[33m";
if($httpcode=="200"){
return $YELLW."  URL: ".$site." [".$httpcode."]\n".$ENDCOLOR;
}else{
return $RED."  URL: ".$site." [".$httpcode."]\n".$ENDCOLOR;
}

}

$exDomain=explode(",",$check=readLine("Enter URL : "));

 $tD=count($exDomain);

$opt=readLine("Enter Directory List or Use default list [Enter 0] :");
if($opt=="0"){
$list=file_get_contents("dir.txt");
$dirL=explode("
",$list);
$dirC=count($dirL);
}else{
$list=file_get_contents($opt);
$dirL=explode("
",$list);
$dirC=count($dirL);

}
 //var_dump($exDomain);
echo $GRAY."   Author:@rafid\n   Idea from:@krypton\n                   2022_v1.0\n".$ENDCOLOR;
echo $LIGHTGREEN."      Programe working .....\n";
echo "  Total Domain :".$tT=$tD;
$min=round($tT*10/60);
$totalSec=($tT*10);
$msec=($min*60);
$sec=($tT*10)-($min*60);
echo "\n        Estimate in ".$min."min ".$sec."sec\n\n".$ENDCOLOR;
$Ask=file_get_contents("https://raw.githubusercontent.com/mdabdulgonyrafid/Website-Directory-Brute/main/update.txt");
if($Ask=="1"){
echo $YELLW."   Latest Version Available [✔]\n";
echo '   Command :"cd $HOME;git clone https://github.com/mdabdulgonyrafid/Website-Directory-Brute/;"
';
sleep(7);
for($i=0;$i<$tD;$i++){ //ids

for($j=0;$j<$dirC;$j++){ //pass

echo check($exDomain[$i].$dirL[$j]);
}

}
}else{
for($i=0;$i<$tD;$i++){ //ids

for($j=0;$j<$dirC;$j++){ //pass

echo check($exDomain[$i].$dirL[$j]);
}

}
}
//echo "Programme Working....";
//echo  check($exDomain[0].$dirL[1]);
//echo check("http://app1.nu.edu.bd/");


?>
