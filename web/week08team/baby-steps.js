var total = 0;
var i;

for (i = 2; i < process.argv.length; i++) {
    total += +process.argv[i];
}

console.log(total);