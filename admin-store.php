<?php
    ob_start();
    session_start();
    include "model/pdo.php";
    include "model/tool.php";
    include "model/catalog.php";
    include "model/product.php";
	include "model/user.php";
	include "model/store.php";

    if (!isset($_SESSION['idstore'])) {
        header('location:login.php');
	}

	$cataloglist=cataloglist(); 
	$info_store_admin=info_store_admin($_SESSION['idstore']);
	$idStore=$info_store_admin['id'];
	
	$cataloglist_by_store=cataloglist_by_store($idStore);
	$producttlist_by_store=productlist_by_store($idStore);

	include "admin-store/header.php";
	
		if (isset($_GET['act'])) {
			$act=$_GET['act'];
			switch ($act) {
				case 'QL_Catalog':
					if (isset($_POST['add_catalog']) && $_POST['add_catalog']) {
						$namecatalog=get_catalog_name($_POST['idcatalog']);
						$name=$namecatalog['name'];
						$idcatalog=$_POST['idcatalog'];

						if ($_FILES['image']['name']!="") {         
							$image2= basename($_FILES['image']['name']);
							$target_file ="uploads/". $image2;
							move_uploaded_file($_FILES['image']['tmp_name'], $target_file);}

							catalog_store_insert($name,$image2,$idStore,$idcatalog);
						header('location: admin-store.php?act=QL_Catalog'); 
					}
					
					if (isset($_POST['update_catalog']) && $_POST['update_catalog']) {
						$id1=$_POST['id'];
						$name2=$_POST['name'];

						if ($_FILES['image']['name']!="") {                            
							$image2= basename($_FILES['image']['name']);
							$target_file ="uploads/". $image2;
							move_uploaded_file($_FILES['image']['tmp_name'], $target_file);}

						catalog_update($name2,$image2,$id1);
						header('location: admin-store.php?act=QL_Catalog');
					}

			if (isset($_GET['del']) && ($_GET['del']==1) ) {
				$id=$_GET['id'];
                catalog_delete($id);
                header('location: admin-store.php?act=QL_Catalog');
            }
            include "admin-store/QL_Catalog.php";
			break;		

        case 'QL_Product':
            if (isset($_POST['store_add_product']) && $_POST['store_add_product']) {
				$name=$_POST['name'];
				$title=$_POST['title'];
				$specifications=$_POST['specifications'];
				$package=$_POST['package'];
				$warranty=$_POST['warranty'];
				$price=$_POST['price'];
				$specialprice=$_POST['specialprice'];
				$soluong=$_POST['soluong'];
				$productstatus=$_POST['product_status'];
				$status=$_POST['status'];
				$idCatalog=$_POST['idcatalog'];
				if ($_FILES['image']['name']!="") {                            
					$image= basename($_FILES['image']['name']);
					$target_file ="uploads/". $image;
					move_uploaded_file($_FILES['image']['tmp_name'], $target_file);
				}

				product_insert($name,$title,$specifications,$package,$warranty,$price,$specialprice,$soluong,$productstatus,$image,$status,$idCatalog,$idStore);
				header('location: admin-store.php?act=QL_Product'); 
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
				header('location: admin-store.php?act=QL_Product');
			}
			
            if (isset($_GET['del']) && ($_GET['del']==1) ) {
                $id=$_GET['id'];
                product_delete($id);
                header('location: admin-store.php?act=QL_Product');
			}
				include "admin-store/QL_Product.php";
				break;

		case 'QL_Comment':		
				$commentlist_store=commentlist_store($idStore);
				include "admin-store/QL_Comment.php";
				break;

		case 'QL_Cart':
				include "admin-store/QL_Cart.php";
				break;

		case 'QL_Store':
				include "admin-store/QL_Store.php";
				break;

		case 'logout_admin':
				unset($_SESSION['idstore']);
				header('location: admin-store.php');
				break;
				
        default:
				include "admin-store/home.php";
				break;
					}
				}else {
					include "admin-store/home.php";
				}
				
      	include "admin-store/footer.php";
?>