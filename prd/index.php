<?php
	require_once "config.php";

	$sql = "SELECT * FROM prd";
	$query = mysqli_query($conn,$sql);
	
	$num_prd = mysqli_num_rows($query);

?>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>ตารางคะแนน</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/price-range.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
	<link href="css/main.css" rel="stylesheet">
	<link href="css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
    <link rel="stylesheet" type="text/css" href="http://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
    <link href="assets/css/themify-icons.css" rel="stylesheet">
</head><!--/head-->

<html>
<head>
<meta charset="UTF-8">
</head>
<body>


		<div class="header-bottom"><!--header-bottom-->
			<div class="container">
				<div class="row">
					<div class="col-sm-9">
						<div class="mainmenu pull-left">
							<ul class="nav navbar-nav collapse navbar-collapse ">
                                <li><a href="index.php" class="title text-center">คะแนน</a></li>
                                <li><a href="M_Game.php" class="title text-center">การแข่งขัน</a></li>
                                <li><a href="CUD_Team.php" class="title text-center">จัดการข้อมูลทีม</a></li>
                                <li><a href="Player.php" class="title text-center">ข้อมูลนักเตะ</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-bottom-->


	<section>
		<div class="container">
			<div class="row">
				<div class="col-sm-9 center">
					<div class="features_items"><!--features_items-->
						<h2 class="title text-center">ตารางคะแนน</h2>
						<br/>

							<table>
								<table align="center" border="1" width="80%" class="table table-striped"  id="myTable">
								<tr>
									<td align="center">Team</td>
                                    <td align="center">Points</td>
								</tr>
									<?php while($row = mysqli_fetch_assoc($query)) : ?>

								<tr>
                                    <td>&nbsp;&nbsp;<?=$row['TeamName'] ?></td>
                                    <td align="center">&nbsp;&nbsp;<?=$row['TeamPoints'] ?></td>
								</tr>
									<?php endwhile; ?>
							</table>
					</div>
				</div><!--features_items-->
			</div>
		</div>
	</section>

	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.scrollUp.min.js"></script>
	<script src="js/price-range.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
    <script src="http://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js>"> </script>
    <script>
    	$(document).ready(function(){
    	$('#myTable').DataTable();
	});
    </script>

</body>
</html>