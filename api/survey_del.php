<?php
include_once "../db/base.php";

$id=$_GET['id'];
$option=all("survey_options",['subject_id'=>$id]);

del("survey_subject",$id);
// 當suject_id為多少全刪。
del("survey_options",['suject_id'=>$id]);

foreach($options as $opt){
    del("survey_options",$opt['id']);
}
?>