<?php 
function add_cart($idpro,$soluong,$idus,$idorder){
    $sql ="INSERT INTO `cart`(`idProduct`,`soluong`,`idUsers`,`idOrder`) VALUES(?,?,?,?)";
    pdo_execute($sql,$idpro,$soluong,$idus,$idorder);
}
?>