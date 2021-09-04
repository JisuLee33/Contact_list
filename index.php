 <?php

	require './inc/db.inc';
	if(isset($_GET['loginOK'])){
		$inId = $_GET['inId'];
		$inPw = $_GET['inPw'];
		$db_conn = mysqli_connect($db_server, $db_id, $db_pw, $db_db);
		$db_select = mysqli_select_db($db_conn, $db_db);
		

		if(!$db_conn){
			echo "<script>alert(11)</script>";
		}else{
			echo "안녕하세용 서버연결성공!";
		}

		mysqli_select_db($db_conn, "lee");
			// $sqlQuery = 'select * from `members` where `id`= "' .$inId.'"  and `pw` =password("'.$inPw.'");';//패스워드 입력 시 암호화 할 때
			$sqlQuery = 'select * from `members` where `id`= "' .$inId.'"  and `pw` ="'.$inPw.'";';
			$sqlResult = mysqli_query($db_conn, $sqlQuery);
			echo "<script>alert('".$sqlQuery."')</script>";

			if(mysqli_num_rows($sqlResult) == 0){
				mysqli_free_result($sqlResult);
				mysqli_close($db_conn);
				echo "<script>alert('데베값이 없습니다.');location.replace('./index.php')</script>";
			}
			mysqli_free_result($sqlResult);
			mysqli_close($db_conn);
			setcookie('logId', $inId);
	}
?> 

<!doctype html>
<html lang="ko">
	<head>
		<meta char="utf-8">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
		<title>
			<?php
				echo 'Login';
			?>
		</title>
		<link href="./css/reset.css" rel="stylesheet">
		<link href="./css/main.css" rel="stylesheet">
		<script src="./js/script.js"></script>
	</head>

	<body id="secBODY">
		<main id="secMain">
		</main>
	</body>
</html>