<?php
/*
MIT License

Copyright (c) 2022 Md. Abdul Gony Rafid

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
SOFTWARE.
*/
include("./main/function.php");
$ENDCOLOR = "\e[0m";
$RED = "\e[31m";
$GREEN = "\e[32m";
$YELLW = "\e[33m";
$LIGHTGREEN = "\e[92m";
$LIGHTCYAN = "\e[96m";
$GRAY = "\e[90m";

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