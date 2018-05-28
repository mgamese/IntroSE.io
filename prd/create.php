<?php
	require_once "config.php";

	$sql = "SELECT * FROM prd";


	$query = mysqli_query($conn,$sql);
	
	$num_prd = mysqli_num_rows($query);
?>


<html>

<body>

    <h2 class="title text-center">เพิ่มข้อมูลทีม</h2>
    <form action="doCreate.php" method="post">
        <label>Team Name : </label>
        <input type="text" name='TeamName'> <br/>
        <br/>
        <label>Points : </label>
        <input type="text" name='TeamPoints'> <br/>
        <br/>
        <button>บันทึก</button> &nbsp;
        <a href="CUD_Team.php">ยกเลิก</a>
    </form>



</body>
</html>