<?php
function loadall_taikhoan()
{
    $sql = "SELECT * FROM `khach_hang` order by `ma_kh` ";
    $khachhang = pdo_query($sql);
    return $khachhang;
}
function load_taikhoan_vaitro()
{
    $sql = "SELECT `vai_tro` FROM `khach_hang`";
    $vaitro = pdo_query($sql);
    return $vaitro;
}
function loadone_taikhoan($email, $password)
{
    $sql = "SELECT * FROM `khach_hang`where `email`='$email'";
    if ($password != "") {
        $sql .= "and `mat_khau`='$password'";
    }
    $kh = pdo_query_one($sql);
    return $kh;
}
function loadone_taikhoan_byID($id)
{
    $sql = "SELECT * FROM `khach_hang`where `ma_kh`='$id'";
    $kh = pdo_query_one($sql);
    return $kh;
}

function filter_taikhoan($vaitro, $keyword)
{
    $sql = "select * from `khach_hang` where 1";
    if ($keyword != "") {
        $sql .= " and `email` like '%$keyword%'";
    }
    if ($vaitro != "") {
        $sql .= " and `vai_tro` = $vaitro";
    }
    $sql .= " order by `ma_kh` desc";
    $kh = pdo_query($sql);
    return $kh;
}

?>