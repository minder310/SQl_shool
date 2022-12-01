<?php
$dsn="mysql:host=localhost;charset=utf8;dbname=school";
// 宣告伺服器登入資料(資料庫類型:host=資料庫名稱;charset=資料庫編碼;dbname=使用數據庫名稱,數據庫連結用戶名,數據庫密碼)
$pdo=new PDO($dsn,'root','');
// 導入資料庫資料語法$pdo等於整個資料庫，所以必須使用資料庫語法來取用資料。

// 調整時間選項。
date_default_timezone_set("Asia/Taipei");
// 導入cookie之類的資料。
session_start()
?>