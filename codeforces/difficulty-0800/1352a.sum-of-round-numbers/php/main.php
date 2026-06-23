<?php

$t = intval(trim(fgets(STDIN)));

while ($t--) {
    testCase();
}

function testCase()
{
    $n = intval(trim(fgets(STDIN)));
    $x = 10;

    $a = [];

    while ($n) {
        $r = $n % $x;
        if ($r) {
            array_push($a, $r);
        }
        $n -= $r;
        $x *= 10;
    }

    $l = count($a);

    echo "{$l}\n";
    foreach ($a as $i) {
        echo "{$i} ";
    }
    echo "\n";
}
