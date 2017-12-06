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
    <main class="order-record">
      <h4>Add a part:</h4>
      <form id="order-record" action="/~cyee/php/addOrderRecordProcess.php" method="post">
        <table>
          <tr>
            <td>OrderNum:</td>
            <td><input type="text" name="OrderNum" size="40"></td>
          </tr>
          <tr>
            <td>Order Date:</td>
            <td><input type="text" name="OrderDate" size="40"></td>
          </tr>
          <tr>
            <td>CustomerNum:</td>
            <td><input type="number" name="CustomerNum" step="1" size="40"></td>
          </tr>
          <tr>
            <td>E-mail Address:</td>
            <td><input type="text" name="email" size="40"></td>
          </tr>
          <tr>
            <td><input class="btn btn-success" type="submit" value="Add Order Record"></td> 
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

