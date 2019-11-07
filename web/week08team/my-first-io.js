const fs = require('fs');

filePath = process.argv[2];

fileBuffer=fs.readFileSync(filePath);

const str=fileBuffer.toString();

var strArray=str.split('\n');

console.log(strArray.length-1);