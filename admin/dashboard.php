<?php
session_start();
include('includes/config.php');
include('includes/checklogin.php');
check_login();

?>
<!doctype html>
<html lang="en" class="no-js">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
	<link rel="stylesheet" href="style/header.css">
	<link rel="stylesheet" href="style/dashboard.css">
	<link rel="stylesheet" href="style/sidebar.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<title>DashBoard</title>



</head>

<body>
<?php include("includes/header.php");?>

	<div class="ts-main-content">
		<?php include("includes/sidebar.php");?>
		<div class="content-wrapper">
			<div class="container-fluid">
			<h2 class="page-title" >Dashboard</h2>
				<div class="rowi">
					<div class="cols">

						
						
						<div class="rowi">
							<div class="col-md-12">
								<div class="rowi">
									<div class="col-md-4">
										<div class="panel panel-default">
											<div class="panel-body bk-primary text-light">
												<div class="stat-panel text-center">

<?php
$result ="SELECT count(*) FROM registration ";
$stmt = $mysqli->prepare($result);
$stmt->execute();
$stmt->bind_result($count);
$stmt->fetch();
$stmt->close();
?>

													<div class="stat-panel-number h1 "><?php echo $count;?></div>
													<div class="stat-panel-title text-uppercase"> Students</div>
												</div>
											</div>
											<a href="manage-students.php" class="block-anchor panel-footer">Full Detail <i class="fa fa-arrow-right"></i></a>
										</div>
									</div>
									<div class="col-md-4">
										<div class="panel panel-default">
											<div class="panel-body bk-success text-light">
												<div class="stat-panel text-center">
<?php
$result1 ="SELECT count(*) FROM rooms ";
$stmt1 = $mysqli->prepare($result1);
$stmt1->execute();
$stmt1->bind_result($count1);
$stmt1->fetch();
$stmt1->close();
?>												
													<div class="stat-panel-number h1 "><?php echo $count1;?></div>
													<div class="stat-panel-title text-uppercase">Total Rooms </div>
												</div>
											</div>
											<a href="manage-rooms.php" class="block-anchor panel-footer text-center">See All &nbsp; <i class="fa fa-arrow-right"></i></a>
										</div>
									</div>
									<div class="col-md-4">
										<div class="panel panel-default">
											<div class="panel-body bk-info text-light">
												<div class="stat-panel text-center">
<?php
$result2 ="SELECT count(*) FROM courses ";
$stmt2 = $mysqli->prepare($result2);
$stmt2->execute();
$stmt2->bind_result($count2);
$stmt2->fetch();
$stmt2->close();
?>												
													<div class="stat-panel-number h1 "><?php echo $count2;?></div>
													<div class="stat-panel-title text-uppercase">Total Courses</div>
												</div>
											</div>
											<a href="manage-courses.php" class="block-anchor panel-footer text-center">See All &nbsp; <i class="fa fa-arrow-right"></i></a>
										</div>
									</div>
									
								</div>





				<div class="rowi">
							<div class="col-md-12">
								<div class="rowi">
									<div class="col-md-4">
										<div class="panel panel-default">
											<div class="panel-body bk-info text-light">
												<div class="stat-panel text-center">

<?php
$result ="SELECT count(*) FROM complaints ";
$stmt = $mysqli->prepare($result);
$stmt->execute();
$stmt->bind_result($count);
$stmt->fetch();
$stmt->close();
?>

													<div class="stat-panel-number h1 "><?php echo $count;?></div>
													<div class="stat-panel-title text-uppercase"> Registered Complaints</div>
												</div>
											</div>
											<a href="all-complaints.php" class="block-anchor panel-footer">Full Detail <i class="fa fa-arrow-right"></i></a>
										</div>
									</div>
									<div class="col-md-4">
										<div class="panel panel-default">
											<div class="panel-body bk-danger text-light">
												<div class="stat-panel text-center">
<?php
$result1 ="select count(*) from complaints where complaintStatus is null";
$stmt1 = $mysqli->prepare($result1);
$stmt1->execute();
$stmt1->bind_result($count1);
$stmt1->fetch();
$stmt1->close();
?>												
													<div class="stat-panel-number h1 "><?php echo $count1;?></div>
													<div class="stat-panel-title text-uppercase">New Complaints </div>
												</div>
											</div>
											<a href="new-complaints.php" class="block-anchor panel-footer text-center">See All &nbsp; <i class="fa fa-arrow-right"></i></a>
										</div>
									</div>
									<div class="col-md-4">
										<div class="panel panel-default">
											<div class="panel-body bk-warning text-light">
												<div class="stat-panel text-center">
<?php
$result2 ="select count(*) from complaints where complaintStatus='In Process'";
$stmt2 = $mysqli->prepare($result2);
$stmt2->execute();
$stmt2->bind_result($count2);
$stmt2->fetch();
$stmt2->close();
?>												
													<div class="stat-panel-number h1 "><?php echo $count2;?></div>
													<div class="stat-panel-title text-uppercase">In Process Complaints</div>
												</div>
											</div>
											<a href="inprocess-complaints.php" class="block-anchor panel-footer text-center">See All &nbsp; <i class="fa fa-arrow-right"></i></a>
										</div>
									</div>
									
								</div>
							</div>
						</div>

					


				<div class="rowi">
							<div class="col-md-12">
								<div class="rowi">
					
									<div class="col-md-4">
										<div class="panel panel-default">
											<div class="panel-body bk-success text-light">
												<div class="stat-panel text-center">
<?php
$result1 ="select count(*) from complaints where complaintStatus='Closed'";
$stmt1 = $mysqli->prepare($result1);
$stmt1->execute();
$stmt1->bind_result($count1);
$stmt1->fetch();
$stmt1->close();
?>												
													<div class="stat-panel-number h1 "><?php echo $count1;?></div>
													<div class="stat-panel-title text-uppercase">Closed Complaints </div>
												</div>
											</div>
											<a href="closed-complaints.php" class="block-anchor panel-footer text-center">See All &nbsp; <i class="fa fa-arrow-right"></i></a>
										</div>
									</div>
									<div class="col-md-4">
										<div class="panel panel-success">
											<div class="panel-body bk-info text-light">
												<div class="stat-panel text-center">
<?php
$result2 ="select count(*) from feedback";
$stmt2 = $mysqli->prepare($result2);
$stmt2->execute();
$stmt2->bind_result($count2);
$stmt2->fetch();
$stmt2->close();
?>												
													<div class="stat-panel-number h1 "><?php echo $count2;?></div>
													<div class="stat-panel-title text-uppercase">Total Feedbacks</div>
												</div>
											</div>
											<a href="feedbacks.php" class="block-anchor panel-footer text-center">See All &nbsp; <i class="fa fa-arrow-right"></i></a>
										</div>
									</div>
									
								</div>
							</div>
						</div>			
						

					</div>
				</div>

			</div>
		</div>
	</div>

	<!-- Loading Scripts -->
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap-select.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.dataTables.min.js"></script>
	<script src="js/dataTables.bootstrap.min.js"></script>
	<script src="js/Chart.min.js"></script>
	<script src="js/fileinput.js"></script>
	<script src="js/chartData.js"></script>
	<script src="js/main.js"></script>
	
	<script>
		
	window.onload = function(){
    
		// Line chart from swirlData for dashReport
		var ctx = document.getElementById("dashReport").getContext("2d");
		window.myLine = new Chart(ctx).Line(swirlData, {
			responsive: true,
			scaleShowVerticalLines: false,
			scaleBeginAtZero : true,
			multiTooltipTemplate: "<%if (label){%><%=label%>: <%}%><%= value %>",
		}); 
		
		// Pie Chart from doughutData
		var doctx = document.getElementById("chart-area3").getContext("2d");
		window.myDoughnut = new Chart(doctx).Pie(doughnutData, {responsive : true});

		// Dougnut Chart from doughnutData
		var doctx = document.getElementById("chart-area4").getContext("2d");
		window.myDoughnut = new Chart(doctx).Doughnut(doughnutData, {responsive : true});

	}
	</script>

</body>

</html>