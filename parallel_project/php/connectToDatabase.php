<?php
/*connectToDatabase.php
Handles the connection to the database.
Values for $dbLocation, $dbUsername, $dbPassword, and
$dbName are assigned in the file database.inc, which
must be included from a "safe" (but readable) location
which is outside public_html, for security reasons.
*/

include("../../../database.inc");

if (!isset($dbLocation))
{
    echo "Database location is missing.<br>
          Connection script now terminating.";
    exit(0);
}

if (!isset($root))
{
    echo "Database username is missing.<br>
          Connection script now terminating.";
    exit(0);
}

if (!isset($root))
{
    echo "Database password is missing.<br>
          Connection script now terminating.";
    exit(0);
}

if (!isset($dbName))
{
    echo "Database name is missing.<br>
          Connection script now terminating.";
    exit(0);
}

$db = mysqli_connect($dbLocation,
                     $root,
                     $root,
                     $dbName);
if (mysqli_connect_errno() || ($db == null))
{
    printf("Database connection failed: %s<br>
           Connection script now terminating.",
           mysqli_connect_error());
    exit(0);
}
?>
