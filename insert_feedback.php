<?php
                    $conn = mysql_connect('localhost', 'root', 'Adelaide160');
    if (!$conn) {
    die('Not connected : ' . mysql_error());
}
    $db_selected = mysql_select_db($database, $conn);
    mysql_set_charset("utf8",$conn);
    $sql = "INSERT INTO feedback VALUES ("1", "1", "1", "An ZHAO", "No", "Yes", "No")";
    if(!mysql_query($sql,$con))
    {
      die('Error: ' . mysql_error());
    }
    mysql_close($con);
     
    header('Location: https://clas.unisa.edu.au');
     
?>

