<?php 
session_start();
$con=mysqli_connect('localhost','root','','bankdata');
$name=$_POST['name'];
$q="select * from users where name='$name'";
$result=mysqli_query($con,$q);
$row_count=mysqli_num_rows($result);
$row=mysqli_fetch_array($result);
$mail=$row['email'];
$amount=$row['amount'];
$_SESSION['name']=$name;

?>
<html>
<head>
	<title><?php echo $name?></title>
	
	<style>
		<?php include "button.css" ?>
		body {
			font-family: "Times New Roman", sans-serif;
			margin: 0px;
			text-align:center;
			}

		.nav-ul {
			list-style-type: none;
			margin: 0;
			padding: 10px;
			verflow: hidden;
			
			}

		.nav-li {
		  float:left;
		}

		.nav-li a {
			
		  display: block;
		  color:#010114;
		  text-align: center;
		  padding: 14px 16px;
		  text-decoration: none;
		  text-transform:uppercase;
		}

		.nav-li a:hover:not(.active) {
		  background-color: white;
		  color:black;
		}
		table{
			text-align:center;
			margin-left: auto;
			margin-right: auto;
			border:1px solid black;
			border-radius: 5px;
			}
		th{
			color:black;
			font-size:24px;
			padding:16px;
		}
		
		td{
			opacity:1.0;
			font-size:22px;
			color: black;
			padding: 11px 16px 11px 18px;
		}
		tr{
			transition: background 0.2s, box-shadow 0.2s;
		}
		th,td{
			border-collapse:collapse;
			border:1px groove black;
		}
		body{
			background-image:url(fm.png);
			background-repeat: no-repeat;
			background-size:cover;
		}
		.flat-table-1 {
			background-color:white;
			font-weight:bold;
			font-family:courier;
			opacity:0.8;
		}
		.flat-table-1 tr:hover {
			background: #FFDD26;
		}
		.btn {
			background-color:#FFEB81;
			border: none;
			color: white;
			padding: 12px 16px;
			font-size: 23px;
			cursor: pointer;
			border-radius: 20px;
		}

		.btn:hover {
			background-color:white;
			color: black;
		}
	</style>
</head>
    <body>
	<ul class="nav-ul" style="height:53px;list-style:none;">
	<a href="index.php"style="text-decoration:none;">
		<ul><h2 style=" font-family:Agency FB; font-size: 55px;color:#380036; float: center;">Basic Banking System</h2></ul>
	</a>
	<br>
	</ul>
	<br><br><br><br><br>
    <div class="view">
       <table class="flat-table-1">
			<tr>
				<th>Name</th>
				<td><?php echo $name?></td>
			</tr>
           
           <tr>
				<?php  
					$row=mysqli_fetch_array($result);
				?>
				<th>Amount</th>
				<td><?php echo $amount?></td>
			</tr>


        </table>

        </div>
		<br>
        <br>
     <div class="buttons">
	<a href="transfer_to.php">
		<button class="glow-on-hover" style="width:180px;"> Transfer To</button>
	</a>
	<br>
	<br>
	<a href="index.php">
    <button class="glow-on-hover">HOME</button>
	</a>
	</div>
	<br>
	<br>

    </body>
</html>