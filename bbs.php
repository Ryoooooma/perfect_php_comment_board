<!DOCTYPE html>
<html lang="ja">
	<head>
		<meta charset="utf-8">
		<title>ひとこと掲示板</title>
	</head>
	<body>
		<h1>ひとこと掲示板</h1>
		<form action="bbs.php" method="post">
			<p>
				お名前：<input type="text" name="name">
			</p>
			<p>
				ひとこと：<input type="text" name="comment" size="60">
			</p>
			<p>
				<input type="submit" name="submit" value="送信">
			</p>
		</form>
	</body>
</html>