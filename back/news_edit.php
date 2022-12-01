<!-- 編輯新聞消息。 -->
<?php

$news = $pdo->quer("SELECT * FROM `news` WHERE `id`='{$_GET['id']}'")->fetch();

?>

<h2 class="text-cwnter">編輯消息</h2>
<form action="./api/news_edit.php" method="POST">
    <!-- 這邊要連結api功能。(還沒寫)，這個是用來輸入 -->
    <div class="form-group row">
        <label class="col-form-label col-md-2 text-right">主題</label>
        <input type="text" class="form-control col-md-10" name="subject" value='<?= $news['subject']; ?>'>
    </div>
    <div class="d-flex">

        <div class="col-md-6 row">
            <span class="col-md-4 text-righ mr-2">置頂</span>
            <!-- span是個容器，裡面可以放class拿來放東西。 -->
            <div class="form-check mx-2 d-flex align-items-center">
                <input class="form-check-input" type="radio" name="top" value='1' <?= ($news['top'] == 1) ? 'checked' : ''; ?>>
                <!-- checked，為預設選項。 -->
                <label class="col-form-label">Yes</label>
            </div>
            <div class="form-check mx-2 d-flex align-items-center">
                <input class="form-check-input" type="radio" name="top" value='0' <?= ($news['top'] == 0) ? 'checked' : ''; ?>>
                <label class="col-form-label">No</label>
            </div>
        </div>
        <!-- 這是設定觀看數。 -->
        <div class="col-md-6 form-group row">
            <label class="col-form-label col-md-4 text-right">觀看數</label>
            <input class="form-control col-md-8" type="number" name="readed" value="<?= $news['readed']; ?>">
        </div>
    </div>
    <!-- 設定內容 -->
    <div class="form-group row">
        <label class="col-form-label col-md-2 text-right">內容</label>
        <textarea class="form-control col-md-10" name="content" style="height:200px"><?= $news['content']; ?>></textarea>
        <!-- 設定新聞，內容。 -->
    </div>
    <!-- 類別 -->
    <div class="form-group row">
        <label class="col-form-label col-md-2 text-right">類別</label>
        <input type="text" class="form-control col-md-10" name="type" value="<?= $news['type']; ?>">
    </div>
    <!-- 現在時間 -->
    <div class="text-right text-secondary">現在時間:<?= date("Y-m-d H:i:s"); ?></div>
    <div class="text-center">
        <input type="hidden" name="id" value="<?= $news['id']; ?>">
        <!--  -->
        <input class="btn btn-primary mx-2" type="submit" value="確定修改">
        <input class="btn btn-warning mx-2" type="reset" value="重置">
    </div>
</form>