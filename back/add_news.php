<!-- 新增最新新聞。 -->
<h1 class="text-center">新增消息</h1>
<form action="../api/add_news.php" method="POST">
    <div class="form-group row">
        <label class="col-form-label col-md-2 text-right">主題</label>
        <input type="text" class="form-control col-md-10" name="subject">
    </div>
    <div class="form-group row">
        <label class="col-form-label col-md-2 text-right">內容</label>
        <textarea class="form-control col-md-10" nam="content" style="height:200px"></textarea>
        <!-- 輸入文字用的格子 -->
    </div>
    <div class="form-group row">
        <label class="col-form-label col-md-2 text-right">類別</label>
        <input type="text" class="form-control col-md-10" name="type" >
   </div>
   <div class="text-right text-secondary">現在時間:<?=date("Y-m-d H:i:s");?></div>
   <!-- 顯示現在時間。 -->
   <div class="text-center">
        <input class="btn btn-primary mx-2" type="submit" value="確定新增">
        <!-- 新增確定按鈕。 -->
        <input class="btn btn-warning mx-2" type="reset" value="清空">
        <!-- 清空所有輸入表格。 -->
   </div> 
</form>