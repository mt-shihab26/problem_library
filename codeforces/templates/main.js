'use strict';

process.stdin.resume();
process.stdin.setEncoding('utf-8');

let input = '';
let index = 0;

process.stdin.on('data', (chunk) => {
    input += chunk;
});

process.stdin.on('end', () => {
    input = input.trim().split('\n');
    main();
});

function readline() {
    return input[index++];
}

function main() {
    let t = Number(readline());
    while (t--) {
        testCase();
    }
}

function testCase() {
    console.log('Hello World!');
}
