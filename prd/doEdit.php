<?php
require_once "config.php";

//print_r($_POST);die();
    $id = $_POST['id'];
    $TeamName = $_POST['TeamName'];
    $TeamPoints = $_POST['TeamPoints'];


    $sql = "UPDATE `prd` SET `TeamName` = '$TeamName', `TeamPoints` = '$TeamPoints' WHERE `prd`.`id` = $id;";


    $query = null;
    if($id && $TeamName && $TeamPoints ){
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
    echo "แก้ไขข้อมูลสำเร็จ";
}else {
    echo "แก้ไขข้อมูลไม่สำเร็จ";
}

?>
<br/>
<a href="CUD_Team.php">หน้าหลัก</a>
</body>
</html>

