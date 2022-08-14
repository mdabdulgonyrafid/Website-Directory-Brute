
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
