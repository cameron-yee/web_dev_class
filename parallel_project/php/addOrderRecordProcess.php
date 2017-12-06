<?php
/*feedbackFormProcess8.php
Processes feedback form data by first constructing a
message of response from the user's input, and then 
- sends an e-mail message to the business
- sends a slightly modified e-mail message to the client
- returns a confirmation message to the client's browser
- logs the feedback in a file on the server
*/

//Construct message to be sent to the business
$messageToBusiness = 
    "E-mail address: $_POST[email]\r\n".
    "Order Number: $_POST[OrderNum]\r\n".
    "Order Date: $_POST[OrderDate]\r\n".
    "Customer Number: $_POST[CustomerNum]\r\n";

//Send e-mail feedback message to the business
$headerToBusiness = "From: $_POST[email]\r\n";
mail("cyee@uccs.edu", "New Order Record Added to CamBam's Bikes",
    $messageToBusiness);

//Construct e-mail confirmation message for the client,
//which is just a slightly modified version of the message
//that went to the business
$messageToClient =
    "The following order record was added to CamBam's Bikes:\r\n".
    $messageToBusiness;

//Sends e-mail confirmation message to the client
$headerToClient = "From: cyee@uccs.edu\r\n";
mail($_POST['email'], "New Order Record Added to CamBam's Bikes",
    $messageToClient, $headerToClient);

//Transforms confirmation message to HTML 5 format for
//display in the client's browser
$display = str_replace("\r\n", "\r\n<br>", $messageToClient);
$display = "<!DOCTYPE html>
    <html lang='en'>
    <head><meta charset='utf-8'><title>Your Message</title></head>
    <body><code>$display</code></body>
    </html>";
echo $display;

//Logs the message in data/feedback.txt on the web server
//Note: directory "data" is at same level as directory "scripts"
$fileVar = fopen("../data/order-record.txt", "a")
    or die("Error: Could not open the log file.");
fwrite($fileVar,
    "\n-------------------------------------------------------\n")
    or die("Error: Could not write divider to the log file.");
fwrite($fileVar, "Date received: ".date("jS \of F, Y \a\\t H:i:s\n"))
    or die("Error: Could not write date to the log file.");
fwrite($fileVar, $messageToBusiness)
    or die("Error: Could not write message to the log file.");
?>

