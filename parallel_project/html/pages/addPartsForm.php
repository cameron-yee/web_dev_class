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
    <main class="parts">
      <h4>Add a part:</h4>
      <form id="partsform" action="/~cyee/php/addPartsProcess.php" method="post">
        <table>
          <tr>
            <td>PartNum:</td>
            <td><input type="text" name="PartNum" size="40"></td>
          </tr>
          <tr>
            <td>Description:</td>
            <td><input type="text" name="Description" size="40"></td>
          </tr>
          <tr>
            <td>Price:</td>
            <td><input type="number" name="Price" step="0.01" size="40"></td>
          </tr>
          <tr>
            <td>E-mail Address:</td>
            <td><input type="text" name="email" size="40"></td>
          </tr>
          <tr>
            <td><input class="btn btn-success" type="submit" value="Add Part"></td> 
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
