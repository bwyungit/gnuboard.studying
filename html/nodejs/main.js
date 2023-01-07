const http = require('http');
const fs = require('fs');
const url = require('url');

var app = http.createServer(function (request, response) {
  var _url = request.url;
  var queryData = url.parse(_url, true).query;
  var pathname = url.parse(_url, true).pathname;
  console.log(pathname);
  var title = queryData.id
  var option = "";


  if (url.parse(_url, true).path==='/'){
    title="welcome";
    option = `<a href="1.html">1.html</a>`
  }; 
  
  console.log(url.parse(_url, true));
  console.log('title: ' + title);

  console.log('pathname: ' + pathname);
  var fn = 'text/'+ title ;
  console.log('fn: ' + fn);
  //var fs = require('fs');
  fs.readFile(fn,'utf8', function(err, desciption){
    console.log(desciption);
   
    fs.readdir('./text',function(err,filelist){
      var list ='';

      for (var i=0;i<filelist.length;i++){
        list=list + `<li><a href="/?id=${filelist[i]}">${filelist[i]}</a></li>`;
      }  
      
      var template = `

    <!doctype html>
    <html>
    <head>
      <title>WEB1 - ${title}</title>
      <meta charset="utf-8">
    </head>
    <body>
      <h1><a href="/">WEB</a></h1>
      ${option}
      <ol>
        ${list}
      </ol>
      <a href="create">create</a>
      <h2>${title}</h2>
      <p>${desciption}
      </p>
    </body>
    </html>  ` ;
  console.log(__dirname + url);
  response.writeHead(200);
  response.end(template)

  // if (pathname!="/"){
  //   response.writeHead(404);
  //   response.end('Not found')
  // }
    })
  
  });
   
 
    
  
});
app.listen(3000);