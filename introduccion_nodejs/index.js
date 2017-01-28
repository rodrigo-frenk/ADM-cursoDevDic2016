var express = require('express');
var app = express();

var http = require('http').Server(app)

var io = require('socket.io')(http)


var users = []

// línea necesaria para poder servir recursos desde nuestro HTML:

app.use('/bower_components', express.static('bower_components') );


app.get('/', function (req, res) {
   // res.send('Hello World!');
   res.sendFile( __dirname + '/views/index.html' )

});

app.get('/user', function (req, res) {
   res.send('Ver usuario');
   // res.sendFile( __dirname + '/views/index.html' )

});


io.on('connection', function(socket){

   console.log('a user connected', socket.id )

   users[ socket.id ] = {
      username: "Sin Nombre"
   }

   socket.on('disconnect', function(){

      console.log('user disconnected', socket.id );

      io.emit('user gone', users[socket.id].username + " se fue." );

   });


   socket.on('chat message', function(msg){
      console.log('message: ', socket.id, msg);

      io.emit('chat message', {
         username: users[socket.id].username,
         message: msg
      });

   });

   socket.on('set username', function(msg){

      console.log('set username: ' + msg);

      users[ socket.id ].username = msg;

      displayMessage = users[ socket.id ].username + " acaba de entrar."

      io.emit('new user', displayMessage );

   });



});


http.listen(3000, function () {
   console.log('Example app listening on port 3000!');
});
