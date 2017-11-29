<?php
/*registrationFormProcess.php
//Calls these functions (defined below):
//emailAlreadyExists()
//getUniqueID()
Enters the customer's information from the registration
form into the database. Fails if the user does not have
an e-mail address that is unique in the database. 
*/

//========== main script begins here



    $query = "INSERT INTO Customers(
        CustomerNum,
        Customername, 
        Street,
        City,
        State,
        Zip,
    )

    $success = mysqli_query($db, $query);
    echo "<h3>Thank you for registering with our e-store.</h3>";
    echo "<h3>To log in and start shopping please
         <a href='pages/loginForm.php'
            class='NoDecoration'>click here</a>.</h3>";
}
mysqli_close($db);
//========== main script ends here


?>
