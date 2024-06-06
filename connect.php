<?php

$email = filter_input(INPUT_POST, 'email');
$password = filter_input(INPUT_POST, 'password');
if (!empty($email)) {
    if (!empty($password)) {
$host = "localhost";
$dbemail = "root";
$dbpassword = "";
$dbname = "mobil_db";
}

//Create Connection
$conn = new mysql_connect($host, $dbemail, $dbpassword, $dbname);

if (mysql_connect_error()) {
    die('Connect Error('.mysql_error_errno().')'.
    . mysql_connect_error());

}
else{
    $sql = "INSERT INTO pengguna (email, password) VALUES ('$email', '$password')";
    if ($conn->query($sql)){
        
    }
    else{
        echo "Error: ". $sql . "<br>" . $conn->error; 
    }
    $conn->close();
}
else{
    
    die();
}
}
else{
    
    die();
}
?>