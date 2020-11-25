<?php

function OpenCon()
{
    $dbhost = "localhost";
    $dbuser = "BGweb";
    $dbpass = "Cl@ssproject1";
    $dbname = "boredgames_users";

    $conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname)
    or die("Connect failed: %s\n".$conn->error);

    return $conn;
}

function CloseCon($conn)
{
    $conn ->close();
}

?>