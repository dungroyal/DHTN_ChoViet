<?php
    ob_start();
    session_start();
    include "model/pdo.php";
    include "model/store.php";
    include "model/product.php";
    include "model/catalog.php";

    $productlist=productlist();
    $cataloglist=cataloglist();
    



    include"view/header.php";

    if (isset($_GET['act'])) {
        $act = $_GET['act'];
        switch ($act) {
            case 'home':
                include"view/home.php";
                break;

            case 'product':
                if (isset($_GET['idStore']) && $_GET['idStore']) {
                    $idStore=$_GET['idStore'];
                    $store_by_id= store_by_id($idStore);
                }
                
                if (isset($_GET['idCatalog']) && $_GET['idCatalog']) {
                    $idCatalog=$_GET['idCatalog'];
                }


                $showproduct=productlist_by_id();

                $catalog_by_store=catalog_by_store($idStore);

                $GET_catalog_one=GET_catalog_one($idStore);
                
                $productlist_by_catalog=productlist_by_catalog($GET_catalog_one['id']);

                include"view/product.php";
                break;




            case 'product_detail':
                if (isset($_GET['idProduct']) && $_GET['idProduct']) {
                    $idProduct=$_GET['idProduct'];
                }
                

                $product_detail_by_id=product_detail_by_id($idProduct);
                $GET_idStore=GET_idStore($product_detail_by_id['idCatalog']);
                $info_store= store_by_id( $GET_idStore['idStore']);

                include"view/product_detail.php";
                break;

            case 'contact':
                include"view/contact.php";
                break;

            case 'cart':
                include"view/cart.php";
                break;


            case 'about':
                include"view/about.php";
                break;

            case 'dangkithanhvien':
                include"view/dangkithanhvien.php";
                break;
               
            case 'login':
                include"view/login.php";
                break;

            default:
                include"view/home.php";
                break;

            
        }
    }else{
            include"view/home.php";
    }
    include"view/footer.php";
?>