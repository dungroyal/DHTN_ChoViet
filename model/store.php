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

    function store_by_id(){
        $sql="SELECT * from store WHERE id=1";
        $kq=pdo_query_one($sql);
        return $kq;
    }
?>