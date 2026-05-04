<?php
ini_set("max")
$stats = [];

$dir = $argv[1];
$max = 20;
/*
$artists = json_decode(file_get_contents($dir . "/artists.json"), true);
foreach ($artists as $artist) {
    $name = $artist["DisplayName"];
    $char = mb_substr($name, 0, 1);
    $char = mb_strtolower($char);
    if (!isset($stats[$char])) $stats[$char] = 0;
    if ($stats[$char] > $max) continue;
    $stats[$char]++;
    $artist["_id"] = "a_" . $artist["ConstituentID"];
    $artist["_type"] = "artist";
    printf("%s\n", json_encode($artist, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE));
}
*/
/*
$artw = json_decode(file_get_contents($dir . "/artworks.json"), true);
foreach ($artw as $art) {
    $name = $art["Title"];
    $char = mb_substr($name, 0, 1);
    $char = mb_strtolower($char);
    if (!isset($stats[$char])) $stats[$char] = 0;
    if ($stats[$char] > $max) continue;
    $stats[$char]++;
    $art["_id"] = "a_" . $art["ConstituentID"];
    $art["_type"] = "artwork";
    printf("%s\n", json_encode($art, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE));
}
*/
