<?php
    ob_start();
    session_start();
    include "model/pdo.php";
    include "model/tool.php";
    include "model/catalog.php";
    include "model/product.php";
    include "model/user.php";
    include "model/store.php";
    $cataloglist=cataloglist();
	$producttlist=productlist();
	$storelist=storelist();

    if (!isset($_SESSION['iduseradmin'])) {
        header('location:admin/login.php');
	}
	
    include"admin/header.php";
  if (isset($_GET['act'])) {
      $act=$_GET['act'];
      switch ($act) {
		case 'QL_Catalog':
			if (isset($_POST['add_catalog']) && $_POST['add_catalog']) {
				$name=$_POST['name'];

				if ($_FILES['image']['name']!="") {         
					$image2= basename($_FILES['image']['name']);
					$target_file ="uploads/". $image2;
					move_uploaded_file($_FILES['image']['tmp_name'], $target_file);}

				catalog_insert($name,$image2);
				header('location: admin.php?act=QL_Catalog'); 
			}
			
            if (isset($_POST['update_catalog']) && $_POST['update_catalog']) {
				$id1=$_POST['id'];
				$name2=$_POST['name'];

				if ($_FILES['image']['name']!="") {                            
					$image2= basename($_FILES['image']['name']);
					$target_file ="uploads/". $image2;
					move_uploaded_file($_FILES['image']['tmp_name'], $target_file);}

				catalog_update($name2,$image2,$id1);
				header('location: admin.php?act=QL_Catalog');
			}

			if (isset($_GET['del']) && ($_GET['del']==1) ) {
                $id=$_GET['id'];
                catalog_delete($id);
                header('location: admin.php?act=QL_Catalog');
            }
            include "admin/QL_Catalog.php";
			break;		

        case 'QL_Product':
           /*** if (isset($_POST['add_product']) && $_POST['add_product']) {
				$name=$_POST['name'];
				$price=$_POST['price'];
				$soluong=$_POST['soluong'];
				$hot=$_POST['hot'];
				$idcatalog=$_POST['idcatalog'];
				if ($_FILES['image']['name']!="") {                            
					$image1= basename($_FILES['image']['name']);
					$target_file ="uploads/". $image1;
					move_uploaded_file($_FILES['image']['tmp_name'], $target_file);}
				product_insert($name,$price,$soluong,$image1,$hot,$idcatalog);
				header('location: admin.php?act=QL_Product'); 
				}
			 	
            if (isset($_POST['update_product']) && $_POST['update_product']) {
				$id1=$_POST['id'];
				$name1=$_POST['name'];
				$price1=$_POST['price'];
				$soluong1=$_POST['soluong'];
				$hot1=$_POST['hot'];
				$idcatalog1=$_POST['idcatalog'];
				if ($_FILES['image']['name']!="") {                            
				$image1= basename($_FILES['image']['name']);
				$target_file ="uploads/". $image1;
				move_uploaded_file($_FILES['image']['tmp_name'], $target_file);
			}
				product_update($name1,$price1,$soluong1,$image1,$hot1,$idcatalog1,$id1);
				header('location: admin.php?act=QL_Product');
			}
			
            if (isset($_GET['del']) && ($_GET['del']==1) ) {
                $id=$_GET['id'];
                product_delete($id);
                header('location: admin.php?act=QL_Product');
            }*/
				include "admin/QL_Product.php";
				break;
			
		case 'QL_User':		
				$userlist=userlist();
				include "admin/QL_User.php";
				break;

		case 'QL_Store':
            if (isset($_POST['capnhanstore']) && $_POST['capnhanstore']) {
				$id=$_POST['id'];
				$trangthai=$_POST['trangthai'];

				echo $trangthai;

				//admin_update_store($trangthai,$id);
				//header('location: index.php');
				}				
				$userlist=userlist();
				include "admin/QL_Store.php";
				break;

		case 'QL_Comment':		
				$list_comment=commentlist();
				include "admin/QL_Comment.php";
				break;

		case 'QL_Cart':
				include "admin/QL_Cart.php";
				break;

		case 'logout_admin':
				unset($_SESSION['nameuser']);
				unset($_SESSION['iduseradmin']);
				unset($_SESSION['iduserguest']);
				header('location: index.php');
				break;
				
        default:
				include "admin/QL_Product.php";
				break;
					}
				}else {
					include "admin/QL_Product.php";
				}
				
      	include "admin/footer.php";
?>