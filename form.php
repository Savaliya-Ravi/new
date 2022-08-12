<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>fill the form</title>
</head>
<body>
  
    <form action="/phpt/form.php" method="post">
<lable for="name" > NAME </lable>
<br>
<input type="text" class="form-control" id="name" name="name">
<br>
<br>
<br>
<br>
<lable for="email" > EMAIL </lable>
<br>
<input type="email" class="form-control" id="name" name="email">
<br>
<br>
<br>
<br>
<lable for="discription" > PASSWORD </lable>
<br>
<input type="textarea" class="form-control" id="description" name="desc">
<br>
<br>
<button type ="submit"> SUBMIT</button>

    </form>
    <?php
$servername = "localhost";
$username = "root";
$pass = "";
$database ="ravi";
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $desc = $_POST['desc'];
}

$con = mysqli_connect($servername, $username, $pass, $database);   

$sql = "INSERT INTO `worker` (`name`, `email`, `description`) VALUES ('$name', '$email', '$desc')"; 
mysqli_query($con, $sql);

?>
</body>
</html>