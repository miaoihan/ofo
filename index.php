<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<link rel="stylesheet" href="./style.css">
	<title>查询</title>
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
			<div class="btn-round" style="margin-top: 20px;background-color: #2ac87d" onclick="fn_seach()">查询</a>
		</div>
	<a href="lu.php" class="btn-round" style="margin-top: 20px">去录入</a>
</div>
<script>
	function fn_seach(){
			alert(111)
			// let xhr = new XMLHttpRequest();
			// alert(222)
			// let bikeNum = document.querySelector('#bikeNum').value;
			// alert(333)
			// xhr.onreadystatechange = function()
		  // {
		  // if (xhr.readyState==4 && xhr.status==200)
		  //   {
			//     document.getElementById("password").value=xhr.responseText;
		  //   }
		  // }
			// xhr.open("get","./search.php?bikeNum="+ bikeNum,true);
			// xhr.send();
			// alert(444)
		}
	</script>
</body>
</html>