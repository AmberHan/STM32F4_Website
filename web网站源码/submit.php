<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>注册中</title>
</head>

<body>
<?php
include_once("C:\Program Files\Apache Software Foundation\Tomcat 8.5\webapps\project\connect.php");
$user = $_POST['username2'];
$pwd = $_POST['pword2'];
$rpwd = $_POST['pword3'];
$rname = $_POST['realname'];
$elephone = $_POST['elephone'];
$result=mysqli_query($conn,"select user,pwd from persons where user = '$user' and pwd = '$pwd'")
or die("SQL语句执行失败");
if($row=mysqli_fetch_array($result))
{
    session_start();
    if($_SESSION['username']=$row['user'] && $_SESSION['pword']=$row['pwd']){
		header("Location:fdmache.php");
		break;
    }
}else{
?>$result=mysqli_query($conn,"insert into userLand values('$user','$pwd','$rpwd','$rname','$elephone')")
or die("SQL语句执行失败");
	<script language="javascript">
	alert("username or password is error!");
	</script>
<?php
}
?>

</body>
</html>