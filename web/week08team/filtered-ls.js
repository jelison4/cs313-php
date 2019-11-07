const fs = require('fs');
const path = require('path');

var filePath = process.argv[2];
var fileType = '.'+process.argv[3];
fs.readdir(filePath, (err, list) => {
    if (err) throw err;

    list.forEach(element => {
        if(path.extname(element)== fileType){
            console.log(element);
        }
    });
  });