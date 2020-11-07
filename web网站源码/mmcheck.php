<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>验证中</title>
</head>

<body>
<?php
include_once("C:\Program Files\Apache Software Foundation\Tomcat 8.5\webapps\project\connect.php");
$user = $_POST['username'];
$pwd = $_POST['pword'];
$result=mysqli_query($conn,"select userID,userPassword from userLand where userID = '$user' and userPassword = '$pwd'")
or die("SQL语句执行失败");
if($row=mysqli_fetch_array($result))
{
    session_start();
    if($_SESSION['username']=$row['userID'] && $_SESSION['pword']=$row['userPassword']){
        header("Location:fdmachine.php");
		break;
    }
}else{
	?>
	<script language="javascript">
	alert("username or password is error!");
	</script>
<?php
}
?>

</body>
</html>