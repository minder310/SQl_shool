<?php
include "./db/base.php";
// session_start()取用資料庫寫法皆寫在include中(include等同複製貼上，將每個程式碼分開。)
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>學生管理系統</title>
    <?php include "./layouts/link_css.php";?>
    <!-- 導入bts資料也是用include資料導入，複製貼上(純粹增加印象。) -->
    <link rel="stylesheet" href="./css/style.css">
    <!-- 這一段是導入css -->
</head>
<body>
    <?php
        include "./layouts/header.php";
        // header是選單區，應應登入狀況進行改變，因為會變化，所以做了一個功能讓他可以應應。
        // 教師登陸狀態，判別與顯示不同上選單。
    ?>
    <main class='container'>
        <!-- 宣告bootstrap的排版系統讓他可以依照bts進行排版。 -->
        <?php
        $do=$_GET['do']??'main';
        // 三元運算式當$_get沒有資料時，輸入main(isset用法。)
        // 相當於
            /*if(isset($_GET['do'])){
                $do=$_GET['do'];
            }else{
                $do='main';
            }*/



        $file="./front/".$do."php";
        // 宣告$file=資料夾位置，並且在內帶上變數，讓資料夾可以依照，$do的位子進行改變。
        if(file_exists($file))//file_exisit為檢測檔案夾內是否有這個檔案，如果為是。
        {
            include $file;
            // 如果為是，即輸入，所在位置檔案。
        }else{
            include "./front/main.php";
            // 如果沒有即傳送至預設網頁。
        }
        ?>
        </main>
        <?php include "./layouts/scripts.php"; ?>
        <!-- 宣告導入js檔案。 -->
    </main>
</body>
</html>