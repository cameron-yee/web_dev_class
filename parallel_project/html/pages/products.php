<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        include("../partials/header.html");
    ?>
    <!--#include virtual="../partials/header.html" -->
</head>
<body class="about-background">
    <?php
        include("../partials/topmenu.php");
    ?>
    <!--#include virtual="../partials/topmenu.html" -->
    <div id="products" class="container-fluid">
        <div class="row margin-adjust">
            <h3>Welcome to Cam Bam's Online Store:</h3>
        </div>
        <button type="button" class="btn btn-warning form-btn"><a href="#">Catalog</a></button>
        <button type="button" class="btn btn-warning form-btn"><a href="pages/loginForm.php">Login</a></button>
        <button type="button" class="btn btn-warning form-btn"><a href="pages/registrationForm.php">Register</a></button>
        <br>
        <br>
        <button type="button" class="btn btn-primary form-btm"><a href="pages/addCustomerRecordForm.php">Add Customer Record</a></button>
        <button type="button" class="btn btn-primary form-btm"><a href="pages/addPartsForm.php">Add Part</a></button>
        <button type="button" class="btn btn-primary form-btm"><a href="pages/addOrderRecordForm.php">Add Order Record</a></button>
        <button type="button" class="btn btn-primary form-btm"><a href="pages/addOrderLineRecordForm.php">Add Order Line Record</a></button>
    </div>
    <?php
        include("../partials/footer.html");
    ?>
    <!--#include virtual="../partials/footer.html" -->
</body>
</html>
