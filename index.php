<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<title>查询</title>
	<style>
		.container{
			margin: 80px auto;
			text-align: center;
		}
		input[type=text]{
			outline: none;   
    	border: 1px solid #fff;
    	height: 35px;
    	width: 80%;
    	border-radius: 25px;
    	text-align: center;
		}
		input[type=submit]{
			outline: none;   
    	border: 1px solid #2ac87d;
    	background-color: #2ac87d;
    	height: 37px;
    	width: 80%;
    	border-radius: 25px;
    	text-align: center;
		}
		.tips{
			width: 80%;
			margin:20px auto;
			padding: 8px 5px;
			font-size: 13px;
			background: #999;
			border-radius: 10px;
		}
		.go{
			display: block;
    	margin: 0 auto;
    	background-color: #f3c12e;
    	height: 37px;
    	line-height: 37px;
    	width: 80%;
    	border-radius: 25px;
    	font-size: 13px;
    	text-align: center;
		}
		a {
			color: black;
	    text-decoration: none;
	    &:hover, &:active {
      text-decoration: none;
    }
	  }
		body{
			background-color:#2f3140;
		}
	</style>
	<script>
		function search(){
			alert(111)
			let xhr = new XMLHttpRequest();
			alert(222)
			let bikeNum = document.querySelector('#bikeNum').value;
			alert(333)
			xhr.onreadystatechange = function()
		  {
		  if (xhr.readyState==4 && xhr.status==200)
		    {
			    document.getElementById("password").value=xhr.responseText;
		    }
		  }
			xhr.open("get","./search.php?bikeNum="+ bikeNum,true);
			xhr.send();
			alert(444)
		}
	</script>
</head>
<body>

<div class="container">
	<div class="tips">
	  请输入车牌号，稍等会密码就会出现！
	</div>
		<div>
			<input type="text" name="bikeNum" placeholder="车牌号" id="bikeNum">
		</div>
		<div style="margin-top: 20px">
			<input type="text" name="password" placeholder="密码" disabled="true"  id="password">
		</div>
		<div style="margin-top: 20px">
			<input type="submit" value="查询" onclick="search()">
		</div>
	<a href="lu.php" class="go" style="margin-top: 20px">去录入</a>
</div>

</body>
</html>