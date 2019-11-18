<?php
    ob_start();
    session_start();
    include "../model/pdo.php";
    include "../model/tool.php";
    include "../model/catalog.php";
    include "../model/product.php";
	include "../model/user.php";
	
    $cataloglist_by_store=cataloglist_by_store();
	$producttlist=productlist();

    if (!isset($_SESSION['iduseradmin'])) {
        header('location:login.php');
	}
	
	include "header.php";
	
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
            include "QL_Catalog.php";
			break;		

        case 'QL_Product':
            if (isset($_POST['add_product']) && $_POST['add_product']) {
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
            }
				include "QL_Product.php";
				break;

		case 'QL_Comment':		
				$list_comment=commentlist();
				include "QL_Comment.php";
				break;

		case 'QL_Cart':
				include "QL_Cart.php";
				break;

		case 'logout_admin':
				unset($_SESSION['nameuser']);
				unset($_SESSION['iduseradmin']);
				unset($_SESSION['iduserguest']);
				header('location: admin.php');
				break;
				
        default:
				include "home.php";
				break;
					}
				}else {
					include "home.php";
				}
				
      	include "footer.php";
?>