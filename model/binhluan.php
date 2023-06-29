<?php
function loadall_binhluan($idsp)
{
    $sql = "SELECT * FROM `binh_luan`";
    if($idsp!=0){
        $sql .= " where `ma_hh`='$idsp' order by `ma_bl` ";
    }
    $binhluan = pdo_query($sql);
    return $binhluan;
}

function filter_binhluan($keyword,$date)
{
    $sql = "select * from `binh_luan` where 1";
    if ($keyword != "") {
        $sql .= " and `noi_dung` like '%$keyword%'";
    }
    if($date){
        $sql.=" and `ngay_bl`='$date'";
    }
    $sql .= " order by `ma_bl` desc";
    $binhluan = pdo_query($sql);
    return $binhluan;
}
?>