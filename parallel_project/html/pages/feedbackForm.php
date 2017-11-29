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
       <h4> Feedback form....Let us know what you think</h4>
      <form id="contactForm" action="../php/feedbackFormProcess.php" method="post">
        <table>
          <tr>
            <td>Salutation:</td>
            <td><select name="salute">
              <option>&nbsp;</option>
              <option>Mrs.</option>
              <option>Ms.</option>
              <option>Mr.</option>
              <option>Dr.</option>
            </select></td>
          </tr>
          <tr>
            <td>First Name:</td>
            <td><input type="text" name="firstName" size="40"></td>
          </tr>
          <tr>
            <td>Last Name:</td>
            <td><input type="text" name="lastName" size="40"></td>
          </tr>
          <tr>
            <td>E-mail Address:</td>
            <td><input type="text" name="email" size="40"></td>
          <tr>
            <td>Phone Number:</td>
            <td><input type="text" name="phone" size="40"></td>
          </tr>
          <tr>
            <td>Subject:</td>
            <td><input type="text" name="subject" size="40"></td>
          <tr>
            <td>Comments:</td>
            <td><textarea name="message" rows="6" cols="30"></textarea></td>
          </tr>
          <tr>
            <td colspan="2">Please check here if you wish to receive a reply:
            <input type="checkbox" name="reply" value="yes"></td>
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