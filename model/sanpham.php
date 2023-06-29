<?php
function loadall_sanpham(){
    $sql = 'SELECT * FROM `san_pham` order by `ma_sp` desc';
    $list_sp = pdo_query($sql);
    return $list_sp;
}

function loadone_sanpham($id){
    $sql = "SELECT * FROM `hang_hoa` where `ma_hh`='$id'";
    $sanpham = pdo_query_one($sql);
    return $sanpham;
}
function search_sanpham($keyword){
    $sql = "select * from `hang_hoa` where 1";
    if ($keyword != "") {
        $sql .= " and `ten_hh` like '%$keyword%'";
    }
    $sql .= " order by `ma_hh` desc";
    $list_sanpham = pdo_query($sql);
    return $list_sanpham;
}

function loadall_sanpham_home($index,$max){
    $sql = "SELECT * FROM `san_pham` order by `ma_hh` desc limit $index,$max";
    $list_sanpham = pdo_query($sql);
    return $list_sanpham;
}

function loadall_sanpham_cungloai($ma_dm){
    $sql = "SELECT * FROM `san_pham` where `ma_dm`='$ma_dm'";
    $list_sanpham = pdo_query($sql);
    return $list_sanpham;
}




?>