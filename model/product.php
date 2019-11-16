<?php
    function productlist(){
        $sql="SELECT * from product order by id DESC";
        $kq=pdo_query($sql);
        return $kq;
    }

    function showproduct($type,$gioihan){
        $sql = "SELECT * FROM product WHERE 1";
        //Type =1 là sản phẩm ""HOT""
        if($type==1){
            $sql.=" AND hot=1";
        }
        //Type =2 là sản phẩm xem nhiều
        if($type==2){
            $sql.=" ORDER BY view DESC LIMIT ".$gioihan;
        }else {
          $sql.=" ORDER BY id DESC LIMIT ".$gioihan;
        }
        $kq=pdo_query($sql);
        return $kq;
    }


    function productlist_by_id($idcat=0,$keyword,$page){
        global $soluong;

        $page=$page-1;
        $from=$page*$soluong;
        $to=$soluong;
            

        $sql="SELECT * FROM product WHERE 1";
        if ($idcat>0) {
            $sql.=" AND idCatalog=".$idcat;
        }
        if ($keyword!=""){ 
            $sql.=" AND LCASE(name) LIKE '%".strtolower($keyword)."%'";
        }
        $sql.=" ORDER BY id DESC";
        $sql.=" limit ".$from.",".$to;

        $kq=pdo_query($sql);
        return $kq;
    }

    function product_detail_by_id($id){
        $sql="SELECT * from product where id=".$id;
        $kq=pdo_query_one($sql);
        return $kq;
    }

    function tongsl($idcat){
        $sql="SELECT * FROM product Where 1";
        if ($idcat>0) {
            $sql.=" AND idCatalog=".$idcat;
        }
        $kq=pdo_query($sql);
        return $kq;
    }

    function phantrang($idcat,$page,$tongso){
        global $soluong;
        $sotrang=ceil($tongso/$soluong);
        $phantrang='';
        for ($i=0; $i < $sotrang; $i++) { 

            if ($page==($i+1)) {
                $cls='active-pagination1';
            }else{
                $cls='';
            }

            $link='?act=product&idcat='.$idcat.'&page='.($i+1);
            $phantrang.='<a href="'.$link.'" class="flex-c-m how-pagination1 trans-04 m-all-7 '.$cls.'">'.($i+1).'</a>';            
        }
        return $phantrang;
    }


    function phan_comment($idProduct,$page_comment,$tongso_comment){
        global $soluong_comment;
        $sotrang=ceil($tongso_comment/$soluong_comment);
        $phantrang_comment='';
        for ($i=0; $i < $sotrang; $i++) { 

            if ($page_comment==($i+1)) {
                $cls='active-pagination1';
            }else{
                $cls='';
            }

            $link='comment.php?idProduct='.$idProduct.'&page='.($i+1);
            $phantrang_comment.='<a href="'.$link.'" class="flex-c-m how-pagination1 trans-04 m-all-7 '.$cls.'" style="padding: 5px 0 0 14px;">'.($i+1).'</a>';   
            
        }
        return $phantrang_comment;
    }
?>