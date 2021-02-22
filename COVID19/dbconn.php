
<?php
/* Database config */
$db_host        = 'rds-covid19.cgtgaqfkiucx.ap-south-1.rds.amazonaws.com';
$db_user        = 'admin';
$db_pass        = 'Bijapur!!08';
$db_database    = 'dbname'; 
/* End config */
$mysqli = new mysqli($db_host, $db_user, $db_pass, $db_database);
/* check connection */
if (mysqli_connect_errno()) {printf("Connect failed: %s\n", mysqli_connect_error());}
else{echo "Connected to Database";}
?>
