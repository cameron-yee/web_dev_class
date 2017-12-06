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
    <main class="orderline-record">
      <h4>Add a part:</h4>
      <form id="orderline-record" action="/~cyee/php/addOrderLineProcess.php" method="post">
        <table>
          <tr>
            <td>OrderNum:</td>
            <td><input type="text" name="OrderNum" size="40"></td>
          </tr>
          <tr>
            <td>PartNum:</td>
            <td><input type="text" name="PartNum" size="40"></td>
          </tr>
          <tr>
            <td>Number Ordered:</td>
            <td><input type="text" name="NumOrdered" size="40"></td>
          </tr>
          <tr>
            <td>E-mail:</td>
            <td><input type="text" name="email" size="40"></td>
          </tr>
          <tr>
            <td><input class="btn btn-success" type="submit" value="Add Order Line Record"></td> 
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



