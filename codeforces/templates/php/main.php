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
    echo "Hello World\n";
}
