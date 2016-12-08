<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<link rel="stylesheet" href="./style.css">
	<title>录入</title>
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
    	height: 34px;
    	line-height: 34px;
    	width: 80%;
    	border-radius: 25px;
    	font-size: 13px;
    	text-align: center;
		}
		a {
			color: black;
			text-decoration: none;
			out-line: none;
		}
		body{
			background-color:#2f3140;
		}
	</style>
</head>
<body>

<div class="container">
	<div class="tips">
	  该页面是ofo单车录入页，
		请同学们真实的录入车牌和密码，当数据越来越多的时候，同学们就可以完全免费的骑车了
	</div>
		<div>
			<input type="text" name="bikeNum" placeholder="车牌号" id="bikeNum">
		</div>
		<div style="margin-top: 20px">
			<input type="text" name="password" placeholder="密码" id="password">
		</div>
		<div style="margin-top: 20px">
			<input type="submit" value="录入" onclick="save()">
		</div>
	<a href="index.php" class="go" style="margin-top: 20px">去用车</a>
</div>
	<script>

		function save(){
			var xhr = new XMLHttpRequest();
			var bikeNum = document.querySelector('#bikeNum').value;
			var password = document.querySelector('#password').value;
			xhr.onreadystatechange = function()
		  {
		  if (xhr.readyState==4 && xhr.status==200)
		    {
			    if (xhr.responseText=='success') {
			    	alert('录入成功！')
			    }
		    }
		  }
			xhr.open("post","./save.php",true);
			xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
      xhr.send("bikeNum="+bikeNum+"&password="+password);
		}

	</script>
</body>
</html>