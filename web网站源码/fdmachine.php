<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>机器查找</title>
</head>

<body background="机器查找.jpg" style=" background-repeat:no-repeat ;background-size:100% 100%; background-attachment:fixed;">
<table border="0px" width="100%">
        <form name="form4" method="post" action="machcheck.php">
        <tr height="86px">&nbsp;<tr>
        <td width="73.5%" align="right">机器编号:</td>
        <td><input name="num" type="text" size="20" maxlength="100" /></td>
        </tr>
        
        <tr height="30px">&nbsp;<tr>
        <td width="73.5%" align="right">&nbsp;</td>
        <td>
         <select name="select" style="width:160px;">
         <option value ="温度">温度</option>
         <option value ="湿度">湿度</option>
         <option value="电压">电压</option>
         <option value="电流">电流</option>
         </select>
        </td>
        </tr>
        
        <tr height="30px">&nbsp;<tr>
        <td width="73.5%" align="right">&nbsp;</td>
        <td><input name="sub3" type="submit" style="width:160px;"  value="查找" /></td>
        </form>     
        </table>
</body>
</html>