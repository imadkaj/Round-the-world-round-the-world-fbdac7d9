<?php

$input = ($argv[1]);

$a = array(50, 20, 10, 5, 2, 1);
$b = array(0.5, 0.2, 0.1, 0.05, 0.02, 0.01);

$c = intval($input);
$cent = $input - $c;
$cent = intval(round($cent));

foreach ($a as $value) {
    $restgeld = floor($c / $value);
    if ($restgeld >= 1) {
        $c = $c - ($value * $restgeld);
        echo $restgeld . " x " . $value . " euro" . PHP_EOL;
    }
}

foreach ($b as $value) {
    $restcent = floor($cent / $value);
    if ($restcent >= 0.01) {
        $cent = $cent - ($value * $restcent);
        echo $restcent . " x " . $value . " cent" . PHP_EOL;
    }
}