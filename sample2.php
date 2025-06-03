



<?php
date_default_timezone_set('Asia/Tokyo');

// 日時を取得し、HTML特殊文字をエスケープして改行を<br>タグに変換
echo nl2br(htmlspecialchars("PHPでの時間表示\n" . date('Y年m月d日 H時i分s秒です')));
?>






    
