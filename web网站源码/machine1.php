<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>机器状况1</title>
<meta http-equiv="refresh" content="20">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script src="http://localhost:8088/project/echarts.js"></script>
</head>
<body background="机器信息.jpg" style=" background-repeat:no-repeat ;background-size:100% 100%; background-attachment:fixed;">
<table border="0px" width="100%">
<table>
<tr height="80px">&nbsp;</tr>
</table>
<div id="main" style="width:600px; height:400px"></div>
<?php
include_once("C:\Program Files\Apache Software Foundation\Tomcat 8.5\webapps\project\connect.php");
$i=0;
$sum1=0;
$sum2=0;
$sum3=0;
$sum4=0;
$sum5=0;
$sum6=0;
$sum7=0;
$result=mysqli_query($conn,"select * from conditionMonitor")
or die("SQL语句执行失败");
for($k=0;$k<70;$k++){
$myrow=mysqli_fetch_array($result);
$array1[$i]=$myrow[1];
$array2[$i]=$myrow[3];
$i++;
}
for($l=0;$l<10;$l++){
	$sum1=$array2[$l]+$sum1;
}
$aver1=$sum1/10.0;
for($l=10;$l<20;$l++){
	$sum2=$array2[$l]+$sum2;
}
$aver2=$sum2/10.0;
for($l=20;$l<30;$l++){
	$sum3=$array2[$l]+$sum3;
}
$aver3=$sum3/10.0;
for($l=30;$l<40;$l++){
	$sum4=$array2[$l]+$sum4;
}
$aver4=$sum4/10.0;
for($l=40;$l<50;$l++){
	$sum5=$array2[$l]+$sum5;
}
$aver5=$sum5/10.0;
for($l=50;$l<60;$l++){
	$sum6=$array2[$l]+$sum6;
}
$aver6=$sum6/10.0;
for($l=60;$l<70;$l++){
	$sum7=$array2[$l]+$sum7;
}
$aver7=$sum7/10.0;
?>
<script language="javascript">
	if(<?php echo $aver1 ?><50){
		alert("警报!湿度过低");
	}else if(<?php echo $aver1 ?>>65){
	    alert("警报!湿度过高");
	}
</script>
</body>
<script type="text/javascript">
var myChart = echarts.init(document.getElementById('main'));
var option = {
    title : {
        text: '机器湿度',
        subtext: '每20S刷新一次'
    },
    tooltip : {
        trigger: 'axis'
    },
    legend: {
        data:['湿度']
    },
    toolbox: {
        show : true,
        feature : {
            mark : {show: true},
            dataView : {show: true, readOnly: false},
            magicType : {show: true, type: ['line', 'bar']},
            restore : {show: true},
            saveAsImage : {show: true}
        }
    },
    calculable : true,
    xAxis : [
        {
            type : 'category',
            boundaryGap : false,
            data:[<?php echo $array1[9]; ?>, <?php echo $array1[19]; ?>, <?php echo $array1[29]; ?>, <?php echo $array1[39]; ?>, <?php echo $array1[49]; ?>, <?php echo $array1[59]; ?>, <?php echo $array1[69]; ?>]
        }
    ],
    yAxis : [
        {
            type : 'value',
            axisLabel : {
                formatter: '{value} %'
            }
        }
    ],
    series : [
        {
            name:'湿度',
            type:'line',
            data : ['<?php echo $aver1; ?>','<?php echo $aver2; ?>','<?php echo $aver3; ?>','<?php echo $aver4; ?>','<?php echo $aver5; ?>','<?php echo $aver6; ?>','<?php echo $aver7; ?>'],
            markPoint : {
                data : [
                    {type : 'max', name: '最大值'},
                    {type : 'min', name: '最小值'}
                ]
            },
            markLine : {
                data : [
					{yAxis: 50, name: '湿度警戒线1'},
					{yAxis: 65, name: '湿度警戒线2'},
                ]
            }
        },
    ]
};
                    
		myChart.setOption(option);	
</script>

<?php
for($p=0;$p<10;$p++){
$result1=mysqli_query($conn,"delete from conditionMonitor where acquisitionTime='$array1[p]'")
or die("SQL语句执行失败");
}
?>

</html>