<?php
    function cataloglist(){
        $sql="SELECT * FROM catalog order by id ASC";
        $kq=pdo_query($sql);
        return $kq;
    }

    function get_catalog_name($id){
        $sql="SELECT name from catalog where id=".$id;
        $kq=pdo_query_one($sql);
        return $kq;
    }

    function catalog_by_store($id=0){
        $sql="SELECT * from catalog_store where idStore=".$id;
        $kq=pdo_query($sql);
        return $kq;
    }

    function GET_catalog_one($id=0){
        $sql="SELECT * from catalog_store where idStore=".$id;
        $kq=pdo_query_one($sql);
        return $kq;
    }

    /** Model Admin Store */

    function cataloglist_by_store($idStore){
        $sql="SELECT * FROM catalog_store Where idStore= ".$idStore;
        $sql.=" order by id ASC";
        $kq=pdo_query($sql);
        return $kq;
    }


?>