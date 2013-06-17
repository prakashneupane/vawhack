<?php
    // STEP 1
    // prepare necessary parameters
    $client_id = 'apisignup';
    $username = 'vowteam10';
    $password = '6B8GE4iD';
 
    $from = '5455';
    $to = '9851142041'; // change this no as u want
    $text = 'keto hamro first sms hai';
 
    // STEP 2
    // build the url
    $api_url =  "http://api.sparrowsms.com/call_in.php?" . 
                http_build_query(array(
                    "client_id" => $client_id,
                    "username" => $username,
                    "password" => $password,
                    "from" => $from,
                    "to" => $to,
                    "text" => $text
                ));
 
    // STEP 2
    // put the request to server
    $response = file_get_contents($api_url);
    // check the response and verify
    print_r($response);
 
?>