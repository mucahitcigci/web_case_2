<?php
$ip = $_SERVER['REMOTE_ADDR'];
$locationInfo = json_decode(file_get_contents("https://ipinfo.io/{$ip}/json"));
$country = $locationInfo->country;
if ($country == "TR") {
    header("Location: indextr.php");
} else {
    header("Location: indexen.php");
}
?>