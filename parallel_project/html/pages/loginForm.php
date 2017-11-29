<!DOCTYPE html>
<html lang="en">
<head>
	<?php
		include("../partials/header.html");
	?>
</head>
<body class="about-background">
    <main class="Feedback">
       <h4>Login:</h4>
      <form id="contactForm" action="../php/loginFormProcess.php" method="post">
        <table>
          <tr>
            <td>E-mail Address:</td>
            <td><input type="text" name="email" size="40"></td>
          </tr>
          <tr>
            <td>Customer Number</td>
            <td><input type="text" name="customerNumber" size="5"></td>
          </tr>
          <tr>
            <td><input class="btn btn-success" type="submit" value="Login"></td> 
          </tr>
         </table>
        </form>
    </main>
    <?php 
        include ("../partials/footer.html");
    ?> 
</body>
</html>

