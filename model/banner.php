<?php
require_once 'pdo.php';

    function banner_insert($title,$url,$image,$location,$status){
        $sql = "INSERT INTO banner(title,url,image,location,status) VALUES(?,?,?,?,?)";
        pdo_execute($sql, $title,$url,$image,$location,$status);
    }

    function banner_by_loca($loca){
            $sql="SELECT * from banner WHERE location=".$loca;
            $kq=pdo_query($sql);
            return $kq;
        }

    function show_banner_one($loca){
            $sql="SELECT * from banner WHERE location=".$loca;
            $sql.=" AND status=1 ";
            $sql.=" ORDER BY id DESC";
            $kq=pdo_query_one($sql);
            return $kq;
        }

    function banner_one($id){
            $sql = "SELECT * FROM banner WHERE id=".$id;
            $kq=pdo_query_one($sql);
            return $kq;
        }

    function banner_delete($id){
    $sql = "DELETE FROM banner WHERE id=?";
    if(is_array($id)){
        foreach ($id as $ma) {
            pdo_execute($sql, $ma);
        }
    }
    else{
        pdo_execute($sql, $id);
    }
}



function update_banner($title,$url,$image,$location,$status,$id){
    $sql = "UPDATE banner SET title=?,url=?,image=?,location=?,status=? WHERE id=?";
    pdo_execute($sql, $title,$url,$image,$location,$status,$id);
}


?>