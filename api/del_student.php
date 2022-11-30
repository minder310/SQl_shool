<?php
include "../db/base.php";
// 呼叫資料庫宣告資料

$student=$pdo->query("SELECT * FROM `students` where `id`='{$_GET['id']}'");
// 這邊取用，$_GET['id']學生的資料。
$sql_class="DELETE FROM `class_student` WHERE `school_num`='{$student['school_num']}'";
// 刪除class_student內school_num內跟$student['school_unm']號碼一樣的刪除。(這一段並沒有真的刪除，而是進行了字串存檔。)
$sql_student="DELETE FROM `students` WHERE `id`='{$_GET['id']}'";
// 刪除students內跟$_GET[ID]一樣ID的數值。

echo $sql_class;
// 這段只是顯示我們所輸入的數值，對不對。
echo "<br>";
echo $sql_student;
// 這段也是顯示我們輸入的數值，對不對。
echo "<br>";
$res_class=$pdo->exec($sql_class);
// $pdo->exce(輸入的指令)，會返回影響多少條資料庫數值。所以$res_class會等於數值。
$res_student=$pdo->exec($sql_student);
// 以下為影響多少條
echo $res_class;
echo "<br>";
echo $res_student;
echo "刪除成功";

//因為刪除的功能被移到後台，所以刪除成功後將使用者導回後台頁面
header("location:../admin_center.php?del=已成功刪除學生{$student['name']}的所有資料！！");
?>