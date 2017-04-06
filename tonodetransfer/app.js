const express = require("express");
const app = express();
const http = require('http');
const cookieParser = require("cookie-parser");
const bodyParser = require('body-parser');
const assert = require('assert');
const server = http.createServer(app);
const io = require('socket.io').listen(server);

//Settings
app.use(express.static('public'));
app.set('view engine', 'pug');
app.set('views', './views');
app.engine('pug', require('pug').__express);
app.use(bodyParser.urlencoded({ extended: false }));
app.use(cookieParser('13caumed'));
app.enable('trust proxy');
app.use ((req, res,next)=>{if(!req.secure){
    return res.redirect('https://' + req.headers.host.split(":")[0] + req.url);
  }
  next();
});//redirect http to https
app.locals.pretty=true;


//Route
app.get("/",(req,res)=>{
    res.render("main",{path:req.path});
});



//Server
var port = process.env.PORT || 8080,
    ip   = process.env.IP   || '0.0.0.0';
server.listen(port, ip);
console.log('Server running on http://%s:%s', ip, port);