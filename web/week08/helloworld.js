const http = require('http');

http.createServer(function (req, res) {
    if(req.url=="/home"){
        res.writeHead(200, {"Content-Type":"text/html"});
        res.write("<h1 style='text-align: center;'>Welcome to the Home Page</h1>");
        res.end();
    }else if(req.url=="/getData"){
        res.writeHead(200, {"Content-Type":"application/json"});
        res.write({"name":"Josh Elison","class":"cs313"});
        res.end();
    } else{
        res.writeHead(404, {"Content-Type":"text/html"});
        res.write("<h1 style='text-align: center;'><strong>Page Not Found</strong></h1>");
        res.end();
    }
}).listen(8888);