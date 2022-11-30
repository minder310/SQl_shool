<!-- 刪除資料庫資料用軟體。 -->
<?php
$student = $pdo->query("SELECT * FROM `students` WHERE `id`='{$_GET['id']}'")
// 從students取出資料，where取出$_GET帶值的ID所有資料。
// query是取出資料庫的語法，後面可以接續資料庫的語法進行取用。
->fetch(PDO::FETCH_ASSOC)
// 返回陣列，用用資料庫的索引值當陣列。
?>
<div class="col-md-4 p-4 mx-auto my-5 border rounded shadow">
    <div >
        <h3 class="text-center my-2 text-danger">刪除確認</h3>
        <div class="text-danger my-5 text-center" style="font-size:2rem">
            你確定要刪除<br>
            <span class="font-weight-bolder"><?= $student['name']; ?></span>嗎?
            <!-- 顯示藥刪除的名子，因為取出個別的STUDENTS後取陣列內的NAME(KRY值)，顯示名子。 -->
        </div>
        <div class="text-center">
            <button class="btn btn-lg mx-2 btn-danger" onclick="location.href='./api/del_student.php?id=<?= $_GET['id']; ?>'">確定刪除</button>
            <!-- 用網頁帶值的方式，將數值回傳至DEL_STUDENT.PHP讓他進行刪除。 -->
            <button class="btn btn-lg mx-2 btn-warning" onclick="location.href='index.php'">取消</button>
        </div>
    </div>
</div>