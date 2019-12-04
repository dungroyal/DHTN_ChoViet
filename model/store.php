<?php

    function storelist(){
        $sql="SELECT * from store";
        $kq=pdo_query($sql);
        return $kq;
    }

    function store_by_id($id){
        $sql="SELECT * from store WHERE id=".$id;
        $kq=pdo_query($sql);
        return $kq;
    }

    function GET_idStore($idCatalog){
        $sql="SELECT * from catalog_store WHERE idCatalog=".$idCatalog;
        $kq=pdo_query_one($sql);
        return $kq;
    }

    function store_one($id){
        $sql = "SELECT * FROM store WHERE id=".$id;
        $kq=pdo_query_one($sql);
        return $kq;
    }
    
    function admin_update_store($trangthai,$id){
    $sql = "UPDATE store SET trangthai=? WHERE id=?";
    pdo_execute($sql, $trangthai,$id);
}
        
?>