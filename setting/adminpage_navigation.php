<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Admin Nav</title>
</head>

<link rel="stylesheet" href="css/header_navigationbar.css" />

<body bgcolor="white">
<div>
<img src="https://www.aryacollege.in/wp-content/uploads/2019/01/Alumni.jpg" width="100%" height="250px" />
</div>
<table class="table">
<tr>
<td>
<ul class="ul1">

    <div class="dropdown">
    <li class="li1 active"><a href="admin_homepage.php"><span class="span1">Home</span></a></li>
    </div>
    <div class="dropdown">
  	<li class="li1"><a href="#"><span class="span1">News</span></a></li>
    	<div class="dropdown-content">
    		<a href="announcement.php">Announcement Board</a>
    		<a href="events.php">Events</a>
   		</div>
    </div>
    

    <div class="dropdown">
    <li class="li1"><a href="Financial_Record.php"><span class="span1">Financial</span></a></li>
		<div class="dropdown-content">
    		<a href="NewPayment.php">New Payment</a>
   		</div>
    </div>
	<div class="dropdown">
	<li class="li1"><a href="manage_alumni.php"><span class="span1">Alumni</span></a></li>
	</div><li class="li2">
	<span class="span2"><?php
	echo "Welcome"." Admin  ".$username1;
	?></span>
    <a href="logout.php"><span class="span1">Logout</span></a></li>
</ul>
</td>
</tr>
</table>

</body>
</html>