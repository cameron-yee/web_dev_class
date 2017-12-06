<html lang="en">
<head>
  <?php
  //registrationFormResponse.php
  include("../partials/header.html");
  ?>
</head>
  <body>
    <header>
      <?php
      include("../partials/topmenu.php");
      include("128.198.162.204/~cyee/php/connectToDatabase.php");
      ?>
    </header>
    <main>
      <article class="Registration">
        <?php
        include(__DIR__."/php/registrationFormProcess.php");
        ?>
      </article>
    </main>
    <footer>
      <?php
      include("../partials/footer.html");
      ?>
    </footer>
  </body>
</html>
