
<html>
<head>

<meta http-equiv="Content-Type" content="text/html; charset="utf-8" />
<title>PHP圖形驗證碼</title>

<script>
function refresh_code(){
	document.getElementById("imgcode").src="captcha.php";
}
</script>
</head>
<body>
<form name="form1" method="post" action="./checkcode.php">
	<p>請輸入下圖字樣：</p><p><img id="imgcode" src="captcha.php" onclick="refresh_code()"  /></p>
	<input type="text" name="checkword" size="10" maxlength="10" />
	<input type="submit" name="submit" value="送出" /><?php echo "Hello" . $_SESSION['check_word'];?>
</form>
</body>
</html>