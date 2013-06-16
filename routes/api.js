
// responds list of all databases - beginning of setup
exports.getall = function ( req, res ) {
  
  var mysql = require('mysql');
  var output = [];

  var connection = mysql.createConnection({
    host     : '127.0.0.1',
    port     : '3306',
    user     : 'root',
    password : '',
    database : 'tabledata'
  });

  connection.connect();
  console.log('Connected to MySQL.');
  res.writeHeader(200, {'Content-type': 'application/json'});

  var output = [];
  connection.query('SELECT * FROM vawhacktable;', function(err, rows, fields) {
    if (err) throw err;

    console.log("Query fired and successful.")

      
    var result = JSON.stringify(rows);

    console.log("Response: " + result);
    
    res.write(result);
    res.end();
  });
  console.log("Connection Closed.");
  connection.end();
};

// responds list of all databases - beginning of setup
exports.setdata = function ( req, res ) {
  
  var mysql = require('mysql');
  var output = [];

  var connection = mysql.createConnection({
    host     : '127.0.0.1',
    port     : '3306',
    user     : 'root',
    password : '',
    database : 'tabledata'
  });
    
console.log(req.body.date);
  connection.connect();
  console.log('Connected to MySQL.');
  res.writeHeader(200, {'Content-type': 'application/json'});

  var output = [];
    console.log('INSERT INTO vawhacktable VALUES( "", "' + req.body.date + '","' + req.body.title + '","' + req.body.story + '","' + req.body.name + '","' + req.body.phone + '","' + req.body.email + '","' + req.body.district + '");');
    
  connection.query('INSERT INTO vawhacktable VALUES( "", "' + req.body.date + '","' + req.body.title + '","' + req.body.story + '","' + req.body.name + '","' + req.body.phone + '","' + req.body.email + '","' + req.body.district + '");', function(err, rows, fields) {
    if (err) throw err;

    console.log("Query fired and successful.");

    var result = JSON.stringify(rows);

    console.log("Response: " + result);
    
    res.write(result);
    res.end();
  });
  console.log("Connection Closed.");
  connection.end();
};

// responds list of all databases - beginning of setup
exports.getreportnumber = function ( req, res ) {
  
  var mysql = require('mysql');
  var output = [];

  var connection = mysql.createConnection({
    host     : '127.0.0.1',
    port     : '3306',
    user     : 'root',
    password : '',
    database : 'tabledata'

  });

  connection.connect();
  console.log('Connected to MySQL.');
  res.writeHeader(200, {'Content-type': 'application/json'});

  var output = [];
  connection.query('SELECT count(*) as number from vawhacktable;', function(err, rows, fields) {
    if (err) throw err;

    console.log("Query fired and successful.")
    for (var i in rows) {
        var result = rows[i].number;
     }
      
    console.log("Response: " + result);
    
    res.write("" + result);
    res.end();
  });
  console.log("Connection Closed.");
  connection.end();
};

// responds list of all databases - beginning of setup
exports.getdistrictnumber = function ( req, res ) {
  
  var mysql = require('mysql');
  var output = [];

  var connection = mysql.createConnection({
    host     : '127.0.0.1',
    port     : '3306',
    user     : 'root',
    password : '',
    database : 'tabledata'
  });

  connection.connect();
  console.log('Connected to MySQL.');
  res.writeHeader(200, {'Content-type': 'application/json'});

  var output = [];
  connection.query('SELECT COUNT(DISTINCT district) as number FROM vawhacktable;', function(err, rows, fields) {
    if (err) throw err;

    console.log("Query fired and successful.")
    for (var i in rows) {
        var result = rows[i].number;
    }

    console.log("Response: " + result);
    
    res.write("" + result);
    res.end();
  });
  console.log("Connection Closed.");
  connection.end();
};
