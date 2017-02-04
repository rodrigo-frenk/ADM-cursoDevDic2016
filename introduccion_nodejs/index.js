var express = require('express')
var app = express()

var http = require('http').Server(app)

var io = require('socket.io')(http)

// un Objeto para almacenar los usuarios:
var users = {}

// línea necesaria para poder servir recursos desde nuestro HTML:
app.use('/bower_components', express.static('bower_components') )
// app.use('/socket.io', express.static('socket.io') )
app.use('/assets', express.static('public/assets') )


app.get('/', function (req, res) {
   res.sendFile( __dirname + '/views/index.html' )
});

app.get('/user', function (req, res) {
   res.send('Ver usuario');
   // res.sendFile( __dirname + '/views/index.html' )

});




io.on('connection', function(socket){

   console.log('a user connected', socket.id )

   users[ socket.id ] = {
      socket: socket,
      username: "Sin Nombre"
   }

   // console.log(users.length, users);
   socket.on('disconnect', function(){

      console.log('user disconnected', socket.id );


      displayMessage = users[ socket.id ].username + " salió."


      delete users[socket.id]

      var userData = getUsersData()

      io.emit('user gone', {
         message: displayMessage,
         data: userData
      });

      console.log(
         "todavía quedan "
         + Object.keys(users).length
         + " usuarios"
      )

   });


   socket.on('chat message', function(msg){
      console.log('message: ', socket.id, msg);

      io.emit('chat message', {
         username: users[socket.id].username,
         message: msg
      });

   });



   socket.on('private message', function(data){
console.log( "got PM:", data );
      sourceUser = socket.id
      targetUser = users[data.target_id]
      // .emit('hello')
      message    = data.message


      targetUser.socket.emit('private message', {
         source_id: sourceUser,
         username: users[sourceUser].username,
         message: message
      })


   });

   socket.on('set username', function(msg){

      console.log('set username: ' + msg);

      users[ socket.id ].username = msg;

      var userData = getUsersData()

      displayMessage = users[ socket.id ].username + " acaba de entrar."

      io.emit('new user', {
         message: displayMessage,
         data: userData
      });

   });



});


function getUsersData() {

   usersArray = []

   // Metemos los datos relevantes de cada usuario:
   for( indice in users ) {

      // Introducimos cada usuario al arreglo
      usersArray.push({
         id: indice,
         username: users[indice].username
      })

   }

   return usersArray

}

http.listen(3000, function () {
   console.log('Example app listening on port 3000!');
});
