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
    let n = Number(readline());
    let zero_count = 0;
    let negative_count = 0;
    readline()
        .split(' ')
        .map((x) => Number(x))
        .forEach((x) => {
            if (x === 0) {
                zero_count++;
            } else if (x === -1) {
                negative_count++;
            }
        });
    let r = zero_count;
    r += (negative_count % 2) * 2;
    console.log(r);
}
