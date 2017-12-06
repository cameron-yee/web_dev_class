<?php
//registrationFormResponse.php
include("../common/document_head.html");
?>

  <body>
    <header>
      <?php
      include("../common/logo.php");
      include("../common/mainmenu.html");
      include("../scripts/connectToDatabase.php");
      ?>
    </header>
    <main>
      <article class="Registration">
        <?php
        include(__DIR__."/registrationFormProcess.php");
        ?>
      </article>
    </main>
    <footer>
      <?php
      include("../common/footer.html");
      ?>
    </footer>
  </body>
</html>
