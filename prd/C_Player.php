<?php
require_once "config.php";

$sql = "SELECT * FROM Player";


$query = mysqli_query($conn,$sql);

$num_prd = mysqli_num_rows($query);
?>


<html>

<body>

<h2 class="title text-center">เพิ่มข้อมูลนักเตะ</h2>
<form action="doC_Player.php" method="post">
    <label>Team Name : </label>
    <input type="text" name='TeamName'> <br/>
    <br/>
    <label>Name Player : </label>
    <input type="text" name='PlayerName'> <br/>
    <br/>
    <label>Number : </label>
    <input type="text" name='PlayerNumber'> <br/>
    <br/>
    <label>Weight : </label>
    <input type="text" name='PlayerWeight'> <br/>
    <br/>
    <label>Height : </label>
    <input type="text" name='PlayerHeight'> <br/>
    <br/>
    <button>บันทึก</button> &nbsp;
    <a href="CUD_Player.php">ยกเลิก</a>
</form>



</body>
</html>