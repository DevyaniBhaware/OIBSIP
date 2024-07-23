<?php
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$delivered = $_POST['delivered'];
$query = $_POST['query'];
$conn = new mysqli('localhost' , 'root' , '' , 'dilevery');
if($conn->connect_error)
{
    die ('Connection failed :'.$conn->connect_error'');

}
else{
    $stmt =$conn->prepare("insert into dilevery(name, email, phone, delivered, query) values(?, ?, ?, ?, ?)");
    $stmt->blind_param("ssiss" ,$name, $email, $phone, $delivered, $query);
    $stmt->execute();
    echo "Noted your response";
    $stmt->close();
    $conn->close();
}
?>