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
    $statement = $db->prepare('INSERT INTO memos SET memo=?, created_at=NOW()');
    $statement->execute(array($_POST['memo']));
    echo 'メモが登録されました';
    ?>
</pre>
</main>
</body>
</html>
