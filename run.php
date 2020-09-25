<?php
// github.com/pajaar

$ip = "1.0.0.27";
$lol = json_decode(file_get_contents("http://ip-api.com/json/".$ip));
echo "Status: ".$lol->status." | Country: ".$lol->country." | Region: ".$lol->regionName." | Latitude: ".$lol->lat." | Longitude: ".$lol->lon." | ISP: ".$lol->isp." | AS: ".$lol->as;
?>
