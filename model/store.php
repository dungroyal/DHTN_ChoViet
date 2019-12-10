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

    function store_insert($name,$username,$password,$phonenumber,$email,$idUser){
        $sql = "INSERT INTO store(name,username,password,phonenumber,email,idUser) VALUES(?,?,?,?,?,?)";
        pdo_execute($sql, $name,$username,$password,$phonenumber,$email,$idUser);
    }

    function enable_store($id){
        $sql = "UPDATE product SET status=1 WHERE idStore=?";
        pdo_execute($sql, $id);
    }

    function disabled_store($id){
        $sql = "UPDATE product SET status=0 WHERE idStore=?";
        pdo_execute($sql, $id);
    }

        
?>