<?php
if (empty($_GET['text'])) {
	$text = '未入力です。再度入力してください。';
} else {
	$text = $_GET['text'];
}
?>

<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<title>git_study</title>
</head>
<body>
<h1>git_study</h1>
<?php echo $text; ?>
<?php if (!empty($_GET['text'])): ?>
<p><a href="divination.php?num=<?php echo rand(1, 2); ?>">今日の運勢</a></p>
<?php endif; ?>
</body>
</html>
