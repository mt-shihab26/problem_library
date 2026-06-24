<?php

function readline()
{
    return fgets(STDIN);
}

$t = intval(trim(readline()));

while ($t--) {
    testCase();
}

function testCase()
{
    $n = intval(readline());
    readline();
}
