<?php
    function check_user($user,$pass){
        $sql="SELECT * FROM users WHERE name=? AND pass=?";
        return pdo_query_one($sql, $user,$pass);
    }
    

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
        $sql="SELECT * from catalog WHERE id=".$idCatalog;
        $kq=pdo_query_one($sql);
        return $kq;
    }

    
?>