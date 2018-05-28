<?php
require_once "config.php";

//print_r($_POST);die();

$TeamName = $_POST['TeamName'];
$PlayerName = $_POST['PlayerName'];
$PlayerNumber = $_POST['PlayerNumber'];
$PlayerWeight = $_POST['PlayerWeight'];
$PlayerHeight = $_POST['PlayerHeight'];



$sql = "INSERT INTO `player`"
    ." (`id`, `TeamName`, `PlayerName`, `PlayerNumber`, `PlayerWeight`, `PlayerHeight`)"
    ." VALUES (NULL, '$TeamName','$PlayerName','$PlayerNumber','$PlayerWeight','$PlayerHeight');";


$query = null;
if($TeamName && $PlayerName && $PlayerNumber && $PlayerWeight && $PlayerHeight){
    $query = mysqli_query($conn,$sql);
}

?>

<html>
<head>
    <meta charset="UTF-8">
</head>
<body>

<?php
if($query){
    echo "เพิ่มข้อมูลสำเร็จ";
}else {
    echo "เพิ่มข้อมูลไม่สำเร็จ";
}

?>
<br/>
<a href="CUD_Player.php">หน้าหลัก</a>
</body>
</html>

