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
/* $count = $db->exec('INSERT INTO my_items SET maker_id=1, item_name="もも", price=210, keyword="缶詰,ピンク,甘い", sales=0, created="2021-01-31", modified="2021-01-31"');
echo $count . '件のデータを挿入しました'; */

/* $records = $db->query('SELECT * FROM my_items');
while ($record = $records->fetch())   {
print($record['item_name'] . "\n");
} */

$memos = $db->prepare('SELECT * FROM memos ORDER BY id LIMIT ?,5');
$memos->bindParam(1, $_REQUEST['page'], PDO::PARAM_INT);
$memos->execute();
?>
<article>
    <?php while ( $memo = $memos->fetch()): ?>
        <p><a href="memo.php?id=<?php print($memo['id']); ?>"> <?php print(mb_substr($memo['memo'], 0, 50)); ?></a></p>
        <time><?php print($memo['created_at']); ?></time>
        <hr>
    <?php endwhile; ?>
</article>
</pre>
</main>
</body>
</html>