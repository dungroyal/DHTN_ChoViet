<?php 
function add_cart($proname,$img,$coin,$info,$color,$so_luong,$iduser,$idcata,$idpro,$idcustom){
    $sql ="INSERT INTO `cart`(`pro_name`,`img`,`coin`,`info`,`color`,`so_luong`,`id_user`,`id_cata`,`id_pro`,`id_custom`) VALUES(?,?,?,?,?,?,?,?,?,?)";
    pdo_execute($sql,$proname,$img,$coin,$info,$color,$so_luong,$iduser,$idcata,$idpro,$idcustom);
}
function show_cart($idcustom){
    return pdo_query("SELECT * FROM `cart` where id_custom = '$idcustom' ");
}
?>