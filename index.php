<?php 
include('functions.php');
if (!isLoggedIn()) {
$_SESSION['msg'] = "You must log in first";
header('location: login.php');
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Home</title>
<link rel="stylesheet" type="text/css" href="style.css">
<style>
* { margin: 0px; padding: 0px; }
body {
	font-size: 120%;
	background-image:url("https://previews.123rf.com/images/peshkov/peshkov1706/peshkov170600562/80728691-side-view-of-laptop-with-digital-business-charts-placed-on-desktop-with-coffee-cup-toned-image-finte.jpg");
}
</style>
</head>
<body>
<div class="header">
<h2>Home Page</h2>
</div>
<div class="content">
<?php if (isset($_SESSION['success'])) : ?>
<div class="error success" >
<h3>
<?php 
echo $_SESSION['success']; 
unset($_SESSION['success']);
?>
</h3>
</div>
<?php endif ?>
<div class="profile_info">
<div>
<?php  if (isset($_SESSION['user'])) : ?>
<strong><?php echo $_SESSION['user']['username']; ?></strong>
<small>
<i  style="color: #888;">(<?php echo ucfirst($_SESSION['user']['user_type']); ?>)</i> 
<br>
<a href="index.php?logout='1'" style="color: red;">logout</a>
</small>
<?php endif ?>
</div>
</div>
</div>
</body>
</html>
