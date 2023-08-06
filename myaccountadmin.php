<?php
include('include.php');
?>
<?php
include 'database_configuration.php';

$sql = "SELECT * FROM users where username = '$current'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  
    while($row = $result->fetch_assoc()) {
        $userid = $row['userid'];
        $fullname = $row['fullname'];
        $gender = $row['gender'];
        $address = $row['address'];
        $myusername = $row['username'];
        $mypassword = $row['password'];
    }
} else {
    echo "0 results";
}
$conn->close();
?>

<!DOCTYPE html>
<html>
<title>ADMIN| Update Account</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="style/w3.css">
<link rel="stylesheet" href="style/bootstrap.min.css">
<link rel="icon" href="images/icon.png">
<style>
input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

textarea {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
}
</style>
<body>
<div class="w3-container w3-red">
  <h1>ETHIOPIAN CITIZENS NATIONAL ID CARD SYSTEM</h1>
</div>
<ul class="w3-navbar w3-light-grey">
    <li><a href="administrator.php">Registerd citizens</a></li>
    <li><a href="newuser.php">Register User</a></li>
    <li><a href="announcements.php">Announcements</a></li>
    <li><a href="request renewal.php">Renewal request</a></li>
    <li><a href="myaccountadmin.php">Account Update</a></li>
    <li><a href="users.php">issued id</a></li>
    <li><a href="users.php">Customize Users</a></li>
<li class="w3-right"><a class="w3-green" href="logout.php">Logout (<?php echo"$current"; ?>)</a></li>
  </ul>
  <div class="container">
<h2>Update Account - <?php echo"$userid"; ?></h2>
<form action="update_acc.php" method="POST">
<br>
  <p>
  <label>Full Name</label>
  <input  name="fullname" type="text"  placeholder="Enter Full Name" value="<?php echo"$fullname"; ?>"required></p>
    <label><b>Gender</b></label>
  <input  name="gender" type="text"  placeholder="Enter Gender" value="<?php echo"$gender"; ?>"required></p>

    <label><b>Address</b></label>
  <input  name="address" type="text"  placeholder="Enter Address" value="<?php echo"$address"; ?>"required></p>

       <label><b>Username</b></label>
  <input  name="username" type="text"  placeholder="Enter Username" value="<?php echo"$myusername"; ?>"required></p>

    <label><b>Password</b></label>
  <input  name="password" type="password"  placeholder="Enter Password" value="<?php echo"$mypassword"; ?>"required></p>
<input type="hidden" name="id" value="<?php echo"$userid"; ?>">
    <button type="submit" class="w3-btn w3-red">Update Account</button>
