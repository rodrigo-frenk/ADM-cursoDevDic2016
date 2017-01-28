var express = require('express');
var app = express();


// línea necesaria para poder servir recursos desde nuestro HTML:

app.use('/bower_components', express.static('bower_components') );


app.get('/', function (req, res) {
  // res.send('Hello World!');
  res.sendFile( __dirname + '/views/index.html' )

});

app.get('/adios', function (req, res) {
  res.send('Adios Mundo!');
});

app.listen(3000, function () {
  console.log('Example app listening on port 3000!');
});
