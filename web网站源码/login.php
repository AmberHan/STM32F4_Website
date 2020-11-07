<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>登陆界面</title>
</head>
<body background="登录2.jpg" style=" background-repeat:no-repeat ;background-size:100% 100%; background-attachment:fixed;">
<table border="0px" width="100%">
<form name="form1" method="post" action="mmcheck.php">
<tr height="300px">&nbsp;<tr>
<tr>
<td width="64%" align="right">username:</td>
<td><input name="username" type="text" size="20" maxlength="100"/></td>
</tr>
<tr height="8px">&nbsp;</tr>
<tr>
<td width="64%" align="right">password:</td>
<td align="left"><input name="pword" type="password" size="20" maxlength="100" /></td>
</tr>

<tr>
<td width="64%" align="right">&nbsp;</td>
<td>&nbsp;&nbsp;<input name="sub" type="submit"  value="login" onclick="return mycheck();" />&nbsp;
<input name="res" type="reset"  value="reset" /></td>
</tr>

</form>
</tr>

<tr>
<td width="64%" align="right">&nbsp;</td>
<td>&nbsp;&nbsp;<a href="register.php">registered</a></td>
</tr>
</table>

<script language="javascript">
function mycheck(){
	if(form1.username.value==""){
		alert("username不能为空!");form1.username.focus();return false;
	}
	if(form1.pword.value==""){
		alert("password不能为空!");form1.pword.focus();return false;
	}
}
</script>
</body>
</html>