<?php
    try {
        $db = new PDO('mysql:host=mysql746.db.sakura.ne.jp;dbname=u-sho_mini_bbs;charset=utf8','u-sho','syogo1207');
    } catch(PDOException $e) {
        print('DB接続エラー：' . $e->getMessage());
    }
?>