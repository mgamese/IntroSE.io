<?php

    require_once "config.php";
    $id = $_GET['id'];
    $sql = "SELECT * FROM player where id=$id";
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

<form action="doD_Player.php" method="post">
    <input type="hidden" name="id" value="<?=$row['id']?>">
    <label>Team : </label> <?=$row['TeamName']?> <br/>
    <label>Name Player : </label> <?=$row['PlayerName']?> <br/>
    <label>Number : </label> <?=$row['PlayerNumber']?> <br/>
    <label>Weight : </label> <?=$row['PlayerWeight']?> <br/>
    <label>Height : </label> <?=$row['PlayerHeight']?> <br/>
    </br>


    <button>ลบ</button> &nbsp;
    <a href="CUD_Player.php">ยกเลิก</a>

</form>


</body>
</html>