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

    function catalog_by_id($id){
        $sql="SELECT * from catalog where idCatalog=".$id;
        $kq=pdo_query($sql);
        return $kq;
    }
?>