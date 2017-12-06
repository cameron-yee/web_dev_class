<?php
/*registrationFormProcess.php


Enters the customer's information from the registration
form into the database. Fails if the user does not have
an e-mail address that is unique in the database. 
*/

//========== main script begins here

echo "<h3>Begin registration form process.</h3>";

    $query = "INSERT INTO CUSTOMER(
        CustomerNum,
        Customername, 
        Street,
        City,
        State,
        Zip
    )

             VALUES (
        '$_POST[custnum]', 
        '$_POST[Name]', 
        '$_POST[address]',
        '$_POST[city]',
        '$_POST[state]',
        '$_POST[zip]'
    );";

echo "<h3>End registration form process.</h3>";

//    $success = mysqli_query($dbName, $query);
    $success=$db->query($query);
    echo "<h3>Thank you for registering with our e-store.</h3>";
    echo "<h3>To log in and start shopping please
         <a href='pages/loginForm.php'
            class='NoDecoration'>click here</a>.</h3>";

mysqli_close($dbName);
//========== main script ends here


?>
