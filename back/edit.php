<!-- 編輯學生資料。 -->
<div class='col-md-6 mx-auto my-3 px-5 py-3 border shadow-sm'>
<h3 class="text-center">編輯學生資料</h3>
<?php
if(isset($_GET['id'])){
    $sql="SELECT * FROM `students` WHERE `id`='{$_GET['id']}'";
    // 先宣告指令，從students裡的$_GET['ID']，輸出
    $student=$pdo->query($sql)->fetch(PDO::FETCH_ASSOC);
}else
{
    header("location:index.php?status=edit_error");
    // 要是ID內沒有值，就回傳edit_error。
}
?>
<form action="api/edit_student.php" method="post">
    <div class="form-group row">
        <label class="col-form-label col-md-4" style="text-align-last:justify">學號</label>
        <div class="form-control col-md-8 border-0"><?=$student['school_num'];?></div>
        <!-- 顯示student['key->school_num內的資料。'] -->
    </div>
    <div class="form-group row">
        <label class="col-form-label col-md-4" style="text-align-last:justify">姓名</label>
        <input class="form-control col-md-8" type="text" name="name" value="<?=$student['name'];?>">
         <!-- 顯示student['key->name內的資料。'] -->
    </div>
    <div class="form-group row">
        <label class="col-form-label col-md-4" style="text-align-last:justify">生日</label>
        <input class="form-control col-md-8" type="date" name="birthday" value="<?=$student['birthday'];?>">
        <!--  -->
    </div>
    <div class="form-group row">
        <label class="col-form-label col-md-4" style="text-align-last:justify">身份證字號</label>
        <input class="form-control col-md-8" type="text" name="uni_id" value="<?=$student['uni_id'];?>">
    </div>
    <div class="form-group row">
        <label class="col-form-label col-md-4" style="text-align-last:justify">地址</label>
        <input class="form-control col-md-8" type="text" name="addr" value="<?=$student['addr'];?>">
    </div>
    <div class="form-group row">
        <label class="col-form-label col-md-4" style="text-align-last:justify">家長</label>
        <input class="form-control col-md-8" type="text" name="parents" value="<?=$student['parents'];?>">
    </div>
    <div class="form-group row">
        <label class="col-form-label col-md-4" style="text-align-last:justify">電話</label>
        <input class="form-control col-md-8" type="text" name="tel" value="<?=$student['tel'];?>">
    </div>
    <div class="form-group row">
        <label class="col-form-label col-md-4" style="text-align-last:justify">科系</label>
            <select class="form-control col-md-8" name="dept">
    </div>
    <div>
        <label class="col-form-lebel col-md-4" style="text-align-last:justify">科系</label>
        <select name="form-control col-md-8" name="dept">
            <?php
            $sql="SELECT * FROM `dept`";
            // 宣告一個SQL取出dept資料語法。
            $depts=$pdo->query($sql)->fetchALL(PDO::FETCH_ASSOC);
            // query($sql)取出，所有結果fetchALL
            foreach($depts as $dept){
                
                $selected=($dept['id']==$student['dept'])?'selected':'';
                // 要是id==dept，輸出selected要是為否輸出空值。
                echo "<option value='{$dept['id']}' $selected>{$dept['name']}</option>";
                // 輸出，value的id，並且要是預設輸出為一樣的值，時設為預設選項。
            }
            ?>
        </select>
        <div class="form-group row">
        <label class="col-form-label col-md-4" style="text-align-last:justify">班級</label>
        <select class="form-control col-md-8" name="class_code">
            <?php
            $stu_class=$pdo->query()
            
            ?>
    </div>