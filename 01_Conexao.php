 <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    
    //create connection
    $conn = new mysqli($servername, $username, $password);
    
    //check connection
    if($conn->connect_error){
        die("Connection Failed: ". $conn->connect_error);
    }
    echo "Connected Sucesfully";
    echo "<hr>";

    $dbname = 'avalia02';
    $db = mysqli_select_db($conn, $dbname);
    
    if(!$db){
        die('Database not Selected: ' . mysql_error());
    }