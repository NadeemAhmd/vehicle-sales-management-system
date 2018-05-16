<!DOCTYPE html>
<html lang = "en-US">
 <head>
 <link href="css/bootstrap.min.css" rel="stylesheet">
<link href="login/css/styles.css" rel="stylesheet">
 <meta charset = "UTF-8">
 <title>Tables</title>
 <style type = "text/css">
  table, th, td {border: 1px solid black};
 </style>
 </head>
 <a href="index.php" class="btn btn-info">HOME</a>
 <h2><u>TABLE VALUES</u></h2>

 <body style="background:papayawhip;">
 <style>
        body{
            max-width: 1080px;
            width: 99%;
            margin: 20px auto;
            text-align: left;
        }
</style>
 <p>This Page lists all the table  values.</p>
 <p> <br> <h3 style="color:red;">CUSTOMER</h3>
 <?php
  try {
  $con= new PDO('mysql:host=localhost;dbname=vsms', "root", "");
  $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $query = "SELECT * FROM `customer` ORDER BY `customer`.`c_id` ASC, `customer`.`v_id` ASC, `customer`.`cf_name` ASC, `customer`.`cl_name` ASC, `customer`.`c_email` DESC, `customer`.`c_mobile` ASC, `customer`.`nid` ASC, `customer`.`w_start` DESC, `customer`.`w_end` DESC, `customer`.`payment_type` DESC, `customer`.`invoice_id` ASC, `customer`.`c_address` ASC, `customer`.`c_pass` ASC, `customer`.`extra` ASC";
  //$query1 ="SELECT * FROM `manufacturer` ORDER BY `manufacturer`.`manufacturer_id` ASC, `manufacturer`.`manufacturer_name` ASC, `manufacturer`.`manufacturer_logo` ASC";
  //first pass just gets the column names
  print "<font color='black'><table> ";
  $result = $con->query($query);
  //return only the first row (we only need field names)
  $row = $result->fetch(PDO::FETCH_ASSOC);
  print "<font color='black'> <tr> ";
  foreach ($row as $field => $value){
   print " <font color='black'><th>$field</th> ";
  } // end foreach
  print " </tr> ";
  //second query gets the data
  $data = $con->query($query);
  $data->setFetchMode(PDO::FETCH_ASSOC);
  foreach($data as $row){
   print " <tr> ";
   foreach ($row as $name=>$value){
   print " <font color='black'><td>$value</td> ";
   } // end field loop
   print " </tr> ";
  } // end record loop
  print "</table> ";
  } catch(PDOException $e) {
   echo 'ERROR: ' . $e->getMessage();
  } // end try
 ?></br>
 <br>  <h3 style="color:blue;"> MANUFACTURER </h3>
 <?php
  try {
  $con= new PDO('mysql:host=localhost;dbname=vsms', "root", "");
  $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  //$query = "SELECT * FROM `customer` ORDER BY `customer`.`c_id` ASC, `customer`.`v_id` ASC, `customer`.`cf_name` ASC, `customer`.`cl_name` ASC, `customer`.`c_email` DESC, `customer`.`c_mobile` ASC, `customer`.`nid` ASC, `customer`.`w_start` DESC, `customer`.`w_end` DESC, `customer`.`payment_type` DESC, `customer`.`invoice_id` ASC, `customer`.`c_address` ASC, `customer`.`c_pass` ASC, `customer`.`extra` ASC";
  //$query ="SELECT * FROM `manufacturer` ORDER BY `manufacturer`.`manufacturer_id` ASC, `manufacturer`.`manufacturer_name` ASC, `manufacturer`.`manufacturer_logo` ASC";
  $query ="SELECT * FROM `manufacturer` ORDER BY `manufacturer`.`manufacturer_id` ASC, `manufacturer`.`manufacturer_name` ASC, `manufacturer`.`manufacturer_logo` ASC";
  //first pass just gets the column names
  print "<table> ";
  $result = $con->query($query);
  //return only the first row (we only need field names)
  $row = $result->fetch(PDO::FETCH_ASSOC);
  print " <tr> ";
  foreach ($row as $field => $value){
   print " <th>$field</th> ";
  } // end foreach
  print " </tr> ";
  //second query gets the data
  $data = $con->query($query);
  $data->setFetchMode(PDO::FETCH_ASSOC);
  foreach($data as $row){
   print " <tr> ";
   foreach ($row as $name=>$value){
   print " <td>$value</td> ";
   } // end field loop
   print " </tr> ";
  } // end record loop
  print "</table> ";
  } catch(PDOException $e) {
   echo 'ERROR: ' . $e->getMessage();
  } // end try
 ?>
 </br>
 <br> <h3 style="color:green;"> MODEL</h3>
 <?php
  try {
  $con= new PDO('mysql:host=localhost;dbname=vsms', "root", "");
  $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  //$query = "SELECT * FROM `customer` ORDER BY `customer`.`c_id` ASC, `customer`.`v_id` ASC, `customer`.`cf_name` ASC, `customer`.`cl_name` ASC, `customer`.`c_email` DESC, `customer`.`c_mobile` ASC, `customer`.`nid` ASC, `customer`.`w_start` DESC, `customer`.`w_end` DESC, `customer`.`payment_type` DESC, `customer`.`invoice_id` ASC, `customer`.`c_address` ASC, `customer`.`c_pass` ASC, `customer`.`extra` ASC";
  //$query ="SELECT * FROM `manufacturer` ORDER BY `manufacturer`.`manufacturer_id` ASC, `manufacturer`.`manufacturer_name` ASC, `manufacturer`.`manufacturer_logo` ASC";
  $query ="SELECT * FROM `model` ORDER BY `model`.`model_id` ASC, `model`.`model_name` ASC, `model`.`manufacturer_name` ASC";
  //first pass just gets the column names
  print "<table> ";
  $result = $con->query($query);
  //return only the first row (we only need field names)
  $row = $result->fetch(PDO::FETCH_ASSOC);
  print " <tr> ";
  foreach ($row as $field => $value){
   print " <th>$field</th> ";
  } // end foreach
  print " </tr> ";
  //second query gets the data
  $data = $con->query($query);
  $data->setFetchMode(PDO::FETCH_ASSOC);
  foreach($data as $row){
   print " <tr> ";
   foreach ($row as $name=>$value){
   print " <td>$value</td> ";
   } // end field loop
   print " </tr> ";
  } // end record loop
  print "</table> ";
  } catch(PDOException $e) {
   echo 'ERROR: ' . $e->getMessage();
  } // end try
 ?>
 </br>
  <br> <h3 style="color:teal;"> USERS</h3>
 <?php
  try {
  $con= new PDO('mysql:host=localhost;dbname=vsms', "root", "");
  $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  //$query = "SELECT * FROM `customer` ORDER BY `customer`.`c_id` ASC, `customer`.`v_id` ASC, `customer`.`cf_name` ASC, `customer`.`cl_name` ASC, `customer`.`c_email` DESC, `customer`.`c_mobile` ASC, `customer`.`nid` ASC, `customer`.`w_start` DESC, `customer`.`w_end` DESC, `customer`.`payment_type` DESC, `customer`.`invoice_id` ASC, `customer`.`c_address` ASC, `customer`.`c_pass` ASC, `customer`.`extra` ASC";
  //$query ="SELECT * FROM `manufacturer` ORDER BY `manufacturer`.`manufacturer_id` ASC, `manufacturer`.`manufacturer_name` ASC, `manufacturer`.`manufacturer_logo` ASC";
  $query ="SELECT * FROM `users` ORDER BY `users`.`u_id` ASC, `users`.`su` ASC, `users`.`u_email` ASC, `users`.`f_name` ASC, `users`.`l_name` ASC, `users`.`u_bday` DESC, `users`.`u_position` ASC, `users`.`u_type` ASC, `users`.`u_pass` ASC, `users`.`u_mobile` ASC, `users`.`u_gender` ASC, `users`.`u_address` ASC, `users`.`s_question` ASC, `users`.`s_ans` ASC";
  //first pass just gets the column names
  print "<table> ";
  $result = $con->query($query);
  //return only the first row (we only need field names)
  $row = $result->fetch(PDO::FETCH_ASSOC);
  print " <tr> ";
  foreach ($row as $field => $value){
   print " <th>$field</th> ";
  } // end foreach
  print " </tr> ";
  //second query gets the data
  $data = $con->query($query);
  $data->setFetchMode(PDO::FETCH_ASSOC);
  foreach($data as $row){
   print " <tr> ";
   foreach ($row as $name=>$value){
   print " <td>$value</td> ";
   } // end field loop
   print " </tr> ";
  } // end record loop
  print "</table> ";
  } catch(PDOException $e) {
   echo 'ERROR: ' . $e->getMessage();
  } // end try
 ?>
 </br>
  <br> <h3 style="color:maroon;"> VEHICLE</h3>
 <?php
  try {
  $con= new PDO('mysql:host=localhost;dbname=vsms', "root", "");
  $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  //$query = "SELECT * FROM `customer` ORDER BY `customer`.`c_id` ASC, `customer`.`v_id` ASC, `customer`.`cf_name` ASC, `customer`.`cl_name` ASC, `customer`.`c_email` DESC, `customer`.`c_mobile` ASC, `customer`.`nid` ASC, `customer`.`w_start` DESC, `customer`.`w_end` DESC, `customer`.`payment_type` DESC, `customer`.`invoice_id` ASC, `customer`.`c_address` ASC, `customer`.`c_pass` ASC, `customer`.`extra` ASC";
  //$query ="SELECT * FROM `manufacturer` ORDER BY `manufacturer`.`manufacturer_id` ASC, `manufacturer`.`manufacturer_name` ASC, `manufacturer`.`manufacturer_logo` ASC";
  $query ="SELECT * FROM `vehicle` ORDER BY `vehicle`.`v_id` ASC, `vehicle`.`manufacturer_name` ASC, `vehicle`.`model_name` ASC, `vehicle`.`category` ASC, `vehicle`.`b_price` ASC, `vehicle`.`s_price` ASC, `vehicle`.`mileage` ASC, `vehicle`.`add_date` DESC, `vehicle`.`sold_date` DESC, `vehicle`.`status` ASC, `vehicle`.`registration_year` ASC, `vehicle`.`insurance_id` ASC, `vehicle`.`gear` ASC, `vehicle`.`doors` ASC, `vehicle`.`seats` ASC, `vehicle`.`tank` ASC, `vehicle`.`image` ASC, `vehicle`.`e_no` ASC, `vehicle`.`c_no` ASC, `vehicle`.`u_id` ASC, `vehicle`.`v_color` ASC";
  //first pass just gets the column names
  print "<table> ";
  $result = $con->query($query);
  //return only the first row (we only need field names)
  $row = $result->fetch(PDO::FETCH_ASSOC);
  print " <tr> ";
  foreach ($row as $field => $value){
   print " <th>$field</th> ";
  } // end foreach
  print " </tr> ";
  //second query gets the data
  $data = $con->query($query);
  $data->setFetchMode(PDO::FETCH_ASSOC);
  foreach($data as $row){
   print " <tr> ";
   foreach ($row as $name=>$value){
   print " <td>$value</td> ";
   } // end field loop
   print " </tr> ";
  } // end record loop
  print "</table> ";
  } catch(PDOException $e) {
   echo 'ERROR: ' . $e->getMessage();
  } // end try
 ?>
 </br>
 </p>
 </body>
 <p>&copy A Project by Nadeem.All Rights Reserved.
</html>