<!DOCTYPE html>
<html lang="zh-CN">
<head>
	<meta charset="UTF-8">
	<title>DoQin</title>
	<meta http-equiv="X-UA-Compatible" content="IE=Edge;&#32;IE=11;&#32;IE=10;&#32;IE=9;&#32;IE=8" />
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
	<style>
	form {
	    display: block;
	    width: 100%;
	    margin: 0 auto;
	    text-align: center;
	    margin-top: 80px;
	}

	input[type="text"] {
	    width: 40%;
	    height: 30px;
	    font-size: 18px;
	    color: #BD09EF;
	    border: none;
	    border-bottom: solid 1px #0848F0;
	    outline: none;
	    background: #fff;
	}

	input[type="text"]:focus {
    	border-bottom: solid 1px #BD09Ef;
	}

	@media (max-width: 767px){
		input[type="text"] {
	    	width: 60%;
		}
	}
	</style>
</head>
<body>
	<form action="includes/process.php?action=update" method="post" onsubmit="return updateLocation(this);">
		<input type="text" name="u" autocomplete="off" value="google.com">
		<!-- <a href="http://www.glype.com/">Glype</a> -->
	</form>
</body>
</html>