<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>查找中</title>
</head>

<body>
<?php
include_once("C:\Program Files\Apache Software Foundation\Tomcat 8.5\webapps\project\connect.php");
$num = $_POST['num'];
$result=mysqli_query($conn,"select machineNumber from conditionMonitor where machineNumber = '$num'")
or die("SQL语句执行失败");
if($row=mysqli_fetch_array($result))
{
    session_start();
    if($_POST['num']==$row['machineNumber']){
		if($_POST['select']=="温度"){
		header("Location:machine.php");
		break;
		}else if($_POST['select']=="湿度"){
			header("Location:machine1.php");
		    break;
		}else if($_POST['select']=="电压"){
			header("Location:machine2.php");
		    break;
		}else if($_POST['select']=="电流"){
			header("Location:machine3.php");
		    break;
		}
		
    }
}else{
    echo "您查找的机器不存在";
}
?>
</body>
</html>