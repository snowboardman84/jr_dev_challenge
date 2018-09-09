<?php

$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "user_class";

$conn = new mysqli($servername, $username, $password);
if ($conn->connect_error) {
  die()
}


$userTable = "CREATE TABLE UserTable (
  id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  name_id VARCHAR(100) NOT NULL,
  email VARCHAR(100) NOT NULL,
  group_id INT NOT NULL,
  address_id VARCHAR(100) NOT NULL,
  reg_date TIMESTAMP
  )";

// In SQL create a user table with feilds for id, name, email, group_id, address_id
$group = "CREAT TABLE GroupTable (

  SELECT [group_id]
  FROM [UserTable]

  UNION

  SELECT [address_id]
  FROM [UserTable]
  )";
// Create a group table and address tables include keys to the user table so that join select statements can be done.

// If there are PHP keywords here that you don't understand, Google it.

// `` are column names
// '' are values

function fill_user_list_variables($args) {
	extract($args);  // What does extract do?

  $where_sql = "WHERE 1";
  $sort_sql = "";
  $from_sql = "";
  $search_sql = "";
  $param_array = array();

  // assume that this sets up the database correctly.
  $db = new PDO("config string");
  // $group, $order, $dir, $q - these are the optional variable that may be passed in.

  //select all rows and columns form a table called users.

  // select the `name` of all the users in 'guest' `group` if a group variable to be passed to func and set to guest. Assume a $group variable passed in.
  // Place the selection into a variable $select_sql.  Use conditionals and add to the $where_sql variable.

  // sort the results by `number_of_files` largest to smallest, make it possible to sort smallest to largest.  Assume a $order and $dir variable - put in $sort_sql

  // Do a text search for a partial name - put in $search_sql

  // combine partial sql stmts into $sql_stmt_st
  $sql_stmt_st =

  // make the statment - this prepares and executes the statement.
  $sql_stmt = $db->prepare($sql_stmt_st);
  $sql_stmt->execute($param_array);

  $result = $sql_stmt->fetch(); // Use in a loop - this returns one result at a time until

  // return an array of associtive arrays of all users.
}


function add_user($args){
  extract($args);
	// Insert a row into the user table.  Data -> username, Full Name, email, group id
  return json_ecncode(array('error'=>0, 'msg'=>''));
}

 ?>
