<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>注册</title>
</head>
<body background="注册.jpg" style=" background-repeat:no-repeat ;background-size:100% 100%; background-attachment:fixed;">
<table width="100%" border="0">
<form name="form3" method="post" action="submit.php">
<tr height="160px">&nbsp;<tr>
<tr>
<td width="59%" align="right">username:</td>
<td width="144" height="25"><input name="username2" type="text" size="20" maxlength="100" /></td>
</tr>

<tr>
<td width="59%" align="right">password:</td>
<td width="289" height="25" colspan="2" align="left"><input name="pword2" type="password" size="20" maxlength="100" /></td>
</tr>

<tr>
<td width="59%" align="right">confirm password:</td>
<td width="289" height="25" colspan="2" align="left"><input name="pword3" type="password" size="20" maxlength="100" /></td>
</tr>

<tr>
<td width="59%" align="right">real name:</td>
<td width="144" height="25"><input name="realname" type="text" size="20" maxlength="100" /></td>
</tr>

<tr>
<td width="59%" align="right">elephone:</td>
<td width="144" height="25"><input name="elephone" type="text" size="20" maxlength="100" /></td>
</tr>

<tr>
<td width="59%" align="right">&nbsp;</td>
<td>&nbsp;&nbsp;<input name="sub2" type="submit" value="register" onclick="return mycheck1();" />&nbsp;
<input name="res2" type="reset"  value="reset" /></td>
</tr>

</table>

<script language="javascript">

function mycheck1(){
	if(form3.username2.value==""){
		alert("username不能为空!");form3.username2.focus();return false;
	}
	if(form3.pword2.value==""){
		alert("password不能为空!");form3.pword2.focus();return false;
	}
	if(form3.pword3.value!=form3.pword2.value){
		alert("两次password不相同！");form3.pword3.focus();return false;
	}
	if(form3.realname.value==""){
		alert("real name不能为空!");form3.realname.focus();return false;
	}
	if(form3.elephone.value==""){
		alert("elephone不能为空!");form3.elephone.focus();return false;
	}
}

</script>

</body>
</html>