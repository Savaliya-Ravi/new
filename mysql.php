<?php

$servername = "localhost";
$username = "root";
$pass = "";
$database ="ravi";
$con = mysqli_connect($servername, $username, $pass, $database);
if($con){
    echo "connection build succsefully...!<br>";
}
$sql = "SELECT * FROM employee WHERE SALARY > 30000;
";
$result = mysqli_query($con ,$sql);
if($result){
    echo strtolower(substr($sql,7));
    echo ' created succsessfully';
}
else {
    echo 'failed to creat';

}

?>