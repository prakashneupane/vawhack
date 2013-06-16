
var express = require('express'),
    api = require('./routes/api');

var app = express();

// initial configuration
app.configure( function() {

  
  app.set('views', __dirname + '/views');
  app.engine('html', require('ejs').renderFile);
  app.set('view options', {
    layout: false
  });
  
//CORS middleware
var allowCrossDomain = function(req, res, next) {
    res.header('Access-Control-Allow-Origin', '*');
    res.header('Access-Control-Allow-Methods', 'GET,PUT,POST,DELETE');
    res.header('Access-Control-Allow-Headers', 'Content-Type');

    next();
}

  // middleware supporting JSON, urlencoded and multipart requests
  app.use(express.bodyParser());
  // compression
  app.use(express.methodOverride());
  app.use(express.static(__dirname));
  app.use(app.router);

});

app.configure('development', function(){
  app.use(function(req, res, next) {
    res.header('Access-Control-Allow-Origin', '*');
    res.header('Access-Control-Allow-Methods', 'GET,PUT,POST,DELETE');
    res.header('Access-Control-Allow-Headers', 'Content-Type');

    next();
});
  app.use(express.errorHandler({ dumpExceptions: true, showStack: true }));
});


// get api
app.get('/api/getall', api.getall);
app.get('/api/getreportnumber', api.getreportnumber);
app.get('/api/getdistrictnumber', api.getdistrictnumber);
app.post('/api/setdata', api.setdata);


app.listen(3000, function() {
  console.log("Express server started");
})
