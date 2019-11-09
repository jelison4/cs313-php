const http = require('http');

var gurl = process.argv[2];
http.get(gurl, (res) => {
    res.setEncoding('utf8');
    
});