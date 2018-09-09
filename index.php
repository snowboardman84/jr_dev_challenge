<html>
  <head>
  </head>

  <body>

    <style>

    </style>
<form action="input_get.php"
method="post">
Name: <input type="text"
name="name"><br>
Address: <input type="text"
address="address"><br>
Email: <input type="text"
email ="email"><br>
<input type="submit">



    <!-- Make inputs for name, address, email -->

    <button id="submitButton">Submit</button>

    <table id="userTable">
      <tr>
       <th>Name</th>
       <th>Address</th>
       <th>Email</th>
       <br>
        <!-- Make a table header - Include Name, Address, email -->
      </tr>
    	<!-- Make a php code block here that fetchs from db and adds a row for each db result, only select the first 100 results -->
      <?php

      ?>
    </table>

    <!-- Make a php array, loop to output as a ul html list -->
    <?php
     

      for($x=0, $x < 100, $x+1) {
        echo "<html><ul></html>"
      }
    ?>
    <script>
      // How do you make a javascipt closure?  What are the benifits.

          /* javascript closures work in two ways. One, local, are variables that a short lived and only work when a function is in use.
          Two, global, work all the time the page is live. variables created without the keyword 'var' are always global, even when created within a function.

      // Use JQuery to send the data to the database with an AJAX call.  Add the row to the table dynamically.

      // How do you wait for the page to load before running a function

      // Attach an event handler function to the button click.

      // Make the handler add a new row to the db by AJAX request.

      // Use JQuery to add the row without a page reload.

    </script>
  </body>
</html>
