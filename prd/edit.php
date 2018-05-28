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

<h1>แก้ไขข้อมูลทีม</h1>

<form action="doEdit.php" method="post">
<input type="hidden" name="id" value="<?=$row['id']?>"
<label>Team : </label>
	<input type="text" name='name' value="<?=$row['TeamName']?>"> <br/>
    <br/>
    <label>Points : </label>
    <input type="text" name='name' value="<?=$row['TeamPoints']?>"> <br/>
    <br/>
  


<button>บันทึก</button> &nbsp;
<a href="CUD_Team.php">ยกเลิก</a>

</form>


</body>
</html>