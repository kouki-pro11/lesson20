<?php
if (!isset($_GET['num'])) {
	$ans =  '不正なアクセスです';
} else {
	$num = $_GET['num'];
	switch($num) {
		case '1':
			$ans = '今日の運勢は大凶です';
			break;
		case '2':
			$ans = '今日の運勢は大吉です';
			break;
		case '3':
			$ans = '今日の運勢は中吉です';
			break;
	}
}
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>git_study</title>
</head>
<body>
<?php echo $ans; ?>
</body>
</html>
