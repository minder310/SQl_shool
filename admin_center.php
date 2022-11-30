<?php
include "./db/base.php";
// 導入session.start，並且調整時間。

if(!isset($_SESSION['login'])){// 宣告一個$_SESSION['login']，當裡面沒有值。
    header("location:index.php");
    // 將他導回index.php，這裡是一個判斷式，以阻絕非法登陸。
    exit();
    // 終止腳本執行。(不讓他往下跑的意思。)
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>後台管理中心</title>
    <?php include "./layouts/link_css.php";?>
    <link rel="stylesheet" href="./css/back.css">

</head>
<body>
    <?php
    // 上面標籤。
     include "./layouts/header.php";
    // 在這裡貼上header.php，顯示選單列表，以判斷資料夾的方式決定要顯示什麼。
    ?>
    <main class="container">
    <?php
    $do=$_GET['do']??'main';
    // 當$_GET['do']為空值時，陣列['do']=main；
    $file='./back'.$do.".php";    
    // ./back都是後台管理系統。
    if(file_exists($file)){
        // file_exists(字串)判斷檔案是否存在。如果存在。
        include $file;
    }else{
        include "./back/main.php";
    }
    ?>
    </main>
    <?php include "./layouts/scripts.php"; ?>
    <!-- 導入js和結尾 -->
</body>
</html>