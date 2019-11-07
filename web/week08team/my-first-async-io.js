const fs = require('fs');

filePath = process.argv[2];
fs.readFile(filePath, 'utf8', (err, data) => {
    if (err) throw err;

    var strArray=data.split('\n');

    console.log(strArray.length-1);
  });