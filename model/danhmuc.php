<?php
function loadall_danhmuc(){
    $sql = "SELECT * FROM `danh_muc` order by `ma_dm` ";
    $list_danhmuc = pdo_query($sql);
    return $list_danhmuc;
}

function loadone_danhmuc($id){
    $sql = "SELECT * FROM `danh_muc` where `ma_dm`='$id'";
    $danh_muc = pdo_query_one($sql);
    return $danh_muc;
}

?>