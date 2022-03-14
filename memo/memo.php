<?php require('dbconnect.php'); ?>
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
$memos = $db->prepare('SELECT * FROM memos WHERE id=?');
$memos->execute(array($_REQUEST['id']));
$memo = $memos->fetch();
?>
<article>
    <pre><?php print($memo['memo']); ?></pre>

    <a href="index.php">戻る</a>
</article>
</pre>
</main>
</body>
</html>