<?php
 require("connection.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['roomname']) && isset($_POST['roomcap'])) {
        $roomName = $_POST['roomname'];
        $roomCapacity = $_POST['roomcap'];

$sql="SELECT * FROM room WHERE db_room='$roomName'";
$result=mysqli_query($connection,$sql);
if (mysqli_num_rows($result)>0) {
    $sql="UPDATE room set db_capacity='$roomCapacity'";
    $result=mysqli_query($connection,$sql);
    header('Location: room.php?update');


}else {
    $sql="INSERT INTO room (db_room,db_capacity) VALUES ('$roomName','$roomCapacity')";
    $result=mysqli_query($connection,$sql);
    header('Location: room.php?done');

}
        exit();
    } else {
        header('Location: room.php?error');
        exit();
    }
}
?>
