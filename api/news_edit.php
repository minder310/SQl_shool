<?php
include_once "../db/base.php";
// include_once是指假如沒有資料引入，不會造成程式停止。
$sql="UPDATE `news`
         SET `subject`='{$_POST['subject']}',
             `content`='{$_POST['content']}',
             `type`='{$_POST['type']}',
             `top`='{$_POST['top']}',
             `readed`='{$_POST['readed']}'
       WHERE `id`='{$_POST['id']}'";
    //    宣告指令，並且傳入post值
$pdo->exec($sql);
// exec是將資料存回資料庫的語法。
header("location:../admin_center.php?do=news");
// 返回/admin_center.php?do=news。

?>