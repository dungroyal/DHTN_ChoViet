<?php
    function check_user($user,$pass){
        $sql="SELECT * FROM users WHERE name=? AND pass=?";
        return pdo_query_one($sql, $user,$pass);
    }

    function userlist(){
        $sql="SELECT * from users";
        $kq=pdo_query($sql);
        return $kq;
    }

    function user_by_id($id){
        $sql="SELECT * from users WHERE id=".$id;
        $kq=pdo_query_one($sql);
        return $kq;
    }
?>