<?php
$wxid = !empty($_GET['wxid']) ? $_GET['wxid'] : '';
if(strlen($wxid) == 28){
    $wxch_ecs = $ecs -> table('users');
    $w_res = $db -> getOne("SELECT `user_name` FROM  " . $wxch_ecs . " WHERE `wxid` = '$wxid'");
    if(!empty($w_res)){
        $user -> set_session($w_res);
        $user -> set_cookie($w_res);
        update_user_info();
    }
}
?>