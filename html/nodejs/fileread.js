var fs = require('fs');
fs.readFile('text/sample.txt','utf8', function(err, data){
console.log(data);
})
