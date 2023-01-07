var http = require('http');
var server = http.createServer();

// http://localhost:3000 에 요청할 때 발생
server.on('request', function() {
    console.log('request on');
});
// http://localhost:3000 에 접속할 때 발생
server.on('connection', function() {
    console.log('connection on');
});
// 서버종료시 발생
server.on('close', function() {
    console.log('close on');
});

server.listen(3000);

/* setInterval(function() {
   // server.close();
    console.log('server closed');
    process.exit();
}, 5000); */