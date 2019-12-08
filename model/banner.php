<?php
    function banner_by_loca($loca){
            $sql="SELECT * from banner WHERE location=".$loca;
            $kq=pdo_query($sql);
            return $kq;
        }

    function show_banner_one($loca){
            $sql="SELECT * from banner WHERE location=".$loca;
            $sql.=" AND active=1 ";
            $sql.=" ORDER BY id DESC";
            $kq=pdo_query_one($sql);
            return $kq;
        }

    function banner_one($id){
            $sql = "SELECT * FROM banner WHERE id=".$id;
            $kq=pdo_query_one($sql);
            return $kq;
        }

?>