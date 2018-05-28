<?php
require_once "config.php";

//print_r($_POST);die();
$id = $_POST['id'];



$sql = "DELETE FROM `player` WHERE `player`.`id` = $id";

$query = mysqli_query($conn,$sql);


?>


<html>
<head>
    <meta charset="UTF-8">
</head>
<body>

<?php
if($query){
    echo "ลบข้อมูลสำเร็จ";
}else {
    echo "ลบข้อมูลไม่สำเร็จ";
}

?>
<br/>
<a href="CUD_Player.php">หน้าหลัก</a>
</body>
</html>