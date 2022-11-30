<!-- 因為是多網址共用，頁籤，所以會用判斷檔案的方式，去判斷要顯示什麼。 -->

<header class="shadow mb-5">
    <nav class="container d-flex justify-content-between py-3">
    <?php
        /**
         * 使用$_SERVER['PHP_SELF]來取得網址請求的檔案時，
         * 如果檔案不是在網站的根目錄下，可能會拿到一串完成的路徑字串，如：
         * '/classroom/1112/1112-PHP-MYSQL/index.php'
         * 因為我們只需要最後面的index字串做為判斷的依據，
         * 所以要先把$_SERVER['PHP_SELF']字串做處理來因應更多不確定的路徑狀況
         * 原則就是我們只取$_SERVER['PHP_SELF']的最後一個字串，並去掉副檔名
         * 
         * 因為路徑的字串型式都是以"/"做區隔，所以可以使用explode這個函式來把字串拆成陣列
         * 而要取出陣列的最後一個值，則可以使用count()-1的方式(陣列個數-1就是陣列的最後一個元素的索引值)
         * 也可以使用函式array_pop()來取得最後一個值(array_pop()的作用為回傳陣列的最後一個值)
         * 要注意的是array_pop()會使原陣列中的最後一個值從陣列中被刪除，所以要先設一個變數來代表陣列
         */
        $file_str=explode("/",$_SERVER['PHP_SELF']);
        // $_SERVER['PHP_SELF']是專有使用，用來取用資料夾內的路徑檔。並經過explode爆炸成，陣列字串。
        $local=str_replace('.php','',array_pop($file_str));
        // str_replace('要查找得值','替換的文字','搜索的陣列','進行替換的次數計數')
        // array_pop(陣列名稱)就可以取出陣列最後一個元素。
            switch($local){
                case "index":
                    // 判別要是是首頁。
                    echo "<div>";
                    echo "<a class='mx-2' href='index.php'>回首頁</a>";
                    echo "</div>";
                    echo "<div>";
                    echo "<!------新增功能預定----->";
                    echo "<a class='mx-2' href='index.php?do=main'>最新消息</a>";
                    // 用網址回傳值回讓網頁改變。?do=main為網頁回傳值，顯示最新消息。
                    echo "<a class='mx-2' href='index.php?do=students_list'>學生列表</a>";
                    // 用網址回傳值回讓網頁改變。?do=student_list為回傳值，讓後端php可以判斷輸出，學生列表。
                    echo "</div>";
                    echo "<div>";
                    if(isset($_SESSION['login'])){
                        // $_SESSION是互相傳值，要是裡面有值就出現，回管理系統。跟教師登出。
                        echo "<a class='mx-2' href='admin_center.php'>回管理中心</a>";
                        echo "<a class='mx-2' href='logout.php'>教師登出</a>";
                    }else{
                        // 如果沒有就就顯示教師登陸，跟教師註冊。
                        echo "<a class='mx-2' href='index.php?do=reg'>教師註冊</a>";
                        echo "<a class='mx-2' href='index.php?do=login'>教師登入</a>";
                    }
                    echo "</div>";
                break;
                case "admin_center":
                    // 判別要是管理者登入
                    echo "<div>";
                    echo "<a class='mx-2' href='admin_center.php'>回管理首頁</a>";
                    // 連結到admin_center.php網頁，連線到管理者網頁。
                    echo "<a class='mx-2' href='index.php'>回網站首頁</a>";
                    // 回到首頁，index.php跳出管理者首頁。
                    echo "</div>";
                    echo "<div>";
                    echo "<a class='mx-2' href='admin_center.php?do=students_list'>學生管理</a>";
                    // 用網頁回傳值，?do=students_list回傳值至管理系統。讓它顯示學生管理葉面。
                    echo "<a class='mx-2' href='admin_center.php?do=news'>新聞管理</a>";
                    // 用網頁回傳值，?do=news，讓他可以管理
                    echo "</div>";
                    echo "<div>";
                    //<!-- <a href="?do=add">新增學生</a> -->
                    echo "<a class='mx-2' href='logout.php'>教師登出</a>";
                    echo "</div>";
                break;
            }
    ?>
    </nav>

</header>