<?php
    $myfile = fopen("userID.txt", "a+");
    $userID = $_POST['userID'].";";
    fwrite($myfile, $userID);
    fclose($myfile);
    if($userID !=''){header("Location: main.html");}
?>
