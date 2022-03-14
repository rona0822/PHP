<h2>Practice</h2>
<pre>
    <?php
    try {
        $db = new PDO('mysql:dbname=mydb;host=localhost;charset=utf8', 'root', 'root');
    } catch (PDOException $e) {
        echo 'DB接続エラー： ' . $e->getMessage();
    }

    $statement = $db->prepare('INSERT INTO memos SET memo=?, created_at=NOW()');
    $statement->execute(array($_POST['memo']));
    echo 'メモが登録されました';
    ?>
</pre>
