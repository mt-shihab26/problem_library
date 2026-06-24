<?php

function _readline()
{
    return fgets(STDIN);
}

$t = intval(trim(_readline()));

while ($t--) {
    testCase();
}

function testCase()
{
    echo "Hello World\n";
}
