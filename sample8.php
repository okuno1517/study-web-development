<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ページタイトル</title>
    <link rel="stylesheet" href="styles.css"> <!-- 外部CSSファイル -->
</head>
<body>
    <?php
         
       if (isset ($_POST['name'])){
        echo "送信されたもの".$_POST['name'];
       }
    ?>
    <form action="sample8.php" method="POST">  
        名前<input id="name" type="text" name="name">
        <input type="submit" value="送信する">
       
    </form>
</body>
</html>




