<?php
$imput = $argv[1];
if (strpos($imput, "s")) {
    $sec = (int)$imput;
}
else{
    echo "geen seconden gezien" . PHP_EOL;
    exit;
}
echo "$sec seconden" . PHP_EOL;
?>