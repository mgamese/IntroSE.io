<?php
require_once "config.php";

//print_r($_POST);die();

$TeamName = $_POST['TeamName'];
$TeamPoints = $_POST['TeamPoints'];


$sql = "INSERT INTO `prd`"
    ." (`id`, `TeamName`, `TeamPoints`)"
    ." VALUES (NULL, '$TeamName', '$TeamPoints');";


$query = null;
if($TeamName && $TeamPoints){
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
<a href="CUD_Team.php">หน้าหลัก</a>
</body>
</html>

