<!doctype html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="css/style.css">

<tilte>よくわかるPHPの教科書</title>
</head>
<body>
<header>
<hl class="font-weight-nomal">よくわかるPHPの教科書</hl>
</header>

<main>
<h2>Practice</h2>
<pre>
<?php
try {
    $db = new PDO('mysql:dbname=mydb;host=localhost;charset=utf8', 'root', 'root');
}   catch (PDOException $e) {
    echo 'DB接続エラー： ' . $e->getMessage();
}
?>
</pre>
</main>
</body>
</html>