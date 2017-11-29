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
    <main class="Feedback">
      <h4>Register</h4>
      <form id="contactForm" action="php/registrationFormResponse.php" method="post">
        <table>
          <tr>
            <td>First Name</td>
            <td><input type="text" name="firstName" size="40"></td>
          </tr>
          <tr>
            <td>Last Name</td>
            <td><input type="text" name="lastName" size="40"></td>
          </tr>
          <tr>
            <td>Street</td>
            <td><input type="text" name="street" size="40"></td>
          </tr>
          <tr>
            <td>City</td>
            <td><input type="text" name="city" size="40"></td>
          </tr>
          <tr>
            <td>State</td>
            <td><input type="text" name="state" size="40"></td>
          </tr>
          <tr>
            <td>Zip Code</td>
            <td><input type="text" name="zip" size="40"></td>
          </tr>
          <tr>
            <td><input class="btn btn-success" type="submit" value="Send Feedback"></td> 
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
