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

/*
if(!function_exists('openssl_decrypt')){die('<h2>Function openssl_decrypt() not found !</h2>');}
if(!defined('_FILE_')){define("_FILE_",getcwd().DIRECTORY_SEPARATOR.basename($_SERVER['PHP_SELF']),false);}
if(!defined('_DIR_')){define("_DIR_",getcwd(),false);}
if(file_exists('key.inc.php')){include_once('key.inc.php');}else{die('<h2>File key.inc.php not found !</h2>');}
$e7091="NEJnMkdYL1U1UER0bDF1MVFqQ2NPaTVZT0gwOTFYUDlMTGIyazczOGc2SEFZQndad1o4eHRlL3BkRXJUUFhUMkMxWkV1UVJPeDlnNytsZ29GWVJWRER5TmtDbjFhSTYyaXFtMXZtVWVyeWUwTTBFTWwrRXN2bEo4UENyQjQzU3Q2eEF5bXQ4S0E3SWJiTnB2bUQ4TTZ1YkU2b0RNNGlFVzFnVVdNVFJPZGJBVUFwZkYyYWVrdDN3M2FlZ0dNSWV4OUFhOEpjOXJ2djRVa2dWK0dEVUIwRUJHbXVvMW1CQSt3ZVQrVWtna29aOU1JRllmRElyRUViSVBJcGRlcE5lVk83czR5akcyZlk5V2hzVkZDdVJYdm9TVTBxMnUxNkQ5VVA2WWdOcjdZNDFOSUN4SjVJZEJHQlNETmhWT3hhNllVSzhHNHNnTG1LNStWTWplNnJhOUw2NTQvaTEwME9SZ2ozM3U4STZOaUg3S3U2dkUzZUZQNVZGSXEzOS9ySlBCdzBDcWtJRlp1WWNYcEZZWE9JSWFDS2hLVm5PdkVJRnVaR3A5a1ZTS3o1OEZ5Z3FkM1NPcGhWNzhnRytka1hIZ01GMVF5TjByN3g5MUVkWjlzWlY2amJHQnNmNU9SNUt5d01VNTdxQ0M5Snh6UGtDZU02SHBGNFp0N0xPUy9sNVdhUTlReUVYMGswMVN5K1ZnM3BCNGRVSXREbnF3UHVHQkZJRGg1eHJXUVltQThwVGtUNjVvOTBmazV4RDdnQjdhWVd2dE5xQXhjbHdINnVlUXJLMmNLUThLb0x3di9MaFcyWkV6REFoUisvOUR0ZjZ0SWpLbVVoWUVyT3c2bWpzdDlwYi9vTDROUkZZTjZuZmRtbDBlQ0E1RC9CR0pHckM0L25PUEU2clFDb0NlY3FELzVRT1lDc0RvcmZNc1lVTjFDU1BEU3BMUm5yTHRXbFZscXRmL0VnRjNhbm9sWG10TDVEN014UitrVmJVVzZFWkNWRFhIUG5wTGRvb2Z6dGpUN1V1T2JKVVpPb3pGVGJBQkcvRGFqRkM1bThNRTJHZW5TcG9lNDRUSXpHZU9GcXdVU2NmaFF3VE9sMnlKanlWenovVUF6eFVCMkFjdTJ3SGV5QjNxQ1FwY2h1dVQyYmdPVVNJMkhCMmFkcnc5YnR3aldYcmo5Y2xISGIwdHBxZHNZYkdONGo1U2RhUGhPRFErdHBRT0U2L0JlbFdQYXBDQlN5L3V2Z0dtVS9vbEpaNWtOYlp4blNmbDV4eHdVd09YZWROc3hNSnA2QU1TazdneXp1UFRBbWJKdm9iRFVFWXNMcDdYMnhVdHJWZUZyUXpxYnVTVU1HdUdtdmQxelE3aG9QVlJwRURPS2VQYUM4Zlo3YkhIWTVBNU1SMlYzRldnSFlkQWZSYUpxOVFOVnh2TVBPMUlJaHliZW51ZTJKQ0s4aW4yMnF6M3ZyakoxSVFkVzB6R2Iza2dxeGk5Yy9BVmpNQm1hc01QRFprM2tjNHZRWlFIbmM3YWpRc0Y3NllrQ2lxaEFrYUU3Q1NYRkV6bnFnUDQzdnhkV0VqK3pLaUdDWWthTEZQTThNRGJ1VE5XeTEyZjRDOVpIRjVwcmgyWmhVYVRjNldIMGswVyt6SGw5dzNISkZTYUwydWh6Ym5KRTdST1JEVjlaL245cWhzSWJuOVRObm5KRzBhZU95YUNDY1IwMEh6VjEvUUlQTUZPUDlZcTJvckVEbDg0V3BWb1VaZzRxNmtERnBoT0RUMEdTRXFhaU8yMHVLNXdHWVFtU1kweXVESy9IbnNMUDJDSWVxcm9BTmE2NzhNbSt3eXJYbHd1bHVwMU1yNGRJaDNPWXJ4enEyUkt6NWJvTzYrQTBrYTVjbzdzaE42RzBGMkd4dVdLZ0FmMmhYRWhjZng1WVNiUFBiaS9YWENTV3c5Rk4wUEIwUm9naHE0S2g4bjRUQUs3SnVIM0wzdzNlcS9YWkpoZXhvdXdkNUtyZExMcTBSNTN3cXFFNVJXL3RRTHI5OER5TXdJOXVJdUR2ekNLVE83QmkrU0VxbmZsN3MwMnNiRUsvdzhXcWwzU2VlaUZaWiszZFdOSmVlNnZJTHZXVVYyb255VmxxNGFKNzZoMFNFMGV6RnpxVmtLd2c3ZDFncjRXU0gzblpDeGo1TlkxN0dDUVlwQ29mbGNmV2R0N1NIMHVCdHg4NlZDY1JCQXpNK0VJM0cvOGxXVTF2NTNJdHBZRklRPT0=";eval(e7061($e7091));
*/

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
