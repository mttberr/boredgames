<? php 
    mysql_connect("127.0.0.1",
                  "root", "Sherlock@2218")
        or die("<p>Error connecting to database: " .
               mysql_error() . "</p");

    echo "<p>Connected to MySQL!</p>";
?>