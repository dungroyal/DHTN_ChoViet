<?php
require_once 'pdo.php';


/******************************************* Thêm mới ***********************************************/

/**
 * Thêm loại mới
 * @param String $ten_loai là tên loại
 * @throws PDOException lỗi thêm mới
 */

function product_insert($name,$price,$soluong,$image,$hot,$idCatalog,$idStore){
    $sql = "INSERT INTO product(name,price,soluong,image,hot,idCatalog,idStore) VALUES(?,?,?,?,?,?,?)";
    pdo_execute($sql, $name,$price,$soluong,$image,$hot,$idCatalog,$idStore);
}

function catalog_insert($name,$image){
    $sql = "INSERT INTO catalog(name,image) VALUES(?,?)";
    pdo_execute($sql, $name,$image);
}

function catalog_store_insert($name,$image,$idStore,$idCatalog){
    $sql = "INSERT INTO catalog_store(name,image,idStore,idCatalog) VALUES(?,?,?,?)";
    pdo_execute($sql, $name,$image,$idStore,$idCatalog);
}

function user_insert($name,$email,$noidung,$danhgia_bl,$idproduct){
    $sql = "INSERT INTO comment(name,email,noidung,danhgia,idProduct) VALUES(?,?,?,?,?)";
    pdo_execute($sql, $name,$email,$noidung,$danhgia_bl,$idproduct);
}

function commentlist(){
    $sql="SELECT * FROM comment order by id desc";
    $kq=pdo_query($sql);
    return $kq;
}

function commentlist_by_id($idProduct,$page){
    global $soluong_comment;
    $page=$page-1;
    $from=$page*$soluong_comment;
    $to=$soluong_comment;
    $sql="SELECT * FROM comment where idProduct=".$idProduct;
    $sql.= " ORDER BY id DESC ";
    $sql.=" limit ".$from.",".$to;
    $kq=pdo_query($sql);
    return $kq;
}

function TBdanhgia($idProduct){
    $sql="SELECT ROUND((AVG(danhgia)),1) FROM comment WHERE idProduct=".$idProduct;
    $kq=pdo_query_value($sql);
    return $kq;
}

function count_danhgia($idProduct){
    $sql="SELECT COUNT(id) FROM comment WHERE idProduct=".$idProduct;
    $kq=pdo_query_value($sql);
    return $kq;
}

function count_1_sao($sosao,$idProduct){
    $sql="SELECT * FROM comment WHERE danhgia=".$sosao." AND idProduct=".$idProduct;
    $kq=pdo_query($sql);
    return $kq;
}

function sosao($SoSao){
    $kq='';
    for ($i=0; $i < $SoSao; $i++) {        
        $kq.=' <i class="fa fa-star"></i>';            
    }
    return $kq;
}



/******************************************* Cập nhật ***********************************************/



/**
 * Cập nhật tên loại
 * @param int $ma_loai là mã loại cần cập nhật
 * @param String $ten_loai là tên loại mới
 * @throws PDOException lỗi cập nhật
 */
function product_one($id){
    $sql = "SELECT * FROM product WHERE id=".$id;
    $kq=pdo_query_one($sql);
    return $kq;
}
function catalog_one($id){
    $sql = "SELECT * FROM catalog WHERE id=".$id;
    $kq=pdo_query_one($sql);
    return $kq;
}

function product_update($name,$price,$soluong,$image,$hot,$idCatalog,$id){
    $sql = "UPDATE product SET name=?, price=?, soluong=?, image=?, hot=?, idCatalog=? WHERE id=?";
    pdo_execute($sql, $name,$price,$soluong,$image,$hot,$idCatalog,$id);
}

function catalog_update($name,$image,$id){
    $sql = "UPDATE catalog SET name=?,image=? WHERE id=?";
    pdo_execute($sql, $name,$image,$id);
}




/*********************************************** Xóa *******************************************/


/**
 * Xóa một hoặc nhiều loại
 * @param mix $ma_loai là mã loại hoặc mảng mã loại
 * @throws PDOException lỗi xóa
 */
function product_delete($id){
    $sql = "DELETE FROM product WHERE id=?";
    if(is_array($id)){
        foreach ($id as $ma) {
            pdo_execute($sql, $ma);
        }
    }
    else{
        pdo_execute($sql, $id);
    }
}

function catalog_delete($id){
    $sql = "DELETE FROM catalog WHERE id=?";
    if(is_array($id)){
        foreach ($id as $ma) {
            pdo_execute($sql, $ma);
        }
    }
    else{
        pdo_execute($sql, $id);
    }
}

function info_user($iduser){
    $sql="SELECT * from users WHERE id=".$iduser;
    $kq=pdo_query_one($sql);
    return $kq;
}

/************************************************* Truy vấn *****************************************/



/**
 * Truy vấn tất cả các loại
 * @return array mảng loại truy vấn được
 * @throws PDOException lỗi truy vấn
 */
function loai_select_all(){
    $sql = "SELECT * FROM loai ORDER BY ma_loai DESC";
    return pdo_query($sql);
}


/******************************************************************************************/


/**
 * Truy vấn một loại theo mã
 * @param int $ma_loai là mã loại cần truy vấn
 * @return array mảng chứa thông tin của một loại
 * @throws PDOException lỗi truy vấn
 */
function loai_select_by_id($ma_loai){
    $sql = "SELECT * FROM loai WHERE ma_loai=?";
    return pdo_query_one($sql, $ma_loai);
}




/******************************************************************************************/



/**
 * Kiểm tra sự tồn tại của một loại
 * @param int $ma_loai là mã loại cần kiểm tra
 * @return boolean có tồn tại hay không
 * @throws PDOException lỗi truy vấn
 */
function loai_exist($ma_loai){
    $sql = "SELECT count(*) FROM loai WHERE ma_loai=?";
    return pdo_query_value($sql, $ma_loai) > 0;
}
//menu đa cấp
//function Menu($parent = 0,$space = '---', $trees = NULL){ 
//        if(!$trees){ $trees = array(); }
//	$sql = mysql_query("SELECT * FROM loai WHERE parent = ".intval($parent)." ORDER BY tenloai"); 
//	while($rs = mysql_fetch_assoc($sql)){ 
//		$trees[] = array('ma_loai'=>$rs['ma_loai'],'tenloai'=>$space.$rs['tenloai']); 
//		$trees = Menu($rs['ma_loai'],$space.'---',$trees); 
//	} 
//	return $trees; 
//} 