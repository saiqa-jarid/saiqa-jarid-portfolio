<?php

$conn = mysqli_connect("localhost","root","","portfolio_db");

if(!$conn){
    die("Database Connection Failed");
}

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$sql = "INSERT INTO contacts(name,email,message)
VALUES('$name','$email','$message')";

mysqli_query($conn,$sql);


$to = "saiqajarid@gmail.com";

$subject = "New Portfolio Message";

$body = "

You received a new portfolio message.

Name: $name

Email: $email

Message:
$message

";

$headers = "From: $email";

mail($to,$subject,$body,$headers);

echo "

<script>

alert('Message Sent Successfully');

window.location.href='http://localhost/portfolio/#contact';

</script>

";

?>