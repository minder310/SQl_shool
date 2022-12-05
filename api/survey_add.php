<?php
include_once "../db/base.php";


$subject=[
    'subject'=>$_POST['subject'],
    'type'=>1,
    'vote'=>0,
    'active'=>0
];
// dd($_POST['subject']);
// dd($_POST['opt']);
// $subject=$_POST['subject'];
// $type=1;
// $vote=0;    //有沒有人投票。
// $active=0;  //有沒有啟動投票。
insert('surver_subject',$subject);
// 這邊是呼叫函數，並使用。
$subject_id=find('survey_subject',['subject'=>$_POST['subject']]);

if(isset($_POST['opt'])){
    foreach($_POST['opt'] as $option) {
        if($option!=''){
        $tmp=['option'=>$option,
            'subject_id'=>$subject_id,
            'vote'=>0];
        dd($tmp);
        insert('survey_options',$tmp);
        }
    }
}

header("location:../admin_center.php?do=surver");
// insert('survey_options')
?>