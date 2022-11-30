<div class='col-md-6 mx-auto my-3 px-5 py-3 border shadow-sm'>
    <h3 class="text-center">新增學生</h3>

    <form action="api/add_student.php" method="post">
        <div class="form-group row">
            <label class="col-form-label col-md-4" style="text-align-last:justify">學號</label>
            <?php
            $sql = "SELECT max(`school_num`) FROM `students`";
            // 宣告要輸入的指令，並且儲存成sql。
            $max = $pdo->query($sql)->fetchColumn();
            // 返回最大值。->fetchColumn()取一個欄位。
            ?>
            <input class="form-control col-md-8" type="text" name="school_num" value="<?= $max + 1; ?>">
            <!-- 最大值+1，獲得新學號。 -->
        </div>
        <div class="form-group row">
            <label class="col-form-label col-md-4" style="text-align-last:justify">姓名</label>
            <input class="form-control col-md-8" type="text" name="name">
        </div>
        <div class="form-group row">
            <label class="col-form-label col-md-4" style="text-align-last:justify">生日</label>
            <input class="form-control col-md-8" type="date" name="birthday">
        </div>
        <div class="form-group row">
            <label class="col-form-label col-md-4" style="text-align-last:justify">身份證字號</label>
            <input class="form-control col-md-8" type="text" name="uni_id">
        </div>
        <div class="form-group row">
            <label class="col-form-label col-md-4" style="text-align-last:justify">地址</label>
            <input class="form-control col-md-8" type="text" name="addr">
        </div>
        <div class="form-group row">
            <label class="col-form-label col-md-4" style="text-align-last:justify">家長</label>
            <input class="form-control col-md-8" type="text" name="parents">
        </div>
        <div class="form-group row">
            <label class="col-form-label col-md-4" style="text-align-last:justify">聯絡電話</label>
            <input class="form-control col-md-8" type="text" name="tel">
        </div>
        <div class="form-group row">
            <label class="col-form-label col-md-4" style="text-align-last:justify">科系</label>
            <select class="form-control col-md-8" name="dept">
                <?php
                    // 從`dept`
                
                
                
                
                ?>