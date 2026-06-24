<?php

function _readline()
{
    return strval(fgets(STDIN) ?? '');
}

$t = intval(trim(_readline()));

while ($t--) {
    testCase();
}

function testCase()
{
    $n = intval(_readline());
    $zeroCount = 0;
    $negativeCount = 0;
    foreach (array_map(fn ($v) => intval($v), explode(' ', _readline())) as $item) {
        switch ($item) {
            case 0:
                $zeroCount++;
            case -1:
                $negativeCount++;
        }
    }
    $r = $zeroCount;
    $r += (($negativeCount % 2) * 2);
    echo $r."\n";
}
