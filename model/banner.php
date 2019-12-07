<?php
    function banner_by_loca($loca){
            $sql="SELECT * from banner WHERE location=".$loca;
            $kq=pdo_query($sql);
            return $kq;
        }
?>