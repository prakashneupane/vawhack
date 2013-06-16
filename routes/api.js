
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
exports.getreportnumber = function ( req, res ) {
  
  var mysql = require('mysql');
  var output = [];

  var connection = mysql.createConnection({
    host     : '127.0.0.1',
    port     : '3306',
    user     : 'root',
    password : ''
  });

  connection.connect();
  console.log('Connected to MySQL.');
  res.writeHeader(200, {'Content-type': 'application/json'});

  var output = [];
  connection.query(';', function(err, rows, fields) {
    if (err) throw err;

    console.log("Query fired and successful.")
    for (var i in rows) {
        output.push(rows[i].Database);
    }
    var result = output.join(',');

    console.log("Response: " + result);
    
    res.write(result);
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
    password : ''
  });

  connection.connect();
  console.log('Connected to MySQL.');
  res.writeHeader(200, {'Content-type': 'application/json'});

  var output = [];
  connection.query(';', function(err, rows, fields) {
    if (err) throw err;

    console.log("Query fired and successful.")
    for (var i in rows) {
        output.push(rows[i].Database);
    }
    var result = output.join(',');

    console.log("Response: " + result);
    
    res.write(result);
    res.end();
  });
  console.log("Connection Closed.");
  connection.end();
};
