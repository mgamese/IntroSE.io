<?php
     
    require_once "config.php";
    $id = $_GET['id'];
    $sql = "SELECT * FROM prd where id=$id";
    $query = mysqli_query($conn,$sql);
     
    $num_prd = mysqli_num_rows($query);
    $row = mysqli_fetch_assoc($query);
 
?>


<html>
<head>
<meta charset="UTF-8">
</head>
<body>
 
<h1>คุณต้องการลบข้อมูลนี้ใช่หรือไม่</h1>
 
<form action="doDelete.php" method="post">
<input type="hidden" name="id" value="<?=$row['id']?>">
    <label>Team : </label> <?=$row['TeamName']?> <br/>
    <label>Points : </label> <?=$row['TeamPoints']?> <br/>
</br>
 
 
<button>ลบ</button> &nbsp;
<a href="CUD_Team.php">ยกเลิก</a>
 
</form>
 
 
</body>
</html>