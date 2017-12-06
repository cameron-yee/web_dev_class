<!DOCTYPE html>
<html lang="en">
<head>
	<?php
		include("../partials/header.html");
	?>
</head>
<body class="about-background">
	<?php
		include("../partials/topmenu.php");
	?>
    <main class="customer-record">
      <h4>Add a part:</h4>
      <form id="customer-record" action="/~cyee/php/addCustomerRecordProcess.php" method="post">
        <table>
          <tr>
            <td>CustomerNum:</td>
            <td><input type="text" name="CustomerNum" size="40"></td>
          </tr>
          <tr>
            <td>Customer Name:</td>
            <td><input type="text" name="CustomerName" size="40"></td>
          </tr>
          <tr>
            <td>Street:</td>
            <td><input type="text" name="Street" size="40"></td>
          </tr>
          <tr>
            <td>City:</td>
            <td><input type="text" name="City" size="40"></td>
          </tr>
          <tr>
            <td>State:</td>
            <td><input type="text" name="State" size="40"></td>
          </tr>
          <tr>
            <td>Zip:</td>
            <td><input type="text" name="Zip" size="40"></td>
          </tr>
          <tr>
            <td>E-mail:</td>
            <td><input type="text" name="email" size="40"></td>
          </tr>
          <tr>
            <td><input class="btn btn-success" type="submit" value="Add Customer Record"></td> 
            <td class="RightAligned"><input class="btn btn-warning" type="reset" value="Reset Form"></td>
          </tr>
         </table>
        </form>
    </main>
    <?php 
        include ("../partials/footer.html");
    ?> 
  </body>
</html>


