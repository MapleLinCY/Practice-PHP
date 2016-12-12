<?php
	// 判斷 SESSION 是否已啟動
	if(!isset($_SESSION['check_word'])){
		session_start();
	}
	echo "SESSION" . $_SESSION['check_word'];
	echo "POST" . $_POST['checkword'];
	if((!empty($_SESSION['check_word'])) && (!empty($_POST['checkword']))){
		if($_SESSION['check_word'] == $POST['checkword']){
			// 比對正確後，清空將check_word值
			$_SESSION['check_word'] = '';
		

			header('content-type: text/html; charset=utf-8');

			echo '<a href="./captcha_index.php">OK輸入正確，將於一秒後跳轉（按此也可返回）</a>';
			//echo '<meta http-equiv="refresh" content="1; url=./captcha_index.php">';
			//exit();
		}else{
			echo '<a href="./captcha_index.php">Error輸入錯誤，將於一秒後跳轉（按此也可返回）</a>';
			//echo '<meta http-equiv="refresh" content=1; url=./captcha_index.php">';
		}
	}
?>